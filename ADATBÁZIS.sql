-- phpMyAdmin SQL Dump
-- version 4.3.6
-- http://www.phpmyadmin.net
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2017. Jan 18. 20:06
-- Szerver verzió: 5.5.44-0+deb7u1-log
-- PHP verzió: 5.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Adatbázis: `fayrobot`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `fayrobot_lefoglalt`
--

CREATE TABLE IF NOT EXISTS `fayrobot_lefoglalt` (
  `sql_id` int(11) NOT NULL,
  `tipus` varchar(64) NOT NULL,
  `felrakta` varchar(64) NOT NULL,
  `mikor` date NOT NULL,
  `vad` varchar(2048) NOT NULL,
  `szin` varchar(512) NOT NULL,
  `megjegyzes` varchar(512) NOT NULL,
  `tulaj` varchar(64) NOT NULL,
  `rendszam` varchar(32) NOT NULL,
  `Rendfokozat` int(11) NOT NULL,
  `Alosztaly` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `fayrobot_lefoglalt`
--

INSERT INTO `fayrobot_lefoglalt` (`sql_id`, `tipus`, `felrakta`, `mikor`, `vad`, `szin`, `megjegyzes`, `tulaj`, `rendszam`, `Rendfokozat`, `Alosztaly`) VALUES
(16, '1970-1996 Range Rover ((Huntley))', 'Enzo Colombo', '2016-03-30', 'Tilosban parkolÃ¡s', 'mokkafekete', '-', 'Gioacchino Solozzo', 'FRN-163', 1, 1),
(17, '1970-1977 Ford F-Series ((Sadler))', 'Enzo Colombo', '2016-03-30', 'Tilosban parkolÃ¡s', 'azÃºr', '-', 'Dominic Draco', 'XHC-923', 1, 1),
(18, '1935 Ford ((Hustler))', 'Enzo Colombo', '2016-03-30', 'RendÅ‘rsÃ©gi BizonyÃ­tÃ©k', 'sÃ¶tÃ©tbarna', '1 nap nem kivÃ¡lthatÃ³', 'Donald Bradshaw', 'ZDP-368', 3, 1),
(19, '1965-1969 Chevrolet Corvair ((Tampa))', 'Enzo Colombo', '2016-03-30', 'Tilosban parkolÃ¡s', 'Fekete', '-', 'Cody White', 'VBV-452', 3, 1),
(20, '1965-1969 Chevrolet Corvair ((Tampa))', 'Enzo Colombo', '2016-03-30', 'Tilosban parkolÃ¡s', 'erdÅ‘zÃ¶ld Ã©s kÃ¡vÃ©barna', '-', 'Lakatos Sz Kristof', 'YPF-244', 3, 1),
(21, '1965-1969 Chevrolet Corvair ((Tampa))', 'Enzo Colombo', '2016-03-30', 'Tilosban parkolÃ¡s', 'Fekete', '-', 'Donald H Gaskins', 'PLW-178', 3, 1),
(22, 'Chevrolet Monte Carlo Sport Cou ((Tahoma))', 'Enzo Colombo', '2016-03-30', 'Tilosban parkolÃ¡s', 'fehÃ©r', '-', 'Michael Century', 'VYC-002', 3, 1),
(23, '1967-1972 GMC C/K ((Slamvan))', 'Enzo Colombo', '2016-03-30', 'Tilosban parkolÃ¡s', 'piros', '-', 'Martinovic Reznik', 'AUI-710', 3, 1),
(24, '1975-1977 Cadillac Eldorado ((Esperanto))', 'Enzo Colombo', '2016-04-10', 'RendÅ‘rsÃ©gi BizonyÃ­tÃ©k', 'sÃ¡rga', '-', 'Rico Cortez', 'JCO-314', 3, 5),
(26, 'Toyota Supra', 'WilliamClark', '2016-05-12', '-', 'LombzÃ¶ld', '-', 'Luis Ronaldo', 'JOL-705', 7, 4),
(27, 'Chevrolet Corvair', 'WilliamClark', '2016-05-12', '-', 'Piros', '-', 'Brian Spielberg', 'UAX-535', 7, 4),
(28, 'Chevrolet Nova ', 'WilliamClark', '2016-05-12', '-', 'Fekete fehÃ©r', 'Perennial', 'Parker White', 'IYV-666', 7, 4),
(29, 'Chevrolet Corvair', 'WilliamClark', '2016-05-12', '-', 'FehÃ©r', 'Tampa', 'Jason Smelter', 'UNF-915', 7, 4),
(30, 'Chevrolet K5 Blazer', 'WilliamClark', '2016-05-12', '-', 'FehÃ©r', 'Rancher', 'Alan Smith', 'OQV-642', 7, 4),
(31, 'Chevrolet Corvair', 'WilliamClark', '2016-05-12', '-', 'ZÃ¶ld', 'Tampa', 'Donald Black', 'KLN-218', 7, 4),
(32, 'Mitsubishi 3000Gt', 'WilliamClark', '2016-05-12', '-', 'SÃ¡rga', 'Supergt', 'Yoshi Masada', 'VQL-843', 7, 4),
(33, 'Dodge Shadow', 'WilliamClark', '2016-05-12', '-', 'Bronzbarna', 'Manana', 'Thomas Hunter', 'XII-686', 7, 4),
(34, 'Chevrolet Impala', 'WilliamClark', '2016-05-12', '-', 'IndigÃ³ (lila) ', 'Voodoo', 'Damien Mercer', 'FKR-328', 7, 4),
(35, 'Buick Regal', 'WilliamClark', '2016-05-12', '-', 'HidegkÃ©k', 'Majestic', 'Jerry Jean', 'BME-615', 7, 4),
(36, 'Chevrolet Corvair', 'WilliamClark', '2016-05-12', '-', 'Ã‰jfekete', 'Tampa', 'Adam Atwood', 'QKL-611', 7, 4),
(37, 'Pontiac Grand AM', 'WilliamClark', '2016-05-12', '-', 'Pink', 'Bravura', 'Dennis Johnson', 'CWD-746', 7, 4),
(38, 'Bmw 7', 'WilliamClark', '2016-05-12', '-', 'IszapszÃ¼rke', 'Sentinel', 'Austin Cole', 'SHQ-655', 7, 4),
(39, 'Chevrolet Nova ', 'WilliamClark', '2016-05-12', '-', 'Ã‰jfekete Ã©s bronzbarna', '-', 'Thomas Watson', 'CAG-099', 7, 4),
(40, 'Ford F Series', 'WilliamClark', '2016-05-12', '-', 'AzÃºr (v.kÃ©k)', '-', 'Dominic Draco', 'XHC-923', 7, 4),
(41, 'Chevrolet Nova ', 'WilliamClark', '2016-05-12', '-', 'FehÃ©r', '-', 'Kovacs Kristof', 'ESK-376', 7, 4),
(42, 'Jaguar E Type', 'WilliamClark', '2016-05-12', '-', 'Barna', '-', 'Daniel Pethy', 'NDP-348', 7, 4),
(43, 'Ford Thunderbird ', 'WilliamClark', '2016-05-12', '-', 'SzederkÃ©k', '-', 'Mario Bianchi', 'PDP-793', 7, 4),
(44, 'Chevrolet Nz', 'WilliamClark', '2016-05-12', '-', 'Fekete', '-', 'Komoczi Adam', 'VGB-525', 7, 4),
(45, 'Chevrolet Nova', 'WilliamClark', '2016-05-12', '-', 'Fekete', 'Perennial', 'Komoczi Adam', 'VGB-525', 7, 4),
(46, 'Buick Special', 'WilliamClark', '2016-05-12', '-', 'ZÃ¶ld', 'Glendale', 'Leon Hudson', 'UIN-760', 7, 4),
(47, 'Chevrolet Monte Carlo coupÃ©', 'WilliamClark', '2016-05-12', '-', 'AcÃ©lkÃ©k', 'Buccaneer', 'Lucas Scaletta', 'HWJ-453', 7, 4),
(48, 'Chevrolet Nova', 'WilliamClark', '2016-05-12', '-', 'AcÃ©lkÃ©k', 'Perennial', 'Angyal Greta', 'CIC-413', 7, 4),
(49, 'Volkswagen Golf', 'WilliamClark', '2016-05-12', '-', 'FagyalkÃ©k (s.kÃ©k)', 'Club', 'Takacs Richard', 'QZO-665', 7, 4),
(50, 'Honda crx', 'WilliamClark', '2016-05-12', '-', 'ZÃ¶ld-fekete ', 'Blista compact', 'Kis Daniel', 'JGQ-929', 7, 4),
(51, 'Ford F Series', 'WilliamClark', '2016-05-12', '-', 'ZÃ¶ld', 'Sadler', 'Camillo Montes', 'UVE-418', 7, 4),
(52, 'Gmc Savana', 'WilliamClark', '2016-05-12', '-', 'Fekete ', 'Pony', 'Kevin West', 'YVN-112', 7, 4),
(53, 'Chevrolet Nova ', 'WilliamClark', '2016-05-12', '-', 'Lila fekete', 'Perennial', 'Steven Martinez', 'HBH-685', 7, 4),
(54, 'Volkswagen Transporter T1', 'WilliamClark', '2016-05-12', '-', 'Matrica, sÃ¡rga fekete', 'Camper', 'Stefano Giacomo', 'JDD-934', 7, 4),
(55, 'Chevrolet Impala', 'WilliamClark', '2016-05-12', '-', 'Fekete ', 'Voodoo', 'Luke Bokovic', 'YMW-126', 7, 4),
(56, 'Plymouth Laser', 'WilliamClark', '2016-05-12', '-', 'Matrica, vonatkÃ©k', 'Uranus', 'Barney Stinson', 'WKN-168', 7, 4),
(57, 'Range Rover', 'WilliamClark', '2016-05-12', '-', 'SzÃ¼rke', 'Huntley', 'Jeffrey Morgan', 'QAG-634', 7, 4),
(58, 'Chevrolet Nova ', 'WilliamClark', '2016-05-12', '-', 'Fekete ', 'Perennial', 'Marshall Dougles', 'ETK-472', 7, 4),
(59, 'Chevrolet Corvair', 'WilliamClark', '2016-05-12', '-', 'V.kÃ©k', 'Tampa', 'Christopher Zykov', 'AAP-929', 7, 4),
(60, 'Mitsubishi 3000gt', 'WilliamClark', '2016-05-12', '-', 'V.kÃ©k (azÃºr) ', 'Supergt', 'Alex Parker', 'JUF-477', 7, 4),
(61, 'Chrysler Fufthy Avenue', 'WilliamClark', '2016-05-12', '-', 'ZÃ¶ld-fekete ', 'Greenwood', 'Stefan Archer', 'NUN-166', 7, 4),
(62, 'Honda crx', 'WilliamClark', '2016-05-12', '-', 'ZÃ¶ld-fekete ', 'Blista compact', 'Johnny Rodriguez', 'YGA-336', 7, 4),
(63, 'Caddilac Series 62', 'WilliamClark', '2016-05-12', '-', 'OroszlÃ¡nbarna (vajszÃ­nÅ±) ', 'Broadway ', 'Ivry Gitlis', 'TKN-632', 7, 4),
(64, 'Caddilac Series 62', 'WilliamClark', '2016-05-12', '-', 'Lila', 'Broadway ', 'Jeffrey Morgan', 'HSS-295', 7, 4),
(65, 'Chevrolet Nova', 'WilliamClark', '2016-05-12', '-', 'SÃ¡rga', 'Perennial', 'Viktor Reznov', 'OEI-622', 7, 4),
(66, 'Pontiac Grand Am', 'WilliamClark', '2016-05-12', '-', 'FehÃ©r ', 'Bravura', 'Angelo Provolone', 'JOD-174', 7, 4),
(67, 'Buick Special', 'WilliamClark', '2016-05-12', '-', 'SzÃ¼rke-fehÃ©r', 'Glendale', 'David Dunaway', 'XKB-856', 7, 4),
(68, 'Mercury Custom', 'WilliamClark', '2016-05-12', '-', 'SzederkÃ©k', 'Hermes', 'Tom Black', 'XWH-993', 7, 4),
(69, 'Gmc Step Van', 'WilliamClark', '2016-05-12', '-', 'ÃfonyavÃ¶rÃ¶s-mandulabarna', 'Boxville', 'Wesley Sneijder', 'XTU-426', 7, 4),
(70, 'Gmc Step Van', 'WilliamClark', '2016-05-12', '-', 'DiÃ³barna', 'Boxville', 'Brandy Burke', 'KQX-980', 7, 4),
(71, 'Toyota Supra', 'WilliamClark', '2016-05-12', '-', 'SzamÃ¡rszÃ¼rke', 'Jester', 'Max Leonard', 'ABY-122', 7, 4),
(72, 'Ferrari Testarossa', 'WilliamClark', '2016-05-12', '-', 'FehÃ©r', 'Cheetah', 'Frank Colletti', 'MJV-201', 7, 4),
(73, 'Ferrari f40', 'WilliamClark', '2016-05-12', '-', 'Fekete', 'Turismo', 'Kevin West', 'SRC-289', 7, 4),
(74, 'Chevrolet Astro', 'WilliamClark', '2016-05-12', '-', 'ZuzmÃ³zÃ¶ld', 'Moonbeam', 'Gligor Zsolt', 'LSL-118', 7, 4),
(75, 'Chevrolet Caprice', 'WilliamClark', '2016-05-12', '-', 'Barna', 'Premier', 'Nick Moretti', 'CYR-750', 7, 4),
(76, 'Mazda RX7', 'WilliamClark', '2016-05-12', '-', 'Fekete ', 'Zr350', 'Federico Bradshaw', 'IVE-106', 7, 4),
(77, 'Chevrolet Camaro', 'WilliamClark', '2016-05-12', '-', 'FehÃ©r', 'Buffalo', 'Luke Bokovic', 'OT-05-52', 7, 4),
(78, 'Simson s51', 'WilliamClark', '2016-05-12', 'HIM', 'SÃ¡rga ', 'Sanchez', 'Tony Salvatore', 'PDJ-389', 7, 4),
(79, 'Chevrolet El Camino', 'WilliamClark', '2016-05-12', 'RendÅ‘rhyilkossÃ¡g, illegÃ¡lis fegyvertartÃ¡s, him. ', 'Barna', 'Picador, 1 nap nem kivÃ¡lthatÃ³', 'Max Wright', 'UHS-936', 7, 4),
(80, 'Mitsubishi 3000gt', 'WilliamClark', '2016-05-13', 'Baleset (nem lefoglalt) ', 'Fekete ', 'Supergt', 'Bogdan Wasilijev', 'EEB-886', 4, 4),
(81, 'Mitsubishi 3000gt', 'WilliamClark', '2016-05-13', 'Baleset (nem lefoglalt) ', 'Fekete ', 'Supergt', 'Bogdan Wasilijev', 'EEB-886', 4, 4);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `fayrobot_letartoztatott`
--

CREATE TABLE IF NOT EXISTS `fayrobot_letartoztatott` (
  `sql_id` int(11) NOT NULL,
  `Neve` varchar(128) NOT NULL,
  `Felrakta` varchar(128) NOT NULL,
  `Alosztaly` int(11) NOT NULL,
  `Rendfokozat` int(11) NOT NULL,
  `Mikor` date NOT NULL,
  `Vad` varchar(2048) NOT NULL,
  `Megjegyzes` varchar(2048) NOT NULL,
  `Szemszam` varchar(128) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `fayrobot_letartoztatott`
--

INSERT INTO `fayrobot_letartoztatott` (`sql_id`, `Neve`, `Felrakta`, `Alosztaly`, `Rendfokozat`, `Mikor`, `Vad`, `Megjegyzes`, `Szemszam`) VALUES
(1, 'test', 'test', 1, 1, '2016-03-27', 'asdasd', '', ''),
(2, 'asfdasfd', 'WilliamClark', 4, 4, '2016-03-29', 'sdfsdf', 'sdfsdf', 'sdfsdf'),
(3, 'Stefano Bianchi', 'Trevor Moretti', 6, 1, '2016-04-03', 'HatÃ³sÃ¡gi intÃ©zkedÃ©s megtagadÃ¡sa', '-', '249672UI'),
(4, 'Kenny Gus', 'Billy Baccalieri', 5, 3, '2016-04-04', 'HatÃ³sÃ¡gi intÃ©zkedÃ©s megtagadÃ¡sa', '', '999153AV'),
(5, 'Hugo Geroge', 'Max Moretti', 4, 3, '2016-04-07', 'H.I.M', '-', '31492OE'),
(6, 'George Wall', 'Joey Jason', 5, 7, '2016-04-09', 'HatÃ³sÃ¡gi IntÃ©zkedÃ©s MegtagadÃ¡sa', 'fekete crossmotor.', '-'),
(7, 'Marcello Goodier', 'Frank Colletti', 4, 2, '2016-04-09', 'BoltrablÃ¡s', '-', '688135QU '),
(8, 'Luka Monte', 'Daniel B Marconi', 6, 6, '2016-04-09', 'BankrablÃ¡s', '', '156169YS'),
(9, 'Max Wright', 'Daniel B Marconi', 6, 6, '2016-04-09', 'BankrablÃ¡s', 'Ã–nvÃ©delmi fegyverengedÃ©ly bevonva', '773963CP'),
(10, 'Taylor Cooper', 'Trevor Moretti', 6, 1, '2016-04-09', 'HatÃ³sÃ¡gi intÃ©zkedÃ©s megtagadÃ¡sa', '-', '647082MN'),
(11, 'Brian Bradshaw', 'Max Moretti', 4, 3, '2016-04-10', 'H.I.M, cserbenhagyÃ¡s', '-', '375442PA'),
(12, 'Martinovic Reznik', 'Trevor Moretti', 6, 1, '2016-04-15', 'HatÃ³sÃ¡gi intÃ©zkedÃ©s megtagadÃ¡sa', '-', '1115514SS'),
(13, 'Damien Mercer', 'Trevor Moretti', 6, 1, '2016-04-18', 'H.I.M., BoltrablÃ¡s', '-', '-'),
(14, 'Luis Laquan Mosquera', 'Trevor Moretti', 6, 1, '2016-04-18', 'H.I.M., BoltrablÃ¡s', '-', '-'),
(15, 'Kevin Dee', 'Max Moretti', 4, 3, '2016-04-23', 'H.I.M.', '-', '330621GP'),
(16, 'Daniel Connors', 'Max Moretti', 4, 3, '2016-04-24', 'H.I.M.', '-', '459880YD'),
(17, 'David Roberts ', 'Max Moretti', 4, 3, '2016-04-24', 'HatÃ³sÃ¡gi intÃ©zkedÃ©s akadÃ¡lyozÃ¡sa', 'JogsÃ­tvÃ¡ny bevonva - 2016.04.30.', '590788TA'),
(18, 'Jesse J Kennedy', 'Max Moretti', 4, 3, '2016-04-29', 'Fegyveres rablÃ¡s, H.I.M.', '-', '384262QL'),
(19, 'Felipe Kostic', 'Trevor Moretti', 6, 1, '2016-04-30', 'HatÃ³sÃ¡gi intÃ©zkedÃ©s megtagadÃ¡sa', 'FehÃ©r buffaloval menekÃ¼lt a hatÃ³sÃ¡g elÅ‘l', '200953JU'),
(20, 'Erick Adkins', 'Max Moretti', 4, 3, '2016-05-04', 'H.I.M.', '-', '3185641CZ'),
(21, 'Pablo Hernandes', 'Max Moretti', 4, 3, '2016-05-04', 'RendbontÃ¡s, halÃ¡lt okozÃ³ testi sÃ©rtÃ©s', '-', '076219WQ'),
(22, 'Miguel torres', 'Max Moretti', 4, 3, '2016-05-04', 'RendbontÃ¡s, halÃ¡lt okozÃ³ testi sÃ©rtÃ©s, nagy mennyisÃ©gÅ± marijuana birtoklÃ¡sa', 'Nagy mennyisÃ©gÅ± marijuana lefoglalva', '049458'),
(23, 'Jake Powell', 'Max Moretti', 4, 3, '2016-05-05', 'H.I.M, illegÃ¡lis fegyverbirtoklÃ¡s', 'Winchester M92 lefoglalva', '051493PB'),
(24, 'Johnny Rodriguez', 'Max Moretti', 4, 3, '2016-05-07', '172678ZH', '-', 'H.I.M.'),
(25, 'Luis Laquan Mosquera', 'Max Moretti', 4, 3, '2016-05-07', 'BankrablÃ¡s', '-', '680325PP'),
(26, 'Lorenzo G Reznik', 'Trevor Moretti', 6, 1, '2016-05-08', 'BoltrablÃ¡s, VisszaÃ©lÃ©s lÅ‘fegyverrel, HatÃ³sÃ¡gi szemÃ©ly elleni erÅ‘szak, HatÃ³sÃ¡gi intÃ©zkedÃ©s akadÃ¡lyozÃ¡sa', 'A szemÃ©lynÃ©l talÃ¡lhatÃ³ fegyvereket elkoboztuk', 'Nemtom'),
(27, 'Peter Russo', 'WilliamClark', 4, 4, '2016-05-13', 'IllegÃ¡lis fegyverbirtoklÃ¡s', '', '056555RE'),
(28, 'Trevor Moretti', 'WilliamClark', 4, 4, '2016-10-23', 'EngedÃ©lyezett fokozat feletti homoszexualitÃ¡s', 'A cellÃ¡jÃ¡bÃ³l az Ã¡gy eltÃ¡volÃ­tva', '666+69'),
(29, 'Kiss MiklÃ³s', 'demo', 0, 16, '2016-11-23', 'Chips zabÃ¡lÃ¡s', 'Ne lopjon chipset!', 'ASD6969669-AM1');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `fayrobot_man`
--

CREATE TABLE IF NOT EXISTS `fayrobot_man` (
  `sql_id` int(11) NOT NULL,
  `Neve` varchar(129) NOT NULL,
  `Felrakta` varchar(129) NOT NULL,
  `Mikor` date NOT NULL,
  `Vad` varchar(129) NOT NULL,
  `Leiras` varchar(512) NOT NULL,
  `Alosztaly` int(11) NOT NULL,
  `Rendfokozat` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `fayrobot_man`
--

INSERT INTO `fayrobot_man` (`sql_id`, `Neve`, `Felrakta`, `Mikor`, `Vad`, `Leiras`, `Alosztaly`, `Rendfokozat`) VALUES
(1, 'Brian a kirÃ¡ly', 'demo', '2016-12-12', 'TÃºl kirÃ¡ly', 'Csak simÃ¡n kirÃ¡ly', 16, 0),
(2, 'Lucifer_Morningstar', 'demo', '2016-12-12', 'LopÃ¡s', 'Lopos', 16, 0);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `fayrobot_users`
--

CREATE TABLE IF NOT EXISTS `fayrobot_users` (
  `Jelvenyszam` varchar(11) NOT NULL,
  `Password` varchar(129) NOT NULL,
  `Name` varchar(42) NOT NULL,
  `Admin` tinyint(1) NOT NULL,
  `Alosztaly` int(11) NOT NULL,
  `Rendfokozat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `fayrobot_users`
--

INSERT INTO `fayrobot_users` (`Jelvenyszam`, `Password`, `Name`, `Admin`, `Alosztaly`, `Rendfokozat`) VALUES
('20568', '521f72744715be73e1c104d256a0e0944201998f', 'WilliamClark', 1, 4, 4),
('04860', '799c54048466c2fca29e92300aaf759f867e8357 ', 'Jesse Pinkman', 0, 1, 1),
('77094', '9247ae196a94eba93282b6a5c68ecb0867bfc2e8 ', 'Alan Shearer', 0, 1, 1),
('04860', 'c0a708391d39c793f594e3aafa34d49645a26672 ', 'Jesse_Pinkman', 0, 1, 1),
('82078', '90a0ed987f04e09a2fc590786578177618c993ad ', 'Daniel B Marconi', 1, 6, 6),
('50411', 'e8c37a947bcb685d23c4343b81f082e627c298ea ', 'Mike Chandler', 0, 1, 1),
('58544', '0c4e4c11cc8c633eb7849acbd594758f43cf4a4d ', 'Bozhidar Ivaylo', 0, 1, 1),
('16887', '96be91e681d66e9c4abe35cba225e0c9abbdccdd ', 'Marius Black', 0, 1, 1),
('34256', '58c88bf7a1beaacecb2e4c276f7be42f33aae58a ', 'Enzo Colombo', 0, 5, 3),
('30483', '9e30913b49d7ad7f67fd17c42802eab889df883a', 'Benjamin Johnson', 0, 1, 1),
('35766', '41f176ffde3bcdd1bf960b4cca5528668b89da6e', 'Trevor Moretti', 0, 6, 1),
('87849', 'e9d65c96b2f5119b51b49bcf9b8533b53e61ab23', 'Max Moretti', 0, 4, 3),
('14451', '4882ddbe6d07c5acc277f8926a6d79099ca781c9', 'Billy Baccalieri', 0, 5, 3),
('17469', 'c983de98a55532f645514469bb43ce4ca20c04f7', 'Hans Schroeder', 0, 3, 9),
('38972', '5c20fb0bebe12d677bf614c0d378b4a5e242d14f', 'Chris Lake', 0, 4, 2),
('45111', '668c14e18e698ef5cde8717c314699eea7a5aedc', 'Frank Colletti', 0, 4, 2),
('62181', '8faf5f3aabcff06c1b323b8f23a163bb11898cbf', 'Gary Eastwood', 1, 2, 10),
('70605', '2afc86ab04685b3ad84ca5f6a123f03456d0211a', 'Joey Jason', 0, 5, 7),
('00136', '3326de090761299c2852b44fc962ff45d5ac9f51', 'Pavlo Iljics Zivon', 1, 3, 11),
('87303', '3e5e0e6065e05f490733774a7a15aad44a2ebc75', 'Thomas Nazzaro', 0, 2, 2),
('29336', 'c37fb5d8412ba2e7e72b7ef339e3d5da9f807af8', 'Scott Banks', 0, 5, 2),
('81881', 'b9fadcabc0be9cc61cdbc5ea4b66222fc3806c52', 'Ernesto Fernandes', 0, 6, 1),
('12345', '8e10d8d90b824c329fe6c27f307c3d1e02cbb43c', 'Roberto Tapia', 0, 5, 7),
('54321', '9b1b58a379d1edfb796b4bcb2ff24f7d6034254b', 'BobGHuston', 0, 0, 16),
('12H4A', 'a24e663ed279fcb8ea0d15eec0cbd832f36d15b2', 'Oliver Carson', 1, 4, 2),
('70665', 'dcd7369c75dd4a0f41a96a08bc2327b9cb941e91', 'Ramirez Dominguez', 0, 4, 3),
('1111', 'd013e3adfc97adf75f6d3a845cbde1bfef2825fe', 'JamesMcRay', 0, 3, 16),
('666', 'bb0d2954f2add68a246814374a37fe61ac458626', 'Ernst Stavro Blofeld', 0, 0, 16),
('123', '61c239e5c7203949a78ff72615256c8db5dc04c4', 'lakatos_jasonstatham', 0, 3, 15),
('12345', '15861f9aa17c8f3524620036cb8ab3d4ede74e59', 'FAYRPGDEMO', 0, 0, 16),
('1234', '9ccc4065e071a93e89b4327bb48b2aefe4f51a3e', 'demo', 0, 0, 16);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `fayrobot_vehicle`
--

CREATE TABLE IF NOT EXISTS `fayrobot_vehicle` (
  `sql_id` int(11) NOT NULL,
  `Rendszam` varchar(16) NOT NULL,
  `Tipus` varchar(129) NOT NULL,
  `Szin` varchar(129) NOT NULL,
  `Tulaj` varchar(129) NOT NULL,
  `Vad` varchar(129) NOT NULL,
  `Megjegyzes` varchar(5012) NOT NULL,
  `Felrakta` varchar(129) NOT NULL,
  `Mikor` date NOT NULL,
  `Alosztaly` int(11) NOT NULL,
  `Rendfokozat` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `fayrobot_vehicle`
--

INSERT INTO `fayrobot_vehicle` (`sql_id`, `Rendszam`, `Tipus`, `Szin`, `Tulaj`, `Vad`, `Megjegyzes`, `Felrakta`, `Mikor`, `Alosztaly`, `Rendfokozat`) VALUES
(9, 'BENI-6969', 'Sultan', 'RÃ³zsaszÃ­n', 'Benito Bianchi', 'Taskar urmat vert ez a szemÃ©t autÃ³', 'tasikakiralyok', 'demo', '2016-11-21', 0, 16),
(10, 'SEX-ELEK', 'Sanchez', 'Asszem vÃ¶rÃ¶s, de lehet hogy kÃ©k.', 'A sarki kurva', 'TÃºl szÃ©p volt.', 'AmÃºgy lehet tÃ¶rÃ¶lni XD', 'demo', '2016-12-02', 0, 16);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `fayrobot_lefoglalt`
--
ALTER TABLE `fayrobot_lefoglalt`
  ADD PRIMARY KEY (`sql_id`);

--
-- A tábla indexei `fayrobot_letartoztatott`
--
ALTER TABLE `fayrobot_letartoztatott`
  ADD PRIMARY KEY (`sql_id`);

--
-- A tábla indexei `fayrobot_man`
--
ALTER TABLE `fayrobot_man`
  ADD PRIMARY KEY (`sql_id`);

--
-- A tábla indexei `fayrobot_vehicle`
--
ALTER TABLE `fayrobot_vehicle`
  ADD PRIMARY KEY (`sql_id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `fayrobot_lefoglalt`
--
ALTER TABLE `fayrobot_lefoglalt`
  MODIFY `sql_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT a táblához `fayrobot_letartoztatott`
--
ALTER TABLE `fayrobot_letartoztatott`
  MODIFY `sql_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT a táblához `fayrobot_man`
--
ALTER TABLE `fayrobot_man`
  MODIFY `sql_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT a táblához `fayrobot_vehicle`
--
ALTER TABLE `fayrobot_vehicle`
  MODIFY `sql_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
