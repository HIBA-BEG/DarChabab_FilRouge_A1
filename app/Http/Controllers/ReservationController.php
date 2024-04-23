<?php

namespace App\Http\Controllers;

use App\Models\Salle;
use App\Models\Activite;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function createReservation()
    {
        $user = Auth::id();
        $salles = Salle::all();
        $reservations = Reservation::where('association_id', $user)
            ->join('salles', "reservations.salle_id", "=", "salles.id")
            ->join('associations', "reservations.association_id", "=", "associations.id")
            ->join('users', "associations.user_id", "=", "users.id")
            ->orderby('created_at', 'desc')
            ->paginate(9);

        return view('association.reservations', compact('salles'), compact('reservations'));
    }
    public function store(Request $request)
    {
        // dd($request->all());

        $validatedData = $request->validate([
            'salle_id' => 'required|exists:salles,id',
            'activite_id' => 'required_without:activite_name|exists:activites,id',
            'activite_name' => 'required_without:activite_id|nullable|string|max:255',
            'activite_description' => 'required_with:activite_name|nullable|string',
            'startTime' => 'required|date_format:Y-m-d\TH:i',
            'endTime' => 'required|date_format:Y-m-d\TH:i|after:startTime',
        ]);

        $association = Auth::user()->association;

        // dd($association);

        if ($request->has('activite_name')) {
            $activite = Activite::create([
                'name' => $validatedData['activite_name'],
                'description' => $validatedData['activite_description'],
            ]);

            $validatedData['activite_id'] = $activite->id;
        }
        $reservation = $association->reservations()->create([
            'salle_id' => $validatedData['salle_id'],
            'activite_id' => $validatedData['activite_id'],
            'startTime' => $validatedData['startTime'],
            'endTime' => $validatedData['endTime'],
        ]);

        $salles = Salle::all();


        return redirect()->back()->with(compact('salles'))->with('success', 'Réservation crée avec succès.');
    }
}
