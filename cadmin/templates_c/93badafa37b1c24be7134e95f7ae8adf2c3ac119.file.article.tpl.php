<?php /* Smarty version Smarty-3.1.15, created on 2016-12-08 17:30:25
         compiled from "C:\xampp\htdocs\universal\cadmin\templates\article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1576858496071a8cda7-08627810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93badafa37b1c24be7134e95f7ae8adf2c3ac119' => 
    array (
      0 => 'C:\\xampp\\htdocs\\universal\\cadmin\\templates\\article.tpl',
      1 => 1481113929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1576858496071a8cda7-08627810',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'articles' => 0,
    'langs' => 0,
    'l' => 0,
    'article' => 0,
    'a' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58496071b2c559_37909818',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58496071b2c559_37909818')) {function content_58496071b2c559_37909818($_smarty_tpl) {?><div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <?php echo $_smarty_tpl->getConfigVariable('article');?>
 -- <small>total <b><?php echo count($_smarty_tpl->tpl_vars['articles']->value);?>
</b> items</small> -- <small> <a href="#" onclick="$('.add-article').toggle('fast', 'linear')">Add New</a> </small>
                </h1>
            </div>

            <div class="col-lg-12 add-article disabled">
                <form action="?page=article&action=set" method="post" enctype="multipart/form-data" role="form">
                    <div class="form-group">
                        <label>IMG</label>
                        <input type="file" name="article_img">
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
                <a href="?page=article">Back</a>
                <form action="?page=article&action=edit" method="post" enctype="multipart/form-data" role="form">
                    <div class="form-group">
                        <img src="../img/articles/<?php echo $_smarty_tpl->tpl_vars['article']->value[0]['img'];?>
" height="60" width="60">
                        <label>IMG</label>
                        <input type="file" name="article_img">
                    </div>
                    <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
                    <div class="form-group">
                        <label>Header <?php echo $_smarty_tpl->tpl_vars['a']->value['lang'];?>
</label>
                        <input class="form-control" name="header_<?php echo $_smarty_tpl->tpl_vars['a']->value['lang'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['a']->value['header'];?>
">
                    </div>                    
                    <div class="form-group">
                        <label>Description <?php echo $_smarty_tpl->tpl_vars['a']->value['lang'];?>
</label>
                        <textarea class="form-control ckeditor" rows="3"
                                  name="desc_<?php echo $_smarty_tpl->tpl_vars['a']->value['lang'];?>
"><?php echo $_smarty_tpl->tpl_vars['a']->value['info_text'];?>
</textarea>
                    </div>
                    <?php } ?>
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['article']->value[0]['id'];?>
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
                            <th>Count</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['a']->value['header'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['a']->value['watch_count'];?>
</td>
                                <td>
                                    <a href="?page=article&action=editItem&id=<?php echo $_smarty_tpl->tpl_vars['a']->value['id'];?>
"><i class="fa fa-pencil fa-lg fa-fw"></i></a>
                                    <a onClick="return confirmDelete()" href="?page=article&action=delete&id=<?php echo $_smarty_tpl->tpl_vars['a']->value['id'];?>
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
