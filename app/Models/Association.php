<?php

namespace App\Models;

use App\Models\User;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Association extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'type',
        'origine',
        'domaine',
        'description',

        'president',
        'emailPresident',
        'cinPresident',

        'vicePresident',
        'emailVice',
        'cinVice',

        'secretaire',
        'emailSecretaire',
        'cinSecretaire',

        'secretaireAdjoint',
        'emailSecretaireAdjoint',
        'cinSecretaireAdjoint',

        'tresorier',
        'emailTresorier',
        'cinTresorier',

        'tresorierAdjoint',
        'emailTresorierAdjoint',
        'cinTresorierAdjoint',

        'conseiller1',
        'emailConseiller1',
        'cinConseiller1',

        'conseiller2',
        'emailConseiller2',
        'cinConseiller2',

        'conseiller3',
        'emailConseiller3',
        'cinConseiller3',

        'conseiller4',
        'emailConseiller4',
        'cinConseiller4',

        'conseiller5',
        'emailConseiller5',
        'cinConseiller5',

        'conseiller6',
        'emailConseiller6',
        'cinConseiller6',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
    
    public function articleBlogs()
    {
        return $this->hasMany(ArticleBlog::class);
    }
}
