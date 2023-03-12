<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Departement;

/**
 * @property integer $id
 * @property integer $departement_id
 * @property string $nom
 * @property string $prenom
 * @property string $cin
 * @property string $adresse
 * @property string $dateInscription
 * @property string $tel
 * @property string $gender
 * @property string $dateNaissance
 * @property string $image
 * @property integer $user_id
 * @property Departement $departement
 */
class Prof extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['departement_id', 'nom', 'prenom', 'cin', 'adresse', 'dateInscription', 'tel', 'gender', 'dateNaissance', 'image', 'user_id'];
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function departement()
    {
        return $this->belongsTo(departement::class);
    }

    public function user(){
        return $this->belongsTo(user::class);
    }
}
