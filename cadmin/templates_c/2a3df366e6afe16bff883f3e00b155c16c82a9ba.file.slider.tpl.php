<?php /* Smarty version Smarty-3.1.15, created on 2016-12-08 17:27:53
         compiled from "C:\xampp\htdocs\universal\cadmin\templates\slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2893558495fd9c9d203-74858555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a3df366e6afe16bff883f3e00b155c16c82a9ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\universal\\cadmin\\templates\\slider.tpl',
      1 => 1481113929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2893558495fd9c9d203-74858555',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'slider' => 0,
    'langs' => 0,
    'l' => 0,
    'slide' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58495fd9d994d1_23846493',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58495fd9d994d1_23846493')) {function content_58495fd9d994d1_23846493($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\universal\\libs\\plugins\\modifier.truncate.php';
?><div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <?php echo $_smarty_tpl->getConfigVariable('slider');?>
 -- <small>total <b><?php echo count($_smarty_tpl->tpl_vars['slider']->value);?>
</b> items</small> -- <small> <a href="#" onclick="$('.add-article').toggle('fast', 'linear')">Add New</a> </small>
                </h1>
            </div>

            <div class="col-lg-12 add-article disabled">
                <form action="?page=slider&action=set" method="post" enctype="multipart/form-data" role="form">
                    <div class="form-group">
                        <label>IMG</label>
                        <input type="file" name="slider_img">
                    </div>
                    <?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['langs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>
                    <div class="form-group">
                        <label>Description <?php echo $_smarty_tpl->tpl_vars['l']->value['name'];?>
</label>
                        <textarea class="form-control" rows="3" name="desc_<?php echo $_smarty_tpl->tpl_vars['l']->value['code'];?>
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
                <a href="?page=article">Back</a>
                <form action="?page=slider&action=edit" method="post" enctype="multipart/form-data" role="form">
                    <div class="form-group">
                        <img src="../img/slider/<?php echo $_smarty_tpl->tpl_vars['slide']->value[0]['img'];?>
" height="60" width="60">
                        <label>IMG</label>
                        <input type="file" name="slider_img">
                    </div>
                    <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slide']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
                    <div class="form-group">
                        <label>Description <?php echo $_smarty_tpl->tpl_vars['s']->value['lang'];?>
</label>
                        <textarea class="form-control" rows="3"
                                  name="desc_<?php echo $_smarty_tpl->tpl_vars['s']->value['lang'];?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value['description'];?>
</textarea>
                    </div>
                    <?php } ?>
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['slide']->value[0]['id'];?>
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
                            <th>Text</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slider']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
                            <tr>
                                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['s']->value['description'],100);?>
</td>
                                <td>
                                    <a href="?page=slider&action=editItem&id=<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
"><i class="fa fa-pencil fa-lg fa-fw"></i></a>
                                    <a onClick="return confirmDelete()" href="?page=slider&action=delete&id=<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
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

</div>

</div>

<?php }} ?>
