<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @yield('title')

    <link href="{!! asset('css/bootstrap.min.css') !!} " rel="stylesheet">
    <link href="{!! asset('font-awesome/css/font-awesome.css') !!}" rel="stylesheet">
    <link rel="icon" href="{{ asset('favicon/fav-120x120.png') }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('favicon/fav-240x240.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="{{ asset('favicon/fav-180x180.png') }}">

    <!-- Toastr style -->
    <link href="{!! asset('css/plugins/toastr/toastr.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/animate.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/style.css') !!}" rel="stylesheet">

    <!-- Sweet Alert -->
    <link href="{!! asset('css/plugins/sweetalert/sweetalert.css') !!}" rel="stylesheet">

    <!-- Perfect scroll -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/perfect-scrollbar.css') }}">

    <!-- Custom styles -->
    <style>
        .note-status-output {
            display: none !important;
        }
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0;
        }
        .vl {
            border-left: 1px solid #e2e2e2;
            height: 500px;
        }
    </style>
    @yield('style')

</head>

<body>
<div id="wrapper">
    <!-- Left navigation -->
@include('layouts.left-navigation')

<!-- Page wraper -->
    <div id="page-wrapper" class="gray-bg">

        <!-- Header -->
    @include('layouts.header')
        @php
            $message = \App\Setting::where('key', 'message')->first()->value;
        @endphp
        @if(!empty($message))
        <div class="row">
            <div class="col-sm-12" style="padding-left: 0px !important; padding-right: 0px !important;">
                <br>
                <div class="alert alert-danger">
                    {!! $message !!}
                </div>
            </div>
        </div>
        @endif
    <!-- Content -->
    @yield('content')

    <!-- Footer -->
        @include('layouts.footer')

    </div>

    <!-- right sidebar -->
    {{--@include('layouts.right-sidebar')--}}
    <div class="modal inmodal" id="modal-schedule" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content animated bounceInRight">
                <div class="modal-header">
                    {{--<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                                class="sr-only">Close</span></button>--}}
                    <i class="fa fa-clock-o modal-icon"></i>
                    <h4 class="modal-title">Đăng ký thời gian làm việc ngày mai</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form action="#" method="post" name="form-schedule">
                            <div class="col-sm-6">
                                <h3>Sáng</h3>
                                <div class="row">
                                @for($i = 1; $i <= 12; $i++)
                                    <div class="col-sm-6"><label> <input type="checkbox" name="times[]" value="{{ $i }}"> {{ $i }} giờ </label></div>
                                @endfor
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <h3>Chiều</h3>
                                <div class="row">
                                @for($i = 1; $i <= 12; $i++)
                                    <div class="col-sm-6"><label> <input type="checkbox" name="times[]" value="{{ $i }}"> {{ $i }} giờ </label></div>
                                @endfor
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" name="update-schedule"><i class="fa fa-save"></i> Đăng ký</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mainly scripts -->
<script src="{!! asset('js/jquery-3.1.1.min.js') !!}"></script>
<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
<script src="{!! asset('js/plugins/metisMenu/jquery.metisMenu.js') !!}"></script>
<script src="{!! asset('js/plugins/slimscroll/jquery.slimscroll.min.js') !!}"></script>

<script>
    /* global variable for javascript in all pages extends app layout */
    let domain              =   '{{ asset('') }}';
    let summernoteToolbar = [
        // [groupName, [list of button]]
        ['cleaner',['cleaner']], // The Button
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['font', ['strikethrough', 'superscript', 'subscript']],
        ['fontsize', ['fontsize','fontname']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['insert', ['table', 'picture']],
        ['misc', ['fullscreen', 'codeview', 'undo', 'redo']]
    ];
    let summernoteConfigs = {
        toolbar: summernoteToolbar,
        fontNames: [
            'Arial', 'Arial Black', 'Courier',
            'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande',
            'Sacramento'
        ],
        fontSizes: ['8', '9', '10', '11', '12', '13', '14', '18', '24', '36', '48' , '64', '82', '150'],
        cleaner:{
            action: 'paste', // both|button|paste 'button' only cleans via toolbar button, 'paste' only clean when pasting content, both does both options.
            newline: '<br>', // Summernote's default is to use '<p><br></p>'
            notStyle: 'position:absolute;top:0;left:0;right:0', // Position of Notification
            icon: '<i class="fa fa-eraser "> Clear Word</i>',
            keepHtml: true, // Remove all Html formats
            keepOnlyTags: ['<p>', '<br>', '<ul>', '<li>', '<b>', '<strong>','<i>', '<a>', '<img>', '<span>', '<div>', '<em>', '<small>', '<label>', '<table>', '<td>', '<tr>', '<tbody>', '<thead>', '<th>'], // If keepHtml is true, remove all tags except these
            keepClasses: false, // Remove Classes
            badTags: ['script', 'applet', 'embed', 'noframes', 'noscript','xml'], // Remove full tags with contents
            badAttributes: ['start', 'id'], // Remove attributes from remaining tags
            limitChars: false, // 0/false|# 0/false disables option
            limitDisplay: 'both', // text|html|both
            limitStop: false // true/false
        },
        callbacks: {
            onImageUpload: function(files, editor, $editable) {
                let textarea    =   $(this);
                sendFile(files[0], textarea, $editable);
            }
        }
    };
    /* upload image when pasted image to editor */
    function sendFile(file,editor,welEditable) {
        let data = new FormData();
        data.append("file", file);
        $.ajax({
            url: "{{ asset('files') }}",
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            success: function(data){
                editor.summernote("insertImage", data.url[0], 'filename');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus+" "+errorThrown);
            }
        });
    }
