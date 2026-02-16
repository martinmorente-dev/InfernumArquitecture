<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Game;

class Genre extends Model
{
    protected $fillable = [
        'type',
        'principal'
    ];

    public $timestamps = false;

    public function games(): BelongsToMany
    {
        return $this->belongsToMany(Game::class, 'games_genres');
    }
}
