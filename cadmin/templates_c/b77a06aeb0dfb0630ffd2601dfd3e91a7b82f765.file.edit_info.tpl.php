<?php /* Smarty version Smarty-3.1.15, created on 2015-03-26 23:34:28
         compiled from "C:\xampp\htdocs\sonnik_new\cadmin\templates\edit_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2181755060533131725-60337188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b77a06aeb0dfb0630ffd2601dfd3e91a7b82f765' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sonnik_new\\cadmin\\templates\\edit_info.tpl',
      1 => 1427409266,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2181755060533131725-60337188',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55060533166778_73142642',
  'variables' => 
  array (
    'einfo' => 0,
    'ei' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55060533166778_73142642')) {function content_55060533166778_73142642($_smarty_tpl) {?><div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Edit Info
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <form action="index.php" method="post" enctype="multipart/form-data" role="form">
                    <?php  $_smarty_tpl->tpl_vars['ei'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ei']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['einfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ei']->key => $_smarty_tpl->tpl_vars['ei']->value) {
$_smarty_tpl->tpl_vars['ei']->_loop = true;
?>
                        <div class="form-group">
                            <label>Header </label>
                            <input class="form-control" name="info_header" value="<?php echo $_smarty_tpl->tpl_vars['ei']->value['header'];?>
">
                        </div>
                        <div class="form-group">
                            <label>Position </label>
                            <input type="number" class="form-control" name="info_pos" value="<?php echo $_smarty_tpl->tpl_vars['ei']->value['position'];?>
">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control ckeditor" rows="3" name="info_desc"><?php echo $_smarty_tpl->tpl_vars['ei']->value['description'];?>
</textarea>
                        </div>
                        <input type="hidden" name="action" value="edit_info"/>
                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['ei']->value['ID'];?>
"/>
                        <button type="submit" class="btn btn-default">Edit</button>
                    <?php } ?>
                </form>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div><?php }} ?>
