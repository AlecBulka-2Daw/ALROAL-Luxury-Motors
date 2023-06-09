<?php

use App\Models\Carmodel;
use App\Models\Carbrand;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SavedController;
use App\Http\Controllers\UserController;

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

//Login, Register, Forgot Pasword
require __DIR__.'/auth.php';


//Main Routes
Route::get('/', function () {
    return view('home', [
        'brands' => Carbrand::all(),
        'models' => Carmodel::all()
    ]);
})->name('home');

Route::get('/buy-cars', [CarController::class, 'index'])->name('buy-cars');

Route::get('/car/{car}', [CarController::class, 'show'])->name('car-details');

Route::get('/sell-cars', function () {
    return view('sell-cars');
})->name('sell-cars');

Route::get('/tunning', function () {
    return view('tunning');
})->name('tunning');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/car-finance/{car}', [CarController::class, 'carFinance'])->name('car-finance-page');

    Route::post('/car-finance/{car}', [CarController::class, 'carFinancePost'])->name('car-finance-post');


    Route::get('/car-cash/{car}', [CarController::class, 'carCash'])->name('car-cash-page');

    Route::post('/car-cash/{car}', [CarController::class, 'carCashPost'])->name('car-cash-post');


    Route::get('/car-payment/{order}', [CarController::class, 'carPayment'])->name('car-payment');

    Route::post('/car-payment/{order}', [CarController::class, 'carPaymentPost'])->name('car-payment-post');

    Route::get('/purchase-successful/{order}', [CarController::class, 'purchaseSuccessful'])->name('purchase-successful');
});




Route::middleware(['auth', 'user', 'verified'])->group(function () {
    // User Routes
    Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('user-dashboard');

    Route::get('/user/account', [UserController::class, 'account'])->name('user-account');

    Route::get('/user/saved-cars', [SavedController::class, 'index'])->name('user-saved-cars');

    Route::get('/user/orders', [UserController::class, 'orders'])->name('user-orders');

    Route::post('/user/orders/{order}', [UserController::class, 'deleteOrder'])->name('user-delete-orders');


    Route::put('/user/update-personal-details', [UserController::class, 'updatePersonalDetails'])->name('user-update-personal-details');

    Route::put('/user/update-billing-details', [UserController::class, 'updateBillingDetails'])->name('user-update-billing-details');

    Route::put('/user/update-password', [UserController::class, 'updatePassword'])->name('user-update-password');

    Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user-delete');

    // Like Routes
    Route::post('/save/{car}', [SavedController::class, 'save'])->name('save');

    Route::delete('/save/{car}', [SavedController::class, 'removeSave'])->name('remove-save');
});


Route::middleware(['auth', 'employee', 'verified'])->group(function () {
    //Employee Routes
    Route::get('/employee/view-cars', [EmployeeController::class, 'index'])->name('employee-view-cars');

    Route::get('/employee/add-car', [EmployeeController::class, 'create'])->name('employee-add-cars');

    Route::post('/employee/add-car', [EmployeeController::class, 'store'])->name('employee-store-cars');

    Route::get('/employee/edit-car/{car}', [EmployeeController::class, 'edit'])->name('employee-edit-cars');

    Route::put('/employee/edit-car/{car}', [EmployeeController::class, 'update'])->name('employee-update-cars');

    Route::delete('/employee/delete-car/{car}', [EmployeeController::class, 'destroy'])->name('employee-delete-cars');
});




Route::middleware(['auth', 'admin', 'verified'])->group(function () {
    //Admin Routes
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin-dashboard');

    Route::get('/admin/view-cars', [AdminController::class, 'viewCars'])->name('admin-view-cars');

    Route::get('/admin/add-car', [AdminController::class, 'createCars'])->name('admin-add-cars');

    Route::post('/admin/add-car', [AdminController::class, 'storeCars'])->name('admin-store-cars');

    Route::get('/admin/edit-car/{car}', [AdminController::class, 'editCars'])->name('admin-edit-cars');

    Route::put('/admin/edit-car/{car}', [AdminController::class, 'updateCars'])->name('admin-update-cars');

    Route::delete('/admin/delete-car/{car}', [AdminController::class, 'destroyCars'])->name('admin-delete-cars');

    Route::get('/admin/view-users', [AdminController::class, 'viewUsers'])->name('admin-view-users');

    Route::get('/admin/add-user', [AdminController::class, 'createUsers'])->name('admin-add-users');

    Route::post('/admin/add-user', [AdminController::class, 'storeUsers'])->name('admin-store-users');

    Route::get('/admin/edit-user/{user}', [AdminController::class, 'editUsers'])->name('admin-edit-users');

    Route::put('/admin/edit-user/{user}', [AdminController::class, 'updateUsers'])->name('admin-update-users');

    Route::delete('/admin/delete-user/{user}', [AdminController::class, 'destroyUsers'])->name('admin-delete-users');

    Route::get('/admin/view-orders', [AdminController::class, 'viewOrders'])->name('admin-view-orders');
});






/*Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});*/
