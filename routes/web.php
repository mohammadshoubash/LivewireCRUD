<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Tickets\Home;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tickets', Home::class)->name('tickets.index');

// Route::get('/tickets/create', CreateForm::class)->name('tickets.create');
// Route::get('/tickets/edit', EditForm::class)->name('tickets.edit');
