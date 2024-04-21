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

            'vicePresident' => 'nullable|string',
            'emailVice' => 'nullable|string',
            'cinVice' => 'nullable|string',

            'secretaire' => 'required|string',
            'emailSecretaire' => 'required|string',
            'cinSecretaire' => 'required|string',

            'secretaireAdjoint' => 'nullable|string',
            'emailSecretaireAdjoint' => 'nullable|string',
            'cinSecretaireAdjoint' => 'nullable|string',

            'tresorier' => 'required|string',
            'emailTresorier' => 'required|string',
            'cinTresorier' => 'required|string',

            'tresorierAdjoint' => 'nullable|string',
            'emailTresorierAdjoint' => 'nullable|string',
            'cinTresorierAdjoint' => 'nullable|string',

            'conseiller1' => 'nullable|string',
            'emailConseiller1' => 'nullable|string',
            'cinConseiller1' => 'nullable|string',

            'conseiller2' => 'nullable|string',
            'emailConseiller2' => 'nullable|string',
            'cinConseiller2' => 'nullable|string',

            'conseiller3' => 'nullable|string',
            'emailConseiller3' => 'nullable|string',
            'cinConseiller3' => 'nullable|string',

            'conseiller4' => 'nullable|string',
            'emailConseiller4' => 'nullable|string',
            'cinConseiller4' => 'nullable|string',

            'conseiller5' => 'nullable|string',
            'emailConseiller5' => 'nullable|string',
            'cinConseiller5' => 'nullable|string',

            'conseiller6' => 'nullable|string',
            'emailConseiller6' => 'nullable|string',
            'cinConseiller6' => 'nullable|string',
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
