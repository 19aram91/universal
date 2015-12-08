<?php /* Smarty version Smarty-3.1.15, created on 2015-05-02 23:41:25
         compiled from "templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52715516ad7eac0cb6-23431356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f90be83b235fb03cc225b11607032e9ddd415899' => 
    array (
      0 => 'templates\\index.tpl',
      1 => 1430602884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52715516ad7eac0cb6-23431356',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5516ad7ec8f246_75478221',
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5516ad7ec8f246_75478221')) {function content_5516ad7ec8f246_75478221($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("../configs/vocab.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("user", 'local'); ?>
<?php $_smarty_tpl->tpl_vars['page'] = new Smarty_variable(isset($_GET['page']) ? $_GET['page'] : 'home', null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if (file_exists((('templates/').($_smarty_tpl->tpl_vars['page']->value)).(".tpl"))) {?>
    <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['page']->value).(".tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ("404.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<?php }} ?>
