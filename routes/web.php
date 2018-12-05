<?php

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

Route::get('/', 'PageController@welcome')->name('welcome');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::get('/team', 'PageController@team')->name('team');
Route::get('/editions', 'PageController@editions')->name('editions');
Route::get('/test', 'PageController@test');

// Join the newsletter
Route::post('/subscribe', 'Email\SubscriberController@join')->name('subscribers.join');

// Login
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');

// Password Reset
Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

// Superuser Routes
Route::group(['prefix' => 'manage', 'middleware' => ['role:superuser', 'checkActivatedUser']], function() {
    Route::get('/', 'User\SuperuserController@index')->name('superuser.dashboard');
    Route::get('/roles', 'RoleController@index')->name('roles.index');
    Route::get('/permissions', 'PermissionController@index')->name('permissions.index');
    Route::group(['prefix' => 'members'], function () {
        Route::get('/', 'User\SuperuserController@indexUser')->name('users.index');
        Route::get('/create', 'User\SuperuserController@createUser')->name('users.create');
        Route::post('/', 'User\SuperuserController@storeUser')->name('users.store');
        Route::get('/{uuid}', 'User\SuperuserController@showUser')->name('users.show'); 
        Route::get('/{uuid}/permissions', 'User\SuperuserController@editPermissionUser')->name('users.permission.edit');
        Route::post('/{uuid}/permissions', 'User\SuperuserController@updatePermissionUser')->name('users.permission.update');
        Route::get('/{uuid}/role', 'User\SuperuserController@editRoleUser')->name('users.role.edit');
        Route::post('/{uuid}/role', 'User\SuperuserController@updateRoleUser')->name('users.role.update');
        Route::delete('/{uuid}', 'User\SuperuserController@destroyUser')->name('users.destroy');
    });    
});

Route::group(['prefix' => 'council', 'middleware' => ['role:council|superuser|coordinator', 'checkActivatedUser']], function() {
    Route::get('/', 'User\SuperuserController@index')->name('council.dashboard');
    Route::group(['prefix' => 'campaign', 'middleware' => 'role:council|superuser'], function () {
        Route::get('/', 'Email\CampaignController@index')->name('campaigns.index');
        Route::get('/create', 'Email\CampaignController@create')->name('campaigns.create');
        Route::post('/', 'Email\CampaignController@store')->name('campaigns.store');
        Route::get('/{uuid}', 'Email\CampaignController@show')->name('campaigns.show');
        Route::get('/{uuid}/edit', 'Email\CampaignController@edit')->name('campaigns.edit');
        Route::get('/{uuid}/send', 'Email\CampaignController@send')->name('campaigns.send');
        Route::put('/{uuid}', 'Email\CampaignController@update')->name('campaigns.update');
        Route::delete('/{uuid}', 'Email\CampaignController@destroy')->name('campaigns.destroy');
    });

    Route::group(['prefix' => 'subscriber', 'middleware' => 'role:council|superuser'], function () {
        Route::get('/', 'Email\SubscriberController@index')->name('subscribers.index');
        Route::get('/create', 'Email\SubscriberController@create')->name('subscribers.create');
        Route::post('/', 'Email\SubscriberController@store')->name('subscribers.store');
        Route::get('/{uuid}', 'Email\SubscriberController@show')->name('subscribers.show');
        Route::get('/{uuid}/edit', 'Email\SubscriberController@edit')->name('subscribers.edit');
        Route::put('/{uuid}', 'Email\SubscriberController@update')->name('subscribers.update');
        Route::delete('/{uuid}', 'Email\SubscriberController@destroy')->name('subscribers.destroy');
    });

    Route::group(['prefix' => 'stories', 'middleware' => 'role:council|superuser|coordinator'], function () {
        Route::get('/pending', 'User\CouncilController@index')->name('council.stories.index');
        Route::get('/published', 'User\CouncilController@publishedIndex')->name('council.stories.published');
        Route::delete('/published/{uuid}', 'User\CouncilController@publishedDestroy')->name('council.stories.destory');
        Route::group(['prefix' => 'pending'], function() {
            Route::get('/{uuid}', 'User\CouncilController@show' )->name('council.stories.show');
            Route::put('/{uuid}/draft', 'User\CouncilController@draft')->name('council.stories.draft');
            Route::get('/{uuid}/edit', 'User\CouncilController@edit')->name('council.stories.edit');
            Route::put('/{uuid}', 'User\CouncilController@update')->name('council.stories.update');
            Route::get('/{uuid}/publish', 'User\CouncilController@publish')->name('council.stories.publish');
        });
        
    });
});

// Blog routes
Route::group(['prefix' => 'blog'], function() {
    Route::get('/', 'BlogController@index')->name('blog.index');
    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', 'BlogController@indexCategory')->name('blog.categories.index');
        Route::get('/{slug}', 'BlogController@showCategory')->name('blog.categories.show');
    });
    Route::get('/{slug}', 'BlogController@show')->name('blog.show');
});

