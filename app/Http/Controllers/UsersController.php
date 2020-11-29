<?php

namespace App\Http\Controllers;

use App\Functions;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url             = getURL();
        $currentFunction = Functions::where('route', $url)->where('state', 1)->orderBy('id', 'desc')->first();

        return view('backend.system.users.main', compact('currentFunction'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        if ($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'name'         => 'required|unique:users,name',
                'email'        => 'required|email|unique:users,email',
                'display_name' => 'nullable|string',
                'avatar'       => 'nullable|string',
                'password'     => 'required|string|min:6',
                'phone'        => 'required|numeric',
                'facebook'     => 'nullable|string',
                'state'        => 'nullable|numeric'
            ]);
            if ($validator->fails()) {
                return response()->json([
                    'type'    => 'error',
                    'title'   => 'Lỗi!',
                    'content' => $validator->errors()->all()]);
            } else {
                $this->addItem($request);

                return response()->json([
                    'type'    => 'success',
                    'title'   => 'Thành công!',
                    'content' => 'Thêm user thành công !!'
                ]);
            }
        } else {
            return response()->json([
                'type'    => 'error',
                'title'   => 'Lỗi!',
                'content' => 'Không phải ajax request']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function show(Request $request, $id)
    {
        if ($request->ajax()) {
            if ($id === 'getDatatable') {
                $users = User::withCount(['Account', 'Account as AccountSuccess' => function($q){
                    $q->where('status', 2);
                }])->get();
                return datatables($users)->make(true);
            }
        } else {
            return response()->json([
                'type'    => 'error',
                'title'   => 'Lỗi!',
                'content' => 'Không phải ajax request']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Chưa check admin quyền thấp sửa ad min quyền cao hơn
        if ($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'name'         => 'required', Rule::unique('user', 'name')->ignore($id),
                'email'        => 'required|email', Rule::unique('user', 'email')->ignore($id),
                'display_name' => 'nullable|string',
                'avatar'       => 'nullable|string',
                'password'     => 'nullable|string|min:6',
                'phone'        => 'required|numeric',
                'facebook'     => 'nullable|string',
                'state'        => 'nullable|numeric'
            ]);
            if ($validator->fails()) {
                return response()->json([
                    'type'    => 'error',
                    'title'   => 'Lỗi!',
                    'content' => $validator->errors()->all()]);
            } else {
                $currentUser = Auth::user();
                $user        = User::find($id);
                if ($request->state == 0) {
                    if ($user->hasRole('Owner') && $currentUser->id != $id) {
                        return response()->json([
                            'type'    => 'error',
                            'title'   => 'Lỗi!!',
                            'content' => 'Xin lỗi bạn quá đen, bạn không thể disable người tạo ra trang web này <3']);
                    }
                }
                $this->editItem($request, $id);

                return response()->json([
                    'type'    => 'success',
                    'title'   => 'Thành công!',
                    'content' => 'Sửa user thành công !!'
                ]);
            }
        } else {
            return response()->json([
                'type'    => 'error',
                'title'   => 'Lỗi!',
                'content' => 'Không phải ajax request']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $currentUser = Auth::user();
        $deleUser    = User::find($id);
        if ($id == $currentUser->id) {
            return response()->json([
                'type'    => 'error',
                'title'   => 'Lỗi!!',
                'content' => 'Bạn không thể xóa chính mình']);
        }
        if ($deleUser->hasRole('Owner')) {
            return response()->json([
                'type'    => 'error',
                'title'   => 'Lỗi!!',
                'content' => 'Xin lỗi bạn quá đen, bạn không thể xóa người tạo ra trang web này <3']);
        }
        $deleUser->delete();

        return response()->json([
            'type'    => 'success',
            'title'   => 'Thành công!!',
            'content' => 'Xóa role thành công']);
    }

    public function addItem($request)
    {
        $user        = new User();
        $user->name  = $request->name;
        $user->email = $request->email;
        if (!$request->get('display_name')) {
            $user->display_name = $request->name;
        } else {
            $user->display_name = $request->display_name;
        }
        $user->avatar = $request->avatar;
        /*if (!$request->get('avatar')){
            $user->avatar = 'img/noavatar.png';
        } else {
            $user->avatar = $request->avatar;
        }*/
        $user->password = bcrypt($request->password);
        $user->state    = $request->state;
        $user->phone = $request->phone;
        $user->facebook = $request->facebook;
        $user->save();
        $user->attachRole(3);
    }

    public function editItem($request, $id)
    {
        $user        = User::find($id);
        $user->name  = $request->name;
        $user->email = $request->email;
        if (!$request->get('display_name')) {
            $user->display_name = $request->name;
        } else {
            $user->display_name = $request->display_name;
        }
        $user->avatar   = $request->avatar;
        if (!empty($request->password)){
            $user->password = bcrypt($request->password);
        }
        $user->state    = $request->state;
        $user->phone = $request->phone;
        $user->facebook = $request->facebook;
        $user->save();
    }

    /* get list data user */
    public function getData()
    {
        $users = User::all();
        return $users;
    }

}