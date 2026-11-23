<?php

namespace Database\Seeders;

class ChernobylSeeder extends SeriesSeederBase
{
    public function run(): void
    {
        $this->createSeriesFromArray([
            'title'        => 'Chernobyl',
            'slug'         => 'chernobyl',
            'status'       => 'ended',
            'release_year' => 2019,
            'synopsis'     => 'Dramatization of the 1986 Chernobyl nuclear disaster in Soviet Ukraine and the unprecedented cleanup efforts that followed.',
            'seasons'      => [
                [
                    'season_number' => 1,
                    'title'         => 'Season 1',
                    'air_date'      => '2019-05-06',
                    'episodes'      => [
                        [1, '1:23:45', '2019-05-06', 61, 'Plant workers and firefighters risk their lives to control a catastrophic explosion at the Chernobyl nuclear power plant.'],
                        [2, 'Please Remain Calm', '2019-05-13', 66, 'Nuclear physicist Ulana Khomyuk joins Valery Legasov and Boris Shcherbina to contain the spreading radiation.'],
                        [3, 'Open Wide, O Earth', '2019-05-20', 63, 'Legasov and Shcherbina recruit coal miners to prevent a meltdown from contaminating the groundwater.'],
                        [4, 'The Happiness of All Mankind', '2019-05-27', 66, 'Liquidation crews clear radioactive debris from the roof while Khomyuk investigates the cause of the explosion.'],
                        [5, 'Vichnaya Pamyat', '2019-06-03', 72, 'Legasov, Shcherbina, and Khomyuk risk everything to expose the truth during the Soviet trial.'],
                    ],
                ],
            ],
        ]);
    }
}
