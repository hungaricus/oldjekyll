<?php

require_once("db.php");

$db=dbopen() or die ("Nem sikerült az adatbázis megnyitása.");#sqlite3

function newslink($id) {
	global $mainfile;
	$r=sqlonerow("select coverfile from books where idbook=$id") or die("Nem sikerült a lekérdezés!");
	//$result=sqlquery("select coverfile from books where idbook=$id") or die("Nem sikerült a lekérdezés!");
	//$r = $result->fetch();
	#$cover=str_replace("FD.jpg","FF.jpg",$r['coverfile']);
	$cover=str_replace("--FD.jpg","",$r['coverfile']);
#	$link="\nimg: http://adlibrum.hu/docs/webcovers/$cover\ntitle: ";
	$link="^$cover\n!";
	return $link;
}

$news="
<h3>".newslink(530)."Egek felé</h3>
<p>A regény főhőse kidolgoz egy, az internet forradalmára épülő elméletet és hozzá kapcsolódó számítógépes programot, amely a társadalmi döntés hatalmát és szabadságát az uralkodó kaszt kezéből átadja a közösségnek. Munkája eredményét szeretné a gyakorlatban megvalósítani, ezért felveszi a kapcsolatot a politikai és pénzügyi hatalom tagjaival. Ezzel elindul a kálváriája... [2014-10-29]</p>

^impakt_konyvmarketing
<h3>!Impakt Könyvmarketing</h3>
<p>Az <a href='http://impakt.hu/csomagok/' target='_blank'>Impakt szolgáltatáscsomagja</a> könyvismertető weblap, szerzői interjú és recenziók segítségével ismertetik meg a kiadott könyveket. [2015-10-01]</p>

<h3>".newslink(562)."A nevelés pedagógiai antropológiai és összehasonlító megközelítése</h3>
<p>Mrázik Julianna <a href='http://adlibrum.hu/new/index.php?task=pageDetails&id=562' target='_blank'>Nevelés és iskola</a> című monográfiájának célja, hogy a tanárképzésben és a tanártovábbképzésben résztvevők megismerkedjenek az intézményes és nem-intézményes nevelés aktuális és megoldandó feladataival, valamint a hazai és nemzetközi törekvésekkel ezen feladatok megoldására. [2015-08-27]</p>

<h3>".newslink(149)."Braille kiadásban a Nyeregben a Konstantin-kereszt</h3>
<p>Jenei András korábban az <a href='http://adlibrum.hu/new/index.php?task=pageDetails&id=149' target='_blank'>Ad Librumnál megjelent regénye</a> Magyar Vakok és Gyengénlátók Országos Szövetsége gondozásában Braille nyomtatásban is kiadásra került. [2015-07-10]</p>

<h3>".newslink(560)."A végzetes bestseller</h3>
<p>Anthony Noir, a polinéziai detektív újra nyomoz. Ezúttal a férje eltűnése miatt vádolt híres írónőt segíti, aki éppen a következő reménybeli bestsellere megírásával küzd. [2015-06-03]</p>

^moly_2015
<h3>!<img class='thumbnail' src='img/logos/adlibrumlogo_72.png' width='120px' /> &nbsp; moly.hu</h3>
<p>A <strong>moly</strong> jelenleg 138 Ad Librum kiadványt tart számon. [2015-05-31]</p>

<h3>".newslink(563)."A pillangófa</h3>
<p>Mester Györgyi rövid, elgondolkodtató meséi a pöttyös vízilóról, a nyolcadik törpéről és a boldog hóemberről. [2015-05-28]</p>

<h3>".newslink(520)."A globalizált édenkert - Pete László Miklós Vasi Szabó János Levegőkovács című kötetéről</h3>
<p>A Szózat jelentette meg <a href='http://www.szozat.org/index.php/ajanlo/tartalommutato/4340-vasi-szabo-janos-levegokovacs' target='_blank'>Pete László Miklós kritikáját</a> Vasi Szabó János könyvéről, amely szerint \"A kötet szép irodalmi élmény, ajánlom minden olyan Olvasónak, aki „magas” és „alacsony” helyett igazira vágyik.\" Varga Tibor író tanulmánya ugyanerről a könyvről a Kelet Felől 2014/10-12. számában jelent meg, és <a href='https://www.facebook.com/levegokovacs/posts/250459448457322' target='_blank'>a könyv közösségi lapján olvasható</a>. [2015-04-25]</p>

