-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2015 at 09:05 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `schoolportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE IF NOT EXISTS `alumni` (
`Id` bigint(20) NOT NULL,
  `FirstName` text CHARACTER SET cp1251 COLLATE cp1251_bin NOT NULL,
  `LastName` text CHARACTER SET cp1251 COLLATE cp1251_bin NOT NULL,
  `City` text CHARACTER SET cp1251 COLLATE cp1251_bin NOT NULL,
  `State` text CHARACTER SET cp1251 COLLATE cp1251_bin NOT NULL,
  `Email` text CHARACTER SET cp1251 COLLATE cp1251_bin NOT NULL,
  `Year` int(11) NOT NULL,
  `Classroom` text CHARACTER SET cp1251 COLLATE cp1251_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=604 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`Id`, `FirstName`, `LastName`, `City`, `State`, `Email`, `Year`, `Classroom`) VALUES
(437, 'FirstName', 'LastName', 'City', 'State', 'Email', 0, 'Classroom'),
(438, 'Andrej', 'Jankovic', 'Beograd', 'Serbia', 'andrejjankovic2004@yahoo.com', 2004, '10'),
(439, 'Aleksandar', 'Jankovic', 'Beograd', 'Serbia', 'a.sale.jankovic@gmail.com', 1973, '5'),
(440, 'Luka', 'Djordjevic', 'Beograd', 'Serbia', 'djordjevic_luka@yahoo.com', 2004, '10'),
(441, 'Jasminka', 'Lagator', 'Beograd', 'Serbia', 'lagator.jasminka@gmail.com', 1973, '3'),
(442, 'Ivan', 'Ivanovski', 'Beograd', 'Serbia', 'ivan.harry1987@gmail.com', 2006, '1'),
(443, 'Nikola', 'Marjanovic', 'Beograd', 'Serbia', 'nikolamarjanovic6@gmail.com', 2010, '4'),
(444, 'Dragan', 'Bozovic', 'Beograd', 'Serbia', 'dragan.bozovic@poverenik.rs', 1973, '2'),
(445, 'Vuk', 'Aleksic', 'Beograd', 'Serbia', 'aleksicvuk@hotmail.com', 2007, '6'),
(446, 'Milica', 'Popovic', 'Beograd', 'Serbia', 'popkaknn@hotmail.com', 2010, '4'),
(447, 'Irena', 'Jonovic', 'Beograd', 'Serbia', 'irena.jonovic@gmail.com', 0, ''),
(448, 'Andjela', 'Blazic', 'Bec', 'Austria', 'angelablazic@msn.com', 2009, '1'),
(449, 'Bosko', 'Bunusevac', 'Beograd', 'Serbia', 'bosko.bunusevac@yahoo.com', 2009, '8'),
(450, 'Jovana', 'Vukadin', 'Beograd', 'Serbia', 'jocikaknn@hotmail.com', 2011, '3'),
(451, 'Dusan', 'Nesic', 'sangaj', 'China', 'nesic.dusann@gmail.com', 2009, '1'),
(452, 'Marko', 'Ignjatovic', 'Beograd', 'Serbia', 'marence.i@gmail.com', 2010, '5'),
(453, 'Nikola', 'Damjanovic', 'Beograd', 'Serbia', 'damjanovicnikola6@gmail.com', 2010, '5'),
(454, 'Tanja', 'Coric', 'Beograd', 'Serbia', 'tanja.coric@yahoo.com', 2009, '1'),
(455, 'Biljana', 'Vukosavljevic', 'Beograd', 'Serbia', 'vukosavljevic.biljana@gmail.com', 2009, '6'),
(456, 'Ana', 'Tolic', 'Beograd', 'Serbia', 'ana.tolic@live.com', 2009, '3'),
(457, 'zeljko', 'Krstic', 'Beograd', 'Serbia', 'krca61@gmail.com', 1980, '8'),
(458, 'Aljosa', 'Lojpur', 'Beograd', 'Serbia', 'aljosa.srb@live.com', 2009, '5'),
(459, 'Aleksandar', 'Utjesinovic', 'Beograd', 'Serbia', 'aleksandar.utjesinovic@gmail.com', 1997, '5'),
(460, 'Filip', 'Likaroski', 'Beograd', 'Serbia', 'Liki92@gmail.com', 0, ''),
(461, 'Gordana', 'Pilipovic', 'Beograd', 'Serbia', 'gordanapilip@gmail.com', 1988, '2'),
(462, 'Sladjana', 'Jaksic', 'Beograd', 'Serbia', 'maja85@bvcom.net', 1973, '8'),
(463, 'Aleksandra', 'Lilic', 'Beograd', 'Serbia', 'lilialex89@gmail.com', 2008, '2'),
(464, 'Djordje', 'Nakic', 'Beograd', 'Serbia', 'nakic.djordje@gmail.com', 2007, '6'),
(465, 'Nebojsa', 'Kovacevic', 'Beograd', 'Serbia', 'nebojsak@vektor.net', 1986, '4'),
(466, 'Miroslav', 'Lagator', 'Beograd', 'Serbia', 'mir.lagator@gmail.com', 1972, '4'),
(467, 'Milica', 'Mirkovic', 'Beograd', 'Serbia', 'milicamirkovic91@gmail.com', 2009, '1'),
(468, 'Natasa', 'Mirkovic', 'Beograd', 'Serbia', 'natasamirkovic92@gmail.com', 2011, '1'),
(469, 'Rodoljub', 'Mirkovic', 'Beograd', 'Serbia', 'rodoljubmirkovic@gmail.com', 1972, '4'),
(470, 'Teodora', 'Stevovic', 'beograd', 'Serbia', 'teica.s.92@gmail.com', 2011, '8'),
(471, 'Marina', 'Drakulic', 'Beograd', 'Serbia', 'marinadra@gmail.com', 2000, '8'),
(472, 'Mythra', 'Wesowitch', 'Beograd', 'Serbia', 'mitrawess@hotmail.com', 0, ''),
(473, 'Misa', 'Lazovic', 'Beograd', 'Serbia', 'misalazovic@open.telekom.rs', 2009, '2'),
(474, 'Marija', 'Radovanovic', 'Goettingen', 'Germany', 'majche.radovanovic@gmail.com', 2009, '2'),
(475, 'Martina', 'Vukasovic', 'Ghent', 'Belgium', 'martina.vukasovic@gmail.com', 1996, '5'),
(476, 'Nikola', 'djukic', 'Beograd', 'Serbia', 'gicko3@gmail.com', 2012, '2'),
(477, 'Slavisa', 'Stojkovic', 'Beograd', 'Serbia', 'slavisas@sbb.rs', 1973, '1'),
(478, 'Aleksandra', 'Saranovic', 'Beograd', 'Serbia', 'aleksandrasaranovic@yahoo.com', 1973, '3'),
(479, 'Milena', 'Dedijer', 'Seattle', 'United States of America', 'dedijer@yahoo.com', 1986, '3'),
(480, 'Marija', 'Drndic', 'Beograd', 'Serbia', 'm.drndic@gmail.com', 1993, '1'),
(481, 'Bojan', 'Arandjelovic', 'San Dijego', 'United States of America', 'bojan1+skola@gmail.com', 92, '5'),
(482, 'Ljubica', 'Mihaljevic', 'Beograd', 'Serbia', 'mihaljevic.ljubica@yahoo.com', 2012, '10'),
(483, 'Gabrijela', 'Pejcinovic', 'Beograd', 'Serbia', 'gabrijelapejcinovic@yahoo.com', 1993, '1'),
(484, 'Divna', 'Naumovic', 'Belgrade', 'Serbia', 'ndivna@yahoo.com', 1973, '1'),
(485, 'Dusanka', 'Racic', 'Beograd', 'Serbia', 'racicdusanka@yahoo.com', 1993, ''),
(486, 'Nemanja', 'Polic', 'Neuchatel', 'Switzerland', 'npolic@gmail.com', 1990, '6'),
(487, 'Lazar', 'Drazeta', 'Beograd', 'Serbia', 'ldrazeta@singidunum.ac.rs', 0, ''),
(488, 'Branislav', 'Ostojic', 'Beograd', 'Serbia', 'branislaw@gmail.com', 2000, '4'),
(489, 'Ana', 'Westenberger', 'Luebeck', 'Germany', 'ana.djarmati@gmail.com', 1996, '6'),
(490, 'Marko', 'Nikolic', 'Beograd', 'Serbia', 'markonikle@yahoo.com', 0, '10'),
(491, 'Vanja', 'Milovanovic', 'Beograd', 'Serbia', 'vanja.milovanovic712@gmail.com', 2004, '3'),
(492, 'Jana', 'Kurtic', 'Beograd', 'Serbia', 'janakurtic@gmail.com', 2011, '8'),
(493, 'Aleksandar', 'Ilic', 'Beograd', 'Serbia', 'axel.95.ilic@gmail.com', 0, '2'),
(494, 'Jana', 'Jelic Mariokov', 'Beograd', 'Serbia', 'jana.jelicmariokov@gmail.com', 2008, '6'),
(495, 'Maja', 'Kecman', 'Beograd', 'Serbia', 'kecmanm@yahoo.com', 1980, '2'),
(496, 'Jelena', 'Kostic', 'Beograd', 'Serbia', 'mancikert@gmail.com', 1989, '1'),
(497, 'MILESA', 'ANDJUS', 'Beograd', 'Serbia', 'milesa.andjus@gmail.com', 1979, '1'),
(498, 'Rastko', 'Jevtovic', 'Beograd', 'Serbia', 'rastko2@sbb.rs', 1987, '1'),
(499, 'Vlladana', 'Jovetic', 'Beograd', 'Serbia', 'njovetic@eunet.rs', 2008, '7'),
(500, 'Ivana', 'Simic', 'Beograd', 'Serbia', 'ikathequeen@gmail.com', 2000, '8'),
(501, 'Vera', 'Acimovic', 'Beograd', 'Serbia', 'vera.acimovic@gmail.com', 1993, '8'),
(502, 'Nada', 'Arezina', 'Beograd', 'Serbia', 'narezina@singidunum.ac.rs', 2004, '9'),
(503, 'Aleksandra', 'Nikolic', 'Beograd', 'Serbia', 'alexandranikolic@gmail.com', 1994, '2'),
(504, 'Milica', 'Relic', 'Beograd', 'Serbia', 'milica.relic@hotmail.com', 2009, '1'),
(505, 'Gordana', 'djuric', 'Beograd', 'Serbia', 'djuricgordana05@gmail.com', 1973, '6'),
(506, 'bojka', 'stevanovski', 'beograd', 'Serbia', 'bstevanovski@gmail.com', 1973, '1'),
(507, 'Nenad', 'Marjanovic', 'Urbana', 'United States of America', 'nemamane55@hotmail.com', 1973, '5'),
(508, 'Snezana', 'Semsedinovic', 'Beograd', 'Serbia', 'semsedinovic8@gmail.com', 1973, '3'),
(509, 'Hajrija', 'Zucanin', 'Beograd', 'Serbia', 'hajrijazucanin@yahoo.com', 1977, '4'),
(510, 'Jelena', 'Miladinovic', 'Beograd', 'Serbia', 'jelena.miladinovic09@gmail.com', 1997, '3'),
(511, 'dragisa', 'stevanovski', 'beograd', 'Serbia', 'stevanovski54@gmail.com', 1973, '7'),
(512, 'Senka', 'Walid', 'Beograd', 'Serbia', 'senkayu@yahoo.com', 1993, '2'),
(513, 'Milica', 'Petkovic', 'Beograd', 'Serbia', 'mpetkovic382@gmail.com', 2011, '4'),
(514, 'Ana', 'Prising zivkovic', 'Beograd', 'Serbia', 'sacaiana@yahoo.com', 0, ''),
(515, 'Ivana', 'Miljkovic', 'Beograd', 'Serbia', 'i.miljkovic@hotmail.com', 1973, '3'),
(516, 'Milijana', 'Miladinovic', 'Beograd', 'Serbia', 'milijana.miladinovic91@gmail.com', 2010, '3'),
(517, 'Bane', 'Hristic', 'Beograd', 'Serbia', 'branahritic@gmail.com', 1969, '3'),
(518, 'SRDJAN', 'JOVANOVIC', 'Milano', 'Serbia', 'srdjanj@tin.it', 1973, '8'),
(519, 'Biljana', 'Videc', 'Beograd', 'Serbia', 'videcb@gmail.com', 1985, '6'),
(520, 'Vojin', 'Novakovic', 'Beograd', 'Serbia', 'vojin.novakovic@gmail.com', 2004, '10'),
(521, 'Ana', 'Radovic', 'Beograd', 'Serbia', 'anna_radovic@yahoo.com', 2005, '3'),
(522, 'Dejana', 'Jankovic', 'Vienna', 'Austria', 'dejana.gloria@gmail.com', 2005, '3'),
(523, 'tijana', 'vitomir', 'beograd', 'Serbia', 'tvitomir@yahoo.com', 2005, '3'),
(524, 'Dusan', 'Vujovic', 'Beograd', 'Serbia', 'doole13@yahoo.co.uk', 2004, '7'),
(525, 'Ivana', 'Trbojevic Milosevic', 'Beograd', 'Serbia', 'ivanatrbojevic@sbb.rs', 1978, '2'),
(526, 'Andrej', 'Milosevic', 'Beograd', 'Serbia', 'pkshuma@yahoo.com', 2013, '9'),
(527, 'Aleksandar', 'Milojevic', 'Beograd', 'Serbia', 'milojevic.alek@gmail.com', 2005, '9'),
(528, 'Nikola', 'Elezovic', 'Beograd', 'Serbia', 'nikola.elezovic@gmail.com', 2004, '10'),
(529, 'Una', 'Laskovic', 'Beograd', 'Serbia', 'unalaskovic@yahoo.com', 2001, '4'),
(530, 'Nina', 'Ilic', 'Boston', 'United States of America', 'nina_ilic@post.harvard.edu', 2000, '4'),
(531, 'Sladjana', 'Jaksic', 'Beograd', 'Serbia', 'maja85@bvcom.net', 1973, '8'),
(532, 'Bojan', 'Radak', 'Beograd', 'Serbia', 'bojanradak57@gmail.com', 1976, '5'),
(533, 'Olivera', 'Katic', 'London', 'United Kingdom', 'okatic@googlemail.com', 1973, '2'),
(534, 'Miomir', 'Zivadinovic', 'Beograd', 'Serbia', 'miomir.zivadinovic@gmail.com', 2005, '1'),
(535, 'Bojana', 'carmak', 'Beograd', 'Serbia', 'carmakb@yahoo.com', 1993, '1'),
(536, 'SANJA', 'PETROVIC', 'New York', 'United States of America', 'bojaduge@gmail.com', 1988, ''),
(537, 'Vuk', 'Miletic', 'Beograd', 'Serbia', 'vuk.miletic@kulturnielement.org', 1998, '1'),
(538, 'Ivana', 'Majstorovic', 'Beograd', 'Serbia', 'ivazmaj@gmail.com', 2009, '4'),
(539, 'Olgica', 'Ilic', 'Beograd', 'Serbia', 'olgica.ilic@gmail.com', 2000, '3'),
(540, 'Katarina', 'Grdic', 'Beograd', 'Serbia', 'ktarina.grdic@hotmail.com', 2000, '3'),
(541, 'Lucia', 'Vesnic-Alujevic', 'Varese', 'Italy', 'lucy.vessal@gmail.com', 2000, '3'),
(542, 'Milica', 'Janic', 'Beograd', 'Serbia', 'mjanic@yahoo.com', 2000, '3'),
(543, 'Vanja', 'Vujnovic', 'Beograf', 'Serbia', 'wujnovic@gmail.com', 2008, '7'),
(544, 'Milos', 'Vulovic', 'Delft', 'Netherlands', 'milkitj@yahoo.com', 2000, '3'),
(545, 'Srdjan', 'Bunjac', 'Beograd', 'Serbia', 'bunjac@gmail.com', 2000, '3'),
(546, 'Bojana', 'Simic', 'Beograd', 'Serbia', 'bojana.simic3@gmail.com', 2013, '4'),
(547, 'Branka', 'Tomic', 'Macon, GA', 'United States of America', 'prasopil@gmail.com', 1995, '8'),
(548, 'Ivana', 'Vukovic', 'Beograd', 'Serbia', 'ojosazules.bossy@gmail.com', 2012, '1'),
(549, 'Tamara', 'Simic - Djuranovic', 'Beograd', 'Serbia', 'simic-tamara@hotmail.com', 1997, '4'),
(550, 'Milos', 'Srejic', 'Beograd', 'Serbia', 'srejastruja@yahoo.com', 90, '3'),
(551, 'Katarina', 'Jankovic', 'Beograd', 'Serbia', 'kaya_kachony@yahoo.com', 2005, '3'),
(552, 'Svetlana', 'Tomic', 'Beograd', 'Serbia', 'tomic.svetlana@gmail.com', 1988, '3'),
(553, 'Marko', 'Panic', 'Heidelberg', 'Germany', 'm.panic@zmbh.uni-heidelberg.de', 2007, '4'),
(554, 'Ana', 'Popovic-Bijelic', 'Beograd', 'Serbia', 'ana@ffh.bg.ac.rs', 1994, '6'),
(555, 'Marijana', 'Milosavljevic', 'Dr Ivana Ribara 108, Beograd', 'Serbia', 'mery@yubc.net', 1997, '2'),
(556, 'Divna', 'Tesla', 'Beograd', 'Serbia', 'dtesla@open.telekom.rs', 1981, '6'),
(557, 'radmila', 'bigovic', 'beograd', 'Serbia', 'radmilabigovic@gmail.com', 1975, '8'),
(558, 'Uros', 'Kovacevic', 'Beograd', 'Serbia', 'churchbuilder89@gmail.com', 2008, '6'),
(559, 'Jelena', 'Brankovic', 'Beograd', 'Serbia', 'enablueeyes@gmail.com', 2012, '4'),
(560, 'Marija', 'Vasiljevic', 'Beograd', 'Serbia', 'marija.vasiljevic.10@singimail.rs', 2010, '8'),
(561, 'Nemanja', 'Grujicic', 'Dublin', 'Ireland', 'grujicic.nemanja@gmail.com', 2004, '6'),
(562, 'Vuk', 'Savkovic', 'Leipzig', 'Germany', 'vsavkovic@trm.uni-leipzig.de', 1989, '5'),
(563, 'Vuk', 'Savkovic', 'Leipzig', 'Germany', 'vsavkovic@trm.uni-leipzig.de', 1989, '5'),
(564, 'Tamara', 'Djordjevic', 'Johannesburg', 'South Africa', 'tamaradjordjevich@yahoo.co.uk', 1988, ''),
(565, 'Srdjan', 'Ljubic', 'Beograd', 'Serbia', 'srdjan470@gmail.com', 2013, '2'),
(566, 'Dragana', 'Masic', 'Beograd', 'Serbia', 'dada.masic@gmail.com', 1997, '5'),
(567, 'Marko', 'Cirovic', 'Beograd', 'Serbia', 'marko.cirovic@impro.rs', 2005, '4'),
(568, 'Iva', 'Ikovic', 'Beograd', 'Serbia', 'ikovic.iva@gmail.com', 2006, '10'),
(569, 'Vasilisa', 'Milojevic', 'Beograd', 'Serbia', 'vasilisamilojevic@gmail.com', 2013, '1'),
(570, 'Janko', 'Kitanovic', 'Beograd', 'Serbia', 'jankec994@gmail.com', 2013, '1'),
(571, 'Ana', 'Rastegorac', 'Beograd', 'Serbia', 'ana.rastegorac@gmail.com', 2013, '2'),
(572, 'Jelena', 'Raicevlc-Jalsic', 'Beograd', 'Serbia', 'jelena1974@hotmail.com', 1993, '6'),
(573, 'Irena', 'Juskovic', 'Beograd', 'Serbia', 'irenarj@yahoo.com', 1993, '2'),
(574, 'Stefan', 'Plavsic', 'Beograd', 'Serbia', 'plavsabk@gmail.com', 2013, '1'),
(575, 'Teodora', 'Djukic', 'Beograd', 'Serbia', 'teodora94nbg@yahoo.com', 2013, '1'),
(576, 'Milica', 'Vucurovic', 'Beograd', 'Serbia', 'milicavasicmail@gmail.com', 2002, '6'),
(577, 'Miroslava', 'Taus', 'Beograd', 'Serbia', 'vojataus@bvcom.net', 1968, '11'),
(578, 'Mirjana', 'djurdjevic', 'Beograd', 'Serbia', 'drmirjanadj61@yahoo.com', 1980, '1'),
(579, 'Marko', 'suica', 'Beograd', 'Serbia', 'msuica@bvcom.net', 1985, '3'),
(580, 'Bojana', 'scepanovic', 'Beograd', 'Serbia', 'bscepanovic1@gmail.com', 2012, '10'),
(581, 'Jana', 'Stojanovic', 'Beograd', 'Serbia', 'jana.stojanovicc@gmail.com', 2007, '1'),
(582, 'Biljana', 'djuric Stojanovic', 'Beograd', 'Serbia', 'biljana.djurich@gmail.com', 1979, '3'),
(583, 'Milos', 'Popovic', 'Beograd', 'Serbia', 'milos_pop_90@yahoo.com', 2009, '7'),
(584, 'Sanja', 'Lazarevic', 'Beograd', 'Serbia', 'strbac.sanja82@yahoo.com', 2001, '5'),
(585, 'Luka', 'Nikolic', 'Beograd ', 'Serbia', 'luka-70-@hotmail.com', 2012, '5'),
(586, 'zoran', 'miladinovic', 'beograd', 'Serbia', 'zomil703@gmail.com', 1974, '5'),
(587, 'Gurbe', 'Ciganovic', 'Washington DC', 'United States of America', 'cig.cig.rom.rom@gurbetaner.com', 2015, ''),
(588, 'Elena', 'Panic', 'Beograd', 'Serbia', 'panicelena@yahoo.com', 2012, '10'),
(589, 'Zorica', 'Panic', 'Beograd', 'Serbia', 'panicgoga@gmail.com', 1983, '4'),
(590, 'Nikola', 'Graovac', 'Beograd', 'Serbia', 'nikola.graovac@hotmail.com', 2012, '1'),
(591, 'Dragana', 'Radisic', 'Mladenovac', 'Serbia', 'slavenko61@gmail.com', 1982, ''),
(592, 'Ivana', 'Milovanovic', 'Beograd', 'Serbia', 'orchestrayu@yahoo.com', 1974, '5'),
(593, 'Radomirka', 'Perovic', 'Beograd', 'Serbia', 'fperovic@eunet.rs', 1971, '4'),
(594, 'Milica', 'Vucurovic', 'Beograd', 'Serbia', 'milicavasicmail@gmail.com', 2002, '6'),
(595, 'Jana', 'Gojanovic Purger', '6000 Koper, Cesta borcev 23', 'Slovenia', 'jana.purger@gmail.com', 1974, '6'),
(596, 'Ognjen', 'Pantovic', 'Beograd', 'Serbia', 'ogi_rsk@gmail.com', 2008, '2'),
(597, 'Ognjen', 'Pantovic', 'Beograd', 'Serbia', 'ogi_rsk@live.com', 2008, '2'),
(598, 'Dusan', 'Dincic', 'Beograd', 'Serbia', 'dusan.dincic@gmail.com', 1994, '8'),
(599, 'Predrag', 'Krivokuca', 'Beograd', 'Serbia', 'predrag975@gmail.com', 1994, '3'),
(600, 'Misa', 'Blagojevic', 'Beograd', 'Serbia', 'misablag@gmail.com', 2000, '6'),
(601, 'Milena', 'Djuricic', 'Istanbul', 'Turkey', 'milena.djuricic@gmail.com', 1994, '4'),
(602, 'Milica', 'Tadic', 'Beograd', 'Serbia', 'mim161@gmail.com', 1994, '2'),
(603, 'Ellen', 'Simich', 'New York', 'United States of America', 'ellen@ellensimich.com', 1991, '2');

-- --------------------------------------------------------

--
-- Table structure for table `authorizationrole`
--

CREATE TABLE IF NOT EXISTS `authorizationrole` (
`Id` bigint(20) NOT NULL,
  `Name` varchar(32) CHARACTER SET cp1251 COLLATE cp1251_bin NOT NULL,
  `Code` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authorizationrole`
