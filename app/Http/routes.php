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

/*
|--------------------------------------------------------------------------
| Fontend
|--------------------------------------------------------------------------
*/
Route::group(array('prefix' => ''), function()
{
    Route::get('/' , ['as'=>'fontend_index' ,'uses'=>'Fontend\IndexController@index']);

    Route::get('/examples' , ['as'=>'fontend_examples' ,'uses'=>'Fontend\ExamplesController@index']);

	Route::get('/page' , ['as'=>'fontend_page' ,'uses'=>'Fontend\PageController@index']);

	Route::get('/otherpage' , ['as'=>'fontend_otherpage' ,'uses'=>'Fontend\PageController@other']);

	Route::get('/contact' , ['as'=>'fontend_contact' ,'uses'=>'Fontend\ContactController@index']);

	Route::post('/contact/message' , ['as'=>'fontend_contact.form' ,'uses'=>'Fontend\ContactController@form']);

});


// csrf前端交互防止攻击 
Route::group(['before' => 'csrf'] ,function(){
    Route::post('auth/register', ['as' => 'auth_register_post', 'uses' => 'AuthController@postRegister']);
    Route::post('auth/login', ['as' => 'auth_login_post', 'uses' => 'AuthController@postLogin']);
});

/*
|--------------------------------------------------------------------------
| Backend
|--------------------------------------------------------------------------
*/

Route::group(array('prefix' => 'admin'), function()
{

	//后台首页 
    Route::get('/' , ['as'=>'admin.index' ,'uses'=>'Backend\IndexController@index']);
    //后台登陆、退出、锁屏、解锁
    Route::get('/login' , ['as'=>'admin.login' ,'uses'=>'Backend\PublicController@login']);
    Route::post('/login/check' , ['as'=>'admin.login.check' ,'uses'=>'Backend\PublicController@checklogin']);
    Route::get('/logout' , ['as'=>'admin.logout' ,'uses'=>'Backend\PublicController@logout']);
    Route::get('/lock' , ['as'=>'admin.lock' ,'uses'=>'Backend\PublicController@lock']);
    Route::post('/unlock' , ['as'=>'admin.unlock' ,'uses'=>'Backend\PublicController@unlock']);
    //网站管理
    Route::get('/site' , ['as'=>'admin.site' ,'uses'=>'Backend\SiteController@index']);
    Route::post('/site/save' , ['as'=>'admin.site.save' ,'uses'=>'Backend\SiteController@save']);
    //用户管理
    Route::get('/user' , ['as'=>'admin.user' ,'uses'=>'Backend\UserController@index']);
    Route::get('/user/power' , ['as'=>'admin.user.power' ,'uses'=>'Backend\UserController@power']);
    Route::get('/user/add' , ['as'=>'admin.user.add' ,'uses'=>'Backend\UserController@add']);
    Route::post('/user/store' , ['as'=>'admin.user.store' ,'uses'=>'Backend\UserController@store']);
    Route::get('/user/edit/{id}' , ['as'=>'admin.user.edit' ,'uses'=>'Backend\UserController@edit']);
    Route::get('/user/delete/{id}' , ['as'=>'admin.user.delete' ,'uses'=>'Backend\UserController@delete']);
    //栏目管理
    Route::get('/category' , ['as'=>'admin.category' ,'uses'=>'Backend\CategoryController@index']);
    Route::get('/category/add' , ['as'=>'admin.category.add' ,'uses'=>'Backend\CategoryController@add']);
    Route::post('/category/store' , ['as'=>'admin.category.store' ,'uses'=>'Backend\CategoryController@store']);
    Route::get('/category/edit/{id}' , ['as'=>'admin.category.edit' ,'uses'=>'Backend\CategoryController@edit']);
    Route::get('/category/delete/{id}' , ['as'=>'admin.category.delete' ,'uses'=>'Backend\CategoryController@delete']);
    //内容管理
    Route::get('/article' , ['as'=>'admin.article' ,'uses'=>'Backend\ArticleController@index']);
    Route::get('/article/add' , ['as'=>'admin.article.add' ,'uses'=>'Backend\ArticleController@add']);
    Route::post('/article/store' , ['as'=>'admin.article.store' ,'uses'=>'Backend\ArticleController@store']);
    Route::get('/article/edit/{id}' , ['as'=>'admin.article.edit' ,'uses'=>'Backend\ArticleController@edit']);
    Route::get('/article/delete/{id}' , ['as'=>'admin.article.delete' ,'uses'=>'Backend\ArticleController@delete']);
    Route::get('/article/page' , ['as'=>'admin.article.page' ,'uses'=>'Backend\ArticleController@page']);
    Route::get('/article/page/add' , ['as'=>'admin.article.addpage' ,'uses'=>'Backend\ArticleController@pageadd']);
    Route::post('/article/page/store' , ['as'=>'admin.article.pagestore' ,'uses'=>'Backend\ArticleController@pagestore']);
    //其他管理
    Route::get('/message',['as'=>'admin.message','uses'=>'Backend\OtherController@message']);
});