<h3>".newslink(555)."A keresztény vallás megszületésének története</h3>
<p>Ez a könyv megkísérli értelmezni azt, hogy történeti szempontból mely események vezettek el a keresztény vallás megszületéséhez és Jézus kiválasztottá válásához. Megoldást keres arra, hogy ezek az események és az Újszövetségi kor eseményei milyen időpontokban következtek be a keresztény időszámítás szerint. [2014-12-12]</p>

<h3>".newslink(558)."Az eltitkoltak éneke</h3>
<p>\"Az eltitkoltak csendben várnak, / nem sírnak, nem ordibálnak, / szelíd, kedves, selyem-lények, / akik nélkül nincsen élet. / Azaz van, de poshadt szürke, / elveszne az örök ködbe. / Csakhogy mindegy, mit gondolnak, / sosem-volt-lesz eltitkoltak.\" [2014-11-27]</p>

<h3>".newslink(531)."Állati tükörképek</h3>
<p>Versek állatokról - vagy inkább az emberről? [2014-11-07]</p>

<h3>".newslink(530)."Egek felé</h3>
<p>A regény főhőse kidolgoz egy, az internet forradalmára épülő elméletet és hozzá kapcsolódó számítógépes programot, amely a társadalmi döntés hatalmát és szabadságát az uralkodó kaszt kezéből átadja a közösségnek. Ezzel elindul a kálváriája... [2014-10-29]</p>

^uj_iroda
<h3>!<img class='thumbnail' src='pics/adlibrumlogo_black_125x47.png' />Új kiadói iroda</h3>
<p>Az Ad Librum új címe 19. ker. (Kispest), Klapka u. 26. Ez egyben a kiadó postacíme és székhelye is. Ügyfélfogadás minden munkanap 9 és 13 óra között. [2014-08-27]</p>

<h3>".newslink(280)."Compartiendo sueños con mis amigos de Vento</h3>
<p>Esta sencilla novela describe la vida de los alumnos de la Escuela Vocacional de Vento en los años del 68 al 71 del siglo pasado. Este texto no solo es mío; es de todos aquellos que me ayudaron a reconstruir pedazos de nuestra juventud. [2014-08-10]</p>

<h3>".newslink(524)."Széllel szemben</h3>
<p>Írország, 2008. Választás előtt áll az ország. A legtöbben sör mellett döntenek. Minden egy apró szívességgel kezdődik, de főhősünk hamarosan Írország szél szaggatta vidékein találja magát egy összeesküvés nyomában, amelynek szálai messze túlmutatnak az ország határain. Sarkában pedig üldözők járnak, akik nem ismernek félelmet, fájdalmat, vagy olyan régi bölcsességeket, hogy soha ne szívózz az írekkel. [2014-07-10]</p>

<h3>".newslink(529)."Uropodina mites of Transylvania</h3>
<p>A könyv Erdély korongatka faunáját mutatja be. [2014-07-07]</p>

<h3>".newslink(528)."Mindhalálig</h3>
<p>Két középkorú barátnő először megpróbálja egy időre újra felidézni elmúlt ifjúságának minden boldogságát, minden szerelmes percét, de egyikük tragikus végkimenetelű esete ráébreszti a másikat: Bele kell törődniük az idő múlásába. A visszavonult főszereplő teljesen egyedül várja az öregedés minden fázisát. De nem tud parancsolni érzéseinek, amikor megismerkedik a tőle majdnem két évtizeddel fiatalabb zenésszel. [2014-06-03]</p>

<h3>".newslink(522)."Cinegemese</h3>
<p>Kedves történet, bájos mese – ami akár igaz is lehetne. Gyereknek és felnőttnek is szól ez a vers: egy cinkéről és a megmentőjéről, barátságról és szerelemről, elválásról és egymásra találásról. Aki eddig elolvasta, mosolygott közben és örömmel vette kézbe újra. [2014-05-10]</p>