--

INSERT INTO `authorizationrole` (`Id`, `Name`, `Code`) VALUES
(1, 'Администратор', 'ADMOD'),
(2, 'Наставник', 'TEACHER');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`Id` bigint(20) NOT NULL,
  `Version` int(11) NOT NULL,
  `Guid` varchar(50) COLLATE cp1251_bin NOT NULL,
  `Title` varchar(200) COLLATE cp1251_bin NOT NULL COMMENT 'Category title visible on website.',
  `HierarchyDepth` int(11) NOT NULL,
  `HierarchyId` varchar(50) COLLATE cp1251_bin NOT NULL,
  `ParentId` bigint(20) DEFAULT NULL,
  `Position` int(11) NOT NULL,
  `IsDeleted` tinyint(1) NOT NULL,
  `IsHidden` tinyint(1) NOT NULL,
  `IsHome` bit(1) NOT NULL,
  `IsFixedRoute` bit(1) NOT NULL,
  `Route` text COLLATE cp1251_bin NOT NULL,
  `IsCourse` bit(1) DEFAULT NULL,
  `CourseName` varchar(50) COLLATE cp1251_bin DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=cp1251 COLLATE=cp1251_bin;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Id`, `Version`, `Guid`, `Title`, `HierarchyDepth`, `HierarchyId`, `ParentId`, `Position`, `IsDeleted`, `IsHidden`, `IsHome`, `IsFixedRoute`, `Route`, `IsCourse`, `CourseName`) VALUES
(1, 1, '1601be17-d0ac-11e4-9841-f46d04612ccc', 'Категорије', 0, '1.', NULL, 0, 0, 1, b'0', b'0', '', b'0', ''),
(2, 1, 'bb0ac377-d0ab-11e4-9841-f46d04612ccc', 'Почетна', 1, '1.2.', 1, 0, 0, 0, b'1', b'1', '/', b'0', ''),
(3, 1, '6f3c3964-d0ac-11e4-9841-f46d04612ccc', 'Школа', 1, '1.3.', 1, 1, 0, 0, b'0', b'0', '', b'0', ''),
(4, 1, 'ac9f9ca6-d0ac-11e4-9841-f46d04612ccc', 'Упис', 1, '1.4.', 1, 2, 0, 0, b'0', b'0', '', b'0', ''),
(5, 1, '61c86244-d0ad-11e4-9841-f46d04612ccc', 'Настава', 1, '1.5.', 1, 3, 0, 0, b'0', b'0', '', b'0', ''),
(6, 1, '84e427b9-d0ad-11e4-9841-f46d04612ccc', 'Алумни', 1, '1.6.', 1, 4, 0, 0, b'0', b'0', '', b'0', ''),
(7, 1, 'abeba91a-d0ad-11e4-9841-f46d04612ccc', 'Слободне активности', 1, '1.7.', 1, 5, 0, 0, b'0', b'0', '', b'0', ''),
(8, 1, '32c7be9b-d0ae-11e4-9841-f46d04612ccc', 'Пројекти', 1, '1.8.', 1, 6, 0, 0, b'0', b'0', '', b'0', ''),
(9, 1, '57b92082-d0ae-11e4-9841-f46d04612ccc', 'Запослени', 1, '1.9.', 1, 7, 0, 0, b'0', b'0', '', b'0', ''),
(10, 1, '8041b46c-d0ae-11e4-9841-f46d04612ccc', 'Контакт', 1, '1.10.', 1, 8, 0, 0, b'0', b'0', '', b'0', ''),
(11, 1, '0eabb1f7-d0b7-11e4-9841-f46d04612ccc', 'Кроз историју', 2, '1.3.', 3, 0, 0, 0, b'0', b'0', '', b'0', ''),
(12, 1, '481306c3-d0b7-11e4-9841-f46d04612ccc', 'Школски одбор', 2, '1.3.12.', 3, 1, 0, 0, b'0', b'0', '', b'0', ''),
(13, 1, 'aecb6619-d0b7-11e4-9841-f46d04612ccc', 'Савет родитеља', 2, '1.3.13.', 3, 2, 0, 0, b'0', b'0', '', b'0', ''),
(14, 1, 'c2ac74a8-d0b7-11e4-9841-f46d04612ccc', 'Ђачки парламент', 2, '1.3.14.', 3, 3, 0, 0, b'0', b'0', '', b'0', ''),
(15, 1, 'abd8bbd9-d0b9-11e4-9841-f46d04612ccc', 'Смерови', 2, '1.4.14.', 4, 0, 0, 0, b'0', b'0', '', b'0', ''),
(16, 1, 'e3319bfd-d0b9-11e4-9841-f46d04612ccc', 'Наставни материјали', 2, '1.5.16.', 5, 0, 0, 0, b'0', b'0', '', b'0', ''),
(17, 1, 'f638a356-d0b9-11e4-9841-f46d04612ccc', 'Отворена врата', 2, '1.5.17.', 5, 1, 0, 0, b'0', b'0', '', b'0', ''),
(19, 1, '09105a95-d0ba-11e4-9841-f46d04612ccc', 'Распоред звона', 2, '1.5.19.', 5, 2, 0, 0, b'0', b'0', '', b'0', ''),
(20, 1, '1dbfcfb2-d0ba-11e4-9841-f46d04612ccc', 'Распоред часова', 2, '1.5.20.', 5, 3, 0, 0, b'0', b'0', '', b'0', ''),
(21, 1, '38a4816b-d0ba-11e4-9841-f46d04612ccc', 'Школски календар', 2, '1.5.21.', 5, 4, 0, 0, b'0', b'0', '', b'0', ''),
(22, 1, '5a1f168f-d0ba-11e4-9841-f46d04612ccc', 'Пријави се на листу', 2, '1.6.22.', 6, 1, 0, 0, b'0', b'1', '/пријава-на-алумни', b'0', ''),
(23, 1, 'b79f52e7-d0ba-11e4-9841-f46d04612ccc', 'Алумнисти', 2, '1.6.23.', 6, 0, 0, 0, b'0', b'1', '/алумни', b'0', ''),
(24, 1, '3b0a208c-d0bb-11e4-9841-f46d04612ccc', 'Радионице', 2, '1.7.24.', 7, 0, 0, 0, b'0', b'0', '', b'0', ''),
(25, 1, '56e9aef5-d0bb-11e4-9841-f46d04612ccc', 'Екскурзије', 2, '1.7.25.', 7, 1, 0, 0, b'0', b'0', '', b'0', ''),
(26, 1, '848aceb7-d0bb-11e4-9841-f46d04612ccc', 'Позориште', 2, '1.7.26.', 7, 2, 0, 0, b'0', b'0', '', b'0', ''),
(27, 1, '985923ee-d0bb-11e4-9841-f46d04612ccc', 'Библиотека', 2, '1.7.27.', 7, 3, 0, 0, b'0', b'0', '', b'0', ''),
(28, 1, 'bc54d471-d0bb-11e4-9841-f46d04612ccc', 'Секције', 2, '1.7.28.', 7, 4, 0, 0, b'0', b'0', '', b'0', ''),
(29, 1, 'efdfad7b-d0bb-11e4-9841-f46d04612ccc', 'Инклузија', 2, '1.8.29.', 8, 0, 0, 0, b'0', b'0', '', b'0', ''),
(30, 1, '12c82014-d0bc-11e4-9841-f46d04612ccc', 'Директор и помоћник директора', 2, '1.9.30.', 9, 0, 0, 0, b'0', b'0', '', b'0', ''),
(31, 1, '28f8ce03-d0bc-11e4-9841-f46d04612ccc', 'Секретар', 2, '1.9.31.', 9, 1, 0, 0, b'0', b'0', '', b'0', ''),
(32, 1, '37434491-d0bc-11e4-9841-f46d04612ccc', 'Стручна већа', 2, '1.9.32.', 9, 2, 0, 0, b'0', b'0', '', b'0', ''),
(33, 1, '4a3442e4-d0bc-11e4-9841-f46d04612ccc', 'Стручни сарадници', 2, '1.9.33.', 9, 3, 0, 0, b'0', b'0', '', b'0', ''),
(34, 1, 'ab383330-d0bd-11e4-9841-f46d04612ccc', 'Рачуноводство и администрација', 2, '1.9.34.', 9, 4, 0, 0, b'0', b'0', '', b'0', ''),
(35, 1, '1ffb82fc-d0be-11e4-9841-f46d04612ccc', 'Техничко и помоћно особље', 2, '1.9.35.', 9, 5, 0, 0, b'0', b'0', '', b'0', ''),
(36, 1, '09487e75-d0c1-11e4-9841-f46d04612ccc', 'Наставници', 2, '1.9.36.', 9, 5, 0, 0, b'0', b'1', '/наставници', b'0', ''),
(37, 1, 'e0de2d58-d0c2-11e4-9841-f46d04612ccc', 'Прва година', 3, '1.5.16.37.', 16, 0, 0, 0, b'0', b'0', '', b'0', ''),
(38, 1, '013c7415-d0c3-11e4-9841-f46d04612ccc', 'Друга година', 3, '1.5.16.38.', 16, 1, 0, 0, b'0', b'0', '', b'0', ''),
(39, 1, '1b1cd5d3-d0c3-11e4-9841-f46d04612ccc', 'Трећа година', 3, '1.5.16.39.', 16, 2, 0, 0, b'0', b'0', '', b'0', ''),
(40, 1, '2b3f6227-d0c3-11e4-9841-f46d04612ccc', 'Четврта година', 3, '1.5.16.40.', 16, 3, 0, 0, b'0', b'0', '', b'0', ''),
(41, 1, '7fd8a0bc-d0c3-11e4-9841-f46d04612ccc', 'Утисци', 3, '1.7.25.41.', 25, 0, 0, 0, b'0', b'0', '', b'0', ''),
(42, 1, 'd01b5c3a-d0c3-11e4-9841-f46d04612ccc', 'Слике', 2, '1.7.42.', 7, 5, 0, 0, b'0', b'0', '', b'0', ''),
(43, 1, '0a23a886-d0c4-11e4-9841-f46d04612ccc', 'Спорт', 2, '1.7.43.', 7, 6, 0, 0, b'0', b'0', '', b'0', ''),
(44, 1, '3f5acd59-d0c4-11e4-9841-f46d04612ccc', 'Школа данас', 3, '1.7.42.44.', 42, 0, 0, 0, b'0', b'0', '', b'0', ''),
(45, 1, '4c593e45-d0c4-11e4-9841-f46d04612ccc', 'Кабинети', 3, '1.7.42.45.', 42, 1, 0, 0, b'0', b'0', '', b'0', ''),
(46, 1, '5709c11a-d0c4-11e4-9841-f46d04612ccc', 'Дружења', 3, '1.7.42.46.', 42, 2, 0, 0, b'0', b'0', '', b'0', ''),
(47, 1, '8eac84ba-d0cb-11e4-9841-f46d04612ccc', 'Српски језик и књижевност', 4, '1.5.16.37.47.', 37, 0, 0, 0, b'0', b'0', '', b'1', 'Српски језик и књижевност - Прва година'),
(48, 1, 'fb9eb30c-d0cb-11e4-9841-f46d04612ccc', 'Математика', 4, '1.5.16.37.48.', 37, 1, 0, 0, b'0', b'0', '', b'1', 'Математика - Прва година'),
(49, 1, 'aa446f8f-d0cf-11e4-9841-f46d04612ccc', 'Физика', 4, '1.5.16.37.49.', 37, 2, 0, 0, b'0', b'0', '', b'1', 'Физика - Прва година'),
(50, 1, 'bc61b686-d0cf-11e4-9841-f46d04612ccc', 'Хемија', 4, '1.5.16.37.50.', 37, 3, 0, 0, b'0', b'0', '', b'1', 'Хемија - Прва година'),
(51, 1, 'cea62af5-d0cf-11e4-9841-f46d04612ccc', 'Историја', 4, '1.5.16.37.51.', 37, 4, 0, 0, b'0', b'0', '', b'1', 'Историја - Прва година'),
(52, 1, 'eb02efca-d0cf-11e4-9841-f46d04612ccc', 'Рачунарство и информатика', 4, '1.5.16.37.52.', 37, 5, 0, 0, b'0', b'0', '', b'1', 'Рачунарство и информатика - Прва година'),
(53, 1, '2c72d8f7-d0d0-11e4-9841-f46d04612ccc', 'Српски језик и књижевност', 4, '1.5.16.38.53.', 38, 0, 0, 0, b'0', b'0', '', b'1', 'Српски језик и књижевност - Друга година'),
(54, 1, '7c3d17ce-d0d0-11e4-9841-f46d04612ccc', 'Математика', 4, '1.5.16.38.54.', 38, 1, 0, 0, b'0', b'0', '', b'1', 'Математика - Друга година'),
(55, 1, '7c44c894-d0d0-11e4-9841-f46d04612ccc', 'Физика', 4, '1.5.16.38.55.', 38, 2, 0, 0, b'0', b'0', '', b'1', 'Физика - Друга година'),
(56, 1, '7c4b9523-d0d0-11e4-9841-f46d04612ccc', 'Хемија', 4, '1.5.16.38.56.', 38, 3, 0, 0, b'0', b'0', '', b'1', 'Хемија - Друга година'),
(57, 1, '7c524b75-d0d0-11e4-9841-f46d04612ccc', 'Историја', 4, '1.5.16.38.57.', 38, 4, 0, 0, b'0', b'0', '', b'1', 'Историја - Друга година'),
(58, 1, '7c569dbe-d0d0-11e4-9841-f46d04612ccc', 'Рачунарство и информатика', 4, '1.5.16.38.58.', 38, 5, 0, 0, b'0', b'0', '', b'1', 'Рачунарство и информатика - Друга година'),
(59, 1, 'f6169c3b-d0d0-11e4-9841-f46d04612ccc', 'Српски језик и књижевност', 4, '1.5.16.39.59.', 39, 0, 0, 0, b'0', b'0', '', b'1', 'Српски језик и књижевност - Трећа година'),
(60, 1, 'f61d8fa5-d0d0-11e4-9841-f46d04612ccc', 'Математика', 4, '1.5.16.39.60.', 39, 1, 0, 0, b'0', b'0', '', b'1', 'Математика - Трећа година'),
(61, 1, 'f625082a-d0d0-11e4-9841-f46d04612ccc', 'Физика', 4, '1.5.16.39.61.', 39, 2, 0, 0, b'0', b'0', '', b'1', 'Физика - Трећа година'),
(62, 1, 'f62fedea-d0d0-11e4-9841-f46d04612ccc', 'Хемија', 4, '1.5.16.39.62.', 39, 3, 0, 0, b'0', b'0', '', b'1', 'Хемија - Трећа година'),
(63, 1, 'f63b03de-d0d0-11e4-9841-f46d04612ccc', 'Рачунарство и информатика', 4, '1.5.16.39.63.', 39, 4, 0, 0, b'0', b'0', '', b'1', 'Рачунарство и информатика - Трећа година'),
(64, 1, '40689d5e-d0d1-11e4-9841-f46d04612ccc', 'Српски језик и књижевност', 4, '1.5.16.40.64.', 40, 0, 0, 0, b'0', b'0', '', b'1', 'Српски језик и књижевност - Четврта година'),
(65, 1, '406d7ad5-d0d1-11e4-9841-f46d04612ccc', 'Математика', 4, '1.5.16.40.65.', 40, 1, 0, 0, b'0', b'0', '', b'1', 'Математика - Четврта година'),
(66, 1, '40719398-d0d1-11e4-9841-f46d04612ccc', 'Физика', 4, '1.5.16.40.66.', 40, 2, 0, 0, b'0', b'0', '', b'1', 'Физика - Четврта година'),
(67, 1, '407799ab-d0d1-11e4-9841-f46d04612ccc', 'Хемија', 4, '1.5.16.40.67.', 40, 3, 0, 0, b'0', b'0', '', b'1', 'Хемија - Четврта година'),
(68, 1, '407d6692-d0d1-11e4-9841-f46d04612ccc', 'Рачунарство и информатика', 4, '1.5.16.40.68.', 40, 4, 0, 0, b'0', b'0', '', b'1', 'Рачунарство и информатика - Четврта година');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
`Id` bigint(20) NOT NULL,
  `Version` int(11) NOT NULL,
  `Guid` varchar(32) CHARACTER SET latin1 NOT NULL,
  `Title` text CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `CategoryId` bigint(20) NOT NULL,
  `IsDeleted` bit(1) NOT NULL,
  `CreatedAt` date NOT NULL,
  `LastModifiedAt` date DEFAULT NULL,
  `CreatedByUserId` bigint(20) DEFAULT NULL,
  `CreatedByUserName` varchar(30) CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `ContentType` tinyint(5) DEFAULT NULL,
  `Content` text CHARACTER SET utf16 COLLATE utf16_bin,
  `FilePath` text CHARACTER SET utf16 COLLATE utf16_bin
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=cp1251 COLLATE=cp1251_bin;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`Id`, `Version`, `Guid`, `Title`, `CategoryId`, `IsDeleted`, `CreatedAt`, `LastModifiedAt`, `CreatedByUserId`, `CreatedByUserName`, `ContentType`, `Content`, `FilePath`) VALUES
(1, 1, '551b06899c8e0', 'Кроз историју', 11, b'0', '2015-03-31', '2015-05-09', 1, 'markic', 1, './contents/1.html', NULL),
(2, 1, '551b077677f7e', 'Школски одбор', 12, b'0', '2015-03-31', '2015-04-02', 3, 'markic', 1, './contents/2.html', NULL),
(3, 1, '551b09bc8fe31', 'Контакт', 10, b'0', '2015-03-31', NULL, 3, 'markic', 1, './contents/3.html', NULL),
(4, 1, '551b0a9cec298', 'Директор и помоћник директора', 30, b'0', '2015-03-31', '2015-03-31', 3, 'markic', 1, './contents/4.html', NULL),
(5, 1, '551b0acfa76e6', 'Секретар', 31, b'0', '2015-03-31', '2015-03-31', 3, 'markic', 1, './contents/5.html', NULL),
(6, 1, '551b0b966d038', 'Стручна већа', 32, b'0', '2015-03-31', NULL, 3, 'markic', 1, './contents/6.html', NULL),
(7, 1, '551b0bef3c6ac', 'Стручни сарадници', 33, b'0', '2015-03-31', NULL, 3, 'markic', 1, './contents/7.html', NULL),
(8, 1, '551b0c2c89bff', 'Рачуноводство и администрација', 34, b'0', '2015-03-31', NULL, 3, 'markic', 1, './contents/8.html', NULL),
(9, 1, '551b0c5b7ddac', 'Техничко и помоћно особље', 35, b'0', '2015-03-31', NULL, 3, 'markic', 1, './contents/9.html', NULL),
(10, 1, '551b0e12917da', 'Инклузија', 29, b'0', '2015-03-31', NULL, 3, 'markic', 1, './contents/10.html', NULL),
(11, 1, '551b0e5da2ae8', 'Спорт', 43, b'0', '2015-03-31', NULL, 3, 'markic', 1, './contents/11.html', NULL),
(12, 1, '551b0ebd37497', 'Библиотека', 27, b'0', '2015-03-31', NULL, 3, 'markic', 1, './contents/12.html', NULL),
(13, 1, '551b0ed6e623b', 'Позориште', 26, b'0', '2015-03-31', NULL, 3, 'markic', 1, './contents/13.html', NULL),
(16, 1, '551d9bee2f0ef', 'Филм о историји Пете београдске гимназије', 2, b'0', '2013-11-12', NULL, 3, 'markic', 1, './contents/16.html', NULL),
(17, 1, '551d9c0fd0406', 'Графен претвара Кока Колу у воду', 2, b'0', '2014-03-07', NULL, 3, 'markic', 1, './contents/17.html', NULL),
(18, 1, '551d9c355e02f', 'УПИС У ПРВУ ГОДИНУ', 2, b'0', '2015-02-28', NULL, 3, 'markic', 1, './contents/18.html', NULL),
(19, 1, '551d9c5643dbd', 'ИЗВЕШТАЈ СА ТАКМИЧЕЊА', 2, b'0', '2015-04-02', NULL, 3, 'markic', 1, './contents/19.html', NULL),
(20, 1, '551da129a6c4d', 'Савет родитеља', 13, b'0', '2015-04-02', NULL, 3, 'markic', 1, './contents/20.html', NULL),
(21, 1, '551da1ef5f182', 'Ђачки парламент', 14, b'0', '2015-04-02', NULL, 3, 'markic', 1, './contents/21.html', NULL),
(22, 1, '551da21ddeb27', 'Смерови', 15, b'0', '2015-04-02', NULL, 3, 'markic', 1, './contents/22.html', NULL),
(23, 1, '551da292af35d', 'Распоред часова', 20, b'0', '2015-04-02', NULL, 3, 'markic', 1, './contents/23.html', NULL),
(24, 1, '551da2b7d8b53', 'Распоред звона', 19, b'0', '2015-04-02', NULL, 3, 'markic', 1, './contents/24.html', NULL),
(25, 1, '551da2cfb69cc', 'Отворена врата', 17, b'0', '2015-04-02', NULL, 3, 'markic', 1, './contents/25.html', NULL),
(26, 1, '551da2f34844b', 'Школски календар', 21, b'0', '2015-04-02', NULL, 3, 'markic', 1, './contents/26.html', NULL),
(27, 1, '551da3cc28262', 'Радионице', 24, b'0', '2015-04-02', NULL, 3, 'markic', 1, './contents/27.html', NULL),
(28, 1, '551da3ea874c4', 'Утисци', 41, b'0', '2015-04-02', NULL, 3, 'markic', 1, './contents/28.html', NULL),
(29, 1, '551da436f1d58', 'Секције', 28, b'0', '2015-04-02', NULL, 3, 'markic', 1, './contents/29.html', NULL),
(30, 1, '551da455a1b1e', 'Школа данас', 44, b'0', '2015-04-02', NULL, 3, 'markic', 1, './contents/30.html', NULL),
(31, 1, '551da47b335db', 'Кабинети', 45, b'0', '2015-04-02', NULL, 3, 'markic', 1, './contents/31.html', NULL),
(32, 1, '551da4af557ff', 'Дружења', 46, b'0', '2015-04-02', NULL, 3, 'markic', 1, './contents/32.html', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`Id` bigint(20) NOT NULL,
  `Version` int(11) NOT NULL,
  `Guid` varchar(32) NOT NULL,
  `UserName` text CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `Password` text CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `Email` text NOT NULL,
  `FirstName` text CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `LastName` text CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `CreatedAt` date NOT NULL,
  `PhotoPath` text NOT NULL,
  `About` text CHARACTER SET utf16 COLLATE utf16_bin,
  `AuthorizationId` bigint(20) NOT NULL,
  `IsDeleted` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Version`, `Guid`, `UserName`, `Password`, `Email`, `FirstName`, `LastName`, `CreatedAt`, `PhotoPath`, `About`, `AuthorizationId`, `IsDeleted`) VALUES
