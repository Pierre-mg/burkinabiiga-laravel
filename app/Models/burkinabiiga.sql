-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 03 jan. 2021 à 15:29
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `burkinabiiga`
--

-- --------------------------------------------------------

--
-- Structure de la table `actions`
--

DROP TABLE IF EXISTS `actions`;
CREATE TABLE IF NOT EXISTS `actions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `actions`
--

INSERT INTO `actions` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Objectifs', 'Permettre aux enfants qui se sont réfugiés dans la ville de Kaya de pouvoir repartir à l\'école dans de bonnes conditions.\r\n\r\nPermettre aux enfants originaires de la ville de Kaya de poursuivre leur éducation malgré les difficultés que connaît la région.\r\n\r\nGarantir l\'accès à l\'éducation des filles et ainsi développer et affirmer l\'égalité des filles et des garçons au sein de l\'éducation.', '2020-11-18', '2020-11-21'),
(2, 'Actions', 'Récoltes :\r\n\r\nRécolte de tout type de fourniture et de matériel scolaire en bon état dans des établissements scolaires et au près de particuliers principalement du Sud de la France :\r\n\r\n- Manuels scolaires de niveau collège\r\n\r\n- Manuels scolaires de niveau lycée\r\n\r\n- Dictionnaires\r\n\r\n- Matériel basique (trousses, stylos, cahiers, peinture, etc.)\r\n\r\n- Matériel de mathématiques et géométrie (calculatrice, compas, règles, etc.)\r\n\r\nNous récoltons également des solutions de protections périodiques qui correspondent aux attentes des jeunes filles du Burkina Faso. Ainsi nous souhaitons que leur menstruations ne soient pas un frein à leur éducation.\r\n\r\nRécolte de fonds pour financer les envois au Burkina Faso (crowdfunding encours). En effet nous récoltons 10 000 euros afin de financer les envois de matériels (un envoi de 100 kg coûte dans les 600-700 euros).\r\n\r\nSensibilisation : \r\n\r\n- Intervention dans des établissements scolaires français sur le droit à l\'éducation, le sexisme, les droits des filles et des femmes.\r\n\r\n- Mise en place de projets et de partenariats avec des acteurs publics comme des lycées et des collèges, sur différents axes. Ces actions visent mener des politiques d\'affichages, de sensibilisation, mettre en place des correspondances, et des actions de financements pédagogiques.\r\n\r\nActions flashs :\r\n\r\n- Petits déjeuners et goûters de sensibilisation et de présentation de l\'association (auprès d\'écoles, d\'universités...).\r\n\r\n- Vente de produits dérivés à l\'image de l\'association pour financer une partie des envois de colis vers Kaya (stylos, calendriers de l\'avant, calendriers scolaires, porte-clés).\r\n\r\n- Opération papiers cadeaux lors des périodes de Noël et Premier de l\'an dans des centres commerciaux.\r\n\r\nEnvois :\r\n\r\n- Répartir les fournitures reçues, faire les colis.\r\n\r\n- Envoyer les colis au Burkina Faso par voie maritime afin que notre intermédiaire les récupère.\r\n\r\n- Distribution du matériel aux enfants des différentes écoles de Kaya', '2020-11-18', '2020-11-18'),
(3, 'Où nous trouver ?', 'Grâce à nos études et activités professionnelles nous pouvons agir sur tout le Sud de la France notamment au niveau des actions flashs telles que les opérations papiers cadeaux ou de sensibilisation :\r\n\r\n- Nouvelle-Aquitaine et particulièrement le Pays Basque\r\n\r\n- Occitanie (Toulouse)\r\n\r\n- Provence-Alpes-Côte d\'Azur\r\n\r\n- Paris\r\n\r\nCependant les récoltes de matériel se font dans toute la France, en effet nous finançons vos envois jusqu\'à nos locaux. ', '2020-11-18', '2020-11-18');

-- --------------------------------------------------------

--
-- Structure de la table `actualities`
--

DROP TABLE IF EXISTS `actualities`;
CREATE TABLE IF NOT EXISTS `actualities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `place` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `actualities`
--

