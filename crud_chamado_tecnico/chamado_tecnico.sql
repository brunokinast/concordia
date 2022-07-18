-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Jul-2019 às 20:34
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chamado_tecnico`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_chamado`
--

CREATE TABLE `cad_chamado` (
  `id` int(11) NOT NULL,
  `assunto` varchar(100) DEFAULT NULL,
  `descricao_chamado` text,
  `resposta_chamado` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cad_chamado`
--

INSERT INTO `cad_chamado` (`id`, `assunto`, `descricao_chamado`, `resposta_chamado`) VALUES
(1, 'PC Queimado', 'PC do cliente Fulano queimou.', 'Queimou mesmo'),
(2, 'PC molhado', 'PC do cliente Fulano molhou', ''),
(3, 'HD Queimou', 'HD do fulano queimou', 'Verdade, tá preto');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cad_chamado`
--
ALTER TABLE `cad_chamado`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cad_chamado`
--
ALTER TABLE `cad_chamado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
