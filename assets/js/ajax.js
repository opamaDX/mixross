// ajax通信
$(function() {
    $('#login_btn').on('click', function(e) {
        //イベントキャンセル
        e.preventDefault();
        //入力されたemailとpasswordを取得
        var login_btn = $('#login_btn').val();
        var email     = $('#email').val();
        var password  = $('#password').val();
        var csrf_hash = $('#token').val();
        //ajax通信開始
        $.ajax({
            type: 'POST',
            url : 'http://localhost/mixross-master/mixross/index.php/sign_in_ctrl/login',
            data: {login_btn: login_btn, email: email, password: password, csrf_name: csrf_hash}
        }).done(function(data) {
            //PHPでemailとpasswodrがあっている場合に
            if(data == true) {
                window.location.href = 'http://localhost/mixross-master/mixross/index.php/main_ctrl/index';
            } else {
                var err_message = JSON.parse(data);
                if(err_message == true) {
                    $('#error').text("メールアドレスまたはパスワードが正しくないです");
                }
            }
        });
    });
});