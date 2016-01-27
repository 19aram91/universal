<?php
session_start();
require('../libs/Smarty.class.php');
require('../controllers/admin.php');
date_default_timezone_set('Etc/GMT-4');
$root = 'http://'.$_SERVER['HTTP_HOST'];

$smarty = new Smarty();
$select = new Select();

$select->login();
$configs = $select->getConfigs();
$smarty->assign('configs', $configs);
$smarty->assign('root', $root);

if(!isset($_SESSION['loged_in']))
{
    $smarty->display('templates/login.tpl');
    exit();
}

$select->logout();

$insert = new Insert();
$update = new Update();
$delete = new Delete();

$articles = $select->getArticles();
$smarty->assign('articles', $articles);
$article = $select->getEditArticle();
$smarty->assign('article', $article);
$pages = $select->getPages();
$smarty->assign('pages', $pages);
$pageInfo = $select->getEditPages();
$smarty->assign('pageInfo', $pageInfo);
$files = $select->getFiles();
$smarty->assign('files', $files);
$main_text = $select->getMain();
$smarty->assign('main_text', $main_text);
$feedback = $select->getFeedBack();
$smarty->assign('feedback', $feedback);

$insert->setArticle();
$insert->setPages();
$insert->addFile();

$update->editConfig();
$update->editArticle();
$update->editPages();
$update->editMain();

$delete->deleteArticle();
$delete->deletePages();
$delete->deleteFile();
$delete->deleteFeedBack();

$smarty->display('templates/index.tpl');