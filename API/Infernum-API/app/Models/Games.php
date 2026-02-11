<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Genres;
use App\Models\ImageGames;
use App\Models\OperativeSystems;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Games extends Model
{
    protected $fillable = [
        'name',
        'short_description',
        'long_description',
        'price'
    ];


    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genres::class);
    }


    public function images(): HasMany
    {
        $this->hasMany(ImageGames::class);
    }


    public function oprativeSystems(): BelongsToMany
    {
        return $this->belongsToMany(OperativeSystems::class)
            ->as('requirements')
            ->withPivot(['type', 'cpu', 'ram', 'gpu', 'storage']);
    }
}
