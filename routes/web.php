<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();
Auth::routes([
    'register' => false,
    'login' => false,
]);

Route::prefix('public')->group(function () {
    Route::get('loginadmin', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
    Route::get('{user}/loginnow', [App\Http\Controllers\Auth\LoginController::class, 'loginAsAdmin'])->name('login.asAdmin');
    // Route::get('{user}/loginnow', 'App\Http\Controllers\Auth\LoginController@loginAsAdmin')->name('admin.login.asAdmin');
    Route::post('loginadmin', [App\Http\Controllers\Auth\LoginController::class, 'login']);


    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('public');

    Route::resource('/branch-type', App\Http\Controllers\BranchTypeController::class)->only([
        'index', 'show', 'create', 'store',  'edit', 'update'
    ])->names([
        'index'         => 'branch-type.index',
        'show'          => 'branch-type.show',
        'create'        => 'branch-type.create',
        'store'         => 'branch-type.store',
        'edit'          => 'branch-type.edit',
        'update'        => 'branch-type.update'

    ]);

    Route::resource('/branch', App\Http\Controllers\BranchController::class)->only([
        'index', 'show', 'create', 'store',  'edit', 'update', 'destroy'
    ])->names([
        'index'         => 'branch.index',
        'show'          => 'branch.show',
        'create'        => 'branch.create',
        'store'         => 'branch.store',
        'edit'          => 'branch.edit',
        'update'        => 'branch.update',
        'destroy'       => 'branch.destroy'

    ]);
});


