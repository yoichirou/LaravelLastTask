<?php

namespace Database\Seeders;

class TheBearSeeder extends SeriesSeederBase
{
    public function run(): void
    {
        $this->createSeriesFromArray([
            'title'        => 'The Bear',
            'slug'         => 'the-bear',
            'status'       => 'ended',
            'release_year' => 2022,
            'synopsis'     => 'A young fine-dining chef returns home to Chicago to run his late brother’s struggling Italian beef sandwich shop.',
            'seasons'      => [
                [
                    'season_number' => 1,
                    'title'         => 'Season 1',
                    'air_date'      => '2022-06-23',
                    'episodes'      => [
                        [1, 'System', '2022-06-23', 31, 'Carmy attempts to overhaul his late brother’s chaotic Chicago sandwich shop.'],
                        [2, 'Hands', '2022-06-23', 28, 'A surprise health inspection exposes deep problems in the kitchen.'],
                        [3, 'Brigade', '2022-06-23', 27, 'Carmy introduces a strict French kitchen hierarchy, clashing with the staff.'],
                        [4, 'Dogs', '2022-06-23', 24, 'Carmy and Richie cater a chaotic neighborhood birthday party.'],
                        [5, 'Sheridan', '2022-06-23', 25, 'A kitchen breakdown forces the team to scramble during lunch rush.'],
                        [6, 'Ceres', '2022-06-23', 22, 'Sugar works through tax problems while Richie feels left behind.'],
                        [7, 'Review', '2022-06-23', 20, 'A glowing review triggers an overwhelming wave of pre-orders in real time.'],
                        [8, 'Braciole', '2022-06-23', 30, 'A startling discovery leads Carmy to make a bold decision about the shop’s future.'],
                    ],
                ],
                [
                    'season_number' => 2,
                    'title'         => 'Season 2',
                    'air_date'      => '2023-06-22',
                    'episodes'      => [
                        [1, 'Beef', '2023-06-22', 32, 'Carmy and Sydney map out an ambitious timeline to open their new restaurant.'],
                        [2, 'Pasta', '2023-06-22', 30, 'Renovations hit unexpected snags while Carmy reconnects with Claire.'],
                        [3, 'Sundae', '2023-06-22', 30, 'Sydney tours Chicago restaurants for menu inspiration while Carmy misses a tasting.'],
                        [4, 'Honeydew', '2023-06-22', 34, 'Marcus travels to Copenhagen to train under an acclaimed pastry chef.'],
                        [5, 'Pop', '2023-06-22', 32, 'Permit delays threaten the opening schedule as Carmy and Claire grow closer.'],
                        [6, 'Fishes', '2023-06-22', 66, 'A flashback to a volatile Berzatto family Christmas dinner reveals old wounds.'],
                        [7, 'Forks', '2023-06-22', 38, 'Richie stages at an elite fine-dining restaurant and discovers his purpose.'],
                        [8, 'Bolognese', '2023-06-22', 35, 'The team races to pass a crucial fire suppression test before opening.'],
                        [9, 'Omelette', '2023-06-22', 31, 'Final preparations unfold ahead of friends-and-family night.'],
                        [10, 'The Bear', '2023-06-22', 40, 'Opening night tests every member of the kitchen and dining room.'],
                    ],
                ],
                [
                    'season_number' => 3,
                    'title'         => 'Season 3',
                    'air_date'      => '2024-06-26',
                    'episodes'      => [
                        [1, 'Tomorrow', '2024-06-26', 37, 'Carmy reflects on his culinary past and drafts a demanding list of non-negotiables.'],
                        [2, 'Next', '2024-06-26', 35, 'Sydney weighs a partnership agreement as Carmy’s daily menu changes strain costs.'],
                        [3, 'Doors', '2024-06-26', 33, 'Weeks of relentless service push the staff to their limits.'],
                        [4, 'Violet', '2024-06-26', 33, 'Sydney receives an unexpected offer while Richie navigates co-parenting.'],
                        [5, 'Children', '2024-06-26', 33, 'The team prepares for a critical photo shoot amid mounting financial pressure.'],
                        [6, 'Napkins', '2024-06-26', 33, 'A look back at how Tina found her way to The Original Beef.'],
                        [7, 'Legacy', '2024-06-26', 28, 'Carmy hires staff from his past as Sydney feels increasingly sidelined.'],
                        [8, 'Ice Chips', '2024-06-26', 38, 'Sugar goes into labor and relies on her mother Donna for support.'],
                        [9, 'Apologies', '2024-06-26', 32, 'The team awaits a high-stakes review from the Chicago Tribune.'],
                        [10, 'Forever', '2024-06-26', 41, 'Carmy attends a final dinner at a landmark restaurant and confronts his former mentor.'],
                    ],
                ],
                [
                    'season_number' => 4,
                    'title'         => 'Season 4',
                    'air_date'      => '2025-06-25',
                    'episodes'      => [
                        [1, 'Groundhogs', '2025-06-25', 35, 'The team confronts the fallout of the review and the restaurant’s financial clock.'],
                        [2, 'Soubise', '2025-06-25', 32, 'Carmy and Sydney try to recalibrate their partnership under mounting pressure.'],
                        [3, 'Scallop', '2025-06-25', 33, 'Richie and the front-of-house staff push to elevate service consistency.'],
                        [4, 'Worms', '2025-06-25', 32, 'Personal crossroads force difficult conversations across the kitchen.'],
                        [5, 'Episode 4.5', '2025-06-25', 32, 'The crew adjusts operations to keep the restaurant afloat.'],
                        [6, 'Episode 4.6', '2025-06-25', 32, 'Long-standing tensions resurface during a demanding service.'],
                        [7, 'Episode 4.7', '2025-06-25', 32, 'Individual ambitions collide with the needs of the team.'],
                        [8, 'Episode 4.8', '2025-06-25', 32, 'Key decisions reshape the leadership of the kitchen.'],
                        [9, 'Episode 4.9', '2025-06-25', 32, 'The staff prepares for a pivotal turning point.'],
                        [10, 'Episode 4.10', '2025-06-25', 36, 'The season closes with major choices for Carmy and Sydney.'],
                    ],
                ],
                [
                    'season_number' => 5,
                    'title'         => 'Season 5',
                    'air_date'      => '2026-06-25',
                    'episodes'      => [
                        [1, 'Soda', '2026-06-25', 32, 'A storm sets the stage as the team enters a new chapter.'],
                        [2, 'Lamb', '2026-06-25', 32, 'The kitchen settles into a new rhythm under shifting responsibilities.'],
                        [3, 'Mint', '2026-06-25', 32, 'Fresh ideas spark debate over the restaurant’s identity.'],
                        [4, 'Ribs', '2026-06-25', 32, 'Family ties and past memories surface around a shared meal.'],
                        [5, 'Raspberries', '2026-06-25', 32, 'Unexpected setbacks test the crew’s composure.'],
                        [6, 'Focaccia', '2026-06-25', 32, 'Front-of-house and kitchen coordination is pushed to the limit.'],
                        [7, 'Caramel', '2026-06-25', 32, 'An emotional service forces honest reckoning among the staff.'],
                        [8, 'The Original Beef of Chicagoland', '2026-06-25', 38, 'The series concludes as the team reflects on where it all began.'],
                    ],
                ],
            ],
        ]);
    }
}
