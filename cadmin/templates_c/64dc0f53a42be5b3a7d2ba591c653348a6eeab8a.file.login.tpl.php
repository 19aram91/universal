<?php /* Smarty version Smarty-3.1.15, created on 2015-04-27 21:34:44
         compiled from "templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13499553e8e11e68994-48582386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64dc0f53a42be5b3a7d2ba591c653348a6eeab8a' => 
    array (
      0 => 'templates\\login.tpl',
      1 => 1430163283,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13499553e8e11e68994-48582386',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553e8e11eaae22_75766308',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553e8e11eaae22_75766308')) {function content_553e8e11eaae22_75766308($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>My-dreambook</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="icon" href="img/favicon.ico">
    <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h5 class="text-center">
                        My-dreambook Admin Page</h5>
                    <form class="form form-signup" role="form">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <input type="text" class="form-control" placeholder="Username" id="user" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                <input type="password" class="form-control" placeholder="Password" id="pass" />
                            </div>
                        </div>
                        <div class="form-group">
                                <span class="input-group-addon" style="display: none" id="response"></span>
                        </div>
                </div>
                <a class="btn btn-sm btn-primary btn-block" role="button" id="signup">SIGN UP</a> </form>
            </div>
        </div>
    </div>
</div>
</div>

<script src="../js/jquery.js"></script>


    <script>
        $('#signup').click(function(){
            var user = $('#user').val();
            var pass = $('#pass').val();

            if(user == '' || pass == ''){
                $('#response').css('display', 'table-cell');
                $('#response').html('Please fill both fields');
                return false;
            }

            $.ajax({
                type: "POST",
                url: "index.php",
                data: {'action': 'login', 'user': user, 'pass': pass}
            }).done(function(response){
                var resp = JSON.parse(response);
                if(resp.error){
                    $('#response').css('display', 'table-cell');
                    $('#response').html(resp.error);
                }
                if (resp.success) {
                    window.location.href = 'index.php';
                }

            });

        });
    </script>


</body>
</html><?php }} ?>
