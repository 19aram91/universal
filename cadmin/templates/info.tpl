<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    information -- <small> <a href="?page=add_info">Add New</a> </small>
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
                            <th>Position</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {foreach $info as $i}
                            <tr>
                                <td>{$i.header}</td>
                                <td>{$i.description|truncate:50}</td>
                                <td>{$i.position}</td>
                                <td>
                                    <a href="index.php?page=edit_info&id={$i.ID}"> <img src="../img/pencil.png"> </a>
                                    <a onClick="return confirmDelete()" href="index.php?action=delete_info&id={$i.ID}"> <img src="../img/cross.png"> </a>
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

