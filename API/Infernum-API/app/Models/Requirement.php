<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Game;

class Requirement extends Model
{
    protected $fillable = [
        'type',
        'os',
        'cpu',
        'ram',
        'gpu',
        'storage'
    ];

    public $timestamps = false;

    public function games(): BelongsToMany
    {
        return $this->belongsToMany(Game::class, 'games_requirements');
    }
}
