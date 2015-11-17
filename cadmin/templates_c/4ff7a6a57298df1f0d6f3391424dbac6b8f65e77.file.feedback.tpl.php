<?php /* Smarty version Smarty-3.1.15, created on 2015-04-17 22:08:32
         compiled from "C:\xampp\htdocs\sonnik_new\cadmin\templates\feedback.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29437553167bc3c4a22-96245244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ff7a6a57298df1f0d6f3391424dbac6b8f65e77' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sonnik_new\\cadmin\\templates\\feedback.tpl',
      1 => 1429301309,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29437553167bc3c4a22-96245244',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553167bc40c454_93513347',
  'variables' => 
  array (
    'feedback' => 0,
    'f' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553167bc40c454_93513347')) {function content_553167bc40c454_93513347($_smarty_tpl) {?><div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <?php echo $_smarty_tpl->getConfigVariable('inbox');?>

                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>E-mail</th>
                            <th>header</th>
                            <th>Text</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feedback']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->_loop = true;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['f']->value['fname'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['f']->value['mail'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['f']->value['header'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['f']->value['description'];?>
</td>
                                <td>
                                    <a onClick="return confirmDelete()" href="index.php?action=delete_feedback&id=<?php echo $_smarty_tpl->tpl_vars['f']->value['ID'];?>
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
