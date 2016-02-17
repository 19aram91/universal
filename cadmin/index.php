<?php
date_default_timezone_set('Etc/GMT-4');
//$root = 'http://'.$_SERVER['HTTP_HOST'];
session_start();

require_once('../libs/Smarty.class.php');
require_once('../config.php');
require_once('core/controller.php');
require_once('core/route.php');

$smarty = new Smarty();
$universal = new App();

$smarty->display('templates/index.tpl');
