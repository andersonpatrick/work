-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27-Out-2016 às 03:46
-- Versão do servidor: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `freelancer`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `formulario_projetos`
--

CREATE TABLE IF NOT EXISTS `formulario_projetos` (
`id` int(20) NOT NULL,
  `nome_projeto` varchar(200) NOT NULL,
  `dominio` varchar(200) NOT NULL,
  `possui_logo` varchar(200) NOT NULL,
  `video_promocional` varchar(200) NOT NULL,
  `contato_email` varchar(200) NOT NULL,
  `email_corporativo` varchar(200) NOT NULL,
  `multiplos_idiomas` varchar(200) NOT NULL,
  `pagamento_app` varchar(200) NOT NULL,
  `anuncios_adsense_admob` varchar(200) NOT NULL,
  `aplicativos_mobile` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `formulario_projetos`
--

INSERT INTO `formulario_projetos` (`id`, `nome_projeto`, `dominio`, `possui_logo`, `video_promocional`, `contato_email`, `email_corporativo`, `multiplos_idiomas`, `pagamento_app`, `anuncios_adsense_admob`, `aplicativos_mobile`) VALUES
(4, 'aaaaaaaa', 'tes', 'sim', '', '', '', '', '', '', 'android;');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formulario_projetos`
--
ALTER TABLE `formulario_projetos`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formulario_projetos`
--
ALTER TABLE `formulario_projetos`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
