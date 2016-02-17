<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Files
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <form action="?page=files&action=add" method="post" enctype="multipart/form-data" role="form">
                    <div class="form-group">
                        <label>Add File</label>
                        <input type="file" name="img">
                    </div>
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
                                <td>{$root}/img/files/{$f.src}</td>
                                <td><img height=40" width="40" src="../img/files/{$f.src}"></td>
                                <td>
                                    <a onClick="return confirmDelete()" href="?page=files&action=delete&id={$f.ID}">
                                        <i class="fa fa-times fa-lg fa-fw"></i> </a>
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

