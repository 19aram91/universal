<?php /* Smarty version Smarty-3.1.15, created on 2015-11-24 16:22:56
         compiled from "C:\UwAmp\www\universal\cadmin\templates\dreambook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3143856548ee09085c5-69991444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bc436304138b9374b436cbeccfbd15c10d056f1' => 
    array (
      0 => 'C:\\UwAmp\\www\\universal\\cadmin\\templates\\dreambook.tpl',
      1 => 1429286334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3143856548ee09085c5-69991444',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dreams' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56548ee09d6ac5_64126928',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56548ee09d6ac5_64126928')) {function content_56548ee09d6ac5_64126928($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\UwAmp\\www\\universal\\libs\\plugins\\modifier.truncate.php';
?><div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <?php echo $_smarty_tpl->getConfigVariable('dreambook');?>
 -- <small>total <b><?php echo count($_smarty_tpl->tpl_vars['dreams']->value);?>
</b> items</small> -- <small> <a href="?page=add_dream">Add New</a> </small>
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
                            <th>Count</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dreams']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['d']->value['header'];?>
</td>
                                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['d']->value['description'],50);?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['d']->value['watch_count'];?>
</td>
                                <td>
                                    <a href="index.php?page=edit_dream&id=<?php echo $_smarty_tpl->tpl_vars['d']->value['ID'];?>
"> <img src="../img/pencil.png"> </a>
                                    <a onClick="return confirmDelete()" href="index.php?action=delete_dream&id=<?php echo $_smarty_tpl->tpl_vars['d']->value['ID'];?>
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
