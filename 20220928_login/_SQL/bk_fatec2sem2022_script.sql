-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31-Ago-2022 às 15:12
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fatec2sem2022`
--
DROP DATABASE IF EXISTS `fatec2sem2022`;
CREATE DATABASE IF NOT EXISTS `fatec2sem2022` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `fatec2sem2022`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `idLogin` int(11) NOT NULL,
  `nomeLogin` varchar(200) NOT NULL,
  `enderecoLogin` varchar(200) NOT NULL,
  `emailLogin` varchar(200) NOT NULL,
  `telefoneLogin` varchar(100) NOT NULL,
  `senhaLogin` varchar(255) NOT NULL,
  `nivelLogin` int(11) NOT NULL,
  `statusLogin` int(11) NOT NULL,
  `fotoLogin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`idLogin`, `nomeLogin`, `enderecoLogin`, `emailLogin`, `telefoneLogin`, `senhaLogin`, `nivelLogin`, `statusLogin`, `fotoLogin`) VALUES
(1, 'Fatec Araçatuba', 'av. Prestes Maia, 1764', 'fatecaracatuba@fatecaracatuba.edu.br', '18 3625 9917', '123', 1, 1, 'sem-foto.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idLogin`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `idLogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
