<?php /* Smarty version Smarty-3.1.15, created on 2015-04-27 22:07:06
         compiled from ".\templates\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:859255257103c7ade1-21225318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97d060df136bc68287855ad0037b446ebb85b73d' => 
    array (
      0 => '.\\templates\\home.tpl',
      1 => 1430165087,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '859255257103c7ade1-21225318',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55257103c8cd55_16842373',
  'variables' => 
  array (
    'main_text' => 0,
    'mt' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55257103c8cd55_16842373')) {function content_55257103c8cd55_16842373($_smarty_tpl) {?><div class="col-md-7 col-sm-12 main">
    <?php  $_smarty_tpl->tpl_vars['mt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['main_text']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mt']->key => $_smarty_tpl->tpl_vars['mt']->value) {
$_smarty_tpl->tpl_vars['mt']->_loop = true;
?>
        <?php echo $_smarty_tpl->tpl_vars['mt']->value['description'];?>

    <?php } ?>
</div>

<?php }} ?>
