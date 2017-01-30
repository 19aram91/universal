<?php
date_default_timezone_set('Etc/GMT-4');
session_start();

require_once('../libs/Smarty.class.php');
require_once('../config.php');
require_once('core/controller.php');
require_once('core/route.php');

$smarty = new Smarty();
$universal = new App();
$action = (!isset($_POST['action'])) ? "" : $_POST['action'];


$smarty->display('templates/index.tpl');