INSERT INTO `actualities` (`id`, `date`, `place`, `content`, `created_at`, `updated_at`) VALUES
(1, '2020-09-01', 'Bollène, 84', 'Partenariat et projet avec le lycée Lucie Aubrac de Bollène. Plusieurs projets sont en cours avec ce lycée, notamment grâce à Dounia, une professeure rencontrée lors de notre action papier cadeaux. \r\n​\r\n- Campagne de sensibilisation \r\n- Création d\'affiches et de logo\r\n- Création d\'une boutique en ligne au profit de notre association\r\n- Partenariat possible pour des cours sur les droits des femmes', '2020-11-19', '2020-11-21'),
(2, '2020-04-01', 'Kaya, Burkina Faso', 'Envoi des premiers cartons de fournitures. Ils ont été reçus et distribués.\r\n\r\nRéalisation de podcasts / d\'interviews de jeunes filles : comment le confinement et la crise sanitaire les impacts. ', '2020-11-19', '2020-11-19'),
(3, '2020-04-01', 'Paris 75', 'Burkina Biiga a intégré la Coordination Française pour le Lobby Européen des Femmes (CLEF).\r\n\r\nDe nombreux projets seront montés grâce à ce partenariat + Campagne d\'adhésion à notre association et lancement d\'une cagnotte leetchi', '2020-11-19', '2020-11-19'),
(4, '2020-03-01', 'Biarritz 64', 'Mise en place d\'un partenariat durable avec le collège Villa Fal : un club doit être créé à la rentrée 2020.', '2020-11-19', '2020-11-19'),
(5, '2020-02-01', 'Biarritz 64', 'Présentation aux élèves de 6ème et 5ème du collège Villa Fal du projet de correspondance.\r\nEn effet nous travaillons depuis plusieurs mois avec Madame Sorondo (professeure en France) et Monsieur Mpongo (professeur au Burkina Faso) à l\'élaboration d\'une correspondance entre deux établissements. \r\nDes sujets comme le mode de vie, les habitudes mais également les rapports filles garçons ont prévu d\'être abordé. \r\n​\r\nLa Covid a mis un frein à ce projet', '2020-11-19', '2020-11-19'),
(6, '2019-12-01', 'Avignon, 84', 'Opération papiers cadeaux au Carrefour de Courtine du 12 au 20 décembre.', '2020-11-19', '2020-11-19'),
(7, '2019-11-01', 'Lycée Cantau, Anglet 64', 'La Coopérative Scolaire du Lycée René Cantau d\'Anglet (64) nous a fait don de 240 manuels scolaires de 1ère générale.\r\n\r\nNous remercions Madame Trinquet et son association pour cette initiative ', '2020-11-19', '2020-11-19'),
(8, '2019-10-01', 'Sciences Po Toulouse, Toulouse, 31', 'Grâce à l\'association So Acte de Sciences Po Toulouse nous avons pu réaliser une collecte de fournitures scolaires (trousses, cahiers, etc.). Nous avons récolté tout un carton.\r\n​\r\nMerci !', '2020-11-19', '2020-11-19'),
(9, '2019-10-01', 'Lycée René Cassin, Bayonne, 64', 'Grâce à M. Claverie et Solène Robert  le Lycée René Cassin de Bayonne nous a fait don de 180 livres de Terminale S.\r\n\r\nC\'était notre premier don, merci à vous ! ', '2020-11-19', '2020-11-19'),
(10, '2019-09-01', 'Création de l\'association', 'En septembre 2019 nous avons lancé la création de l\'association Burkina Biiga, création qui a aboutit officiellement en novembre 2019.', '2020-11-19', '2020-11-19'),
(11, '2019-07-01', 'Avignon, 84', 'Lors d\'un dîner sur Avignon, nous ( Julien Pellet et Léa Robert) avons rencontré Lambert Sawadogo. Lors de cette soirée, il nous a beaucoup parlé de la situation au Burkina Faso ainsi que de son nouveau poste de directeur des écoles du diocèse de Kaya. La situation décrite était loin de ce que nous imaginions ce qui nous a beaucoup fait réfléchir. Après de nombreuses recherches nous avons repris contact avec M. Sawadogo pour lui proposer notre projet. Projet qu\'il a tout de suite accepté et remercié. L\'association Burkina Biiga est ainsi née.', '2020-11-19', '2020-11-19');

-- --------------------------------------------------------

--
-- Structure de la table `associations`
--

