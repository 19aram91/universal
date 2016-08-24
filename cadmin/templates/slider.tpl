<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    {#slider#} -- <small>total <b>{$slider|count}</b> items</small> -- <small> <a href="#" onclick="$('.add-article').toggle('fast', 'linear')">Add New</a> </small>
                </h1>
            </div>

            <div class="col-lg-12 add-article disabled">
                <form action="?page=slider&action=set" method="post" enctype="multipart/form-data" role="form">
                    <div class="form-group">
                        <label>IMG</label>
                        <input type="file" name="slider_img">
                    </div>
                    {foreach $langs as $l}
                    <div class="form-group">
                        <label>Description {$l.name}</label>
                        <textarea class="form-control" rows="3" name="desc_{$l.code}"></textarea>
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
                <form action="?page=slider&action=edit" method="post" enctype="multipart/form-data" role="form">
                    <div class="form-group">
                        <img src="../img/slider/{$slide[0].img}" height="60" width="60">
                        <label>IMG</label>
                        <input type="file" name="slider_img">
                    </div>
                    {foreach $slide as $s}
                    <div class="form-group">
                        <label>Description {$s.lang}</label>
                        <textarea class="form-control" rows="3"
                                  name="desc_{$s.lang}">{$s.description}</textarea>
                    </div>
                    {/foreach}
                    <input type="hidden" name="id" value="{$slide[0].id}"/>
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
                            <th>Text</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {foreach $slider as $s}
                            <tr>
                                <td>{$s.description|truncate:100}</td>
                                <td>
                                    <a href="?page=slider&action=editItem&id={$s.id}"><i class="fa fa-pencil fa-lg fa-fw"></i></a>
                                    <a onClick="return confirmDelete()" href="?page=slider&action=delete&id={$s.id}"><i class="fa fa-times fa-lg fa-fw"></i></a>
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

