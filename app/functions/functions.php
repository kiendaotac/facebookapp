<?php
/**
 * Created by Hoàng Kiên.
 * User: hoangkien151092@gmail.com
 * Date: 6/25/2018
 * Time: 5:25 AM
 *
 Mở composer.json
 Thêm vào trong "autoload" chuỗi sau
 "files": [
         "app/functions/functions.php"
 ]

 Chạy cmd : composer  dumpautoload
 */
//use Illuminate\Support\Facades\Route;
//use Illuminate\Support\Facades\URL;
function getURL(){
    $route_current  =   Route::current();
    $controller     =   $route_current->action['controller'];
    $indexAction    =   explode('@',substr($controller,21))[0].'@index';
    $url            =   action($indexAction);
    $baseUrl        =   URL::to('/');
    $length         =   strlen($baseUrl);
    $uri            =   substr($url,$length+1);
    return $uri;
}
