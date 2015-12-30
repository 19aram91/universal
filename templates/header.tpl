<!DOCTYPE html>
<html lang="ru">
<head>
    <title>{$conf.site_title}</title>
    <meta charset="utf-8">
    <meta name="description" content="{$conf.description}">
    <meta name="keywords" content="{$conf.keywords}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{$root}/img/favicon.ico" type="image/x-icon"/>

    <link href="{$root}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{$root}/css/custom.css" rel="stylesheet">
    <link href="{$root}/css/style.css" rel="stylesheet">

</head>

<body>

<div class="container">
    <div class="row header">
        <div class="col-md-6 col-sm-6 col-xs-12 logo">
            {$slogan_bool = ($conf.slogan_show == 0) ? false : true}
            <div class="logo-head"><a href="{$root}"> {$conf.site_name} </a></div>
            {if $slogan_bool} <div class="logo-slog">{$conf.slogan_name}</div> {/if}
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