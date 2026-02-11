<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Games;

class Genres extends Model
{
    protected $fillable = [
        'type',
        'principal'
    ];


    public function games(): BelongsToMany
    {
        return $this->belongsToMany(Games::class);
    }
}
