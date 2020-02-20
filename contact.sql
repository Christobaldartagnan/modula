-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 20 fév. 2020 à 07:34
-- Version du serveur :  10.4.8-MariaDB
-- Version de PHP :  7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `contact`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `login`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `formulaires`
--

CREATE TABLE `formulaires` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `messages` text NOT NULL,
  `rgpd` varchar(5) NOT NULL,
  `dat` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `formulaires`
--

INSERT INTO `formulaires` (`id`, `ip`, `nom`, `prenom`, `email`, `messages`, `rgpd`, `dat`) VALUES
(1, ':1', 'dartagnan', 'christobal', 'loup@orange.fr', 'hello !!!', 'on', '2020-02-19 08:35:10'),
(2, '::1', 'moi', 'moi', 'moi@orange.fr', 'moi', 'on', NULL),
(3, '::1', 'inspecteur', 'barnaby', 'policeguernesey@gmail.com', 'lorem ipsum', 'on', '2020-02-19 18:13:00'),
(4, '::1', 'Christobal33', 'moi', 'loup@gmail.com', 'Ensuite lorsqu\'il clic sur &quot;envoyer&quot; le formulaire est envoyer vers une deuxième page &quot;sendmail.php&quot; avec un script php qui permet de m\'envoyer les données automatiquement par mail. Et ensuite l\'utilisateur est redirigé vers une autre page automatiquement ', 'on', '2020-02-19 19:23:00'),
(5, '::1', 'Christobal33', 'moi', 'loup@gmail.com', 'blabla blabla', 'on', '2020-02-19 16:23:00'),
(6, '::1', 'moi', 'moi', 'moi@orange.fr', 'lolololololololl', 'on', '2020-04-21 20:20:00'),
(7, '::1', 'Christobal', 'tonton,', 'loup@gmail.com', 'Les odonates sont un ordre d\'insectes à corps allongé, dotés de deux paires d\'ailes membraneuses généralement transparentes, et dont les yeux composés et généralement volumineux leur permettent de chasser efficacement leurs proies. Ils sont aquatiques à l\'état larvaire et terrestres à l\'état adulte. Ce sont des prédateurs, que l\'on peut rencontrer occasionnellement dans tout type de milieu naturel, mais qui se retrouvent plus fréquemment aux abords des zones d\'eau douce à saumâtre, stagnante à courante, dont ils ont besoin pour se reproduire. ', 'on', '2020-02-19 16:16:00'),
(8, '::1', 'Christobal', 'tonton,', 'loup@gmail.com', 'lkl', 'on', '2020-02-19 20:48:00'),
(9, '::1', 'toto', 'titi', 'titi@gmail.com', 'blablabla', 'on', '2019-01-18 17:17:00'),
(10, '::1', 'moi', 'moi', 'moi@orange.fr', 'sqfmkfj', 'on', '2020-01-16 18:34:00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `formulaires`
--
ALTER TABLE `formulaires`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `formulaires`
--
ALTER TABLE `formulaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
