-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: iun. 08, 2021 la 09:13 PM
-- Versiune server: 10.4.19-MariaDB
-- Versiune PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `whatthefood`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `retete`
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
-- Eliminarea datelor din tabel `retete`
--

INSERT INTO `retete` (`id`, `titlu`, `ingrediente`, `pasi_preparare`, `dificultate`, `durata`, `nume_poza`, `popularitate`) VALUES
(15, 'SupÄƒ cremÄƒ de conopidÄƒ cu brÃ¢nzÄƒ', 'o jumÄƒtate de conopidÄƒ\r\nun cartof\r\n3-4 cÄƒÈ›ei de usturoi\r\n600 ml de supÄƒ de legume (de carne sau apÄƒ)\r\n3 linguri de ulei de mÄƒsline sau unt\r\n400-500 ml de lapte (Ã®n funcÈ›ie de preferinÈ›e)\r\nun sfert de linguriÈ›Äƒ de piper alb\r\no linguriÈ›Äƒ cu sare (sau dupÄƒ gust)\r\n75 de grame de brÃ¢nzÄƒ (eu am folosit Gorgonzola)\r\nun vÃ¢rf de cuÈ›it cu nucÈ™oarÄƒ (sau dupÄƒ gust)\r\nâ€“ pentru decor am folosit frunze de conopidÄƒ, seminÈ›e de susan È™i floricele comestibile', 'Desfacem conopida Ã®n bucheÈ›ele mai mici, eventual le mai È™i tÄƒiem, dacÄƒ sunt prea mari. Frunzele nu le aruncÄƒm pentru cÄƒ le vom folosi pentru decor.\r\nCurÄƒÈ›Äƒm cartoful de coajÄƒ È™i Ã®l tÄƒiem cuburi de mÄƒrime medie.\r\nProcedÄƒm la fel È™i cu usturoiul.\r\nPunem o oalÄƒ Ã®ncÄƒpÄƒtoare pe foc, adÄƒugÄƒm uleiul È™i cÃ¢nd acesta este Ã®ncins pune usturoiul pe care Ã®l rumenim 1 minut.\r\nCÃ¢nd usturoiul Ã®ncepe sÄƒ-È™i schimbe culoarea adÄƒugÄƒm conopida tÄƒiatÄƒ bucÄƒÈ›i È™i o lÄƒsÄƒm È™i pe aceasta sÄƒ se rumeneascÄƒ puÈ›in, amestecÃ¢nd continuu ca sa nu se ardÄƒ.\r\nCÃ¢nd Ã®ncepe sÄƒ se rumeneascÄƒ adÄƒugÄƒm cartoful È™i supa de legume/pui cÃ¢t sÄƒ o cuprindÄƒ.\r\nLÄƒsÄƒm la fiert pentru aproximativ 30 de minute, pÃ¢nÄƒ legumele se gÄƒtesc È™i devin moi, moment Ã®n care dÄƒm oala deoparte de pe foc È™i lÄƒsÄƒm puÈ›in la rÄƒcit.\r\nPasÄƒm totul cu ajutorul unui blender vertical È™i compoziÈ›ia obÈ›inutÄƒ o trecem dupÄƒ aceea printr-o sitÄƒ pentru a separa bucÄƒÈ›ile mai mari rÄƒmase nepasate È™i a o face mai finÄƒ.\r\nPunem Ã®napoi Ã®n oalÄƒ, adÄƒugÄƒm laptele, nucÈ™oara, piperul È™i sarea dupÄƒ gust È™i mai dÄƒm unul, douÄƒ clocote dupÄƒ care o putem servi dar nu Ã®nainte de a o decora È™i de a adÄƒuga cubuleÈ›e de brÃ¢nzÄƒ (eu am folosit Gorgonzola) pentru a se topi È™i a-i da un gust mai bun.\r\nO servim caldÄƒ cu crutoane sau pÃ¢ine prÄƒjitÄƒ alÄƒturi. Are un gust fantastic!', 'mediu', 60, 'supa_crema_conopida.jpg', 6),
(16, 'Musaca de cartofi cu peÈ™te', '1 bucata ceapa rosie\r\n 2 bucati foi de dafin\r\n 1 praf piper mozaic\r\n 1 praf sare de mare\r\n 50 g unt\r\n 1 legatura cimbru verde\r\n 1 bucata lamaie verde\r\n 2 bucati galbenusuri\r\n 1 praf condiment pentru peste\r\n 100 ml suc de rosii\r\n 800 g peste\r\n 800 g cartofi\r\n 3 bucati morcovi\r\n 50 ml lapte', 'ÃŽnvaÅ£Äƒ ÅŸi tu sÄƒ faci musaca de cartofi ca la mama acasÄƒ! Un fel clasic de mÃ¢ncare sÄƒÅ£ioasÄƒ, dupÄƒ o reÈ›etÄƒ foarte simplÄƒ.\r\n\r\n1. PeÈ™tele curÄƒÈ›at È™i spÄƒlat se taie Ã®n bucÄƒÈ›i potrivit de mari ÅŸi se È™terge cu un prosop absorbant.\r\n\r\nSe condimenteazÄƒ bucÄƒÅ£ile cu condimentele pentru peÈ™te, se stropesc cu zeamÄƒ de lÄƒmÃ¢ie, apoi se pun Ã®ntr-o oalÄƒ\r\n\r\nÃ®mpreunÄƒ cu ceapa roÈ™ie felii, morcovul rondele, sucul de roÈ™ie, foile de dafin, cimbrul verde È™i boabele de piper.\r\n\r\nSe adaugÄƒ apÄƒ cÃ¢t sÄƒ acopere tot peÈ™tele.\r\n\r\nSe pune la fiert timp de 40-45 de minute, amestecÃ¢nd din cÃ¢nd Ã®n cÃ¢nd.\r\n\r\n2. DupÄƒ ce s-a fÄƒcut peÈ™tele, se lasÄƒ sÄƒ se rÄƒceascÄƒ, apoi se desface cu atenÈ›ie de pe oase, lÄƒsÃ¢nd douÄƒ bucÄƒÈ›i Ã®ntregi.\r\n\r\n3. Cartofii se fierb Ã®n apÄƒ cu sare, apoi se paseazÄƒ cu untul È™i laptele cÄƒlduÈ›. ÃŽntr-un vas termorezistent se pune un strat de piure de cartofi, un strat din peÈ™tele desfÄƒcut bucÄƒÈ›i mici, morcovul rÄƒmas de la fierbere, alt strat de piure, iar deasupra cele douÄƒ bucÄƒÈ›i maimari de peÈ™te.\r\n\r\nCu un poÈ™ se pune restul de piure. Se unge deasupra cu gÄƒlbenuÈ™ de ou È™i se dÄƒ la cuptorul preÃ®ncÄƒlzit la 180Â°C, timp de 15-20 de minute, pÃ¢nÄƒ cÃ¢nd devine rumen.', 'dificil', 65, 'musaca_cartofi.jpg', 11),
(17, 'PrÄƒjiturÄƒ greceascÄƒ cu griÈ™', '350 grame de griÈ™\r\n 1 linguriÈ›Äƒ praf de copt\r\n 1 linguriÈ›Äƒ de bicarbonat de sodiu\r\n 330 de grame de iaurt grecesc natur\r\n jumÄƒtate de linguriÈ›Äƒ de pudrÄƒ de mastic\r\n 60 ml de suc proaspÄƒt de portocale\r\n 1 lingurÄƒ de rÄƒzÄƒturÄƒ de portocalÄƒ\r\n ulei pentru uns forma de copt\r\n migdale fÄƒrÄƒ coajÄƒ pentru decor', 'Samali este o prÄƒjiturÄƒ greceascÄƒ Ã®nsiropatÄƒ. Aceasta nu conÈ›ine fÄƒinÄƒ È™i lapte, ci griÈ™ È™i iaurt grecesc. Aroma deosebitÄƒ a acestei prÄƒjituri este datÄƒ de pudra de mastic, dar dacÄƒ nu o gÄƒsiÈ›i prin magazinele romÃ¢neÈ™ti o puteÈ›i omite.\r\n\r\nCum se preparÄƒ samali â€“ prÄƒjiturÄƒ greceascÄƒ cu griÈ™\r\nCum se preparÄƒ siropul pentru prÄƒjitura Samali\r\n1. Toate ingredientele pentru sirop se amestecÄƒ Ã®ntr-o oalÄƒ È™i se pun la foc mediu.\r\n2. Se aduce amestecul la punctul de fierbere È™i apoi se reduce focul la mic pÃ¢nÄƒ se dizolvÄƒ zahÄƒrul.\r\n3. Se ia de pe foc È™i se dÄƒ deoparte. Se acoperÄƒ.\r\n\r\nCum se preparÄƒ aluatul pentru prÄƒjitura Samali\r\n1. ÃŽntr-un castron Ã®ncÄƒpÄƒtor se amestecÄƒ bine griÈ™ul, praful de copt, bicarbonatul de sodiu. Restul ingredientelor se adaugÄƒ treptat È™i se amestecÄƒ cu ajutorul unei spatule sau a mixerului electric.\r\n2. Se unge cu ulei o tavÄƒ de 20Ã—25 cm È™i se toarnÄƒ aluatul uniform.\r\n3. Se acoperÄƒ tava cu folie alimentarÄƒ È™i se dÄƒ deoparte timp de cel puÈ›in 2 ore sau pÃ¢nÄƒ ce lichidul este absorbit sau prÄƒjitura pare uscatÄƒ.\r\n4. Se preÃ®ncÄƒlzeÈ™te cuptorul la 175 de grade Celsius.\r\n5. PrÄƒjitura se porÈ›ioneazÄƒ Ã®n formÄƒ de romburi Ã®n tavÄƒ cu ajutorul unui cuÈ›it. Fiecare bucatÄƒ de prÄƒjiturÄƒ este decoratÄƒ cu o migdalÄƒ.\r\n6. Samali se coace pe mjlocul cuptorului timp de 30 de minute sau pÃ¢nÄƒ se rumeneÈ™te frumos.\r\n7. PrÄƒjitura se scoate din cuptor È™i se Ã®nsiropeazÄƒ uniform cu siropul rÄƒcit preparat anterior.\r\n8. Desertul se lasÄƒ 30 de minute pentru a absorbi siropul È™i apoi se serveÈ™te.', 'usor', 75, 'parjitura_gris.jpg', 3),
(18, 'Orez cu sofran', 'o canÄƒ de orez cu bob lung\r\n3 linguri ulei de mÄƒsline\r\n3 cÄƒÅ£ei usturoi romÃ¢nesc\r\n1/2 linguriÅ£Äƒ ÅŸofran\r\n1 lingurÄƒ nuci\r\n1 linguriÅ£Äƒ stafide\r\nsare\r\npiper', 'Intr-o cratiÅ£Äƒ se pune uleiul, usturoiul zdrobit ÅŸi orezul. Focul sÄƒ nu fie prea iute, cÄƒci se prÄƒjesc circa 4 minute, pÃ¢nÄƒ cÃ¢nd orezul devine lucios.\r\n\r\nSe pun douÄƒ cÄƒni de apÄƒ ÅŸi se lasÄƒ la fiert. DupÄƒ ce a absorbit toatÄƒ apa, se verificÄƒ sÄƒ fie fiert, dupÄƒ care se ia de pe foc ÅŸi se adaugÄƒ ÅŸofranul, stafidele ÅŸi nucile. Se gustÄƒ de sare ÅŸi piper, apoi se acoperÄƒ ÅŸi se lasÄƒ 5 minute sÄƒ tragÄƒ toate aromeÂ¬le. Savuros! (Retete pentru Postul Nasterii Domnului, Editura Lumea Credintei)', 'usor', 40, 'orez_sofran.jpg', 12),
(19, 'Papanasi modovenesti', '500 â€“ 550 g branza dulce de vaci\r\n100 g faina\r\n2 oua marimea M\r\n3-4 g praf de copt\r\nO lingurita cu varf razatura de portocala sau lamaie\r\nUn praf de sare\r\nDoua plicuri de zahar vanilat\r\nUlei pentru prajit\r\nSmantana grasa si dulceata pentru servit', 'Un alt secret al papanasilor este ca atunci cand le dam forma ne ajutam de ulei, nu de faina, asa ca ne ungem bine masa si mainile.\r\n\r\nLuam bucati de aluat de 120 g, nu mai mari, formam niste turte grasane, apoi le impungem cu degetul si facem o gaura larga cam de 2 cm.\r\n\r\nDin aluatul nostru ies cam patru astfel de papanasi, iar din compozitia ramasa, facem bile de aproximativ 30 de grame.\r\n\r\nIi prajim cu focul mic spre mediu (adica cam la 150-160 grade Celsius), aproximativ 7 minute, timp in care ii intoarcem de mai multe ori. Daca se prajesc prea repede pot ramane cruzi la mijloc.\r\n\r\nSe servesc cu smantana grasa si cu o dulceata acrisoara la alegerea voastra.\r\n\r\nPofta buna!', 'dificil', 80, 'Papanasi-prajiti.jpg', 4),
(20, 'Mamaliga cu branza la cuptor', '250 g mÄƒlai\r\n1250 ml apÄƒ\r\n20 unt 82%\r\n80 g smÃ¢ntÃ¢nÄƒ 20%\r\n200 g mozzarella sau caÈ™caval mai gras (Gouda, Tilsit, Emmentalerc)\r\n20 g parmezan (opÈ›ional)\r\nsare, piper', 'Se pun la fiert 1250 ml de apÄƒ, cu puÈ›inÄƒ sare. SupÄƒ ce fierbe apa, se adaugÄƒ fÄƒina de mÄƒlai, puÈ›in cÃ¢te puÈ›in. Se amestecÄƒ Ã®ncontinuu, cu ajutorul unui tel, astfel Ã®ncÃ¢t mÄƒmÄƒliga sÄƒ nu se formeze cocoloaÈ™e.\r\n\r\nAtenÈ›ie! La un moment dat, dupÄƒ ce se Ã®ngroaÈ™Äƒ, mÄƒmÄƒliga poate Ã®ncepe sÄƒ stropeascÄƒ. Prin urmare, focul trebuie sÄƒ fie dat la mic È™i trebuie sÄƒ se amestece Ã®ncontinuu, dar nu cu telul, ci cu o lingurÄƒ din lemn. Altfel, se pot Ã®ndoi sÃ¢rmele telului.\r\n\r\nCÃ¢nd mÄƒmÄƒliga a fiert È™i a cÄƒpÄƒtat consistenÈ›a preferatÄƒ, se ia de pe foc È™i se lasÄƒ puÈ›in la rÄƒcit. Se amestecÄƒ, din cÃ¢nd Ã®n cÃ¢nd. Apoi, se adaugÄƒ peste ea untul È™i smÃ¢ntÃ¢na. Se pot adÄƒuga acum, opÈ›ional, È™i piperul È™i parmezanul ras. Se amestecÄƒ totul bine.', 'usor', 30, 'mamaliguta-cu-branza.jpg', 5);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `utilizatori`
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
-- Eliminarea datelor din tabel `utilizatori`
--

INSERT INTO `utilizatori` (`id`, `nume`, `prenume`, `email`, `parola`, `sex`, `data_nasterii`, `data_cont`) VALUES
(23, 'Tudorache', 'Cristian', 'tudoracheandrei96@yahoo.com', '$2y$10$rvJ08H6wWieBRZ13N9E/Se7QdTKyf2gvJo3UtkhADXnMurJRxWrO6', 'M', '2002-02-22', '2021-06-01 15:17:46'),
(29, 'Marin', 'Marius', 'mariusmarin@gmail.com', '$2y$10$3tuqlwOFxcJ9ykrOpIfsIuX8noB87p3pISbE8.W90FzGGHayDzQRy', 'M', '1996-11-01', '2021-06-05 15:39:23');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `retete`
--
ALTER TABLE `retete`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `utilizatori`
--
ALTER TABLE `utilizatori`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `retete`
--
ALTER TABLE `retete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pentru tabele `utilizatori`
--
ALTER TABLE `utilizatori`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
