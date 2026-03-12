<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Game;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function games(): BelongsTo
    {
        return $this->belongsTo(Game::class);
    }
}
