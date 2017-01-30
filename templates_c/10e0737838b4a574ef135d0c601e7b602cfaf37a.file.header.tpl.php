<?php /* Smarty version Smarty-3.1.15, created on 2017-01-30 19:20:24
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4092584801c3f11dd4-06365274%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1485789622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4092584801c3f11dd4-06365274',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_584801c4037b91_93522776',
  'variables' => 
  array (
    'conf' => 0,
    'root' => 0,
    'slogan_bool' => 0,
    'langs' => 0,
    'l' => 0,
    'page' => 0,
    'page_list' => 0,
    'pl' => 0,
    'id' => 0,
    'lang' => 0,
    'pm' => 0,
    'slider' => 0,
    'i' => 0,
    'sl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584801c4037b91_93522776')) {function content_584801c4037b91_93522776($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ru">
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['conf']->value['site_title'];?>
</title>
    <meta charset="utf-8">
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['conf']->value['description'];?>
">
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['conf']->value['keywords'];?>
">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/img/favicon.ico" type="image/x-icon"/>

    <link href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/css/custom.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/css/style.css" rel="stylesheet">

</head>

<body>

<div class="container">
    <div class="row header">
        <div class="col-md-6 col-sm-6 col-xs-12 logo">
            <?php $_smarty_tpl->tpl_vars['slogan_bool'] = new Smarty_variable($_smarty_tpl->tpl_vars['conf']->value['slogan_show']==0 ? false : true, null, 0);?>
            <div class="logo-head"><a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['conf']->value['site_name'];?>
 </a></div>
            <?php if ($_smarty_tpl->tpl_vars['slogan_bool']->value) {?>
                <div class="logo-slog"><?php echo $_smarty_tpl->tpl_vars['conf']->value['slogan_name'];?>
</div>
            <?php }?>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="languages">
                <?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['langs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>
                    <a <?php if (isset($_GET['id'])) {?> href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['l']->value['code'];?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/<?php echo $_GET['id'];?>
" <?php } else { ?> href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['l']->value['code'];?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" <?php }?>>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/img/flags/<?php echo $_smarty_tpl->tpl_vars['l']->value['flag'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['l']->value['name'];?>
">
                    </a>
                <?php } ?>
            </div>
            <div class="searchbox">
                <input id="search-text" placeholder="<?php echo $_smarty_tpl->getConfigVariable('search');?>
..."/>
            </div>
        </div>
    </div>
    <div class="row letter-nav" id="alfavit">
        <nav class="navbar navbar-default">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li <?php if ($_smarty_tpl->tpl_vars['page']->value=='home'||$_smarty_tpl->tpl_vars['page']->value=='article') {?> class="active" <?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
"><?php echo $_smarty_tpl->getConfigVariable('home');?>
</a></li>
                        <?php  $_smarty_tpl->tpl_vars['pl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pl']->key => $_smarty_tpl->tpl_vars['pl']->value) {
$_smarty_tpl->tpl_vars['pl']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['pl']->value['parent_id']==0) {?>
                                <li <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pl']->value['ID'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['id']->value==$_tmp1) {?> class="active" <?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
/main/<?php echo $_smarty_tpl->tpl_vars['pl']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['pl']->value['header'];?>
</a>
                                    <div class="menu_hover">
                                        <ul>
                                            <?php  $_smarty_tpl->tpl_vars['pm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pm']->key => $_smarty_tpl->tpl_vars['pm']->value) {
$_smarty_tpl->tpl_vars['pm']->_loop = true;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['pl']->value['page_id']==$_smarty_tpl->tpl_vars['pm']->value['ID']&&$_smarty_tpl->tpl_vars['pm']->value['parent_id']!='0') {?>
                                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
/main/<?php echo $_smarty_tpl->tpl_vars['pm']->value['parent_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['pm']->value['header'];?>
</a></li>
                                                <?php }?>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </li>
                            <?php }?>
                        <?php } ?>
                        <li <?php if ($_smarty_tpl->tpl_vars['page']->value=='feedback') {?> class="active" <?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
/feedback"> <?php echo $_smarty_tpl->getConfigVariable('feedback');?>
 </a></li>
                    </ul>
                </div>

            </div>
        </nav>
    </div>

    <?php if (count($_smarty_tpl->tpl_vars['slider']->value)>0) {?>
    <div class="row carousel">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['slider']->value)-1+1 - (1) : 1-(count($_smarty_tpl->tpl_vars['slider']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"></li>
                <?php }} ?>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <?php  $_smarty_tpl->tpl_vars['sl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slider']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['slide']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['sl']->key => $_smarty_tpl->tpl_vars['sl']->value) {
$_smarty_tpl->tpl_vars['sl']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['slide']['index']++;
?>
                    <div class="item <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['slide']['index']==0) {?> active <?php }?>">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/img/slider/<?php echo $_smarty_tpl->tpl_vars['sl']->value['img'];?>
" alt="...">
                        <div class="carousel-caption">
                            <?php echo $_smarty_tpl->tpl_vars['sl']->value['description'];?>

                        </div>
                    </div>
                <?php } ?>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <?php }?>

    <div class="row content">
<?php }} ?>
