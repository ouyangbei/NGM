<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'ArticleController@index');
Route::get('identity',function(){
     return view('identity');
});
Route::get('veinrecognition',function(){
     return view('veinrecognition');
});
Route::get('employeecontrol',function(){
     return view('employeecontrol');
});
Route::get('movinte',function(){
     return view('movinte');
});
Route::get('dummysolve',function(){
     return view('dummysolve');
});
Route::get('movmedical',function(){
     return view('movmedical');
});
Route::get('companythought',function(){
     return view('companythought');
});
Route::get('ourteam',function(){
     return view('ourteam');
});
Route::get('cooperat',function(){
     return view('cooperat');
});
Route::get('zixun', 'ArticleController@zixun');
Route::get('yewu','ArticleController@yewu');
Route::get('anli','ArticleController@anli');
Route::resource('article', 'ArticleController');
Route::resource('comment', 'CommentController');
Route::resource('category', 'CategoryController');
Route::resource('about', 'AboutController');


Route::controllers([
    'backend/auth' => 'backend\AuthController',
    'backend/password' => 'backend\PasswordController',
    'search'=>'SearchController',
]);

Route::group(['prefix'=>'backend','middleware'=>'auth'],function(){
    Route::any('/','backend\HomeController@index');
    Route::resource('home', 'backend\HomeController');
    Route::resource('cate','backend\CateController');
    Route::resource('content','backend\ContentController');
    Route::resource('article','backend\ArticleController');
    Route::resource('tags','backend\TagsController');
    Route::resource('user','backend\UserController');
    Route::resource('comment','backend\CommentController');
    Route::resource('nav','backend\NavigationController');
    Route::resource('links','backend\LinksController');
    Route::controllers([
        'system'=>'backend\SystemController',
        'upload'=>'backend\UploadFileController'
    ]);

});
Route::get('map11', function () {
    return view('map');
});