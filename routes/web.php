<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FamilyController;

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
    return view('welcome');
});

Route::get('/lugar', function () {
    return view('lugar');
});

Route::get('/rsvp', function () {
    return view('rsvp');
})->name('rsvp.form');

Route::get('/rsvp/{link_id}', function ($link_id) {
    return view('rsvp', ['link_id' => $link_id]);
})->name('rsvp.with_link');

Route::get('/admin', function () {
    return view('admin');
});

// API Routes for RSVP
Route::post('/api/families', [FamilyController::class, 'store']);
Route::post('/api/families/{link_id}/rsvp', [FamilyController::class, 'updateRsvp']);
Route::get('/api/families/{link_id}', [FamilyController::class, 'getByLinkId']);
Route::get('/api/families-list', [FamilyController::class, 'getAllFamilies']);
