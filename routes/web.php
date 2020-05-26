<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| 
| CHỨA TOÀN BỘ LINK CỦA TRANG WEB
|
|
*/

Route::get('test/{id}', [
	'as' => 'Test',
	'uses' => 'AdminController@Test']);


Route::get('admin', [
	'as' => 'admin',
	'uses' => 'AdminController@admin']);

Route::get('admin/user/listuser',[
	'as' => 'listuser',
	'uses'=> 'AdminController@listuser']);

Route::get('admin/user/edituser/{id}', [
	'as' => 'edituser',
	'uses' => 'AdminController@EditUser']);

Route::post('admin/PostEditUser/{id}',[
	'as' => 'PostEditUser',
	'uses' => 'AdminController@PostEditUser']);

Route::get('admin/course/listcourse',[
	'as' => 'listcourse',
	'uses'=> 'AdminController@listcourse']);
	
Route::get('editcourse/{id}', [
	'as' => 'editcourse',
	'uses' => 'AdminController@EditCourse']);
	
Route::post('PostEditCourse/{id}',[
	'as' => 'PostEditCourse',
	'uses' => 'AdminController@PostEditCourse']);

Route::get('admin/reg/dangkytuvan',[
	'as' => 'dangkytuvan',
	'uses'=> 'AdminController@dangkytuvan']);

Route::get('/', [
	'as' => 'index',
	'uses' => 'IndexController@Index']);

Route::get('about', [
	'as' => 'about',
	'uses' => 'IndexController@About']);
Route::get('certificate', [
	'as' => 'certificate',
	'uses' => 'IndexController@Certificate']);
Route::get('document', [
	'as' => 'document',
	'uses' => 'IndexController@Document']);
Route::get('course', [
	'as' => 'course',
	'uses' => 'IndexController@Course']);
Route::get('recruitment', [
	'as' => 'recruitment',
	'uses' => 'IndexController@Recruitment']);
Route::get('contact', [
	'as' => 'contact',
	'uses' => 'IndexController@Contact']);

Route::get('dangky', [
	'as'=> 'Getsignup',
	'uses' => 'IndexController@Signup']);

Route::get('getlogin', [
	'as'=> 'login',
	'uses' => 'IndexController@login']);
Route::get('advisory', [
	'as'=> 'advisory',
	'uses' => 'IndexController@advisory']);
Route::get('addcourse', [
	'as'=> 'addcourse',
	'uses' => 'AdminController@addcourse']);

Route::post('postsignin', [
	'as' => 'PostSignin',
	'uses' => 'IndexController@PostSignin']);
Route::post('postlogin', [
	'as' => 'PostLogin',
	'uses' => 'IndexController@PostLogin']);
Route::post('advisory', [
	'as' => 'PostAdvisory',
	'uses' => 'IndexController@PostAdvisory']);
Route::post('addcourse', [
	'as' => 'PostAddCourse',
	'uses' => 'AdminController@PostAddCourse']);


Route::post('admin/delete/{id}', [
	'as' => 'delete',
	'uses' => 'AdminController@delete']);
Route::get('tutor', [
	'as' => 'tutor',
	'uses' => 'IndexController@tutor']);
Route::get('registration', [
	'as'=> 'registration',
	'uses' => 'IndexController@registration']);
Route::post('registration', [
	'as' => 'Postregistration',
	'uses' => 'IndexController@Postregistration']);



