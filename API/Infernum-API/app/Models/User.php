<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'users';
    protected $primaryKey = 'userId';

    const UPDATED_AT = null;

    protected $fillable = [
        'nickname',
        'email',
        'password',
        'role'
    ];

    // TODO: N:M rellation between Users and Librarys
}
