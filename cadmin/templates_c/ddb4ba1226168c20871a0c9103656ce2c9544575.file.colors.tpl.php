<?php /* Smarty version Smarty-3.1.15, created on 2016-12-08 17:27:38
         compiled from "C:\xampp\htdocs\universal\cadmin\templates\colors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1107858495fca454059-87640807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddb4ba1226168c20871a0c9103656ce2c9544575' => 
    array (
      0 => 'C:\\xampp\\htdocs\\universal\\cadmin\\templates\\colors.tpl',
      1 => 1481113929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1107858495fca454059-87640807',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'colors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58495fca4c3f52_74918062',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58495fca4c3f52_74918062')) {function content_58495fca4c3f52_74918062($_smarty_tpl) {?><div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Colors
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <form method="post" action="?page=colors&action=editColors">

                    <label>BackGround Color</label>
                    <div class="input-group demo2">
                        <input type="text" class="form-control" name="bg_color" value="<?php echo $_smarty_tpl->tpl_vars['colors']->value['bg_color'];?>
"/>
                        <span class="input-group-addon"><i></i></span>
                    </div>

                    <label>Header & Footer Color</label>
                    <div class="input-group demo2">
                        <input type="text" class="form-control" name="hf_color" value="<?php echo $_smarty_tpl->tpl_vars['colors']->value['hf_color'];?>
"/>
                        <span class="input-group-addon"><i></i></span>
                    </div>

                    <label>Sides Color</label>
                    <div class="input-group demo2">
                        <input type="text" class="form-control" name="side_color" value="<?php echo $_smarty_tpl->tpl_vars['colors']->value['side_color'];?>
"/>
                        <span class="input-group-addon"><i></i></span>
                    </div>

                    <label>Main Color</label>
                    <div class="input-group demo2">
                        <input type="text" class="form-control" name="main_color" value="<?php echo $_smarty_tpl->tpl_vars['colors']->value['main_color'];?>
"/>
                        <span class="input-group-addon"><i></i></span>
                    </div>

                    <label>Font Color</label>
                    <div class="input-group demo2">
                        <input type="text" class="form-control" name="font_color" value="<?php echo $_smarty_tpl->tpl_vars['colors']->value['font_color'];?>
"/>
                        <span class="input-group-addon"><i></i></span>
                    </div>
                    <button type="submit" class="btn btn-default">Save</button>
                </form>
            </div>
        </div>
    </div>
</div><?php }} ?>
