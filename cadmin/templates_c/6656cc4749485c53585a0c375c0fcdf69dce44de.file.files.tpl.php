<?php /* Smarty version Smarty-3.1.15, created on 2015-03-26 23:03:38
         compiled from "C:\xampp\htdocs\sonnik_new\cadmin\templates\files.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26346551476a5bbc468-85768509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6656cc4749485c53585a0c375c0fcdf69dce44de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sonnik_new\\cadmin\\templates\\files.tpl',
      1 => 1427407416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26346551476a5bbc468-85768509',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_551476a5bdc127_10706970',
  'variables' => 
  array (
    'files' => 0,
    'f' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551476a5bdc127_10706970')) {function content_551476a5bdc127_10706970($_smarty_tpl) {?><div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Files
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <form action="index.php" method="post" enctype="multipart/form-data" role="form">
                    <div class="form-group">
                        <label>Добавить изображение</label>
                        <input type="file" name="img">
                    </div>
                    <input type="hidden" name="action" value="add_file">
                    <button type="submit" class="btn btn-default">Add</button>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                &nbsp;
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Source</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->_loop = true;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->getConfigVariable('root');?>
/<?php echo $_smarty_tpl->tpl_vars['f']->value['src'];?>
</td>
                                <td><img height=40" width="40" src="../img/files/<?php echo $_smarty_tpl->tpl_vars['f']->value['src'];?>
"></td>
                                <td>
                                    <a onClick="return confirmDelete()" href="index.php?action=delete_file&id=<?php echo $_smarty_tpl->tpl_vars['f']->value['ID'];?>
"> <img src="../img/cross.png"> </a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->

</div>

<?php }} ?>
