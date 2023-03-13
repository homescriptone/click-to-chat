<?php
use Illuminate\Support\Facades\Route;
use Homescriptone\ClickToChatWhatsapp\Http\Controllers\SettingsController;

Route::prefix('homescriptone/click-to-chat')->name('homescriptone/click-to-chat.')->group(function () {
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
    Route::post('/', [SettingsController::class, 'store'])->name('store');
});