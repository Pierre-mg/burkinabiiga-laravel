-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 22 nov. 2020 à 16:08
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
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
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
  `date` date NOT NULL,
  `place` varchar(255) NOT NULL,
  `content` text NOT NULL,
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
-- Structure de la table `egalities`
--

DROP TABLE IF EXISTS `egalities`;
CREATE TABLE IF NOT EXISTS `egalities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `egalities`
--

INSERT INTO `egalities` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Nous souhaitons à travers notre projet agir pour l\'égalité filles garçons au sein de l\'éducation', 'Maintenant que nous sommes bien implanté au Burkina Faso (les premiers colis ont été envoyés et nos projets sont en place) nous souhaitons mettre l\'accent sur l\'égalité filles garçons au sein de l\'éducation.\r\n\r\nPour comprendre notre souhait et avoir une idée de la situation actuelle nous vous proposons ces quelques chiffres ainsi que cet article :\r\n\r\n- 63% des adultes analphabètes dans le monde sont des femmes\r\n- 1 fille sur 4 ne va pas à l\'école dans un pays en développement\r\n- 64 millions de filles sont victimes du travail forcé\r\n- 12 millions de filles sont mariées de forces chaque année (avant 18 ans) , ce qui fait 33000 filles chaque jour\r\n- Les filles de 10 à 14 ans passent 50% de temps en plus à effectuer des tâches ménagères que les garçons du même âge.', '2020-11-18', '2020-11-21'),
(2, 'Pourquoi de telles inégalités apparaissent ?', '- Les traditions culturelles : les filles sont souvent mariées jeunes, leur éducation n\'importe pas\r\n- L\'ignorance des droits et des lois\r\n- La pauvreté : les frais de scolarité sont souvent chers, les garçons sont donc envoyés en priorité à l\'école\r\n- La violence à l\'école et la dangerosité des trajets : à l\'école les filles sont exposées à des violences comme les abus sexuels par exemple\r\n- La menstruation : 1 fille sur 10 ne va pas à l\'école lorsqu\'elle a ses règles. Cela est du à un manque d\'infrastructures sanitaires ou de protections périodiques\r\n- Les mariages forcés\r\n- Les travaux forcés\r\n- Les grossesses précoces\r\n- Les situations d\'urgences. Lors de crises ou de conflits, la vulnérabilité des filles et les discriminations sont exacerbées. Les filles sont alors les premières touchées, les premières à être retirées des écoles, les premières à devoir rester à la maison pour soulager la pression économique qui pèse sur les foyers. Cette situation entraîne un augmentation du travail ou des mariages forcés.\r\n\r\nAu vue de la situation de crise dans laquelle se situe le Burkina Faso : les filles et leur éducation sont les premières victimes.', '2020-11-18', '2020-11-18'),
(3, 'Pourquoi l\'éducation d\'une fille est importante ?', '- L\'éducation d\'une fille est reconnue comme le moyen le plus puissant pour s\'émanciper et sortir de la pauvreté\r\n- Chaque année passée sur les bancs de l\'école permet à une fille d\'augmenter son futur revenu de 10 à 20% et ainsi de faire progresser la croissance de son pays.\r\n\r\nL\'éducation des filles est donc primordiale pour l\'autonomisation de ces dernières mais elles est également bénéfique pour son pays.', '2020-11-18', '2020-11-18'),
(4, 'Nos futurs projets pour mettre le cap vers l\'égalité', '- Sensibilisation au sujet dans les écoles françaises\r\n- Récolte de protections hygiéniques\r\n- Réaliser un kit \"égalité\" pour permettre aux professeurs burkinabés de promouvoir l\'égalité au sein de leur classe\r\n- Mise en place de \"kit\" d\'informations et de sensibilisations sur les menstruations\r\n- Projets avec des écoles française de réalisation d\'affiches pour l\'égalité. Affiches qui seront envoyées au Burkina Faso.', '2020-11-18', '2020-11-18');

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
