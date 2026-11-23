<?php

namespace Database\Seeders;

class SiloSeeder extends SeriesSeederBase
{
    public function run(): void
    {
        $this->createSeriesFromArray([
            'title'        => 'Silo',
            'slug'         => 'silo',
            'status'       => 'ongoing',
            'release_year' => 2023,
            'synopsis'     => 'In a ruined and toxic future, thousands live in a giant underground silo governed by strict regulations they believe are meant to protect them.',
            'seasons'      => [
                [
                    'season_number' => 1,
                    'title'         => 'Season 1',
                    'air_date'      => '2023-05-05',
                    'episodes'      => [
                        [1, 'Freedom Day', '2023-05-05', 49, 'Sheriff Holston Becker and his wife Allison begin to question the truth about the world outside.'],
                        [2, "Holston's Pick", '2023-05-12', 44, 'Engineer Juliette Nichols uncovers a troubling clue left behind by someone she trusted.'],
                        [3, 'Machines', '2023-05-19', 43, 'Juliette leads a dangerous repair mission on the silo’s main generator before accepting a new role.'],
                        [4, 'Truth', '2023-05-26', 40, 'Trying to prove herself as sheriff, Juliette investigates a suspicious death.'],
                        [5, "The Janitor's Boy", '2023-06-02', 45, 'Juliette clashes with Judicial while digging deeper into the silo’s hidden hierarchy.'],
                        [6, 'The Relic', '2023-06-09', 45, 'A forbidden artifact draws Juliette into a web of secrets.'],
                        [7, 'The Flamekeepers', '2023-06-16', 47, 'Bernard makes Juliette an offer as she learns of a secret group preserving lost history.'],
                        [8, 'Hanna', '2023-06-23', 42, 'New discoveries about her mother’s past push Juliette closer to the truth.'],
                        [9, 'The Getaway', '2023-06-30', 46, 'On the run from Judicial, Juliette races to unlock a mysterious hard drive.'],
                        [10, 'Outside', '2023-06-30', 48, 'Juliette is sent outside to clean and confronts the reality beyond the airlock.'],
                    ],
                ],
                [
                    'season_number' => 2,
                    'title'         => 'Season 2',
                    'air_date'      => '2024-11-15',
                    'episodes'      => [
                        [1, 'The Engineer', '2024-11-15', 46, 'Juliette explores a nearby abandoned silo in search of shelter and answers.'],
                        [2, 'Order', '2024-11-22', 45, 'Bernard struggles to keep Silo 18 from descending into rebellion after Juliette’s exit.'],
                        [3, 'Solo', '2024-11-29', 44, 'Juliette meets a mysterious survivor living alone in Silo 17.'],
                        [4, 'The Harmonics', '2024-12-06', 45, 'Unrest grows in Mechanical as Bernard tightens his grip on Silo 18.'],
                        [5, 'Descent', '2024-12-13', 44, 'Juliette tries to get Solo’s help while Lukas is assigned a secret decoding task.'],
                        [6, 'Barricades', '2024-12-20', 47, 'Bernard cuts off supplies to the lower levels, sparking an open standoff.'],
                        [7, 'The Dive', '2024-12-27', 43, 'Juliette risks a perilous underwater dive in Silo 17 to retrieve a suit.'],
                        [8, 'The Cinder', '2025-01-03', 46, 'Hidden histories and betrayals surface in both silos.'],
                        [9, 'The Safeguard', '2025-01-10', 45, 'Lukas uncovers a chilling protocol that threatens everyone in Silo 18.'],
                        [10, 'Into the Fire', '2025-01-17', 52, 'Rebellion erupts in Silo 18 as Juliette fights to make it back in time.'],
                    ],
                ],
                [
                    'season_number' => 3,
                    'title'         => 'Season 3',
                    'air_date'      => '2026-07-03',
                    'episodes'      => [
                        [1, 'Episode 3.1', '2026-07-03', 45, 'The aftermath of the Silo 18 uprising reshapes the struggle for survival.'],
                        [2, 'Episode 3.2', '2026-07-10', 45, 'New alliances form as the truth behind the silos begins to emerge.'],
                        [3, 'Episode 3.3', '2026-07-17', 45, 'Origins of the silo project come into sharper focus.'],
                        [4, 'Episode 3.4', '2026-07-24', 45, 'Tensions escalate as factions vie for control of the silo.'],
                        [5, 'Episode 3.5', '2026-07-31', 45, 'Hidden protocols put the residents in greater danger.'],
                        [6, 'Episode 3.6', '2026-08-07', 45, 'Crucial secrets from the founders are brought to light.'],
                        [7, 'Episode 3.7', '2026-08-14', 45, 'A daring plan tests the loyalty of key leaders.'],
                        [8, 'Episode 3.8', '2026-08-21', 45, 'Escalating crises force difficult compromises.'],
                        [9, 'Episode 3.9', '2026-08-28', 45, 'Preparations intensify ahead of a decisive confrontation.'],
                        [10, 'Episode 3.10', '2026-09-04', 48, 'The season concludes with a turning point for the future of the silos.'],
                    ],
                ],
            ],
        ]);
    }
}
