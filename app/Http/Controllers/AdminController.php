<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Activite;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }
    // public function allAssociations()
    // {
    //     return view('admin.allAssociations');
    // }

    public function allAssociations()
    {
        // $users = User::where('role', '<>', 'Admin')->get();
        $associations = DB::table('users')
            ->join('associations', "associations.user_id", "=", "users.id")
            ->get();
        return view('admin.allAssociations', compact('associations'));
    }
    public function allAccounts()
    {
        $allusers = DB::table('users')
            ->where('role', '!=', 'admin')
            ->where('confirmed', 0)
            ->get();
        return view('admin.confirmAccounts', compact('allusers'));
    }
    public function statistics()
    {
        $associationCount = User::where('role', 'Association')->count();
        $clubCount = User::where('role', 'Club')->count();
        $totalActivites = Activite::count();
        $mostReservedActivites = Activite::select('title')
            ->withCount('reservations')
            ->orderBy('reservations_count', 'desc')
            ->value('title');
        // $mostActiveOrganisateur = User::select('name')
        //     ->where('role', 'Organizer')
        //     ->withCount('events')
        //     ->orderBy('events_count', 'desc')
        //     ->value('name');

        // $mostActiveClient = User::select('name')
        //     ->where('role', 'Client')
        //     ->withCount('reservations')
        //     ->orderBy('reservations_count', 'desc')
        //     ->value('name');
        // $eventWithMostReservations = Event::select('title')
        //     ->withCount('reservations')
        //     ->orderBy('reservations_count', 'desc')
        //     ->value('title');
        // $mostUsedCategory = Category::select('title')
        //     ->withCount('events')
        //     ->orderBy('events_count', 'desc')
        //     ->value('title');
        return view('admin.home', compact('associationCount', 'clubCount', 'totalActivites', 'mostReservedActivites', 'mostActiveOrganisateur', 'mostActiveClient'));
    }

    public function updateConfirmed(Request $request, $id)
    {
        $request->validate([
            'confirmed' => 'required|boolean',
        ]);
        $user = User::findOrFail($id);
            $user->confirmed = $request->input('confirmed');
            $user->save();
            return redirect()->route('confirmAccount')->with('success', 'Le compte a été confirmé avec succès.');
        
    }

}
