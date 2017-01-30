<?php /* Smarty version Smarty-3.1.15, created on 2016-12-08 17:28:12
         compiled from "C:\xampp\htdocs\universal\cadmin\templates\languages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2923658495fec878238-50515726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fb407bdbc40a47ef826f2814ac34a8735f7dc9c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\universal\\cadmin\\templates\\languages.tpl',
      1 => 1481113929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2923658495fec878238-50515726',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'languages' => 0,
    'l' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58495fec8dd4c4_41009533',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58495fec8dd4c4_41009533')) {function content_58495fec8dd4c4_41009533($_smarty_tpl) {?><div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <?php echo $_smarty_tpl->getConfigVariable('languages');?>

                </h1>
            </div>

        <div class="row">
            <div class="col-lg-3">
                <div>
                    <form action="index.php?page=languages&action=set" method="post" enctype="multipart/form-data">
                        <input name="code" maxlength="2" placeholder="language code">
                        <input name="name" placeholder="language name">
                        <input name="flag" type="file">
                        <input type="submit">
                    </form>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Flag</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['l']->value['code'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['l']->value['name'];?>
</td>
                                <td><img src="../img/flags/<?php echo $_smarty_tpl->tpl_vars['l']->value['flag'];?>
" width="20px"> </td>
                                <td>
                                    <a onClick="return confirmDelete()" href="?page=languages&action=delete&id=<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
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
