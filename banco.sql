SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

CREATE DATABASE IF NOT EXISTS `cadastros` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cadastros`;

CREATE TABLE IF NOT EXISTS `configuracoes` (
  `id` int(11) NOT NULL,
  `provas_ativas` varchar(10) DEFAULT 'SIM',
  `vestibular_ativo` varchar(10) DEFAULT 'SIM',
  `valor_vestibular` double(5,2) NOT NULL DEFAULT '50.00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `cursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod_curso` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `curso` varchar(64) CHARACTER SET latin1 NOT NULL,
  `vagas` int(11) NOT NULL DEFAULT '40',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=43 ;


INSERT INTO `cursos` (`id`, `cod_curso`, `curso`, `vagas`) VALUES
(1, 'bm', 'Biomedicina', 120),
(2, 'ec', 'Engenharia Cívil', 120),
(3, 'ea', 'Engenharia de Alimentos', 54),
(4, 'ep', 'Engenharia de Produção', 120),
(5, 'ee', 'Engenharia Elétrica', 54),
(6, 'eq', 'Engenharia Química', 120),
(7, 'ad', 'Administração', 40),
(8, 'cc', 'Ciência da Computação', 120),
(9, 'cb', 'Ciências Contábeis', 40),
(10, 'di', 'Direito', 112),
(11, 'ef', 'Educação Física', 40),
(12, 'fa', 'Farmácia', 120),
(13, 'fs', 'Fisioterapia', 20),
(14, 'jn', 'Jornalismo', 40),
(15, 'mv', 'Medicina Veterinária', 120),
(16, 'ps', 'Psicologia', 120),
(17, 'pp', 'Publicidade & Propaganda', 40),
(18, 'bi', 'Biologia', 40),
(19, 'ht', 'História', 40),
(20, 'ma', 'Matemática', 40),
(21, 'pe', 'Pedagogia', 40),
(22, 'em', 'Enfermagem', 120),
(23, 'ag', 'Agroindustria', 54),
(24, 'au', 'Arquitetura e Urbanismo', 120),
(28, 'ra', 'Radiologia', 120),
(27, 'em', 'Engenharia Mecânica', 120),
(29, 'lp', 'Letras - Língua Portuguesa', 40),
(30, 'le', 'Letras - Língua Espanhola', 40),
(31, 'li', 'Letras - Língua Inglesa', 40),
(32, 'ti', 'Tecnologia da Informação', 54),
(33, 'tr', 'Tecnologia em Redes de Computadores', 54),
(34, 'ts', 'Tecnologia em Segurança do Trabalho', 54),
(35, 'ft', 'Fotografia', 40),
(36, 'ea', 'Engenharia Ambiental e Sanitária', 40),
(37, 'gs', 'Gastronomia', 40),
(40, 'gp', 'Gestão de Segurança Privada', 40),
(41, 'gh', 'Gestão Hospitalar', 40),
(42, 'od', 'Odontologia', 40);


CREATE TABLE IF NOT EXISTS `inscricoes` (
  `id_inscricao` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cpf` varchar(19) COLLATE utf8_unicode_ci NOT NULL,
  `rg` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nome_candidato` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `data_nasc` date NOT NULL,
  `orgao_expedidor` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `numero` int(16) NOT NULL,
  `bairro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cep` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `celular` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `lingua_estrangeira` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `curso_opcao_1` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `curso_opcao_2` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pagamento` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'aberto',
  `nota1` int(11) NOT NULL,
  `nota2` int(11) NOT NULL,
  `redacao` int(11) NOT NULL,
  `pontuacao` int(11) NOT NULL,
  PRIMARY KEY (`id_inscricao`),
  UNIQUE KEY `cpf` (`cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `suficiencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `matricula` int(5) DEFAULT NULL,
  `tipo_prova` varchar(255) DEFAULT NULL,
  `curso` varchar(255) DEFAULT NULL,
  `fase` int(2) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `nota` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;


CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index',
  `user_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s name, unique',
  `user_password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s password in salted and hashed format',
  `user_email` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s email, unique',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data' AUTO_INCREMENT=6 ;


INSERT INTO `users` (`user_id`, `user_name`, `user_password_hash`, `user_email`) VALUES
(1, 'admin', '$2y$10$R5cdSJfmY01Y7VIgGYBqJ.U0YbWcQQSNaD61LyWt1sDGpXRC212Ze', 'example@example.com');

CREATE TABLE IF NOT EXISTS `vestibular` (
  `cpf` varchar(50) DEFAULT NULL,
  `rg` varchar(50) DEFAULT NULL,
  `nome_candidato` varchar(70) DEFAULT NULL,
  `data_nasc` varchar(50) DEFAULT NULL,
  `orgao_expedidor` varchar(50) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `numero` varchar(50) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `cep` varchar(50) DEFAULT NULL,
  `uf` varchar(50) DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  `celular` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pne` varchar(50) DEFAULT NULL,
  `lingua_estrangeira` varchar(50) DEFAULT NULL,
  `curso_opcao_1` varchar(50) DEFAULT NULL,
  `curso_opcao_2` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
