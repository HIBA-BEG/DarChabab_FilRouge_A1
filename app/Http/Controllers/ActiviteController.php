<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class ActiviteController extends Controller
{
    public function viewAll()
    {
        // $user = Auth::id();
        // $categories = Category::all();
        // $events = Event::orderby('created_at', 'desc')
        //     ->paginate(9);
        // // dd($events);
        // return view('admin.allActivites', compact('events'), compact('categories'));
    }
}
