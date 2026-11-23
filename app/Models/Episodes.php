<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Episodes extends Model
{
    /** @use HasFactory<\Database\Factories\EpisodesFactory> */
    use HasFactory;

    protected $fillable = [
        'season_id', 'series_id', 'episode_number', 'title',
        'duration_minutes', 'air_date', 'synopsis',
    ];

    public function season(): BelongsTo
    {
        return $this->belongsTo(Seasons::class, 'season_id');
    }

    public function series(): BelongsTo
    {
        return $this->belongsTo(Series::class);
    }
}
