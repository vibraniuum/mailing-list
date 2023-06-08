<?php
use Illuminate\Support\Facades\Route;
use Vibraniuum\MailingList\Http\Livewire\MailingListIndex;

// Here you can add routes for the backend.
Route::group([
    'as' => 'mailing-list.',
    'prefix' => 'mailing-list/'
], function() {
    Route::group([
        'as' => 'emails.',
        'prefix' => 'emails/'
    ], function() {
        Route::get('/', MailingListIndex::class)->name('index');
    });});
