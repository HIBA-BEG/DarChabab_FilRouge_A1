<?php

namespace App\Http\Controllers;

use App\Models\Salle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalleController extends Controller
{
    public function createSalle()
    {
        $salles = DB::table('salles')
            ->get();
        return view('admin.salles', compact('salles'));
    }
    public function allSalles()
    {
        // $users = User::where('role', '<>', 'Admin')->get();
        $salles = DB::table('salles')->get();
        return view('association.home', compact('salles'));
    }

    public function create(Request $request)
    {
        try {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'profile_picture' => ['required'],
                'capacite' => ['required'],
                'description' => ['required', 'string', 'max:255'],
            ]);

            if ($request->hasFile('profile_picture')) {
                $image = request()->file('profile_picture');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('img'), $imageName);
            } else {
                $imageName = 'profile.png';
            }

            // $user = Auth::user();
            Salle::create([
                'name' => $request->name,
                'profile_picture' => $imageName,
                'capacite' => $request->capacite,
                'description' => $request->description,
            ]);
            return redirect()->route('admin.salles');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'profile_picture' => ['required'],
                'capacite' => ['required'],
                'description' => ['required', 'string', 'max:255'],
            ]);

            $salle = Salle::findOrFail($id);

            // Handle profile picture upload
            if ($request->hasFile('profile_picture')) {
                $image = $request->file('profile_picture');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('img'), $imageName);
                $salle->profile_picture = $imageName;
            }

            // Update salle data
            $salle->name = $request->name;
            $salle->capacite = $request->capacite;
            $salle->description = $request->description;
            $salle->save();

            return redirect()->route('admin.salles')->with('status', 'Salle Modifiée');
        } catch (\Exception $e) {
            return back()->withError($e->getMessage())->withInput();
        }
    }


    public function delete(Salle $salle)
    {
        $salle->delete();
        return redirect()->route('admin.salles');
    }
}
