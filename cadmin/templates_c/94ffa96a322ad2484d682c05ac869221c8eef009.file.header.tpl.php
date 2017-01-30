<?php /* Smarty version Smarty-3.1.15, created on 2016-12-13 17:05:29
         compiled from "C:\xampp\htdocs\universal\cadmin\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1443158495fa44a61b0-74780550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94ffa96a322ad2484d682c05ac869221c8eef009' => 
    array (
      0 => 'C:\\xampp\\htdocs\\universal\\cadmin\\templates\\header.tpl',
      1 => 1481634324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1443158495fa44a61b0-74780550',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58495fa4505832_62420543',
  'variables' => 
  array (
    'configs' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58495fa4505832_62420543')) {function content_58495fa4505832_62420543($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/favicon.ico">

    <title>CAdmin</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../js/plugins/colorPicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../css/jquery-ui.css" rel="stylesheet">

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
            <a class="navbar-brand" href="index.php"><?php echo $_smarty_tpl->tpl_vars['configs']->value['site_name'];?>
's Admin Page</a>
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
                        <a href="?page=login&action=leave"><i class="fa fa-fw fa-power-off"></i> <?php echo $_smarty_tpl->getConfigVariable('logout');?>
</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="configs") {?>class="active" <?php }?>><a href="?page=configs"><i class="fa fa-fw fa-cogs"></i> <?php echo $_smarty_tpl->getConfigVariable('conf');?>
</a></li>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="colors") {?>class="active" <?php }?>><a href="?page=colors"><i class="fa fa-fw fa-wrench"></i> <?php echo $_smarty_tpl->getConfigVariable('colors');?>
</a></li>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="slider") {?>class="active" <?php }?>><a href="?page=slider"><i class="fa fa-fw fa-sliders"></i> <?php echo $_smarty_tpl->getConfigVariable('slider');?>
</a></li>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="languages") {?>class="active" <?php }?>><a href="?page=languages"><i class="fa fa-fw fa-globe"></i> <?php echo $_smarty_tpl->getConfigVariable('languages');?>
</a></li>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="pages") {?>class="active" <?php }?>><a href="?page=pages"><i class="fa fa-fw fa-info"></i> <?php echo $_smarty_tpl->getConfigVariable('pages');?>
</a></li>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="pages_menu") {?>class="active" <?php }?>><a href="?page=pages_menu"><i class="fa fa-fw fa-info"></i> <?php echo $_smarty_tpl->getConfigVariable('pagesmenu');?>
</a></li>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="main") {?>class="active" <?php }?>><a href="?page=main"><i class="fa fa-fw fa-home"></i> <?php echo $_smarty_tpl->getConfigVariable('main');?>
</a></li>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="article") {?>class="active" <?php }?>><a href="?page=article"><i class="fa fa-fw fa-file-text"></i> <?php echo $_smarty_tpl->getConfigVariable('article');?>
</a></li>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="fb_conf") {?>class="active" <?php }?>><a href="?page=fb_conf"><i class="fa fa-fw fa-map-marker"></i> <?php echo $_smarty_tpl->getConfigVariable('contacts');?>
</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav><?php }} ?>
