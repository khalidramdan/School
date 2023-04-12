<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        //
    ];

    protected $guarded = [
        'id'
    ];

    public function user()
    {
        return $this->belongsTo(user::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
