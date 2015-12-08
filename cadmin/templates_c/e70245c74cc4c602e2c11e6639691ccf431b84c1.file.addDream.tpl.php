<?php /* Smarty version Smarty-3.1.15, created on 2015-03-15 21:02:56
         compiled from "C:\xampp\htdocs\sonnik_new\cadmin\templates\addDream.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153095505dcfb043de6-13096703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e70245c74cc4c602e2c11e6639691ccf431b84c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sonnik_new\\cadmin\\templates\\addDream.tpl',
      1 => 1426449504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153095505dcfb043de6-13096703',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5505dcfb06dc76_51280950',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5505dcfb06dc76_51280950')) {function content_5505dcfb06dc76_51280950($_smarty_tpl) {?><div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Add Dream
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <form action="index.php" method="post" enctype="multipart/form-data" role="form">
                    <div class="form-group">
                        <label>Header </label>
                        <input class="form-control" name="dream_header">
                    </div>
                    <div class="form-group">
                        <label>IMG</label>
                        <input type="file" name="dream_img">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control ckeditor" rows="3" name="dream_desc"></textarea>
                    </div>
                    <input type="hidden" name="action" value="add_dream"/>
                    <button type="submit" class="btn btn-default">Add</button>
                </form>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div><?php }} ?>
