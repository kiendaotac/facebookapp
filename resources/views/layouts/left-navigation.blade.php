@php
    if (\Illuminate\Support\Facades\Auth::check()){
    }
        $user       =   \Illuminate\Support\Facades\Auth::user();
        if ($user->hasRole('Owner')){
            $funcIds=   \App\Functions::where('state',1)->select('id')->get()->toArray();
            $funcIds=   array_column($funcIds,'id');
        } else {
            $funcIds    =   \App\User::funcIds();
            //$funcIds    =   \App\Functions::where('state',1)->where('access',1)->select('id')->get()->toArray();
            //$funcIds    =   array_column($funcIds,'id');
            //$functions  =   \App\Functions::orderBy('ordering','asc')->find($funcIds)->where('state',1);
        }
        $functions  =   \App\Functions::where('state',1)->orderBy('ordering','asc')->find($funcIds);

@endphp
<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                @auth()
                    <div class="dropdown profile-element"> <span>
                        <a href="{{ asset('/') }}">
                            <img alt="image" class="img-circle"
                                 src="{!! asset($user->avatar ? $user->avatar : config('custom.noavatar'))!!}"/>
                        </a>
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear" data-id="{{ $user->id }}">
                                <span class="block m-t-xs">
                                    <strong class="font-bold">{{$user->display_name}}</strong>
                                </span>
                                <span class="text-muted text-xs block">{{$user->roles->first() ? $user->roles->first()->display_name : 'User chưa được phân quyền'}}
                                    <b class="caret"></b>
                                </span>
                            </span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            {{--<li><a href="profile.html">Profile</a></li>--}}
                            {{--<li><a href="contacts.html">Contacts</a></li>--}}
                            {{--<li><a href="mailbox.html">Mailbox</a></li>--}}
                            <li class="divider"></li>
                            <li><a href="{!! asset('logout') !!}">Logout</a></li>
                        </ul>
                    </div>
                @endauth
                <div class="logo-element">
                    WM
                </div>
            </li>
            @foreach($functions as $function)
                @if($function->parent_id == 0)
                    {{-- Menu sinh ra từ bảng functions --}}
                    <li>
                        @php
                            $hasChild   =   false;
                            foreach($function->childs as $child){
                                if(in_array($child->id,$funcIds)){
                                    $hasChild = true;
                                    break;
                                }
                            }
                        @endphp
                        <a href="{{ $hasChild ? '' : $function->route }}"><i class="{{$function->icon}}"></i> <span
                                    class="nav-label">{{$function->name}}</span>
                            @if($hasChild)
                                <span class="fa arrow"></span>
                            @endif
                        </a>
                        @foreach($function->childs as $child)
                            @if(in_array($child->id,$funcIds))
                                <ul class="nav nav-second-level collapse">
                                    @foreach($function->childs->where('state',1)->sortBy('ordering') as $item)
                                        @if(in_array($item->id,$funcIds))
                                            <li class="{{strcmp(\Request::path(),$item->route) ? '' : 'active'}}">
                                                <a href="{{ $item->access == 1 ? asset($item->route) : 'http://'.config('custom.domain').($item->route == '/' ? '' : '/'.$item->route) }}">
                                                    <i class="{{$item->icon}}" style="font-size: 10px"></i> {{$item->name}}
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                                @break
                            @endif
                        @endforeach
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</nav>
