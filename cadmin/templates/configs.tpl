<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
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
                        <input class="form-control" name="site_name" value="{$configs[0].site_name}">
                    </div>
                    <div class="form-group">
                        <label>Slogan </label>
                        <input class="form-control" name="slogan_name" value="{$configs[0].slogan_name}">
                    </div>
                    <div class="form-group">
                        {$slogan_bool = ($configs[0].slogan_show == 0) ? false : true}
                        <label>slogan</label>
                        <input type="checkbox" {if $slogan_bool} checked {/if} value="1" name="slogan_show">
                    </div>
                    <div class="input-group demo2">
                        <label>BackGround Color</label>
                        <input type="text" value="" class="form-control" />
                        <span class="input-group-addon"><i></i></span>
                    </div>
                    <div class="input-group demo2">
                        <label>Header & Footer Color</label>
                        <input type="text" value="" class="form-control" />
                        <span class="input-group-addon"><i></i></span>
                    </div>
                    <div class="input-group demo2">
                        <label>Sides Color</label>
                        <input type="text" value="" class="form-control" />
                        <span class="input-group-addon"><i></i></span>
                    </div>
                    <div class="input-group demo2">
                        <label>Main Color</label>
                        <input type="text" value="" class="form-control" />
                        <span class="input-group-addon"><i></i></span>
                    </div>

                    <input type="hidden" name="action" value="edit_config"/>
                    <button type="submit" class="btn btn-default">Edit</button>
                </form>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>