-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 25, 2015 at 10:28 AM
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
-- Table structure for table `configs`
--

CREATE TABLE IF NOT EXISTS `configs` (
`id` int(11) NOT NULL,
  `site_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `slogan_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `slogan_show` tinyint(4) NOT NULL,
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

INSERT INTO `configs` (`id`, `site_name`, `slogan_name`, `slogan_show`, `site_title`, `bg_color`, `hf_color`, `side_color`, `main_color`, `font_color`) VALUES
(1, 'Breaking news5', 'Breaking news8', 1, 'News news', 'rgba(44,79,62,0.36)', '#32614b', '#d4c9c9', '#704c4c', '#693636');

-- --------------------------------------------------------

--
-- Table structure for table `dreambook`
--

CREATE TABLE IF NOT EXISTS `dreambook` (
`ID` int(11) NOT NULL,
  `header` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL,
  `watch_count` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=27 ;

--
-- Dumping data for table `dreambook`
--

INSERT INTO `dreambook` (`ID`, `header`, `description`, `img`, `watch_count`) VALUES
(13, 'Абрикос', '<p>Абрикосовые сады в Ваших снах означают, что Ваше будущее, хотя и представляется Вам в розовых тонах, все же содержит скрытую печаль.Есть во сне абрикосы - означает приближение неприятных событий. Если другие едят их, то Ваше окружение в реальной жизни не будет соответствовать Вашим склонностям. Друг скажет так: &quot;Абрикосы означают, что Вы расточаете время на пустяки&quot;.</p>\r\n', '55174bc54a7e6abrikos.png', 59),
(14, 'Алтомобиль', '<p>Видеть во сне, что Вы едете в автомобиле, означает Вашу активность и удачливость в делах.Если Вы попали в автомобильную катастрофу, то после такого сна не ожидайте хороших впечатлений от тех развлечений, в которых Вы собираетесь участвовать.Видеть себя удачно избежавшим автомобильной катастрофы - хороший знак: Вам удастся честно избежать столкновения с противником Ваших замыслов.Покупать во сне машину - тоже добрый знак того, что Вы сумеете восстановить свое прежнее хорошее положение, но продавать машину - к неприятным переменам в судьбе.Управлять машиной - предвещает потери, иногда болезни. Быть на ходу выброшенным из автомобиля - к неприятным известиям. Сломанная машина - это тоже сон, предвещающий неудачи.Просто увидеть во сне автомобили - к поездкам, переменам в судьбе, приятным путешествиям.Если Вы видите, что Ваш автомобиль исчез, его угнали, - это означает срыв многих Ваших замыслов, от которых зависит будущее.Выходить - из автомобиля - знак успешного осуществления планов, что принесет Вам заслуженное удовлетворение.</p>\r\n', '55174c6612cccbmw.png', 12),
(16, 'Автор ', '<p>Для автора видеть во сне, что его рукопись отвергнута издателем, означает, что его ожидают некоторые сомнения, но в конечном итоге его работа будет принята.Видеть во сне автора, закончившего свою работу и внимательно просматривающего ее, означает, что у Вас будут неприятности в связи с какой-либо деятельностью.<br />\r\n<br />\r\n&nbsp;</p>\r\n', 'star.png', 5),
(17, 'Адам и Ева', '<p>Видеть во сне Адама и Еву - предвещает неожиданное событие, которое изменит к худшему Ваши дела.Видеть Еву в райском саду со змием, обвившим ее тело, означает, что чье-то вероломство угрожает Вашему счастью. Видеть и слышать, как Ева разговаривает со змием, - предостережение: некая коварная особа, способная запятнать Вашу репутацию, может привести к неудаче и Ваши дела.</p>\r\n', 'star.png', 1),
(18, 'Адвокат ', '<p>Для молодой женщины видеть во сне, что она каким-то образом связана с адвокатом, означает, что она непроизвольно совершит неблагоразумный поступок, который станет объектом ее неблагополучия и оскорбительной критики.Увидеть адвоката в суде предвещает серьезные разногласия по поводу какого-то имущества.Если же во сне адвокат защищает Вас, то такой сон обещает Вам поддержку друзей в трудное для Вас время.Просто увидеть во сне адвоката - говорит о том, что Вы способны и даровиты, а собственное суждение всегда предпочитаете мнениям других. Но все же будьте осторожны в своих оценках.</p>\r\n', 'star.png', 22),
(19, 'Бабушка и дедушка', '<p>Встретить во сне Ваших бабушку и дедушку и беседовать с ними - сулит Вам встречу с затруднениями, которые будет нелегко преодолеть. Однако хороший совет поможет Вам справиться с трудностями.<br />\r\n<br />\r\n&nbsp;</p>\r\n', 'star.png', 0),
(20, 'Балкон ', '<p>Для влюбленных видеть во сне долгое прощание на балконе - предвещает, возможно, окончательное расставание. Видеть балкон - также означает неприятные известия об отсутствующих друзьях.<br />\r\n<br />\r\n&nbsp;</p>\r\n', '55174e62a3e48415_1.png', 9),
(21, 'Бананы ', '<p>Видеть во сне бананы - сулит Вам общение с неинтересным и неприятным компаньоном. Есть бананы - утомительное, но рискованное начинание в делах и навязанные самому себе новые обязанности. Видеть гниющие бананы - значит, что скоро Вы займетесь каким-то неприятным делом. Торговать ими - означает, что скоро Вы увлечетесь бесполезными пустяками.<br />\r\n<br />\r\n&nbsp;</p>\r\n', '55174ebc423f60_7de3a_5602cadb_L.png', 141),
(22, 'Банк ', '<p>Видеть не занятых делом кассиров в банке - предвещает потери, расстройство в делах. Сдавать в банк золотые деньги - означает легкомыслие, небрежность, неосторожность; получить их - огромную прибыль и процветание. Видеть серебро и банкноты, собранные в большом количестве, означает уважение и удачу. Вы будете пользоваться глубочайшим уважением во всех слоях общества.<br />\r\n<br />\r\n&nbsp;</p>\r\n', '55174fbc0f741bank.png', 9),
(23, 'Банкрот', '<p>Если Вам снится сон, в котором Вы не можете расплатиться с долгами и чувствуете себя банкротом, - то в реальной жизни не бойтесь угрозы с этой стороны. Напротив, Ваша энергия и уверенность в себе позволяет Вам наилучшим образом организовать свои дела. Однако иные тревоги могут смутить Вашу душу. Если Вы видите банкротами других, то это означает, что наяву Вам встретятся люди благородные, честные в делах, хотя, возможно, излишней откровенностью они могут Вам навредить. Молодой особе этот сон обещает небольшую размолвку с любимым, виной чему разность их взглядов.</p>\r\n', 'star.png', 15),
(24, 'Барабан ', '<p>Слышать во сне приглушенные звуки барабана - означает, что Ваш отсутствующий друг находится в беде и призывает Вас на помощь. Видеть барабан - предсказывает Вам чье-то дружелюбие, ровные доброжелательные отношения. Для моряков и рыбаков - это знамение удачи и процветания, то же - для крестьян и занятых в торговле.<br />\r\n<br />\r\n&nbsp;</p>\r\n', '5517507f76bb3061f8b6694511ae1d7c54fbe8c4f47aa.png', 5),
(25, 'Барсук ', '<p>Видеть во сне барсука - предвещает удачу после долгого сражения с судьбой.<br />\r\n<br />\r\n&nbsp;</p>\r\n', '551750f46565c110674092_2.png', 72),
(26, 'Бархат ', '<p>Видеть во сне бархат - к очень успешным делам. Если Вы носите бархат, Вас ждет известность. Видеть старый бархат - означает, что Ваше благополучие пострадает из-за Вашей чрезмерной гордости. Если молодая женщина видит себя в бархатном платье - ее ждут почести. Несколько состоятельных поклонников будут оказывать ей свое внимание.</p>\r\n', 'star.png', 0);

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
(8, '&lt;h1&gt; aram &lt;/h1&gt;', 'dasdas@ds.rt', 'sadas', 'fdsafdsfsd'),
(9, 'rtyrty', 'rtyrt@et.ty', 'rtyrt', 'rtyrty'),
(10, 'sdfdasf', 'asdas@das.ty', 'asdasdasd', 'asdasdas'),
(11, 'sdfsd', '19adasd@mail.ru', 'sdfsd', 'sdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
`ID` int(11) NOT NULL,
  `src` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`ID`, `src`) VALUES
(9, '5514861359a30123456.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
`ID` int(11) NOT NULL,
  `header` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`ID`, `header`, `description`, `position`) VALUES
(5, 'Сны и знаки Зодиака', '<p style="text-align:justify"><strong>Рыбы, Раки, Скорпионы</strong></p>\r\n\r\n<p style="text-align:justify">Водная троица по праву считается владыкой снов. К ночным откровениям этих знаков нужно прислушиваться всем. Сны же у них могут быть самыми разными - от конкретных до совершенно размытых.</p>\r\n\r\n<p style="text-align:justify">Особенно характерно это для Рыб, главного сонного оракула зодиака, способного растолковать самые запутанные видения. Вещие сны Рыб могут быть связаны с любовью, детьми, а также различными выигрышами.</p>\r\n\r\n<p style="text-align:justify">Что касается Рака, то ему нужно обратить внимание на сны о путешествиях и дальних странах. Вероятно, к вещим &quot;рачьим&quot; снам примешается религия и карьерные вопросы. Все эти сны имеют большое значение и для Скорпиона, только в его видениях прослеживается научно-образовательный уклон. Прислушивайтесь к снам об экзаменах, диссертациях и книгах.</p>\r\n\r\n<p style="text-align:justify"><strong>Близнецы, Весы, Водолеи</strong></p>\r\n\r\n<p style="text-align:justify">Рациональные воздушные знаки обычно в сновидениях не очень сильны, однако стоит обращать внимание на сны-прогнозы, касающиеся взаимоотношений. Также значение имеют сны, наполненные символами, схемами, буквами, цифрами. С ними связаны главные вести от Морфея.</p>\r\n\r\n<p style="text-align:justify">Воздушным знакам можно посоветовать: если вы долго бьетесь над какой-нибудь задачкой - ложитесь спать, глядишь, во сне придет решение. В первую очередь это относится к Близнецам: они держат первенство по конкретным снам, которые можно реализовать на практике.</p>\r\n\r\n<p style="text-align:justify">Не обделены и Весы, которых ждут еще и любовные сны о суженом-ряженом. Вне конкуренции Водолей: готовьтесь к изобретениям и открытиям во сне, возможны даже космические откровения свыше.</p>\r\n\r\n<p style="text-align:justify"><strong>Львы, Овны, Стрельцы</strong></p>\r\n\r\n<p style="text-align:justify">Богатая фантазия огненных знаков может заказать на сон грядущий любое кино. Надо только как следует&nbsp;&nbsp; размечтаться, буквально загипнотизировав себя, и далее - смотреть во сне развитие событий.</p>\r\n\r\n<p style="text-align:justify">Вещие сны огненных знаков связаны прежде всего с ними самими, а также с великими людьми (например, властителями, полководцами или деятелями искусства). Значимы для вас видения пламени, источников света, сверкающих предметов.</p>\r\n\r\n<p style="text-align:justify">На гребне сонной волны находятся Львы, однако их золотые сны часто обманчивы. Им нужно чаще прислушиваться к сновидениям своей половины. Куда более качественный урожай снов собирают Овны и Стрельцы. Помимо ночных откровений о любви и карьере, науках и путешествиях, они способны принять во сне пророчества мирового масштаба!</p>\r\n\r\n<p style="text-align:justify"><strong>Тельцы, Девы, Козероги</strong></p>\r\n\r\n<p style="text-align:justify">Вообще-то земные знаки вниманием Морфея неизбалованы: зачем практичным людям задумываться о своих снах? Обычно, среди значимых сюжетов у Тельца фигурируют пища и одежда, у Девы - книги и разные мелочи, у Козерога - строения и орудия труда. И, разумеется, все видят во сне растения, животных и человеческое тело.</p>\r\n\r\n<p style="text-align:justify">Так что земным знакам нужно изучать соответствующие разделы сонников. Кстати, если кто-то из этой компании сомневается насчет предстоящей покупки, пусть закажет себе сон: может, увидит подсказку. Классические сны земных знаков тесно связаны с реальными делами, поэтому иногда земная троица поражает точностью сонного предвидения. Как говорится, редко - да метко.</p>\r\n', 1),
(7, 'Сны по числам месяца', '<p>1-e. Cны в этoт дeнь иcпoлняютcя в тoчнocти и пpeдзнaмeнyют дoбpoe.&nbsp;<br />\r\n2-e. Cны пycтыe и ничeгo нe знaчaщиe.&nbsp;<br />\r\n3-e. Cны быcтpo иcпoлнимыe.&nbsp;<br />\r\n4-e. Cны cбывaютcя нecкopo.&nbsp;<br />\r\n5-e. Cны xopoшeгo знaчeния.&nbsp;<br />\r\n6-e. Cны cбывaютcя, нo нecкopo.&nbsp;<br />\r\n7-e. Cны cчacтливыe, нo нe cлeдyeт никoмy o ниx paccкaзывaть.&nbsp;<br />\r\n8-e. Cны вeдyт к иcпoлнeнию жeлaния.&nbsp;<br />\r\n9-e. Cны cбывaютcя и cкopo oбeщaют ycпex.&nbsp;<br />\r\n10-e Cны cбывaютcя, нo вeдyт к нeпpиятнocтям.&nbsp;<br />\r\n11-e Cны cбывaютcя в тeчeниe 11-ти днeй и вeдyт к paдocти.&nbsp;<br />\r\n12-e Cны быcтpo и блaгoпpиятнo иcпoлняютcя.&nbsp;<br />\r\n13-e Cны вeдyт к нeпpиятнocтям.&nbsp;<br />\r\n14-e Cны нeyдaчны.&nbsp;<br />\r\n15-e Cны cбyдyтcя cкopo и oчeнь блaгoпpиятнo.&nbsp;<br />\r\n16-e Cны нe cбывaютcя и никaкoгo знaчeния нe имeют.&nbsp;<br />\r\n17-e Cны oбeщaют ycпex и иcпoлняютcя в тeчeниe двaдцaти днeй.&nbsp;<br />\r\n18-e Cны вeдyт к пpибыли и oбнoвкaм.&nbsp;<br />\r\n19-e Cны вeдyт к ceмeйным нeпpятнocтям.&nbsp;<br />\r\n20-e Cны cкopo иcпoлняютcя.&nbsp;<br />\r\n<br />\r\n25-e Cны лжи и oбмaнa.&nbsp;<br />\r\n26-e Cны yдoвoльcтвия и зaбaвы.&nbsp;<br />\r\n27-e Cны бeccмыcлeнны, бecцвeтны и никaкoгo знaчeния нe имeют.&nbsp;<br />\r\n28-e Cны oбeщaют нeкoтopыe зaтpyднeния и cбывaютcя в тeчeниe 30-ти днeй.&nbsp;<br />\r\n29-e Cны нe иcпoлняютcя.&nbsp;<br />\r\n30-e Cны фaнтacтичны и нe вceгдa и нe cкopo cбывaютcя.&nbsp;<br />\r\n31-e Cны любoвныx пoбeд и нacлaждeний cбывaютcя в тeчeниe 15-ти днeй.</p>\r\n', 2);

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
(1, '<h1 class="main-header">&nbsp; Сонник: история появления</h1>\r\n\r\n<p><img alt="" src="http://127.0.0.1/sonnik_new/img/files/5514861359a30123456.jpg" style="border-style:solid; border-width:2px; float:left; height:180px; line-height:20.7999992370605px; margin-left:5px; margin-right:5px; width:200px" /></p>\r\n\r\n<p style="text-align:justify">Использование сонников в последнее время приняло массовый характер. Как правило, около 50% женщин время от времени используют сонник или гадания для того, чтобы узнать значение своего сновидения. Большинство женщин также используют сонник, когда требуется принять ответственное решение. Но, как известно, сонник стал популярен задолго до нашего современного мира.</p>\r\n\r\n<p style="text-align:justify">Человечество всегда интересовала загадочная и необъяснимая природа сновидений. Толковать сны пытались еще более 40 веков назад&nbsp;&mdash; в Египте. Конечно же, это были не те сонники, которые мы привыкли держать в руках. В те далекие времена, в эпоху фараонов, использовали услуги жрецов, которые, как принято было считать, имели связь с потусторонним миром и могли объяснить необъяснимые и сверхъестественные явления, которые были неподвластны обычным смертным.</p>\r\n\r\n<p style="text-align:justify">Чуть позже на смену жрецам пришли маги и прорицатели, которые практически ничем не отличались от древних жрецов. Лишь после революции, в начале 19 века стали появляться первые сонники в том виде, к которым мы привыкли сейчас. Они представляли собой обычные книги, в которых можно было найти значения и толкование снов.</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `configs`
--
ALTER TABLE `configs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dreambook`
--
ALTER TABLE `dreambook`
 ADD PRIMARY KEY (`ID`);

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
-- Indexes for table `info`
--
ALTER TABLE `info`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `main`
--
ALTER TABLE `main`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dreambook`
--
ALTER TABLE `dreambook`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `main`
--
ALTER TABLE `main`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;