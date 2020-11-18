<div class="modal inmodal" id="modal-add-user" tabindex="-1" role="dialog" aria-hidden="true">
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
                    <form action="#" method="post" name="form-add-user">
                        {{csrf_field()}}
                        <div class="form-group col-sm-6">
                            <label>User name</label>
                            <input type="text" placeholder="User name" name="name" class="form-control"
                                   autocomplete="off">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Email</label>
                            <input type="email" placeholder="Email" name="email" class="form-control"
                                   autocomplete="off">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Tên hiển thị</label>
                            <input type="text" placeholder="Tên hiển thị" name="display_name" class="form-control"
                                   autocomplete="off">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Mật khẩu</label>
                            <input type="password" placeholder="Mật khẩu >= 6 ký tự" name="password"
                                   class="form-control"
                                   autocomplete="off">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Số điện thoại</label>
                            <input type="number" placeholder="Số điện thoại" name="phone" class="form-control"
                                   autocomplete="off">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Link Facebook</label>
                            <input type="text" placeholder="Link Facebook cá nhân" name="facebook" class="form-control"
                                   autocomplete="off">
                        </div>
                        <div class="form-group col-lg-6">
                            <label>Avatar</label>
                            <input type="text" placeholder="Link đến ảnh avatar" name="avatar" class="form-control"
                                   autocomplete="off">
                        </div>
                        <div class="form-group col-lg-6">
                            <label>Trạng thái</label>
                            <select name="state" class="form-control">
                                <option value="1">Kích hoạt</option>
                                <option value="2">Kích hoạt ẩn</option>
                                <option value="0">Không kích hoạt</option>
                            </select>
                        </div>
                        <input type="hidden" name="id" value="0">
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" name="add-user"><i class="fa fa-save"></i> Save</button>
            </div>
        </div>
    </div>
</div>