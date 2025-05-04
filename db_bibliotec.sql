-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03/05/2025 às 18:33
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
-- Banco de dados: `db_bibliotec`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `mensagens_contato`
--

CREATE TABLE `mensagens_contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mensagem` text NOT NULL,
  `data_envio` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `mensagens_contato`
--

INSERT INTO `mensagens_contato` (`id`, `nome`, `email`, `mensagem`, `data_envio`) VALUES
(1, 'Miguel Amores Ramos', 'miguel@gmail.com', 'o livro nao chegou', '2025-05-03 11:11:53'),
(2, 'Miguel Amores Ramos', 'miguel@gmail.com', 'o livro nao chegou em bom estado', '2025-05-03 11:13:33'),
(3, 'Matheus', 'matheusramos1914@gmail.com', 'Muito bom site e atendimento, nota 10!', '2025-05-03 11:15:51'),
(4, 'Miguel Amores Ramos', 'miguel@gmail.com', 'tive um problema no registro do dvd', '2025-05-03 12:50:48');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_dvd`
--

CREATE TABLE `tb_dvd` (
  `cd_dvd` int(11) NOT NULL,
  `cd_isbn` varchar(20) DEFAULT NULL,
  `nm_dvd` varchar(255) NOT NULL,
  `nm_autor` varchar(255) DEFAULT NULL,
  `ds_dvd` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_dvd`
--

INSERT INTO `tb_dvd` (`cd_dvd`, `cd_isbn`, `nm_dvd`, `nm_autor`, `ds_dvd`) VALUES
(1, '978-1234567890', 'Aventura no Espaço', 'Carlos Silva', 'Um DVD emocionante sobre viagens espaciais, com cenas deslumbrantes de planetas e estrelas.'),
(2, '978-0987654321', 'Mistério das Sombras', 'Maria Oliveira', 'Um thriller cheio de suspense, mistério e reviravoltas inesperadas.'),
(3, '978-1122334455', 'Mundo Submerso', 'João Pereira', 'Documentário sobre os oceanos do mundo, explorando a vida marinha e os recifes de corais.'),
(12, '123456789-0', 'eternal sunshine', 'Ariana Grande', 'bom demais slk');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_livro`
--

CREATE TABLE `tb_livro` (
  `cd_livro` int(11) NOT NULL,
  `cd_isbn` varchar(15) DEFAULT NULL,
  `nm_livro` varchar(45) DEFAULT NULL,
  `nm_autor` varchar(45) DEFAULT NULL,
  `ds_livro` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_livro`
--

INSERT INTO `tb_livro` (`cd_livro`, `cd_isbn`, `nm_livro`, `nm_autor`, `ds_livro`) VALUES
(1, '9788535902771', 'Grande Sertão: Veredas', 'João Guimarães Rosa', 'Romance clássico da literatura brasileira que explora a linguagem e a cultura do sertão.'),
(2, '9780061122415', 'O Sol é para Todos', 'Harper Lee', 'Um romance poderoso sobre justiça e racismo no sul dos Estados Unidos.'),
(5, '999999', 'valorant', 'riot', 'jogo'),
(6, '123456789-99', 'Grande Sertão: Caxias', 'João Guimarães Rosa', 'Romance clássico da literatura brasileira que explora a linguagem e a cultura do sertão.'),
(7, 'a', 'teste', 'João Guimarães Rosa', 'aaaaa');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `mensagens_contato`
--
ALTER TABLE `mensagens_contato`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_dvd`
--
ALTER TABLE `tb_dvd`
  ADD PRIMARY KEY (`cd_dvd`);

--
-- Índices de tabela `tb_livro`
--
ALTER TABLE `tb_livro`
  ADD PRIMARY KEY (`cd_livro`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `mensagens_contato`
--
ALTER TABLE `mensagens_contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_dvd`
--
ALTER TABLE `tb_dvd`
  MODIFY `cd_dvd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `tb_livro`
--
ALTER TABLE `tb_livro`
  MODIFY `cd_livro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
