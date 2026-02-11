<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Games;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class OperativeSystems extends Model
{
    protected $fillable = [
        'name'
    ];

    public function games(): BelongsToMany
    {
        return $this->belongsToMany(Games::class)
            ->as('requirements')
            ->withPivot(['type', 'cpu', 'ram', 'gpu', 'storage']);
    }
}
