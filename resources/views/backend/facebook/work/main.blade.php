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

        input {
            cursor: pointer;
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
            <div class="col-lg-12">
                <span class="input-group-append">
                    <button type="button" class="btn btn-primary" name="btn-refresh">Lấy Acc</button>
                </span>
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
{{--                                    <th class="uid">UID</th>--}}
                                    <th class="new-pass">Pass Mới</th>
                                    <th class="typevia">Loại via</th>
                                    <th class="2fa">2FA</th>
                                    <th class="email">Email</th>
{{--                                    <th class="email">PassEmail</th>--}}
                                    <th class="download">Data backup</th>
                                    <th class="ads">ADS</th>
                                    <th class="comment">Ghi chú</th>
                                    <th class="status">Trạng thái</th>
                                    <th class="action">Thao Tác</th>
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
    @include('backend.facebook.work.form')
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
                    // {   data    :   'uid'   },
                    {   data    :   'newpass'   },
                    {   data    :   'typevia'   },
                    {   data    :   '2fa'   },
                    {   data    :   'email'   },
                    // {   data    :   'emailpass'   },
                    {
                        data    :   'id',
                        className: 'text-center',
                        render: function (data, type, row, meta) {
                            return `<i class="fa fa-download fa-2x text-primary"></i>`;
                        }
                    },
                    {
                        data    :   'ads',
                        className: 'text-center',
                        render: function (data, type, row, meta) {
                            let label;
                            switch (parseInt(data)) {
                                case 1: label = `<span class="label label-primary">Không khóa</span>`; break;
                                case 0: label = `<span class="label label-danger">Khóa</span>`; break;
                                default: label = `<span class="label label-default">Không xác định</span>`
                            }
                            return label;
                        }
                    },
                    {   data    :   'comment'   },
                    {
                        data    :   'status',
                        className: 'text-center',
                        render: function (data, type, row, meta) {
                            let button;
                            switch (parseInt(data)) {
                                case 2: button = `<span class="label label-primary">Hoàn thành</span>`; break;
                                case 3: button = `<span class="label label-warning-light">Không có ảnh</span>`; break;
                                case 4: button = `<span class="label label-warning">Hai lần sai ảnh</span>`; break;
                                case 5: button = `<span class="label label-danger">Sai password</span>`; break;
                                case 6: button = `<span class="label label-warning">2FA</span>`; break;
                                default: button = `<span class="label label-default">Chưa thao tác</span>`;
                            }
                            return button;
                        }
                    },
                    {
                        data    :   'id',
                        className: 'text-center',
                        render  :   function (data, type, row, meta) {
                            let button  =   '<button name="btn-edit" class="btn btn-edit btn-primary btn-flat btn-xs" title="Edit" data-id='+data+'><i class="fa fa-edit"></i></button>';
                            return button;
                        }
                    }
                ]
            });

            $(document).on('click', 'button[name=btn-refresh]', function () {
                $.ajax(mainUrl, {
                    type: 'post',
                    success: function (response) {
                        notification(response.type, response.title, response.content);
                        if (response.type === 'success'){
                            Table.ajax.reload();
                        }
                    }
                })
            })

            /* Edit function */
            $(document).on('click', 'button[name=btn-edit]', function () {
                // let data = $(this).data('data');
                let data = Table.row($(this).parents('tr')).data()
                $.each(data, function (index, item) {
                    $('[name='+index+']').val(item);
                });
                $('#modal-add-user').modal({backdrop: 'static', keyboard: false, show : true});
            });

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
                            $('#modal-add-user').modal('hide');
                        }
                    }
                })
            });

            /**
             * Copy to clipboard
             */

            $(document).on('click', 'input', function () {
                let copyText = $(this);
                copyText.select();
                document.execCommand("copy");
            })


        });
    </script>
@endsection
