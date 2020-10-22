<?php

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
    return view('wizard_form');
});

route::post('/login', 'WizardController@login')->name('login');
route::post('/submit/wizard-form', 'WizardController@store')->name('wizard.submit');
