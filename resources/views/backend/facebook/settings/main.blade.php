@extends('layouts.app')
@section('title')
    <title>{{$currentFunction->name}} - {{config('custom.app_name')}}</title>
@endsection

@section('style')

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
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-2">
                                    <label for="message">Thông báo</label>
                                </div>
                                <div class="col-sm-8">
                                    @php
                                        $message = $settings->where('key','message')->first();
                                    @endphp
                                    <textarea name="message" id="message" class="form-control" cols="30" rows="10">@if(!empty($message)){{ $message->value }}@endif</textarea>
                                </div>
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-primary btn-update-message">Thay đổi thông báo</button>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-2">
                                    <label>Stream</label>
                                </div>
                                <div class="col-sm-8">
                                    @php
                                        $stream = $settings->where('key', 'stream')->first()->value;
                                    @endphp
                                    <select name="stream" id="stream" class="form-control">
                                        <option value="1" @if($stream == 1) selected @endif>Stream 1</option>
                                        <option value="2" @if($stream == 2) selected @endif>Stream 2</option>
                                        <option value="3" @if($stream == 3) selected @endif>Stream 3</option>
                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-primary btn-change-stream">Thay đổi stream cấp phát</button>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-2">
                                    <label>Số lượng account</label>
                                </div>
                                <div class="col-sm-8">
                                    @php
                                        $account = $settings->where('key', 'account')->first()->value;
                                    @endphp
                                    <input name="account" type="number" class="form-control" value="{{ $account }}">
                                </div>
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-primary btn-change-account">Thay đổi số account cấp phát</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        let mainUrl = '{{$currentFunction->route}}';
        $(document).ready(function () {
            $(document).on('click', '.btn-update-message', function () {
                $.ajax(mainUrl, {
                    type: 'POST',
                    data: {
                        message: $('textarea[name=message]').val(),
                        type: 'message'
                    },
                    success: function (response) {
                        notification(response.type, response.title, response.content)
                    }
                })
            })

            $(document).on('click', '.btn-change-stream', function () {
                $.ajax(mainUrl, {
                    type: 'POST',
                    data: {
                        stream: $('select[name=stream]').val(),
                        type: 'stream'
                    },
                    success: function (response) {
                        notification(response.type, response.title, response.content)
                    }
                })
            })

            $(document).on('click', '.btn-change-account', function () {
                $.ajax(mainUrl, {
                    type: 'POST',
                    data: {
                        account: $('input[name=account]').val(),
                        type: 'account'
                    },
                    success: function (response) {
                        notification(response.type, response.title, response.content)
                    }
                })
            })
        });
    </script>
@endsection
