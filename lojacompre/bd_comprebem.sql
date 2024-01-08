-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08/01/2024 às 22:29
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

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
(1, 'Peita'),
(2, 'Calça'),
(3, 'Blusa'),
(4, 'Acessórios'),
(5, 'Casaco '),
(6, 'Malha'),
(7, 'Infantil'),
(8, 'Intimo');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_marca`
--

CREATE TABLE `tbl_marca` (
  `id_marca` int(11) NOT NULL,
  `nm_marca` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbl_marca`
--

INSERT INTO `tbl_marca` (`id_marca`, `nm_marca`) VALUES
(1, 'Chronic'),
(2, 'Nike'),
(3, 'Wanted'),
(4, 'HIGH'),
(5, 'Trasher'),
(6, 'Diamond'),
(7, 'Fire Appel'),
(8, 'Overcome'),
(9, 'Santa Cruz');

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
  `prod_lanc` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbl_produtos`
--

INSERT INTO `tbl_produtos` (`id_produto`, `nm_nome`, `ds_resumo_produto`, `vl_produto`, `nm_color_produto`, `nm_artigo`, `ds_img`, `id_marca`, `id_categoria`, `qtd_estoque`, `prod_lanc`) VALUES
(1, 'Camiseta Chronic - Skull', 'Camiseta Plus Size, 100% algodão', 140.00, 'Preto', '1.22', 'Chronic Skull P.png', 1, 1, 10, 'S'),
(2, 'Camiseta Wanted - OL', 'Camiseta Plus Size em 100% algodão', 159.90, 'Branco', '1.22', 'Wanted OL.png', 3, 1, 10, 'N'),
(3, 'Camiseta Diamond - Bunny', 'Camiseta Plus Size em 100% algodão', 189.90, 'Preto', '1.22', 'Diamond Bunny.png', 6, 1, 10, 'N'),
(4, 'Camiseta Santa Cruz - Scream', 'Camiseta Plus Size em 100% algodão', 190.00, 'Branco', '1.22', 'SC Scream B.png', 9, 1, 10, 'N'),
(5, 'Calça Cargo Fire', '100% Algodão', 129.90, 'Preto', '1.22', 'Fire Cargo P.png', 7, 2, 10, 'S'),
(6, 'Calça Overcome - Strip', '100% Poliéster', 189.90, 'Preto e Branco', '1.22', 'Overcome Strip.png', 8, 2, 10, 'N'),
(7, 'Calça Santa Cruz - Painters', 'Sarja', 21000.00, 'Azul Marinho', '1.22', '4888a53610d85cceaffb84b040075b48.png', 9, 2, 10, 'N'),
(9, 'Casaco Corta Vento Nike', '100% de fibras de poliéster recicladas', 99999.99, 'Preto', '1.22', 'Corta Vento Nike.png', 2, 5, 10, 'N'),
(10, 'Casaco Moletom Diamond Careca', '50% algodão e 50% poliéster', 99999.99, 'Preto', '1.22', 'Moletom Diamond.png', 6, 5, 0, 'N'),
(11, 'Casaco Moletom Wanted', '100% algodão', 99999.99, 'Preto', '1.22', 'Moletom Wanted.png', 3, 5, 10, 'N'),
(12, 'Casaco Moletom High', '100% algodão', 99999.99, 'Branco', '1.22', 'Moletom High.png', 4, 5, 10, 'S'),
(13, 'Five Panel Chronic', 'Boné estilo Five Panel', 80.00, 'Preto', '1.22', 'Five Panel Chronic.png', 1, 4, 10, 'S'),
(14, 'Shoulder Big Bag Fire', '100% poliéster', 139.90, 'Preto', '1.22', 'Shoulder Bag Fire.png', 7, 4, 10, 'N'),
(15, 'Chinelo Overcome', 'Tira única', 79.90, 'Preto', '1.22', 'Chinelo Overcome.png', 8, 4, 10, 'N'),
(16, 'Cordão Wanted', 'Fecho abre fácil', 2000.00, 'Preto', '1.22', '03fd8c4c9cc546b41f2d3ffb8811ca5c.png', 3, 4, 10, 'N'),
(17, 'Casaco Cat Rosa Feminino', 'Casaco 100% algodão, estampa de gato, disponível somente na cor rosa, do PP ao XG.', 105.00, 'Rosa', '1.20', '837e9338502b987902983583b6400ec5.jpg', 6, 5, 20, 'S'),
(21, 'Calça Feminina Fitness', 'Calça Feminina Fitness Premium Academia Tarelles\r\nTecido: Suplex de Poliamida / Beach Gloss de Poliamida\r\nTecido de excelente qualidade e elasticidade\r\nTecido toque suave e brilho\r\nProteção UV 50\r\nCosturas reforçadas\r\nZero transparência\r\nNão possui bolso\r\n\r\nComposição: 84% Poliamida 16% Elastano', 26.00, 'Cinza e preto', '1,22', '901092c6e59413c5bca4e9365d7361f0.jpg', 2, 2, 15, 'N'),
(22, 'Conjunto infantil Marrie verão', 'Roupas para bebês meninas verão roupas femininas manga mosca cor lisa top saia canelada 2 peças para crianças  de até 6 anos.', 79.19, 'Rosa e Braco', '1,22', '16a9b1be52bea4e0135e2e4f879cff85.jpg', 3, 7, 30, 'S'),
(23, 'Conjunto Infantil Esportivo', 'Conjunto Roupa Infantil Menino Verão Camiseta e Shorts Kit Masculino - Azul', 135.00, 'Rosa e Braco', '1,22', 'c31d44a96bdfcca2c6e39b672295fe43.jpg', 2, 7, 30, 'N');

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
  `desc_senha` char(10) NOT NULL,
  `desc_status` tinyint(1) NOT NULL,
  `desc_endereco` varchar(80) NOT NULL,
  `desc_cidade` varchar(30) NOT NULL,
  `num_cep` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`id_usuario`, `nm_usuario`, `sbnm_usuario`, `cell_usuario`, `desc_email`, `desc_senha`, `desc_status`, `desc_endereco`, `desc_cidade`, `num_cep`) VALUES
(1, 'Bruna', 'Vieira', '991527145', 'br.vieiradasilva@gmail.com', '456789', 12, 'Rua Ar', 'Nova Iguaçu', '26050131'),
(2, 'Yasmin', 'Santos', '(21) 96578-1313', 'yas@gmail.com', '123456', 0, 'Rua Bastos Costa', 'Nova Iguaçu', '26 770-211'),
(3, 'Jacira Santos', 'Ferreira', '(21) 96685-1673', 'jaci@gmail.com', '123456', 0, 'Ruas Bastos ,75', 'Nova Iguaçu', '26 070-221');

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
(5, '6594a7f814e90', 1, 17, 1, 105.00, 105.00, '2024-01-03', NULL);

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
,`nm_marca` varchar(45)
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

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_produto`  AS SELECT `tbl_produtos`.`id_produto` AS `id_produto`, `tbl_produtos`.`nm_nome` AS `nm_nome`, `tbl_produtos`.`ds_resumo_produto` AS `ds_resumo_produto`, `tbl_produtos`.`vl_produto` AS `vl_produto`, `tbl_produtos`.`nm_color_produto` AS `nm_color_produto`, `tbl_produtos`.`nm_artigo` AS `nm_artigo`, `tbl_produtos`.`ds_img` AS `ds_img`, `tbl_produtos`.`qtd_estoque` AS `qtd_estoque`, `tbl_produtos`.`prod_lanc` AS `prod_lanc`, `tbl_marca`.`nm_marca` AS `nm_marca`, `tbl_categoria`.`nm_categoria` AS `nm_categoria` FROM ((`tbl_produtos` join `tbl_categoria` on(`tbl_produtos`.`id_categoria` = `tbl_categoria`.`id_categoria`)) join `tbl_marca` on(`tbl_produtos`.`id_marca` = `tbl_marca`.`id_marca`)) ;

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
-- Índices de tabela `tbl_marca`
--
ALTER TABLE `tbl_marca`
  ADD PRIMARY KEY (`id_marca`);

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
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tbl_marca`
--
ALTER TABLE `tbl_marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tbl_produtos`
--
ALTER TABLE `tbl_produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tbl_vendas`
--
ALTER TABLE `tbl_vendas`
  MODIFY `id_venda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tbl_produtos`
--
ALTER TABLE `tbl_produtos`
  ADD CONSTRAINT `fk_cole` FOREIGN KEY (`id_categoria`) REFERENCES `tbl_categoria` (`id_categoria`),
  ADD CONSTRAINT `fk_marca` FOREIGN KEY (`id_marca`) REFERENCES `tbl_marca` (`id_marca`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
