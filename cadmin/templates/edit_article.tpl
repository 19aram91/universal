<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Edit {#article#}
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <form action="index.php" method="post" enctype="multipart/form-data" role="form">
                    {foreach $article as $a}
                        <div class="form-group">
                            <label>Header </label>
                            <input class="form-control" name="article_header" value="{$a.header}">
                        </div>
                        <div class="form-group">
                            <img src="../img/articles/{$a.img}" height="60" width="60">
                            <label>IMG</label>
                            <input type="file" name="article_img">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control ckeditor" rows="3" name="article_desc">{$a.description}</textarea>
                        </div>
                        <input type="hidden" name="action" value="edit_article"/>
                        <input type="hidden" name="id" value="{$a.ID}"/>
                        <button type="submit" class="btn btn-default">Edit</button>
                    {/foreach}
                </form>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>