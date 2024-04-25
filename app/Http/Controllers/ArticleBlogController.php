<?php

namespace App\Http\Controllers;

use App\Models\ArticleBlog;
use App\Models\Categorie;
use App\Models\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ArticleBlogController extends Controller
{

    

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'pictures.*' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'categoryID' => ['required', 'exists:categories,id'],
        ]);

        $user = auth()->user();
        $articleBlog = ArticleBlog::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'user_id' => $user->id,
            'categorie_id' => 1, // Replace with the appropriate category ID
        ]);

        $categories = Categorie::all();

        if ($request->hasFile('pictures')) {
            foreach ($request->file('pictures') as $picture) {
                $picturePath = $picture->store('public/pictures');
                Picture::create([
                    'article_blog_id' => $articleBlog->id,
                    'picture_path' => $picturePath,
                ]);
            }
        }

        return redirect()->route('article-blogs.index')->with('success', 'Article blog created successfully.');
    }
    public function blogView()
    {
        $articles = ArticleBlog::all();
        return view('blog.accueil', compact('articles'));
    }
}
