<div class="col-md-7 col-sm-12 main">
    <ul class="result_list">
        {if $results|@count == 0}
            По вашему запросу ничего не найдено
        {/if}
        {foreach $results as $r}
            <li><a href="{$root}/dream/{$r.ID}">{$r.header}</a></li>
        {/foreach}
    </ul>
</div>

