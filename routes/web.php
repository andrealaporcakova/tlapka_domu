<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ShelterController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\Admin\ShelterManagementController;
use App\Http\Controllers\Admin\AnimalManagementController;
use App\Http\Controllers\Admin\StoryManagementController;
use App\Http\Controllers\SearchController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/databaze-zvirat', [AnimalController::class, 'index'])->name('animal.index');
Route::get('/ztracene-nebo-nalezene/{stav?}', [AnimalController::class, 'report'])->name('animal.report');
Route::get('/zvirata/{animal}', [AnimalController::class, 'show'])->name('animal.show');
Route::post('/databaze/ulozit', [AnimalController::class, 'store'])->name('animal.store');
Route::get('/utulky', [ShelterController::class, 'index'])->name('shelters');
Route::get('/komunita', [CommunityController::class, 'index'])->name('community');
Route::get('/pribeh/{story}', [CommunityController::class, 'show'])->name('story.show');
Route::get('/podminky-uziti', function () {return view('terms-of-use');})->name('terms-of-use');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/dashboard', function () {return view('dashboard');})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/search', [SearchController::class, 'index'])->name('search');

Route::middleware('auth')->group(function () {
    // Profile management (Breeze)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin/utulky', [ShelterManagementController::class, 'index'])->name('admin.shelters.index');
    Route::get('/admin/zvirata', [AnimalManagementController::class, 'index'])->name('admin.animals.index');
    Route::resource('/admin/pribehy', StoryManagementController::class)
    ->names('admin.stories')
    ->parameters(['pribehy' => 'story']);
    Route::get('/moje-inzeráty', [AnimalController::class, 'myReports'])->name('my-animals.index');
    Route::patch('/databaze/reunite/{animal}', [AnimalController::class, 'reunite'])->name('animal.reunite');
    Route::delete('/databaze/smazat/{animal}', [AnimalController::class, 'destroy'])->name('animal.destroy');
});



// Load routes for login, registration, password reset, etc.
require __DIR__ . '/auth.php';
