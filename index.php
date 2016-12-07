<?php
session_start();
require('libs/Smarty.class.php');
require('controllers/user.php');

//testsdf sd sd
//molodec
//molodec

date_default_timezone_set('Etc/GMT-4');
$root = 'http://'.$_SERVER['HTTP_HOST'];

$smarty = new Smarty();
$select = new Select();

$smarty->assign('root', $root);

$lang = $select->getlang();
$smarty->assign('lang', $lang);

$conf = $select->getConfigs();
$smarty->assign('conf', $conf);

$languages = $select->getlanguages();
$smarty->assign('langs', $languages);

$fb_conf = $select->getFbConfig();
$smarty->assign('fb_conf', $fb_conf);

$page_list = $select->getPages();
$smarty->assign('page_list', $page_list);

$top_article_list = $select->getLastArticles();
$smarty->assign('top_article_list', $top_article_list);

$slider = $select->getSlides();
$smarty->assign('slider', $slider);

$main_text = $select->getMainText();
$smarty->assign('main_text', $main_text);

$page_text = $select->getPageText();
$smarty->assign('text', $page_text);

$article_text = $select->getArticleText();
$smarty->assign('article_text', $article_text);

$results = $select->getResults();
$smarty->assign('results', $results);

$select->getFBCaptcha();
$select->checkCaptcha();
$select->setMessage();

$smarty->display('templates/index.tpl');