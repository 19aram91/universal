<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Сонник</title>
    <meta charset="utf-8">
    <meta name="description" content="Сонник онлайн, толкование снов">
    <meta name="keywords" content="сонник, сон, толкование снов, сновидение, sonnik, видеть во сне">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{$root}/img/favicon.ico" type="image/x-icon"/>
    <!-- Bootstrap -->
    <link href="{$root}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{$root}/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">
    <div class="row header">
        <div class="col-md-6 col-sm-6 col-xs-12 logo">
            {$slogan_bool = ($conf[0].slogan_show == 0) ? false : true}
            <div class="logo-head"><a href="{$root}"> {$conf[0].site_name} </a></div>
            {if $slogan_bool} <div class="logo-slog">{$conf[0].slogan_name}</div> {/if}
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="searchbox">
                <input id="search-text" placeholder="что вам снилось?"/>
                <button id="word-search" class="searchbtn">Искать!</button>
            </div>
        </div>
    </div>
    <div class="row letter-nav" id="alfavit">
        <p class="text-center">
            <span class="letter">А</span>
            <span class="letter">Б</span>
            <span class="letter">В</span>
            <span class="letter">Г</span>
            <span class="letter">Д</span>
            <span class="letter">Е</span>
            <span class="letter">Ж</span>
            <span class="letter">З</span>
            <span class="letter">И</span>
            <span class="letter">К</span>
            <span class="letter">Л</span>
            <span class="letter">М</span>
            <span class="letter">Н</span>
            <span class="letter">О</span>
            <span class="letter">П</span>
            <span class="letter">Р</span>
            <span class="letter">С</span>
            <span class="letter">Т</span>
            <span class="letter">У</span>
            <span class="letter">Ф</span>
            <span class="letter">Х</span>
            <span class="letter">Ц</span>
            <span class="letter">Ш</span>
            <span class="letter">Щ</span>
            <span class="letter">Э</span>
            <span class="letter">Ю</span>
            <span class="letter">Я</span>
        </p>
    </div>

    <div class="row content">
        <div class="col-md-2 col-sm-12 additional">
            <div class="navs">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <label>Top 10 запрашиваемые сны</label>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#resp-nav">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="resp-nav">
                        <ul class="nav navbar-nav">
                            {foreach $top_dream_list as $tdl}
                                <li><a href="{$root}/dream/{$tdl.ID}"> {$tdl.header} </a></li>
                            {/foreach}
                        </ul>
                    </div>
                </nav>

                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <label>Интересные факты</label>
                    </div>
                    <ul class="nav navbar-nav">
                        {foreach $info_list as $il}
                            <li><a href="{$root}/info/{$il.ID}"> {$il.header} </a></li>
                        {/foreach}
                    </ul>
                </nav>
                <hr />
                <nav class="navbar navbar-default">
                    <ul class="nav navbar-nav">
                            <li><a href="{$root}/horoscope/1"> Ежедневный гороскоп </a></li>
                    </ul>
                </nav>
            </div>
        </div>