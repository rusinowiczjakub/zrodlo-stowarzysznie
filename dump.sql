-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: sql.bitnet.nazwa.pl    Database: bitnet_zrodlo
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.26-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C53D045F4B89032C` (`post_id`),
  CONSTRAINT `FK_C53D045F4B89032C` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image`
--

LOCK TABLES `image` WRITE;
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
INSERT INTO `image` VALUES (3,3,'5a552660b4c5c.jpeg'),(4,3,'5a55267c8aada.jpeg'),(5,3,'5a55269e858b6.jpeg'),(6,3,'5a5526c774412.jpeg'),(7,3,'5a5526e82067e.jpeg'),(8,3,'5a5527278d670.jpeg'),(9,3,'5a5527e051517.jpeg'),(10,4,'5a553c420922b.jpeg'),(11,4,'5a553c605f8bd.jpeg'),(12,4,'5a553c7a0f100.jpeg'),(13,4,'5a553c96dab08.jpeg'),(14,4,'5a553cc57f418.jpeg'),(15,4,'5a553cefda3e1.jpeg'),(16,5,'5a55486146e6b.jpeg'),(17,5,'5a55487f07725.jpeg'),(18,5,'5a5548b879267.jpeg'),(20,5,'5a5548e361c8f.jpeg'),(21,5,'5a5548fc922a7.jpeg'),(22,5,'5a554914d49d9.jpeg'),(23,5,'5a554934562ae.jpeg'),(24,5,'5a55494bbea87.jpeg'),(25,5,'5a554963f2d96.jpeg'),(26,5,'5a55499b8111c.jpeg'),(27,5,'5a554ebd8fd42.jpeg'),(28,6,'5a5619534b963.jpeg'),(29,6,'5a56197677d06.jpeg'),(30,6,'5a561992204e2.jpeg'),(31,6,'5a5619b17a089.jpeg'),(32,6,'5a5619d378a1a.jpeg'),(33,6,'5a561abe5dda0.jpeg');
/*!40000 ALTER TABLE `image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` longtext COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `sign` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` VALUES (3,'\"DOROSŁY TO TEN CO PRACUJE\"','<p style=\"text-align:center\">Stowarzyszenie Na Rzecz Wychowank&oacute;w Zespołu Szk&oacute;ł Specjalnych &quot;Żr&oacute;dło&quot;</p>\r\n\r\n<p style=\"text-align:center\">otrzymało dofinansowanie przez <strong>Samorząd Wojew&oacute;dztwa Świętokrzyskiego ze środk&oacute;w PEFRON w 2017 roku, </strong></p>\r\n\r\n<p style=\"text-align:center\">do dw&oacute;ch zadań publicznych kt&oacute;re będą realizowane w okresie październik - grudzień2017 r</p>\r\n\r\n<p style=\"text-align:center\"><strong>&quot;Dorosły to ten co pracuje&quot; - zwiększenie wiedzy i motywacji rodzic&oacute;w, opiekun&oacute;w oraz kadry w zakresie możliwości aktywizacji społeczno-zawodowej os&oacute;b &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; z niepełnosprawnością intelektualną - 5 tyś zł</strong></p>\r\n\r\n<p style=\"text-align:center\"><strong><img alt=\"\" src=\"/uploads/logo.png\" style=\"height:100px; width:86px\" /></strong></p>\r\n\r\n<p>W dniach 11-12 oraz 18-19 listopada 2017r., w ramach realizowanego przez Stowarzyszenie na Rzecz Wychowank&oacute;w Szk&oacute;ł Specjalnych w Ostrowcu Św. &bdquo;Źr&oacute;dło&rdquo; zadania publicznego &bdquo;Dorosły to ten co pracuje&rdquo; &ndash; zwiększanie wiedzy i motywacji rodzic&oacute;w, opiekun&oacute;w oraz kadry w zakresie możliwości aktywizacji społeczno &ndash; zawodowej os&oacute;b z niepełnosprawnością intelektualną, odbyły się warsztaty dla kadry pracującej z dorosłymi osobami z niepełnosprawnością intelektualną. Zadanie zostało dofinansowane przez Samorząd Wojew&oacute;dztwa Świętokrzyskiego ze środk&oacute;w PFRON w 2017r. Warsztaty poprowadziła Pani Małgorzata Gorący, Prezes Polskiej Federacji Zatrudnienia Wspomaganego, wsp&oacute;łzałożycielka i lider organizacji pozarządowych os&oacute;b niepełnosprawnych (Dolnośląskie Stowarzyszenie Pomocy Dzieciom i Młodzieży z MPDz OSTOJA, Wrocławski Sejmik Os&oacute;b Niepełnosprawnych). Inicjatorka i koordynator wrocławskiego programu wspomaganego zatrudnienia os&oacute;b z niepełnosprawnością TRENER (od 2001 roku). Za wdrożenie modelu zatrudnienia wspomaganego otrzymała nagrodę Prezydenta Wrocławia (2002) oraz tytuł &bdquo;Lodołamacza Specjalnego&rdquo; w konkursie &bdquo;Lodołamacze 2006&rdquo;. Autorka publikacji oraz licznych wystąpień na seminariach, konferencjach i debatach w kraju i za granicą omawiających problematykę niepełnosprawności i uwarunkowań aktywizacji społecznej i zawodowej os&oacute;b niepełnosprawnych. Wchodzi w skład eksperckich zespoł&oacute;w roboczych pracujących nad systemowymi rozwiązaniami na rzecz zabezpieczania potrzeb os&oacute;b niepełnosprawnych i ich rodzin, na szczeblu lokalnym, regionalnym i centralnym.<br />\r\nW projekcie uczestniczyli nauczyciele Szk&oacute;ł Przysposabiających do Pracy oraz instruktorzy Warsztat&oacute;w Terapii Zajęciowej z trzech powiat&oacute;w: ostrowieckiego, opatowskiego i starachowickiego. Zaświadczenia uczestnictwa w warsztatach, beneficjentom projektu wręczyli: prowadząca warsztaty &ndash; Małgorzata Gorący, dyrektor Powiatowego Centrum Pomocy Rodzinie &ndash; Paweł Walesic oraz dyrektor Zespołu Szk&oacute;ł Specjalnych &ndash; Magdalena Wykrota-Sk&oacute;ra</p>','Żródło','2017-11-11 00:00:00',NULL),(4,'HIPOTERAPIA','<p style=\"text-align:center\">Stowarzyszenie Na Rzecz Wychowank&oacute;w Zespołu Szk&oacute;ł Specjalnych &quot;Żr&oacute;dło&quot;</p>\r\n\r\n<p style=\"text-align:center\">otrzymało dofinansowanie przez <strong>Samorząd Wojew&oacute;dztwa Świętokrzyskiego ze środk&oacute;w PEFRON w 2017 roku, </strong></p>\r\n\r\n<p style=\"text-align:center\">do dw&oacute;ch zadań publicznych kt&oacute;re będą realizowane w okresie październik - grudzień2017 r</p>\r\n\r\n<p style=\"text-align:center\"><strong>&quot;zajęcia z hipoterapii dla os&oacute;b niepełnosprawnych&quot; - 5 tyś zł</strong></p>\r\n\r\n<p style=\"text-align:center\"><strong><img alt=\"\" src=\"/uploads/logo.png\" style=\"height:100px; width:86px\" /></strong></p>\r\n\r\n<p><strong>ZAJĘCIA 1</strong></p>\r\n\r\n<p>W dniu <strong>28.10.17 </strong>r.,&nbsp;22 uczni&oacute;w Zespołu Szk&oacute;ł Specjalnych oraz dwoje absolwent&oacute;w uczęszczających do Środowiskowego Domu Samopomocy &bdquo;Przystań&rdquo; przy ul. Iłżeckiej 33 &nbsp;po raz pierwszy wzięło udział w zajęciach&nbsp;z hipoterapii zorganizowanych w <strong>Ośrodku Hipoterapii i Rekreacji Konnej &bdquo;Lolek i Bolek&rdquo;</strong>, Śr&oacute;dborze 3.Jest to&nbsp;<strong>zadanie</strong>&nbsp;&nbsp;realizowane przez<strong>&nbsp;</strong>Stowarzyszenie &nbsp;na Rzecz Wychowank&oacute;w Zespołu Szk&oacute;ł Specjalnych &bdquo;Źr&oacute;dło&rdquo;<strong>&nbsp;dofinansowane przez Samorząd &nbsp;Wojew&oacute;dztwa Świętokrzyskiego ze środk&oacute;w PFRON w 2017 r.</strong>,&nbsp;<strong>w terminie&nbsp;od&nbsp;20.10.2017 r.&nbsp;&nbsp;do&nbsp;7.12.2017 r.&nbsp;</strong>W zadaniu bierze także udział 16 uczestnik&oacute;w Środowiskowego Domu Samopomocy w Ożarowie. Dla każdego z 16 uczestnik&oacute;w przewidziano&nbsp;po 4 spotkania w miesiącu listopad 2017r.Wszystkim uczestnikom bardzo szybko spodobał się ten rodzaj zajęć i już podczas pierwszego spotkania spr&oacute;bowali swoich sił jeżdżąc konno&nbsp;&nbsp;&nbsp;ze wsparciem hipoterapeuty. Uczniowie, kt&oacute;rzy czekali na swoją kolej miło spędzali czas na świetlicy. Dużą atrakcją okazały się małe kotki &ndash; mieszkańcy stadniny, kt&oacute;re były przekazywane z rąk do rąk.&nbsp; Opiekę nad uczniami sprawowali nauczyciele: Justyna Buczałowska &ndash; koordynator projektu, Anna Gajowik &ndash; Zi&oacute;łek i Urszula Sasak.&nbsp;</p>','Żródło','2017-10-28 00:00:00',NULL),(5,'\"WĘDRUJEMY, POZNAJEMY, TWORZYMY\"','<p style=\"text-align:center\">Od 05.05. 2017 do 31.08.217 roku&nbsp;&nbsp;realizowany będzie&nbsp;projekt finansowany w 80% przez<strong> Świętokrzyski Urzad Wojew&oacute;dzki&nbsp; w Kielcach</strong>. Realiacja zadania publicznego &quot;<strong>Wędrujemy, poznajemy, tworzymy</strong>&quot; będzie&nbsp;formą wzbogacania wiedzy&nbsp;&nbsp;o regionie i technice pastycznej scrapbookingu przez 10 uczni&oacute;w Zespołu Szk&oacute;ł Specjalnych.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; W ramach projektu odbędą&nbsp;się wycieczki do Kunowa, Opatowa, Janowic, na G&oacute;rę Witosławską,do Grzegorzowic, do Kałkowa.&nbsp;</p>\r\n\r\n<p style=\"text-align:center\">Uczniowie bedą uczestniczyc w ich planowaniu, przygotowaniu trasy, a udział w wędr&oacute;wkach będzie dla nich wyzwaniem. Wyjazdy organizowane będą środkami komunikacji publicznej</p>\r\n\r\n<p style=\"text-align:center\"><strong>Warsztaty scrapbookingu</strong> organizowane będą na terenie szkoły w ostatnim tygodniu czerwca (5 dni po 2 godziny) oraz w sierpniu (5 dni po 2 godzinyPodczas tych spotkań uczestnicy poznają techniki tworzenia i ozdabiania album&oacute;w, zaproszeń czy pamietnik&oacute;w, Przy uzyciu r&oacute;żnorodnych materiał&oacute;w.</p>\r\n\r\n<p><img alt=\"\" src=\"/uploads/logo1.png\" style=\"float:left; height:133px; width:200px\" /></p>','Żródło','2017-05-05 00:00:00',NULL),(6,'\"DOGOTERAPIA\"','<p style=\"text-align:center\">W okresie od listopada do grudnia 2017r. w Zespole Szk&oacute;ł Specjalnych w Ostrowcu Św. odbywały się zajęcia dogoterapii w ramach projektu finansowanego przez Starostwo Powiatowe w Ostrowcu Św. pt: &bdquo;<strong>Dogoterapia metodą wspomagania rozwoju dziecka niepełnosprawnego&rdquo;</strong>. Istotą dogoterapii jest bezpośredni kontakt podopiecznego z psem i terapeutą. Poprzez dogoterapię możliwe jest wspieranie zar&oacute;wno sfery fizycznej jak i intelektualnej. Udział w zajęciach wpływa też pozytywnie na podniesienie kompetencji komunikacyjnych, między innymi mowy ciała, empatii, zmniejsza także poziom leku w kontaktach ze zwierzętami, a także wycisza zachowania agresywne. Zajęcia z psem dostosowuje się każdorazowo do potrzeb i możliwości uczestnik&oacute;w zajęć. Uczniowie bardzo polubili tę formę terapii i z niecierpliwością czekają na kolejne spotkania&nbsp; &nbsp; &nbsp; z nowym przyjacielem.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/uploads/ostr.png\" style=\"height:100px; width:253px\" /></p>','Zródło','2017-11-10 00:00:00',NULL);
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-10 15:48:35