<h3>".newslink(525)."A demokrácián túl</h3>
<p>A szerzők közérthetű érvekkel mutatják be, hogy a közhiedelemmel ellentétben a demokrácia nem a szabadság, a civilizáció, a jólét, a béke és a törvényesség záloga, hanem éppen ellenkezőleg: az egyéni szabadságjogok csorbulásának, a társadalmi konfliktusok erősödésének, az állami kiadások egekig szökésének és az életszínvonal csökkenésének az oka. [2014-04-20]</p>

<h3>".newslink(523)."A Gacsári Krónika</h3>
<p>E gyűjteményes mű magába foglalja „A Füzes Gyarmati Helvéziai Hitvallású Szent Ekklézsiának Krónikája” című művet és az íróját, Gacsári Istvánt méltató írásokat és idézeteket, valamint először közöli a 175 éves Krónika teljes, eredeti szövegét. [2014-04-10]</p>

<h3>".newslink(521)."Válaszok a válaszokra</h3>
<p><a href='http://www.adlibrum.hu/new/?task=pageSelection&q=bárdosi'>Bárdosi Attila</a> ezúttal Reglődi Dórával jelentetett meg verseskötetet <a href='http://adlibrum.hu/new/index.php?task=pageDetails&id=521'>Válaszok a válaszokra</a> címmel. A hivatásuk révén élet és halál mezsgyéjén mozgó két szerző egymást több síkon inspirálva ír elmúlásról és mindennapi örömökről. [2014-03-22]</p>

<h3>".newslink(271)."A Népszava és a Polgári Szemle A végrehajtó és az adósról</h3>
<p>A Népszava a végrehajtással foglalkozó könyvünk szerzőjével, Pataki Jánossal készített interjút - az Ad Librumnál megjelent könyvét is említve - <a href='http://nepszava.hu/cikk/1014425/' target='_blank'>A jog fekete báránya</a> címmel. A kötetről mélyreható elemzést közöl Török Gábor professzor a <a href='http://www.polgariszemle.hu/index.php?view=v_article&ID=572'  target='_blank'>Polgári Szemlében</a>. [2014-03-20]</p>

<h3>".newslink(510)."</h3>
<p>Frideczky Katalin <a href='http://www.10kerkult.hu/muvelodes-muveszet/26-irodalom-anyanyelv/4564-frideczky-katalin-eletes-irodalma.html' target='_blank'>zenés-irodalmi bemutatkozása</a> nagy érdeklődést keltett Kőbányán. [2014-01-15]</p>

<h3>".newslink(520)."Recenziók a Levegőkovácsról</h3>
<p>Pete László Miklós, alias L. N. Peters <em>A globalizált édenkert</em> címen írt recenciót az Ad Librum által kiadott <a href='http://adlibrum.hu/new/index.php?task=pageDetails&id=520'>Levegőkovácsról</a>, ami megjelent a <a href='http://lnpeters.blogter.hu/606328/a_globalizalt_edenkert' target='_blank'>saját blogján</a>, a <a href='http://magazin.nekunkszol.hu/a-globalizalt-edenkert/' target='_blank'>Nekünkszól Magazinban</a> és a rimaszombati <a href='http://gomorilap.sk/cikkek/Heti-olvasmany-A-globalizalt-edenkert/1536' target='_blank'>Gömörilapban</a> is. [2013-12-30]</p>

<h3>".newslink(519)."Bárdosi Attila harmadik verseskötete</h3>
<p>Megjelent <a href='http://www.adlibrum.hu/new/?task=pageSelection&q=bárdosi'>Bárdosi Attila</a> harmadik verseskötete az Ad Librumnál <a href='http://adlibrum.hu/new/index.php?task=pageDetails&id=519'>Pathétique</a> címen. [2013-11-18]</p>

