@extends('layouts.app')
@section('title')
    <title>{{$currentFunction->name}} - {{config('custom.app_name')}}</title>
@endsection

@section('style')
    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">
    <link href="css/plugins/dataTables/dataTables.checkboxes.css" rel="stylesheet">
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

        .custom-file {
            position: relative;
            display: inline-block;
            width: 100%;
            height: calc(2.25rem + 2px);
            margin-bottom: 0;
        }

        .custom-file-input {
            position: relative;
            z-index: 2;
            width: 100%;
            height: calc(2.25rem + 2px);
            margin: 0;
            opacity: 0;
        }
        .custom-file-label {
            padding: .5rem .75rem;
        }
        .custom-file-label {
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1;
            height: calc(2.25rem + 2px);
            padding: .375rem .75rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            border: 1px solid #ced4da;
            border-radius: .25rem;
        }
        .custom-file-label::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            z-index: 3;
            display: block;
            height: calc(calc(2.25rem + 2px) - 1px * 2);
            padding: .375rem .75rem;
            line-height: 1.5;
            color: #495057;
            content: "Browse";
            background-color: #e9ecef;
            border-left: 1px solid #ced4da;
            border-radius: 0 .25rem .25rem 0;
        }

        input[type="file" i] {
            appearance: initial;
            background-color: initial;
            cursor: default;
            align-items: baseline;
            color: inherit;
            text-overflow: ellipsis;
            white-space: pre;
            text-align: start !important;
            padding: initial;
            border: initial;
            overflow: hidden;
        }

        input {
            -webkit-writing-mode: horizontal-tb !important;
            text-rendering: auto;
            color: -internal-light-dark(black, white);
            letter-spacing: normal;
            word-spacing: normal;
            text-transform: none;
            text-indent: 0px;
            text-shadow: none;
            display: inline-block;
            text-align: start;
            appearance: textfield;
            background-color: -internal-light-dark(rgb(255, 255, 255), rgb(59, 59, 59));
            -webkit-rtl-ordering: logical;
            cursor: text;
            margin: 0em;
            font: 400 13.3333px Arial;
            padding: 1px 2px;
            border-width: 2px;
            border-style: inset;
            border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
            border-image: initial;
        }
        .input-group {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -ms-flex-align: stretch;
            align-items: stretch;
            width: 100%;
        }

        .text-primary {
            color: #1ab394;
            cursor: pointer;
        }

        /*input, .copy-nick {
            cursor: pointer;
        }*/

        .input-group>.custom-file, .input-group>.custom-select, .input-group>.form-control, .input-group>.form-control-plaintext {
            position: relative;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            width: 1%;
            margin-bottom: 0;
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
            <div class="col-md-3">
                <label for="filter-user">Lọc theo user</label>
                <select name="filter-user" id="filter-user" class="form-control filter">
                    <option value="0">Tất cả user</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->display_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3">
                <label for="filter-date">Lọc theo ngày</label>
                <input type="date" id="filter-date" name="filter-date" class="form-control filter">
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
                                    <th class="uid">User</th>
                                    <th class="old-pass">Ngày</th>
                                    <th class="new-pass">Giờ làm việc</th>
                                    {{--<th class="status">Status</th>
                                    <th class="action">Thao Tác</th>--}}
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('backend.facebook.schedule.form')
@endsection
@section('script')
    <script src="js/plugins/dataTables/datatables.min.js"></script>
    {{--<script src="js/plugins/dataTables/dataTables.checkboxes.min.js"></script>
    <!-- Clipboard -->
    <script src="js/plugins/clipboard/clipboard.min.js"></script>
    <!-- Page-Level Scripts -->--}}
    <script>
        let mainUrl = '{{$currentFunction->route}}';
        $(document).ready(function(){
            let Table = $('.dataTables').DataTable({
                // select: true,
                bSort: false,
                bInfo: true,
                bLengthChange: true,
                processing: true,
                serverSide: true,
                searching: true,
                paging: true,
                pageLength: 200,
                responsive: true,
                // ajax: mainUrl + '/getDatatable',
                ajax: $.extend({
                        url: mainUrl + '/getDatatable'
                    }, {
                        type: 'GET'
                    },
                    {
                        data: function (d) {
                            d.user = $('select[name=filter-user]').val();
                            d.date = $('input[name=filter-date]').val();
                        }
                    }),
                dom: '<"row"<"col-sm-12 add-select-role">><"row"<"col-sm-6"<"col-sm-12"l><"col-sm-12"i>><"col-sm-6"f>>rtp',
                // dom: 'Blfrtip',
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
                    {   data    :   'user.display_name'   },
                    {   data    :   'date'   },
                    {   data    :   'time'   },
                ]
            });

            $(document).on('click', 'button[name=btn-edit]', function () {
                let row = $(this).parents('tr');
                let data = Table.row(row).data();
                $.each(data, function (index, item) {
                    $('[name='+index+']').val(item);
                });
                $('#modal-edit-account').modal('show')
            })

            /* Update account */
            $('button[name=update-account]').on('click', function () {
                let data = $('form[name=form-edit-account]').serialize(),
                    id      =   $('input[name=id]').val(),
                    type    =   'PUT',
                    url     =   mainUrl + '/' + id;
                $.ajax(url,{
                    type    :   type,
                    data    :   data,
                    success :   function (respon) {
                        notification(respon.type, respon.title, respon.content);
                        if(respon.type === 'success'){
                            Table.ajax.reload();
                            $('#modal-edit-account').modal('hide');
                        }
                    }
                })
            });

            $(document).on('click', 'button[name=btn-upload]', function () {
                let formData = new FormData();
                let file = $('input#file')[0].files[0];
                formData.append('file',file)
                formData.append('stream', $('select[name=stream]').val())
                $.ajax(mainUrl, {
                    contentType: false,
                    processData: false,
                    cache: false,
                    type: 'post',
                    data: formData,
                    success: function (response) {
                        notification(response.type, response.title, response.content);
                        if (response.type === 'success'){
                            Table.ajax.reload();
                            $('.custom-file-input').val('');
                        }
                    }
                })
            })

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

            $(document).on('change', '.filter', function () {
                Table.ajax.reload();
            })

            /**
             * Download file
             */
            $(document).on('click', 'button[name=btn-download]', function () {
                let status = $('select[name=filter-status]').val();
                let user = $('select[name=filter-user]').val();
                let stream = $('select[name=filter-stream]').val();
                let url = mainUrl + `/download?user=${user}&status=${status}&stream=${stream}`;
                window.open(url)
            })

            /**
             * Delete multiple account
             *
             */
            function deleteMultipleRows(rowsSelected) {
                let id  = 'deleteMultipleRows'
                let url =   mainUrl + '/' + id;
                swal({
                    title: "Bạn có muốn xóa các account này không??",
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
                                _token  :   '{{csrf_token()}}',
                                rows    :   rowsSelected
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
            }

            /**
             * Download multiple account
             *
             */
            function downloadMultipleRows(rowsSelected) {
                let id  = 'downloadMultipleRows'
                let url =   mainUrl + '/' + id;
                swal({
                    title: "Bạn có muốn download các account này không???",
                    text: "",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "OK",
                    cancelButtonText: "Không",
                    closeOnConfirm: true,
                    closeOnCancel: true
                }, function (config) {
                    if (config){
                        let parameter = $.param({rows:rowsSelected});
                        let url = mainUrl + `/${id}?${parameter}`;
                        window.open(url)
                    }
                });
            }
        });

        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });
    </script>
@endsection
