<?php

namespace App\Http\Controllers;

use App\Models\ArticleBlog;
use App\Models\User;
use App\Models\Association;
use App\Models\Activite;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;





class ArticleBlogController extends Controller
{

    public function welcome(Request $request)
    {
        $articles = ArticleBlog::orderBy('created_at', 'desc')->get();
        $totalArticlesPublished = ArticleBlog::count();
        $userCount = User::where('role', '!=', 'admin')->count();
        $verifiedAssociationCount = Association::count();
        $totalActivites = Activite::count();
        return view('home', compact('articles', 'totalArticlesPublished', 'userCount', 'totalActivites'));
    }

    public function blogView(Request $request)
    {
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $articles = ArticleBlog::where('title', 'like', '%' . $searchTerm . '%')
                ->orderBy('created_at', 'desc')
                ->with('categorie', 'user')
                ->paginate(9);

            return response()->json(['articles' => $articles]);
        } else {
            $user = auth()->user();
            $association = DB::table('users')
                ->join('associations', 'associations.user_id', '=', 'users.id')
                ->where('banned', 0)
                ->first();
            $categories = Categorie::all();
            $articles = ArticleBlog::orderBy('created_at', 'desc')
                ->with('categorie', 'user')
                ->paginate(9);

            return view('blog.accueil', compact('articles', 'categories', 'association', 'user'));
        }
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

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'categorie_id' => 'exists:categories,id',
        ]);
  // dd($validatedData);
       
            $article = ArticleBlog::findOrFail($id);

            if ($request->hasFile('picture')) {
                $profilePicture = $request->file('picture');
                $fileName = time() . '_' . $profilePicture->getClientOriginalName();
                $filePath = $profilePicture->storeAs('uploads', $fileName, 'public');
                $profilePicturePath = '/storage/' . $filePath;
    
                $article->update([
                    'picture' => $profilePicturePath,
                ]);
            }
    
          $article->update([
                'title' => $validatedData['title'],
                'description' => $validatedData['description'],
                'categorie_id' => $validatedData['categorie_id'],
            ]);

           
    
            return redirect()->back()->with('success', 'Article blog updated successfully.');
        
    }

    public function delete(ArticleBlog $article)
    {
        $article->delete();
        return redirect()->back()->with('success', 'Article supprimé.');
    }
}
