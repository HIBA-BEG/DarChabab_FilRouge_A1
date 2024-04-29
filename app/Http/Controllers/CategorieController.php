<?php

namespace App\Http\Controllers;

use App\Models\Categorie;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CategorieController extends Controller
{
    public function view()
    {
        $categories = Categorie::all();
        return view('admin.categories', compact('categories'));
    }
    public function create(Request $request)
    {
        try {
            $request->validate([
                'title' => ['required', 'string', 'max:255'],
            ]);

            Categorie::create([
                'title' => $request->title,

            ]);
            return redirect()->route('admin.categories');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function update(Request $request)
    {
        try {
            $request->validate([
                'title' => ['required', 'string', 'max:255'],
            ]);
            $categorie  = Categorie::findOrFail($request->categorieID);

            $categorie->update([
                'title' => $request->title,
            ]);

            return redirect()->route('admin.categories', compact('categorie'));
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function delete(Categorie $categorie)
    {
        $categorie->delete();
        return redirect()->route('admin.categories');
    }
}
