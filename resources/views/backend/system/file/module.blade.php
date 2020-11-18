@php
$maxsize = 0;
$post_max_size = str_replace("M", "", ini_get('post_max_size'));
$upload_max_filesize = str_replace("M", "", ini_get('upload_max_filesize'));
$maxsize = ($post_max_size > $upload_max_filesize ? $post_max_size : $upload_max_filesize);
$month = \App\File::orderBy('created_at', 'desc')->groupBy('year', 'month')->get();
$year = \App\File::orderBy('created_at', 'desc')->groupBy('year')->get();
@endphp
<div class="modal inmodal modal-full" id="module-file" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-full">
        <div class="modal-content animated bounceInRight modal-content-full">
            <div class="modal-body modal-body-full">
                <div class="row">
                    @include('backend.system.file.upload-body')
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

