<?php

namespace App\Http\Middleware;

use App\Functions;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class PermissionToAccessFunction
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /* Get Function to access */
        $url                =   getURL();
        $currentFunction    =   Functions::where('route',$url)->first();
        if (!$currentFunction->state){
            return abort(404);
        }
        /* Get all permission of curent user */
        $roles = Auth::user()->roles;
        $permissions    =   array();
        if (!empty($roles)){
            foreach ($roles as $role){
                $newPermissions =   $role->permissions;
                if (!empty($newPermissions)){
                    foreach ($newPermissions as $newPermission){
                        array_push($permissions, $newPermission);
                    }
                }
            }
        }
        $permissions    =   array_unique($permissions);

        /* Khơi tạo các quyền mặc định */
        $view           =   0;
        $add            =   0;
        $edit           =   0;
        $del            =   0;
        if (Auth::user()->hasRole('Owner')){
            $view           =   1;
            $add            =   1;
            $edit           =   1;
            $del            =   1;
        }
        /* Kiểm tra quyền */
        if (!empty($permissions)){
            foreach ($permissions as $permission){
                $per    =   explode('-',$permission->name);
                $funcId =   $per[1];
                $access =   $per[0];
                if ($funcId == $currentFunction->id){
                    switch ($access){
                        case 'View':    $view = 1; break;
                        case 'Add':     $add = 1; break;
                        case 'Edit':    $edit = 1; break;
                        case 'Delete':  $del = 1; break;
                    }
                }
            }
        }
        /* Cấp quyền truy cập cho các chức năng */
        $route_name =   Route::currentRouteName();
        $arr        =   explode('.',$route_name);
        $function   =   last($arr);
        switch ($function){
            default :
                return abort(404);
            case 'index':
                if ($view){
                    return $next($request);
                } else {
                    return abort(404);
                }
                break;
            case 'show':
                if ($view){
                    return $next($request);
                } else {
                    return abort(404);
                }
                break;
            case 'create':
                if ($add){
                    return $next($request);
                } else {
                    return response()->json([
                        'type'      =>  'error',
                        'title'     =>  'Lỗi!',
                        'content'   =>  'Bạn không có quyền truy cập chức năng này'],
                        550);
                }
                break;
            case 'store':
                if ($add){
                    return $next($request);
                } else {
                    return response()->json([
                        'type'      =>  'error',
                        'title'     =>  'Lỗi!',
                        'content'   =>  'Bạn không có quyền truy cập chức năng này'],
                        550);
                }
                break;
            case 'edit':
                if ($edit){
                    return $next($request);
                } else {
                    return response()->json([
                        'type'      =>  'error',
                        'title'     =>  'Lỗi!',
                        'content'   =>  'Bạn không có quyền truy cập chức năng này'],
                        550);
                }
                break;
            case 'update':
                if ($edit){
                    return $next($request);
                } else {
                    return response()->json([
                        'type'      =>  'error',
                        'title'     =>  'Lỗi!',
                        'content'   =>  'Bạn không có quyền truy cập chức năng này'],
                        550);
                }
                break;
            case 'destroy':
                if ($del){
                    return $next($request);
                } else {
                    return response()->json([
                        'type'      =>  'error',
                        'title'     =>  'Lỗi!',
                        'content'   =>  'Bạn không có quyền truy cập chức năng này'],
                        550);
                }
                break;
        }
    }
}
