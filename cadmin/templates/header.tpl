<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/favicon.ico">

    <title>CAdmin</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../js/plugins/colorPicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../css/jquery-ui.css" rel="stylesheet">

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">{$configs.site_name}'s Admin Page</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b
                            class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="?page=files"><i class="fa fa-fw fa-file-text"></i> {#files#}</a>
                    </li>
                    <li>
                        <a href="?page=feedback"><i class="fa fa-fw fa-envelope"></i> {#inbox#}</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="?page=login&action=leave"><i class="fa fa-fw fa-power-off"></i> {#logout#}</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li {if $page=="configs"}class="active" {/if}><a href="?page=configs"><i class="fa fa-fw fa-star"></i> {#conf#}</a></li>
                <li {if $page=="languages"}class="active" {/if}><a href="?page=languages"><i class="fa fa-fw fa-star"></i> {#languages#}</a></li>
                <li {if $page=="article"}class="active" {/if}><a href="?page=article"><i class="fa fa-fw fa-star"></i> {#article#}</a></li>
                <li {if $page=="pages"}class="active" {/if}><a href="?page=pages"><i class="fa fa-fw fa-info"></i> {#pages#}</a></li>
                <li {if $page=="main"}class="active" {/if}><a href="?page=main"><i class="fa fa-fw fa-desktop"></i> {#main#}</a></li>
                <li {if $page=="fb_conf"}class="active" {/if}><a href="?page=fb_conf"><i class="fa fa-fw fa-desktop"></i> {#feedback#}</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>