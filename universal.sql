-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 19, 2016 at 02:38 PM
-- Server version: 5.6.20-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `universal`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
`ID` int(11) NOT NULL,
  `header` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL,
  `watch_count` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=27 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`ID`, `header`, `description`, `img`, `watch_count`) VALUES
(13, 'Абрикос', '<p>Абрикосовые сады в Ваших снах означают, что Ваше будущее, хотя и представляется Вам в розовых тонах, все же содержит скрытую печаль.Есть во сне абрикосы - означает приближение неприятных событий. Если другие едят их, то Ваше окружение в реальной жизни не будет соответствовать Вашим склонностям. Друг скажет так: &quot;Абрикосы означают, что Вы расточаете время на пустяки&quot;.</p>\r\n', '55174bc54a7e6abrikos.png', 61),
(14, 'Алтомобиль', '<p>Видеть во сне, что Вы едете в автомобиле, означает Вашу активность и удачливость в делах.Если Вы попали в автомобильную катастрофу, то после такого сна не ожидайте хороших впечатлений от тех развлечений, в которых Вы собираетесь участвовать.Видеть себя удачно избежавшим автомобильной катастрофы - хороший знак: Вам удастся честно избежать столкновения с противником Ваших замыслов.Покупать во сне машину - тоже добрый знак того, что Вы сумеете восстановить свое прежнее хорошее положение, но продавать машину - к неприятным переменам в судьбе.Управлять машиной - предвещает потери, иногда болезни. Быть на ходу выброшенным из автомобиля - к неприятным известиям. Сломанная машина - это тоже сон, предвещающий неудачи.Просто увидеть во сне автомобили - к поездкам, переменам в судьбе, приятным путешествиям.Если Вы видите, что Ваш автомобиль исчез, его угнали, - это означает срыв многих Ваших замыслов, от которых зависит будущее.Выходить - из автомобиля - знак успешного осуществления планов, что принесет Вам заслуженное удовлетворение.</p>\r\n', '55174c6612cccbmw.png', 14),
(16, 'Автор ', '<p>Для автора видеть во сне, что его рукопись отвергнута издателем, означает, что его ожидают некоторые сомнения, но в конечном итоге его работа будет принята.Видеть во сне автора, закончившего свою работу и внимательно просматривающего ее, означает, что у Вас будут неприятности в связи с какой-либо деятельностью.<br />\r\n<br />\r\n&nbsp;</p>\r\n', 'star.png', 6),
(17, 'Адам и Ева', '<p>Видеть во сне Адама и Еву - предвещает неожиданное событие, которое изменит к худшему Ваши дела.Видеть Еву в райском саду со змием, обвившим ее тело, означает, что чье-то вероломство угрожает Вашему счастью. Видеть и слышать, как Ева разговаривает со змием, - предостережение: некая коварная особа, способная запятнать Вашу репутацию, может привести к неудаче и Ваши дела.</p>\r\n', 'star.png', 1),
(18, 'Адвокат ', '<p>Для молодой женщины видеть во сне, что она каким-то образом связана с адвокатом, означает, что она непроизвольно совершит неблагоразумный поступок, который станет объектом ее неблагополучия и оскорбительной критики.Увидеть адвоката в суде предвещает серьезные разногласия по поводу какого-то имущества.Если же во сне адвокат защищает Вас, то такой сон обещает Вам поддержку друзей в трудное для Вас время.Просто увидеть во сне адвоката - говорит о том, что Вы способны и даровиты, а собственное суждение всегда предпочитаете мнениям других. Но все же будьте осторожны в своих оценках.</p>\r\n', 'star.png', 23),
(21, 'Бананы ', '<p>Видеть во сне бананы - сулит Вам общение с неинтересным и неприятным компаньоном. Есть бананы - утомительное, но рискованное начинание в делах и навязанные самому себе новые обязанности. Видеть гниющие бананы - значит, что скоро Вы займетесь каким-то неприятным делом. Торговать ими - означает, что скоро Вы увлечетесь бесполезными пустяками.<br />\r\n<br />\r\n&nbsp;</p>\r\n', '55174ebc423f60_7de3a_5602cadb_L.png', 149),
(22, 'Банк ', '<p>Видеть не занятых делом кассиров в банке - предвещает потери, расстройство в делах. Сдавать в банк золотые деньги - означает легкомыслие, небрежность, неосторожность; получить их - огромную прибыль и процветание. Видеть серебро и банкноты, собранные в большом количестве, означает уважение и удачу. Вы будете пользоваться глубочайшим уважением во всех слоях общества.<br />\r\n<br />\r\n&nbsp;</p>\r\n', '55174fbc0f741bank.png', 13),
(23, 'Банкрот', '<p>Если Вам снится сон, в котором Вы не можете расплатиться с долгами и чувствуете себя банкротом, - то в реальной жизни не бойтесь угрозы с этой стороны. Напротив, Ваша энергия и уверенность в себе позволяет Вам наилучшим образом организовать свои дела. Однако иные тревоги могут смутить Вашу душу. Если Вы видите банкротами других, то это означает, что наяву Вам встретятся люди благородные, честные в делах, хотя, возможно, излишней откровенностью они могут Вам навредить. Молодой особе этот сон обещает небольшую размолвку с любимым, виной чему разность их взглядов.</p>\r\n', 'star.png', 17),
(24, 'Барабан 23', '<p>Слышать во сне приглушенные звуки барабана - означает, что Ваш отсутствующий друг находится в беде и призывает Вас на помощь. Видеть барабан - предсказывает Вам чье-то дружелюбие, ровные доброжелательные отношения. Для моряков и рыбаков - это знамение удачи и процветания, то же - для крестьян и занятых в торговле.29<br />\r\n<br />\r\n&nbsp;</p>\r\n', '568e47fb49b7057722-1.png', 5),
(26, 'for test', '<p>dsadfa sa&nbsp;</p>\r\n', 'noimg.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE IF NOT EXISTS `configs` (
`id` int(11) NOT NULL,
  `site_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `slogan_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `slogan_show` tinyint(4) NOT NULL,
  `keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `site_title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `bg_color` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `hf_color` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `side_color` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `main_color` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `font_color` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `configs`
--

INSERT INTO `configs` (`id`, `site_name`, `slogan_name`, `slogan_show`, `keywords`, `description`, `site_title`, `bg_color`, `hf_color`, `side_color`, `main_color`, `font_color`) VALUES
(1, 'Breaking news1', 'Breaking news81', 1, 'news, breaking news, all nes1', '    news news news news.   1  ', 'News news1', '#1919ba', '#c93684', '#313157', '#344554', '#e0ce2b');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
`ID` int(11) NOT NULL,
  `fname` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `header` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ID`, `fname`, `mail`, `header`, `description`) VALUES
(6, '&lt;h1&gt; aram &lt;/h1&gt;', '19ara@gmmm.cmm', 'sads', 'sadas'),
(7, 'Aram', '19aram91JJ@rtr.uu', 'skds', 'dr dfdg fd gdf f  fd gfdgfd dfg fdg df fdg fdg fdg dfg gfd fd gfd dfg fd fdf gfdg'),
(9, 'rtyrty', 'rtyrt@et.ty', 'rtyrt', 'rtyrty'),
(11, 'sdfsd', '19adasd@mail.ru', 'sdfsd', 'sdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
`ID` int(11) NOT NULL,
  `src` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`ID`, `src`) VALUES
(12, '56c4a3c791fd5check.png');

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

CREATE TABLE IF NOT EXISTS `main` (
`ID` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`ID`, `description`) VALUES
(1, '<h1>&nbsp; Lorem ipsum dolor&nbsp;</h1>\r\n\r\n<p><img alt="" src="http://127.7.7.7/img/files/56c4a3c791fd5check.png" style="border-style:solid; border-width:2px; float:left; height:180px; line-height:20.7999992370605px; margin-left:5px; margin-right:5px; width:200px" /></p>\r\n\r\n<p style="text-align:justify">Oorem ipsum dolor sit amet Lorem ipsum dolor sit amet&nbsp;Lorem ipsum dolor sit amet&nbsp;Lorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit amet</p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
`ID` int(11) NOT NULL,
  `header` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`ID`, `header`, `description`, `position`) VALUES
(8, 'Grish', '<p>asd askj hdaisl djks dljas djkas da asd sad as das as avskjda</p>\r\n\r\n<p>&nbsp;asdlkjalksdakslj daklsdas&nbsp;</p>\r\n\r\n<p><img alt="" src="http://www.buzzlinestravel.co.uk/images/itinerary/gdsf.jpg" style="height:407px; width:1000px" /></p>\r\n\r\n<p>sdf sdf ds fsdf dsf sdf dsf sdf sdf &nbsp;sdf sdf ds fsdf dsf sdf dsf sdf sdf&nbsp;sdf sdf ds fsdf dsf sdf dsf sdf sdf&nbsp;sdf sdf ds fsdf dsf sdf dsf sdf sdf&nbsp;sdf sdf ds fsdf dsf sdf dsf sdf sdf&nbsp;</p>\r\n\r\n<p>sdf sdf ds fsdf dsf sdf dsf sdf sdf&nbsp;sdf sdf ds fsdf dsf sdf dsf sdf sdf&nbsp;sdf sdf ds fsdf dsf sdf dsf sdf sdf&nbsp;sdf sdf ds fsdf dsf sdf dsf sdf sdf&nbsp;</p>\r\n\r\n<p>sdf sdf ds fsdf dsf sdf dsf sdf sdf&nbsp;sdf sdf ds fsdf dsf sdf dsf sdf sdf&nbsp;sdf sdf ds fsdf dsf sdf dsf sdf sdf&nbsp;sdf sdf ds fsdf dsf sdf dsf sdf sdf&nbsp;</p>\r\n\r\n<p>sdf sdf ds fsdf dsf sdf dsf sdf sdf&nbsp;sdf sdf ds fsdf dsf sdf dsf sdf sdf&nbsp;sdf sdf ds fsdf dsf sdf dsf sdf sdf&nbsp;sdf sdf ds fsdf dsf sdf dsf sdf sdf&nbsp;sdf sdf ds fsdf dsf sdf dsf sdf sdf&nbsp;</p>\r\n\r\n<p>sdf sdf ds fsdf dsf sdf dsf sdf sdf&nbsp;sdf sdf ds fsdf dsf sdf dsf sdf sdf&nbsp;sdf sdf ds fsdf dsf sdf dsf sdf sdf&nbsp;</p>\r\n', 0),
(9, 'Gurgen', '<p><em><strong>fdgdf </strong></em>df d gd<u>f gdfgdfg df</u></p>\r\n\r\n<p><u>fghfghfgdsfs d</u></p>\r\n\r\n<p><u>sdf sdf sd fsdfsd fsd sdffs dsf sdf<img alt="devil" src="http://127.7.7.7/plugins/ckeditor/plugins/smiley/images/devil_smile.png" style="height:23px; width:23px" title="devil" /></u></p>\r\n', 0),
(12, 'page1', '<p>&nbsp;kasd askdl aslkd asfha sfajkfh uef haj fasjkfhasjk asjkldh asjdka sdjksa hdjkashfueif has fdjsakfhasf hsauh sajk hasjhfsajkfhsajkf asj jakfhs ajkfhajhfeu fhajfn mfasj.aipyfrea uajkshfd sa euifye alkjhfd ajkhfdasjkh eu alsh jasfhalk ue lajhf jal fhajkryeu alkjhf jas fheu hal hsajlfkah uealf hasjh fjlakeyf uealjfheu fal fhajdfhealk fael&nbsp;</p>\r\n', 3),
(13, 'Ima Robot', '<p><span style="font-family:roboto,arial,sans-serif">Video for Ima Robot&#39;s &quot;Greenback Boogie&quot;&nbsp;</span></p>\r\n\r\n<p><iframe allowfullscreen="" frameborder="0" height="360" src="//www.youtube.com/embed/Slgj96aXgQk" width="640"></iframe></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="line-height:1.6">Shakira la tortura</span></p>\r\n\r\n<p><iframe allowfullscreen="" frameborder="0" height="360" src="//www.youtube.com/embed/Dsp_8Lm1eSk" width="640"></iframe></p>\r\n\r\n<p>&nbsp;</p>\r\n', 1),
(14, 'imgs', '<p><img alt="" src="http://127.7.7.7/img/files/56c4a3c791fd5check.png" style="height:355px; width:250px" /><img alt="" src="http://127.7.7.7/img/files/56c4a3c791fd5check.png" style="height:355px; line-height:20.8px; width:250px" /><img alt="" src="http://127.7.7.7/img/files/56c4a3c791fd5check.png" style="height:355px; line-height:20.8px; width:250px" /></p>\r\n\r\n<p><img alt="" src="http://127.7.7.7/img/files/56c4a3c791fd5check.png" style="height:355px; line-height:20.8px; width:250px" /><img alt="" src="http://127.7.7.7/img/files/56c4a3c791fd5check.png" style="height:355px; line-height:20.8px; width:250px" /><img alt="" src="http://127.7.7.7/img/files/56c4a3c791fd5check.png" style="height:355px; line-height:20.8px; width:250px" /></p>\r\n', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `configs`
--
ALTER TABLE `configs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `main`
--
ALTER TABLE `main`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `main`
--
ALTER TABLE `main`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
