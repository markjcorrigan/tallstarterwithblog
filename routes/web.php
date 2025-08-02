<?php

use App\Http\Controllers\backend\BlogPostController;
use App\Http\Controllers\backend\CommentController;
use App\Http\Controllers\backend\HeroController;
use App\Http\Controllers\backend\PortfolioController;
use App\Http\Controllers\backend\ResumeController;
use App\Http\Controllers\backend\ServicesController;
use App\Http\Controllers\backend\SiteSettingsController;
use App\Http\Controllers\backend\SkillsController;
use App\Http\Controllers\backend\TestimonialController;
use App\Http\Controllers\frontend\FrontendController;
use App\Livewire\PrivateOne;
use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Home::class)->name('home');

// Frontend all routes
Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('/portfolio', [FrontendController::class, 'portfolio'])->name('portfolio');
Route::get('/post/details/{slug}', [FrontendController::class, 'BlogDetails']);
Route::post('store-comment', [FrontendController::class, 'StoreComment'])->name('store.comment');
Route::post('store-contact-message', [FrontendController::class, 'StoreContactMessage'])->name('store.contact.message');

Route::get('/dashboard', \App\Livewire\Dashboard::class)->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');



// Blog Posts
Route::controller(BlogPostController::class)->group(function(){
    Route::get('all-post', 'AllPost')->middleware(['auth', 'verified', 'permission:all post'])->name('all.post');
    Route::get('add-post', 'AddPost')->middleware(['auth', 'verified', 'permission:add post'])->name('add.post');
    Route::post('store-post', 'StorePost')->middleware(['auth', 'verified', 'permission:store post'])->name('store.post');
    Route::get('edit-post/{id}', 'EditPost')->middleware(['auth', 'verified', 'permission:edit post'])->name('edit.post');
    Route::post('update-post/{id}', 'UpdatePost')->middleware(['auth', 'verified', 'permission:update post'])->name('update.post');
    Route::get('delete-post/{id}', 'DeletePost')->middleware(['auth', 'verified', 'permission:delete post'])->name('delete.post');
});






//Route::controller(CommentController::class)->group(function(){
//    Route::post('user-comments', 'UserComments')->name('user.comments');
//    Route::post('comment-status-update', 'CommentStatusUpdate')->name('comment.status.update');
//});

