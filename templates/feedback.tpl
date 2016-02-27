<div class="col-md-9 col-sm-12 main">
    <div class="feedback">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-sm-8 col-sm-offset-2">
                <h1 class="page-header">
                    Get in Touch
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-sm-8 col-sm-offset-2">
                <div class="form-group">
                    <span id="msg-error"></span>
                    <span id="msg-success"></span>
                </div>
                <div class="form-group">
                    <label>Name* </label>
                    <input class="form-control" id="msg-name" maxlength="30">
                </div>
                <div class="form-group">
                    <label>E-mail* </label>
                    <input class="form-control" id="msg-mail" maxlength="40">
                </div>
                <div class="form-group">
                    <label>Title* </label>
                    <input class="form-control" id="msg-header" maxlength="200">
                </div>
                <div class="form-group">
                    <label>Message*</label>
                    <textarea class="form-control ckeditor" rows="7" id="msg-desc" maxlength="1000"></textarea>
                </div>
                <div>
                    <img src="{$smarty.session.captcha['image_src']}" class="img-responsive" width="120px"/>
                </div>
                <div class="form-group">
                    <label>Enter the text from the image* </label>
                    <input class="form-control" id="msg-captcha" size="100" maxlength="5">
                </div>
                <input type="hidden" name="action" value="add_dream"/>
                <button class="btn btn-default" id="send-msg">SEND</button>

            </div>
        </div>
    </div>
</div>

