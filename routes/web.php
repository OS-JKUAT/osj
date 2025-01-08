<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Arrested\ArrestedHomePage;

use App\Livewire\Injured\InjuredHomePage;

use App\Livewire\Missing\MissingHomePage;
use App\Livewire\Missing\MissingPersonDetailPage;

use App\Livewire\Ud\UnidentifiedDecendentPage;

// Admins
// Missing
use App\Livewire\Admin\Missing\AddMissingPersonPage;
use App\Livewire\Admin\Missing\EditMissingPersonPage;

use App\Livewire\HomePage;


Route::get('/', HomePage::class)->name('home');

// Arrested
Route::get('arrested-home', ArrestedHomePage::class)
    ->name('arrested');

// Missing Page
Route::get('missing-home', MissingHomePage::class)
    ->name('missing');

Route::get('missing/{slug}',MissingPersonDetailPage::class)
    ->name('missing.detail');

// Injured Page
Route::get('injured-persons-home', InjuredHomePage::class)
    ->name('injured');

// UD
Route::get('unidentified-decendents-home', UnidentifiedDecendentPage::class)
    ->name('ud');

// ADMIN
// Route::middleware(['auth', 'role:admin'])->group(function () {
    // This route is now protected by the auth and role:admin middleware
    // Route::resource('missing_people', MissingPersonController::class);
// });

// Missing
Route::get('missing-person/add', AddMissingPersonPage::class)->middleware('auth')->name('missing.add');
Route::get('missing-person/edit/{id}', EditMissingPersonPage::class)->middleware('auth')->name('missing.edit');

// Auth
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');



require __DIR__.'/auth.php';
