<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FollowerController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

//older methods
    // Route::group(['prefix' => '/idea', 'as' => 'idea.'], function(){

    //     Route::get('/{idea}', [IdeaController::class, 'show']) -> name('show');
    //     // Route::delete('/{id}', [IdeaController::class, 'destroy']) -> name('destroy');


    //     Route::group(['middleware' => ['auth']], function(){

    //         //
    //         Route::group(['prefix' => '/{idea}'], function () {

    //             // Route::get('/edit', [IdeaController::class, 'edit']) -> name('edit');
    //             // Route::put('/', [IdeaController::class, 'update']) -> name('update');
    //             Route::post('/comments', [CommentController::class, 'store']) -> name('comments.store');
    //         });

    //     });




    // });

    // Route::post('/idea/idea', [IdeaController::class, 'store']) -> name('create');

Route::get('/', [DashboardController::class, 'index']) -> name('dashboard');

Route::resource('idea', IdeaController::class)->except(['index' ,'create','show'])->middleware('auth');
Route::resource('idea', IdeaController::class)->only(['show']);

Route::resource('idea.comments', CommentController::class)->only(['store'])->middleware('auth');

Route::resource('users', UserController::class)->only(['show']);
Route::resource('users', UserController::class)->only(['edit','update'])->middleware('auth');

Route::get('/profile', [UserController::class, 'profile'])->name('profile')->middleware('auth');


Route::post('users/{user}/follow',[FollowerController::class,'follow'])->name('users.follow')->middleware('auth');
Route::post('users/{user}/unfollow',[FollowerController::class,'unfollow'])->name('users.unfollow')->middleware('auth');

Route::post('idea/{idea}/like',[LikeController::class,'like'])->name('idea.like')->middleware('auth');
Route::post('idea/{idea}/unlike',[LikeController::class,'unlike'])->name('idea.unlike')->middleware('auth');















Route::get('/index', function () {
    return view('index');
});
