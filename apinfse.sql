-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           8.0.30 - MySQL Community Server - GPL
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

-- Copiando estrutura para tabela apinfse.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int NOT NULL,
  `batch` int unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- Copiando dados para a tabela apinfse.migrations: ~1 rows (aproximadamente)
INSERT IGNORE INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
	(1, '2022-09-27-212759', 'App\\Database\\Migrations\\Usuarios', 'default', 'App', 1664357120, 1),
	(2, '2022-09-28-085420', 'App\\Database\\Migrations\\Notas', 'default', 'App', 1664357120, 1);

-- Copiando estrutura para tabela apinfse.notas
CREATE TABLE IF NOT EXISTS `notas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cnpj` text NOT NULL,
  `num_nota` text NOT NULL,
  `xml` text NOT NULL,
  `ativo` char(1) NOT NULL,
  `datacad` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

-- Copiando dados para a tabela apinfse.notas: ~1 rows (aproximadamente)
INSERT IGNORE INTO `notas` (`id`, `cnpj`, `num_nota`, `xml`, `ativo`, `datacad`) VALUES
	(1, '17077718000189', '1111', '202cb962ac59075b964b07152d234b70', '1', '2022-09-27 03:00:00'),
	(2, '17077718000111', '1122', '202cb962ac59075b964b07152d234b70', '1', '2022-09-27 03:00:00'),
	(3, '17077718000112', '1133', '202cb962ac59075b964b07152d234b70', '1', '2022-09-27 03:00:00');

-- Copiando estrutura para tabela apinfse.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` text NOT NULL,
  `email` text NOT NULL,
  `senha` text NOT NULL,
  `token` text NOT NULL,
  `ativo` char(1) NOT NULL,
  `datacad` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

-- Copiando dados para a tabela apinfse.usuarios: ~1 rows (aproximadamente)
INSERT IGNORE INTO `usuarios` (`id`, `nome`, `email`, `senha`, `token`, `ativo`, `datacad`) VALUES
	(1, 'Felipe', 'felipe@newbgp.com.br', '202cb962ac59075b964b07152d234b70', '', '', '2022-09-27 03:00:00');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
