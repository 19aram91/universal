<?php /* Smarty version Smarty-3.1.15, created on 2015-04-26 19:06:17
         compiled from "C:\xampp\htdocs\sonnik_new\cadmin\templates\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1953055169566d58ed8-14994302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54ac07bc8f002e8dc06e97bb4a426d1911a4c908' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sonnik_new\\cadmin\\templates\\main.tpl',
      1 => 1430067975,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1953055169566d58ed8-14994302',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55169566da78b3_12177964',
  'variables' => 
  array (
    'main_text' => 0,
    'm' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55169566da78b3_12177964')) {function content_55169566da78b3_12177964($_smarty_tpl) {?><div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <?php echo $_smarty_tpl->getConfigVariable('main');?>

                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <form action="index.php" method="post" enctype="multipart/form-data" role="form">
                    <?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['main_text']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
                        <div class="form-group">
                            <textarea class="form-control ckeditor" name="main_text"><?php echo $_smarty_tpl->tpl_vars['m']->value['description'];?>
</textarea>
                        </div>
                        <input type="hidden" name="action" value="edit_main"/>
                        <button type="submit" class="btn btn-default">Edit</button>
                    <?php } ?>
                </form>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div><?php }} ?>
