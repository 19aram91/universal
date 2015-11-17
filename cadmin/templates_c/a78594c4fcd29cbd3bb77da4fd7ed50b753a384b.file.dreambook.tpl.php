<?php /* Smarty version Smarty-3.1.15, created on 2015-04-17 22:04:42
         compiled from "C:\xampp\htdocs\sonnik_new\cadmin\templates\dreambook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:159045504b136c2c088-43505179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a78594c4fcd29cbd3bb77da4fd7ed50b753a384b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sonnik_new\\cadmin\\templates\\dreambook.tpl',
      1 => 1429300734,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159045504b136c2c088-43505179',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5504b136c8a5e7_20983893',
  'variables' => 
  array (
    'dreams' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5504b136c8a5e7_20983893')) {function content_5504b136c8a5e7_20983893($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\sonnik_new\\libs\\plugins\\modifier.truncate.php';
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
