<?php /* Smarty version Smarty-3.1.15, created on 2015-03-29 14:39:59
         compiled from "C:\xampp\htdocs\sonnik_new\templates\info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45865516baa23f4f34-61814951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75087c9f68b9021b35c96fdfa3ecfd1571f1b7e5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sonnik_new\\templates\\info.tpl',
      1 => 1427632796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45865516baa23f4f34-61814951',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5516baa242d068_36389864',
  'variables' => 
  array (
    'info_text' => 0,
    'it' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5516baa242d068_36389864')) {function content_5516baa242d068_36389864($_smarty_tpl) {?><div class="col-md-7 col-sm-12 main">
    <?php  $_smarty_tpl->tpl_vars['it'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info_text']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it']->key => $_smarty_tpl->tpl_vars['it']->value) {
$_smarty_tpl->tpl_vars['it']->_loop = true;
?>
        <div class="info_header"><h1><?php echo $_smarty_tpl->tpl_vars['it']->value['header'];?>
</h1></div>
        <div class="info_text"><?php echo $_smarty_tpl->tpl_vars['it']->value['description'];?>
</div>
    <?php } ?>
</div>

<?php }} ?>
