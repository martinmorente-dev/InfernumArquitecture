<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Genre;
use App\Models\ImageGame;
use App\Models\Discount;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Game extends Model
{
    protected $fillable = [
        'name',
        'short_description',
        'long_description',
        'price',
        'discount_id'
    ];


    public $timestamps = false;

    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class, 'games_genres');
    }

    public function images(): HasMany
    {
        return $this->hasMany(ImageGame::class);
    }

    public function requirements(): HasMany
    {
        return $this->hasMany(Requirement::class);
    }

    public function discounts(): BelongsTo
    {
        return $this->belongsTo(Discount::class);
    }

    public function activeDiscounts(): BelongsTo
    {
        return $this->belongsTo(Discount::class)->active();
    }

}
