<?php
use App\Http\Controllers\webhookController;
use Illuminate\Support\Facades\Route;

Route::post('/webhook', [webhookController::class, 'handle']);
