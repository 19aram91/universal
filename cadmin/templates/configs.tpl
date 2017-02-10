<div id="page-wrapper">

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Configurations
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <form action="?page=configs&action=editConfigs" method="post" enctype="multipart/form-data" role="form">
                    {foreach $conf as $c}
                        <div class="form-group">
                            <label>Site name in {$c.lang}</label>
                            <input class="form-control" name="site_name_{$c.lang}" value="{$c.site_name}">
                        </div>
                        <div class="form-group">
                            <label>Site title in {$c.lang}</label>
                            <input class="form-control" name="site_title_{$c.lang}" value="{$c.site_title}">
                        </div>
                        <div class="form-group">
                            <label>Slogan in {$c.lang}</label>
                            <input class="form-control" name="slogan_name_{$c.lang}" value="{$c.slogan_name}">
                        </div>
                        <label>Keywords in {$c.lang}</label>
                        <div class="form-group">
                            <textarea name="keywords_{$c.lang}">{$c.keywords}</textarea>
                        </div>
                        <label>Description in {$c.lang}</label>
                        <div class="form-group">
                            <textarea name="description_{$c.lang}"> {$c.description} </textarea>
                        </div>
                        <hr />
                    {/foreach}
                    <div class="form-group">
                        {$slogan_bool = ($conf[0].slogan_show == 0) ? false : true}
                        <label>slogan</label>

                        <div class="cutom-cb">
                            <input type="checkbox" value="1" id="slideThree"
                                   name="slogan_show" {if $slogan_bool} checked {/if}/>
                            <label for="slideThree"></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Favicon </label>
                        <img src="../img/favicon.ico"/>
                        <input type="file" name="favicon">
                    </div>


                    <div class="form-group">
                        {$slogan_bool_logo = ($conf[1].slogan_show == 0) ? false : true}
                        <label>Logo Img</label>

                        <div class="cutom-cb">
                            <input type="checkbox" value="1" id="slideThreeLogo"
                                   name="slogan_show_logo" {if $slogan_bool_logo} checked {/if}/>
                            <label for="slideThreeLogo"></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Logo </label>
                        <img src="../img/logo/logo.png" style="height: 50px;width: 50px;"/>
                        <input type="file" name="logo">
                    </div>

                    <button type="submit" class="btn btn-default">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>