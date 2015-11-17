<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Edit Dream
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <form action="index.php" method="post" enctype="multipart/form-data" role="form">
                    {foreach $dream as $d}
                        <div class="form-group">
                            <label>Header </label>
                            <input class="form-control" name="dream_header" value="{$d.header}">
                        </div>
                        <div class="form-group">
                            <img src="../img/dreambook/{$d.img}" height="60" width="60">
                            <label>IMG</label>
                            <input type="file" name="dream_img">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control ckeditor" rows="3" name="dream_desc">{$d.description}</textarea>
                        </div>
                        <input type="hidden" name="action" value="edit_dream"/>
                        <input type="hidden" name="id" value="{$d.ID}"/>
                        <button type="submit" class="btn btn-default">Edit</button>
                    {/foreach}
                </form>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>