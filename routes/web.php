<?php

use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\BlogPostController;
use App\Http\Controllers\backend\CommentController;
use App\Http\Controllers\backend\HeroController;
use App\Http\Controllers\backend\PortfolioController;
use App\Http\Controllers\backend\ResumeController;
use App\Http\Controllers\backend\ServicesController;
use App\Http\Controllers\backend\SiteSettingsController;
use App\Http\Controllers\backend\SkillsController;
use App\Http\Controllers\backend\TestimonialController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\frontend\FrontendController;
//use App\Livewire\PmwayHome;
use App\Http\Controllers\frontend\UserPostsBlogPostController;
use App\Livewire\About;
use App\Livewire\PrivateOne;
use App\Livewire\Laws;
use App\Models\BlogPost;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Artisan;






use Symfony\Component\HttpKernel\Exception\HttpException;


Route::get('/optimize', function () {
    Artisan::call('queue:restart');
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('optimize:clear');
    Artisan::call('optimize');
    Artisan::call('config:clear'); // added config clear before dump autoload
    exec('composer dump-autoload');
    return 'Optimization completed!';
});

//Route::get('/dump-autoload', function () {
//    try {
//        exec('composer dump-autoload', $output, $returnVar);
//        if ($returnVar === 0) {
//            return 'Composer autoload dumped successfully!';
//        } else {
//            return 'Error dumping composer autoload: ' . implode("\n", $output);
//        }
//    } catch (\Exception $e) {
//        return 'Error dumping composer autoload: ' . $e->getMessage();
//        }
//});


Route::get('/route-cache', function () {
    try {
        $exitCode = Artisan::call('route:cache');
        $output = Artisan::output();
        if ($exitCode === 0) {
            return 'Route cache generated!';
        } else {
            return 'Error generating route cache: ' . $output;
        }
    } catch (\Exception $e) {
        return 'Error generating route cache: ' . $e->getMessage();
    }
});


Route::get('/route-clear', function () {
    try {
        Artisan::call('route:clear');
        return 'Route cache cleared!';
    } catch (\Exception $e) {
        return 'Error clearing route cache: ' . $e->getMessage();
        }
});




//Route::redirect('/', '/pmwayguest')->withoutMiddleware([Authenticate::class]);
Route::get('/simulate-500', function () {
    abort(500, 'Simulated 500 error');
});




Route::get('/fontawesome6/fontawesome6/pro/css/all.min.css', function () {
    $css = Cache::remember('fontawesome_css', 60, function () {
        return file_get_contents(public_path('fontawesome6/fontawesome6/pro/css/all.min.css'));
    });
    return response($css)->header('Content-Type', 'text/css');
});





//Route::get('/', \App\Livewire\Home::class)->name('home');
Route::get('/', \App\Livewire\Home::class)->name('home');
Route::get('/pmwayguest', [FrontendController::class, 'pmwayguest'])->name('pmwayguest')->withoutMiddleware([Authenticate::class]);
Route::get('/pmwayauth', [FrontendController::class, 'pmwayauth'])->middleware(['auth', 'verified'])->name('pmwayauth');
Route::get('/laws', \App\Livewire\Laws::class)->name('laws');
Route::get('/about', About::class);
Route::get('/accelerate', \App\Livewire\Accelerate::class);





