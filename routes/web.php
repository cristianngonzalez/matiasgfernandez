<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\SiteController::class, 'home'] );
Route::get('/home', [App\Http\Controllers\SiteController::class, 'home'] );


Route::get('/blogs', [App\Http\Controllers\SiteController::class, 'blogs'] );
Route::get('/blog',  [App\Http\Controllers\SiteController::class, 'blog'] )->name('site.blog');
Route::post('/comment/post',  [App\Http\Controllers\CommentController::class, 'post'] )->name('site.comment.post');

//=======================================================================================================================
//Ajax routes
Route::get('/solicitarCV', [App\Http\Controllers\SiteController::class, 'solicitarCV'])->name('solicitarCV');


//========================================================================================================================
//Admin routes
Auth::routes();
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin'])->name('admin');
Route::get('/admin/socialnetworks', [App\Http\Controllers\AdminController::class, 'socialnetworks'])->name('admin.socialnetworks');
Route::get('/admin/users', [App\Http\Controllers\AdminController::class, 'users'])->name('admin.users');
Route::get('/admin/timeline', [App\Http\Controllers\AdminController::class, 'timeline'])->name('admin.timeline');
Route::get('/admin/testimonials', [App\Http\Controllers\AdminController::class, 'testimonial'])->name('admin.testimonials');
Route::get('/admin/blogs', [App\Http\Controllers\AdminController::class, 'blogs'])->name('admin.blogs');
Route::get('/admin/galery', [App\Http\Controllers\AdminController::class, 'galery'])->name('admin.galery');

//Admin User routes
Route::post('/admin/users/remove', [App\Http\Controllers\Auth\UserController::class, 'remove'])->name('admin.users.remove');
Route::post('/admin/users/removeAdmin', [App\Http\Controllers\Auth\UserController::class, 'removeAdmin'])->name('admin.users.removeAdmin');
Route::post('/admin/users/setAdmin', [App\Http\Controllers\Auth\UserController::class, 'setAdmin'])->name('admin.users.setAdmin');

//Admin timeline routes
Route::post('/admin/timeline/set', [App\Http\Controllers\TimelineController::class, 'set'])->name('admin.timeline.set');
Route::post('/admin/timeline/update', [App\Http\Controllers\TimelineController::class, 'update'])->name('admin.timeline.update');
Route::post('/admin/timeline/remove', [App\Http\Controllers\TimelineController::class, 'remove'])->name('admin.timeline.remove');

//Admin Testimonials routes
Route::post('/admin/testimonials/set', [App\Http\Controllers\TestimonialController::class, 'set'])->name('admin.testimonials.set');
Route::post('/admin/testimonials/update', [App\Http\Controllers\TestimonialController::class, 'update'])->name('admin.testimonials.update');
Route::post('/admin/testimonials/remove', [App\Http\Controllers\TestimonialController::class, 'remove'])->name('admin.testimonials.remove');

//Admin blogs routes
Route::get('/admin/blogs/new', [App\Http\Controllers\BlogController::class, 'new'])->name('admin.blogs.new');
Route::post('/admin/blogs/set', [App\Http\Controllers\BlogController::class, 'set'])->name('admin.blogs.set');
Route::get('/admin/blogs/update' , [App\Http\Controllers\BlogController::class, 'update'])->name('admin.blogs.update');
Route::post('/admin/blogs/edit' , [App\Http\Controllers\BlogController::class, 'edit'])->name('admin.blogs.edit');
Route::post('/admin/blogs/update' , [App\Http\Controllers\BlogController::class, 'update'])->name('admin.blogs.update');
Route::post('/admin/blogs/delete' , [App\Http\Controllers\BlogController::class, 'delete'])->name('admin.blogs.delete');

//Admin comments routes
Route::post('/admin/comment/delete' , [App\Http\Controllers\CommentController::class, 'delete'])->name('admin.comment.delete');

//Admin socialnetworks
Route::post('/admin/socialnetworks' , [App\Http\Controllers\SocialnetworkController::class, 'update'])->name('admin.socialnetworks.update');

//Admin galery routes
Route::get('/admin/galery/new' , [App\Http\Controllers\GaleryController::class, 'new'])->name('admin.galery.new');
Route::post('/admin/galery/set' , [App\Http\Controllers\GaleryController::class, 'set'])->name('admin.galery.set');
Route::post('/admin/galery/delete' , [App\Http\Controllers\GaleryController::class, 'delete'])->name('admin.galery.delete');