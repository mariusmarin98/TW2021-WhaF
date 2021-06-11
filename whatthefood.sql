-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 11:58 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `whatthefood`
--

-- --------------------------------------------------------

--
-- Table structure for table `retete`
--

CREATE TABLE `retete` (
  `id` int(11) NOT NULL,
  `titlu` varchar(80) NOT NULL,
  `ingrediente` text NOT NULL,
  `pasi_preparare` text NOT NULL,
  `dificultate` varchar(10) NOT NULL,
  `durata` tinyint(4) NOT NULL,
  `nume_poza` text NOT NULL,
  `popularitate` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retete`
--

INSERT INTO `retete` (`id`, `titlu`, `ingrediente`, `pasi_preparare`, `dificultate`, `durata`, `nume_poza`, `popularitate`) VALUES
(1, 'Spaghetti Bolognese', '500g spaghetti, 500g carne tocata de vita sau mix cu porc, 2 morcovi, 1 ceapa mare, 2 rosii, oregano, busuioc, sare, piper, nucsoara', 'Intr-o tigaie se pune carnea tocata si un pic de unt sau ulei, se sareaza si pipereaza si se lasa la rumenit. Se curata morcovii si se rad sau se taie marunt. Si ceapa se curata si se rade. Rosiile se oparesc un pic in apa, se scoate pielita (mie imi plac si cu pielita) si se toaca marunt. Se adauga la carnea rumenita si se condimenteaza. Rosiile lasa zeama multa si sosul are lichid suficient. Daca vi se pare prea sec puteti adauga putina supa sau apa. Se fierbe sosul cca. 40 de minute la foc mic cu capac (stropeste). Se amesteca ocazional. \r\nLa final se mai presara cu putin busuioc proaspat. Si cam asta e sosul pentru spaghetti bolognese reteta rapida.\r\nSe fierb spaghetti conform instructiunilor de pe pachet, in apa multa cu putina sare. Sosul bolognese se serveste cu spaghetti fierbinti. Deasupra se presara parmezan ras.', 'mediu', 55, 'spaghetti-bolognese.jpg', 58),
(2, 'Ostropel de pui', '1kg de carne de pui, 500g de suc de rosii gros, 2-3 catei de usturoi, 1 ceapa taiata cubulete (200g), 1 morcov mic dat pe razatoare, 1 lingura de faina alba, 30-40ml de ulei, sare, cimbru, piper, 1 frunza de dafin, apa', 'Turnam uleiul intr-o tigaie sau intr-o cratita cu gura larga. Cand uleiul s-a incins, adaugam bucatile de pui.\r\nLe intoarcem si pe partea cealalta, nu vrem sa prajim carnea, ci doar cat se albeste si se rumeneste extrem de usor. Aceasta va da un gust tare bun ostropelului nostru.\r\nAdaugam apa, cat sa acopere carnea si lasam sa fiarba, la foc mic. Vom aduna spuma care se formeaza deasupra.\r\nAdaugam apoi morcovul si ceapa, mai amestecam putin.\r\nLasam totul sa fiarba la foc mic, pana cand carnea este bine patrunsa.\r\nDaca folositi pui din comert, in 30 de minute carnea este deja fiarta. Daca este pasare de tara, va dura mai mult, depinde cat de batrana este pasarea.\r\nCand carnea este fiarta, adaugam sucul de rosii, frunza de dafin, 2 lingurite cu varf de sare, 1 lingurita cu varf de cimbru, 1 lingurita rasa de piper. Amestecam putin si lasam totul sa fiarba foarte bine.\r\nProbam carnea, sa vedem cat de bine este fiarta.\r\nPeste faina adaugam putina apa, amestecam folosind o furculita, apoi rasturnam in tigaie.\r\nMiscam tigaia, ca sa se imprastie sosul de faina peste tot, iar acum adaugam si usturoiul. Scoatem frunza de dafin, pentru ca daca o lasam, sosul va deveni amar.\r\nGustam sosul si vedem daca mai este nevoie de piper, sare, cimbru sau usturoi. Daca mai este nevoie, mai adaugam. Puteti adauga si putina boia de ardei dulce sau iute, dupa gust.', 'dificil', 40, 'ostropel-de-pui.jpg', 97),
(3, 'Alba ca Zapada', '3 oua, 70g ulei, 420g zahar, 50g lapte, 550g faina, 1 lingurita de praf de copt, 1 lingurita praf de sare, 1l lapte, 200g gris, 250g unt gras, 2 lamai, 1 pastaie de vanilie, zahar pudra', 'Se pun intr-un vas ouale, sarea, uleiul, zaharul si se bat cu mixerul pana cand se topeste zaharul complet. In cateva minute e gata. Se adauga faina, laptele si praful de copt sau amoniacul stins cu zeama de lamaie si se framanta aluatul. Iese un aluat lipicios, dar nu foarte moale. Daca mai e nevoie, se mai adauga o lingura de lapte sau de faina. Asta depinde de gradul de umiditate si de puterea de absobtie a lichidului pe care le are faina. Se lasa aluatul sa se odihneasca minim 2 ore, invelit in folie, ca sa nu se usuce. Ideal este sa lasati aluatul la rece peste noapte. In timpul acesta, aluatul devine mai maleabil, mai usor de intins, este ca si cum ar fi lasat la dospit. \r\nSe imparte aluatul in 4 bucati egale. Eu am avut 1 kg de aluat (si inca 10g) asa ca am cantarit bucati de 250 g.\r\nSe presara masa, planseta, cu faina din abundenta, se pune bucata de aluat, se mai presara faina si deasupra si se intinde foaia.\r\nEste bine sa faceti un desen cu creionul pe planseta sau pe o foaie de copt, ca sa faceti foile cat mai egale, exact cat tava de copt. In felul acesta evitati pierderile.\r\nEste nevoie de putina rabdare, sa intindeti foile cat mai subtiri, exact cat tava normala de aragaz.\r\nSe inteapa foile cu o furculita ici-colo, ca sa nu se umfle inestetic la copt. Se coc pe dosul tavii presarate cu faina sau pe hartie de copt.\r\nSe coc la foc de 200 de grade Celsius, timp de 4 , maximum 5 minute. Verificati dupa 3 minute. Aceste foi nu trebuie sa fie rumenite, trebuie sa fie usor coapte si se ard foarte repede. Cand sunt usor rumene pe margini, le dati deoparte.\r\nSe pun la fiert laptele cu zaharul, se adauga pastaile de vanilie (sau esenta) taiate in 2 si semintele, care se pun tot in lapte. Se adauga acum si coaja rasa de lamaie.\r\nCand laptele clocoteste, se adauga grisul in ploaie si se amesteca repede cu un tel, sa nu aiba cocoloase. Se lasa sa dea in clocot 2-3 minute, apoi se stinge focul si se lasa la racit. Este bine sa acoperiti cu o bucata de folie, ca sa nu prinda crusta deasupra.\r\nSe verifica foile si cea mai frumoasa se lasa pentru deasupra.\r\nDaca este una mai „bronzata”, o puneti jos. Se imparte crema in 3 parti, care se intinde pe fiecare foaie. Se pune ultima foaie si se da prajitura deoparte.\r\nSe aseaza pe loc drept, se pune deasupra un fund de lemn sau ceva drept, cat prajitura de mare, se aseaza deasupra greutati, care sa tina prajitura dreapta.\r\nSe lasa minim 12 ore. In timpul acesta prajitura se va inmuia.', 'dificil', 40, 'alba-ca-zapada.jpg', 31),
(4, 'Supa crema de varza rosie', 'o jumatate varza rosie, o ceapa rosie, 2 graunti usturoi, 1 morcov, sare, piper, linguri ulei, o lingura unt, 1 cartof, 200 ml smantana, o foaie de dafin, cimbru, lpentru decor: un morcov fiert, seminte de muguri de pin, marar, crutoane', 'Ceapa si morcovul se taie cubulete si se pun la calit in ulei si unt, alaturi de cateii de usturoi.\r\nDupa ce s-au calit, cateii de usturoi se scot si se adauga cartoful taiat cubulete, varza taiata fideluta, apa cat sa treaca peste legume si foaia de dafin, plus sare – dupa gust.\r\nSe fierbe totul pana se inmoaie legumele.\r\nSe blenduieste totul, apoi se adauga smantana, cimbru, piper si sare, daca mai este nevoie.', 'usor', 20, 'supa-crema-de-varza-rosie.jpg', 46),
(5, 'Orez prajit cu piept de pui si ou', ', 300g orez\r\n, 3 linguri ulei de m?sline\r\n, 400g piept de pui\r\n, sare\r\n, piper\r\n, 4 oua\r\n, 3 linguri sos de soia\r\n, 200-250g amestec legume congelate\r\n, 4 fire de ceapa verde', 'Pentru inceput punem o cratita cu apa la fiert in care vom pune orezul si il vom lasa sa fiarba, dar nu in totalitate, ca sa se inteleaga mai bine, putem spune ca trebuie sa fie aproape fiert.\r\nEste important sa amestecam mereu, astfel incat orezul sa nu se prinda.\r\n\r\nDupa ce acesta a fiert cat ne-am dorit il punem intr-o sita si il bagam sub jet de apa rece.\r\n\r\nIl lasam deoparte si ne ocupam de restul.\r\n\r\nIntr-o tigaie mai mare punem la incins o lingura de ulei de masline in care prajim pieptul de pui tocat cubulete pe care l-am condimentat cu sare si piper dupa gust.\r\n\r\nPieptul prajit il punem intr-un bol. Curatam putin tigaia in cazul in care au ramas urme de carne, punem in ea o lingura de ulei de masline si lasam sa se incinga.\r\n\r\nBatem ouale bine ca la omleta si le punem in tigaia incinsa. Amestecam mereu cu o paleta, astfel incat omleta sa devina bucatele cat mai mici (crumbles).\r\n\r\nPunem bucatele de ou peste pieptul de pui prajit, iar tigaia o punem din nou la foc cu o lingura de ulei.\r\n\r\nCand uleiul este incins punem orezul fiert si racit in tigaie si il lasam sa se incalzeasca pe ambele parti,cam doua minute pe fiecare parte.\r\n\r\nPeste orezul cald punem si sosul de soia,amestecam foarte bine apoi adaugam pe rand pieptul de pui, omleta, amestecul de legume si la final ceapa verde tocata.\r\n\r\nAmestecam si daca mai este nevoie putem sa mai adaugam sare.\r\n\r\nLasam totul la foc mic pentru cateva minute altfel incat sa aiba timp si legumele sa se gateasca.', 'usor', 50, 'orez-prajit-cu-piept-de-pui-si-ou.jpg', 66),
(6, 'Aripioare de pui cu sos dulce-acrisor', '3 kg de aripioare de pui\r\n, 600 g de sos dulce-acrisor\r\n, 100 ml de sos de soia\r\n, 2 capatani de usturoi', 'Peste sosul dulce-acrisor adaugam usturoiul feliat si sosul de soia. Amestecam totul foarte bine, pana obtinem o consistenta omogena.\r\n\r\nDupa ce am curatat si spalat aripioarele, le asezam in tava, eu am incercat sa le asez intr-un strat uniform, pentru ca timpul de gatire sa fie uniform.\r\n\r\nTurnam sosul pe care l-am preparat peste aripioare. Puteti vedea in reteta video cum am intins sosul peste aripioare. Nu trebuie sa va ingrijorati daca acesta va fi doar deasupra acestora, pentru ca in timpul gatirii sosul va patrunde aripioarele peste tot.\r\n\r\nPunem tava la cuptor, la foc maxim la cuptoarele pe gaz, foc sus-jos la cuptoarele electrice.\r\n\r\nAcoperim tava cu folie de aluminiu pentru 30 de minute, apoi scoatem folia, verificam daca s-au inmuiat aripioarele. Daca nu s-au inmuiat, punem folia si le mai lasam 10-20 de minute, pana cand vor fi bine patrunse.\r\n\r\nDupa acest timp, scoatem folia de deasupra si le mai lasam putin la cuptor, cat sa se rumeneasca.', 'usor', 20, 'aripioare-de-pui-cu-sos-dulce-acrisor.jpg', 60),
(7, 'Pui cu ciuperci si usturoi, la tigaie', '1 kg de pulpe de pui dezosate\r\n, 500 g de ciuperci\r\n, sare\r\n, piper\r\n, cimbru\r\n, ulei\r\n, 4-5 catei de usturoi\r\n, optional: cateva felii de ardei iute', 'Taiem carnea suvite, cam de un deget.\r\n\r\nAdaugam in tigaie 30-40 de ml de ulei si o punem la incins.\r\n\r\nPunem carnea in uleiul incins.\r\n\r\nPregatim si ciupercile: le taiem in doua, daca sunt mai micute sau in trei, daca sunt mai mari.\r\n\r\nCarnea trebuie gatita pana cand se albeste, apoi adaugam ciupercile.\r\n\r\nAdaugam in tigaie o lingurita de sare, aceasta va ajuta sa iasa apa din ciuperci.\r\n\r\nAcoperim tigaia cu un capac si lasam totul sa fiarba inabusit, pana cand se inmoaie ciupercile si carnea.\r\n\r\nAmestecam usor, apoi punem o jumatate de lingurita de piper si o lingurita rasa de cimbru.\r\n\r\nCand zeama a scazut, putem lasa sa se rumeneasca carnea si ciupercile sau lasam asa cum este.\r\n\r\nDoar adaugam usturoiul, stingem focul si lasam mancarea sa se odihneasca pentru 10 minute, inainte sa servim mancarea.', 'mediu', 30, 'Pui-cu-ciuperci-si-usturoi-la-tigaie.jpg', 72),
(8, 'Covrigi de casa pufosi', '250 g faina\r\n, 175 ml apa calduta\r\n, ½ lingura zahar\r\n, 1 lingurita sare\r\n, 1 lingurita drojdie uscata\r\n, 25 g unt\r\n, 2l apa\r\n, 60 g bicarbonat de sodiu\r\n, Topping\r\n, 1 galbenus\r\n, 1 lingura apa\r\n, Sare grunjoasa\r\n, Susan\r\n, Cascaval razuit', 'Intr-un bol mic, amestecam apa calduta cu sarea, zaharul si drojdia. Lasam sa stea 5 minute.\r\n\r\nIntr-un bol mare punem faina si adaugam untul topit iar apoi amestecul preparat anterior cu apa si drojdie. Amestecam cu o lingura de lemn pana incepe sa se lege aluatul si se dezlipeste de marginile bolului.\r\n\r\nTurnam tot continutul bolului pe planseta presarata usor cu faina si framantam 5-6 minute pana aluatul are o consistenta omogena si nu se mai lipeste nici de maini, nici de planseta.\r\n\r\nPunem aluatul intr-un bol uns cu ulei, il acoperim cu folie de plastic sau un servet curat de bucatarie si il lasam sa dospeasca aproximativ 1 ora.\r\n\r\nPreincalzim cuptorul la 180 de grade Celsius si pregatim 2 tavi, tapetandu-le cu hartie de copt.\r\n\r\nIntr-o oala mare punem 2 l de apa la fiert si dizolvam 60 g bicarbonat de zodiu in aceasta.\r\n\r\nNe intoarcem la aluat pana incepe sa fiarba apa. Punem aluatul inapoi pe planseta si il framantam usor de cateva ori.\r\n\r\nImpartim aluatul in 6-8 bucati. Rulam aluatul cu palmele si formam un serpisor, pe care il impletim sa primeasca forma unui covrig.\r\n\r\nFormam din serpisor litera U, rasucim capetele intre ele, iar apoi le aducem la baza literei, apasandu-le si lipindu-le de aceasta.\r\n\r\nPunem covrigul format in tava pe hartie de copt. Procedam la fel si cu restul aluatului.\r\n\r\nDupa ce am terminat de format toti covrigii si apa din oala a inceput sa fiarba iar bicarbonatul de sodiu s-a dizolvat, trecem la pasul urmator.\r\n\r\nLuam cate un covrig o data, cu grija sa nu il desfacem, si il punem in apa. Il lasam timp de 30 de secunde. Este bine sa aveti un cronometru la indemana. II scoatem cu o spatula lata si ii punem inapoi pe hartia de copt. Prin acest procedeu ne vom asigura ca raman moi si pufosi.\r\n\r\nDupa ce am terminat de fiert cate 30 de secunde fiecare covrig si i-am pus inapoi in tavi, ii ungem cu galbenusul batut amestecat cu 1 lingura de apa, iar apoi presaram pe deasupra toppingul preferat. Cateva sugestii: cascaval razuit, susan, mac, sare grunjoasa.', 'mediu', 70, 'reteta-covrigi-de-casa-pufosi.jpg', 21),
(9, 'Pizza Presto', '1 kg faina cu 14gr proteina,  550 ml apa la temperatura camerei\r\n, 8 gr drojdie proaspata , 30 ml ulei de masline\r\n, 20 gr sare de mare Pentru pizza\r\n, 80 gr rosii decojite la cutie in suc\r\n, 50 gr sunca foarte fubtire feliata\r\n, 50 gr ciuperci proaspete feliate\r\n, 50 gr mozzarela proaspata\r\n, 50 ml ulei de masline\r\n, 10 frunze de nalba\r\n, sare\r\n, piper\r\n, 1 lingura ulei de masline pentru pus peste pizza cand este gata.', 'Faina cu 500 ml apa se pun in robot si se mixeaza pana se formeaza un aluat. Se opreste robotul, se acopera cu un prosop si se lasa la odihnit 20 de minute. Se da drumul din nou la robot si se adauga drojdia dizolvata cu 50 ml apa. Se mixeaza 2 minute.\r\n\r\nSe adauga sarea de mare si se mai mixeaza inca 2 minute. Se adauga uleiul de m?sline si se mixeaza 6 minute.\r\n\r\nSe acopera cu folie si se lasa la dospit 30 minute. Se scoate aluatul pe masa de lucru si se imparte aluatul in bile fiecare cantarind 250 gr.\r\n\r\nSe acopera cu folie alimentara si se baga in frigider pentru 72 de ore. Dupa ce au trecut cele 72 de ore se poate pregati pizza.\r\n\r\nIn cele 50 ml de ulei de masline vom pune frunze de nalba dupa ce uleiul este incins si o tinem cateva minute.\r\n\r\nSe scoate pe un servetel de bucatarie din hartie pentru a se absorbi surplusul de ulei (o vom pastra si o vom pune deasupra pe pizza cand este gata). Daca nu aveti frunze de nalba, nu folositi.\r\nLuam o bila de aluat si o intindem cu mainile sau cu merdeneaua la o dimensiune de 30 cm.\r\n\r\nDeasupra punem rosiile zdrobite cu o furculita. Punem peste rosii mozzarela, sunca, ciupercile, sare si piper.\r\n\r\nCuptorul trebuie sa fie bine incins. Eu am bagat in cuptor o piatra speciala pentru pizza si l-am lasat la incins mai bine de 60 de minute la o temperatura de peste 250 grade (atat am maxin la cuptor).\r\n\r\nPizza se aseaza pe piatra din cuptor si se coace timp de 2 pana la 3 minute. Se scoate afara si se pune deasupra nalba si o lingura de ulei de masline.', 'mediu', 60, 'pizza-presto.jpg', 29),
(10, 'Ciolan de porc cu miere, la cuptor', '1 ciolan de porc afumat sau neafumat cam de 1 kg\r\n, 1 capatana de usturoi\r\n, 1 ceapa\r\n, 1 lingurita de miere\r\n, 1 lingurita de piper boabe\r\n, 2 frunze de dafin\r\n, sare\r\n, piper macinat\r\n, vin alb 30 ml', 'Eu am folosit un ciolan afumat, pregatit de noi, de la porcul de la Craciun. Puteti folosi si un ciolan afumat din comert sau unul neafumat.\r\n\r\nSe parleste foarte atent, sa nu aiba par si se spala.\r\n\r\nSe pune la fiert. Eu l-am fiert in oala sub presiune si in felul acesta am castigat mult timp.\r\n\r\nIn oala sub presiune se pun ceapa, usturoiul, foile de dafin si boabele de piper. Rasolul meu era sarat, asa ca nu am mai pus sare.\r\nPregatim acum un amestec din miere, 2 linguri de ulei, si sare. Daca mierea este zaharisita, o incalziti putin, sa fie fluida.\r\nSe unge ciolanul, se toarna acum vinul in tava si o cescuta de zeama in care a fiert ciolanul. Se unge ciolanul, se toarna acum vinul in tava si o cescuta de zeama in care a fiert ciolanul.\r\nSe lasa sa respire 10 – 15 minute, sa se relaxeze, nu se serveste imediat. In acest fel, nu se va sfarama carnea.', 'dificil', 45, 'Ciolan-de-porc-cu-miere-la-cuptor-reteta-gina-bradea-2-700x525.jpg', 53),
(11, 'Orez Chashu', '3 oua fierte moi\r\n, 200 g muschiulet de porc sau bacon\r\n, 1 ceapa verde\r\n, 1 ceapa alba\r\n, Sosul de baza:\r\n, 65 ml sos soya\r\n, 60 g zahar\r\n, 50 ml mirin\r\n, 350 ml apa\r\n, 3 catei de usturoi\r\n, 2 ardei iuti rosii (optional)', 'Intr-o tigaie medie se incalzeste sosul de soya, zaharul, apa, usturoiul zdrobit putin cu lama cutitului, mirin si ardeii iuti daca se doreste a fi picant in final.\r\n\r\nMirin este un fel de vin de orez dulce, o specialitate japoneza si poate fi inlocuit cu vin alb indulcit cu 1-2 lingurite zahar la 250 ml vin.\r\n\r\nCarnea se pune in acest sos preparat si se fierbe pana devine maronie.\r\n\r\nSe serveste imediat, cu orez fiert, peste care se pune muschiuletul gatit in sos, ouale firte moi taiate jumatati, puse pe pat de ceapa alba taiata julien si ceapa verde taiata bucatele. De asemenea se mai adauga sos din tigaie peste oua si peste orez.', 'dificil', 40, 'orez-chashu-reteta-simpla-1-500x375.jpeg', 41),
(12, 'paine prajita cu unt', 'paine feliata, unt asdfasdfasdfsdagdsgfasdgfdsgfsdgsdfgsdf', 'se prajeste paine, se unge cu untsdagsdfaggsdfafsdafasdfasdfsdafgsadgdfsagsadfgsad', 'usor', 10, 'paine-prajita-cu-unt.jpg', 16);

-- --------------------------------------------------------

--
-- Table structure for table `utilizatori`
--

CREATE TABLE `utilizatori` (
  `id` smallint(6) NOT NULL,
  `nume` text NOT NULL,
  `prenume` text NOT NULL,
  `email` varchar(35) NOT NULL,
  `parola` text NOT NULL,
  `sex` char(2) NOT NULL,
  `data_nasterii` date NOT NULL,
  `data_cont` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilizatori`
--

INSERT INTO `utilizatori` (`id`, `nume`, `prenume`, `email`, `parola`, `sex`, `data_nasterii`, `data_cont`) VALUES
(23, 'Momita', 'Andy', 'andy.momita@gmail.com', '$2y$10$rvJ08H6wWieBRZ13N9E/Se7QdTKyf2gvJo3UtkhADXnMurJRxWrO6', 'M', '1998-05-13', '2021-06-01 15:17:46'),
(29, 'Marin', 'Marius', 'mariusmarin@gmail.com', '$2y$10$3tuqlwOFxcJ9ykrOpIfsIuX8noB87p3pISbE8.W90FzGGHayDzQRy', 'M', '1996-11-01', '2021-06-05 15:39:23'),
(30, 'Doe', 'John', 'johndoe@gmail.com', '$2y$10$HntlubXlNfxvveXvy4CtVeAzweDyE.ZNE/yp1Hi8CuLT5K.bgBaIG', 'M', '1998-12-12', '2021-06-08 17:28:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `retete`
--
ALTER TABLE `retete`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilizatori`
--
ALTER TABLE `utilizatori`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `retete`
--
ALTER TABLE `retete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `utilizatori`
--
ALTER TABLE `utilizatori`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
