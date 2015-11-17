<div class="col-md-7 col-sm-12 main">
    {foreach $info_text as $it}
        <div class="info_header"><h1>{$it.header}</h1></div>
        <div class="info_text">{$it.description}</div>
    {/foreach}
</div>

