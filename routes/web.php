<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});


Route::get('/home', [HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/companies', [CompanyController::class, 'index'])->name('companies');
Route::get('/createCompany', [CompanyController::class, 'create']);
Route::post('/insert-company', [CompanyController::class, 'createCompany']);

Route::get('/create', [CompanyController::class, 'addLogo'])->name('logo.add');
Route::get('/update/{id}', [CompanyController::class, 'goUpdate']);

Route::post('/update-company/{id}', [CompanyController::class, 'update']);
Route::get('/delete-company/{id}', [CompanyController::class, 'delete']);


Route::get('/employees', [EmployeeController::class, 'index'])->name('employees');
Route::get('/createEmployee', [EmployeeController::class, 'create']);
Route::post('/insertEmployee', [EmployeeController::class, 'insertE']);
Route::get('/updateE/{id}', [EmployeeController::class, 'goUpdateEmployee']);

Route::post('/update-employee/{id}', [EmployeeController::class, 'updateEmployee']);
Route::get('/delete-employee/{id}', [EmployeeController::class, 'delete']);
