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

Route::view('/', 'pages.home')->name('home');
Route::view('/about-us', 'pages.about-us.about')->name('about-us');
Route::view('/board-directors', 'pages.about-us.bod')->name('bod');
Route::view('/group-companies', 'pages.about-us.boc')->name('boc');
Route::view('/management', 'pages.about-us.management')->name('management');
Route::view('/corporate-governance', 'pages.corporate')->name('corporate-governance');
Route::view('/investors', 'pages.investors')->name('investors');
Route::view('/disclosure', 'pages.disclosure')->name('disclosure');
// TERMS OF SERVICE
Route::view('/terms-of-service', 'pages.terms-of-service')->name('terms-of-service');
Route::view('/privacy-policy', 'pages.privacy-policy')->name('privacy-policy');
// corporate social responsibility
Route::view('/csr', 'pages.csr.csr')->name('csr');
Route::view('/csr-detail', 'pages.csr.csr-detail')->name('csr-detail');
Route::view('/contact-us', 'pages.contact')->name('contact-us');




// remove?
// Route::view('/blogs', 'pages.blogs.blogs')->name('blogs');
// Route::view('/blogs-detail', 'pages.blogs.blogs-detail')->name('blogs-detail');