<h3>".newslink(520)."Vasi Szabó János újabb sci-fi kötete</h3>
<p><a href='http://www.adlibrum.hu/new/?task=pageSelection&q=vasi'>Vasi Szabó János</a> megint irodalmi értékű művel járult hozzá a magyar tudományos-fantasztikus közösséghez. A <a href='http://adlibrum.hu/new/index.php?task=pageDetails&id=520'>Levegőkovács</a> a \"mágikus realizmusának\" újabb remek példánya. [2013-10-25]</p>

<h3>".newslink(293)."Férfi lélekvándorlás</h3>
<p><a href='http://www.adlibrum.hu/new/?task=pageSelection&q=tamás zoltán'>Tamás Zoltán</a> újabb <a href='http://adlibrum.hu/new/index.php?task=pageDetails&id=293'>műve</a> egyszerre humor és filozófia az életről, a halálról, a boldogságról, a valóságról és a misztikumról. [2013-08-06]</p>

<h3>".newslink(307)."Lehetsz-e mindig fiatal?</h3>
<p><a href='http://www.adlibrum.hu/new/?task=pageSelection&q=Dobrossy'>P. Dobrossy Rita</a> újabb elgondolkodtató kötete, az <a href='http://adlibrum.hu/new/index.php?task=pageDetails&id=307'>Örökké fiatalon</a> a középkorúságba való lelki átlépés gyötrelmeit ábrázolja egy átélhető történeten keresztül. [2013-07-25]</p>

<h3>".newslink(510)."Álomszőttes</h3>
<p>A <a href='http://adlibrum.hu/new/index.php?task=pageDetails&id=390'>Jolán gyereket</a> vár és a <a href='http://adlibrum.hu/new/index.php?task=pageDetails&id=500'>Salto vitale</a> után Frideczky Katalin <a href='http://adlibrum.hu/new/index.php?task=pageDetails&id=510'>harmadik kötete</a> álmok, emlékfoszlányok, szabad asszociációs reflexiók csapongó, színes kavalkádja. [2013-05-06]</p>

<h3>".newslink(257)."Klasszikus krimi operai teatralitással</h3>
<p>Az Ad Librum 2010-ben jelentette meg Matthew Vigo csavaros krimijét <a href='http://adlibrum.hu/new/index.php?task=pageDetails&id=333'>Rejtelem a Déltengeren</a> címen. A szerző újabb kötete, az <a href='http://adlibrum.hu/new/index.php?task=pageDetails&id=257'>Álarcok bel cantóban</a> nem kevésbé trükkös, és egyben operai teatralitással átitatott történet a krimikedvelőknek. [2013-04-10]</p>

<h3>".newslink(271)."Bírósági végrehajtás a gyakorlatban</h3>
<p><a href='http://adlibrum.hu/new/index.php?task=pageDetails&id=271'>A végrehajtó és az adós</a> a címéhez hűen tanácsot ad azoknak is, akiknek tartoznak, és azoknak is, akik tartoznak. [2013-01-25]</p>

<h3>".newslink(274)."Uropodina mites from the Korean Peninsula</h3>
<p><a href='http://www.adlibrum.hu/new/?task=pageSelection&q=kontsch%C3%A1n'>Kontschán Jenő</a> angol nyelvű <a href='http://adlibrum.hu/new/index.php?task=pageDetails&id=274'>szaktudományos munkája</a> a koreai atkákkal foglalkozik. [2013-01-23]</p>

<h3>".newslink(266)."Az értékteremtő kapitalizmus</h3>
<p>Bár manapság a kritikai hangok kerültek előtérbe, <a href='http://adlibrum.hu/new/index.php?task=pageDetails&id=266'>Az erkölcsös kapitalizmus</a> rávilágít arra, hogy a \"kapitalizmus lényege az értékteremtés, az emberi energia és találékonyság az emberiség történelme során eddig soha nem látott mértékű mozgósításán keresztül annak érdekében, hogy az átlagemberek számára (...) jólétet teremtsenek\". [2012-12-20]</p>

