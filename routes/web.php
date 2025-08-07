<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/event', function () {
        $events = \App\Models\Event::all();
        return view('event',compact('events'));
    })->name('event');

    Route::get('/annoucement', function () {
        $annoucements = \App\Models\Announcement::all();
        return view('annoucement',compact('annoucements'));
    })->name('annoucement');

    Route::get('/service', function () {
        $services = \App\Models\Service::all();
        return view('service',compact('services'));
    })->name('service');

    Route::get('/product', function () {
        $products = \App\Models\Product::all();
        return view('product',compact('products'));
    })->name('product');

    Route::get('/favourite', function () {
        $favourites = \App\Models\Favourite::with('favouritable')->get();
        return view('favourite', compact('favourites'));
    })->name('favourite');

    Route::get('/approval', function () {
        return view('approval');
    })->name('approval');

});
