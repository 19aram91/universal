<?php /* Smarty version Smarty-3.1.15, created on 2015-05-02 22:52:02
         compiled from ".\templates\dream.tpl" */ ?>
<?php /*%%SmartyHeaderCode:709355257148eceb71-54148796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36bcd7ac78a222ac089610048625db2e6fc876a9' => 
    array (
      0 => '.\\templates\\dream.tpl',
      1 => 1430599920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '709355257148eceb71-54148796',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55257149024248_97044132',
  'variables' => 
  array (
    'dream_text' => 0,
    'dt' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55257149024248_97044132')) {function content_55257149024248_97044132($_smarty_tpl) {?><div class="col-md-7 col-sm-12 main">
    <?php  $_smarty_tpl->tpl_vars['dt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dream_text']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dt']->key => $_smarty_tpl->tpl_vars['dt']->value) {
$_smarty_tpl->tpl_vars['dt']->_loop = true;
?>
        <div class="dream_header"><h1><?php echo $_smarty_tpl->tpl_vars['dt']->value['header'];?>
</h1></div>
        <div class="dream_img"><img class="img-responsive" width="300" src="<?php echo $_smarty_tpl->getConfigVariable('root');?>
/img/dreambook/<?php echo $_smarty_tpl->tpl_vars['dt']->value['img'];?>
"></div>
        <div class="dream_text"><h2><?php echo $_smarty_tpl->tpl_vars['dt']->value['description'];?>
</h2></div>
    <?php } ?>

    <div class="addthis_sharing_toolbox"></div>
</div>

<?php }} ?>
