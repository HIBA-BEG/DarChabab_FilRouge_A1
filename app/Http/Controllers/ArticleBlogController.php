<?php

namespace App\Http\Controllers;

use App\Models\ArticleBlog;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;





class ArticleBlogController extends Controller
{

    public function blogView(Request $request)
    {

        $categories = Categorie::all();
        $id = auth()->user()->id;
        $admin = DB::table('users')->where('users.id', $id)->first();
        $association = DB::table('users')
            ->join('associations', "associations.user_id", "=", "users.id")
            ->where('users.id', $id)
            ->where('banned', 0)
            ->first();

        $query = ArticleBlog::query();
        // $query->where('status', 'Approved');
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where('title', 'like', '%' . $searchTerm . '%');
        }
        $events = $query->orderBy('created_at', 'desc')->get();
        $articles = $query->orderBy('created_at', 'desc')->paginate(9);
        // echo '<pre>';
        // print_r($association);
        // echo '</pre>';
        // echo $association->email;
        // exit();
        return view('blog.accueil', compact('articles', 'admin', 'association', 'categories'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'picture' => 'required',
            'categorie_id' => ['required', 'exists:categories,id'],
        ]);

        // dd($validatedData);

        try {
            $profilePicturePath = null;

            if ($request->hasFile('picture')) {
                $profilePicture = $request->file('picture');
                $fileName = time() . '_' . $profilePicture->getClientOriginalName();
                $filePath = $profilePicture->storeAs('uploads', $fileName, 'public');
                $profilePicturePath = '/storage/' . $filePath;
            }
            $user = auth()->user();
            ArticleBlog::create([
                'title' => $validatedData['title'],
                'description' => $validatedData['description'],
                'picture' => $profilePicturePath,
                'categorie_id' => $validatedData['categorie_id'],
                'user_id' => $user['id'],
            ]);

            return redirect()->back()->with('success', 'Article blog created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to create article blog.');
        }
    }

    public function delete(ArticleBlog $article)
    {
        $article->delete();
        return redirect()->back()->with('success', 'Article supprimé.');
    }
}
