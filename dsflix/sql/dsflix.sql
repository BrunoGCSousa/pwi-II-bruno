-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 07-Maio-2023 às 17:51
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dsflix`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `filme`
--

DROP TABLE IF EXISTS `filme`;
CREATE TABLE IF NOT EXISTS `filme` (
  `idFilme` int NOT NULL AUTO_INCREMENT,
  `filme` varchar(100) DEFAULT NULL,
  `idGenero` int DEFAULT NULL,
  `genero` varchar(100) NOT NULL,
  `sinopse` varchar(255) DEFAULT NULL,
  `imagemFilme` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idFilme`),
  KEY `fk_filme_genero` (`idGenero`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `filme`
--

INSERT INTO `filme` (`idFilme`, `filme`, `idGenero`, `genero`, `sinopse`, `imagemFilme`) VALUES
(3, 'Mario', NULL, 'Aventura', 'Its me Mariooooo', 'img/super-mario-bros__1.jpg'),
(5, 'Carie a estranha', NULL, 'Terror', 'é ela carie a estranha', 'img/Carrie-a-Estranha-Carrie-filme-de-terror.jpg'),
(6, 'O nascimento do Mal', NULL, 'Terror ', 'Depois de anos lutando para começar uma família, Julie Rivers (Melissa Barrera) está grávida novamente e se mudando para uma nova casa com o marido enquanto eles abraçam um novo começo. Ao receber a ordem de repouso obrigatório na cama, Julie começa a se ', 'img/2997379.webp'),
(7, 'Dançando no silêcio', NULL, 'Drama', 'Uma jovem apaixonada por balé passa por um trauma, conhece outras mulheres que passaram por situações semelhantes e encontraram uma forma criativa de perseguir sua paixão. Classificação indicativa 14 anos, contém violência, drogas lícitas e temas sensívei', 'img/5555918.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `genero`
--

DROP TABLE IF EXISTS `genero`;
CREATE TABLE IF NOT EXISTS `genero` (
  `idGenero` int NOT NULL AUTO_INCREMENT,
  `genero` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`idGenero`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `genero`
--

INSERT INTO `genero` (`idGenero`, `genero`) VALUES
(6, 'Comédia'),
(5, 'Terror'),
(4, 'Aventura'),
(7, 'Romance'),
(8, 'Suspense'),
(9, 'Ficção Cientifica');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tipoConta` varchar(50) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `usuario`, `email`, `tipoConta`, `senha`) VALUES
(1, 'Brucats', 'ninjutsso@gmail.com', 'Administrador', 'senha');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
