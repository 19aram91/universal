<?php /* Smarty version Smarty-3.1.15, created on 2016-12-09 17:32:25
         compiled from ".\templates\article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13579584ab269624f07-47403848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a258164b56a279caa5204f5d224599d31ab77a07' => 
    array (
      0 => '.\\templates\\article.tpl',
      1 => 1481113937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13579584ab269624f07-47403848',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'article_text' => 0,
    'root' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_584ab269666c46_66584060',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584ab269666c46_66584060')) {function content_584ab269666c46_66584060($_smarty_tpl) {?><div class="col-md-9 col-sm-12 main">
    <div class="article_header"><h1><?php echo $_smarty_tpl->tpl_vars['article_text']->value['header'];?>
</h1></div>
    <div class="article_date"><h3><?php echo $_smarty_tpl->tpl_vars['article_text']->value['created'];?>
</h3></div>
    <div class="article_img"><img class="img-responsive" width="300" src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/img/articles/<?php echo $_smarty_tpl->tpl_vars['article_text']->value['img'];?>
"></div>
    <div class="article_text"><h2><?php echo $_smarty_tpl->tpl_vars['article_text']->value['info_text'];?>
</h2></div>
    <div class="addthis_sharing_toolbox"></div>
</div>

<?php }} ?>
