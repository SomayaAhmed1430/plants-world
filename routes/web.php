<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\PotsController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\Frontend\AboutUsController;
use App\Http\Controllers\Frontend\CategoryController as FrontendCategoryController;
use App\Http\Controllers\Frontend\GuideController;
use App\Http\Controllers\Frontend\MenuController as FrontendMenuController;
use App\Http\Controllers\Frontend\OrderController;
use App\Http\Controllers\Frontend\OrderNowController;
use App\Http\Controllers\Frontend\PotsControllers;
use App\Http\Controllers\Frontend\ReservationController as FrontendReservationController;
use App\Http\Controllers\Frontend\TableController as FrontendTableController;
use App\Http\Controllers\Frontend\WelcomeController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/categories', [FrontendCategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{category}', [FrontendCategoryController::class, 'show'])->name('categories.show');
Route::get('/menus', [FrontendMenuController::class, 'index'])->name('menus.index');
Route::get('/reservations/step-one', [FrontendReservationController::class, 'stepOne'])->name('reservations.step.one');
Route::post('/reservations/step-one', [FrontendReservationController::class, 'StoreStepOne'])->name('reservations.store.step.one');
Route::get('/reservations/step-two', [FrontendReservationController::class, 'stepTwo'])->name('reservations.step.two');
Route::post('/reservations/step-two', [FrontendReservationController::class, 'StoreStepTwo'])->name('reservations.store.step.two');
Route::get('/pots', [PotsControllers::class, 'index'])->name('pots.index');
Route::get('/about', [AboutUsController::class, 'index'])->name('about.index');
Route::get('/guide', [GuideController::class, 'index'])->name('guide.index');
Route::post('/guide', [GuideController::class, 'create'])->name('guide.store');
Route::get('/order/{id}', [OrderNowController::class, 'index'])->name('order.index');
Route::post('/order/{id}', [OrderNowController::class, 'store'])->name('order.store');
Route::get('/checkout', [OrderController::class, 'index'])->name('checkout.index');
Route::get('/checkoutt', [OrderController::class, 'cashorder'])->name('checkout.cashorder');
Route::get('/removecart/{id}', [OrderController::class, 'removecart'])->name('removecart.removecart');
Route::post('/comment', [GuideController::class, 'store'])->name('comment.store');
Route::get('/thankyou', [WelcomeController::class, 'thankyou'])->name('thankyou');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth','admin'])->name('admin.')->prefix('admin')->group(function(){
    
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/menus', MenuController::class);
    Route::resource('/tables', TableController::class);
    Route::resource('/reservations', ReservationController::class);
    Route::resource('/pots', PotsController::class);
    Route::resource('/orders', AdminOrderController::class);
    Route::resource('/comments', CommentController::class);
});

require __DIR__.'/auth.php';

Route::get('t', function() {

    $arr = [
        // [
        //     'name' => '1',
        // ],
        // [
        //     'name' => '2',
        // ],
        // [
        //     'name' => '3',
        // ],
        // [
        //     'name' => '4',
        // ]
    ];

    foreach($arr as $arr) {
        dump($arr['name']);
    }

    dump($arr['name']);

});