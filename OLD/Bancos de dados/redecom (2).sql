-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Ago-2020 às 19:33
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
-- Banco de dados: `redecom`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `abril`
--

CREATE TABLE `abril` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL DEFAULT 0,
  `semgov` int(11) NOT NULL DEFAULT 0,
  `semus` int(11) NOT NULL DEFAULT 0,
  `semas` int(11) NOT NULL DEFAULT 0,
  `semed` int(10) NOT NULL DEFAULT 0,
  `semsopc` int(10) NOT NULL DEFAULT 0,
  `setrade` int(10) NOT NULL DEFAULT 0,
  `gabineteDoPrefeito` int(10) NOT NULL DEFAULT 0,
  `procon` int(10) NOT NULL DEFAULT 0,
  `forum` int(10) NOT NULL DEFAULT 0,
  `semcelt` int(10) NOT NULL DEFAULT 0,
  `semef` int(10) NOT NULL DEFAULT 0,
  `semmurb` int(10) NOT NULL DEFAULT 0,
  `defesaCivil` int(10) NOT NULL DEFAULT 0,
  `conteudos` int(11) NOT NULL DEFAULT 0,
  `clipings` int(11) NOT NULL DEFAULT 0,
  `artes` int(11) NOT NULL DEFAULT 0,
  `impressoes` int(11) NOT NULL DEFAULT 0,
  `cobertura` int(11) NOT NULL DEFAULT 0,
  `material` int(11) NOT NULL DEFAULT 0,
  `seguidores` int(11) NOT NULL DEFAULT 0,
  `alcance` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `abril`
--

INSERT INTO `abril` (`id`, `id_usuario`, `semgov`, `semus`, `semas`, `semed`, `semsopc`, `setrade`, `gabineteDoPrefeito`, `procon`, `forum`, `semcelt`, `semef`, `semmurb`, `defesaCivil`, `conteudos`, `clipings`, `artes`, `impressoes`, `cobertura`, `material`, `seguidores`, `alcance`) VALUES
(1, 0, 900, 4839, 500, 48, 0, 0, 0, 0, 0, 0, 0, 0, 0, 30, 50, 30, 80, 438, 981, 34, 43894);

-- --------------------------------------------------------

--
-- Estrutura da tabela `agosto`
--

CREATE TABLE `agosto` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL DEFAULT 0,
  `semgov` int(11) NOT NULL DEFAULT 0,
  `semus` int(11) NOT NULL DEFAULT 0,
  `semas` int(11) NOT NULL DEFAULT 0,
  `semed` int(10) NOT NULL DEFAULT 0,
  `semsopc` int(10) NOT NULL DEFAULT 0,
  `setrade` int(10) NOT NULL DEFAULT 0,
  `gabineteDoPrefeito` int(10) NOT NULL DEFAULT 0,
  `procon` int(10) NOT NULL DEFAULT 0,
  `forum` int(10) NOT NULL DEFAULT 0,
  `semcelt` int(10) NOT NULL DEFAULT 0,
  `semef` int(10) NOT NULL DEFAULT 0,
  `semmurb` int(10) NOT NULL DEFAULT 0,
  `defesaCivil` int(10) NOT NULL DEFAULT 0,
  `conteudos` int(11) NOT NULL DEFAULT 0,
  `clipings` int(11) NOT NULL DEFAULT 0,
  `artes` int(11) NOT NULL DEFAULT 0,
  `impressoes` int(11) NOT NULL DEFAULT 0,
  `cobertura` int(11) NOT NULL DEFAULT 0,
  `material` int(11) NOT NULL DEFAULT 0,
  `seguidores` int(11) NOT NULL DEFAULT 0,
  `alcance` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `agosto`
--

