<?php
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\SiteController::class, 'home'] );
Route::get('/home', [App\Http\Controllers\SiteController::class, 'home'] );

Route::get('/blogs', [App\Http\Controllers\SiteController::class, 'blogs'] )->name('site.blogs');
Route::get('/blog',  [App\Http\Controllers\SiteController::class, 'blog'] )->name('site.blog');
Route::post('/comment/post',  [App\Http\Controllers\CommentController::class, 'post'] )->name('site.comment.post');
Route::get('/messages/contact' , [App\Http\Controllers\SiteController::class, 'contact'])->name('messages.contact');

Route::get('/galery',  [App\Http\Controllers\SiteController::class, 'galery'] )->name('site.galery');
Route::get('/videos',  [App\Http\Controllers\SiteController::class, 'videos'] )->name('site.videos');

//=======================================================================================================================
//Ajax routes
Route::get('/solicitarCV', [App\Http\Controllers\SiteController::class, 'solicitarCV'])->name('solicitarCV');

//==================================================================================================================================
//Admin routes
Auth::routes();
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin'])->name('admin');
Route::get('/admin/socialnetworks', [App\Http\Controllers\AdminController::class, 'socialnetworks'])->name('admin.socialnetworks');
Route::get('/admin/users', [App\Http\Controllers\AdminController::class, 'users'])->name('admin.users');
Route::get('/admin/timeline', [App\Http\Controllers\AdminController::class, 'timeline'])->name('admin.timeline');
Route::get('/admin/testimonials', [App\Http\Controllers\AdminController::class, 'testimonial'])->name('admin.testimonials');
Route::get('/admin/blogs', [App\Http\Controllers\AdminController::class, 'blogs'])->name('admin.blogs');
Route::get('/admin/galery', [App\Http\Controllers\AdminController::class, 'galery'])->name('admin.galery');
Route::get('/admin/taggalery' , [App\Http\Controllers\AdminController::class, 'taggalery'])->name('admin.taggalery');
Route::get('/admin/category' , [App\Http\Controllers\AdminController::class, 'category'])->name('admin.category');
Route::get('/admin/timeline' , [App\Http\Controllers\AdminController::class, 'timeline'])->name('admin.timeline');
Route::get('/admin/video' , [App\Http\Controllers\AdminController::class, 'video'])->name('admin.video');
Route::get('/admin/staticcontent' , [App\Http\Controllers\AdminController::class, 'staticcontent'])->name('admin.staticcontent');
Route::get('admin/staticpicture/' , [App\Http\Controllers\AdminController::class, 'staticpicture'])->name('admin.staticpicture');
Route::get('/admin/requestcv' , [App\Http\Controllers\AdminController::class, 'requestcv'])->name('admin.requestcv');
Route::get('/admin/messages' , [App\Http\Controllers\AdminController::class, 'messages'])->name('admin.messages');
Route::get('/admin/comments' , [App\Http\Controllers\AdminController::class, 'comments'])->name('admin.comments');
Route::get('/admin/academy' , [App\Http\Controllers\AdminController::class, 'academy'])->name('admin.academy');

//=================================================================================================================================
//Admin User routes
Route::post('/admin/users/remove', [App\Http\Controllers\Auth\UserController::class, 'remove'])->name('admin.users.remove');
Route::post('/admin/users/removeAdmin', [App\Http\Controllers\Auth\UserController::class, 'removeAdmin'])->name('admin.users.removeAdmin');
Route::post('/admin/users/setAdmin', [App\Http\Controllers\Auth\UserController::class, 'setAdmin'])->name('admin.users.setAdmin');

//Admin timeline routes
Route::get('/admin/timeline/new', [App\Http\Controllers\TimelineController::class, 'new'])->name('admin.timeline.new');
Route::post('/admin/timeline/set', [App\Http\Controllers\TimelineController::class, 'set'])->name('admin.timeline.set');
Route::post('/admin/timeline/update', [App\Http\Controllers\TimelineController::class, 'update'])->name('admin.timeline.update');
Route::post('/admin/timeline/delete', [App\Http\Controllers\TimelineController::class, 'delete'])->name('admin.timeline.delete');
Route::post('/admin/timeline/edit', [App\Http\Controllers\TimelineController::class, 'edit'])->name('admin.timeline.edit');

