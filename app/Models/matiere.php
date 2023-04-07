<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Prof;

class matiere extends Model
{
    use HasFactory;
    protected $table = 'matieres';
    protected $fallable = ['nom'];
    public function Profs(){
        return $this->hasMany(Prof::class);
    }
}
