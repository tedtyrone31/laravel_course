<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/about', function () {
//     return "This is the About page";
// })->name('about');

// Route::get('/user/{id}/{fname}', function ($id, $fname) {
//     return "User $id - $fname";
// })->name('user');

// Route::group(['prefix' => 'blog', 'as' => 'blog.'], function () {
//     Route::get('/create', function () {
//         return "Blog Create Page";
//     })->name('create');
//     Route::get('/edit', function () {
//         return "Blog Edit Page";
//     })->name('edit');
//     Route::get('/show', function () {
//         return "Blog Show Page";
//     })->name('show');
// });


// -----------------------------------------------------
//Route Methods
/*
1. GET -- if we want to get data
2. POST -- if we want to submit/store data
3. PUT --  used if you want to update data (for entire row)
4. PATCH -- also use to update data (for just a data field)
5. DELETE -- for deleting something
6. OPTIONS
7.fallback (But laravel has its own(default))
*/

// -----------------------------------------------------
// Route::get('get-route', function () {
//     return;
// });

// Route::post('post-route', function () {
//     return;
// });

// Route::put('put-route', function () {
//     return;
// });

// Route::patch('patch-route', function () {
//     return;
// });

// Route::delete('delete-route', function () {
//     return;
// });

// Route::fallback(function () {
//     return "We couldnt find the page.";
// });

// -----------------------------------------------------
