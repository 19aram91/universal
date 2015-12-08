<?php /* Smarty version Smarty-3.1.15, created on 2015-11-24 20:21:00
         compiled from ".\templates\results.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19397552572e3189422-95914311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f82e84a563a03695ee8a0804d58acc42cd02d05' => 
    array (
      0 => '.\\templates\\results.tpl',
      1 => 1448382060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19397552572e3189422-95914311',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_552572e333d106_26043861',
  'variables' => 
  array (
    'results' => 0,
    'root' => 0,
    'r' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552572e333d106_26043861')) {function content_552572e333d106_26043861($_smarty_tpl) {?><div class="col-md-7 col-sm-12 main">
    <ul class="result_list">
        <?php if (count($_smarty_tpl->tpl_vars['results']->value)==0) {?>
            По вашему запросу ничего не найдено
        <?php }?>
        <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['results']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/dream/<?php echo $_smarty_tpl->tpl_vars['r']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['header'];?>
</a></li>
        <?php } ?>
    </ul>
</div>

<?php }} ?>