<h3>".newslink(500)."Frideczky Katalin írása a Palócföldben</h3>
<p>A <a href='http://adlibrum.hu/new/index.php?task=pageDetails&id=500'>Salto vitale</a> egyik írása, <em>A telefon</em> megjelent a Palócföld legfrissebb számában. [2012-09-10]</p>

<h3>".newslink(237)."Mercedes-Benz Motorsport</h3>
<p>Egy autógyártó sem büszkélkedhet olyan eredményekkel az autósportban, mint a Mercedes-Benz. Az <a href='http://adlibrum.hu/new/index.php?task=pageDetails&id=237'>Ezüstnyilak</a> ennek történetét mutatja be 1894-től az olyan mai versenyzőkig, mint Schumacher, Lewis Hamilton vagy Jenson Button. A kötet számos fekete-fehér és színes fényképet tartalmaz. [2012-08-27]</p>

<h3>".newslink(394)."Videoriport a Holtak világa, az első magyar zombikönyv szerzőivel</h3>
<p>Az Irodalmi Jelen interjút készített a Holtak világa trilógia első kötetének szerzőivel. A riport megtekinthető a <a href='http://youtu.be/X07Wp-FbISc' target='_blank'>YouTube</a>-on.[2012-07-15]</p>

<h3>".newslink(175)."Egy ex-drogos vallomása</h3>
<p><a href='http://adlibrum.hu/new/index.php?task=pageDetails&id=175'>Szilágyi L. Laura megrendítő személyes naplója</a> elmeséli, hogyan került a designer drogok hatása alá, és hogyan sikerült akarattal és mások segítségével kikerülnie onnan.[2012-06-07]</p>

<h3>".newslink(254)."Zizi naplója három kötetben</h3>
<p>Mester Györgyi története a kissé „flúgos” Ziziről <a href='http://adlibrum.hu/new/index.php?task=pageDetails&id=501'>a tavaly megjelent első kötet</a> után a 12 évvel később történteket elmesélő <a href='http://adlibrum.hu/new/index.php?task=pageDetails&id=508'>második résszel</a> folytatódott. Most pedig a trilógia befejező részeként <a href='http://adlibrum.hu/new/index.php?task=pageDetails&id=254'>Zizi vadóc kisfiának történetét</a> ismerhetjük meg. [2012-05-10]</p>

<h3>".newslink(500)."A Salto vitale méltatásai</h3>
<p>Frideczky Katalin - <a href='http://adlibrum.hu/new/index.php?task=pageDetails&id=500'>az Ad Librum kiadásában megjelent</a> - <em>Salto vitale</em> című kötetét méltatja a <a href='http://www.regenytar.hu/konyv.php?id=2349#konyv' target='_blank'>regenytar.hu</a>. A Holnap Magazin pedig az áprilisi (nyomtatott) számában közli a szerző <em>Minden relatív</em> című írását. [2012-04-17]</p>

<h3>".newslink(498)."Recenzió a Pusztító viharról</h3>
<p>Az <em>urban fantasy</em> kiváló példájáról, a Dresden-akták első kötetéről ír az  <a href='http://www.ekultura.hu/olvasnivalo/ajanlok/cikk/2012-02-22+09%3A00%3A00/jim-butcher-pusztito-vihar' target='_blank'>ekultura</a>. A recenzió szerint a Jim Butcher \"(j)obbnál jobb ötletekkel szórakoztatója az olvasókat, a kalandos és izgalmas cselekmény mindig rejt magában egy-egy humoros jelenetet.\" [2012-02-28]</p>

<h3>".newslink(469)."A holokausztról szóló személyes elbeszélések pszichológiai elemzése</h3>
<p>Miként változnak az idő múlásával a traumatikus események felidézésének módjai? \"A könyv fontos hozzájárulás a holokauszt-trauma és általában a negatív életesemények  hatásának és feldolgozásának megértéséhez, éppen ezért pszichoterapeuták, pszichológusok  és más segítő foglalkozásúak éppúgy érdeklődéssel olvashatják, mint a holokauszt kutatásával foglalkozó társadalomtudósok.\" (Erős Ferenc ajánlásából). [2012-02-17]</p>

