<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Files
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <form action="index.php" method="post" enctype="multipart/form-data" role="form">
                    <div class="form-group">
                        <label>Добавить изображение</label>
                        <input type="file" name="img">
                    </div>
                    <input type="hidden" name="action" value="add_file">
                    <button type="submit" class="btn btn-default">Add</button>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                &nbsp;
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Source</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {foreach $files as $f}
                            <tr>
                                <td>{#root#}/{$f.src}</td>
                                <td><img height=40" width="40" src="../img/files/{$f.src}"></td>
                                <td>
                                    <a onClick="return confirmDelete()" href="index.php?action=delete_file&id={$f.ID}"> <img src="../img/cross.png"> </a>
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

