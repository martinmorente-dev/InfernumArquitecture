<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ImageGames extends Model
{
    protected $fillable = [
        'url',
        'type'
    ];


    public function games(): BelongsTo
    {
        $this->belongsTo(Games::class, 'game_id');
    }
}
