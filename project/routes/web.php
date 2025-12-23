<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'index']);
Route::get('/about', [MainController::class, 'about']);
Route::get('/catalog', [MainController::class, 'catalog']);
Route::get('/support', [MainController::class, 'support']);
Route::get('/review', function () {
    return view('review');
});
Route::post('/review/submit', function (Illuminate\Http\Request $request) {
    return redirect('/review')->with('success', 'Отзыв успешно отправлен!');
});
// Route::get('/catalog', function () {
//     return view('catalog');
// });
// Route::get('/support', function () {
//     return view('support');
// });

// Route::get('/user/{id}/{name}', function ($id, $name) {
//     return 'ID:' . $id . '.Name:' . $name;
// });