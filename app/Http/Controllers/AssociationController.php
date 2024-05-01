<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AssociationController extends Controller
{
    public function index()
    {
        return view('association.home');
    }
    public function activites()
    {
        // $activites = DB::table('activites')->get();
        $user = Auth::id();
        $activites = DB::table('reservations')
            ->join('activites', 'activites.id', '=', 'reservations.activite_id')
            ->where('reservations.user_id', $user)
            ->get();

        return view('association.mesActivites', compact('activites'));
    }
}