</script>
<!-- Custom and plugin javascript -->
<script src="{!! asset('js/inspinia.js') !!}"></script>
<script src="{!! asset('js/plugins/pace/pace.min.js') !!}"></script>

<!-- jQuery UI -->
<script src="{!! asset('js/plugins/jquery-ui/jquery-ui.min.js') !!}"></script>

<!-- Toastr -->
<script src="{!! asset('js/plugins/toastr/toastr.min.js') !!}"></script>

<!-- Sweet alert -->
<script src="{!! asset('js/plugins/sweetalert/sweetalert.min.js') !!}"></script>

<!-- Perfect scroll -->
<script src="{{ asset('js/perfect-scrollbar.min.js') }}"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function () {
        let schedule = '{{ \App\Schedule::where('date', \Carbon\Carbon::today())->where('user_id', \Illuminate\Support\Facades\Auth::id())->first() }}'
        if (!schedule) {
            $('#modal-schedule').modal({backdrop: 'static', keyboard: false, show : true});
        }
        $(document).on('click', 'button[name=update-schedule]', function () {
            let url = 'work';
            let formData = $('form[name=form-schedule]').serialize() + '&schedule=schedule';
            $.ajax(url, {
                type: 'POST',
                data: formData,
                success: function (response) {
                    notification(response.type, response.title, response.content);
                    $('#modal-schedule').modal('hide');
                }
            })
        })
        {{--let user =  '{{ \Illuminate\Support\Facades\Auth::id() }}';--}}
        {{--let fb_check    =   parseInt('{{ \App\StudentShift::count() }}');--}}
        {{--let link    =   '{{ asset('course/1') }}';--}}
        {{--if ((user == 8 || user == 5 ) && !fb_check){--}}
            {{--let fb  = false;--}}
            {{--let count = 0;--}}
            {{--while (!fb && count < 3){--}}
                {{--count++;--}}
                {{--let foo = prompt('Bạn cần điền link facebook để tiếp tục <3');--}}
                {{--let re = /(?:https?:\/\/)?(?:www\.)?(?:facebook|fb|m\.facebook)\.(?:com|me)\/(?:(?:\w)*#!\/)?(?:pages\/)?(?:[\w\-]*\/)*([\w\-\.]+)(?:\/)?/i;--}}
                {{--fb = re.exec(foo);--}}
                {{--if (fb){--}}
                    {{--confirm('Thanks you!! Link facebook sẽ được kiểm chứng :v');--}}
                    {{--fb_check = 1;--}}
                    {{--$.ajax(link,{--}}
                        {{--type    :   'PUT',--}}
                        {{--data    :   {--}}
                            {{--_token  :   '{{csrf_token()}}',--}}
                            {{--fb      :   fb--}}
                        {{--},--}}
                        {{--success :   function (respon) {--}}
                        {{--}--}}
                    {{--})--}}
                {{--} else {--}}
                    {{--alert('Đây không phải link profile facebook. Hãy nhập lại.');--}}
                {{--}--}}
            {{--}--}}
        {{--}--}}
        $('li.active').parent('ul').addClass('in').parent('li').addClass('active');
        $(document).ajaxComplete(function (event, xhr, settings) {
            if (xhr.status == 550) {
                notification(xhr.responseJSON.type, xhr.responseJSON.title, xhr.responseJSON.content);
            }

        })
    });

    function notification(type, title, content) {
        title = '';
        if (Array.isArray(content)){
            let string  =   '';
            $.each(content, function (index, item) {
                string  +=  item + '<br/>';
            });
            content =   string;
        }
        setTimeout(function () {
            toastr.options = {
                closeButton: true,
                progressBar: true,
                showMethod: 'slideDown',
                timeOut: 4000
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

        }, 500);
    }
    {{--/* check profile */--}}
    {{--let path = window.location.href;--}}
    {{--let name = path.substr(path.lastIndexOf('/')+1);--}}
    {{--if(name != 'profile') {--}}
        {{--$.ajax({--}}
            {{--url: '{{ asset('profile') }}' + '/checkProfile',--}}
            {{--type: 'GET',--}}
            {{--success: function(data){--}}
                {{--let value = JSON.parse(JSON.stringify(data));--}}
                {{--if(!value.check) {--}}
                    {{--let pathNext = path.substr(0,path.lastIndexOf('/')) + '/profile';--}}
                    {{--window.location.assign(pathNext);--}}
                {{--}--}}
            {{--}--}}
        {{--});--}}
    {{--}--}}

</script>
@yield('script-upload')
@yield('script-lesson')
@yield('script')
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('48597400c637ee2013b1', {
        cluster: 'ap3'
    });

    var channel = pusher.subscribe('facebook-message');
    channel.bind('facebook-message-event', function(data) {
        if (data.message) {
            alert(`Có thông báo mới\n${data.message}`)
        }
    });
    //user.1
    let userChanel = 'user.{{ \Illuminate\Support\Facades\Auth::id() }}'
    let privateChanel = pusher.subscribe(userChanel);
    privateChanel.bind('user-account-event', function (data) {
        $('#account').html(data.account)
    });
    let availableAccountChanel = pusher.subscribe('available-account');
    availableAccountChanel.bind('available-account-event', function (data) {
        $('#account-available').html(data.accountAvailable)
    })
</script>
</body>
</html>
