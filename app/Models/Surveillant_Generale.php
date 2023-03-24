<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Surveillant_Generale extends Model
{
    use HasFactory;
    protected $fillable = ['id','user_id'];
    public $timestamps = false;
    protected $table = 'surveillant_generals';

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function classes(){
        return $this->hasMany(Classe::class);
    }
}