// Gallery routes
Route::group(['prefix' => 'gallery'], function () {
    Route::get('/', 'GalleryController@index')->name('gallery.index');
    Route::get('/{slug}', 'GalleryController@show')->name('gallery.show');
});

// First Time Login Routes
Route::middleware('auth')->group(function () {
    Route::get('/me/info', 'User\UserController@info')->name('me.info');
    Route::put('/user/{uuid}', 'User\UserController@update')->name('me.update');
    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
});

Route::middleware(['auth', 'checkActivatedUser'])->group(function () {
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
    Route::get('/me', 'User\UserController@show')->name('me.show');
    Route::get('/me/edit', 'User\UserController@edit')->name('me.edit');

    Route::get('/devlopers', 'HomeController@devIndex')->name('dev.index');

    Route::group(['prefix' =>'todos'], function () {
        Route::post('/', 'HomeController@storeTodo')->name('todos.store');
        Route::get('/{id}/done', 'HomeController@doneTodo')->name('todos.done');
        Route::delete('/{id}', 'HomeController@destroyTodo')->name('todos.destroy');
    });

        Route::group(['prefix' => 'categories'], function () {
            Route::middleware('permission:create-category')->group(function () {
                Route::get('/create', 'CategoryController@create')->name('categories.create');
                Route::post('/', 'CategoryController@store')->name('categories.store');
            });
            Route::middleware('permission:read-category')->group(function () {
                Route::get('/', 'CategoryController@index')->name('categories.index');
                Route::get('/{slug}', 'CategoryController@show')->name('categories.show');
            }); 
            Route::middleware('permission:edit-category')->group(function () {
                Route::get('/{slug}/edit', 'CategoryController@edit')->name('categories.edit');
                Route::put('/{slug}', 'CategoryController@update')->name('categories.update');
            });
            Route::delete('/{slug}', 'CategoryController@destroy')->name('categories.destroy')->middleware('permission:delete-category');
        });
        

    // Stories Routes
    Route::group(['prefix' => 'stories', 'middleware' => ['role:superuser|council|columnist|coordinator']], function() {
        Route::get('/', 'StoryController@index')->name('stories.index');
        Route::get('/create', 'StoryController@create')->name('stories.create');
        Route::post('/', 'StoryController@store')->name('stories.store');
        Route::get('/{uuid}', 'StoryController@show')->name('stories.show');
        Route::get('/{uuid}/edit', 'StoryController@edit')->name('stories.edit');
        Route::get('/{uuid}/submit', 'StoryController@submit')->name('stories.submit');
        Route::put('/{uuid}', 'StoryController@update')->name('stories.update');
        // Route::put('/{uuid}/autosave', 'StoryController@autoSave')->name('stories.autosave');
        Route::delete('/{uuid}', 'StoryController@destroy')->name('stories.destroy');
    });

    // Album Routes
    Route::group(['prefix' => 'albums', 'middleware' => ['role:superuser|council|photographer|coordinator']], function() {
        Route::get('/', 'AlbumController@index')->name('albums.index');
        Route::get('/create', 'AlbumController@create')->name('albums.create');
        Route::post('/', 'AlbumController@store')->name('albums.store');
        Route::get('/{uuid}', 'AlbumController@show')->name('albums.show');
        Route::get('/{uuid}/edit', 'AlbumController@edit')->name('albums.edit');
        Route::put('/{uuid}', 'AlbumController@update')->name('albums.update');
        Route::get('/{uuid}/submit', 'AlbumController@submit')->name('albums.submit');
        Route::delete('/{uuid}', 'AlbumController@destroy')->name('albums.destroy');
        Route::get('/{uuid}/publish', 'AlbumController@publish')->name('albums.publish')->middleware('permission:publish-album');
        Route::get('/{uuid}/draft', 'AlbumController@draft')->name('albums.draft')->middleware('permission:publish-album');
        
        // Images Routes
        Route::group(['prefix' => '{uuid}/images', 'middleware' => 'CheckAlbum'], function() {
            Route::get('/', 'ImageController@index')->name('images.index');
            Route::get('/create', 'ImageController@create')->name('images.create');
            Route::post('/', 'ImageController@store')->name('images.store');
            Route::get('/{image}', 'ImageController@show')->name('images.show');
            Route::get('/{image}/edit', 'ImageController@edit')->name('images.edit');
            Route::get('/{image}/submit', 'ImageController@submit')->name('images.submit');
            Route::get('/{image}/draft', 'ImageController@draft')->name('images.draft')->middleware('permission:publish-image');
            Route::get('/{image}/publish', 'ImageController@publish')->name('images.publish')->middleware('permission:publish-image');
            Route::put('/{image}', 'ImageController@update')->name('images.update');
            Route::delete('/{image}', 'ImageController@destory')->name('images.destroy');
        });
    });

    Route::get('/uploads', 'ImageController@me')->name('images.me');// User images
    
});
