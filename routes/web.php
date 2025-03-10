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

//Roles and Permissions Management
use App\Livewire\Admin\RolesPage;
use App\Livewire\Admin\PermissionsPage;

//USer Management
use App\Livewire\Admin\UserManagementPage;

use App\Livewire\HomePage;


Route::get('/', HomePage::class)->name('home');
// Route::get('/test-roles', function () {
//     return Role::with('permissions')->get();
// });

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

//admin
Route::middleware(['auth'])->group(function () {
    //Missing persons
    Route::get('missing-person/add', AddMissingPersonPage::class)->middleware('auth')->name('missing.add');
    Route::get('missing-person/edit/{id}', EditMissingPersonPage::class)->middleware('auth')->name('missing.edit');

    //Roles management
    Route::get('/admin/roles', RolesPage::class)->name('roles-page.index');
    Route::get('/admin/permissions', PermissionsPage::class)->name('permissions-page.index');

    //userManagement
    Route::get('/admin/users', UserManagementPage::class)->name('admin.users');
});



// Auth
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');



require __DIR__.'/auth.php';
