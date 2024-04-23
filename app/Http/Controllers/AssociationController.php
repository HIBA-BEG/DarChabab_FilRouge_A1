<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AssociationController extends Controller
{
        public function index(){
            return view('association.home');
        }
    public function activites(){
        $activites = DB::table('activites')
        ->get();
        return view('association.mesActivites', compact('activites'));
    }

}
