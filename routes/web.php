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

Route::get('/', function () {

    //return view('welcome')->with(['string'=>'osama alhamd','age'=>24]);
    $data=[];
    $data['id']=3;
    $data['name']='osama alhmad';
    /*$obj=new \stdClass();
    $obj->name='omar';*/
    return view('welcome',compact('data'));

});
Route::get('/landing', function () {
    return view("landing");
});
Route::get('/about', function () {
    return view("about");
});
Route::get('/test2/{id}', function ($id) {
    return $id ;
});
Route::get('/test3/{id?}', function () {
    return 'welcome' ;
});
Route::group(['namespace' => 'Admin'], function()
{
    // Controllers Within The "App\Http\Controllers\Admin" Namespace

    Route::group(['namespace' => 'User'], function()
    {
        // Controllers Within The "App\Http\Controllers\Admin\User" Namespace
    });
});
Route::namespace('Front')->group(function (){
    Route::get('ota','OtaController@showAdminName');
});
Route::namespace('Front')->group(function (){
    Route::get('ota1','OtaController@showAdminName1');
});
Route::get('/show-number/{id}', function ($id) {
    return $id ;
})->name('a');
Route::get('/show-string/{id?}', function () {
    return 'welcome' ;
})->name('b');
/*Route::prefix('Users')->group(function ()
{Route::get('username','Users\UserController@showUserName');});*/
Route::group(['prefix'=>'Users','middleware'=>'auth'],function (){
   Route::get('/',function(){return 'work';});
});

/*Route::get('check',function (){return 'middleware';})->middleware('auth');*/

Route::resource('news','NewsController');
Route::get('index','Front\FirstController@getIndex');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
