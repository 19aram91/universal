<?php /* Smarty version Smarty-3.1.15, created on 2017-01-31 19:03:31
         compiled from ".\templates\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15578584801c4059278-54187220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1be7ff7fdee636597edd726ee98dfef4bfd55d1f' => 
    array (
      0 => '.\\templates\\footer.tpl',
      1 => 1485875009,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15578584801c4059278-54187220',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_584801c4079028_07868275',
  'variables' => 
  array (
    'top_article_list' => 0,
    'root' => 0,
    'lang' => 0,
    'al' => 0,
    'conf' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584801c4079028_07868275')) {function content_584801c4079028_07868275($_smarty_tpl) {?><div class="col-md-3 col-sm-12 advertisement">
    <?php echo $_smarty_tpl->getConfigVariable('latestNews');?>

    <ul>
        <?php  $_smarty_tpl->tpl_vars['al'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['al']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['top_article_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['al']->key => $_smarty_tpl->tpl_vars['al']->value) {
$_smarty_tpl->tpl_vars['al']->_loop = true;
?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
/article/<?php echo $_smarty_tpl->tpl_vars['al']->value['created'];?>
"><?php echo $_smarty_tpl->tpl_vars['al']->value['header'];?>
</a></li>
        <?php } ?>
    </ul>
    <hr/>
    
</div>
</div>
<div class="row footer">
    <span class="copyright">&copy; <?php echo date('Y');?>
 <?php echo $_smarty_tpl->tpl_vars['conf']->value['site_name'];?>
 . <?php echo $_smarty_tpl->getConfigVariable('rights');?>
.</span>
</div>
</div>

<script src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/js/jquery.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/js/functions.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/js/bootstrap.min.js"></script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4ec38c2d02eaf023"
        async="async"></script>


</body>
</html><?php }} ?>
