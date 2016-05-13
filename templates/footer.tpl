<div class="col-md-3 col-sm-12 advertisement">
    {#latestNews#}
    <ul>
        {foreach $top_article_list as $al}
            <li><a href="{$root}/{$lang}/article/{$al.created}">{$al.header}</a></li>
        {/foreach}
    </ul>
    <hr/>
    {*Advertisement !!!*}
</div>
</div>
<div class="row footer">
    <span class="copyright">&copy; {'Y'|date} {$conf.site_name} . {#rights#}.</span>
</div>
</div>

<script src="{$root}/js/jquery.js"></script>
<script src="{$root}/js/functions.js"></script>
<script src="{$root}/js/bootstrap.min.js"></script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4ec38c2d02eaf023"
        async="async"></script>


</body>
</html>