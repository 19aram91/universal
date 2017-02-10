-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Фев 10 2017 г., 10:15
-- Версия сервера: 10.1.16-MariaDB
-- Версия PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `universal`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL,
  `created` date NOT NULL,
  `watch_count` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `img`, `created`, `watch_count`) VALUES
(1, '576c1fa229719gems.jpg', '2016-06-23', 15);

-- --------------------------------------------------------

--
-- Структура таблицы `article_dic`
--

CREATE TABLE `article_dic` (
  `ad_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `lang` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `header` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `info_text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `article_dic`
--

INSERT INTO `article_dic` (`ad_id`, `article_id`, `lang`, `header`, `info_text`) VALUES
(1, 1, 'am', 'adfasfsf Armenian', '<p>sd fsdf sd fsdf sd fsd fsd fs&nbsp;<strong>Armenian&nbsp;Armenian</strong></p>\r\n'),
(2, 1, 'ru', ' sd fsd fsd sd Russion', '<p>&nbsp;sdfsd fsd &nbsp;<strong>Russion</strong></p>\r\n'),
(3, 1, 'en', 'd fsd fsd ds', '<p>ds fsd sd sd</p>\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `color_scheme`
--

CREATE TABLE `color_scheme` (
  `id` int(11) NOT NULL,
  `bg_color` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hf_color` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `side_color` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `main_color` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `font_color` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `color_scheme`
--

INSERT INTO `color_scheme` (`id`, `bg_color`, `hf_color`, `side_color`, `main_color`, `font_color`) VALUES
(1, '#28b53e', '#2a425e', '#c91414', '#5e3333', '#09080a');

-- --------------------------------------------------------

--
-- Структура таблицы `configs`
--

CREATE TABLE `configs` (
  `id` int(11) NOT NULL,
  `slogan_show` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `configs`
--

INSERT INTO `configs` (`id`, `slogan_show`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `configs_dic`
--

CREATE TABLE `configs_dic` (
  `id` int(11) NOT NULL,
  `lang` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `site_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slogan_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keywords` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `site_title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `configs_dic`
--

INSERT INTO `configs_dic` (`id`, `lang`, `site_name`, `slogan_name`, `keywords`, `description`, `site_title`) VALUES
(1, 'am', 'Մեխանիկա', 'Գիտությունների ազգային ակադեմիայի տեղեկագիր', 'տեղեկագիր,  Գիտությունների ազգային ակադեմիա', '     Գիտությունների ազգային ակադեմիայի տեղեկագիր       ', 'հայաստանի Գիտությունների ազգային ակադեմիայի տեղեկագիր'),
(2, 'ru', 'механика', 'естник Национальной академии наук', 'Вестник, Национальной академии наук', '    естник Национальной академии наук    ', 'Вестник Национальной академии наук Армении'),
(3, 'en', 'mechanics', 'Bulletin of the National Academy of Sciences', 'mechanics 123', '    Bulletin of the National Academy of Sciences     000     ', 'Bulletin of the National Academy of Sciences');

-- --------------------------------------------------------

--
-- Структура таблицы `fb_config`
--

CREATE TABLE `fb_config` (
  `id` int(11) NOT NULL,
  `lang` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `contact` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `fb_config`
--

INSERT INTO `fb_config` (`id`, `lang`, `latitude`, `longitude`, `contact`) VALUES
(1, 'am', 40.19199, 44.508561, '<p><span style="color:rgb(0, 0, 0); font-family:times new roman; font-size:small">Հայաստանի Հանրապետություն, Երևան, 0019</span><br />\r\n<span style="color:rgb(0, 0, 0); font-family:times new roman; font-size:small">Բաղրամյան պող. 24/2, Հեռ. 52-48-02,&nbsp;</span><br />\r\n<span style="color:rgb(0, 0, 0); font-family:times new roman; font-size:small">Email:&nbsp;</span><a href="mailto:journalmechanics@mechins.sci.am" style="font-family: ''Times New Roman''; font-size: small; line-height: normal;">journalmechanics@mechins.sci.am</a><br />\r\n<span style="color:rgb(0, 0, 0); font-family:times new roman; font-size:small">URL:</span><a href="http://www.flib.sci.am/eng/Mech/" style="font-family: ''Times New Roman''; font-size: small; line-height: normal;" target="_blank">http://www.flib.sci.am/eng/Mech</a></p>\r\n'),
(2, 'ru', 40.19199, 44.508561, '<p><span style="color:rgb(0, 0, 0); font-family:times new roman; font-size:small">Республика Армения, Ереван, 0019</span><br />\r\n<span style="color:rgb(0, 0, 0); font-family:times new roman; font-size:small">пр. Баграмяна 24/2 Тел. 52-48-02,&nbsp;</span><br />\r\n<span style="color:rgb(0, 0, 0); font-family:times new roman; font-size:small">Email:&nbsp;</span><a href="mailto:journalmechanics@mechins.sci.am" style="font-family: ''Times New Roman''; font-size: small; line-height: normal;">journalmechanics@mechins.sci.am</a><br />\r\n<span style="color:rgb(0, 0, 0); font-family:times new roman; font-size:small">URL:</span><a href="http://www.flib.sci.am/eng/Mech/" style="font-family: ''Times New Roman''; font-size: small; line-height: normal;" target="_blank">http://www.flib.sci.am/eng/Mech</a></p>\r\n'),
(3, 'en', 40.19199, 44.508561, '<p><span style="color:rgb(0, 0, 0); font-family:times new roman; font-size:small">The Republic of Armenia, Yerevan, 0019 </span><br />\r\n<span style="color:rgb(0, 0, 0); font-family:times new roman; font-size:small">Baghramyan Ave., 24/2,&nbsp;</span><span style="color:rgb(0, 0, 0); font-family:times new roman; font-size:small"> tel. 52-48-02&nbsp;</span><br />\r\n<span style="color:rgb(0, 0, 0); font-family:times new roman; font-size:small">Email:&nbsp;</span><a href="mailto:journalmechanics@mechins.sci.am" style="font-family: ''Times New Roman''; font-size: small; line-height: normal;">journalmechanics@mechins.sci.am</a><br />\r\n<span style="color:rgb(0, 0, 0); font-family:times new roman; font-size:small">URL:</span><a href="http://www.flib.sci.am/eng/Mech/" style="font-family: ''Times New Roman''; font-size: small; line-height: normal;" target="_blank">http://www.flib.sci.am/eng/Mech</a></p>\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `ID` int(11) NOT NULL,
  `fname` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `header` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`ID`, `fname`, `mail`, `header`, `description`) VALUES
(6, '&lt;h1&gt; aram &lt;/h1&gt;', '19ara@gmmm.cmm', 'sads', 'sadas'),
(7, 'Aram', '19aram91JJ@rtr.uu', 'skds', 'dr dfdg fd gdf f  fd gfdgfd dfg fdg df fdg fdg fdg dfg gfd fd gfd dfg fd fdf gfdg'),
(9, 'rtyrty', 'rtyrt@et.ty', 'rtyrt', 'rtyrty'),
(11, 'sdfsd', '19adasd@mail.ru', 'sdfsd', 'sdfsdf'),
(12, 'Aram', 'Manukan@kjl.ru', 'jhk', 'jk hjksd hfjksdf hjksfsd');

-- --------------------------------------------------------

--
-- Структура таблицы `files`
--

CREATE TABLE `files` (
  `ID` int(11) NOT NULL,
  `src` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `files`
--

INSERT INTO `files` (`ID`, `src`) VALUES
(12, '56c4a3c791fd5check.png');

-- --------------------------------------------------------

--
-- Структура таблицы `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `code` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `flag` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `languages`
--

INSERT INTO `languages` (`id`, `code`, `name`, `flag`) VALUES
(6, 'am', 'Armenian', '56ec206f69466am.gif'),
(7, 'ru', 'Russion', '56ec20895acffrus.jpg'),
(8, 'en', 'English', '56ec5eac8bb67en.png');

-- --------------------------------------------------------

--
-- Структура таблицы `main`
--

CREATE TABLE `main` (
  `ID` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `language` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `main`
--

INSERT INTO `main` (`ID`, `description`, `language`) VALUES
(23, '<h4>ԽՄԲԱԳՐԱԿԱՆ ԿՈԼԵԳԻԱ</h4>\r\n\r\n<p><strong>Համբարձումյան Ս. Ա.</strong>&nbsp;(պատվավոր խմբագիր),<strong>&nbsp;Ավետիսյան Ա. Ս.,</strong>&nbsp;(գլխավոր խմբագիր),&nbsp;<strong>Հակոբյան Վ. Ն.</strong>&nbsp;(գլխավոր խմբագրի տեղակալ),&nbsp;<strong>Աղալովյան Լ. Ա., Բաղդասարյան Գ. Ե., Բելուբեկյան Մ. Վ., Գրիգորյան Է. Խ., Ղուկասյան Ա. Ա., Մխիթարյան Ս. Մ., Սահակյան Ա.Վ., Սարգսյան Ս. Վ., Սարգսյան Ս. Հ,</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<hr />\r\n<p>&nbsp;</p>\r\n\r\n<h4>ՄԻՋԱԶԳԱՅԻՆ ԽՄԲԱԳՐԱԿԱՆ ԽՈՐՀՈՒՐԴ</h4>\r\n\r\n<p><strong>Հարությունյան Ռ.Ա.</strong>&nbsp;(Ռուսաստան),<strong>Հասանյան Դ.Ջ.</strong>&nbsp;(ԱՄՆ),&nbsp;<strong>Ատկոչյունաս Յ.</strong>(Լիտվա),<strong>Գաչկևիչ Ա.Ռ.</strong>(Ուկրաինա),<strong>Կապլունով Յու.Դ.&nbsp;</strong>(Մեծ Բրիտանիա),<strong>Կուդիշ Ի.Ի.</strong>&nbsp;(ԱՄՆ),&nbsp;<strong>Կուկուջանով Ս.Ն.</strong>(Վրաստան),&nbsp;<strong>Մանժիրով Ա.Վ.</strong>(Ռուսաստան),&nbsp;<strong>Մարզոկա Պ.</strong>(ԱՄՆ),<strong>Մինետյան Լ.</strong>(ԱՄՆ),<strong>&nbsp;Սեյրանյան Ա.Պ.</strong>(Ռուսաստան),<strong>&nbsp;Սումբատյան Մ.Ա.</strong>(Ռուսաստան),&nbsp;<strong>Տեր-Կյուրեղյան Ա.</strong>(ԱՄՆ),<strong>&nbsp;Տեր-Մարտիրոսյան Զ.Գ.,</strong>(Ռուսաստան)<strong>&nbsp;</strong><strong>Չառլետա Մ.</strong>&nbsp;(Իտալիա)</p>\r\n\r\n<p>Տեխնիկական խմբագիր`&nbsp;<strong>Գևորգյան Գ. Զ.&nbsp;</strong><br />\r\nՊատասխանատու քարտուղար`<strong>Ավդալյան Ժ. Ա.</strong><br />\r\n<br />\r\nՀայաստանի Հանրապետություն, Երևան, 0019<br />\r\nԲաղրամյան պող. 24/2, Հեռ. 52-48-02,&nbsp;<br />\r\nEmail:&nbsp;<a href="mailto:journalmechanics@mechins.sci.am">journalmechanics@mechins.sci.am</a><br />\r\nURL:<a href="http://www.flib.sci.am/eng/Mech/" target="_blank">http://www.flib.sci.am/eng/Mech</a></p>\r\n', 'am'),
(24, '<h4>РЕДАКЦИОННАЯ КОЛЛЕГИЯ</h4>\r\n\r\n<p><strong>Амбарцумян С. А.</strong>&nbsp;(почетный редактор),<strong>Аветисян А. С</strong>&nbsp;(главный редактор),<strong>Акопян В. Н.</strong>&nbsp;(зам.главного редактора),<strong>Агаловян Л. А.,</strong><strong>&nbsp;Багдасарян Г. Е.,</strong><strong>Белубекян М. В.,</strong><strong>&nbsp;Григорян Э. Х.,</strong><strong>Гукасян А. А.,&nbsp;</strong><strong>Мхитарян С. М., Саакян А.В.,&nbsp;</strong><strong>Саркисян С. В.,</strong><strong>&nbsp;Саркисян С. О.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<hr />\r\n<p>&nbsp;</p>\r\n\r\n<h3>МЕЖДУНАРОДНЫЙ РЕДАКЦИОННЫЙ СОВЕТ</h3>\r\n\r\n<p><strong>Арутюнян Р.А.</strong>&nbsp;(Россия),<strong>&nbsp;Асанян Д.Дж.</strong>(США),<strong>&nbsp;Аткочюнас Ю.</strong>(Литва),<strong>Гачкевич А.Р.</strong>(Украина),&nbsp;<strong>Каплунов Ю.Д.</strong>(Великобритания),<strong>Кудиш И.И.&nbsp;</strong>(США),<strong>Кукуджанов С.Н.</strong>(Грузия),<strong>&nbsp;Манжиров А.В.</strong>(Россия),&nbsp;<strong>Марзока П.</strong>(США),<strong>Минетян Л.</strong>&nbsp;(США),&nbsp;<strong>Сейранян А.П.</strong>(Россия),<strong>&nbsp;Сумбатян М.А.</strong>&nbsp;(Россия),<strong>Тер-Кюрегян А.</strong>(США),&nbsp;<strong><strong>Тер-Мартиросян З.Г.&nbsp;</strong>(Россия)<strong>,</strong>&nbsp;<strong>&nbsp;</strong>Чарлетта М.</strong>(Италия)</p>\r\n\r\n<p>Технический редактор:<strong>&nbsp;Геворкян Г. З.</strong><br />\r\nОтветственный секретарь:&nbsp;<strong>Авдалян Ж. А.</strong><br />\r\n<br />\r\nРеспублика Армения, Ереван, 0019<br />\r\nпр. Баграмяна 24/2 Тел. 52-48-02,&nbsp;<br />\r\nEmail:&nbsp;<a href="mailto:journalmechanics@mechins.sci.am">journalmechanics@mechins.sci.am</a><br />\r\nURL:<a href="http://www.flib.sci.am/eng/Mech/" target="_blank">http://www.flib.sci.am/eng/Mech</a></p>\r\n', 'ru'),
(25, '<h4>РЕДАКЦИОННАЯ КОЛЛЕГИЯ</h4>\r\n\r\n<p><strong>Амбарцумян С. А.</strong>&nbsp;(почетный редактор),<strong>Аветисян А. С</strong>&nbsp;(главный редактор),<strong>Акопян В. Н.</strong>&nbsp;(зам.главного редактора),<strong>Агаловян Л. А.,</strong><strong>&nbsp;Багдасарян Г. Е.,</strong><strong>Белубекян М. В.,</strong><strong>&nbsp;Григорян Э. Х.,</strong><strong>Гукасян А. А.,&nbsp;</strong><strong>Мхитарян С. М., Саакян А.В.,&nbsp;</strong><strong>Саркисян С. В.,</strong><strong>&nbsp;Саркисян С. О.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<hr />\r\n<p>&nbsp;</p>\r\n\r\n<h3>МЕЖДУНАРОДНЫЙ РЕДАКЦИОННЫЙ СОВЕТ</h3>\r\n\r\n<p><strong>Арутюнян Р.А.</strong>&nbsp;(Россия),<strong>&nbsp;Асанян Д.Дж.</strong>(США),<strong>&nbsp;Аткочюнас Ю.</strong>(Литва),<strong>Гачкевич А.Р.</strong>(Украина),&nbsp;<strong>Каплунов Ю.Д.</strong>(Великобритания),<strong>Кудиш И.И.&nbsp;</strong>(США),<strong>Кукуджанов С.Н.</strong>(Грузия),<strong>&nbsp;Манжиров А.В.</strong>(Россия),&nbsp;<strong>Марзока П.</strong>(США),<strong>Минетян Л.</strong>&nbsp;(США),&nbsp;<strong>Сейранян А.П.</strong>(Россия),<strong>&nbsp;Сумбатян М.А.</strong>&nbsp;(Россия),<strong>Тер-Кюрегян А.</strong>(США),&nbsp;<strong><strong>Тер-Мартиросян З.Г.&nbsp;</strong>(Россия)<strong>,</strong>&nbsp;<strong>&nbsp;</strong>Чарлетта М.</strong>(Италия)</p>\r\n\r\n<p>Технический редактор:<strong>&nbsp;Геворкян Г. З.</strong><br />\r\nОтветственный секретарь:&nbsp;<strong>Авдалян Ж. А.</strong><br />\r\n<br />\r\nРеспублика Армения, Ереван, 0019<br />\r\nпр. Баграмяна 24/2 Тел. 52-48-02,&nbsp;<br />\r\nEmail:&nbsp;<a href="mailto:journalmechanics@mechins.sci.am">journalmechanics@mechins.sci.am</a><br />\r\nURL:<a href="http://www.flib.sci.am/eng/Mech/" target="_blank">http://www.flib.sci.am/eng/Mech</a></p>\r\n', 'en');

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `ID` int(11) NOT NULL,
  `position` int(11) NOT NULL DEFAULT '0',
  `parent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`ID`, `position`, `parent`) VALUES
(23, 1, 1),
(24, 2, 2),
(25, 3, 3),
(26, 6, 4),
(27, 7, 5),
(28, 0, 0),
(29, 7, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `pages_dic`
--

CREATE TABLE `pages_dic` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `language` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `header` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `parent_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `pages_dic`
--

INSERT INTO `pages_dic` (`id`, `page_id`, `language`, `header`, `description`, `parent_id`) VALUES
(19, 23, 'am', 'Հանդեսի մասին', '<p>&nbsp;Հայաստանի Հանրապետության ԳԱԱ տեղեկագիր &laquo;Մեխանիկա&raquo; հանդեսը լուսաբանում է առաձգականության մաթեմատիկական տեսության, թաղանթների և սալերի տեսության, պլաստիկության, սողքի առաձգամածուցիկության տեսությունների, էլեկտրամագնիսաառաձգականության տեսության, աերոհիդրոմեխանիկայի, շարժման կայունության, շինարարական մեխանիկայի և փորձարարական տեխնիկայի հարցերը:<br />\r\n&nbsp; Հանդեսը նախատեսված է գիտնականների, ճարտարագետների, բուհերի դասախոսների, ասպիրանտների և ուսանողների համար: &nbsp; &nbsp;</p>\r\n', 0),
(20, 23, 'ru', 'О журнале', '<p>&nbsp; Известия НАН РА &ldquo;Механика&rdquo; освещает вопросы математической теории упругости, теории оболочек и пластин, теорий пластичности, ползучести и вязкоупругости, теории электромагнитоупругости, аэрогидромеханики, устойчивости движения, строительной механики и техники&nbsp; экспериментирования.<br />\r\n&nbsp; Журнал рассчитан на научных сотрудников и инженеров, преподавателей вузов, аспирантов и студентов. &nbsp;&nbsp;</p>\r\n', 0),
(21, 23, 'en', 'Aims and Scopes', '<p>The Proceedings of National Academy of Sciences of Armenia publishes high quality peer reviewed original papers on mathematical theory of elasticity, theories of plates and shells, theory of plasticity, creep and visco-elasticity, theory of electro-magneto-elasticity, aero-hydro-mechanics, stability of motion, structural mechanics, experimental techniques, etc.</p>\r\n\r\n<p><span style="color:rgb(0, 0, 0); font-family:times new roman; font-size:medium">The journal is intended for scientific researchers, lecturers, graduate and postgraduate students.</span></p>\r\n', 0),
(22, 24, 'am', 'Խմբագրական խորհուրդը', '<p>Academician Ambartsumian S.A. (honorary editor), Institute of Mechanics, National Academy of Sciences of Armenia&nbsp;<br />\r\nCorresponding Member Avetsiyan A.S. (editor-in-chief), Institute of Mechanics, National Academy of Sciences of Armenia&nbsp;<br />\r\nDr., Prof. Hakobyan V.N. (associate editor), Institute of Mechanics, National Academy of Sciences of Armenia&nbsp;<br />\r\nAcademician Aghalovyan L.A., Institute of Mechanics, National Academy of Sciences of Armenia&nbsp;<br />\r\nAcademician Bagdasaryan G.E., Yerevan State University&nbsp;<br />\r\nProf. Belubekyan M.V., Institute of Mechanics, National Academy of Sciences of Armenia&nbsp;<br />\r\nDr., Prof. Grigoryan E.Kh., Institute of Mechanics, National Academy of Sciences of Armenia&nbsp;<br />\r\nDr., Prof. Ghukasyan A.A., Institute of Mechanics, National Academy of Sciences of Armenia&nbsp;<br />\r\nCorresponding Member Mkhitaryan S.M., Institute of Mechanics, National Academy of Sciences of Armenia&nbsp;<br />\r\nDr., Prof. Sahakyan A.V., Institute of Mechanics, National Academy of Sciences of Armenia<br />\r\nDr., Prof. Sarkisyan S. V., Yerevan State University&nbsp;<br />\r\nCorresponding Member Sarkisyan S. H., Gyumri State Pedagogical University after M. Nalbandyan</p>\r\n\r\n<h4>International advisory board</h4>\r\n\r\n<p>Dr., Prof., Foreign Member of National Academy of Sciences of Armenia Arutyunyan R. A., Saint-Petersburg State University (Russia)&nbsp;<br />\r\nDr., Prof. Hasanyan D.J., University of South Carolina, Columbia, (USA)&nbsp;<br />\r\nDr., Prof. Atkočiūnas J. H., Vilnius Gediminas Technical University (Lithunia)&nbsp;<br />\r\nDr., Prof. Gachkevich A. R., Ya. S. Pidstryhach Institute for Applied Problems of Mechanics and Mathematics (Lviv, Ukraine)&nbsp;<br />\r\nDr., Prof. Kaplunov J. D., School of Information Systems, Computing and Mathematics, Brunel University (UK)&nbsp;<br />\r\nDr., Prof. Kudish I. I., Kettering University (USA)<br />\r\nDr., Prof. Kukudzhanov S. N., Razmadze Mathematical Institute, Georgian Academy of Sciences (Georgia),<br />\r\nDr., Prof., Foreign Member of the National Academy of Sciences of Armenia Manzhirov A. V., Institute for Problems in Mechanics, Russian Academy of Sciences (Russia)&nbsp;<br />\r\nDr., Prof. Marzocca P., Clarkson University (New York, USA)&nbsp;<br />\r\nDr., Prof. Minnetyan L. Clarkson University (New York, USA)&nbsp;<br />\r\nDr., Prof. Seyranyan A. P., Research Institute of Mechanics, Moscow State University (Russia)&nbsp;<br />\r\nDr., Prof. Sumbatyan M. A., Institute of Mathematics, Mechanics and Computer Science, Southern Federal University, Rostov-on-Don (Russia)<br />\r\nDr., Prof. Der Kiureghian A., University of California, Berkeley (USA)&nbsp;<br />\r\nDr., Prof. Ter-Martirosyan Z. G., Moscow State University of Civil Engineering (Russia)&nbsp;<br />\r\nDr., Prof. Ciarletta M., University of Salerno (Italy)</p>\r\n', 0),
(23, 24, 'ru', 'Редакционная коллегия', '<p>Academician Ambartsumian S.A. (honorary editor), Institute of Mechanics, National Academy of Sciences of Armenia&nbsp;<br />\r\nCorresponding Member Avetsiyan A.S. (editor-in-chief), Institute of Mechanics, National Academy of Sciences of Armenia&nbsp;<br />\r\nDr., Prof. Hakobyan V.N. (associate editor), Institute of Mechanics, National Academy of Sciences of Armenia&nbsp;<br />\r\nAcademician Aghalovyan L.A., Institute of Mechanics, National Academy of Sciences of Armenia&nbsp;<br />\r\nAcademician Bagdasaryan G.E., Yerevan State University&nbsp;<br />\r\nProf. Belubekyan M.V., Institute of Mechanics, National Academy of Sciences of Armenia&nbsp;<br />\r\nDr., Prof. Grigoryan E.Kh., Institute of Mechanics, National Academy of Sciences of Armenia&nbsp;<br />\r\nDr., Prof. Ghukasyan A.A., Institute of Mechanics, National Academy of Sciences of Armenia&nbsp;<br />\r\nCorresponding Member Mkhitaryan S.M., Institute of Mechanics, National Academy of Sciences of Armenia&nbsp;<br />\r\nDr., Prof. Sahakyan A.V., Institute of Mechanics, National Academy of Sciences of Armenia<br />\r\nDr., Prof. Sarkisyan S. V., Yerevan State University&nbsp;<br />\r\nCorresponding Member Sarkisyan S. H., Gyumri State Pedagogical University after M. Nalbandyan</p>\r\n\r\n<h4>International advisory board</h4>\r\n\r\n<p>Dr., Prof., Foreign Member of National Academy of Sciences of Armenia Arutyunyan R. A., Saint-Petersburg State University (Russia)&nbsp;<br />\r\nDr., Prof. Hasanyan D.J., University of South Carolina, Columbia, (USA)&nbsp;<br />\r\nDr., Prof. Atkočiūnas J. H., Vilnius Gediminas Technical University (Lithunia)&nbsp;<br />\r\nDr., Prof. Gachkevich A. R., Ya. S. Pidstryhach Institute for Applied Problems of Mechanics and Mathematics (Lviv, Ukraine)&nbsp;<br />\r\nDr., Prof. Kaplunov J. D., School of Information Systems, Computing and Mathematics, Brunel University (UK)&nbsp;<br />\r\nDr., Prof. Kudish I. I., Kettering University (USA)<br />\r\nDr., Prof. Kukudzhanov S. N., Razmadze Mathematical Institute, Georgian Academy of Sciences (Georgia),<br />\r\nDr., Prof., Foreign Member of the National Academy of Sciences of Armenia Manzhirov A. V., Institute for Problems in Mechanics, Russian Academy of Sciences (Russia)&nbsp;<br />\r\nDr., Prof. Marzocca P., Clarkson University (New York, USA)&nbsp;<br />\r\nDr., Prof. Minnetyan L. Clarkson University (New York, USA)&nbsp;<br />\r\nDr., Prof. Seyranyan A. P., Research Institute of Mechanics, Moscow State University (Russia)&nbsp;<br />\r\nDr., Prof. Sumbatyan M. A., Institute of Mathematics, Mechanics and Computer Science, Southern Federal University, Rostov-on-Don (Russia)<br />\r\nDr., Prof. Der Kiureghian A., University of California, Berkeley (USA)&nbsp;<br />\r\nDr., Prof. Ter-Martirosyan Z. G., Moscow State University of Civil Engineering (Russia)&nbsp;<br />\r\nDr., Prof. Ciarletta M., University of Salerno (Italy)</p>\r\n', 0),
(24, 24, 'en', 'Editorial board', '<p>Academician Ambartsumian S.A. (honorary editor), Institute of Mechanics, National Academy of Sciences of Armenia&nbsp;<br />\r\nCorresponding Member Avetsiyan A.S. (editor-in-chief), Institute of Mechanics, National Academy of Sciences of Armenia&nbsp;<br />\r\nDr., Prof. Hakobyan V.N. (associate editor), Institute of Mechanics, National Academy of Sciences of Armenia&nbsp;<br />\r\nAcademician Aghalovyan L.A., Institute of Mechanics, National Academy of Sciences of Armenia&nbsp;<br />\r\nAcademician Bagdasaryan G.E., Yerevan State University&nbsp;<br />\r\nProf. Belubekyan M.V., Institute of Mechanics, National Academy of Sciences of Armenia&nbsp;<br />\r\nDr., Prof. Grigoryan E.Kh., Institute of Mechanics, National Academy of Sciences of Armenia&nbsp;<br />\r\nDr., Prof. Ghukasyan A.A., Institute of Mechanics, National Academy of Sciences of Armenia&nbsp;<br />\r\nCorresponding Member Mkhitaryan S.M., Institute of Mechanics, National Academy of Sciences of Armenia&nbsp;<br />\r\nDr., Prof. Sahakyan A.V., Institute of Mechanics, National Academy of Sciences of Armenia<br />\r\nDr., Prof. Sarkisyan S. V., Yerevan State University&nbsp;<br />\r\nCorresponding Member Sarkisyan S. H., Gyumri State Pedagogical University after M. Nalbandyan</p>\r\n\r\n<h4>International advisory board</h4>\r\n\r\n<p>Dr., Prof., Foreign Member of National Academy of Sciences of Armenia Arutyunyan R. A., Saint-Petersburg State University (Russia)&nbsp;<br />\r\nDr., Prof. Hasanyan D.J., University of South Carolina, Columbia, (USA)&nbsp;<br />\r\nDr., Prof. Atkočiūnas J. H., Vilnius Gediminas Technical University (Lithunia)&nbsp;<br />\r\nDr., Prof. Gachkevich A. R., Ya. S. Pidstryhach Institute for Applied Problems of Mechanics and Mathematics (Lviv, Ukraine)&nbsp;<br />\r\nDr., Prof. Kaplunov J. D., School of Information Systems, Computing and Mathematics, Brunel University (UK)&nbsp;<br />\r\nDr., Prof. Kudish I. I., Kettering University (USA)<br />\r\nDr., Prof. Kukudzhanov S. N., Razmadze Mathematical Institute, Georgian Academy of Sciences (Georgia),<br />\r\nDr., Prof., Foreign Member of the National Academy of Sciences of Armenia Manzhirov A. V., Institute for Problems in Mechanics, Russian Academy of Sciences (Russia)&nbsp;<br />\r\nDr., Prof. Marzocca P., Clarkson University (New York, USA)&nbsp;<br />\r\nDr., Prof. Minnetyan L. Clarkson University (New York, USA)&nbsp;<br />\r\nDr., Prof. Seyranyan A. P., Research Institute of Mechanics, Moscow State University (Russia)&nbsp;<br />\r\nDr., Prof. Sumbatyan M. A., Institute of Mathematics, Mechanics and Computer Science, Southern Federal University, Rostov-on-Don (Russia)<br />\r\nDr., Prof. Der Kiureghian A., University of California, Berkeley (USA)&nbsp;<br />\r\nDr., Prof. Ter-Martirosyan Z. G., Moscow State University of Civil Engineering (Russia)&nbsp;<br />\r\nDr., Prof. Ciarletta M., University of Salerno (Italy)</p>\r\n', 0),
(25, 25, 'am', 'Հեղինակներին', '<h4>Instructions for Authors</h4>\r\n\r\n<ol start="1">\r\n	<li>The manuscripts submitted to the Mechanics. Proceedings of National Academy of Sciences of Armenia, must be accompanied with permission for its publication from the institution where the research is carried out.</li>\r\n	<li>The manuscripts must be submitted in Armenian, Russian or English (electronic version must be sent to &nbsp; &nbsp; <a href="mailto:journalmechanics@mechins.sci.am">journalmechanics@mechins.sci.am</a></li>\r\n	<li>The manuscript must contain corresponding UDC number, abstracts and key-words (no more than 8) in Armenian, Russian and English.</li>\r\n	<li>For Microsoft Word users: page geometry- A4 (left, right and bottom 4cm, top 3.9cm), Font type: Times New Roman, 10pt (abstracts 8 pt), line-spacing- single, for formulas use MathType or Equation editor Defaults. For LaTeX users: any format.</li>\r\n	<li>The list of references is placed at the end of the article, as follow:</li>\r\n	<li>1. First A. B., Second C. D., Book About the Subject, Yerevan, Gitutyun, 2015, 500 p.<br />\r\n	2. First A. B., Second C. D., About the problem of &quot;cork&quot; // PNAS Armenia, Series Mechanics, 2015, vol. 68, issue 3, pp. 5-22.</li>\r\n	<li>Information about the authors is placed after the list of references.</li>\r\n	<li>In the case of several authors it is recommended to place the authors in alphabetical order.</li>\r\n</ol>\r\n', 0),
(26, 25, 'ru', 'Правила для авторов', '<ol start="1">\r\n	<li>Статьи, представляемые в Известиях НАН Армении &ldquo;Механика&rdquo;, должны &nbsp;&nbsp;&nbsp;сопровождаться разрешением на опубликование от учреждения, в котором выполнена работа.</li>\r\n	<li>Статьи представляются на армянском, русском или английском языках в двух экземплярах с указанием УДК. Электронную версию статьи отправить по эл. почте<a href="mailto:journalmechanics@mechins.sci.am">journalmechanics@mechins.sci.am</a></li>\r\n	<li>К статье должны быть приложены краткие аннотации на армянском, русском и английском языках, а также написать ключевые слова на русском и английском языках.</li>\r\n	<li>Для пользователей Microsoft Office Word использовать: текст- формат A4 (слева, справа и снизу-4 см; сверху-3,9 см); Fonts- Times New Roman, Times Armenian; аннотации- 8pt; основной текст- 10pt с интервалом 1; формулы- Mathtype или Equation editor. Для пользователей LaTeX: любой формат.</li>\r\n	<li>Литература (10pt) приводится общим списком в конце статьи</li>\r\n	<li>1. Первый A. Б., Второй В. Г., Название книги, Ереван, Гитутюн, 2015, 500 с.&nbsp;<br />\r\n	2. Первый A. Б., Второй В. Г., Статья // Изв. НАН Армении, Механика, 2015, т. 68, но. 3, с. 5-22.</li>\r\n	<li>В конце статьи должно быть указано полное название учреждения, где выполнена работа.</li>\r\n	<li>При представлении двух&nbsp; или более статей, указывается желательный порядок их опубликования.</li>\r\n	<li>В случае отказа в публикации, редколлегия оставляет за собой право не возвращать автору один экземпляр статьи.</li>\r\n	<li>Статья подписывается автором с указанием его полного адреса, фамилии, имени и отчества, а также номер телефона.</li>\r\n	<li>При наличии нескольких авторов, редколлегия рекомендует фамилии авторов статьи расположить в алфавитном порядке. &nbsp;&nbsp;</li>\r\n</ol>\r\n', 0),
(27, 25, 'en', 'Instructions for Authors', '<h3>Instructions for Authors</h3>\r\n\r\n<ol start="1">\r\n	<li>The manuscripts submitted to the Mechanics. Proceedings of National Academy of Sciences of Armenia, must be accompanied with permission for its publication from the institution where the research is carried out.</li>\r\n	<li>The manuscripts must be submitted in Armenian, Russian or English (electronic version must be sent to&nbsp;<a href="mailto:journalmechanics@mechins.sci.am">journalmechanics@mechins.sci.am</a></li>\r\n	<li>The manuscript must contain corresponding UDC number, abstracts and key-words (no more than 8) in Armenian, Russian and English.</li>\r\n	<li>For Microsoft Word users: page geometry- A4 (left, right and bottom 4cm, top 3.9cm), Font type: Times New Roman, 10pt (abstracts 8 pt), line-spacing- single, for formulas use MathType or Equation editor Defaults. For LaTeX users: any format.</li>\r\n	<li>The list of references is placed at the end of the article, as follow:</li>\r\n	<li>1. First A. B., Second C. D., Book About the Subject, Yerevan, Gitutyun, 2015, 500 p.<br />\r\n	2. First A. B., Second C. D., About the problem of &quot;cork&quot; // PNAS Armenia, Series Mechanics, 2015, vol. 68, issue 3, pp. 5-22.</li>\r\n	<li>Information about the authors is placed after the list of references.</li>\r\n	<li>In the case of several authors it is recommended to place the authors in alphabetical order.</li>\r\n</ol>\r\n', 0),
(118, 25, 'am', 'հայերեն', '<p>hayeren text</p>\r\n', 15282588),
(119, 25, 'ru', 'rus', '<p>rus text&nbsp;</p>\r\n', 15282588),
(120, 25, 'en', 'english', '<p>engggg text</p>\r\n', 15282588),
(121, 29, 'am', 'test am ', '<p>am</p>\r\n', 0),
(122, 29, 'ru', 'test ru ', '<p>ru</p>\r\n', 0),
(123, 29, 'en', 'test en ', '<p>en</p>\r\n', 0),
(127, 29, 'am', 'qwam', '<p><iframe allowfullscreen="" frameborder="0" height="360" src="//www.youtube.com/embed/mCrrr-U4DpE" width="640"></iframe></p>\r\n', 17621588),
(128, 29, 'ru', 'qw ru', '<p>qwerty text ru</p>\r\n', 17621588),
(129, 29, 'en', 'qw en', '<p>qwerty text en</p>\r\n', 17621588),
(169, 24, 'am', 'Ի՞նչ է Lorem Ipsum-ը', '<h2>&nbsp;</h2>\r\n\r\n<p style="text-align:justify"><strong>Lorem Ipsum</strong>-ը տպագրության և տպագրական արդյունաբերության համար նախատեսված մոդելային տեքստ է: Սկսած 1500-ականներից` Lorem Ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից տարբեր տառատեսակների օրինակների գիրք ստեղծելու ջանքերի արդյունք է: Այս տեքստը ոչ միայն կարողացել է գոյատևել հինգ դարաշրջան, այլև ներառվել է էլեկտրոնային տպագրության մեջ` մնալով էապես անփոփոխ: Այն հայտնի է դարձել 1960-ականներին Lorem Ipsum բովանդակող Letraset էջերի թողարկման արդյունքում, իսկ ավելի ուշ համակարգչային տպագրության այնպիսի ծրագրերի թողարկման հետևանքով, ինչպիսին է Aldus PageMaker-ը, որը ներառում է Lorem Ipsum-ի տարատեսակներ:</p>\r\n', 258695891),
(170, 24, 'ru', 'Что такое Lorem Ipsum?', '<h2>&nbsp;</h2>\r\n\r\n<p style="text-align:justify"><strong>Lorem Ipsum</strong>&nbsp;- это текст-&quot;рыба&quot;, часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной &quot;рыбой&quot; для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</p>\r\n', 258695891),
(171, 24, 'en', 'What is Lorem Ipsum?', '<h2>&nbsp;</h2>\r\n\r\n<p style="text-align:justify"><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 258695891);

-- --------------------------------------------------------

--
-- Структура таблицы `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `slider`
--

INSERT INTO `slider` (`id`, `img`) VALUES
(1, '57baf931ec477'),
(2, '57baf9445dbd4'),
(3, '57baf94bf3854'),
(8, '57bd9dd680cechotel_eden_mar_suite_800x600.jpg'),
(9, '57bd9e0070d99lhotel_porto_bay_sao_paulo_lobby_1024x672.jpg'),
(10, '57bda06ee3c21gamer_chick_300x300.jpg'),
(11, '57c6fbe644d88creative-idea.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `slider_dic`
--

CREATE TABLE `slider_dic` (
  `sd_id` int(11) NOT NULL,
  `slide_id` int(11) NOT NULL,
  `lang` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `slider_dic`
--

INSERT INTO `slider_dic` (`sd_id`, `slide_id`, `lang`, `description`) VALUES
(1, 4, 'am', 'desc'),
(2, 4, 'ru', 'desc '),
(3, 4, 'en', 'desc'),
(7, 6, 'am', 'desfh hj hjd fg'),
(8, 6, 'ru', 'gfdj gjh gh'),
(9, 6, 'en', 'fgj k lkghjghgy'),
(13, 8, 'am', 'ARmeni'),
(14, 8, 'ru', 'russion'),
(15, 8, 'en', 'english'),
(16, 9, 'am', 'salkdas hd'),
(17, 9, 'ru', 'salk djas; d'),
(18, 9, 'en', 'ds lfksd jl;f'),
(19, 10, 'am', 'Armeni'),
(20, 10, 'ru', 'Russioiojn'),
(21, 10, 'en', 'Engliiiiiiiish'),
(22, 11, 'am', 'test Arm'),
(23, 11, 'ru', 'test Ru '),
(24, 11, 'en', 'test EN');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `article_dic`
--
ALTER TABLE `article_dic`
  ADD PRIMARY KEY (`ad_id`);

--
-- Индексы таблицы `color_scheme`
--
ALTER TABLE `color_scheme`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `configs_dic`
--
ALTER TABLE `configs_dic`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `fb_config`
--
ALTER TABLE `fb_config`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `pages_dic`
--
ALTER TABLE `pages_dic`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `slider_dic`
--
ALTER TABLE `slider_dic`
  ADD PRIMARY KEY (`sd_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `article_dic`
--
ALTER TABLE `article_dic`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `color_scheme`
--
ALTER TABLE `color_scheme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `configs`
--
ALTER TABLE `configs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `configs_dic`
--
ALTER TABLE `configs_dic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `fb_config`
--
ALTER TABLE `fb_config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `files`
--
ALTER TABLE `files`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `main`
--
ALTER TABLE `main`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT для таблицы `pages_dic`
--
ALTER TABLE `pages_dic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;
--
-- AUTO_INCREMENT для таблицы `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `slider_dic`
--
ALTER TABLE `slider_dic`
  MODIFY `sd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
