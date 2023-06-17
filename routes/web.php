<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SakaiThemeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Inertia\Inertia;

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

function getPageNameFromUri($uri): string
{
    $uri = ltrim($uri, '/');
    $page = last(explode('/', $uri));
    return Str::replace($page, Str::ucfirst($page), $uri);
}

Route::get('/{pageName?}', function ($pageName = 'Dashboard') {
//    return Inertia::render('Welcome', [
//        'canLogin' => Route::has('login'),
//        'canRegister' => Route::has('register'),
//        'laravelVersion' => Application::VERSION,
//        'phpVersion' => PHP_VERSION,
//    ]);
    return Inertia::render(Str::ucfirst($pageName));
});

Route::get('/uikit/{page}', function (Request $request, $page) {
    return Inertia::render(getPageNameFromUri($request->getRequestUri()));
});

Route::get('get/{item}', [SakaiThemeController::class, 'getData']);

Route::get('utilities/{pageName}', function (Request $request, $pageName) {
    return Inertia::render(getPageNameFromUri($request->getRequestUri()));
});

Route::get('Auth/{pageName}', function (Request $request, $pageName) {
    return Inertia::render(getPageNameFromUri($request->getRequestUri()));
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
