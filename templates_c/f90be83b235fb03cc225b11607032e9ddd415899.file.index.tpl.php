<?php /* Smarty version Smarty-3.1.15, created on 2016-12-07 16:34:11
         compiled from "templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18671584801c3e533f1-05288215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f90be83b235fb03cc225b11607032e9ddd415899' => 
    array (
      0 => 'templates\\index.tpl',
      1 => 1481113937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18671584801c3e533f1-05288215',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_584801c3ed0888_97107144',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584801c3ed0888_97107144')) {function content_584801c3ed0888_97107144($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("../configs/vocab.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("user_".((string)$_smarty_tpl->tpl_vars['lang']->value), 'local'); ?>
<?php $_smarty_tpl->tpl_vars['page'] = new Smarty_variable(isset($_GET['page']) ? $_GET['page'] : 'home', null, 0);?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable(isset($_GET['id']) ? $_GET['id'] : -1, null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if (file_exists((('templates/').($_smarty_tpl->tpl_vars['page']->value)).(".tpl"))) {?>
    <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['page']->value).(".tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ("404.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<?php }} ?>
