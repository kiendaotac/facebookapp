@extends('layouts.app')
@section('title')
    <title>{{$currentFunction->name}} - {{config('custom.app_name')}}</title>
@endsection

@section('style')
    <link href="{!! asset('css/plugins/dropzone/basic.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/plugins/dropzone/dropzone.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/plugins/summernote/summernote.css') !!}" rel="stylesheet">
    <style>
        /* style css code tại đây */
        .dropzone .dz-message {
            margin: 47px 0!important;
        }
    </style>
@endsection
@section('content')
    <div class="row ">
        <div class="col-lg-12 border-bottom white-bg page-heading ">
            <h2>File Manager</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="/">Home</a>
                </li>
                <li class="active">
                    <strong>File Manager</strong>
                </li>
            </ol>
        </div>
    </div>
    @include('backend.system.file.upload-body')
@endsection
