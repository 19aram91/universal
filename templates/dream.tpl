<div class="col-md-7 col-sm-12 main">
    {foreach $dream_text as $dt}
        <div class="dream_header"><h1>{$dt.header}</h1></div>
        <div class="dream_img"><img class="img-responsive" width="300" src="{#root#}/img/dreambook/{$dt.img}"></div>
        <div class="dream_text"><h2>{$dt.description}</h2></div>
    {/foreach}

    <div class="addthis_sharing_toolbox"></div>
</div>

