-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 11 jan. 2023 à 22:53
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `canin`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id_categories` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id_categories`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_categories`, `nom`) VALUES
(1, 'Panier'),
(4, 'Nourriture'),
(5, 'Accessoire'),
(6, 'Soin');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `id_panier` int(11) NOT NULL AUTO_INCREMENT,
  `id_produits` int(11) NOT NULL,
  PRIMARY KEY (`id_panier`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `categorie` int(3) NOT NULL,
  `prix` int(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `nom`, `description`, `categorie`, `prix`, `img`) VALUES
(1, 'Panier pour chien', 'Ce panier rond pour animal de compagnie offre un espace sûr et confortable pour que votre chat ou votre petit chien puisse faire un somme.\nSurface supérieure en flanelle luxueuse pour une douceur incomparable. Côtés et partie inférieure en toile de polyester pour offrir de la solidité.\nBords arrondis et légèrement surélevés pour plus de structure et une surface imitant un coussin.\nÀ laver en machine séparément, à froid avec de la lessive douce. Séchage sur fil uniquement. Sécher complètement avant utilisation. Remettre en forme si nécessaire.Il permet à la surface de conserver le même niveau de friction pour un meilleur contrôle du ballon.', 1, 50, 'panier_chien_rond.jfif'),
(2, 'Jouets chien lots', 'Jouets pour chien', 5, 20, 'accessoire1.jpg'),
(3, 'Harnais pour chien', 'Harnais pour chien confortable et agréable', 5, 70, 'accessoire3.png'),
(4, 'Panier chien voiture', 'Protège Efficacement Votre Voiture - La protection coffre voiture chien de qualité supérieure peut protéger efficacement et complètement le coffre de votre voiture.', 1, 160, 'accessoire2.jpg'),
(5, 'Jouet à mâcher pour chien', 'JOUET À MÂCHER EN FAUX BOIS POUR CHIEN\nENCOURAGE LES COMPORTEMENTS DE MASTICATION POSITIFS : ce jouet à mâcher en faux bois Dogwood est un excellent exutoire pour les chiots qui font leurs dents et les chiens peuvent laisser s\'exprimer leur instinct naturel de mastication.\nEXISTE EN PLUSIEURS TAILLES ET COLORIS : vous trouverez le jouet à mâcher en bois idéal pour votre chien quelle que soit sa taille. Disponibles en XS, S, M et L.\nPOUR UNE UTILISATION EN INTÉRIEUR COMME EN EXTÉRIEUR : ce jouet en faux bois Dogwood est parfait pour jouer aussi bien en intérieur qu\'en extérieur. Disponible en plusieurs tailles pour convenir à tous', 5, 20, 'jouets_chien_bois.jpg'),
(8, 'Panier pour chien Rouge', 'Ce panier rond pour animal de compagnie offre un espace sûr et confortable pour que votre chat ou votre petit chien puisse faire un somme.\r\nSurface supérieure en flanelle luxueuse pour une douceur incomparable. Côtés et partie inférieure en toile de polyester pour offrir de la solidité.\r\nBords arrondis et légèrement surélevés pour plus de structure et une surface imitant un coussin.\r\nÀ laver en machine séparément, à froid avec de la lessive douce. Séchage sur fil uniquement. Sécher complètement avant utilisation. Remettre en forme si nécessaire.Il permet à la surface de conserver le même niveau de friction pour un meilleur contrôle du ballon.', 1, 45, 'coussin_chien_rouge.jfif'),
(9, 'royal Canin 15kg Adulte', 'Croquette pour chien', 4, 40, 'royal_canin_15kg_adult.jfif'),
(10, 'Ultima Jack russel', 'Croquette chien', 4, 30, 'ultima_jack_russel.jpg'),
(11, 'Wolfood croquette', 'Croquette pour chien', 4, 30, 'wolfood_croquette_chien.webp'),
(12, 'Nature aniforte appat', 'Nourriture chien', 4, 40, 'pure_nature_ANIFORTE.jfif'),
(13, 'Niche chien Bois', 'Niche de chien exterieur', 1, 19, 'niche_chien.jpg'),
(14, 'Pet Fresh', 'pet_fresh', 5, 19, 'pet_fresh.jpg'),
(15, 'Bravecto anti puce', 'bravecto_anti_puce', 6, 13, 'bravecto_anti_puce.jpg'),
(16, 'Niche en rectangle', 'niche_bois_rectangle', 1, 40, 'niche_bois_rectangle.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nom_user` varchar(250) NOT NULL,
  `prenom_user` varchar(250) NOT NULL,
  `login` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `nom_user`, `prenom_user`, `login`, `pass`) VALUES
(1, 'ibgui', 'nathan', 'ibguinathan@gmail.com', 'azert'),
(2, 'nana', 'bbb', 'ndndndf@gmail.com', 'azertr\r\n'),
(3, 'Benois', 'fouj', 'bb@gmail.com', 'azert'),
(4, 'aa', 'bb', 'benhayat@gmail.com', 'azert'),
(5, 'IBGUI', 'LYDIA', 'dantouati@gmail.com', 'azert'),
(6, '', '', 'ibguinathan@gmail.com', 'azert'),
(7, 'guetta', 'aaron', 'aaronguetta@gmail.com', 'azert'),
(8, 'demo', 'demo', 'demo', 'demo'),
(9, 'guetta', 'aaron', 'ibguinathan@gmail.com', 'azert');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
