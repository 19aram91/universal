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
            <div class="col-lg-4">
                <form action="index.php" method="post" enctype="multipart/form-data" role="form">
                    <div class="form-group">
                        <label>Site name </label>
                        <input class="form-control" name="site_name" value="{$configs.site_name}">
                    </div>
                    <div class="form-group">
                        <label>Site title </label>
                        <input class="form-control" name="site_title" value="{$configs.site_title}">
                    </div>
                    <div class="form-group">
                        <label>Slogan </label>
                        <input class="form-control" name="slogan_name" value="{$configs.slogan_name}">
                    </div>
                    <div class="form-group">
                        {$slogan_bool = ($configs.slogan_show == 0) ? false : true}
                        <label>slogan</label>
                        <div class="cutom-cb">
                            <input type="checkbox" value="1" id="slideThree" name="slogan_show" {if $slogan_bool} checked {/if}/>
                            <label for="slideThree"></label>
                        </div>
                    </div>

                    <input type="hidden" name="action" value="edit_config"/>
                    <button type="submit" class="btn btn-default">Edit</button>
                </form>
            </div>

            <div class="col-lg-4">
                <div class="input-group demo2">
                    <label>BackGround Color</label>
                    <input type="text" class="form-control" name="bg_color" value="{$configs.bg_color}" />
                    <span class="input-group-addon"><i></i></span>
                </div>
                <div class="input-group demo2">
                    <label>Header & Footer Color</label>
                    <input type="text" class="form-control" name="hf_color" value="{$configs.hf_color}" />
                    <span class="input-group-addon"><i></i></span>
                </div>
                <div class="input-group demo2">
                    <label>Sides Color</label>
                    <input type="text" class="form-control" name="side_color" value="{$configs.side_color}" />
                    <span class="input-group-addon"><i></i></span>
                </div>
                <div class="input-group demo2">
                    <label>Main Color</label>
                    <input type="text" class="form-control" name="main_color" value="{$configs.main_color}" />
                    <span class="input-group-addon"><i></i></span>
                </div>
                <div class="input-group demo2">
                    <label>Font Color</label>
                    <input type="text" class="form-control" name="font_color" value="{$configs.font_color}" />
                    <span class="input-group-addon"><i></i></span>
                </div>
            </div>
        </div>
    </div>
</div>