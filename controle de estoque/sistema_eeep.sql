-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/12/2023 às 18:54
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
-- Banco de dados: `sistema_eeep`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `admin`
--

CREATE TABLE `admin` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `admin`
--

INSERT INTO `admin` (`id_usuario`, `usuario`, `senha`) VALUES
(4, 'abacate', '$2y$10$wix3YFsqcgt46AASf9Z.euLDA7c6oeLPQwo6O7abuHwpmmz6C9YC.'),
(5, 'murilo', '$2y$10$165dsukDec4.FzLGzbbRIOGYAQ4hAk/Zp4uEM9jzjgpfskK/V4XKa'),
(6, 'guiijoo', '$2y$10$y/NlSojvi8Ksy588Xt1DA.OeIURC9dwfL9Ry8Kby1OzUc8lLmQ.da');

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nome_categoria` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nome_categoria`) VALUES
(1, 'Tonner'),
(2, 'Tinta');

-- --------------------------------------------------------

--
-- Estrutura para tabela `entrada`
--

CREATE TABLE `entrada` (
  `id` int(11) NOT NULL,
  `produto` varchar(50) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `quantidade` int(11) NOT NULL,
  `data_entrada` date NOT NULL,
  `hora_entrada` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `entrada`
--

INSERT INTO `entrada` (`id`, `produto`, `categoria`, `descricao`, `quantidade`, `data_entrada`, `hora_entrada`) VALUES
(1, 'T06', 'Tonner', 'Only', 25, '2023-12-20', '13:54:37'),
(2, '283A', 'Tonner', '', 9, '2023-12-20', '13:55:56'),
(3, 'TN580', 'Tonner', '', 8, '2023-12-20', '13:57:39'),
(4, 'CE 310', 'Tonner', '', 2, '2023-12-20', '13:58:42'),
(5, 'CE 311', 'Tonner', '', 2, '2023-12-20', '13:58:51'),
(6, 'CE 312', 'Tonner', '', 2, '2023-12-20', '13:59:00'),
(7, 'CE 313', 'Tonner', '', 2, '2023-12-20', '13:59:11'),
(8, '285A', 'Tonner', '', 7, '2023-12-20', '13:59:19'),
(9, '285A', 'Tonner', '', 2, '2023-12-20', '13:59:51');

-- --------------------------------------------------------

--
-- Estrutura para tabela `estoque`
--

CREATE TABLE `estoque` (
  `id_produto` int(11) NOT NULL,
  `produto` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `consumo` varchar(10) NOT NULL,
  `quantidade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `estoque`
--

INSERT INTO `estoque` (`id_produto`, `produto`, `categoria`, `descricao`, `consumo`, `quantidade`) VALUES
(1, 'T06', 'Tonner', '                      ', 'sim', 22),
(2, '283A', 'Tonner', '                      ', 'sim', 10),
(3, 'TN580', 'Tonner', '                      ', 'sim', 8),
(4, 'CE 310', 'Tonner', '                      ', 'sim', 2),
(5, 'CE 311', 'Tonner', '                      ', 'sim', 2),
(6, 'CE 312', 'Tonner', '                      ', 'sim', 2),
(7, 'CE 313', 'Tonner', '                      ', 'sim', 2),
(8, '285A', 'Tonner', '                      ', 'sim', 6),
(9, 'TN750', 'Tonner', '                      ', 'sim', 2),
(10, 'CE314', 'Tonner', '                      ', 'sim', 2),
(11, 'CF410', 'Tonner', '                      ', 'sim', 1),
(12, 'CF411', 'Tonner', '                      ', 'sim', 1),
(13, 'CF412', 'Tonner', '                      ', 'sim', 1),
(14, 'CF413', 'Tonner', '                      ', 'sim', 3),
(15, 'W2020', 'Tonner', '                      ', 'sim', 2),
(16, 'W2021', 'Tonner', '                      ', 'sim', 2),
(17, 'W2022', 'Tonner', '                      ', 'sim', 2),
(18, 'W2023', 'Tonner', '                      ', 'sim', 2),
(19, 'D101', 'Tonner', '                      ', 'sim', 9),
(20, 'ML1665', 'Tonner', '                      ', 'sim', 2),
(21, 'ML2850', 'Tonner', '                      ', 'sim', 3),
(22, 'DR620', 'Tonner', '                      ', 'sim', 7),
(23, '05X80X', 'Tonner', '                      ', 'sim', 2),
(24, 'Q7553', 'Tonner', '                      ', 'sim', 2),
(25, '208L', 'Tonner', '                      ', 'sim', 2),
(26, 'DR750', 'Tonner', '                      ', 'sim', 5),
(27, 'D203U', 'Tonner', '                      ', 'sim', 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `descricao` varchar(200) DEFAULT NULL,
  `consumo` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `nome`, `categoria`, `descricao`, `consumo`) VALUES
(1, 'T06', 'Tonner', '                      ', 'sim'),
(2, '283A', 'Tonner', '                      ', 'sim'),
(3, 'TN580', 'Tonner', '                      ', 'sim'),
(4, 'CE 310', 'Tonner', '                      ', 'sim'),
(5, 'CE 311', 'Tonner', '                      ', 'sim'),
(6, 'CE 312', 'Tonner', '                      ', 'sim'),
(7, 'CE 313', 'Tonner', '                      ', 'sim'),
(8, '285A', 'Tonner', '                      ', 'sim'),
(9, 'TN750', 'Tonner', '                      ', 'sim'),
(10, 'CE314', 'Tonner', '                      ', 'sim'),
(11, 'CF410', 'Tonner', '                      ', 'sim'),
(12, 'CF411', 'Tonner', '                      ', 'sim'),
(13, 'CF412', 'Tonner', '                      ', 'sim'),
(14, 'CF413', 'Tonner', '                      ', 'sim'),
(15, 'W2020', 'Tonner', '                      ', 'sim'),
(16, 'W2021', 'Tonner', '                      ', 'sim'),
(17, 'W2022', 'Tonner', '                      ', 'sim'),
(18, 'W2023', 'Tonner', '                      ', 'sim'),
(19, 'D101', 'Tonner', '                      ', 'sim'),
(20, 'ML1665', 'Tonner', '                      ', 'sim'),
(21, 'ML2850', 'Tonner', '                      ', 'sim'),
(22, 'DR620', 'Tonner', '                      ', 'sim'),
(23, '05X80X', 'Tonner', '                      ', 'sim'),
(24, 'Q7553', 'Tonner', '                      ', 'sim'),
(25, '208L', 'Tonner', '                      ', 'sim'),
(26, 'DR750', 'Tonner', '                      ', 'sim'),
(27, 'D203U', 'Tonner', '                      ', 'sim');

-- --------------------------------------------------------

--
-- Estrutura para tabela `saida`
--

CREATE TABLE `saida` (
  `id` int(11) NOT NULL,
  `produto` varchar(50) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `quantidade` int(11) NOT NULL,
  `data_saida` date NOT NULL,
  `hora_saida` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `saida`
--

INSERT INTO `saida` (`id`, `produto`, `categoria`, `descricao`, `quantidade`, `data_saida`, `hora_saida`) VALUES
(3, '285A', 'Tonner', 'santa monica          ', 1, '2023-12-21', '09:40:47'),
(4, 'T06', 'Tonner', 'santa monica', 1, '2023-12-21', '09:41:23'),
(5, 'T06', 'Tonner', 'escola zigomar', 2, '2023-12-21', '10:10:46'),
(6, 'CF410', 'Tonner', 'angelo - educação                      ', 2, '2023-12-21', '13:57:01'),
(8, 'CF412', 'Tonner', 'angelo - educação                      ', 1, '2023-12-21', '13:58:31'),
(9, 'CF413', 'Tonner', 'angelo - educação', 1, '2023-12-21', '13:59:06'),
(10, 'CF411', 'Tonner', 'angelo - educação', 1, '2023-12-21', '14:09:52');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Índices de tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices de tabela `entrada`
--
ALTER TABLE `entrada`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices de tabela `saida`
--
ALTER TABLE `saida`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `entrada`
--
ALTER TABLE `entrada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `estoque`
--
ALTER TABLE `estoque`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `saida`
--
ALTER TABLE `saida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
