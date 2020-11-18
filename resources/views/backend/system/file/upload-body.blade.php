<div class="col-lg-3" style="padding-left: 0px; min-height: 280px">
    <div class="ibox float-e-margins file-manager-height">
        <div class="ibox-content file-manager-height" style="min-height: 280px">
            <div class="file-manager">
                <button name="upload" class="btn btn-primary btn-block"><i class="fa fa-upload"></i> Upload Files</button>
                <div class="hr-line-dashed"></div>
                <h5>Thư mục</h5>
                <ul class="folder-list" style="padding: 0">
                    @foreach($year as $y)
                        <li class="nam"><a><i class="fa fa-folder"></i> Năm {{$y->year}}</a>
                            <ul class="thang hide" style="padding: 0px; margin-bottom: 10px">
                                @foreach($month as $m)
                                    @if($m->year == $y->year)
                                        <li class="thang" style="display : inline-block" data-data="{{$m}}">
                                            <a class="fa-stack">
                                                <span class="month label label-default">T{{(int)$m->month}}</span>
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
                <div class="clearfix"></div>
                <h5>Show:</h5>
                <a class="file-control active" data-type="0">All</a>
                <a class="file-control" data-type="1">Documents</a>
                <a class="file-control" data-type="2">Audio</a>
                <a class="file-control" data-type="3">Video</a>
                <a class="file-control" data-type="4">Images</a>
                <a class="file-control" data-type="5">Archive file</a>
                <div class="hr-line-dashed"></div>
                <div class="clearfix"></div>
                <div class="file-filter">
                    <div class="checkbox checkbox-success"  style="display: inline-block">
                        <input id="hide-image" type="checkbox">
                        <label for="hide-image">
                            Ẩn hình ảnh
                        </label>
                    </div>
                    <br>
                    <div class="checkbox checkbox-success"  style="display: inline-block">
                        <input id="your-self" type="checkbox">
                        <label for="your-self">
                            Hiển thị dữ liệu của bạn
                        </label>
                    </div>
                </div>
                <div class="paste-image">
                    <textarea name="paste-image" class="form-control" readonly cols="30" rows="10" placeholder="Paste image here to upload to server"></textarea>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-9 animated fadeInRight" style="padding-top: 15px">
    <div class="row">
        <div class="col-lg-12" id="file-list" style="max-height: 800px; overflow-y: auto">

        </div>
    </div>
