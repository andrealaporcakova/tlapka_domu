<?php

namespace Database\Seeders;

use App\Models\Shelter; // Import modelu
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShelterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Shelter::truncate();

        $shelters = [
            [
                'name' => 'AniDef, z.s.',
                'location' => 'Žim u Teplic, Ústecký kraj | Psi a kočky',
                'description' => 'Ověřený útulek známý transparentností a programem \'Anděl AniDef\' pro pravidelné dárce.',
                'url' => 'https://www.anidef.cz/',
            ],
            [
                'name' => 'Útulek Dogsy',
                'location' => 'Soukromý útulek pro opuštěná zvířata',
                'description' => 'Soukromé zařízení zaměřené na opuštěná a týraná zvířata. Velmi závislé na podpoře veřejnosti.',
                'url' => 'https://www.utulekdogsy.cz/',
            ],
            [
                'name' => 'Čtyřlístek pro hafany z.s.',
                'location' => 'Albrechtice, Moravskoslezský kraj',
                'description' => 'Aktivní organizace v Moravskoslezkém kraji. Hledá materiální i finanční pomoc pro péči o psy v nouzi.',
                'url' => 'https://ctyrlistekprohafany.cz/',
            ],
            [
                'name' => 'Útulek Jimlín',
                'location' => 'Jimlín u Loun | Široké spektrum zvířat',
                'description' => 'Velký útulek pro psy, kočky, hospodářská i exotická zvířata. Přijímá zvířata na základě smluv.',
                'url' => 'https://utulek-jimlin.cz/',
            ],
            [
                'name' => 'Útulek Děčín',
                'location' => 'Městský útulek, Děčín',
                'description' => 'Oficiální městské zařízení. Pro podporu a dary je nutné sledovat jejich oficiální webové stránky.',
                'url' => 'https://www.utulekdecin.cz/',
            ],
            [
                'name' => 'Devět životů, o.p.s.',
                'location' => 'Zvoleněves | Specializace na kočky',
                'description' => 'Velká organizace zaměřená na záchranu a péči o kočky a koťata. Potřeba steliva a krmiva pro kočky.',
                'url' => 'https://devet-zivotu.cz/',
            ],
            [
                'name' => 'Azyl Tylda z.s.',
                'location' => 'Severní Čechy',
                'description' => 'Zajišťuje péči především pro psy a kočky v nouzi v oblasti severních Čech. Hledají dočasné péče.',
                'url' => 'https://www.azyltylda.cz/',
            ],
            [
                'name' => 'LOZ Olomouc',
                'location' => 'Olomouc | Psi a kočky',
                'description' => 'Tradiční organizace, která se stará o zvířata v regionu. Často pořádá veřejné sbírky.',
                'url' => 'https://www.olomouckyutulek.cz/',
            ],
            [
                'name' => 'Útulek Kolín',
                'location' => 'Kolín',
                'description' => 'Psí útulek s dlouhou historií. Neustále potřebuje pomoc s krmením a veterinární péčí.',
                'url' => 'https://www.mukolin.cz/utulek/index.asp',
            ],
            [
                'name' => 'Městský útulek Třebíč',
                'location' => 'Třebíč',
                'description' => 'Městské zařízení, které se stará o nalezené a opuštěné psy a kočky v regionu Vysočiny.',
                'url' => 'https://mestskapolicie.trebic.cz/utulek-pro-opustena-zvirata-trebic/',
            ],
            [
                'name' => 'Šance zvířatům, z.s.',
                'location' => 'Liberec',
                'description' => 'Aktivní záchranná organizace zaměřená na zvířata, která by jinak neměla šanci. Potřebuje finance na veterinu.',
                'url' => 'https://www.sancezviratum.cz/',
            ],
            [
                'name' => 'Kočičí domov Sluníčko',
                'location' => 'Dobříň u Roudnice | Specializace na kočky',
                'description' => 'Známý kočičí domov s dlouhou tradicí péče o opuštěné a hendikepované kočky.',
                'url' => 'https://www.kocicidomovslunicko.cz/',
            ],
        ];

        foreach ($shelters as $shelter) {
            Shelter::create($shelter);
        }
    }
}
