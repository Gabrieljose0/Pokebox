-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Mar-2023 às 18:42
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

create database db_pokedex;
use db_pokedex;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_pokedex`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pokemon`
--

CREATE TABLE `tb_pokemon` (
  `cd_pokemon` int(11) NOT NULL,
  `id_pokemon` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `nm_pokemon` varchar(40) NOT NULL,
  `ds_tipo1` varchar(30) NOT NULL,
  `ds_tipo2` varchar(30) NOT NULL,
  `url_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_pokemon`
--

INSERT INTO `tb_pokemon` (`cd_pokemon`, `id_pokemon`, `nm_pokemon`, `ds_tipo1`, `ds_tipo2`, `url_img`) VALUES
(19, '001', 'Bulbasaur', 'Grass', 'Posion', 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/001.png'),
(20, '002', 'Ivysaur', 'Grass', 'Poison', 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/002.png'),
(21, '003', 'Venusaur', 'Grass', 'Poison', 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/003.png'),
(22, '004', 'Charmander', 'Fire', '-', 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/004.png'),
(23, '005', 'Charmeleon', 'Fire', '-', 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/005.png'),
(24, '006', 'Charizard', 'Fire', 'Flying', 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/006.png'),
(25, '007', 'Squirtle', 'Water', '-', 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/007.png'),
(26, '008', 'Wartortle', 'Water', '-', 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/008.png'),
(27, '009', 'Blastoise', 'Water', '-', 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/009.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_pokemon`
--
ALTER TABLE `tb_pokemon`
  ADD PRIMARY KEY (`cd_pokemon`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_pokemon`
--
ALTER TABLE `tb_pokemon`
  MODIFY `cd_pokemon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
