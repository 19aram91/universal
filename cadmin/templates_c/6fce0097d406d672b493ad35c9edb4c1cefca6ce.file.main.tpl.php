<?php /* Smarty version Smarty-3.1.15, created on 2015-11-24 16:23:18
         compiled from "C:\UwAmp\www\universal\cadmin\templates\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:539656548ef6ebddc8-90340264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fce0097d406d672b493ad35c9edb4c1cefca6ce' => 
    array (
      0 => 'C:\\UwAmp\\www\\universal\\cadmin\\templates\\main.tpl',
      1 => 1430053574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '539656548ef6ebddc8-90340264',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main_text' => 0,
    'm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56548ef705fa64_04292370',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56548ef705fa64_04292370')) {function content_56548ef705fa64_04292370($_smarty_tpl) {?><div id="page-wrapper">

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
