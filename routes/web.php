<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/* Administrator routes */
Auth::routes();
Route::get('logout', 'Auth\\LoginController@logout');
Route::middleware('auth')->group(function () {
    Route::get('/', function (){
        return redirect('login');
    });
    Route::middleware('PermissionToAccessFunction')->group(function () {
        $functions = \App\Functions::where('state', '>', 0)->where('access', 1)->get();
        foreach ($functions as $function) {
            if (class_exists('App\Http\Controllers\\' . $function->controller)) {
                Route::resource($function->route, $function->controller);
            }
        }
    });
});

///* Guest routes */
//Route::group([], function () {
//    Route::get('/', 'Frontend\HomeController@index');
//    $functions = \App\Functions::where('state', '>', 0)->where('access', 3)->get();
//    foreach ($functions as $function) {
//        if (class_exists('App\Http\Controllers\\' . $function->controller)) {
//            Route::resource($function->route, $function->controller);
//        }
//    }
//});

//Route::get('clear-cache', function () {
//    Artisan::call('config:cache');
//    Artisan::call('cache:clear');
//    Artisan::call('view:clear');
//    //Artisan::call('storage:link');
//    return 'xong';
//});

