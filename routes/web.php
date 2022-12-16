<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('editor');
});
Route::get('/login_page', function () {
    return view('login');
});
Route::post('login', [LoginController::class, 'authenticate']);
Route::get('/registeration_page', function () {
    return view('registration');
});
Route::post('register', [RegistrationController::class, 'register']);
Route::get('logout', [LoginController::class, 'logout']);

Route::post('store_list', [TemplateController::class, 'storeTemplate']);
Route::get('template', [TemplateController::class, 'renderTemplate']);

Route::get('/view_template/{template_id}', [TemplateController::class, 'viewTemplate']);