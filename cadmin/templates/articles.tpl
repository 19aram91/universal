<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    {#article#} -- <small>total <b>{$articles|@count}</b> items</small> -- <small> <a href="?page=add_article">Add New</a> </small>
                </h1>
            </div>
        </div>

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
                                    <a href="index.php?page=edit_article&id={$a.ID}"><i class="fa fa-pencil fa-lg fa-fw"></i></a>
                                    <a onClick="return confirmDelete()" href="index.php?action=delete_article&id={$a.ID}"><i class="fa fa-times fa-lg fa-fw"></i></a>
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

