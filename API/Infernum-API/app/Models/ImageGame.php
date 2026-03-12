<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Game;


class ImageGame extends Model
{
    protected $fillable = [
        'url',
        'type',
        'game_id'
    ];

    public $timestamps = false;

    public function games(): BelongsTo
    {
        return $this->belongsTo(Game::class, 'game_id');
    }
}
