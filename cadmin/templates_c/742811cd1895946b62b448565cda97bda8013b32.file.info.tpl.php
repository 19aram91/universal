<?php /* Smarty version Smarty-3.1.15, created on 2015-11-24 16:23:04
         compiled from "C:\UwAmp\www\universal\cadmin\templates\info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2482856548ee8a07154-90594754%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '742811cd1895946b62b448565cda97bda8013b32' => 
    array (
      0 => 'C:\\UwAmp\\www\\universal\\cadmin\\templates\\info.tpl',
      1 => 1427533214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2482856548ee8a07154-90594754',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56548ee8af9909_70764432',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56548ee8af9909_70764432')) {function content_56548ee8af9909_70764432($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\UwAmp\\www\\universal\\libs\\plugins\\modifier.truncate.php';
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