Route::middleware(['auth'])->group(function (): void {
    // Impersonations
    Route::post('/impersonate/{user}', [\App\Http\Controllers\ImpersonationController::class, 'store'])->name('impersonate.store')->middleware('permission:impersonate');
    Route::delete('/impersonate/stop', [\App\Http\Controllers\ImpersonationController::class, 'destroy'])->name('impersonate.destroy');

    // Settings
    Route::redirect('settings', 'settings/profile');
    Route::get('settings/profile', \App\Livewire\Settings\Profile::class)->name('settings.profile');
    Route::get('settings/password', \App\Livewire\Settings\Password::class)->name('settings.password');
    Route::get('settings/appearance', \App\Livewire\Settings\Appearance::class)->name('settings.appearance');
    Route::get('settings/locale', \App\Livewire\Settings\Locale::class)->name('settings.locale');

    // Admin
//    Route::middleware(['auth', 'verified', 'can:is-super-admin'])->group(function () {
//        Route::get('/privateone', PrivateOne::class);
//    });
        Route::middleware(['auth', 'verified', 'role:Super Admin'])->group(function () {
        Route::get('/privateone', PrivateOne::class);
    });

    // Hero section all routes
    Route::controller(HeroController::class)->group(function(){
        Route::get('here-section', 'HeroSection')->name('hero.section')->middleware(['auth', 'verified', 'permission:all hero']);
//        Route::post('update-here-section', 'UpdateHeroSection')->name('update.hero.section');
        Route::post('update-here-section', [HeroController::class, 'UpdateHeroSection'])->name('update.here.section')->middleware(['auth', 'verified', 'permission:update hero']);

//        Route::post('update-here-section', 'HeroController@UpdateHeroSection')->name('update.here.section');
    });

    // Services section all routes
    Route::controller(ServicesController::class)->group(function(){
        Route::get('all-services', 'AllServices')->name('all.services')->middleware(['auth', 'verified', 'permission:all service']);
        Route::get('add-service', 'AddService')->name('add.service')->middleware(['auth', 'verified', 'permission:add service']);
        Route::post('store-service', 'StoreService')->name('store.service')->middleware(['auth', 'verified', 'permission:store service']);
        Route::get('edit-service/{id}', 'EditService')->name('edit.service')->middleware(['auth', 'verified', 'permission:edit service']);
        Route::post('update-service', 'UpdateService')->name('update.service')->middleware(['auth', 'verified', 'permission:update service']);
        Route::get('delete-service/{id}', 'DeleteService')->name('delete.service')->middleware(['auth', 'verified', 'permission:delete service']);
    });

    // Portfolio/Recent works section all routes
    Route::controller(PortfolioController::class)->group(function(){
        Route::get('all-recent-works', 'AllRecentWorks')->name('all.recent.works')->middleware(['auth', 'verified', 'permission:all work']);
        Route::get('all-work', 'AddWork')->name('add.work')->middleware(['auth', 'verified', 'permission:add work']);
        Route::post('store-work', 'StoreWork')->name('store.work')->middleware(['auth', 'verified', 'permission:store work']);
        Route::get('edit-word/{id}', 'EditWork')->name('edit.work')->middleware(['auth', 'verified', 'permission:edit work']);
        Route::post('update-work', 'UpdateWork')->name('update.work')->middleware(['auth', 'verified', 'permission:update work']);
        Route::get('delete-word/{id}', 'DeleteWork')->name('delete.work')->middleware(['auth', 'verified', 'permission:delete work']);
    });


    // My Experience all routes
    Route::controller(ResumeController::class)->group(function(){
        Route::get('my-experience', 'MyExperience')->name('my.experience')->middleware(['auth', 'verified', 'permission:all experience']);
        Route::post('store-experience', 'StoreExperience')->name('store.experience')->middleware(['auth', 'verified', 'permission:store experience']);
        Route::get('edit-experience/{id}', 'EditExperience')->middleware(['auth', 'verified', 'permission:edit experience']);
        Route::post('update-experience', 'UpdateExperience')->name('update.experience')->middleware(['auth', 'verified', 'permission:update experience']);
        Route::get('delete-experience/{id}', 'DeleteExperience')->name('delete.experience')->middleware(['auth', 'verified', 'permission:delete experience']);

        // My Education route
        Route::get('my-education', 'MyEducation')->name('my.education')->middleware(['auth', 'verified', 'permission:all education']);
    });

    // My skills section all routes
    Route::controller(SkillsController::class)->group(function(){
        Route::get('add-skill', 'AddSkill')->name('add.skill')->middleware(['auth', 'verified', 'permission:add skill']);
        Route::post('store-skill', 'StoreSkill')->name('store.skill')->middleware(['auth', 'verified', 'permission:store skill']);
        Route::get('all-skills', 'AllSkills')->name('all.skills')->middleware(['auth', 'verified', 'permission:all skill']);
        Route::get('edit-skill/{id}', 'EditSkill')->name('edit.skill')->middleware(['auth', 'verified', 'permission:edit skill']);
        Route::post('update-skill', 'UpdateSkill')->name('update.skill')->middleware(['auth', 'verified', 'permission:update skill']);
        Route::get('delete-skill/{id}', 'DeleteSkill')->name('delete.skill')->middleware(['auth', 'verified', 'permission:delete skill']);
    });

    // Testimonial section all routes
    Route::controller(TestimonialController::class)->group(function(){
        Route::get('add-testimony', 'AddTestimony')->name('add.testimony')->middleware(['auth', 'verified', 'permission:add testimony']);
        Route::post('store-testimony', 'StoreTestimony')->name('store.testimony')->middleware(['auth', 'verified', 'permission:store testimony']);
        Route::get('all-testimoies', 'AllTestimonies')->name('all.testimoies')->middleware(['auth', 'verified', 'permission:all testimony']);
        Route::get('edit-testimony/{id}', 'EditTestimony')->name('edit.testimony')->middleware(['auth', 'verified', 'permission:edit testimony']);
        Route::post('update-testimony', 'UpdateTestimony')->name('update.testimony')->middleware(['auth', 'verified', 'permission:update testimony']);
        Route::get('delete-testimony/{id}', 'DeleteTestimony')->name('delete.testimony')->middleware(['auth', 'verified', 'permission:delete testimony']);
    });

    // Comments section all routes
    Route::controller(CommentController::class)->group(function(){
        Route::get('user-comments', 'UserComments')->name('user.comments');
        Route::post('comment-status-update', [CommentController::class, 'CommentStatusUpdate'])->name('comment.status.update')->middleware(['auth', 'verified', 'permission:update comment']);



        // Contacts Message all routes
        Route::get('contact-message', 'ContactMessage')->name('contact.message')->middleware(['auth', 'verified', 'permission:all contact']);
        Route::get('delete-contact/{id}', 'DeleteContact')->name('delete.contact')->middleware(['auth', 'verified', 'permission:delete contact']);
    });

    // Site Settings section all routes
    Route::controller(SiteSettingsController::class)->group(function(){
        Route::get('site-settings', 'SiteSettings')->name('site.settings')->middleware(['auth', 'verified', 'permission:all setting']);
        Route::post('update-site-settings', 'UpdateSiteSettings')->name('update.site.settings')->middleware(['auth', 'verified', 'permission:update setting']);

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
        Route::get('permissions/{permission}/edit', \App\Livewire\Admin\Permissions\EditPermission::class)->name('permissions.edit')->middleware('can:update permissions');
    });
});

require __DIR__.'/auth.php';
