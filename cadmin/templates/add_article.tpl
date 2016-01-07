<div id="page-wrapper">

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Add Article
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <form action="index.php" method="post" enctype="multipart/form-data" role="form">
                    <div class="form-group">
                        <label>Header </label>
                        <input class="form-control" name="article_header">
                    </div>
                    <div class="form-group">
                        <label>IMG</label>
                        <input type="file" name="article_img">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control ckeditor" rows="3" name="article_desc"></textarea>
                    </div>
                    <input type="hidden" name="action" value="add_article"/>
                    <button type="submit" class="btn btn-default">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>