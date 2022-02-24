-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 26 mai 2021 à 07:28
-- Version du serveur :  5.7.24
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_php`
--

CREATE DATABASE `projet_php`;
USE `projet_php`;
-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `auteur` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `image` text COLLATE utf8_bin,
  `titre` varchar(255) COLLATE utf8_bin NOT NULL,
  `contenu` text COLLATE utf8_bin NOT NULL,
  `date_de_publication` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `auteur`, `image`, `titre`, `contenu`, `date_de_publication`) VALUES
(1, 'Wikipédia', 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/Wolf_at_Woburn_Safari_Park.jpg/1280px-Wolf_at_Woburn_Safari_Park.jpg', 'Crier au loup (canis lupus)', 'Canis lupus est une espèce de canidés comprenant plusieurs sous-espèces sauvages, domestiques ou férales, toutes parfaitement interfécondes, comme le Loup gris commun (Canis lupus lupus), le Loup arctique (Canis lupus arctos), le Chien (Canis lupus familiaris), le Dingo (Canis lupus dingo) ou encore le Chien chanteur (Canis lupus hallstromi). Si les formes sauvages sont d\'origine holarctique, la domestication et le marronnage ont permis à l\'espèce de coloniser l\'ensemble des écozones terrestres.\r\n\r\nSous ses formes sauvages, le loup gris a été peu à peu exterminé par l\'Homme dans plusieurs zones de son aire de répartition originelle, en particulier au xixe siècle. Au xxie siècle, il ne reste plus qu\'environ 300 000 individus dans le monde, principalement dans des zones « de grands espaces » restés sauvages, telles que la taïga de Sibérie et du Canada ou les steppes et les massifs montagneux d\'Europe et d\'Asie centrale. Il est désormais protégé dans de nombreux pays occidentaux, où l\'on tente de préserver les populations restantes. Quelques programmes de sauvegarde ont permis aux loups gris de revenir dans des zones où ils avaient disparu, en particulier en Amérique du Nord.\r\n\r\nÀ l\'inverse, le chien, sa sous-espèce domestique Canis lupus familiaris, le premier animal à avoir été domestiqué par l\'homme il y a au moins 33 000 ans, s\'est mondialement répandu. Avec environ 900 millions d\'individus, il représente aujourd\'hui la quasi-totalité de l\'effectif mondial de l\'espèce.\r\n\r\nDu Chien descendent à leur tour les sous-espèces retournées à la vie sauvage que sont le Dingo (Canis lupus dingo) et le Chien chanteur (Canis lupus hallstromi), fruits de milliers d\'années d\'évolution isolée des autres groupes.\r\n\r\nLes loups sauvages ont toujours fasciné les humains au cours de l\'histoire, alimentant tous les domaines de la culture : la mythologie, la littérature, les arts mais aussi les peurs et les fantasmes collectifs. Le loup gris est ainsi l\'un des animaux les plus connus et les plus étudiés au monde, avec probablement plus de livres écrits à son sujet que toute autre espèce sauvage. Il a une longue histoire d\'association avec les humains, ayant été méprisé et chassé dans la plupart des communautés pastorales à cause de ses attaques contre le bétail, tout en étant respecté dans certaines sociétés agraires et de chasseurs-cueilleurs6. Bien que la peur du loup soit omniprésente dans de nombreuses sociétés, la majorité des attaques enregistrées contre des personnes ont été attribuées à des animaux souffrant de la rage. Les loups sains attaquent rarement l\'homme : depuis le début du xxe siècle, on ne dénombre dans le monde entier qu\'une ou deux attaques par an, les victimes étant principalement des enfants loin des agglomérations. La chasse intensive du loup par l\'homme ayant fortement marqué le caractère de l\'animal, il est en général craintif et méfiant vis à vis des humains. Parmi ces canidés proches n\'appartenant pas à l\'espèce Canis lupus mais également appelées « loup », on peut citer le loup à crinière (Chrysocyon brachyurus), le loup des Falkland (Dusicyon australis), le loup de l\'Est (Canis lycaon), le loup rouge (Canis rufus), le loup d\'Abyssinie (Canis simensis), le loup des Indes (Canis indica), etc.', '2021-05-25 15:15:06'),
(2, 'Wikipédia', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Plume_the_Cat.JPG/1280px-Plume_the_Cat.JPG', 'Moi vouloir être chaaaat (felis silvestris)', 'Le Chat domestique (Felis silvestris catus) est la sous-espèce issue de la domestication du Chat sauvage (Felis silvestris), mammifère carnivore de la famille des Félidés.\r\n\r\nIl est l’un des principaux animaux de compagnie et compte aujourd’hui une cinquantaine de races différentes reconnues par les instances de certification. Dans de très nombreux pays, le chat entre dans le cadre de la législation sur les carnivores domestiques à l’instar du chien et du furet. Essentiellement territorial, le chat est un prédateur de petites proies comme les rongeurs ou les oiseaux. Les chats ont diverses vocalisations dont les ronronnements, les miaulements, les feulements ou les grognements, bien qu’ils communiquent principalement par des positions faciales et corporelles et des phéromones.\r\n\r\nSelon les résultats de travaux menés en 2006 et 2007, le chat domestique est une sous-espèce du chat sauvage issue d’ancêtres appartenant à la sous-espèce du chat sauvage d’Afrique (Felis silvestris lybica). Les premières domestications auraient eu lieu il y a 8 000 à 10 000 ans au Néolithique dans le Croissant fertile, époque correspondant au début de la culture de céréales et à l’engrangement de réserves susceptibles d’être attaquées par des rongeurs, le chat devenant alors pour l’Homme un auxiliaire utile se prêtant à la domestication.\r\n\r\nTout d’abord vénéré par les Égyptiens, il fut diabolisé en Europe au Moyen Âge et ne retrouva ses lettres de noblesse qu’au xviiie siècle. En Asie, le chat reste synonyme de chance, de richesse ou de longévité. Ce félin a laissé son empreinte dans la culture populaire et artistique, tant au travers d’expressions populaires que de représentations diverses au sein de la littérature, de la peinture ou encore de la musique.', '2021-05-25 15:15:06'),
(3, 'Wikipédia', 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e9/NICO_looks_at_himself.jpg/1280px-NICO_looks_at_himself.jpg', 'Un caractère de chien (canis lupus familiaris)', 'Le Chien (Canis lupus familiaris) est la sous-espèce domestique de Canis lupus (Loup gris), un mammifère de la famille des Canidés (Canidae), laquelle comprend également le dingo, chien domestique retourné à l\'état sauvage.\r\n\r\nLe Loup est la première espèce animale à avoir été domestiquée par l\'Homme pour l\'usage de la chasse dans une société humaine paléolithique qui ne maîtrise alors ni l\'agriculture ni l\'élevage. La lignée du chien s\'est différenciée génétiquement de celle du Loup gris il y a environ 100 000 ans, et les plus anciens restes confirmés de la lignée des chiens modernes sont vieux, selon les sources, de 33 000 ans ou de 12 000 ans ; le bœuf5 (voir Domestication de Bos taurus) et la chèvre seront domestiquées vers −10 000. Depuis la Préhistoire, le chien a accompagné l\'être humain durant toute sa phase de sédentarisation, marquée par l\'apparition des premières civilisations agricoles. C\'est à ce moment qu\'il a acquis la capacité de digérer l\'amidon, et que ses fonctions d\'auxiliaire d\'Homo sapiens se sont étendues. Ces nouvelles fonctions ont entraîné une différenciation accrue de la sous-espèce et l\'apparition progressive de races canines identifiables. Le chien est aujourd\'hui utilisé à la fois comme animal de travail et comme animal de compagnie. Son instinct de meute, sa domestication précoce et les caractéristiques comportementales qui en découlent lui valent familièrement le surnom de « meilleur ami de l\'Homme ».\r\n\r\nCette place particulière dans la société humaine a conduit à l\'élaboration d\'une règlementation spécifique. Ainsi, là où les critères de la Fédération cynologique internationale ont une reconnaissance légale, l\'appellation chien de race est conditionnée à l\'enregistrement du chien dans les livres des origines de son pays de naissance. Selon le pays, des vaccins peuvent être obligatoires et certains types de chien, jugés dangereux, sont soumis à des restrictions. Le chien est généralement soumis aux différentes législations sur les carnivores domestiques. C\'est notamment le cas en Europe, où sa circulation est facilitée grâce à l\'instauration du passeport européen pour animal de compagnie.', '2021-05-25 15:15:06');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_utilisateur` int(11) DEFAULT NULL COMMENT 'L''id de l''utilisateur qui a posté le commentaire',
  `id_article` int(11) DEFAULT NULL COMMENT 'L''id de l''article sous lequel le commentaire a été posté',
  `contenu` text COLLATE utf8_bin NOT NULL,
  `date_publication` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `id_utilisateur`, `id_article`, `contenu`, `date_publication`) VALUES
