<?php

namespace Database\Seeders;

use App\Models\Story; // Import modelu
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Story::truncate();

        $stories = [
            [
                'title' => 'Max se vrátil z Vltavy: 10 dní strachu a radosti',
                'category' => 'Pes / Praha',
                'excerpt' => 'Příběh, který začal jako noční můra u nábřeží a skončil šťastným shledáním v útulku. Díky fotce od náhodného kolemjdoucího to klaplo!',
                'body' => 'Max si užíval večerní procházku u pražského nábřeží, když se to zvrtlo. Vteřina nepozornosti, možná špatný krok ve tmě, a byl pryč. Pro majitele začalo deset dní čistého pekla. Prohledávali nábřeží, volali, lepili plakáty. Netušili, že Maxe mezitím někdo našel a skončil v útulku. Zázrak přišel v podobě náhodného kolemjdoucího, který Maxe vyfotil ještě před odchytem a fotku nahrál do databáze. Majitelé ji uviděli, poznali a sprintovali do útulku. Konec dobrý, všechno mokré (od slz radosti).',
                'image_path' => 'images/missing_dog.webp',
                'url' => '#',
            ],
            [
                'title' => 'Zrzka: Příběh o víře a síle sdílení na Facebooku',
                'category' => 'Kočka / Středočeský kraj',
                'excerpt' => 'Nádherný příběh o tom, jak majitelka neztrácela naději a jak ji díky našemu sdílení zkontaktoval soused, který Micku našel v kůlně.',
                'body' => 'Zrzka, kočka ze Středočeského kraje, se rozhodla, že sousedova kůlna vypadá jako skvělé místo na průzkum. Bohužel, cesta ven už tak snadná nebyla. Majitelka mezitím odmítala propadnout panice a vsadila vše na sílu internetu. Sdílela příspěvek o Zrzce všude, včetně naší platformy. A přesně tohle sdílení se dostalo k sousedovi, kterému došlo, že to "záhadné mňoukání" z jeho kůlny není jen vítr. Zkontroloval kůlnu, našel Zrzku a zavolal majitelce.',
                'image_path' => 'images/cat_in_bed.webp',
                'url' => '#',
            ],
            [
                'title' => 'Čipování: Život zachraňující pouto přes 1000 km',
                'category' => 'Pes / Karlovarský kraj',
                'excerpt' => 'Fénix utekl z výstavy a byl nalezen až u hranic. Jen díky mikročipu a rychlé reakci místního útulku mohl jet zpět k majiteli.',
                'body' => 'Fénix měl být hvězdou výstavy v Karlovarském kraji, ale zřejmě trpěl trémou. V nestřeženém okamžiku vzal roha a dal se na útěk ve stylu maratonce. Našli ho až o týdny později a stovky kilometrů daleko, vyčerpaného u hranic. Byl špinavý a k nepoznání. Naštěstí lidé, kteří ho našli, ho vzali do místního útulku. Tam stačilo jediné pípnutí čtečky mikročipů. Útulek okamžitě kontaktoval majitele. Bez té malé věcičky pod kůží by se Fénix stal jen dalším anonymním psem daleko od domova.',
                'image_path' => 'images/found_dog.webp',
                'url' => '#',
            ],
            [
                'title' => 'Malý chlupáč, velká radost: Morče v parku',
                'category' => 'Ostatní / Ústí nad Labem',
                'excerpt' => 'Trochu kuriózní, ale s dobrým koncem. Malý chlupáč byl nalezen v parku. Díky detailnímu popisu v inzerátu ho našla dcera majitelky.',
                'body' => 'Jak se, proboha, ztratí morče v parku? To je záhada, kterou řešili v Ústí nad Labem. Malý chlupáč se ocitl sám ve velkém, děsivém světě trávy a psích loužiček. Naštěstí si ho všiml všímavý nálezce a místo aby ho ignoroval, zadal inzerát s velmi detailním popisem. Dcera majitelky, která zoufale pročesávala internet, na inzerát narazila. Detailní popis (možná specifická barva chloupků na nose?) seděl přesně. Morče bylo zachráněno před kariérou maskota místních holubů.',
                'image_path' => 'images/guinea_pig_park.jpeg',
                'url' => '#',
            ],
            [
                'title' => 'Cesta za čokoládovým labradorem: Rychlost se počítá',
                'category' => 'Pes / Plzeňský kraj',
                'excerpt' => 'Pes utekl ze cvičáku. Majitelé ho našli v databázi po pouhých 48 hodinách. Rychlá akce se vyplatila.',
                'body' => 'Cvičák v Plzeňském kraji. Povel "ke mně!" a čokoládový labrador si řekl "spíš... pryč!". Zaběhl do lesa. Majitelé ale neztráceli čas. Okamžitě psa nahlásili jako ztraceného do databáze. Téměř ve stejnou chvíli někdo jiný nahlašoval nález zmateného labradora o pár vesnic dál. Protože obě strany jednaly bleskově a využily stejný systém, trvalo spojení jen 48 hodin. Labrador se vrátil dřív, než si stihl rozmyslet, jestli ten zajíc za to stál.',
                'image_path' => 'images/brown_labrador.jpg',
                'url' => '#',
            ],
            [
                'title' => 'Kočka Lily, ztracený poklad z Letné: 3 týdny naděje',
                'category' => 'Kočka / Praha',
                'excerpt' => 'Majitelka se nevzdávala naděje 3 týdny. Lily se ukrývala ve sklepě v sousedním domě. Hledání v okolí se vyplatilo!',
                'body' => 'Tři týdny. Tak dlouho byla Lily, kočka z Letné, nezvěstná. Pro majitelku to byla věčnost, ale odmítala to vzdát. Místo aby hledala daleko, zaměřila se na nejbližší okolí. Systematicky procházela ulici, mluvila se sousedy a nahlížela do každé škvíry. Nakonec ji napadlo prohledat sklepy okolních domů. V jednom z nich, v sousední budově, našla vystrašenou, hubenou, ale živou Lily. Byla tam uvězněná jen pár metrů od domova.',
                'image_path' => 'images/cat_basement.jpg',
                'url' => '#',
            ],
            [
                'title' => 'Věrný Blesk: Senior pes našel cestu zpět domů',
                'category' => 'Pes / Pardubický kraj',
                'excerpt' => '14letý Blesk se vydal na poslední výlet. Lidé ho našli dezorientovaného. Okamžitě se dostal do útulku a čip řekl vše.',
                'body' => 'Čtrnáctiletý Blesk z Pardubicka už nebyl, co býval. Občas byl trochu zmatený. Jednoho dne se prostě vydal na procházku a zapomněl se vrátit. Našli ho o pár kilometrů dál dobří lidé, kterým bylo hned jasné, že tenhle psí senior potřebuje pomoc – byl dezorientovaný. Vzali ho rovnou do útulku. Tam ani nepotřebovali vyplňovat formuláře. První přišla na řadu čtečka čipů. Ta okamžitě prozradila, komu Blesk patří, a starý pán mohl jet domů do svého pelíšku.',
                'image_path' => 'images/old_man_dog.jpg',
                'url' => '#',
            ],
            [
                'title' => 'Magické hvízdání: Korela se vrátila po volání',
                'category' => 'Ostatní / Jihomoravský kraj',
                'excerpt' => 'Ztracená korela byla vypuštěna venku. Nálezce zavolal a majitel ptáka přivolal zpět známým hvízdáním. Důkaz, že i drobné detaily pomohou.',
                'body' => 'Ztratit korelu je noční můra. Když majitelům z Jihomoravského kraje uletěla, moc nadějí si nedělali. Pak ale přišel telefonát – nálezce ji viděl na stromě na své zahradě, ale nemohl ji chytit. Majitel okamžitě přijel. Nebylo třeba sítí ani žebříků. Majitel si prostě stoupl pod strom a zapískal specifickou melodii, na kterou byla korela zvyklá. Pták, který slyšel známý zvuk domova, sletěl přímo na jeho rameno.',
                'image_path' => 'images/Cockatielmale.jpg',
                'url' => '#',
            ],
            [
                'title' => 'Ringo: Dva měsíce v divočině a radostný návrat',
                'category' => 'Pes / Vysočina',
                'excerpt' => 'Ringo byl ztracen v lesích Vysočiny celých 60 dní. Majitelé ho našli vyhublého, ale živého, díky stopařům a našemu hlášení.',
                'body' => 'Ztratit se v lesích Vysočiny není legrace. Ringo to poznal na vlastní kůži. Zmizel a nevrátil se. Dny se změnily v týdny. Majitelé byli zoufalí, ale nepřestali doufat. Zadali hlášení na náš web a zároveň organizovali pátrací akce se stopaři. A pak, po neuvěřitelných 60 dnech, přišla zpráva. Stopaři, kteří reagovali na jedno z hlášení o "podobném psovi", Ringa našli. Byl na kost vyhublý, vyděšený, ale živý. Neuvěřitelný příběh o přežití.',
                'image_path' => 'images/dog.forest.jpg',
                'url' => '#',
            ],
        ];

        foreach ($stories as $story) {
            Story::create($story);
        }
    }
}
