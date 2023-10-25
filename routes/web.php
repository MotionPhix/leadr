<?php

use App\Http\Controllers\ProfileController;
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

Route::middleware('splade')->group(function () {
  // Registers routes to support the interactive components...
  Route::spladeWithVueBridge();

  // Registers routes to support password confirmation in Form and Link components...
  Route::spladePasswordConfirmation();

  // Registers routes to support Table Bulk Actions and Exports...
  Route::spladeTable();

  // Registers routes to support async File Uploads with Filepond...
  Route::spladeUploads();

  Route::middleware('auth')->group(function () {

    Route::group(
      ['prefix' => 'contacts'], function () {

      Route::get(
        '/',
        \App\Http\Controllers\Contact\Index::class
      )->name('contacts.index');

      Route::get(
        '/create',
        \App\Http\Controllers\Contact\Form::class
      )->name('contacts.create');

      Route::post(
        '/',
        \App\Http\Controllers\Contact\Store::class
      )->name('contacts.store');

      Route::patch(
        '/{contact}',
        \App\Http\Controllers\Contact\Update::class
      )->name('contacts.update');

      Route::delete(
        '/{contact}',
        \App\Http\Controllers\Contact\Trash::class
      )->name('contacts.destroy');

      Route::get(
        '/{contact}',
        \App\Http\Controllers\Contact\Show::class
      )->name('contacts.show');

      Route::get(
        '/{contact}/edit',
        \App\Http\Controllers\Contact\Form::class
      )->name('contacts.edit');

    });

    Route::group(
      ['prefix' => 'companies'], function () {

      Route::get(
        '/',
        \App\Http\Controllers\Company\Index::class
      )->name('companies.index');

      Route::get(
        '/create',
        \App\Http\Controllers\Company\Form::class
      )->name('companies.create');

      Route::post(
        '/',
        \App\Http\Controllers\Company\Store::class
      )->name('companies.store');

      Route::patch(
        '/{company}',
        \App\Http\Controllers\Company\Update::class
      )->name('companies.update');

      Route::delete(
        '/{company}',
        \App\Http\Controllers\Company\Trash::class
      )->name('companies.destroy');

      Route::get(
        '/{company}',
        \App\Http\Controllers\Company\Show::class
      )->name('companies.show');

      Route::get(
        '/{company}/edit',
        \App\Http\Controllers\Company\Form::class
      )->name('companies.edit');

    });

    Route::group(
      ['prefix' => 'categories'], function () {

      Route::get(
        '/create',
        \App\Http\Controllers\Category\Form::class
      )->name('categories.create');

      Route::post(
        '/',
        \App\Http\Controllers\Category\Store::class
      )->name('categories.store');

      Route::patch(
        '/{company}',
        \App\Http\Controllers\Category\Update::class
      )->name('categories.update');

    });

    Route::get('/dashboard', function () {

      return view('dashboard');

    })->name('dashboard');

    Route::get(
      '/',
      \App\Http\Controllers\Welcome::class
    )->middleware('auth')->name('home');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
  });

  require __DIR__ . '/auth.php';
});
