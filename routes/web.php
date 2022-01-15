<?php

use Illuminate\Support\Facades\Route;
use app\Controller\SharkController;
use App\Http\Controllers\sharkController as ControllersSharkController;

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

// ----------------------------------------------------------------------------------}}
// -- Route: About --}}
// ----------------------------------------------------------------------------------}}
Route::get('/about', function () {
    return view('about');
})->name('about');

// ----------------------------------------------------------------------------------}}
// -- Route: Search Shipping Result --}}
// ----------------------------------------------------------------------------------}}
Route::get('/search', function () {
    return view('search');
})->name('searchshippingresult');

// Route::get('/search', function () {
//     return view('search');
// })->name('search');


// ----------------------------------------------------------------------------------}}
// -- Route: Main --}}
// ----------------------------------------------------------------------------------}}
Route::get('/main', function () {
    return view('main');
})->name('main');


// ----------------------------------------------------------------------------------}}
// -- Route: Search --}}
// ----------------------------------------------------------------------------------}}
// Route::get('/search', function () {
//     return view('search');
// })->name('search');


// ----------------------------------------------------------------------------------}}
// -- ******* SHARK *******  - Route: Controller --}}
// ----------------------------------------------------------------------------------}}
Route::resource('photos', SharkController::class);
// Route::get('/shark', function () {
//     return view('shark');
// })->name('shark');

// ----------------------------------------------------------------------------------}}
// -- ******* SHARK *******  - Route: Main --}}
// ----------------------------------------------------------------------------------}}
Route::get('/sharks/index', function () {
    return view('/sharks/index');
})->name('sharks_index');

// ----------------------------------------------------------------------------------}}
// -- ******* SHARK *******  - Route: Main --}}
// ----------------------------------------------------------------------------------}}
Route::get('/sharks/create', function () {
    return view('/sharks/create');
})->name('sharks_create');

// ----------------------------------------------------------------------------------}}
// -- ******* SHARK *******  - Route: Main --}}
// ----------------------------------------------------------------------------------}}
Route::get('/sharks/edit', function () {
    return view('/sharks/edit');
})->name('sharks_edit');

// ----------------------------------------------------------------------------------}}
// -- ******* SHARK *******  - Route: Main --}}
// ----------------------------------------------------------------------------------}}
Route::get('/sharks/show', function () {
    return view('/sharks/show');
})->name('sharks_show');
