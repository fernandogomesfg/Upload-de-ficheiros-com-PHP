-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Out-2021 às 22:03
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_upload`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_imagens`
--

CREATE TABLE `tbl_imagens` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_imagens`
--

INSERT INTO `tbl_imagens` (`id`, `nome`, `imagem`) VALUES
(1, '', '166cadc48e0de85a12508d9aeec7c5f3.png'),
(2, 'Teste 2', 'c4701b8b5cefd94f60042be7ba84e732.jpg'),
(3, 'Teste 3', '2f690c9a9860984e0a0eb78fd694a7d0.jpg'),
(4, 'Teste 4', 'da32f9a2ff7efbcc19a6e5bd4d70c9a4.jpg'),
(5, 'Teste', '043ad60bde1c46b5eb7f05e18fab2aba.jpg'),
(6, '', 'fcdffdac40e798c886df5e662f2e557e.jpg'),
(7, '', 'a1d001c370d51d0469f44fcb0f1c4517.jpg'),
(8, 'Teste', 'e7dab3a1a97dca6d58c08b2d9022dfa8.jpg'),
(9, '', 'b5b40b26369a4e0411684c0a507931ba.jpg'),
(10, '', '03b02eb2c9bf4efd021a4d49f2ffe531.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbl_imagens`
--
ALTER TABLE `tbl_imagens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbl_imagens`
--
ALTER TABLE `tbl_imagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
