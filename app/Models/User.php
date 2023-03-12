<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Role;
use Illuminate\Contracts\Auth\Authenticatable;

/**
 * @property integer $id
 * @property integer $role_id
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property string $created_at
 * @property string $updated_at
 * @property Role $role
 */
class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
    /**
     * @var array
     */
    protected $fillable = ['role_id', 'email', 'password', 'remember_token', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo(role::class);
    }
}
