-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Out-2022 às 05:54
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `trabalho4sem`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `idLivro` int(11) NOT NULL,
  `tituloLivro` varchar(200) NOT NULL,
  `anoLivro` int(11) NOT NULL,
  `editoraLivro` varchar(200) NOT NULL,
  `sinopseLivro` varchar(1000) NOT NULL,
  `generoLivro` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`idLivro`, `tituloLivro`, `anoLivro`, `editoraLivro`, `sinopseLivro`, `generoLivro`) VALUES
(1, 'Crime e Castigo - Fiodór Dostoiévski', 2020, 'Principis', 'Neste livro, Rask&oacute;lnikov, um jovem estudante, pobre e desesperado, perambula pelas ruas de S&atilde;o Petersburgo at&eacute; cometer um crime que tentar&aacute; justificar por uma teoria: grandes homens, como C&eacute;sar ou Napole&atilde;o, foram assassinos absolvidos pela Hist&oacute;ria.', 'Romance'),
(2, 'O Processo - Franz Kafka', 2017, 'CompanhiaDeBolso', 'Um homem recebe a not&iacute;cia de que est&aacute; preso, por&eacute;m, n&atilde;o sabe o motivo. Ele consulta seu vizinho, a pr&oacute;pria justi&ccedil;a, al&eacute;m de um advogado e, apesar de descobrir que sua senten&ccedil;a &eacute; a morte, a natureza da acusa&ccedil;&atilde;o contra ele permanece um mist&eacute;rio.', 'Romance'),
(3, 'Che Guevara - personagens que marcaram &eacute;poca', 2006, 'Globo', 'Idealista por excel&ecirc;ncia, Ernesto Che Guevara representa ainda hoje, para muitos, o s&iacute;mbolo do jovem contestador e revolucion&aacute;rio que daria - e deu - a pr&oacute;pria vida em nome de uma nobre causa.\r\nAssociada durante d&eacute;cadas &agrave; Revolu&ccedil;&atilde;o Cubana e ao seu principal mentor, Fidel Castro, sua imagem extrapola atualmente os limites dos acontecimentos pol&iacute;ticos que varreram o continente sul-americano nos anos 50 e 60 do s&eacute;culo passado e estimula novos rebeldes, com ou sem causa. Percorre um amplo arco de manifesta&ccedil;&otilde;es que vai de um s&iacute;mbolo de aguerrimento nas mais variadas situa&ccedil;&otilde;es at&eacute;, n&atilde;o raro, um mero objeto decorativo.\r\nQuem foi Che Guevara? Um menino de sa&uacute;de prec&aacute;ria, minada pela asma; um easy rider dos pampas que descobriu seu continente viajando de carona numa velha motocicleta; um intelectual sarc&aacute;stico e um guerrilheiro disciplinado que acreditava na', 'Biografia'),
(4, 'Para&iacute;so Perdido - Jhon Milton', 2018, 'MartinClaret', 'Para&iacute;so Perdido &eacute; um clube noturno gerenciado por Jos&eacute; e movimentado por apresenta&ccedil;&otilde;es musicais de seus herdeiros. O policial Odair se aproxima da fam&iacute;lia ao ser contratado para fazer a seguran&ccedil;a do jovem talento &Iacute;m&atilde;, neto de Jos&eacute; e alvo frequente de homof&oacute;bicos e, aos poucos, o la&ccedil;o entre o agente e o cl&atilde; de artistas rom&acirc;nticos vai se revelando mais e mais forte, com n&oacute;s surpreendentes.Associada durante d&eacute;cadas &agrave; Revolu&ccedil;&atilde;o Cubana e ao seu principal mentor, Fidel Castro, sua imagem extrapola atualmente os limites dos acontecimentos pol&iacute;ticos que varreram o continente sul-americano nos anos 50 e 60 do s&eacute;culo passado e estimula novos rebeldes, com ou sem causa. Percorre um amplo arco de manifesta&ccedil;&otilde;es que vai de um s&iacute;mbolo de aguerrimento nas mais variadas situa&ccedil;&otilde;es at&eacute;, n&atilde;o raro, um mero objeto d', 'Poesia'),
(5, 'Gente Pobre - Fiodór Dostoiévski', 2021, 'Principes', 'Gente Pobre &eacute; o primeiro romance de Dostoievski, publicado em 1846, quando o autor tinha apenas 25 anos. O jovem estreante foi saudado entusiasticamente pelo influente cr&iacute;tico Vassili&oacute;n Biel&iacute;nski, que vaticinou o surgimento de um gigante da literatura, compar&aacute;vel a G&oacute;gol e Pushkin, considerados os maiores escritores da R&uacute;ssia. Recebido como &ldquo;a primeira tent ativa de se fazer um romance social&rdquo; no pa&iacute;s dos czares, Gente Pobre &eacute; na verdade algo maior. Pois Dostoievski n&atilde;o se contentou em descrever o ambiente de um dos bairros miser&aacute;veis de S&atilde;o Petersburgo &ndash; onde um funcion&aacute;rio p&uacute;blico de meia-idade e a sua jovem vizinha costureira, demasiado pobres para se casarem, encontram na troca de cartas a maneira de compartilharem os pequenos acontecimentos de suas vidas miser&aacute;veis. Realizou, al&eacute;m disso, uma incisiva e subterr&acirc;nea sondagem psicol&oacute;gica da hu', 'Romance'),
(6, 'O jogador - Fiodór Dostoiévski', 2000, 'MartinClaret', 'O Jogador &eacute; uma an&aacute;lise, profunda e impiedosa, de um homem dominado por seus impulsos e incapaz de resistir &agrave; tenta&ccedil;&atilde;o do jogo, raz&atilde;o pela qual arrisca o pr&oacute;prio destino na roleta.\r\nNeste livro, o autor se faz o modelo de sua personagem. Foi o que Thomas Mann ressaltou: &quot;A paix&atilde;o pelo jogo foi sua segunda doen&ccedil;a, possivelmente relacionada com a primeira (a epilepsia), uma obsess&atilde;o verdadeiramente anormal. A isso devemos o maravilhoso romance O Jogador, que se passa numa esta&ccedil;&atilde;o de &aacute;guas alem&atilde;, inveross&iacute;mil e perversamente chamada Roletemburgo. Neste romance, a psicologia da paix&atilde;o m&oacute;rbida e do dem&ocirc;nio Sorte &eacute; exposta com incompar&aacute;vel veracidade.&quot;', 'Romance'),
(7, 'Samurai da revolu&ccedil;&atilde;o', 2009, 'Record', 'Uma biografia comovente e dram&aacute;tica de Freddy Maemura. boliviano de ascend&ecirc;ncia japonesa que fazia parte da guerrilha comandada por Che Guevara. Freddy morreu na mesma emboscada na qual foi mortaT&acirc;nia (Hayd&eacute;e Tamara). dias antes da captura e morte de Che.', 'Biografia');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`idLivro`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `idLivro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