<h3>".newslink(503)."A kulturális emlékezet tudományos igényű elemzése</h3>
<p>Bakó Béla a Nyugat-magyarországi Egyetem oktatója e könyvében kulturális emlékezetet mint a történelmi érdeklődés és a kulturális örökség között álló fogalmat vizsgálja. A kulturális emlékezet kutatása hozzásegíthet egy adott társadalom mai kultúrájának, gondolkodásának és mentalitásának megismeréséhez. [2012-01-26]</p>

^corvinus
<h3>!<img class='thumbnail' src='pics/adlibrumlogo_black_125x47.png' />Az Ad Librum gondozza a Corvinus Egyetem könyveit</h3>
<p>Az Ad Librum Kft. elnyerte a Budapest Corvinus Egyetem TÁMOP programjában született nyolc könyv gondozására vonatkozó megbízást. A közbeszerzési pályázaton három kiadó vett részt, és kizárólag az árajánlat rangsorolt. [2012-01-17]</p>

<h3>".newslink(502)."Structures and Futures of Europe - Conference proceedings</h3>
<p>Ad Librum published the proceedings of the conference organized by the <a href='http://en.mptt.hu/' target='_blank'>Hungarian Political Science Association</a> on 20-21 May, 2011. The volume contains eight papers on consitutional and theoretical issues in the European Union, policy development in the EU, and the European context of parties, elections and Parliaments. [2011-12-23]</p>

<h3>".newslink(499)."Repülők, repülők!</h3>
<p>\"Milyen gépen repültél?\" A válasz mostantól megmutatható az Ad Librum Kiadó könyvében, amely minden repülőt tartalmaz, amivel a világ polgári forgalmában egyáltalán repülhetünk. A teljesen színes könyv minden típust két képpel ismertet, amelyek tényleges repülőtereken készültek, és 176 légitársaság színeit mutatják be. A keménytáblás, igényes megjelenésű könyv kiváló ajándék. [2011-11-23]</p>

<h3>".newslink(498)."A Dresden-akták első kötete immár magyarul</h3>
<p>A filmsorozaton is látott, könyvként pedig óriási példányszámban eladott Dresden-sorozat első kötetét az Ad Librum Kiadó a Wizard Books-szal közösen adta ki magyarul. A kötet borítóillusztrációja az amerikai kiadásból származik, és a nyomdai technológiája is annak felel meg. Ajánljuk a könyvet annak, aki bele szeretne merülni az Urban Fantasy világába, vagy egyszerűen csak egy remek olvasnivalót keres. [2011-10-21]</p>

<h3>".newslink(487)."Recenziók Az aranypárducok ébredéséről</h3>
<p>Két blog is foglalkozott Susanna Lehner Ad Librumnál megjelent regényével:
<p>* A PuPilla Olvas könyves blog értékelését a regényről <a href='http://pupillaolvas.freeblog.hu/archives/2011/11/27/Susanna_Lehner_Az_aranyparducok_ebredese/' target='_blank'>ide kattintva</a> olvashatja.</p>
<p>* A Book Heaven könyves blog írása a regényről <a href='http://nancykonyvei.blogspot.com/2011/11/susanna-lehner-az-aranyparducok.html' target='_blank'>itt olvasható</a>.[2012-09-17]</p>

<h3>".newslink(468)."Könyvajánló videó - Gitárt karokkal</h3>
<p>Nézze meg a Gitárt karokkal című könyvünk ajánló videóját a <a href='http://www.youtube.com/watch?v=WvBU8D4cOnw' target='_blank'>YouTube-on</a>![2012-08-27]</p>

<h3>".newslink(500)."Frideczky Katalin írásai irodalmi folyóiratokban</h3>
<p> Kedves szerzőnk, Frideczky Katalin, újabb írásai több helyen is megjelentek vagy megjelenés alatt vannak. A Szinba Kiadó \"Három az egyben\" pályázatán nyert <em>A világ ura</em> című meséje, mely a <em>HANGADÓ</em> hangoskönyvben szerepel. A <em>Comitatus</em> online folyóirat hamarosan megjelenő nyomtatott számába beválogatta Az igéret szép szó című novellát. A Holnap Magazin <em>Holnapok tükrében</em> című antológiájába öt novellája (Méhen kívüli, Ha fáj a szív, A becsületes megtaláló, Perpetuum stabile, Quarelin) is bekerült. A Palócföldben a közeljövőben jelenik meg <em>A telefon</em> című írása, az Ezredvég pedig a szeptemberi számában közli az <em>Aviatikát</em>.[2012-07-05]</p>