Route::post('/forcelogout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('forcelogout');



// Frontend all routes
Route::get('/portfoliodash', [AdminController::class, 'PortfolioDash'])->name('portfoliodash')->middleware(['auth', 'verified', 'permission:portfolio dash']);
Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('/portfolio', [FrontendController::class, 'portfolio'])->name('portfolio');
Route::get('/post/details/{slug}', [FrontendController::class, 'BlogDetails']);
Route::post('store-comment', [FrontendController::class, 'StoreComment'])->name('store.comment');
Route::post('store-contact-message', [FrontendController::class, 'StoreContactMessage'])->name('store.contact.message');

Route::get('/dashboard', \App\Livewire\Dashboard::class)->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Upload and Download documents
Route::get('/document-uploads', [DocumentController::class, 'uploads'])->name('uploads')->middleware(['auth', 'verified', 'permission:document uploads']);
Route::post('/document-upload', [DocumentController::class, 'upload'])->name('upload')->middleware(['auth', 'verified', 'permission:document upload']);
Route::get('/documents', [DocumentController::class, 'documents'])->name('documents');
Route::get('/downloadbyshortname/{shortname}', [DocumentController::class, 'downloadByShortName'])->name('downloadByShortName')->middleware(['auth', 'verified', 'permission:download byshortname']);
Route::delete('/documents/{id}', [DocumentController::class, 'destroy'])->name('documents.destroy')->middleware(['auth', 'verified', 'permission:documents destroy']);
Route::get('/documents/{id}/edit', [DocumentController::class, 'edit'])->name('documents.edit')->middleware(['auth', 'verified', 'permission:documents edit']);
Route::put('/documents/{id}', [DocumentController::class, 'update'])->name('documents.update')->middleware(['auth', 'verified', 'permission:documents update']);


// Blog Posts

Route::post('/update-post-status', [BlogPostController::class, 'updatePostStatus'])->name('update.post.status')->middleware(['auth', 'verified', 'permission:blog approved']);
Route::get('/useraddpost', [UserPostsBlogPostController::class, 'UserAddPost'])->name('user.add.post')->middleware(['auth', 'verified']);
Route::post('/userstorepost', [UserPostsBlogPostController::class,'UserStorePost'])->name('user.store.post')->middleware(['auth', 'verified']);
Route::get('/search', [UserPostsBlogPostController::class, 'usersearch'])->name('usersearch');

Route::get('/post/details', [UserPostsBlogPostController::class, 'firstPost'])->name('first.post');




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

    Route::get('/laws', Laws::class);




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

//    Route::prefix('admin')->as('admin.')->group(function (): void {
//        Route::get('/', \App\Livewire\Admin\Index::class)->middleware(['auth', 'verified'])->name('index')->middleware('can:access dashboard');
////        Route::get('/', \App\Livewire\Admin\Index::class)->name('admin')->middleware(['auth', 'verified', 'permission:access dashboard']);
//        Route::get('/users', \App\Livewire\Admin\Users::class)->name('users.index')->middleware('can:view users');
//        Route::get('/users/create', \App\Livewire\Admin\Users\CreateUser::class)->name('users.create')->middleware('can:create users');
//        Route::get('/users/{user}', \App\Livewire\Admin\Users\ViewUser::class)->name('users.show')->middleware('can:view users');
//        Route::get('/users/{user}/edit', \App\Livewire\Admin\Users\EditUser::class)->name('users.edit')->middleware('can:update users');
//        Route::get('/roles', \App\Livewire\Admin\Roles::class)->name('roles.index')->middleware('can:view roles');
//        Route::get('/roles/create', \App\Livewire\Admin\Roles\CreateRole::class)->name('roles.create')->middleware('can:create roles');
//        Route::get('/roles/{role}/edit', \App\Livewire\Admin\Roles\EditRole::class)->name('roles.edit')->middleware('can:update roles');
//        Route::get('/permissions', \App\Livewire\Admin\Permissions::class)->name('permissions.index')->middleware('can:view permissions');
//        Route::get('/permissions/create', \App\Livewire\Admin\Permissions\CreatePermission::class)->name('permissions.create')->middleware('can:create permissions');
//        Route::get('permissions/{permission}/edit', \App\Livewire\Admin\Permissions\EditPermission::class)->name('permissions.edit')->middleware('can:update permissions');
//    });
    Route::prefix('admin')->as('admin.')->group(function (): void {
        Route::get('/', \App\Livewire\Admin\Index::class)->middleware(['auth', 'verified'])->name('index')->middleware('permission:access dashboard');
//        Route::get('/', \App\Livewire\Admin\Index::class)->name('admin')->middleware(['auth', 'verified', 'permission:access dashboard']);
        Route::get('/users', \App\Livewire\Admin\Users::class)->name('users.index')->middleware('permission:view users');
        Route::get('/users/create', \App\Livewire\Admin\Users\CreateUser::class)->name('users.create')->middleware('permission:create users');
        Route::get('/users/{user}', \App\Livewire\Admin\Users\ViewUser::class)->name('users.show')->middleware('permission:view users');
        Route::get('/users/{user}/edit', \App\Livewire\Admin\Users\EditUser::class)->name('users.edit')->middleware('permission:update users');
        Route::get('/roles', \App\Livewire\Admin\Roles::class)->name('roles.index')->middleware('permission:view roles');
        Route::get('/roles/create', \App\Livewire\Admin\Roles\CreateRole::class)->name('roles.create')->middleware('permission:create roles');
        Route::get('/roles/{role}/edit', \App\Livewire\Admin\Roles\EditRole::class)->name('roles.edit')->middleware('permission:update roles');
        Route::get('/permissions', \App\Livewire\Admin\Permissions::class)->name('permissions.index')->middleware('permission:view permissions');
        Route::get('/permissions/create', \App\Livewire\Admin\Permissions\CreatePermission::class)->name('permissions.create')->middleware('permission:create permissions');
        Route::get('permissions/{permission}/edit', \App\Livewire\Admin\Permissions\EditPermission::class)->name('permissions.edit')->middleware('permission:update permissions');
    });
});

require __DIR__.'/auth.php';
