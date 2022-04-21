<?php
use App\Events\ChatEvent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Events\HelloEvent;

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
Route::middleware('guest')->group(function (){
    Route::get('login', function () {
        return view('login-view');
    })->name('login');

    Route::get('/register', function () {
        return view('register-view');
    })->middleware('guest');

});



Route::get('code/{email}', function ($email) {
    return view('code-view')->with('email', $email);
})->name('code');

Route::fallback(function () {
    return redirect('/login');
});

Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth');

Route::post('register', [AuthController::class, 'register']);
Route::post('code/login-with-code', [AuthController::class, 'loginWithCode']);
Route::post('code/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('home', [AuthController::class, 'view'])->middleware(['auth','home']);
Route::post('upload', [AuthController::class, 'upload'])->middleware('auth');
Route::get('upload', [AuthController::class, 'dowloand']);
Route::post('token', [AuthController::class, 'token'])->middleware(['auth']);
Route::post('token2', [AuthController::class, 'token2'])->middleware(['auth']);
Route::post('token3', [AuthController::class, 'token3'])->middleware(['auth']);
Route::post('createtoken', [AuthController::class, 'createtoken'])->middleware('auth');
Route::get('users', [AuthController::class, 'users'])->middleware(['auth','admin']);
Route::get('modal', [AuthController::class, 'modal'])->middleware('auth');
Route::post('tokeningresado', [AuthController::class, 'tokeningresado'])->middleware('auth');
Route::get('books', [Books::class, 'store'])->middleware('auth');
Route::get('edit', [Books::class, 'edit'])->middleware('auth');
Route::post('editbook', [Books::class, 'editbook'])->middleware('auth');
Route::post('showbook', [Books::class, 'showbook'])->middleware('auth');
Route::post('edituploadbook', [Books::class, 'edituploadbook'])->middleware('auth');
Route::post('downrange', [AuthController::class, 'downrange'])->middleware('auth');
Route::post('uprange', [AuthController::class, 'uprange'])->middleware('auth');

Route::delete('deletebook', [Books::class, 'delete'])->middleware('auth');
Route::get('/sender', function () {
    broadcast(new HelloEvent(date('Y-m-d H:i:s') . " Selamat Datang"));
});
Route::get('auth', [Books::class, 'auth'])->middleware('auth');;


