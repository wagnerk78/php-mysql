-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Jun-2022 às 14:50
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_curso`
--
CREATE DATABASE IF NOT EXISTS `bd_curso` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bd_curso`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcategoria`
--

DROP TABLE IF EXISTS `tbcategoria`;
CREATE TABLE `tbcategoria` (
  `idCategoria` int(11) NOT NULL,
  `nmCategoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbcategoria`
--

INSERT INTO `tbcategoria` (`idCategoria`, `nmCategoria`) VALUES
(1, 'Alimentos'),
(2, 'Vestuário'),
(3, 'Tecnologia da Informação'),
(4, 'Cosméticos'),
(5, 'Eletrônicos'),
(6, 'Laticínios'),
(7, 'Perfumaria'),
(8, 'Brinquedos'),
(9, 'Limpeza'),
(10, 'Móveis'),
(11, 'Bebidas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbprodutos`
--

DROP TABLE IF EXISTS `tbprodutos`;
CREATE TABLE `tbprodutos` (
  `idProduto` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `nmProduto` varchar(50) NOT NULL,
  `descProduto` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbprodutos`
--

INSERT INTO `tbprodutos` (`idProduto`, `idCategoria`, `nmProduto`, `descProduto`) VALUES
(1, 1, 'Arroz', '5kg'),
(2, 3, 'Notebook', '15 polegadas'),
(3, 11, 'Refrigerante', '1l'),
(4, 5, 'Smartphone', '6 polegadas'),
(5, 10, 'Mesa', '140cm x 70cm'),
(6, 11, 'Água', '500ml'),
(7, 11, 'Gatorade', '500ml'),
(8, 1, 'Feijão', '1kg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbcategoria`
--
ALTER TABLE `tbcategoria`
  ADD PRIMARY KEY (`idCategoria`),
  ADD KEY `idCategoria` (`idCategoria`);

--
-- Índices para tabela `tbprodutos`
--
ALTER TABLE `tbprodutos`
  ADD PRIMARY KEY (`idProduto`),
  ADD KEY `idCategoria` (`idCategoria`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbcategoria`
--
ALTER TABLE `tbcategoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `tbprodutos`
--
ALTER TABLE `tbprodutos`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbprodutos`
--
ALTER TABLE `tbprodutos`
  ADD CONSTRAINT `tbprodutos_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `tbcategoria` (`idCategoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
