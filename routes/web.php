<?php


use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EpisodesController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {return view('home');})->name('home');

//rota de homepage
Route::get('/', [SeriesController::class, 'index'])->name('home');



//***************************************************************************************************************************************

//rota de ver tudo sobre uma serie
Route::get('/serie/{id}', [EpisodesController::class, 'show'])->name('series.show');

//rota adicionar uma serie
Route::get('/add-series', [SeriesController::class, 'create'])->name('series.add')->middleware('auth');

//rota de edit series
Route::get('/edit-series/{series}', [SeriesController::class, 'edit'])->name('series.edit')->middleware('auth');

//rota de update series
Route::put('/update-series',[SeriesController::class, 'update'])->name('series.update')->middleware('auth');;

//rota de apagar serie
Route::get('/delete-serie/{series}', [SeriesController::class, 'destroy'])->name('series.delete')->middleware('auth');;

//rota de store de series
Route::post('/store-series',[SeriesController::class, 'store'])->name('series.store')->middleware('auth')->middleware('auth');;

//***************************************************************************************************************************************

//rota de criar episode
Route::get('/add-episodes/{episodes}', [EpisodesController::class, 'create'])->name('episodes.add')->middleware('auth');

//rota de edit episodes
Route::get('/edit-episodes/{episodes}', [EpisodesController::class, 'edit'])->name('episodes.edit')->middleware('auth');

//rota de update episodes
Route::put('/update-episodes',[EpisodesController::class, 'update'])->name('episodes.update')->middleware('auth');;

//rota de apagar episodes
Route::get('/delete-seasons/{episodes}', [EpisodesController::class, 'destroy'])->name('episodes.delete')->middleware('auth');

//rota de store de episodes
Route::post('/store-episodes',[EpisodesController::class, 'store'])->name('episodes.store')->middleware('auth');

//***************************************************************************************************************************************

//rota de store de users
Route::post('/store-user',[UserController::class, 'storeUser'])->name('users.store')->middleware('auth');

//***************************************************************************************************************************************

//rota home dashboard
Route::get('/dashboard',[DashboardController::class, 'dashboard'])->name('dashboard.all')->middleware('auth');

//***************************************************************************************************************************************


//rota Fallback
Route::fallback(function () {
    return view('utils.fallback');
});
