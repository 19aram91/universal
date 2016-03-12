<div class="col-md-9 col-sm-12 main">

    <div class="feedback">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <p>
                    {$fb_conf.contact}
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <p>
                <div id="googleMap"></div>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-sm-8 col-sm-offset-2">
                <h1 class="page-header">
                    {#getInTouch#}
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
                    <label>{#name#}* </label>
                    <input class="form-control" id="msg-name" maxlength="30">
                </div>
                <div class="form-group">
                    <label>{#mail#}* </label>
                    <input class="form-control" id="msg-mail" maxlength="40">
                </div>
                <div class="form-group">
                    <label>{#title#}* </label>
                    <input class="form-control" id="msg-header" maxlength="200">
                </div>
                <div class="form-group">
                    <label>{#message#}*</label>
                    <textarea class="form-control ckeditor" rows="7" id="msg-desc" maxlength="1000"></textarea>
                </div>
                <div>
                    <img src="{$smarty.session.captcha['image_src']}" class="img-responsive" width="120px"/>
                </div>
                <div class="form-group">
                    <label>{#captchaText#}* </label>
                    <input class="form-control" id="msg-captcha" size="100" maxlength="5">
                </div>
                <input type="hidden" name="action" value="add_dream"/>
                <button class="btn btn-default" id="send-msg">{#send#}</button>

            </div>
        </div>
    </div>
</div>

<script src="http://maps.googleapis.com/maps/api/js"></script>

<script>
    var lat = {$fb_conf.latitude} ;
    var long = {$fb_conf.longitude} ;
</script>

{literal}
    <script>
        var myCenter=new google.maps.LatLng(lat, long);
        var marker;

        function initialize()
        {
            var mapProp = {
                center:myCenter,
                zoom:14,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };

            var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

            var marker=new google.maps.Marker({
                position:myCenter,

            });

            marker.setMap(map);
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
{/literal}
