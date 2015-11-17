<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    {#main#}
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <form action="index.php" method="post" enctype="multipart/form-data" role="form">
                    {foreach $main_text as $m}
                        <div class="form-group">
                            <textarea class="form-control ckeditor" name="main_text">{$m.description}</textarea>
                        </div>
                        <input type="hidden" name="action" value="edit_main"/>
                        <button type="submit" class="btn btn-default">Edit</button>
                    {/foreach}
                </form>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>