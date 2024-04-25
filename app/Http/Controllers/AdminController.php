<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Activite;
use App\Models\ArticleBlog;

use App\Models\Association;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $associationCount = User::where('role', 'Association')->count();
        $associationNOTverified = User::where('role', 'Association')->where('confirmed', 0)->count();
        $userCount = User::where('role', '!=', 'admin')->count();
        $verifiedAssociationCount = Association::count();
        $clubCount = User::where('role', 'Club')->count();
        $totalActivites = Activite::count();
   
        $mostActiveAssociation = User::select('users.firstname', 'users.lastname')
            ->where('users.role', 'Association')
            ->with(['association' => function ($query) {
                $query->withCount('reservations')->orderByDesc('reservations_count');
            }])
            ->first(); // Use 'first' to get only one record

        // Check if a user is found before accessing its properties
        if ($mostActiveAssociation) {
            $firstname = $mostActiveAssociation->firstname;
            $lastname = $mostActiveAssociation->lastname;
            // Use $firstname and $lastname as needed...
        }

        $totalArticlesPublished = ArticleBlog::count();

        $nationaleCount = Association::where('type', 'Nationale')->count();
        $regionaleCount = Association::where('type', 'Régionale')->count();
        $localeCount = Association::where('type', 'Locale')->count();

        $archivedUserCount = User::where('archived', 1)
            ->where('role', '!=', 'admin')
            ->count();

        return view('admin.home', compact('associationCount', 'clubCount', 'totalActivites', 'verifiedAssociationCount', 'userCount', 'associationNOTverified', 'mostActiveAssociation', 'totalArticlesPublished', 'nationaleCount', 'regionaleCount', 'localeCount', 'archivedUserCount'));
    }

    public function allAssociations()
    {
        $associations = DB::table('users')
            ->join('associations', "associations.user_id", "=", "users.id")
            ->where('archived', 0)
            ->get();
        return view('admin.allAssociations', compact('associations'));
    }

    public function allArchivedAssociations()
    {
        $associations = DB::table('users')
            ->join('associations', "associations.user_id", "=", "users.id")
            ->where('archived', 1)
            ->get();
        return view('admin.allArchivedAssociations', compact('associations'));
    }

    public function allAccounts()
    {
        $allusers = DB::table('users')
            ->where('role', '!=', 'admin')
            ->where('confirmed', 0)
            ->get();
        return view('admin.confirmAccounts', compact('allusers'));
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
    
    // public function Ban(Request $request, $id)
    // {
    //     $request->validate([
    //         'confirmed' => 'required|boolean',
    //     ]);
    //     $user = User::findOrFail($id);
    //     $user->confirmed = $request->input('confirmed');
    //     $user->save();
    //     return redirect()->route('confirmAccount')->with('success', 'Le compte a été confirmé avec succès.');
    // }

    public function banAssociation($userId)
    {
        $user = User::find($userId);

        if ($user) {
            $user->update(['banned' => true]);
            if (auth()->check() && auth()->user()->id == $userId) {
                auth()->logout();
                return redirect()->route('login')->with('banned_message', 'You are banned from logging in.');
            }

            return redirect()->route('Associations')->with('success', 'User has been banned.');
        }

        return redirect()->route('Associations')->with('error', 'User not found.');
    }

    public function unbanAssociation($userId)
    {
        $user = User::find($userId);
        if ($user) {
            $user->update(['banned' => false]);
            return redirect()->route('Associations')->with('success', 'User unbanned successfully.');
        }
        return redirect()->route('Associations')->with('error', 'User not found.');
    }

    public function ArchiveAssociation($userId)
    {
        $user = User::find($userId);

        if ($user) {
            $user->update(['archived' => true]);
            if (auth()->check() && auth()->user()->id == $userId) {
                auth()->logout();
                return redirect()->route('login')->with('banned_message', 'Votre association n est plus valable.');
            }

            return redirect()->route('Associations')->with('success', 'User has been Archived.');
        }

        return redirect()->route('Associations')->with('error', 'User not found.');
    }

    public function unArchiveAssociation($userId)
    {
        $user = User::find($userId);
        if ($user) {
            $user->update(['archived' => false]);
            return redirect()->route('Associations')->with('success', 'User unbanned successfully.');
        }
        return redirect()->route('Associations')->with('error', 'User not found.');
    }

}
