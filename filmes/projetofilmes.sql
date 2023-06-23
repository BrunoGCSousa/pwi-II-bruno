-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 23-Jun-2023 às 01:20
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetofilmes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

DROP TABLE IF EXISTS `contato`;
CREATE TABLE IF NOT EXISTS `contato` (
  `idcontato` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `sobrenome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `senha` varchar(250) NOT NULL,
  PRIMARY KEY (`idcontato`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`idcontato`, `nome`, `sobrenome`, `email`, `telefone`, `senha`) VALUES
(1, 'Titanic ', 'Silva', 'ninja@gmail.com', 'sim', 'sim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `filmes`
--

DROP TABLE IF EXISTS `filmes`;
CREATE TABLE IF NOT EXISTS `filmes` (
  `idFilme` int(11) NOT NULL AUTO_INCREMENT,
  `nomeFilme` varchar(255) DEFAULT NULL,
  `anoFilme` varchar(255) DEFAULT NULL,
  `diretor` varchar(255) DEFAULT NULL,
  `descricao` varchar(1000) DEFAULT NULL,
  `linkTrailer` varchar(255) DEFAULT NULL,
  `imagemFilme` varchar(255) DEFAULT NULL,
  `idGenero` varchar(255) NOT NULL,
  PRIMARY KEY (`idFilme`),
  KEY `idGenero` (`idGenero`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `filmes`
--

INSERT INTO `filmes` (`idFilme`, `nomeFilme`, `anoFilme`, `diretor`, `descricao`, `linkTrailer`, `imagemFilme`, `idGenero`) VALUES
(15, 'Os Cavaleiros do ZodÃ­aco - Saint Seiya: O ComeÃ§o', '2023', 'Tomasz Baginski', 'Produzido pela Toei Animation e baseado na sensaÃ§Ã£o internacional do anime, Cavaleiros do ZodÃ­aco traz a saga de Saint Seiya para a tela grande em live-action pela primeira vez. Seiya (Mackenyu), um obstinado adolescente de rua, passa seu tempo lutando por dinheiro enquanto procura por sua irmÃ£ sequestrada. Quando uma de suas lutas inadvertidamente explora poderes mÃ­sticos que ele nunca soube que tinha, Seiya se vÃª lanÃ§ado em um mundo de santos guerreiros, treinamento mÃ¡gico antigo e uma deusa reencarnada que precisa de sua proteÃ§Ã£o. Se ele quiser sobreviver, precisarÃ¡ abraÃ§ar seu destino e sacrificar tudo para ocupar seu lugar de direito entre os Cavaleiros do ZodÃ­aco.', 'https://www.youtube.com/embed/sARBJA7IUY0', 'Cavaleiros.jpg', 'Aï¿½ï¿½o'),
(14, 'O nascimento do Mal', '2023', 'Lori Evans Taylor', 'Depois de anos lutando para comeÃ§ar uma famÃ­lia, Julie Rivers (Melissa Barrera) estÃ¡ grÃ¡vida novamente e se mudando para uma nova casa com o marido enquanto eles abraÃ§am um novo comeÃ§o. Ao receber a ordem de repouso obrigatÃ³rio na cama, Julie comeÃ§a a se desfazer lentamente enquanto sofre com a monotonia e a ansiedade de suas novas restriÃ§Ãµes. Logo, terrÃ­veis experiÃªncias fantasmagÃ³ricas em casa comeÃ§am a se aproximar de Julie, despertando seus demÃ´nios do passado e fazendo com que outras pessoas questionem sua estabilidade mental. Presa e forÃ§ada a enfrentar seu passado e o sobrenatural, Julie luta para proteger a si mesma e a seu bebÃª ainda nÃ£o nascido.\r\n', 'https://www.youtube.com/embed/Mho4ojb2APU', 'mal.jpg', 'Terror'),
(22, 'Titanic ', '2020', 'Titanic ', 'Titanic Titanic Titanic Titanic Titanic Titanic Titanic Titanic Titanic ', 'Titanic ', 'Cavaleiros.jpg', 'Aventura');

-- --------------------------------------------------------

--
-- Estrutura da tabela `genero`
--

DROP TABLE IF EXISTS `genero`;
CREATE TABLE IF NOT EXISTS `genero` (
  `idGenero` int(11) NOT NULL AUTO_INCREMENT,
  `genero` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idGenero`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `genero`
--

INSERT INTO `genero` (`idGenero`, `genero`) VALUES
(16, 'Comédia'),
(12, 'Terror'),
(15, 'Ação'),
(14, 'Romance'),
(13, 'Drama'),
(17, 'Aventura');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
