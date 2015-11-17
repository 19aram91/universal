<?php /* Smarty version Smarty-3.1.15, created on 2015-03-29 03:37:43
         compiled from "C:\xampp\htdocs\sonnik_new\templates\results.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152795517085c6b7912-15130557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '139df86e69c97491334b7440c22182c05a3649a7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sonnik_new\\templates\\results.tpl',
      1 => 1427593062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152795517085c6b7912-15130557',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5517085c733ae1_30795041',
  'variables' => 
  array (
    'results' => 0,
    'r' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5517085c733ae1_30795041')) {function content_5517085c733ae1_30795041($_smarty_tpl) {?><div class="col-md-7 col-sm-12 main">
    <ul class="result_list">
        <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['results']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
            <li><a href="?page=dream&id=<?php echo $_smarty_tpl->tpl_vars['r']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['header'];?>
</a></li>
        <?php } ?>
    </ul>
</div>

<?php }} ?>
