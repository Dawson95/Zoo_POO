-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 10 avr. 2022 à 19:41
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `zoo_poo`
--

-- --------------------------------------------------------

--
-- Structure de la table `animals`
--

DROP TABLE IF EXISTS `animals`;
CREATE TABLE IF NOT EXISTS `animals` (
  `idAnimal` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `age` date NOT NULL,
  `species` varchar(100) NOT NULL,
  `entryDate` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `iDParent` int DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `diet` varchar(100) NOT NULL,
  `treatment` varchar(100) NOT NULL,
  `environnement` varchar(100) NOT NULL,
  `deathDate` date NOT NULL,
  `informations` varchar(255) DEFAULT NULL,
  `idFavHealer` int DEFAULT NULL,
  `idEnclosure` int DEFAULT NULL,
  PRIMARY KEY (`idAnimal`),
  UNIQUE KEY `idAnimal` (`idAnimal`),
  KEY `FK_Animals_Enclosure` (`idEnclosure`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `animals`
--

INSERT INTO `animals` (`idAnimal`, `name`, `age`, `species`, `entryDate`, `gender`, `iDParent`, `photo`, `diet`, `treatment`, `environnement`, `deathDate`, `informations`, `idFavHealer`, `idEnclosure`) VALUES
(1, 'Wakanda', '2021-11-02', 'DOG', '2022-04-01', 'Male', NULL, NULL, 'Tacos', 'Codéine', 'terre', '0000-00-00', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `enclosures`
--

DROP TABLE IF EXISTS `enclosures`;
CREATE TABLE IF NOT EXISTS `enclosures` (
  `idEnclosure` int NOT NULL AUTO_INCREMENT,
  `animalSize` int DEFAULT '0',
  `enclosureSize` int NOT NULL,
  `environnement` varchar(100) DEFAULT NULL,
  `vacant` bit(1) DEFAULT b'1',
  `nbrAnimals` int DEFAULT '0',
  `idZoo` int NOT NULL,
  PRIMARY KEY (`idEnclosure`),
  KEY `FK_Enclosure_Zoo` (`idZoo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `enclosures`
--

INSERT INTO `enclosures` (`idEnclosure`, `animalSize`, `enclosureSize`, `environnement`, `vacant`, `nbrAnimals`, `idZoo`) VALUES
(1, 0, 10, 'Terre', b'1', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `healers`
--

DROP TABLE IF EXISTS `healers`;
CREATE TABLE IF NOT EXISTS `healers` (
  `idHealer` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `entryDate` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phoneNumber` int DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `speciality` varchar(100) NOT NULL,
  `maxEnclosures` int DEFAULT '0',
  `managerID` int DEFAULT NULL,
  `exitDate` date DEFAULT NULL,
  `informations` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idHealer`),
  UNIQUE KEY `idHealer` (`idHealer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `healersanimal`
--

DROP TABLE IF EXISTS `healersanimal`;
CREATE TABLE IF NOT EXISTS `healersanimal` (
  `idHealer` int NOT NULL,
  `idAnimal` int NOT NULL,
  PRIMARY KEY (`idHealer`,`idAnimal`),
  KEY `FK_healersAnimal_Animal` (`idAnimal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `zoo`
--

DROP TABLE IF EXISTS `zoo`;
CREATE TABLE IF NOT EXISTS `zoo` (
  `idZoo` int NOT NULL AUTO_INCREMENT,
  `nbrAnimal` int DEFAULT '0',
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idZoo`),
  UNIQUE KEY `idZoo` (`idZoo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `zoo`
--

INSERT INTO `zoo` (`idZoo`, `nbrAnimal`, `name`) VALUES
(1, 0, 'ZooParc de Beauval');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `animals`
--
ALTER TABLE `animals`
  ADD CONSTRAINT `FK_Animals_Enclosure` FOREIGN KEY (`idEnclosure`) REFERENCES `enclosures` (`idEnclosure`);

--
-- Contraintes pour la table `enclosures`
--
ALTER TABLE `enclosures`
  ADD CONSTRAINT `FK_Enclosure_Zoo` FOREIGN KEY (`idZoo`) REFERENCES `zoo` (`idZoo`);

--
-- Contraintes pour la table `healersanimal`
--
ALTER TABLE `healersanimal`
  ADD CONSTRAINT `FK_healersAnimal_Animal` FOREIGN KEY (`idAnimal`) REFERENCES `animals` (`idAnimal`),
  ADD CONSTRAINT `FK_healersAnimal_healers` FOREIGN KEY (`idHealer`) REFERENCES `healers` (`idHealer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
