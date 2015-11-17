<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    {#dreambook#} -- <small>total <b>{$dreams|@count}</b> items</small> -- <small> <a href="?page=add_dream">Add New</a> </small>
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
                        {foreach $dreams as $d}
                            <tr>
                                <td>{$d.header}</td>
                                <td>{$d.description|truncate:50}</td>
                                <td>{$d.watch_count}</td>
                                <td>
                                    <a href="index.php?page=edit_dream&id={$d.ID}"> <img src="../img/pencil.png"> </a>
                                    <a onClick="return confirmDelete()" href="index.php?action=delete_dream&id={$d.ID}"> <img src="../img/cross.png"> </a>
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

