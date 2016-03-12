{config_load file="../configs/vocab.conf" section="user_am"}
{$page =(isset($smarty.get.page)) ? $smarty.get.page : 'home'}

{include file='header.tpl'}
{if file_exists('templates/'|cat:$page|cat:".tpl")}
    {include file=$page|cat:".tpl"}
{else}
    {include file="404.tpl"}
{/if}
{include file='footer.tpl'}