DROP TABLE IF EXISTS `associations`;
CREATE TABLE IF NOT EXISTS `associations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `associations`
--

INSERT INTO `associations` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Burkina Biiga - Enfants du Burkina Fasso', 'Burkina Biiga est une association à but non lucratif. Née d’une rencontre avec l’Abbé du diocèse de Kaya : Lambert Sawadogo ; Léa Robert et Julien Pellet. M. Sawadogo nous a exposé la situation précaire dans laquelle se trouve le Burkina Faso, tant au niveau sanitaire qu’au niveau éducatif. Il nous a également fait part d\'un constat alarmant sur l\'éducation des filles : en effet en temps de migrations l\'éducation des jeunes filles n\'est plus une priorité et ce sont les premières touchées par la déscolarisation Suite à ce récit et des recherches complémentaires, nous avons décidé de l’aider et de créer l’association.\r\n\r\nBurkina Biiga est une association qui cherche à aider les enfants réfugiés ou résidents, de la ville de Kaya au Burkina Faso, en améliorant leurs conditions d’éducation. Nous souhaitons également permettre aux jeunes filles de la ville de Kaya de continuer à aller à l\'école ou de pouvoir y repartir.\r\n\r\nNous avons choisi de nommer notre association Burkina Biiga car notre priorité est les enfants et qu\'il nous semblait important que cela soit signifié dans le nom de notre association. En effet \"biiga\" signifie enfant en mooré, une des langues principales du Burkina Faso, ce qui tout naturellement a donné Burkina Biiga.\r\n\r\nNous avons pu constaté que la ville de Kaya a connue ces dernières années des difficultés car des milliers de burkinabés fuyant les attaques de DAESH dans le nord du pays y sont venus se réfugier. De fait certains services ont du mal à être assurés, c\'est le cas de l\'éducation.\r\n\r\nPar ce projet, nous avons à coeur de promouvoir deux valeurs : l\'humanité, l\'inclusion et par dessus tout l\'égalité des sexes.', '2021-01-02', '2021-01-02'),
(2, 'Pourquoi l\'éducation ?', 'Nous avons tous les deux eu la chance de pouvoir étudier dans de très bonnes conditions, or ce n’est pas le cas de tous les enfants dans le monde. Plus particulièrement, nous trouvons injuste le fait que des enfants qui ont toujours été scolarisés ne le soient plus, à cause de problèmes tels que le terrorisme d\'une part, et de problèmes logistiques d\'autre part. Selon le droit international chaque enfant a droit à l\'éducation et devrait voir ce droit appliqué et respecté. Ainsi, la rencontre avec l’Abbé a été pour nous l’occasion d’agir concrètement pour faire valoir ce droit fondamental.', '2021-01-01', '2021-01-02'),
(3, 'Situation au Burkina Fasso', 'Du fait de l\'instabilité de la région sahélienne, le pays subit depuis 2016 les attaques de DAESH et d\'autres groupes terroristes de la région, ces attaques sont amplifiées dans le nord du pays ainsi qu\'au niveau des régions frontalières.', '2021-01-02', '2021-01-02'),
(4, 'A qui s\'attaque DAECH ?', 'A tous les lieux de cultes qu\'ils soient chrétiens ou musulmans. Les écoles sont également ciblées, les professeurs y sont menacés, kidnappés et parfois assassinés. Le groupe terroriste réclame en effet que l\'école soit faite en arabe et non pas en français qui est la langue officielle du pays.', '2021-01-02', '2021-01-02'),
(5, 'Quel est le résultat de ces attaques à répétitions ?', '- Des migrations forcées vers les villes du centre et du sud du pays et donc vers Kaya. Sous la menace terroriste des milliers de personnes ont fuit la zone laissant derrière eux : maison, propriété, agriculture, etc.\r\n\r\n- Une crise migratoire\r\n\r\n- Une crise sanitaire\r\n\r\n- Une crise éducative : en cause la fermeture de milliers d\'écoles.', '2021-01-02', '2021-01-02'),
(6, 'Quelques chiffres :', '- 289 000 réfugiés depuis 2015\r\n\r\n- 2000 écoles fermées\r\n\r\n- Des milliers d\'enfants privés d\'éducation\r\n\r\n- Plus de 1500 personnes assassinées\r\n\r\n- Ces chiffres sont en constantes augmentations car les attentats se poursuivent de jour en jour.', '2021-01-02', '2021-01-02'),
(7, 'Notre intermédiaire', 'Lambert Sawadogo\r\n\r\nDirecteur des écoles du diocèse de kaya, dévoué et bienveillant, il est très impliqué et influant dans la ville de Kaya. Il agit au quotidien sans distinction de religion, en partenariat avec les Imams de sa région, pour luter contre les multiples attaques terroristes ciblées envers les écoles, les mosquées et les églises du Burkina Faso. Il veille à la scolarisation des enfants et soutien les villages dans des projets sanitaires comme la construction de puits. Ce bienfaiteur est aujourd’hui notre seul et unique intermédiaire sur place ce qui fait notre force car nous savons exactement avec qui nous traitons. Cependant notre équipe devrait s\'agrandir afin de pouvoir honorer tous nos envois.', '2021-01-02', '2021-01-02');

-- --------------------------------------------------------

--
-- Structure de la table `associationteams`
--

DROP TABLE IF EXISTS `associationteams`;
CREATE TABLE IF NOT EXISTS `associationteams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `associationteams`
--

