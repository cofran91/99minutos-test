<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rol;
use App\Models\Order;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id',
        'rol_id',
        'name',
        'email',
        'password',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $hidden = [
        'password',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
     
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function setPasswordAttribute($password) {
        $this->attributes['password'] = app('hash')->make($password);
    }

    public function rol()
    {
        return $this->belongsTo( Rol::class );
    }

    public function orders()
    {
        return $this->hasMany( Order::class );
    }
}
