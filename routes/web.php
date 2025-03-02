<?php

use App\Http\Controllers\apiController;
use Illuminate\Support\Facades\Route;
// Route Get View
Route::get('/', function () {
    return view('panel.index');
});
Route::get('register',function(){
    return view('panel.register');
});
Route::get('dashboard',function(){
    return view('dashboard.index_dashboard');
})->name('dashboard');
Route::get('schedule',function(){
    return view('dashboard.index_schedule');
})->name('schedule');

// Route API AJAX
Route::get('/api/manifest',[apiController::class,'manifest'])->name('listmanifest');

// Route Post View


// Route Post API AJAX
