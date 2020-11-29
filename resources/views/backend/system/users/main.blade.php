@extends('layouts.app')
@section('title')
<title>{{$currentFunction->name}} - {{config('custom.app_name')}}</title>
@endsection

@section('style')
<link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">
<style>
table.dataTables-users > thead > tr > th.stt {
    width: 15px;
}
table.dataTables-users > thead > tr > th.avatar-user {
    width: 70px;
}
table.dataTables-users > thead > tr > th.name {
    width: 20%;
}
table.dataTables-users > thead > tr > th.email {
    width: 20%;
}
table.dataTables-users > thead > tr > th.action {
    width: 60px;
}
table.dataTables-users > thead > tr > th.state {
    width: 90px;
}
table.dataTables-users > tbody > tr > td > img.avatar-user {
    width: 60px;
    height: 60px;
}
table.dataTables-users > tbody > tr > td {
    vertical-align: middle;
}
table.dataTables-users {
    width: 100% !important;
}

</style>
@endsection
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>{{ __('users.title') }} {{mb_strtolower($currentFunction->name)}}</h2>
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
                        <table class="table table-striped table-bordered table-hover dataTables-users">
                            <thead>
                                <tr>
                                    <th class="stt">{{ __('users.stt') }}</th>
                                    <th class="name">{{ __('users.username') }}</th>
                                    <th class="email">{{ __('users.email') }}</th>
                                    <th class="display_name">{{ __('users.display_name') }}</th>
                                    <th class="display_name">Data đã lấy</th>
                                    <th class="state">Online</th>
                                    <th class="state">{{ __('users.state') }}</th>
                                    <th class="action">{{ __('users.action') }}</th>
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
@include('backend.system.users.form')
@endsection

@section('script')
<script src="{{ asset('js/plugins/dataTables/datatables.min.js') }}"></script>
{{--<script src={{ asset('js/custom.js') }}></script>--}}
<!-- Page-Level Scripts -->
<script>
   let mainUrl = '{{$currentFunction->route}}';
   $(document).ready(function(){
    let Table = $('.dataTables-users').DataTable({
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
                text: '{{ __('users.add_new') }}',
                action: function ( e, dt, node, config ) {
                    resetForm();
                    $('#modal-add-user').modal({backdrop: 'static', keyboard: false, show : true});
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
        {   data    :   'name'},
        {   data    :   'email'},
        {   data    :   'display_name'},
        {
            data    :   'account_count',
            className: 'text-center',
            render  : function (data, type, row, meta) {
                return `${row.AccountSuccess}/${data}`
            }
        },
        {
            className: 'text-center',
            data    :   'isOnline',
            render  : function (data, type, row, meta) {
                let onlineLabel = `<span class="label label-primary">Online</span>`;
                let offlineLabel = `<span class="label label-primary">Online</span>`;
                return data ? onlineLabel : offlineLabel;
            }
        },
        {
            data    :   'state',
            render  :   function (data, type, row, meta) {
                let state;
                switch (parseInt(data)){
                    case 0: state = '{{ __('users.not_activated') }}'; break;
                    case 1: state = '{{ __('users.activated') }}'; break;
                    case 2: state = '{{ __('users.activate_hide') }}'; break;
                    default:state = '{{ __('users.not_activated') }}'; break;
                }
                return state;
            }
        },
        {
            data    :   'id',
            className: 'text-center',
            render  :   function (data, type, row, meta) {
                return '<button name="btn-edit" class="btn btn-primary btn-flat btn-xs" title="{{ __('users.edit') }}" data-data=\''+JSON.stringify(row)+'\'><i class="fa fa-edit"></i></button> <button name="btn-delete" class="btn btn-remove btn-danger btn-flat btn-xs" title="{{ __('users.delete') }}" data-id='+data+'><i class="fa fa-remove"></i></button>';
            }
        }
        ]
    });

    /* Add new/ edit User */
    $('button[name=add-user]').on('click', function () {
        if($('select[name=uni_id]').val() <= 0) swal('{{ __('users.alert_chose_uni') }}');
        else {
            let key = 'id_uni,name_uni';
            let value = $('select[name=uni_id]').val()+','+$('select[name=uni_id] option:selected').text();
            let data = $('form[name=form-add-user]').serialize(),
            id      =   $('input[name=id]').val(),
            type    =   'POST',
            url     =   mainUrl;
            if (parseInt(id)){
                type    =   'PUT';
                url     =   mainUrl + '/' + id;
            }
            data += '&key='+key+'&value='+value;
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
        }
    });

    /* Edit function */
    $(document).on('click', 'button[name=btn-edit]', function () {
        let data = $(this).data('data');
        $.each(data, function (index, item) {
            $('[name='+index+']').val(item);
        });
        $('#modal-add-user').modal({backdrop: 'static', keyboard: false, show : true});
    });

    /* Delete function */
    $(document).on('click', 'button[name=btn-delete]', function () {
        let id  = $(this).data('id');
        let url =   mainUrl + '/' + id;
        swal({
            title: "{{ __('users.alert_title_delete') }}",
            text: "{{ __('users.alert_text_delete') }}",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "{{ __('users.confirmButtonText') }}",
            cancelButtonText: "{{ __('users.cancelButtonText') }}",
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
    $('form[name=form-add-user]').trigger('reset');
    $('input[name=id]').val(0);
}
</script>
@endsection
