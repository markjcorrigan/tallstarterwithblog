<?php

use App\Http\Controllers\backend\BlogPostController;
use App\Http\Controllers\backend\CommentController;
use App\Http\Controllers\frontend\FrontendController;
use App\Livewire\PrivateOne;
use Illuminate\Support\Facades\Route;

//Route::get('/', \App\Livewire\Home::class)->name('home');

// Frontend all routes
//Route::get('/home', [FrontendController::class, 'homepage'])->name('homepage');
//// Frontend all routes
Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');

Route::get('/post/details/{slug}', [FrontendController::class, 'BlogDetails']);
Route::post('store-comment', [FrontendController::class, 'StoreComment'])->name('store.comment');
Route::post('store-contact-message', [FrontendController::class, 'StoreContactMessage'])->name('store.contact.message');



Route::get('/dashboard', \App\Livewire\Dashboard::class)->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');


// BlogPost section all routes
Route::controller(BlogPostController::class)->group(function(){
    Route::get('all-post', 'AllPost')->name('all.post');
    Route::get('add-post', 'AddPost')->name('add.post');
    Route::post('store-post', 'StorePost')->name('store.post');

    Route::get('edit-post/{id}', 'EditPost')->name('edit.post');
    Route::post('update-post', 'UpdatePost')->name('update.post');
    Route::get('delete-post/{id}', 'DeletePost')->name('delete.post');
});

//    Route::controller(BlogPostController::class)
//        ->middleware(['auth', 'verified', 'can:is-super-admin'])
//        ->group(function () {
//
//
//});

// Comments section all routes
Route::controller(CommentController::class)->group(function(){
    Route::post('user-comments', 'UserComments')->name('user.comments');
//    Route::get('user-comments', 'UserComments')->name('user.comments');
    Route::post('comment-status-update', 'CommentStatusUpdate')->name('comment.status.update');
});

Route::middleware(['auth'])->group(function (): void {

    // Impersonations
    Route::post('/impersonate/{user}', [\App\Http\Controllers\ImpersonationController::class, 'store'])->name('impersonate.store')->middleware('can:impersonate');
    Route::delete('/impersonate/stop', [\App\Http\Controllers\ImpersonationController::class, 'destroy'])->name('impersonate.destroy');

    // Settings
    Route::redirect('settings', 'settings/profile');
    Route::get('settings/profile', \App\Livewire\Settings\Profile::class)->name('settings.profile');
    Route::get('settings/password', \App\Livewire\Settings\Password::class)->name('settings.password');
    Route::get('settings/appearance', \App\Livewire\Settings\Appearance::class)->name('settings.appearance');
    Route::get('settings/locale', \App\Livewire\Settings\Locale::class)->name('settings.locale');

    // Admin

    Route::middleware(['auth', 'verified', 'can:is-super-admin'])->group(function () {
        Route::get('/privateone', PrivateOne::class);
        // Add more routes here...
    });

    Route::prefix('admin')->as('admin.')->group(function (): void {
        Route::get('/', \App\Livewire\Admin\Index::class)->middleware(['auth', 'verified'])->name('index')->middleware('can:access dashboard');
        Route::get('/users', \App\Livewire\Admin\Users::class)->name('users.index')->middleware('can:view users');
        Route::get('/users/create', \App\Livewire\Admin\Users\CreateUser::class)->name('users.create')->middleware('can:create users');
        Route::get('/users/{user}', \App\Livewire\Admin\Users\ViewUser::class)->name('users.show')->middleware('can:view users');
        Route::get('/users/{user}/edit', \App\Livewire\Admin\Users\EditUser::class)->name('users.edit')->middleware('can:update users');
        Route::get('/roles', \App\Livewire\Admin\Roles::class)->name('roles.index')->middleware('can:view roles');
        Route::get('/roles/create', \App\Livewire\Admin\Roles\CreateRole::class)->name('roles.create')->middleware('can:create roles');
        Route::get('/roles/{role}/edit', \App\Livewire\Admin\Roles\EditRole::class)->name('roles.edit')->middleware('can:update roles');
        Route::get('/permissions', \App\Livewire\Admin\Permissions::class)->name('permissions.index')->middleware('can:view permissions');
        Route::get('/permissions/create', \App\Livewire\Admin\Permissions\CreatePermission::class)->name('permissions.create')->middleware('can:create permissions');
        Route::get('/permissions/{permission}/edit', \App\Livewire\Admin\Permissions\EditPermission::class)->name('permissions.edit')->middleware('can:update permissions');
    });
});

require __DIR__.'/auth.php';
