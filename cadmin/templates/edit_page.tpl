<div id="page-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Edit Info
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <form action="index.php" method="post" enctype="multipart/form-data" role="form">                   
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
                        <input type="hidden" name="action" value="edit_page"/>
                        <input type="hidden" name="id" value="{$pageInfo.ID}"/>
                        <button type="submit" class="btn btn-default">Edit</button>                    
                </form>
            </div>
        </div>

    </div>

</div>