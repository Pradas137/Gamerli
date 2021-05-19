-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2021 at 11:52 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realgamerli`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ratingscore` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `game_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'MULTI', NULL, NULL, NULL),
(2, 'PC', NULL, NULL, NULL),
(3, 'MICROSOFT', NULL, NULL, NULL),
(4, 'SONY', NULL, NULL, NULL),
(5, 'NINTENDO', NULL, NULL, NULL),
(6, 'OTROS', NULL, NULL, NULL),
(7, 'MOVILE', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `friend_id` bigint(20) UNSIGNED NOT NULL,
  `state` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gamelists`
--

CREATE TABLE `gamelists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visibility` int(11) NOT NULL DEFAULT 0,
  `name` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gamelists`
--

INSERT INTO `gamelists` (`id`, `visibility`, `name`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 0, 'favoritos', 2, '2021-05-18 07:25:40', '2021-05-18 07:25:40'),
(2, 0, 'favoritos', 3, '2021-05-18 07:26:43', '2021-05-18 07:26:43'),
(3, 0, 'favoritos', 4, '2021-05-18 07:27:45', '2021-05-18 07:27:45'),
(4, 0, 'Favoritos', 9, '2021-05-18 07:28:37', '2021-05-18 07:28:37'),
(5, 0, 'Favoritos', 10, '2021-05-18 07:37:36', '2021-05-18 07:37:36'),
(6, 0, 'Favoritos', 11, '2021-05-18 07:38:38', '2021-05-18 07:38:38');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `developer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `director` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publisher` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `pegi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '3',
  `summary` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_reference` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `validate` enum('validated','pending','rejected') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `saga` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `platform_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `name`, `developer`, `director`, `publisher`, `date`, `pegi`, `summary`, `page_reference`, `image`, `validate`, `saga`, `platform_id`, `created_at`, `updated_at`) VALUES
