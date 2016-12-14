-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13-Dez-2016 às 22:54
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
  `imagem` varchar(100) NOT NULL,
  `obs` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `carrousel`
--

INSERT INTO `carrousel` (`codCarrousel`, `imagem`, `obs`) VALUES
(1, 'b52.jpg', 'banner'),
(2, 'phantom.jpg', 'banner'),
(3, 'reddragon.jpg', 'banner'),
(4, 'lugar1.jpg', 'lugar'),
(5, 'lugar2.jpg', 'lugar');

-- --------------------------------------------------------

--
-- Estrutura da tabela `idioma`
--

CREATE TABLE `idioma` (
  `codIdioma` int(11) NOT NULL,
  `pt` text NOT NULL,
  `en` text NOT NULL,
  `es` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `idioma`
--

INSERT INTO `idioma` (`codIdioma`, `pt`, `en`, `es`) VALUES
(1, 'Conheca a minha historia', 'Hello\nComo voce estáw', 'Hola'),
(2, 'Tudo bem?', 'Are you okay?', '?Tu estas bien?'),
(3, ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rhoncus magna eu elit tincidunt dapibus. Cras suscipit convallis urna, vestibulum dignissim leo porta suscipit. Praesent lobortis tellus et est semper sagittis. Nullam metus nunc, fringilla quis enim nec, aliquet imperdiet lorem. Quisque nunc sapien, consequat in ligula ut, malesuada rhoncus justo. Praesent elementum lorem ac orci fringilla, ac mollis mi consequat. Duis dapibus nisi leo, a sollicitudin nibh vulputate a. Phasellus blandit nunc libero, a lobortis lorem porttitor a.\n\nDonec posuere tellus eget elementum vulputate. Maecenas non sodales odio. Curabitur facilisis id dolor a auctor. Quisque et tincidunt libero. Ut pellentesque nibh nisi, at efficitur tellus convallis nec. Curabitur quis dui eget lectus sagittis imperdiet eget sit amet nibh. Fusce sollicitudin pulvinar ligula, eget vestibulum elit. Aliquam facilisis vitae metus non vulputate. Integer et sollicitudin mauris. Etiam purus enim, ultricies vel suscipit eu, suscipit sed nulla. Phasellus posuere nec purus porttitor pharetra. Pellentesque dapibus magna in massa interdum, quis tristique est pharetra. Vivamus sit amet posuere enim.\n\nDonec gravida suscipit congue. Aenean neque sem, aliquam nec sapien sit amet, iaculis consectetur sem. Donec et ligula ante. Ut condimentum bibendum feugiat. In lobortis convallis libero, ac tristique enim tempor vel. Suspendisse id felis orci. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec tincidunt sollicitudin pretium. ', 'Turpis ipsum dolor pusà amet, PRAEFECTUS adipiscing eit. Quisque rhoncus summa I eit tincidunt dapibus. Cras suscipit Convallis vasellame, vestibulum dignissim le porta suscipit. Hockey Et lobortis Tellus sempre hè dumandata sagittis. Nullam metus Nunc Fringilla recherche culti enim, aliquet imperdiet turpis. Quisque Sapien Nunc, consequat in ligula francese ut, giustu rhoncus malesuada. Hockey elementum turpis A ac orci Fringilla, A ac enchères Mi consequat. Duis leon dapibus Nisi, u sollicitudin vulputate nibh a. Phasellus blandit Nunc uso, la lobortis turpis porttitor a.\n\nPlanta eget Tellus posuere elementum vulputate. Mecenati cada sodales sapientius. Curabitur facilisis id & duluri lu auctor. Quisque Et tincidunt uso. Ut Pellentesque nibh Nisi, à efficitur Convallis Tellus culti. Curabitur eget dui dui recherche sagittis lectus eget imperdiet pusà amet nibh. Fusce sollicitudin pulvinar ligula, eget vestibulum eit. Aliquam facilisis curriculum vitae metus cada vulputate. Cuefficenti Et Mauris sollicitudin. Etiam Purus enim, ultricies V vel suscipit I, suscipit @MiaVanucci terribbili. Phasellus porttitor posuere culti Purus pharetra. Pellentesque interdum summa dapibus in massa recherche tristique hè dumandata pharetra. Vivamus pusà amet posuere enim.\n\nPlanta congue suscipit ncinta grossa. Aenean neque senza aliquam culti Sapien pusà amet, PRAEFECTUS iaculis senza. Planta Et ligula chamois. Ut condimentum Bibendum feugiat. In lobortis Convallis uso, A ac tristique enim V vel tempor. Suspendisse Fustinoni id & orci. Scola aptent taciti A ad litora torquent sociosqu € per conubia Nostra, par inceptos himenaeos. Planta tincidunt sollicitudin pretium.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rhoncus magna I elit tincidunt dapibus. Cras suscipit Convallis Urne, vestibulum dignissim leo suscipit Tür. Nullam et lobortis Tellus semper est sagittis. Nullam metus nunc fringilla wollte enim nec, aliquet imperdiet Lorem. Quisque sapien nunc, consequat in ligula ut, rhoncus malesuada fair. Nullam elementum Lorem ac orci fringilla, ac mollis mi consequat. Duis leo dapibus nisi, die sollicitudin vulputate nibh ein. Phasellus blandit nunc libero, die lobortis Lorem porttitor ein.\n\nDonec eget Tellus posuere elementum vulputate. Maecenas nicht sodales odio. Curabitur facilisis id dolor der auctor. Quisque et tincidunt libero. Ut Pellentesque nibh nisi, bei efficitur Convallis Tellus ang. Curabitur eget dui wollte sagittis lectus eget imperdiet sit amet nibh. Fusce sollicitudin pulvinar ligula, eget vestibulum elit. Aliquam facilisis vitae metus nicht vulputate. Integer et mauris sollicitudin. Etiam purus enim, ultricies vel suscipit I, suscipit sed nulla. Phasellus porttitor posuere ang purus pharetra. Pellentesque interdum magna dapibus in Masse wollte Tristique est pharetra. Vivamus sit amet posuere enim.\n\nDonec congue suscipit schwanger. Aenean neque ohne sapien aliquam ang sit amet, consectetur iaculis ohne. Donec et ligula ante. Ut condimentum bibendum feugiat. In lobortis Convallis libero, ac Tristique enim vel tempor. Suspendisse felis id orci. Klasse aptent Taciti ad litora torquent sociosqu pro conubia nostra, pro inceptos himenaeos. Donec tincidunt sollicitudin Pretium.');

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
(11, 'b52_m.jpg', 1),
(12, 'aue.jpg', 3),
(13, 'sarracenia.jpg', 2),
(14, 'sawtooth.jpg', 11),
(15, 'g3xg14.jpg', 12),
(16, 'microdente.jpg', 13),
(18, 'phantom.jpg', 4),
(19, 'reddragon.jpg', 6);

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
(1, 'B52 a', 'A Dionaea muscipula (Venus Flytrap) é como chama-se a planta que primeiro começou a atrair a atenção dos Botânicos, o seu movimento rápido ao apanhar a presa é um fenômeno único no mundo vegetal. Muito embora Darwin demonstrasse que se tratava verdadeiramente de uma carnívora, o processo de assimilação só foi descoberto durante o século XX.\nEm 1770, em Londres, o comerciante e botânico John Ellis publicou a primeira descrição de "uma nova planta sensível, chamada Dionaea muscipula: ou, de Vênus Papa-moscas A Bela e a Fera: Dionaea, referindo-se a deusa mítica do amor e da beleza (Vênus, filha de Dione), porque é uma pequena planta que dá flores; muscipula, do latim "ratoeira", porque suas folhas se fecham em cerca de meio segundo quando seu mecanismo de captura é ativado. Pequenos “dentes” que ficam nas bordas das folhas formam uma gaiola estreita para o inseto. A folha se fecha para prender sua presa e segrega um líquido que digere o inseto em aproximadamente dez dias. Em seguida, a folha cresce um pouco e abre, pronta para sua próxima vítima.\nA descrição de Ellis teria chegado a terra natal da Dionaea, o litoral pantanoso da Carolina do Norte e Carolina do Sul, em 1771. Naturalmente, a planta já era conhecida por lá. Ela havia sido descrito há uma década atrás por Arthur Dobbs, governador da Carolina do Norte.\nA característica mais visível é a folha em forma de mandíbula com 15 a 20 longos "dentes". A folha é verde se a meia-luz e vermelha com sol direto. O tamanho da folha varia de acordo com a intensidade luminosa.\nAs Dionaeas fazem parte das poucas plantas capazes de movimentar-se no reino vegetal, além desta temos outras como as Droseras e dormideiras ou sensitivas.\n\nO mecanismo pelo qual a armadilha dispara envolve uma complexa interação entre elasticidade, turgidez e crescimento. Quando aberta, a armadilha é convexa, mas quando ativada, ela se torna côncava. É a rápida alternância desses estados que fecha a armadilha, embora a forma exata como isso ocorre ainda seja mal compreendida. ', 1, 'DM. B52 ASDAGiant', 'Norte da America', 1),
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
  `dataNasc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtor`
--

INSERT INTO `produtor` (`codProdutor`, `nome`, `dataNasc`) VALUES
(1, 'Marcos Missao Ono', '1980-06-17');

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `codUser` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`codUser`, `username`, `password`) VALUES
(1, 'root', 'root');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrousel`
--
ALTER TABLE `carrousel`
  ADD PRIMARY KEY (`codCarrousel`);

--
-- Indexes for table `idioma`
--
ALTER TABLE `idioma`
  ADD PRIMARY KEY (`codIdioma`);

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`codUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carrousel`
--
ALTER TABLE `carrousel`
  MODIFY `codCarrousel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `idioma`
--
ALTER TABLE `idioma`
  MODIFY `codIdioma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `imagem`
--
ALTER TABLE `imagem`
  MODIFY `codImagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
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
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `codUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `imagem`
--
ALTER TABLE `imagem`
  ADD CONSTRAINT `imagem_ibfk_1` FOREIGN KEY (`codPlanta`) REFERENCES `planta` (`codPlanta`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `planta`
--
ALTER TABLE `planta`
  ADD CONSTRAINT `planta_ibfk_1` FOREIGN KEY (`codTipo`) REFERENCES `tipo` (`codTipo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `planta_ibfk_2` FOREIGN KEY (`codRaro`) REFERENCES `raridade` (`codRaro`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