<h3>".newslink(146)."A Türelemfa szerzője a Comedy Centralon</h3>
<p>Redenczki Mária, a Türelemfa - avagy nevel, vagy nevelem a családom? szerzője stand-up komikusként is sikeres, ahogy <a href='http://youtu.be/-CojSMJqUtI' target='_blank'>ez a felvétel</a> bizonyítja.[2012-06-11]</p>

<h3>".newslink(484)."Hogyan programozzunk honlapot?</h3>
<p>Nagy Gusztáv a népszerű Drupal könyve után most azoknak segít, akik az alapszintű webes programozásba szeretnének belemerülni. A Web programozás alapismeretek könnyen érthető bevezetőt kínál a HTML-be, a webszerverek működésébe, a PHP programozásába és programozási keretrendszerek használatába. További információk a szerző honlapján: <a href='http://nagygusztav.hu/web-programozas' target='_blank'>http://nagygusztav.hu/web-programozas</a>[2012-05-20]</p>

<h3>".newslink(394)."A Holtak világa a Wikipedián</h3>
<p>A Holtak világa első kötete most már saját szócikkel rendelkezik a Wikipedián! Ugyancsak erről a könyvről közöl recenziót a PC Guru, amelyben olvasásra ajánlják a kötetet (már annak, aki bírja a zombikat).[2012-04-18]</p>

<h3>".newslink(468)."Gitárt karokkal, avagy a tékozló rocker hazatér</h3>
<p>Megjelent a <a href='gyilkoszenek.com'>gyilkoszenek.com</a> válogatáskötete, amely Alice Coopertől Nina Hagenig számos rocker életútját mutatja be a vad, önemésztő életmódtól a lelki megbékülésig.[2012-03-11]</p>

<h3>".newslink(253)."Akadémiai recenzió Vasvári György könyvéről</h3>
<p>Az MTA folyóirata, a Társadalomkutatás könyvszemle rovata közöl <a href='https://akkrt.metapress.com/content/rrnq526544x0q250/resource-secured/?target=fulltext.pdf&sid=m3p1dpeynosb4m4544o2fb45&sh=www.akademiai.com'>méltató kritikát</a> Vasvári György A társadalmi és szervezeti (vállalati) biztonsági kultúra című, Ad Librumnál megjelent könyvéről. [2012-02-21]</p>
";

//~ $news=str_replace('<h3>','===
//~ ---
//~ layout: blog
//~ category: news',$news);

$news=str_replace('<h3>','',$news);
$news=str_replace('</h3>','',$news);

//~ $news=str_replace('</h3>','
//~ ---',$news);

$news=preg_replace('/\[(.*)\]/','
~$1',$news);

$news=str_replace('\"','"',$news);

$news=str_replace('<p>','%',$news);
$news=str_replace('</p>','',$news);


file_put_contents('newsitems',$news);

$newsitems=explode('^',$news);

$lines=explode(PHP_EOL,$news);

#print_r($lines);

$text="";
foreach($lines as $line) {
	if (substr($line,0,1)=='^') {$seo=substr($line,1);}
	if (substr($line,0,1)=='!') {$title=substr($line,1);}
	if (substr($line,0,1)=='%') {$text=$text.substr($line,1)."\n\n";}
	if (substr($line,0,1)=='~') {$date=substr($line,1);
		$filename=$date."-".$seo.".markdown";
		$content="---\ntitle: $title\nimg: $seo\ncategory: Új megjelenés\nlayout: post\n---\n$text";
		print $filename."\n".$content;
		file_put_contents($filename,$content);
		$text="";
		}
	}

?>
