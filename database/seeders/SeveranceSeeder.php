<?php

namespace Database\Seeders;

class SeveranceSeeder extends SeriesSeederBase
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->createSeriesFromArray([
            'title'        => 'Severance',
            'slug'         => 'severance',
            'status'       => 'ongoing',
            'release_year' => 2022,
            'synopsis'     => 'Mark leads a team of office workers whose memories have been surgically divided between their work and personal lives. When a mysterious colleague appears outside of work, it begins a journey to discover the truth about their jobs.',
            'seasons'      => [
                [
                    'season_number' => 1,
                    'title'         => 'Season 1',
                    'air_date'      => '2022-02-18',
                    'episodes'      => [
                        [1, 'Good News About Hell', '2022-02-18', 57, "Mark is promoted to lead a team of employees who've had their memories surgically divided between their work and personal lives."],
                        [2, 'Half Loop', '2022-02-18', 53, 'The team trains new hire Helly on macrodata refinement. Mark takes a day off to meet with a mysterious former colleague.'],
                        [3, 'In Perpetuity', '2022-02-25', 57, "Mark takes the team on a field trip, but Helly continues to rebel. A deteriorating Petey struggles to tell Mark about Lumon's misdeeds."],
                        [4, 'The You You Are', '2022-03-04', 47, 'Irving finds an intriguing book at work. Helly aggressively pursues a meeting with her Outie. Mark attends a funeral with Ms. Selvig.'],
                        [5, 'The Grim Barbarity of Optics and Design', '2022-03-11', 44, 'Irving and Dylan confront Burt about his lies. Mark and Helly discover a strange new department.'],
                        [6, 'Hide and Seek', '2022-03-18', 40, 'The team angers Cobel by forming an alliance.'],
                        [7, 'Defiant Jazz', '2022-03-25', 49, 'Mark and the team encounter new security measures from Cobel.'],
                        [8, "What's for Dinner?", '2022-04-01', 47, "The team prepares a plan. Mark attends Devon and Ricken's party."],
                        [9, 'The We We Are', '2022-04-08', 40, 'The team discovers troubling revelations.'],
                    ],
                ],
                [
                    'season_number' => 2,
                    'title'         => 'Season 2',
                    'air_date'      => '2025-01-17',
                    'episodes'      => [
                        [1, 'Hello, Ms. Cobel', '2025-01-17', 48, 'Mark returns to work under different circumstances. Secrets from the Outie world come to light.'],
                        [2, 'Goodbye, Mrs. Selvig', '2025-01-24', 46, 'Outie Mark contemplates the meaning of a message. Lumon grapples with the fallout of the Overtime Contingency.'],
                        [3, 'Who Is Alive?', '2025-01-31', 53, 'Mark and Helly return to an old haunt. Irving and Dylan make separate discoveries. Outie Mark tries something new.'],
                        [4, "Woe's Hollow", '2025-02-07', 50, 'The team traverses unfamiliar terrain. Mark and Helly explore their feelings. Irving harbors a growing distrust of a friend.'],
                        [5, "Trojan's Horse", '2025-02-14', 46, 'Tensions emerge after the team suffers a loss. Outie Mark makes a breakthrough.'],
                        [6, 'Attila', '2025-02-21', 48, 'Bonds are tested on the severed floor. Outside, Irving attends a fraught dinner while Mark takes a reckless risk.'],
                        [7, 'Chikhai Bardo', '2025-02-28', 50, 'The origins of an old romance intersect with a deadly present threat.'],
                        [8, 'Sweet Vitriol', '2025-03-07', 37, 'A Lumon loyalist faces old demons while searching for a missing item.'],
                        [9, 'The After Hours', '2025-03-14', 44, "Outie Mark and Devon team with an unexpected ally to enact a plan. Innie Helly investigates Mark's absence while Dylan receives hard news."],
                        [10, 'Cold Harbor', '2025-03-21', 75, 'Mark forms a shaky alliance in an all-or-nothing play, while the team makes a dangerous last stand.'],
                    ],
                ],
            ],
        ]);
    }
}
