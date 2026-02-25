<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Discount extends Model
{
    protected $fillable = [
        'name',
        'percentage',
        'valid_at',
        'expires_at',
        'active'
    ];

    public $timestamps = false;

    public function games(): HasMany
    {
        return $this->hasMany(Game::class);
    }

    public function scopeActive($query)
    {
        return $query->where('active', true)
        ->where('valid_at', '<=', now())
        ->where('expires_at', '>=', now());
    }

}
