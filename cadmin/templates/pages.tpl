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
                    {foreach $langs as $l}
                    <div class="form-group">
                        <label>Header {$l.name}</label>
                        <input class="form-control" name="header_{$l.code}">
                    </div>
                    {/foreach}
                    <div class="form-group">
                        <label>Position </label>
                        <input type="number" class="form-control" name="info_pos">
                    </div>
                    {foreach $langs as $l}
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
                <a href="?page=pages">Back</a>
                <form action="?page=pages&action=edit" method="post" role="form">

                    <div class="form-group">
                        <label>Position </label>
                        <input type="number" class="form-control" name="info_pos" value="{$pageInfo[0].position}">
                    </div>
                    {foreach $pageInfo as $pi}
                        {if $pi.parent_id == '0'}
                            <div class="form-group">
                                <label>Header {$pi.language} </label>
                                <input class="form-control" name="header_{$pi.language}" value="{$pi.header}">
                            </div>
                        {/if}
                    {/foreach}
                    <input type="hidden" name="id" value="{$pageInfo[0].ID}"/>
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