INSERT INTO `associationteams` (`id`, `name`, `content`, `tel`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Léa Robert', 'Présidente de l\'association, elle est également en charge de la communication et de la gestion des projets.', 'Tél : 06 85 84 92 13', 'burkinabiiga1@gmail.com', '2021-01-03', '2021-01-03'),
(2, 'Julien Pellet', 'Vice-président de l\'association, il s\'occupe également du pôle trésorerie et des partenariats.', 'Tél : 06 40 73 98 60', NULL, '2021-01-03', '2021-01-03'),
(3, 'Lambert Sawadogo', 'Lambert est notre intermédiaire sur place et nous aide également dans la gestion des projets.', '', '', '2021-01-03', '2021-01-03');

-- --------------------------------------------------------

--
-- Structure de la table `donations`
--

DROP TABLE IF EXISTS `donations`;
CREATE TABLE IF NOT EXISTS `donations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `donations`
--

INSERT INTO `donations` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Burkina Biiga - Enfants du Burkina Fasso', 'Burkina Biiga est une association à but non lucratif. Née d’une rencontre avec l’Abbé du diocèse de Kaya : Lambert Sawadogo ; Léa Robert et Julien Pellet. M. Sawadogo nous a exposé la situation précaire dans laquelle se trouve le Burkina Faso, tant au niveau sanitaire qu’au niveau éducatif. Il nous a également fait part d\'un constat alarmant sur l\'éducation des filles : en effet en temps de migrations l\'éducation des jeunes filles n\'est plus une priorité et ce sont les premières touchées par la déscolarisation Suite à ce récit et des recherches complémentaires, nous avons décidé de l’aider et de créer l’association.\r\n\r\nBurkina Biiga est une association qui cherche à aider les enfants réfugiés ou résidents, de la ville de Kaya au Burkina Faso, en améliorant leurs conditions d’éducation. Nous souhaitons également permettre aux jeunes filles de la ville de Kaya de continuer à aller à l\'école ou de pouvoir y repartir.\r\n\r\nNous avons choisi de nommer notre association Burkina Biiga car notre priorité est les enfants et qu\'il nous semblait important que cela soit signifié dans le nom de notre association. En effet \"biiga\" signifie enfant en mooré, une des langues principales du Burkina Faso, ce qui tout naturellement a donné Burkina Biiga.\r\n\r\nNous avons pu constaté que la ville de Kaya a connue ces dernières années des difficultés car des milliers de burkinabés fuyant les attaques de DAESH dans le nord du pays y sont venus se réfugier. De fait certains services ont du mal à être assurés, c\'est le cas de l\'éducation.\r\n\r\nPar ce projet, nous avons à coeur de promouvoir deux valeurs : l\'humanité, l\'inclusion et par dessus tout l\'égalité des sexes.', '2021-01-02', '2021-01-02'),
(2, 'Dons de matériel', 'Afin d\'accompagner M. Sawadogo dans sa mission nous lui envoyons des fournitures scolaires afin qu\'il puisse améliorer les conditions d\'éducation des enfants vivants à Kaya. Mais pour réaliser ces envois nous avons besoin de ces fournitures. Et c\'est vous qui les avez ! Nous avons tous au fond de nos placards gardé des stylos, des cahiers à peine entamés, des livres que l\'on a oublié de rapporter. Vous avez l\'opportunité de leur donner une seconde vie en nous les donnant.', '2021-01-02', '2021-01-02');

-- --------------------------------------------------------

--
-- Structure de la table `egalities`
--

DROP TABLE IF EXISTS `egalities`;
CREATE TABLE IF NOT EXISTS `egalities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `egalities`
--

