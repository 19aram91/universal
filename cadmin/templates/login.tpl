<!DOCTYPE html>
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

{literal}
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

        $(document).on("keydown", "#user, #pass", function(e){
            if(e.which == 13){
                $('#signup').click();
            }
        });
    </script>
{/literal}

</body>
</html>