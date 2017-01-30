<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Pages({$pages|count}) -- <small> <a href="#" onclick="$('.add-page').toggle('fast', 'linear')">Add Page Menu</a> </small>
                </h1>
            </div>
        </div>

            <div class="col-lg-12 add-page disabled" >
                <form action="?page=pages_menu&action=addMenu" method="post" enctype="multipart/form-data" role="form">
                    <div class="form-group">
                        <label>Pages Menu</label>
                        <select class="form-control" name="info_page">
                            {foreach $pages as $p}
                                <option value="{$p.ID}|{$p.parent}">{$p.header}</option>
                            {/foreach}
                        </select>
                    </div>
                    {foreach $langs as $l}
                    <div class="form-group">
                        <label>Header {$l.name}</label>
                        <input class="form-control" name="header_{$l.code}">
                    </div>
                    {/foreach}
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

    <div class="form-group">
        <label>Pages Menu</label>
        <form action="?page=pages_menu&action=changeOption" method="post" enctype="multipart/form-data" role="form">
            <select class="form-control" name="page_select">
                {foreach $pages as $p}
                    <option value="{$p.ID}">{$p.header}</option>
                {/foreach}
            </select>
            <button type="submit" class="btn btn-default">OK</button>
        </form>

        {if isset($smarty.get.action) && $smarty.get.action == 'changeOption'}
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Header</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {foreach $pagesval as $pe}
                            {if $pe.parent_id != '0'}
                                <tr>
                                    <td>{$pe.header}</td>
                                    <td>{$pe.description}</td>
                                    <td>
                                        <a href="?page=pages_menu&action=editMenu&id={$pe.parent_id}"><i class="fa fa-pencil fa-lg fa-fw"></i></a>
                                        <a onClick="return confirmDelete()" href="?page=pages_menu&action=delete&id={$pe.parent_id}"> <i class="fa fa-times fa-lg fa-fw"></i> </a>
                                    </td>
                                </tr>
                            {/if}
                        {/foreach}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {/if}
    </div>

    {if isset($smarty.get.action) && $smarty.get.action == "editMenu"}
        <div class="row">
            <div class="col-lg-12">
                <a href="?page=pages_menu">Back</a>
                <form action="?page=pages_menu&action=edit" method="post" role="form">
                    {foreach $pageedit as $pi}
                        <div class="form-group">
                            <label>Header {$pi.language} </label>
                            <input class="form-control" name="header_{$pi.language}" value="{$pi.header}">
                        </div>

                        <div class="form-group">
                            <label>Description {$pi.language}</label>
                            <textarea class="form-control ckeditor" rows="3" name="desc_{$pi.language}">{$pi.description}</textarea>
                        </div>
                        <input type="hidden" name="$header_update_{$pi.language}" value="{$pi.parent_id}"/>
                    {/foreach}
                    <button type="submit" class="btn btn-default">Edit</button>
                </form>
            </div>
        </div>
    {/if}


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
                    <div class="form-group">
                        <label>Header {$pi.language} </label>
                        <input class="form-control" name="header_{$pi.language}" value="{$pi.header}">
                    </div>

                    <div class="form-group">
                        <label>Description {$pi.language}</label>
                        <textarea class="form-control ckeditor" rows="3" name="desc_{$pi.language}">{$pi.description}</textarea>
                    </div>
                    {/foreach}
                    <input type="hidden" name="id" value="{$pageInfo[0].ID}"/>
                    <button type="submit" class="btn btn-default">Edit</button>
                </form>
            </div>
        </div>
        {/if}

    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->

</div>

