<?php
session_start();
require('libs/Smarty.class.php');
require('controllers/user.php');

date_default_timezone_set('Etc/GMT-4');
$root = 'http://'.$_SERVER['HTTP_HOST'];

$smarty = new Smarty();
$select = new Select();

$smarty->assign('root', $root);

$date = date('d-m-y',strtotime("-1 days"));
$smarty->assign('date', $date);

$conf = $select->getConfigs();
$smarty->assign('conf', $conf);

$fb_conf = $select->getFbConfig();
$smarty->assign('fb_conf', $fb_conf);

$page_list = $select->getPages();
$smarty->assign('page_list', $page_list);

$top_article_list = $select->getLastArticles();
$smarty->assign('top_article_list', $top_article_list);

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