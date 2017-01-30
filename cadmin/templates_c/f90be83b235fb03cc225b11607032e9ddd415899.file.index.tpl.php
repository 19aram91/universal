<?php /* Smarty version Smarty-3.1.15, created on 2016-12-08 17:27:00
         compiled from "templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:639858495fa419f254-27805825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f90be83b235fb03cc225b11607032e9ddd415899' => 
    array (
      0 => 'templates\\index.tpl',
      1 => 1481113929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '639858495fa419f254-27805825',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58495fa433e344_68263430',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58495fa433e344_68263430')) {function content_58495fa433e344_68263430($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("../configs/vocab.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("admin", 'local'); ?>
<?php $_smarty_tpl->tpl_vars['page'] = new Smarty_variable(isset($_GET['page']) ? $_GET['page'] : 'main', null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('../templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ((('../templates/').($_smarty_tpl->tpl_vars['page']->value)).('.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('../templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
