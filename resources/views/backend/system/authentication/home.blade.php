@extends('layouts.app')

@section('title')
    <title>Welcome to {{ config('custom.app_name') }}</title>
@stop
@section('style')

@stop
@section('content')
    <!-- page content -->
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Tổng giáo viên</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">{{ $all_lecturers }}</h1>
                        <div class="stat-percent font-bold text-success">{{ ($all_lecturers + $all_students) ? round($all_lecturers * 100 / ($all_lecturers + $all_students), 2) : 0 }}% <i class="fa fa-users"></i></div>
                        <small>Tỉ lệ giáo viên</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Tổng số sinh viên</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">{{ $all_students }}</h1>
                        <div class="stat-percent font-bold text-info">{{ ($all_lecturers + $all_students) ? round($all_students * 100 / ($all_lecturers + $all_students), 2) : 0 }}% <i class="fa fa-graduation-cap"></i></div>
                        <small>Tỉ lệ học sinh</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Tổng khóa học / Số bài</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">{{ $all_course_accepted }} / {{ $all_lessons }}</h1>
                        <div class="stat-percent font-bold text-navy">{{ $all_courses ? round($all_course_accepted * 100 /$all_courses, 2) : 0 }}% <i class="fa fa-check"></i></div>
                        <small>Tỉ lệ khóa học đã được duyệt</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Tổng đề thi</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">{{ $all_test_off }}</h1>
                        <div class="stat-percent font-bold text-danger">{{ $all_test_off ? round($all_test_off_used * 100 / $all_test_off, 2) : 0 }}% <i class="fa fa-file-text-o"></i></div>
                        <small>Đã sử dụng</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Top giảng viên</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <table class="table table-hover no-margins">
                            <thead>
                            <tr>
                                <th>Họ và tên</th>
                                <th>Ngày tham gia</th>
                                <th>Số khóa học</th>
                                {{--<th>Trạng thái</th>--}}
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($top_lecturers as $item)
                            <tr>
                                <td>{{ $item->display_name }}</td>
                                <td><i class="fa fa-calendar-check-o"></i> {{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}</td>
                                <td class="text-navy">  {{ $item->course_count }} khóa học <i class="fa fa-sort-numeric-desc"></i></td>
                                {{--@switch($item->state)--}}
                                    {{--@case(1)--}}
                                        {{--<td><span class="label label-primary">Kích hoạt</span> </td>--}}
                                    {{--@break--}}
                                    {{--@case(2)--}}
                                        {{--<td><span class="label label-warning">Kích hoạt ẩn</span> </td>--}}
                                    {{--@break--}}
                                    {{--@case(0)--}}
                                        {{--<td><span class="label label-danger">Không kích hoạt</span> </td>--}}
                                    {{--@break--}}
                                {{--@endswitch--}}
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Top sinh viên</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <table class="table table-hover no-margins">
                            <thead>
                            <tr>
                                <th>Họ và tên</th>
                                <th>Mã SV</th>
                                <th>Ngày tham gia</th>
                                <th>Số bài thi</th>
                                {{--<th>Trạng thái</th>--}}
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($top_students as $item)
                                <tr>
                                    <td>{{ $item->firstname }} {{ $item->lastname }}</td>
                                    <td>{{ $item->stdcode }}</td>
                                    <td><i class="fa fa-calendar-check-o"></i> {{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}</td>
                                    <td class="text-navy">  {{ $item->offline_test_count }} bài thi <i class="fa fa-sort-numeric-desc"></i></td>
                                    {{--@switch($item->state)--}}
                                        {{--@case(1)--}}
                                        {{--<td><span class="label label-primary">Kích hoạt</span> </td>--}}
                                        {{--@break--}}
                                        {{--@case(2)--}}
                                        {{--<td><span class="label label-warning">Kích hoạt ẩn</span> </td>--}}
                                        {{--@break--}}
                                        {{--@case(0)--}}
                                        {{--<td><span class="label label-danger">Không kích hoạt</span> </td>--}}
                                        {{--@break--}}
                                    {{--@endswitch--}}
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /page content -->
{{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">Dashboard</div>--}}

                {{--<div class="card-body">--}}
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success" role="alert">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}

                    {{--You are logged in!--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
</div>
@endsection
@section('script')
@stop
