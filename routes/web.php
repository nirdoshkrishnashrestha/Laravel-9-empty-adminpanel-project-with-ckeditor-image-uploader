<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserLogin;
use App\Http\Controllers\PostController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\CkeditorController;

Route::view('admin','admin.login')->middleware('AlreadyLoggedIn');
Route::view('login','admin.login')->middleware('AlreadyLoggedIn');
Route::view('adminpanel','admin.login')->middleware('AlreadyLoggedIn');
Route::post('admin/users',[UserLogin::class,'login'])->name('login_users');

// Route::view('display','admin.login')->middleware('isLogin');

Route::get('admin/make_user',[UserLogin::class,'make_user']);   // This will create new users

// Route::group(['middleware' => ['isLogin', 'HtmlMinifier']], function() {

Route::middleware(['isLogin'])->group(function () 
{
    Route::get('admin/dashboard', [UserLogin::class,'dashboard']);

    // For homepage
    Route::resource('admin/homepage',PostController::class);
    Route::resource('admin/homepage/{id}/edit',PostController::class);
    Route::resource('admin/homepage',PostController::class); 
    Route::get('admin/homepage/{id}/delete', [PostController::class,'delete_post']);
    Route::get('admin/homepage/deleteimage/{id}', [PostController::class,'deleteimage']);
    
    Route::get('admin/gallery', [GalleryController::class,'show_gallery']);  
    Route::post('admin/gallery', [GalleryController::class,'add_gallery']);
    Route::get('admin/gallery/{id}/edit', [GalleryController::class,'edit_gallery']);
    Route::post('admin/gallery/{id}', [GalleryController::class,'save_gallery']);
    Route::get('admin/gallery/deleteimage/{id}', [GalleryController::class,'delete_gallery']);

    Route::post('admin/imageuploads',[CkeditorController::class,'uploads'])->name('post.uploads'); // CKeditor
    Route::get('admin/logout', [UserLogin::class,'logout']);
});