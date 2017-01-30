<?php /* Smarty version Smarty-3.1.15, created on 2016-12-08 19:15:59
         compiled from "C:\xampp\htdocs\universal\cadmin\templates\feedback.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114825849792f26a1e4-03536239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '259f9bddc2429d9f1c473383f427a8fd7bad4910' => 
    array (
      0 => 'C:\\xampp\\htdocs\\universal\\cadmin\\templates\\feedback.tpl',
      1 => 1481113929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114825849792f26a1e4-03536239',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'feedback' => 0,
    'f' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5849792f2a52c4_20468569',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5849792f2a52c4_20468569')) {function content_5849792f2a52c4_20468569($_smarty_tpl) {?><div id="page-wrapper">

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
                                    <a onClick="return confirmDelete()" href="?page=feedback&action=delete&id=<?php echo $_smarty_tpl->tpl_vars['f']->value['ID'];?>
"><i class="fa fa-times fa-lg fa-fw"></i></a>
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
