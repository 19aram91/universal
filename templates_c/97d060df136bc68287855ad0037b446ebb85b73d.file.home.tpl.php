<?php /* Smarty version Smarty-3.1.15, created on 2016-12-07 16:34:12
         compiled from ".\templates\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18053584801c4046187-30025711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97d060df136bc68287855ad0037b446ebb85b73d' => 
    array (
      0 => '.\\templates\\home.tpl',
      1 => 1481113937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18053584801c4046187-30025711',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main_text' => 0,
    'mt' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_584801c404b5b7_25529496',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584801c404b5b7_25529496')) {function content_584801c404b5b7_25529496($_smarty_tpl) {?><div class="col-md-9 col-sm-12 main">
    <?php  $_smarty_tpl->tpl_vars['mt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['main_text']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mt']->key => $_smarty_tpl->tpl_vars['mt']->value) {
$_smarty_tpl->tpl_vars['mt']->_loop = true;
?>
        <?php echo $_smarty_tpl->tpl_vars['mt']->value['description'];?>

    <?php } ?>
</div>

<?php }} ?>
