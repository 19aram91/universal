<?php /* Smarty version Smarty-3.1.15, created on 2015-04-17 22:06:04
         compiled from "C:\xampp\htdocs\sonnik_new\cadmin\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78295504aa60bd4544-75277427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e545678b28a92c60f33355b5a5764819fbf42b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sonnik_new\\cadmin\\templates\\header.tpl',
      1 => 1429301162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78295504aa60bd4544-75277427',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5504aa60dc6002_66467237',
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5504aa60dc6002_66467237')) {function content_5504aa60dc6002_66467237($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/favicon.ico">

    <title>CAdmin</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../css/jquery-ui.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><?php echo $_smarty_tpl->getConfigVariable('dreambook');?>
</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b
                            class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="?page=files"><i class="fa fa-fw fa-file-text"></i> <?php echo $_smarty_tpl->getConfigVariable('files');?>
</a>
                    </li>
                    <li>
                        <a href="?page=feedback"><i class="fa fa-fw fa-envelope"></i> <?php echo $_smarty_tpl->getConfigVariable('inbox');?>
</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="?action=logout"><i class="fa fa-fw fa-power-off"></i> <?php echo $_smarty_tpl->getConfigVariable('logout');?>
</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="dreambook") {?>class="active" <?php }?>><a href="?page=dreambook"><i class="fa fa-fw fa-star"></i> <?php echo $_smarty_tpl->getConfigVariable('dreams');?>
</a></li>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="info") {?>class="active" <?php }?>><a href="?page=info"><i class="fa fa-fw fa-info"></i> <?php echo $_smarty_tpl->getConfigVariable('information');?>
</a></li>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="main") {?>class="active" <?php }?>><a href="?page=main"><i class="fa fa-fw fa-desktop"></i> <?php echo $_smarty_tpl->getConfigVariable('main');?>
</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav><?php }} ?>
