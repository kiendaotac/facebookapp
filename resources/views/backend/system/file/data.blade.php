@if(isset($files))
    @foreach($files as $file)
        <div class="file-box" title="{{$file->title}}">
            @if($delete !='0')
                <div class="btn-del-file" title="Xóa" data-id="{{$file->id}}">
                    <i class="fa fa-remove"></i>
                </div>
            @endif
            @if(in_array($file->extension,$IMGextensions))
                <div class="file upload" data-id="{{$file->id}}"
                     data-extension="{{$file->extension}}"
                     data-thumbs="{!! 'storage/uploads/'.$file->year.'/'.$file->month.'/'.$file->file_name.'.'.$file->extension !!}"
                     data-src="{{ 'storage/uploads/'.$file->year.'/'.$file->month.'/'.$file->file_name.'.'.$file->extension }}">
                    <a>
                        <span class="corner"></span>
                        <div class="image">
                            <img alt="{{$file->title}}" class="img-responsive"
                                 src="{!! asset('storage/uploads/'.$file->year.'/'.$file->month.'/'.$file->file_name.'.'.$file->extension) !!}">
                        </div>
                        <div class="file-name">
                            <?php
                            if (strlen($file->title) > 20) {
                                $file_name = mb_substr($file->title, 0, 20) . '...' . $file->extension;
                            } else {
                                $file_name = $file->title;
                            }
                            ?>
                            {{$file_name}}
                            <br/>
                            <small>Cập nhật: {{Carbon\Carbon::parse($file->created_at)->format('d/m/Y')}}</small>
                        </div>
                    </a>
                </div>
            @elseif(in_array($file->extension,$icons))
                <div class="file upload" data-id="{{$file->id}}"
                     data-extension="{{$file->extension}}"
                     data-thumbs="{{ 'storage/icons/'.$file->extension.'.png' }}"
                     data-src="{{ 'storage/uploads/'.$file->year.'/'.$file->month.'/'.$file->file_name.'.'.$file->extension }}">
                    <a>
                        <span class="corner"></span>
                        <div class="icon" style="text-align: center">
                            <img alt="{{$file->title}}" class="img"
                                 src="{!! asset('storage/icons/'.$file->extension.'.png') !!}">
                        </div>
                        <div class="file-name">
                            <?php
                            if (strlen($file->title) > 20) {
                                $file_name = mb_substr($file->title, 0, 20) . '...' . $file->extension;
                            } else {
                                $file_name = $file->title;
                            }
                            ?>
                            {{$file_name}}
                            <br/>
                            <small>Cập nhật: {{Carbon\Carbon::parse($file->created_at)->format('d/m/Y')}}</small>
                        </div>
                    </a>
                </div>
            @else
                <div class="file upload" data-id="{{$file->id}}"
                     data-extension="{{$file->extension}}"
                     data-thumbs="{!! 'storage/icons/file.png' !!}"
                     data-src="{!! 'storage/uploads/'.$file->year.'/'.$file->month.'/'.$file->file_name.'.'.$file->extension !!}">
                    <a>
                        <span class="corner"></span>
                        <div class="icon">
                            <i class="fa fa-file"></i>
                        </div>
                        <div class="file-name">
                            <?php
                            if (strlen($file->title) > 20) {
                                $file_name = mb_substr($file->title, 0, 20) . '...' . $file->extension;
                            } else {
                                $file_name = $file->title;
                            }
                            ?>
                            {{$file_name}}
                            <br/>
                            <small>Cập nhật: {{Carbon\Carbon::parse($file->created_at)->format('d/m/Y')}}</small>
                        </div>
                    </a>
                </div>
            @endif
        </div>
    @endforeach
@endif
<link rel="stylesheet" href="{{ asset('css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css') }}">
<style>
    div.file-box:hover {
        transform: scale(1.1, 1.1);
        -webkit-transform: scale(1.1, 1.1);
    }

    div.file-box {
        position: relative;
        transition: transform ease 0.7s 0.1s;
        -webkit-transition: transform ease 0.7s 0.1s;
    }

    div.btn-del-file {
        float: right;
        height: 24px;
        width: 24px;
        text-align: center;
        position: absolute;
        right: 22px;
        z-index: 99;
        top: 2px;
        color: red;
        font-size: 18px;
        cursor: pointer;
    }
    .checkbox label::after{
        padding-top: 10px !important;
    }
</style>
