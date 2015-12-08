<?php /* Smarty version Smarty-3.1.15, created on 2015-03-28 12:50:38
         compiled from "C:\xampp\htdocs\sonnik_new\cadmin\templates\add_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27050550602d370fc53-15869682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d1e67e6793795ef0eb289c719edd9ff37baa84f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sonnik_new\\cadmin\\templates\\add_info.tpl',
      1 => 1427409138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27050550602d370fc53-15869682',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_550602d3730a08_36494767',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550602d3730a08_36494767')) {function content_550602d3730a08_36494767($_smarty_tpl) {?><div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Add Info
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <form action="index.php" method="post" enctype="multipart/form-data" role="form">
                    <div class="form-group">
                        <label>Header </label>
                        <input class="form-control" name="info_header">
                    </div>
                    <div class="form-group">
                        <label>Position </label>
                        <input type="number" class="form-control" name="info_pos">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control ckeditor" rows="3" name="info_desc"></textarea>
                    </div>
                    <input type="hidden" name="action" value="add_info"/>
                    <button type="submit" class="btn btn-default">Add</button>
                </form>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div><?php }} ?>
