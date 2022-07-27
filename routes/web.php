<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/comics/index', function () {
    $books = config("comics");

    return view("comics.index", compact("books"));
})->name("comics.index");

Route::get('/comics/{id}', function ($id) {
    $books = config("comics");
    $selectedBook = null;
    
    foreach ($books as $book){
        if($book["id"] === intval($id)){
            $selectedBook = $book;
            break;
        }
    }


    if(is_null($selectedBook)){
        abort(404);
    }

    return view("comics.show", [
        "book"=>$selectedBook
    ]);
})->name("comics.show");