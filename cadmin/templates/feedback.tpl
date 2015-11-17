<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    {#inbox#}
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>E-mail</th>
                            <th>header</th>
                            <th>Text</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        {foreach $feedback as $f}
                            <tr>
                                <td>{$f.fname}</td>
                                <td>{$f.mail}</td>
                                <td>{$f.header}</td>
                                <td>{$f.description}</td>
                                <td>
                                    <a onClick="return confirmDelete()" href="index.php?action=delete_feedback&id={$f.ID}"> <img src="../img/cross.png"> </a>
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

