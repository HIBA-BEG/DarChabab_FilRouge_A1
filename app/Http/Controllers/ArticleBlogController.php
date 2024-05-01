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
            $categories = Categorie::all();
            $id = auth()->user()->id;
            $admin = DB::table('users')->where('users.id', $id)->first();
            $association = DB::table('users')
                ->join('associations', "associations.user_id", "=", "users.id")
                ->where('users.id', $id)
                ->where('banned', 0)
                ->first();

            $articles = ArticleBlog::orderBy('created_at', 'desc')
                ->with('categorie', 'user')
                ->paginate(9);

            return view('blog.accueil', compact('articles', 'admin', 'association', 'categories'));
        }
    }
    
    // public function search(Request $request)
    // {

    //     if ($request->ajax()) {

    //         $output = '';

    //         $articles = ArticleBlog::where('title', 'like', '%' . $request->search . '%')
    //             ->orderBy('created_at', 'desc')
    //             ->with('categorie', 'user')
    //             ->get();

    //         if ($articles) {

    //             foreach ($articles as $article) {

    //                 $output .=
    //                     '<div class="article card-body flex w-full flex-col justify-center rounded-br-3xl rounded-tl-3xl border border-opacity-25 bg-white bg-opacity-30 p-12 backdrop-blur-md backdrop-filter transition-all duration-300"
    //                 data-article-categorie="' . $article->categorie->id . '">
    //                 <!-- User Info with Three-Dot Menu -->
    //                 <div class="mb-4 flex items-center justify-between">


    //                     <div class="flex items-center space-x-2">
    //                         <img src="' . asset($article->user->profile_picture) . '" alt="User Avatar"
    //                             class="h-8 w-8 rounded-full" />
    //                         <div>
    //                             <p class="font-semibold text-gray-800">' . $article->user->firstname . ' ' . $article->user->lastname . '</p>
    //                         </div>
    //                     </div>
    //                     <div>
    //                         <div class="flex items-center space-x-2">
    //                             <p class="font-semibold text-gray-800">Category:</p>
    //                             <p class="text-sm text-gray-500">' . $article->categorie->title . '</p>
    //                         </div>
    //                         <div class="flex items-center space-x-2">
    //                             <p class="font-semibold text-gray-800">Title:</p>
    //                             <p class="text-sm text-gray-500">' . $article->title . '</p>
    //                         </div>
    //                     </div>
    //                 </div>
    //                 <!-- Message -->
    //                 <div class="mb-4 flex items-center space-x-2">
    //                     <p class="font-semibold text-gray-800"> Description:</p>
    //                     <p class="text-gray-800">
    //                         ' . $article->description . '
    //                     </p>
    //                 </div>

    //                 <div class="mb-4">
    //                     <img src="' . asset($article->picture) . '" alt="Post Image"
    //                         class="w-full object-cover rounded-lg">
    //                 </div>
    //                 <div class="flex items-center justify-between">
    //                     <div class="flex">
    //                         <p class="text-sm text-gray-500">Crée le ' . $article->created_at . '</p>
    //                     </div>
    //                     if (auth()->check() && $article->user_id == auth()->user()->id)
    //                         <div class="flex items-center justify-end gap-6">
    //                             <a href="#" title="Edit">
    //                                 <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16"
    //                                     viewBox="0 0 512 512">
    //                                     <path opacity="1" fill="#2766d3"
    //                                         d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z" />
    //                                 </svg>
    //                             </a>
    //                             <form action="' . route('deleteArticle', $article->id) . '" method="post">
    //                             ' . csrf_field() . '
    //                             ' . method_field('DELETE') . '
    //                                 <div title="delete">
    //                                     <button type="submit">
    //                                         <svg xmlns="http://www.w3.org/2000/svg" height="16"
    //                                             width="16" viewBox="0 0 448 512">
    //                                             <path fill="#e6321e"
    //                                                 d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" />
    //                                         </svg>
    //                                     </button>
    //                                 </div>
    //                             </form>
    //                         </div>
    //                     @endif
    //                 </div>
    //             </div>
    //               ';
    //             }

    //             return response()->json($output);
    //         }
    //     }

    //     return  view('blog.accueil', compact('articles', 'admin', 'association', 'categories'));
    // }


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
