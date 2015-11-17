<?php /* Smarty version Smarty-3.1.15, created on 2015-03-29 03:20:36
         compiled from "C:\xampp\htdocs\sonnik_new\templates\dream.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108335516bcd012fb90-54336606%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '348bceba9637bc1c60a6d62997aa5bdd001d1c89' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sonnik_new\\templates\\dream.tpl',
      1 => 1427592033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108335516bcd012fb90-54336606',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5516bcd0164de6_57078409',
  'variables' => 
  array (
    'dream_text' => 0,
    'dt' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5516bcd0164de6_57078409')) {function content_5516bcd0164de6_57078409($_smarty_tpl) {?><div class="col-md-7 col-sm-12 main">
    <?php  $_smarty_tpl->tpl_vars['dt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dream_text']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dt']->key => $_smarty_tpl->tpl_vars['dt']->value) {
$_smarty_tpl->tpl_vars['dt']->_loop = true;
?>
        <div class="dream_header"><h1><?php echo $_smarty_tpl->tpl_vars['dt']->value['header'];?>
</h1></div>
        <div class="dream_img"><img class="img-responsive" width="300" src="img/dreambook/<?php echo $_smarty_tpl->tpl_vars['dt']->value['img'];?>
"></div>
        <div class="dream_text"><h2><?php echo $_smarty_tpl->tpl_vars['dt']->value['description'];?>
</h2></div>
    <?php } ?>
</div>

<?php }} ?>
