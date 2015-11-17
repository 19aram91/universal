<?php /* Smarty version Smarty-3.1.15, created on 2015-03-28 15:22:54
         compiled from "C:\xampp\htdocs\sonnik_new\templates\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:241735516ad7ee05f33-14656114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b9ee3eb436c3776c2ec17b8b1c3e83d10f6ddd4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sonnik_new\\templates\\home.tpl',
      1 => 1427552572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '241735516ad7ee05f33-14656114',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5516ad7ee423c6_89407645',
  'variables' => 
  array (
    'main_text' => 0,
    'mt' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5516ad7ee423c6_89407645')) {function content_5516ad7ee423c6_89407645($_smarty_tpl) {?><div class="col-md-7 col-sm-12 main">
    <?php  $_smarty_tpl->tpl_vars['mt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['main_text']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mt']->key => $_smarty_tpl->tpl_vars['mt']->value) {
$_smarty_tpl->tpl_vars['mt']->_loop = true;
?>
        <?php echo $_smarty_tpl->tpl_vars['mt']->value['description'];?>

    <?php } ?>
</div>

<?php }} ?>
