@extends('layouts.app')
@section('title')
    <title>{{$currentFunction->name}} - {{config('custom.app_name')}}</title>
@endsection

@section('style')
    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">
    <style>
        table.dataTables-functions > thead > tr > th.stt {
            width: 15px;
        }
        table.dataTables-functions > thead > tr > th.name {
            width: 20%;
        }
        table.dataTables-functions > thead > tr > th.rout {
            width: 15%;
        }
        table.dataTables-functions > thead > tr > th.icon {
            width: 20px;
        }
        table.dataTables-functions > thead > tr > th.action {
            width: 60px;
        }
        table.dataTables-functions > thead > tr > th.state {
            width: 90px;
        }
        table.dataTables-functions {
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
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-functions">
                                <thead>
                                <tr>
                                    <th class="stt">STT</th>
                                    <th class="name">Tên chức năng</th>
                                    <th class="rout">Route</th>
                                    <th class="name">Controlelr</th>
                                    <th>Description</th>
                                    <th class="icon">Icon</th>
                                    <th class="icon">Ordering</th>
                                    <th class="state">Trạng Thái</th>
                                    <th class="state">Access Level</th>
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

    <!-- Modal add new function -->
    @include('backend.system.functions.form')
@endsection

@section('script')
    <script src="{{ asset('js/plugins/dataTables/datatables.min.js') }}"></script>
    <!-- Page-Level Scripts -->
    <script>
        let mainUrl = '{{$currentFunction->route}}';
        $(document).ready(function(){
            let Table = $('.dataTables-functions').DataTable({
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
                                $('#modal-add-function').modal({backdrop: 'static', keyboard: false, show : true});
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
                    {
                        data    :   'name',
                        render  : function (data, type, row, meta) {
                            if (row.parent_id === 0){
                                return '<b>'+data+'</b>';
                            } else {
                                // return '&emsp;'+data;
                                return ' - '+data;
                            }
                        }
                    },
                    {   data    :   'route'},
                    {   data    :   'controller'},
                    {   data    :   'description'},
                    {
                        data    :   'icon',
                        className: 'text-center',
                        render  :   function (data, type, row, meta) {
                            return '<i class="'+data+'"></i>';
                        }
                    },
                    {   data    :   'ordering'},
                    {
                        data    :   'state',
                        render  :   function (data, type, row, meta) {
                            let state;
                            switch (parseInt(data)){
                                case 0: state = 'Không kích hoạt'; break;
                                case 1: state = 'Kích hoạt'; break;
                                case 2: state = 'Kích hoạt ẩn'; break;
                                default:state = 'Chưa xác định'; break;
                            }
                            return state;
                        }
                    },
                    {
                        data    :   'access',
                        render  :   function (data, type, row, meta) {
                            let access;
                            switch (parseInt(data)){
                                case 1: access = 'Administrators'; break;
                                case 2: access = 'Students'; break;
                                case 3: access = 'Public'; break;
                                default:access = 'Chưa xác định'; break;
                            }
                            return access;
                        }
                    },
                    {
                        data    :   'id',
                        className: 'text-center',
                        render  :   function (data, type, row, meta) {
                            let button  =   '<button name="btn-edit" class="btn btn-primary btn-flat btn-xs" title="Sửa" data-data=\''+JSON.stringify(row)+'\'><i class="fa fa-edit"></i></button> <button name="btn-delete" class="btn btn-remove btn-danger btn-flat btn-xs" title="Xóa" data-id='+data+'><i class="fa fa-remove"></i></button>';
                            return button;
                        }
                    }
                ]
            });

            /* Add new/ edit function */
            $('button[name=add-function]').on('click', function () {
                let data = $('form[name=form-add-function]').serialize(),
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
                            $('#modal-add-function').modal('hide');
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
                $('#modal-add-function').modal({backdrop: 'static', keyboard: false, show : true});
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
        });

        function resetForm() {
            $('form[name=form-add-function]').trigger('reset');
            $('input[name=id]').val(0);
        }
    </script>
@endsection
