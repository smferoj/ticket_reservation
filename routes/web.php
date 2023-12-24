<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'home']);

Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index');
Route::get('/tickets/create', [TicketController::class, 'createTicket'])->name('tickets.create');
Route::post('/tickets/store', [TicketController::class, 'storeTicket'])->name('tickets.store');
