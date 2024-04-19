<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Association;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;


class ProfileController extends Controller
{
    public function edit(Request $request): View
    {

        $user = Auth::user();

        if ($user->role == 'Association') {
            return view('profile.editAssociation', [
                'user' => $request->user(),
            ]);
        } else if ($user->role == 'Admin') {
            return view('profile.editAdmin', [
                'user' => $request->user(),
            ]);
        }

        return view('profile.editCandidate', [
            'user' => $request->user(),
        ]);
    }

    public function storeAssociationView()
    {
        return view('profile.CompleteAssociation');
    }

    public function ShowProfileAssociation()
    {

        $id = auth()->user()->id;
        $association = DB::table('users')
            ->join('associations', "associations.user_id", "=", "users.id")
            ->where('users.id', $id)
            ->get();
        // echo '<pre>';
        // print_r($association);
        // echo '</pre>';
        // echo $association->email;
        // exit();
        return view('profile.ShowProfileAssociation', ['association' => $association]);
    }

    public function storeAssociation(Request $request)
    {
        $request->validate([
            'type' => 'required|string',
            'origine' => 'required|string',
            'domaine' => 'required|string',
            'description' => 'required|string',

            'president' => 'required|string',
            'emailPresident' => 'required|string',
            'cinPresident' => 'required|string',

            'vicePresident' => 'string',
            'emailVice' => 'string',
            'cinVice' => 'string',

            'secretaire' => 'required|string',
            'emailSecretaire' => 'required|string',
            'cinSecretaire' => 'required|string',

            'secretaireAdjoint' => 'string',
            'emailSecretaireAdjoint' => 'string',
            'cinSecretaireAdjoint' => 'string',

            'tresorier' => 'required|string',
            'emailTresorier' => 'required|string',
            'cinTresorier' => 'required|string',

            'tresorierAdjoint' => 'string',
            'emailTresorierAdjoint' => 'string',
            'cinTresorierAdjoint' => 'string',

            'conseiller1' => 'required|string',
            'emailConseiller1' => 'required|string',
            'cinConseiller1' => 'required|string',

            'conseiller2' => 'string',
            'emailConseiller2' => 'string',
            'cinConseiller2' => 'string',

            'conseiller3' => 'string',
            'emailConseiller3' => 'string',
            'cinConseiller3' => 'string',

            'conseiller4' => 'string',
            'emailConseiller4' => 'string',
            'cinConseiller4' => 'string',

            'conseiller5' => 'string',
            'emailConseiller5' => 'string',
            'cinConseiller5' => 'string',

            'conseiller6' => 'string',
            'emailConseiller6' => 'string',
            'cinConseiller6' => 'string',

        ]);

        Association::create([
            'user_id' => auth()->user()->id,
            'type' => $request->type,
            'origine' => $request->origine,
            'domaine' => $request->domaine,
            'description' => $request->description,

            'president' => $request->president,
            'emailPresident' => $request->emailPresident,
            'cinPresident' => $request->cinPresident,

            'vicePresident' => $request->vicePresident,
            'emailVice' => $request->emailVice,
            'cinVice' => $request->cinVice,

            'secretaire' => $request->secretaire,
            'emailSecretaire' => $request->emailSecretaire,
            'cinSecretaire' => $request->cinSecretaire,

            'secretaireAdjoint' => $request->secretaireAdjoint,
            'emailSecretaireAdjoint' => $request->emailSecretaireAdjoint,
            'cinSecretaireAdjoint' => $request->cinSecretaireAdjoint,

            'tresorier' => $request->tresorier,
            'emailTresorier' => $request->emailTresorier,
            'cinTresorier' => $request->cinTresorier,

            'tresorierAdjoint' => $request->tresorierAdjoint,
            'emailTresorierAdjoint' => $request->emailTresorierAdjoint,
            'cinTresorierAdjoint' => $request->cinTresorierAdjoint,

            'conseiller1' => $request->conseiller1,
            'emailConseiller1' => $request->emailConseiller1,
            'cinConseiller1' => $request->cinConseiller1,

            'conseiller2' => $request->conseiller2,
            'emailConseiller2' => $request->emailConseiller2,
            'cinConseiller2' => $request->cinConseiller2,

            'conseiller3' => $request->conseiller3,
            'emailConseiller3' => $request->emailConseiller3,
            'cinConseiller3' => $request->cinConseiller3,

            'conseiller4' => $request->conseiller4,
            'emailConseiller4' => $request->emailConseiller4,
            'cinConseiller4' => $request->cinConseiller4,

            'conseiller5' => $request->conseiller5,
            'emailConseiller5' => $request->emailConseiller5,
            'cinConseiller5' => $request->cinConseiller5,

            'conseiller6' => $request->conseiller6,
            'emailConseiller6' => $request->emailConseiller6,
            'cinConseiller6' => $request->cinConseiller6,

        ]);

        return to_route('profile.ShowProfileAssociation');
    }

    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
