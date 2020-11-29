<div class="row border-bottom">
    <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    {{--<input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">--}}
                </div>
            </form>
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li style="font-size: 18px; margin-right: 15px;">
                @php
                    $stream = \App\Setting::where('key', 'stream')->first()->value;
                @endphp
                Số account còn trên hệ thống: <span id="account-available" class="red">{{ \App\Account::where('status', 1)->where('stream', $stream)->count() }}</span>
            </li>
            <li style="font-size: 18px">
                Số account hoàn thành: <span id="account" class="red">{{ \Illuminate\Support\Facades\Auth::user()->Account()->where('status', 2)->count() }}</span>
            </li>
            
            {{--<li class="dropdown notify">
                <ul class="dropdown-menu dropdown-alerts box-notify">
                </ul>
                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell"></i> <span class="label label-primary number-notify"></span>
                </a>
                
            </li>
            <li><a href="http://hoctienganh.tnu.vn/huongdan_giaovien.pdf"><i class="fa fa-cloud-download" aria-hidden="true"></i> Tải hướng dẫn sử dụng</a></li>
--}}
            <li>
                <a href="{!! asset('logout') !!}">
                    <i class="fa fa-sign-out"></i> Đăng xuất
                </a>
            </li>
            {{--<li>
                <a class="right-sidebar-toggle">
                    <i class="fa fa-tasks"></i>
                </a>
            </li>--}}
        </ul>

    </nav>
</div>
