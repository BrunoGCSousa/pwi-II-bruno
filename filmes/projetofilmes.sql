-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 11-Maio-2023 às 01:06
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
  `email` varchar(255) DEFAULT NULL,
  `assunto` varchar(255) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idcontato`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `idGenero` int(11) DEFAULT NULL,
  `genero` varchar(255) NOT NULL,
  PRIMARY KEY (`idFilme`),
  KEY `idGenero` (`idGenero`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `filmes`
--

INSERT INTO `filmes` (`idFilme`, `nomeFilme`, `anoFilme`, `diretor`, `descricao`, `linkTrailer`, `imagemFilme`, `idGenero`, `genero`) VALUES
(2, 'O nascimento do Mal', '2023', 'Lori Evans Taylor', 'Depois de anos lutando para comeÃ§ar uma famÃ­lia, Julie Rivers (Melissa Barrera) estÃ¡ grÃ¡vida novamente e se mudando para uma nova casa com o marido enquanto eles abraÃ§am um novo comeÃ§o. Ao receber a ordem de repouso obrigatÃ³rio na cama, Julie comeÃ§a a se desfazer lentamente enquanto sofre com a monotonia e a ansiedade de suas novas restriÃ§Ãµes. Logo, terrÃ­veis experiÃªncias fantasmagÃ³ricas em casa comeÃ§am a se aproximar de Julie, despertando seus demÃ´nios do passado e fazendo com que outras pessoas questionem sua estabilidade mental. Presa e forÃ§ada a enfrentar seu passado e o sobrenatural, Julie luta para proteger a si mesma e a seu bebÃª ainda nÃ£o nascido.', 'https://www.youtube.com/embed/Mho4ojb2APU', 'https://br.web.img2.acsta.net/pictures/23/03/01/17/28/2997379.jpg', NULL, 'Terror'),
(3, 'DanÃ§ando no silÃªcio', '2023', 'Mounia Meddour', 'Uma jovem apaixonada por balÃ© passa por um trauma, conhece outras mulheres que passaram por situaÃ§Ãµes semelhantes e encontraram uma forma criativa de perseguir sua paixÃ£o. ClassificaÃ§Ã£o indicativa 14 anos, contÃ©m violÃªncia, drogas lÃ­citas e temas sensÃ­veis.', 'https://www.youtube.com/embed/MgJBSR-q5Og', 'https://www.reservacultural.com.br/wp-content/uploads/2023/05/5555918.jpg', NULL, 'Drama'),
(4, 'O InÃ­cio do Fim', '2023', 'Kevin Sorbo', 'Seis meses atrÃ¡s, milhÃµes de pessoas desapareceram sem deixar vestÃ­gios e o caos tomou conta do mundo. Muitos acreditam que o governo estÃ¡ por trÃ¡s de tudo, outros defendem que a BÃ­blia jÃ¡ havia previsto os desaparecimentos hÃ¡ milhares de anos. Desesperado por respostas em um mundo cheio de medo e mentiras, o jornalista Buck Williams (Greg Perrow) decide ir atÃ© o fim em busca da verdade e de salvaÃ§Ã£o.', 'https://www.youtube.com/embed/MgJBSR-q5Og', 'https://br.web.img3.acsta.net/pictures/23/03/08/19/38/3073741.jpg', NULL, 'Suspense'),
(5, 'Os Cavaleiros do ZodÃ­aco - Saint Seiya: O ComeÃ§o', '2023', 'Tomasz Baginski', 'Produzido pela Toei Animation e baseado na sensaÃ§Ã£o internacional do anime, Cavaleiros do ZodÃ­aco traz a saga de Saint Seiya para a tela grande em live-action pela primeira vez. Seiya (Mackenyu), um obstinado adolescente de rua, passa seu tempo lutando por dinheiro enquanto procura por sua irmÃ£ sequestrada. Quando uma de suas lutas inadvertidamente explora poderes mÃ­sticos que ele nunca soube que tinha, Seiya se vÃª lanÃ§ado em um mundo de santos guerreiros, treinamento mÃ¡gico antigo e uma deusa reencarnada que precisa de sua proteÃ§Ã£o. Se ele quiser sobreviver, precisarÃ¡ abraÃ§ar seu destino e sacrificar tudo para ocupar seu lugar de direito entre os Cavaleiros do ZodÃ­aco.', 'https://www.youtube.com/embed/sARBJA7IUY0', 'https://www.ucicinemas.com.br/Content/Upload/Filmes/Posters/11401/filme_11401.jpg', NULL, 'AÃ§Ã£o'),
(6, 'A Morte do DemÃ´nio: A AscensÃ£o', '2023', 'Lee Cronin', 'Um conto distorcido de duas irmÃ£s distantes cujo reencontro Ã© interrompido pela ascensÃ£o de demÃ´nios possuidores de carne, empurrando-as para uma batalha primordial pela sobrevivÃªncia enquanto enfrentam a versÃ£o mais aterrorizante da famÃ­lia imaginÃ¡vel.', 'https://www.youtube.com/embed/5n9v35xgRpw', 'https://jardimdasamericas.com.br/uploads/2023/04/capa-filme-a-morte-do-demonio-a-ascensao-0a816-large.jpg', NULL, 'Terror');

-- --------------------------------------------------------

--
-- Estrutura da tabela `genero`
--

DROP TABLE IF EXISTS `genero`;
CREATE TABLE IF NOT EXISTS `genero` (
  `idGenero` int(11) NOT NULL AUTO_INCREMENT,
  `genero` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idGenero`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
