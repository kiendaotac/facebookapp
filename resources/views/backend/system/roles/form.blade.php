<div class="modal inmodal" id="modal-add-role" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content animated bounceInRight">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                            class="sr-only">Close</span></button>
                <i class="{{$currentFunction->icon}} modal-icon"></i>
                <h4 class="modal-title">Thêm {{mb_strtolower($currentFunction->name)}}</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form action="#" method="post" name="form-add-role">
                        {{csrf_field()}}
                        <div class="form-group col-sm-6">
                            <label>Tên role</label>
                            <input type="text" placeholder="Tên roles" name="name" class="form-control"
                                   autocomplete="off">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Tên hiển thị</label>
                            <input type="text" placeholder="Tên hiển thị" name="display_name" class="form-control" autocomplete="off">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Mô tả</label>
                            <input type="text" placeholder="Mô tả" name="description" class="form-control"
                                   autocomplete="off">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Trạng thái</label>
                            <select name="state" class="form-control">
                                <option value="1">Kích hoạt</option>
                                <option value="0">Không kích hoạt</option>
                            </select>
                        </div>
                        <input type="hidden" name="id" value="0">
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" name="add-role"><i class="fa fa-save"></i> Save
                </button>
            </div>
        </div>
    </div>
</div>
<div class="modal inmodal" id="modal-add-user" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content animated bounceInRight">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                            class="sr-only">Close</span></button>
                <i class="fa fa-plus modal-icon"></i>
                <h4 class="modal-title">Thêm user</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover dataTables-add-user">
                                        <thead>
                                        <tr>
                                            <th class="stt">STT</th>
                                            <th class="name">User name</th>
                                            <th class="display_name">Tên hiển thị</th>
                                            <th class="">Email</th>
                                            <th class="action">Add</th>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--<div class="modal-footer">--}}
                {{--<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>--}}
                {{--<button type="button" class="btn btn-primary" name="add-role"><i class="fa fa-save"></i> Save</button>--}}
            {{--</div>--}}
        </div>
    </div>
</div>
<div class="modal inmodal" id="modal-list-user" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content animated bounceInRight">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                            class="sr-only">Close</span></button>
                <i class="fa fa-list modal-icon"></i>
                <h4 class="modal-title">Danh sách user trong role</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover dataTables-list-user">
                                        <thead>
                                        <tr>
                                            <th class="stt">STT</th>
                                            <th class="name">User name</th>
                                            <th class="display_name">Tên hiển thị</th>
                                            <th class="">Email</th>
                                            <th class="action">Remove</th>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--<div class="modal-footer">--}}
                {{--<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>--}}
                {{--<button type="button" class="btn btn-primary" name="add-role"><i class="fa fa-save"></i> Save</button>--}}
            {{--</div>--}}
        </div>
    </div>
</div>