//Admin Testimonials routes
Route::get('/admin/testimonials/new', [App\Http\Controllers\TestimonialController::class, 'new'])->name('admin.testimonials.new');
Route::post('/admin/testimonials/edit', [App\Http\Controllers\TestimonialController::class, 'edit'])->name('admin.testimonials.edit');
Route::post('/admin/testimonials/set', [App\Http\Controllers\TestimonialController::class, 'set'])->name('admin.testimonials.set');
Route::post('/admin/testimonials/update', [App\Http\Controllers\TestimonialController::class, 'update'])->name('admin.testimonials.update');
Route::post('/admin/testimonials/delete', [App\Http\Controllers\TestimonialController::class, 'delete'])->name('admin.testimonials.delete');

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
Route::post('/admin/galery/update' , [App\Http\Controllers\GaleryController::class, 'update'])->name('admin.galery.update');

//Admin taggaleries
Route::post('/admin/taggalery/update' , [App\Http\Controllers\TaggaleryController::class, 'update'])->name('admin.taggalery.update');
Route::post('/admin/taggalery/delete' , [App\Http\Controllers\TaggaleryController::class, 'delete'])->name('admin.taggalery.delete');
Route::post('/admin/taggalery/set' , [App\Http\Controllers\TaggaleryController::class, 'set'])->name('admin.taggalery.set');

//Admin categories
Route::post('/admin/category/update' , [App\Http\Controllers\CategoryController::class, 'update'])->name('admin.category.update');
Route::post('/admin/category/delete' , [App\Http\Controllers\CategoryController::class, 'delete'])->name('admin.category.delete');
Route::post('/admin/category/set' , [App\Http\Controllers\CategoryController::class, 'set'])->name('admin.category.set');

//Admin videos
Route::get('/admin/video/new' , [App\Http\Controllers\VideoController::class, 'new'])->name('admin.video.new');
Route::post('/admin/video/set' , [App\Http\Controllers\VideoController::class, 'set'])->name('admin.video.set');
Route::post('/admin/video/delete' , [App\Http\Controllers\VideoController::class, 'delete'])->name('admin.video.delete');

//Static content
Route::post('/admin/staticcontent/update' , [App\Http\Controllers\StaticcontentController::class, 'update'])->name('admin.staticcontent.update');

//Static pictures


//Request
Route::post('/admin/requestcv/delete' , [App\Http\Controllers\RequestcvController::class, 'delete'])->name('admin.requestcv.delete');

//Messages
Route::post('/admin/messages/open', [App\Http\Controllers\MessagesController::class, 'open'])->name('admin.messages.open');
Route::post('/admin/messages/reply', [App\Http\Controllers\MessagesController::class, 'reply'])->name('admin.messages.reply');
Route::post('/admin/messages/reply/send', [App\Http\Controllers\MessagesController::class, 'replySend'])->name('admin.messages.reply.send');
Route::post('/admin/messages/markasreaded', [App\Http\Controllers\MessagesController::class, 'markAsReaded'])->name('admin.messages.markAsReaded');
Route::post('/admin/messages/delete', [App\Http\Controllers\MessagesController::class, 'delete'])->name('admin.messages.delete');

//Replycomments
Route::post('/admin/replycomments/set', [App\Http\Controllers\ReplycommentController::class, 'set'])->name('admin.reply.set');
Route::post('/admin/replycomments/setAsAdmin', [App\Http\Controllers\ReplycommentController::class, 'setAsAdmin'])->name('admin.reply.setAsAdmin');

//Acade
Route::get('/admin/academy/new', [App\Http\Controllers\AcademyController::class, 'new'])->name('admin.academy.new');
Route::post('/admin/academy/set', [App\Http\Controllers\AcademyController::class, 'set'])->name('admin.academy.set');
Route::post('/admin/academy/update', [App\Http\Controllers\AcademyController::class, 'update'])->name('admin.academy.update');
Route::post('/admin/academy/delete', [App\Http\Controllers\AcademyController::class, 'delete'])->name('admin.academy.delete');
Route::post('/admin/academy/edit', [App\Http\Controllers\AcademyController::class, 'edit'])->name('admin.academy.edit');