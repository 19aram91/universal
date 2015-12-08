<?php /* Smarty version Smarty-3.1.15, created on 2015-03-28 14:00:16
         compiled from "C:\xampp\htdocs\sonnik_new\cadmin\templates\info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72445505fef65f40e3-80665348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f4949197dd03cf2b0911e4f3c7a27608680e58c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sonnik_new\\cadmin\\templates\\info.tpl',
      1 => 1427547615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72445505fef65f40e3-80665348',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5505fef663dd97_53450877',
  'variables' => 
  array (
    'info' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5505fef663dd97_53450877')) {function content_5505fef663dd97_53450877($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\sonnik_new\\libs\\plugins\\modifier.truncate.php';
?><div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    information -- <small> <a href="?page=add_info">Add New</a> </small>
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Header</th>
                            <th>Description</th>
                            <th>Position</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['header'];?>
</td>
                                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['i']->value['description'],50);?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['position'];?>
</td>
                                <td>
                                    <a href="index.php?page=edit_info&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['ID'];?>
"> <img src="../img/pencil.png"> </a>
                                    <a onClick="return confirmDelete()" href="index.php?action=delete_info&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['ID'];?>
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
