<?php /* Smarty version Smarty-3.1.15, created on 2017-01-30 15:42:12
         compiled from "C:\xampp\htdocs\universal\cadmin\templates\pages_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29174584ff39e017591-13499389%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b48cdbdb9e966e560137bcf1873c280845223a1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\universal\\cadmin\\templates\\pages_menu.tpl',
      1 => 1485776531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29174584ff39e017591-13499389',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_584ff39e0f1222_94761005',
  'variables' => 
  array (
    'pages' => 0,
    'p' => 0,
    'langs' => 0,
    'l' => 0,
    'pagesval' => 0,
    'pe' => 0,
    'pageedit' => 0,
    'pi' => 0,
    'pageInfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584ff39e0f1222_94761005')) {function content_584ff39e0f1222_94761005($_smarty_tpl) {?><div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Pages(<?php echo count($_smarty_tpl->tpl_vars['pages']->value);?>
) -- <small> <a href="#" onclick="$('.add-page').toggle('fast', 'linear')">Add Page Menu</a> </small>
                </h1>
            </div>
        </div>

            <div class="col-lg-12 add-page disabled" >
                <form action="?page=pages_menu&action=addMenu" method="post" enctype="multipart/form-data" role="form">
                    <div class="form-group">
                        <label>Pages Menu</label>
                        <select class="form-control" name="info_page">
                            <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['ID'];?>
|<?php echo $_smarty_tpl->tpl_vars['p']->value['parent'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['header'];?>
</option>
                            <?php } ?>
                        </select>
                    </div>
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

    <div class="form-group">
        <label>Pages Menu</label>
        <form action="?page=pages_menu&action=changeOption" method="post" enctype="multipart/form-data" role="form">
            <select class="form-control" name="page_select">
                <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['header'];?>
</option>
                <?php } ?>
            </select>
            <button type="submit" class="btn btn-default">OK</button>
        </form>

        <?php if (isset($_GET['action'])&&$_GET['action']=='changeOption') {?>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Header</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  $_smarty_tpl->tpl_vars['pe'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pe']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagesval']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pe']->key => $_smarty_tpl->tpl_vars['pe']->value) {
$_smarty_tpl->tpl_vars['pe']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['pe']->value['parent_id']!='0') {?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['pe']->value['header'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['pe']->value['description'];?>
</td>
                                    <td>
                                        <a href="?page=pages_menu&action=editMenu&id=<?php echo $_smarty_tpl->tpl_vars['pe']->value['parent_id'];?>
"><i class="fa fa-pencil fa-lg fa-fw"></i></a>
                                        <a onClick="return confirmDelete()" href="?page=pages_menu&action=delete&id=<?php echo $_smarty_tpl->tpl_vars['pe']->value['parent_id'];?>
"> <i class="fa fa-times fa-lg fa-fw"></i> </a>
                                    </td>
                                </tr>
                            <?php }?>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php }?>
    </div>

    <?php if (isset($_GET['action'])&&$_GET['action']=="editMenu") {?>
        <div class="row">
            <div class="col-lg-12">
                <a href="?page=pages_menu">Back</a>
                <form action="?page=pages_menu&action=edit" method="post" role="form">
                    <?php  $_smarty_tpl->tpl_vars['pi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pageedit']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pi']->key => $_smarty_tpl->tpl_vars['pi']->value) {
$_smarty_tpl->tpl_vars['pi']->_loop = true;
?>
                        <div class="form-group">
                            <label>Header <?php echo $_smarty_tpl->tpl_vars['pi']->value['language'];?>
 </label>
                            <input class="form-control" name="header_<?php echo $_smarty_tpl->tpl_vars['pi']->value['language'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['pi']->value['header'];?>
">
                        </div>

                        <div class="form-group">
                            <label>Description <?php echo $_smarty_tpl->tpl_vars['pi']->value['language'];?>
</label>
                            <textarea class="form-control ckeditor" rows="3" name="desc_<?php echo $_smarty_tpl->tpl_vars['pi']->value['language'];?>
"><?php echo $_smarty_tpl->tpl_vars['pi']->value['description'];?>
</textarea>
                        </div>
                        <input type="hidden" name="$header_update_<?php echo $_smarty_tpl->tpl_vars['pi']->value['language'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['pi']->value['parent_id'];?>
"/>
                    <?php } ?>
                    <button type="submit" class="btn btn-default">Edit</button>
                </form>
            </div>
        </div>
    <?php }?>


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
                    <div class="form-group">
                        <label>Header <?php echo $_smarty_tpl->tpl_vars['pi']->value['language'];?>
 </label>
                        <input class="form-control" name="header_<?php echo $_smarty_tpl->tpl_vars['pi']->value['language'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['pi']->value['header'];?>
">
                    </div>

                    <div class="form-group">
                        <label>Description <?php echo $_smarty_tpl->tpl_vars['pi']->value['language'];?>
</label>
                        <textarea class="form-control ckeditor" rows="3" name="desc_<?php echo $_smarty_tpl->tpl_vars['pi']->value['language'];?>
"><?php echo $_smarty_tpl->tpl_vars['pi']->value['description'];?>
</textarea>
                    </div>
                    <?php } ?>
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value[0]['ID'];?>
"/>
                    <button type="submit" class="btn btn-default">Edit</button>
                </form>
            </div>
        </div>
        <?php }?>

    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->

</div>

<?php }} ?>
