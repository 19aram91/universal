<?php /* Smarty version Smarty-3.1.15, created on 2016-12-07 16:36:29
         compiled from ".\templates\feedback.tpl" */ ?>
<?php /*%%SmartyHeaderCode:154595848024db21853-79432283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a11e67ec05e2fe0be2d046c6178d39c46cdbd82' => 
    array (
      0 => '.\\templates\\feedback.tpl',
      1 => 1481113937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154595848024db21853-79432283',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fb_conf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5848024dbad9d9_68989094',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5848024dbad9d9_68989094')) {function content_5848024dbad9d9_68989094($_smarty_tpl) {?><div class="col-md-9 col-sm-12 main">

    <div class="feedback">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <p>
                    <?php echo $_smarty_tpl->tpl_vars['fb_conf']->value['contact'];?>

                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <p>
                <div id="googleMap"></div>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-sm-8 col-sm-offset-2">
                <h1 class="page-header">
                    <?php echo $_smarty_tpl->getConfigVariable('getInTouch');?>

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
                    <label><?php echo $_smarty_tpl->getConfigVariable('name');?>
* </label>
                    <input class="form-control" id="msg-name" maxlength="30">
                </div>
                <div class="form-group">
                    <label><?php echo $_smarty_tpl->getConfigVariable('mail');?>
* </label>
                    <input class="form-control" id="msg-mail" maxlength="40">
                </div>
                <div class="form-group">
                    <label><?php echo $_smarty_tpl->getConfigVariable('title');?>
* </label>
                    <input class="form-control" id="msg-header" maxlength="200">
                </div>
                <div class="form-group">
                    <label><?php echo $_smarty_tpl->getConfigVariable('message');?>
*</label>
                    <textarea class="form-control ckeditor" rows="7" id="msg-desc" maxlength="1000"></textarea>
                </div>
                <div>
                    <img src="<?php echo $_SESSION['captcha']['image_src'];?>
" class="img-responsive" width="120px"/>
                </div>
                <div class="form-group">
                    <label><?php echo $_smarty_tpl->getConfigVariable('captchaText');?>
* </label>
                    <input class="form-control" id="msg-captcha" size="100" maxlength="5">
                </div>
                <input type="hidden" name="action" value="add_dream"/>
                <button class="btn btn-default" id="send-msg"><?php echo $_smarty_tpl->getConfigVariable('send');?>
</button>

            </div>
        </div>
    </div>
</div>

<script src="http://maps.googleapis.com/maps/api/js"></script>

<script>
    var lat = <?php echo $_smarty_tpl->tpl_vars['fb_conf']->value['latitude'];?>
 ;
    var long = <?php echo $_smarty_tpl->tpl_vars['fb_conf']->value['longitude'];?>
 ;
</script>


    <script>
        var myCenter=new google.maps.LatLng(lat, long);
        var marker;

        function initialize()
        {
            var mapProp = {
                center:myCenter,
                zoom:14,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };

            var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

            var marker=new google.maps.Marker({
                position:myCenter,

            });

            marker.setMap(map);
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

<?php }} ?>
