<?php /* Smarty version Smarty-3.1.15, created on 2015-03-26 22:11:28
         compiled from "C:\xampp\htdocs\sonnik_new\cadmin\templates\add_dream.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207835505fa0d1865e7-35325981%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a25cd231c08319430b07729f7965794f25329ae0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sonnik_new\\cadmin\\templates\\add_dream.tpl',
      1 => 1427404285,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207835505fa0d1865e7-35325981',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5505fa0d1aab72_62507052',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5505fa0d1aab72_62507052')) {function content_5505fa0d1aab72_62507052($_smarty_tpl) {?><div id="page-wrapper">

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
