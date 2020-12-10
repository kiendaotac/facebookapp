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
        @role('admin')
        <ul class="nav navbar-top-links navbar-right">
            <li style="font-size: 18px; margin-right: 15px; color: #0a6aa1">
                Tổng số account đã hoàn thành: <span id="total-complete" class="red">{{ \App\Account::where('status', 2)->count() }}</span>
            </li>
            <li style="font-size: 18px;margin-right: 15px;color: #0a6aa1">
                Tông số account bị Checkpoint: <span id="total-checkpoint" class="red">{{ \App\Account::where('status',7)->count() }}</span>
            </li>
            <li style="font-size: 18px;color: #0a6aa1">
                Số user Online: <span id="total-user-online" class="red">{{ \App\User::all()->where('isOnline',true)->count() }}</span>
            </li>
            <li>

            </li>
        </ul>
        @endrole
        <ul class="nav navbar-top-links navbar-right">
            <li style="font-size: 18px; margin-right: 15px;">
                @php
                    $stream = \App\Setting::where('key', 'stream')->first()->value;
                @endphp
                Số account còn trên hệ thống: <span id="account_available" class="red">{{ \App\Account::where('status', 1)->where('stream', $stream)->whereNull('user_id')->count() }}</span>
            </li>
            <li style="font-size: 18px;margin-right: 15px;">
                Số account hoàn thành: <span id="account" class="red">{{ \Illuminate\Support\Facades\Auth::user()->Account()->where('status', 2)->count() }}</span>
            </li>
            <li style="font-size: 18px">
                Số account bị checkpoint: <span id="account_checkpoint" class="red">{{ \Illuminate\Support\Facades\Auth::user()->Account()->where('status', 7)->count() }}</span>
            </li>
            <li>
                {{--<a href="{!! asset('logout') !!}">
                    <i class="fa fa-sign-out"></i> Đăng xuất
                </a>--}}
            </li>
        </ul>

    </nav>
</div>
