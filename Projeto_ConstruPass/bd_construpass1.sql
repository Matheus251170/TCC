-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Jun-2021 às 19:02
-- Versão do servidor: 8.0.24
-- versão do PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_construpass1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cliente`
--

CREATE TABLE `tb_cliente` (
  `id_cliente` int NOT NULL,
  `nome_cliente` varchar(50) NOT NULL,
  `cpf_cliente` varchar(14) NOT NULL,
  `rg_cliente` varchar(12) DEFAULT NULL,
  `numero_imovel` varchar(5) NOT NULL,
  `complemento_endereco` varchar(25) DEFAULT NULL,
  `senha_user` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email_cliente` varchar(100) NOT NULL,
  `cep_endereco` mediumint NOT NULL,
  `telefone_contato` varchar(15) DEFAULT NULL,
  `celular_contato` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tb_cliente`
--

INSERT INTO `tb_cliente` (`id_cliente`, `nome_cliente`, `cpf_cliente`, `rg_cliente`, `numero_imovel`, `complemento_endereco`, `senha_user`, `email_cliente`, `cep_endereco`, `telefone_contato`, `celular_contato`) VALUES
(23, 'Marcos Matheus', '12345678999', '2536', '156', 'rua rua', 'admadmadmadm', 'matheus@gmail.com', 1234, '45454', '2131331312'),
(24, 'Marcos Matheus', '12345678999', '2536', 'rodo', 'rua rua', '1231231231', 'rodolfodopneu@gmail.com', 1234, '40028', '21313'),
(25, 'Marcos Matheus', '12345678999', '2536', 'rodo', 'rua rua', '1231231231', 'rodolfodopneu@gmail.com', 1234, '45454', '21313'),
(26, 'Marcos Matheus', '98765432100', '25365988', 'rodo', 'rua rua2', '1231231236', 'rodolfodopneu@gmail.com', 1234, '40028', '2131331312'),
(27, 'matheus', '565656', '565656', '5', 'rua', '123', 'matheus251170@outlook.com', 656, '56565', '656565'),
(28, 'alguem', '4554', '5465', '545', '454', '1234567890', 'alguem@email.com', 4554, '4545', '4545'),
(29, 'Marcos Matheus', '1231', '1234', '123', '125', '123123123123', 'matheus@gmail.com', 2131, '1233', '123132'),
(30, 'joyce', '465', '465', '465', '456', '4564564560', 'joyce@gmail.com', 465, '46546', '4546'),
(31, 'Beatriz', '5656', '', '2', 'rua rua', '123123123123', 'bia@gmail.com', 1234, '45454', '21313'),
(32, 'Marcos Matheus', '1234', '2536', '2', 'rua rua', '101193d7181cc88340ae5b2b17bba8a1', 'matheus@gmail.com', 1234, '45454', '21313'),
(33, 'Marcos Matheus', '12345678999', '2536', '25', 'rua rua2', '101193d7181cc88340ae5b2b17bba8a1', 'rodolfodopneu@gmail.com', 1234, '45454', '21313'),
(34, 'Marcos ', '1234', '2536', '2', 'rua rua', '1b2de2499e5f93e00a5a90e79a9da4b1', 'matheus@gmail.com', 1234, '45454', '21313');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_funcionario`
--

CREATE TABLE `tb_funcionario` (
  `id_funcionario` int NOT NULL,
  `nome_funcionario` varchar(50) NOT NULL,
  `cpf_funcionario` varchar(14) NOT NULL,
  `rg_funcionario` varchar(12) DEFAULT NULL,
  `numero_casa` varchar(5) NOT NULL,
  `complemento_endereco` varchar(25) DEFAULT NULL,
  `senha_user` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cep_endereco` mediumint NOT NULL,
  `telefone_contato` varchar(15) DEFAULT NULL,
  `celular_contato` varchar(15) NOT NULL,
  `nome_profissao` varchar(20) NOT NULL,
  `escolaridade` varchar(50) DEFAULT NULL,
  `email_funcionario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_cliente`
--
ALTER TABLE `tb_cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `tb_funcionario`
--
ALTER TABLE `tb_funcionario`
  ADD PRIMARY KEY (`id_funcionario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_cliente`
--
ALTER TABLE `tb_cliente`
  MODIFY `id_cliente` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `tb_funcionario`
--
ALTER TABLE `tb_funcionario`
  MODIFY `id_funcionario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
