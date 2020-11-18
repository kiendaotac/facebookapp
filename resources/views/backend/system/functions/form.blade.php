<div class="modal inmodal" id="modal-add-function" tabindex="-1" role="dialog" aria-hidden="true">
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
                    <form action="#" method="post" name="form-add-function">
                        {{csrf_field()}}
                        <div class="form-group col-sm-6">
                            <label>Tên chức năng</label>
                            <input type="text" placeholder="Tên chức năng" name="name" class="form-control"
                                   autocomplete="off">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Thuộc nhóm</label>
                            <select name="parent_id" class="form-control">
                                <option value="0">Không thuộc nhóm nào</option>
                                @foreach($functions as $item)
                                    @if($item->parent_id == 0)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        {{--@foreach($item->childs->sortBy('ordering') as $func)--}}
                                            {{--<option value="{{$func->id}}">&emsp;{{$func->name}}</option>--}}
                                        {{--@endforeach--}}
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Route</label>
                            <input type="text" placeholder="Route" name="route" class="form-control" autocomplete="off">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Controller</label>
                            <input type="text" placeholder="Controller" name="controller" class="form-control"
                                   autocomplete="off">
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea name="description" class="form-control" id="" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label>Icon</label>
                                    <input type="text" placeholder="Icon" name="icon" class="form-control"
                                           value="glyphicon glyphicon-menu-right">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Access level</label>
                                    <select name="access" class="form-control">
                                        <option value="1">Administrators</option>
                                        <option value="2">Students</option>
                                        <option value="3">Public</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label>Ordering</label>
                                    <input type="number" placeholder="Ordering" name="ordering" class="form-control"
                                           value="100">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Trạng thái</label>
                                    <select name="state" class="form-control">
                                        <option value="1">Kích hoạt</option>
                                        <option value="2">Kích hoạt ẩn</option>
                                        <option value="0">Không kích hoạt</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="id" value="0">
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" name="add-function"><i class="fa fa-save"></i> Save
                </button>
            </div>
        </div>
    </div>
</div>
