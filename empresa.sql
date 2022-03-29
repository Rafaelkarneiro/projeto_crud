-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 29-Mar-2022 às 19:12
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `empresa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

DROP TABLE IF EXISTS `pessoas`;
CREATE TABLE IF NOT EXISTS `pessoas` (
  `cod_pessoa` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_pessoa`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`cod_pessoa`, `nome`, `endereco`, `telefone`, `email`, `data_nascimento`, `foto`) VALUES
(13, 'Rafael Campanin Carneiro', 'Rua Manoel Daniel de Andrade, 428', '12 99645 0444', 'rafael@gmail.com', '1997-12-19', '20210417010418.jpg'),
(53, 'Felipe dos Santos', 'Rua JosÃ© Tavarez, 263', '3144-5895', 'felipe@gmail.com', '1998-05-20', '20220328070334.jpeg'),
(54, 'Jorge Lafon', 'Rua Mauro Nacada, 154', '3144-8888', 'jorge@gmail.com', '1997-06-15', '20220328070337.png'),
(55, 'Maria Ferreira', 'Rua Paulo Bento, 65', '3144-0000', 'maria@gmail.com', '2001-10-14', '20220328070328.png'),
(56, 'Amanda Resende', 'Rua Felipe de Nobregas, 41', '3144-1111', 'amanda@gmail.com', '2002-05-12', '20220328070335.jpeg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  `senha` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `permissao` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `email`, `data_nascimento`, `senha`, `permissao`, `foto`) VALUES
(4, 'Rafael Campanin Carneiro', 'fael@gmail.com', '1111-12-19', '123', '2', '20210515110558.jpeg'),
(5, 'Rafael Campanin Carneiro', 'rafael@gmail.com', '1212-12-12', '123', '2', '20210516030523.jpeg'),
(6, 'charles vinicius', 'charles@gmail.com', '2021-05-20', '123', '1', ''),
(7, 'charles', 'ch@gmail.con', '2021-05-18', '123', '1', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
