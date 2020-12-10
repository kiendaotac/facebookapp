@extends('layouts.app')
@section('title')
    <title>{{$currentFunction->name}} - {{config('custom.app_name')}}</title>
@endsection

@section('style')
    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">
    <style>
        table.dataTables > thead > tr > th.stt {
            width: 15px;
        }
        table.dataTables > thead > tr > th.name {

        }
        table.dataTables > thead > tr > th.check {
            width: 30px;
            text-align: center;
            vertical-align: middle;
        }
        table.dataTables > tbody > tr > td.check {
            width: 30px;
            text-align: center;
            vertical-align: middle;
        }
        table.dataTables {
            width: 100% !important;
        }
    </style>
@endsection
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Quản lý {{mb_strtolower($currentFunction->name)}}</h2>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row" style="margin-bottom: 10px">
            <div class="col-lg-2">
                <label>Phân quyền cho role:</label>
                <select name="role" class="form-control">
                    @foreach($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->display_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables">
                                <thead>
                                <tr>
                                    <th class="stt">STT</th>
                                    <th class="name">Chức năng</th>
                                    <th class="name">Access Level</th>
                                    <th class="check" title="Xem"><i class="fa fa-eye"></i></th>
                                    <th class="check" title="Thêm"><i class="fa fa-plus"></i></th>
                                    <th class="check" title="Sửa"><i class="fa fa-edit"></i></th>
                                    <th class="check" title="Xóa"><i class="fa fa-remove"></i></th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal add new role -->
    @include('backend.system.permission.form')
@endsection

@section('script')
    <script src="js/plugins/dataTables/datatables.min.js"></script>
    <!-- Page-Level Scripts -->
    <script>
        let mainUrl = '{{$currentFunction->route}}';
        $(document).ready(function(){
            let Table = $('.dataTables').DataTable({
                select: true,
                bSort: false,
                bInfo: true,
                bLengthChange: false,
                processing: true,
                serverSide: true,
                searching: true,
                paging: true,
                pageLength: 15,
                responsive: true,
                // ajax: mainUrl + '/getDatatable',
                ajax: $.extend({
                        url: mainUrl + '/getDatatable'
                    }, {
                        type: 'GET'
                    },
                    {
                        data: function (d) {
                            d.role = $('select[name=role]').val();
                        }
                    }),
                dom: '<"row"<"col-sm-12 add-select-role">><"row"<"col-sm-6"i><"col-sm-6"f>>rtp',
                language: {
                    'url'   :   '{{ asset(__('datatable.language')) }}'
                },
                columns     :   [
                    {
                        data    :   'id',
                        className:  'text-center',
                        render  :   function (data, type, row, meta) {
                            return meta.row +1;
                        }
                    },
                    {
                        data    :   'name',
                        render  :   function (data, type, row, meta) {
                            if (row.parent_id === 0){
                                data = '<strong>'+data+'</strong>';
                            } else {
                                // data = '&emsp;&emsp;' + data;
                                data = ' - ' + data;
                            }
                            return data;
                        }
                    },
                    {
                        data    :   'access',
                        render  :   function (data, type, row, meta) {
                            let level   =   '';
                            switch (parseInt(data)) {
                                case 1 : level = 'Admin'; break;
                                case 2 : level = 'Student'; break;
                                case 3 : level = 'Public'; break;
                                default: level = 'Chưa xác định'
                            }
                            return level;
                        }
                    },
                    {
                        data    :   'xem',
                        className:  'check',
                        render  :   function (data, type, row, meta) {
                            let checked =   '';
                            if (data === 1){
                                checked = 'checked';
                            }
                            return '<input type="checkbox" class="permission" data-permission="View" value="'+row.id+'"'+checked+'/>';
                        }
                    },{
                        data    :   'them',
                        className:  'check',
                        render  :   function (data, type, row, meta) {
                            let checked =   '';
                            if (data === 1){
                                checked = 'checked';
                            }
                            return row.parent_id ? '<input type="checkbox" class="permission" data-permission="Add" value="'+row.id+'"'+checked+'/>' : null;
                        }
                    },{
                        data    :   'sua',
                        className:  'check',
                        render  :   function (data, type, row, meta) {
                            let checked =   '';
                            if (data === 1){
                                checked = 'checked';
                            }
                            return row.parent_id ? '<input type="checkbox" class="permission" data-permission="Edit" value="'+row.id+'"'+checked+'/>' : null;
                        }
                    },{
                        data    :   'xoa',
                        className:  'check',
                        render  :   function (data, type, row, meta) {
                            let checked =   '';
                            if (data === 1){
                                checked = 'checked';
                            }
                            return row.parent_id ? '<input type="checkbox" class="permission" data-permission="Delete" value="'+row.id+'"'+checked+'/>' : null;
                        }
                    },
                ]
            });
            {{--$('<label/>').text('Phân quyền cho role: ').appendTo('.add-select-role');--}}
            {{--$('<br/>').appendTo('.add-select-role');--}}
            {{--$select = $('<select name="role" class="form-control"/>').appendTo('.add-select-role');--}}
            {{--let data    =   JSON.parse('{!! $roles !!}');--}}
            {{--$.each(data, function (index, element) {--}}
                {{--$('<option/>').val(element.id).text(element.display_name).appendTo($select);--}}
            {{--});--}}

            $(document).on('change','select[name=role]', function () {
                Table.ajax.reload();
            });

            $(document).on('change', 'input.permission', function () {
                let data = {
                    role_id     :   $('select[name=role]').val(),
                    func_id     :   $(this).val(),
                    permission  :   $(this).data('permission'),
                    attach      :   $(this).is(':checked'),
                    _token      :   '{{csrf_token()}}'
                };
                let url =   mainUrl;
                $.ajax(url,{
                    type    :   'POST',
                    data    :   data,
                    error   :   function () {
                        Table.ajax.reload();
                    },
                    success :   function (respon) {
                        notification(respon.type, respon.title, respon.content);
                        if (respon.type !== 'success'){
                            Table.ajax.reload();
                        }
                    }
                })
            });

        });
    </script>
@endsection
