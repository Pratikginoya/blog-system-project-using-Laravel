<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogcontroller;

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

Route::any('/',[blogcontroller::class,'index']);
Route::any('/register',[blogcontroller::class,'register']);
Route::any('/login',[blogcontroller::class,'login']);
Route::any('/logout',[blogcontroller::class,'logout']);
Route::any('/add_blog',[blogcontroller::class,'add_blog'])->middleware('login_check');
Route::any('/your_blog',[blogcontroller::class,'your_blog'])->middleware('login_check');
Route::any('/blog_details/{id}',[blogcontroller::class,'blog_details']);
Route::any('/blog_details/blog_details/{id}',[blogcontroller::class,'blog_details']);
Route::post('/blog_details/{id}',[blogcontroller::class,'blog_details'])->middleware('login_check');
Route::any('/like_ajax',[blogcontroller::class,'like_ajax']);
Route::any('/contact',[blogcontroller::class,'contact']);
Route::any('/delete_comment',[blogcontroller::class,'delete_comment']);


// Admin Panel
Route::any('/admin/index',[blogcontroller::class,'admin_index']);
Route::any('/admin/dashboard',[blogcontroller::class,'dashboard'])->middleware('admin_login_check');
Route::any('/admin/view-heading',[blogcontroller::class,'view_heading'])->middleware('admin_login_check');
Route::any('/admin/edit-heading/{id}',[blogcontroller::class,'edit_heading'])->middleware('admin_login_check');
Route::post('/admin/edit-heading/{id}',[blogcontroller::class,'submit_heading'])->middleware('admin_login_check');
Route::any('/admin/manage-blog',[blogcontroller::class,'manage_blog'])->middleware('admin_login_check');
Route::any('/admin/view-manage-detail-blog/{id}',[blogcontroller::class,'view_manage_detail_blog'])->middleware('admin_login_check');
Route::post('/admin/view-manage-detail-blog/{id}',[blogcontroller::class,'change_status'])->middleware('admin_login_check');
Route::any('/admin/view-all-blog',[blogcontroller::class,'view_all_blog'])->middleware('admin_login_check');
Route::any('/admin/view-all-detail-blog/{id}',[blogcontroller::class,'view_all_detail_blog'])->middleware('admin_login_check');
Route::any('/admin/view-contacts',[blogcontroller::class,'view_contacts'])->middleware('admin_login_check');


Route::any('/admin/log-out',[blogcontroller::class,'admin_logout']);



