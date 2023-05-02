<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

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
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::get('/home',[HomeController::class,'redirect'])->middleware(['auth', 'verified'])->name('home');

Route::get('/',[HomeController::class,'index']);

Route::post('/appointment',[HomeController::class,'appointment']);

Route::get('/myappointment',[HomeController::class,'myappointment']);

Route::get('/cancel_appointment/{id}',[HomeController::class,'cancel_appointment']);

Route::get('/about',[HomeController::class,'about']);

Route::get('/our_doctor',[HomeController::class,'our_doctor']);

Route::get('/contact',[HomeController::class,'contact']);

Route::get('/blog',[HomeController::class,'blog']);

Route::get('/blog_details',[HomeController::class,'blog_details']);




// Admin Panel
Route::get('/dash',[AdminController::class,'dash']);

Route::get('/add_doctor_view',[AdminController::class,'add_view']);


Route::post('/upload_doctor',[AdminController::class,'upload_doctor']);

Route::get('/show_appointment',[AdminController::class,'show_appointment']);


Route::get('/approved/{id}',[AdminController::class,'approved']);

Route::get('/canceled/{id}',[AdminController::class,'canceled']);

Route::get('/show_doctor',[AdminController::class,'show_doctor']);

Route::get('/doctor_delete/{id}',[AdminController::class,'doctor_delete']);

Route::get('/update_doctor/{id}',[AdminController::class,'update_doctor']);

Route::post('/edit_doctor/{id}',[AdminController::class,'edit_doctor']);

Route::get('/email_view/{id}',[AdminController::class,'email_view']);

Route::post('/send_email/{id}',[AdminController::class,'send_email']);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
