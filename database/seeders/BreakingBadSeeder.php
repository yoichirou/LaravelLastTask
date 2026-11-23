<?php

namespace Database\Seeders;

class BreakingBadSeeder extends SeriesSeederBase
{
    public function run(): void
    {
        $this->createSeriesFromArray([
            'title'        => 'Breaking Bad',
            'slug'         => 'breaking-bad',
            'status'       => 'ended',
            'release_year' => 2008,
            'synopsis'     => 'A high school chemistry teacher diagnosed with inoperable lung cancer turns to manufacturing and selling methamphetamine to secure his family’s future.',
            'seasons'      => [
                [
                    'season_number' => 1,
                    'title'         => 'Season 1',
                    'air_date'      => '2008-01-20',
                    'episodes'      => [
                        [1, 'Pilot', '2008-01-20', 58, 'Diagnosed with terminal lung cancer, Walter White teams up with former student Jesse Pinkman to cook meth.'],
                        [2, "Cat's in the Bag...", '2008-01-27', 48, 'Walt and Jesse deal with the aftermath of their first cook in the desert.'],
                        [3, "...And the Bag's in the River", '2008-02-10', 48, 'Walt faces an agonizing moral choice regarding their captive.'],
                        [4, 'Cancer Man', '2008-02-17', 48, 'Walt reveals his cancer diagnosis to his family while Jesse visits his parents.'],
                        [5, 'Gray Matter', '2008-02-24', 48, 'Walt turns down financial help from former colleagues Elliott and Gretchen.'],
                        [6, "Crazy Handful of Nothin'", '2008-03-02', 48, 'Walt adopts the alias Heisenberg to confront distributor Tuco Salamanca.'],
                        [7, 'A No-Rough-Stuff-Type Deal', '2008-03-09', 47, 'Walt and Jesse scramble to deliver a massive batch of product to Tuco.'],
                    ],
                ],
                [
                    'season_number' => 2,
                    'title'         => 'Season 2',
                    'air_date'      => '2009-03-08',
                    'episodes'      => [
                        [1, 'Seven Thirty-Seven', '2009-03-08', 47, 'Walt and Jesse realize how dangerous Tuco truly is.'],
                        [2, 'Grilled', '2009-03-15', 48, 'Tuco holds Walt and Jesse hostage at a remote desert hideout.'],
                        [3, 'Bit by a Dead Bee', '2009-03-22', 47, 'Walt stages a fugue state to explain his disappearance while Hank investigates.'],
                        [4, 'Down', '2009-03-29', 47, 'Jesse is evicted by his parents while tension builds between Walt and Skyler.'],
                        [5, 'Breakage', '2009-04-05', 47, 'Jesse recruits his friends to distribute their product on the streets.'],
                        [6, 'Peekaboo', '2009-04-12', 47, 'Jesse tracks down two addicts who robbed Skinny Pete.'],
                        [7, 'Negro y Azul', '2009-04-19', 47, 'Jesse’s reputation grows as Hank struggles with a transfer to El Paso.'],
                        [8, 'Better Call Saul', '2009-04-26', 47, 'Walt and Jesse hire slick criminal lawyer Saul Goodman after Badger is arrested.'],
                        [9, '4 Days Out', '2009-05-03', 47, 'A marathon desert cook turns into a fight for survival when the RV battery dies.'],
                        [10, 'Over', '2009-05-10', 47, 'Walt receives good medical news but struggles to step away from the business.'],
                        [11, 'Mandala', '2009-05-17', 47, 'Saul connects Walt with methodical distributor Gus Fring.'],
                        [12, 'Phoenix', '2009-05-24', 47, 'Walt makes a cold decision regarding Jesse’s girlfriend Jane.'],
                        [13, 'ABQ', '2009-05-31', 48, 'Grief triggers a devastating tragedy over Albuquerque.'],
                    ],
                ],
                [
                    'season_number' => 3,
                    'title'         => 'Season 3',
                    'air_date'      => '2010-03-21',
                    'episodes'      => [
                        [1, 'No Más', '2010-03-21', 47, 'Skyler demands a divorce while Walt insists he is out of the meth trade.'],
                        [2, 'Caballo sin Nombre', '2010-03-28', 47, 'Two cartel assassins arrive in New Mexico looking for Heisenberg.'],
                        [3, 'I.F.T.', '2010-04-04', 47, 'Walt moves back into the house, prompting Skyler to retaliate.'],
                        [4, 'Green Light', '2010-04-11', 47, 'Gus lures Walt back with the offer of a state-of-the-art superlab.'],
                        [5, 'Más', '2010-04-18', 47, 'Walt accepts Gus’s offer, driving a wedge between him and Jesse.'],
                        [6, 'Sunset', '2010-04-25', 47, 'Hank corners Jesse inside the RV, forcing Walt into a desperate trick.'],
                        [7, 'One Minute', '2010-05-02', 47, 'Suspended from the DEA, Hank is ambushed by the cartel cousins.'],
                        [8, 'I See You', '2010-05-09', 47, 'The family gathers at the hospital while Walt grows wary of Gus.'],
                        [9, 'Kafkaesque', '2010-05-16', 47, 'Skyler devises a story to pay Hank’s medical bills while Jesse skims product.'],
                        [10, 'Fly', '2010-05-23', 47, 'Walt becomes obsessed with a single fly contaminating the superlab.'],
                        [11, 'Abiquiu', '2010-05-30', 47, 'Skyler insists on laundering Walt’s money while Jesse uncovers a painful truth.'],
                        [12, 'Half Measures', '2010-06-06', 47, 'Walt intervenes violently to save Jesse from Gus’s dealers.'],
                        [13, 'Full Measure', '2010-06-13', 47, 'Cornered by Gus, Walt orders Jesse to make an unthinkable move.'],
                    ],
                ],
                [
                    'season_number' => 4,
                    'title'         => 'Season 4',
                    'air_date'      => '2011-07-17',
                    'episodes'      => [
                        [1, 'Box Cutter', '2011-07-17', 47, 'Gus sends a chilling message in the lab after Gale’s death.'],
                        [2, 'Thirty-Eight Snub', '2011-07-24', 47, 'Walt buys an illegal firearm while Jesse spirals into reckless parties.'],
                        [3, 'Open House', '2011-07-31', 47, 'Skyler schemes to buy the car wash as Hank receives Gale’s lab notebook.'],
                        [4, 'Bullet Points', '2011-08-07', 47, 'Hank shares his suspicions about Gale with Walt over dinner.'],
                        [5, 'Shotgun', '2011-08-14', 47, 'Mike takes Jesse on a series of pickups that test his loyalty.'],
                        [6, 'Cornered', '2011-08-21', 47, 'Skyler worries about Walt’s safety as Walt insists he is the danger.'],
                        [7, 'Problem Dog', '2011-08-28', 47, 'Hank tracks a lead to Los Pollos Hermanos while Jesse struggles with guilt.'],
                        [8, 'Hermanos', '2011-09-04', 47, 'A flashback reveals the origins of Gus’s vendetta against the cartel.'],
                        [9, 'Bug', '2011-09-11', 47, 'Walt and Jesse come to blows after Walt discovers Jesse’s connection to Mike.'],
                        [10, 'Salud', '2011-09-18', 47, 'Gus, Mike, and Jesse travel to Mexico to settle scores with the cartel.'],
                        [11, 'Crawl Space', '2011-09-25', 47, 'Gus threatens Walt’s family, triggering panic when Walt discovers the cash is gone.'],
                        [12, 'End Times', '2011-10-02', 47, 'Brock falls critically ill, turning Jesse against Walt before Walt shifts blame.'],
                        [13, 'Face Off', '2011-10-09', 47, 'Walt teams up with Hector Salamanca to eliminate Gus once and for all.'],
                    ],
                ],
                [
                    'season_number' => 5,
                    'title'         => 'Season 5',
                    'air_date'      => '2012-07-15',
                    'episodes'      => [
                        [1, 'Live Free or Die', '2012-07-15', 43, 'Walt, Jesse, and Mike use a giant magnet to destroy evidence in police custody.'],
                        [2, 'Madrigal', '2012-07-22', 48, 'The DEA investigates Gus’s corporate backers while Lydia proposes a new deal.'],
                        [3, 'Hazard Pay', '2012-07-29', 48, 'Walt and Jesse launch a mobile cooking operation under a pest-control front.'],
                        [4, 'Fifty-One', '2012-08-05', 48, 'Walt turns 51 as Skyler grows increasingly desperate to protect their children.'],
                        [5, 'Dead Freight', '2012-08-12', 49, 'The crew pulls off an intricate methylamine heist from a moving freight train.'],
                        [6, 'Buyout', '2012-08-19', 48, 'Jesse and Mike try to exit the business, but Walt refuses to give up his empire.'],
                        [7, 'Say My Name', '2012-08-26', 48, 'Walt takes over distribution alone and has a fatal confrontation with Mike.'],
                        [8, 'Gliding Over All', '2012-09-02', 47, 'Walt eliminates loose ends in prison before Hank makes a shocking bathroom discovery.'],
                        [9, 'Blood Money', '2013-08-11', 48, 'Hank confronts Walt in his garage, igniting a relentless cat-and-mouse war.'],
                        [10, 'Buried', '2013-08-18', 48, 'Walt buries his fortune in the desert while Hank tries to turn Skyler.'],
                        [11, 'Confessions', '2013-08-25', 48, 'Walt records a manipulative video framing Hank as the mastermind.'],
                        [12, 'Rabid Dog', '2013-09-01', 48, 'Jesse teams up with Hank to bring Walt down from the inside.'],
                        [13, "To'hajiilee", '2013-09-08', 46, 'Hank and Jesse lure Walt into the desert with a trap involving his buried cash.'],
                        [14, 'Ozymandias', '2013-09-15', 48, 'A desert shootout shatters Walt’s empire and tears his family apart.'],
                        [15, 'Granite State', '2013-09-22', 55, 'Walt hides out in New Hampshire while Jesse endures captivity.'],
                        [16, 'Felina', '2013-09-29', 55, 'Walt returns to Albuquerque to settle his affairs and free Jesse.'],
                    ],
                ],
            ],
        ]);
    }
}
