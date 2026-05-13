<?php


use App\Http\Controllers\FormUI\GetUiFieldsController;
use App\Http\Controllers\FormUI\UpdateFormUIController;
use App\Http\Controllers\UserPersonInfo\EditUserDoctorDetails;
use App\Http\Controllers\UserPersonInfo\EditUserPersonDetails;
use App\Http\Controllers\UserPersonInfo\UpdateDoctorDetails;
use App\Http\Controllers\UserPersonInfo\UpdateUserPersonDetails;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', DashboardController::class)->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/ui-fields/{type}', GetUiFieldsController::class)->name('ui-fields')->middleware(['auth', 'verified']);
Route::post('/ui-fields-update/{type}', UpdateFormUIController::class)->name('ui-fields-update')->middleware(['auth', 'verified']);




require __DIR__.'/auth.php';
require __DIR__.'/settings.php';
