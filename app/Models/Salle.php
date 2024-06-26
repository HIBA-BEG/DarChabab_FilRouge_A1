<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'profile_picture',
        'capacite',
        'description',
    ];


    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

}