INSERT INTO `egalities` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Nous souhaitons à travers notre projet agir pour l\'égalité filles garçons au sein de l\'éducation', 'Maintenant que nous sommes bien implanté au Burkina Faso (les premiers colis ont été envoyés et nos projets sont en place) nous souhaitons mettre l\'accent sur l\'égalité filles garçons au sein de l\'éducation.\r\n\r\nPour comprendre notre souhait et avoir une idée de la situation actuelle nous vous proposons ces quelques chiffres ainsi que l\'article ci-dessous :\r\n\r\n- 63% des adultes analphabètes dans le monde sont des femmes\r\n- 1 fille sur 4 ne va pas à l\'école dans un pays en développement\r\n- 64 millions de filles sont victimes du travail forcé\r\n- 12 millions de filles sont mariées de forces chaque année (avant 18 ans) , ce qui fait 33000 filles chaque jour\r\n- Les filles de 10 à 14 ans passent 50% de temps en plus à effectuer des tâches ménagères que les garçons du même âge.', '2020-11-18', '2021-01-03'),
(2, 'Pourquoi de telles inégalités apparaissent ?', '- Les traditions culturelles : les filles sont souvent mariées jeunes, leur éducation n\'importe pas\r\n- L\'ignorance des droits et des lois\r\n- La pauvreté : les frais de scolarité sont souvent chers, les garçons sont donc envoyés en priorité à l\'école\r\n- La violence à l\'école et la dangerosité des trajets : à l\'école les filles sont exposées à des violences comme les abus sexuels par exemple\r\n- La menstruation : 1 fille sur 10 ne va pas à l\'école lorsqu\'elle a ses règles. Cela est du à un manque d\'infrastructures sanitaires ou de protections périodiques\r\n- Les mariages forcés\r\n- Les travaux forcés\r\n- Les grossesses précoces\r\n- Les situations d\'urgences. Lors de crises ou de conflits, la vulnérabilité des filles et les discriminations sont exacerbées. Les filles sont alors les premières touchées, les premières à être retirées des écoles, les premières à devoir rester à la maison pour soulager la pression économique qui pèse sur les foyers. Cette situation entraîne un augmentation du travail ou des mariages forcés.\r\n\r\nAu vue de la situation de crise dans laquelle se situe le Burkina Faso : les filles et leur éducation sont les premières victimes.', '2020-11-18', '2020-11-18'),
(3, 'Pourquoi l\'éducation d\'une fille est importante ?', '- L\'éducation d\'une fille est reconnue comme le moyen le plus puissant pour s\'émanciper et sortir de la pauvreté\r\n- Chaque année passée sur les bancs de l\'école permet à une fille d\'augmenter son futur revenu de 10 à 20% et ainsi de faire progresser la croissance de son pays.\r\n\r\nL\'éducation des filles est donc primordiale pour l\'autonomisation de ces dernières mais elles est également bénéfique pour son pays.', '2020-11-18', '2020-11-18'),
(4, 'Nos futurs projets pour mettre le cap vers l\'égalité', '- Sensibilisation au sujet dans les écoles françaises\r\n- Récolte de protections hygiéniques\r\n- Réaliser un kit \"égalité\" pour permettre aux professeurs burkinabés de promouvoir l\'égalité au sein de leur classe\r\n- Mise en place de \"kit\" d\'informations et de sensibilisations sur les menstruations\r\n- Projets avec des écoles française de réalisation d\'affiches pour l\'égalité. Affiches qui seront envoyées au Burkina Faso.', '2020-11-18', '2020-11-18');

-- --------------------------------------------------------

--
-- Structure de la table `homefooters`
--

