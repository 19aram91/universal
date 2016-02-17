<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    {#article#} -- <small>total <b>{$articles|count}</b> items</small> -- <small> <a href="#" onclick="$('.add-article').toggle('fast', 'linear')">Add New</a> </small>
                </h1>
            </div>

            <div class="col-lg-12 add-article disabled">
                <form action="?page=article&action=set" method="post" enctype="multipart/form-data" role="form">
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
                    <button type="submit" class="btn btn-default">Add</button>
                </form>
            </div>
        </div>

        {if isset($smarty.get.action) && $smarty.get.action == "editItem"}
        <div class="row">
            <div class="col-lg-12">
                <a href="?page=article">Back</a>
                <form action="?page=article&action=edit" method="post" enctype="multipart/form-data" role="form">
                    <div class="form-group">
                        <label>Header </label>
                        <input class="form-control" name="article_header" value="{$article.header}">
                    </div>
                    <div class="form-group">
                        <img src="../img/articles/{$article.img}" height="60" width="60">
                        <label>IMG</label>
                        <input type="file" name="article_img">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control ckeditor" rows="3"
                                  name="article_desc">{$article.description}</textarea>
                    </div>
                    <input type="hidden" name="id" value="{$article.ID}"/>
                    <button type="submit" class="btn btn-default">Edit</button>
                </form>
            </div>
        </div>
        {/if}

        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Header</th>
                            <th>Description</th>
                            <th>Count</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {foreach $articles as $a}
                            <tr>
                                <td>{$a.header}</td>
                                <td>{$a.description|truncate:50}</td>
                                <td>{$a.watch_count}</td>
                                <td>
                                    <a href="?page=article&action=editItem&id={$a.ID}"><i class="fa fa-pencil fa-lg fa-fw"></i></a>
                                    <a onClick="return confirmDelete()" href="?page=article&action=delete&id={$a.ID}"><i class="fa fa-times fa-lg fa-fw"></i></a>
                                </td>
                            </tr>
                        {/foreach}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

</div>

