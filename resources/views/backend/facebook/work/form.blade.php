<div class="modal inmodal" id="modal-add-user" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content animated bounceInRight">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                            class="sr-only">Close</span></button>
                <i class="{{$currentFunction->icon}} modal-icon"></i>
                <h4 class="modal-title">{{mb_strtolower($currentFunction->name)}}</h4>
                <h3>Click vào input để copy</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form action="#" method="post" name="form-edit-account">
                        <div class="form-group col-sm-6">
                            <label>Email</label>
                            <input type="email" placeholder="Email" name="email" class="form-control" title="Email-Click vào để copy">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Pass New</label>
                            <input type="newpass" placeholder="Mật khẩu mới" name="newpass" class="form-control" readonly title="Mật khẩu mới-Click vào để copy">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="typevia">Loại via</label>
                            <select name="typevia" id="typevia" class="form-control">
                                <option value="1">Loại 1</option>
                                <option value="2">Loại 2</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="cookie">Cookie</label>
                            <input type="text" class="form-control" name="cookie" id="cookie">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>2FA</label>
                            <input type="text" placeholder="2FA" name="2fa" class="form-control"
                                   autocomplete="off">
                        </div>
                        <div class="form-group col-lg-6">
                            <label>Trạng thái</label>
                            <select name="status" class="form-control">
                                <option value="1">Chưa thao tác</option>
                                <option value="2">Hoàn Thành</option>
                                <option value="3">Không có ảnh</option>
                                <option value="4">Hai lần sai ảnh</option>
                                <option value="5">Sai Password</option>
                                <option value="6">2FA</option>
                                <option value="7">CP sau hoàn thành</option>
                            </select>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="comment">Ghi chú</label>
                                <textarea name="comment" class="form-control" id="comment" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                        <input type="hidden" name="id" value="0">
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" name="update-account"><i class="fa fa-save"></i> Update</button>
            </div>
        </div>
    </div>
</div>