<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, HasApiTokens;

    protected $table = 'users';

    const UPDATED_AT = null;

    protected $fillable = [
        'nickname',
        'email',
        'password',
        'role'
    ];

    protected $hidden = [
        'password',
        'create_at'
    ];

    // TODO: N:M rellation between Users and Libraries
}
