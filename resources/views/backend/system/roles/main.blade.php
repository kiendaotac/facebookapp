@extends('layouts.app')
@section('title')
    <title>{{$currentFunction->name}} - {{config('custom.app_name')}}</title>
@endsection

@section('style')
    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">
    <style>

        /* Bảng danh sách các role */
        table.dataTables > thead > tr > th.stt {
            width: 15px;
        }
        table.dataTables > thead > tr > th.name {
            width: 20%;
        }
        table.dataTables > thead > tr > th.display_name {
            width: 20%;
        }
        table.dataTables > thead > tr > th.action {
            width: 105px;
        }
        table.dataTables > thead > tr > th.state {
            width: 110px;
        }
        table.dataTables {
            width: 100% !important;
        }

        /* Modal danh sách user có thể add vào role*/
        table.dataTables-add-user {
            width: 100% !important;
        }

        #modal-add-user .modal-body {
            padding: 0px !important;
        }
        table.dataTables-add-user > thead > tr > th.stt {
            width: 15px !important;
        }
        img.avatar {
            width: 50px;
        }
        table.dataTables-add-user > thead > tr > th.name {
            width: 25% ;
        }
        table.dataTables-add-user > thead > tr > th.action {
            width: 15px!important;
        }
        table.dataTables-add-user > thead > tr > th.display_name {
            width: 25% ;
        }
        table.dataTables-add-user > tbody > tr > td {
            text-align: left ;
            vertical-align: middle;
        }
        table.dataTables-add-user > tbody > tr > td.avatar {
            text-align: center!important; ;
        }
        table.dataTables-add-user > tbody > tr > td.text-center {
            text-align: center!important; ;
        }

        /* Modal danh sách user có trong role */
        table.dataTables-list-user {
            width: 100% !important;
        }
        #modal-list-user .modal-body {
            padding: 0px !important;
        }
        table.dataTables-list-user > thead > tr > th.stt {
            width: 15px !important;
        }
        img.avatar {
            width: 50px;
        }
        table.dataTables-list-user > thead > tr > th.name {
            width: 25% ;
        }
        table.dataTables-list-user > thead > tr > th.action {
            width: 15px!important;
        }
        table.dataTables-list-user > thead > tr > th.display_name {
            width: 25% ;
        }
        table.dataTables-list-user > tbody > tr > td {
            text-align: left ;
            vertical-align: middle;
        }
        table.dataTables-list-user > tbody > tr > td.avatar {
            text-align: center!important; ;
        }
        table.dataTables-list-user > tbody > tr > td.text-center {
            text-align: center!important; ;
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
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables">
                                <thead>
                                <tr>
                                    <th class="stt">STT</th>
                                    <th class="name">Tên roles</th>
                                    <th class="display_name">Tên hiển thị</th>
                                    <th>Mô tả</th>
                                    <th class="state">Trạng Thái</th>
                                    <th class="action">Thao tác</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" name="role_id" value="0">
    <!-- Modal add new role -->
    @include('backend.system.roles.form')
@endsection

@section('script')
    <script src="{{ asset('js/plugins/dataTables/datatables.min.js') }}"></script>
    <!-- Page-Level Scripts -->
    <script>
        let mainUrl = '{{$currentFunction->route}}';
        $(document).ready(function(){
            let Table = $('.dataTables').DataTable({
                bSort: false,
                bInfo: true,
                bLengthChange: false,
                processing: true,
                serverSide: true,
                searching: true,
                paging: true,
                pageLength: 15,
                responsive: true,
                ajax: mainUrl + '/getDatatable',
                dom: '<"row"<"col-sm-6"Bi><"col-sm-6"f>>rtp',
                buttons: {
                    buttons: [
                        {
                            text: 'Thêm mới',
                            action: function ( e, dt, node, config ) {
                                resetForm();
                                $('#modal-add-role').modal({backdrop: 'static', keyboard: false, show : true});
                            }
                        }
                    ],
                    dom: {
                        button: {
                            tag: "button",
                            className: "btn btn-primary"
                        },
                        buttonLiner: {
                            tag: null
                        }
                    }
                },
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
                    {data    :   'name'},
                    {   data    :   'display_name'},
                    {   data    :   'description'},
                    {
                        data    :   'deleted_at',
                        render  :   function (data, type, row, meta) {
                            let state = 'Kích hoạt';
                            if (data){
                                state = 'Không kích hoạt'
                            }
                            return state;
                        }
                    },
                    {
                        data    :   'id',
                        className: 'text-center',
                        render  :   function (data, type, row, meta) {
                            return '<button name="btn-view" class="btn btn-view btn-info btn-flat btn-xs" title="Xem danh sách user" data-id='+data+'><i class="fa fa-eye"></i></button> <button name="btn-add" class="btn btn-add btn-primary btn-flat btn-xs" title="Thêm user" data-id='+data+'><i class="fa  fa-plus"></i></button> <button name="btn-edit" class="btn btn-primary btn-flat btn-xs" title="Sửa" data-data=\''+JSON.stringify(row)+'\'><i class="fa fa-edit"></i></button> <button name="btn-delete" class="btn btn-remove btn-danger btn-flat btn-xs" title="Xóa" data-id='+data+'><i class="fa fa-remove"></i></button>';
                        }
                    }
                ]
            });

            /* Table user */
            let Tableuser   = $('.dataTables-add-user').DataTable({
                bSort: false,
                bInfo: true,
                bLengthChange: false,
                processing: true,
                serverSide: true,
                searching: true,
                paging: true,
                pageLength: 15,
                responsive: true,
                ajax: $.extend({
                        url: 'roleuser/get-list-user-add'
                    }, {
                        type: 'GET'
                    },
                    {
                        data: function (d) {
                            d.role_id = $('input[name=role_id]').val();
                        }
                    }),
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
                    {   data    :   'name'},
                    {   data    :   'display_name'},
                    {   data    :   'email'},
                    {
                        data    :   'id',
                        className: 'text-center',
                        render  :   function (data, type, row, meta) {
                            return '<button name="btn-add-user" class="btn btn-add-user btn-primary btn-flat btn-xs" title="Thêm user" data-id='+data+'><i class="fa fa-plus"></i></button>';
                        }
                    }
                ]
            });

            /* Table user */
            let Tableuser_remove   = $('.dataTables-list-user').DataTable({
                bSort: false,
                bInfo: true,
                bLengthChange: false,
                processing: true,
                serverSide: true,
                searching: true,
                paging: true,
                pageLength: 15,
                responsive: true,
                ajax: $.extend({
                        url: 'roleuser/get-list-user-remove'
                    }, {
                        type: 'GET'
                    },
                    {
                        data: function (d) {
                            d.role_id = $('input[name=role_id]').val();
                        }
                    }),
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
                    {   data    :   'name'},
                    {   data    :   'display_name'},
                    {   data    :   'email'},
                    {
                        data    :   'id',
                        className: 'text-center',
                        render  :   function (data, type, row, meta) {
                            return '<button name="btn-remove-user" class="btn btn-remove-user btn-danger btn-flat btn-xs" title="Remove user" data-id='+data+'><i class="fa fa-remove"></i></button>';
                        }
                    }
                ]
            });

            /* Add new/ edit function */
            $('button[name=add-role]').on('click', function () {
                let data = $('form[name=form-add-role]').serialize(),
                    id      =   $('input[name=id]').val(),
                    type    =   'POST',
                    url     =   mainUrl;
                if (parseInt(id)){
                    type    =   'PUT';
                    url     =   mainUrl + '/' + id;
                }
                $.ajax(url,{
                    type    :   type,
                    data    :   data,
                    success :   function (respon) {
                        notification(respon.type, respon.title, respon.content);
                        if(respon.type === 'success'){
                            Table.ajax.reload();
                            $('#modal-add-role').modal('hide');
                        }
                    }
                })
            });

            /* Edit function */
            $(document).on('click', 'button[name=btn-edit]', function () {
                let data = $(this).data('data');
                $.each(data, function (index, item) {
                    $('[name='+index+']').val(item);
                });
                if (data.deleted_at){
                    $('[name=state]').val(0);
                } else {
                    $('[name=state]').val(1);
                }
                $('#modal-add-role').modal({backdrop: 'static', keyboard: false, show : true});
            });

            /* Delete function */
            $(document).on('click', 'button[name=btn-delete]', function () {
                let id  = $(this).data('id');
                let url =   mainUrl + '/' + id;
                swal({
                    title: "Bạn có muốn xóa chức năng này không??",
                    text: "Khi xóa chức năng sẽ không thể khôi phục lại",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "OK",
                    cancelButtonText: "Không",
                    closeOnConfirm: true,
                    closeOnCancel: true
                }, function (config) {
                    if (config){
                        $.ajax(url,{
                            type    :   'DELETE',
                            data    :   {
                                _token  :   '{{csrf_token()}}'
                            },
                            success :   function (respon) {
                                notification(respon.type, respon.title, respon.content);
                                if(respon.type === 'success'){
                                    Table.ajax.reload();
                                }
                            }
                        })
                    }
                });
            });

            /* Add user to role */
            $(document).on('click', 'button[name=btn-add]', function () {
                let role_id =   $(this).data('id');
                $('input[name=role_id]').val(role_id);
                Tableuser.ajax.reload();
                $('#modal-add-user').modal({backdrop: 'static', keyboard: false, show : true});
            });

            /* Thêm user */
            $(document).on('click','button[name=btn-add-user]', function () {
                let user_id     =   $(this).data('id');
                let url         =   'roleuser';
                $.ajax(url, {
                    type    :   'POST',
                    data    :   {
                        _token  :   '{{csrf_token()}}',
                        user_id :   user_id,
                        role_id :   $('input[name=role_id]').val()
                    },
                    success :   function (respon) {
                        notification(respon.type, respon.title, respon.content);
                        if (respon.type === 'success'){
                            Tableuser.ajax.reload();
                        }
                    }
                });
            });

            /* Remove user from role */
            $(document).on('click', 'button[name=btn-view]', function () {
                let role_id =   $(this).data('id');
                $('input[name=role_id]').val(role_id);
                Tableuser_remove.ajax.reload();
                $('#modal-list-user').modal({backdrop: 'static', keyboard: false, show : true});
            });

            /* Loại bỏ user */
            $(document).on('click','button[name=btn-remove-user]', function () {
                let user_id     =   $(this).data('id');
                let url         =   'roleuser/' + user_id;
                $.ajax(url, {
                    type    :   'DELETE',
                    data    :   {
                        _token  :   '{{csrf_token()}}',
                        user_id :   user_id,
                        role_id :   $('input[name=role_id]').val()
                    },
                    success :   function (respon) {
                        notification(respon.type, respon.title, respon.content);
                        if (respon.type === 'success'){
                            Tableuser_remove.ajax.reload();
                        }
                    }
                });
            });
        });

        function resetForm() {
            $('form[name=form-add-role]').trigger('reset');
            $('input[name=id]').val(0);
        }
    </script>
@endsection