(1, '50 Cent: Bulletproof', NULL, NULL, NULL, '2005-11-17', '18', '50 Cent: Bulletproof was reworked into a PlayStation Portable version and titled 50 Cent: Bulletproof G Unit Edition, with a top-down perspective. A sequel, 50 Cent: Blood on the Sand, was released on February 24, 2009 for PlayStation 3 and Xbox 360.The story revolves around protagonist hip hop musician 50 Cent\'s search for vengeance against the hitmen who attempted to murder him. ', 'https://en.wikipedia.org/wiki/50_Cent:_Bulletproof', '//upload.wikimedia.org/wikipedia/en/2/28/50_Cent_Bulletproof.jpg', 'pending', NULL, 4, '2021-05-17 08:22:21', '2021-05-17 08:22:21'),
(2, 'Assassin\'s Creed', 'Ubisoft Montreal', '0', NULL, '2007-11-13', '16', 'Assassin\'s Creed is a historical fiction action-adventure open world stealth video game series that consists of seven main games and a number of supporting materials, as of 2013. The games have appeared on the PlayStation 3, Xbox 360, Microsoft Windows, Mac OS X, Nintendo DS, PlayStation Portable, PlayStation Vita, iOS, HP webOS, Android, Nokia Symbian Windows Phone platforms, and the Wii U.The main games in the franchise were developed by Ubisoft Montreal for the single player and Ubisoft Annecy for the multiplayer, with the handheld titles developed by Gameloft and Gryptonite Studios, with additional development by Ubisoft Montreal. The series has been well received by the public and critics, and has sold over 73 million copies as of April 2014, becoming Ubisoft\'s best selling franchise. The series took inspiration from the novel Alamut by the Slovenian writer Vladimir Bartol, and are considered by some to be the spiritual successor to the Prince of Persia series.', 'https://en.wikipedia.org/wiki/Assassin\'s_Creed', '//upload.wikimedia.org/wikipedia/en/thumb/2/2a/Assassin%27s_Creed_Logo.svg/250px-Assassin%27s_Creed_Logo.svg.png', 'pending', 'Assassin\'s Creed', 10, '2021-05-17 08:22:21', '2021-05-17 08:22:21'),
(3, 'Battlefield III', '0', '0', '0', '2011-10-25', '16', 'Battlefield 3 is a first-person shooter video game developed by EA Digital Illusions CE and published by Electronic Arts. It is a direct sequel to 2005\'s Battlefield 2, and the eleventh installment in the Battlefield franchise.The game was released in North America on 25 October 2011 and in Europe on 28 October 2011 for Microsoft Windows, PlayStation 3, and Xbox 360. EA Mobile also confirmed a port for the iOS platform. The game sold 5 million copies in its first week of release, and received critical acclaim from most game reviewers. It is the first game in the series that does not support versions of Windows prior to Windows Vista as the game only supports DirectX 10 and 11. The PC version is exclusive to EA\'s Origin platform, through which PC users also authenticate when connecting to the game. The game\'s sequel, Battlefield 4, was released on October 29, 2013.In Battlefield 3\'s campaign, players take on the personas of several military roles: a U.S. Marine, an F18 weapons system officer, an M1A2 Abrams tank operator, and a Spetsnaz GRU operative. The campaign takes place in various locations, including Iran to New York City, and follows the stories of Sergeant Henry Blackburn and Dimitri Mayakovsky.', 'https://en.wikipedia.org/wiki/Battlefield_3', '//upload.wikimedia.org/wikipedia/en/6/69/Battlefield_3_Game_Cover.jpg', 'pending', 'Battlefield', 26, '2021-05-17 08:22:21', '2021-05-17 08:22:21'),
(4, 'Battlefield IV', '0', 'Lars Gustavsson Stefan Strandberg', '0', '2013-10-29', '16', 'Battlefield 4 is a first-person shooter video game developed by Swedish video game developer EA Digital Illusions CE (DICE) and published by Electronic Arts. It is a sequel to 2011\'s Battlefield 3. It was released on October 29, 2013 in North America, October 31, 2013 in Australia, November 1, 2013 in Europe and New Zealand and November 7, 2013 in Japan for Microsoft Windows, PlayStation 3, PlayStation 4, Xbox 360 and Xbox One.Battlefield 4 received positive critical response from reviewers and was a commercial success, praised for its multiplayer mode, gameplay and graphics. In contrast, the game\'s single-player campaign was highly criticised by critics for being short and shallow, as well as glitches and bugs upon the game\'s release.', 'https://en.wikipedia.org/wiki/Battlefield_4', '//upload.wikimedia.org/wikipedia/en/thumb/7/75/Battlefield_4_cover_art.jpg/256px-Battlefield_4_cover_art.jpg', 'pending', 'Battlefield', 26, '2021-05-17 08:22:21', '2021-05-17 08:22:21'),
(5, 'BlazBlue II: Continuum Shift', NULL, NULL, NULL, '2011-05-31', '18', 'BlazBlue: Continuum Shift (ブレイブルー コンティニュアム シフト, bureiburū: kontinyuamu shifuto) is a 2-D fighting game developed by Arc System Works and is the official sequel to BlazBlue: Calamity Trigger. As with the previous game, the game first came to arcades before both the Xbox 360 and PlayStation 3 versions as the game was currently released for the Taito Type X2 arcade system board, with a 16:9 ratio and 768p resolution. It was released on November 20, 2009 in Japan. A console version was released in Japan on July 1, North America on July 27, and in Europe, on December 3, 2010 along with a region-exclusive Limited Edition. Two of its updated versions were later released, which are also available for PlayStation Portable, Nintendo 3DS, and PlayStation Vita.A third entry in the series, BlazBlue: Chrono Phantasma, was released during winter 2012 in Japanese arcades and in April 2014 in North America as a PlayStation 3 title. A PlayStation Vita port is planned for summer 2014.', 'https://en.wikipedia.org/wiki/BlazBlue:_Continuum_Shift', '//upload.wikimedia.org/wikipedia/en/8/8c/BlazBlue_Continuum_Shift.jpg', 'pending', 'BlazBlue', 8, '2021-05-17 08:22:21', '2021-05-17 08:22:21'),
(6, 'Blitz I: The League', NULL, NULL, NULL, '2005-10-17', '16', 'Blitz: The League is an American football game by Midway as an unlicensed extension of their NFL Blitz series. Released after the NFL signed an exclusive licensing deal with Electronic Arts, it was released in October 2005 for the PlayStation 2 and Xbox. This game is the first in the Blitz series to receive an \"M\" rating by the ESRB due to the graphic violence, explicit language, and drug use depicted. Lawrence Taylor, who provides voice acting for the game, serves as its official spokesman. In 2006, a second version of the game was released on the Xbox 360 in October. In December 2006, a portable version was released on the PlayStation Portable (under the title Blitz: Overtime). These versions included the voicework and likeness of former pro linebacker Bill Romanowski. The game was originally intended to be a Wii launch title, but the Wii-version was delayed and eventually canceled.On 22 January 2007, the game was refused classification by the Office of Film and Literature Classification in Australia, effectively banning the game there. The game was banned as the use of drugs was related to incentives and rewards.', 'https://en.wikipedia.org/wiki/Blitz:_The_League', '//upload.wikimedia.org/wikipedia/en/c/cd/Blitz_The_League_Xbox.png', 'pending', NULL, 4, '2021-05-17 08:22:21', '2021-05-17 08:22:21'),
(7, 'Blood', NULL, NULL, NULL, '1997-05-31', '16', 'Blood is a PC game developed by Monolith Productions and distributed by GT Interactive. Development was underway at Q Studios, an independent developer funded by 3D Realms, in parallel with a number of other well-known titles. Following the success of Duke Nukem 3D, development progress was made public starting in June 1996 with weekly updates on their website. It was originally scheduled for release in early 1997. Q Studios was acquired by Monolith in November 1996. On January 22, 1997, a press release announced that all rights had been sold to Monolith so that 3D Realms could focus efforts on Shadow Warrior, another Build engine game slated for release the same year. Released on May 31, 1997, Blood utilized an enhanced version of the Build engine from Ken Silverman which featured the addition of voxels. The game has an arsenal of weapons ranging from the mundane to the bizarre, numerous enemies and liberal amounts of gore.The Blood franchise was continued with two official expansion packs titled Plasma Pack (developed by Monolith) and Cryptic Passage (developed by Sunstorm Interactive). Later, the sequel titled Blood II: The Chosen was released on October 31, 1998. In terms of copyrights and ownership, Monolith sold the rights for Blood to GT Interactive. GTI was later acquired by Infogrames which has since been renamed to Atari. In recent years it seems that Warner Bros. Entertainment owns the Blood trademark.', 'https://en.wikipedia.org/wiki/Blood_(video_game)', '//upload.wikimedia.org/wikipedia/en/thumb/4/4d/Blood_logo.jpg/256px-Blood_logo.jpg', 'pending', NULL, 1, '2021-05-17 08:22:21', '2021-05-17 08:22:21'),
(8, 'BMX XXX', NULL, NULL, NULL, '2002-11-26', '18', 'BMX XXX is a 2002 video game published by Acclaim Entertainment for the Xbox, Nintendo GameCube and PlayStation 2 and developed by Z-Axis. While primarily a BMX-based action sports title, it earned most of its notoriety for containing nudity, foul language and adult humor. The game allows the player to create female characters that are fully topless and view live-action video clips of real life strippers, also with bare breasts. Consequently, BMX XXX was initially denied classification in Australia. In North America, while the game is available uncensored on the GameCube and Xbox, all naked breasts are covered in the PlayStation 2 version. While the adult content garnered a great deal of publicity for the game, it was almost entirely negative, and it was eventually released to dismal reviews and poor sales.', 'https://en.wikipedia.org/wiki/BMX_XXX', '//upload.wikimedia.org/wikipedia/en/3/35/BMX_XXX_Coverart.png', 'pending', NULL, 2, '2021-05-17 08:22:21', '2021-05-17 08:22:21'),
(9, 'Bully', NULL, NULL, NULL, '2006-10-17', '16', 'Bully, also known as Canis Canem Edit for the PAL region PlayStation 2 version, is an American video game of the world [open world]] video game released by Rockstar Vancouver for the PlayStation 2 on 17 October 2006 in North America, and 25 October 2006 in the United Kingdom. An Xbox version was planned but cancelled for undisclosed reasons.The game was re-released as Bully: Scholarship Edition on 4 March 2008 for the Wii and Xbox 360 and 24 October 2008 on PC (this name is retained in the PAL releases). The PlayStation 2 version of the game is also available in the United States as a special edition that includes a limited edition comic book and a dodgeball of the same style as the ones used in the game, with the word \"Bully\" embossed on it.', 'https://en.wikipedia.org/wiki/Bully_(video_game)', '//upload.wikimedia.org/wikipedia/en/thumb/6/63/Bully_frontcover.jpg/250px-Bully_frontcover.jpg', 'pending', NULL, 26, '2021-05-17 08:22:21', '2021-05-17 08:22:21'),
(10, 'Call of Duty IV: Modern Warfare', 'Infinity Ward Aspyr', 'Keith Arem', 'Activision', '2019-10-25', '16', 'Call of Duty 4: Modern Warfare is a 2007 first-person shooter video game, developed by Infinity Ward and published by Activision for Microsoft Windows, Mac OS X, PlayStation 3, Xbox 360 and Wii. A handheld game was made for the Nintendo DS. The game was released in North America, Australia, and Europe in November 2007 for video game consoles and Microsoft Windows. It was released for the Mac in September 2008, then released for the Wii in November 2009, given the subtitle Reflex Edition. It is the fourth installment in the Call of Duty video game series, excluding expansion packs, and is the first in the Modern Warfare line of the franchise, followed by a direct sequel, Call of Duty: Modern Warfare 2 as well as the first game in the series to have a Mature rating. The game breaks away from the World War II setting of previous games in the series and is instead set in modern times. Developed for over two years, the game uses a proprietary game engine. On September 10, 2009, it was re-released in Japan by Square Enix.The story takes place in the year 2011, where a radical leader has executed the president of an unnamed country in the Middle East, and an ultranationalist movement starts a civil war in Russia. The conflicts are seen from the perspectives of a U.S. Force Reconnaissance Marine and a British SAS commando, and are set in various locales, such as the United Kingdom, the Middle East, Azerbaijan, Russia, and Ukraine. The multiplayer portion of the game features various game modes, and contains a leveling system that allows the player to unlock additional weapons, weapon attachments, and camouflage schemes as they advance.Critically acclaimed, the game received an aggregated score of 94% from both GameRankings and Metacritic, and is considered by many to be the best Call of Duty in the series. The gameplay and story received particular praise, while criticism targeted the failure of the game to substantially innovate the first-person shooter genre. The game won numerous awards from gaming websites, including IGN\'s Best Xbox 360 Game. It was the top-selling game worldwide for 2007, selling around seven million copies by January 2008 and over thirteen million by May 2009.', 'https://en.wikipedia.org/wiki/Call_of_Duty_4:_Modern_Warfare', '//upload.wikimedia.org/wikipedia/en/thumb/5/5f/Call_of_Duty_4_Modern_Warfare.jpg/250px-Call_of_Duty_4_Modern_Warfare.jpg', 'pending', 'Call Of Duty', 26, '2021-05-17 08:22:21', '2021-05-17 08:22:21'),
(11, 'Call of Duty: Black Ops II', 'Treyarch', 'Dave Anthony', 'Activision', '2012-11-12', '12', 'Call of Duty: Black Ops II is a 2012 first-person shooter video game, developed by Treyarch and published by Activision (Square Enix for Japan). It was released on November 13, 2012 for PlayStation 3, Xbox 360, and Microsoft Windows and on November 18, 2012 in North America, November 30, 2012 in Europe and Australia for the Wii U. Square Enix released the game for the Japanese market on November 22, 2012 as a subbed version. A Japanese voice-dubbed version was released separately on December 20, 2012.The Japanese release of the Wii U port is only the dubbed version since the console was not available in Japan in November. Black Ops II is the ninth game in the Call of Duty franchise of video games and a sequel to the 2010 game Call of Duty: Black Ops. The game was launched at 16,000 stores worldwide at midnight on November 13, 2012.Black Ops II is the first game in the Call of Duty franchise to feature future warfare technology and the first to present branching storylines driven by player choice as well as selecting weapons before starting story mode missions. It also offers a 3D display option. A corresponding game, Call of Duty: Black Ops – Declassified, was released simultaneously on the PlayStation Vita. Within 24 hours of going on sale, the game grossed over $500 million. It had remained the largest entertainment launch of all time until September 2013, when Take-Two announced that Grand Theft Auto V had grossed $800 million in its first day of release. It went on to sell 7.5 million copies in the U.S. in November 2012, making it the highest grossing game of the month. As of November 5, 2013, the game has sold 24.2 million copies.The game is the first in the series to feature significant elements of nonlinear gameplay, most notably multiple endings.', 'https://en.wikipedia.org/wiki/Call_of_Duty:_Black_Ops_II', '//upload.wikimedia.org/wikipedia/en/0/05/Call_of_Duty_Black_Ops_II_box_artwork.png', 'pending', 'Call Of Duty', 26, '2021-05-17 08:22:21', '2021-05-17 08:22:21'),
(12, 'Carmageddon', NULL, NULL, NULL, '1997-06-30', '18', 'Carmageddon is a graphically violent vehicular combat 1997 PC video game. It was later ported to other platforms, and spawned a series of follow-up titles. It was inspired by the 1975 cult classic movie Death Race 2000. The game was produced by Stainless Games, published by Interplay and SCi.In early 2012, it was announced that a new port of the game would be released for iOS and certain Android mobile devices. The game was released as both a free demo and paid game in 2013.', 'https://en.wikipedia.org/wiki/Carmageddon', '//upload.wikimedia.org/wikipedia/en/1/16/Carmageddon_box.jpg', 'pending', 'Carmageddon', 26, '2021-05-17 08:22:21', '2021-05-17 08:22:21'),
(13, 'Carmageddon II: Carpocalypse Now', NULL, NULL, NULL, '1998-10-12', '16', 'Carmageddon II: Carpocalypse Now is the sequel to the graphically violent vehicular combat video game Carmageddon, released on November 30, 1998. The game was developed by Stainless Games and published by Sales Curve Interactive. It has been released for both PC and Macintosh.', 'https://en.wikipedia.org/wiki/Carmageddon_II', '//upload.wikimedia.org/wikipedia/en/b/bc/Carmageddon2Box.jpg', 'pending', 'Carmageddon', 26, '2021-05-17 08:22:21', '2021-05-17 08:22:21'),
(14, 'Catherine', NULL, NULL, NULL, '2019-02-14', '18', 'Catherine (キャサリン, Kyasarin) is a puzzle-platformer adventure video game developed by Atlus Persona Team and published by Atlus for the PlayStation 3 and Xbox 360. It is Atlus\' first internally developed game for seventh-generation consoles in high definition, and is described as an \"adult-oriented\" title by the game\'s character designer, Shigenori Soejima. The cinematic portion of the game is handled by Studio 4°C. The game was released in Japan on February 17, 2011, and in North America on July 26, 2011. Deep Silver released the game in Europe on February 10, 2012. It was also released in Australia on February 23, 2012. Catherine was later released as a full downloadable game for the PlayStation Store in February 2012 and came out on the Games on Demand service for the Xbox 360 in April 2012.', 'https://en.wikipedia.org/wiki/Catherine_(video_game)', '//upload.wikimedia.org/wikipedia/en/2/20/Catherine_Cover_Art.png', 'pending', NULL, 10, '2021-05-17 08:22:21', '2021-05-17 08:22:21'),
(15, 'Command & Conquer Generals', NULL, NULL, NULL, '2003-02-10', '12', 'Command & Conquer: Generals is a real-time strategy video game and the seventh installment in the Command & Conquer series.[1] It was released for Microsoft Windows and Mac OS operating systems in 2003 and 2004. While the Windows version of Generals was developed by EA Pacific and published by EA Games, the Mac OS version was developed and published by Aspyr Media. In the game, the player can choose from three different factions: the United States, China and the Global Liberation Army (GLA).', 'https://en.wikipedia.org/wiki/Command_%26_Conquer_Generals', '//upload.wikimedia.org/wikipedia/en/0/0f/Cncgen-win-cover.jpg', 'pending', NULL, 1, '2021-05-17 08:22:21', '2021-05-17 08:22:21'),
(16, 'Commandos I: Behind Enemy Lines', NULL, NULL, NULL, '1998-06-24', '12', 'Commandos: Behind Enemy Lines is a single-player real-time tactics video game developed by Spanish company Pyro Studios and published by Eidos Interactive. The first installment in the Commandos series series, the game was released in 1998 and is set in wartime Europe and Africa where a group of six Allied Commandos performs missions using small unit tactics. Each Commando has a unique set of skills and tools determined by his class which forces the player to establish cooperation among them so that further progress can be made. The objectives vary from sabotages to rescuing allied informants and assassinations.Commandos employs an isometric view with a whole map visible, thus allowing player to think out a strategy and its execution in advance. The same system was later used in the expansion pack Commandos: Beyond the Call of Duty released in 1999 as well as in two installments Commandos 2: Men of Courage and Commandos 3: Destination Berlin released in 2001 and 2003 respectively.', 'https://en.wikipedia.org/wiki/Commandos:_Behind_Enemy_Lines', '//upload.wikimedia.org/wikipedia/en/d/d2/Commandos_Behind_Enemy_Lines.jpg', 'pending', NULL, 6, '2021-05-17 08:22:21', '2021-05-17 08:22:21'),
(17, 'Condemned I: Criminal Origins', NULL, NULL, NULL, '2005-11-15', '18', 'Condemned: Criminal Origins (known in Japan as Condemned: Psycho Crime and in Europe and Australia simply as Condemned) is a first-person brawler action video game with psychological horror elements, developed by Monolith Productions and published by Sega. It was launched worldwide in 2005 on the Xbox 360, with a Microsoft Windows version released later in 2006. As of October 29, 2012, the game was released on Steam.Condemned: Criminal Origins places an emphasis on melee combat (as opposed to gunplay) and puzzle solving, including searching for fingerprints and gathering evidence.Upon release, Condemned was met with moderate to good reviews by many aggregates and critics. Many reviewers cited its questionable storyline and lack of progression as the game\'s biggest fault. As a reprieve, the game\'s solid controls and fresh approach to the horror genre were praised. A sequel, entitled Condemned 2: Bloodshot, was released on March 11, 2008, for the Xbox 360 and PlayStation 3. Other media forms include an internet prequel and a planned film adaptation to expand the Condemned franchise. The developers have cited films such as The Silence of the Lambs and Seven as inspiration for the game.', 'https://en.wikipedia.org/wiki/Condemned:_Criminal_Origins', '//upload.wikimedia.org/wikipedia/en/8/83/Condemned.jpg', 'pending', 'Condemned', 6, '2021-05-17 08:22:21', '2021-05-17 08:22:21'),
(18, 'Condemned II: Bloodshot', NULL, NULL, NULL, '2008-03-11', '18', 'Condemned 2: Bloodshot (titled Condemned 2 in Australia, Europe and Asia) is a brawler action video game with psychological horror elements, developed by Monolith Productions and published by Sega for the PlayStation 3 and Xbox 360 video game consoles. Condemned 2 was released on March 11, 2008, in North America, on the Xbox 360 on March 27, 2008, in Australia and later on April 4, 2008, on PlayStation 3, and April 4, 2008, in Europe for both platforms. It is the sequel to the 2005 game Condemned: Criminal Origins. Due to its violent content, the game was indexed in Germany by the BPjM in April 2008 and subsequently banned in October 2008.Greg Grunberg does not reprise his role as Ethan in Condemned 2. Instead, Ethan is voiced by André Sogliuzzo.', 'https://en.wikipedia.org/wiki/Condemned_2:_Bloodshot', '//upload.wikimedia.org/wikipedia/en/thumb/4/42/Condemned_2_Bloodshot.jpg/256px-Condemned_2_Bloodshot.jpg', 'pending', 'Condemned', 26, '2021-05-17 08:22:21', '2021-05-17 08:22:21'),
(19, 'Counter-Strike', 'VALVE Software', NULL, NULL, '2000-11-08', '18', 'Counter-Strike is a first-person shooter video game developed by Valve Corporation. It was initially developed and released as a Half-Life modification by Minh \"Gooseman\" Le and Jess \"Cliffe\" Cliffe in 1999, before Le and Cliffe were hired and the game\'s intellectual property acquired. Counter-Strike was first released by Valve on the Microsoft Windows platform in 2000. The game later spawned a franchise, and is the first installment in the Counter-Strike series. Several remakes and Ports of Counter-Strike have been released on the Xbox console, as well as OS X and Linux.Set in various locations around the globe, players assume the roles of members of combating teams that include counter-terrorists and terrorists. During each independent match, the two teams of five players are tasked with defeating the other by the means of either achieving the map\'s objectives, or else killing the enemy combatants. Each player may customize their arsenal of weapons and accessories at the beginning of every match, with the currency earned through each map reset, killing other players and achieving objectives.As of August 2011, the Counter-Strike franchise has sold over 25 million units.', 'https://en.wikipedia.org/wiki/Counter-Strike', '//upload.wikimedia.org/wikipedia/en/thumb/6/67/Counter-Strike_Box.jpg/250px-Counter-Strike_Box.jpg', 'pending', 'Counter Strike', 1, '2021-05-17 08:22:21', '2021-05-17 08:22:21'),
(20, 'Dante\'s Inferno', NULL, NULL, NULL, '2010-02-04', '16', 'Dante\'s Inferno is a 2010 action-adventure video game developed by Visceral Games and published by Electronic Arts for the Xbox 360 and PlayStation 3 consoles. The game was also released on the PlayStation Portable and was developed by Artificial Mind and Movement. The story is based on Inferno, the first canticle of Dante Alighieri\'s Divine Comedy, and shares many similarities with the poem. The game includes damned found in appropriate circles of hell and various other monsters from the poem. The game follows the exploits of Dante (reimagined as a Templar knight) as he journeys through the nine circles of Hell to reclaim the soul of his beloved Beatrice from the hands of Lucifer.', 'https://en.wikipedia.org/wiki/Dante\'s_Inferno_(video_game)', '//upload.wikimedia.org/wikipedia/en/c/c6/Dante%27s_Inferno.jpg', 'pending', NULL, 26, '2021-05-17 08:22:21', '2021-05-17 08:22:21'),
(21, 'Dark Sector', NULL, NULL, NULL, '2008-03-25', '18', 'Dark Sector (stylized as darkSectOr) is a third-person shooter video game developed by Digital Extremes for the Xbox 360, PlayStation 3 and Microsoft Windows.The game is set in the fictional Eastern Bloc country of Lasria, and centers on protagonist Hayden Tenno (voiced by Michael Rosenbaum), a morally ambivalent CIA \"clean-up man\". While trying to intercept rogue agent named Robert Mezner, Hayden\'s right arm is infected with the fictional Technocyte virus, which gives him the ability to grow a three-pronged \"Glaive\" at will.Dark Sector received mixed to positive reviews for its visual design, originality of action and weapon-based gameplay. Many critics have compared the game to Resident Evil 4 and Gears of War, for their similar style of play and story.', 'https://en.wikipedia.org/wiki/Dark_Sector', '//upload.wikimedia.org/wikipedia/en/4/43/Darksector.jpg', 'pending', NULL, 26, '2021-05-17 08:22:21', '2021-05-17 08:22:21'),
(22, 'Darksiders', 'Vigil Games', 'Joe Madureira', 'THQ', '2010-01-05', '16', 'Darksiders, originally subtitled Wrath of War, is an action-adventure hack and slash video game developed by Vigil Games and published by THQ. The game takes its inspiration from the apocalypse, with the player taking the role of War, one of the Four Horsemen of the Apocalypse. The game was released for the Xbox 360 and PlayStation 3 on January 5, 2010 in North America, January 7, 2010 in Australia, January 8, 2010 in Europe and March 18, 2010 in Japan. The PC version was released in North America and Australia on September 23, 2010 and in Europe September 24, 2010. A parallel sequel was released on August 14, 2012.', 'https://en.wikipedia.org/wiki/Darksiders', '//upload.wikimedia.org/wikipedia/en/thumb/4/42/Darksiders_Cover.jpg/220px-Darksiders_Cover.jpg', 'pending', 'Darksiders', 26, '2021-05-17 08:22:21', '2021-05-17 08:22:21'),
(23, 'Dead Island', 'Techland', NULL, 'Deep Silver', '2011-09-06', '18', 'Dead Island is an action role-playing survival horror video game developed by Polish developer Techland and published by German studio Deep Silver for Microsoft Windows, PlayStation 3 and Xbox 360. It is centered on the challenge of surviving a zombie-infested open world island with a major emphasis on melee combat. It was originally announced at E3 2006, but was pushed back to 2011. It was released on 6 September 2011 in North America, 9 September 2011 in the PAL regions and 20 October 2011 in Japan. A sequel, Dead Island: Riptide, was released in 2013.', 'https://en.wikipedia.org/wiki/Dead_Island', '//upload.wikimedia.org/wikipedia/en/4/43/Dead_island_PC_packshot.png', 'pending', 'Dead Island', 26, '2021-05-17 08:22:21', '2021-05-17 08:22:21'),
(24, 'Dead Island: Riptide', 'Techland', NULL, 'Deep Silver', '2013-04-23', '18', 'Dead Island: Riptide is an action role-playing survival horror video game developed by Polish studio Techland and published by Koch Media\'s game label Deep Silver, released in April 2013 for Microsoft Windows, PlayStation 3 and Xbox 360. The game is a sequel to 2011\'s Dead Island, with a plot continuation as the five survivors arrive on another island in the Banoi archipelago, which has also been overrun by zombies.', 'https://en.wikipedia.org/wiki/Dead_Island:_Riptide', '//upload.wikimedia.org/wikipedia/en/thumb/f/fa/DeadIslandRiptide.jpg/220px-DeadIslandRiptide.jpg', 'pending', 'Dead Island', 26, '2021-05-17 08:22:21', '2021-05-17 08:22:21'),
(25, 'Dead Rising', 'Capcom', 'Yoshinori Kawano', 'Capcom', '2006-09-08', '18', 'Dead Rising (デッドライジング, Deddo Raijingu) is a survival horror video game set in an open world environment. It is developed and published by Capcom and produced by Keiji Inafune. It was released on August 8, 2006 exclusively for the Xbox 360 video game console.Dead Rising\'s story centers on Frank West, a photojournalist who ends up trapped in a shopping mall in the fictional town of Willamette, Colorado, that is infested with zombies. Frank must defend himself from zombie attacks, rescue survivors, contend with crazed psychopaths, and stay alive while still attempting to uncover the truth behind the incident. The player controls Frank as he explores the mall, using any available object as a weapon. The player can complete several main and optional missions to earn Prestige Points (PP) and gain special abilities. The game is designed as a sandbox game and features several endings, depending on the decisions the player makes along the way.The game was a commercial success and has been introduced into the Xbox 360 \"Platinum Hits\" lineup. Two sequels, Dead Rising 2 and Dead Rising 3 were developed by Capcom Vancouver and were released in September 2010 and November 22, 2013, respectively. Dead Rising 3 is an Xbox One launch title and exclusive. A Wii remake was released in February 2009 titled Dead Rising: Chop Till You Drop, and a mobile phone version is also available.', 'https://en.wikipedia.org/wiki/Dead_Rising', '//upload.wikimedia.org/wikipedia/en/c/c8/Deadrising_boxart.jpg', 'pending', 'Dead Rising', 26, '2021-05-17 08:22:21', '2021-05-17 08:22:21'),
(26, 'Dead Rising II', NULL, NULL, NULL, '2010-09-24', '18', 'Dead Rising 2 (デッドライジング 2, Deddo Raijingu 2) is a survival horror video game set in an open world environment. It is developed by Blue Castle Games and published by Capcom. It was released on September 24, 2010 for the PlayStation 3 and Xbox 360, and on September 28, 2010 for Microsoft Windows. The Dead Rising staff returned to create the game, including Keiji Inafune. The sequel, Dead Rising 3, is exclusive to Xbox One.', 'https://en.wikipedia.org/wiki/Dead_Rising_2', '//upload.wikimedia.org/wikipedia/en/thumb/7/77/Dead_Rising_2_cover.jpg/256px-Dead_Rising_2_cover.jpg', 'pending', 'Dead Rising', 26, '2021-05-17 08:22:21', '2021-05-17 08:22:21'),
(27, 'Doom', 'ID Software', 'Tom Hall', 'ID Software', '1993-12-10', '18', 'Doom (typeset as DOOM in official documents) is a 1993 science fiction horror-themed first-person shooter video game by id Software. It is considered one of the most significant and influential titles in the video game industry, for having ushered in the popularity of the first-person shooter genre. The original game is divided into three nine-level episodes and distributed via shareware and mail order. The Ultimate Doom, an updated release of the original game featuring a fourth episode, was released in 1995 and sold at retail.In Doom, players assume the role of an unnamed space marine, who became popularly known as \"Doomguy\", fighting his way through hordes of invading demons from Hell. With one third of the game, nine levels, distributed as shareware, Doom was played by an estimated 10 million people within two years of its release, popularizing the mode of gameplay and spawning a gaming subculture. In addition to popularizing the FPS genre, it pioneered immersive 3D graphics, networked multiplayer gaming, and support for customized additions and modifications via packaged files in a data archive known as \"WADs\". As a sign of its effect on the industry, first-person shooter games from the genre\'s boom in the 1990s, helped in no small part by the game\'s release, became known simply as \"Doom clones\". Its graphic violence, as well as satanic imagery, made Doom the subject of controversy.The Doom franchise was later continued with the follow-up Doom II: Hell on Earth (1994) and numerous mission packs, including Master Levels for Doom II (1995), and Final Doom (1996). Originally released for PC DOS, the games have later been ported to numerous other platforms. Once the game\'s source code was released in 1997, it spawned even more adaptations, as fans further ported the code to countless devices. The series started to lose mainstream appeal as the technology of the Doom game engine was surpassed in the mid-1990s, although fans have continued making WADs, speedruns, and modifications to the original. The franchise again received popular attention in 2004 with the release of Doom 3, a retelling of the original game using new technology, and an associated 2005 Doom motion picture. Doom 4 was announced as in production in 2008 and was later retitled simply as Doom.', 'https://en.wikipedia.org/wiki/Doom_(video_game)', '//upload.wikimedia.org/wikipedia/en/5/57/Doom_cover_art.jpg', 'pending', 'Doom', 1, '2021-05-17 08:22:21', '2021-05-17 08:22:21'),
(28, 'Dragon Age II', NULL, NULL, NULL, '2011-03-08', '18', 'Dragon Age II is an action role-playing video game developed by BioWare, and published by Electronic Arts. It is the second major game in the Dragon Age franchise. The game was released for Microsoft Windows, Xbox 360, PlayStation 3 and Mac OS X on March 8, 2011 in North America, March 10, 2011 in Australia and March 11, 2011 in Europe.Set in the same mythical world introduced in Dragon Age: Origins, the player assumes the role of Hawke, a human mage, warrior, or rogue who arrives in the city of Kirkwall as a lowly refugee but becomes its legendary champion over a turbulent decade of political and social conflict.The game received relatively positive reviews, with most criticisms directed on the changes made in Dragon Age II, such as the removal of the titular origin story or race choice of the last game, the noticeably smaller world, and a combat system that differed greatly from Origins.', 'https://en.wikipedia.org/wiki/Dragon_Age_II', '//upload.wikimedia.org/wikipedia/en/thumb/6/61/Dragon_Age_2_cover.jpg/250px-Dragon_Age_2_cover.jpg', 'pending', 'Dragon Age', 1, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(29, 'Dragon Age: Origins', NULL, NULL, NULL, '2009-11-03', '18', 'Dragon Age: Origins is a role-playing video game developed by BioWare\'s Edmonton studio and published by Electronic Arts. It is the first game in the Dragon Age franchise. The game was released for Microsoft Windows, PlayStation 3 and Xbox 360 on November 3, 2009, and for Mac OS X on December 21, 2009.Set in the fictional kingdom of Ferelden during a period of civil strife, the player assumes the role of a warrior, mage or rogue coming from an elven, human, or dwarven background who must unite the kingdom to fight an impending invasion by demonic forces. BioWare describes Dragon Age: Origins as a \"dark heroic fantasy set in a unique world,\" and a spiritual successor to their Baldur\'s Gate series of games, which took place in the Forgotten Realms Campaign Setting of the Dungeons & Dragons franchise.Upon its release, Dragon Age: Origins was lauded with overwhelmingly positive reviews and considered a critical success. Review aggregator site Metacritic ranks the PC, PlayStation 3, and Xbox 360 versions of the game with scores of 91, 87, and 86, respectively. The game also received multiple awards from numerous outlets, ranging from IGN\'s \"PC Game of The Year (2009)\" to the Academy of Interactive Arts & Sciences \"Role-Playing/Massively Multiplayer Game of the Year 2009\".An expansion to the game, titled Dragon Age: Origins – Awakening, was released in March 2010, and the official sequel, Dragon Age II, was released in March 2011. BioWare intended for Dragon Age: Origins to serve as the foundation for a much broader intellectual property. Even before its release, plans to expand the universe introduced by the game were underway, including sequels, pen and paper games, books, and comics to expand the scope of the Dragon Age franchise. Examples of all such projects have since been released.', 'https://en.wikipedia.org/wiki/Dragon_Age:_Origins', '//upload.wikimedia.org/wikipedia/en/thumb/8/89/Dragon_Age_Origins_cover.png/256px-Dragon_Age_Origins_cover.png', 'pending', 'Dragon Age', 1, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(30, 'Dreamweb', NULL, NULL, NULL, '1994-01-04', '18', 'Dreamweb is a DOS and Amiga point-and-click cyberpunk top-down adventure game first released for the Amiga in 1992, then later released on CD in 1994, developed by Creative Reality and published by Empire Interactive Entertainment. The game features mature themes and a dark plot filled with violence and brief full frontal nudity, rare for games, especially at the time. Dreamweb was re-released as freeware in October 2012.', 'https://en.wikipedia.org/wiki/Dreamweb', '//upload.wikimedia.org/wikipedia/en/thumb/2/2c/Dreamweb_cover.png/256px-Dreamweb_cover.png', 'pending', NULL, 12, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(31, 'Duke Nukem 3D', NULL, NULL, NULL, '1996-01-26', '18', 'Duke Nukem 3D is a first-person shooter video game developed by 3D Realms and published by GT Interactive Software. The full version was released for the PC (the shareware version was released on January 29, 1996). It is a sequel to the platform games Duke Nukem and Duke Nukem II published by Apogee. An expansion pack, Plutonium Pak, was released in November 1996.Duke Nukem 3D features the adventures of the titular macho Duke Nukem (voiced by Jon St. John), who fights against an alien invasion on Earth. Along with Wolfenstein 3D and Doom, Duke Nukem 3D is considered responsible for popularizing first-person shooters. It was released to major acclaim, reviewers praised the interactivity of the environment, level design, gameplay and unique risqué humor (a mix of pop-culture satire and lampooning of over-the-top Hollywood action heroes).Its lasting appeal and impact on modern video games has led to its being considered one of the most important video games of all time. The game\'s violent nature, erotic elements and portrayal of women have incited controversy. After fifteen years in development hell, a direct sequel was released called Duke Nukem Forever.', 'https://en.wikipedia.org/wiki/Duke_Nukem_3D', '//upload.wikimedia.org/wikipedia/en/6/61/Duke_Nukem_3D_Coverart.png', 'pending', NULL, 24, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(32, 'EA Sports MMA', NULL, NULL, NULL, '2010-09-19', '16', 'EA Sports MMA is a fighting video game which was published by EA Sports and developed by EA Tiburon from 2008 to 2010. It was released for the PlayStation 3 and Xbox 360 on October 19, 2010 in North America and October 22, 2010 everywhere else. Online services have been shut down since April 13, 2012 for the PlayStation 3 and Xbox 360.', 'https://en.wikipedia.org/wiki/EA_Sports_MMA', '//upload.wikimedia.org/wikipedia/en/thumb/1/15/EA_Sports_MMA_%28game_box_art%29.png/256px-EA_Sports_MMA_%28game_box_art%29.png', 'pending', NULL, 14, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(33, 'EverQuest', NULL, NULL, NULL, '1999-03-16', '12', 'EverQuest is a 3D fantasy-themed massively multiplayer online role-playing game (MMORPG) that was released on March 16, 1999. The original design is credited to Brad McQuaid, Steve Clover, and Bill Trost. It was developed by Sony\'s 989 Studios and its early-1999 spin-off Verant Interactive, and published by Sony Online Entertainment (SOE).Since its acquisition of Verant in late 1999, SOE develops, runs, and distributes EverQuest. EverQuest\'s development is ongoing, and the twentieth expansion, Call of the Forsaken, launched October 8, 2013. Additional subscription options of EverQuest, free-to-play Bronze Level, and a one-time fee Silver Level, were made available in March 2012.EverQuest has earned numerous awards, including 1999 GameSpot Game of the Year and a 2007 Technology & Engineering Emmy Award.', 'https://en.wikipedia.org/wiki/EverQuest', '//upload.wikimedia.org/wikipedia/en/d/d2/EverQuest_Coverart.png', 'pending', NULL, 18, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(34, 'Fallout IV: New Vegas', NULL, NULL, NULL, '2015-11-10', '18', 'Fallout: New Vegas is an action role-playing video game in the Fallout video game series. The game was developed by Obsidian Entertainment and published in October 2010 by Bethesda Softworks for Microsoft Windows, PlayStation 3 and Xbox 360. Downloadable content and expanded re-editions followed in 2010-2012.The game is based in a post-apocalyptic, open world environment around the area of Nevada, California, and Arizona. The player takes control of the character known as the Courier, who is hired by a delivery service to take an unknown package across the Mojave Desert to Las Vegas Strip but is intercepted, shot in the head, and left for dead by a mysterious man who steals the package. After being found by a friendly local robot, Victor, and healed by a man named Doc Mitchell, the Courier is thrust back into the desert to seek revenge and recover the stolen package. By doing this, the player becomes caught between various factions competing for control over the desert and its most valuable asset, the Hoover Dam, ultimately coming to shape the future of its inhabitants.Even though it directly succeeds Fallout 3 in order of Fallout game releases, offers a similar action role-playing experience, and shares its engine and some legacy content with Fallout 3, New Vegas is not a direct sequel. It marks the return of some elements found in Fallout 2. The game was a critical and commercial success, shipping more than five million copies altogether.', 'https://en.wikipedia.org/wiki/Fallout:_New_Vegas', '//upload.wikimedia.org/wikipedia/en/3/34/Fallout_New_Vegas.jpg', 'pending', 'Fallout', 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(35, 'Football Manager 2005', NULL, NULL, NULL, '2004-11-05', '16', 'Football Manager 2005 is a game in the Football Manager computer game series. It was developed by Sports Interactive and released on November 5, 2004, published by Sega.On the 12th February 2004, after splitting from publishers Eidos Interactive it was announced that Sports Interactive, producers of the Championship Manager game, had acquired the brand and would henceforth release their games under the \"Football Manager\" name, whilst the Championship Manager series will go on, but no longer be related to Sports Interactive.Commonly known as \"FM 2005\", it competed directly with Championship Manager 5 the severely delayed, and widely slated effort from Eidos-funded Beautiful Game Studios.Football Manager 2005 included an updated user interface, a refined game engine, updated database and competition rules, pre and post-match information, international player news, cup summary news, 2D clips from agents, coach reports on squads, job centre for non-playing positions, mutual contract termination, enhanced player loan options, manager \"mind games\" and various other features.Football Manager 2005 was released in the UK on November 4, 2004 - closely followed by releases in many other countries around the world - and it became the 5th fastest selling PC game of all time (according to Eurogamer). The Macintosh version of the game comes on the same dual format disk as the PC version, so its sales are also included.', 'https://en.wikipedia.org/wiki/Football_Manager_2005', '//upload.wikimedia.org/wikipedia/en/thumb/2/2a/Fm2005cover.jpg/256px-Fm2005cover.jpg', 'pending', NULL, 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(36, 'God of War', 'SCE Santa Monica Studio, Bluepoint Games', 'David Jaffe', 'Sony Computer Entertainment, Capcom ', '2005-03-22', '16', 'God of War is an action-adventure video game series loosely based on Greek mythology. Debuting in 2005, the series has become a flagship title for the PlayStation brand, consisting of seven games across multiple platforms. The main trilogy and its prequel—God of War I, II, III, and Ascension—were developed by Sony\'s Santa Monica Studio and published by Sony Computer Entertainment (SCE) for the PlayStation 2 (PS2) and PlayStation 3 (PS3) video game consoles. Ready at Dawn developed the PlayStation Portable (PSP) installments—Chains of Olympus and Ghost of Sparta—which were also published by Sony Computer Entertainment. Capcom published both PS2 installments and Chains of Olympus in Japan. The mobile phone Java ME installment—Betrayal—was developed by Javaground and Sony Online Entertainment\'s Los Angeles division, and published by Sony Pictures Digital.In addition to the individual games, two collections featuring remastered versions of both PS2 installments—God of War Collection—and both PSP installments—God of War: Origins Collection—have been released on the PS3 by Bluepoint Games and Ready at Dawn, respectively. Another collection—God of War Saga—was released on August 28, 2012, for the PS3 and features God of War I, II, III, Chains of Olympus, and Ghost of Sparta. With the exception of the mobile phone game, God of War: Betrayal, every installment in the series has been released on the PlayStation 3 and each main installment was released in the month of March. As of June 2012, the series has sold more than 21 million copies worldwide.The series has also expanded into a franchise and now includes other media, including a comic book series—God of War (2010–11)—and two novels—God of War (2010) and God of War II (2013). A film adaptation of the original installment has been in development since 2005. Merchandise promoting the series has also been produced, including artwork, clothing, and toys.The central character of the series is Kratos, a Spartan warrior tricked into killing his wife and child by his former master, the God of War Ares. Kratos eventually kills Ares at the behest of the goddess Athena and takes his place as the new God of War, but is still haunted by the nightmares of his past. Kratos is eventually betrayed by Zeus, the King of the Olympian Gods. Revealed to be a demigod and the son of Zeus, Kratos now seeks revenge against the gods for their machinations. What follows is a series of attempts to free himself from the influence of the gods and the Titans and exact revenge. Each game chapter forms part of a saga with vengeance as a central theme.', 'https://en.wikipedia.org/wiki/God_of_War_(series)', '//upload.wikimedia.org/wikipedia/en/thumb/5/56/God_of_War_logo.png/220px-God_of_War_logo.png', 'pending', 'God Of War', 2, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(37, 'Grand Theft Auto', NULL, NULL, NULL, '1997-11-01', '18', 'Grand Theft Auto is a video game series created by David Jones and Mike Dailly then later by brothers Dan and Sam Houser, and game designer Zachary Clarke. It is primarily developed by British video game developer Rockstar North (formerly DMA Design), and published by Rockstar Games. The name of the series is derived from a term referring to motor vehicle theft.Most games in the series are set in fictional locales modeled on American cities, usually either Liberty City, Vice City, or San Andreas, which are stand-ins for New York City, Miami, and Southern California, respectively. The first 2D titles encompassed three fictional cities, while 3D and HD titles tend to emphasize a single city and its outlying areas. Gameplay focuses on an open world where the player can choose missions to progress an overall story, as well as engaging in side activities, all consisting of action-adventure, driving, third-person shooting, occasional role-playing, stealth, and racing elements. The series has gained controversy for its adult nature and violent themes. The series focuses around many different protagonists who attempt to rise through the ranks of the criminal underworld, although their motives for doing so vary in each game. The antagonists are commonly characters who have betrayed the protagonist or his organisation, or characters who have the most impact impeding the protagonist\'s progress.Video game developer DMA Design began the series in 1997, as of 2014 it has eleven stand-alone games and four expansion packs. The third chronological title, Grand Theft Auto III, was widely acclaimed, as it brought the series to a 3D setting and more immersive experience, and is considered a landmark title that has subsequently influenced many other open world action games and led to the label \"Grand Theft Auto clone\" on similar games. Subsequent titles would follow and build upon the concept established in Grand Theft Auto III. Film and music veterans have voiced characters, including Ray Liotta, Burt Reynolds, Dennis Hopper, Samuel L. Jackson, Debbie Harry, Phil Collins, Axl Rose, and Peter Fonda. The series has been critically acclaimed and commercially successful, having sold more than 150 million units, as of September 2013.', 'https://en.wikipedia.org/wiki/Grand_Theft_Auto_(series)', '//upload.wikimedia.org/wikipedia/commons/thumb/e/e1/Grand_Theft_Auto_logo_series.svg/250px-Grand_Theft_Auto_logo_series.svg.png', 'pending', 'GTA', 17, '2021-05-17 08:22:22', '2021-05-17 08:22:22');
INSERT INTO `games` (`id`, `name`, `developer`, `director`, `publisher`, `date`, `pegi`, `summary`, `page_reference`, `image`, `validate`, `saga`, `platform_id`, `created_at`, `updated_at`) VALUES
(38, 'Grand Theft Auto III', NULL, NULL, NULL, '2001-10-22', '18', 'Grand Theft Auto III is an open world action-adventure video game developed by DMA Design and published by Rockstar Games. It was released on 21 October 2001 for the PlayStation 2 console, on 20 May 2002 for Microsoft Windows, and on 31 October 2003 for the Xbox console. It is the fifth title in the Grand Theft Auto series, and the first main entry since Grand Theft Auto 2 in 1999.Grand Theft Auto III is played from a third-person perspective in an open world environment, allowing the player to interact with the game world at their leisure. The game is set within the fictional city of Liberty City, which is heavily based on New York City. The single-player story follows Claude, a bank robber who is left for dead by his girlfriend, and quickly becomes entangled in a world of gangs, crime, and corruption.Upon its release, the game was acclaimed by many reviewers who praised its concept and gameplay, which was coupled with the use of a 3D game engine for the first time in the series. It became the best-selling video game of 2001, and has sold over 17 million copies as of 2011. The game is cited as a landmark in video games for its far-reaching influence within the industry. The success of Grand Theft Auto III was a significant factor in the series\' subsequent popularity, as of 2008, five prequels set before the events of Grand Theft Auto III have been released, particularly Grand Theft Auto: Liberty City Stories which revisits the Liberty City setting just three years prior. Grand Theft Auto III\'s violent and sexual content has also been the source of public concern and controversy.Its successor, Grand Theft Auto: Vice City, was released on 22 October 2002, and also received critical acclaim. In December 2011, in celebration of the game\'s tenth anniversary, a mobile version of Grand Theft Auto III was released for iOS and Android. The game has also been ported to various other platforms and services, such as Mac OS X and the PlayStation Network.', 'https://en.wikipedia.org/wiki/Grand_Theft_Auto_III', '//upload.wikimedia.org/wikipedia/en/thumb/b/be/GTA3boxcover.jpg/250px-GTA3boxcover.jpg', 'pending', 'GTA', 2, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(39, 'Grand Theft Auto V', NULL, NULL, NULL, '2013-09-17', '18', 'Grand Theft Auto V is an open world, action-adventure video game developed by Rockstar North and published by Rockstar Games. It was released on 17 September 2013 for the PlayStation 3 and Xbox 360. The game is the first main entry in the Grand Theft Auto series since Grand Theft Auto IV was released in 2008. Set within the fictional state of San Andreas, based on Southern California, the single-player story follows three criminals and their efforts to perform a number of heists while under pressure from a government agency. The open world design lets players freely roam San Andreas, which includes open countryside and the fictional city of Los Santos, based on Los Angeles.The game is played from a third-person perspective and its world is navigated on-foot or by vehicle. Players control the three lead protagonists throughout the single-player mode, switching between them both during and outside of missions. The story is framed by the heist sequences, and many of the missions have shooting and driving gameplay. The player character\'s criminal activities may incite a response from law enforcement agencies, measured by a \"wanted\" system that governs the aggression of their response. Grand Theft Auto Online, the online multiplayer mode, lets up to 16 players explore the open world and engage in cooperative or competitive game matches.Development began in 2009, soon after the release of Grand Theft Auto IV. The development team envisioned Grand Theft Auto V as a spiritual successor to many of their previous projects, such as Red Dead Redemption and Max Payne 3. The game\'s use of three lead protagonists is a break from series tradition—a design choice from the developers to innovate on the core structure of its predecessors. As part of their research for the open world, the developers conducted field research around California throughout development and captured footage for the design team. Development duties were shared between many of Rockstar\'s studios worldwide.As one of the last titles to be released for the seventh generation of video game consoles, Grand Theft Auto V was widely anticipated preceding its release. At release, it was acclaimed by many reviewers, with praise particularly directed at the multiple protagonist design and open-ended gameplay. Critics were polarised by a scene depicting torture and the game\'s treatment of women. Some labelled the game inherently violent and misogynistic. Grand Theft Auto V broke industry sales records and became the fastest-selling entertainment product in history, earning US$800 million in its first day and US$1 billion in its first three days. It won year-end accolades, including Game of the Year awards from several gaming publications.', 'https://en.wikipedia.org/wiki/Grand_Theft_Auto_V', '//upload.wikimedia.org/wikipedia/en/a/a5/Grand_Theft_Auto_V.png', 'pending', 'GTA', 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(40, 'Grand Theft Auto: Episodes from Liberty City', NULL, NULL, NULL, '2009-10-29', '18', 'Grand Theft Auto: Episodes from Liberty City is a standalone compilation of the episodes for the 2008 video game Grand Theft Auto IV. Created by Rockstar North in the United Kingdom, it contains both The Lost and Damned and The Ballad of Gay Tony on one disc. It was released alongside the DLC release of The Ballad of Gay Tony on 29 October, 2009 for the Xbox 360 and released on 13 April, 2010 for Microsoft Windows and PlayStation 3. Unlike the downloadable versions of the episodes, the compilation does not require a copy of Grand Theft Auto IV to play, nor is an Xbox Live or PlayStation Network account necessary (except for multiplayer). The content is also played straight from the disc, and does not need to be installed on a hard drive to play, like various other disc-based expansions for other Xbox 360 games that have been released in the past. Available exclusively on the Episodes from Liberty City disc are three new in-game radio stations – Vice City FM, RamJam FM and Self-Actualization FM.', 'https://en.wikipedia.org/wiki/Grand_Theft_Auto:_Episodes_from_Liberty_City', '//upload.wikimedia.org/wikipedia/en/thumb/c/cc/Grand_Theft_Auto_IV_Episodes_From_Liberty_City.jpg/256px-Grand_Theft_Auto_IV_Episodes_From_Liberty_City.jpg', 'pending', 'GTA', 3, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(41, 'Grand Theft Auto: Vice City', NULL, NULL, NULL, '2002-10-27', '18', 'Grand Theft Auto: Vice City is an open world action-adventure video game developed by Rockstar North and published by Rockstar Games. It was released on 27 October 2002 for the PlayStation 2 console, on 12 May 2003 for Microsoft Windows, and on 31 October 2003 for the Xbox console. It is the sixth title in the Grand Theft Auto series, and the first main entry since Grand Theft Auto III in 2001.Grand Theft Auto: Vice City is played from a third-person perspective in an open world environment, allowing the player to interact with the game world at their leisure. The game is set in 1986 within the fictional city of Vice City, which is heavily based on Miami and draws inspiration from 1980\'s American culture. The single-player story follows Tommy Vercetti, a Mafia hitman who is released from prison. After his involvement in a drug deal gone wrong, Tommy seeks out those responsible while building a criminal empire and seizing power from other criminal organisations in the city.Upon its release, the game was acclaimed by many reviewers who praised the music and gameplay, which uses a tweaked version of the game engine used in its predecessor. It became the best-selling video game of 2002, and has sold over 20 million copies as of 2011, until July 2006, it was the best-selling PlayStation 2 game of all time. The game is cited as a landmark in video games for its far-reaching influence within the industry. The success of Vice City led to the creation of a prequel, Grand Theft Auto: Vice City Stories (2006), which revisits the Vice City setting just two years prior. Vice City\'s violent and sexual content has also been the source of public concern and controversy.Its successor, Grand Theft Auto: San Andreas, was released on 26 October 2004, and also received critical acclaim. In December 2012, in celebration of the game\'s tenth anniversary, a mobile version of Vice City was released for iOS and Android. The game has also been ported to various other platforms and services, such as Mac OS X and the PlayStation Network.', 'https://en.wikipedia.org/wiki/Grand_Theft_Auto:_Vice_City', '//upload.wikimedia.org/wikipedia/en/thumb/c/ce/Vice-city-cover.jpg/250px-Vice-city-cover.jpg', 'pending', 'GTA', 7, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(42, 'Half-Life', 'Valve Corporation, Gearbox Software', NULL, 'Sierra Entertainment', '1998-11-19', '18', 'Half-Life (stylized as HλLF-LIFE) is a science fiction video game developed by Valve Corporation, the company\'s debut product and the first in the Half-Life series. First released in 1998 by Sierra Studios for Windows PCs, the game was also released for the PlayStation 2, Mac OS X and Linux ports became available in January 2013. In Half-Life, players assume the role of Dr. Gordon Freeman, a theoretical physicist who must fight his way out of a secret underground research facility whose research and experiments into teleportation technology have gone disastrously wrong.Valve, set up by former Microsoft employees, had difficulty finding a publisher for the game, with many believing that it was too ambitious a project. Sierra On-Line eventually signed the game after expressing interest in making a 3D action game. The game had its first major public appearance at the 1997 Electronic Entertainment Expo. Designed for Windows, the game\'s engine, GoldSrc, was a heavily modified version of id Software\'s Quake game engine with code portions from the id Tech 2 engine.On its release, the game received universal acclaim, with critics praising the seamlessly flowing narrative, presentation and realistic gameplay, and it won over fifty PC Game of the Year awards. Its gameplay influenced the design of first-person shooters for years after its release, and it is widely considered to be one of the greatest computer games of all time. IGN ranked Half-Life as the number one greatest first-person shooter of all time, stating that \"When you look at the history of first-person shooters, it all breaks down pretty cleanly into pre-Half-Life and post-Half-Life eras.\" Half-Life had sold eight million copies by 16 November 2004, and 9.3 million copies by December 2008. By 14 July 2007, the Half-Life franchise as a whole had sold over 20 million units. Half-Life was followed by the 2004 sequel Half-Life 2, which also received universal critical acclaim. Half-Life has had a notable cultural effect with its community mods and sequels spawning a large fanbase and cult following.', 'https://en.wikipedia.org/wiki/Half-Life_(video_game)', '//upload.wikimedia.org/wikipedia/en/thumb/f/fa/Half-Life_Cover_Art.jpg/256px-Half-Life_Cover_Art.jpg', 'pending', NULL, 1, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(43, 'Harvester', NULL, NULL, NULL, '1996-12-01', '18', 'Harvester is a point-and-click adventure computer game written and directed by Gilbert P. Austin. The game was designed by DigiFX Interactive and published by Merit Studios in 1996.', 'https://en.wikipedia.org/wiki/Harvester_(video_game)', '//upload.wikimedia.org/wikipedia/en/thumb/4/4a/Harvester_cover.jpg/256px-Harvester_cover.jpg', 'pending', NULL, 15, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(44, 'Hearts of Iron', NULL, NULL, NULL, '2002-11-24', '16', 'Hearts of Iron is a grand strategy computer game developed by Paradox Development Studio and published by Strategy First, set in the years 1936-1948. In the game you can control any one nation as World War II unfolds. It was released for Windows-compatible PCs in 2002. A Macintosh version was also released by Virtual Programming. The lead game programmer was Johan Andersson. A sequel, Hearts of Iron II, was created and released in 2005 with several changes in the tech tree and gameplay. Hearts of Iron III was released on August 7, 2009. Hearts of Iron - The Card Game was released as a free-to-play, browser-based collectible card game on 3 October 2011. East vs. West – A Hearts of Iron Game was planned for a release in 2014, but it was cancelled.', 'https://en.wikipedia.org/wiki/Hearts_of_Iron', '//upload.wikimedia.org/wikipedia/en/8/86/HeartsOfIronBox.jpg', 'pending', NULL, 15, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(45, 'Heavy Rain', NULL, NULL, NULL, '2010-02-23', '18', 'Heavy Rain is an interactive drama action-adventure video game developed by Quantic Dream and published by Sony Computer Entertainment exclusively for the PlayStation 3 in 2010.The game is a film noir thriller, featuring four diverse protagonists involved with the mystery of the Origami Killer, a serial killer who uses extended periods of rainfall to drown his victims. The player interacts with the game by performing actions highlighted on screen related to motions on the controller, and in some cases, performing a series of quick time events during fast-paced action sequences. The player\'s decisions and actions during the game will affect the narrative. The main characters can be killed, and certain actions may lead to different scenes and endings.Heavy Rain was a critical and commercial success, winning multiple Game of the Year awards and selling over three million copies. A live-action film adaptation of the game is currently in development.', 'https://en.wikipedia.org/wiki/Heavy_Rain', '//upload.wikimedia.org/wikipedia/en/thumb/c/c1/Heavy_Rain_Cover_Art.jpg/220px-Heavy_Rain_Cover_Art.jpg', 'pending', NULL, 15, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(46, 'Homefront', NULL, NULL, NULL, '2011-03-15', '16', 'Homefront is a first-person shooter video game developed by Kaos Studios and published by THQ, now owned by Crytek. Players are members of a resistance movement fighting against a near-future foreign military occupation of the United States. It was released for Microsoft Windows, PlayStation 3 and Xbox 360 on March 15, 2011 in North America, March 17, 2011 in Australia, March 18, 2011 in Europe, and April 14, 2011 in Japan.', 'https://en.wikipedia.org/wiki/Homefront_(video_game)', '//upload.wikimedia.org/wikipedia/en/thumb/9/96/Homefront.jpg/220px-Homefront.jpg', 'pending', NULL, 5, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(47, 'Hotline Miami II: Wrong Number', NULL, NULL, NULL, '2015-03-10', '18', 'Hotline Miami 2: Wrong Number is an upcoming 2D top-down action video game, and the sequel to Dennaton Games\' Hotline Miami. Wrong Number takes place before and after the events of Hotline Miami, and focuses on the aftermath of the protagonist Jacket after killing off the entire Russian mafia on the behalf of mysterious messages on his phone. Dennis Wedin (one-half of Dennaton Games) said that the series will end with Hotline Miami 2. The developers have announced via Twitter a release date in the third quarter of 2014.', 'https://en.wikipedia.org/wiki/Hotline_Miami_2:_Wrong_Number', '//upload.wikimedia.org/wikipedia/en/a/af/Hotline_Miami_2_cover.png', 'pending', NULL, 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(48, 'I.G.I.-2: Covert Strike', NULL, NULL, NULL, '2003-02-21', '16', 'I.G.I.-2: Covert Strike is a computer game developed by Innerloop Studios and released by Codemasters in 2003. The game is a stealth-based first person shooter. It is the sequel to Innerloop\'s Project I.G.I.: I\'m Going In. The original, published by Eidos Interactive, offered only single-player play. Chris Ryan, a former Special Air Service operative best known for being the lone successful escapee of Bravo Two Zero, served as a consultant to the game.The game\'s plot features a rogue Chinese General, \"Wu Xing\" as the primary antagonist. Xing orchestrates various events (such as armed robbery of advanced prototype technology from the Russian mafia) in order to get electromagnetic pulse (EMP) weaponry on a space rocket that he has launch control over.The game was banned in China, because it \"intentionally blackened China and the Chinese army\'s image\". The box art is similar to the poster for GoldenEye.', 'https://en.wikipedia.org/wiki/I.G.I.-2:_Covert_Strike', '//upload.wikimedia.org/wikipedia/en/thumb/5/5a/Igi2box.jpg/250px-Igi2box.jpg', 'pending', NULL, 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(49, 'Injustice: Gods Among Us', NULL, NULL, NULL, '2013-04-03', '16', 'Injustice: Gods Among Us is a fighting game based upon the fictional universe of DC Comics. The game was developed by NetherRealm Studios and published by Warner Bros. Interactive Entertainment for the PlayStation 3, Wii U, and Xbox 360. It was released in April 2013 in North America, Europe, and Australia, and June 2013 in Japan. An iOS variation of the game was released on April 3, 2013. The game was also ported to Android in November 21, 2013.On October 7, 2013 it was announced that the game will be re-released in an Ultimate Edition on November 12, 2013 in North America and November 29 in Europe and other territories for the PlayStation 3 and Xbox 360, as well as Microsoft Windows, PlayStation 4 and PlayStation Vita. The re-release includes all the previously released DLC.', 'https://en.wikipedia.org/wiki/Injustice:_Gods_Among_Us', '//upload.wikimedia.org/wikipedia/en/f/f8/Injustice_Gods_Among_Us_Cover_Art.jpg', 'pending', NULL, 5, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(50, 'KZ Manager', NULL, NULL, NULL, '1990-01-01', '16', 'KZ Manager is a name shared by many similar resource management computer games putting the player in the role of a Nazi concentration camp \"manager\", where the \"resources\" to be managed include, depending on the version of the game, prisoners (either Jews, Turks or Gypsies), poison gas supplies, \"normal\" money and various equipment, as well as \"public opinion\" on the \"productivity\" of the camp.', 'https://en.wikipedia.org/wiki/KZ_Manager', NULL, 'pending', NULL, 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(51, 'L.A. Noire', NULL, NULL, NULL, '2011-05-17', '18', 'L.A. Noire (pronounced [ˌɛl ˌɛɪ ˈnwaʁ]) is a 2011 action-adventure neo-noir crime video game developed by Team Bondi and published by Rockstar Games. It was released for PlayStation 3, Xbox 360 and Microsoft Windows. L.A. Noire is set in Los Angeles in 1947 and challenges the player, controlling a Los Angeles Police Department (LAPD) officer, to solve a range of cases across five departments. Players must investigate crime scenes for clues, follow up leads, and interrogate suspects, and the players\' success at these activities will impact how much of the cases\' stories are revealed.The game draws heavily from both the plot and aesthetic elements of film noir, stylistic films made popular in the 1940s and 1950s that share similar visual styles and themes, including crime and moral ambiguity. The game uses a distinctive colour palette, but in homage to film noir it includes the option to play the game in black and white. Various plot elements reference the major themes of gum-shoe detective and mobster stories such as Key Largo, Chinatown, The Untouchables, The Black Dahlia, and L.A. Confidential.L.A. Noire is notable for using Depth Analysis\'s newly developed technology MotionScan, whereby the actors portraying the game\'s characters were recorded by 32 surrounding cameras to capture facial expressions from every angle. The technology is central to the game\'s interrogation mechanic, as players must use the suspects\' reactions to questioning to judge whether or not they are lying. L.A. Noire is the first video game to be shown at the Tribeca Film Festival. Upon release, the game received wide acclaim for its advances in storytelling and facial animation technology. As of February 2012, both PC and console versions have sold nearly 5 million copies combined.', 'https://en.wikipedia.org/wiki/L.A._Noire', '//upload.wikimedia.org/wikipedia/en/thumb/3/3c/LA-Noire-Box-Art.jpg/220px-LA-Noire-Box-Art.jpg', 'pending', NULL, 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(52, 'Left 4 Dead II', 'Valve Software', 'Erik Johnson', 'Valve Software', '2009-11-17', '18', 'Left 4 Dead 2 is a cooperative first-person shooter video game and the sequel to Valve Corporation\'s award-winning Left 4 Dead. The game launched on November 17, 2009, for Microsoft Windows and Xbox 360 in the United States and November 20 in Europe, on September 5, 2010, the game was made available to the Steam client for Mac OS X, and on July 2, 2013 it was made available through Steam for Linux. It was given out as a free download to all Steam users for Christmas on December 25, 2013.Left 4 Dead 2 builds upon cooperatively focused gameplay and Valve\'s proprietary Source engine, the same game engine used in the original Left 4 Dead. Set during the aftermath of an apocalyptic pandemic, Left 4 Dead 2 focuses on four new Survivors, fighting against hordes of the Infected, who develop severe psychosis and exhibit zombie-like tendencies. The Survivors must fight their way through five campaigns, interspersed with safe houses that act as checkpoints, with the goal of escape at each campaign\'s finale. The gameplay is procedurally altered by the \"AI Director 2.0\", which monitors the players\' performance and adjusts the scenario to provide a dynamic challenge. Other new features include new types of Special Infected and an arsenal of melee weapons.The game made its world premiere at E3 2009 with a trailer during the Microsoft press event. Prior to release, it received a combination of positive and negative critical and community reactions. It attracted an unusually high volume of pre-release controversy about the game\'s graphic content. In response, alterations were made to the cover art and both Australia (due to having no R18+ rating at the time) and Germany refused to rate the unmodified edition. After release however, the game was met with positive reviews.', 'https://en.wikipedia.org/wiki/Left_4_Dead_2', '//upload.wikimedia.org/wikipedia/en/thumb/b/ba/Left4Dead2.jpg/250px-Left4Dead2.jpg', 'pending', NULL, 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(53, 'Leisure Suit Larry:Magna Cum Laude', NULL, NULL, NULL, '2004-01-01', '18', 'Leisure Suit Larry: Magna Cum Laude is a 2004 video game, part of the Leisure Suit Larry series. The game introduces a new main character, \'Larry Lovage\', as Larry Laffer\'s nephew. This is the 7th game in the series.', 'https://en.wikipedia.org/wiki/Leisure_Suit_Larry:_Magna_Cum_Laude', '//upload.wikimedia.org/wikipedia/en/thumb/4/4f/LarryMCLcover.jpg/256px-LarryMCLcover.jpg', 'pending', NULL, 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(54, 'Mafia II', NULL, NULL, NULL, '2010-08-23', '18', 'Mafia II is an action-adventure video game, the sequel to Mafia: The City of Lost Heaven. It was developed by 2K Czech, previously known as Illusion Softworks, and published by 2K Games. Originally announced in August 2007 at the Leipzig Games Convention, it was released on Microsoft Windows, PlayStation 3 and Xbox 360 in August 2010. The Mac OS X edition of the game was published by Feral Interactive in December 2011. A version of the game for mobile platforms was developed by Twistbox Entertainment and released in 2010 by Connect2Media. Although its predecessor, Mafia: The City of Lost Heaven, received higher praise, Mafia II only received slightly positive reactions.', 'https://en.wikipedia.org/wiki/Mafia_II', '//upload.wikimedia.org/wikipedia/en/thumb/0/0d/Mafia_II_Boxart.jpg/250px-Mafia_II_Boxart.jpg', 'pending', NULL, 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(55, 'Manhunt (series)', NULL, NULL, NULL, '2003-11-19', '18', 'Manhunt is a stealth-based psychological horror video game developed by Rockstar North and published by Rockstar Games. It was released in North America on November 18, 2003, for the PlayStation 2 and on April 20, 2004, for Xbox and PC, and in Europe on November 21 for the PS2 and on April 23 for the Xbox and PC. The game was released for PlayStation 3 on May 14, 2013 via the PlayStation Network. The game\'s story follows a supposedly executed death row inmate who is forced to participate in a series of snuff films for former film producer and now underground snuff director, Lionel Starkweather (voiced by Brian Cox).Although it received positive reviews by critics, Manhunt is well known for controversy, due to the level of graphic violence in the game. It was banned in several countries, and implicated in a murder by the UK media, although this implication was later rejected by the police and courts. A sequel Manhunt 2 was released in October 2007. As of March 26, 2008, the Manhunt series has sold 1.7 million copies worldwide. At the 7th Annual Interactive Achievement Awards, the game was nominated for \"Console Action Adventure Game of the Year\". In 2010, it was included in 1001 Video Games You Must Play Before You Die, and listed at #85 in IGN\'s \"Top 100 PlayStation 2 Games\".', 'https://en.wikipedia.org/wiki/Manhunt_(video_game)', '//upload.wikimedia.org/wikipedia/en/thumb/2/21/Manhuntbox.jpg/256px-Manhuntbox.jpg', 'pending', 'Manhunt', 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(56, 'Manhunt II', NULL, NULL, NULL, '2007-10-29', '18', 'Manhunt 2 is a stealth-based psychological horror video game published by Rockstar Games. It was developed by Rockstar London for Microsoft Windows and PlayStation 2, Rockstar Leeds for the PlayStation Portable, and Rockstar Toronto for the Wii. It is the sequel to 2003\'s Manhunt and was released in North America on October 29, 2007 and in the UK on October 31, 2008. The game follows Daniel Lamb, a mental escapee suffering from amnesia, as he tries to uncover his identity. He is accompanied by Leo Kasper, a sociopathic assassin, who guides Daniel in his journey.Originally scheduled for North American and European release in July, the game was suspended by Rockstar\'s parent company Take-Two Interactive when it was refused classification in the United Kingdom and Ireland, and given an Adults Only (AO) rating in the United States. As neither Sony nor Nintendo allow AO titles on their systems, this effectively meant the game would have been banned in the US. In response to these ratings problems, Rockstar edited the game, blurring the screen during the game\'s executions and removing the scoring system, where players were awarded for particularly brutal killings. This edited version was given an M rating in the US by the ESRB and was released on October 29. However, the BBFC still refused to classify the edited version for UK release. Rockstar appealed their decision, and ultimately, the Video Appeals Committee voted that the game could be released with an 18 cert.Manhunt 2 garnered controversy before and after its release, getting the attention of Leicester East MP Keith Vaz, anti-videogame activist Jack Thompson, and various US Senators. Reception of the game were largely mixed. Reviewers praised the improved gameplay and twisted storyline, while criticizing its outdated graphics and engine. It was ranked first in Gameranx\' list of the \"Top 25 Goriest Games of all Time\", and was nominated for GameSpy\'s 2007 Game of the Year Award for the PS2.', 'https://en.wikipedia.org/wiki/Manhunt_2', '//upload.wikimedia.org/wikipedia/en/thumb/0/07/Manhunt_2_Wii_Box_Art_FINAL.jpg/256px-Manhunt_2_Wii_Box_Art_FINAL.jpg', 'pending', 'Manhunt', 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(57, 'Marc Ecko\'s Getting Up:Contents Under Pressure', NULL, NULL, NULL, '2006-02-14', '12', 'Marc Eckō\'s Getting Up: Contents Under Pressure is a video game released in February 2006 for PlayStation 2, Xbox, and Windows. It was developed by The Collective, Inc. and published by Atari under license by Marc Ecko. There were two editions of the game, one being a limited edition and the other being the normal release. The game was later re-published by Devolver Digital in December 2013 on Steam.[3]', 'https://en.wikipedia.org/wiki/Marc_Eck%C5%8D%27s_Getting_Up:_Contents_Under_Pressure', '//upload.wikimedia.org/wikipedia/en/e/e4/Getting_Up.jpg', 'pending', NULL, 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(58, 'Mass Effect', '0', NULL, 'Microsoft Game Studios, Electronic Arts ', '2007-11-16', '18', 'Mass Effect is a series of science fiction action role-playing third person shooter video games developed by the Canadian company BioWare and released for the Xbox 360, PlayStation 3 and Microsoft Windows, with the third installment also released on the Wii U. The trilogy centers on a player-created character named Commander Shepard, whose mission is to save the galaxy from a race of mechanical beings known as the Reapers and their followers, including Saren Arterius. The first game sees Shepard facing Sovereign, a Reaper left as a vanguard, who plans to allow the Reaper fleet hibernating in extra-galactic dark space to invade the Milky Way, and destroy all sentient organic life, continuing a mysterious cycle of destruction. The second game takes place two years later, and sees Shepard battling the Collectors, an alien race abducting entire human colonies in a plan to help the Reapers return to the Milky Way. The final game of Shepard\'s trilogy centers on the final battle against the Reapers.All three games have received critical acclaim for their storyline, characters, romances, voice acting, choices and the depth of the galaxy. Video game website GamesRadar called Mass Effect the best new franchise of the generation, saying that the galaxy was so well-constructed that it felt like a decades-old franchise and that it represented \"a high-water mark for video games as a story-telling medium.\"', 'https://en.wikipedia.org/wiki/Mass_Effect', '//upload.wikimedia.org/wikipedia/en/5/5e/Masseffectlogo.png', 'pending', 'Mass Effect', 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(59, 'Mass Effect II', '0', NULL, 'Microsoft Game Studios, Electronic Arts ', '2010-01-26', '16', 'Mass Effect 2 is an action role-playing video game developed by BioWare and published by Electronic Arts. It was released for Microsoft Windows and Xbox 360 on January 26, 2010, and for PlayStation 3 on January 18, 2011. Mass Effect 2 is the second installment of the Mass Effect series and a sequel to the original Mass Effect. The game takes place within the Milky Way galaxy during the 22nd century, where humanity is threatened by an insectoid species known as the Collectors. The player assumes the role of Commander Shepard, an elite human soldier who must construct and gain the loyalty of a diverse team in order to defeat the enemy in a suicide mission. With the use of a completed saved game of its predecessor, the player can impact the story of the game in numerous ways.For the game, BioWare changed several gameplay elements and put further emphasis on third-person shooter aspects, including limited ammunition and regenerable health. In contrast to the exclusive focus on the main story of the original Mass Effect, the developers opted to create a plot where optional missions had as much intensity as the main mission. Mass Effect composer Jack Wall returned to compose Mass Effect 2\'s music, aiming for a darker and more mature sound to match the mood of the game. Mass Effect 2 also supports a variety of downloadable content packs that were released from January 2010 to May 2011. The downloadable content ranges from single in-game character outfits to entirely new plot-related missions. Notable packs include Overlord, Lair of the Shadow Broker, and Arrival.Mass Effect 2 was a commercial success and received considerable acclaim from video game publications. At the review aggregate websites GameRankings and Metacritic, the Xbox 360 version holds an average review score of 95.69% and 96 out of 100 respectively. Critics praised multiple aspects of the game, including its interactive storytelling, characterization, and combat. In contrast, some reviewers expressed concerns about the game\'s simplified gameplay compared to the previous game in the series. The game received numerous year-end awards, including Game of the Year at the 14th Annual Interactive Achievement Awards, and Best Game at the 2011 British Academy of Film and Television Arts Awards. A sequel, Mass Effect 3, was released in 2012.', 'https://en.wikipedia.org/wiki/Mass_Effect_2', '//upload.wikimedia.org/wikipedia/en/thumb/0/05/MassEffect2_cover.PNG/250px-MassEffect2_cover.PNG', 'pending', 'Mass Effect', 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(60, 'Mass Effect III', '0', NULL, 'Microsoft Game Studios, Electronic Arts ', '2012-03-06', '16', 'Mass Effect 3 is an action role-playing video game developed by BioWare and published by Electronic Arts for Microsoft Windows, Xbox 360, PlayStation 3, and Wii U. Officially announced on December 11, 2010, the game was released March 6, 2012 and marks the final chapter in the Mass Effect trilogy of video games, completing the story of Commander Shepard. A Wii U version was announced during Nintendo\'s conference at E3 2012. The Wii U port was developed by Australian developer Straight Right, and was released as a Wii U launch game under the title Mass Effect 3: Special Edition.The combat system in Mass Effect 3 has been changed and refined. In particular, the cover system has been improved, there are more options for moving around the battlefield and scoring instant melee kills, more conventional grenades are available and an improved artificial intelligence is introduced. A four player multiplayer co-op mode is also available in game. Gameplay in Mass Effect 3 is influenced by decisions made in Mass Effect and Mass Effect 2, for players who have completed those games. It was nominated for five awards at the 2012 Spike Video Game Awards and it won Best RPG of 2012.Like its predecessors, Mass Effect 3 was released to commercial success and critical acclaim. However, the game\'s endings were criticized by many players, prompting the release of an extended cut DLC (downloadable content) which elaborated on the consequences of the ending chosen and the choices made by the player throughout the series.', 'https://en.wikipedia.org/wiki/Mass_Effect_3', '//upload.wikimedia.org/wikipedia/en/b/b0/Mass_Effect_3_Game_Cover.jpg', 'pending', 'Mass Effect', 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(61, 'Max Payne 3', NULL, NULL, NULL, '2012-05-15', '18', 'Max Payne 3 is a third-person shooter video game developed by Rockstar Vancouver and published by Rockstar Games. It was first released on 15 May 2012 for the PlayStation 3 and Xbox 360 consoles, followed by a release on 31 May 2012 on Microsoft Windows and on 20 June 2013 on OS X. It is the third title in the Max Payne series, and the first main entry since Max Payne 2: The Fall of Max Payne in 2003, which was developed by Remedy Entertainment.In Max Payne 3, the player controls Max Payne, a former NYPD detective who had became a vigilante after his wife and daughter were brutally murdered. Nine years after the events of the second game, Max meets Raul Passos, who gets him the job as a private security contractor in Brazil. He quickly finds himself constantly encountering difficult situations, which leads him on a search for the culprits of deaths and betrayals. An online multiplayer mode is included with the game, allowing up to 16 players to engage in both co-operative and competitive gameplay in recreations of multiple single-player settings.Video game critics gave Max Payne 3 highly acclaimed reviews. Praise focused on its story and action, while criticism was targeted at the sharp departure in tone and style that defined the original games. The game also received high sales, shipping approximately 3 million units in the first week of release. Max Payne 3 also won, and was nominated for, several industry awards, including Best Animation at Machinima\'s Inside Gaming Awards, and various nominations at the Spike Video Game Awards.', 'https://en.wikipedia.org/wiki/Max_Payne_3', '//upload.wikimedia.org/wikipedia/en/thumb/2/21/Max_Payne_3_Cover.jpg/220px-Max_Payne_3_Cover.jpg', 'pending', NULL, 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(62, 'Medal of Honor: Warfighter', NULL, NULL, NULL, '2012-10-23', '16', 'Medal of Honor: Warfighter is a first-person shooter video game developed by Danger Close Games and published by Electronic Arts. It is a direct sequel to 2010\'s series reboot Medal of Honor and the fourteenth installment in the Medal of Honor series. The title was officially announced on February 23, 2012, and was released in North America on October 23, 2012, in Australia on October 25, 2012, in Europe on October 26, 2012 and in Japan on November 15, 2012 on Microsoft Windows, PlayStation 3, and Xbox 360. The games\' single-player campaign picks up where Medal of Honor left off, as it reveals Tier 1 operator Preacher returning home to find his family torn apart from years of deployment. The campaign also reveals that the deadly explosive, PETN, had begun to appear across the globe.While hopes were initially held high by EA, the game was a critical and commercial failure, unlike its mildly successful predecessor. According to aggregating review websites GameRankings and Metacritic, the game received a 55.93% and 53/100 for the Xbox 360 version, 55.40% and 55/100 for the PlayStation 3 version and 51.33% and 55/100 for the PC version.', 'https://en.wikipedia.org/wiki/Medal_of_Honor:_Warfighter', '//upload.wikimedia.org/wikipedia/en/thumb/e/e2/Warfighter.jpg/256px-Warfighter.jpg', 'pending', NULL, 5, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(63, 'Mercenaries I: Playground of Destruction', NULL, NULL, NULL, '2005-01-10', '16', 'Mercenaries: Playground of Destruction is an action-adventure video game developed by Pandemic Studios and published on January 11, 2005 by LucasArts for PlayStation 2 and Xbox. The game features an open world environment, with elements of potential stealth gaming and reputation-based social mechanics, and is set during a fictitious multi-national military action in North Korea, circa 2007. The player takes control of one of three mercenary characters and completes contracts in the war-torn country for profit and to prevent a nuclear war. Critics gave favorable reviews to the game, in particular praising its focus on explosive mayhem.The Xbox version is currently compatible with the Xbox 360 as of the update dated April 18, 2007, however, many have experienced issues with its emulation, particularly frequent freezing.A sequel, Mercenaries 2: World in Flames, was released in 2008 for the Microsoft Windows, PS2, PS3 and Xbox 360 formats. Following Pandemic Studios\' purchase in November 2009, Electronic Arts announced EA Los Angeles would be developing a second sequel, tentatively titled Mercs Inc.', 'https://en.wikipedia.org/wiki/Mercenaries:_Playground_of_Destruction', '//upload.wikimedia.org/wikipedia/en/thumb/4/4f/Mercenaries_-_Playground_of_Destruction_Coverart.png/256px-Mercenaries_-_Playground_of_Destruction_Coverart.png', 'pending', NULL, 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(64, 'Mortal Kombat', 'Midway', NULL, 'Midway', '1992-08-01', '18', 'Mortal Kombat is an arcade fighting game developed and published by Midway Games in 1992 as the first title in the Mortal Kombat series. It was subsequently released by Acclaim Entertainment for nearly every home video game platform of the time.The game introduced many key aspects of the Mortal Kombat series, including the unique five-button control scheme and gory finishing moves. The game focuses on the journey of the monk Liu Kang to save Earth from the evil sorcerer Shang Tsung, ending with their confrontation in the tournament known as Mortal Kombat.Mortal Kombat became a best-selling game and remains of the most popular fighting games in the genre\'s history, spawning numerous sequels and spin-offs over the following years and decades, beginning with Mortal Kombat II in 1993, and together with the first sequel was the subject of a successful film adaptation in 1995. It also sparked much controversy for its depiction of extreme violence and gore using realistic digitized graphics, resulting in the introduction of age-specific content descriptor ratings for video games.', 'https://en.wikipedia.org/wiki/Mortal_Kombat_(1992_video_game)', '//upload.wikimedia.org/wikipedia/en/3/33/Mortal_Kombat_cover.JPG', 'pending', 'Mortal Kombat', 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(65, 'Mortal Kombat II', NULL, NULL, NULL, '1993-04-01', '18', 'Mortal Kombat II (commonly abbreviated as MKII) is a competitive fighting game originally produced by Midway Games for the arcades in 1993. It was later ported to multiple home systems, including the PC, Amiga, Game Boy, Sega Game Gear, Sega Genesis, Sega Saturn, Super Nintendo Entertainment System, and various PlayStation consoles.Mortal Kombat II was the second game in the Mortal Kombat series, improving the gameplay and expanding the mythos of the original Mortal Kombat, notably introducing more varied Fatality finishing moves and several iconic characters, such as Kitana, Kung Lao, Mileena and the series\' recurring villain Shao Kahn. The game\'s plot continues from the first game, featuring the next Mortal Kombat tournament set in the otherdimensional realm of Outworld, with the Outworld and Earthrealm representatives fighting each other on their way to the evil emperor Shao Kahn.The game was an unprecedented commercial success and was acclaimed by most critics, receiving many annual awards and having been featured in various top lists in the years and decades to come, but also perpetuating a major video game controversy due to the continuously over-the-top violent content of the series. Its legacy includes spawning a spin-off game Mortal Kombat: Shaolin Monks and having the greatest influence on the 2011 reboot game Mortal Kombat, as well as inspiring numerous video game clones.', 'https://en.wikipedia.org/wiki/Mortal_Kombat_II', '//upload.wikimedia.org/wikipedia/en/thumb/5/5f/Mortal_Kombat_II_arcade.png/256px-Mortal_Kombat_II_arcade.png', 'pending', 'Mortal Kombat', 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(66, 'Mortal Kombat III', NULL, NULL, NULL, '1995-03-10', '18', 'Mortal Kombat 3 (MK3) is a fighting game developed by Midway Games and first released into arcades in 1995 as the third game in the Mortal Kombat series. As in the previous games, it has a cast of characters that players choose from and guide through a series of battles against other opponents. The game avoids the tournament storyline of its predecessors, as various warriors instead fight against the returning Shao Kahn, who has resurrected his bride Sindel and started an invasion of Earthrealm.The third installment of Mortal Kombat retains the blood and gory attacks that defined the series. It introduces new types of the Fatality finishing moves, including Animalities. Other features new to the series were combos, predefined sequences used to perform a series of consecutive attacks. A \"Run\" button was also added, allowing players to briefly dash toward the opponent, as were \"Kombat Kodes\", an unlockable content system using various symbols that can be entered before two-player matches to achieve certain effects. Some characters from the previous games returned and new characters were introduced into the series. Mortal Kombat 3 notably omitted popular characters from previous games, some of whom were added in an update, Ultimate Mortal Kombat 3, released later in 1995. The home console-exclusive Mortal Kombat Trilogy (1996) added even more characters, as well as other new features.', 'https://en.wikipedia.org/wiki/Mortal_Kombat_3', '//upload.wikimedia.org/wikipedia/en/thumb/9/9e/Mortal_Kombat_3_cover.JPG/256px-Mortal_Kombat_3_cover.JPG', 'pending', 'Mortal Kombat', 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(67, 'Mortyr', NULL, NULL, NULL, '2004-09-27', '16', 'Mortyr 2093-1944 is a first person shooter computer game published by Interplay and developed by polish Mirage Media and released in 1999.', 'https://en.wikipedia.org/wiki/Mortyr', NULL, 'pending', NULL, 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(68, 'NARC (2005)', NULL, NULL, NULL, '2005-01-01', '16', 'Narc is a 1988 arcade game designed by Eugene Jarvis for Williams Electronics and programmed by George Petro.[1] It was one of the first ultra-violent video games and a frequent target of parental criticism of the arcade game industry. The object is to arrest and kill drug offenders, confiscate their money and drugs, and defeat \"Mr. Big\". The 2005 update of the 1988 arcade hit of the same title was developed by VIS Entertainment and published by Midway Games for the Xbox, PC and PS2. A planned Nintendo GameCube version was later canceled. Although the update was slated to be a straight remake of the story from the arcade game, the version that was eventually released featured a totally new story. Several well-known stars are involved with the voice acting in NARC, including Michael Madsen, Bill Bellamy, and Ron Perlman. The game\'s soundtrack features artists such as Curtis Mayfield, Cypress Hill, Grandmaster Flash, Lynyrd Skynyrd, and indie artists such as Point Game and Camden. The update casts the player as narcotics officer Jack Forzenski and DEA agent Marcus Hill, former partners reunited who are instructed to investigate a new drug on the streets called Liquid Soul.', 'https://en.wikipedia.org/wiki/NARC_(video_game)#2005_game', '//upload.wikimedia.org/wikipedia/en/thumb/5/52/Narc_arcade_flyer.png/250px-Narc_arcade_flyer.png', 'pending', NULL, 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(69, 'NecroVisioN', NULL, NULL, NULL, '2009-02-20', '18', 'NecroVisioN is a World War I \"alternate\" history horror first-person shooter developed by Polish developer The Farm 51 and published by 505 Games. It was released for the Microsoft Windows platform on 20 February 2009. The game was also published by Aspyr Media in the United States, on May 25, 2009, and Canada on August 10, 2009. A prequel entitled NecroVisioN: Lost Company was released in February 2010.', 'https://en.wikipedia.org/wiki/NecroVisioN', '//upload.wikimedia.org/wikipedia/en/thumb/5/59/Necrovisioncover.jpg/250px-Necrovisioncover.jpg', 'pending', NULL, 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(70, 'Phantasmagoria', NULL, NULL, NULL, '1995-01-01', '18', 'Phantasmagoria is an interactive movie psychological horror point-and-click adventure game created by Sierra On-Line for the PC, and later for the Sega Saturn in Japan. The game was released in 1995 and was followed by a sequel, Phantasmagoria: A Puzzle of Flesh in 1996.Made at the height of the \"interactive movie\" boom in the computer game industry, Phantasmagoria is notable for being one of the first games to use a live actor (Victoria Morsell) as an on-screen avatar. The game was released on seven CDs to accommodate the massive amount of video generated by this process, the creation of which was contracted by Sierra to Kronos Digital Entertainment (who had previously worked on Sierra\'s King\'s Quest VI). Large portions of data were repeated on each CD, to avoid in-game disc swapping.', 'https://en.wikipedia.org/wiki/Phantasmagoria_(video_game)', '//upload.wikimedia.org/wikipedia/en/c/c9/Phantasmagoria_Coverart.png', 'pending', NULL, 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(71, 'Pokemon Trading Card Game', NULL, NULL, NULL, '1998-12-18', '16', 'Pokemon Trading Card Game, originally released in Japan as Pokemon Card GB is a video game adaptation of the original tabletop trading card game of the same name, which in turn was based on the Pokemon role-playing video game series. Developed by Hudson Soft and published by Nintendo, it was initially released in Japan in December 1998, with an English version appearing in North America in April 2000 and in Europe the following December. The title features digital version of cards from the first three sets of the trading card game originally released in English by Wizards of the Coast between 1998 and 1999, as well as exclusive cards not available outside of the game.A second Game Boy Color game, Pokemon GB2: Here Comes Team Great Rocket!), was released in Japan in March 2001. The game was not released in North America nor Europe. An addition to the sequel is the ability to choose the gender of the player character.', 'https://en.wikipedia.org/wiki/Pok%C3%A9mon_Trading_Card_Game_(video_game)', '//upload.wikimedia.org/wikipedia/en/1/19/Pok%C3%A9mon_Trading_Card_Game_Coverart.png', 'pending', 'Pokemon', 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(72, 'Postal', NULL, NULL, NULL, '1997-11-14', '18', 'Postal is a computer game, made by Running With Scissors and published by Ripcord Games in 1997. A sequel to the game, Postal², was released in 2003. Director Uwe Boll has bought the movie rights for the series, and has produced a film of the same name.', 'https://en.wikipedia.org/wiki/Postal_(video_game)', '//upload.wikimedia.org/wikipedia/en/b/b2/Postal_Coverart.png', 'pending', 'Postal', 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22');
INSERT INTO `games` (`id`, `name`, `developer`, `director`, `publisher`, `date`, `pegi`, `summary`, `page_reference`, `image`, `validate`, `saga`, `platform_id`, `created_at`, `updated_at`) VALUES
(73, 'Postal II', NULL, NULL, NULL, '2003-04-13', '18', 'Postal 2 (stylized as Postal²) is a first-person shooter video game by Running with Scissors, and it is the sequel to the 1997 game Postal. Both are intentionally highly controversial due to high levels of violence and stereotyping. Unlike its predecessor, Postal 2 is played completely in first-person based on the Unreal Engine. Scenes of the game can be seen in the music video of the Black Eyed Peas single \"Where Is the Love?\".In 2004, New Zealand banned Postal 2 due to \"gross, abhorrent content\" (urination, high impact violence, graphic vomiting, animal cruelty, homophobia, racial/ethnic stereotypes, etc.) and Australia later banned the game due to \"excessive abhorrent content\". On May 1, 2007, Malaysia banned the game outright due to \"very high impact violence & offensive depictions of cruelty\". The game is also banned in Germany, France and temporarily banned for sale in Sweden. The games were later legally[citation needed] made available worldwide through GOG.com in 2009 and Desura in 2012, and was successfully greenlit on Steam later that year.The game received a mixed reception from critics upon its release in 2003, with some reviewers going so far as to give the game a score of zero, while others argued in favour of the game\'s concept and implementation. Regardless, the game was successful enough to receive several expansions and to be included in multiple compilations, and a film adaptation of the game and its predecessor was made in 2008.', 'https://en.wikipedia.org/wiki/Postal_2', '//upload.wikimedia.org/wikipedia/en/thumb/4/4f/Postal_2_cover.png/200px-Postal_2_cover.png', 'pending', 'Postal', 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(74, 'RapeLay', NULL, NULL, NULL, '2006-04-21', '18', 'RapeLay (レイプレイ, Reipurei) is a 3D eroge video game made by Illusion, released on April 21, 2006 in Japan. Compared to Illusion\'s previous games, the main story is shorter, it features an improved 3D engine, and is mainly played through mouse control. The game centers on a male character who stalks and rapes a mother and her two daughters. Three years after its initial release, the game garnered international attention and controversy for its content. The game was subsequently banned in Argentina, Malaysia, and Thailand for \"graphic depictions of glorification of sexual violence\", and \"sexual content\".', 'https://en.wikipedia.org/wiki/RapeLay', '//upload.wikimedia.org/wikipedia/en/6/6a/Rapelay.jpg', 'pending', NULL, 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(75, 'Red Dead Redemption', 'Rockstar', 'Kevin Hoare, Rod Edge', 'Rockstar Games', '2010-05-18', '18', 'Red Dead Redemption is a Western action-adventure video game set in an open world environment. It is developed by Rockstar San Diego and published by Rockstar Games. It was released for the PlayStation 3 and Xbox 360 consoles on May 18, 2010. It is the second title in the Red Dead franchise, and is a spiritual successor to 2004\'s Red Dead Revolver. The game, set during the decline of the American Frontier in the year 1911, follows John Marston, a former outlaw whose wife and son are taken hostage by the government in ransom for his services as a bounty hunter. Having no other choice, Marston sets out to bring the three members of his former gang to justice.Red Dead Redemption is played from a third-person perspective in an open world environment, allowing the player to interact with the game world at their leisure. The player can travel the virtual world, a fictionalized version of the Western United States and Mexico, primarily by horseback and on foot. Gunfights emphasize a gunslinger gameplay mechanic called \"Dead Eye\" that allows players to mark multiple shooting targets on enemies in slow motion. The game makes use of a morality system, by which the player\'s actions in the game affect their character\'s levels of honor and fame and how other characters respond to the player. An online multiplayer mode is included with the game, allowing up to 16 players to engage in both co-operative and competitive gameplay in a recreation of the single-player setting.Upon its release, Red Dead Redemption was met with universal critical acclaim, averaging approximately 95/100 and 94% on review aggregate websites Metacritic and GameRankings respectively, making it one of the highest-rated video games of all time. Reviewers praised the game\'s visuals, dynamically-generated music, voice acting, gameplay, and story, and they gave it several Game of the Year awards. It has ranked highly on several \"Best Games\" lists by various publications. As of September 2011, the game has sold over 12.5 million copies. After the game\'s release, several downloadable content (DLC) additions were released. Red Dead Redemption: Undead Nightmare, which was also released as a standalone game, added a new single-player experience in which John Marston searches for a cure for an infectious zombie plague that has swept across the Old West. A Game of the Year Edition containing all additional content was released in October 2011.', 'https://en.wikipedia.org/wiki/Red_Dead_Redemption', '//upload.wikimedia.org/wikipedia/en/thumb/a/a7/Red_Dead_Redemption.jpg/256px-Red_Dead_Redemption.jpg', 'pending', 'Red Dead Redemption', 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(76, 'Requiem: Avenging Angel', NULL, NULL, NULL, '2001-04-06', '18', 'Requiem: Avenging Angel is a first-person shooter developed by Cyclone Studios and published by 3DO and Ubisoft in April 1999.', 'https://en.wikipedia.org/wiki/Requiem:_Avenging_Angel', '//upload.wikimedia.org/wikipedia/en/thumb/f/f9/Requiem_Box_Front_NA.jpg/256px-Requiem_Box_Front_NA.jpg', 'pending', NULL, 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(77, 'Reservoir Dogs', NULL, NULL, NULL, '1992-10-14', '18', 'Reservoir Dogs is a video game based on the Quentin Tarantino film of the same name. Released in 2006, it garnered mostly mediocre reviews and caused minor controversies for its violence, being banned in Australia and New Zealand.', 'https://en.wikipedia.org/wiki/Reservoir_Dogs_(video_game)', '//upload.wikimedia.org/wikipedia/en/7/79/Reservoir_Dogs_Game_PS2_Front_Cover.JPG', 'pending', NULL, 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(78, 'Risen', NULL, NULL, NULL, '2009-10-02', '18', 'Risen is a single-player fantasy-themed action role-playing game by the German company Piranha Bytes, and published by Deep Silver.', 'https://en.wikipedia.org/wiki/Risen_(video_game)', '//upload.wikimedia.org/wikipedia/en/4/42/Risen.jpg', 'pending', NULL, 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(79, 'Saints Row III', NULL, NULL, NULL, '2011-11-15', '18', 'Saints Row: The Third is a comedic action-adventure video game set in an open world environment. It is developed by Volition, Inc. and published by THQ. It was released on November 15, 2011 in Australia and North America, and was released on November 18, 2011 in Europe for Microsoft Windows, PlayStation 3 and Xbox 360. It is the third title in the Saints Row series, after the release of Saints Row 2 in 2008. As in Saints Row 2, the player controls the leader of the Third Street Saints. The game world is the fictional city of Steelport, and the story focuses on the urban gang war between the Saints and the three gangs. As the gang war intensifies, STAG (Special Tactical Anti-Gang), an elite paramilitary police force led by Commander Cyrus Temple is deployed to Steelport in an attempt to disrupt the violence.', 'https://en.wikipedia.org/wiki/Saints_Row:_The_Third', '//upload.wikimedia.org/wikipedia/en/9/98/Saints_Row_The_Third_box_art.jpg', 'pending', 'Saints Row', 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(80, 'Saints Row IV', NULL, NULL, NULL, '2013-08-20', '18', 'Saints Row IV is a comedy action-adventure video game, developed by Volition and published by Deep Silver. It was released for Microsoft Windows, PlayStation 3 and Xbox 360. It is the fourth installment in the Saints Row series, after the release of Saints Row: The Third in 2011. As in previous titles in the series, the player controls the leader of the Third Street Saints, a street gang, who has now become the president of the United States.The game takes place five years after the events of its predecessor, returning to the fictional city of Steelport, focusing on the Saints fighting an alien invasion as well as simulations of the gangs and enemies from their past.', 'https://en.wikipedia.org/wiki/Saints_Row_IV', '//upload.wikimedia.org/wikipedia/en/thumb/5/5d/SaintsRowIV.jpg/256px-SaintsRowIV.jpg', 'pending', 'Saints Row', 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(81, 'Scarface: The World is Yours', NULL, NULL, NULL, '2006-07-25', '18', 'Scarface: The World Is Yours is a video game developed by Radical Entertainment and published by Sierra Entertainment. The game is based on and is a quasi-sequel to the 1983 motion picture Scarface. It was released on the PC, PlayStation 2, and Xbox on October 8, 2006 and on the Wii on June 12, 2007.', 'https://en.wikipedia.org/wiki/Scarface:_The_World_is_Yours', '//upload.wikimedia.org/wikipedia/en/thumb/f/f0/The_World_is_Yours.jpg/250px-The_World_is_Yours.jpg', 'pending', NULL, 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(82, 'Shellshock II: Blood Trails', NULL, NULL, NULL, '2009-02-13', '18', 'Shellshock 2: Blood Trails is a first-person shooter video game that is set during the Vietnam War. It was released for PC, PlayStation 3 and Xbox 360 platforms on February 13, 2009 in Europe and February 24, 2009 in North America. It was developed by Rebellion Developments and published by Eidos Interactive. It is the sequel to the 2004 video game Shellshock: Nam \'67.', 'https://en.wikipedia.org/wiki/Shellshock_2:_Blood_Trails', '//upload.wikimedia.org/wikipedia/en/0/0f/Shellshock_2.jpg', 'pending', NULL, 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(83, 'Silent Hill VI: Homecoming', NULL, NULL, NULL, '2008-09-30', '18', 'Silent Hill: Homecoming is the sixth installment in the Silent Hill survival horror video game series, developed by Double Helix Games. The game was announced on July 11, 2007 by Konami at their E3 press conference, and was originally entitled Silent Hill V. This entry follows the journey of Alex Shepherd, a soldier returning from war, to his hometown of Shepherd\'s Glen, where he finds the town in disarray, and his younger brother missing. As he continues on his search to find his younger brother, he discovers more about the Order—the cult of Silent Hill—as well as the town\'s history, and his own past.The game was released on September 30, 2008 in North America for the PlayStation 3 and Xbox 360, and the Microsoft Windows version was released for North, Central and South America on November 6, 2008 exclusively through Valve\'s Steam digital content delivery service. All versions were simultaneously released in Europe, including a retail Microsoft Windows version, on February 27, 2009. The Japanese version was cancelled.', 'https://en.wikipedia.org/wiki/Silent_Hill:_Homecoming', '//upload.wikimedia.org/wikipedia/en/f/f1/Silent_Hill_Homecoming.jpg', 'pending', NULL, 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(84, 'Singles: Flirt Up Your Life', NULL, NULL, NULL, '2003-04-02', '18', 'Singles: Flirt Up Your Life is a video game developed by Rotobee and published by German company Deep Silver in 2004.It is very similar to The Sims in that the player is responsible for characters who have to be taken care of, such as by ordering them to eat, sleep, go to work, etc.The game is available for sale via download from the company\'s website, with payment required to continue playing after the one-hour time limit expires.The CD-ROM version sold in the USA censors any nudity throughout the game.', 'https://en.wikipedia.org/wiki/Singles:_Flirt_Up_Your_Life', '//upload.wikimedia.org/wikipedia/en/thumb/b/b4/Singles_Flirt_Up_Your_Life.jpg/252px-Singles_Flirt_Up_Your_Life.jpg', 'pending', NULL, 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(85, 'Soldier of Fortune III: Payback', NULL, NULL, NULL, '2007-11-13', '18', 'Soldier of Fortune: Payback is the third installment of the Soldier of Fortune game series. Unlike the previous two Soldier of Fortune games, which were developed by Raven Software utilizing the Quake 2 and Quake 3 engines, Payback was developed by Cauldron HQ, developed with Cauldron\'s in-house CloakNT engine, used in their previous first person shooter game, Chaser. This game is the first game of the series released for the Xbox 360 and PlayStation 3. The game was released on 14 November 2007.', 'https://en.wikipedia.org/wiki/Soldier_of_Fortune:_Payback', '//upload.wikimedia.org/wikipedia/en/d/d7/Soldier_of_Fortune_Payback_Game_Cover.jpg', 'pending', NULL, 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(86, 'Sonic Blast Man', NULL, NULL, NULL, '1992-01-01', '3', 'Sonic Blastman (ソニックブラストマン) is a video game franchise by Taito starred by the titular superhero, Sonic Blastman. The game originally started as an arcade game, but eventually made its way to the Super NES, with much different gameplay. Both versions received a sequel.', 'https://en.wikipedia.org/wiki/Sonic_Blast_Man', '//upload.wikimedia.org/wikipedia/en/b/b4/Sonic_Blast_Man_Poster.png', 'pending', 'Sonic', 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(87, 'South Park: The Stick of Truth', NULL, NULL, NULL, '2014-03-04', '18', 'South Park: The Stick of Truth is a 2014 role-playing video game developed by Obsidian Entertainment in collaboration with South Park Digital Studios, and released by Ubisoft for the PlayStation 3 and Xbox 360 video game consoles, and Microsoft Windows. Based on the American adult animated television series South Park, The Stick of Truth follows The New Kid, who has moved to the eponymous town, and becomes involved in an epic role-play fantasy war involving humans, wizards, and elves, fighting for control of the all-powerful Stick of Truth. Their game quickly escalates out of control, bringing them into conflict with aliens, Nazi zombies, and gnomes, and threatening the entire town with destruction.Development began in 2009 after South Park creators Trey Parker and Matt Stone approached Obsidian about making a role-playing game designed to look exactly like the TV series. The pair remained involved throughout the game\'s production, writing its script, consulting on the design, and voicing many of the characters, as they do on the show. The Stick of Truth\'s production was turbulent, seeing it move release dates multiple times, from its initial date in March 2013, to its eventual release in March 2014, and a change in publisher, surviving the bankruptcy of original publisher THQ. The game\'s rights were purchased by Ubisoft in early 2013.The game was subject to censorship in some regions, based on content including abortions and Nazi imagery, Parker and Stone replaced the scenes with detailed explanations of what occurs in each scene. The Stick of Truth was released to generally positive reviews, which praised the comedic script, visual style, and faithfulness to the source material. It received criticism for a lack of challenge in combat, and technical issues that slowed or impeded progress.', 'https://en.wikipedia.org/wiki/South_Park:_The_Stick_of_Truth', '//upload.wikimedia.org/wikipedia/en/f/f3/SouthParkTheStickOfTruth.jpg', 'pending', NULL, 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(88, 'Spec Ops XI: The Line', NULL, NULL, NULL, '2012-06-26', '18', 'Spec Ops: The Line is a 2012 third-person shooter video game developed by Yager Development and published by 2K Games. It was released on 26 June 2012 in North America and 29 June 2012 in Europe for Microsoft Windows, and the Xbox 360 and PlayStation 3 consoles. It is the eleventh title in the Spec Ops series, and the first entry since Spec Ops: Airborne Commando in 2002.In Spec Ops: The Line, the player controls Captain Martin Walker, who is sent into a post-catastrophe Dubai with an elite Delta Force team on a reconnaissance mission, where they find dead American soldiers. Upon the finding, Walker declares that the team\'s mission has changed, and that they will search Dubai for survivors. An online multiplayer mode, developed by Darkside Game Studios, is included with the game, allowing players to engage in both co-operative and competitive gameplay.The writers stated that the premise of the game is influenced by various novellas, including Joseph Conrad\'s Heart of Darkness, with Konrad replacing Kurtz. Video game critics gave Spec Ops: The Line generally positive reviews. Praise focused on its narrative and themes, while criticism was targeted particularly at the online multiplayer mode and generic third person gameplay. Spec Ops: The Line also won, and was nominated for, several industry awards, including Best Narrative at Machinima\'s Inside Gaming Awards', 'https://en.wikipedia.org/wiki/Spec_Ops:_The_Line', '//upload.wikimedia.org/wikipedia/en/thumb/5/57/Spec_Ops_The_Line_cover.png/250px-Spec_Ops_The_Line_cover.png', 'pending', 'Spec Ops', 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(89, 'State of Decay', NULL, NULL, NULL, '2013-06-05', '16', 'State of Decay is a third person open world stealth zombie-survival horror video game, developed by Undead Labs and published by Microsoft Studios. It was first released for the Xbox 360 on June 5, 2013. A Windows version was released on September 20, 2013 via Steam\'s Early Access, with an official release following on November 5, 2013.', 'https://en.wikipedia.org/wiki/State_of_Decay_(video_game)', '//upload.wikimedia.org/wikipedia/en/7/7f/State_of_decay_logo.jpg', 'pending', NULL, 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(90, 'Syndicate', NULL, NULL, NULL, '2012-02-21', '18', 'Syndicate is a first-person shooter video game developed by Starbreeze Studios, released on February 21, 2012 for Microsoft Windows, PlayStation 3 and Xbox 360 platforms. It is a reboot of the Syndicate series developed by Bullfrog Productions, changing the genre from a tactical shooter to a first-person shooter.', 'https://en.wikipedia.org/wiki/Syndicate_(2012_video_game)', '//upload.wikimedia.org/wikipedia/en/thumb/a/ae/Syndicate_coverart.jpg/250px-Syndicate_coverart.jpg', 'pending', NULL, 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(91, 'The Cat In The Hat', NULL, NULL, NULL, '2003-11-08', '3', 'A video game based on The Cat in the Hat film was released for PlayStation 2, Xbox, and Game Boy Advance on November 5, 2003, and PC on November 9, 2003, shortly before the film\'s theatrical release. A version for the Nintendo GameCube was canceled. The plot of the game is different from the movie, instead of Conrad unlocking the Cat\'s Crate, Larry Quinn unlocks it and steals the Lock to it. Playing as the Cat, the player must go through thirteen levels through the transformed house and chase down Larry, who is collecting the magic released from the Crate for himself, and defeat him to get the Lock (called the \"Crablock\" in-game) back and re-lock the Crate before the children\'s mother returns home.[59] The game received critically mixed reviews[38][39][40][42][43][44] (except for the PC version, which received negative reviews).[41][45] The video game was banned in Brazil due to copyright issues.', 'https://en.wikipedia.org/wiki/The_Cat_in_the_Hat_(film)#Video_game', '//upload.wikimedia.org/wikipedia/en/thumb/d/db/Cat_in_the_hat.jpg/220px-Cat_in_the_hat.jpg', 'pending', NULL, 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(92, 'The Darkness', NULL, NULL, NULL, '2007-06-25', '18', 'The Darkness is a first-person shooter psychological horror video game developed by Starbreeze Studios and published by 2K Games for the PlayStation 3 and Xbox 360. It was released on June 2007 in North America and Europe. The game is based on the comic book of the same title. A sequel, titled The Darkness II was released on February 2012.', 'https://en.wikipedia.org/wiki/The_Darkness_(video_game)', '//upload.wikimedia.org/wikipedia/en/thumb/1/1c/Darkness_cover.jpg/256px-Darkness_cover.jpg', 'pending', NULL, 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(93, 'The Getaway', NULL, NULL, NULL, '2002-12-11', '18', 'The Getaway is an action-adventure open world video game developed by Team Soho and published by Sony Computer Entertainment Europe for the PlayStation 2 in 2002. The Getaway is the first in the series and is said to have been inspired by British gangland films Get Carter and Snatch. Initially, the release of the game was to coincide with the launch of the PlayStation 2 in 2000, but was delayed by 27 months due to the difficulty of re-creating large areas of London in high resolution.The game focuses on two characters each with their own plot settings, being a police officer in service with the Flying Squad, Detective Constable Frank Carter and an ex-bank robber, Mark Hammond with both plots running parallel and intersecting before concluding in the finale of the game. A sequel entitled The Getaway: Black Monday was released in 2004.', 'https://en.wikipedia.org/wiki/The_Getaway_(video_game)', '//upload.wikimedia.org/wikipedia/en/6/63/The_Getaway_PS2.jpg', 'pending', NULL, 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(94, 'The Godfather II', NULL, NULL, NULL, '2009-04-07', '18', 'The Godfather II is a 2009 video game based on The Godfather Part II, a 1974 crime drama film directed by Francis Ford Coppola and co-written by Coppola and Mario Puzo. The game is published by Electronic Arts and was released on the PlayStation 3, Xbox 360 and Microsoft Windows. This is also a sequel to The Godfather: The Game, which was also developed and published by EA in 2006. The game was released on April 7, 2009 in North America, April 9 in Europe and April 5 in Australia. The Godfather II is played from a third-person perspective. It also contains some strategy elements, as the player\'s character battles rival families and take over businesses to ultimately become a \"don\" ruling over many cities. Robert Duvall reprises his role as consigliere Tom Hagen in both voice and likeness as he did in the first game. However, Al Pacino, who played Don Michael Corleone in the film did not provide his likeness or voice and the character of Michael was changed significantly in the game itself. The movie\'s plot is not entirely adapted as the lengthy flashback sequences, involving a young Vito in 1920\'s New York, are not adapted for the game.', 'https://en.wikipedia.org/wiki/The_Godfather_II_(video_game)', '//upload.wikimedia.org/wikipedia/en/thumb/0/09/Godfather2gameCover.jpg/256px-Godfather2gameCover.jpg', 'pending', NULL, 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(95, 'The Guy Game', NULL, NULL, NULL, '2004-08-31', '18', 'The Guy Game is an adult video game for the PlayStation 2, Xbox and PC platforms published in 2004 by Gathering of Developers and developed by now-defunct Top Heavy Studios (it was the team\'s only game). Presented in a trivia gameshow style supporting up to four players, it consists of about 1,000 questions spread out over 20 episodes. Much of the game involves watching live-action video footage of young women in bikinis, and as the player succeeds in the game the women eventually expose their breasts. The game garnered much controversy and was the subject of a lawsuit.', 'https://en.wikipedia.org/wiki/The_Guy_Game', '//upload.wikimedia.org/wikipedia/en/f/f6/The_Guy_Game.PNG', 'pending', NULL, 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(96, 'The Punisher', NULL, NULL, NULL, '2004-04-12', '18', 'The Punisher is a third-person shooter video game developed by Volition, Inc. and released by THQ in 2005 for the PlayStation 2, Xbox, Windows, a mobile phone game was also developed by Amplified Games. The game which stars the Marvel Comics antihero, The Punisher. After his family was murdered by the Mafia, Frank Castle devoted his life to the punishment of criminals. Players take control of the titular ruthless vigilante to track down criminals and kill them. The game\'s story is a loose mixture of the 2004 film, as well as the 2000 mini-series, Welcome Back, Frank. Actor Thomas Jane reprises his role as Frank Castle/The Punisher. The game features many cameo appearances from Marvel Comics characters, such as Iron Man, Nick Fury, Black Widow, Matt Murdock (the alter ego of Daredevil), Bushwacker, The Kingpin and Bullseye. Also present are several characters from the Welcome Back, Frank storyline such as detectives Martin Soap and Molly Van Richtofen, the Punisher\'s neighbors Joan and Spacker Dave, Ma Gnucci, The Russian and General Kreigkopf.', 'https://en.wikipedia.org/wiki/The_Punisher_(2005_video_game)', '//upload.wikimedia.org/wikipedia/en/thumb/f/fb/Punisher_game_cover.jpg/256px-Punisher_game_cover.jpg', 'pending', NULL, 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(97, 'The Witcher II', NULL, NULL, NULL, '2011-05-17', '18', 'The Witcher 2: Assassins of Kings (Polish: Wiedźmin 2: Zabójcy Królów) is an action role-playing hack and slash video game developed by Polish studio CD Projekt RED for Microsoft Windows, Xbox 360 and OS X. It is a sequel to the 2007 video game The Witcher, and was released internationally on May 17, 2011 for Microsoft Windows, and on April 17, 2012 for Xbox 360. Like its predecessor, the game is based on the book series of the same name by Polish author Andrzej Sapkowski. The game has been a critical and commercial success selling more than 1.7 million units for the PC and Xbox 360 as of May 2012.', 'https://en.wikipedia.org/wiki/The_Witcher_2:_Assassins_of_Kings', '//upload.wikimedia.org/wikipedia/en/thumb/4/40/Witcher_2_cover.jpg/256px-Witcher_2_cover.jpg', 'pending', 'The Witcher', 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(98, 'Three Sisters\' Story', NULL, NULL, NULL, '1996-02-29', '18', 'Three Sisters\' Story (三姉妹, Sanshimai, Three Sisters) is a Japanese adult bishōjo visual novel for the PC. It was published in 1996 by Sakura Soft, and operates on Windows 98, ME, 2000, and XP. It was translated to English by JAST USA, and re-released for modern Windows systems in 2002 as part of the \"JAST USA Memorial Pack\" along with Season of the Sakura and Runaway City.', 'https://en.wikipedia.org/wiki/Three_Sisters\'_Story', '//upload.wikimedia.org/wikipedia/en/thumb/d/d1/Three_Sisters%27_Story_Coverart.png/200px-Three_Sisters%27_Story_Coverart.png', 'pending', NULL, 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(99, 'Tom Clancy\'s Splinter Cell II: Pandora Tomorrow', NULL, NULL, NULL, '2004-03-23', '16', 'Tom Clancy\'s Splinter Cell: Pandora Tomorrow is a stealth game, developed and published by Ubisoft Shanghai, while Ubisoft Montreal, creator of the original Splinter Cell, was working on Chaos Theory. Pandora Tomorrow is the second game in the Splinter Cell series endorsed by writer Tom Clancy. The game follows the covert activities of Sam Fisher, an agent working for a black-ops branch of the National Security Agency (NSA) called \"Third Echelon\". The character, Sam Fisher, is voiced by Michael Ironside. Dennis Haysbert, at that time best known for his role as David Palmer on the television show 24 is the voice for the character Irving Lambert, Fisher\'s boss, making this the only time he is not voiced by Don Jordan. Lalo Schifrin provides the theme music for the game. The game has been translated to several languages for international distribution. Pandora Tomorrow was entitled Shadow Strike during its development. A remastered, High-Definition, version of Tom Clancy\'s Splinter Cell: Pandora Tomorrow was announced for the PlayStation Network for the PlayStation 3 on December 20, 2010.', 'https://en.wikipedia.org/wiki/Tom_Clancy\'s_Splinter_Cell:_Pandora_Tomorrow', '//upload.wikimedia.org/wikipedia/en/thumb/5/5e/Pandora_Tomorrow_box_art.jpg/256px-Pandora_Tomorrow_box_art.jpg', 'pending', 'Tom Clancy', 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(100, 'Tom Clancy\'s Splinter Cell III: Chaos Theory', NULL, NULL, NULL, '2005-03-28', '16', 'Tom Clancy\'s Splinter Cell: Chaos Theory is a stealth game, developed and published by Ubisoft. Chaos Theory is the third game in the Splinter Cell series endorsed by writer Tom Clancy.The game follows the covert activities of Sam Fisher, an agent working for a covert-ops branch within the NSA called \"Third Echelon\". Though originally announced for release in Fall 2004, the actual release date was March 2005 for the Xbox, PlayStation 2, GameCube and Microsoft Windows. Handheld versions for the Nintendo DS and N-Gage have also been released. A version for the Game Boy Advance was planned, but later cancelled. Actor Michael Ironside reprised his role as Sam, while Don Jordan returned from the original game to voice Lambert, having been replaced by Dennis Haysbert in Tom Clancy\'s Splinter Cell: Pandora Tomorrow. The game went gold on March 22, 2005 for all platforms. Official Xbox Magazine considered Splinter Cell: Chaos Theory to be Xbox \"Game of the Year\" (2005) for its outstanding gameplay and lifelike graphics. A remake called Tom Clancy\'s Splinter Cell 3D was released for the Nintendo 3DS. A remastered, high-definition, version of Tom Clancy\'s Splinter Cell: Chaos Theory was released for the PlayStation Network for the PlayStation 3 on December 20, 2010 as part of the Splinter Cell Trilogy.', 'https://en.wikipedia.org/wiki/Tom_Clancy\'s_Splinter_Cell:_Chaos_Theory', '//upload.wikimedia.org/wikipedia/en/1/17/Tom_Clancy%27s_Splinter_Cell_-_Chaos_Theory_Coverart.png', 'pending', 'Tom Clancy', 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(101, 'Voyeur', NULL, NULL, NULL, '1996-01-01', '18', 'Voyeur and Voyeur II were full motion video games released in 1993 and 1996 respectively. The first game was originally released as the \"flagship\" product for the short lived Philips CD-i multimedia system/video game console. DOS and Macintosh computer ports of it were later released and the sequel was only available for those computers.', 'https://en.wikipedia.org/wiki/Voyeur_(video_game)', NULL, 'pending', NULL, 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(102, 'Watch Dogs', 'Ubisoft Montreal', 'Sebastian Viard', 'Ubisoft', '2014-05-27', '18', 'Watch Dogs (stylized as WATCH_DOGS) is an upcoming open world action-adventure video game developed by Ubisoft Montreal and published by Ubisoft. It is due for release worldwide on May 27, 2014 for Microsoft Windows, PlayStation 3, PlayStation 4, Xbox 360, and Xbox One consoles. The Wii U version of the game has been put on hold while the other versions are being worked on, and is planned to release in the fourth quarter of 2014.The game is set within a fictionalized, hyper-connected version of Chicago, Illinois, which is managed through a centralised system called CtOS, developed by fictional company Blume. The single-player story is told through Aiden Pearce, a highly skilled grey hat hacker who can hack into the CtOS, granting him access to various electronic systems, either to obtain and control information or to interact with these systems to his advantage.The game received over a combined 173 pre-release awards and nominations for both its displays at E3 2012 and 2013, including three awards and four nominations from the Game Critics Awards.', 'https://en.wikipedia.org/wiki/Watch_Dogs', '//upload.wikimedia.org/wikipedia/en/thumb/d/d9/Watch_Dogs_box_art.jpg/256px-Watch_Dogs_box_art.jpg', 'pending', 'Watch Dogs', 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22'),
(103, 'Wolfenstein', 'Raven Software, ID Software, Endrant Studios, Blur Studios', 'Eric. C. Biessman', 'Activision', '2009-08-18', '16', 'Wolfenstein is a first-person shooter video game co-developed by Raven Software, id Software, and Endrant Studios and published by Activision. It is the sequel to Return to Castle Wolfenstein, and uses the id Tech 4 engine. The game was released in 2009: in North America on August 18, Australia on August 19, and Europe on August 21.', 'https://en.wikipedia.org/wiki/Wolfenstein_(2009_video_game)', '//upload.wikimedia.org/wikipedia/en/e/ee/Wolfenstein_%282009_video_game%29.jpg', 'pending', 'Wolfenstein', 26, '2021-05-17 08:22:22', '2021-05-17 08:22:22');

-- --------------------------------------------------------

--
-- Table structure for table `game_gamelist`
--

CREATE TABLE `game_gamelist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `game_id` bigint(20) UNSIGNED NOT NULL,
  `gamelist_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `game_genre`
--

CREATE TABLE `game_genre` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `game_id` bigint(20) UNSIGNED NOT NULL,
  `genre_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `game_genre`
--

INSERT INTO `game_genre` (`id`, `game_id`, `genre_id`, `created_at`, `updated_at`) VALUES
(1, 102, 26, '2021-05-17 08:26:52', '2021-05-17 08:26:52'),
(2, 44, 5, '2021-05-17 08:27:29', '2021-05-17 08:27:29'),
(3, 1, 1, '2021-05-17 08:33:03', '2021-05-17 08:33:03'),
(4, 79, 20, '2021-05-17 08:34:04', '2021-05-17 08:34:04'),
(5, 33, 29, '2021-05-17 08:36:53', '2021-05-17 08:36:53'),
(6, 77, 10, '2021-05-17 11:36:02', '2021-05-17 11:36:02'),
(7, 75, 3, '2021-05-17 11:36:44', '2021-05-17 11:36:44'),
(8, 68, 8, '2021-05-17 11:36:46', '2021-05-17 11:36:46'),
(9, 55, 20, '2021-05-17 11:36:47', '2021-05-17 11:36:47'),
(10, 46, 3, '2021-05-17 15:03:32', '2021-05-17 15:03:32'),
(11, 95, 17, '2021-05-18 07:18:39', '2021-05-18 07:18:39'),
(12, 74, 14, '2021-05-18 07:18:43', '2021-05-18 07:18:43'),
(13, 50, 23, '2021-05-18 07:19:07', '2021-05-18 07:19:07'),
(14, 11, 4, '2021-05-18 07:19:11', '2021-05-18 07:19:11'),
(15, 51, 5, '2021-05-18 07:19:13', '2021-05-18 07:19:13'),
(16, 48, 1, '2021-05-18 07:19:16', '2021-05-18 07:19:16'),
(17, 92, 9, '2021-05-18 07:19:18', '2021-05-18 07:19:18'),
(18, 33, 1, '2021-05-18 07:19:20', '2021-05-18 07:19:20'),
(19, 10, 18, '2021-05-18 07:19:22', '2021-05-18 07:19:22'),
(20, 3, 24, '2021-05-18 07:19:24', '2021-05-18 07:19:24'),
(21, 4, 27, '2021-05-18 07:19:26', '2021-05-18 07:19:26'),
(22, 45, 2, '2021-05-18 07:19:28', '2021-05-18 07:19:28'),
(23, 42, 19, '2021-05-18 07:19:31', '2021-05-18 07:19:31'),
(24, 25, 6, '2021-05-18 07:19:33', '2021-05-18 07:19:33'),
(25, 44, 17, '2021-05-18 07:19:35', '2021-05-18 07:19:35'),
(26, 6, 30, '2021-05-18 07:19:37', '2021-05-18 07:19:37'),
(27, 6, 23, '2021-05-18 07:19:39', '2021-05-18 07:19:39'),
(28, 70, 13, '2021-05-18 07:19:41', '2021-05-18 07:19:41'),
(29, 60, 27, '2021-05-18 07:19:43', '2021-05-18 07:19:43'),
(30, 92, 9, '2021-05-18 07:19:45', '2021-05-18 07:19:45'),
(31, 65, 17, '2021-05-18 07:19:48', '2021-05-18 07:19:48'),
(32, 55, 17, '2021-05-18 07:19:50', '2021-05-18 07:19:50'),
(33, 49, 8, '2021-05-18 07:19:54', '2021-05-18 07:19:54'),
(34, 35, 17, '2021-05-18 07:19:56', '2021-05-18 07:19:56'),
(35, 16, 26, '2021-05-18 07:19:59', '2021-05-18 07:19:59'),
(36, 102, 15, '2021-05-18 07:20:01', '2021-05-18 07:20:01'),
(37, 55, 23, '2021-05-18 07:20:04', '2021-05-18 07:20:04'),
(38, 35, 18, '2021-05-18 07:20:07', '2021-05-18 07:20:07'),
(39, 12, 17, '2021-05-18 07:20:09', '2021-05-18 07:20:09'),
(40, 85, 12, '2021-05-18 07:20:11', '2021-05-18 07:20:11'),
(41, 52, 3, '2021-05-18 07:20:14', '2021-05-18 07:20:14'),
(42, 30, 27, '2021-05-18 07:20:17', '2021-05-18 07:20:17'),
(43, 69, 13, '2021-05-18 07:20:20', '2021-05-18 07:20:20'),
(44, 30, 9, '2021-05-18 07:20:22', '2021-05-18 07:20:22'),
(45, 94, 26, '2021-05-18 07:20:27', '2021-05-18 07:20:27'),
(46, 74, 12, '2021-05-18 07:20:30', '2021-05-18 07:20:30'),
(47, 89, 1, '2021-05-18 07:20:32', '2021-05-18 07:20:32'),
(48, 14, 9, '2021-05-18 07:20:34', '2021-05-18 07:20:34'),
(49, 44, 17, '2021-05-18 07:20:37', '2021-05-18 07:20:37'),
(50, 29, 23, '2021-05-18 07:20:39', '2021-05-18 07:20:39'),
(51, 76, 9, '2021-05-18 07:20:41', '2021-05-18 07:20:41'),
(52, 64, 25, '2021-05-18 07:20:43', '2021-05-18 07:20:43'),
(53, 4, 6, '2021-05-18 07:20:45', '2021-05-18 07:20:45'),
(54, 50, 29, '2021-05-18 07:20:48', '2021-05-18 07:20:48'),
(55, 75, 28, '2021-05-18 07:20:49', '2021-05-18 07:20:49'),
(56, 38, 7, '2021-05-18 07:20:51', '2021-05-18 07:20:51'),
(57, 24, 11, '2021-05-18 07:20:54', '2021-05-18 07:20:54'),
(58, 102, 12, '2021-05-18 07:20:56', '2021-05-18 07:20:56'),
(59, 60, 3, '2021-05-18 07:20:58', '2021-05-18 07:20:58'),
(60, 102, 4, '2021-05-18 07:21:01', '2021-05-18 07:21:01'),
(61, 77, 21, '2021-05-18 07:21:03', '2021-05-18 07:21:03'),
(62, 62, 4, '2021-05-18 07:21:05', '2021-05-18 07:21:05'),
(63, 94, 1, '2021-05-18 07:21:07', '2021-05-18 07:21:07'),
(64, 52, 12, '2021-05-18 07:21:10', '2021-05-18 07:21:10'),
(65, 82, 23, '2021-05-18 07:21:12', '2021-05-18 07:21:12'),
(66, 88, 10, '2021-05-18 07:21:14', '2021-05-18 07:21:14'),
(67, 55, 20, '2021-05-18 07:21:17', '2021-05-18 07:21:17'),
(68, 17, 27, '2021-05-18 07:21:19', '2021-05-18 07:21:19'),
(69, 37, 26, '2021-05-18 07:21:21', '2021-05-18 07:21:21'),
(70, 33, 7, '2021-05-18 07:21:23', '2021-05-18 07:21:23'),
(71, 69, 24, '2021-05-18 07:21:26', '2021-05-18 07:21:26'),
(72, 38, 14, '2021-05-18 07:21:28', '2021-05-18 07:21:28'),
(73, 39, 16, '2021-05-18 07:21:47', '2021-05-18 07:21:47'),
(74, 65, 27, '2021-05-18 07:21:50', '2021-05-18 07:21:50'),
(75, 51, 27, '2021-05-18 07:21:52', '2021-05-18 07:21:52'),
(76, 70, 26, '2021-05-18 07:21:54', '2021-05-18 07:21:54'),
(77, 88, 4, '2021-05-18 07:21:56', '2021-05-18 07:21:56'),
(78, 39, 19, '2021-05-18 07:21:58', '2021-05-18 07:21:58'),
(79, 72, 8, '2021-05-18 07:21:59', '2021-05-18 07:21:59'),
(80, 11, 5, '2021-05-18 07:22:02', '2021-05-18 07:22:02'),
(81, 29, 5, '2021-05-18 07:22:04', '2021-05-18 07:22:04'),
(82, 47, 5, '2021-05-18 07:22:06', '2021-05-18 07:22:06'),
(83, 5, 25, '2021-05-18 07:22:08', '2021-05-18 07:22:08'),
(84, 7, 26, '2021-05-18 07:22:10', '2021-05-18 07:22:10'),
(85, 97, 24, '2021-05-18 07:22:13', '2021-05-18 07:22:13'),
(86, 20, 29, '2021-05-18 07:22:15', '2021-05-18 07:22:15'),
(87, 60, 11, '2021-05-18 07:22:17', '2021-05-18 07:22:17'),
(88, 49, 7, '2021-05-18 07:22:20', '2021-05-18 07:22:20'),
(89, 2, 6, '2021-05-18 07:22:22', '2021-05-18 07:22:22'),
(90, 63, 27, '2021-05-18 07:22:24', '2021-05-18 07:22:24'),
(91, 55, 14, '2021-05-18 07:22:26', '2021-05-18 07:22:26'),
(92, 80, 28, '2021-05-18 07:22:28', '2021-05-18 07:22:28'),
(93, 54, 15, '2021-05-18 07:22:30', '2021-05-18 07:22:30'),
(94, 52, 13, '2021-05-18 07:22:33', '2021-05-18 07:22:33'),
(95, 7, 23, '2021-05-18 07:22:35', '2021-05-18 07:22:35'),
(96, 88, 19, '2021-05-18 07:22:37', '2021-05-18 07:22:37'),
(97, 53, 1, '2021-05-18 07:22:39', '2021-05-18 07:22:39'),
(98, 62, 26, '2021-05-18 07:22:42', '2021-05-18 07:22:42'),
(99, 69, 22, '2021-05-18 07:22:44', '2021-05-18 07:22:44'),
(100, 53, 13, '2021-05-18 07:22:46', '2021-05-18 07:22:46'),
(101, 78, 17, '2021-05-18 07:22:48', '2021-05-18 07:22:48'),
(102, 55, 27, '2021-05-18 07:22:50', '2021-05-18 07:22:50'),
(103, 43, 24, '2021-05-18 07:22:52', '2021-05-18 07:22:52'),
(104, 90, 23, '2021-05-18 07:22:55', '2021-05-18 07:22:55'),
(105, 83, 18, '2021-05-18 07:22:57', '2021-05-18 07:22:57'),
(106, 1, 4, '2021-05-18 07:22:59', '2021-05-18 07:22:59'),
(107, 34, 7, '2021-05-18 07:23:02', '2021-05-18 07:23:02'),
(108, 60, 2, '2021-05-18 07:23:04', '2021-05-18 07:23:04'),
(109, 74, 10, '2021-05-18 07:27:41', '2021-05-18 07:27:41'),
(110, 52, 22, '2021-05-18 07:38:50', '2021-05-18 07:38:50'),
(111, 49, 9, '2021-05-18 07:38:53', '2021-05-18 07:38:53'),
(112, 19, 2, '2021-05-18 07:38:55', '2021-05-18 07:38:55'),
(113, 47, 18, '2021-05-18 07:38:57', '2021-05-18 07:38:57'),
(114, 17, 17, '2021-05-18 07:39:00', '2021-05-18 07:39:00'),
(115, 102, 26, '2021-05-18 07:39:02', '2021-05-18 07:39:02'),
(116, 27, 29, '2021-05-18 07:39:04', '2021-05-18 07:39:04'),
(117, 89, 9, '2021-05-18 07:39:06', '2021-05-18 07:39:06'),
(118, 37, 3, '2021-05-18 07:39:08', '2021-05-18 07:39:08'),
(119, 25, 15, '2021-05-18 07:39:12', '2021-05-18 07:39:12'),
(120, 13, 6, '2021-05-18 07:39:16', '2021-05-18 07:39:16'),
(121, 43, 25, '2021-05-18 07:39:19', '2021-05-18 07:39:19'),
(122, 24, 26, '2021-05-18 07:39:22', '2021-05-18 07:39:22'),
(123, 43, 30, '2021-05-18 07:39:25', '2021-05-18 07:39:25'),
(124, 62, 28, '2021-05-18 07:39:27', '2021-05-18 07:39:27'),
(125, 79, 5, '2021-05-18 07:39:30', '2021-05-18 07:39:30'),
(126, 58, 1, '2021-05-18 07:39:31', '2021-05-18 07:39:31'),
(127, 81, 22, '2021-05-18 07:39:34', '2021-05-18 07:39:34'),
(128, 86, 1, '2021-05-18 07:39:36', '2021-05-18 07:39:36'),
(129, 51, 8, '2021-05-18 07:39:38', '2021-05-18 07:39:38'),
(130, 90, 2, '2021-05-18 07:39:40', '2021-05-18 07:39:40'),
(131, 101, 22, '2021-05-18 07:39:42', '2021-05-18 07:39:42'),
(132, 34, 11, '2021-05-18 07:39:44', '2021-05-18 07:39:44'),
(133, 67, 12, '2021-05-18 07:39:46', '2021-05-18 07:39:46'),
(134, 95, 18, '2021-05-18 07:39:49', '2021-05-18 07:39:49'),
(135, 28, 10, '2021-05-18 07:39:51', '2021-05-18 07:39:51'),
(136, 42, 6, '2021-05-18 07:39:53', '2021-05-18 07:39:53'),
(137, 90, 11, '2021-05-18 07:39:56', '2021-05-18 07:39:56'),
(138, 67, 29, '2021-05-18 07:39:58', '2021-05-18 07:39:58'),
(139, 36, 5, '2021-05-18 07:40:00', '2021-05-18 07:40:00'),
(140, 83, 8, '2021-05-18 07:40:03', '2021-05-18 07:40:03'),
(141, 6, 3, '2021-05-18 07:40:08', '2021-05-18 07:40:08'),
(142, 77, 26, '2021-05-18 07:40:10', '2021-05-18 07:40:10'),
(143, 37, 22, '2021-05-18 07:40:11', '2021-05-18 07:40:11'),
(144, 84, 25, '2021-05-18 07:40:13', '2021-05-18 07:40:13'),
(145, 72, 9, '2021-05-18 07:40:15', '2021-05-18 07:40:15'),
(146, 40, 24, '2021-05-18 07:40:16', '2021-05-18 07:40:16'),
(147, 86, 20, '2021-05-18 07:40:18', '2021-05-18 07:40:18'),
(148, 103, 4, '2021-05-18 07:40:20', '2021-05-18 07:40:20'),
(149, 26, 5, '2021-05-18 07:40:21', '2021-05-18 07:40:21'),
(150, 84, 20, '2021-05-18 07:40:23', '2021-05-18 07:40:23'),
(151, 74, 2, '2021-05-18 07:40:24', '2021-05-18 07:40:24'),
(152, 57, 24, '2021-05-18 07:40:26', '2021-05-18 07:40:26'),
(153, 80, 18, '2021-05-18 07:40:27', '2021-05-18 07:40:27'),
(154, 74, 1, '2021-05-18 07:40:29', '2021-05-18 07:40:29'),
(155, 53, 10, '2021-05-18 07:40:31', '2021-05-18 07:40:31'),
(156, 102, 30, '2021-05-18 07:40:33', '2021-05-18 07:40:33'),
(157, 73, 30, '2021-05-18 07:40:34', '2021-05-18 07:40:34'),
(158, 1, 28, '2021-05-18 07:40:36', '2021-05-18 07:40:36'),
(159, 77, 2, '2021-05-18 07:40:38', '2021-05-18 07:40:38'),
(160, 98, 11, '2021-05-18 07:40:39', '2021-05-18 07:40:39'),
(161, 46, 23, '2021-05-18 07:40:41', '2021-05-18 07:40:41'),
(162, 8, 24, '2021-05-18 07:40:43', '2021-05-18 07:40:43'),
(163, 67, 11, '2021-05-18 07:40:44', '2021-05-18 07:40:44'),
(164, 59, 12, '2021-05-18 07:40:46', '2021-05-18 07:40:46');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Action', NULL, NULL, NULL),
(2, 'Historical Fiction', NULL, NULL, NULL),
(3, 'Stealth', NULL, NULL, NULL),
(4, 'Adventure', NULL, NULL, NULL),
(5, 'FPS', NULL, NULL, NULL),
(6, 'Fighting', NULL, NULL, NULL),
(7, 'Sports', NULL, NULL, NULL),
(8, 'Racing', NULL, NULL, NULL),
(9, 'Combat', NULL, NULL, NULL),
(10, 'Open World', NULL, NULL, NULL),
(11, 'Platform', NULL, NULL, NULL),
(12, 'Strategy', NULL, NULL, NULL),
(13, 'Beat \'em up', NULL, NULL, NULL),
(14, 'Hack and Slash', NULL, NULL, NULL),
(15, 'TPS', NULL, NULL, NULL),
(16, 'Survival', NULL, NULL, NULL),
(17, 'Horror', NULL, NULL, NULL),
(18, 'Role-playing', NULL, NULL, NULL),
(19, 'Simulation', NULL, NULL, NULL),
(20, 'Music', NULL, NULL, NULL),
(21, 'Crime', NULL, NULL, NULL),
(22, 'War', NULL, NULL, NULL),
(23, 'Interactive Movie', NULL, NULL, NULL),
(24, 'Psychological Horror', NULL, NULL, NULL),
(25, 'Run and Gun', NULL, NULL, NULL),
(26, 'Collectible Cards', NULL, NULL, NULL),
(27, 'Eroge', NULL, NULL, NULL),
(28, 'Puzzle', NULL, NULL, NULL),
(29, 'Visual Novel', NULL, NULL, NULL),
(30, 'Full Motion', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `friend_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_05_07_155319_gamerli_nice', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `platforms`
--

CREATE TABLE `platforms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `platforms`
--

INSERT INTO `platforms` (`id`, `name`, `company_id`, `created_at`, `updated_at`) VALUES
(1, 'PC', 2, '2021-05-17 08:22:12', '2021-05-17 08:22:12'),
(2, 'PlayStation 2', 4, '2021-05-17 08:22:12', '2021-05-17 08:22:12'),
(3, 'Microsoft Windows', 3, '2021-05-17 08:22:12', '2021-05-17 08:22:12'),
(4, 'Xbox', 3, '2021-05-17 08:22:12', '2021-05-17 08:22:12'),
(5, 'Xbox One', 3, '2021-05-17 08:22:12', '2021-05-17 08:22:12'),
(6, 'Xbox 360', 3, '2021-05-17 08:22:12', '2021-05-17 08:22:12'),
(7, 'PlayStation 4', 4, '2021-05-17 08:22:12', '2021-05-17 08:22:12'),
(8, 'PlayStation Portable', 4, '2021-05-17 08:22:12', '2021-05-17 08:22:12'),
(9, 'Nintendo 3DS', 5, '2021-05-17 08:22:12', '2021-05-17 08:22:12'),
(10, 'PlayStation3', 4, '2021-05-17 08:22:12', '2021-05-17 08:22:12'),
(11, 'Mac OS Classic', 2, '2021-05-17 08:22:12', '2021-05-17 08:22:12'),
(12, 'MS-DOS', 2, '2021-05-17 08:22:12', '2021-05-17 08:22:12'),
(13, 'Nintendo GameCube', 5, '2021-05-17 08:22:12', '2021-05-17 08:22:12'),
(14, 'iOS', 7, '2021-05-17 08:22:12', '2021-05-17 08:22:12'),
(15, 'Wii', 5, '2021-05-17 08:22:12', '2021-05-17 08:22:12'),
(16, 'PlayStation', 4, '2021-05-17 08:22:12', '2021-05-17 08:22:12'),
(17, 'Game Boy', 5, '2021-05-17 08:22:12', '2021-05-17 08:22:12'),
(18, 'Nintendo 64', 5, '2021-05-17 08:22:12', '2021-05-17 08:22:12'),
(19, 'Android,', 7, '2021-05-17 08:22:12', '2021-05-17 08:22:12'),
(20, 'GNULinux', 2, '2021-05-17 08:22:12', '2021-05-17 08:22:12'),
(21, 'AmigaOS', 2, '2021-05-17 08:22:12', '2021-05-17 08:22:12'),
(22, 'DOS', 2, '2021-05-17 08:22:12', '2021-05-17 08:22:12'),
(23, 'Sega Saturn', 6, '2021-05-17 08:22:12', '2021-05-17 08:22:12'),
(24, 'Mega Drive', 6, '2021-05-17 08:22:12', '2021-05-17 08:22:12'),
(25, 'Google Stadia', 6, '2021-05-17 08:22:12', '2021-05-17 08:22:12'),
(26, 'Multi', 1, '2021-05-17 08:22:12', '2021-05-17 08:22:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_prefered` int(11) NOT NULL DEFAULT 0,
  `profiledescription` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` enum('user','staff','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `email_verified_at`, `password`, `order_prefered`, `profiledescription`, `avatar`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Carlos', 'Adrian', 'malero@test.com', NULL, '$2y$10$6dqdA5BMIAxvHChX7kaF7uTSrWQERLOz5v21zVYdZ21DMYezUEbXS', 0, NULL, NULL, '2021-05-17 11:44:01', '2021-05-17 12:18:55', 'admin'),
(2, 'Prof. Valentina Rippin', 'DeaAZkLQ9f', 'cristian87@kunde.info', NULL, '$2y$10$g/MzvGFxs89Aw1FW5ow6iuSlsoNNjY4WBh3zHFXGvUvwdLXjltOli', 1, NULL, NULL, '2021-05-18 07:25:40', '2021-05-18 07:25:40', 'admin'),
(3, 'Tomasa Effertz III', 'LMHdSFE8FM', 'ellen76@jacobson.org', NULL, '$2y$10$Up.rXgOSAaUYs7iCv1kCYuQpuEEeQyZNXeTwtCVwzExU.vF72Auum', 0, NULL, NULL, '2021-05-18 07:26:43', '2021-05-18 07:26:43', 'admin'),
(4, 'Cullen Moore', 'yZy3zYlUO7', 'antwan30@yahoo.com', NULL, '$2y$10$ecQ55HT/Crcdlqb1FmMQKOuSClU7rfx/xS9MsxeHf3XXyJOSTLkIy', 1, NULL, NULL, '2021-05-18 07:27:45', '2021-05-18 07:27:45', 'staff'),
(5, 'Prof. Arnulfo Klocko', 'TdhGWrnuKZ', 'walsh.nelson@hotmail.com', NULL, '$2y$10$jh/k8Gany.dMwlEh/cUOK.uT.7mJeXzufp9Fj7Nf5ZdGXjwlwXtNK', 1, NULL, NULL, '2021-05-18 07:28:03', '2021-05-18 07:28:03', 'staff'),
(7, 'Reggie Hickle', '3DXxApACrC', 'zoe97@schultz.biz', NULL, '$2y$10$DnEC9MF3avsb7XUJVylBhezmwW7dQhrLgUEaqwblYrchs3SJc69ly', 0, NULL, NULL, '2021-05-18 07:28:15', '2021-05-18 07:28:15', 'staff'),
(9, 'Mr. Dexter Hermann V', 'NqAezGBgfN', 'joannie72@kemmer.com', NULL, '$2y$10$jTJlr5v6qHFkoBV3BxVrn.7.3q8QwCi1C6XfFQ4ASKO.dnExhxSO6', 1, NULL, NULL, '2021-05-18 07:28:37', '2021-05-18 07:28:37', 'admin'),
(10, 'Carlos', 'Jurado', 'xnominatorxx@gmail.com', NULL, '$2y$10$DH/0VZ3qLPj5rAcrmTioCuPdLVqmtULBgbq2oGUAK.dy6ryeGPHSm', 0, NULL, NULL, '2021-05-18 07:37:36', '2021-05-18 07:37:36', 'user'),
(11, 'Bret Muller', '9OEbYH30ST', 'uswaniawski@breitenberg.biz', NULL, '$2y$10$Nz7f1YJ5glDNn/BQsl8o7eC2mco980JVW9VQnJ7tq5M4UiMuhBXha', 0, NULL, NULL, '2021-05-18 07:38:37', '2021-05-18 07:38:37', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `comments_user_id_game_id_unique` (`user_id`,`game_id`),
  ADD KEY `comments_game_id_foreign` (`game_id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `friends_user_id_friend_id_unique` (`user_id`,`friend_id`),
  ADD KEY `friends_friend_id_foreign` (`friend_id`);

--
-- Indexes for table `gamelists`
--
ALTER TABLE `gamelists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gamelists_user_id_foreign` (`user_id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`),
  ADD KEY `games_platform_id_foreign` (`platform_id`);

--
-- Indexes for table `game_gamelist`
--
ALTER TABLE `game_gamelist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `game_gamelist_game_id_foreign` (`game_id`),
  ADD KEY `game_gamelist_gamelist_id_foreign` (`gamelist_id`);

--
-- Indexes for table `game_genre`
--
ALTER TABLE `game_genre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `game_genre_game_id_foreign` (`game_id`),
  ADD KEY `game_genre_genre_id_foreign` (`genre_id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_friend_id_foreign` (`friend_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `platforms`
--
ALTER TABLE `platforms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `platforms_name_unique` (`name`),
  ADD KEY `platforms_company_id_foreign` (`company_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gamelists`
--
ALTER TABLE `gamelists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `game_gamelist`
--
ALTER TABLE `game_gamelist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `game_genre`
--
ALTER TABLE `game_genre`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `platforms`
--
ALTER TABLE `platforms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_game_id_foreign` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`),
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `friends`
--
ALTER TABLE `friends`
  ADD CONSTRAINT `friends_friend_id_foreign` FOREIGN KEY (`friend_id`) REFERENCES `friends` (`id`),
  ADD CONSTRAINT `friends_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `gamelists`
--
ALTER TABLE `gamelists`
  ADD CONSTRAINT `gamelists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `games_platform_id_foreign` FOREIGN KEY (`platform_id`) REFERENCES `platforms` (`id`);

--
-- Constraints for table `game_gamelist`
--
ALTER TABLE `game_gamelist`
  ADD CONSTRAINT `game_gamelist_game_id_foreign` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`),
  ADD CONSTRAINT `game_gamelist_gamelist_id_foreign` FOREIGN KEY (`gamelist_id`) REFERENCES `gamelists` (`id`);

--
-- Constraints for table `game_genre`
--
ALTER TABLE `game_genre`
  ADD CONSTRAINT `game_genre_game_id_foreign` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`),
  ADD CONSTRAINT `game_genre_genre_id_foreign` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`);

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_friend_id_foreign` FOREIGN KEY (`friend_id`) REFERENCES `friends` (`id`);

--
-- Constraints for table `platforms`
--
ALTER TABLE `platforms`
  ADD CONSTRAINT `platforms_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
