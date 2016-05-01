-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07-Abr-2016 às 12:22
-- Versão do servidor: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetoluana`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidatos`
--

CREATE TABLE `candidatos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone1` varchar(255) DEFAULT NULL,
  `telefone2` varchar(255) DEFAULT NULL,
  `idade` varchar(3) DEFAULT NULL,
  `curso` varchar(255) DEFAULT NULL,
  `periodo` varchar(25) DEFAULT NULL,
  `horario` varchar(50) DEFAULT NULL,
  `curriculo` text,
  `informacoes` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `candidatos`
--

INSERT INTO `candidatos` (`id`, `nome`, `email`, `telefone1`, `telefone2`, `idade`, `curso`, `periodo`, `horario`, `curriculo`, `informacoes`) VALUES
(12, 'Festa da Marina', 'ranieredelima@gmail.com', '8', '9', '10', 'SPI', '7', 'noite', 'uploads/14597677952016010315u193973406_rh.sql', ''),
(13, 'Festa da Marina', 'andreluismenezes@ymail.com', '8', '9', '21', 'SPI', '10', 'noite', 'uploads/14598555902016012630claudio.rar', ''),
(15, 'Festa da Marina', 'andreluismenzes@ymail.com', '8', '9', '2', 'SPI', '8', 'noite', 'uploads/14599452152016022015claudio.rar', ''),
(16, 'Festa de 15 anos da Maria', 'andreluismenezes@ymail.com', '8', '9', '3', 'SPI', '1', 'manha', 'uploads/14599478892016030449Chrysanthemum.jpg', 'zz');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(0, 'Raniere de Lima', 'ranieredelima@gmail.com', '0cc175b9c0f1b6a831c399e269772661');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidatos`
--
ALTER TABLE `candidatos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);
ALTER TABLE `candidatos` ADD FULLTEXT KEY `email_2` (`email`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidatos`
--
ALTER TABLE `candidatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
