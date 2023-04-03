$(document).ready(function () {

    $('.login-btn').click(function (e) {
        e.preventDefault();
        $('input').removeClass('error');
        let login = $('input[name="login"]').val()
        let password = $('input[name="password"]').val();
        $.ajax({
            type: "POST",
            data: {
                login: login,
                password: password
            },
            url: "vendor/auth_.php",
            success: function (answer) {
                console.log(answer);
                var data = JSON.parse(answer);
                if (data.status) {
                    console.log("Hello3");
                    document.location.href = "main.php";
                } else {
                    $('input[name="login"]').addClass('error');
                    $('input[name="password"]').addClass('error');
                    $('#login').css("border-bottom", "2px solid #ff4332");
                    $('#password').css("border-bottom", "2px solid #ff4332");
                    $('.msg').removeClass('none').text(data.message);
                    console.log("Hello4");
                    console.log(data.login, data.password);
                }
            }
        });
    });

    $('.reg-btn').click(function (e) {
        e.preventDefault();
        $('input').removeClass('error');
        $.ajax({
            url: "vendor/reg_.php",
            type: "POST",
            success: function (answer) {
                let data = JSON.parse(answer);
                if (data.status) {
                    console.log(data.message);
                    document.location.href = "/main.php";
                } else {
                    if (data.type === 1) {
                        $('input[name="login"]').addClass('error');
                    }
                    if (data.type === 2) {
                        $('input[name="password"]').addClass('error');
                        $('input[name="conf_password"]').addClass('error');
                    }
                    $('.msg').removeClass('none').text(data.message);
                }
            }
        });
    });
});