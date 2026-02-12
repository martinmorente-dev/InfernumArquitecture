<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Games;

class Requirements extends Model
{
    protected $fillable = [
        'type',
        'os',
        'cpu',
        'ram',
        'gpu',
        'storage'
    ];

    public function games(): BelongsToMany
    {
        return $this->belongsToMany(Games::class);
    }
}
