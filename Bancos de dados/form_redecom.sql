-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Ago-2020 às 19:31
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `form_redecom`
--
CREATE DATABASE IF NOT EXISTS `form_redecom` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `form_redecom`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `formredecon`
--

DROP TABLE IF EXISTS `formredecon`;
CREATE TABLE `formredecon` (
  `NOME_SOLICITANTE` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SECRETARIA_SOLICITANTE` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SECRETARIA_SOLICITANTE2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CARGO_SOLICITANTE` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EMAIL_SOLICITANTE` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TELEFONE_SOLICITANTE` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ASSUNTO_DEMANDA` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TIPO_DEMANDA` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DATA_D` date DEFAULT NULL,
  `HORA` time DEFAULT NULL,
  `ENDERECO` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PERSONALIDADE_DEMANDA` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DEMANDA` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ANEXO_DEMANDA` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NOME_CHEFE` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EMAILCHEFE` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TELEFONECHEFE` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `formredecon`
--

INSERT INTO `formredecon` (`NOME_SOLICITANTE`, `SECRETARIA_SOLICITANTE`, `SECRETARIA_SOLICITANTE2`, `CARGO_SOLICITANTE`, `EMAIL_SOLICITANTE`, `TELEFONE_SOLICITANTE`, `ASSUNTO_DEMANDA`, `TIPO_DEMANDA`, `DATA_D`, `HORA`, `ENDERECO`, `PERSONALIDADE_DEMANDA`, `DEMANDA`, `ANEXO_DEMANDA`, `NOME_CHEFE`, `EMAILCHEFE`, `TELEFONECHEFE`, `id`) VALUES
('teste', 'CGM - CONTROLADORIA', 'AF - ASSISTÊNCIA FAR', 'teste', 'teste@mesquita.rj.go', '2133455666', 'teste', 'on', '2020-07-14', '15:01:00', 'htfdfdsfsdffg', 'fgfdsgfg', ' sfgdfhjghjk', '', 'teste', 'teste@mesquita.rj.gov.br', '21345678654', 1),
('teste2', 'CGM - CONTROLADORIA', 'AF - ASSISTÊNCIA FAR', 'fgfs', 'teste@mesquita.rj.go', '2133455666', 'dsadsdadsa', 'on', '2020-07-14', '15:06:00', 'htfdfdsfsdffg', 'sadsdffdd', ' sdaffdgdsfad', '', 'dsdefe', 'teste@mesquita.rj.gov.br', '21345678654', 2),
('teste', 'CGM - CONTROLADORIA', 'AF - ASSISTÊNCIA FAR', 'teste', 'teste@mesquita.rj.go', '2133455666', 'teste', 'FOTOGRAFIA', '2020-07-14', '15:11:00', 'htfdfdsfsdffg', 'fgfdsgfg', ' zcxcvbbvn', '', 'teste', 'teste@mesquita.rj.gov.br', '21345678654', 3),
('teste', 'CGM - CONTROLADORIA', 'AF - ASSISTÊNCIA FAR', 'teste', 'teste@mesquita.rj.go', '2133455666', 'teste', 'DESIGNER GRÁFICO', '2020-07-14', '15:45:00', 'htfdfdsfsdffg', 'fgfdsgfg', ' sadfgh', '', 'rtsfdfg', 'teste@mesquita.rj.gov.br', '21345678654', 4),
('teste', 'GABINETE DO PREFEITO', 'AF - ASSISTÊNCIA FAR', 'teste', 'teste@mesquita.rj.go', '2133455666', 'teste', 'MÍDIA SOCIAL', '2020-07-14', '15:52:00', 'htfdfdsfsdffg', 'fgfdsgfg', ' hjhkj', '', 'teste', 'teste@mesquita.rj.gov.br', '21345678654', 5),
('teste', 'GABINETE DO PREFEITO', 'AF - ASSISTÊNCIA FAR', 'teste', 'teste@mesquita.rj.go', '2133455666', 'teste', 'FOTOGRAFIA', '2020-07-14', '16:16:00', 'htfdfdsfsdffg', 'fgfdsgfg', ' SADFGHJ', '', 'teste', 'teste@mesquita.rj.gov.br', '21345678654', 6),
('teste', 'GABINETE DO PREFEITO', 'AF - ASSISTÊNCIA FAR', 'teste', 'teste@mesquita.rj.go', '2133455666', 'teste', 'FOTOGRAFIA', '2020-07-14', '16:16:00', 'htfdfdsfsdffg', 'fgfdsgfg', ' SADFGHJ', '', 'teste', 'teste@mesquita.rj.gov.br', '21345678654', 7),
('teste', 'GABINETE DO PREFEITO', 'AF - ASSISTÊNCIA FAR', 'teste', 'teste@mesquita.rj.go', '2133455666', 'teste', 'FOTOGRAFIA', '2020-07-14', '16:16:00', 'htfdfdsfsdffg', 'fgfdsgfg', ' SADFGHJ', '', 'teste', 'teste@mesquita.rj.gov.br', '21345678654', 8),
('teste', 'GABINETE DO PREFEITO', 'AF - ASSISTÊNCIA FAR', 'teste', 'teste@mesquita.rj.go', '2133455666', 'teste', 'FOTOGRAFIA', '2020-07-14', '16:16:00', 'htfdfdsfsdffg', 'fgfdsgfg', ' SADFGHJ', '', 'teste', 'teste@mesquita.rj.gov.br', '21345678654', 9),
('teste', 'GABINETE DO PREFEITO', 'AF - ASSISTÊNCIA FAR', 'teste', 'teste@mesquita.rj.go', '2133455666', 'teste', 'FOTOGRAFIA', '2020-07-14', '16:16:00', 'htfdfdsfsdffg', 'fgfdsgfg', ' SADFGHJ', '', 'teste', 'teste@mesquita.rj.gov.br', '21345678654', 10),
('teste', 'GABINETE DO PREFEITO', 'AF - ASSISTÊNCIA FAR', 'teste', 'teste@mesquita.rj.go', '2133455666', 'teste', 'FOTOGRAFIA', '2020-07-14', '16:16:00', 'htfdfdsfsdffg', 'fgfdsgfg', ' SADFGHJ', '', 'teste', 'teste@mesquita.rj.gov.br', '21345678654', 11),
('teste', 'GABINETE DO PREFEITO', 'AF - ASSISTÊNCIA FAR', 'teste', 'teste@mesquita.rj.go', '2133455666', 'teste', 'FOTOGRAFIA', '2020-07-14', '16:16:00', 'htfdfdsfsdffg', 'fgfdsgfg', ' SADFGHJ', '', 'teste', 'teste@mesquita.rj.gov.br', '21345678654', 12),
('teste', 'GABINETE DO PREFEITO', 'AF - ASSISTÊNCIA FAR', 'teste', 'teste@mesquita.rj.go', '2133455666', 'teste', 'FOTOGRAFIA', '2020-07-14', '16:16:00', 'htfdfdsfsdffg', 'fgfdsgfg', ' SADFGHJ', '', 'teste', 'teste@mesquita.rj.gov.br', '21345678654', 13),
('teste', 'GABINETE DO PREFEITO', 'AF - ASSISTÊNCIA FAR', 'teste', 'teste@mesquita.rj.go', '2133455666', 'teste', 'FOTOGRAFIA', '2020-07-14', '16:16:00', 'htfdfdsfsdffg', 'fgfdsgfg', ' SADFGHJ', '', 'teste', 'teste@mesquita.rj.gov.br', '21345678654', 14),
('teste', 'GABINETE DO PREFEITO', 'AF - ASSISTÊNCIA FAR', 'teste', 'teste@mesquita.rj.go', '2133455666', 'teste', 'FOTOGRAFIA', '2020-07-14', '16:16:00', 'htfdfdsfsdffg', 'fgfdsgfg', ' SADFGHJ', '', 'teste', 'teste@mesquita.rj.gov.br', '21345678654', 15),
('teste', 'GABINETE DO PREFEITO', 'AF - ASSISTÊNCIA FAR', 'teste', 'teste@mesquita.rj.go', '2133455666', 'teste', 'FOTOGRAFIA', '2020-07-14', '16:16:00', 'htfdfdsfsdffg', 'fgfdsgfg', ' SADFGHJ', '', 'teste', 'teste@mesquita.rj.gov.br', '21345678654', 16),
('teste', 'GABINETE DO PREFEITO', 'AF - ASSISTÊNCIA FAR', 'teste', 'teste@mesquita.rj.go', '2133455666', 'teste', 'FOTOGRAFIA', '2020-07-14', '16:16:00', 'htfdfdsfsdffg', 'fgfdsgfg', ' SADFGHJ', '', 'teste', 'teste@mesquita.rj.gov.br', '21345678654', 17),
('', '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '', '', '', '', '', '', '', 18),
('teste', 'GABINETE DO PREFEITO', 'AF - ASSISTÊNCIA FAR', 'teste', 'teste@mesquita.rj.go', '2133455666', 'teste', 'FOTOGRAFIA', '2020-07-14', '16:16:00', 'htfdfdsfsdffg', 'fgfdsgfg', ' SADFGHJ', '', 'teste', 'teste@mesquita.rj.gov.br', '21345678654', 19),
('teste', 'GABINETE DO PREFEITO', 'AF - ASSISTÊNCIA FAR', 'teste', 'teste@mesquita.rj.go', '2133455666', 'teste', 'FOTOGRAFIA', '2020-07-14', '16:16:00', 'htfdfdsfsdffg', 'fgfdsgfg', ' SADFGHJ', '', 'teste', 'teste@mesquita.rj.gov.br', '21345678654', 20),
('teste', 'GABINETE DO PREFEITO', 'AF - ASSISTÊNCIA FAR', 'teste', 'teste@mesquita.rj.go', '2133455666', 'teste', 'FOTOGRAFIA', '2020-07-14', '16:16:00', 'htfdfdsfsdffg', 'fgfdsgfg', ' SADFGHJ', '', 'teste', 'teste@mesquita.rj.gov.br', '21345678654', 21),
('teste', 'GABINETE DO PREFEITO', 'AF - ASSISTÊNCIA FAR', 'teste', 'teste@mesquita.rj.go', '2133455666', 'teste', 'FOTOGRAFIA', '2020-07-14', '16:16:00', 'htfdfdsfsdffg', 'fgfdsgfg', ' SADFGHJ', '', 'teste', 'teste@mesquita.rj.gov.br', '21345678654', 22),
('teste', 'GABINETE DO PREFEITO', 'AF - ASSISTÊNCIA FAR', 'teste', 'teste@mesquita.rj.go', '2133455666', 'teste', 'FOTOGRAFIA', '2020-07-14', '16:16:00', 'htfdfdsfsdffg', 'fgfdsgfg', ' SADFGHJ', '', 'teste', 'teste@mesquita.rj.gov.br', '21345678654', 23),
('teste', 'GABINETE DO PREFEITO', 'AF - ASSISTÊNCIA FAR', 'teste', 'teste@mesquita.rj.go', '2133455666', 'teste', 'FOTOGRAFIA', '2020-07-14', '16:16:00', 'htfdfdsfsdffg', 'fgfdsgfg', ' SADFGHJ', '', 'teste', 'teste@mesquita.rj.gov.br', '21345678654', 24),
('teste', 'GABINETE DO PREFEITO', 'AF - ASSISTÊNCIA FAR', 'teste', 'teste@mesquita.rj.go', '2133455666', 'teste', 'FOTOGRAFIA', '2020-07-14', '16:16:00', 'htfdfdsfsdffg', 'fgfdsgfg', ' SADFGHJ', '', 'teste', 'teste@mesquita.rj.gov.br', '21345678654', 25),
('teste', 'GABINETE DO PREFEITO', 'AF - ASSISTÊNCIA FAR', 'teste', 'teste@mesquita.rj.go', '2133455666', 'teste', 'FOTOGRAFIA', '2020-07-14', '16:16:00', 'htfdfdsfsdffg', 'fgfdsgfg', ' SADFGHJ', '', 'teste', 'teste@mesquita.rj.gov.br', '21345678654', 26),
('teste', 'CGM - CONTROLADORIA', 'AF - ASSISTÊNCIA FAR', 'teste', 'teste@mesquita.rj.go', '2133455666', 'teste', 'DESIGNER GRÁFICO', '2020-07-14', '16:54:00', '', '', ' ', '', 'teste', 'teste@mesquita.rj.gov.br', '21345678654', 27);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `formredecon`
--
ALTER TABLE `formredecon`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `formredecon`
--
ALTER TABLE `formredecon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
