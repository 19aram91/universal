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
            {if $slogan_bool}
                <div class="logo-slog">{$conf.slogan_name}</div>
            {/if}
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="languages">
                {foreach $langs as $l}
                    <a {if isset($smarty.get.id)} href="{$root}/{$l.code}/{$page}/{$smarty.get.id}" {else} href="{$root}/{$l.code}/{$page}" {/if}>
                        <img src="{$root}/img/flags/{$l.flag}" title="{$l.name}">
                    </a>
                {/foreach}
            </div>
            <div class="searchbox">
                <input id="search-text" placeholder="{#search#}..."/>
            </div>
        </div>
    </div>
    <div class="row letter-nav" id="alfavit">
        <nav class="navbar navbar-default">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li {if $page == 'home' || $page == 'article'} class="active" {/if}><a href="{$root}">{#home#}</a></li>
                        {foreach $page_list as $pl}
                            <li {if $id == {$pl.ID}} class="active" {/if}><a href="{$root}/{$lang}/main/{$pl.ID}"> {$pl.header} </a></li>
                        {/foreach}
                        <li {if $page == 'feedback'} class="active" {/if}><a href="{$root}/{$lang}/feedback"> {#feedback#} </a></li>
                    </ul>
                </div>

            </div>
        </nav>
    </div>

    <div class="row carousel">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                {*<li data-target="#carousel-example-generic" data-slide-to="2"></li>*}
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="{$root}/img/articles/1.png" alt="...">
                    <div class="carousel-caption">
                        carousel 1
                    </div>
                </div>
                <div class="item">
                    <img src="{$root}/img/articles/2.png" alt="...">
                    <div class="carousel-caption">
                        carousel 1
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="row content">
