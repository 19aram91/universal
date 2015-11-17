<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Edit Info
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <form action="index.php" method="post" enctype="multipart/form-data" role="form">
                    {foreach $einfo as $ei}
                        <div class="form-group">
                            <label>Header </label>
                            <input class="form-control" name="info_header" value="{$ei.header}">
                        </div>
                        <div class="form-group">
                            <label>Position </label>
                            <input type="number" class="form-control" name="info_pos" value="{$ei.position}">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control ckeditor" rows="3" name="info_desc">{$ei.description}</textarea>
                        </div>
                        <input type="hidden" name="action" value="edit_info"/>
                        <input type="hidden" name="id" value="{$ei.ID}"/>
                        <button type="submit" class="btn btn-default">Edit</button>
                    {/foreach}
                </form>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>