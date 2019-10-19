-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 19-Out-2019 às 02:19
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemajf`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `baixas`
--

DROP TABLE IF EXISTS `baixas`;
CREATE TABLE IF NOT EXISTS `baixas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produto_id` int(11) NOT NULL,
  `nome` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `data` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `referencia` varchar(255) DEFAULT NULL,
  `aplicacao` varchar(255) DEFAULT NULL,
  `valor_custo` double NOT NULL,
  `valor_venda` double NOT NULL,
  `data_entrada` date NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `quantidade` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `referencia`, `aplicacao`, `valor_custo`, `valor_venda`, `data_entrada`, `categoria`, `quantidade`) VALUES
(1, 'asd', 'asd', 'asd', 123, 123, '2016-10-19', 'mecanica', 9),
(2, 'asd', 'asd', 'asd', 123, 123, '2016-10-19', 'mecanica', 1),
(3, 'Lorem ipsum', 'Lorem ipsum', 'Lorem ipsum', 30, 60, '2018-10-19', 'mecanica', 2),
(4, 'Amet', 'Sit', 'Lorem ipsum', 30, 60, '2018-10-19', 'mecanica', 2),
(5, 'Const', 'Sit', 'Lorem ipsum', 30, 60, '2018-10-19', 'mecanica', 2),
(6, 'Ambic', 'Sit', 'Lorem ipsum', 30, 60, '2018-10-19', 'mecanica', 2),
(7, '007', 'Sit', 'Lorem ipsum', 30, 60, '2018-10-19', 'mecanica', 2),
(8, 'Aueba', 'Aueba', 'Aueba', 123, 321, '2018-10-19', 'lubrificantes', 2),
(9, 'asd', 'ads', 'asd', 123, 321, '2018-10-19', 'acessorios', 12),
(10, 'Ipsuneler', 'Ipsuneler', 'Ipsuneler', 123, 321, '2018-10-19', 'outros', 11),
(11, 'Aisuha', 'Aisuha', 'Aisuha', 111, 333, '2018-10-19', 'lubrificantes', 16);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `hierarquia` varchar(255) NOT NULL,
  `clienteId` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `usuario`, `senha`, `email`, `token`, `hierarquia`, `clienteId`) VALUES
(1, 'Fabiano Monteiro', 'admin', 'admin', 'admin@email.com', 'notoken', 'admin', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
