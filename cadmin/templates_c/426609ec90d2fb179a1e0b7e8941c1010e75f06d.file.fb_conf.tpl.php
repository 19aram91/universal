<?php /* Smarty version Smarty-3.1.15, created on 2016-12-08 17:30:19
         compiled from "C:\xampp\htdocs\universal\cadmin\templates\fb_conf.tpl" */ ?>
<?php /*%%SmartyHeaderCode:316115849606b71f1e6-81893165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '426609ec90d2fb179a1e0b7e8941c1010e75f06d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\universal\\cadmin\\templates\\fb_conf.tpl',
      1 => 1481113929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '316115849606b71f1e6-81893165',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fb_conf' => 0,
    'fb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5849606b7ae0d0_80035845',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5849606b7ae0d0_80035845')) {function content_5849606b7ae0d0_80035845($_smarty_tpl) {?><div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">

            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <a href="?page=article">Back</a>

                <form action="?page=fb_conf&action=edit" method="post" enctype="multipart/form-data" role="form">
                    <div class="form-group">
                        <label>Latitude </label>
                        <input class="form-control" name="lat" value="<?php echo $_smarty_tpl->tpl_vars['fb_conf']->value[0]['latitude'];?>
">
                    </div>
                    <div class="form-group">
                        <label>Longitude </label>
                        <input class="form-control" name="long" value="<?php echo $_smarty_tpl->tpl_vars['fb_conf']->value[0]['longitude'];?>
">
                    </div>
                    <?php  $_smarty_tpl->tpl_vars['fb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fb_conf']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fb']->key => $_smarty_tpl->tpl_vars['fb']->value) {
$_smarty_tpl->tpl_vars['fb']->_loop = true;
?>
                    <div class="form-group">
                        <label>Text in <?php echo $_smarty_tpl->tpl_vars['fb']->value['lang'];?>
</label>
                        <textarea class="form-control ckeditor" rows="3"
                                  name="contact_<?php echo $_smarty_tpl->tpl_vars['fb']->value['lang'];?>
"><?php echo $_smarty_tpl->tpl_vars['fb']->value['contact'];?>
</textarea>
                    </div>
                    <?php } ?>
                    <button type="submit" class="btn btn-default">Edit</button>
                </form>
            </div>
        </div>
    </div>

</div>

</div>

<?php }} ?>
