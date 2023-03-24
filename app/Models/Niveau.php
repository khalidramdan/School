<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    use HasFactory;
    protected $table = 'niveaux';
    public $timestamps = false;
    protected $fillable = ['nom','niveau_id','filiere_id'];

    public function classes(){
        return $this->hasMany(Classe::class);
    }
}
