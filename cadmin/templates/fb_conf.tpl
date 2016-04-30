<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">

            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <a href="?page=article">Back</a>

                <form action="?page=fb_conf&action=edit" method="post" enctype="multipart/form-data" role="form">
                    <div class="form-group">
                        <label>Latitude </label>
                        <input class="form-control" name="lat" value="{$fb_conf[0].latitude}">
                    </div>
                    <div class="form-group">
                        <label>Longitude </label>
                        <input class="form-control" name="long" value="{$fb_conf[0].longitude}">
                    </div>
                    {foreach $fb_conf as $fb}
                    <div class="form-group">
                        <label>Text in {$fb.lang}</label>
                        <textarea class="form-control ckeditor" rows="3"
                                  name="contact_{$fb.lang}">{$fb.contact}</textarea>
                    </div>
                    {/foreach}
                    <button type="submit" class="btn btn-default">Edit</button>
                </form>
            </div>
        </div>
    </div>

</div>

</div>

