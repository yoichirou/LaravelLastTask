<?php

namespace Database\Seeders;

use App\Models\Series;
use Illuminate\Database\Seeder;

abstract class SeriesSeederBase extends Seeder
{
    /**
     * Estrutura esperada de $data:
     * [
     *   'title' => '...',
     *   'slug' => '...',
     *   'status' => 'ended' | 'ongoing' | ...,
     *   'release_year' => 2020,
     *   'synopsis' => '...',
     *   'seasons' => [
     *     [
     *       'season_number' => 1,
     *       'title' => 'Season 1',
     *       'air_date' => '2020-01-01',
     *       'episodes' => [
     *         [ep_num, titulo, data, duracao_min, sinopse],
     *       ],
     *     ],
     *   ],
     * ]
     */
    protected function createSeriesFromArray(array $data): Series
    {
        $series = Series::firstOrCreate(
            ['slug' => $data['slug']],
            [
                'title'        => $data['title'],
                'status'       => $data['status'],
                'release_year' => $data['release_year'] ?? null,
                'synopsis'     => $data['synopsis'] ?? null,
            ]
        );

        foreach ($data['seasons'] ?? [] as $seasonData) {
            $season = $series->seasons()->firstOrCreate(
                ['season_number' => $seasonData['season_number']],
                [
                    'title'    => $seasonData['title'] ?? 'Season ' . $seasonData['season_number'],
                    'air_date' => $seasonData['air_date'] ?? null,
                ]
            );

            foreach ($seasonData['episodes'] ?? [] as [$epNum, $title, $airDate, $duration, $synopsis]) {
                $season->episodes()->firstOrCreate(
                    ['episode_number' => $epNum],
                    [
                        'series_id'        => $series->id,
                        'title'            => $title,
                        'air_date'         => $airDate,
                        'duration_minutes' => $duration,
                        'synopsis'         => $synopsis,
                    ]
                );
            }
        }

        return $series;
    }
}
