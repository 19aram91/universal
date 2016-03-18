<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    {#languages#}
                </h1>
            </div>

        <div class="row">
            <div class="col-lg-3">
                <div>
                    <form action="index.php?page=languages&action=set" method="post" enctype="multipart/form-data">
                        <input name="code" maxlength="2" placeholder="language code">
                        <input name="name" placeholder="language name">
                        <input name="flag" type="file">
                        <input type="submit">
                    </form>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Flag</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        {foreach $languages as $l}
                            <tr>
                                <td>{$l.code}</td>
                                <td>{$l.name}</td>
                                <td><img src="../img/flags/{$l.flag}" width="20px"> </td>
                                <td>
                                    <a onClick="return confirmDelete()" href="?page=languages&action=delete&id={$l.id}"><i class="fa fa-times fa-lg fa-fw"></i></a>
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

