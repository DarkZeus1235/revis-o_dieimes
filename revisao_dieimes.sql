-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 31-Jul-2023 às 10:13
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
-- Banco de dados: `revisao_dieimes`
--
CREATE DATABASE IF NOT EXISTS `revisao_dieimes` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `revisao_dieimes`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

DROP TABLE IF EXISTS `cadastro`;
CREATE TABLE IF NOT EXISTS `cadastro` (
  `id_cadastro` int(200) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  PRIMARY KEY (`id_cadastro`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id_cadastro`, `email`, `senha`, `nome`, `username`, `endereco`) VALUES
(8, 'jpfernandes@dadads.com', 'juju123', 'JoÃ£o Pedro Fernandes de Almeida', 'KungFu', 'Avenida Brasil'),
(9, 'jpfernandes@dadads.com', 'juju123', 'JoÃ£o Pedro Fernandes de Almeida', 'KungFu', 'Avenida Brasil');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
