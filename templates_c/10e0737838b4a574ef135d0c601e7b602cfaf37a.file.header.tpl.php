<?php /* Smarty version Smarty-3.1.15, created on 2015-11-24 21:40:34
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:520355257103baf151-96184993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1448386833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '520355257103baf151-96184993',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55257103befaf2_08994722',
  'variables' => 
  array (
    'root' => 0,
    'conf' => 0,
    'slogan_bool' => 0,
    'top_dream_list' => 0,
    'tdl' => 0,
    'info_list' => 0,
    'il' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55257103befaf2_08994722')) {function content_55257103befaf2_08994722($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ru">
<head>
    <title>Сонник</title>
    <meta charset="utf-8">
    <meta name="description" content="Сонник онлайн, толкование снов">
    <meta name="keywords" content="сонник, сон, толкование снов, сновидение, sonnik, видеть во сне">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/img/favicon.ico" type="image/x-icon"/>
    <!-- Bootstrap -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/css/style.css" rel="stylesheet">

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
            <?php $_smarty_tpl->tpl_vars['slogan_bool'] = new Smarty_variable($_smarty_tpl->tpl_vars['conf']->value[0]['slogan_show']==0 ? false : true, null, 0);?>
            <div class="logo-head"><a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['conf']->value[0]['site_name'];?>
 </a></div>
            <?php if ($_smarty_tpl->tpl_vars['slogan_bool']->value) {?> <div class="logo-slog"><?php echo $_smarty_tpl->tpl_vars['conf']->value[0]['slogan_name'];?>
</div> <?php }?>
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
                        <label>Top 10 запрашиваемые сны</label>
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
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/dream/<?php echo $_smarty_tpl->tpl_vars['tdl']->value['ID'];?>
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
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/info/<?php echo $_smarty_tpl->tpl_vars['il']->value['ID'];?>
"> <?php echo $_smarty_tpl->tpl_vars['il']->value['header'];?>
 </a></li>
                        <?php } ?>
                    </ul>
                </nav>
                <hr />
                <nav class="navbar navbar-default">
                    <ul class="nav navbar-nav">
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/horoscope/1"> Ежедневный гороскоп </a></li>
                    </ul>
                </nav>
            </div>
        </div><?php }} ?>
