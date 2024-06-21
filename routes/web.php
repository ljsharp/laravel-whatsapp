<?php

use Illuminate\Support\Facades\Route;
use Teodoriu\Whatsapp\Http\Controllers\WebhookController;

Route::get('webhook', [WebhookController::class, 'subscribe'])->name('webhook.subscribe');
Route::post('webhook', [WebhookController::class, 'handle'])->name('webhook');
