<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function games(): BelongsTo
    {
        return $this->belongsTo(Game::class);
    }

}
