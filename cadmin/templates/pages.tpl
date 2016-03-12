<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Pages({$pages|count}) -- <small> <a href="#" onclick="$('.add-page').toggle('fast', 'linear')">Add Page</a> </small>
                </h1>
            </div>

            <div class="col-lg-12 add-page disabled" >
                <form action="?page=pages&action=set" method="post" enctype="multipart/form-data" role="form">
                    <div class="form-group">
                        <label>Header </label>
                        <input class="form-control" name="info_header">
                    </div>
                    <div class="form-group">
                        <label>Position </label>
                        <input type="number" class="form-control" name="info_pos">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control ckeditor" rows="3" name="info_desc"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Add</button>
                </form>
            </div>
        </div>

        {if isset($smarty.get.action) && $smarty.get.action == "editItem"}
        <div class="row">
            <div class="col-lg-12">
                <a href="?page=pages">Back</a>
                <form action="?page=pages&action=edit" method="post" role="form">
                    <div class="form-group">
                        <label>Header </label>
                        <input class="form-control" name="info_header" value="{$pageInfo.header}">
                    </div>
                    <div class="form-group">
                        <label>Position </label>
                        <input type="number" class="form-control" name="info_pos" value="{$pageInfo.position}">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control ckeditor" rows="3" name="info_desc">{$pageInfo.description}</textarea>
                    </div>

                    <input type="hidden" name="id" value="{$pageInfo.ID}"/>
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
                            <th>Position</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {foreach $pages as $p}
                            <tr>
                                <td>{$p.header}</td>
                                <td>{$p.position}</td>
                                <td>
                                    <a href="?page=pages&action=editItem&id={$p.ID}"><i class="fa fa-pencil fa-lg fa-fw"></i></a>
                                    <a onClick="return confirmDelete()" href="?page=pages&action=delete&id={$p.ID}"> <i class="fa fa-times fa-lg fa-fw"></i> </a>
                                </td>
                            </tr>
                        {/foreach}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->

</div>

