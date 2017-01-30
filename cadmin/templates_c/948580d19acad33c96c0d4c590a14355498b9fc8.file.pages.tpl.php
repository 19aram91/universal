<?php /* Smarty version Smarty-3.1.15, created on 2017-01-30 16:56:30
         compiled from "C:\xampp\htdocs\universal\cadmin\templates\pages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18186584960557c4d22-56182923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '948580d19acad33c96c0d4c590a14355498b9fc8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\universal\\cadmin\\templates\\pages.tpl',
      1 => 1485780989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18186584960557c4d22-56182923',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58496055860a67_34715693',
  'variables' => 
  array (
    'pages' => 0,
    'langs' => 0,
    'l' => 0,
    'pageInfo' => 0,
    'pi' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58496055860a67_34715693')) {function content_58496055860a67_34715693($_smarty_tpl) {?><div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Pages(<?php echo count($_smarty_tpl->tpl_vars['pages']->value);?>
) -- <small> <a href="#" onclick="$('.add-page').toggle('fast', 'linear')">Add Page</a> </small>
                </h1>
            </div>

            <div class="col-lg-12 add-page disabled" >
                <form action="?page=pages&action=set" method="post" enctype="multipart/form-data" role="form">
                    <?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['langs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>
                    <div class="form-group">
                        <label>Header <?php echo $_smarty_tpl->tpl_vars['l']->value['name'];?>
</label>
                        <input class="form-control" name="header_<?php echo $_smarty_tpl->tpl_vars['l']->value['code'];?>
">
                    </div>
                    <?php } ?>
                    <div class="form-group">
                        <label>Position </label>
                        <input type="number" class="form-control" name="info_pos">
                    </div>
                    <?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['langs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>
                    <div class="form-group">
                        <label>Description <?php echo $_smarty_tpl->tpl_vars['l']->value['name'];?>
</label>
                        <textarea class="form-control ckeditor" rows="3" name="desc_<?php echo $_smarty_tpl->tpl_vars['l']->value['code'];?>
"></textarea>
                    </div>
                    <?php } ?>
                    <button type="submit" class="btn btn-default">Add</button>
                </form>
            </div>
        </div>

        <?php if (isset($_GET['action'])&&$_GET['action']=="editItem") {?>
        <div class="row">
            <div class="col-lg-12">
                <a href="?page=pages">Back</a>
                <form action="?page=pages&action=edit" method="post" role="form">

                    <div class="form-group">
                        <label>Position </label>
                        <input type="number" class="form-control" name="info_pos" value="<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value[0]['position'];?>
">
                    </div>
                    <?php  $_smarty_tpl->tpl_vars['pi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pageInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pi']->key => $_smarty_tpl->tpl_vars['pi']->value) {
$_smarty_tpl->tpl_vars['pi']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['pi']->value['parent_id']=='0') {?>
                            <div class="form-group">
                                <label>Header <?php echo $_smarty_tpl->tpl_vars['pi']->value['language'];?>
 </label>
                                <input class="form-control" name="header_<?php echo $_smarty_tpl->tpl_vars['pi']->value['language'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['pi']->value['header'];?>
">
                            </div>
                        <?php }?>
                    <?php } ?>
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value[0]['ID'];?>
"/>
                    <button type="submit" class="btn btn-default">Edit</button>
                </form>
            </div>
        </div>
        <?php }?>

        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Header</th>
                            <th>Position</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['p']->value['header'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['p']->value['position'];?>
</td>
                                <td>
                                    <a href="?page=pages&action=editItem&id=<?php echo $_smarty_tpl->tpl_vars['p']->value['ID'];?>
"><i class="fa fa-pencil fa-lg fa-fw"></i></a>
                                    <a onClick="return confirmDelete()" href="?page=pages&action=delete&id=<?php echo $_smarty_tpl->tpl_vars['p']->value['ID'];?>
"> <i class="fa fa-times fa-lg fa-fw"></i> </a>
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
