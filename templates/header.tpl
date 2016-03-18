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
                    <a {if isset($smarty.get.id)} href="{$root}/{$l.code}/{$page}/{$smarty.get.id}" {else} href="{$root}/{$l.code}/{$page}" {/if}
                            >
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
                        <li class="active"><a href="{$root}">{#home#}</a></li>
                        {foreach $page_list as $pl}
                            <li><a href="{$root}/{$lang}/main/{$pl.ID}"> {$pl.header} </a></li>
                        {/foreach}
                        <li><a href="{$root}/{$lang}/feedback"> {#feedback#} </a></li>
                    </ul>
                </div>

            </div>
        </nav>
    </div>

    <div class="row content">
