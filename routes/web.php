<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/uikit/button', function () {
    return Inertia::render('UIKit/ButtonDoc');
});

Route::get('/uikit/charts', function () {
    return Inertia::render('UIKit/ChartDoc');
});

Route::get('/uikit/file', function () {
    return Inertia::render('UIKit/FileDoc');
});

Route::get('/uikit/formlayout', function () {
    return Inertia::render('UIKit/FormLayout');
});

Route::get('/uikit/input', function () {
    return Inertia::render('UIKit/InputDoc');
});

Route::get('/uikit/list', function () {
    return Inertia::render('UIKit/ListDoc');
});

Route::get('/uikit/media', function () {
    return Inertia::render('UIKit/MediaDoc');
});

Route::get('/uikit/menu', function () {
    return Inertia::render('UIKit/MenuDoc');
});

Route::get('/uikit/message', function () {
    return Inertia::render('UIKit/MessagesDoc');
});

Route::get('/uikit/misc', function () {
    return Inertia::render('UIKit/MiscDoc');
});

Route::get('/uikit/overlay', function () {
    return Inertia::render('UIKit/OverlayDoc');
});

Route::get('/uikit/panel', function () {
    return Inertia::render('UIKit/PanelsDoc');
});

Route::get('/uikit/table', function () {
    return Inertia::render('UIKit/TableDoc');
});

Route::get('/uikit/timeline', function () {
    return Inertia::render('UIKit/TimelineDoc');
});

Route::get('/uikit/tree', function () {
    return Inertia::render('UIKit/TreeDoc');
});

Route::get('/pages/crud', function () {
    return Inertia::render('Crud');
});

Route::get('/pages/notfound', function () {
    return Inertia::render('NotFound');
});

Route::get('/pages/empty', function () {
    return Inertia::render('Empty');
});

Route::get('/landing', function () {
    return Inertia::render('Landing');
});

Route::get('/documentation', function () {
    return Inertia::render('Documentation');
});

Route::get('/auth/login', function () {
    return Inertia::render('Auth/Login');
});

Route::get('/auth/access', function () {
    return Inertia::render('Auth/Access');
});

Route::get('/auth/error', function () {
    return Inertia::render('Auth/Error');
});

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
