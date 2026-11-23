<?php

namespace Database\Seeders;

class DarkSeeder extends SeriesSeederBase
{
    public function run(): void
    {
        $this->createSeriesFromArray([
            'title'        => 'Dark',
            'slug'         => 'dark',
            'status'       => 'ended',
            'release_year' => 2017,
            'synopsis'     => 'A missing child sets four families on a frantic hunt for answers as they unearth a mind-bending mystery that spans three generations.',
            'seasons'      => [
                [
                    'season_number' => 1,
                    'title'         => 'Season 1',
                    'air_date'      => '2017-12-01',
                    'episodes'      => [
                        [1, 'Secrets', '2017-12-01', 51, 'A child goes missing in the small German town of Winden, shaking four interconnected families.'],
                        [2, 'Lies', '2017-12-01', 45, 'A grim discovery in the caves raises new questions about Winden’s past.'],
                        [3, 'Past and Present', '2017-12-01', 46, 'Events from 1986 begin to mirror the present-day disappearances.'],
                        [4, 'Double Lives', '2017-12-01', 46, 'Hidden affairs and secrets surface across the families of Winden.'],
                        [5, 'Truths', '2017-12-01', 44, 'Jonas receives a mysterious package and crosses paths with a stranger.'],
                        [6, 'Sic Mundus Creatus Est', '2017-12-01', 51, 'Ulrich looks into the past while Jonas explores the caves.'],
                        [7, 'Crossroads', '2017-12-01', 52, 'Ulrich makes a fateful decision after uncovering a crucial lead.'],
                        [8, 'As You Sow, So Shall You Reap', '2017-12-01', 46, 'Actions in 1953 set off consequences that echo across decades.'],
                        [9, 'Everything Is Now', '2017-12-01', 53, 'Family ties and hidden agendas come into sharp focus.'],
                        [10, 'Alpha and Omega', '2017-12-01', 59, 'The cycle closes with a shocking revelation across timelines.'],
                    ],
                ],
                [
                    'season_number' => 2,
                    'title'         => 'Season 2',
                    'air_date'      => '2019-06-21',
                    'episodes'      => [
                        [1, 'Beginnings and Endings', '2019-06-21', 54, 'Six months after the disappearances, Jonas finds himself trapped in the future.'],
                        [2, 'Dark Matter', '2019-06-21', 52, 'Clausen and Charlotte investigate the power plant’s secrets.'],
                        [3, 'Ghosts', '2019-06-21', 53, 'Characters confront older and younger versions of themselves.'],
                        [4, 'The Travelers', '2019-06-21', 59, 'Jonas meets Adam and learns the true nature of the time loop.'],
                        [5, 'Lost and Found', '2019-06-21', 53, 'Old secrets resurface as the apocalypse draws closer.'],
                        [6, 'An Endless Cycle', '2019-06-21', 55, 'Jonas travels back to 2019 in an attempt to change the past.'],
                        [7, 'The White Devil', '2019-06-21', 57, 'Martha learns the truth about Jonas as critical choices collide.'],
                        [8, 'Endings and Beginnings', '2019-06-21', 60, 'The apocalypse strikes Winden as a new world is revealed.'],
                    ],
                ],
                [
                    'season_number' => 3,
                    'title'         => 'Season 3',
                    'air_date'      => '2020-06-27',
                    'episodes'      => [
                        [1, 'Deja-vu', '2020-06-27', 58, 'Jonas wakes up in a parallel world where Winden feels strangely familiar yet different.'],
                        [2, 'The Survivors', '2020-06-27', 54, 'Survivors in the post-apocalyptic world struggle to piece together what happened.'],
                        [3, 'Adam and Eva', '2020-06-27', 57, 'Charlotte and Ulrich seek answers while Eva reveals her plan to Martha.'],
                        [4, 'The Origin', '2020-06-27', 55, 'Martha and Jonas travel to 2052 and uncover the origin of the knot.'],
                        [5, 'Life and Death', '2020-06-27', 58, 'Claudia and Jonas make painful discoveries about both worlds.'],
                        [6, 'Light and Shadow', '2020-06-27', 54, 'Adam traps Martha while Eva sends her followers to preserve the loop.'],
                        [7, 'Between the Time', '2020-06-27', 61, 'Events across all eras converge toward the final confrontation.'],
                        [8, 'The Paradise', '2020-06-27', 73, 'Claudia reveals how to untie the knot once and for all.'],
                    ],
                ],
            ],
        ]);
    }
}
