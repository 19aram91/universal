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
                        <label>IMG</label>
                        <input type="file" name="article_img">
                    </div>
                    {foreach $langs as $l}
                    <div class="form-group">
                        <label>Header {$l.name}</label>
                        <input class="form-control" name="header_{$l.code}">
                    </div>
                    <div class="form-group">
                        <label>Description {$l.name}</label>
                        <textarea class="form-control ckeditor" rows="3" name="desc_{$l.code}"></textarea>
                    </div>
                    {/foreach}
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
                        <img src="../img/articles/{$article[0].img}" height="60" width="60">
                        <label>IMG</label>
                        <input type="file" name="article_img">
                    </div>
                    {foreach $article as $a}
                    <div class="form-group">
                        <label>Header {$a.lang}</label>
                        <input class="form-control" name="header_{$a.lang}" value="{$a.header}">
                    </div>                    
                    <div class="form-group">
                        <label>Description {$a.lang}</label>
                        <textarea class="form-control ckeditor" rows="3"
                                  name="desc_{$a.lang}">{$a.info_text}</textarea>
                    </div>
                    {/foreach}
                    <input type="hidden" name="id" value="{$article[0].id}"/>
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
                            <th>Count</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {foreach $articles as $a}
                            <tr>
                                <td>{$a.header}</td>
                                <td>{$a.watch_count}</td>
                                <td>
                                    <a href="?page=article&action=editItem&id={$a.id}"><i class="fa fa-pencil fa-lg fa-fw"></i></a>
                                    <a onClick="return confirmDelete()" href="?page=article&action=delete&id={$a.id}"><i class="fa fa-times fa-lg fa-fw"></i></a>
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

