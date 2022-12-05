-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.24-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para story_geek
CREATE DATABASE IF NOT EXISTS `story_geek` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `story_geek`;

-- Copiando estrutura para tabela story_geek.cadastro_clientes
CREATE TABLE IF NOT EXISTS `cadastro_clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Telefone` varchar(20) NOT NULL,
  `Senha` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela story_geek.cadastro_clientes: ~0 rows (aproximadamente)
INSERT INTO `cadastro_clientes` (`id`, `Nome`, `Email`, `Telefone`, `Senha`) VALUES
	(3, 'Eduardo Franco Seco', 'efs2437@gmail.com', '19991303806', 'Games14700.'),
	(4, 'Eduardo Franco', 'efs2437@gmail.com ', '19999251333', 'edu'),
	(5, 'Felipe jorge', 'jorgelipe@gmail.com', '198734-3534', 'Olamundo123');

-- Copiando estrutura para tabela story_geek.cadastro_produto
CREATE TABLE IF NOT EXISTS `cadastro_produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomeproduto` varchar(40) NOT NULL,
  `valor` decimal(7,2) NOT NULL,
  `imagem1` varchar(50) NOT NULL,
  `imagem2` varchar(50) NOT NULL,
  `imagem3` varchar(50) NOT NULL,
  `imagem4` varchar(50) NOT NULL,
  `imagem5` varchar(50) NOT NULL,
  `modelo` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela story_geek.cadastro_produto: ~3 rows (aproximadamente)
INSERT INTO `cadastro_produto` (`id`, `nomeproduto`, `valor`, `imagem1`, `imagem2`, `imagem3`, `imagem4`, `imagem5`, `modelo`) VALUES
	(18, 'MOLETOM VINHO - SUA VIDA', 89.00, 'a1669671441.jpg', 'b1669671441.jpg', 'c1669671441.jpg', 'd1669671441.jpg', 'e1669671441.jpg', 'moletom'),
	(19, 'One Piece - Banners', 93.34, 'a1669672076.jpg', 'b1669672076.jpg', 'c1669672076.jpg', 'd1669672076.jpg', 'e1669672076.jpg', 'Banners'),
	(20, 'Codigo', 373.00, 'a1669672327.jpg', 'b1669672327.jpg', 'c1669672327.jpg', 'd1669672327.jpg', 'e1669672327.jpg', 'Code');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
