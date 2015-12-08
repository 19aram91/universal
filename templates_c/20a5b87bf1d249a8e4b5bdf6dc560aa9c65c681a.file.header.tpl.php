<?php /* Smarty version Smarty-3.1.15, created on 2015-04-08 20:16:34
         compiled from "templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:268735525708207a291-71320465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20a5b87bf1d249a8e4b5bdf6dc560aa9c65c681a' => 
    array (
      0 => 'templates\\header.tpl',
      1 => 1427750132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '268735525708207a291-71320465',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'top_dream_list' => 0,
    'tdl' => 0,
    'info_list' => 0,
    'il' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55257082151e24_88660164',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55257082151e24_88660164')) {function content_55257082151e24_88660164($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sonnik</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">
    <div class="row header">
        <div class="col-md-6 col-sm-6 col-xs-12 logo">
            <div class="logo-head"><a href="index.php"> СОННИК </a></div>
            <div class="logo-slog">Толкователь снов</div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="searchbox">
                <input id="search-text" placeholder="что вам снилось?"/>
                <button id="word-search" class="searchbtn">Искать!</button>
            </div>
        </div>
    </div>
    <div class="row letter-nav" id="alfavit">
        <p class="text-center">
            <span class="letter">А</span>
            <span class="letter">Б</span>
            <span class="letter">В</span>
            <span class="letter">Г</span>
            <span class="letter">Д</span>
            <span class="letter">Е</span>
            <span class="letter">Ж</span>
            <span class="letter">З</span>
            <span class="letter">И</span>
            <span class="letter">К</span>
            <span class="letter">Л</span>
            <span class="letter">М</span>
            <span class="letter">Н</span>
            <span class="letter">О</span>
            <span class="letter">П</span>
            <span class="letter">Р</span>
            <span class="letter">С</span>
            <span class="letter">Т</span>
            <span class="letter">У</span>
            <span class="letter">Ф</span>
            <span class="letter">Х</span>
            <span class="letter">Ц</span>
            <span class="letter">Ш</span>
            <span class="letter">Щ</span>
            <span class="letter">Э</span>
            <span class="letter">Ю</span>
            <span class="letter">Я</span>
        </p>
    </div>

    <div class="row content">
        <div class="col-md-2 col-sm-12 additional">
            <div class="navs">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <label>Частые сны</label>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#resp-nav">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="resp-nav">
                        <ul class="nav navbar-nav">
                            <?php  $_smarty_tpl->tpl_vars['tdl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tdl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['top_dream_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tdl']->key => $_smarty_tpl->tpl_vars['tdl']->value) {
$_smarty_tpl->tpl_vars['tdl']->_loop = true;
?>
                                <li><a href="?page=dream&id=<?php echo $_smarty_tpl->tpl_vars['tdl']->value['ID'];?>
"> <?php echo $_smarty_tpl->tpl_vars['tdl']->value['header'];?>
 </a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </nav>

                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <label>Интересные факты</label>
                    </div>
                    <ul class="nav navbar-nav">
                        <?php  $_smarty_tpl->tpl_vars['il'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['il']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['il']->key => $_smarty_tpl->tpl_vars['il']->value) {
$_smarty_tpl->tpl_vars['il']->_loop = true;
?>
                            <li><a href="?page=info&id=<?php echo $_smarty_tpl->tpl_vars['il']->value['ID'];?>
"> <?php echo $_smarty_tpl->tpl_vars['il']->value['header'];?>
 </a></li>
                        <?php } ?>
                    </ul>
                </nav>
                <hr />
                <nav class="navbar navbar-default">
                    <ul class="nav navbar-nav">
                            <li><a href="?page=horoscope"> Ежедневный гороскоп </a></li>
                    </ul>
                </nav>
            </div>
        </div><?php }} ?>
