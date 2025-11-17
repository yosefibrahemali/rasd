<?php

use App\Models\Transaction;
use Illuminate\Support\Facades\Route;

use function Symfony\Component\Translation\t;

Route::get('/', function () {
    return view('main-page',['count'=> 100]);
})->name('main-page');


Route::get('/suspicious-accounts', function () {
    return view('suspicious-accounts');
})->name('suspicious-accounts');


Route::get('/profile', function () {
    return view('profile',['count'=> 100]);
})->name('profile'); 

Route::get('/notifications', function () {
    return view('notifications',['count'=> 100]);
})->name('notifications');

Route::get('/transaction-details', function(){
    return view('transaction-details');

})->name('transactions.show');


Route::get('/ml-model', function () {
    return view('ml-model');
})->name('ml-model');

