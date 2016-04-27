<div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Colors
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <form method="post" action="?page=colors&action=editColors">

                    <label>BackGround Color</label>
                    <div class="input-group demo2">
                        <input type="text" class="form-control" name="bg_color" value="{$colors.bg_color}"/>
                        <span class="input-group-addon"><i></i></span>
                    </div>

                    <label>Header & Footer Color</label>
                    <div class="input-group demo2">
                        <input type="text" class="form-control" name="hf_color" value="{$colors.hf_color}"/>
                        <span class="input-group-addon"><i></i></span>
                    </div>

                    <label>Sides Color</label>
                    <div class="input-group demo2">
                        <input type="text" class="form-control" name="side_color" value="{$colors.side_color}"/>
                        <span class="input-group-addon"><i></i></span>
                    </div>

                    <label>Main Color</label>
                    <div class="input-group demo2">
                        <input type="text" class="form-control" name="main_color" value="{$colors.main_color}"/>
                        <span class="input-group-addon"><i></i></span>
                    </div>

                    <label>Font Color</label>
                    <div class="input-group demo2">
                        <input type="text" class="form-control" name="font_color" value="{$colors.font_color}"/>
                        <span class="input-group-addon"><i></i></span>
                    </div>
                    <button type="submit" class="btn btn-default">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>