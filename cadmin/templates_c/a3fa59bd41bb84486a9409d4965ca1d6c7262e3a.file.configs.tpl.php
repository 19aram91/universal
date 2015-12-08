<?php /* Smarty version Smarty-3.1.15, created on 2015-11-25 18:00:14
         compiled from "C:\UwAmp\www\universal\cadmin\templates\configs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168295654901cd92448-05003619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3fa59bd41bb84486a9409d4965ca1d6c7262e3a' => 
    array (
      0 => 'C:\\UwAmp\\www\\universal\\cadmin\\templates\\configs.tpl',
      1 => 1448459992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168295654901cd92448-05003619',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5654901ce3d226_75890507',
  'variables' => 
  array (
    'configs' => 0,
    'slogan_bool' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5654901ce3d226_75890507')) {function content_5654901ce3d226_75890507($_smarty_tpl) {?><div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Configurations
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <form action="index.php" method="post" enctype="multipart/form-data" role="form">
                    <div class="form-group">
                        <label>Site name </label>
                        <input class="form-control" name="site_name" value="<?php echo $_smarty_tpl->tpl_vars['configs']->value[0]['site_name'];?>
">
                    </div>
                    <div class="form-group">
                        <label>Slogan </label>
                        <input class="form-control" name="slogan_name" value="<?php echo $_smarty_tpl->tpl_vars['configs']->value[0]['slogan_name'];?>
">
                    </div>
                    <div class="form-group">
                        <?php $_smarty_tpl->tpl_vars['slogan_bool'] = new Smarty_variable($_smarty_tpl->tpl_vars['configs']->value[0]['slogan_show']==0 ? false : true, null, 0);?>
                        <label>Show slogan</label>
                        <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['slogan_bool']->value) {?> checked <?php }?> value="1" name="slogan_show">
                    </div>
                    <div class="input-group demo2">
                        <input type="text" value="" class="form-control" />
                        <span class="input-group-addon"><i></i></span>
                    </div>
                    <input type="hidden" name="action" value="edit_config"/>
                    <button type="submit" class="btn btn-default">Edit</button>
                </form>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div><?php }} ?>