(1, 1, '1', 'года', '202cb962ac59075b964b07152d234b70', 'gdavidovic@yahoo.com', 'Гордана', 'Давидовић', '2015-03-26', './photos/1.jpg', 'Рођена сам у Београду.s :)						', 1, b'0'),
(2, 0, '0', 'дијо', '202cb962ac59075b964b07152d234b70', 'divna@gmail.com', 'Дивна', 'Јовановић', '2015-03-26', './photos/default.jpg', '									', 2, b'0'),
(3, 1, '6b66ca0e-d640-11e4-8641-f46d0461', 'markic', '944e7f5541dcc9e94aceb3a23d626af8', 'marin.markic@mail.com', 'Marin', 'Markic', '2015-03-29', './photos/default.jpg', NULL, 1, b'0');

-- --------------------------------------------------------

--
-- Table structure for table `usercategory`
--

CREATE TABLE IF NOT EXISTS `usercategory` (
  `UserId` bigint(20) NOT NULL,
  `CategoryId` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `authorizationrole`
--
ALTER TABLE `authorizationrole`
 ADD PRIMARY KEY (`Id`), ADD UNIQUE KEY `Id` (`Id`), ADD UNIQUE KEY `Code` (`Code`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`Id`), ADD UNIQUE KEY `Guid` (`Guid`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`Id`), ADD UNIQUE KEY `Id` (`Id`);

--
-- Indexes for table `usercategory`
--
ALTER TABLE `usercategory`
 ADD PRIMARY KEY (`UserId`,`CategoryId`), ADD KEY `FK_category_user` (`CategoryId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=604;
--
-- AUTO_INCREMENT for table `authorizationrole`
--
ALTER TABLE `authorizationrole`
MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `usercategory`
--
ALTER TABLE `usercategory`
ADD CONSTRAINT `FK_category_user` FOREIGN KEY (`CategoryId`) REFERENCES `category` (`Id`),
ADD CONSTRAINT `FK_user_category` FOREIGN KEY (`UserId`) REFERENCES `user` (`Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
