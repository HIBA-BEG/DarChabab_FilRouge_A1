<?php

namespace App\Models;

use App\Models\Activite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'startTime',
        'endTime',
        'association_id',
        'activite_id',
        'salle_id',
    ];

    public function activite()
    {
        return $this->belongsTo(Activite::class);
    }

    public function association()
    {
        return $this->belongsTo(Association::class, 'association_id');
    }


}
