<?php /* Smarty version Smarty-3.1.15, created on 2017-02-10 15:05:53
         compiled from "C:\xampp\htdocs\universal\cadmin\templates\configs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2724358495fafdfbb79-83512499%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae600808c36097c6b28aa0d1cc52e61c9249d7d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\universal\\cadmin\\templates\\configs.tpl',
      1 => 1486724752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2724358495fafdfbb79-83512499',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58495fafec9676_01063673',
  'variables' => 
  array (
    'conf' => 0,
    'c' => 0,
    'slogan_bool' => 0,
    'slogan_bool_logo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58495fafec9676_01063673')) {function content_58495fafec9676_01063673($_smarty_tpl) {?><div id="page-wrapper">

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Configurations
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <form action="?page=configs&action=editConfigs" method="post" enctype="multipart/form-data" role="form">
                    <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['conf']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                        <div class="form-group">
                            <label>Site name in <?php echo $_smarty_tpl->tpl_vars['c']->value['lang'];?>
</label>
                            <input class="form-control" name="site_name_<?php echo $_smarty_tpl->tpl_vars['c']->value['lang'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['site_name'];?>
">
                        </div>
                        <div class="form-group">
                            <label>Site title in <?php echo $_smarty_tpl->tpl_vars['c']->value['lang'];?>
</label>
                            <input class="form-control" name="site_title_<?php echo $_smarty_tpl->tpl_vars['c']->value['lang'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['site_title'];?>
">
                        </div>
                        <div class="form-group">
                            <label>Slogan in <?php echo $_smarty_tpl->tpl_vars['c']->value['lang'];?>
</label>
                            <input class="form-control" name="slogan_name_<?php echo $_smarty_tpl->tpl_vars['c']->value['lang'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['slogan_name'];?>
">
                        </div>
                        <label>Keywords in <?php echo $_smarty_tpl->tpl_vars['c']->value['lang'];?>
</label>
                        <div class="form-group">
                            <textarea name="keywords_<?php echo $_smarty_tpl->tpl_vars['c']->value['lang'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['keywords'];?>
</textarea>
                        </div>
                        <label>Description in <?php echo $_smarty_tpl->tpl_vars['c']->value['lang'];?>
</label>
                        <div class="form-group">
                            <textarea name="description_<?php echo $_smarty_tpl->tpl_vars['c']->value['lang'];?>
"> <?php echo $_smarty_tpl->tpl_vars['c']->value['description'];?>
 </textarea>
                        </div>
                        <hr />
                    <?php } ?>
                    <div class="form-group">
                        <?php $_smarty_tpl->tpl_vars['slogan_bool'] = new Smarty_variable($_smarty_tpl->tpl_vars['conf']->value[0]['slogan_show']==0 ? false : true, null, 0);?>
                        <label>slogan</label>

                        <div class="cutom-cb">
                            <input type="checkbox" value="1" id="slideThree"
                                   name="slogan_show" <?php if ($_smarty_tpl->tpl_vars['slogan_bool']->value) {?> checked <?php }?>/>
                            <label for="slideThree"></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Favicon </label>
                        <img src="../img/favicon.ico"/>
                        <input type="file" name="favicon">
                    </div>


                    <div class="form-group">
                        <?php $_smarty_tpl->tpl_vars['slogan_bool_logo'] = new Smarty_variable($_smarty_tpl->tpl_vars['conf']->value[1]['slogan_show']==0 ? false : true, null, 0);?>
                        <label>Logo Img</label>

                        <div class="cutom-cb">
                            <input type="checkbox" value="1" id="slideThreeLogo"
                                   name="slogan_show_logo" <?php if ($_smarty_tpl->tpl_vars['slogan_bool_logo']->value) {?> checked <?php }?>/>
                            <label for="slideThreeLogo"></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Logo </label>
                        <img src="../img/logo/logo.png" style="height: 50px;width: 50px;"/>
                        <input type="file" name="logo">
                    </div>

                    <button type="submit" class="btn btn-default">Save</button>
                </form>
            </div>
        </div>
    </div>
</div><?php }} ?>
