-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12-Dez-2016 às 18:56
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
  create Database `hana`;
  use  `hana`;
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrousel`
--

CREATE TABLE `carrousel` (
  `codCarrousel` int(11) NOT NULL,
  `imagem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `carrousel`
--

INSERT INTO `carrousel` (`codCarrousel`, `imagem`) VALUES
(1, 'b52.jpg'),
(2, 'phantom.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem`
--

CREATE TABLE `imagem` (
  `codImagem` int(11) NOT NULL,
  `imagem` text NOT NULL,
  `codPlanta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `imagem`
--

INSERT INTO `imagem` (`codImagem`, `imagem`, `codPlanta`) VALUES
(11, 'b52.jpg', 1),
(12, 'aue.jpg', 3),
(13, 'sarracenia.jpg', 2),
(14, 'sawtooth.jpg', 11),
(15, 'g3xg14.jpg', 12),
(16, 'microdente.jpg', 13);

-- --------------------------------------------------------

--
-- Estrutura da tabela `planta`
--

CREATE TABLE `planta` (
  `codPlanta` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `codTipo` int(11) NOT NULL,
  `nomeCientif` varchar(150) NOT NULL,
  `localizacao` varchar(150) NOT NULL,
  `codRaro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `planta`
--

INSERT INTO `planta` (`codPlanta`, `nome`, `descricao`, `codTipo`, `nomeCientif`, `localizacao`, `codRaro`) VALUES
(1, 'B52', 'A Dionaea muscipula (Venus Flytrap) é como chama-se a planta que primeiro começou a atrair a atenção dos Botânicos, o seu movimento rápido ao apanhar a presa é um fenômeno único no mundo vegetal. Muito embora Darwin demonstrasse que se tratava verdadeiramente de uma carnívora, o processo de assimilação só foi descoberto durante o século XX.\nEm 1770, em Londres, o comerciante e botânico John Ellis publicou a primeira descrição de "uma nova planta sensível, chamada Dionaea muscipula: ou, de Vênus Papa-moscas A Bela e a Fera: Dionaea, referindo-se a deusa mítica do amor e da beleza (Vênus, filha de Dione), porque é uma pequena planta que dá flores; muscipula, do latim "ratoeira", porque suas folhas se fecham em cerca de meio segundo quando seu mecanismo de captura é ativado. Pequenos “dentes” que ficam nas bordas das folhas formam uma gaiola estreita para o inseto. A folha se fecha para prender sua presa e segrega um líquido que digere o inseto em aproximadamente dez dias. Em seguida, a folha cresce um pouco e abre, pronta para sua próxima vítima.\nA descrição de Ellis teria chegado a terra natal da Dionaea, o litoral pantanoso da Carolina do Norte e Carolina do Sul, em 1771. Naturalmente, a planta já era conhecida por lá. Ela havia sido descrito há uma década atrás por Arthur Dobbs, governador da Carolina do Norte.\nA característica mais visível é a folha em forma de mandíbula com 15 a 20 longos "dentes". A folha é verde se a meia-luz e vermelha com sol direto. O tamanho da folha varia de acordo com a intensidade luminosa.\nAs Dionaeas fazem parte das poucas plantas capazes de movimentar-se no reino vegetal, além desta temos outras como as Droseras e dormideiras ou sensitivas.\n\nO mecanismo pelo qual a armadilha dispara envolve uma complexa interação entre elasticidade, turgidez e crescimento. Quando aberta, a armadilha é convexa, mas quando ativada, ela se torna côncava. É a rápida alternância desses estados que fecha a armadilha, embora a forma exata como isso ocorre ainda seja mal compreendida. ', 1, 'DM. B52 ASDAGiant', 'Norte da America', 1),
(2, 'Leucophylla Red', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean justo libero, lobortis vitae diam vel, interdum porttitor elit. Morbi non consequat elit, vel pellentesque turpis. Mauris eu tortor odio. Sed ac tempor ipsum, ut sodales mi. Proin sollicitudin, urna a commodo tristique, velit leo dictum lectus, sit amet cursus metus orci ut elit. Praesent cursus laoreet dignissim. Fusce a est non mauris aliquet mattis sed et ipsum. Duis vitae sapien ultrices, commodo velit in, volutpat lorem. Proin non purus sit amet lectus porta lobortis vitae sit amet massa. Sed non magna nulla. Nunc at nisi vulputate, auctor libero sed, pulvinar quam. Quisque blandit pulvinar tellus, mattis posuere tellus tincidunt id. Duis sed faucibus dolor, nec aliquet odio.  Integer blandit in augue in viverra. Etiam nec luctus erat. P', 2, '', '', 2),
(3, 'Capensis', 'kjaoijs iojiosjio dajosfoigio jaoi', 3, '', '', 1),
(4, 'Rafflesiana nivea', '', 4, '', '', 2),
(5, 'wesser', '', 5, '', '', 3),
(6, 'Red Dragon', 'Em Red Dragon Inn, vocÃª e seus amigos sÃ£o um grupo de herÃ³is aventureiros de fantasia. VocÃª invadiu a masmorra, matou os monstros, e tomou o seu tesouro. Agora vocÃª estÃ¡ de volta, e que melhor maneira de comemorar a sua vitÃ³ria mais recente do que passar uma noite no Red Dragon Inn?\nVocÃª e seus companheiros de aventuras vÃ£o passar a noite bebendo e jogando. A Ãºltima pessoa que Ã© ao mesmo tempo sÃ³bria o suficiente para permanecer consciente e perspicaz o suficiente para sustentar suas moedas de ouro ganha o jogo. Comentario', 1, 'DM. Red Fucking Dragon', 'Sudeste da Africa', 3),
(10, 'Sawtooth', 'A Dionaea muscipula (Venus Flytrap) é como chama-se a planta que primeiro começou a atrair a atenção dos Botânicos, o seu movimento rápido ao apanhar a presa é um fenômeno único no mundo vegetal. Muito embora Darwin demonstrasse que se tratava verdadeiramente de uma carnívora, o processo de assimilação só foi descoberto durante o século XX.\r\nEm 1770, em Londres, o comerciante e botânico John Ellis publicou a primeira descrição de "uma nova planta sensível, chamada Dionaea muscipula: ou, de Vênus Papa-moscas A Bela e a Fera: Dionaea, referindo-se a deusa mítica do amor e da beleza (Vênus, filha de Dione), porque é uma pequena planta que dá flores; muscipula, do latim "ratoeira", porque suas folhas se fecham em cerca de meio segundo quando seu mecanismo de captura é ativado. Pequenos “dentes” que ficam nas bordas das folhas formam uma gaiola estreita para o inseto. A folha se fecha para prender sua presa e segrega um líquido que digere o inseto em aproximadamente dez dias. Em seguida, a folha cresce um pouco e abre, pronta para sua próxima vítima.\r\nA descrição de Ellis teria chegado a terra natal da Dionaea, o litoral pantanoso da Carolina do Norte e Carolina do Sul, em 1771. Naturalmente, a planta já era conhecida por lá. Ela havia sido descrito há uma década atrás por Arthur Dobbs, governador da Carolina do Norte.\r\nA característica mais visível é a folha em forma de mandíbula com 15 a 20 longos "dentes". A folha é verde se a meia-luz e vermelha com sol direto. O tamanho da folha varia de acordo com a intensidade luminosa.\r\nAs Dionaeas fazem parte das poucas plantas capazes de movimentar-se no reino vegetal, além desta temos outras como as Droseras e dormideiras ou sensitivas.\r\n\r\nO mecanismo pelo qual a armadilha dispara envolve uma complexa interação entre elasticidade, turgidez e crescimento. Quando aberta, a armadilha é convexa, mas quando ativada, ela se torna côncava. É a rápida alternância desses estados que fecha a armadilha, embora a forma exata como isso ocorre ainda seja mal compreendida.', 1, 'DM. Sawtooth au II', 'Lado norte do Monte Fuji', 3),
(11, 'Sawtooth', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean justo libero, lobortis vitae diam vel, interdum porttitor elit. Morbi non consequat elit, vel pellentesque turpis. Mauris eu tortor odio. Sed ac tempor ipsum, ut sodales mi. Proin sollicitudin, urna a commodo tristique, velit leo dictum lectus, sit amet cursus metus orci ut elit. Praesent cursus laoreet dignissim. Fusce a est non mauris aliquet mattis sed et ipsum. Duis vitae sapien ultrices, commodo velit in, volutpat lorem. Proin non purus sit amet lectus porta lobortis vitae sit amet massa. Sed non magna nulla. Nunc at nisi vulputate, auctor libero sed, pulvinar quam. Quisque blandit pulvinar tellus, mattis posuere tellus tincidunt id. Duis sed faucibus dolor, nec aliquet odio.\r\n\r\nInteger blandit in augue in viverra. Etiam nec luctus erat. Phasellus quis sem id eros tincidunt lacinia. Nullam sodales mollis neque ut auctor. Aliquam et lectus arcu. Vivamus nec eros magna. Nam vitae venenatis tellus. Quisque at odio non lorem auctor egestas. Fusce eu ligula turpis. In sodales, justo sit amet porttitor malesuada, odio dui ullamcorper lectus, vel dignissim tellus magna id mauris. Cras tristique tincidunt neque, vitae aliquam tortor iaculis in. Phasellus id tortor tincidunt, auctor justo ut, interdum felis. Fusce congue cursus risus, a consectetur metus dignissim sit amet. ', 1, 'sawtooth II on Maxe', 'Sudeste da Europa', 2),
(12, 'G3XG14', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean justo libero, lobortis vitae diam vel, interdum porttitor elit. Morbi non consequat elit, vel pellentesque turpis. Mauris eu tortor odio. Sed ac tempor ipsum, ut sodales mi. Proin sollicitudin, urna a commodo tristique, velit leo dictum lectus, sit amet cursus metus orci ut elit. Praesent cursus laoreet dignissim. Fusce a est non mauris aliquet mattis sed et ipsum. Duis vitae sapien ultrices, commodo velit in, volutpat lorem. Proin non purus sit amet lectus porta lobortis vitae sit amet massa. Sed non magna nulla. Nunc at nisi vulputate, auctor libero sed, pulvinar quam. Quisque blandit pulvinar tellus, mattis posuere tellus tincidunt id. Duis sed faucibus dolor, nec aliquet odio.\r\n\r\nInteger blandit in augue in viverra. Etiam nec luctus erat. Phasellus quis sem id eros tincidunt lacinia. Nullam sodales mollis neque ut auctor. Aliquam et lectus arcu. Vivamus nec eros magna. Nam vitae venenatis tellus. Quisque at odio non lorem auctor egestas. Fusce eu ligula turpis. In sodales, justo sit amet porttitor malesuada, odio dui ullamcorper lectus, vel dignissim tellus magna id mauris. Cras tristique tincidunt neque, vitae aliquam tortor iaculis in. Phasellus id tortor tincidunt, auctor justo ut, interdum felis. Fusce congue cursus risus, a consectetur metus dignissim sit amet. ', 1, 'G3 ex G-14th', 'Oeste do Chile', 3),
(13, 'Microdente', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean justo libero, lobortis vitae diam vel, interdum porttitor elit. Morbi non consequat elit, vel pellentesque turpis. Mauris eu tortor odio. Sed ac tempor ipsum, ut sodales mi. Proin sollicitudin, urna a commodo tristique, velit leo dictum lectus, sit amet cursus metus orci ut elit. Praesent cursus laoreet dignissim. Fusce a est non mauris aliquet mattis sed et ipsum. Duis vitae sapien ultrices, commodo velit in, volutpat lorem. Proin non purus sit amet lectus porta lobortis vitae sit amet massa. Sed non magna nulla. Nunc at nisi vulputate, auctor libero sed, pulvinar quam. Quisque blandit pulvinar tellus, mattis posuere tellus tincidunt id. Duis sed faucibus dolor, nec aliquet odio.\r\n\r\nInteger blandit in augue in viverra. Etiam nec luctus erat. Phasellus quis sem id eros tincidunt lacinia. Nullam sodales mollis neque ut auctor. Aliquam et lectus arcu. Vivamus nec eros magna. Nam vitae venenatis tellus. Quisque at odio non lorem auctor egestas. Fusce eu ligula turpis. In sodales, justo sit amet porttitor malesuada, odio dui ullamcorper lectus, vel dignissim tellus magna id mauris. Cras tristique tincidunt neque, vitae aliquam tortor iaculis in. Phasellus id tortor tincidunt, auctor justo ut, interdum felis. Fusce congue cursus risus, a consectetur metus dignissim sit amet. ', 1, 'Micro and moonth ', 'Sul da America do Sul', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtor`
--

CREATE TABLE `produtor` (
  `codProdutor` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `dataNasc` date NOT NULL,
  `historia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtor`
--

INSERT INTO `produtor` (`codProdutor`, `nome`, `dataNasc`, `historia`) VALUES
(1, 'Marcos Missao Ono', '1980-06-17', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at leo turpis. Nulla ullamcorper, justo in bibendum semper, justo orci dignissim odio, ut vehicula libero quam sed dui. Suspendisse at porttitor est. Nulla est risus, tristique eu congue consequat, blandit luctus ligula. Sed vitae sapien mi. In hac habitasse platea dictumst. Ut maximus, eros quis ultricies congue, velit urna tincidunt augue, quis ultricies nibh nibh sit amet elit. Nulla facilisi. Quisque ultricies, odio ut aliquet posuere, metus nulla commodo turpis, ut congue sem lectus eget augue. Fusce euismod libero id felis lobortis egestas.\nUt tempor purus ac efficitur mattis. Maecenas nec ultricies odio. Duis fringilla gravida tellus, non rutrum urna luctus imperdiet. Nullam gravida metus in leo lacinia, nec rhoncus magna pulvinar. Nullam vehicula aliquam nunc eget varius. Proin eget risus auctor, mattis tellus tristique, interdum risus. In vitae elit nibh. Maecenas sit amet urna nulla. Donec aliquam enim enim, vitae sodales purus vehicula at. Nullam posuere mollis urna eu ultrices. Morbi ac elementum tortor.\nAenean interdum tincidunt semper. Ut felis nisl, tempus sit amet diam lobortis, varius vehicula nunc. In tellus risus, auctor venenatis sollicitudin a, imperdiet luctus arcu. In posuere auctor mauris vel ornare. Nullam dictum scelerisque ligula, nec lacinia odio rutrum a. Quisque venenatis tellus eget venenatis scelerisque. Cras lectus lacus, eleifend et feugiat et, tincidunt sit amet tellus. Nunc vel tellus non diam aliquam ullamcorper. Ut in urna velit. Nullam in lectus sed ex dictum bibendum sed a ante. Cras id ex a arcu sagittis ultricies quis ac neque. Nam felis est, tincidunt eu faucibus vel, lobortis sed elit. Aliquam consequat nisl id lectus commodo, et commodo ex laoreet.\nNulla porttitor nunc magna. Aliquam id iaculis nisi. Etiam pellentesque, odio eget rutrum placerat, sapien turpis ultrices urna, ut tincidunt nunc tellus nec justo. Integer non nibh urna. Maecenas eu auctor arcu, quis sodales urna. Pellentesque eu pharetra est. Aliquam quis sodales nisi. Maecenas a ultrices tortor. Etiam urna purus, faucibus aliquam efficitur eget, luctus at ante. Nam faucibus luctus elit. Vivamus sit amet pulvinar urna. Mauris dui felis, venenatis a urna eu, accumsan aliquet dui. Pellentesque hendrerit mi non massa gravida, ut sodales arcu laoreet. Etiam mauris diam, porttitor eget arcu sit amet, aliquet tristique augue. Etiam tempor, tortor a posuere commodo, ex dolor malesuada lectus, vel mattis sem lacus sit amet elit. Nulla auctor molestie placerat.\nMorbi facilisis iaculis massa et euismod. Suspendisse sit amet felis condimentum mi dapibus mollis in fermentum ipsum. Duis egestas tristique malesuada. Integer a lorem sed felis finibus cursus. In rutrum eu ex a placerat. Donec a augue maximus, lobortis leo scelerisque, sollicitudin enim. Nunc commodo, mi et vulputate facilisis, quam eros lacinia mi, non viverra augue dui ut quam. Donec tincidunt ultricies semper. ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `raridade`
--

CREATE TABLE `raridade` (
  `codRaro` int(11) NOT NULL,
  `raro` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `raridade`
--

INSERT INTO `raridade` (`codRaro`, `raro`) VALUES
(1, 'comum'),
(2, 'incomum'),
(3, 'raro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo`
--

CREATE TABLE `tipo` (
  `codTipo` int(11) NOT NULL,
  `tipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipo`
--

INSERT INTO `tipo` (`codTipo`, `tipo`) VALUES
(1, 'Dionaea'),
(2, 'Sarracenia'),
(3, 'Drosera'),
(4, 'Nephentes'),
(5, 'Pinguicula');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrousel`
--
ALTER TABLE `carrousel`
  ADD PRIMARY KEY (`codCarrousel`);

--
-- Indexes for table `imagem`
--
ALTER TABLE `imagem`
  ADD PRIMARY KEY (`codImagem`),
  ADD KEY `codPlanta` (`codPlanta`);

--
-- Indexes for table `planta`
--
ALTER TABLE `planta`
  ADD PRIMARY KEY (`codPlanta`),
  ADD KEY `codTipo` (`codTipo`),
  ADD KEY `codRaro` (`codRaro`);

--
-- Indexes for table `produtor`
--
ALTER TABLE `produtor`
  ADD PRIMARY KEY (`codProdutor`);

--
-- Indexes for table `raridade`
--
ALTER TABLE `raridade`
  ADD PRIMARY KEY (`codRaro`);

--
-- Indexes for table `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`codTipo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carrousel`
--
ALTER TABLE `carrousel`
  MODIFY `codCarrousel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `imagem`
--
ALTER TABLE `imagem`
  MODIFY `codImagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `planta`
--
ALTER TABLE `planta`
  MODIFY `codPlanta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `produtor`
--
ALTER TABLE `produtor`
  MODIFY `codProdutor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `raridade`
--
ALTER TABLE `raridade`
  MODIFY `codRaro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tipo`
--
ALTER TABLE `tipo`
  MODIFY `codTipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `imagem`
--
ALTER TABLE `imagem`
  ADD CONSTRAINT `imagem_ibfk_1` FOREIGN KEY (`codPlanta`) REFERENCES `planta` (`codPlanta`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Limitadores para a tabela `planta`
--
ALTER TABLE `planta`
  ADD CONSTRAINT `planta_ibfk_1` FOREIGN KEY (`codTipo`) REFERENCES `tipo` (`codTipo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `planta_ibfk_2` FOREIGN KEY (`codRaro`) REFERENCES `raridade` (`codRaro`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
