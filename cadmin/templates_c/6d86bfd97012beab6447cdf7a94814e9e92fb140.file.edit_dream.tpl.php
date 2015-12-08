<?php /* Smarty version Smarty-3.1.15, created on 2015-03-15 22:17:38
         compiled from "C:\xampp\htdocs\sonnik_new\cadmin\templates\edit_dream.tpl" */ ?>
<?php /*%%SmartyHeaderCode:172425505f30a7427e1-87209971%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d86bfd97012beab6447cdf7a94814e9e92fb140' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sonnik_new\\cadmin\\templates\\edit_dream.tpl',
      1 => 1426454256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172425505f30a7427e1-87209971',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5505f30a77aff2_56145487',
  'variables' => 
  array (
    'dream' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5505f30a77aff2_56145487')) {function content_5505f30a77aff2_56145487($_smarty_tpl) {?><div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Edit Dream
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <form action="index.php" method="post" enctype="multipart/form-data" role="form">
                    <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dream']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
                        <div class="form-group">
                            <label>Header </label>
                            <input class="form-control" name="dream_header" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['header'];?>
">
                        </div>
                        <div class="form-group">
                            <img src="../img/dreambook/<?php echo $_smarty_tpl->tpl_vars['d']->value['img'];?>
" height="60" width="60">
                            <label>IMG</label>
                            <input type="file" name="dream_img">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control ckeditor" rows="3" name="dream_desc"><?php echo $_smarty_tpl->tpl_vars['d']->value['description'];?>
</textarea>
                        </div>
                        <input type="hidden" name="action" value="edit_dream"/>
                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['ID'];?>
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