INSERT INTO `agosto` (`id`, `id_usuario`, `semgov`, `semus`, `semas`, `semed`, `semsopc`, `setrade`, `gabineteDoPrefeito`, `procon`, `forum`, `semcelt`, `semef`, `semmurb`, `defesaCivil`, `conteudos`, `clipings`, `artes`, `impressoes`, `cobertura`, `material`, `seguidores`, `alcance`) VALUES
(1, 0, 3049, 39, 432, 21, 29, 48, 0, 0, 0, 0, 0, 0, 0, 49, 83, 549, 83, 49, 38, 49, 30);

-- --------------------------------------------------------

--
-- Estrutura da tabela `anual`
--

CREATE TABLE `anual` (
  `id` int(10) NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `year` int(11) NOT NULL,
  `semgov` text NOT NULL,
  `semus` int(11) NOT NULL,
  `semas` int(11) NOT NULL,
  `semimsp` int(11) NOT NULL,
  `semsopc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `anual`
--

INSERT INTO `anual` (`id`, `id_usuario`, `year`, `semgov`, `semus`, `semas`, `semimsp`, `semsopc`) VALUES
(2, 1, 2024, '13', 10, 11, 2024, 13);

-- --------------------------------------------------------

--
-- Estrutura da tabela `anual2`
--

CREATE TABLE `anual2` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `quantitativo` int(11) NOT NULL,
  `qualitativo` int(11) NOT NULL,
  `imp1` int(11) NOT NULL,
  `imp2` int(11) NOT NULL,
  `dg1` int(11) NOT NULL,
  `dg2` int(11) NOT NULL,
  `fav1` int(11) NOT NULL,
  `fav2` int(11) NOT NULL,
  `mds1` int(11) NOT NULL,
  `mds2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `anual2`
--

INSERT INTO `anual2` (`id`, `id_usuario`, `year`, `quantitativo`, `qualitativo`, `imp1`, `imp2`, `dg1`, `dg2`, `fav1`, `fav2`, `mds1`, `mds2`) VALUES
(1, 0, 500, 420, 20, 5, 20, 33, 212, 49, 5, 32, 96);

-- --------------------------------------------------------

--
-- Estrutura da tabela `dezembro`
--

CREATE TABLE `dezembro` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL DEFAULT 0,
  `semgov` int(11) NOT NULL DEFAULT 0,
  `semus` int(11) NOT NULL DEFAULT 0,
  `semas` int(11) NOT NULL DEFAULT 0,
  `semed` int(10) NOT NULL DEFAULT 0,
  `semsopc` int(10) NOT NULL DEFAULT 0,
  `setrade` int(10) NOT NULL DEFAULT 0,
  `gabineteDoPrefeito` int(10) NOT NULL DEFAULT 0,
  `procon` int(10) NOT NULL DEFAULT 0,
  `forum` int(10) NOT NULL DEFAULT 0,
  `semcelt` int(10) NOT NULL DEFAULT 0,
  `semef` int(10) NOT NULL DEFAULT 0,
  `semmurb` int(10) NOT NULL DEFAULT 0,
  `defesaCivil` int(10) NOT NULL DEFAULT 0,
  `conteudos` int(11) NOT NULL DEFAULT 0,
  `clipings` int(11) NOT NULL DEFAULT 0,
  `artes` int(11) NOT NULL DEFAULT 0,
  `impressoes` int(11) NOT NULL DEFAULT 0,
  `cobertura` int(11) NOT NULL DEFAULT 0,
  `material` int(11) NOT NULL DEFAULT 0,
  `seguidores` int(11) NOT NULL DEFAULT 0,
  `alcance` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `dezembro`
--

INSERT INTO `dezembro` (`id`, `id_usuario`, `semgov`, `semus`, `semas`, `semed`, `semsopc`, `setrade`, `gabineteDoPrefeito`, `procon`, `forum`, `semcelt`, `semef`, `semmurb`, `defesaCivil`, `conteudos`, `clipings`, `artes`, `impressoes`, `cobertura`, `material`, `seguidores`, `alcance`) VALUES
(1, 0, 423, 37, 21, 931, 734, 21, 74, 0, 0, 0, 0, 0, 0, 32, 12, 92, 10, 473, 83, 842, 218);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fevereiro`
--

CREATE TABLE `fevereiro` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL DEFAULT 0,
  `semgov` int(11) NOT NULL DEFAULT 0,
  `semus` int(11) NOT NULL DEFAULT 0,
  `semas` int(11) NOT NULL DEFAULT 0,
  `semed` int(10) NOT NULL DEFAULT 0,
  `semsopc` int(10) NOT NULL DEFAULT 0,
  `setrade` int(10) NOT NULL DEFAULT 0,
  `gabineteDoPrefeito` int(10) NOT NULL DEFAULT 0,
  `procon` int(10) NOT NULL DEFAULT 0,
  `forum` int(10) NOT NULL DEFAULT 0,
  `semcelt` int(10) NOT NULL DEFAULT 0,
  `semef` int(10) NOT NULL DEFAULT 0,
  `semmurb` int(10) NOT NULL DEFAULT 0,
  `defesaCivil` int(10) NOT NULL DEFAULT 0,
  `conteudos` int(11) NOT NULL DEFAULT 0,
  `clipings` int(11) NOT NULL DEFAULT 0,
  `artes` int(11) NOT NULL DEFAULT 0,
  `impressoes` int(11) NOT NULL DEFAULT 0,
  `cobertura` int(11) NOT NULL DEFAULT 0,
  `material` int(11) NOT NULL DEFAULT 0,
  `seguidores` int(11) NOT NULL DEFAULT 0,
  `alcance` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `fevereiro`
--

INSERT INTO `fevereiro` (`id`, `id_usuario`, `semgov`, `semus`, `semas`, `semed`, `semsopc`, `setrade`, `gabineteDoPrefeito`, `procon`, `forum`, `semcelt`, `semef`, `semmurb`, `defesaCivil`, `conteudos`, `clipings`, `artes`, `impressoes`, `cobertura`, `material`, `seguidores`, `alcance`) VALUES
(1, 0, 34, 4390, 349, 349, 3, 38, 20, 293, 0, 0, 0, 0, 0, 50, 299, 120, 948, 31, 2, 2000, 21);

-- --------------------------------------------------------

--
-- Estrutura da tabela `finalizar_requerimento`
--

CREATE TABLE `finalizar_requerimento` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_formulario` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `formredecom`
--

CREATE TABLE `formredecom` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `nomeSolicitante` varchar(30) DEFAULT NULL,
  `secretariaSolicitante` varchar(30) DEFAULT NULL,
  `secretariaSolicitante2` varchar(30) DEFAULT NULL,
  `cargoSolicitante` varchar(30) DEFAULT NULL,
  `emailSolicitante` varchar(60) DEFAULT NULL,
  `telefoneSolicitante` varchar(15) DEFAULT NULL,
  `assuntoDemanda` varchar(30) DEFAULT NULL,
  `tipoDemanda` varchar(30) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `endereco` varchar(70) DEFAULT NULL,
  `personalidadeDemanda` varchar(30) DEFAULT NULL,
  `demanda` varchar(30) DEFAULT NULL,
  `anexoDemanda` varchar(50) DEFAULT 'Nenhum arquivo enviado',
  `nomeChefe` varchar(30) DEFAULT NULL,
  `emailChefe` varchar(40) DEFAULT NULL,
  `telefoneChefe` varchar(15) DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `formredecom`
--

INSERT INTO `formredecom` (`id`, `id_usuario`, `nomeSolicitante`, `secretariaSolicitante`, `secretariaSolicitante2`, `cargoSolicitante`, `emailSolicitante`, `telefoneSolicitante`, `assuntoDemanda`, `tipoDemanda`, `data`, `hora`, `endereco`, `personalidadeDemanda`, `demanda`, `anexoDemanda`, `nomeChefe`, `emailChefe`, `telefoneChefe`, `status`) VALUES
(155, 44, 're', 'CGM - CONTROLADORIA', 'AF - ASSISTÊNCIA FARMACÊUTICA', 'teste', 'teste@gmail.com', '123', 'teste', 'impressao', '2020-02-20', '20:20:00', 'teste', 'teste', 'teste ', '1597074759.jpg', 'teste', 'teste3@gmail.com', '123', 0),
(156, 44, 're', 'CGM - CONTROLADORIA', 'AF - ASSISTÊNCIA FARMACÊUTICA', 'teste', 'teste@gmail.com', '123', 'teste', 'impressao', '2020-02-20', '20:20:00', 'teste', 'teste', 'teste ', '1597074770.jpg', 'teste', 'teste3@gmail.com', '123', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `janeiro`
--

CREATE TABLE `janeiro` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL DEFAULT 0,
  `semgov` int(11) NOT NULL DEFAULT 0,
  `semus` int(11) NOT NULL DEFAULT 0,
  `semas` int(11) NOT NULL DEFAULT 0,
  `semed` int(10) NOT NULL DEFAULT 0,
  `semsopc` int(10) NOT NULL DEFAULT 0,
  `setrade` int(10) NOT NULL DEFAULT 0,
  `gabineteDoPrefeito` int(10) NOT NULL DEFAULT 0,
  `procon` int(10) NOT NULL DEFAULT 0,
  `forum` int(10) NOT NULL DEFAULT 0,
  `semcelt` int(10) NOT NULL DEFAULT 0,
  `semef` int(10) NOT NULL DEFAULT 0,
  `semmurb` int(10) NOT NULL DEFAULT 0,
  `defesaCivil` int(10) NOT NULL DEFAULT 0,
  `conteudos` int(11) NOT NULL DEFAULT 0,
  `clipings` int(11) NOT NULL DEFAULT 0,
  `artes` int(11) NOT NULL DEFAULT 0,
  `impressoes` int(11) NOT NULL DEFAULT 0,
  `cobertura` int(11) NOT NULL DEFAULT 0,
  `material` int(11) NOT NULL DEFAULT 0,
  `seguidores` int(11) NOT NULL DEFAULT 0,
  `alcance` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `janeiro`
--

INSERT INTO `janeiro` (`id`, `id_usuario`, `semgov`, `semus`, `semas`, `semed`, `semsopc`, `setrade`, `gabineteDoPrefeito`, `procon`, `forum`, `semcelt`, `semef`, `semmurb`, `defesaCivil`, `conteudos`, `clipings`, `artes`, `impressoes`, `cobertura`, `material`, `seguidores`, `alcance`) VALUES
(7, 0, 3, 5, 67, 6, 5, 43, 33, 4, 3, 3, 6, 667, 554, 50, 40, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `julho`
--

CREATE TABLE `julho` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL DEFAULT 0,
  `semgov` int(11) NOT NULL DEFAULT 0,
  `semus` int(11) NOT NULL DEFAULT 0,
  `semas` int(11) NOT NULL DEFAULT 0,
  `semed` int(10) NOT NULL DEFAULT 0,
  `semsopc` int(10) NOT NULL DEFAULT 0,
  `setrade` int(10) NOT NULL DEFAULT 0,
  `gabineteDoPrefeito` int(10) NOT NULL DEFAULT 0,
  `procon` int(10) NOT NULL DEFAULT 0,
  `forum` int(10) NOT NULL DEFAULT 0,
  `semcelt` int(10) NOT NULL DEFAULT 0,
  `semef` int(10) NOT NULL DEFAULT 0,
  `semmurb` int(10) NOT NULL DEFAULT 0,
  `defesaCivil` int(10) NOT NULL DEFAULT 0,
  `conteudos` int(11) NOT NULL DEFAULT 0,
  `clipings` int(11) NOT NULL DEFAULT 0,
  `artes` int(11) NOT NULL DEFAULT 0,
  `impressoes` int(11) NOT NULL DEFAULT 0,
  `cobertura` int(11) NOT NULL DEFAULT 0,
  `material` int(11) NOT NULL DEFAULT 0,
  `seguidores` int(11) NOT NULL DEFAULT 0,
  `alcance` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `julho`
--

INSERT INTO `julho` (`id`, `id_usuario`, `semgov`, `semus`, `semas`, `semed`, `semsopc`, `setrade`, `gabineteDoPrefeito`, `procon`, `forum`, `semcelt`, `semef`, `semmurb`, `defesaCivil`, `conteudos`, `clipings`, `artes`, `impressoes`, `cobertura`, `material`, `seguidores`, `alcance`) VALUES
(1, 0, 443, 309, 398, 34, 0, 0, 0, 0, 0, 0, 0, 50, 0, 92, 10, 10, 49, 10, 83, 20, 91);

-- --------------------------------------------------------

--
-- Estrutura da tabela `junho`
--

CREATE TABLE `junho` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL DEFAULT 0,
  `semgov` int(11) NOT NULL DEFAULT 0,
  `semus` int(11) NOT NULL DEFAULT 0,
  `semas` int(11) NOT NULL DEFAULT 0,
  `semed` int(10) NOT NULL DEFAULT 0,
  `semsopc` int(10) NOT NULL DEFAULT 0,
  `setrade` int(10) NOT NULL DEFAULT 0,
  `gabineteDoPrefeito` int(10) NOT NULL DEFAULT 0,
  `procon` int(10) NOT NULL DEFAULT 0,
  `forum` int(10) NOT NULL DEFAULT 0,
  `semcelt` int(10) NOT NULL DEFAULT 0,
  `semef` int(10) NOT NULL DEFAULT 0,
  `semmurb` int(10) NOT NULL DEFAULT 0,
  `defesaCivil` int(10) NOT NULL DEFAULT 0,
  `conteudos` int(11) NOT NULL DEFAULT 0,
  `clipings` int(11) NOT NULL DEFAULT 0,
  `artes` int(11) NOT NULL DEFAULT 0,
  `impressoes` int(11) NOT NULL DEFAULT 0,
  `cobertura` int(11) NOT NULL DEFAULT 0,
  `material` int(11) NOT NULL DEFAULT 0,
  `seguidores` int(11) NOT NULL DEFAULT 0,
  `alcance` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `junho`
--

INSERT INTO `junho` (`id`, `id_usuario`, `semgov`, `semus`, `semas`, `semed`, `semsopc`, `setrade`, `gabineteDoPrefeito`, `procon`, `forum`, `semcelt`, `semef`, `semmurb`, `defesaCivil`, `conteudos`, `clipings`, `artes`, `impressoes`, `cobertura`, `material`, `seguidores`, `alcance`) VALUES
(1, 0, 0, 0, 3, 0, 2, 1, 0, 0, 0, 28, 0, 0, 0, 15, 104, 117, 557, 17, 2, 28369, 934199);

-- --------------------------------------------------------

--
-- Estrutura da tabela `maio`
--

CREATE TABLE `maio` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `semgov` float NOT NULL,
  `semus` float NOT NULL,
  `semas` float NOT NULL,
  `semed` int(11) NOT NULL DEFAULT 0,
  `semsopc` int(11) NOT NULL DEFAULT 0,
  `setrade` int(11) NOT NULL DEFAULT 0,
  `gabineteDoPrefeito` int(11) NOT NULL DEFAULT 0,
  `procon` int(11) NOT NULL DEFAULT 0,
  `forum` int(11) NOT NULL DEFAULT 0,
  `semcelt` int(11) NOT NULL DEFAULT 0,
  `semef` int(11) NOT NULL DEFAULT 0,
  `semmurb` int(11) NOT NULL DEFAULT 0,
  `defesaCivil` int(11) NOT NULL DEFAULT 0,
  `conteudos` float NOT NULL,
  `clipings` float NOT NULL,
  `artes` float NOT NULL,
  `impressoes` float NOT NULL,
  `cobertura` float NOT NULL,
  `material` float NOT NULL,
  `seguidores` float NOT NULL,
  `alcance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `maio`
--

INSERT INTO `maio` (`id`, `id_usuario`, `semgov`, `semus`, `semas`, `semed`, `semsopc`, `setrade`, `gabineteDoPrefeito`, `procon`, `forum`, `semcelt`, `semef`, `semmurb`, `defesaCivil`, `conteudos`, `clipings`, `artes`, `impressoes`, `cobertura`, `material`, `seguidores`, `alcance`) VALUES
(1, 1, 700, 300, 400, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 150, 300, 300, 600, 800, 300, 500, 200);

-- --------------------------------------------------------

--
-- Estrutura da tabela `marco`
--

CREATE TABLE `marco` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL DEFAULT 0,
  `semgov` int(11) NOT NULL DEFAULT 0,
  `semus` int(11) NOT NULL DEFAULT 0,
  `semas` int(11) NOT NULL DEFAULT 0,
  `semed` int(10) NOT NULL DEFAULT 0,
  `semsopc` int(10) NOT NULL DEFAULT 0,
  `setrade` int(10) NOT NULL DEFAULT 0,
  `gabineteDoPrefeito` int(10) NOT NULL DEFAULT 0,
  `procon` int(10) NOT NULL DEFAULT 0,
  `forum` int(10) NOT NULL DEFAULT 0,
  `semcelt` int(10) NOT NULL DEFAULT 0,
  `semef` int(10) NOT NULL DEFAULT 0,
  `semmurb` int(10) NOT NULL DEFAULT 0,
  `defesaCivil` int(10) NOT NULL DEFAULT 0,
  `conteudos` int(11) NOT NULL DEFAULT 0,
  `clipings` int(11) NOT NULL DEFAULT 0,
  `artes` int(11) NOT NULL DEFAULT 0,
  `impressoes` int(11) NOT NULL DEFAULT 0,
  `cobertura` int(11) NOT NULL DEFAULT 0,
  `material` int(11) NOT NULL DEFAULT 0,
  `seguidores` int(11) NOT NULL DEFAULT 0,
  `alcance` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `marco`
--

INSERT INTO `marco` (`id`, `id_usuario`, `semgov`, `semus`, `semas`, `semed`, `semsopc`, `setrade`, `gabineteDoPrefeito`, `procon`, `forum`, `semcelt`, `semef`, `semmurb`, `defesaCivil`, `conteudos`, `clipings`, `artes`, `impressoes`, `cobertura`, `material`, `seguidores`, `alcance`) VALUES
(1, 0, 2049, 4839, 28, 2019, 8, 21, 843, 820, 281, 94, 821, 982, 473, 40, 392, 100, 329, 893, 634, 540, 493);

-- --------------------------------------------------------

--
-- Estrutura da tabela `novembro`
--

CREATE TABLE `novembro` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL DEFAULT 0,
  `semgov` int(11) NOT NULL DEFAULT 0,
  `semus` int(11) NOT NULL DEFAULT 0,
  `semas` int(11) NOT NULL DEFAULT 0,
  `semed` int(10) NOT NULL DEFAULT 0,
  `semsopc` int(10) NOT NULL DEFAULT 0,
  `setrade` int(10) NOT NULL DEFAULT 0,
  `gabineteDoPrefeito` int(10) NOT NULL DEFAULT 0,
  `procon` int(10) NOT NULL DEFAULT 0,
  `forum` int(10) NOT NULL DEFAULT 0,
  `semcelt` int(10) NOT NULL DEFAULT 0,
  `semef` int(10) NOT NULL DEFAULT 0,
  `semmurb` int(10) NOT NULL DEFAULT 0,
  `defesaCivil` int(10) NOT NULL DEFAULT 0,
  `conteudos` int(11) NOT NULL DEFAULT 0,
  `clipings` int(11) NOT NULL DEFAULT 0,
  `artes` int(11) NOT NULL DEFAULT 0,
  `impressoes` int(11) NOT NULL DEFAULT 0,
  `cobertura` int(11) NOT NULL DEFAULT 0,
  `material` int(11) NOT NULL DEFAULT 0,
  `seguidores` int(11) NOT NULL DEFAULT 0,
  `alcance` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `novembro`
--

INSERT INTO `novembro` (`id`, `id_usuario`, `semgov`, `semus`, `semas`, `semed`, `semsopc`, `setrade`, `gabineteDoPrefeito`, `procon`, `forum`, `semcelt`, `semef`, `semmurb`, `defesaCivil`, `conteudos`, `clipings`, `artes`, `impressoes`, `cobertura`, `material`, `seguidores`, `alcance`) VALUES
(1, 0, 10, 38, 831, 921, 2, 0, 0, 0, 0, 0, 0, 0, 0, 50, 34, 831, 21, 20, 31, 83, 21);

-- --------------------------------------------------------

--
-- Estrutura da tabela `outubro`
--

CREATE TABLE `outubro` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL DEFAULT 0,
  `semgov` int(11) NOT NULL DEFAULT 0,
  `semus` int(11) NOT NULL DEFAULT 0,
  `semas` int(11) NOT NULL DEFAULT 0,
  `semed` int(10) NOT NULL DEFAULT 0,
  `semsopc` int(10) NOT NULL DEFAULT 0,
  `setrade` int(10) NOT NULL DEFAULT 0,
  `gabineteDoPrefeito` int(10) NOT NULL DEFAULT 0,
  `procon` int(10) NOT NULL DEFAULT 0,
  `forum` int(10) NOT NULL DEFAULT 0,
  `semcelt` int(10) NOT NULL DEFAULT 0,
  `semef` int(10) NOT NULL DEFAULT 0,
  `semmurb` int(10) NOT NULL DEFAULT 0,
  `defesaCivil` int(10) NOT NULL DEFAULT 0,
  `conteudos` int(11) NOT NULL DEFAULT 0,
  `clipings` int(11) NOT NULL DEFAULT 0,
  `artes` int(11) NOT NULL DEFAULT 0,
  `impressoes` int(11) NOT NULL DEFAULT 0,
  `cobertura` int(11) NOT NULL DEFAULT 0,
  `material` int(11) NOT NULL DEFAULT 0,
  `seguidores` int(11) NOT NULL DEFAULT 0,
  `alcance` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `outubro`
--

INSERT INTO `outubro` (`id`, `id_usuario`, `semgov`, `semus`, `semas`, `semed`, `semsopc`, `setrade`, `gabineteDoPrefeito`, `procon`, `forum`, `semcelt`, `semef`, `semmurb`, `defesaCivil`, `conteudos`, `clipings`, `artes`, `impressoes`, `cobertura`, `material`, `seguidores`, `alcance`) VALUES
(1, 0, 123, 83, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20, 21, 39, 1, 31, 2, 40, 31);

-- --------------------------------------------------------

--
-- Estrutura da tabela `setembro`
--

CREATE TABLE `setembro` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL DEFAULT 0,
  `semgov` int(11) NOT NULL DEFAULT 0,
  `semus` int(11) NOT NULL DEFAULT 0,
  `semas` int(11) NOT NULL DEFAULT 0,
  `semed` int(10) NOT NULL DEFAULT 0,
  `semsopc` int(10) NOT NULL DEFAULT 0,
  `setrade` int(10) NOT NULL DEFAULT 0,
  `gabineteDoPrefeito` int(10) NOT NULL DEFAULT 0,
  `procon` int(10) NOT NULL DEFAULT 0,
  `forum` int(10) NOT NULL DEFAULT 0,
  `semcelt` int(10) NOT NULL DEFAULT 0,
  `semef` int(10) NOT NULL DEFAULT 0,
  `semmurb` int(10) NOT NULL DEFAULT 0,
  `defesaCivil` int(10) NOT NULL DEFAULT 0,
  `conteudos` int(11) NOT NULL DEFAULT 0,
  `clipings` int(11) NOT NULL DEFAULT 0,
  `artes` int(11) NOT NULL DEFAULT 0,
  `impressoes` int(11) NOT NULL DEFAULT 0,
  `cobertura` int(11) NOT NULL DEFAULT 0,
  `material` int(11) NOT NULL DEFAULT 0,
  `seguidores` int(11) NOT NULL DEFAULT 0,
  `alcance` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `setembro`
--

INSERT INTO `setembro` (`id`, `id_usuario`, `semgov`, `semus`, `semas`, `semed`, `semsopc`, `setrade`, `gabineteDoPrefeito`, `procon`, `forum`, `semcelt`, `semef`, `semmurb`, `defesaCivil`, `conteudos`, `clipings`, `artes`, `impressoes`, `cobertura`, `material`, `seguidores`, `alcance`) VALUES
(1, 0, 193, 834, 192, 0, 0, 0, 200, 0, 0, 0, 0, 0, 0, 43, 21, 25, 86, 54, 21, 32, 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(32) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `telefone` int(12) NOT NULL,
  `permissao` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `telefone`, `permissao`) VALUES
(40, 'Wesley', 'weslley.leite@mesquita.rj.gov.br', '202cb962ac59075b964b07152d234b70', 123, 1),
(43, 'teste2', 'teste2@gmail.com', '202cb962ac59075b964b07152d234b70', 123, 2),
(44, 'teste3', 'teste3@gmail.com', '202cb962ac59075b964b07152d234b70', 123, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios_token`
--

CREATE TABLE `usuarios_token` (
  `id` int(10) NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `data_expiracao` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios_token`
--

INSERT INTO `usuarios_token` (`id`, `id_usuario`, `hash`, `data_expiracao`) VALUES
(37, 43, 'd76c026b69e581cf41538613309cdcbd', '2020-08-05 11:25:00'),
(47, 44, 'eaae54966f2ffeff047e4266fa81869f', '2020-08-05 14:28:00'),
(50, 40, '49348f37a3e4f41747c673a6ce9a2415', '2020-08-07 13:48:00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `abril`
--
ALTER TABLE `abril`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `agosto`
--
ALTER TABLE `agosto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `anual`
--
ALTER TABLE `anual`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `anual2`
--
ALTER TABLE `anual2`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `dezembro`
--
ALTER TABLE `dezembro`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `fevereiro`
--
ALTER TABLE `fevereiro`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `finalizar_requerimento`
--
ALTER TABLE `finalizar_requerimento`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `formredecom`
--
ALTER TABLE `formredecom`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `janeiro`
--
ALTER TABLE `janeiro`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `julho`
--
ALTER TABLE `julho`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `junho`
--
ALTER TABLE `junho`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `maio`
--
ALTER TABLE `maio`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `marco`
--
ALTER TABLE `marco`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `novembro`
--
ALTER TABLE `novembro`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `outubro`
--
ALTER TABLE `outubro`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `setembro`
--
ALTER TABLE `setembro`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios_token`
--
ALTER TABLE `usuarios_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `abril`
--
ALTER TABLE `abril`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `agosto`
--
ALTER TABLE `agosto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `anual`
--
ALTER TABLE `anual`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `anual2`
--
ALTER TABLE `anual2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `dezembro`
--
ALTER TABLE `dezembro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `fevereiro`
--
ALTER TABLE `fevereiro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `finalizar_requerimento`
--
ALTER TABLE `finalizar_requerimento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `formredecom`
--
ALTER TABLE `formredecom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT de tabela `janeiro`
--
ALTER TABLE `janeiro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `julho`
--
ALTER TABLE `julho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `junho`
--
ALTER TABLE `junho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `maio`
--
ALTER TABLE `maio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `marco`
--
ALTER TABLE `marco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `novembro`
--
ALTER TABLE `novembro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `outubro`
--
ALTER TABLE `outubro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `setembro`
--
ALTER TABLE `setembro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de tabela `usuarios_token`
--
ALTER TABLE `usuarios_token`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
