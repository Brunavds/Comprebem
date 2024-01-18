-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18/01/2024 às 16:43
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
-- Banco de dados: `bd_comprebem`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_categoria`
--

CREATE TABLE `tbl_categoria` (
  `id_categoria` int(11) NOT NULL,
  `nm_categoria` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbl_categoria`
--

INSERT INTO `tbl_categoria` (`id_categoria`, `nm_categoria`) VALUES
(2, 'Feminino'),
(3, 'Infantil'),
(9, 'Masculino'),
(10, 'Moda Praia');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_produtos`
--

CREATE TABLE `tbl_produtos` (
  `id_produto` int(11) NOT NULL,
  `nm_nome` varchar(75) NOT NULL,
  `ds_resumo_produto` text NOT NULL,
  `vl_produto` decimal(7,2) NOT NULL,
  `nm_color_produto` varchar(40) NOT NULL,
  `nm_artigo` varchar(8) NOT NULL,
  `ds_img` varchar(255) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `qtd_estoque` int(11) NOT NULL,
  `prod_lanc` char(1) NOT NULL,
  `nm_marca` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbl_produtos`
--

INSERT INTO `tbl_produtos` (`id_produto`, `nm_nome`, `ds_resumo_produto`, `vl_produto`, `nm_color_produto`, `nm_artigo`, `ds_img`, `id_marca`, `id_categoria`, `qtd_estoque`, `prod_lanc`, `nm_marca`) VALUES
(21, 'Calça Feminina Fitness', 'Calça Feminina Fitness Premium Academia Tarelles\r\nTecido: Suplex de Poliamida / Beach Gloss de Poliamida\r\nTecido de excelente qualidade e elasticidade\r\nTecido toque suave e brilho\r\nProteção UV 50\r\nCosturas reforçadas\r\nZero transparência\r\nNão possui bolso\r\n\r\nComposição: 84% Poliamida 16% Elastano', 7500.00, 'Cinza e preto', '1,22', '901092c6e59413c5bca4e9365d7361f0.jpg', 0, 2, 60, 'N', 'Nike'),
(24, 'Conjunto Mariana Rosa Infantil', 'Conjunto Infantil Mariana rosa com blusa branca de manga croc. Disponível para crianças de 3 a 7 anos.', 5900.00, 'Rosa e Branco', '1,00', '451e9740a859e9b5ce48479abc0249a2.jpg', 6, 3, 20, 'S', 'Lilica'),
(25, 'Casaco Corta Vento Nike', 'Corta vento Nike com fecho duplo. Disponível do P ao GG.', 12500.00, 'Branco e Preto', '1,22', '9eb1b948b5a5cc23ab8da03b55af9864.png', 0, 9, 100, 'N', 'Nike'),
(30, 'Kit Biquíni + Saída de Praia Cherry', 'Lindo conjunto de biquíni com saída de praia do P ao GG que , tecido de Lycra.', 17900.00, 'Branco', '1,22', 'd7a5c2b21a9354c5ebe3957a2085fe91.jpg', 0, 10, 100, 'S', 'Cherry');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `id_usuario` int(11) NOT NULL,
  `nm_usuario` varchar(80) NOT NULL,
  `sbnm_usuario` varchar(80) NOT NULL,
  `cell_usuario` char(15) NOT NULL,
  `desc_email` varchar(80) NOT NULL,
  `desc_senha` varchar(255) DEFAULT NULL,
  `desc_status` tinyint(1) NOT NULL,
  `desc_endereco` varchar(80) NOT NULL,
  `desc_cidade` varchar(30) NOT NULL,
  `num_cep` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`id_usuario`, `nm_usuario`, `sbnm_usuario`, `cell_usuario`, `desc_email`, `desc_senha`, `desc_status`, `desc_endereco`, `desc_cidade`, `num_cep`) VALUES
