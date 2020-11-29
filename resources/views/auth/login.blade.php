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
{{--    <link href="css/plugins/bootstrapSocial/bootstrap-social.css" rel="stylesheet">--}}

</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
        <div>

            {{--<h3 class="logo-name">{{config('custom.app_name')}}</h3>--}}

        </div>
        <h3>Welcome to {{config('custom.app_name')}}</h3>
{{--        <p>Phần mềm ôn luyện Tiếng Anh online<br>Vui lòng đăng nhập để truy cập vào trang cá nhân của bạn.--}}
        </p>
        <p>&nbsp;</p>
        @if(count($errors->all()))
            @foreach($errors->all() as $message)
                <p class="text-danger text-left">{{ $message }}</p>
            @endforeach
        @endif
        <form class="m-t" role="form" method="POST" action="login">
            {{ csrf_field() }}
            <div class="form-group">
                <input name="email" type="email" class="form-control" placeholder="Email" required="" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <input name="password" type="password" class="form-control" placeholder="Password" required="">
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">Đăng nhập</button>
{{--            <a class="btn btn-block btn-social btn-google" style="text-align: center" href="login/google">--}}
{{--                <span class="fa fa-google"></span> Sign in with Google--}}
{{--            </a>--}}

            <a href="#"><small>Bạn quên mật khẩu?</small></a>

        </form>
        {{--<p class="m-t"> <small>Đại học Thái Nguyên &copy; 2015 - 2018</small> </p>--}}
        <p class="m-t"> </p>
    </div>
</div>

<!-- Mainly scripts -->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>

</html>
