<?php
session_start();
require('../libs/Smarty.class.php');
require('../controllers/admin.php');
date_default_timezone_set('Etc/GMT-4');

$smarty = new Smarty();
$select = new Select();

$select->login();

if(!isset($_SESSION['loged_in']))
{
    $smarty->display('templates/login.tpl');
    exit();
}

$select->logout();

$insert = new Insert();
$update = new Update();
$delete = new Delete();

$configs = $select->getConfigs();
$smarty->assign('configs', $configs);
$dreams = $select->getDreams();
$smarty->assign('dreams', $dreams);
$dream = $select->getEditDreams();
$smarty->assign('dream', $dream);
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

$insert->setDream();
$insert->setInfo();
$insert->addFile();

$update->editConfig();
$update->editDream();
$update->editInfo();
$update->editMain();

$delete->deleteDream();
$delete->deleteInfo();
$delete->deleteFile();
$delete->deleteFeedBack();

$smarty->display('templates/index.tpl');