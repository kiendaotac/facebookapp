<!DOCTYPE html>
<html>

<head>

    <base href="{{ asset('')}}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Đăng nhập - {{config('custom.app_name')}}</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" href="favicon.ico">
    <link href="css/plugins/bootstrapSocial/bootstrap-social.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/color_skins.css')}}">

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
                        <p class="dev">Vui lòng đăng nhập để truy cập vào trang làm việc cá nhân của bạn</p>
                    </div>
                    <div class="body">
                        <form class="form-auth-small" action="{!! route('post.student.login') !!}" method="POST" role="form">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="signin-email" class="control-label sr-only">Email</label>
                                <input type="text" name="username" class="form-control" placeholder="Email" required requiredmsg="Bạn chưa điền tài khoản">
                            </div>
                            <div class="form-group">
                                <label for="signin-password" class="control-label sr-only">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" required requiredmsg="Bạn chưa điền mật khẩu">
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">ĐĂNG NHẬP</button>
                            {{--<a class="btn btn-block btn-social btn-google" style="text-align: center" href="login/google">--}}
                                {{--<span class="fa fa-google"></span> Sign in with Google--}}
                            {{--</a>--}}
                            <div class="bottom">
                                <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="#">Bạn quên mật khẩu?</a></span>
                            </div>
                            <div class="bottom">
                                <span>Bạn chưa có tài khoản? <a href="{!! route('get.student.register') !!}">Đăng ký miễn phí</a></span>
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
</body>

</html>
