<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [App\Http\Controllers\User\IndexController::class, 'index'])->name('index');
Route::get('/about-us', [App\Http\Controllers\User\AboutController::class, 'index'])->name('about.index');
Route::get('/why-us', [App\Http\Controllers\User\WhyusController::class, 'index'])->name('whyus.index');
Route::get('/investors', [App\Http\Controllers\User\InvestorsController::class, 'index'])->name('investors.index');
Route::get('/developers', [App\Http\Controllers\User\DevelopersController::class, 'index'])->name('developers.index');
Route::get('/property-search', [App\Http\Controllers\User\PropertySearchController::class, 'index'])->name('property-search.index');
Route::get('/frequently-asked-questions', [App\Http\Controllers\User\FaqController::class, 'index'])->name('faq.index');
Route::get('/contact-us', [App\Http\Controllers\User\ContactController::class, 'index'])->name('contact.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Admin
Route::middleware(['admin'])->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard.admin');

    //Privacy & Policy
    Route::get('/dashboard/privacy-and-policy', 'admin\settings\PrivacyPolicyController@index')->name('privacy.index');
    Route::get('/dashboard/privacy-and-policy/create', 'admin\settings\PrivacyPolicyController@create')->name('privacy.create');
    Route::post('/dashboard/privacy-and-policy/create', 'admin\settings\PrivacyPolicyController@store')->name('privacy.store');
    Route::get('/dashboard/privacy-and-policy/{id}/edit', 'admin\settings\PrivacyPolicyController@edit')->name('privacy.edit');
    Route::get('/dashboard/privacy-and-policy/{id}/update', 'admin\settings\PrivacyPolicyController@update')->name('privacy.update');
    Route::get('/dashboard/privacy-and-policy/{id}/delete', 'admin\settings\PrivacyPolicyController@destroy')->name('privacy.delete');
});
