<?php /* Smarty version Smarty-3.1.15, created on 2015-03-14 23:07:50
         compiled from "templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:323325504aa60329f51-61102910%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f90be83b235fb03cc225b11607032e9ddd415899' => 
    array (
      0 => 'templates\\index.tpl',
      1 => 1426370867,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '323325504aa60329f51-61102910',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5504aa60a25ce0_69041171',
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5504aa60a25ce0_69041171')) {function content_5504aa60a25ce0_69041171($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("../configs/vocab.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("admin", 'local'); ?>
<?php $_smarty_tpl->tpl_vars['page'] = new Smarty_variable(isset($_GET['page']) ? $_GET['page'] : 'dreambook', null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('../templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ((('../templates/').($_smarty_tpl->tpl_vars['page']->value)).('.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('../templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