</div>
{{-- commnet--}}
@include('backend.system.file.modal-upload')
{{--end comment --}}
@section('script-upload')
    <!-- DROPZONE -->
    <script src="{!! asset('js/plugins/dropzone/dropzone.js') !!}"></script>

    {{-- Paste is --}}
    <script src="{{ asset('js/paste.js') }}"></script>
    <script src="{!! asset('js/plugins/summernote/summernote.min.js') !!}"></script>


    <script type="text/javascript">
        Dropzone.options.myDropzone= {
            url: '{!! asset('files') !!}',
            headers: {
                'X-CSRF-TOKEN': '{!! csrf_token() !!}'
            },
            autoProcessQueue: true,
            uploadMultiple: true,
            parallelUploads: 5,
            maxFiles: 10,
            maxFilesize: {!! $maxsize !!},
            dictDefaultMessage: "<strong>Kéo thả files vào đây để upload lên máy chủ </strong></br> (Hoặc click chuột để chọn files upload.)",
            dictFileTooBig: 'Image is bigger than 5MB',
            addRemoveLinks: false,
            previewsContainer: null,
            hiddenInputContainer: "body",
            success: function (file, respon) {
                this.removeFile(file);
                var data    =   $('span.month.label.label-primary').closest('li.thang').data('data');
                var year    =   (new Date()).getFullYear();
                var month   =   (new Date()).getMonth() + 1;
                if (data !== undefined){
                    year    =   data.year;
                    month   =   data.month;
                }
                var type    =   $('a.file-control.active').data('type');
                loadFiles(year, month, type);
                notification(respon.type, respon.title, respon.content);
            }
        }
    </script>
    <style>
        .paste-image .note-statusbar {
            display: none !important;
        }
    </style>
    <script>
        $(document).ready(function(){
            let height  =   $(window).height()-275;
            $('.file-manager-height').height(height);
            $(window).resize(function () {
                let height  =   $(window).height()-275;
                $('.file-manager-height').height(height);
            });
            loadFiles();
            $('.nam').on('click',function () {
                let ul  =   $(this).closest('li').find('ul');
                $('li.nam').find('ul.thang').addClass('hide');
                ul.hasClass('hide') ? ul.removeClass('hide') : ul.addClass('hide');
            });

            $('button[name=upload]').on('click',function () {
                $('#modal-upload').modal('show');
            });

            $(document).on('click', '.over-lay',function (event) {
                if ($('#modal-upload').hasClass('in')){
                    $('#modal-upload').modal('hide');
                }
            });

            $('li.thang').on('click',function () {
                $('li.thang').find('span.label').removeClass('label-primary').addClass('label-default');
                $(this).find('span').removeClass('label-default').addClass('label-primary');
                loadFiles();
            });
            $('a.file-control').on('click', function (e) {
                e.preventDefault();
                $('a.file-control').removeClass('active');
                $(this).addClass('active');
                loadFiles();

            });
            $(document).on('click','.btn-del-file', function () {
                let id  =   $(this).data('id');
                let url =   '{!! asset('') !!}' + 'files/'+id;
                swal({
                    title: "Bạn có muốn xóa file này không",
                    text: "Khi xóa sẽ không thể khôi phục lại",
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
                                ad      :   'asd'
                            },
                            success :   function (data) {
                                notification(data.type, data.title, data.content);
                                if (data.type == 'success'){
                                    loadFiles();
                                }
                            }
                        })
                    }
                });

            });

            /* Ẩn hiện hình ảnh */
            $(document).on('change', 'input#hide-image', function () {
                toggle();
            });
            /* Ẩn hiện hình ảnh chỉ của bạn upload */
            $(document).on('change', 'input#your-self', function () {
                loadFiles();
            });

            $('textarea[name=paste-image]').summernote({
                placeholder: 'Paste image here to upload to serve',
                toolbar: [],
                maxHeight: 200,
                callbacks: {
                    onImageUpload: function(files, editor, $editable) {
                        sendFileOnUploadModule(files[0], editor, $editable);
                        $('textarea[name=paste-image]').summernote('code','');
                    }
                }
            });
        });

        /* upload image when pasted image to editor */
        function sendFileOnUploadModule(file,editor,welEditable) {
            let data = new FormData();
            data.append("file", file);
            $.ajax({
                url: "{{ asset('files') }}",
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                type: 'POST',
                success: function(data){
                    notification(data.type, data.title, data.content);
                    loadFiles();
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus+" "+errorThrown);
                }
            });
        }

        function toggle() {
            if ($('input#hide-image:checkbox:checked').length){
                $('.file .icon, .file .image').css('display', 'none');
                $('.file .icon, .file .file-name small').css('display', 'none');
            } else {
                $('.file .icon, .file .image').css('display', '');
                $('.file .icon, .file .file-name small').css('display', '');
            }
        }
        function loadFiles() {
            let type    =   0;
            let data    =   $('span.month.label.label-primary').closest('li.thang').data('data');
            let year    =   (new Date()).getFullYear();
            let month   =   (new Date()).getMonth() + 1;
            if (data !== undefined){
                year    =   data.year;
                month   =   data.month;
            }
            type        =   $('a.file-control.active').data('type');
            let url     =   '{!! asset('files/get-files') !!}';
            let your    =   $('input#your-self:checkbox:checked').length ? 1 : 0;
            Pace.start();
            $.ajax(url,{
                type    :   'GET',
                data    :   {
                    year    :   year,
                    month   :   month,
                    type    :   type,
                    your    :   your
                },
                success :   function (data) {
                    $('#file-list').html(data);
                    toggle();
                }
            });
        }
    </script>
@stop


