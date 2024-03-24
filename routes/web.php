<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

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

// Route::get('/', function () {
//     return view('Userpage');
// });
// Route::get('/master', function () {
//     return view('Master');
// });


// Route::get('/student', function () {
//     return view('Student');
// });


Route::get('/',[WebsiteController::class,"Index"])->name('index');



Route::name("website.")->prefix("website")->group(function(){
    Route::get('/',[WebsiteController::class,"Index"])->name('index');
    Route::get("/student",[WebsiteController::class,"Student"])->name('student');
    Route::post("/store-student",[WebsiteController::class,"store_student"])->name("storestudent");
    Route::get('show-student',[WebsiteController::class,"show_student"])->name("showStudent");
    Route::post('edit-student',[WebsiteController::class,"edit"])->name("edit");
    Route::get('view-student/{id}',[WebsiteController::class,"view"])->name("view");

    Route::post("/edit-student/{id}",[WebsiteController::class,"edit_student"])->name("editstudent");
    Route::post("/delete-student/{id}",[WebsiteController::class,"delete_student"])->name("deletestudent");

    Route::get("/post/{id}",[WebsiteController::class,"post"])->name('post');
    Route::post("/store-post/{id}",[WebsiteController::class,"store_post"])->name("createPost");

    Route::get('all-post',[WebsiteController::class, "all_post"])->name("all-post");
});



