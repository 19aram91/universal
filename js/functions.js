var root = window.location.origin;

function confirmDelete() {
    return confirm("Are you sure to delete?");
}

function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    return pattern.test(emailAddress);
};

function checkCaptcha(captcha) {
    var check;
    $.ajax({
        type: "GET",
        url: root+"/index.php",
        async: false,
        data: {'action': 'checkCaptcha', 'captcha': captcha}
    }).done(function (response) {
        var resp = JSON.parse(response);
        check = resp['check'];
    });
    return check;
}


$('#word-search').click(function () {
    var query = $('#search-text').val();
    if (query == '') {
        alert('Пожалуйста, введите текст');
        return false;
    }
    window.location = root+'/results/' + query;
});


$('#send-msg').click(function () {
    $('#msg-error').html('');
    $('#msg-success').html('');
    var name = $('#msg-name').val();
    var mail = $('#msg-mail').val();
    var header = $('#msg-header').val();
    var desc = $('#msg-desc').val();
    var captcha = $('#msg-captcha').val();
    var error = '';

    if (!name) {
        error += '{#nameError#} <br>';
    }
    if (!mail) {
        error += 'Введите ваш e-mail адрес <br>';
    } else if (!isValidEmailAddress(mail)) {
        error += 'Enter your e-mail address <br>';
    }
    if (!header) {
        error += 'Enter a title <br>';
    }
    if (!desc) {
        error += 'Enter your message <br>';
    }
    if (!captcha) {
        error += 'Enter the text from the captcha <br>';
    } else if (!checkCaptcha(captcha)) {
        error += 'Enter the correct text from the captcha <br>';
    }

    if (error) {
        $('#msg-error').html(error);
        return false;
    }

    $.ajax({
        type: "GET",
        url: root+"/index.php",
        data: {'action': 'addMessage', 'name': name, 'mail': mail, 'header': header, 'desc': desc}
    }).done(function (response) {
        var resp = JSON.parse(response);
        if (resp['status'] = 'ok') {
            $('#msg-name').val('');
            $('#msg-mail').val('');
            $('#msg-header').val('');
            $('#msg-desc').val('');
            $('#msg-captcha').val('');
            $('#msg-success').html('Ваше письмо отправлено, скоро мы вам ответим!')
        }
    });

});



























