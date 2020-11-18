<!DOCTYPE html>
<html>

<head>

    <base href="{{ asset('')}}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Đăng ký - {{config('custom.app_name')}}</title>

    <link href="{!! asset('css/bootstrap.min.css') !!} " rel="stylesheet">
    <link href="{!! asset('font-awesome/css/font-awesome.css') !!}" rel="stylesheet">
    <link rel="icon" href="favicon.ico">

    <!-- Toastr style -->
    <link href="{!! asset('css/plugins/toastr/toastr.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/animate.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/style.css') !!}" rel="stylesheet">

    <!-- Sweet Alert -->
    <link href="{!! asset('css/plugins/sweetalert/sweetalert.css') !!}" rel="stylesheet">

    <link href="css/plugins/bootstrapSocial/bootstrap-social.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/color_skins.css')}}">

    <!-- Toastr style -->
    <link href="{!! asset('css/plugins/toastr/toastr.min.css') !!}" rel="stylesheet">
</head>

<body class="theme-orange">

<div id="wrapper">
    <div class="vertical-align-wrap">
        <div class="vertical-align-middle auth-main">
            <div class="auth-box">
                <div class="top">
                    <a href="/">
                        <img src="../images/logo.png" alt="MCQ">
                    </a>
                </div>
                <div class="card">
                    <div class="header">
                        <p class="dev">Đăng ký tài khoản</p>
                    </div>
                    <div class="body">
                        <form class="form-auth-small" action="{{ asset('register') }}" method="POST" role="form"
                              name="register">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <label for="signin-email" class="control-label sr-only">Họ đệm</label>
                                        <input type="text" name="firstname" class="form-control" placeholder="Họ đệm"
                                               required requiredmsg="Bạn chưa điền họ đệm">
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <label for="signin-email" class="control-label sr-only">Tên</label>
                                        <input type="text" name="lastname" class="form-control" placeholder="Tên"
                                               required requiredmsg="Bạn chưa điền tên">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="username" class="control-label sr-only">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Email" required
                                       requiredmsg="Bạn chưa điền email">
                            </div>
                            <div class="form-group">
                                <label for="password" class="control-label sr-only">Mật khẩu</label>
                                <input type="password" name="password" class="form-control" placeholder="Mật khẩu"
                                       required requiredmsg="Bạn chưa điền mật khẩu">
                            </div>
                            <div class="form-group">
                                <label for="password" class="control-label sr-only">Xác nhận mật khẩu</label>
                                <input type="password" name="password_confirmation" class="form-control"
                                       placeholder="Xác nhận mật khẩu" required requiredmsg="Bạn chưa điền mật khẩu">
                            </div>
                            <button type="button" name="btn-register" class="btn btn-lg btn-block"
                                    style="background-color: #f68c1f; color: #ffffff">Đăng ký
                            </button>
                            {{--<a class="btn btn-block btn-social btn-google" style="text-align: center" href="login/google">--}}
                            {{--<span class="fa fa-google"></span> Sign in with Google--}}
                            {{--</a>--}}
                            <div class="bottom">
                                <span>Bạn đã có tài khoản? <a href="{{ asset('login') }}">Đăng nhập tại đây</a></span>
                            </div>
                        </form>
                    </div>
                    {{--<div class="dev"><small>Đại học Thái Nguyên &copy; 2015 - 2018</small></div>--}}
                    <div class="dev"></div>
                </div>
            </div>

        </div>

    </div>
</div>


<!-- Mainly scripts -->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Toastr -->
<script src="{!! asset('js/plugins/toastr/toastr.min.js') !!}"></script>
<script>
    $(document).ready(function () {
        $('button[name=btn-register]').on('click', function () {
            let url  = '{{ asset('register') }}';
            let data = $('form[name=register]').serialize();
            $.ajax(url, {
                type   : 'POST',
                data   : data,
                success: function (respon) {
                    if (respon.type == 'success') {
                        notification(respon.type, respon.title, respon.content);
                        setTimeout(function () {
                            window.location.replace("/login");
                        }, 4000);
                    } else
                        notification(respon.type, respon.title, respon.content);
                }
            })
        });

        function notification(type, title, content) {
            title = '';
            if (Array.isArray(content)) {
                let string = '';
                $.each(content, function (index, item) {
                    string += item + '<br/>';
                });
                content = string;
            }
            setTimeout(function () {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod : 'slideDown',
                    timeOut    : 4000
                };
                switch (type) {
                    case 'success'  :
                        toastr.success(content, title);
                        break;
                    case 'error'    :
                        toastr.error(content, title);
                        break;
                    case 'warning'  :
                        toastr.warning(content, title);
                        break;
                    default         :
                        toastr.warning('Không xác định được thông báo', 'Cảnh báo!');
                        break;
                }

            }, 1000);
        }
    });
</script>
</body>

</html>
