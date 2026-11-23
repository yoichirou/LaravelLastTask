<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Seasons extends Model
{
    /** @use HasFactory<\Database\Factories\SeasonsFactory> */
    use HasFactory;

    protected $fillable = [
        'series_id', 'season_number', 'title', 'air_date',
    ];

    public function series(): BelongsTo
    {
        return $this->belongsTo(Series::class);
    }

    public function episodes(): HasMany
    {
        return $this->hasMany(Episodes::class, 'season_id')->orderBy('episode_number');
    }
}
