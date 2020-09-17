<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocalizationController;

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
//     return redirect(app()->getLocale());
// });

// Route::group([
//     'prefix' => '{locale}',
//     'where' => ['locale' => '[a-zA-Z]{2}'],
//     'middleware' => 'setlocale'], function() {

//     Auth::routes();

//     Route::get('/', function () {
//         return view('welcome');
//     });

//     Route::get('/home', [HomeController::class, 'index'])->name('home');

// });

// $availableLanguages = Config::get('available_locales');
//     $lang = Request::getPreferredLanguage($availableLanguages);
//     if ($lang) Config::set('locale', $lang);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('lang/{locale}', [LocalizationController::class, 'index']);
