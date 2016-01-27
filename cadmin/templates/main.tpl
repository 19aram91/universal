<div id="page-wrapper">
    <div class="container-fluid">

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
                    <div class="form-group">
                        <textarea class="form-control ckeditor" name="main_text">{$main_text.description}</textarea>
                    </div>
                    <input type="hidden" name="action" value="edit_main"/>
                    <button type="submit" class="btn btn-default">Edit</button>
                </form>
            </div>
        </div>

    </div>

</div>