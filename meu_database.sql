-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/01/2024 às 03:42
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `meu_database`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `anuidades`
--

CREATE TABLE `anuidades` (
  `idanuidades` int(10) UNSIGNED NOT NULL,
  `anoref` int(5) UNSIGNED NOT NULL,
  `valor` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `anuidades`
--

INSERT INTO `anuidades` (`idanuidades`, `anoref`, `valor`) VALUES
(5, 2021, 90),
(6, 2022, 100),
(7, 2023, 110);

-- --------------------------------------------------------

--
-- Estrutura para tabela `associados`
--

CREATE TABLE `associados` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `ano` int(5) NOT NULL,
  `pagamento` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `associados`
--

INSERT INTO `associados` (`id`, `nome`, `email`, `cpf`, `ano`, `pagamento`) VALUES
(7, 'Lucas Marinho De Oliveira', 'desenvolvedor010@testemail.com', '111.111.111-11', 2021, 1),
(8, 'Lucas Marinho De Oliveira', '123teste@gmail.com', '12.123.451-12', 2019, 0),
(9, 'Lucas Marinho De Oliveira', 'gomes2@gmail.com', '111.942.345-12', 2023, 0),
(10, 'Lucas Marinho De Oliveira', 'desenvolvedor010@testemail.com', '111.111.111-11', 2023, 0),
(11, '', '', '', 0, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `anuidades`
--
ALTER TABLE `anuidades`
  ADD PRIMARY KEY (`idanuidades`);

--
-- Índices de tabela `associados`
--
ALTER TABLE `associados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `anuidades`
--
ALTER TABLE `anuidades`
  MODIFY `idanuidades` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `associados`
--
ALTER TABLE `associados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
