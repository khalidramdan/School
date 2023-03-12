<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Prof;

/**
 * @property integer $id
 * @property string $departement_nom
 * @property Prof[] $profs
 */
class Departement extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['departement_nom'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function profs()
    {
        return $this->hasMany(prof::class);
    }
}
