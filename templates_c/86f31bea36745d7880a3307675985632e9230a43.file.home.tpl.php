<?php /* Smarty version Smarty-3.1.15, created on 2015-04-08 20:16:34
         compiled from "templates\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16446552570821dc869-16733761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86f31bea36745d7880a3307675985632e9230a43' => 
    array (
      0 => 'templates\\home.tpl',
      1 => 1427552572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16446552570821dc869-16733761',
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
  'unifunc' => 'content_552570821f3915_46638078',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552570821f3915_46638078')) {function content_552570821f3915_46638078($_smarty_tpl) {?><div class="col-md-7 col-sm-12 main">
    <?php  $_smarty_tpl->tpl_vars['mt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['main_text']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mt']->key => $_smarty_tpl->tpl_vars['mt']->value) {
$_smarty_tpl->tpl_vars['mt']->_loop = true;
?>
        <?php echo $_smarty_tpl->tpl_vars['mt']->value['description'];?>

    <?php } ?>
</div>

<?php }} ?>
