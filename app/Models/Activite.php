<?php

namespace App\Models;

use App\Models\Association;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activite extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'association_id',
        'activite_id',
        'salle_id',
    ];

   
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
