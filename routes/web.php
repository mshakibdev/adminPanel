<?php

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
        return view('master');
    })->name('home');
    
    Route::get('dashboard',function (){
        return view('dashboard');
    })->name('dashboard');
    
    Route::get('login',function (){
        return view('auth/login');
    });
    Route::get('register',function (){
        return view('auth/register');
    });
    Route::get('water',function (){
        return view('utilities/water');
    })->name('water');
    Route::get('division',function (){
        return view('division');
    })->name('division');
    
    
    //sms
    Route::get('all-numbers','smsController@index');

    Route::get('sms/send/all','smsController@OnetoMany')->name('onetomany');
