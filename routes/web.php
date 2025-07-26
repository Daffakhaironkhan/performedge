<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FlowHandlingController;
use App\Http\Controllers\MacroController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SamplingController;
use App\Http\Controllers\ScorecardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('page.home');
})->middleware(['auth', 'verified'])->name('home');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('employees', EmployeeController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('flow_handlings', FlowHandlingController::class);
    Route::resource('macros', MacroController::class);
    Route::resource('sampling', SamplingController::class);
    Route::resource('users', UserController::class);
    Route::get('/scorecard/me', [ScorecardController::class, 'me'])->name('scorecard.me');
    Route::get('/get-agent-detail/{id}', [SamplingController::class, 'getAgentDetail'])->name('agent.detail');
    Route::get('/agents-by-level/{level}', [SamplingController::class, 'getAgentsByLevel'])->name('agents.byLevel');
//    Route::get('/categories-by-program/{program}', [SamplingController::class, 'getCategoriesByProgram'])->name('categories.byProgram');
    Route::get('/categories-by-program/{program}', [SamplingController::class, 'getCategoriesByProgram']);

//    Route::get('/sampling/create', [SamplingController::class,])->name('samplings.create');
});



//Route::prefix('auth')->group(function () {
//    Route::get('/redirect/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
//    Route::get('/callback/google', [GoogleController::class, 'handleGoogleCallback'])->name('auth.google.callback');
//});

require __DIR__.'/auth.php';
