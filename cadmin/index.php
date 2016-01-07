<?php
session_start();
require('../libs/Smarty.class.php');
require('../controllers/admin.php');
date_default_timezone_set('Etc/GMT-4');

$smarty = new Smarty();
$select = new Select();

$select->login();
$configs = $select->getConfigs();
$smarty->assign('configs', $configs);

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
$info = $select->getInfo();
$smarty->assign('info', $info);
$einfo = $select->getEditInfo();
$smarty->assign('einfo', $einfo);
$files = $select->getFiles();
$smarty->assign('files', $files);
$main_text = $select->getMain();
$smarty->assign('main_text', $main_text);
$feedback = $select->getFeedBack();
$smarty->assign('feedback', $feedback);

$insert->setArticle();
$insert->setInfo();
$insert->addFile();

$update->editConfig();
$update->editArticle();
$update->editInfo();
$update->editMain();

$delete->deleteArticle();
$delete->deleteInfo();
$delete->deleteFile();
$delete->deleteFeedBack();

$smarty->display('templates/index.tpl');