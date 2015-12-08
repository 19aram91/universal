<?php /* Smarty version Smarty-3.1.15, created on 2015-04-12 19:19:23
         compiled from ".\templates\info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10941552aa91b3f80b0-42598340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc82b1be5a1453a3dd092fc9d959ba0a7113e41f' => 
    array (
      0 => '.\\templates\\info.tpl',
      1 => 1427632796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10941552aa91b3f80b0-42598340',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info_text' => 0,
    'it' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_552aa91b4d2d90_15535113',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552aa91b4d2d90_15535113')) {function content_552aa91b4d2d90_15535113($_smarty_tpl) {?><div class="col-md-7 col-sm-12 main">
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