(1, 1, 1, 'Ahouuuuuuuuuuuuuuuuuuuuuuuuuu !!!', '2021-05-25 15:17:37'),
(2, 1, 2, 'Miaou ! Donne-moi de la pâté et fais-moi des calins, humain !', '2021-05-25 15:17:37'),
(3, 1, 3, 'Lance-moi la balle ! Joue avec moi s\'il-te-plait ! ', '2021-05-25 15:17:37');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) COLLATE utf8_bin NOT NULL,
  `identifiant` varchar(255) COLLATE utf8_bin NOT NULL,
  `mot_de_passe` varchar(255) COLLATE utf8_bin NOT NULL,
  `role` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `avatar` text COLLATE utf8_bin,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `pseudo`, `identifiant`, `mot_de_passe`, `role`, `avatar`) VALUES
(1, 'Administrateur', 'admin', '$2y$10$QLZXZSgMuMcf8.IPc3EFPO126vd0PcV6BOhEjCb1xHQ2309albDxy', 'admin', 'https://img.freepik.com/vecteurs-libre/lettre-initiale-monogramme-stylo-plume-pour-modele-conception-logo-auteur_340145-78.jpg'),
(2, 'Utilisateur Test', 'test', '$2y$10$s3b1r.s6zGjVxKuDTPMrZukTyXtGrhYYQZmJBEGjOiPOrX4Dd7LFS', NULL, 'https://images-eu.ssl-images-amazon.com/images/I/21cajMvmjVL.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;