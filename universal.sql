-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2016 at 07:39 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `configs`
--

INSERT INTO `configs` (`id`, `site_name`, `slogan_name`, `slogan_show`, `keywords`, `description`, `site_title`, `bg_color`, `hf_color`, `side_color`, `main_color`, `font_color`) VALUES
(1, 'Մեխանիկա', 'Գիտությունների ազգային ակադեմիայի տեղեկագիր', 1, 'news, breaking news, all nes1', '                   news news news news.   1                 ', 'այաստանի Գիտությունների ազգային ակադեմիայի տեղեկագիր', '#eeeeee', '#222222', '#42bdcc', '#ffffff', '#1a1918');

-- --------------------------------------------------------

--
-- Table structure for table `fb_config`
--

CREATE TABLE IF NOT EXISTS `fb_config` (
`id` int(11) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `contact` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fb_config`
--

INSERT INTO `fb_config` (`id`, `latitude`, `longitude`, `contact`) VALUES
(1, 40.19199, 44.508561, '<p><strong>Հայաստանի Գիտությունների ազգային ակադեմիա</strong><br />\r\n<strong>Հասցե`</strong> Բաղրամյան պող. 24/2 , Երևան, 0019, ՀՀ<br />\r\n<strong>Հեռախոս`</strong> +374 10 524 802<br />\r\n<strong>Էլ-փոստ`</strong> journalmechanics@mechins.sci.am</p>\r\n');

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ID`, `fname`, `mail`, `header`, `description`) VALUES
(6, '&lt;h1&gt; aram &lt;/h1&gt;', '19ara@gmmm.cmm', 'sads', 'sadas'),
(7, 'Aram', '19aram91JJ@rtr.uu', 'skds', 'dr dfdg fd gdf f  fd gfdgfd dfg fdg df fdg fdg fdg dfg gfd fd gfd dfg fd fdf gfdg'),
(9, 'rtyrty', 'rtyrt@et.ty', 'rtyrt', 'rtyrty'),
(11, 'sdfsd', '19adasd@mail.ru', 'sdfsd', 'sdfsdf'),
(12, 'Aram', 'Manukan@kjl.ru', 'jhk', 'jk hjksd hfjksdf hjksfsd');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
`ID` int(11) NOT NULL,
  `src` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`ID`, `description`) VALUES
(1, '<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:100%">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<h4>ԽՄԲԱԳՐԱԿԱՆ ԿՈԼԵԳԻԱ</h4>\r\n\r\n			<p><strong>Համբարձումյան Ս. Ա.</strong> (պատվավոր խմբագիր),<strong> Ավետիսյան Ա. Ս.,</strong> (գլխավոր խմբագիր), <strong>Հակոբյան Վ. Ն.</strong> (գլխավոր խմբագրի տեղակալ), <strong>Աղալովյան Լ. Ա., Բաղդասարյան Գ. Ե., Բելուբեկյան Մ. Վ., Գրիգորյան Է. Խ., Ղուկասյան Ա. Ա., Մխիթարյան Ս. Մ., Սահակյան Ա.Վ., Սարգսյան Ս. Վ., Սարգսյան Ս. Հ, </strong></p>\r\n\r\n			<h4>ՄԻՋԱԶԳԱՅԻՆ ԽՄԲԱԳՐԱԿԱՆ ԽՈՐՀՈՒՐԴ</h4>\r\n\r\n			<p><strong>Հարությունյան Ռ.Ա.</strong> (Ռուսաստան),<strong> Հասանյան Դ.Ջ.</strong> (ԱՄՆ), <strong>Ատկոչյունաս Յ.</strong>(Լիտվա),<strong>Գաչկևիչ Ա.Ռ.</strong>(Ուկրաինա), <strong>Կապլունով Յու.Դ. </strong> (Մեծ Բրիտանիա),<strong> Կուդիշ Ի.Ի.</strong> (ԱՄՆ), <strong>Կուկուջանով Ս.Ն.</strong>(Վրաստան), <strong>Մանժիրով Ա.Վ.</strong>(Ռուսաստան), <strong>Մարզոկա Պ.</strong>(ԱՄՆ),<strong>Մինետյան Լ.</strong>(ԱՄՆ),<strong> Սեյրանյան Ա.Պ.</strong>(Ռուսաստան),<strong> Սումբատյան Մ.Ա.</strong>(Ռուսաստան), <strong> Տեր-Կյուրեղյան Ա.</strong>(ԱՄՆ),<strong> Տեր-Մարտիրոսյան Զ.Գ., </strong>(Ռուսաստան)<strong> </strong> <strong>Չառլետա Մ.</strong> (Իտալիա)</p>\r\n\r\n			<p>Տեխնիկական խմբագիր` <strong>Գևորգյան Գ. Զ. </strong><br />\r\n			Պատասխանատու քարտուղար` <strong>Ավդալյան Ժ. Ա.</strong><br />\r\n			<br />\r\n			Հայաստանի Հանրապետություն, Երևան, 0019<br />\r\n			Բաղրամյան պող. 24/2, Հեռ. 52-48-02,<br />\r\n			Email: <a href="mailto:journalmechanics@mechins.sci.am">journalmechanics@mechins.sci.am</a><br />\r\n			URL:<a href="http://www.flib.sci.am/eng/Mech/" target="_blank">http://www.flib.sci.am/eng/Mech </a></p>\r\n\r\n			<h4>РЕДАКЦИОННАЯ КОЛЛЕГИЯ</h4>\r\n\r\n			<p><strong>Амбарцумян С. А.</strong> (почетный редактор), <strong> Аветисян А. С</strong> (главный редактор), <strong>Акопян В. Н.</strong> (зам.главного редактора),<strong> Агаловян Л. А.,</strong><strong> Багдасарян Г. Е.,</strong><strong> Белубекян М. В.,</strong><strong> Григорян Э. Х.,</strong><strong> Гукасян А. А., </strong><strong>Мхитарян С. М., Саакян А.В., </strong><strong>Саркисян С. В.,</strong><strong> Саркисян С. О.</strong></p>\r\n\r\n			<h3>МЕЖДУНАРОДНЫЙ РЕДАКЦИОННЫЙ СОВЕТ</h3>\r\n\r\n			<p><strong>Арутюнян Р.А.</strong> (Россия),<strong> Асанян Д.Дж.</strong>(США),<strong> Аткочюнас Ю.</strong>(Литва),<strong>Гачкевич А.Р.</strong>(Украина), <strong> Каплунов Ю.Д. </strong> (Великобритания),<strong>Кудиш И.И. </strong>(США),<strong> Кукуджанов С.Н.</strong>(Грузия),<strong> Манжиров А.В.</strong>(Россия), <strong> Марзока П. </strong>(США),<strong>Минетян Л.</strong> (США), <strong> Сейранян А.П.</strong>(Россия),<strong> Сумбатян М.А.</strong> (Россия),<strong> Тер-Кюрегян А.</strong>(США), <strong><strong>Тер-Мартиросян З.Г. </strong>(Россия)<strong>,</strong> <strong>&nbsp;</strong>Чарлетта М.</strong>(Италия)</p>\r\n\r\n			<p>Технический редактор:<strong> Геворкян Г. З.</strong><br />\r\n			Ответственный секретарь: <strong>Авдалян Ж. А.</strong><br />\r\n			<br />\r\n			Республика Армения, Ереван, 0019<br />\r\n			пр. Баграмяна 24/2 Тел. 52-48-02,<br />\r\n			Email: <a href="mailto:journalmechanics@mechins.sci.am">journalmechanics@mechins.sci.am</a><br />\r\n			URL:<a href="http://www.flib.sci.am/eng/Mech/" target="_blank">http://www.flib.sci.am/eng/Mech </a></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
`ID` int(11) NOT NULL,
  `header` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`ID`, `header`, `description`, `position`) VALUES
(8, 'Կանոններ', '<h3>Правила для авторов</h3>\r\n\r\n<ol start="1">\r\n	<li>Статьи, представляемые в Известиях НАН Армении &ldquo;Механика&rdquo;, должны &nbsp;&nbsp;&nbsp;сопровождаться разрешением на опубликование от учреждения, в котором выполнена работа.</li>\r\n	<li>Статьи представляются на армянском, русском или английском языках в двух экземплярах с указанием УДК. Электронную версию статьи отправить по эл. почте <a href="mailto:journalmechanics@mechins.sci.am">journalmechanics@mechins.sci.am</a></li>\r\n	<li>К статье должны быть приложены краткие аннотации на армянском, русском и английском языках, а также написать ключевые слова на русском и английском языках.</li>\r\n	<li>Для пользователей Microsoft Office Word использовать: текст- формат A4 (слева, справа и снизу-4 см; сверху-3,9 см); Fonts- Times New Roman, Times Armenian; аннотации- 8pt; основной текст- 10pt с интервалом 1; формулы- Mathtype или Equation editor. Для пользователей LaTeX: любой формат.</li>\r\n	<li>Литература (10pt) приводится общим списком в конце статьи</li>\r\n	<li>1. Первый A. Б., Второй В. Г., Название книги, Ереван, Гитутюн, 2015, 500 с.<br />\r\n	2. Первый A. Б., Второй В. Г., Статья // Изв. НАН Армении, Механика, 2015, т. 68, но. 3, с. 5-22.</li>\r\n	<li>В конце статьи должно быть указано полное название учреждения, где выполнена работа.</li>\r\n	<li>При представлении двух&nbsp; или более статей, указывается желательный порядок их опубликования.</li>\r\n	<li>В случае отказа в публикации, редколлегия оставляет за собой право не возвращать автору один экземпляр статьи.</li>\r\n	<li>Статья подписывается автором с указанием его полного адреса, фамилии, имени и отчества, а также номер телефона.</li>\r\n	<li>При наличии нескольких авторов, редколлегия рекомендует фамилии авторов статьи расположить в алфавитном порядке.&nbsp;&nbsp;&nbsp;</li>\r\n</ol>\r\n\r\n<h3>Instructions for Authors</h3>\r\n\r\n<ol start="1">\r\n	<li>The manuscripts submitted to the Mechanics. Proceedings of National Academy of Sciences of Armenia, must be accompanied with permission for its publication from the institution where the research is carried out.</li>\r\n	<li>The manuscripts must be submitted in Armenian, Russian or English (electronic version must be sent to <a href="mailto:journalmechanics@mechins.sci.am">journalmechanics@mechins.sci.am</a></li>\r\n	<li>The manuscript must contain corresponding UDC number, abstracts and key-words (no more than 8) in Armenian, Russian and English.</li>\r\n	<li>For Microsoft Word users: page geometry- A4 (left, right and bottom 4cm, top 3.9cm), Font type: Times New Roman, 10pt (abstracts 8 pt), line-spacing- single, for formulas use MathType or Equation editor Defaults. For LaTeX users: any format.</li>\r\n	<li>The list of references is placed at the end of the article, as follow:</li>\r\n	<li>1. First A. B., Second C. D., Book About the Subject, Yerevan, Gitutyun, 2015, 500 p.<br />\r\n	2. First A. B., Second C. D., About the problem of &quot;cork&quot; // PNAS Armenia, Series Mechanics, 2015, vol. 68, issue 3, pp. 5-22.</li>\r\n	<li>Information about the authors is placed after the list of references.</li>\r\n	<li>In the case of several authors it is recommended to place the authors in alphabetical order.</li>\r\n</ol>\r\n', 1),
(12, 'Հանդեսի մասին', '<table align="center" border="0" cellpadding="0" cellspacing="30" style="height:100%; width:100%">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<h3>Հանդեսի մասին</h3>\r\n\r\n			<p>&nbsp; Հայաստանի Հանրապետության ԳԱԱ տեղեկագիր &laquo;Մեխանիկա&raquo; հանդեսը լուսաբանում է առաձգականության մաթեմատիկական տեսության, թաղանթների և սալերի տեսության, պլաստիկության, սողքի առաձգամածուցիկության տեսությունների, էլեկտրամագնիսաառաձգականության տեսության, աերոհիդրոմեխանիկայի, շարժման կայունության, շինարարական մեխանիկայի և փորձարարական տեխնիկայի հարցերը:<br />\r\n			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Հանդեսը նախատեսված է գիտնականների, ճարտարագետների, բուհերի դասախոսների, ասպիրանտների և ուսանողների համար:&nbsp; &nbsp;&nbsp;<br />\r\n			&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n\r\n			<h3>О журнале</h3>\r\n			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Известия НАН РА &ldquo;Механика&rdquo; освещает вопросы математической теории упругости, теории оболочек и пластин, теорий пластичности, ползучести и вязкоупругости, теории электромагнитоупругости, аэрогидромеханики, устойчивости движения, строительной механики и техники&nbsp; экспериментирования.<br />\r\n			Журнал рассчитан на научных сотрудников и инженеров, преподавателей вузов, аспирантов и студентов.&nbsp;&nbsp;&nbsp;\r\n			<p>&nbsp;</p>\r\n\r\n			<p><br />\r\n			<strong>Aims and Scopes</strong></p>\r\n\r\n			<p>The Proceedings of National Academy of Sciences of Armenia publishes high quality peer reviewed original papers on mathematical theory of elasticity, theories of plates and shells, theory of plasticity, creep and visco-elasticity, theory of electro-magneto-elasticity, aero-hydro-mechanics, stability of motion, structural mechanics, experimental techniques, etc.</p>\r\n			The journal is intended for scientific researchers, lecturers, graduate and postgraduate students.\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', 2),
(13, 'Խմբագրական խորհուրդ', '<table align="center" border="0" cellpadding="0" cellspacing="30" style="height:100%; width:100%">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<h3>Editorial board</h3>\r\n\r\n			<h3>Ambartsumian S.A. (honorary editor),<br />\r\n			Avetsiyan A.S. (editor-in-chief),<br />\r\n			Hakobyan V.N. (associate editor),<br />\r\n			Aghalovyan L.A.,<br />\r\n			Bagdasaryan G.E.,<br />\r\n			Belubekyan M.V.,<br />\r\n			Grigoryan E.Kh.,<br />\r\n			Ghukasyan A.A.,<br />\r\n			Mkhitaryan S.M.,<br />\r\n			Sahakyan A.V.,<br />\r\n			Sarkisyan S.V.,<br />\r\n			Sarkisyan S. H.</h3>\r\n\r\n			<h3>International advisory board</h3>\r\n\r\n			<h3>Arutyunyan R.A.(Russia),<br />\r\n			Hasanyan D.J. (USA),<br />\r\n			Aktociunas J.(Lithunia),<br />\r\n			Gachkevich (Ukraine),<br />\r\n			Kaplunov J.D. (UK),<br />\r\n			Kudish I.I. (USA),<br />\r\n			Kukudzhanov S.N. (Georgia),<br />\r\n			Manzhirov A.V. (Russia),<br />\r\n			Marzocca P. (USA),<br />\r\n			Minnetyan L. (USA),<br />\r\n			Seyranyan A.P. (Russia),<br />\r\n			Sumbatyan M.A. (Russia),<br />\r\n			Der Kiureghian A.(USA),<br />\r\n			Ter-Martirosyan Z.G. (Russia),<br />\r\n			Ciarletta M. (Italy)</h3>\r\n			<br />\r\n			<br />\r\n			&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', 3),
(15, 'Արխիվ', '<h2><strong>Հայաստանի Գիտությունների ազգային ակադեմիայի տեղեկագիր: Մեխանիկա</strong></h2>\r\n', 4);

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
-- Indexes for table `fb_config`
--
ALTER TABLE `fb_config`
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
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `fb_config`
--
ALTER TABLE `fb_config`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
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
