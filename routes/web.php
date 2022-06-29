<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ATMController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Controller;
use App\Models\User;


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
    return view('landing-page');
})->name('landing-page');

// Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
//     return view('landing-page');
// })->name('landing-page');

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});



Route::post('/masuk', [LoginController::class, 'login']);



//////////////////////// middleware/////////////////////////////
Route::middleware(['auth'])->group(function () {
    Route::get('/atm-signin', function () {
        return view('ATM.signin');
    });
    Route::get('/scan', function () {
        return view('scan');
    });

    Route::get('/wallet', function () {
        return view('wallet');
    });

    Route::get('/test/env', function () {
        dd(env('DB_DATABASE')); // Dump 'db' variable value one by one
    });

    Route::get('/atm-location', function () {
        return view('location-atm');
    });

    Route::get('/landing-page', function () {
        return view('landing-page');
    });

    Route::get('/admin', [AdminController::class, 'getData'])->name('admin');
    Route::get('/admin/report', [AdminController::class, 'getReport']);
    Route::get('/admin/report/generate-laporan', [AdminController::class, 'generate']);

    //////////////ATM ROUTE///////////////////

    Route::get('/atm-menu', function () {
        return view('ATM.menu');
    })->name('atm-menu');

    Route::get('/atm-qrcode', function () {
        return view('ATM.QRCode');
    });

    Route::get('/profile', function () {
        return view('profile.profile-form');
    });

    // Route::get('/atm-menu', function () {
    //     return view('ATM.menuAtm');
    // });
    Route::get('/atm-inputBotol', function () {
        return view('ATM.input-bottle');
    });

    Route::get('/merchant', function () {
        return view('merchant');
    });

    Route::get('/merchant-totebag', function () {
        return view('merchant-totebag');
    });

    Route::get('/merchant-pouchbag', function () {
        return view('merchant-pouchbag');
    });

    Route::get('/article', function () {
        return view('article');
    });

    // Route::get('/atm-jumlahBotol', function () {
    //     return view('ATM.jmlh-bottle');
    // });

    Route::get('/atm-jumlahBotol', [ATMController::class, 'inputBotol']);

    Route::post('/update-profile', [ATMController::class, 'updateUserProfileNoPass']);

    Route::post('/update-password', [ATMController::class, 'updatePassword']);

    Route::post('/atm-menu-id', [ATMController::class, 'loginID']);
    // Route::get('/atm-succes', function () {
    //     return view('ATM.succes-input');
    // })->name('atm-succes');

    Route::post('/atm-succes', [ATMController::class, 'sendDataSucces']);

    Route::get('/atm-penghasilan/{saldo}', [ATMController::class, 'getPenghasilan']);

    Route::get('/wallet', [ATMController::class, 'getBalanceUser']);


    // Route::post('/atm-earning/{id}', [ATMController::class, 'getPenghasilan']);

    // Route::get('/atm-idcard', function () {
    //     return view('ATM.IDCard');
    // });

    Route::get('/atm-idcard', 'ATM@idcard');

    Route::post('/idcardPost', 'ATM@idcardPost');

    Route::get('/atm-balance', [ATMController::class, 'getBalance']);

    Route::get('/atm-idsalah', function () {
        return view('ATM.IDSalah');
    });

    Route::get('/atm-idload', function () {
        return view('ATM.IDLoad');
    });

    // Route::get('/atm-idcard', function () {
    //     return view('ATM.IDCard');
    // });

    Route::get('/atm-idcard', [ATMController::class, 'idcard']);

    // Route::post('/idcardPost', [ATMController::class, 'idcardPost']);

    Route::post('/idcardPost', [ATMController::class, 'idcardPost']);

    Route::post('getData', [ATMController::class, 'getData'])->name('getData');
    Route::post('viewPage', [ATMController::class, 'viewPage'])->name('viewPage');
});

Route::get('/atm-logout', function () {
    return view('ATM.logoutPage');
});
