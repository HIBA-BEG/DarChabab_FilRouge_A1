<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