(2, 'Yasmin', 'Santos', '(21) 96578-1313', 'yas@gmail.com', '123456', 0, 'Rua Bastos Costa', 'Nova Iguaçu', '26 770-211'),
(3, 'Jacira Santos', 'Ferreira', '(21) 96685-1673', 'jaci@gmail.com', '123456', 0, 'Ruas Bastos ,75', 'Nova Iguaçu', '26 070-221'),
(4, 'Sabrina', 'Silva', '(21) 97765-8421', 'sab.soares@gmail.com', '123456', 0, 'Rua Oscilio Maiaa', 'Rio de Janeiro', '24 010-221'),
(5, 'Tadeu', 'Santos', '(21) 97855-4221', 'tad@gmail.com', '$2y$10$5EK', 0, 'Rua Cascavel ', 'Peracanjuba', '26 070-221'),
(6, 'Bruna', 'Vieia', '(21) 97765-8421', 'br.vieiradasilva@gmail.com', '$2y$10$sTb', 0, 'Rua Cascavel ', 'Rio de Janeiro', '24 010-221');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_vendas`
--

CREATE TABLE `tbl_vendas` (
  `id_venda` int(11) NOT NULL,
  `nm_ticket` varchar(13) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `qtd_produto` int(11) NOT NULL,
  `vl_produto` decimal(7,2) NOT NULL,
  `vl_total` decimal(10,2) DEFAULT NULL,
  `data_venda` date NOT NULL,
  `meio_pagamento` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbl_vendas`
--

INSERT INTO `tbl_vendas` (`id_venda`, `nm_ticket`, `id_cliente`, `id_produto`, `qtd_produto`, `vl_produto`, `vl_total`, `data_venda`, `meio_pagamento`) VALUES
(1, '658d93e10a0fa', 2, 3, 1, 189.90, 189.90, '2023-12-28', NULL),
(2, '658d93e10a0fa', 2, 5, 1, 129.90, 129.90, '2023-12-28', NULL),
(3, '658d946f8323f', 2, 3, 1, 189.90, 189.90, '2023-12-28', NULL),
(4, '658d946f8323f', 2, 5, 1, 129.90, 129.90, '2023-12-28', NULL),
(5, '6594a7f814e90', 1, 17, 1, 105.00, 105.00, '2024-01-03', NULL),
(6, '659d5fc7c0ae1', 1, 21, 1, 26.00, 26.00, '2024-01-09', NULL),
(7, '659d6067bf70d', 1, 21, 1, 26.00, 26.00, '2024-01-09', NULL),
(8, '659d6910d6ed2', 1, 21, 1, 26.00, 26.00, '2024-01-09', NULL),
(9, '659d69e398798', 1, 21, 1, 26.00, 26.00, '2024-01-09', NULL),
(10, '659d6a265e188', 1, 21, 1, 26.00, 26.00, '2024-01-09', NULL),
(11, '659d6a6f56940', 1, 21, 1, 26.00, 26.00, '2024-01-09', NULL),
(12, '659d6c54156c4', 1, 21, 1, 26.00, 26.00, '2024-01-09', NULL),
(13, '659d6c5518a00', 1, 21, 1, 26.00, 26.00, '2024-01-09', NULL),
(14, '659d78c414931', 1, 21, 1, 26.00, 26.00, '2024-01-09', NULL),
(15, '659dbb8ce2a56', 1, 5, 1, 129.90, 129.90, '2024-01-09', NULL),
(16, '659dbdc07ebe2', 1, 5, 2, 129.90, 259.80, '2024-01-09', NULL),
(17, '659dbf22f1f07', 1, 5, 2, 129.90, 259.80, '2024-01-09', NULL),
(18, '659dc051a83f4', 1, 5, 2, 129.90, 259.80, '2024-01-09', NULL),
(19, '659dc49c655b2', 1, 5, 2, 129.90, 259.80, '2024-01-09', NULL),
(20, '659dc6318d147', 1, 5, 2, 129.90, 259.80, '2024-01-09', NULL),
(21, '659dc72e46f0f', 1, 5, 2, 129.90, 259.80, '2024-01-09', NULL),
(22, '659dc898295ba', 1, 5, 2, 129.90, 259.80, '2024-01-09', NULL),
(23, '659dc971af0ff', 1, 5, 2, 129.90, 259.80, '2024-01-09', NULL),
(24, '659dce252c0e6', 1, 5, 2, 129.90, 259.80, '2024-01-09', NULL),
(26, '659dd1be5e3be', 1, 5, 2, 129.90, 259.80, '2024-01-10', NULL),
(27, '659ddd9283c65', 1, 5, 2, 129.90, 259.80, '2024-01-10', NULL),
(28, '659ddda9deaf7', 1, 5, 2, 129.90, 259.80, '2024-01-10', NULL),
(29, '659dddae389f8', 1, 5, 2, 129.90, 259.80, '2024-01-10', NULL),
(30, '659de49ba8459', 1, 5, 2, 129.90, 259.80, '2024-01-10', NULL),
(31, '65a165ef0fa82', 1, 24, 1, 59.00, 59.00, '2024-01-12', NULL),
(32, '65a1661c70988', 1, 24, 1, 59.00, 59.00, '2024-01-12', NULL),
(33, '65a46c271348c', 1, 30, 1, 17900.00, 17900.00, '2024-01-15', NULL);

