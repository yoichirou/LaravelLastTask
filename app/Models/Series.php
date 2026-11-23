<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Series extends Model
{
    /** @use HasFactory<\Database\Factories\SeriesFactory> */
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'status', 'synopsis', 'poster_url', 'release_year',
    ];

    public function seasons(): HasMany
    {
        return $this->hasMany(Seasons::class)->orderBy('season_number');
    }

    public function episodes(): HasMany
    {
        return $this->hasMany(Episodes::class);
    }
}
