<?php /* Smarty version Smarty-3.1.15, created on 2016-12-08 19:15:53
         compiled from "C:\xampp\htdocs\universal\cadmin\templates\files.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10160584979293e4c13-74810232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5cf248b209a1a6c3c1df11b8411707a6630f701' => 
    array (
      0 => 'C:\\xampp\\htdocs\\universal\\cadmin\\templates\\files.tpl',
      1 => 1481113929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10160584979293e4c13-74810232',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'files' => 0,
    'root' => 0,
    'f' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58497929449ac9_46076371',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58497929449ac9_46076371')) {function content_58497929449ac9_46076371($_smarty_tpl) {?><div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Files
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <form action="?page=files&action=add" method="post" enctype="multipart/form-data" role="form">
                    <div class="form-group">
                        <label>Add File</label>
                        <input type="file" name="img">
                    </div>
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
                                <td><?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/img/files/<?php echo $_smarty_tpl->tpl_vars['f']->value['src'];?>
</td>
                                <td><img height=40" width="40" src="../img/files/<?php echo $_smarty_tpl->tpl_vars['f']->value['src'];?>
"></td>
                                <td>
                                    <a onClick="return confirmDelete()" href="?page=files&action=delete&id=<?php echo $_smarty_tpl->tpl_vars['f']->value['ID'];?>
">
                                        <i class="fa fa-times fa-lg fa-fw"></i> </a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<?php }} ?>