DROP TABLE IF EXISTS `homefooters`;
CREATE TABLE IF NOT EXISTS `homefooters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `homefooters`
--

INSERT INTO `homefooters` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Dons', 'Chacun de vos dons compte :\r\n\r\n- Don financier\r\n- Don matériel', '2021-01-03', '2021-01-03'),
(2, 'Rejoignez nous', '- Participation aux collectes de matériel\r\n- Parlez de nous !\r\n- Rejoignez nous sur les réseaux-sociaux', '2021-01-03', '2021-01-03'),
(3, 'Mission', 'Récolter du matériel scolaire afin de l\'envoyer à Kaya au Burkina Faso\r\n\r\nPromouvoir l\'égalité filles garçons à l\'école', '2021-01-03', '2021-01-03');

-- --------------------------------------------------------

--
-- Structure de la table `homes`
--

DROP TABLE IF EXISTS `homes`;
CREATE TABLE IF NOT EXISTS `homes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text DEFAULT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `homes`
--

INSERT INTO `homes` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Née d’une rencontre entre Julien Pellet, Léa Robert et l’Abbé de la région de Kaya, Burkina Biiga est une association humanitaire à but non lucratif', '2020-12-28', '2020-12-28'),
(2, 'Elle a deux objectifs principaux :\r\n\r\n- Apporter une aide matérielle à des écoles de la ville de Kaya\r\n- Garantir et promouvoir l\'égalité filles garçons au sein de l\'éducation', '2020-12-28', '2020-12-28'),
(3, 'La région nord du Burkina Faso a subit ces dernières années de nombreuses attaques terroristes contre des églises, des mosquées et des écoles, donnant lieu à la déscolarisation de milliers d’enfants, une crise sanitaire et des migrations de plus en plus importantes. Une des premières villes touchées par ces phénomènes est Kaya.', '2020-12-28', '2020-12-28'),
(4, 'Il est important pour nous de préciser que les filles sont les premières touchées par ces crises et leur éducation en est fortement impactée.', '2020-12-28', '2020-12-28'),
(5, 'Cette association a donc pour but de monter des projets visant à aider l’abbé dans sa nouvelle mission de directeur des écoles de Kaya et ainsi remplir nos deux objectifs.', '2020-12-28', '2020-12-28');

-- --------------------------------------------------------

--
-- Structure de la table `joins`
--

DROP TABLE IF EXISTS `joins`;
CREATE TABLE IF NOT EXISTS `joins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `joins`
--

INSERT INTO `joins` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Professionnels', 'Vous avez une entreprise et vous voulez faire une action solidaire ?\r\n\r\nVous pouvez nous aider ! Afin d\'envoyer les colis au Burkina Faso nous avons besoin de fonds, bien sûr ces derniers sont récompensés par des contreparties (communication). C\'est le principe de crowdfunding, pour participer, rendez-vous sur notre page Don.\r\n\r\nProjet\r\n\r\nVous pensez que nos initiatives peuvent intéresser votre établissement ou votre entreprise ? Contactez-nous pour organiser une collecte ou une action flash', '2020-12-29', '2020-12-29'),
(2, 'Médias', 'Nos initiatives vous intéressent ?\r\n\r\nParlez de nous ! Publiez-nous ! Contactez-nous ! Nous sommes ouverts à toutes publications.', '2020-12-29', '2020-12-29'),
(3, 'Établissements scolaires', 'Du matériel scolaire en trop ou à l\'abandon ?\r\n\r\nAvec la réforme du baccalauréat et des programmes, des milliers de livres ont été changé, nous vous les récupérons ! Contactez-nous nous pouvons organiser une récolte ou un transfert afin que ces manuels aient une nouvelle vie.', '2020-12-29', '2020-12-29'),
(4, 'Particuliers', 'Dons\r\n\r\nChaque don compte ! Vous pouvez nous soutenir à hauteur de vos moyens ! Rendez-vous sur notre page Don.\r\n\r\nVous pouvez également faire des dons de matériel : on a tous gardé des dizaines de stylos, trousses et cahiers de notre scolarité.\r\n\r\nPartage\r\nParlez de nous autour de vous, suivez-nous sur les réseaux sociaux, partagez nos pages !', '2020-12-29', '2020-12-29');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'pierrem.garcia@gmail.com', '$2y$10$wACZNKrRhQ4wGnfSMFuAcufpbgecWxw9NKS9Cp5Y9tMs2wFcda0je'),
(2, 'burkinabiiga1@gmail.com', '$2y$10$wE/4Ea4pC5o4qxL7bTB02etbDj8VtCxgTIu5vgAaZuJtGBrp.nhu.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
