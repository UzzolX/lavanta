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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/contact-us', [App\Http\Controllers\Admin\Contact\ContactFormController::class, 'index'])->name('contact.index');
Route::get('/contact-us', [App\Http\Controllers\Admin\Contact\ContactFormController::class, 'create'])->name('contact.create');
Route::post('/contact-us/store', [App\Http\Controllers\Admin\Contact\ContactFormController::class, 'store'])->name('contact.store');
Route::get('/contact-us', [App\Http\Controllers\Admin\Contact\ContactFormController::class, 'delete'])->name('contact.delete');


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
