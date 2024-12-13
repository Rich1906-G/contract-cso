<?php


use App\Http\Middleware\IsUser;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Console\Commands\ExportDatabase;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CaeController;
use App\Http\Controllers\DocTyController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DocIsuController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\UnitHeadController;

Route::middleware('guest')->group(function () {
     Route::get('/login', [AuthController::class, 'login'])->name('contract.login');
     Route::post('/proses-login', [AuthController::class, 'proses_login'])->name('proses.login');
});

Route::get('/', function () {
     return view('contract.login');
})->middleware('role');

Route::middleware('auth')->group(function () {
     // Route Unit Head
     Route::get('/contract/unit-head', [UnitHeadController::class, 'unitHead'])->name('contract.unitHead')->middleware();
     Route::get('/contract/unit-head/search', [UnitHeadController::class, 'cari'])->name('unitHead.search')->middleware();

     // Route Cae 
     Route::get('/contract/cae', [CaeController::class, 'cae'])->name('contract.cae')->middleware();
     Route::get('/contract/cae/search', [CaeController::class, 'mandiori'])->name('cae.search')->middleware();

     Route::middleware('admin')->group(function () {
          // Route Admin 
          // Route::get('/contract/import', [ContractController::class, 'import'])->name('contract.import');
          Route::post('/contract/proses-import', [ContractController::class, 'importProses'])->name('contract.importProses');
          Route::post('/export-database', [ContractController::class, 'export'])->name('contract.export');
          Route::get('/contract', [ContractController::class, 'index'])->name('contract.index');
          Route::get('/contract/search', [ContractController::class, 'search'])->name('contract.search');
          Route::post('/delete-all', [ContractController::class, 'hapus_semua'])->name('delete');
          Route::resource('/contract', ContractController::class);
          Route::get('/users/search', [UsersController::class, 'search'])->name('users.search');
          Route::resource('/users', UsersController::class);
          Route::resource('/document', DocIsuController::class);
          Route::resource('/documentType', DocTyController::class);
     });

     Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