--
-- Acionadores `tbl_vendas`
--
DELIMITER $$
CREATE TRIGGER `calc_vl_total` BEFORE INSERT ON `tbl_vendas` FOR EACH ROW BEGIN
  SET NEW.vl_total = NEW.qtd_produto * NEW.vl_produto;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura stand-in para view `vw_produto`
-- (Veja abaixo para a visão atual)
--
CREATE TABLE `vw_produto` (
`id_produto` int(11)
,`nm_nome` varchar(75)
,`ds_resumo_produto` text
,`vl_produto` decimal(7,2)
,`nm_color_produto` varchar(40)
,`nm_artigo` varchar(8)
,`ds_img` varchar(255)
,`qtd_estoque` int(11)
,`prod_lanc` char(1)
,`nm_categoria` varchar(45)
);

-- --------------------------------------------------------

--
-- Estrutura stand-in para view `vw_venda`
-- (Veja abaixo para a visão atual)
--
CREATE TABLE `vw_venda` (
`nm_ticket` varchar(13)
,`id_cliente` int(11)
,`data_venda` date
,`qtd_produto` int(11)
,`vl_total` decimal(10,2)
,`nm_nome` varchar(75)
);

-- --------------------------------------------------------

--
-- Estrutura para view `vw_produto`
--
DROP TABLE IF EXISTS `vw_produto`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_produto`  AS SELECT `tbl_produtos`.`id_produto` AS `id_produto`, `tbl_produtos`.`nm_nome` AS `nm_nome`, `tbl_produtos`.`ds_resumo_produto` AS `ds_resumo_produto`, `tbl_produtos`.`vl_produto` AS `vl_produto`, `tbl_produtos`.`nm_color_produto` AS `nm_color_produto`, `tbl_produtos`.`nm_artigo` AS `nm_artigo`, `tbl_produtos`.`ds_img` AS `ds_img`, `tbl_produtos`.`qtd_estoque` AS `qtd_estoque`, `tbl_produtos`.`prod_lanc` AS `prod_lanc`, `tbl_categoria`.`nm_categoria` AS `nm_categoria` FROM (`tbl_produtos` join `tbl_categoria` on(`tbl_produtos`.`id_categoria` = `tbl_categoria`.`id_categoria`)) ;

-- --------------------------------------------------------

--
-- Estrutura para view `vw_venda`
--
DROP TABLE IF EXISTS `vw_venda`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_venda`  AS SELECT `tbl_vendas`.`nm_ticket` AS `nm_ticket`, `tbl_vendas`.`id_cliente` AS `id_cliente`, `tbl_vendas`.`data_venda` AS `data_venda`, `tbl_vendas`.`qtd_produto` AS `qtd_produto`, `tbl_vendas`.`vl_total` AS `vl_total`, `tbl_produtos`.`nm_nome` AS `nm_nome` FROM (`tbl_vendas` join `tbl_produtos` on(`tbl_vendas`.`id_produto` = `tbl_produtos`.`id_produto`)) ;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices de tabela `tbl_produtos`
--
ALTER TABLE `tbl_produtos`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `fk_cole` (`id_categoria`),
  ADD KEY `fk_marca` (`id_marca`);

--
-- Índices de tabela `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Índices de tabela `tbl_vendas`
--
ALTER TABLE `tbl_vendas`
  ADD PRIMARY KEY (`id_venda`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `tbl_produtos`
--
ALTER TABLE `tbl_produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbl_vendas`
--
ALTER TABLE `tbl_vendas`
  MODIFY `id_venda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tbl_produtos`
--
ALTER TABLE `tbl_produtos`
  ADD CONSTRAINT `fk_cole` FOREIGN KEY (`id_categoria`) REFERENCES `tbl_categoria` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
