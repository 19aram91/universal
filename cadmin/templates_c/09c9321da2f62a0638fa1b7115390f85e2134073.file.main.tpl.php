<?php /* Smarty version Smarty-3.1.15, created on 2016-12-08 17:27:00
         compiled from "C:\xampp\htdocs\universal\cadmin\templates\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:887658495fa45131a5-38646947%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09c9321da2f62a0638fa1b7115390f85e2134073' => 
    array (
      0 => 'C:\\xampp\\htdocs\\universal\\cadmin\\templates\\main.tpl',
      1 => 1481113929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '887658495fa45131a5-38646947',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'langs' => 0,
    'l' => 0,
    'texts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58495fa4553a10_70862204',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58495fa4553a10_70862204')) {function content_58495fa4553a10_70862204($_smarty_tpl) {?><div id="page-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <?php echo $_smarty_tpl->getConfigVariable('main');?>

                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <form action="?page=main&action=edit" method="post" enctype="multipart/form-data" role="form">
                    <?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['langs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>
                        text <?php echo $_smarty_tpl->tpl_vars['l']->value['name'];?>

                        <div class="form-group">
                            <textarea class="form-control ckeditor" name="main_<?php echo $_smarty_tpl->tpl_vars['l']->value['code'];?>
"><?php echo $_smarty_tpl->tpl_vars['texts']->value[$_smarty_tpl->tpl_vars['l']->value['code']];?>
</textarea>
                        </div>
                    <?php } ?>
                    <button type="submit" class="btn btn-default">Edit</button>
                </form>
            </div>
        </div>

    </div>

</div><?php }} ?>
