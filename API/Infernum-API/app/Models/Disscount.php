<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Disscount extends Model
{
    protected $fillable = [
        'name',
        'percentage',
        'valid_at',
        'expires_at',
        'active'
    ];

    public $timestamps = false;

    public function games(): BelongsToMany
    {
        return $this->belongsToMany(Game::class, 'games_disscounts');
    }

}
