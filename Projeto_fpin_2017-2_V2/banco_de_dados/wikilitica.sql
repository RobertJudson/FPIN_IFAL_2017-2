-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Dez-2017 às 00:54
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wikilitica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidato`
--

CREATE TABLE `candidato` (
  `id_candidato` int(11) NOT NULL,
  `id_cidade` int(11) NOT NULL,
  `id_partido` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `sexo` varchar(30) NOT NULL,
  `idade` varchar(30) NOT NULL,
  `nascimento` date NOT NULL,
  `naturalidade` varchar(30) NOT NULL,
  `profissao` varchar(30) NOT NULL,
  `cargo` varchar(30) NOT NULL,
  `realizacoes` text NOT NULL,
  `data_cadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

CREATE TABLE `cidade` (
  `id_cidade` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `bandeira` varchar(40) NOT NULL,
  `data_cadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cidade`
--

INSERT INTO `cidade` (`id_cidade`, `id_estado`, `nome`, `bandeira`, `data_cadastro`) VALUES
(1, 1, 'MaceiÃ³', '', '2017-12-28 18:18:50'),
(2, 1, 'Arapiraca', '', '2017-12-28 18:26:46'),
(3, 5, 'Rio de Janeiro', '', '2017-12-28 18:27:22'),
(4, 1, 'Santana do Ipanema', '', '2017-12-28 20:45:55'),
(5, 6, 'Rio Branco', '', '2017-12-28 20:46:24'),
(6, 7, 'MacapÃ¡', '', '2017-12-28 20:46:31'),
(7, 8, 'Manaus', '', '2017-12-28 20:46:45'),
(8, 3, 'Salvador', '', '2017-12-28 20:46:51'),
(9, 9, 'Fortaleza', '', '2017-12-28 20:47:10'),
(10, 10, 'Brasilia', '', '2017-12-28 20:47:24'),
(11, 11, 'VitÃ³ria', '', '2017-12-28 20:47:38'),
(12, 12, 'GoiÃ¢nia', '', '2017-12-28 20:47:51'),
(13, 13, 'SÃ£o Luis', '', '2017-12-28 20:48:07'),
(14, 14, 'CuiabÃ¡', '', '2017-12-28 20:48:21'),
(15, 17, 'Campo Grande', '', '2017-12-28 20:48:29'),
(16, 18, 'Belo Horizonte', '', '2017-12-28 20:48:45'),
(17, 19, 'BelÃ©m', '', '2017-12-28 20:48:51'),
(18, 20, 'JoÃ£o Pessoa', '', '2017-12-28 20:49:01'),
(19, 21, 'Curitiba', '', '2017-12-28 20:49:14'),
(20, 2, 'Recife', '', '2017-12-28 20:49:25'),
(21, 22, 'Teresina', '', '2017-12-28 20:49:36'),
(22, 23, 'Natal', '', '2017-12-28 20:49:57'),
(23, 24, 'Porto Alegre', '', '2017-12-28 20:50:15'),
(24, 25, 'Porto Velho', '', '2017-12-28 20:50:29'),
(25, 26, 'Boa Vista', '', '2017-12-28 20:50:38'),
(26, 27, 'FlorianÃ³polis', '', '2017-12-28 20:50:50'),
(27, 4, 'SÃ£o Paulo', '', '2017-12-28 20:51:06'),
(28, 28, 'Aracaju', '', '2017-12-28 20:51:16'),
(29, 29, 'Palmas', '', '2017-12-28 20:51:25'),
(30, 1, 'Ãgua Branca', '', '2017-12-28 20:51:57'),
(31, 1, 'Anadia', '', '2017-12-28 20:52:13'),
(32, 1, 'Atalaia', '', '2017-12-28 20:52:24'),
(33, 1, 'Barra de Santo AntÃ´nio', '', '2017-12-28 20:52:37'),
(34, 1, 'Barra de SÃ£o Miguel', '', '2017-12-28 20:52:42'),
(35, 1, 'Batalha', '', '2017-12-28 20:52:50'),
(36, 1, 'BelÃ©m', '', '2017-12-28 20:53:00'),
(37, 1, 'Belo Monte', '', '2017-12-28 20:53:09'),
(38, 1, 'Boca da Mata', '', '2017-12-28 20:53:14'),
(39, 1, 'Branquinha', '', '2017-12-28 20:53:20');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `sigla` varchar(2) NOT NULL,
  `bandeira` varchar(40) NOT NULL,
  `data_cadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estado`
--

INSERT INTO `estado` (`id_estado`, `nome`, `sigla`, `bandeira`, `data_cadastro`) VALUES
(1, 'Alagoas', 'AL', '', '2017-11-30 02:42:09'),
(2, 'Pernambuco', 'PE', '', '2017-11-30 02:50:02'),
(3, 'Bahia', 'BA', '', '2017-11-30 02:50:32'),
(4, 'SÃ£o Paulo', 'SP', '', '2017-11-30 02:51:07'),
(5, 'Rio de Janeiro', 'RJ', '', '2017-11-30 02:51:16'),
(6, 'Acre', 'AC', '', '2017-12-28 20:37:52'),
(7, 'AmapÃ¡', 'AP', '', '2017-12-28 20:38:01'),
(8, 'Amazonas', 'AM', '', '2017-12-28 20:38:10'),
(9, 'CearÃ¡', 'CE', '', '2017-12-28 20:38:17'),
(10, 'Distrito Federal', 'DF', '', '2017-12-28 20:38:26'),
(11, 'EspÃ­rito Santo', 'ES', '', '2017-12-28 20:38:33'),
(12, 'GoiÃ¡s', 'GO', '', '2017-12-28 20:38:47'),
(13, 'MaranhÃ£o', 'MA', '', '2017-12-28 20:38:55'),
(14, 'Mato Grosso', 'MT', '', '2017-12-28 20:39:07'),
(17, 'Mato Grosso do Sul', 'MS', '', '2017-12-28 20:39:28'),
(18, 'Minas Gerais', 'MG', '', '2017-12-28 20:39:34'),
(19, 'ParÃ¡', 'PA', '', '2017-12-28 20:39:50'),
(20, 'ParaÃ­ba', 'PB', '', '2017-12-28 20:40:01'),
(21, 'ParanÃ¡', 'PR', '', '2017-12-28 20:40:12'),
(22, 'PiauÃ­', 'PI', '', '2017-12-28 20:40:22'),
(23, 'Rio Grande do Norte', 'RN', '', '2017-12-28 20:40:31'),
(24, 'Rio Grande do Sul', 'RS', '', '2017-12-28 20:40:42'),
(25, 'RondÃ´nia', 'RO', '', '2017-12-28 20:40:52'),
(26, 'Roraima', 'RR', '', '2017-12-28 20:41:07'),
(27, 'Santa Catarina', 'SC', '', '2017-12-28 20:41:15'),
(28, 'Sergipe', 'SE', '', '2017-12-28 20:41:25'),
(29, 'Tocantins', 'TO', '', '2017-12-28 20:41:31');

-- --------------------------------------------------------

--
-- Estrutura da tabela `partido`
--

CREATE TABLE `partido` (
  `id_partido` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `sigla` varchar(10) NOT NULL,
  `website` varchar(40) NOT NULL,
  `data_cadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidato`
--
ALTER TABLE `candidato`
  ADD PRIMARY KEY (`id_candidato`),
  ADD KEY `fk_partido` (`id_partido`),
  ADD KEY `fk_cidade` (`id_cidade`);

--
-- Indexes for table `cidade`
--
ALTER TABLE `cidade`
  ADD PRIMARY KEY (`id_cidade`),
  ADD KEY `fk_estado` (`id_estado`);

--
-- Indexes for table `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`),
  ADD UNIQUE KEY `nome` (`nome`),
  ADD UNIQUE KEY `sigla` (`sigla`);

--
-- Indexes for table `partido`
--
ALTER TABLE `partido`
  ADD PRIMARY KEY (`id_partido`),
  ADD UNIQUE KEY `nome` (`nome`),
  ADD UNIQUE KEY `sigla` (`sigla`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `login` (`login`),
  ADD UNIQUE KEY `senha` (`senha`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidato`
--
ALTER TABLE `candidato`
  MODIFY `id_candidato` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cidade`
--
ALTER TABLE `cidade`
  MODIFY `id_cidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `partido`
--
ALTER TABLE `partido`
  MODIFY `id_partido` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `candidato`
--
ALTER TABLE `candidato`
  ADD CONSTRAINT `fk_cidade` FOREIGN KEY (`id_cidade`) REFERENCES `cidade` (`id_cidade`),
  ADD CONSTRAINT `fk_partido` FOREIGN KEY (`id_partido`) REFERENCES `partido` (`id_partido`);

--
-- Limitadores para a tabela `cidade`
--
ALTER TABLE `cidade`
  ADD CONSTRAINT `fk_estado` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
