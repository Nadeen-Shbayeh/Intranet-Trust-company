<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\LastNewsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\ForgotPasswordController;

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

//Route::get('/dashboard', function () {
  //  return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/home',[HomeController::class,'index'])->middleware('auth')->name('home');
Route::get('/users',[UserController::class,'users'])->name('users');
Route::get('/company',[HomeController::class,'department'])->name('company');
Route::get('/add-department',[HomeController::class,'adddep'])->name('add-department');
Route::post('/add-department',[HomeController::class,'adddeppost'])->name('add.department.post');
Route::get('/add-branch',[HomeController::class,'addbranch'])->name('add-branch');
Route::post('/add-branch',[HomeController::class,'addbranchpost'])->name('add.branch.post');
Route::get('/create',[UserController::class,'create'])->name('create');
Route::post('/create',[UserController::class,'store'])->name('store');
Route::get('/show/{user}',[UserController::class,'show'])->name('show');
Route::get('/show-post/{post}',[PostController::class,'show'])->name('show-post');
Route::get('/show-news/{news}',[NewsController::class,'show'])->name('show-news');
Route::get('/edit/{user}',[UserController::class,'edit'])->name('edit');
Route::put('/edit/{user}',[UserController::class,'update']);
Route::get('/edit-department/{dep}',[HomeController::class,'edit'])->name('edit-department');
Route::put('/edit-department/{dep}',[HomeController::class,'update']);
Route::get('/edit-branch/{branch}',[HomeController::class,'editbranch'])->name('edit-branch');
Route::put('/edit-branch/{branch}',[HomeController::class,'updatebranch']);
Route::get('/edit-news/{news}',[NewsController::class,'edit'])->name('edit-news');
Route::get('/edit-post/{post}',[PostController::class,'edit'])->name('edit-post');
Route::get('/edit-lastnews/{news}',[LastNewsController::class,'edit'])->name('edit-lastnews');
Route::put('/edit-news/{news}',[NewsController::class,'update']);
Route::put('/edit-post/{post}',[PostController::class,'update']);
Route::put('/edit-lastnews/{news}',[LastNewsController::class,'save']);
Route::get('/create-post',[PostController::class,'create'])->name('create-post');
Route::get('/list-post',[PostController::class,'list_posts'])->name('list-post');
Route::post('/create-post',[PostController::class,'savepost'])->name('save-post');
Route::get('/list-news',[NewsController::class,'list_news'])->name('list-news');
Route::get('/create-news',[NewsController::class,'create'])->name('create-news');
Route::post('/create-news',[NewsController::class,'savenews'])->name('save-news');
//Route::get('/list-lastnews',[LastNewsController::class,'list_lastnews'])->name('list-lastnews');
Route::get('/create-lastnews',[LastNewsController::class,'create'])->name('create-lastnews');
Route::post('/create-lastnews',[LastNewsController::class,'update'])->name('save-lastnews');
Route::post('/users', [UserController::class,'ChangeUserStatus'])->name('/changeStatus');
Route::delete('/users/{user}', [UserController::class, 'delete'])->name('delete');
Route::get('/forgot-password',[ForgotPasswordController::class,'forgetPassword'])->name('forgot-password');
Route::post('/forgot-password',[ForgotPasswordController::class,'forgetPasswordPost'])->name('forgot.password.post');
Route::get('/reset-password',[ForgotPasswordController::class,'resetPassword'])->name('reset.password');
Route::post('/reset-password',[ForgotPasswordController::class,'resetPasswordPost'])->name('reset.password.post');
Route::get('/enter-token',[ForgotPasswordController::class,'entertoken'])->name('enter-token');
Route::post('/enter-token',[ForgotPasswordController::class,'entertokenpost'])->name('enter.token.post');
Route::get('/category',[CategoryController::class,'index'])->name('category');
Route::get('/category',[CategoryController::class,'userindex'])->name('category');
Route::get('/add-category',[CategoryController::class,'create'])->name('add-category');
Route::post('/add-category',[CategoryController::class,'store'])->name('add.category.post');
Route::get('/edit-category/{category}',[CategoryController::class,'edit'])->name('edit-category');
Route::put('/edit-category/{category}',[CategoryController::class,'update']);
Route::get('/add-file/{file}',[FileController::class,'add'])->name('add-file');
Route::post('/add-file/{file}',[FileController::class,'store'])->name('add.file.post');
Route::get('/show-file/{file}',[FileController::class,'show'])->name('show-file');
Route::get('/show-file',[FileController::class,'ShowUserFile'])->name('files');
Route::get('/download-file/{file}',[FileController::class,'download'])->name('download-file');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

require __DIR__.'/auth.php';
