{config_load file="../configs/vocab.conf" section="admin"}
{$page =(isset($smarty.get.page)) ? $smarty.get.page : 'dreambook'}

{include file='../templates/header.tpl'}
{include file='../templates/'|cat:$page|cat:'.tpl'}
{include file='../templates/footer.tpl'}