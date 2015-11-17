<?php /* Smarty version Smarty-3.1.15, created on 2015-04-19 23:15:15
         compiled from ".\templates\feedback.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31374552572e9aea307-27720284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a11e67ec05e2fe0be2d046c6178d39c46cdbd82' => 
    array (
      0 => '.\\templates\\feedback.tpl',
      1 => 1429301709,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31374552572e9aea307-27720284',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_552572e9b40bc6_24065400',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552572e9b40bc6_24065400')) {function content_552572e9b40bc6_24065400($_smarty_tpl) {?><div class="col-md-7 col-sm-12 main">
    <div class="feedback">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-sm-8 col-sm-offset-2">
                <h1 class="page-header">
                    Свяжитесь с нами
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-sm-8 col-sm-offset-2">
                <div class="form-group">
                    <span id="msg-error"></span>
                    <span id="msg-success"></span>
                </div>
                <div class="form-group">
                    <label>Ваше имя* </label>
                    <input class="form-control" id="msg-name" maxlength="30">
                </div>
                <div class="form-group">
                    <label>Ваш e-mail адрес* </label>
                    <input class="form-control" id="msg-mail" maxlength="40">
                </div>
                <div class="form-group">
                    <label>Заголовок* </label>
                    <input class="form-control" id="msg-header" maxlength="200">
                </div>
                <div class="form-group">
                    <label>Сообщение*</label>
                    <textarea class="form-control ckeditor" rows="7" id="msg-desc" maxlength="1000"></textarea>
                </div>
                <div>
                    <img src="<?php echo $_SESSION['captcha']['image_src'];?>
" class="img-responsive" width="120px"/>
                </div>
                <div class="form-group">
                    <label>Введите текст с картинки* </label>
                    <input class="form-control" id="msg-captcha" size="100" maxlength="5">
                </div>
                <input type="hidden" name="action" value="add_dream"/>
                <button class="btn btn-default" id="send-msg">Отправить</button>

            </div>
        </div>
    </div>
</div>

<?php }} ?>
