-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema locadora
--

CREATE DATABASE IF NOT EXISTS locadora;
USE locadora;

--
-- Definition of table `adm`
--

DROP TABLE IF EXISTS `adm`;
CREATE TABLE `adm` (
  `idadm` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(150) NOT NULL,
  `ativo` char(1) NOT NULL,
  PRIMARY KEY (`idadm`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adm`
--

/*!40000 ALTER TABLE `adm` DISABLE KEYS */;
INSERT INTO `adm` (`idadm`,`nome`,`email`,`senha`,`ativo`) VALUES 
 (1,'Gabriela','gabi@gmail.com','$2y$12$99jvFS3svpNrM3zFJdKQIuzIPfWjKstnYewMTkrcVUHOGkLKLqgAO','A');
/*!40000 ALTER TABLE `adm` ENABLE KEYS */;


--
-- Definition of table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente` (
  `idcliente` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `contato` varchar(30) NOT NULL,
  PRIMARY KEY (`idcliente`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cliente`
--

/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` (`idcliente`,`nome`,`contato`) VALUES 
 (11,'Maite Torres','65378432'),
 (12,'Rafael Gómez','4294967295'),
 (19,'Marco Antônio','4294967295'),
 (20,'Mara Madalena','1111111111');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;


--
-- Definition of table `filme`
--

DROP TABLE IF EXISTS `filme`;
CREATE TABLE `filme` (
  `idfilme` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`idfilme`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `filme`
--

/*!40000 ALTER TABLE `filme` DISABLE KEYS */;
INSERT INTO `filme` (`idfilme`,`nome`) VALUES 
 (1,'Resgate'),
 (2,'Deadpool'),
 (3,'Coringa'),
 (4,'Pets'),
 (5,'Madagascar'),
 (6,'Jumanji'),
 (7,'Pixels'),
 (8,'Rio'),
 (9,'Frozen 2 '),
 (10,'Angry Birds'),
 (11,'A Culpa é das Estrelas'),
 (12,'O Poderoso Chefinho'),
 (13,'Wall-E'),
 (14,'Batman: e o Cavaleiro das Trevas');
/*!40000 ALTER TABLE `filme` ENABLE KEYS */;


--
-- Definition of table `genero`
--

DROP TABLE IF EXISTS `genero`;
CREATE TABLE `genero` (
  `idgenero` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idfilme` int(10) unsigned NOT NULL,
  `nome` varchar(40) NOT NULL,
  PRIMARY KEY (`idgenero`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genero`
--

/*!40000 ALTER TABLE `genero` DISABLE KEYS */;
INSERT INTO `genero` (`idgenero`,`idfilme`,`nome`) VALUES 
 (1,8,'Ação'),
 (2,5,'Aventura'),
 (3,14,'Comédia'),
 (4,11,'Romance'),
 (5,9,'Drama'),
 (6,13,'Fantasia'),
 (7,7,'Mistério'),
 (8,12,'Terror'),
 (9,4,'Espionagem'),
 (10,10,'Suspense'),
 (11,2,'Ficção '),
 (12,6,'Documentário'),
 (13,3,'Biografia'),
 (14,1,'Animação');
/*!40000 ALTER TABLE `genero` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
