-- phpMyAdmin SQL Dump
-- version 4.3.7
-- http://www.phpmyadmin.net
--
-- Host: mysql04-farm76.kinghost.net
-- Tempo de geração: 27/06/2019 às 11:33
-- Versão do servidor: 5.6.38-log
-- Versão do PHP: 5.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `fabricioweb`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `augurio`
--

CREATE TABLE IF NOT EXISTS `augurio` (
  `id` bigint(20) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `augurio`
--

INSERT INTO `augurio` (`id`, `nome`, `created_at`, `updated_at`) VALUES
(1, 'Ragabash', NULL, NULL),
(2, 'Theurge', NULL, NULL),
(3, 'Galiard', NULL, NULL),
(4, 'Philodox', NULL, NULL),
(5, 'Ahroun', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `caracteristica`
--

CREATE TABLE IF NOT EXISTS `caracteristica` (
  `id` bigint(20) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `id_classe` bigint(20) unsigned DEFAULT '0',
  `id_ficha` bigint(20) unsigned DEFAULT '0',
  `id_augurio` bigint(20) unsigned DEFAULT '0',
  `id_raca` bigint(20) unsigned DEFAULT '0',
  `id_comum` bigint(20) unsigned DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=270 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `caracteristica`
--

INSERT INTO `caracteristica` (`id`, `nome`, `id_classe`, `id_ficha`, `id_augurio`, `id_raca`, `id_comum`, `created_at`, `updated_at`) VALUES
(234, 'Resistência a Dor', 2, 0, 4, 0, 0, NULL, NULL),
(233, 'Comunicação com Espíritos', 2, 0, 2, 0, 0, NULL, NULL),
(232, 'Sentir a Wyrm', 2, 0, 2, 0, 0, NULL, NULL),
(231, 'Toque da mãe', 2, 0, 2, 0, 0, NULL, NULL),
(230, 'Simular Cheiro de Água Corrente', 2, 0, 1, 0, 0, NULL, NULL),
(229, 'Abrir Objetos', 2, 0, 1, 0, 0, NULL, NULL),
(228, 'Embasamento da Própria Forma', 2, 0, 1, 0, 0, NULL, NULL),
(227, 'Sentir a Wyrm', 2, 0, 0, 2, 0, NULL, NULL),
(226, 'Criar Elemento', 2, 0, 0, 2, 0, NULL, NULL),
(225, 'Salto de Canguru [ou Lebre]', 2, 0, 0, 1, 0, NULL, NULL),
(224, 'Sentidos Aguçados', 2, 0, 0, 1, 0, NULL, NULL),
(222, 'Persuasão', 2, 0, 0, 3, 0, NULL, NULL),
(223, 'Simular Odor de Homem', 2, 0, 0, 3, 0, NULL, NULL),
(221, 'Dano', 2, 0, 0, 0, 7, NULL, NULL),
(39, 'Fortitude', 1, 13, 0, 0, 0, NULL, NULL),
(220, 'Ciência', 2, 0, 0, 0, 6, NULL, NULL),
(217, 'Ocultismo', 2, 0, 0, 0, 6, NULL, NULL),
(218, 'Política', 2, 0, 0, 0, 6, NULL, NULL),
(216, 'Medicina', 2, 0, 0, 0, 6, NULL, NULL),
(214, 'Direito', 2, 0, 0, 0, 6, NULL, NULL),
(213, 'Investigação', 2, 0, 0, 0, 6, NULL, NULL),
(38, 'Quimerismo', 1, 13, 0, 0, 0, NULL, NULL),
(37, 'Animalismo', 1, 13, 0, 0, 0, NULL, NULL),
(36, 'Potência', 1, 10, 0, 0, 0, NULL, NULL),
(208, 'Furtividade', 2, 0, 0, 0, 5, NULL, NULL),
(206, 'Performance', 2, 0, 0, 0, 5, NULL, NULL),
(35, 'Necromancia', 1, 10, 0, 0, 0, NULL, NULL),
(34, 'Dominação', 1, 10, 0, 0, 0, NULL, NULL),
(200, 'Empatia', 2, 0, 0, 0, 4, NULL, NULL),
(198, 'Intimidação', 2, 0, 0, 0, 4, NULL, NULL),
(197, 'Instinto primitivo', 2, 0, 0, 0, 4, NULL, NULL),
(195, 'Lábia', 2, 0, 0, 0, 4, NULL, NULL),
(193, 'Condução', 2, 0, 0, 0, 5, NULL, NULL),
(191, 'Armas de fogo', 2, 0, 0, 0, 5, NULL, NULL),
(190, 'Raciocínio', 2, 0, 0, 0, 2, NULL, NULL),
(188, 'Percepção', 2, 0, 0, 0, 2, NULL, NULL),
(183, 'Destreza', 2, 0, 0, 0, 1, NULL, NULL),
(30, 'Quietus', 1, 11, 0, 0, 0, NULL, NULL),
(29, 'Ofuscação', 1, 11, 0, 0, 0, NULL, NULL),
(31, 'Ofuscação', 1, 12, 0, 0, 0, NULL, NULL),
(32, 'Presença', 1, 12, 0, 0, 0, NULL, NULL),
(33, 'Serpentis', 1, 12, 0, 0, 0, NULL, NULL),
(27, 'Vicissitude', 1, 8, 0, 0, 0, NULL, NULL),
(28, 'Rapidez', 1, 11, 0, 0, 0, NULL, NULL),
(164, 'Linguística', 2, 0, 0, 0, 6, NULL, NULL),
(161, 'Rituais', 2, 0, 0, 0, 6, NULL, NULL),
(160, 'Computador', 2, 0, 0, 0, 6, NULL, NULL),
(159, 'Enigmas', 2, 0, 0, 0, 6, NULL, NULL),
(158, 'Sobrevivência', 2, 0, 0, 0, 5, NULL, NULL),
(157, 'Furtividade', 2, 0, 0, 0, 5, NULL, NULL),
(156, 'Concertos', 2, 0, 0, 0, 5, NULL, NULL),
(153, 'Prontidão', 2, 0, 0, 0, 4, NULL, NULL),
(154, 'Armas brancas', 2, 0, 0, 0, 5, NULL, NULL),
(152, 'Esportes', 2, 0, 0, 0, 4, NULL, NULL),
(150, 'Esquiva', 2, 0, 0, 0, 4, NULL, NULL),
(151, 'Briga', 2, 0, 0, 0, 4, NULL, NULL),
(145, 'Manha', 2, 0, 0, 0, 4, NULL, NULL),
(148, 'Expressão', 2, 0, 0, 0, 4, NULL, NULL),
(143, 'Empatia com animais', 2, 0, 0, 0, 5, NULL, NULL),
(141, 'Protocolo', 2, 0, 0, 0, 5, NULL, NULL),
(138, 'Inteligência', 2, 0, 0, 0, 2, NULL, NULL),
(136, 'Aparência', 2, 0, 0, 0, 3, NULL, NULL),
(135, 'Manipulação', 2, 0, 0, 0, 3, NULL, NULL),
(134, 'Carisma', 2, 0, 0, 0, 3, NULL, NULL),
(133, 'Vigor', 2, 0, 0, 0, 1, NULL, NULL),
(131, 'Força', 2, 0, 0, 0, 1, NULL, NULL),
(130, 'Fúria no jogo', 2, 0, 0, 0, 7, NULL, NULL),
(129, 'Gnose no jogo', 2, 0, 0, 0, 7, NULL, NULL),
(128, 'Força de Vontade no jogo', 2, 0, 0, 0, 7, NULL, NULL),
(127, 'Fúria', 2, 0, 0, 0, 0, NULL, NULL),
(126, 'Gnose', 2, 0, 0, 0, 0, NULL, NULL),
(125, 'Força de Vontade', 2, 0, 0, 0, 0, NULL, NULL),
(124, 'Sabedoria ganha', 2, 0, 0, 0, 7, NULL, NULL),
(123, 'Honra ganha', 2, 0, 0, 0, 7, NULL, NULL),
(122, 'Glória ganha', 2, 0, 0, 0, 7, NULL, NULL),
(121, 'Sabedoria', 2, 0, 0, 0, 7, NULL, NULL),
(120, 'Honra', 2, 0, 0, 0, 7, NULL, NULL),
(119, 'Glória', 2, 0, 0, 0, 7, NULL, NULL),
(118, 'Ciência', 1, 0, 0, 0, 6, NULL, NULL),
(117, 'Ofícios', 1, 0, 0, 0, 5, NULL, NULL),
(116, 'Conciência', 1, 0, 0, 0, 8, NULL, NULL),
(115, 'Auto controle', 1, 0, 0, 0, 8, NULL, NULL),
(114, 'Coragem', 1, 0, 0, 0, 8, NULL, NULL),
(113, 'Dano', 1, 0, 0, 0, 7, NULL, NULL),
(112, 'Pontos de sangue', 1, 0, 0, 0, 7, '0000-00-00 00:00:00', NULL),
(111, 'Força de vontade no jogo', 1, 0, 0, 0, 7, NULL, NULL),
(110, 'Política', 1, 0, 0, 0, 6, NULL, NULL),
(109, 'Ocultismo', 1, 0, 0, 0, 6, NULL, NULL),
(108, 'Medicina', 1, 0, 0, 0, 6, NULL, NULL),
(107, 'Linguística', 1, 0, 0, 0, 6, NULL, NULL),
(106, 'Direito', 1, 0, 0, 0, 6, NULL, NULL),
(105, 'Investigação', 1, 0, 0, 0, 6, NULL, NULL),
(104, 'Finanças', 1, 0, 0, 0, 6, NULL, NULL),
(103, 'Computador', 1, 0, 0, 0, 6, NULL, NULL),
(102, 'Acadêmicos', 1, 0, 0, 0, 6, NULL, NULL),
(101, 'Sobrevivência', 1, 0, 0, 0, 5, NULL, NULL),
(100, 'Furtividade', 1, 0, 0, 0, 5, NULL, NULL),
(99, 'Segurança', 1, 0, 0, 0, 5, NULL, NULL),
(98, 'Performance', 1, 0, 0, 0, 5, NULL, NULL),
(97, 'Armas brancas', 1, 0, 0, 0, 5, NULL, NULL),
(83, 'Prontidão', 1, 0, 0, 0, 4, NULL, NULL),
(84, 'Esportes', 1, 0, 0, 0, 4, NULL, NULL),
(85, 'Briga', 1, 0, 0, 0, 4, NULL, NULL),
(86, 'Esquiva', 1, 0, 0, 0, 4, NULL, NULL),
(87, 'Empatia', 1, 0, 0, 0, 4, NULL, NULL),
(88, 'Expressão', 1, 0, 0, 0, 4, NULL, NULL),
(89, 'Intimidação', 1, 0, 0, 0, 4, NULL, NULL),
(90, 'Liderança', 1, 0, 0, 0, 4, NULL, NULL),
(91, 'Manha', 1, 0, 0, 0, 4, NULL, NULL),
(92, 'Lábia', 1, 0, 0, 0, 4, NULL, NULL),
(93, 'Empatia com animais', 1, 0, 0, 0, 5, NULL, NULL),
(94, 'Condução', 1, 0, 0, 0, 5, NULL, NULL),
(95, 'Etiqueta', 1, 0, 0, 0, 5, NULL, NULL),
(96, 'Armas de fogo', 1, 0, 0, 0, 5, NULL, NULL),
(54, 'Raciocínio', 1, 0, 0, 0, 2, NULL, NULL),
(53, 'Inteligência', 1, 0, 0, 0, 2, NULL, NULL),
(52, 'Percepção', 1, 0, 0, 0, 2, NULL, NULL),
(51, 'Aparência', 1, 0, 0, 0, 3, NULL, NULL),
(50, 'Manipulação', 1, 0, 0, 0, 3, NULL, NULL),
(49, 'Carisma', 1, 0, 0, 0, 3, NULL, NULL),
(48, 'Vigor', 1, 0, 0, 0, 1, NULL, NULL),
(47, 'Destreza', 1, 0, 0, 0, 1, NULL, NULL),
(46, 'Força', 1, 0, 0, 0, 1, NULL, NULL),
(41, 'Força de Vontade', 1, 0, 0, 0, 0, NULL, NULL),
(40, 'Humanidade', 1, 0, 0, 0, 0, NULL, NULL),
(24, 'Potência', 1, 9, 0, 0, 0, NULL, NULL),
(25, 'Animalismo', 1, 8, 0, 0, 0, NULL, NULL),
(26, 'Auspícios', 1, 8, 0, 0, 0, NULL, NULL),
(21, 'Presença', 1, 4, 0, 0, 0, NULL, NULL),
(22, 'Dominação', 1, 9, 0, 0, 0, NULL, NULL),
(23, 'Tenebrosidade', 1, 9, 0, 0, 0, NULL, NULL),
(19, 'Dominação', 1, 4, 0, 0, 0, NULL, NULL),
(20, 'Fortitude', 1, 4, 0, 0, 0, NULL, NULL),
(18, 'Taumaturgia', 1, 1, 0, 0, 0, NULL, NULL),
(17, 'Dominação', 1, 1, 0, 0, 0, NULL, NULL),
(16, 'Auspícios', 1, 1, 0, 0, 0, NULL, NULL),
(15, 'Presença', 1, 6, 0, 0, 0, NULL, NULL),
(14, 'Rapidez', 1, 6, 0, 0, 0, NULL, NULL),
(13, 'Auspícios', 1, 6, 0, 0, 0, NULL, NULL),
(12, 'Ofuscação', 1, 7, 0, 0, 0, NULL, NULL),
(11, 'Potência', 1, 7, 0, 0, 0, NULL, NULL),
(8, 'Demência', 1, 2, 0, 0, 0, NULL, NULL),
(9, 'Ofuscação', 1, 2, 0, 0, 0, NULL, NULL),
(10, 'Animalismo', 1, 7, 0, 0, 0, NULL, NULL),
(5, 'Fortitude', 1, 5, 0, 0, 0, NULL, NULL),
(6, 'Metamorfose', 1, 5, 0, 0, 0, NULL, NULL),
(7, 'Auspícios', 1, 2, 0, 0, 0, NULL, NULL),
(1, 'Rapidez', 1, 3, 0, 0, 0, NULL, NULL),
(2, 'Potência', 1, 3, 0, 0, 0, NULL, NULL),
(3, 'Presença', 1, 3, 0, 0, 0, NULL, NULL),
(4, 'Animalismo', 1, 5, 0, 0, 0, NULL, NULL),
(235, 'Faro para a Forma Verdadeira', 2, 0, 4, 0, 0, NULL, NULL),
(236, 'Verdade de Gaia', 2, 0, 4, 0, 0, NULL, NULL),
(237, 'Comunicação com Animais', 2, 0, 3, 0, 0, NULL, NULL),
(238, 'Chamado da Wyld', 2, 0, 3, 0, 0, NULL, NULL),
(239, 'Comunicação Telepática', 2, 0, 3, 0, 0, NULL, NULL),
(240, 'Inspiração', 2, 0, 5, 0, 0, NULL, NULL),
(241, 'Garras Afiadas', 2, 0, 5, 0, 0, NULL, NULL),
(242, 'O Toque da Queda', 2, 0, 5, 0, 0, NULL, NULL),
(243, 'Sentidos Aguçados', 2, 14, 0, 0, 0, NULL, NULL),
(244, 'Sentir a Wyrm', 2, 14, 0, 0, 0, NULL, NULL),
(245, 'Culinária', 2, 15, 0, 0, 0, NULL, NULL),
(246, 'Simular Cheiro de Mel Doce', 2, 15, 0, 0, 0, NULL, NULL),
(247, 'Toque da Mãe', 2, 16, 0, 0, 0, NULL, NULL),
(248, 'Resistência a Dor', 2, 16, 0, 0, 0, NULL, NULL),
(249, 'Luz das Fadas', 2, 17, 0, 0, 0, NULL, NULL),
(250, 'Persuasão', 2, 17, 0, 0, 0, NULL, NULL),
(251, 'Resistência a Toxinas', 2, 17, 0, 0, 0, NULL, NULL),
(252, 'Garras Afiadas', 2, 18, 0, 0, 0, NULL, NULL),
(253, 'Resistência a Dor', 2, 18, 0, 0, 0, NULL, NULL),
(254, 'Controle de Máquinas Simples', 2, 19, 0, 0, 0, NULL, NULL),
(255, 'Persuasão', 2, 19, 0, 0, 0, NULL, NULL),
(256, 'Comunicação com Animais', 2, 20, 0, 0, 0, NULL, NULL),
(257, 'Simular Odor de Água Corrente', 2, 20, 0, 0, 0, NULL, NULL),
(258, 'Fraquezas Fatais', 2, 21, 0, 0, 0, NULL, NULL),
(259, 'Aura de Confiança', 2, 21, 0, 0, 0, NULL, NULL),
(260, 'Sentir a Wyrm', 2, 22, 0, 0, 0, NULL, NULL),
(261, 'Velocidade do Pensamento', 2, 22, 0, 0, 0, NULL, NULL),
(262, 'Chama Tremulante', 2, 23, 0, 0, 0, NULL, NULL),
(263, 'Sentir a Wyrm', 2, 23, 0, 0, 0, NULL, NULL),
(264, 'Equilíbrio', 2, 24, 0, 0, 0, NULL, NULL),
(265, 'Sentir a Wyrm', 2, 24, 0, 0, 0, NULL, NULL),
(266, 'Sentir Magia', 2, 25, 0, 0, 0, NULL, NULL),
(267, 'Mortalha', 2, 25, 0, 0, 0, NULL, NULL),
(268, 'Invocar a Brisa', 2, 26, 0, 0, 0, NULL, NULL),
(269, 'Camuflagem', 2, 26, 0, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` bigint(20) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `texto` varchar(255) DEFAULT NULL,
  `id_cronica` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `classe`
--

CREATE TABLE IF NOT EXISTS `classe` (
  `id` bigint(20) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `descricao` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `poderes` text
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `classe`
--

INSERT INTO `classe` (`id`, `nome`, `descricao`, `created_at`, `updated_at`, `poderes`) VALUES
(1, 'Vampiro', 'Origens e geração\r\n\r\nUm vampiro nada mais é que um morto vivo. Então não está sujeito às regras da vida. Não envelhece, se foi ''vampirizado'' quando criança, ele não cresce, dentre outras limitações. \r\nAh muito tempo os vampiros se organizaram em uma sociedade, com os vampiros ''de bem'' e os ''vampiros criminosos''. Suas origens se perdem pelo tempo. \r\nO mais aceito, é que Caim, filho de Adão e Eva, irmão de Abel, é o primeiro vampiro. Quando Caim matou Abel, deus o amaldiçoou. É de conhecimento da maior parte dos vampiros, que ao receber a maldição, ele nunca mais pôde tocar o sol, sob risco de queimar até virar cinzas. Nunca mais conseguiu se alimentar de qualquer coisa que não fosse sangue fresco. Mas por ter sido diretamente tocado por deus, ganhou vários poderes. E o pior. Enquanto seguisse as regras da maldição, seu tormento seria eterno. E ele poderia passar a maldição para outros, como ele fez. 3 novos vampiros para viver com ele. Que foram mortos não se sabe como, mas não sem antes gerarem a terceira geração de vampiros. Que como existiram antes do dilúvio, são chamados de antediluvianos. Todos antes do dilúvio desapareceram, e nunca mais se ouviu falar deles. É de consenso que eram muito poderosos. E desde então nunca mais se falou desses seres. O poder foi diminuindo de geração a geração, e os atuais são de décima terceira e décima quarta geração. Como por todo esse tempo permaneceram escondidos, foi tempo suficiente para os mais antigos acumularem conhecimento, poder e influência na sociedade humana, sendo muito difícil tomar esse poder. Além do fato de serem de gerações mais baixas, portanto, mais poder vampírico. \r\nEsse poder pode ser tomado, pelo que é chamado de diablérie. Quando um vampiro mais fraco de alguma maneira toma o sangue de menor geração todo e sua essência, abaixando a própria. \r\n*    *    *\r\nConhecidos entre si como cainitas, basicamente são divididos em duas facções. \r\n\r\nA camarila, o sabah e a besta\r\n\r\nA Camarila, que busca permanecer oculta, e seus membros são punidos de acordo por demonstrações de poder diante dos mortais. E existe o Sabah, que não liga para esse tipo de cerimônia e quer expandir seus domínios pelo mundo. Que hoje é controlado pela Camarila. Cada facção é subdividida em grupos que compartilham características, os clãs. \r\nSão eles: tremere, toreador, brujah, malkavianos, gangrel, nosferatu e ventrue. \r\nA Camarila prima por manter sua humanidade, não se deixando dominar pela besta (os instintos primitivos dos vampiros), enquanto os integrantes do sabah normalmente tem a humanidade baixa. Ela é mantida, não praticando atos que o tornam animalesco, sempre se comportando de maneira mais humana possível, e não praticando atos condenáveis. Quanto menor a humanidade, mais cruel, e mais difícil controlar a besta.\r\nOs clãs do sabah são os lassombra e os tzimice.\r\nE há ainda os clãs independentes, que não tem associação com nenhuma facção. São os seguidores de set, os ravnos, os assamitas e os Giovanni.\r\nE há ainda os vampiros que não tem clã definido, ou porque são desertores ou porque estão sendo caçados dentro do próprio clã. São os caitifs, \r\nE cada clã possui uma fraqueza em específico, o que ajuda muitas vezes a identificar entre os cainitas o clã ao qual pertence o indivíduo.\r\n*    *    *\r\n\r\nObjetivo final da Camarila \r\n\r\nComo dito, quase todos os vampiros se vêem como amaldiçoados. E isso chega a ser muito perturbador para alguns. Ao alcançar um nível de humanidade alto e um grande auto conhecimento, o cainita alcança a Golconda, estado de paz semelhante ao Nirvana, onde finalmente chegam a salvação. Nunca houve algum vampiro que alcançou isso, ou houve mas permanecem escondidos. Ninguém sabe.  Há um grupo, que se afastou dos conflitos, e permanece escondido em lugares desconhecidos, o Inconnu. Boatos dizem que seus membros alcançaram tal feito, pois quase não se fala deles. Dizem que a paz os afastou de tudo. \r\n*    *    *\r\nA máscara\r\n\r\nAs regras da Camarila, que engloba regras a se seguir para manter a humanidade e regras para manter a hierarquia. É organizada em tradições, que devem ser seguidas. São elas\r\n:\r\nA Primeira Tradição: A Máscara\r\n\r\nNão revelarás tua verdadeira natureza àqueles que não sejam do Sangue. Fazer isso é renunciar aos teus direitos de Sangue.\r\n\r\nA Segunda Tradição: O Domínio\r\n\r\nTeu domínio é de tua inteira responsabilidade. Todos os outros devem-te respeito enquanto nele estiverem. Ninguém poderá desafiar tua palavra enquanto estiver em teu domínio.\r\n\r\nA Terceira Tradição: A Progênie\r\n\r\nApenas com a permissão de teu ancião gerarás outro de tua raça; Se criares outro sem a permissão de teu ancião, tu e tua progênie serão sacrificados.\r\n\r\nA Quarta Tradição: A Responsabilidade\r\n\r\nAqueles que criares serão tuas próprias crianças. Até que tua progênie seja liberada, tu os comandará em todas as coisas. Os pecados de teus filhos recairão sobre ti.\r\n\r\nA Quinta Tradição: A Hospitalidade\r\n\r\nHonrarás o domínio de teu próximo. Quando chegares a uma cidade estrangeira, tu te apresentarás perante aquele que a governa. Sem a palavra de aceitação, tu não és nada.\r\n\r\nA Sexta Tradição: A Destruição\r\n\r\nTu estás proibido de destruir outro de tua espécie. O direito de destruição pertence apenas ao teu ancião. Apenas os mais antigos dentre vós convocarão a Caçada de Sangue.\r\n*    *    *\r\nO torpor\r\n\r\nQuando o estoque interno de sangue chega ao final, o vampiro entra em torpor. Um estado semelhante ao coma humano, que deixa o vampiro totalmente sem ação. Efeito esse também conseguido com uma estaca de madeira no coração, que é o método que os caçadores de vampiros usam para incapacitar o cainita. \r\n*    *    *\r\nAlimentação\r\n\r\nVocê também não se alimenta normalmente. É obrigado a tomar sangue fresco para sua nutrição, não conseguindo comer mais nada, nem mesmo água (ou você vomita e recebe dano).\r\n*    *    *\r\nO sangue\r\n\r\nVocê o usa para:\r\n- Se curar de ferimentos\r\n- Acessar os poderes mediante gasto de um pouco dele.\r\n- Realizar um laço de sangue\r\n*    *    *\r\nO sol\r\n\r\nA pior parte da maldição vampírica. Você não pode nem mesmo receber um pouco de seus raios, ou se tornará cinzas. Você também recebe dano normal de outras coisas que normalmente ferem pessoas.\r\n\r\n*    *    *\r\n\r\nA gehena\r\n\r\nHá uma lenda no meio dos vampiros, do dia em que os antediluvianos irão ressurgir, apenas para extermimar os seus filhos, isto é, todos os outros vampiros. Nesse dia acontecerá o fim do mundo para os cainitas, e a partir daí as histórias se divergem.\r\n\r\n*     *     *\r\n\r\nOrganização \r\n\r\nOs cainitas atuais estão espalhados pelo mundo. Cada cidade possui um príncipe, que tem o domínio sobre os cainitas do local. Abaixo deles tem os justicares, vampiros de poder elevado que fazem o trabalho sujo do príncipe, para manter as tradições vampíricas em ordem. Todo vampiro ao chegar em uma cidade deve se apresentar ao príncipe, sob risco de ser caçado por um grupo de justicares.\r\n\r\n*     *     *\r\n\r\nO frenesi\r\n\r\nQuando acuado ou provocado, o vampiro entra em frenesi. Um estado de descontrole, onde age de maneira aleatória, quebrando coisas ou avançando para bater em alguém. Ou simplesmente foge descontrolado, correndo sem direção. Para resistir a esse estado, teste auto controle. O clã brujah tem uma tendência a entrar nesse estado com mais facilidade. O vampiro pode fazer qualquer coisa nesse estado, mas não consegue usar poderes. A concentração não permite.\r\n\r\n*     *     *\r\n\r\nOutros seres sobrenaturais\r\n\r\n- Magos: comida e lacaios com algum poder. Mas alguns deles realmente representam perigo.\r\n- Lobisomens: fuja, pois são muito fortes e certamente te matarão. Além de conseguirem te achar fácil pois eles tem faro e andam em matilhas, como todo cachorro.', NULL, '2019-06-25 13:14:44', '*    *    *\r\n\r\nDisciplinas\r\n\r\nPoderes vampíricos são chamados de disciplinas. São elas:\r\n\r\n Animalismo:A besta do vampiro está a flor da pele. O que permite a ele uma conexão com o mundo dos animais.\r\n Manipulação e Carisma são os mais usados junto com empatia com animais.\r\n\r\n✺ Comandos simples: O Vampiro olha nos olhos do animal e sussurra comandos simples; latir, miar e coisas\r\ndo tipo facilitam o comando. Teste: Deve ser feito contato visual e jogar Manipulação + Emp. C/ animais.\r\nDificuldade 6 para predadores, 7 para outros mamíferos e aves, 8 para repteis.\r\n✺✺ Chamado: O Vampiro pode chamar por qualquer animal na área de audição. Teste: Carisma +\r\nSobrevivência, dificuldade 6. 1 sucesso = um animal responde; 2 = um quarto dos animais na área\r\nrespondem; 3 = metade dos animais respondem; 4 = maioria dos animais respondem; 5 = todos animais\r\nrespondem.\r\n✺✺✺ Trazer a Besta: O Vampiro pode tocar em alguém e fazer a sua besta interior tomar suas emoções. Teste:\r\nManipulação + Intimidação se quiser forçar a besta através do Medo; Manipulação + Empatia se for através\r\nde outros sentimentos. Dificuldade 7. É uma ação extensa e são necessários um numero de sucessos iguais à\r\nforça de vontade do alvo.\r\n✺✺✺✺ Assumir o espírito do animal: o vampiro entra em torpor e obtém poder sobre a mente do animal. Teste:\r\nManipulação + Empatia com animais. Dificuldade 8. 1 sucesso = não pode usar as disciplinas; 2 =\r\nAuspícios; 3 = Presença; 4 = Demência e Dominação; 5 = Quimerismo, Necromancia e Taumaturgia.\r\n✺✺✺✺✺ Transferir Frenesi: O Vampiro pode incitar outra pessoa ou animal a entrar em Frenesi. Teste:\r\nManipulação + Auto Controle. Dificuldade 8. O Vampiro tem que estar em frenesi ou muito próximo de\r\nentrar. O alvo deve estar na mesma área do vampiro.\r\n\r\nAuspícios: Super percepção. Seus sentidos são mais poderosos.\r\nPercepção é o atributo mais usado com essa disciplina\r\n\r\n✺ Sentidos Aguçados: Aumenta os sentidos do vampiro (visão, audição e olfato). Teste: Não é necessário.\r\n✺✺ Perceber a aura: Permite ver a aura da pessoa (o que ela sente) Teste: Percepção + Empatia Dif. 8\r\n✺✺✺ Toque do Espírito: Permite ler as sensações que envolveram um objeto (saber quem usou, quando e\r\ncomo). As visões não são claras e sim uma espécie de choque psíquico. Teste: Percepção + Empatia, a\r\ndificuldade é dada pelo tempo que o objeto foi usado: Dif. 5 Algumas horas atrás, Dif 9 para dias atrás.\r\nQuanto maior for a ligação do dono do objeto com ele, mais informações são dadas.\r\n✺✺✺✺ Telepatia: Permite enviar imagens e ler a mente de alguém. Teste: Inteligência + Lábia Dif. Igual a\r\nForça de Vontade do alvo.\r\n✺✺✺✺✺ Projeção Psíquica: Permite ao vampiro sair de seu corpo e caminhar como um fantasma. Teste:\r\nPercepção + Ocultismo + 1 ponto de força de vontade, Dif. 7 (Básico) – 10 (lugar muito distante) (mais\r\ndetalhes no livro básico sobre interação no mundo espiritual).\r\nCeleridade\r\nCada nível em celeridade garante uma ação extra. Teste: O personagem gasta 1 ponto de sangue e no\r\npróximo turno ele faz as ações extras mais a comum.\r\n\r\nQuimerismo: isso permite você gerar ilusões de diversos níveis.\r\n\r\n✺ Ignis Fatuus: Permite criar uma miragem simples que confunde um único sentido. Teste: 1 ponto de Força\r\nde Vontade. Funcionara até o vampiro sair da área ou até quando ele quiser.\r\n✺✺ Fata Morgana: Permite criar uma ilusão que confunde todos os sentidos, mas continua estático. Teste: 1\r\nponto de Força de Vontade e 1 ponto de sangue. A ilusão estática continuara igual a Ignis Fatuus.\r\n✺✺✺ Aparição: Permite dar movimento a uma ilusão criada com Ignis Fatuus e Fata Morgana. Teste: o criador\r\ngasta 1 ponto de sangue, e precisa ficar se concentrando na ilusão.\r\n✺✺✺✺ Permanência: Também deve ser usado com os dois primeiros níveis, permite que a ilusão fique mesmo\r\nquando o criador não esteja olhando. Teste: 1 ponto de Sangue\r\n✺✺✺✺✺ Horrível Realidade: O vampiro pode projetar alucinações diretamente na mente da vitima. O alvo\r\ndessas ilusões acredita completamente no que esta vendo (um fogo ilusório pode queima-lo, uma parede\r\nilusória pode impedi-lo). Teste: 2 pontos d e Força de Vontade, dura uma cena inteira. Para ferir alguém se\r\njoga Manipulação + Lábia Dif. Igual a Percepção + Auto-Controle da vitima, Cada sucesso causa um\r\nnível de dano. A vitima não pode morrer.\r\n\r\nDemência: malkavianos sofrem de uma maldição que deixa todos loucos em algum nível (dupla personalidade, ver ou ouvir coisas, mania de perseguição). Essa disciplina permite o vampiro transmitir a maldição a outro.\r\nManipulação é bastante usado nessa disciplina\r\n\r\n✺ Paixão: o vampiro pode aumentar ou diminuir as emoções do alvo, mas não pode escolher a emoção. Teste:\r\nCarisma + Empatia Dif. Igual a humanidade do alvo. 1 sucesso=Um Turno, 2 sucessos= uma hora, 3\r\nsucessos= uma noite, 4 sucessos= Uma semana, 5 sucessos= Um mês, 6+ sucessos= três meses.\r\n✺✺ Assombração: Pode agitar os sentidos da vitima, enchendo-a com visões, sons, cheiros e sentimentos que\r\nnão estejam lá. Teste: 1 ponto de sangue mais Manipulação + Lábia Dif. Percepção + Auto Controle da\r\nvítima. 1 sucesso = Uma noite, 2 sucessos= Duas noites, 3 sucessos= Uma semana, 4 sucessos= Um mês, 5\r\nsucessos = Três meses, 6+ sucessos= Um ano.\r\n✺✺✺ Olhos do Caos: Permite descobrir a natureza de uma pessoa e ver mensagens em certos objetos. Teste:\r\nPercepção + Ocultismo Dif. 6 – 9.\r\n✺✺✺✺ Voz da Loucura: Permite levar uma pessoa à fúria ou medo. Teste: Manipulação + Empatia Dif. 7.\r\n✺✺✺✺✺ Insanidade Total: Coloca 5 perturbações em um alvo. Teste: Manipulação + Intimidação Dif. Força\r\nde Vontade da Vitima e 1 ponto de sangue. 1 sucesso= Um turno, 2 sucessos= Uma noite, 3 sucessos= uma\r\nsemana, 4 sucessos= Um mês, 5+ sucessos= um ano.\r\n\r\nDominação: permite o vampiro literalmente violentar o cérebro da vítima.\r\nCarisma e Manipulação são os mais usados nessa disciplina.\r\n\r\n✺ Comando: Permite dar um comando único. Teste: Manipulação + Intimidação Dif. Força de Vontade\r\n✺✺ Mesmerizar: Permite implantar um falso pensamento ou sugestão hipnótica. Teste: Manipulação +\r\nLiderança, Dif. Força de Vontade do alvo. Não pode forçar a pessoa a se prejudicar.\r\n✺✺✺ A Mente Esquecida: Permite apagar a mente da vitima. Teste: Raciocínio + Lábia, Dif. Força de\r\nVontade do alvo. 1 sucesso= remove uma única memória por um dia, 2 sucessos= pode remover mais não\r\nalterar permanentemente a memória, 3 sucessos= pode fazer pequenas mudanças na memória, 4 sucessos=\r\npode alterar ou remover cenas inteiras, 5 sucessos= pode reconstruir períodos inteiros da vida do alvo.\r\n✺✺✺✺ Condicionar: permite dominar a mente de alguém, este processo pode levar semanas. Teste: Carisma +\r\nLiderança, Dif. Força de Vontade permanente do alvo é uma ação estendida.\r\n✺✺✺✺✺ Possessão: Permite controlar por completo a mente e o corpo de alguém, não é necessário falar, apenas\r\ncontato visual. Teste: ação resistida, 1 ponto de Força de vontade + Carisma + Intimidação contra a\r\nForça de Vontade do alvo, Dif. 7 para ambos.\r\n\r\nFortitude: é a super resistência.\r\nA cada ponto de Fortitude corresponde a um ponto de vigor para absorver dano normal, letal e agravado. Os\r\npontos não são sucessos automáticos e devem ser jogados como vigor comum.\r\n\r\nRapidez: super velocidade vampírica.\r\nCada ponto em rapidêz dá uma ação extra no turno\r\n\r\nPotência: super força.\r\nCada ponto é um sucesso automático nos testes de força.\r\n\r\nNecromancia: É a arte de dominar aspectos do mundo dos mortos.\r\n\r\nA trilha do tumulo:\r\n\r\n✺ Introspecção: Permite o necromante ver a ultima coisa vista pelo cadáver. Teste: Percepção + Ocultismo\r\nDif. 8 para humanos e 10 para vampiros.\r\n✺✺ Conjurar espírito: Chama um fantasma (wraith). Precisa saber o nome do fantasma e ter um objeto que\r\ntenha uma conexão com ele (fetter). Teste: Percepção + Ocultismo, Dif. 7.\r\n✺✺✺ Submeter espírito: O vampiro pode comandar o fantasma. Teste: depois de conjurar Manipulação +\r\nOcultismo, Dif. 7 ou força de vontade do fantasma. O fantasma pode gastar Pathos (equivalente a sangue)\r\n✺✺✺✺ Assombração: Prende um fantasma a um local ou a um objeto (faz a área virar um Fetter). Teste:\r\nManipulação + Ocultismo, Dif. A força de vontade do fantasma ou 4 se ele não resistir.\r\n✺✺✺✺✺ Tormenta: Permite causar dano a um Wraith. Teste: Vigor + Empatia, Dif. Força de Vontade do\r\nalvo. Cada sucesso é um nível de vitalidade\r\n\r\nA trilha dos ossos:\r\n✺ Tremens: permite um cadáver fazer um pequeno movimento. Teste: Destreza + Ocultismo, Dif. 6 e 1\r\nponto de sangue\r\n✺✺ Vassoura do Aprendiz: O cadáver se levanta e faz uma função simples. Teste: Raciocínio + Ocultismo,\r\nDif. 7 mais 1 ponto de sangue\r\n✺✺✺ Hordas desajustadas: Levanta vários cadáveres e faz eles atacarem. Teste: 1 ponto de Força de Vontade\r\nmais 1 ponto de sangue por cadáver. Depois Raciocínio + Ocultismo, Dif. 8. Cada sucesso permite\r\nlevantar um cadáver extra.\r\n✺✺✺✺ Roubar Alma: Permite retirar a alma de um mortal. Teste: 1 ponto de Força de Vontade e depois testa\r\na Força de Vontade contra a Força de Vontade da vitima, Dif. 6\r\n✺✺✺✺✺ Possessão Demoníaca: Insere uma alma em um corpo morto recentemente. O cadáver continuara a se\r\ndecompor. Sistema: Não é necessário teste, mas o cadáver deve ter morrido no mínimo há 30 minutos.\r\n\r\nA trilha das cinzas:\r\n\r\n✺ Visão da Mortalha: Permite ver o Underworld (terra dos Wraith’s). Teste: Percepção + Prontidão, Dif. 7\r\n✺✺ Língua sem vida: Permite conversar com fantasmas. Teste: Percepção + Ocultismo, Dif. 6 + 1 ponto de\r\nForça de Vontade.\r\n✺✺✺ Mão Morta: Permite segurar objetos no Underworld. Teste: Raciocínio + Ocultismo, Dif. 7 + 1 ponto\r\nde Sangue por cena.\r\n✺✺✺✺ Ex Nihilo: Permite entrar no Underworld. Teste: precisa desenhar uma porta de sangue, 2 pontos de\r\nForça de Vontade e Sangue mais Vigor + Ocultismo, Dif. 8\r\n✺✺✺✺✺ Maestria sobre a mortalha: Permite diminuir a mortalha. Teste: 2 pontos de Força de Vontade, testa\r\nForça de Vontade, Dif. 9\r\n\r\nOfuscação: Permite o vampiro se esconder dos outros.\r\nAuspícios, quando maior, elimina este poder.\r\n\r\n✺ Manto das Sombras: Permite se esconder nas sombras. Teste: não é necessário.\r\n✺✺ Presença Invisível: Pode caminhar sem ser notado. Teste: não é necessário.\r\n✺✺✺ Mascara das Mil Faces: Permite mudar o rosto e parecer outra pessoa. Teste: Manipulação +\r\nPerformance, Dif. 7. 1 sucesso= pode mudar algumas semelhanças, 2 sucessos= fica um pouco diferente, 3\r\nsucessos= Aparenta como quiser, 4 sucessos= Transformação completa (voz, gestos...), 5 sucessos= Alteração\r\nprofunda (mudar o tamanho, sexo e idade).\r\n✺✺✺✺ Banimento do olho da mente: Permite ficar invisível. Teste: Carisma + Furtividade, Dif. Raciocínio +\r\nProntidão do alvo (o maior se for mais de uma pessoa). Somente após três sucessos consegue ficar\r\ncompletamente invisível, menos que isso aparenta um fantasma.\r\n✺✺✺✺✺ Encobrir o encontro: Permite usar qualquer poder acima em outra pessoa. Teste: igual ao do poder\r\ndesejado.\r\n\r\nTenebrosidade: você controla sombras\r\nQualquer Lasombra pode ver através da escuridão de tenebrosidade.\r\n\r\n✺ Jogo das sombras: Pode alterar qualquer sombra (aumentando, dando outra forma...) e separa-la do dono.\r\nTeste: 1 ponto de sangue.\r\n✺✺ Mortalha da Noite: Permite criar uma nuvem de escuridão, escurecendo completamente a área. Teste:\r\nManipulação + Ocultismo, Dif. 7. A nuvem cobre tudo menos fogo e abafa qualquer som, tornando-o\r\nirreconhecível. Metamorfose 1 não permite enxergar nesta escuridão.\r\n✺✺✺ Braços do Abismo: Cria tentáculos de escuridão. Teste: 1 ponto de Sangue + Manipulação +\r\nOcultismo, Dif. 7. Cada sucesso cria um tentáculo (Força e Destreza igual a do criador) e quatro níveis de\r\nvitalidade. Mais detalhes no livro.\r\n✺✺✺✺ Metamorfose Negra: Chama a escuridão interior do vampiro e ele se torna um híbrido entre matéria e\r\nsombra, com tentáculos no seu torso e abdômen. Teste: 2 pontos de Sangue + Manipulação + Coragem,\r\nDif. 7. Sucesso garante 4 tentáculos. Mais detalhes no livro.\r\n✺✺✺✺✺ Forma Tenebrosa: O vampiro se torna uma sombra, podendo entrar em uma sombra e sair em outra e\r\npode ver na escuridão completa. Teste: 3 pontos de sangue. O vampiro se torna imune a ataque físico.\r\n\r\nPotencia: super força vampírica\r\nCada ponto em potencia garante um sucesso automático extra em qualquer teste de força. Estes sucessos\r\npodem ser usados para Dano e dar saltos maiores que o normal.\r\n\r\nPresença: o poder de se tornar atraente/desejável aos outros\r\n\r\n✺ Fascínio: Faz as pessoas se sentirem interessadas pelo vampiro. Teste: Carisma + performance, Dif. 7. 1\r\nsucesso= Uma pessoa, 2 sucessos= duas pessoas, 3 sucessos= seis pessoas, 4 sucessos= 20 pessoas, 5\r\nsucessos= Qualquer um próximo ao vampiro.\r\n✺✺ Olhar assustador: Faz qualquer um morrer de medo do vampiro. Teste: Carisma + Intimidação, Dif.\r\nRaciocínio + Coragem da vitima.\r\n✺✺✺ Transe: Faz as pessoas adorarem o vampiro. Teste: Aparência + Empatia, dif. Força de Vontade\r\nPermanente do alvo. 1 sucesso= Uma hora, 2 sucesso= um dia, 3 sucessos= uma semana, 4 sucessos= um\r\nmês, 5 sucessos= um ano.\r\n✺✺✺✺ Convocação: Permite chamar qualquer pessoa. Teste: Carisma + Lábia, Dif. 5, 7 se for um estranho.\r\n1 sucesso= O alvo vem lentamente e hesitante, 2 sucessos= alvo é relutante e pode parar por obstáculos, 3\r\nsucessos= O alvo vem com velocidade razoável, 4 sucessos= O alvo vem rapidamente, 5 sucessos= o alvo faz\r\ntudo para chegar ao vampiro.\r\n✺✺✺✺✺ Majestade: Invoca respeito, devoção e medo universal. Teste: 1 ponto de Força de Vontade e o alvo\r\ndeve testar Coragem para contrariar o vampiro.\r\n\r\nMetamorfose: o poder de se transformar em animais da noite (morcego ou lobo). parcialmente ou totalmente.\r\n\r\n✺ Olhos da Besta: Permite ver no escuro. Teste: não é necessário, leva um turno inteiro para mudar.\r\n✺✺ Garras Ferozes: Transforma as unhas em Garras. Teste: 1 ponto de Sangue. Dano Agravado – Força +1\r\n✺✺✺ Unir-se a terra: O vampiro ‘afunda na terra’. Teste: 1 ponto de Sangue.\r\n✺✺✺✺ Forma da besta: O vampiro se transforma em um lobo ou morcego. Teste: 1 ponto de Sangue. Três\r\nturnos para mudar.\r\n✺✺✺✺✺ Forma Misteriosa: O vampiro se transforma em neblina. Teste: 1 ponto de sangue. Três turnos para\r\nmudar.\r\n\r\nQuietus: a disciplina dos assassinos silenciosos\r\n\r\n✺ Silencio da Morte: Cria um circulo de silêncio. Teste: 1 ponto de Sangue\r\n✺✺ Toque do Escorpião: Transforma o sangue em veneno. Teste: 1 ponto de Sangue, Força de Vontade\r\nDif. 6 (cada sucesso retira um ponto de vigor se o sangue atingir o oponente). 1 sucesso= 1 turno, 2 sucessos=\r\n1 hora, 3 sucessos= 1 dia, 4 sucessos=1 mês, 5 sucessos= permanente.\r\n✺✺✺ Chamado de Dagon: Após tocar o alvo o vampiro pode causar dano a distancia. Teste: Uma hora após ter\r\ntocado o alvo o vampiro faz o chamado (ele não precisa estar na mesma área que o alvo). 1 ponto de Força\r\nde Vontade. Testa-se o vigor de um contra o outro, dif. Igual a força de vontade permanente do alvo.\r\n✺✺✺✺ Caricia de Baal: O sangue do vampiro fica extremamente letal (para ser usado com laminas). Teste: 1\r\nponto de sangue por golpe. O dano vira agravado.\r\n✺✺✺✺✺ Gosto da Morte: O vampiro pode cuspir o sangue acido no alvo. Teste: Vigor + Esportes, Dif. 6. Cada\r\nponto de sangue atingido causa dois dados de dano agravado.\r\n\r\nSerpentis: disciplina que evoca aspectos de cobras\r\n\r\n✺ Olhos da Serpente: O vampiro fica com um olhar hipnótico. Teste: Não é necessário\r\n✺✺ Língua do Brasílico: O vampiro pode aumentar sua língua com uma ponta bifurcada. Teste: Não é\r\nnecessário. A língua causa dano agravado.\r\n✺✺✺ A pele grossa: Enrijece a pele do vampiro. Teste: 1 ponto de sangue e Força de Vontade. Dificuldade\r\npara absorver diminui em 5 e permite absorver dano agravado.\r\n✺✺✺✺ A forma da Cobra: O vampiro se transforma em uma cobra negra gigante. Teste: 1 ponto de Sangue.\r\n✺✺✺✺✺ Coração das Trevas: O vampiro remove seu coração. Teste: Não é necessário.\r\n\r\nTaumaturgia: magia vampírica\r\nTodo teste de taumaturgia é feito da seguinte maneira: 1 ponto de sangue mais um teste de\r\nForça de Vontade, Dif. Igual ao nível da trilha +3. Apenas um sucesso é necessário.\r\n\r\nA trilha do Sangue:\r\n\r\n✺ Um gosto por Sangue: experimentando o sangue do oponente pode-se determinar quanto sangue ainda resta,\r\nse ele é um vampiro ou não, como se alimentou, sua geração e (com três sucessos) se ele fez diablere.\r\n✺✺ Fúria do Sangue: Ao tocar o alvo o vampiro força ele a gastar o sangue como o taumaturgista quiser\r\n✺✺✺ Potencia do Sangue: Permite abaixar a geração. Cada sucesso abaixa a geração em um, por uma hora.\r\n✺✺✺✺ Furto de Vitae: Retira o sangue do alvo. O alvo precisa estar visível, se usado três vezes cria um laço de\r\nsangue no taumaturgista.\r\n✺✺✺✺✺ Caldeirão de Sangue: Ao tocar o alvo seu sangue borbulhar (queimando). Um sucesso em morto e ele\r\nesta morto.\r\n\r\nSedução das Chamas:\r\n\r\n✺ Vela: Dificuldade 3 para absorver, um nível de vitalidade agravado por turno.\r\n✺✺ Palma de Fogo: Dificuldade 4 para absorver, um nível de vitalidade agravado por turno.\r\n✺✺✺ Fogueira simples: Dificuldade 5 para absorver, dois níveis de vitalidade agravado por turno.\r\n✺✺✺✺ Fogueira: Dificuldade 7 para absorver, três níveis de vitalidade agravado por turno.\r\n✺✺✺✺✺ Inferno: Dificuldade 9 para absorver, três níveis de vitalidade agravado por turno.\r\n\r\nMovimento da Mente:\r\n\r\n✺ 0,4 Kg\r\n✺✺ 8 Kg\r\n✺✺✺ 80 Kg\r\n✺✺✺✺ 200 Kg\r\n✺✺✺✺✺ 400 Kg\r\n\r\nTrilha da Conjuração:\r\n\r\n✺ Conjurar forma simples: pode criar uma forma simples. Teste: para cada turno extra, deve ser gasto mais\r\num ponto de força de vontade.\r\n✺✺ Permanência: O objeto convocado se torna permanente. Teste: devem ser gastos três pontos de sangue.\r\n✺✺✺ Magia do ferreiro: O vampiro pode conjurar objetos complexos como armas, celulares... Teste: 5 pontos\r\nde sangue e para equipamentos complexos é necessário ter certo conhecimento.\r\n✺✺✺✺ Reverter Conjuração: Permite banir qualquer objeto trazido por essa trilha.\r\n✺✺✺✺✺ Poder sobre a vida: Pode criar criaturas sem vontade própria. Teste: 10 pontos de sangue. as criaturas\r\nse desfazem depois de uma semana.\r\n\r\nMãos da Destruição: Trilha usada somente pelo Sabá.\r\n\r\n✺ Decomposição: O alvo envelhece 10 anos.\r\n✺✺ Madeira áspera: Entorta objetos de madeira\r\n✺✺✺ Toque Acido: Cria uma secreção de acido que corroe metais e destrói madeira.\r\n✺✺✺✺ Atrofiar: Este poder definha ossos do alvo.\r\n✺✺✺✺✺ Transformar em cinzas: Acelera o processo de envelhecimento.\r\n\r\nVicissitude: permite moldar seu corpo ou de outros como massinha de modelar. Usada frequentemente para causar danos deformantes nas vítimas.\r\n\r\n✺ Visão maleável: Pode alterar parâmetros do corpo: feições, voz, tonalidade da pele... Teste: 1 ponto de\r\nSangue para cada parte alterada mais Inteligência + Artesanato Corporal, Dif. 6.\r\n✺✺ Moldar Pele: Permite fazer alterações grotescas. Teste: Destreza + Artesanato Corporal, Dif. 5 a 9\r\ndependendo da transformação.\r\n✺✺✺ Moldar Ossos: Permite manipular os ossos. Teste: Força + Artesanato Corporal, Dif. 5 a 9 dependendo\r\nda transformação. Obs: Cada sucesso causa um nível de vitalidade se o ‘artista’ assim quiser.\r\n✺✺✺✺ Forma Horripilante: O vampiro se transforma num monstro. Teste: 2 pontos de sangue. Todos os\r\natributos aumentam em 3\r\n✺✺✺✺✺ Forma de Sangue: O vampiro se transforma em uma poça de sangue. Teste: Não é necessário.');
INSERT INTO `classe` (`id`, `nome`, `descricao`, `created_at`, `updated_at`, `poderes`) VALUES
(2, 'Lobisomem', 'Lobisomens, ou Garou, como são conhecidos entre eles, são uma sociedade tribal e naturista em sua maioria. Primeiramente eles não se transformam somente na lua cheia. A lua (ou luna como é conhecida na sociedade Garou) desperta sua fúria, e lobos ou pessoas que acabaram de se descobrir Garou, não tem o controle da fúria. E logo na primeira transformação, desembestam em uma matança generalizada. Por isso Lobisomens mais experientes vigiam parentes, para que se caso algum se descubra Garou, haja alguém para o conter, principalmente nas noites de lua cheia, quando a fúria concedida é maior. As diversas tribos lutam para proteger Gaia, o espírito da mãe terra. Esta está agonizando, a beira do fim, e certamente vai levá-los junto. \r\n*    *    *\r\n\r\nTransformação Garou\r\n\r\nPara passar de uma forma a outra, o Garou gasta um turno, sem mais penalidades. Para que a transformação seja instantânea, gaste um ponto de fúria.\r\n*    *    *\r\n\r\nCosmologia Garou (sistema de crenças)\r\n\r\nNo início de tudo só existiam 3 entidades, a Wild que cria coisas aleatórias, que não necessariamente é algo bom. A Weaver que padroniza tudo o que a Wild cria, colocando uma lógica no caos. E a Wirm, o lixeiro da trindade, que destrói o que qualquer uma das irmãs constrói em excesso. E assim foi criado Gaia, junto com toda a criação. E Gaia criou os Garou para proteger ela.\r\nEm algum momento, a Weaver tenta padronizar a Wirm, foi quando começou o desequilíbrio do cosmos. A Wirm enlouqueceu e começou uma jornada para destruir tudo. As três entidades criam espíritos para cumprir seus planos, espíritos que podem ser aliados ou inimigos. Mas se o espírito é da Wirm, com certeza é inimigo. \r\nEm uma parte da história dos Garou, eles começaram uma guerra entre si. Há quem acredite que a Wirm tentou uma investida para destruir Gaia. Esta os puniu com a maldição da prata, única coisa que pode quebrar sua resistência imbatível.\r\n*    *    *\r\n\r\nParentes\r\nLobisomens não são ''transformados pelo ataque de outro lobisomem''. Eles nascem lobisomens, a partir do cruzamento natural entre humanos e Garou, ou lobos e Garou. As crias são consideradas parentes, possuem sangue Garou nas veias. Mas normalmente de 10 parentes, somente 1 se torna efetivamente um Garou. A sociedade Garou os protege sempre, pois são aliados em diversas ocasiões. E acredite, determinados parentes são muito úteis, pois são informantes, espiões, um reforço na luta por Gaia\r\n*    *    *\r\n\r\nFonte de poder\r\n\r\nOs Garou retiram seu poder da Gnose e da fúria. E esse poder é aprendido com espíritos que eles encontram na terra em locais específicos, ou em suas caminhadas pela umbra. \r\nPara conseguir Gnose, basta meditar por um tempo na natureza ou negociar com um espírito. A fúria é mais simples. Somente precisa uivar para Luna (a lua), para ganhar fúria. De acordo com a face da lua mostrada a noite, se ganha uma determinada quantidade de fúria. Mas a lua cheia é quem fornece muito mais fúria do que as outras fases. Por isso um Garou iniciante, que acabou de descobrir ser um lobisomem, sem experiência de como usar a fúria, sai em uma matança desembestada, até que seja contido ou morto. Como Gaia precisa de todos os seus guerreiros, sempre fica um Garou mais experiente vigiando parentes para se caso um se transformar, seja contido sem danos adicionais a si mesmo e aos outros.\r\n*    *    *\r\n\r\nA umbra \r\n\r\nComo dito, um Garou é parte espírito, portanto a relação de todos com o mundo espiritual é forte. Esse mundo é paralelo com o mundo real, com os mesmos objetos. Que são os espíritos de sua contra parte no mundo de fora. Com a diferença que existem muitos espíritos lá, elementais, espíritos de tecnologia, espíritos da natureza, de todos os jeitos. Mas nem todos são espíritos bons. Alguns vão atacar o Garou que se aventurar em entrar em seu reino. O grande problema são os malditos, os espíritos da Wirm. Que por onde passam, destroem e corrompem tudo. Uma das tribos, a mais valorosa e querida por Gaia, os Uivadores Brancos,  foi corrompida pela Wirm, e se tornaram os Dançarinos da espiral negra. Garou corrompidos que também buscam ajudar a Wirm na destruição de Gaia. \r\nPara entrar na umbra  (sim, lobisomens podem entrar no mundo espiritual e viajar por ele), o Garou só precisa testar a Gnose, a dificuldade é a película do lugar. A película é a separação entre os mundos. Ela é mais forte em locais tocados pela Wirm e pela Weaver. Via de regra, quanto mais natural e limpo o lugar, menor a película. Portanto mais fácil entrar na umbra. \r\n*    *    *\r\n\r\nEspíritos totem\r\n\r\nSão espíritos que defendem tribos Garou, cada tribo tem um totem. Eles concedem para a tribo toda características próprias, que o espírito dá de bom grado. Mas tem um preço, pois nada é fácil. Os integrantes da tribo devem seguir dogmas, próprios de cada tótem.\r\n*    *    *\r\n\r\nOs espiritos\r\n\r\nSem dúvidas, os principais habitantes da Umbra são espíritos. Na Umbra, eles refletem os seres vivos existentes no Mundo Físico. Aqueles são divididos em 4 categorias:\r\n\r\nGaffling: Espíritos de pequeno porte na Umbra. Servos de Jafflings ou de Incarna, raramente eles são cientes de sua própria natureza, ou seja, não têm inteligência. Mas, ao adquirirem tal conhecimento, podem se tornar Jagglings.\r\nJaggling: Espíritos de médio porte na Umbra, são inteligentes e servem aos Incarna ou diretamente aos Celestinos. Os Jafflings têm sempre Gafflings sob comando. Quando um Incarna morre ou se corrompe, o Jaggling pode ser "promovido" à posição de Incarna por um Celestino.\r\nIncarna: Espíritos de grande porte na Umbra, são os mais poderosos, abaixo apenas dos Celestinos (às vezes, seus poderes são iguais aos dos Celestinos!). Apenas espíritos nessa posição podem ser Totens (espíritos patronos protetores de matilhas ou tribos). Muitos Incarna gostariam de ser Celestinos, mas isto é algo realmente difícil de acontecer.\r\nCelestinos: Os maiores espíritos da Umbra (a Wyld, Weaver e Wyrm são Celestinos e a própria Gaia é uma Celestina) são essenciais a Tellurian. São o mais próximo que os Garou têm a deuses. Planetas e Astros possuem Celestinos como seus representantes, com seus próprios nomes. Se um Celestino morrer, o mundo físico pode ser monstruosamente afetado. Possuem dezenas de servos espirituais (Incarna, Jagglings e Gafflings).\r\n*    *    *\r\n\r\nLitania - Leis e tabus Garou\r\n\r\nA palavra litania vem do latim litania, que deriva do grego lite e significa oração ou súplica. A seguir, temos a litania em si, e alguns comentários sobre as interpretações gerais de cada uma de suas leis. Em artigos futuros, pretendo abordar, caso a caso, as interpretações gerais de cada Tribo para as leis Garou.\r\n\r\nNão Cruzarás com Outro Garou\r\n\r\nEsta lei é simples: o cruzamento entre dois Garou produz lobisomens Impuros. Lobisomens devem buscar por parceiros entre os humanos ou os lobos, para que gerem filhotes perfeitos. Porém, a quantidade de Impuros que se pode encontrar mostra que esta lei já não é tão… seguida quanto já foi um dia. Ainda que seja motivo de vergonha, dificilmente seus violadores sofrerão pena capital, já que já não existem tantos lobisomens no mundo a ponto de se darem ao luxo de matar os que existem. Ainda assim, gerar um filhote Impuro pé motivo de grande vergonha para os pais, levando alguns Garou, muitas vezes, a atitudes desesperadas, como esconder seu crime e abandonar (ou, em casos extremos, assassinar) os filhotes da vergonha.\r\n\r\nCombaterás a Wyrm Onde Quer Que Ela Esteja e Sempre Que Proliferar\r\n\r\nOutra lei simples e direta – os Garou foram criados para combater a Wyrm e, como guerreiros sagrados de Gaia, devem honrar esta tradição. Entretanto, alguns Garou acabam perdendo mais tempo em politicagem e competições mesquinhas do que cumprindo o seu papel, o que só aumenta a tragédia.\r\n\r\nRespeitarás o Território do Próximo\r\n\r\nUma vez, os territórios eram amplos, e muitos. Extensas regiões selvagens permitiam que os Garou se organizasse longe dos humanos, marcando seus territórios com urina. Qualquer Garou que desejasse entrar em território alheio deveria entoar o Uivo de Apresentação para pedir permissão, recitando seu nome, seita, linhagem, totem e tribo. Entretanto, o mundo mudou. Humanos se espalharam, e os territórios selvagens são cada vez mais escassos. Como nunca antes em sua história, tribos diferentes são obrigadas, muitas vezes, a dividir territórios (o que gera um aumento de tensão). Além disso, em territórios urbanos, uivar seria, no mínimo, inapropriado, sendo mais fácil enviar um e-mail ou dar um telefonema. Alguns Garou mais jovens também costumam esquecer esta regra que consideram “fascista”, o que pode gerar sérios desentendimentos com lobisomens mais territorialistas.\r\n\r\nAceitarás uma Derrota Honrada\r\n\r\nO fato é que os Garou estão em extinção, e, repetindo, não podem se dar ao luxo de perder mais indivíduos. Porém, enquanto seres meio lobos, duelos são inevitáveis. Acontece que duelos até a morte só aumentaria a falta de garras destinadas a combater a Wyrm. Teoricamente, um Garou pode reconhecer a própria derrota mostrando a garganta para seu oponente, e o vencedor é obrigado a aceitar o término da luta sem executar o derrotado. Mas, para alguns lobisomens, a derrota é algo vergonhoso, e preferem perder a própria vida a se render.\r\n\r\nSubmeter-te-ás aos Garou de Posto Mais Elevado\r\n\r\nLobisomens, assim como os lobos, são criaturas hierárquicas. Desde que seja razoável, as ordens de um Garou de posto mais elevado deve ser obedecida. Nada impede, porém, que um Garou mais jovem ignore um velho caquético – exceto que a Fúria do velho caquético pode se inflamar, e de repente, aquele ancião enrugado pode se mostrar um combatente realmente irritado e pronto a dar uma lição – física – no jovem desobediente.\r\n\r\nDarás o Primeiro Quinhão da Matança ao de Posto Mais Elevado\r\n\r\nAqui, o negócio é simples: assim como os lobos mais fortes se alimentam primeiro, os lobisomens de posto mais elevado também o fazem. Esta tradição se estende para os espólios de guerra, então teoricamente, fetiches da presa devem primeiro ser oferecidos aos Garou mais renomados. Na prática, cada seita e alcateia interpreta a Litania do seu próprio modo. Dificilmente o mesmo Garou receberá os fetiches e amuletos mais legais todas às vezes, e caso sempre queira impor esta tradição, deve estar preparado para as consequências por ser tão ganancioso.\r\n\r\nNão Comerá a Carne dos Humanos\r\n\r\nCanibalismo é feito. Garou que consomem carne humana acabam contaminados pela Wyrm – seja pelo canibalismo em si, seja pela dieta moderna dos humanos estar repleta de alimentos de uma das subsidiárias da Pentex. Algumas Tribos interpretam este trecho ao seu próprio modo, mas de modo geral, os Garou não incluem pessoas na própria dieta. Isso seria meio nojento.\r\n\r\nRespeitarás Aqueles Inferiores a Ti – Todos São Filhos de Gaia\r\n\r\nOs Garou são seres altamente sociáveis e, mais do que isto, comunitários. Todos os serem possuem um propósito no Grande Esquema das Coisas. Na prática, alguns indivíduos se enchem de orgulho e não hesitam em desrespeitar – ou matar – seres inferiores (e dependendo do Garou, um cervo ou um humano podem ser igualmente inferiores aos Garou).\r\n\r\nNão Levantarás o Véu\r\n\r\nNão mostre aos de fora o que você realmente é. Esta tradição raramente é violada por um motivo simples: eles são caçados pela Wyrm, e mesmo por outras coisas. Os Garou sabem que a Inquisição ainda está por ai. Os Garou que exibem sua verdadeira natureza sem “limpar a bagunça” recebem a pena capital o mais rapidamente possível, pois são um risco para todos.\r\n\r\nNão Serás Fardo Para Teu Povo\r\n\r\nAntigamente, um Garou ferido além da cura, ou velho demais para se transformar, era morto por seus pares ou se retirava para morrer sozinho. Porém, são novos tempos, e os Garou – ao menos a imensa maioria dos hominídeos – defendem que mesmo os mais velhos têm algo a oferecer para o grupo. Como enviar para a morte (ou assassinar) sua mãe, seu tio, seu avô? A maioria dos Garou velhos demais para que continuem na luta retornam para a sociedade humana ou lupina, ou permanecem entre os Garou, contribuindo como podem, seja defendendo de alguma forma os interesses da Nação, seja ajudando a educar os mais jovens.\r\n\r\nEm Tempos de Paz, o Líder Poderá Ser Desafiado a Qualquer Momento\r\n\r\nAinda que obedeçam os de posto superior, os Garou não são escravos, e caso não exista nenhuma ameaça imediata, desde que tenha o posto adequado para isto, um Garou pode desafiar o outro pela liderança da alcateia. Se vence, assume a liderança, se perde, aceita de bom grado as ordens do líder do grupo. Porém, alguns líderes são fortes (ou habilidosos) o bastante pra ser muito difícil derrotá-lo. Embora, quando se fale de lobisomens, logo se imagine combates sangrentos, esta não precisa ser sempre verdade, são reconhecidos outros desafios, como os de lógica, os de habilidade, charadas, entre outros. Entretanto, alguns Garou inescrupulosos podem tentar alegar que não estão em tempos de paz, pela guerra constante contra a Wyrm.\r\n\r\nNão Desafiarás teu Líder em Tempo de Guerra\r\n\r\nO trabalho em grupo das alcateias é primordial na guerra contra a Wyrm – nenhum Garou, sozinho, seria capaz de vencer as criaturas mais monstruosas da Wyrm. A obediência ao líder, que estabelecerá as táticas de combate, aqui, se torna uma simples questão de sobrevivência. Durante a luta, o líder deve ser obedecido, independente de qualquer coisa, e aqueles que desobedecerem recebem a pena capital assim que a batalha acabar – a menos que a insubordinação se dê em ocasiões especiais. Um Garou que desobedeça a um líder corrompido ou incompetente dificilmente será punido pelos Filodox, ainda que não receba nenhum Renome, afinal, a Litania foi quebrada.\r\n\r\nNão Desempenharás Nenhuma Ação que Cause a Violação de um Caern\r\n\r\nAqui, não tem meio termo – todos os Garou dão a vida pela defesa de um caern. Mesmo que seja acidente, um Garou que leve um inimigo a um caern receberá uma punição severa, ainda que, talvez, não a pena capital.\r\n*    *    *\r\n\r\nOrigens - as raças\r\n\r\nUm Garou pode ter nascido humano e ter descoberto que era Garou na adolescência. \r\nOu pode ter nascido lobo e ter descoberto que podia ser meio humano e até humano completo. \r\n- Hominídeos - são os que nasceram humanos. Frequentemente são vistos com preconceito por outros Garou. \r\n- Lupus - nasceram lobos, possuem muito mais agilidade em florestas, mas a forma humana age semelhante a um capiau um pouco aéreo. Afinal de contas, viveu a vida toda longe da sociedade humana. Poucos sabem ler e escrever.\r\n- Impuros - Gaia só permitiu os Garou cruzarem com lobos ou humanos. Mas quando desobedecem a ordem de Gaia, e um Garou cruza com outro, nascem os impuros. Semelhante ao cruzamento entre irmãos, os filhos costumam vir com alguns defeitos congênitos. Um impuro pode ser até mais forte, mas alguns não tem pelos em qualquer forma, tem um braço maior que o outro ou outra má formação bem visível, que os identificam como frutos de uma transgressão. \r\n*    *    *\r\n\r\nA forma física de um Garou \r\n\r\nPara ajudar em sua tarefa, os Garou contam com cinco formas físicas. \r\n- Lupino - É a forma de lobo (os roedores de ossos se transformam em cachorros vira latas). É a forma mais alinhada a natureza de Gaia, contando com atributos que priorizam a sobrevivência.\r\n- Hispo - a forma lupina bem maior, ainda andam de quatro. Usada para dar um upgrade na força e resistência da forma lupina. \r\n- Crinos - forma de combate. Eles já podem andar em pé, além de ter um adicional grande na força, resistência e rapidez. É a forma que causa o delírio em humanos. Ao verem um Crinos, a visão é tão horrenda que a mente da maioria fantasia coisas, como o ieti ou o et de varginha.\r\n- Glabro - a forma que já começa a se parecer humana. Algo semelhante a um fisiculturista que toma muito hormônio, forma bem forte mas não tanto quanto a Crinos. \r\n- Hominídeo - enfim a forma humana. Tem habilidade manual elevada e muitas vezes pode se socializar com outros humanos. Não tem nada de especial, exceto os poderes aprendidos com os espíritos. \r\n*    *    *\r\n\r\nAlgúrios\r\n\r\nUm Garou tem sua personalidade e vários tipos de poderes, regidos pela lua, e ao nascer sob uma fase da lua, é definido seu algúrio. São cinco algúrios na sociedade Garou:\r\n- Ragabash - os que nascem na lua nova. São os trapaceiros, que questionam as tradições Garou, e responsáveis por plantar a semente da dúvida quando alguma tradição não está de acordo.\r\n- Theurge - já a lua crescente, concede ao Garou a capacidade e vontade de pesquisar as tradições e aprender cada vez mais.\r\n- Philodox - os que nascem na meia lua, são os guardiões das tradições, encarregados de proteger a sociedade Garou.\r\n- Galiard - lua minguante. São os amantes das tradições, que dançam e festejam com seus irmãos.\r\n- Ahruon - Garou que nasce sob a lua cheia são os guerreiros das tradições. São os mais tenazes e violentos para lutar pela proteção das tradições.\r\n*    *    *\r\n\r\nOs poderes \r\n\r\nSão muito variados, e depende de qual espírito ensinou, de qual raça o Garou é, de qual tribo e sob qual algúrio nasceu. A maioria é chamado de dom, mas os mais cobiçados são os rituais, que permitem reunir grupos de Garou para realizar um feito grandioso. \r\nOs espíritos são encontrados no mundo real, principalmente nos caerns. Que são locais sagrados para os lobisomens onde a força de Gaia jorra. São santuários dos mais variados tipos, mas sempre trazem paz. Ou dentro da umbra, mas cuidado quando se aventurar aqui. Nem todos os espíritos são amigos. Os espíritos que servem as três entidade primordiais podem atacar por motivos variados.\r\n*    *    *\r\n\r\nFerimentos\r\n\r\nSe curam quase instantaneamente de quase tudo. Garras de animais, Garou e fogo requerem um tempo maior para efetivamente curar, mas a prata é definitivamente o calcanhar de Aquiles dos lobisomens. Ferimentos com a prata podem se cicatrizar, mas membros cortados não voltam, cicatrizes ficam e por vezes doem em horas impróprias. Em um órgão vital, a prata mata, sem discussão. \r\n*    *    *\r\nA prata\r\n\r\nHouve uma guerra sem sentido em alguma parte da história dos Garous. Ao se virarem uns contra os outros e exterminarem outros defensores de Gaia, esta os puniu, retirando a sua invencibilidade diante da prata. O simples contato com a prata impede que usem a Gnose e os queima ao mesmo tempo. Ferimentos com a prata cicatrizam, mas a cicatriz não some. Nunca há uma recuperação completa. Em jogo, ferimentos causados por prata, tem o mesmo efeito que ferimentos comuns em qualquer um. Um tiro na cabeça, que daria 6 de dano, e que somente incapacitaria o Garou por uns minutos, com a prata o mata instantaneamente. Há um fetiche usado pelos anciões de uma tribo qualquer, chamado de adaga ritual, feita de prata, usada em rituais diversos na sociedade Garou. Fora o fato de que por ser um fetiche ela traz vários poderes, ela deve ser manuseada com cuidado, e somente o melhor dos melhores Garou pode usar uma dessas.\r\n*    *    *\r\n\r\nPosto e Renome\r\n\r\nRenome é o quanto o Garou é reconhecido e respeitado entre os Garou. E consequentemente pelos espíritos, e isso é útil para aprender dons. Já o posto é alçado pelo renome acumulado. Garou de posto mais alto tem acesso a dons mais poderosos, e tem uma responsabilidade maior com seu grupo.\r\n*    *    *\r\n\r\nAs matilhas\r\n\r\nGarou em geral é temido porque andam em matilhas, grupos que se protegem e se ajudam. Ao avistar um Garou, seus inimigos podem se considerar mortos, pois há mais ali perto. As matilhas recebem nomes de acordo com sua missão designada por um Garou de posto mais elevado. Ou simplesmente se reúnem e dizem um para o outro, ''vamos andar juntos, e precisamos de um nome interessante para nossa matilha''.\r\n*    *    *\r\n\r\nFetiches e amuletos\r\n\r\nOs lobisomens podem possuir ítens de poder que podem aumentar consideravelmente sua capacidade para as mais diversas tarefas, tudo para defender Gaia. Sua conexão com os espíritos da umbra, os permite criar fetiches. Podem aprisionar espíritos dentro de objetos, e com persuasão e muita negociação, pedir para o espírito para embuir o objeto com seu poder. Aqui, a criatividade fala mais alto. O Garou deve fazer um ritual de harmonização de fetiche para criar a partir do espírito, E o objeto passa a ser um fetiche. Mas com vontade própria. Se ele estiver em um dia de mal humor, não espere que ele funcione.\r\nTambém há ítens que são amuletos. Eles são preenchidos com poder mágico, e não tem vontade, pois são somente objetos. Bem menos poderosos que os fetiches, também são úteis para defender Gaia.\r\n*    *    *\r\n\r\nOutros seres sobrenaturais \r\n\r\nExistiam outros metamorfos híbridos com outros animais, mas no momento de loucura dos Garou, eles foram extintos na guerra. Os descendentes dos pouquíssimos sobreviventes, odeiam os Garou com toda a força. Torça para não encontrá-los. Essa foi uma das razões da maldição da prata. Eles devem se lembrar sempre que podem ser facilmente mortos por alguém disposto a tal. O próprio toque da prata queima os Garou.\r\n- Vampiros: fedem a Wirm. Ao identificar um, matar ele é uma obrigação. \r\n- Magos - pior ainda. Ao encontrar os caerns, drenam sua força e matam sua vitalidade.', NULL, '2019-06-27 01:02:15', '*    *    *\r\n\r\nDons garou \r\n\r\nOs poderes garou são os dons. Que são aprendidos com espíritos específicos. De acordo com a raça, o augúrio e a tribo. Você vai começar com um de cada, todos de posto 1. Aqui serão apresentados apenas os dons de posto 1, mas saibam que os garou podem ir até posto 5, e eles são incrivelmente poderosos.\r\n\r\nDons de Raça\r\n\r\nEsses Dons são ensinados por uma variedade de espíritos, normalmente aqueles que devem alguma coisa à raça devido a um antigo pacto ou favor prestado. Por exemplo uma antiga lenda conta que um impuro ajudou uma toupei-\r\nra a se esconder de predadores. Em retribuição, a toupeira ensinou ao impuro como entocar-se na terra. Desde então os espíritos das toupeiras ensinam este Dom aos impuros.\r\n*    *    *\r\nHominídeo\r\n\r\nOs Dons dos hominídeos envolvem as perícias e habilidades dos manufatureiros e agentes culturais, mas também dos conquistadores. A postura combativa que os humanos mantêm contra a natureza, dotou-os de um grande controle sobre seu ambiente, mas também de uma vaga inquietação em suas almas  as repercussões de terem rompido seu relacionamento primordial com a natureza. Os humanos\r\ndesconhecem o mundo dos espíritos. Assim, a maioria dos Dons dos hominídeos são ensinados mais por seus ancestrais que por espíritos da Natureza.\r\n\r\nPersuasão (Nível Um). Este Dom permite a um hominídeo que se torne mais persuasivo quando lida com os outros; suas declarações e argumentos são imbuídos de significado e credibilidade. Este Dom é ensinado por um espírito Ancestral.\r\n\r\nSistema: O Garou testa Carisma + Lábia (dificuldade 6). Caso seja bem sucedido, as dificuldades de todos os testes sociais são reduzidas em um durante o restante da cena.\r\n\r\nSimular Odor de Homem (Nível Um). As criaturas das florestas aprenderam que o homem é um arauto da morte. Com este Dom, o Garou aumenta enormemente o odor de homem ao seu redor, levando os animais a se sentirem inquietos e nervosos. O Dom é ensinado por um espírito Ancestral.\r\n\r\nSistema: Todos os animais normais (não incluindo as criaturas sobrenaturais na forma animal) perdem um dado de suas Paradas de Dados quando se encontram a uma distância de seis metros do Garou e, muito possivelmente, fogem.\r\n\r\nO Garou pode usar este Dom à vontade, precisando apenas declarar quando o ativam ou desligam.\r\n\r\n*    *    *\r\nLupino\r\n\r\nDe todos os lobisomens, os lupinos são os mais próximos de seus instintos inatos, e seus Dons refletem isto. Embora seus poderes não lhes dotem de nenhuma aptidão para lidar com a tecnologia moderna, eles mantêm-se em harmonia profunda com as regiões selvagens e com os seres que vivem nelas.\r\n\r\nSentidos Aguçados (Nível Um) — O lobisomem com este Dom está em sintonia com o mundo que o cerca, o que aguça imensamente seus sentidos. Quando o lobisomem se encontra na forma Hominídea ou Glabro, seus sentidos ficam tão aguçados quanto os de um lobo, o que lhe permite ouvir sons além de seu espectro normal de audição, confelhe-lhe uma visão noturna superior e torna seu olfato mais apurado que o de qualquer cachorro. Em Crinos, Hispo e Lupus, os sentidos tornam-se extraordinariamente potentes, permitindo proezas sensoriais que fazem fronteira com precognição. Barulhos repentinos, luzes brilhantes ou aromas irresistíveis pode ser desorientar, no entanto os lupinos estão acostumados a lidarem com isso. Este Dom é ensinado pelos Espíritos dos Lobos.\r\nSistema: O Garou gasta um ponto de Gnose. Os efeitos duram até que o Garou deseje cancelar, caso ainda faça parta da mesma cena no qual foi ativado originalmente, ele não precisa gastar outro ponto de Gnose para ativar o Dom, caso contrário deverá pagar o custo novamente para ser ativado. Formas Hominídeo e Glabro: o grau de dificuldade dos testes de Percepção fica reduzido em dois; teste Percepção + Instinto Primitivo (dificuldade 6) para executar feitos sensoriais impossíveis aos humanos. Formas Crinos, Hispo e Lupina: o grau de dificuldade dos testes de Percepção é reduzido em três; há um bônus de mais um para as Paradas de Dados de Instinto Primitivo.\r\n\r\nSalto de Canguru [ou Lebre] (Nível Um) —  Este Dom foi desenvolvido inicialmente pela tribo perdida dos Bunyip. Ao invocá-lo, o Garou pode saltar distâncias incríveis. A despeito do seu nome, este Dom é ensinado por espíritos de Lebre ou Gato (ultimamente, os espíritos-marsupiais não têm estado muito dispostos a ajudar os Garou...).\r\nSistema: O Garou faz um teste reflexivo de Força + Esportes (dificuldade 7). Se for bem-sucedido, ele pode dobrar sua distância normal de salto por uma cena. A distancia pode ser triplicada com o gasto de um ponto de Força de Vontade.\r\n\r\n*    *    *\r\n\r\nImpuros\r\n\r\nOs impuros são párias da sociedade Garou. Mas ao contrário dos Garou hominídeos e lupinos, eles nascem na sociedade dos lobisomens e são criados nela. Devido aos abusos que sofrem, nutrem em seu íntimo muita raiva e angústia, mas também estão mais intimamente ligados a muitos dos seres que os Garou têm como aliados.\r\n\r\nCriar Elemento (Nível Um). O Garou pode criar uma pequena quantidade de um dos quatro elementos básicos fogo, ar, terra ou água. Desta forma, um Garou pode reabastecer o suprimento de ar numa sala vedada, fazer uma pedra jogar-se contra alguém, fazer fogo sem fósforos ou madeira, ou encher uma banheira sem precisar de uma fonte ou de canos. Não se pode criar metais preciosos (especialmente a prata), bem como gases letais ou ácido. Este Dom é ensinado por um Elemental.\r\n\r\nSistema: O Garou gasta um ponto de Gnose e faz um teste de Gnose (dificuldade 6). A cada sucesso, cria-se trinta centímetros cúbicos do objeto desejado, até um peso máximo de 45 kg. O elemento agora é permanente até que seja gasto (respirado no caso de ar ou queimado no caso de fogo sem combustível para mantê-lo).\r\n\r\nSentir a Wyrm (Nível Um). O Garou pode sentir manifestações da Wyrm nas proximidades. Este Dom desenvolve um sentido místico, não uma imagem visual ou olfativa, embora os Garou costumem dizer Este lugar fede a Wyrm. Este poder requer concentração ativa. É um Dom ensinado por qualquer espírito servo de Gaia.\r\n\r\nSistema: O Garou testa Percepção + Ocultismo. A dificuldade para este Dom se baseia na concentração e na força da influência da Wyrm (sentir um único fomor numa sala teria uma dificuldade 6). Os vampiros podem ser sentidos mediante o uso desde Dom, mas apenas aqueles com níveis de humanidade inferiores a 7.\r\n\r\n*    *    *\r\n\r\nDons de Augúrio\r\n\r\nRagabash\r\n\r\nOs Ragabash são conhecidos entre os Garou como grandes trapaceiros. Seus Dons envolvem furtividade e roubo, pois é durante a escuridão de uma noite sem lua que atividades como essas funcionam melhor. Luna concedeu aos Luas Novas a habilidade de quebrar as regras.\r\n\r\nEmbasamento da Própria Forma (Nível Um). A forma do Garou torna-se borrada e tremeluzente, o que lhe permite passar pelos outros sem ser notado. Porém, depois que o Garou tiver sido visto, o Dom será anulado até que a pessoa que o viu seja distraída de novo. Este Dom é ensinado por um espírito dos camaleões.\r\n\r\nSistema: O Garou testa Manipulação + Furtividade ( dificuldade 8 ). Cada sucesso aumenta em +1 as dificuldades de todos os testes de Percepção realizados para detectá-lo.\r\n\r\nAbrir Objetos (Nível Um). Munido deste Dom, o Garou pode abrir praticamente qualquer tipo de dispositivo fechado ou trancado. É ensinado por um espírito-guaxinim.\r\n\r\nSistema: O Garou testa Gnose (dificuldade igual ao nível local da Membrana).\r\n\r\n\r\nSimular Cheiro de Água Corrente (Nível Um). O Garou pode disfarçar completamente o seu cheiro, tornando a si mesmo virtualmente impossível de ser rastreado. Este Dom é ensinado por um espírito-raposa.\r\n\r\nSistemas: As dificuldades de todos os testes para rastrear o Garou são aumentadas em dois. Este Dom se torna uma capacidade intrínseca para o Garou que o aprende. Ele não precisa gastar pontos para fazer testes.\r\n\r\nTheurge\r\n\r\nSendo os videntes dos Garou, os Theurges possuem um conhecimento profundo sobre a Umbra e seus habitantes.\r\nEste Dom possibilita ao Theurge controlar espíritos ou mesmo devastar a inteligência dos outros. A Lua Crescente é dotada de grande poder, que pode ser usado para o bem ou para o mal.\r\n\r\nToque da Mãe (Nível Um). O Garou é capaz de sarar os ferimentos dos outros, sejam agravados ou não, simplesmente colocando as mãos sobre a área afligida. O Garou não pode curar a si mesmo com este Dom. O Dom é ensinado por um espírito-unicórnio.\r\n\r\nSistema: O Garou gasta um ponto de Gnose e testa Inteligência + Medicina (dificuldade igual à Fúria do indivíduo ferido, ou 6 para os não-Garou). Cada sucesso cura um Nível de Vitalidade. Até mesmo as cicatrizes de batalha podem ser curadas desta forma, mas isto precisa ser feito na mesma cena que a cicatriz foi obtida e requer que se gaste um ponto de Gnose. Não há limite para o número de vezes que o Dom pode ser usado numa pessoa, mas cada uso requer um ponto de Gnose.\r\n\r\n\r\nSentir a Wyrm (Nível Um). O Garou pode sentir manifestações da Wyrm nas proximidades. Este Dom desenvolve um sentido místico, não uma imagem visual ou olfativa, embora os Garou costumem dizer Este lugar fede a Wyrm. Este poder requer concentração ativa. É um Dom ensinado por qualquer espírito servo de Gaia.\r\n\r\nSistema: O Garou testa Percepção + Ocultismo. A dificuldade para este Dom se baseia na concentração e na força da influência da Wyrm (sentir um único fomor numa sala teria uma dificuldade 6). Os vampiros podem ser sentidos mediante o uso desde Dom, mas apenas aqueles com níveis de humanidade inferiores a 7.\r\n\r\n\r\nComunicação com Espíritos (Nível Um). Este Dom possibilita aos Garou que se comuniquem com os espíritos que encontrarem. Desta forma o Garou é capaz de se dirigir aos espíritos, queiram eles ou não. É claro que (normalmente) nada impede o espírito de ir embora. O Dom pode ser ensinado por qualquer espírito.\r\n\r\nSistema: Depois de aprendido, este Dom possibilita aos Garou que compreendam os espíritos intuitivamente. Mas alguns espíritos (como os Malditos), nem sempre podem ser entendidos.\r\n\r\nFilodox\r\n\r\nOs Filodox são os juízes da sociedade Garou, os caciques cujas decisões determinam o futuro de uma seita. Seus Dons lhes permitem discernir a verdade da ficção, comandar outros e invocar a sabedoria racial. Os Meia Luas percorrem eternamente uma trilha entre os extremos de Fúria e Liderança.\r\n\r\nResistência a Dor (Nível Um). Através da força de vontade, o Garou consegue ignorar a dor de seus sofrimentos e continuar agindo normalmente. Este Dom é ensinado por um espírito-urso.\r\n\r\nSistema: Gastando um ponto de Força de Vontade, o Garou pode ignorar quaisquer penalidades devidas a ferimentos até o final da cena.\r\n\r\n\r\nFaro para a Forma Verdadeira (Nível Um). Este Dom permite aos Garou determinar o que um objeto ou indivíduo realmente é. Esta informação é conduzida como uma sensação olfativa . é realmente um cheiro da natureza do alvo. Este Dom pode ser ensinado por qualquer servo de Gaia.\r\n\r\nSistema: O Garou pode dizer automaticamente quando alguém é um lobisomem, e pode detectar vampiros e fadas com um teste de Percepção + Instinto Primitivo ( dificuldade 8 ). Até mesmo os magos podem ser detectados (dificuldade 9).\r\n\r\n\r\nVerdade de Gaia (Nível Um). Sendo juízes da Litania, os Filodox possuem a habilidade de sentir se o que os outros dizem é verdade ou mentira. Este Dom é ensinado por um espírito-falcão.\r\n\r\nSistema: O Garou faz um teste de Inteligência + Empatia ( a dificuldade é igual à Manipulação + Lábia do objetivo).\r\nEste Dom revela apenas se o indivíduo-alvo está falando a verdade ou mentiras.\r\n\r\nGaliard\r\n\r\nOs Galliard são os bardos e cantores dos Garou. Seus Dons permitem que teçam os sonhos dos outros ou levem um antagonista à Fúria. Enquanto os outros Garou podem enganar os olhos ou vencer no corpo a corpo, os Galliard são capazes de tocar as emoções dos outros como se manipulassem as cordas de uma harpa.\r\n\r\nComunicação com Animais (Nível Um). O Garou pode falar com os animais, desde pombos no parque até castores e peixes. O Dom não altera as reações básicas dos animais, um tigre faminto ainda está faminto e pode atacar. Este Dom é ensinado por um espírito da Natureza.\r\n\r\nSistema: O Garou testa Vigor + Empatia com Animais (dificuldade 6). Este teste precisa ser feito para cada tipo de animal e para cada encontro.\r\n\r\n\r\nChamado da Wyld (Nível Um). O Garou pode convocar os outros através de seu uivo. Os Garou que se encontram muito além do alcance da audição sentirão o Chamado e poderão atendê-lo. Este Dom pode aumentar o efeito de qualquer dos uivos normais dos Garou.\r\nEste uivo pode também ser emitido para convocar um Garou específico para uma assembléia. Por fim, o Chamado da Wyld costuma ser usado no começo de disputas e outros eventos, para revigorar o Garou. Este Dom é ensinado por um espírito-lobo.\r\n\r\nSistema: O Garou testa Vigor + Empatia (dificuldade 6). O número de sucessos determina a que distância o chamado pode ser ouvido e o quanto ele comove aqueles que o escutam. Os efeitos são determinados pelo Narrador, mas devem ser ligados ao tipo de uivo e ao intento do Garou.\r\nAlguns exemplos: cada dois sucessos conferem aos personagens envolvidos numa disputa dados extras em suas Paradas de Dados; os agentes da Wyrm são distraídos pelo chamado e suas dificuldades são aumentadas temporariamente; todos os Garou na área não hesitam em responder ao Chamado de Socorro do Garou.\r\n\r\n\r\nComunicação Telepática (Nível Um). Mediante a criação de sonhos enquanto em vigília, o Garou pode colocar quaisquer personagens escolhidos em comunicação silenciosa. O Dom é ensinado por um Quimérico.\r\n\r\nSistema: O Garou gasta um ponto de Força de Vontade por ser senciente escolhido e, caso o ser resista, faça um teste de Manipulação + Expressão (a dificuldade é a Força de Vontade da vítima). Todos os indivíduos incluídos no sonho podem interagir normalmente através da Comunicação Telepática, embora não possam infligir danos através dela. Seus corpos verdadeiros ainda são capazes de agir, embora todas as Paradas de Dados sejam reduzidas em dois pontos. A Comunicação Telepática é interrompida quando todos os participantes concordarem com seu término, ou no turno no qual o Galliard fracassar num teste contra um membro relutante. Os seres afetados precisam estar no campo de visão do Garou.\r\n\r\nAhroun\r\n\r\nO Ahroun é o guerreiro de Gaia, sua besta da guerra contra a Wyrm. Os Dons dos Ahroun oferecem ao Garou o poder de combate necessário para enfrentar as criaturas mais corruptas na Tellurian.\r\n\r\nInspiração (Nível Um). Os outros lobisomens costumam eleger os Ahroun como líderes nas situações de combate.\r\nUma das razões para isso é o Dom da Inspiração. O Garou com este Dom concede aos seus irmãos determinação e fúria bem direcionadas. Este Dom é ensinado por um espírito-lobo ou por um espírito-leão.\r\n\r\nSistema: O Garou gasta um ponto de Gnose. Os colegas recebem automaticamente um sucesso em qualquer teste de Força de Vontade feito durante a cena. Atenção: este Dom não afeta o seu possuidor.\r\n\r\n\r\nGarras Afiadas (Nível Um). O Garou pode tornar suas garras afiadas como navalhas. Este Dom é ensinado por um espírito-Gato ou por um espírito-Lobo.\r\n\r\nSistema: O Garou gasta um ponto de Fúria e leva um turno para afiar suas garras numa superfície dura, como uma pedra. A partir daí os ataques com garras usam um dado adicional de danos durante o restante da cena.\r\n\r\n\r\nO Toque da Queda (Nível Um). Este Dom possibilita ao Garou derrubar seu oponente com um toque. Este Dom é ensinado por qualquer espírito aéreo.\r\n\r\nSistema: O Garou testa Destreza + Intimidação (a dificuldade é o Vigor + Esportes do oponente). Um único sucesso manda a vítima para o chão.\r\n\r\n*    *    *\r\nDons de Tribo\r\n\r\nHá espíritos que protegem tribos em especial, e ensina dons a integrantes dessas tribos, independente de raça ou augúrio.\r\n\r\nFúrias negras\r\n\r\nOs Dons dos Fúrias Negras refletem a sua proteção dos lugares da Wyld no mundo, e instilam uma dor de mulher nos inimigos.\r\n\r\n\r\n- Sentidos Aguçados (Nível Um). O Garou pode aumentar sua percepção sensorial durante um período de tempo curto. Quando estiver na forma Hominídea ou Glabro, seus sentidos se tornarão tão aguçados quanto os de um lobo, enquanto em suas formas lupinas, seus sentidos serão dotados de uma potência sobrenatural. Este Dom é ensinado pelos Espíritos dos Lobos.\r\n\r\nSistema: O Garou gasta um ponto de Gnose. Os efeitos duram uma cena. Formas Hominídea e Glabro: o grau de dificuldade dos testes de Percepção fica reduzido em dois; teste Percepção + Impulso Primitivo (dificuldade 6) para executar feitos sensoriais impossíveis aos humanos. Formas Crinos, Hispo e Lupina: o grau de dificuldade dos testes de Percepção é reduzido em três; há um bônus de +1 para as Paradas de Dados de Impulso Primitivo.\r\n\r\n\r\n- Sentir a Wyrm (Nível Um). O Garou pode sentir manifestações da Wyrm nas proximidades. Este Dom desenvolve um sentido místico, não uma imagem visual ou olfativa, embora os Garou costumem dizer Este lugar fede a Wyrm. Este poder requer concentração ativa. É um Dom ensinado por qualquer espírito servo de Gaia.\r\n\r\nSistema: O Garou testa Percepção + Ocultismo. A dificuldade para este Dom se baseia na concentração e na força da influência da Wyrm (sentir um único fomor numa sala teria uma dificuldade 6). Os vampiros podem ser sentidos mediante o uso desde Dom, mas apenas aqueles com níveis de humanidade inferiores a 7.\r\n\r\nRoedores de ossos\r\n\r\nApesar de tudo o mais que se pode dizer sobre eles, os Roedores de Ossos são sobreviventes sem igual. Seus Dons – as bênçãos de Rato e de sua progênie – funcionam principalmente com vistas a sobreviver aos perigos do mundo moderno.\r\n\r\nCulinária (Nível Um)\r\n\r\nO Garou precisa de uma panela pequena (uma lata de leite já serve) e de uma concha ou colher para empregar esse Dom. Ele coloca qualquer coisa que encontrar dentro da panela – lixo, latas de cerveja, jornais velhos etc.- , acrescenta água (pode ser cuspe) e mexe. O resultado é um mingau pastoso, de sabor suave que, não obstante, é comestível e sacia a fome.\r\n\r\nSistema: O jogador faz um teste de Raciocínio + Sobrevivência. A dificuldade depende dos ingredientes “cozinhados”. A dificuldade de se preparar material não comestível, porém inócuo, é igual a 6, mas, no caso de substâncias tóxicas, a dificuldade é igual a 10.\r\n\r\nSimular Cheiro de Mel Doce (Nível Um)  O Garou atrai espíritos do Ar para um alvo escolhido, fazendo com que o alvo exalee um aroma maravilhosamente doce e\r\nse torne levemente pegajoso ao toque. Naturalmente, todos os tipos de insetos aparecerão rapidamente, e o alvo ficará coberto e cercado por enxames de mosquitos, abelhas, moscas, etc. O enxame prejudicará a visão do alvo, o incomodará com ferroadas, mordidas e ruídos enlouquecedores, o impedirá de funcionar socialmente, além de outras inconveniências. O efeito exato que o enxame exercerá sobre o jogo deve ficar a critério do Narrador. O Dom é ensinado por certos espíritos-Plantas, mas os espíritos-Insetos também podem ensiná-lo. Sistema: O Garou gasta um ponto de Gnose e testa Raciocínio + Lábia (dificuldade 6). Os efeitos duram por\r\numa hora a cada sucesso, e o cheiro não poderá ser lavado durante esse período.\r\n\r\nFilhos de Gaia\r\n\r\nOs Filhos de Gaia estão entre os Garou mais respeitados. Seus Dons lhes permitem acalmar os outros e a fortalecer a si mesmos. Os Filhos não são pacifistas devotos e muitos de seus Dons provam que sua abordagem da guerra não é inferior a de nenhuma tribo\r\n\r\n- Toque da Mãe (Nível Um). O Garou é capaz de sarar os ferimentos dos outros, sejam agravados ou não, simplesmente colocando as mãos sobre a área afligida. O Garou não pode curar a si mesmo com este Dom. O Dom é ensinado por um espírito-unicórnio.\r\n\r\nSistema: O Garou gasta um ponto de Gnose e testa Inteligência + Medicina (dificuldade igual à Fúria do indivíduo ferido, ou 6 para os não-Garou). Cada sucesso cura um Nível de Vitalidade. Até mesmo as cicatrizes de batalha podem ser curadas desta forma, mas isto precisa ser feito na mesma cena que a cicatriz foi obtida e requer que se gaste um ponto de Gnose. Não há limite para o número de vezes que o Dom pode ser usado numa pessoa, mas cada uso requer um ponto de Gnose.\r\n\r\n\r\n- Resistência a Dor (Nível Um). Através da força de vontade, o Garou consegue ignorar a dor de seus sofrimentos e continuar agindo normalmente. Este Dom é ensinado por um espírito-urso.\r\n\r\nSistema: Gastando um ponto de Força de Vontade, o Garou pode ignorar quaisquer penalidades devidas a ferimentos até o final da cena.\r\n\r\nFianna\r\n\r\nOs Dons dos ardilosos Fianna lhes permitem pregar peças nos outros ou convocar antigos aliados de sua herança céltica. Alguns dos Dons são ensinados por fadas, que ocasionalmente podem ser encontradas nas proximidades dos caern dos Fianna.\r\n\r\nFianna Empty Fianna\r\n\r\nMensagem por Fúria-de-Gaia em Seg Set 13, 2010 9:44 pm\r\nDons - Fianna\r\n\r\nOs Dons dos ardilosos Fianna lhes permitem pregar peças nos outros ou convocar antigos aliados de sua herança céltica. Alguns dos Dons são ensinados por fadas, que ocasionalmente podem ser encontradas nas proximidades dos caern dos Fianna.\r\n\r\n- Luz das Fadas (Nível Um). Este Dom é capaz de conjurar uma pequena esfera de luz saltitante. A esfera ilumina apenas um raio de 45 cm, mas isso geralmente é suficiente para fornecer a luz necessária ou levar os adversários a uma emboscada. Um espírito dos brejos ensina este Dom\r\n\r\nSistema: O Garou testa Raciocínio + Enigmas (dificuldade 6). A luz pode aparecer em qualquer ponto do campo visual do Garou. Pode se mover, saltitando por aí a três metros por turno, se assim for ordenada. A luz dura um turno para cada sucesso, mas o jogador pode usar um ponto de Gnose para fazê-la durar a cena toda.\r\n\r\n\r\n\r\n- Persuasão (Nível Um). Este Dom permite que um Hominídeo tornar-se mais persuasivo quando se lida com outras pessoas, o que confere a suas declarações e argumentos muito mais significado e sua credibilidade ainda maior. Um espírito ancestral ensina esse dom.\r\n\r\nSistema: O jogador testa Carisma + Lábia. Se bem sucedido, o Narrador reduz as dificuldades de todos os seus testes Sociais pelo restante da cena. Além disso, os testes sociais podem ter impacto maior. O lobisomem pode ganhar argumentos contra oponentes intransigentes, ou causar um psicopata desumano sentisse compaixão (pelo menos por um tempo).\r\n\r\n\r\n\r\n- Resistência a Toxinas (Nível Um). Os fianna há tempos se dedicam à preparação de várias bebidas, muitas das quais são destiladas a partir de substâncias letais. Eles logo aprenderam a se adaptar... Só para poderem continuar a festejar, naturalmente. Um espírito-planta ensina este dom.\r\n\r\nSistema: O jogador faz um teste de Vigor + Sobrevivência. O sucesso anula os efeitos de venenos mais convencionais e acrescenta 3 dados ao Vigor do Garou quando se trata de resistir a venenos incrementados pela Wyrm. Os efeitos duram uma cena.\r\n\r\nCria de Fenris\r\n\r\nBrutos e agressivos, os Cria travam uma batalha feroz com a Wyrm. Seus Dons lhes concedem imensos poderes e habilidades nas batalhas.\r\n\r\n- Garras Afiadas (Nível Um). Raspando as garras numa pedra ou em uma superfície dura, o Ahroun deixa-as afiadas como navalhas. Um espírito-gato ou espírito-urso ensina este Dom.\r\n\r\nSistema: O jogador usa um ponto de Fúria, e o Ahroun tem de gastar um turno inteiro afiando as garras. Durante o resto da cena, seus ataques com garras provocam um dado adicional de dano.\r\n\r\n- Resistência a Dor (Nível Um). Com um pouco de força de vontade, o Garou é capaz de ignorar a dor de seus ferimentos e continuar a agir normalmente. Um espírito-urso ensina este Dom.\r\n\r\nSistema: O jogador usa um ponto de Força de Vontade; seu personagem conseguirá ignorar todas as penalidades devidas a ferimentos durante o resto da cena.\r\n\r\nAndarilhos do asfalto\r\n\r\nMuitos Dons dos Andarilhos do Asfalto envolvem espíritos da Weaver de um tipo ou de outro. Esta associação não lhes daria nenhum respeito aos olhos da maioria das tribos mas, de fato, proporciona-lhes grandes versatilidade e uma harmonia sem paralelo com a tecnologia moderna.\r\n\r\n- Controle de Máquinas Simples (Nível Um). O Garou é capaz de comandar os espiritos das maquinas mais simples,fazendo com que alavancas se movam, portas se destranquem, roldanas girem e assim por diante. Qualquer espirito tecnologico pode ensinar este Dom.\r\n\r\nSistema: O Garou gasta um ponto de Força de Vontade e testa Manipulação + Ofícios (dificuldade 7). O controle do Garou dura ate final da cena.\r\n\r\nPersuasão (Nível Um)  Como o Dom Hominídeo de Nível Um.\r\n\r\nGarras vermelhas\r\n\r\nOs temíveis Garras odeiam os seres humanos, o Grifo concede a eles Dons mais inclinados para o lado destrutivo e violento da natureza. Para retribuir aos seres humanos, na mesma moeda, o tratamento que eles dispensam a Gaia.\r\n\r\nComunicação com Animais (Nível Um)  Como o Dom de Nível Um dos Galliard.\r\nSimular Odor de Água Corrente (Nível Um)  Como o Dom de Nível Um dos Ragabash.\r\n\r\nSenhores das sombras\r\n\r\nFraquezas Fatais (Nível Um)  O Garou pode discernir a fraqueza de um alvo, possibilitando-lhe uma vantagem em combate. O Dom é ensinado por um corvo.\r\n\r\nSistema: O Garou se concentra durante um turno e testa Percepção + Empatia (a dificuldade é o Raciocínio do alvo + Lábia). Os sucessos permitem ao Garou que use um dado de danos extra contra o alvo. Cada sucesso lhe permite discernir vulnerabilidades adicionais; cinco sucessos garantem o conhecimento de todas as fraquezas do alvo.\r\n\r\n· Aura de Confiança (Nível Um)  O Garou irradia uma aura de força e comando, impedindo quaisquer tentativas de ler a sua aura ou de detectar suas fraquezas  ele\r\n\r\nnão revela nenhum tipo de fraqueza. Um espírito ancestral ensina este Dom.\r\n\r\nSistema: O Garou testa Carisma + Lábia (dificuldade 7). Isto precisa ser testado para cada encontro ou situação nova na qual o Garou se encontre.\r\n\r\nPeregrinos silenciosos\r\n\r\nOs enigmáticos Silenciosos são capazes de viajar pelo Reino e pela Umbra. Seus poderes lhes possibilitam viajar mais rápido que outros e alcançar lugares inacessíveis aos outros Garou.\r\n\r\n- Sentir a Wyrm (Nível Um). O Garou pode sentir manifestações da Wyrm nas proximidades. Este Dom desenvolve um sentido místico, não uma imagem visual ou olfativa, embora os Garou costumem dizer Este lugar fede a Wyrm. Este poder requer concentração ativa. É um Dom ensinado por qualquer espírito servo de Gaia.\r\n\r\nSistema: O Garou testa Percepção + Ocultismo. A dificuldade para este Dom se baseia na concentração e na força da influência da Wyrm (sentir um único fomor numa sala teria uma dificuldade 6). Os vampiros podem ser sentidos mediante o uso desde Dom, mas apenas aqueles com níveis de humanidade inferiores a 7.\r\n\r\n\r\n- Velocidade do Pensamento (Nível Um). O Garou pode duplicar sua velocidade por terra. Este é um Dom ensinado por um espírito-papa-léguas ou por um espírito-chita.\r\n\r\nSistema: O Garou gasta um ponto de Gnose. O efeito dura uma cena.\r\n\r\nPresas de prata\r\n\r\nSendo os líderes dos Garou, os Presas de Prata comandam a força da vontade de Gaia.\r\n\r\n- Chama Tremulante (Nível Um). O Garou pode acender uma chama prateada em torno de seu corpo. Este Dom é ensinado por uma Luna.\r\n\r\nSistema: O Garou precisa gastar um ponto de Força de Vontade. O efeito dura o tempo da cena. A luz ilumina um raio de trinta metros, e o ofuscamento que ela provoca acrescenta um ponto às dificuldades de todos os ataques corpo a corpo contra o Garou. As dificuldades de todos os ataques de armas projéteis, contudo, são reduzidas em um.\r\n\r\n- Sentir a Wyrm (Nível Um). O Garou pode sentir manifestações da Wyrm nas proximidades. Este Dom desenvolve um sentido místico, não uma imagem visual ou olfativa, embora os Garou costumem dizer Este lugar fede a Wyrm. Este poder requer concentração ativa. É um Dom ensinado por qualquer espírito servo de Gaia.\r\n\r\nSistema: O Garou testa Percepção + Ocultismo. A dificuldade para este Dom se baseia na concentração e na força da influência da Wyrm (sentir um único fomor numa sala teria uma dificuldade 6). Os vampiros podem ser sentidos mediante o uso desde Dom, mas apenas aqueles com níveis de humanidade inferiores a 7.\r\n\r\nPortadores da luz interior\r\n\r\nA sabedoria e as artes marciais dos Portadores da Luz refletem-se em seus Dons. Solitários e contemplativos, eles podem resolver enigmas, e sua habilidade de combate desarmado pode fazer frente até mesmo aos Ahroun mais durões.\r\n\r\n- Equilíbrio (Nível Um). O Garou é capaz de caminhar através de qualquer saliência e sobre qualquer corda, a despeito de quão fina ou traiçoeira seja essa trilha. É um Dom ensinado por estranhos espíritos do vento, conhecidos apenas pelos Portadores da Luz.\r\n\r\nSistema: Não se exige nenhum teste ou dispêndio de ponto. As dificuldades de escalada são reduzidas em três pontos.\r\n\r\n\r\n- Sentir a Wyrm (Nível Um). O Garou pode sentir manifestações da Wyrm nas proximidades. Este Dom desenvolve um sentido místico, não uma imagem visual ou olfativa, embora os Garou costumem dizer Este lugar fede a Wyrm. Este poder requer concentração ativa. É um Dom ensinado por qualquer espírito servo de Gaia.\r\n\r\nSistema: O Garou testa Percepção + Ocultismo. A dificuldade para este Dom se baseia na concentração e na força da influência da Wyrm (sentir um único fomor numa sala teria uma dificuldade 6). Os vampiros podem ser sentidos mediante o uso desde Dom, mas apenas aqueles com níveis de humanidade inferiores a 7.\r\n\r\nUktena\r\n\r\nOs ardilosos e astutos Uktena são os mestres da magia e dos poderes animais.\r\n\r\n- Sentir Magia (Nível Um). O Garou é capaz de sentir rituais e Dons dos Garou, a Taumaturgia dos Tremere e as Esferas dos magos, bem como fetiches e outros fenômenos místicos. Este Dom sente a presença de magia e sua força geral. Ele revela apenas informações básicas sobre a magia em si (se é a Esfera de um mago ou a Taumaturgia de um vampiro, mas não o tipo específico de Esfera ou Taumaturgia). O Dom é ensinado por um espírito servo dos Uktena.\r\n\r\nSistema: O Garou testa Percepção + Enigmas. A dificuldade é baseada na força e na sutileza da magia. O raio é de três metros a cada sucesso obtido.\r\n\r\n\r\n- Mortalha (Nível Um). O Garou pode criar uma escuridão densa. Este Dom é ensinado por um espírito da Noite.\r\n\r\nSistema: O Garou gasta um ponto de Gnose e testa Gnose contra uma dificuldade variável (3 para crepúsculo, 6 para ambiente interno, 9 para sol do meio-dia). Para cada sucesso, o Garou cobre com uma escuridão densa uma área de 3 metros quadrados à sua escolha.\r\n\r\nWendigo\r\n\r\nOs cruéis Wendigo lutam para salvar as terras que ainda lhes restam das mãos dos humanos e dos Garou. Seus Dons são poderes oriundos do pólo norte e de seu totem.\r\n\r\n- Invocar a Brisa (Nível Um). O Garou pode invocar uma brisa gelada de seis quilômetros por hora e direcioná-la à sua vontade. A brisa dispersará nuvens de vapor ou de insetos, e enregelará qualquer um que não esteja preparado para o frio. Este Dom é ensinado por um espírito que serve aos Wendigo.\r\n\r\nSistema: O Garou pode invocar esta brisa simplesmente assobiando. Qualquer personagem que dependa inteiramente da audição terá um ponto a menos em todos os testes de Percepção relacionados a esse sentido.\r\n\r\n\r\n- Camuflagem (Nível Um). Quando está nas regiões selvagens, o Garou é extremamente difícil de ser visto, pois é capaz de se imiscuir às árvores. Um espírito-cervo ensina este Dom.\r\n\r\nSistema: As dificuldades de todos os testes para localizar o Garou são aumentadas em três, desde que o Garou se encontre numa região selvagem.\r\n\r\nOs lobisomens também podem fazer rituais nos grupos que defendem Gaia, sejam em matilhas, caerns, em reuniões... podem ser usados para festas, ritos de passagem, louvores a Gaia ou punição a algum transgressor. Há vários exemplos na internet. Para usar um ritual, cite a fonte.');
INSERT INTO `classe` (`id`, `nome`, `descricao`, `created_at`, `updated_at`, `poderes`) VALUES
(3, 'Mago', 'Magos conhecem como a realidade funciona, e conhecem modos de distorcer ela. Essa capacidade é dependente do paradigma local e geral. Quanto menos crentes em forças sobrenaturais, mais forte o paradigma e mais sólida a realidade, portanto mais difícil para o mago de distorcer qualquer coisa. A essa distorção, os magos chamam de mágika. Diferente de mágica, que são truques de circo. Quem conhece a mágika é chamado de desperto, pois acordou para a real natureza de tudo. Os outros são os adormecidos. O desperto tem um Avatar. Esse Avatar é o canal através do qual o mago impõe sua vontade sobre a realidade. Quanto maior o conhecimento que esse avatar dá para o mago, mais fácil moldar aspectos da realidade. Ele age como um ''amigo imaginário'', um espírito conselheiro, enfim, uma entidade que somente o mago vê. Ele aconselha e ensina o mago nos caminhos da magia. \r\n\r\n*    *    *\r\n\r\nArete \r\n\r\nÉ o nível de conhecimento de magia do desperto. Via de regra, magos iniciantes jamais tem Arete maior que 4, e é ele que é testado ao fazer magia. Uma esfera jamais pode superar o nível de Arete.\r\n\r\n*    *    *\r\n\r\nA guerra \r\n\r\nOs magos travam uma guerra com outros grupos de magos, em múltiplas frentes. Para dobrar o paradigma a seu favor (é mais fácil levitar onde pessoas acham normal alguém levitar, como em alguns lugares) do que em um lugar onde ninguém vai crer que isso aconteceu. Os magos creem que ao dominar o paradigma do mundo, fica mais simples se tornar arquimagos, uma lenda que corre na sociedade arcana de que quem alcança esse estatus se liberta da realidade e se torna um ser divino.\r\n*    *    *\r\n\r\nOs grupos de magos \r\n\r\n- Tecnocracia - os tecnocratas são os que estão mais próximos de alcançar a ascenção (se libertar da realidade). Eles criam tecnologia arcana, e é mais fácil dobrar paradigmas assim. Comunicação usando telepatia é muito vulgar e fora do paradigma geral. Eles criaram o celular, a televisão, a internet e tudo que pode fazer o mesmo, e até a sociedade adormecida usa. Mas não se engane. Muito de sua tecnologia ainda é fantástica, e igualmente perigosa.\r\n- Desauridos - felizmente foram banidos por sua periculosidade. Acreditam que a ascenção só pode ser alcançada se libertando da realidade agora, então suas ações são caóticas. E com isso alcançaram maior poder entre os magos. \r\n- nefandi - não acreditam na ascenção, e sim na queda. Para se libertar da realidade, devem negá-la, destruindo e corrompendo. São os inimigos de todos os outros magos, e devem ser temidos sempre.\r\n- As tradições - são os magos disponíveis para seleção e jogo. São os magos tradicionais que estão no fogo cruzado na guerra. Devem tentar sobreviver pois são caçados pela tecnocracia, pelos nefandi e pelos desauridos. Não há muito o que fazer a não ser se aperfeiçoar todos os dias. São 9 tradições, e foi dividido entre elas a tarefa de estudar a realidade. Cada uma estuda uma esfera de conhecimento, e seus integrantes frequentemente se tornam especialistas nessa esfera. \r\n*    *    *\r\n\r\nO foco\r\n\r\nOs magos usam focos para usar sua magia. Pode ser um objeto simples e bobinho, como uma xícara, que cheia de água torna possível usar correspondência e usar ela como uma tela espionando alguém, uma varinha de madeira para jogar uma maldição de entropia, ou uma moeda para jogar no chão e transformar o chão em uma trilha de gelo escorregadio. Qualquer coisa pode ser usada como foco. As tradições possuem focos que são característicos, como varinhas e palavras em latim para a Ordem de Hermes, computadores e calculadoras para os Adeptos da Virtualidade, ou um back de maconha ou uns dois copos de vodka para o Culto do Extase. Mas os focos não precisam ser padrão para todos. Você vai usar o foco com o qual se sentir mais a vontade para usar magia. Dica: a Irmandade de Akasha tem vários membros que gritam o nome da magia em alto e bom tom antes de usar. PUNHO TITÂNICO!!! BOLA DE FOGO ARDENTE!!! CORTE DA NAVALHA!!!\r\n\r\nO paradoxo e a quintessência \r\n\r\nQuando o paradigma é forte, um feito que o quebra é considerado vulgar e gera um retorno chamado paradoxo. Se manifesta de várias maneiras, prendendo o mago a um efeito que visa corrigir a falha. Exemplo, um mago ergue o cajado e evoca chuva. O choque de retorno poderia ser onde ele está não chove ao redor por alguns quilômetros,por uns anos. Ou o seu cabelo voa contra o vento por um tempo. Definitivamente o paradoxo deve ser temido.\r\nA quintessência é a base de tudo, só atingida por mágika. Ela é como uma massinha de modelar, se transformando no que o mago quer. É largamente usada para facilitar feitos, bem como alimentar magias poderosas. Ela é intimamente ligada ao paradoxo, pois pode ser usada para negá-lo. A extração da quintessência exige horas de concentração em lugares ricos. Muitas vezes um santuário. \r\n*    *    *\r\n\r\nMagia vulgar e coincidente - o paradoxo\r\n\r\nSe há uma força que os magos temem e muito, é o paradoxo. Quando se faz uma magia que fere a realidade, o paradoxo cobra o preço e o personagem ganha pontos de paradoxo. Para isso, a mágika deve ser sutil, de modo que se confunda com coisas reais. Sair bramindo um sabre de luz atrás de um inimigo, e atirando bolas de fogo é algo vulgar (magia que fere a realidade), enquanto jogar uma pedra e ''acidentalmente'' ela entrar na garganta do cara e matar ele por asfixia já é coincidente (magia não vulgar).\r\nMágika coincidente não dá paradoxo, enquanto mágika vulgar, dá muito paradoxo. Falhas críticas dão paradoxo na magia coincidente e pioram drasticamente o paradoxo das magias vulgares.\r\n*    *    *\r\n\r\nEspíritos do paradoxo\r\n\r\nQuando o paradoxo ganho é muito alto, simplesmente o efeito do paradoxo (choque de retorno) não é o suficiente para corrigir a realidade. É manifestado um espírito do paradoxo, que vai punir o mago de acordo com o poder que ele usou. Aí, é a imaginação do mestre que manda. Exemplo, um efeito muito vulgar de tempo, deu uma falha crítica. Aparece um espírito aparentando um idoso com um óculos com ponteiros de relógio, e diz - você transgrediu a realidade. Precisa aprender - e o coloca em um universo de tempo paralisado. A punição dura menos de um segundo, mas o mago passou uns dois anos em uma solitária com estátuas por todos os lados.\r\n*    *    *\r\n\r\nQuintessência vs paradoxo\r\n\r\nA quintessência é a base de tudo. Átomos são formados por quintessência, seres vivos são formados por quintessência, pensamentos, o tempo... tudo. Somente com o conhecimento de Primórdio se pode extrair essa quintessência, ferindo o padrão (que vai acontecer semelhante a uma chama azul de fogão, que causa um dano/destruição maior que o fogo comum).\r\nVocê acumula quintessência somente meditando em um nodo (local de poder, lobisomens vivem em nodos, apesar de não ser uma boa idéia meditar aí). A quintessência é concorrente com o paradoxo, que sobrepuja a quintessência nos pontos. A soma dos dois não pode ser maior que 20. Você possui um avatar (que é sua consciência desperta), e é nele que você acumula quintessência. Você pode acumular no máximo 5 pontos por causa do avatar .\r\nAo realizar uma magia vulgar, você acumula paradoxo. 1 ponto se não tiver testemunhas, 1 ponto + 1 ponto por testemunha se tiver. Falhas críticas em testes de magia não é algo bom. Além dos pontos normais, você acumula 5 pontos de uma vez (1 ponto normal, 1 ponto por testemunha e 5 de graça). Como dito, ao alcançar 5 pontos, algo ruim vai acontecer relacionado ao poder usado. Já falhas críticas com magia coincidente somente geram 3 pontos de paradoxo.\r\nConhecimento de primórdio permite cancelar paradoxo, mas é necessário ser um mestre. O paradoxo acumula independente de quintessência, mas quintessência é barrada pelo paradoxo. Com Primórdio você pode acumular quintessência além do avatar.\r\n\r\nVocê pode gastar até 5 pontos de quintessência para sucessos automáticos em testes de magia. Por isso é tão cobiçada pelos magos.\r\n\r\n*    *    *\r\n\r\nEfeitos\r\n\r\nO mago pode fazer magia de várias maneiras:\r\n- Efeito imediato: faz um teste e realiza o efeito.\r\n- Efeito/ação prolongada: a quantidade de sucessos necessários para o efeito é grande. Para isso se realiza um ritual, e se acumula alguns sucessos por turno durante vários turnos. Pode-se reunir vários magos para agilizar o feito, cada um acumulando um pouco de sucessos. Uma falha crítica, anula o ritual e será necessário começar de novo. Além do paradoxo. Por exemplo, lendas dizem há uma verbena que descobriu o segredo da imortalidade, e desde a idade média quando suas irmãs foram queimadas, busca extinguir a humanidade. E desde então, até hoje, está tentando apagar o sol. Eventualmente pode conseguir, mas até lá não vai existir mais humanidade. Ou vai, não sabemos.\r\n- Anti-mágika: para fortalecer a realidade de um lugar, e tornar a magia alí mais difícil. A maneira mais fácil é gastando quintessência para fortalecer a realidade. 1 de quintessência adiciona1 de dificuldade para testes de magia. \r\n- Contra mágika: alguém acabou de laçar um feitiço em você e você vai resistir e contra atacar.\r\n- Efeitos conjugados: o mago pode combinar uma esfera com outras para efeitos mais complexos. Exemplo, transformar alguém em ouro, requer vida + matéria. Aqui vale a máxima nada se perde e nada se cria, tudo se transforma. Criar algo do ''nada'' exige quintessência, portanto, conhecimento de Primórdio. \r\n\r\nLançando Mágikas\r\n3) Você foi bem sucedido?\r\na) Jogue o Arete do seu personagem contra a dificuldade apropriada (dificuldade mínima de 3):\r\nCoincidente: Dificuldade = Esfera mais alta + 3\r\nVulgar, sem Testemunhas: Dificuldade = Esfera mais alta + 4\r\nVulgar, com Testemunhas: Dificuldade = Esfera mais alta + 5\r\nb) Adicione ou subtraia quaisquer modificadores (máximo +/- 3)\r\n• Confira o número de sucessos\r\nc) Gaste Quintessência ou Força de Vontade se quiser\r\nd) Você precisa obter mais sucessos para realizar a sua tarefa?\r\n*    *    *\r\n \r\nOutros seres sobrenaturais \r\n\r\n- Vampiros - seu sangue é uma fonte rica em quintessência. Mas ir lá extrair ela é perigoso. \r\n- Lobisomens - vivem em locais sagrados, onde jorra quintessência. Boa sorte para quem quiser ir lá. Normalmente 2 minutos é a expectativa de vida de quem vai lá extrair esse poder.', NULL, '2019-06-25 12:26:24', '*    *    *\r\n\r\nOs poderes dos magos são as esferas. Há nove ao todo e elas englobam todo o conhecimento para lidar com diferentes aspectos da realidade. \r\nO nível do mago depende o quanto ele aprendeu de uma esfera:\r\n✺ Iniciante\r\n✺✺ Aprendiz\r\n✺✺✺ Iniciado\r\n✺✺✺✺ Avançado\r\n✺✺✺✺✺Mestre\r\nSão elas:\r\n\r\n\r\nCorrespondência\r\n\r\nÉ a Esfera que lida com relações espaciais, dando ao mago poder sobre o espaço e para cobrir distâncias. A mágika de Correspondência permite poderes como teleporte, visão de áreas distantes e, em níveis mais altos, o mago pode também se co-localizar (estar em vários lugares ao mesmo tempo) ou mesmo acumular diferentes espaços dentro uns dos outros.\r\n\r\nCaso o mago queira realizar feitiços a distância, precisará combinar outras Esferas com a Esfera da Correspondência.\r\n\r\nCadeira da Correspondência: Adeptos da Virtualidade\r\n\r\nExemplos de Especialização: Invocação, Investigação, Proteção, Teleporte\r\nNíveis de Esfera\r\n\r\n✺ Percepções Espaciais Imediatas: o mago adquire uma profunda compreensão sobre a relação entre objeto e espaço. Podem perceber a distância entre objetos, sentir a presença de objetos nas proximidades e mesmo detectar deformações, instabilidades e fendas espaciais.\r\n\r\n✺✺ Sentir o Espaço/Tocar o Espaço: o mago pode estender seus sentidos até locais distantes ou escondidos. Pode-se reforçar a trama do espaço para evitar espionagens ou aberturas de outras fendas (o que conta como contramágika).\r\n\r\n✺✺✺ Perfurar o Espaço/Lacrar Passagens/Percepção Multilocal: o mago agora tem o poder de fazer pequenas aberturas na trama pelas quais é capaz de atravessar. É também capaz de selar tais fendas ou impedir que se abram. Neste nível, é possível sentir as múltiplas localizações ao mesmo tempo, percebendo múltiplas cenas sobrepostas.\r\n\r\n✺✺✺✺ Dilacerar o Espaço/Multilocalizar a Si: o mago se torna capaz de criar passagens maiores para transportar outros seres e objetos ou mesmo forças maiores. É também capaz de criar uma passagem permanente. O mago pode se manifestar fisicamente em diversos locais ao mesmo tempo.\r\n\r\n✺✺✺✺✺ Alterar Localidades/Multilocalização: um Mestre de Correspondência pode distorcer o espaço, afetar distâncias e tamanhos ao seu redor, esticando-os ou os encolhendo a seu bel-prazer. Pode também empilhar localizações umas sobre as outras (coisas que só Desauridos costumam fazer).\r\n\r\n*    *    *\r\n\r\nEntropia\r\n\r\nÉ a Esfera que dá ao mago o acesso e o poder sobre o reino da ordem, do caos, do destino e da fortuna. Suas teorias são muitas, de teorias do caos a raciocínios de lógica e controle exatos, eliminando o caos do sistema. A fortuna é mutável, um dia se pode ganhar na loteria, no outro, sofrer um acidente de carro fatal. Tudo tende a um dia acabar e ser substituído. Um mago com a Esfera da Entropia pode sentir onde os elementos da sorte e da probabilidade influem e como manipulá-los em algum grau. Em níveis menores, máquinas podem falhar, planos podem ocorrer sem falhas e a vida pode ser ganha na mesa de poker. Mestres de Entropia podem criar memes auto propagáveis ou rogar pragas que amaldiçoem gerações inteiras de uma mesma família.\r\n\r\nCadeira da Entropia: Eutanatos\r\n\r\nExemplos de Especialização: Destino, Sorte, Ordem, Caos\r\nNíveis de Esfera\r\n\r\n✺ Sentir Destino & Sorte: o mago começa a sentir o fluxo do destino e a discernir o que é significativo e o que não é, o verdadeiro do falso. Pode-se escolher o cavalo vencedor, sentir se uma fechadura possui algum defeito. As informações não são perfeitas, apenas a percepção que é avançada.\r\n\r\n✺✺ Controlar Probabilidade: o mago pode controlar as probabilidades ao estudar onde ela se concentra. Quanto maior a probabilidade de que algo aconteça, mais difícil é alterá-la.\r\n\r\n✺✺✺ Afetar Padrões Previsíveis: o mago pode, agora, afetar os objetos inanimados e as forças tangíveis que são mais sujeitos à inexorabilidade entrópica. Pode-se determinar esta deterioração e, quando mais complexo e intrincado o objeto ou o mecanismo, mais rápida e fácil é a sua degradação. Molas se soltam, fios se partem, arquivos se corrompem. Também é possível realizar o processo inversos, diminuindo a marcha rumo à decadência.\r\n\r\n✺✺✺✺ Afetar Vida: agora o mago pode afetar as formas de vida, aprendendo a forma como os seres se degradam e os fatores que afetam o curso de vida. É possível abençoar ou amaldiçoar. Afeta-se as probabilidades de que algo aconteça aos seres vivos, não os seus padrões em si.\r\n\r\n✺✺✺✺✺ Afetar Pensamento: o mago, agora Mestre da Entropia, compreende a mudança das ideias ao longo do tempo, de padrões lógicos e claros a processos criativos caóticos e saltos intuitivos. Tudo o que é organizado e possui um padrão está sujeito às leis da ordem e do caos, e o mago é capaz de calculá-los e os controlar, podendo confundir uma pessoa ou destruir a sua visão de mundo, ou apresentar-lhe um conjunto de ideias perfeitamente lógicos, ou, ainda, provocar os tais saltos intuitivos através da compreensão da influência da Roda da Fortuna (ou dos complexos cálculos matemáticos aplicados a teorias neuropsiquiátricas) no processo do pensamento humano.\r\n\r\n*    *    *\r\n\r\nEspírito\r\n\r\nNenhuma outra Esfera marca de modo tão contundente as diferenças metafísicas que levam à Guerra quanto esta. Espírito é a Esfera da realidade que lida com espíritos, fantasmas, Antigos, Bestas Místicas e outras entidades metafísicas. Ainda que as duas Tradições mais recentes do Conselho não costumem ser muito proeficientes nesta Esfera, relatos sobre xamãs lidando com espíritos da tecnologia, das ciências e da informação são conhecidos. Magos com conhecimentos da Esfera do Espírito são capazes de despertar o espírito adormecido em objetos e lugares, falar com os mortos, convocar os espíritos ancestrais de um povo ou uma época, controlar espíritos dos elementos e dos animais, comungar com o próprio Avatar e o dos outros, criar fetiches, viajar até o mundo dos espíritos ou o espaço sideral.\r\n\r\nCadeira do Espírito: Oradores dos Sonhos\r\n\r\nExemplos de Especializações: Lidar com espíritos, viagem umbral, possessões, viagens espaciais\r\nNíveis de Esfera\r\n\r\n✺ Visão Espiritual/Sentido Espiritual: o mago iniciante em Espírito pode sentir a Umbra Rasa ao seu redor. É capaz de ver auras, fantasmas e espíritos, especialmente aqueles que estejam mais harmonizados com sua Ressonância ou que estejam dentro de seu paradigma. A mago também pode “ler” a força da Película local, testá-la em busca de pontos fracos e Baixios, além de distinguir itens como fetiches ou com espírito desperto.\r\n\r\n✺✺ Tocar Espíritos/Manipular a Película: o mago se torna hábil em tocar brevemente os espíritos e objetos que possa ver do outro lado da Película – a Penumbra. Pode projetar sua voz para o outro lado da Película ou mesmo diminuí-la, tornando mais fácil a passagem para o Outro Lado. Com muito esforço, a visão do mago pode ser estendida para a Umbra Profunda.\r\n\r\n✺✺✺ Perfurar a Película/Despertar e Acalmar Espíritos: o mago agora é capaz de fazer um buraco na Película, através do qual consegue entrar na Umbra, ainda que seus pertences sejam mais difíceis de serem levados (o que requer sucessos adicionais). Ainda, o mago se torna capaz de despertar espíritos ou acalmar espíritos despertos, como os que estão em fetiches.\r\n\r\n✺✺✺✺ Dilacerar a Película/Selar Aberturas/Prender Espíritos: o mago pode efetivamente rasgar o tecido da Película, permitindo que mortais adentrem a Umbra e espíritos entrem na Terra. Pode também selar a abertura que ele ou outros tenham feito, reforçando o tecido para que ele se torne mais difícil de ser rompido. O mago pode obrigar os espíritos a se manifestar e pode prendê-los para que obedeçam. Pode também forçar umbróides a entrar em objetos, para que se tornem fetiches. Se torna capaz, ainda, de canalizar os poderes de um espírito para si mesmo, tendo acesso a seus Encantos, falando com sua voz e realizando suas proezas físicas (ainda que, enquanto estiver servindo de “cavalo”, o mago não possa realizar mágikas. Por outro lado, enquanto estiver possuído, suas façanhas não geram Paradoxo).\r\n\r\n✺✺✺✺✺ Criar Efêmera/Jornadas Exteriores: o Mestre de Espírito pode manipular efêmera, a substância de que o mundo espiritual é feito. Além de manipular, o Mestre pode consertá-la ou destruí-la. O mago pode curar o Poder dos espíritos, ajudar a criar Reinos do Horizonte ou Domínios Umbráticos. Mais temido do que isso, o Mestre de Espírito pode atacar o Avatar alheio (como, por exemplo, através da Gilgul). Além de tudo, o mago agora pode se libertar do Horizonte e explorar os Reinos Distantes, percorrendo a Umbra Profunda, sobrevivendo ao Eterespaço e indo ao infinito e além.\r\n\r\n*    *    *\r\n\r\nForças\r\n\r\nDe danças que invocam as chuvas a bolas de fogo, certos Artífices da Vontade aprendem como controlar os elementos e o clima. Ainda que os Adormecidos tenham compreendido muito sobre os diversos elementos e forças da natureza nos últimos séculos, permanecem ignorantes sobre muitas coisas que os cercam. Calor e frio, estiagem e tempestades, luz e escuridão, do acender de uma vela a fusão nuclear, a Esfera de Forças engloba a energia e forças naturais, bem como sua versão negativas. Qualquer coisa no mundo material que possa ser visto ou sentido, mas que não seja material pode ser controlado: eletricidade, gravidade, magnetismo, fricção, calor, movimento, fogo, etc, bem como seus opostos ou sua ausência. Em níveis mais baixos o mago pode controlar forças em pequena escala, mudando sua direção ou convertendo uma energia em outra. Em níveis maiores, tempestades e explosões podem ser conjuradas.\r\n\r\nCadeira das Forças: Ordem de Hermes\r\n\r\nExemplos de Especializações: Elementos (qualquer um ou todos), Tecnologia, Física, Clima\r\nNíveis de Esfera\r\n\r\n✺ Perceber Forças: o mago percebe os movimentos da energia. Ele pode diferenciar todos os tipos de fluxo de energia, podendo ver qualquer coisa, desde luz infravermelha até raios x ou ondas de gravidade, ou seja seus sentidos estão além das manifestações mundanas como luz, som ou calor.\r\n\r\n✺✺ Controlar Forças Menores: todas as forças são positivas são essencialmente a mesma, assim como as forças negativas. Nesse nível, o mago pode exercer um certo grau de controle sobre sua vazão e fluxo. A quantidade de energia que pode ser controlada neste nível ainda é limitada. Quanto maior a força controlada e o grau de controle, mais sucessos são exigidos.\r\n\r\n✺✺✺ Transmutar Forças Menores: agora o mago pode transformar uma força em outra, trocar positivo pelo negativo (ou o inverso), criar ou destruir forças. O mago pode alterar a Quintessência no ambiente para uma das forças básicas (em efeito conjugado com Primórdio 2) ou transformar energia básica em puro éter. A quantidade de forças que podem ser criadas ainda são limitadas.\r\n\r\n✺✺✺✺ Controlar Forças Maiores: este nível funciona como Forças 2, mas o grau de poder que o mago controla é muito maior. Pode-se focalizar a energia do sol num canhão de laser, ou encobrir estádios de futebol inteiros com ilusões prismáticas. Os efeitos podem ser extremamente vulgares, portanto, há restrições.\r\n\r\n✺✺✺✺✺ Transmutar Forças Maiores: este nível funciona como Forças 3, mas o grau de poder ao qual o mago tem acesso é quase ilimitado. Tal conhecimento pode ser usado, por exemplo, para criar explosões nucleares. Felizmente, a realidade consensual, o bom senso e contramágikas limitam os usos irresponsáveis desta habilidade. Grandes efeitos podem ser alcançados com o número (grande) de sucessos apropriados.\r\n\r\n*    *    *\r\n\r\nMatéria\r\n\r\nEsta Esfera trata de matéria sem vida e que não seja energia, via de regra, matéria inanimada. Pedra, madeira morta, água, ouro e outros metais e corpos daqueles que um dia já viveram são só o começo. Enquanto magos iniciantes nesta Esfera lidam com análise pequenos objetos para, depois, passar a transmutar substâncias básicas em outras, os Mestres da Matéria criam materiais e objetos maravilhosos, desde Oricalco e Hermium (e mesmo Adamantium – tem gosto pra tudo), até autômatos que desafiam o Consenso. Não há limite para a criatividade humana, e muitos dos Artífices da Vontade são capazes de criações fantásticas baseadas nas mais diversas teorias místicas ou científicas, frutos da inventividade humana.\r\n\r\nCadeira da Matéria: Filhos do Éter\r\n\r\nExemplos de Especializações: Transmutação, Moldar, Invocação, Padrões Complexos\r\nNíveis de Esfera\r\n\r\n✺ Percepção de Matéria: o mago começa reconhecendo os padrões da matéria, incluindo estruturas fundamentais que dão aos objetos suas formas e propriedades físicas. Com essas percepções, ele pode detectar coisas escondidas dos seus sentidos normais. Pode sentir a composição da matéria e suas propriedades, além de estruturas escondidas dentro de estruturas.\r\n\r\n✺✺ Transmutação Básica: o mago pode transmutar uma substância em outra sem alterar sua forma, temperatura ou estado básico. Quanto mais radical for a transformação, mais sucessos o feitiço exigirá. Quanto mais rara e complexa for a substância, mais difícil será a sua criação a partir de puro éter.\r\n\r\n✺✺✺ Alterar Formas: agora, o Desperto pode alterar seletivamente os diferentes aspectos do padrão de um objeto. Neste nível, se torna capaz de mudar sua forma da maneira que desejar. Pode-se comprimir para aumentar a densidade, expandir e aumentar o volume ou mudar temporariamente seu estado.\r\n\r\n✺✺✺✺ Transmutação Complexa: o mago se torna apto a operar mudanças radicais sobre os materiais físicos e criar itens complexos envolvendo várias substâncias comuns ou duas raras. Qualquer tipo de material normal pode ser transformado em outro, apesar de quanto mais radicais forem as transformações, maior será a dificuldade para o feito.\r\n\r\n✺✺✺✺✺ Alterar Propriedades: o Mestre da Matéria pode criar substâncias novas que não existem na natureza ao pegar materiais existentes e alterar suas propriedades físicas, como pontos de ebulição e fusão, densidade, ductilidade, transparência, viscosidade, etc. Os poucos Tradicionalistas que lidam como Primium (e quase todos dos Filhos do Éter) são Mestres nesta Esfera. Lidar com elementos radioativos também exige este nível. Criações muito vulgares requerem muitos sucessos.\r\n\r\n*    *    *\r\n\r\nMente\r\n\r\nDesde tempos imemoriais, a humanidade exerceu seu poder criativo sobre a realidade, e os magos aprenderam a investigar suas mentes em busca do poder. Por consequencia, aprenderam a compreender a mente humana, tanto a própria quanto a de outras pessoas, através da Esfera da Mente. É importante notar que ela não engloba os processos fisiológicos do cérebro, a parte biológica, mas a transcende, em busca da essência pura da ideia, do logos, do pensamento inteligente. Como consequência, feitos como percepções muito além do mundano, comunicação telepática e mesmo o controle fazem parte desta Esfera da realidade. Ainda que não cause grande dano direto (a Esfera da Mente sempre causa um a menos de dano quando usada para dano direto), não se deve desprezar o poder de compreender, alterar e controlar os processos mentais. Mestres da Mente podem até mesmo criar mentes totalmente novas ou remodelar completamente as já existentes, alterando toda a psique.\r\n\r\nCadeira da Mente: Irmandade de Akasha\r\n\r\nExemplos de Especializações: Comunicação, Ilusão, Capacitação de Si Mesmo, Viagem Astral\r\nNíveis de Esfera\r\n\r\n✺ Sentir Pensamentos e Emoções/Capacitar a Si Mesmo: o mago pode sentir os pensamentos e emoções no ar ao seu redor. Não pode ler os pensamentos, mas pode sentir sua força e intensidade. Pode ler as impressões psíquicas deixadas em objetos, o que inclui a Ressonância ligada ao sorvo ou a aura de uma fonte quintessencial, nodo ou conjuntura. Pode, ainda, esconder a própria aura e proteger seus pensamentos de uma observação casual.\r\n\r\n✺✺ Ler Pensamentos Superficiais/Impulso Mental: o mago pode ler memórias presas a objetos e rastrear pensamentos superficiais em mentes desprotegidas. Quanto maior for o conteúdo mental, maior será seu volume e mais fácil será a sua leitura. O mago também pode deixar impressões psíquicas em objetos ou locais, criando Ressonância, além de enviar pensamentos e emoções até que estes encontrem o seu alvo. Pensamentos complexos não podem ser enviados, apenas mensagens e impressões muito curtas e simples de serem compreendidas, como um impulso mental, palavra ou imagem. Dois magos que tenham este mesmo nível de Esfera podem abrir seus canais mentais um para o outro e formar uma espécie de conexão mental primitiva, lendo a mente consciente um do outro. Pode-se criar proteções mentais, disfarçar a cor da aula ou, até certo grau, controlar os próprios sonhos.\r\n\r\n✺✺✺ Elo Mental/Andar Entre Sonhos: neste nível, torna-se possível estabelecer um elo entre a própria mente com a mente de outras pessoas, tornando o mago apto a usar comunicações ou invasões telepáticas. O mago pode, dormindo, se conectar a mente de outras pessoas que também estejam dormindo e começar a explorar os Reinos Oníricos, ou, ainda, entrar em outra consciência adormecida.\r\n\r\n✺✺✺✺ Controlar Mentes Conscientes/Projeção Astral: o mago torna-se capacitado para controlar a mente de outra pessoa ou assumir o controle de seu corpo, transferindo a própria consciência. Ele ainda pode cobrir a aura alheia com outras cores e padrões diferentes, além de ser capaz de deixar os sonhos para trás e realizar excursões dentro dos alcances astrais, em viagens breves e perigosas.\r\n\r\n✺✺✺✺✺ Controlar o Subconsciente/Desprender/Crias Psiques: um Mestre da Mente pode controlar totalmente a própria mente e a de outros, mortais, imortais ou espíritos. Torna-se capaz não apenas de invadir a mente consciente, mas a subconsciente, reescrevendo a personalidade básica, e neste caso, as únicas partes que permanecem intocadas são o Avatar e as lembranças de vidas passadas (apesar de “novas” lembranças do tipo poderem ser forjadas). O mago pode separar uma psique do seu corpo, trocar mentes entre alvos ou convergir, copiar ou transferir conhecimentos e lembranças de uma pessoa de uma mente para outra, alem de elevar a inteligência e o raciocínio de um alvo até o nível de gênio (ou seja, até o quinto ponto dos Atributos Inteligência e Raciocínio), e começar os primeiros passos para elevar a própria mente além da genialidade. Viagens astrais completas se tornam possíveis, e o corpo pode ser deixado para trás por horas ou mesmo por dias. Pode-se criar pensamentos verdadeiramente conscientes, uma mente pensante e racional, onde antes não havia nenhuma.\r\n\r\n*    *    *\r\n\r\nPrimórdio\r\n\r\nA Esfera do Primórdio trata do estudo da Quintessência, que nada mais é do que a Quinta Essência da magia hermética ocidental, acima de todos os quatro elementos. É também conhecida como éter, a primeira essência, a força odílica, natureza fundamental da Trama, dentre muitos outros nomes. É o elemento de onde tudo se origina, e para onde retornará, e que reside no intrínseco de cada coisa que existe, material ou imaterial. É a própria matéria bruta que origina tudo, inclusive a Mágica Verdadeira dos Despertos. É ela que sustenta cada padrão de vida, cada forma, e sua forma mais acessível é a Quintessência bruta que pode ser armazenada no Avatar de um mago ou cristalizada em forma de Sorvo, este materual bruto que é a estrutura de toda a metafísica da realidade. Esta Esfera permite que a Quintessência seja percebida em seu fluxo pela realidade, canalizada e/ou fundida em qualquer forma nos níveis mais altos da Esfera, o que é necessário se o mago pretendia um dia ser capaz de conjurar algo do nada (o que é diferente de transmutar uma coisa em outra). Usos comuns de Primórdio incluem sentidos de percepção mágika em geral, contramágikas e realizar feitiços permanentes.\r\n\r\nCadeira do Primórdio: Coro Celestial\r\n\r\nExemplos de Especializações: Canalização, Percepções, Preencher Padrões, Drenar Padrões\r\nNíveis de Esfera\r\n\r\n✺ Sentidos Etéreos: um mago iniciante na Esfera do Primórdio pode ver a energia básica quintessencial, sentindo onde ela se acumula ou onde surge, as linhas campestres e as trilhas do dragão que atravessam o globo, o sorvo e o fluxo quintessencial que marca a conjuntura. Pode também detectar criaturas e objetos carregados de energia mágika. O mago pode alinhar-se de modo que a Quintessência flua para dentro de seu padrão, carregando seu Avatar. Sem o primeiro nível de Primórdio, não é possível armazenar Quintessência livre dentro do seu padrão, exceto aquela que é recebida através do próprio Avatar.\r\n\r\n✺✺ Tecer Forças Odílicas/Abastecer Padrões: agora, o Artífice da Vontade pode controlar os padrões das forças do Primórdio e da energia quintessencial. Pode fazer com que pequenas correntes fluam de modo diferente ou alterá-las para criar itens compostos somente por Quintessência e visíveis apenas para aqueles com sentidos mágikos. Estes itens existem nos planos etéreos espirituais e astrais ao mesmo tempo.\r\n\r\n✺✺✺ Canalizar Quintessência: neste nível, um Desperto compreende como extrair Quintessência livre do padrão em que estão armazenadas. O mago se torna um canal de Quintessência, canalizando-a para outros padrões ou para si próprio.\r\n\r\n✺✺✺✺ Extrair Energia Fundamental: agora o mago se torna apto a canalizar a Quintessência bruta. Pode-se arrancar a Quintessência dos padrões de matéria e energia, afetando a substancialidade de um padrão dentro da realidade. É possível fazer objetos sólidos ficarem insubstanciais ou fazer com que objetos percam sua massa mas continuem sólidos. Extrair a Quintessência bruta de um alvo é uma maneira “fácil” (e geralmente vulgar) de alterá-lo.\r\n\r\n✺✺✺✺✺ Alterar o Fluxo: agora, o Mestre de Primórdio pode alterar fluxos estabelecidos de Quintessência bruta, aqueles que fluem através de padrões de vida. Barrando o fluxo de Quintessência que corre continuamente dentro de uma forma de vida, pode-se extinguir a centelha de vida desta criatura. É possível também recarregar instantaneamente a Quintessência de seu Avatar. O mago também passa a ser capaz de canalizar a Quintessência livre de tal forma que cancela as energias “aleatórias” do Paradoxo.\r\n\r\n*    *    *\r\n\r\nTempo\r\n\r\nQuando não existiam relógios e calendários e o tempo era marcado pelas colheitas, passagem das estações e fenômenos naturais, dizem algumas das antigas histórias registradas pelos magos que presente, passado e futuro aconteciam ao mesmo tempo, na memória das gerações que passavam sua história adiante por meio da palavra falada. A história era cíclica, e mesmo as clepsidras e as ampulhetas não alteravam tal percepção. Com a padronização newtoniana do tempo, a história começou a se estratificar, e as referências de tempo absoluto começaram a se fixar. Quando o tempo estava se tornando de tal forma estático que frustravam aqueles que queriam realizar experiências mais profundas de alteração temporal diante da descrença dos Adormecidos, Einstein soltou uma bomba com a sua teoria da relatividade do tempo. Desde então, crenças diversas sobre leitura do passado e do futuro e viagens temporais voltaram com força ao imaginário popular, frustando desta vez (para a alegria das Tradições) o Cronograma Tecnocrático, já que, ao misturar teorias místicas com teoremas científicos, a linearidade do tempo começou a ser questionada principalmente pela cultura pop. Entretanto, viagens temporais ainda são extremamente complicadas, e muitos dizem ser impossíveis ou, ao menos, extremamente arriscadas. A Esfera do Tempo lida com o aspecto temporal da realidade, sua dilatação, desaceleração, aceleração, parada, além de viagem temporal. Devido a certas verdades dentro do Consenso estabelecido pela Tecnocracia através das massas, é mais fácil viajar para o futuro do que voltar no tempo, e tentar alterar o passado pode levar a sérias catástrofes. Além disso, a Esfera do Tempo pode ser usada para colocar “timer” em feitiços, que se ativam e entram em ação em dado momento ou a partir de certo acontecimento, e também para ver o passado, o futuro e puxar pessoas e objetos para fora (ou para dentro) da progressão linear.\r\n\r\nCadeira do Tempo: Culto do Êxtase\r\n\r\nExemplos de Especializações: Percepções, Usos Conjugados, Viagem, Controle Temporal\r\nNíveis de Esfera\r\n\r\n✺ Sentido Temporal: o mago desenvolve uma consciência rudimentar sobre a verdadeira natureza do tempo e adquire um relógio interno preciso. É capaz de detectar fenômenos baseados no tempo e que alterem periodicamente a realidade, além de sentir onde e quando o fenômeno irá ocorrer.\r\n\r\n✺✺ Visão do Passado/Visão do Futuro: o mago pode deslocar sua percepção para frente e para trás no tempo, embora as previsões do futuro costumem ser imprecisas, uma vez que muda constantemente e, a qualquer momento em que olhe adiante, seja capaz de ver o futuro mais provável. O futuro pode ser alterado, e neste nível, o mago pode tentar prever quais ações podem ser tomadas para que isto ocorra. A mágika pode ser revertida e as paredes do tempo ao redor de um instante em particular podem ser reforçadas, tornando uma ação mais difícil de ser percebida do ponto de vista de quem olha do futuro (no caso de olhar o passado) ou do passado (no caso de olhar o futuro), e, teoricamente, isto impede que viajantes do tempo venham a interferir.\r\n\r\n✺✺✺ Contração Temporal/Dilatação Temporal: o mago se torna capaz de exercer sua Vontade Desperta sobre a passagem de tempo, fazendo com que ela acelere ou desacelere como desejar. O mago realmente se torna capaz de viajar no tempo rumo ao futuro, acelerando o tempo para que se desloque para instantes adiante.\r\n\r\n✺✺✺✺ Determinismo Temporal: agora, o mago está apto a realizar deslocamentos absolutos no tempo ao invés de simplesmente ajustar a velocidade com que ele passa. Neste nível, é possível deixar efeitos e feitiços “em suspensão”, permitindo que entrem em ação no futuro mesmo após a morte do mago.\r\n\r\n✺✺✺✺✺ Viagem ao Futuro/Imunidade Temporal: o Mestre do Tempo é capaz de retirar algo ou alguém do fluxo do tempo e recolocá-lo em algum outro ponto da corrente temporal, seja a segundos ou a séculos de distância do ponto original. Teoricamente, também é possível viajar ao passado. Segundo os teóricos do Tempo, quando algo ou alguém é retirado do fluxo temporal, cria-se uma “âncora” a partir do ponto original, que pode ser seguida pelo Mestre, que determinará o fluxo real de tempo para deslocar o alvo livremente. É possível, também, se imunizar contra o tempo, evitando o fluxo temporal de um dado momento, vendo tudo como imagens paradas que ele pode manipular como desejar. O Mestre pode, com um efeito conjugado de Vida ou Matéria, levar outras coisas e pessoas consigo para este “tempo fora do tempo”, ou mesmo abandoná-los por lá, deixando-os eternamente congelados. Seres vivos e coisas largados fora do tempo reaparecem depois de um tempo, geralmente poucos instantes mais tarde, embora pessoas e outros seres costumem reaparecer mortos de velhice após passar centenas de ano num inferno onde o tempo não passa.\r\n\r\n*    *    *\r\n\r\nVida\r\n\r\nO que é vida? O que é estar vivo? As definições são vagas e os limites são difusos. Duas Tradições diferentes raramente concordam com os conceitos e definições. Ainda assim, geralmente se concorda que a Esfera da Vida abrange o aspecto da realidade que contenha células vivas, seja uma fruta fresca ou um bife cru. Se for algo que possa crescer se plantado, usado em cultura de células ou se desenvolva de alguma forma do ponto de vista biológico, pertence ao aspecto da Vida (caso contrário, ao da Matéria, como por exemplo o casulo seco de um inseto, ou o corpo de um vampiro, ainda que seu sangue, por estar impregnado de energias dos vivos, pertença à Esfera da Vida). Esta Esfera lida com o entendimento e a influência de sistemas biológicos. De forma simples, ela permite ao mago curar a si e ao outros, transformar formas de vidas e, em níveis mais altos, transformar as formas de vida mais complexas ou mesmo criar vida.\r\n\r\nCadeira da Vida: Verbena\r\n\r\nExemplos de Especializações: Mudar de Forma, Doença, Cura, Melhora, Clonagem, Criação\r\nNíveis de Esfera\r\n\r\n✺ Sentir Vida: o mago pode identificar padrões de vida, apreendendo muitos de seus aspectos como idade, sexo e seu estado de saúde. Pode também sentir formas de vida nas proximidades.\r\n\r\n✺✺ Alterar Padrões Simples/Curar a Si Mesmo: este nível permite ao mago manipular os padrões mais simples de vida, de bactérias e vírus a insetos e moluscos, bem como vegetais. O mago pode curar ou matar criaturas simples e realizar pequenas alterações em seus padrões, sem realizar transformações completas, bem como corrigir pequenas fendas (qualquer dano não agravado) no próprio padrão.\r\n\r\n✺✺✺ Alterar a Si Mesmo/Curar Vida/Transformar Padrões Simples/Criar Padrões Simples: agora o mago pode alterar seu próprio padrão, fazendo melhoras e mudanças sutis. Padrões simples podem ser virados do avesso, mudados ou mesmo criados totalmente a partir de outros padrões. Formas de vida criadas não terão uma mente superior a que possuíam em sua forma anterior. O mago começa a compreender organismos mais complexos, podendo curar ou ferir outra pessoa.\r\n\r\n✺✺✺✺ Alterar Padrões Complexos/Transformar a Si Mesmo: um mago com esse nível pode mudar a estrutura de qualquer padrão de vida complexo, incluindo seres conscientes. Neste nível de poder, o Desperto pode alterar sua própria forma para se assemelhar com outra pessoa ou criatura que tenha aproximadamente seu mesmo tamanho e massa.\r\n\r\n✺✺✺✺✺ Transformar Padrões Complexos/Criar Padrões Complexos/Metamorfose Perfeita: um Mestre de Vida pode transformar os outros da maneira como se transformava no nível anterior, mas, uma vez Mestre, pode alterar a própria forma e a dos outros como bem desejar, independente de tamanho ou massa. Um mago que tenha alcançado tal nível de proficiência, ao se transformar, mantém sua mente humana e sua capacidade de realizar mágika. Independente do que o mago se torne, a forma lhe cairá tão bem como aquela em que nasceu, não se sentirá um estranho em seu “novo corpo”. Agora, o mago também pode criar qualquer forma de vida, inclusive um corpo humano. Infelizmente, a forma de vida criada não terá uma mente ou alma além daquelas possuídas pelo material básico ou sua Ressonância.');

-- --------------------------------------------------------

--
-- Estrutura para tabela `comum`
--

CREATE TABLE IF NOT EXISTS `comum` (
  `id` bigint(20) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `comum`
--

INSERT INTO `comum` (`id`, `nome`, `created_at`, `updated_at`) VALUES
(1, 'Fisico', NULL, NULL),
(2, 'Mental', NULL, NULL),
(3, 'Social', NULL, NULL),
(4, 'Talento', NULL, NULL),
(5, 'Perícia', NULL, NULL),
(6, 'Conhecimento', NULL, NULL),
(7, 'Temporários', NULL, NULL),
(8, 'Virtude', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `cronica`
--

CREATE TABLE IF NOT EXISTS `cronica` (
  `id` bigint(20) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `resumo` text,
  `finalizada` int(11) DEFAULT '0',
  `fechada` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_user` bigint(20) unsigned DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `cronica`
--

INSERT INTO `cronica` (`id`, `nome`, `resumo`, `finalizada`, `fechada`, `created_at`, `updated_at`, `id_user`) VALUES
(13, 'crônica de teste do Fabrício', 'E aqui a baderna acontece.', 0, 0, NULL, '2019-06-22 03:30:05', 10),
(11, 'O roubo da estatueta de jade - Vampiro, a Máscara', 'Em um museu localizado em Manaus, acontecia uma exposição de artefatos arqueológicos egípcios. Dentre esculturas, tronos e múmias, existia uma estatueta de jade de Anúbis, que não só pelo material, mas também pelo valor arqueológico é valiosíssimo. Após 3 dias de exposição, a obra foi roubada.\r\n.\r\nE o príncipe de Manaus chamou todos os vampiros, em uma reunião, 11:00 da noite em sua mansão. Deve ser algo importante.', 0, 0, NULL, NULL, 10),
(12, 'Crônica de teste do Cleverson', 'Aqui vai o resumo da crônica \r\nDhhsjs\r\nSjshshe\r\nSks ssjwh e wejw weeu wejj -  = / _ < > % # // %%  && ## @@ !!', 0, 0, NULL, NULL, 18);

-- --------------------------------------------------------

--
-- Estrutura para tabela `ficha`
--

CREATE TABLE IF NOT EXISTS `ficha` (
  `id` bigint(20) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `resumo` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_classe` bigint(20) unsigned DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `ficha`
--

INSERT INTO `ficha` (`id`, `nome`, `resumo`, `created_at`, `updated_at`, `id_classe`) VALUES
(1, 'Tremere', 'O típico vampiro - mago. Conhece magias de sangue e são fortes. Só que na Camarila, são vistos como potenciais traidores, pois seu código de conduta é, primeiro o clã e depois o resto.\r\n\r\nFraquezas: Pela lei do clã, ao ser criado, todo neófito Trerere precisa tomar do sangue dos sete anciões do clã. Todos os Tremere estão pelo menos um passo mais próximos do laço de sangue com seus anciões e por isso normalmente agem com grande lealdade ao clã — a fim de evitar que a lealdade seja imposta sobre eles. Além disso, este acordo garante que os Tremere dificilmente consigam resistir à vontade de seus anciões; a dificuldade de qualquer tentativa de Dominação feita por um superior do clã é reduzida em 1.', NULL, '2019-06-01 16:21:30', 1),
(2, 'Malkaviano', 'São vistos como loucos, pois seu clã tem uma maldição que deixa todos os integrantes com perturbações de diversos níveis. Ou será que vêem o que os outros não vêem, os deixando com vantagem por estar sempre um passo a frente? Realidade? É um mero detalhe para eles.\r\n\r\nFraquezas: Todo vampiro de sangue Malkaviano é irremediavelmente insano de uma forma ou de outra. Alguns atribuem isto à maldição do sangue,  enquanto os Lunáticos na verdade o chamam de bênção especial, um dom de percepção. Quando um personagem Malkaviano é criado, o jogador  recisa escolher pelo menos uma perturbação para o seu personagem na hora do Abraço; esta perturbação pode ser temporariamente ignorada através do uso da Força de Vontade mas nunca poderá ser permanentemente superada.', NULL, '2019-06-01 16:15:00', 1),
(3, 'Brujah', 'São o típico ''sangue nos olhos'' pois o pavio deles é muito curto. Mas não se engane. No fundo são revolucionários, muitas vezes guiados por uma causa maior, e sua sedução chega a ser inexplicável. O que não os impede de sentar a bordoada em desafetos.\r\n\r\nFraquezas: A paixão ardente é tanto a bênção quanto a maldição de um Brujah. Apesar de serem rápidos para adotar uma causa, Eles são igualmente velozes para entrar em frenesi. Obviamente, os Brujah negam radicalmente esta tendência à excitação e se tornam bastante  hostis quando o assunto é mencionado. A dificuldade dos testes para se evitar o frenesi é dois níveis mais alta para os membros do clã Brujah.', NULL, '2019-06-01 16:15:23', 1),
(4, 'Ventrue', 'O líder puro sangue. Esses vampiros finos raramente são vistos entre os meros mortais sem dinheiro. Frequentemente estão nas altas rodas, na diretoria/presidência de uma grande empresa e alguns são políticos de renome. Fineza é para poucos.\r\n\r\nFraquezas: O gosto dos Ventrue é exigente ao ponto da exclusividade, e cada Sangue Azul só pode se alimentar de um tipo de sangue mortal. Este tipo deve ser escolhido quando da criação do personagem. Por exemplo, um Ventrue em particular pode se alimentar exclusivamente do sangue de virgens, homens loiros, crianças nuas ou do clero. O personagem não irá se alimentar com nenhum outro tipo de sangue, mesmo que esteja faminto ou sob compulsão. Os Ventrue podem se alimentar normalmente do sangue de outros vampiros.', NULL, '2019-06-01 16:23:09', 1),
(5, 'Gangrel', 'São naturistas, frequentemente interagindo com animais. Será que conseguem conversar com eles? Se for, isso é um perigo. Imagina o que um cachorro deve saber? Mas são selvagens no combate. Não se descuide diante de um Gangrel.\r\n\r\nFraquezas: Os Gangrel estão muito próximos da Besta Interior; e à medida em que eles sucumbem a ela, ela deixa suas marcas em seus corpos. Toda vez que um Gangrel entra em estado de frenesi ele ganha uma característica animalesca. Esta característica é determinada pelo jogador e pelo Narrador; pode ser uma orelha peluda, couro na pele, um rabo, olhos felinos, voz grunhida, presas e até mesmo escamas ou penas. Para cada cinco  stas características, adquiridas permanentemente, o Gangrel perde um ponto em um de seus Atributos Sociais.', NULL, '2019-06-01 16:13:06', 1),
(6, 'Toreador', 'Artistas com gosto apurado pela arte, seja ela qual for. Uma pessoa de beleza rara, um quadro valioso, um prédio com uma arquitetura bem feita... pessoas em geral tendem a olhar eles com admiração e alguns integrantes do clã, chegam a colocar pessoas de joelhos diante deles.\r\n\r\nFraquezas: Os Toreador são sobrenaturalmente ligados à estética e à beleza mas esta sensibilidade pode ser perigosa. Quando um Toreador vê, ouve ou até mesmo cheira algo realmente ma-ra-vi-lho-so — uma pessoa, pintura, música, um pôr do sol particularmente lindo — ele precisa ser bem sucedido num teste de Autocontrole (dificuldade 6) ou se encantará com a sensação. O Toreador será tomado por um êxtase de fascinação durante uma cena ou até que o alvo de sua atenção se retire. Um Toreador arrebatado desta forma não pode nem ao menos se defender se atacado. Mas se for ferido, ele poderá fazer uma nova jogada de Autocontrole para "quebrar o encanto".', NULL, '2019-06-01 16:19:29', 1),
(7, 'Nosferatu', 'São vampiros asquerosos, com a pele enrugada e as vezes com tumores espalhados pelo corpo. Realmente não são o tipo que você vai querer por perto. Felizmente conhecem truques de ilusão e podem temporariamente mudar sua aparência. Eles mantém uma rede de informação muito eficiente, e sabem de coisas que deixariam outros vampiros de boca aberta.\r\n\r\nFraquezas: Como mencionado, os Nosferatu são absolutamente repugnantes de se encarar. Todos os Nosferatu têm um nível de Aparência igual a  zero — risque o ponto automático da planilha de personagem — que não pode melhorar nem mesmo através do uso de pontos de experiência. A  maioria das ações Sociais baseadas na primeira impressão, exceto intimidação e outras semelhantes, falham automaticamente.', NULL, '2019-06-01 16:17:24', 1),
(8, 'Tzimice', 'Integrantes do Sabah, o grupo inimigo da Camarila, possuem o poder de moldar suas peles e ossos, ganhando entre seus membros uma aparência grotesca, e ao mesmo tempo assustadora, imponente, bela. Alguns membros conseguem fazer isso a outros, o que torna esses vampiros, torturadores natos.\r\n\r\nFraquezas: Os Tzimisce são criaturas muito territoriais, mantendo um refúgio particular e defendendo-o ferozmente. Qualquer que seja a situação na qual um Tzimisce dorme, ele precisa se cercar com pelo menos dois punhados de terra de um lugar que fosse importante para ele quando mortal — talvez um pouco de areia de sua terra natal ou do cemitério onde passou por seus ritos de criação. A falha em satisfazer estas exigências diminui pela metade a parada de dados do Tzimisce, a cada 24 horas, até que todas as suas ações usem apenas um dado. Esta penalidade dura até que o personagem descanse por um dia completo em meio à sua terra novamente.', NULL, '2019-06-01 16:28:33', 1),
(9, 'Lassombra', 'Os líderes do Sabah, são tão finos quanto os ventrue, com a diferença de que são muito sombrios. Literalmente. Eles conseguem controlar sombras, que são para eles os soldados perfeitos. Dizem as más línguas que na verdade as sombras são demônios que eles invocam, mas pode ser estória. Vai saber.\r\n\r\nFraquezas: Os vampiros Lasombra não têm reflexo. Eles não aparecem em espelhos, espelhos d''água, janelas retletoras, metais polidos, fotografias e câmaras de segurança, etc. Esta anomalia curiosa também se estende às roupas que usam e objetos que carregam. Muitos Membros acreditam que os Lasombra foram amaldiçoados desta maneira devido à sua vaidade. Além disso, devido à sua propensão para as trevas, os Lasombra sofrem um nível extra de dano da luz do sol.', NULL, '2019-06-01 16:26:20', 1),
(10, 'Giovanni', 'Clã curioso, todos os membros abraçados são da mesma família. Talvez seja para manter o poder somente com eles, ou pode ser um pacto entre seus antepassados. São mais para mafiosos do que qualquer outra coisa.\r\n\r\nFraquezas: O Beijo dos Giovanni causa uma dor excruciante aos mortais que o recebem. Na verdade, a mordida de um Giovanni normalmente mata a vítima mortal de choque antes que a pobre alma tenha uma chance de morrer pela perda de sangue. Os Necromantes causam duas vezes mais dano aos mortais que sofrem seus Beijos (e apenas mortais) do que o causado por qualquer outro vampiro. Portanto, se o Giovanni em questão tomar um ponto de\r\nsangue de uma fonte mortal, a fonte sofrerá dois pontos de dano de vitalidade. Sendo assim, os vampiros Giovanni muitas vezes se alimentam de cadáveres ou por outros meios, como bancos de sangue de hospitais.', NULL, '2019-06-01 16:39:14', 1),
(11, 'Assamita', 'São um clã de assassinos, que trabalham para quem pagar mais. O clã tem raízes no deserto do leste, e são especialistas em assassinato silencioso. Poucos encontram rastros dos assamitas, mas ao tornar isso publico, o tempo de vida está contado. A morte pode vir de qualquer lado. E eles sabem.\r\n\r\nFraquezas: Devido à superação da maldição Tremere sobre o sangue (a algum tempo, os Assamitas caçavam vampiros para cometerem diablerie e se aproximarem do ''Ele'', que seria o antediluviano do clã. os Tremere amaldiçoou o clã Assamita a não conseguir tomar sangue vampirico), os Assamitas readquiriram o seu apreciável gosto por vitae, principalmente a de outros Membros. Tendo sido forçados a depender de poções químicas de sangue por grande parte de sua história moderna, o clã se vicia facilmente no sangue de outros vampiros. Sempre que um Assamita beber ou simplesmente experimentar do sangue de um Membro, ele precisa fazer um teste de Autocontrole (dificuldade igual ao número de pontos de sangue ingeridos +3). Se a jogada falhar, ele está viciado e precisará fazer outro teste de Autocontrole da próxima vez que entrar em contato com vitae de Membros. Uma falha nesta tentativa coloca o vampiro em um frenesi sanguinário, no qual ele fará qualquer coisa fisicamente possível para tomar tanto sangue quanto possível. Quando o vício do personagem se manifestar, a necessidade de consumir sangue deve ser representada — o Clã Assamita não vê mais necessidade em esconder sua natureza vampírica.', NULL, '2019-06-01 16:35:10', 1),
(12, 'Seguidores de set', 'São os menos confiáveis de todos. Quando integrantes do clã chegam em uma cidade, normalmente a estrutura de poder desmorona. Sua devoção com o próprio clã chega a ser religiosa, lutando para deixar o mundo mais adequado a seu líder desaparecido, o antigo conhecido por Set.\r\n\r\nFraquezas: Os Setitas, como criaturas das trevas ancestrais têm uma severa alergia a todos os tipos de luz, principalmente a solar. Adicione dois níveis de Vitalidade a qualquer dano infligido pela exposição à luz solar. Os Seguidores de Set também subtraem um dos dados de todas as paradas quando expostos a luzes excessivamente brilhantes (holofotes, sinalizadores, etc.).', NULL, '2019-06-01 16:36:31', 1),
(13, 'Ravnos', 'Ladrões e trapaceiros, é o que melhor se encaixa na descrição desse clã. Possuem a capacidade de gerar ilusões, e usam isso para tirarem vantagem de todos. Alguns membros conseguem criar ilusões tão poderosas que algumas vítimas foram encontradas a beira de um colapso, catatônicos.\r\n\r\nFraquezas: Os Ravnos cederam aos seus vícios particulares na mesma medida em que se devotaram a eles. Cada Ravnos tem uma fraqueza por algum tipo de truque, travessura ou farsa, seja ela o jogo, a mentira, o roubo, a chantagem ou até mesmo assassinatos inteligentemente planejados. Quando a oportunidade de ceder a seus vícios surgir, os Ravnos têm que fazer uma jogada de autocontrole (dificuldade 6) ou sucumbir à sua compulsão.', NULL, '2019-06-06 13:30:37', 1),
(14, 'Fúrias negras', 'Uma tribo quase inteiramente formada por fêmeas, chamadas de vingadoras dos garou. De origem grega, estas amazonas são ferozes, honradas, orgulhosas e terríveis em combate. Se auto-proclamam as defensoras dos lugares sagrados da Wyld e das mulheres humanas.\r\n\r\n\r\nTotem: Pégaso', NULL, '2019-06-26 18:59:29', 2),
(15, 'Roedores de ossos', 'Uma tribo formada por vagabundos que vivem nas cidades. São bem informados, pois vagabundos tendem a serem ignorados, e as pessoas não ligam muito para o que vão falar perto deles. Basicamente mendigos e vira-latas.\r\n\r\nTotem: Rato', NULL, '2019-06-26 19:01:43', 2),
(16, 'Filhos de Gaia', 'São os mais moderados entre os garou, frequentemente mediando conflitos entre as tribos. Só que os mais novos tendem a se tornarem radicais, entrando em várias subculturas.\r\n\r\nTotem: Unicórnio', NULL, '2019-06-26 18:58:17', 2),
(17, 'Fianna', 'Cada membro dessa tribo descende de algum modo dos celtas, e trazem muito dessa cultura consigo. Vivem em qualquer lugar com parentes e se orgulham deles.\r\n\r\nTotem: Cervo', NULL, '2019-06-26 18:57:57', 2),
(18, 'Cria de fenris', 'Selvagens e sedentos de sangue. Quase todos tem descendência nórdica, e eles tem orgulho disso. Várias vezes dominam os condados rurais onde vivem.\r\n\r\nTotem: Lobo Fenris', NULL, '2019-06-26 18:57:38', 2),
(19, 'Andarilhos do asfalto', 'São os lobisomens mais adaptados as grandes cidades. Sua proximidade com os espíritos das máquinas tornam eles especialistas em tecnologia de ponta.\r\n\r\nTotem: Barata', NULL, '2019-06-26 18:56:22', 2),
(20, 'Garras vermelhas', 'Compostos inteiramente por lupinos,acreditam que o melhor jeito de defender Gaia e exterminando o câncer que a destrói. Os humanos.\r\n\r\nTotem: Grifo', NULL, '2019-06-26 18:59:50', 2),
(21, 'Senhores das sombras', 'Dominadores e tirânicos, lutam constantemente para tomar a liderança dos garou das mãos dos presas de prata. Eles fariam qualquer coisa por isso.\r\n\r\nAvô Trovão', NULL, '2019-06-26 19:02:13', 2),
(22, 'Peregrinos silenciosos', 'Vivem nas ruas, mas viajando de cidade em cidade. Conhecem ciganos, artistas circenses e outros viajantes. Incluindo outros peregrinos.\r\n\r\nTotem: Coruja', NULL, '2019-06-26 19:00:19', 2),
(23, 'Presas de prata', 'Por séculos estiveram na liderança dos garou, sempre cruzando com humanos e lobos nobres. Como tem muito cruzamento com primos, tendem a serem susceptíveis a doenças.\r\n\r\nTotem: Falcão', NULL, '2019-06-26 19:01:04', 2),
(24, 'Portadores da luz', 'Intelectuais e contemplativos, vagam pelo mundo em busca de conhecimento. Mas se opõem veementemente a Wyrm.\r\n\r\nTotem: Quimera', NULL, '2019-06-26 19:00:38', 2),
(25, 'Uktena', 'São lobisomens magos muito capazes,angariando muitas vezes a desconfiança de outros garou.', NULL, NULL, 2),
(26, 'Wendigo', 'Os únicos garou completamente indígenas, originais da América do Norte, lutam para expulsar os invasores de suas terras.\r\n\r\nTotem: Wendigo', NULL, '2019-06-26 19:02:31', 2),
(27, 'Irmandade de akasha', 'Filósofos e guerreiros, lutam para encontrar o equilíbrio entre mente, corpo e espírito. Seus punhos devem ser temidos. Essa busca pela sintonia, esses monges conhecem bem a Mente, o que permite a eles sincronizar seus pensamentos com seus corpos para feitos marciais sobre humanos. Alguns mestres conhecem golpes que podem limpar a mente de qualquer um com um toque quando necessário.', NULL, '2019-05-11 13:57:40', 3),
(28, 'Adeptos da virtualidade', 'Buscam acordar as massas com pirataria de dados, usando computadores para isso. Seu foco mágico frequentemente são computadores, celulares, tablet... a esfera de conhecimento mais estudada por esses tecnomantes é o Espaço. São especialistas no estudo de localizações, e alguns mestres podem distorcer o Espaço a tal ponto que encolher o aumentar qualquer coisa se tornou um feito fácil. Com seus riscos.', NULL, '2019-05-11 13:24:05', 3),
(29, 'Culto do êxtase', 'Buscam a libertação da carne e da alma, através de música, dança e experimentação. Alguns fazem uso de entorpecentes para isso. E assim se tornam especialistas na esfera de conhecimento do Tempo. Os cultistas mais experientes podem se parecer com bêbados ou drogados costumeiros, mas não se deixe enganar por sua aparência. Eles podem ver o passado, o futuro e há relatos de mestres que desapareceram. Há quem diga que foram para outras épocas.', NULL, '2019-05-11 13:52:26', 3),
(30, 'Coro celestial', 'Acima de tudo, são clérigos. Acreditam que existe uma divindade que permeia tudo,com vários nomes. A maioria o conhece como O Uno. Estão espalhados por várias denominações de várias religiões, em cargos diversos, sempre procurando pelo Uno. A esfera de conhecimento marca desses clérigos é o Primórdio. Conhecimento que permite alguns deles converter qualquer padrão de energia e matéria em quintessência para qualquer feito.', NULL, '2019-05-15 02:03:51', 3),
(31, 'Eutanatos', 'Cultistas da morte. Eles a estudam e acreditam que ela é a solução para o sofrimento do mundo. O que os tornam perigosos é o estudo massivo de Entropia, o conhecimento sobre o início e o fim de tudo. Com isso, conhecem e manipulam as probabilidades, podendo chamar a sorte a seu favor ou a má sorte para seus inimigos.', NULL, '2019-05-11 13:37:23', 3),
(32, 'Filhos do éter', 'São tecnomantes que são vistos como cientistas loucos. Buscam em cantos esquecidos da ciência suas inspirações, para construção de coisas estranhas e muitas vezes fora da realidade. São os melhores na área da Matéria, criando materiais com propriedades estranhas para todos. Alguns mestres criaram mini buracos negros em suas experiências, mas alguns laboratórios e os respectivos funcionários foram tragados na experiência. Talvez não seja uma boa idéia.', NULL, '2019-05-11 13:56:11', 3),
(33, 'Oradores dos sonhos', 'São Shamans e curandeiros que conversam e andam com espíritos. São assustadores quando querem, buscando os espíritos para conseguir informações ou só bater um papo. Com isso conhecem como ninguém o Espírito, o que permite alguns além de conversar, prender espíritos em objetos para criar amuletos ou pessoas, os assombrando. Oradores poderosos são temidos, e nem queira saber o porquê.', NULL, '2019-05-11 14:06:10', 3),
(34, 'Ordem de Hermes', 'São estudiosos natos da magia, possuindo bibliotecas vastas com conhecimento arcano a disposição. São magos com trejeitos típicos, muitos com barba e cabelos longos, frequentemente usando feitos pronunciando palavras em qualquer língua ou usando apetrechos como varinhas ou vassouras. No mundo moderno, a imaginação pode ir longe. Estudiosos da Força, podem manipular qualquer energia, enxergar em infravermelho, ultravioleta, raios X... ou até sintonizar a rádio preferida colocando a mão no ouvido. Mestres foram conhecidos por vaporizar cidades, explodindo tudo.', NULL, '2019-05-11 14:16:04', 3),
(35, 'Vazios', 'São magos sem identidade, rebeldes contra o sistema ou só garotos errantes. São niilistas, tentando sobreviver em um mundo decadente, indo em direção ao fim inevitável. São vistos frequentemente se reunindo em festas góticas, compartilhando com seus pares a dor da existência pútrida. Não são estudiosos de nenhuma área da magia em especial, pois cada um é livre para estudar o que quiser.', NULL, NULL, 3),
(36, 'Verbena', 'São confundidos com os wiccas e chamados de pagãos por causa de seu jeito, tradição composta em sua maioria por mulheres, os verbena são primitivos, fazendo uso de ervas para uso medicinal ou extração de veneno. Fazem isso com animais também, mas procuram evitar por causa do sofrimento infligido a eles. São estudiosos da Vida, podendo modificar e criar vida entre seus adeptos. Mais uma tradição que não vale a pena falar porque seus mestres são temidos, pois o horror pode fazer a mais forte mente se quebrar. Para se ter uma idéia, boatos dizem que foram eles que estiveram por trás da peste negra na Europa ou a epidemia de gripe espanhola.', NULL, '2019-05-11 14:35:51', 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `fichaUser`
--

CREATE TABLE IF NOT EXISTS `fichaUser` (
  `id` bigint(20) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `resumo` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_user` bigint(20) unsigned DEFAULT NULL,
  `id_cronica` bigint(20) unsigned DEFAULT NULL,
  `bonus` int(11) DEFAULT '60',
  `id_ficha` int(11) DEFAULT '0',
  `anotacoes` text
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `fichaUser`
--

INSERT INTO `fichaUser` (`id`, `nome`, `resumo`, `created_at`, `updated_at`, `id_user`, `id_cronica`, `bonus`, `id_ficha`, `anotacoes`) VALUES
(59, 'Nazgul', 'Bolseeeeeeirooooooo', NULL, '2019-06-22 14:35:32', 16, 13, 0, 11, 'Muhahahahaaaaaaa'),
(58, 'Teste de Nome', 'Resumo do personagem de teste shshhs sjsbhshs shshhshd shsbbdbs shshdnnd shsj shs shd  s sjsjjd djdjd\r\nBsbndnd\r\nSbsbndndn djdnnddn - shshsh%\r\nNsnshs *\r\n& djshd ...  shdbdbdnd djdnnfd\r\nEhshsnd shdjdem djsnndnd % snsjsn% # @\r\nSnsnns shd\r\nDndn d ddnd dddm  edejjsnnd', NULL, '2019-06-22 03:30:05', 18, 0, -1, 6, NULL),
(55, 'Asgan', 'Fogo puro', NULL, '2019-06-18 23:53:42', 16, NULL, -1, 1, NULL),
(56, 'Bernardo Matagal', 'Mora num matagal', NULL, '2019-06-24 20:29:27', 12, 0, 0, 3, NULL),
(57, 'Lindona', 'Ai, como sou linda', NULL, '2019-06-26 21:25:04', 10, 0, 0, 6, NULL),
(60, 'Sssssouuu Malssssss', 'SSSSSSS (mostrando a língua)', NULL, '2019-06-22 17:22:30', 16, 0, -1, 12, 'Ganhou um escravo para ajudar na dominação do mundo'),
(67, 'Geremias Feioso', 'feikedoy', NULL, '2019-06-27 17:26:41', 12, NULL, 57, 7, NULL),
(64, 'Ravengar', 'Vou dominar o reino de Avilan', NULL, '2019-06-25 16:51:39', 16, 0, 0, 5, NULL),
(61, 'Nome', 'Resumo do personagem', NULL, '2019-06-23 04:14:01', 18, NULL, 58, 11, NULL),
(62, 'Jebbedah', 'Desbravador aventureiro', NULL, '2019-06-24 15:47:29', 11, 13, -3, 11, NULL),
(63, 'Velociraptor', 'Nome doido, não é?', NULL, '2019-06-24 19:36:00', 16, 0, -1, 3, NULL),
(65, 'Dentinho', 'Resumo do personagem', NULL, '2019-06-25 17:28:52', 16, NULL, 60, 5, NULL),
(66, 'Loirão briguento de Gaia', 'Eu vou dar é porrada', NULL, '2019-06-26 21:09:34', 10, NULL, 0, 18, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Fazendo dump de dados para tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `postagem`
--

CREATE TABLE IF NOT EXISTS `postagem` (
  `id` bigint(20) NOT NULL,
  `post` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_fichaUser` bigint(20) DEFAULT NULL,
  `id_cronica` bigint(20) unsigned DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=112 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `postagem`
--

INSERT INTO `postagem` (`id`, `post`, `created_at`, `updated_at`, `id_fichaUser`, `id_cronica`) VALUES
(57, 'Tô matando zerg', NULL, NULL, 42, 7),
(56, '2 - 10 - 8 - 7 - 2 - 1', NULL, NULL, -1, 6),
(55, '8 - 2 - 2 - 7 - 1 - 2', NULL, NULL, -1, 6),
(54, 'E dei hadouken', NULL, NULL, 42, 7),
(52, '3 - 3 - 1 - 6', NULL, NULL, -1, 6),
(53, 'Joguei boliche com uma barra de ouro', NULL, NULL, 42, 7),
(51, 'Quero soltar um kamehamehá sombrio pro alto. Sou Sabah e posso.', NULL, NULL, 38, 7),
(50, 'ola tudo de boas', NULL, NULL, 39, 6),
(48, 'e agora? qual o proximo passo?', NULL, NULL, 35, 6),
(49, 'O próximo passo é tentar zerar os bugs e refazer a exibição da ficha quando clica no nome.', NULL, NULL, 34, 6),
(47, 'Ele é very very powerfull', NULL, NULL, 34, 6),
(46, '10 - 4 - 3 - 1 - 10', NULL, NULL, -1, 6),
(45, 'E chegou o cara', NULL, NULL, 0, 6),
(83, 'Teste de ação 25 - 4 - 2 - 9 - 9 - 6 - 4 - 5 - 1 - 7', NULL, NULL, -1, 12),
(59, 'Vai pegar? Assim?', NULL, NULL, 0, 8),
(60, 'Vamos testar', NULL, NULL, 0, 8),
(61, '7 - 7 - 7', NULL, NULL, -1, 8),
(62, 'Cara, você conseguiu. Pegou um pedaço dele.', NULL, NULL, 0, 8),
(63, 'Pegou um torrão. Mas levou 3 pontos de dano agravado de diabetes', NULL, NULL, 0, 8),
(81, NULL, NULL, NULL, 0, 12),
(82, 'Teste de ação', NULL, NULL, 0, 12),
(65, '3 - 7 - 1 - 5 - 2', NULL, NULL, -1, 8),
(66, 'Essa falha crítica mostra que você conseguiu.', NULL, NULL, 0, 8),
(67, 'Quebrou a perna com fratura exposta', NULL, NULL, 0, 8),
(69, '5 - 2 - 1', NULL, NULL, -1, 8),
(70, 'E você não mordeu. Tom estava sem ofuscação. E você se assustou.', NULL, NULL, 0, 8),
(71, '9 - 9 - 6', NULL, NULL, -1, 8),
(72, 'Você resistiu ao frenesi.', NULL, NULL, 0, 8),
(80, 'Estão vindo sangue-sugas de vários clãs para a reunião. Fale suas ações.', NULL, NULL, 0, 11),
(74, '9 - 6 - 2', NULL, NULL, -1, 9),
(75, 'ola tudo de boas', NULL, NULL, 0, 9),
(76, '1 - 8 - 5 - 4 - 7 - 8 - 1', NULL, NULL, -1, 9),
(77, '3 - 10 - 1 - 9 - 10 - 2 - 6', NULL, NULL, -1, 9),
(78, '7 - 7 - 2 - 6 - 2 - 1 - 4', NULL, NULL, -1, 9),
(79, '2 - 9 - 4 - 3 - 7 - 9 - 4', NULL, NULL, -1, 9),
(84, 'boa noite.', NULL, NULL, 57, 12),
(85, 'jogo meu charme pra uma pessoa aleatória na rua.', NULL, NULL, 57, 12),
(86, 'Teste', NULL, NULL, 58, 13),
(87, 'Fazer uma ação básica', NULL, NULL, 58, 13),
(88, '8 - 7 - 10 - 6', NULL, NULL, -1, 13),
(89, 'testei sua força. Você conseguiu.', NULL, NULL, 0, 13),
(90, 'Aparência + empatia5 - 9 - 6 - 8 - 4 - 1 - 3', NULL, NULL, -1, 12),
(91, 'Você precisa de 2 sucessos com dificuldades 5', NULL, NULL, 0, 12),
(92, '4 sucessos menos 1 falha crítica  = 3 sucessos', NULL, NULL, 0, 12),
(93, 'bolsssssseeeeirooooo?', NULL, NULL, 59, 13),
(94, 'vou corromper o Nazgul', NULL, NULL, 60, 13),
(95, 'vamos testar sua manipulação', NULL, NULL, 0, 13),
(96, '9 - 3 - 3 - 10 - 4', NULL, NULL, -1, 13),
(97, 'um 10 e um 9. Corrompeu ele e ele ainda vendeu a alma a você. Inclusive aumentou sua força de vontade acima do limite.', NULL, NULL, 0, 13),
(98, 'Oh, uma história curiosa', NULL, NULL, 62, 13),
(99, 'Jebbedah, surgiu um mosquito gigante atrás de você.', NULL, NULL, 0, 13),
(100, 'Eu cheguei dando uma voadora no Jebbedah', NULL, NULL, 63, 13),
(101, 'Ai', NULL, NULL, 62, 13),
(102, '1 - 7 - 3', NULL, NULL, -1, 13),
(103, 'Jebbedah, testei a força do velociraptor contra seu vigor.  Força do Velociraptor=3. vigor do Jebbedah = 5. Jebbedah, você sentiu uma mosca pousando em você.', NULL, NULL, 0, 13),
(104, 'Velociraptor, você quebrou a perna.', NULL, NULL, 0, 13),
(105, 'E o dano não foi maior porque teve um sucesso.', NULL, NULL, 0, 13),
(106, 'O que foi isso?', NULL, NULL, 63, 13),
(107, 'Esse cara é uma parede', NULL, NULL, 63, 13),
(108, '991 - 7 - 5', NULL, NULL, -1, 12),
(109, '33', NULL, NULL, 0, 12),
(110, 'hein?', NULL, NULL, 56, 12),
(111, 'Esse é o reino de Avilan?', NULL, NULL, 64, 13);

-- --------------------------------------------------------

--
-- Estrutura para tabela `raca`
--

CREATE TABLE IF NOT EXISTS `raca` (
  `id` bigint(20) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `raca`
--

INSERT INTO `raca` (`id`, `nome`, `created_at`, `updated_at`) VALUES
(1, 'Lupus', NULL, NULL),
(2, 'Impuro', NULL, NULL),
(3, 'Hominídeo', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_fichaUser` int(11) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `tipo`, `password`, `id_fichaUser`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'Fabrício Dias de Oliveira', 'devanon.kyosha@gmail.com', 'admin', '$2y$10$7LALE2JgUFjcRpN6Edf.AuJMmr4uyCo.I/t5Zmdb2fUoSKLDgh.C2', 0, 'nPQZt8kud3PTPFP4uWLmoJPW8nFYB0im9ny2nsSNovPunD2kCnpGs9l8FXX4', '2019-01-01 00:43:43', '2019-01-06 22:28:28'),
(9, 'teste', 'uerlensantos@gmail.com', 'autor', '$2y$10$Dmk3d/IxuLMqQqKdwLNIxenfoOXuHA5zWQgWsrQVGAH3wi5eiBk5S', 0, '8xAtwqO3g1dSmimIePH5Qx1MUuvYoDi08SsLqO2mZ6vijkJWtrXZzX5VE969', '2019-01-15 16:19:46', '2019-01-15 16:19:46'),
(10, 'Fabrício', 'dallen@dalen.com', 'autor', '$2y$10$VNy5kdp9A9bvJpnRCBgavuvOz25lhVhB9qIH7lDobqIETuvPKEOBS', 0, 'EdNFxBll1BjTzPPw36Yblb44giXVVTnyCotUZhoU2lCiLkITDi6tDJ84haGN', NULL, '2019-06-26 21:25:05'),
(11, 'jolon', 'jolon@jolon.com.br', 'autor', '$2y$10$GdwXNF8MEtk04PHvaZNazOJtB7BJdlmFkPD6mh0TJlaJbS3wYrOZO', 62, 'Unc96UdVKL5TCvCQYiaxrM1aOxeM7YMH7ZtUzG4ALOmNeCPW7wDqMNxucVpZ', '2019-01-26 22:50:07', '2019-06-24 15:47:29'),
(12, 'Carlos Souza', 'shadows.wayne@gmail.com', 'autor', '$2y$10$Yy7f8xTsw7Pop25uxuX7FeMJ/sUHvFuV941ONbJwcxaUfmaewni6O', 67, 'tPJ6WdjuH0oRsdawOfj5tU5MpcYA4vaZQUzJ12mnYbDwyHg9RWH99xoGgZ95', '2019-01-28 14:53:32', '2019-06-27 17:26:29'),
(16, 'xamarin', 'xamarin@xamarin.com', 'autor', '$2y$10$K/yjgUt0Hs0plv.1rvqtSetNZDeu/sYK/ENYVlxfpu95siBZ86AiG', 65, 'nGZW0hH6kykOMue2V7gMMG4UqqVwWonn64wqwEkcyUGUZbk1Scmv22XTVHtu', '2019-05-09 23:08:34', '2019-06-25 17:28:39'),
(17, 'Luiz Guilherme Rabelo Costa', 'guigao.456@gmail.com', 'autor', '$2y$10$3vy1Zy3scEsytaP57kvJZu.E1Q.sgvTZWih/CKz0EIH.BZ.ObzRgi', 0, NULL, '2019-05-27 19:05:59', '2019-05-27 19:05:59'),
(18, 'CLEVERSON CARVALHO NAZARETE', 'cleverson.c.nazarete@gmail.com', 'autor', '$2y$10$C00fmZ3dlv0sou0CMZTTiu2uZo6905mM//GkbRSrFV3xCJxvUtpWy', 0, 'e8UkfJoEWGSe8xXjvwjcYkV4NT0bb84P0ce3aOi1myP2txJ18MRGKezZZ35W', '2019-06-19 01:10:21', '2019-06-27 15:31:59');

-- --------------------------------------------------------

--
-- Estrutura para tabela `valor`
--

CREATE TABLE IF NOT EXISTS `valor` (
  `id` bigint(20) NOT NULL,
  `valor` varchar(100) DEFAULT NULL,
  `id_fichaUser` bigint(20) unsigned DEFAULT NULL,
  `id_caracteristica` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2952 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `valor`
--

INSERT INTO `valor` (`id`, `valor`, `id_fichaUser`, `id_caracteristica`, `created_at`, `updated_at`) VALUES
(2413, '0', 61, 9, NULL, NULL),
(2412, '0', 61, 8, NULL, NULL),
(2411, '0', 61, 11, NULL, NULL),
(2410, '0', 61, 12, NULL, NULL),
(2409, '0', 61, 13, NULL, NULL),
(2408, '0', 61, 14, NULL, NULL),
(2407, '0', 61, 15, NULL, NULL),
(2406, '0', 61, 16, NULL, NULL),
(2405, '0', 61, 17, NULL, NULL),
(2404, '0', 61, 18, NULL, NULL),
(2403, '0', 61, 20, NULL, NULL),
(2402, '0', 61, 19, NULL, NULL),
(2401, '0', 61, 23, NULL, NULL),
(2400, '0', 61, 22, NULL, NULL),
(2399, '0', 61, 21, NULL, NULL),
(2398, '0', 61, 26, NULL, NULL),
(2397, '0', 61, 25, NULL, NULL),
(2396, '0', 61, 24, NULL, NULL),
(2395, '5', 61, 40, NULL, NULL),
(2394, '5', 61, 41, NULL, NULL),
(2393, '1', 61, 46, NULL, '2019-06-23 04:14:01'),
(2392, '1', 61, 47, NULL, NULL),
(2391, '1', 61, 48, NULL, NULL),
(2390, '1', 61, 49, NULL, NULL),
(2389, '1', 61, 50, NULL, NULL),
(2388, '1', 61, 51, NULL, NULL),
(2387, '1', 61, 52, NULL, NULL),
(2386, '1', 61, 53, NULL, NULL),
(2385, '1', 61, 54, NULL, NULL),
(2384, '0', 61, 96, NULL, NULL),
(2383, '0', 61, 95, NULL, NULL),
(2382, '0', 61, 94, NULL, NULL),
(2381, '0', 61, 93, NULL, NULL),
(2380, '0', 61, 92, NULL, NULL),
(2379, '0', 61, 91, NULL, NULL),
(2378, '0', 61, 90, NULL, NULL),
(2377, '0', 61, 89, NULL, NULL),
(2376, '0', 61, 88, NULL, NULL),
(2375, '0', 61, 87, NULL, NULL),
(2374, '0', 61, 86, NULL, NULL),
(2373, '0', 61, 85, NULL, NULL),
(2372, '0', 61, 84, NULL, NULL),
(2371, '0', 61, 83, NULL, NULL),
(2370, '0', 61, 97, NULL, NULL),
(2369, '0', 61, 98, NULL, NULL),
(2368, '0', 61, 99, NULL, NULL),
(2367, '0', 61, 100, NULL, NULL),
(2366, '0', 61, 101, NULL, NULL),
(2365, '0', 61, 102, NULL, NULL),
(2364, '0', 61, 103, NULL, NULL),
(2363, '0', 61, 104, NULL, NULL),
(2362, '0', 61, 105, NULL, NULL),
(2361, '0', 61, 106, NULL, NULL),
(2360, '0', 61, 107, NULL, NULL),
(2359, '0', 61, 108, NULL, NULL),
(2358, '0', 61, 109, NULL, NULL),
(2357, '0', 61, 110, NULL, NULL),
(2356, '0', 61, 111, NULL, NULL),
(2355, '0', 61, 112, NULL, NULL),
(2354, '0', 61, 113, NULL, NULL),
(2353, '0', 61, 114, NULL, NULL),
(2352, '0', 61, 115, NULL, NULL),
(2351, '0', 61, 116, NULL, NULL),
(2350, '0', 61, 117, NULL, NULL),
(2349, '0', 61, 118, NULL, NULL),
(2348, '0', 61, 28, NULL, NULL),
(2347, '0', 61, 27, NULL, NULL),
(2346, '0', 61, 33, NULL, NULL),
(2345, '0', 61, 32, NULL, NULL),
(2344, '0', 61, 31, NULL, NULL),
(2343, '0', 61, 29, NULL, NULL),
(2342, '0', 61, 30, NULL, NULL),
(2341, '0', 61, 34, NULL, NULL),
(2340, '0', 61, 35, NULL, NULL),
(2339, '0', 61, 36, NULL, NULL),
(2338, '0', 61, 37, NULL, NULL),
(2337, '0', 61, 38, NULL, NULL),
(2336, '0', 61, 39, NULL, NULL),
(2335, '0', 60, 4, NULL, NULL),
(2334, '0', 60, 3, NULL, NULL),
(2333, '0', 60, 2, NULL, NULL),
(2332, '0', 60, 1, NULL, NULL),
(2331, '0', 60, 7, NULL, NULL),
(2330, '0', 60, 6, NULL, NULL),
(2329, '0', 60, 5, NULL, NULL),
(2328, '0', 60, 10, NULL, NULL),
(2327, '0', 60, 9, NULL, NULL),
(2326, '0', 60, 8, NULL, NULL),
(2325, '0', 60, 11, NULL, NULL),
(2324, '0', 60, 12, NULL, NULL),
(2323, '0', 60, 13, NULL, NULL),
(2322, '0', 60, 14, NULL, NULL),
(2321, '0', 60, 15, NULL, NULL),
(2320, '0', 60, 16, NULL, NULL),
(2319, '0', 60, 17, NULL, NULL),
(2318, '0', 60, 18, NULL, NULL),
(2317, '0', 60, 20, NULL, NULL),
(2316, '0', 60, 19, NULL, NULL),
(2315, '0', 60, 23, NULL, NULL),
(2314, '0', 60, 22, NULL, NULL),
(2313, '0', 60, 21, NULL, NULL),
(2312, '0', 60, 26, NULL, NULL),
(2311, '0', 60, 25, NULL, NULL),
(2310, '0', 60, 24, NULL, NULL),
(2309, '5', 60, 40, NULL, NULL),
(2308, '5', 60, 41, NULL, NULL),
(2307, '1', 60, 46, NULL, NULL),
(2306, '1', 60, 47, NULL, NULL),
(2305, '1', 60, 48, NULL, NULL),
(2304, '5', 60, 49, NULL, '2019-06-22 00:24:24'),
(2303, '5', 60, 50, NULL, '2019-06-22 00:24:26'),
(2302, '5', 60, 51, NULL, '2019-06-22 00:24:28'),
(2301, '5', 60, 52, NULL, '2019-06-22 00:24:31'),
(2300, '5', 60, 53, NULL, '2019-06-22 00:24:32'),
(2299, '5', 60, 54, NULL, '2019-06-22 00:24:35'),
(2298, '0', 60, 96, NULL, NULL),
(2297, '5', 60, 95, NULL, '2019-06-22 00:25:08'),
(2296, '0', 60, 94, NULL, NULL),
(2295, '0', 60, 93, NULL, NULL),
(2294, '5', 60, 92, NULL, '2019-06-22 00:25:15'),
(2293, '0', 60, 91, NULL, NULL),
(2292, '0', 60, 90, NULL, NULL),
(2291, '0', 60, 89, NULL, NULL),
(2290, '0', 60, 88, NULL, NULL),
(2289, '5', 60, 87, NULL, '2019-06-22 00:25:24'),
(2288, '0', 60, 86, NULL, NULL),
(2287, '0', 60, 85, NULL, NULL),
(2286, '0', 60, 84, NULL, NULL),
(2285, '0', 60, 83, NULL, NULL),
(2284, '5', 60, 97, NULL, '2019-06-22 00:25:03'),
(2283, '0', 60, 98, NULL, NULL),
(2282, '0', 60, 99, NULL, NULL),
(2281, '0', 60, 100, NULL, NULL),
(2280, '0', 60, 101, NULL, NULL),
(2279, '0', 60, 102, NULL, NULL),
(2278, '0', 60, 103, NULL, NULL),
(2277, '0', 60, 104, NULL, NULL),
(2276, '0', 60, 105, NULL, NULL),
(2275, '0', 60, 106, NULL, NULL),
(2274, '0', 60, 107, NULL, NULL),
(2273, '0', 60, 108, NULL, NULL),
(2272, '0', 60, 109, NULL, NULL),
(2271, '0', 60, 110, NULL, NULL),
(2270, '7', 60, 111, NULL, '2019-06-22 17:21:58'),
(2269, '10', 60, 112, NULL, '2019-06-22 17:03:48'),
(2268, '0', 60, 113, NULL, '2019-06-22 17:03:48'),
(2267, '5', 60, 114, NULL, '2019-06-22 00:24:45'),
(2266, '5', 60, 115, NULL, '2019-06-22 00:24:50'),
(2265, '5', 60, 116, NULL, '2019-06-22 00:24:54'),
(2264, '0', 60, 117, NULL, NULL),
(2263, '0', 60, 118, NULL, NULL),
(2262, '0', 60, 28, NULL, NULL),
(2261, '0', 60, 27, NULL, NULL),
(2260, '3', 60, 33, NULL, '2019-06-22 00:24:41'),
(2259, '0', 60, 32, NULL, NULL),
(2258, '0', 60, 31, NULL, NULL),
(2257, '0', 60, 29, NULL, NULL),
(2256, '0', 60, 30, NULL, NULL),
(2255, '0', 60, 34, NULL, NULL),
(2254, '0', 60, 35, NULL, NULL),
(2253, '0', 60, 36, NULL, NULL),
(2252, '0', 60, 37, NULL, NULL),
(2251, '0', 60, 38, NULL, NULL),
(2250, '0', 60, 39, NULL, NULL),
(2249, '0', 59, 4, NULL, NULL),
(2248, '0', 59, 3, NULL, NULL),
(2247, '0', 59, 2, NULL, NULL),
(2246, '0', 59, 1, NULL, NULL),
(2245, '0', 59, 7, NULL, NULL),
(2244, '0', 59, 6, NULL, NULL),
(2243, '0', 59, 5, NULL, NULL),
(2242, '0', 59, 10, NULL, NULL),
(2241, '0', 59, 9, NULL, NULL),
(2240, '0', 59, 8, NULL, NULL),
(2239, '0', 59, 11, NULL, NULL),
(2238, '0', 59, 12, NULL, NULL),
(2237, '0', 59, 13, NULL, NULL),
(2236, '0', 59, 14, NULL, NULL),
(2235, '0', 59, 15, NULL, NULL),
(2234, '0', 59, 16, NULL, NULL),
(2233, '0', 59, 17, NULL, NULL),
(2232, '0', 59, 18, NULL, NULL),
(2231, '0', 59, 20, NULL, NULL),
(2230, '0', 59, 19, NULL, NULL),
(2229, '0', 59, 23, NULL, NULL),
(2228, '0', 59, 22, NULL, NULL),
(2227, '0', 59, 21, NULL, NULL),
(2226, '0', 59, 26, NULL, NULL),
(2225, '0', 59, 25, NULL, NULL),
(2224, '0', 59, 24, NULL, NULL),
(2223, '5', 59, 40, NULL, NULL),
(2222, '5', 59, 41, NULL, NULL),
(2221, '2', 59, 46, NULL, '2019-06-22 14:35:31'),
(2220, '1', 59, 47, NULL, NULL),
(2219, '1', 59, 48, NULL, NULL),
(2218, '5', 59, 49, NULL, '2019-06-21 17:08:31'),
(2217, '4', 59, 50, NULL, '2019-06-21 17:09:14'),
(2216, '1', 59, 51, NULL, NULL),
(2215, '1', 59, 52, NULL, NULL),
(2214, '1', 59, 53, NULL, NULL),
(2213, '1', 59, 54, NULL, NULL),
(2212, '5', 59, 96, NULL, '2019-06-21 23:39:45'),
(2211, '5', 59, 95, NULL, '2019-06-21 23:39:43'),
(2210, '5', 59, 94, NULL, '2019-06-21 23:39:40'),
(2209, '5', 59, 93, NULL, '2019-06-21 17:09:46'),
(2208, '0', 59, 92, NULL, NULL),
(2207, '0', 59, 91, NULL, NULL),
(2206, '0', 59, 90, NULL, NULL),
(2205, '0', 59, 89, NULL, NULL),
(2204, '0', 59, 88, NULL, NULL),
(2203, '0', 59, 87, NULL, NULL),
(2202, '0', 59, 86, NULL, NULL),
(2201, '0', 59, 85, NULL, NULL),
(2200, '0', 59, 84, NULL, NULL),
(2199, '0', 59, 83, NULL, NULL),
(2198, '5', 59, 97, NULL, '2019-06-21 23:52:46'),
(2197, '5', 59, 98, NULL, '2019-06-21 23:52:49'),
(2196, '5', 59, 99, NULL, '2019-06-21 23:52:51'),
(2195, '0', 59, 100, NULL, NULL),
(2194, '5', 59, 101, NULL, '2019-06-21 23:40:06'),
(2193, '0', 59, 102, NULL, NULL),
(2192, '0', 59, 103, NULL, NULL),
(2191, '0', 59, 104, NULL, NULL),
(2190, '0', 59, 105, NULL, NULL),
(2189, '0', 59, 106, NULL, NULL),
(2188, '0', 59, 107, NULL, NULL),
(2187, '0', 59, 108, NULL, NULL),
(2186, '0', 59, 109, NULL, NULL),
(2185, '0', 59, 110, NULL, NULL),
(2184, '3', 59, 111, NULL, '2019-06-22 14:34:01'),
(2183, '6', 59, 112, NULL, '2019-06-22 14:33:52'),
(2182, '4', 59, 113, NULL, '2019-06-22 14:33:48'),
(2181, '5', 59, 114, NULL, '2019-06-21 23:39:50'),
(2180, '0', 59, 115, NULL, NULL),
(2179, '0', 59, 116, NULL, NULL),
(2178, '4', 59, 117, NULL, '2019-06-21 23:40:08'),
(2177, '0', 59, 118, NULL, NULL),
(2176, '3', 59, 28, NULL, '2019-06-21 23:40:01'),
(2175, '0', 59, 27, NULL, NULL),
(2174, '0', 59, 33, NULL, NULL),
(2173, '0', 59, 32, NULL, NULL),
(2172, '0', 59, 31, NULL, NULL),
(2171, '3', 59, 29, NULL, '2019-06-21 23:39:58'),
(2170, '3', 59, 30, NULL, '2019-06-21 23:39:56'),
(2169, '0', 59, 34, NULL, NULL),
(2168, '0', 59, 35, NULL, NULL),
(2167, '0', 59, 36, NULL, NULL),
(2166, '0', 59, 37, NULL, NULL),
(2165, '0', 59, 38, NULL, NULL),
(2164, '0', 59, 39, NULL, NULL),
(2163, '0', 58, 4, NULL, NULL),
(2162, '0', 58, 3, NULL, NULL),
(2161, '0', 58, 2, NULL, NULL),
(2160, '0', 58, 1, NULL, NULL),
(2159, '0', 58, 7, NULL, NULL),
(2158, '0', 58, 6, NULL, NULL),
(2157, '0', 58, 5, NULL, NULL),
(2156, '0', 58, 10, NULL, NULL),
(2155, '0', 58, 9, NULL, NULL),
(2154, '0', 58, 8, NULL, NULL),
(2153, '0', 58, 11, NULL, NULL),
(2152, '0', 58, 12, NULL, NULL),
(2151, '0', 58, 13, NULL, NULL),
(2150, '0', 58, 14, NULL, NULL),
(2149, '0', 58, 15, NULL, NULL),
(2148, '0', 58, 16, NULL, NULL),
(2147, '0', 58, 17, NULL, NULL),
(2146, '0', 58, 18, NULL, NULL),
(2145, '0', 58, 20, NULL, NULL),
(2144, '0', 58, 19, NULL, NULL),
(2143, '0', 58, 23, NULL, NULL),
(2142, '0', 58, 22, NULL, NULL),
(2141, '0', 58, 21, NULL, NULL),
(2140, '0', 58, 26, NULL, NULL),
(2139, '0', 58, 25, NULL, NULL),
(2138, '0', 58, 24, NULL, NULL),
(2137, '2', 58, 40, NULL, '2019-06-20 22:02:23'),
(2136, '7', 58, 41, NULL, '2019-06-20 22:02:10'),
(2135, '4', 58, 46, NULL, '2019-06-20 21:52:39'),
(2134, '3', 58, 47, NULL, '2019-06-20 21:52:37'),
(2133, '3', 58, 48, NULL, '2019-06-20 21:52:35'),
(2132, '4', 58, 49, NULL, '2019-06-20 21:52:33'),
(2131, '3', 58, 50, NULL, '2019-06-20 21:51:52'),
(2130, '4', 58, 51, NULL, '2019-06-20 21:52:29'),
(2129, '4', 58, 52, NULL, '2019-06-20 21:52:25'),
(2128, '4', 58, 53, NULL, '2019-06-20 21:56:23'),
(2127, '4', 58, 54, NULL, '2019-06-20 21:51:44'),
(2126, '2', 58, 96, NULL, '2019-06-20 21:53:29'),
(2125, '3', 58, 95, NULL, '2019-06-20 23:16:10'),
(2124, '5', 58, 94, NULL, '2019-06-20 23:16:25'),
(2123, '0', 58, 93, NULL, '2019-06-20 23:15:18'),
(2122, '3', 58, 92, NULL, '2019-06-20 21:53:05'),
(2121, '2', 58, 91, NULL, '2019-06-20 21:53:03'),
(2120, '4', 58, 90, NULL, '2019-06-20 21:53:08'),
(2119, '2', 58, 89, NULL, '2019-06-20 21:53:11'),
(2118, '2', 58, 88, NULL, '2019-06-20 21:53:13'),
(2117, '1', 58, 87, NULL, '2019-06-20 21:53:15'),
(2116, '2', 58, 86, NULL, '2019-06-20 21:53:18'),
(2115, '3', 58, 85, NULL, '2019-06-20 21:53:21'),
(2114, '3', 58, 84, NULL, '2019-06-20 21:53:23'),
(2113, '2', 58, 83, NULL, '2019-06-20 21:53:26'),
(2112, '0', 58, 97, NULL, NULL),
(2111, '0', 58, 98, NULL, NULL),
(2110, '0', 58, 99, NULL, NULL),
(2109, '0', 58, 100, NULL, NULL),
(2108, '0', 58, 101, NULL, NULL),
(2107, '0', 58, 102, NULL, NULL),
(2106, '0', 58, 103, NULL, NULL),
(2105, '0', 58, 104, NULL, NULL),
(2104, '0', 58, 105, NULL, NULL),
(2103, '0', 58, 106, NULL, NULL),
(2102, '0', 58, 107, NULL, NULL),
(2101, '0', 58, 108, NULL, NULL),
(2100, '0', 58, 109, NULL, NULL),
(2099, '0', 58, 110, NULL, NULL),
(2098, '7', 58, 111, NULL, '2019-06-21 01:44:09'),
(2097, '10', 58, 112, NULL, '2019-06-21 01:44:09'),
(2096, '0', 58, 113, NULL, '2019-06-21 01:44:09'),
(2095, '0', 58, 114, NULL, NULL),
(2094, '0', 58, 115, NULL, NULL),
(2093, '0', 58, 116, NULL, NULL),
(2092, '0', 58, 117, NULL, NULL),
(2091, '0', 58, 118, NULL, NULL),
(2090, '0', 58, 28, NULL, NULL),
(2089, '0', 58, 27, NULL, NULL),
(2088, '0', 58, 33, NULL, NULL),
(2087, '0', 58, 32, NULL, NULL),
(2086, '0', 58, 31, NULL, NULL),
(2085, '0', 58, 29, NULL, NULL),
(2084, '0', 58, 30, NULL, NULL),
(2083, '0', 58, 34, NULL, NULL),
(2082, '0', 58, 35, NULL, NULL),
(2081, '0', 58, 36, NULL, NULL),
(2080, '0', 58, 37, NULL, NULL),
(2079, '0', 58, 38, NULL, NULL),
(2078, '0', 58, 39, NULL, NULL),
(2077, '0', 57, 4, NULL, NULL),
(2076, '0', 57, 3, NULL, NULL),
(2075, '0', 57, 2, NULL, NULL),
(2074, '0', 57, 1, NULL, NULL),
(2073, '0', 57, 7, NULL, NULL),
(2072, '0', 57, 6, NULL, NULL),
(2071, '0', 57, 5, NULL, NULL),
(2070, '0', 57, 10, NULL, NULL),
(2069, '0', 57, 9, NULL, NULL),
(2068, '0', 57, 8, NULL, NULL),
(2067, '0', 57, 11, NULL, NULL),
(2066, '0', 57, 12, NULL, NULL),
(2065, '0', 57, 13, NULL, NULL),
(2064, '0', 57, 14, NULL, NULL),
(2063, '3', 57, 15, NULL, '2019-06-21 01:02:51'),
(2062, '0', 57, 16, NULL, NULL),
(2061, '0', 57, 17, NULL, NULL),
(2060, '0', 57, 18, NULL, NULL),
(2059, '0', 57, 20, NULL, NULL),
(2058, '0', 57, 19, NULL, NULL),
(2057, '0', 57, 23, NULL, NULL),
(2056, '0', 57, 22, NULL, NULL),
(2055, '0', 57, 21, NULL, NULL),
(2054, '0', 57, 26, NULL, NULL),
(2053, '0', 57, 25, NULL, NULL),
(2052, '0', 57, 24, NULL, NULL),
(2051, '5', 57, 40, NULL, NULL),
(2050, '5', 57, 41, NULL, NULL),
(2049, '3', 57, 46, NULL, '2019-06-20 00:28:00'),
(2048, '2', 57, 47, NULL, '2019-06-21 01:01:17'),
(2047, '3', 57, 48, NULL, '2019-06-21 01:01:37'),
(2046, '3', 57, 49, NULL, '2019-06-21 01:01:39'),
(2045, '3', 57, 50, NULL, '2019-06-21 01:01:46'),
(2044, '4', 57, 51, NULL, '2019-06-21 01:01:58'),
(2043, '3', 57, 52, NULL, '2019-06-21 01:02:05'),
(2042, '2', 57, 53, NULL, '2019-06-21 01:02:06'),
(2041, '3', 57, 54, NULL, '2019-06-21 01:02:11'),
(2040, '0', 57, 96, NULL, NULL),
(2039, '3', 57, 95, NULL, '2019-06-21 01:03:16'),
(2038, '0', 57, 94, NULL, NULL),
(2037, '0', 57, 93, NULL, NULL),
(2036, '0', 57, 92, NULL, NULL),
(2035, '3', 57, 91, NULL, '2019-06-21 01:02:29'),
(2034, '3', 57, 90, NULL, '2019-06-21 01:02:25'),
(2033, '0', 57, 89, NULL, NULL),
(2032, '2', 57, 88, NULL, '2019-06-21 01:02:44'),
(2031, '3', 57, 87, NULL, '2019-06-21 01:02:42'),
(2030, '0', 57, 86, NULL, NULL),
(2029, '0', 57, 85, NULL, NULL),
(2028, '0', 57, 84, NULL, NULL),
(2027, '2', 57, 83, NULL, '2019-06-21 01:03:10'),
(2026, '0', 57, 97, NULL, NULL),
(2025, '3', 57, 98, NULL, '2019-06-21 01:03:23'),
(2024, '0', 57, 99, NULL, NULL),
(2023, '0', 57, 100, NULL, NULL),
(2022, '0', 57, 101, NULL, NULL),
(2021, '0', 57, 102, NULL, NULL),
(2020, '0', 57, 103, NULL, NULL),
(2019, '0', 57, 104, NULL, NULL),
(2018, '0', 57, 105, NULL, NULL),
(2017, '0', 57, 106, NULL, NULL),
(2016, '4', 57, 107, NULL, '2019-06-21 01:10:24'),
(2015, '0', 57, 108, NULL, NULL),
(2014, '0', 57, 109, NULL, NULL),
(2013, '5', 57, 110, NULL, '2019-06-21 01:10:31'),
(2012, '5', 57, 111, NULL, '2019-06-26 21:25:04'),
(2011, '10', 57, 112, NULL, '2019-06-26 21:25:04'),
(2010, '0', 57, 113, NULL, '2019-06-26 21:25:04'),
(2009, '4', 57, 114, NULL, '2019-06-21 01:03:43'),
(2008, '4', 57, 115, NULL, '2019-06-21 01:03:45'),
(2007, '5', 57, 116, NULL, '2019-06-21 01:10:11'),
(2006, '0', 57, 117, NULL, NULL),
(2005, '0', 57, 118, NULL, NULL),
(2004, '0', 57, 28, NULL, NULL),
(2003, '0', 57, 27, NULL, NULL),
(2002, '0', 57, 33, NULL, NULL),
(2001, '0', 57, 32, NULL, NULL),
(2000, '0', 57, 31, NULL, NULL),
(1999, '0', 57, 29, NULL, NULL),
(1998, '0', 57, 30, NULL, NULL),
(1997, '0', 57, 34, NULL, NULL),
(1996, '0', 57, 35, NULL, NULL),
(1995, '0', 57, 36, NULL, NULL),
(1994, '0', 57, 37, NULL, NULL),
(1993, '0', 57, 38, NULL, NULL),
(1992, '0', 57, 39, NULL, NULL),
(1905, '0', 55, 4, NULL, NULL),
(1904, '0', 55, 3, NULL, NULL),
(1903, '0', 55, 2, NULL, NULL),
(1902, '0', 55, 1, NULL, NULL),
(1901, '0', 55, 7, NULL, NULL),
(1900, '0', 55, 6, NULL, NULL),
(1899, '0', 55, 5, NULL, NULL),
(1898, '0', 55, 10, NULL, NULL),
(1897, '0', 55, 9, NULL, NULL),
(1896, '0', 55, 8, NULL, NULL),
(1895, '0', 55, 11, NULL, NULL),
(1894, '0', 55, 12, NULL, NULL),
(1893, '0', 55, 13, NULL, NULL),
(1892, '0', 55, 14, NULL, NULL),
(1891, '0', 55, 15, NULL, NULL),
(1890, '0', 55, 16, NULL, NULL),
(1889, '0', 55, 17, NULL, NULL),
(1888, '3', 55, 18, NULL, '2019-06-18 23:52:32'),
(1887, '0', 55, 20, NULL, NULL),
(1886, '0', 55, 19, NULL, NULL),
(1885, '0', 55, 23, NULL, NULL),
(1884, '0', 55, 22, NULL, NULL),
(1883, '0', 55, 21, NULL, NULL),
(1882, '0', 55, 26, NULL, NULL),
(1881, '0', 55, 25, NULL, NULL),
(1880, '0', 55, 24, NULL, NULL),
(1879, '6', 55, 40, NULL, '2019-06-18 23:52:55'),
(1878, '5', 55, 41, NULL, NULL),
(1877, '3', 55, 46, NULL, '2019-06-18 23:49:32'),
(1876, '3', 55, 47, NULL, '2019-06-18 23:49:36'),
(1875, '3', 55, 48, NULL, '2019-06-18 23:49:40'),
(1874, '3', 55, 49, NULL, '2019-06-18 23:49:47'),
(1873, '3', 55, 50, NULL, '2019-06-18 23:49:50'),
(1872, '3', 55, 51, NULL, '2019-06-18 23:49:53'),
(1871, '3', 55, 52, NULL, '2019-06-18 23:49:57'),
(1870, '3', 55, 53, NULL, '2019-06-18 23:50:01'),
(1869, '4', 55, 54, NULL, '2019-06-18 23:53:42'),
(1868, '3', 55, 96, NULL, '2019-06-18 23:51:48'),
(1867, '0', 55, 95, NULL, NULL),
(1866, '0', 55, 94, NULL, NULL),
(1865, '0', 55, 93, NULL, NULL),
(1864, '1', 55, 92, NULL, '2019-06-18 23:50:13'),
(1863, '0', 55, 91, NULL, NULL),
(1862, '1', 55, 90, NULL, '2019-06-18 23:50:26'),
(1861, '2', 55, 89, NULL, '2019-06-18 23:50:23'),
(1860, '0', 55, 88, NULL, NULL),
(1859, '1', 55, 87, NULL, '2019-06-18 23:50:30'),
(1858, '0', 55, 86, NULL, NULL),
(1857, '3', 55, 85, NULL, '2019-06-18 23:51:37'),
(1856, '2', 55, 84, NULL, '2019-06-18 23:51:33'),
(1855, '0', 55, 83, NULL, NULL),
(1854, '3', 55, 97, NULL, '2019-06-18 23:51:57'),
(1853, '3', 55, 98, NULL, '2019-06-18 23:52:20'),
(1852, '0', 55, 99, NULL, NULL),
(1851, '0', 55, 100, NULL, NULL),
(1850, '0', 55, 101, NULL, NULL),
(1849, '0', 55, 102, NULL, NULL),
(1848, '0', 55, 103, NULL, NULL),
(1847, '4', 55, 104, NULL, '2019-06-18 23:53:34'),
(1846, '0', 55, 105, NULL, NULL),
(1845, '0', 55, 106, NULL, NULL),
(1844, '0', 55, 107, NULL, NULL),
(1843, '0', 55, 108, NULL, NULL),
(1842, '5', 55, 109, NULL, '2019-06-18 23:53:14'),
(1841, '0', 55, 110, NULL, NULL),
(1840, '0', 55, 111, NULL, NULL),
(1839, '0', 55, 112, NULL, NULL),
(1838, '0', 55, 113, NULL, NULL),
(1837, '3', 55, 114, NULL, '2019-06-18 23:52:38'),
(1836, '3', 55, 115, NULL, '2019-06-18 23:52:46'),
(1835, '3', 55, 116, NULL, '2019-06-18 23:52:45'),
(1834, '0', 55, 117, NULL, NULL),
(1833, '0', 55, 118, NULL, NULL),
(1832, '0', 55, 28, NULL, NULL),
(1831, '0', 55, 27, NULL, NULL),
(1830, '0', 55, 33, NULL, NULL),
(1829, '0', 55, 32, NULL, NULL),
(1828, '0', 55, 31, NULL, NULL),
(1827, '0', 55, 29, NULL, NULL),
(1826, '0', 55, 30, NULL, NULL),
(1825, '0', 55, 34, NULL, NULL),
(1824, '0', 55, 35, NULL, NULL),
(1823, '0', 55, 36, NULL, NULL),
(1822, '0', 55, 37, NULL, NULL),
(1821, '0', 55, 38, NULL, NULL),
(1820, '0', 55, 39, NULL, NULL),
(1991, '0', 56, 4, NULL, NULL),
(1990, '0', 56, 3, NULL, NULL),
(1989, '0', 56, 2, NULL, NULL),
(1988, '2', 56, 1, NULL, '2019-06-20 00:28:19'),
(1987, '0', 56, 7, NULL, NULL),
(1986, '0', 56, 6, NULL, NULL),
(1985, '0', 56, 5, NULL, NULL),
(1984, '0', 56, 10, NULL, NULL),
(1983, '0', 56, 9, NULL, NULL),
(1982, '0', 56, 8, NULL, NULL),
(1981, '0', 56, 11, NULL, NULL),
(1980, '0', 56, 12, NULL, NULL),
(1979, '0', 56, 13, NULL, NULL),
(1978, '0', 56, 14, NULL, NULL),
(1977, '0', 56, 15, NULL, NULL),
(1976, '0', 56, 16, NULL, NULL),
(1975, '0', 56, 17, NULL, NULL),
(1974, '0', 56, 18, NULL, NULL),
(1973, '0', 56, 20, NULL, NULL),
(1972, '0', 56, 19, NULL, NULL),
(1971, '0', 56, 23, NULL, NULL),
(1970, '0', 56, 22, NULL, NULL),
(1969, '0', 56, 21, NULL, NULL),
(1968, '0', 56, 26, NULL, NULL),
(1967, '0', 56, 25, NULL, NULL),
(1966, '0', 56, 24, NULL, NULL),
(1965, '5', 56, 40, NULL, NULL),
(1964, '5', 56, 41, NULL, NULL),
(1963, '3', 56, 46, NULL, '2019-06-20 00:25:30'),
(1962, '3', 56, 47, NULL, '2019-06-20 00:25:33'),
(1961, '4', 56, 48, NULL, '2019-06-20 00:25:39'),
(1960, '3', 56, 49, NULL, '2019-06-20 00:26:01'),
(1959, '1', 56, 50, NULL, NULL),
(1958, '4', 56, 51, NULL, '2019-06-20 00:25:55'),
(1957, '4', 56, 52, NULL, '2019-06-20 00:26:09'),
(1956, '3', 56, 53, NULL, '2019-06-20 00:26:11'),
(1955, '3', 56, 54, NULL, '2019-06-20 00:26:13'),
(1954, '0', 56, 96, NULL, NULL),
(1953, '0', 56, 95, NULL, NULL),
(1952, '0', 56, 94, NULL, NULL),
(1951, '3', 56, 93, NULL, '2019-06-20 00:27:20'),
(1950, '0', 56, 92, NULL, NULL),
(1949, '0', 56, 91, NULL, NULL),
(1948, '0', 56, 90, NULL, NULL),
(1947, '5', 56, 89, NULL, '2019-06-20 00:28:08'),
(1946, '0', 56, 88, NULL, NULL),
(1945, '0', 56, 87, NULL, NULL),
(1944, '3', 56, 86, NULL, '2019-06-20 00:26:22'),
(1943, '2', 56, 85, NULL, '2019-06-20 00:26:30'),
(1942, '3', 56, 84, NULL, '2019-06-20 00:26:39'),
(1941, '2', 56, 83, NULL, '2019-06-20 00:26:48'),
(1940, '4', 56, 97, NULL, '2019-06-20 00:27:37'),
(1939, '0', 56, 98, NULL, NULL),
(1938, '0', 56, 99, NULL, NULL),
(1937, '3', 56, 100, NULL, '2019-06-20 00:27:05'),
(1936, '4', 56, 101, NULL, '2019-06-20 00:26:59'),
(1935, '0', 56, 102, NULL, NULL),
(1934, '0', 56, 103, NULL, NULL),
(1933, '0', 56, 104, NULL, NULL),
(1932, '3', 56, 105, NULL, '2019-06-20 00:27:46'),
(1931, '0', 56, 106, NULL, NULL),
(1930, '0', 56, 107, NULL, NULL),
(1929, '0', 56, 108, NULL, NULL),
(1928, '0', 56, 109, NULL, NULL),
(1927, '0', 56, 110, NULL, NULL),
(1926, '5', 56, 111, NULL, '2019-06-24 20:29:27'),
(1925, '10', 56, 112, NULL, '2019-06-24 20:29:27'),
(1924, '0', 56, 113, NULL, '2019-06-24 20:29:27'),
(1923, '2', 56, 114, NULL, '2019-06-20 00:28:32'),
(1922, '0', 56, 115, NULL, NULL),
(1921, '1', 56, 116, NULL, '2019-06-20 00:28:31'),
(1920, '0', 56, 117, NULL, NULL),
(1919, '4', 56, 118, NULL, '2019-06-20 00:27:57'),
(1918, '0', 56, 28, NULL, NULL),
(1917, '0', 56, 27, NULL, NULL),
(1916, '0', 56, 33, NULL, NULL),
(1915, '0', 56, 32, NULL, NULL),
(1914, '0', 56, 31, NULL, NULL),
(1913, '0', 56, 29, NULL, NULL),
(1912, '0', 56, 30, NULL, NULL),
(1911, '0', 56, 34, NULL, NULL),
(1910, '0', 56, 35, NULL, NULL),
(1909, '0', 56, 36, NULL, NULL),
(1908, '0', 56, 37, NULL, NULL),
(1907, '0', 56, 38, NULL, NULL),
(1906, '0', 56, 39, NULL, NULL),
(2414, '0', 61, 10, NULL, NULL),
(2415, '0', 61, 5, NULL, NULL),
(2416, '0', 61, 6, NULL, NULL),
(2417, '0', 61, 7, NULL, NULL),
(2418, '0', 61, 1, NULL, NULL),
(2419, '0', 61, 2, NULL, NULL),
(2420, '0', 61, 3, NULL, NULL),
(2421, '0', 61, 4, NULL, NULL),
(2422, '0', 62, 39, NULL, NULL),
(2423, '0', 62, 38, NULL, NULL),
(2424, '0', 62, 37, NULL, NULL),
(2425, '0', 62, 36, NULL, NULL),
(2426, '0', 62, 35, NULL, NULL),
(2427, '0', 62, 34, NULL, NULL),
(2428, '3', 62, 30, NULL, '2019-06-23 00:17:29'),
(2429, '0', 62, 29, NULL, NULL),
(2430, '0', 62, 31, NULL, NULL),
(2431, '0', 62, 32, NULL, NULL),
(2432, '0', 62, 33, NULL, NULL),
(2433, '0', 62, 27, NULL, NULL),
(2434, '0', 62, 28, NULL, NULL),
(2435, '0', 62, 118, NULL, NULL),
(2436, '0', 62, 117, NULL, NULL),
(2437, '5', 62, 116, NULL, '2019-06-23 00:17:20'),
(2438, '5', 62, 115, NULL, '2019-06-23 00:17:22'),
(2439, '5', 62, 114, NULL, '2019-06-23 00:17:25'),
(2440, '0', 62, 113, NULL, '2019-06-23 00:18:51'),
(2441, '10', 62, 112, NULL, '2019-06-23 00:18:51'),
(2442, '5', 62, 111, NULL, '2019-06-23 00:18:51'),
(2443, '0', 62, 110, NULL, NULL),
(2444, '0', 62, 109, NULL, NULL),
(2445, '0', 62, 108, NULL, NULL),
(2446, '0', 62, 107, NULL, NULL),
(2447, '0', 62, 106, NULL, NULL),
(2448, '5', 62, 105, NULL, '2019-06-23 00:17:42'),
(2449, '5', 62, 104, NULL, '2019-06-23 00:17:38'),
(2450, '0', 62, 103, NULL, NULL),
(2451, '0', 62, 102, NULL, NULL),
(2452, '0', 62, 101, NULL, NULL),
(2453, '0', 62, 100, NULL, NULL),
(2454, '0', 62, 99, NULL, NULL),
(2455, '0', 62, 98, NULL, NULL),
(2456, '0', 62, 97, NULL, NULL),
(2457, '0', 62, 83, NULL, NULL),
(2458, '0', 62, 84, NULL, NULL),
(2459, '0', 62, 85, NULL, NULL),
(2460, '0', 62, 86, NULL, NULL),
(2461, '0', 62, 87, NULL, NULL),
(2462, '0', 62, 88, NULL, NULL),
(2463, '0', 62, 89, NULL, NULL),
(2464, '0', 62, 90, NULL, NULL),
(2465, '0', 62, 91, NULL, NULL),
(2466, '0', 62, 92, NULL, NULL),
(2467, '0', 62, 93, NULL, NULL),
(2468, '0', 62, 94, NULL, NULL),
(2469, '0', 62, 95, NULL, NULL),
(2470, '0', 62, 96, NULL, NULL),
(2471, '5', 62, 54, NULL, '2019-06-23 00:17:54'),
(2472, '5', 62, 53, NULL, '2019-06-23 00:17:56'),
(2473, '5', 62, 52, NULL, '2019-06-23 00:17:58'),
(2474, '5', 62, 51, NULL, '2019-06-23 00:18:08'),
(2475, '5', 62, 50, NULL, '2019-06-23 00:18:06'),
(2476, '5', 62, 49, NULL, '2019-06-23 00:18:02'),
(2477, '5', 62, 48, NULL, '2019-06-23 00:17:07'),
(2478, '5', 62, 47, NULL, '2019-06-23 00:17:09'),
(2479, '5', 62, 46, NULL, '2019-06-23 00:17:12'),
(2480, '5', 62, 41, NULL, NULL),
(2481, '5', 62, 40, NULL, NULL),
(2482, '0', 62, 24, NULL, NULL),
(2483, '0', 62, 25, NULL, NULL),
(2484, '0', 62, 26, NULL, NULL),
(2485, '0', 62, 21, NULL, NULL),
(2486, '0', 62, 22, NULL, NULL),
(2487, '0', 62, 23, NULL, NULL),
(2488, '0', 62, 19, NULL, NULL),
(2489, '0', 62, 20, NULL, NULL),
(2490, '0', 62, 18, NULL, NULL),
(2491, '0', 62, 17, NULL, NULL),
(2492, '0', 62, 16, NULL, NULL),
(2493, '0', 62, 15, NULL, NULL),
(2494, '0', 62, 14, NULL, NULL),
(2495, '0', 62, 13, NULL, NULL),
(2496, '0', 62, 12, NULL, NULL),
(2497, '0', 62, 11, NULL, NULL),
(2498, '0', 62, 8, NULL, NULL),
(2499, '0', 62, 9, NULL, NULL),
(2500, '0', 62, 10, NULL, NULL),
(2501, '0', 62, 5, NULL, NULL),
(2502, '0', 62, 6, NULL, NULL),
(2503, '0', 62, 7, NULL, NULL),
(2504, '0', 62, 1, NULL, NULL),
(2505, '0', 62, 2, NULL, NULL),
(2506, '0', 62, 3, NULL, NULL),
(2507, '0', 62, 4, NULL, NULL),
(2508, '0', 63, 39, NULL, NULL),
(2509, '0', 63, 38, NULL, NULL),
(2510, '0', 63, 37, NULL, NULL),
(2511, '0', 63, 36, NULL, NULL),
(2512, '0', 63, 35, NULL, NULL),
(2513, '0', 63, 34, NULL, NULL),
(2514, '0', 63, 30, NULL, NULL),
(2515, '0', 63, 29, NULL, NULL),
(2516, '0', 63, 31, NULL, NULL),
(2517, '0', 63, 32, NULL, NULL),
(2518, '0', 63, 33, NULL, NULL),
(2519, '0', 63, 27, NULL, NULL),
(2520, '0', 63, 28, NULL, NULL),
(2521, '3', 63, 118, NULL, '2019-06-24 14:55:22'),
(2522, '0', 63, 117, NULL, NULL),
(2523, '0', 63, 116, NULL, NULL),
(2524, '0', 63, 115, NULL, NULL),
(2525, '0', 63, 114, NULL, NULL),
(2526, '3', 63, 113, NULL, '2019-06-24 15:09:24'),
(2527, '10', 63, 112, NULL, '2019-06-24 14:56:20'),
(2528, '5', 63, 111, NULL, '2019-06-24 14:56:20'),
(2529, '0', 63, 110, NULL, NULL),
(2530, '4', 63, 109, NULL, '2019-06-24 14:55:35'),
(2531, '0', 63, 108, NULL, NULL),
(2532, '0', 63, 107, NULL, NULL),
(2533, '0', 63, 106, NULL, NULL),
(2534, '0', 63, 105, NULL, NULL),
(2535, '0', 63, 104, NULL, NULL),
(2536, '0', 63, 103, NULL, NULL),
(2537, '0', 63, 102, NULL, NULL),
(2538, '0', 63, 101, NULL, NULL),
(2539, '5', 63, 100, NULL, '2019-06-24 14:55:19'),
(2540, '4', 63, 99, NULL, '2019-06-24 14:55:13'),
(2541, '0', 63, 98, NULL, NULL),
(2542, '0', 63, 97, NULL, NULL),
(2543, '0', 63, 83, NULL, NULL),
(2544, '0', 63, 84, NULL, NULL),
(2545, '0', 63, 85, NULL, NULL),
(2546, '0', 63, 86, NULL, NULL),
(2547, '0', 63, 87, NULL, NULL),
(2548, '0', 63, 88, NULL, NULL),
(2549, '0', 63, 89, NULL, NULL),
(2550, '0', 63, 90, NULL, NULL),
(2551, '0', 63, 91, NULL, NULL),
(2552, '2', 63, 92, NULL, '2019-06-24 14:55:52'),
(2553, '3', 63, 93, NULL, '2019-06-24 14:55:49'),
(2554, '3', 63, 94, NULL, '2019-06-24 14:55:47'),
(2555, '0', 63, 95, NULL, NULL),
(2556, '0', 63, 96, NULL, NULL),
(2557, '5', 63, 54, NULL, '2019-06-24 14:54:48'),
(2558, '2', 63, 53, NULL, '2019-06-24 14:54:51'),
(2559, '4', 63, 52, NULL, '2019-06-24 14:54:52'),
(2560, '3', 63, 51, NULL, '2019-06-24 14:54:38'),
(2561, '5', 63, 50, NULL, '2019-06-24 14:54:42'),
(2562, '4', 63, 49, NULL, '2019-06-24 14:54:46'),
(2563, '5', 63, 48, NULL, '2019-06-24 14:54:29'),
(2564, '5', 63, 47, NULL, '2019-06-24 14:54:32'),
(2565, '3', 63, 46, NULL, '2019-06-24 14:54:34'),
(2566, '5', 63, 41, NULL, NULL),
(2567, '5', 63, 40, NULL, NULL),
(2568, '0', 63, 24, NULL, NULL),
(2569, '0', 63, 25, NULL, NULL),
(2570, '0', 63, 26, NULL, NULL),
(2571, '0', 63, 21, NULL, NULL),
(2572, '0', 63, 22, NULL, NULL),
(2573, '0', 63, 23, NULL, NULL),
(2574, '0', 63, 19, NULL, NULL),
(2575, '0', 63, 20, NULL, NULL),
(2576, '0', 63, 18, NULL, NULL),
(2577, '0', 63, 17, NULL, NULL),
(2578, '0', 63, 16, NULL, NULL),
(2579, '0', 63, 15, NULL, NULL),
(2580, '0', 63, 14, NULL, NULL),
(2581, '0', 63, 13, NULL, NULL),
(2582, '0', 63, 12, NULL, NULL),
(2583, '0', 63, 11, NULL, NULL),
(2584, '0', 63, 8, NULL, NULL),
(2585, '0', 63, 9, NULL, NULL),
(2586, '0', 63, 10, NULL, NULL),
(2587, '0', 63, 5, NULL, NULL),
(2588, '0', 63, 6, NULL, NULL),
(2589, '0', 63, 7, NULL, NULL),
(2590, '3', 63, 1, NULL, '2019-06-24 14:55:00'),
(2591, '3', 63, 2, NULL, '2019-06-24 14:55:02'),
(2592, '3', 63, 3, NULL, '2019-06-24 14:55:07'),
(2593, '0', 63, 4, NULL, NULL),
(2594, '0', 64, 39, NULL, NULL),
(2595, '0', 64, 38, NULL, NULL),
(2596, '0', 64, 37, NULL, NULL),
(2597, '0', 64, 36, NULL, NULL),
(2598, '0', 64, 35, NULL, NULL),
(2599, '0', 64, 34, NULL, NULL),
(2600, '0', 64, 30, NULL, NULL),
(2601, '0', 64, 29, NULL, NULL),
(2602, '0', 64, 31, NULL, NULL),
(2603, '0', 64, 32, NULL, NULL),
(2604, '0', 64, 33, NULL, NULL),
(2605, '0', 64, 27, NULL, NULL),
(2606, '0', 64, 28, NULL, NULL),
(2607, '2', 64, 118, NULL, '2019-06-25 16:50:23'),
(2608, '0', 64, 117, NULL, NULL),
(2609, '5', 64, 116, NULL, '2019-06-25 16:51:03'),
(2610, '3', 64, 115, NULL, '2019-06-25 16:51:05'),
(2611, '5', 64, 114, NULL, '2019-06-25 16:51:10'),
(2612, '0', 64, 113, NULL, '2019-06-25 16:51:39'),
(2613, '10', 64, 112, NULL, '2019-06-25 16:51:39'),
(2614, '5', 64, 111, NULL, '2019-06-25 16:51:39'),
(2615, '0', 64, 110, NULL, NULL),
(2616, '0', 64, 109, NULL, NULL),
(2617, '0', 64, 108, NULL, NULL),
(2618, '0', 64, 107, NULL, NULL),
(2619, '0', 64, 106, NULL, NULL),
(2620, '0', 64, 105, NULL, NULL),
(2621, '0', 64, 104, NULL, NULL),
(2622, '0', 64, 103, NULL, NULL),
(2623, '0', 64, 102, NULL, NULL),
(2624, '0', 64, 101, NULL, NULL),
(2625, '3', 64, 100, NULL, '2019-06-25 16:50:28'),
(2626, '0', 64, 99, NULL, NULL),
(2627, '0', 64, 98, NULL, NULL),
(2628, '0', 64, 97, NULL, NULL),
(2629, '0', 64, 83, NULL, NULL),
(2630, '0', 64, 84, NULL, NULL),
(2631, '0', 64, 85, NULL, NULL),
(2632, '0', 64, 86, NULL, NULL),
(2633, '0', 64, 87, NULL, NULL),
(2634, '0', 64, 88, NULL, NULL),
(2635, '0', 64, 89, NULL, NULL),
(2636, '0', 64, 90, NULL, NULL),
(2637, '0', 64, 91, NULL, NULL),
(2638, '0', 64, 92, NULL, NULL),
(2639, '3', 64, 93, NULL, '2019-06-25 16:51:18'),
(2640, '5', 64, 94, NULL, '2019-06-25 16:50:40'),
(2641, '5', 64, 95, NULL, '2019-06-25 16:50:36'),
(2642, '0', 64, 96, NULL, NULL),
(2643, '3', 64, 54, NULL, '2019-06-25 16:50:18'),
(2644, '4', 64, 53, NULL, '2019-06-25 16:50:16'),
(2645, '3', 64, 52, NULL, '2019-06-25 16:50:21'),
(2646, '3', 64, 51, NULL, '2019-06-25 16:50:08'),
(2647, '3', 64, 50, NULL, '2019-06-25 16:50:10'),
(2648, '3', 64, 49, NULL, '2019-06-25 16:50:13'),
(2649, '3', 64, 48, NULL, '2019-06-25 16:49:54'),
(2650, '3', 64, 47, NULL, '2019-06-25 16:50:01'),
(2651, '3', 64, 46, NULL, '2019-06-25 16:50:04'),
(2652, '5', 64, 41, NULL, NULL),
(2653, '5', 64, 40, NULL, NULL),
(2654, '0', 64, 24, NULL, NULL),
(2655, '0', 64, 25, NULL, NULL),
(2656, '0', 64, 26, NULL, NULL),
(2657, '0', 64, 21, NULL, NULL),
(2658, '0', 64, 22, NULL, NULL),
(2659, '0', 64, 23, NULL, NULL),
(2660, '0', 64, 19, NULL, NULL),
(2661, '0', 64, 20, NULL, NULL),
(2662, '0', 64, 18, NULL, NULL),
(2663, '0', 64, 17, NULL, NULL),
(2664, '0', 64, 16, NULL, NULL),
(2665, '0', 64, 15, NULL, NULL),
(2666, '0', 64, 14, NULL, NULL),
(2667, '0', 64, 13, NULL, NULL),
(2668, '0', 64, 12, NULL, NULL),
(2669, '0', 64, 11, NULL, NULL),
(2670, '0', 64, 8, NULL, NULL),
(2671, '0', 64, 9, NULL, NULL),
(2672, '0', 64, 10, NULL, NULL),
(2673, '3', 64, 5, NULL, '2019-06-25 16:50:58'),
(2674, '3', 64, 6, NULL, '2019-06-25 16:50:55'),
(2675, '0', 64, 7, NULL, NULL),
(2676, '0', 64, 1, NULL, NULL),
(2677, '0', 64, 2, NULL, NULL),
(2678, '0', 64, 3, NULL, NULL),
(2679, '3', 64, 4, NULL, '2019-06-25 16:50:49'),
(2680, '0', 65, 39, NULL, NULL),
(2681, '0', 65, 38, NULL, NULL),
(2682, '0', 65, 37, NULL, NULL),
(2683, '0', 65, 36, NULL, NULL),
(2684, '0', 65, 35, NULL, NULL),
(2685, '0', 65, 34, NULL, NULL),
(2686, '0', 65, 30, NULL, NULL),
(2687, '0', 65, 29, NULL, NULL),
(2688, '0', 65, 31, NULL, NULL),
(2689, '0', 65, 32, NULL, NULL),
(2690, '0', 65, 33, NULL, NULL),
(2691, '0', 65, 27, NULL, NULL),
(2692, '0', 65, 28, NULL, NULL),
(2693, '0', 65, 118, NULL, NULL),
(2694, '0', 65, 117, NULL, NULL),
(2695, '0', 65, 116, NULL, NULL),
(2696, '0', 65, 115, NULL, NULL),
(2697, '0', 65, 114, NULL, NULL),
(2698, '0', 65, 113, NULL, NULL),
(2699, '0', 65, 112, NULL, NULL),
(2700, '0', 65, 111, NULL, NULL),
(2701, '0', 65, 110, NULL, NULL),
(2702, '0', 65, 109, NULL, NULL),
(2703, '0', 65, 108, NULL, NULL),
(2704, '0', 65, 107, NULL, NULL),
(2705, '0', 65, 106, NULL, NULL),
(2706, '0', 65, 105, NULL, NULL),
(2707, '0', 65, 104, NULL, NULL),
(2708, '0', 65, 103, NULL, NULL),
(2709, '0', 65, 102, NULL, NULL),
(2710, '0', 65, 101, NULL, NULL),
(2711, '0', 65, 100, NULL, NULL),
(2712, '0', 65, 99, NULL, NULL),
(2713, '0', 65, 98, NULL, NULL),
(2714, '0', 65, 97, NULL, NULL),
(2715, '0', 65, 83, NULL, NULL),
(2716, '0', 65, 84, NULL, NULL),
(2717, '0', 65, 85, NULL, NULL),
(2718, '0', 65, 86, NULL, NULL),
(2719, '0', 65, 87, NULL, NULL),
(2720, '0', 65, 88, NULL, NULL),
(2721, '0', 65, 89, NULL, NULL),
(2722, '0', 65, 90, NULL, NULL),
(2723, '0', 65, 91, NULL, NULL),
(2724, '0', 65, 92, NULL, NULL),
(2725, '0', 65, 93, NULL, NULL),
(2726, '0', 65, 94, NULL, NULL),
(2727, '0', 65, 95, NULL, NULL),
(2728, '0', 65, 96, NULL, NULL),
(2729, '1', 65, 54, NULL, NULL),
(2730, '1', 65, 53, NULL, NULL),
(2731, '1', 65, 52, NULL, NULL),
(2732, '1', 65, 51, NULL, NULL),
(2733, '1', 65, 50, NULL, NULL),
(2734, '1', 65, 49, NULL, NULL),
(2735, '1', 65, 48, NULL, NULL),
(2736, '1', 65, 47, NULL, NULL),
(2737, '1', 65, 46, NULL, NULL),
(2738, '5', 65, 41, NULL, NULL),
(2739, '5', 65, 40, NULL, NULL),
(2740, '0', 65, 24, NULL, NULL),
(2741, '0', 65, 25, NULL, NULL),
(2742, '0', 65, 26, NULL, NULL),
(2743, '0', 65, 21, NULL, NULL),
(2744, '0', 65, 22, NULL, NULL),
(2745, '0', 65, 23, NULL, NULL),
(2746, '0', 65, 19, NULL, NULL),
(2747, '0', 65, 20, NULL, NULL),
(2748, '0', 65, 18, NULL, NULL),
(2749, '0', 65, 17, NULL, NULL),
(2750, '0', 65, 16, NULL, NULL),
(2751, '0', 65, 15, NULL, NULL),
(2752, '0', 65, 14, NULL, NULL),
(2753, '0', 65, 13, NULL, NULL),
(2754, '0', 65, 12, NULL, NULL),
(2755, '0', 65, 11, NULL, NULL),
(2756, '0', 65, 8, NULL, NULL),
(2757, '0', 65, 9, NULL, NULL),
(2758, '0', 65, 10, NULL, NULL),
(2759, '0', 65, 5, NULL, NULL),
(2760, '0', 65, 6, NULL, NULL),
(2761, '0', 65, 7, NULL, NULL),
(2762, '0', 65, 1, NULL, NULL),
(2763, '0', 65, 2, NULL, NULL),
(2764, '0', 65, 3, NULL, NULL),
(2765, '0', 65, 4, NULL, NULL),
(2766, '0', 66, 234, NULL, NULL),
(2767, '0', 66, 233, NULL, NULL),
(2768, '0', 66, 232, NULL, NULL),
(2769, '0', 66, 231, NULL, NULL),
(2770, '0', 66, 230, NULL, NULL),
(2771, '0', 66, 229, NULL, NULL),
(2772, '0', 66, 228, NULL, NULL),
(2773, '0', 66, 227, NULL, NULL),
(2774, '0', 66, 226, NULL, NULL),
(2775, '0', 66, 225, NULL, NULL),
(2776, '1', 66, 224, NULL, '2019-06-26 21:10:40'),
(2777, '0', 66, 222, NULL, NULL),
(2778, '0', 66, 223, NULL, NULL),
(2779, '0', 66, 221, NULL, '2019-06-26 21:34:59'),
(2780, '0', 66, 220, NULL, NULL),
(2781, '0', 66, 217, NULL, NULL),
(2782, '0', 66, 218, NULL, NULL),
(2783, '0', 66, 216, NULL, NULL),
(2784, '0', 66, 214, NULL, NULL),
(2785, '0', 66, 213, NULL, NULL),
(2786, '3', 66, 208, NULL, '2019-06-26 21:09:20'),
(2787, '0', 66, 206, NULL, NULL),
(2788, '2', 66, 200, NULL, '2019-06-26 21:08:46'),
(2789, '4', 66, 198, NULL, '2019-06-26 21:08:50'),
(2790, '3', 66, 197, NULL, '2019-06-26 21:08:54'),
(2791, '2', 66, 195, NULL, '2019-06-26 21:08:57'),
(2792, '0', 66, 193, NULL, NULL),
(2793, '0', 66, 191, NULL, NULL),
(2794, '4', 66, 190, NULL, '2019-06-26 21:08:25'),
(2795, '3', 66, 188, NULL, '2019-06-26 21:08:28'),
(2796, '4', 66, 183, NULL, '2019-06-26 21:08:01'),
(2797, '0', 66, 164, NULL, NULL),
(2798, '0', 66, 161, NULL, NULL),
(2799, '0', 66, 160, NULL, NULL),
(2800, '0', 66, 159, NULL, NULL),
(2801, '4', 66, 158, NULL, '2019-06-26 21:09:16'),
(2802, '0', 66, 157, NULL, NULL),
(2803, '0', 66, 156, NULL, NULL),
(2804, '4', 66, 153, NULL, '2019-06-26 21:09:04'),
(2805, '3', 66, 154, NULL, '2019-06-26 21:09:30'),
(2806, '3', 66, 152, NULL, '2019-06-26 21:09:08'),
(2807, '0', 66, 150, NULL, NULL),
(2808, '0', 66, 151, NULL, NULL),
(2809, '0', 66, 145, NULL, NULL),
(2810, '0', 66, 148, NULL, NULL),
(2811, '5', 66, 143, NULL, '2019-06-26 21:09:33'),
(2812, '0', 66, 141, NULL, NULL),
(2813, '1', 66, 138, NULL, '2019-06-26 21:08:37'),
(2814, '5', 66, 136, NULL, '2019-06-26 21:08:11'),
(2815, '4', 66, 135, NULL, '2019-06-26 21:08:13'),
(2816, '5', 66, 134, NULL, '2019-06-26 21:08:19'),
(2817, '5', 66, 133, NULL, '2019-06-26 21:08:05'),
(2818, '5', 66, 131, NULL, '2019-06-26 21:08:07'),
(2819, '0', 66, 130, NULL, NULL),
(2820, '0', 66, 129, NULL, NULL),
(2821, '0', 66, 128, NULL, NULL),
(2822, '5', 66, 127, NULL, NULL),
(2823, '5', 66, 126, NULL, NULL),
(2824, '5', 66, 125, NULL, NULL),
(2825, '0', 66, 124, NULL, NULL),
(2826, '0', 66, 123, NULL, NULL),
(2827, '0', 66, 122, NULL, NULL),
(2828, '0', 66, 121, NULL, NULL),
(2829, '0', 66, 120, NULL, NULL),
(2830, '0', 66, 119, NULL, NULL),
(2831, '0', 66, 235, NULL, NULL),
(2832, '0', 66, 236, NULL, NULL),
(2833, '0', 66, 237, NULL, NULL),
(2834, '0', 66, 238, NULL, NULL),
(2835, '0', 66, 239, NULL, NULL),
(2836, '0', 66, 240, NULL, NULL),
(2837, '0', 66, 241, NULL, NULL),
(2838, '1', 66, 242, NULL, '2019-06-26 21:10:40'),
(2839, '0', 66, 243, NULL, NULL),
(2840, '0', 66, 244, NULL, NULL),
(2841, '0', 66, 245, NULL, NULL),
(2842, '0', 66, 246, NULL, NULL),
(2843, '0', 66, 247, NULL, NULL),
(2844, '0', 66, 248, NULL, NULL),
(2845, '0', 66, 249, NULL, NULL),
(2846, '0', 66, 250, NULL, NULL),
(2847, '0', 66, 251, NULL, NULL),
(2848, '1', 66, 252, NULL, '2019-06-26 21:10:40'),
(2849, '0', 66, 253, NULL, NULL),
(2850, '0', 66, 254, NULL, NULL),
(2851, '0', 66, 255, NULL, NULL),
(2852, '0', 66, 256, NULL, NULL),
(2853, '0', 66, 257, NULL, NULL),
(2854, '0', 66, 258, NULL, NULL),
(2855, '0', 66, 259, NULL, NULL),
(2856, '0', 66, 260, NULL, NULL),
(2857, '0', 66, 261, NULL, NULL),
(2858, '0', 66, 262, NULL, NULL),
(2859, '0', 66, 263, NULL, NULL),
(2860, '0', 66, 264, NULL, NULL),
(2861, '0', 66, 265, NULL, NULL),
(2862, '0', 66, 266, NULL, NULL),
(2863, '0', 66, 267, NULL, NULL),
(2864, '0', 66, 268, NULL, NULL),
(2865, '0', 66, 269, NULL, NULL),
(2866, '0', 67, 39, NULL, NULL),
(2867, '0', 67, 38, NULL, NULL),
(2868, '0', 67, 37, NULL, NULL),
(2869, '0', 67, 36, NULL, NULL),
(2870, '0', 67, 35, NULL, NULL),
(2871, '0', 67, 34, NULL, NULL),
(2872, '0', 67, 30, NULL, NULL),
(2873, '0', 67, 29, NULL, NULL),
(2874, '0', 67, 31, NULL, NULL),
(2875, '0', 67, 32, NULL, NULL),
(2876, '0', 67, 33, NULL, NULL),
(2877, '0', 67, 27, NULL, NULL),
(2878, '0', 67, 28, NULL, NULL),
(2879, '0', 67, 118, NULL, NULL),
(2880, '0', 67, 117, NULL, NULL),
(2881, '0', 67, 116, NULL, NULL),
(2882, '0', 67, 115, NULL, NULL),
(2883, '0', 67, 114, NULL, NULL),
(2884, '0', 67, 113, NULL, NULL),
(2885, '0', 67, 112, NULL, NULL),
(2886, '0', 67, 111, NULL, NULL),
(2887, '0', 67, 110, NULL, NULL),
(2888, '0', 67, 109, NULL, NULL),
(2889, '0', 67, 108, NULL, NULL),
(2890, '0', 67, 107, NULL, NULL),
(2891, '0', 67, 106, NULL, NULL),
(2892, '0', 67, 105, NULL, NULL),
(2893, '0', 67, 104, NULL, NULL),
(2894, '0', 67, 103, NULL, NULL),
(2895, '0', 67, 102, NULL, NULL),
(2896, '0', 67, 101, NULL, NULL),
(2897, '0', 67, 100, NULL, NULL),
(2898, '0', 67, 99, NULL, NULL),
(2899, '0', 67, 98, NULL, NULL),
(2900, '0', 67, 97, NULL, NULL),
(2901, '0', 67, 83, NULL, NULL),
(2902, '0', 67, 84, NULL, NULL),
(2903, '0', 67, 85, NULL, NULL),
(2904, '0', 67, 86, NULL, NULL),
(2905, '0', 67, 87, NULL, NULL),
(2906, '0', 67, 88, NULL, NULL),
(2907, '0', 67, 89, NULL, NULL),
(2908, '0', 67, 90, NULL, NULL),
(2909, '0', 67, 91, NULL, NULL),
(2910, '0', 67, 92, NULL, NULL),
(2911, '0', 67, 93, NULL, NULL),
(2912, '0', 67, 94, NULL, NULL),
(2913, '0', 67, 95, NULL, NULL),
(2914, '0', 67, 96, NULL, NULL),
(2915, '1', 67, 54, NULL, NULL),
(2916, '1', 67, 53, NULL, NULL),
(2917, '1', 67, 52, NULL, NULL),
(2918, '1', 67, 51, NULL, NULL),
(2919, '1', 67, 50, NULL, NULL),
(2920, '1', 67, 49, NULL, NULL),
(2921, '1', 67, 48, NULL, '2019-06-27 17:26:41'),
(2922, '1', 67, 47, NULL, NULL),
(2923, '1', 67, 46, NULL, NULL),
(2924, '5', 67, 41, NULL, NULL),
(2925, '5', 67, 40, NULL, NULL),
(2926, '0', 67, 24, NULL, NULL),
(2927, '0', 67, 25, NULL, NULL),
(2928, '0', 67, 26, NULL, NULL),
(2929, '0', 67, 21, NULL, NULL),
(2930, '0', 67, 22, NULL, NULL),
(2931, '0', 67, 23, NULL, NULL),
(2932, '0', 67, 19, NULL, NULL),
(2933, '0', 67, 20, NULL, NULL),
(2934, '0', 67, 18, NULL, NULL),
(2935, '0', 67, 17, NULL, NULL),
(2936, '0', 67, 16, NULL, NULL),
(2937, '0', 67, 15, NULL, NULL),
(2938, '0', 67, 14, NULL, NULL),
(2939, '0', 67, 13, NULL, NULL),
(2940, '0', 67, 12, NULL, NULL),
(2941, '0', 67, 11, NULL, NULL),
(2942, '0', 67, 8, NULL, NULL),
(2943, '0', 67, 9, NULL, NULL),
(2944, '0', 67, 10, NULL, NULL),
(2945, '0', 67, 5, NULL, NULL),
(2946, '0', 67, 6, NULL, NULL),
(2947, '0', 67, 7, NULL, NULL),
(2948, '0', 67, 1, NULL, NULL),
(2949, '0', 67, 2, NULL, NULL),
(2950, '0', 67, 3, NULL, NULL),
(2951, '0', 67, 4, NULL, NULL);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `augurio`
--
ALTER TABLE `augurio`
  ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Índices de tabela `caracteristica`
--
ALTER TABLE `caracteristica`
  ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Índices de tabela `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Índices de tabela `comum`
--
ALTER TABLE `comum`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cronica`
--
ALTER TABLE `cronica`
  ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Índices de tabela `ficha`
--
ALTER TABLE `ficha`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `fichaUser`
--
ALTER TABLE `fichaUser`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `postagem`
--
ALTER TABLE `postagem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `raca`
--
ALTER TABLE `raca`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `valor`
--
ALTER TABLE `valor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `augurio`
--
ALTER TABLE `augurio`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de tabela `caracteristica`
--
ALTER TABLE `caracteristica`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=270;
--
-- AUTO_INCREMENT de tabela `chat`
--
ALTER TABLE `chat`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `classe`
--
ALTER TABLE `classe`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `comum`
--
ALTER TABLE `comum`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de tabela `cronica`
--
ALTER TABLE `cronica`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de tabela `ficha`
--
ALTER TABLE `ficha`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT de tabela `fichaUser`
--
ALTER TABLE `fichaUser`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT de tabela `postagem`
--
ALTER TABLE `postagem`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT de tabela `raca`
--
ALTER TABLE `raca`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de tabela `valor`
--
ALTER TABLE `valor`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2952;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
