<?php

use App\Livewire\Counter;
use App\Livewire\CreatePost;
use App\Livewire\EditProfile;
use App\Livewire\ExamplesAlpine;
use App\Livewire\HelloWord;
use App\Livewire\Order\Index\Page;
use App\Livewire\ShowPosts;
use App\Livewire\Signup;
use App\Livewire\Todos;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/helloWord', HelloWord::class)
    ->middleware('auth')
    ->name('helloWord');

Route::get('/counter', Counter::class)
    ->middleware('auth')
    ->name('counter');

Route::get('/todos', Todos::class)
    ->middleware('auth')
    ->name('todos');

Route::get('/showPosts', ShowPosts::class)
    ->middleware('auth')
    ->name('showPosts');

Route::get('/createPost', CreatePost::class)
    ->middleware('auth')
    ->name('createPost');

Route::get('/examplesAlpine', ExamplesAlpine::class)
    ->middleware('auth')
    ->name('examplesAlpine');

Route::get('/editProfile', EditProfile::class)
    ->middleware('auth')
    ->name('editProfile');

Route::get('/signup', Signup::class)
    ->middleware('auth')
    ->name('signup');


Route::get('/store/orders', Page::class)->name('order.index.page');

require __DIR__ . '/auth.php';
