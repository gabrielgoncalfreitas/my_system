<?php

use App\Http\Controllers\ManageFormsController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\TodosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect(route('admin.reports.index'));
});

# /admin
Route::prefix('admin')->group(function () {

    # Reports
    Route::prefix('reports')->group(function () {
        Route::get('/', [ReportsController::class, 'index'])->name('admin.reports.index');
    });

    # /admin/forms
    Route::prefix('forms')->group(function () {
        Route::get('/', function () {
            return view('reports.index');
        })->name('forms.index');

        # /admin/forms/manage-forms
        Route::prefix('manage-forms')->group(function () {
            Route::get('/', [ManageFormsController::class, 'index'])->name('manage-forms.index');
            Route::get('/create', [ManageFormsController::class, 'create'])->name('manage-forms.create');
            Route::get('/edit/{id}/{code_message?}', [ManageFormsController::class, 'edit'])->name('manage-forms.edit');
            Route::get('/delete/{id}', [ManageFormsController::class, 'delete'])->name('manage-forms.delete');
            Route::post('/store', [ManageFormsController::class, 'store'])->name('manage-forms.store');
            Route::post('/update/{id}', [ManageFormsController::class, 'update'])->name('manage-forms.update');
        });
    });

    # /admin/todos
    Route::prefix('todos')->group(function () {
        Route::get('/', [TodosController::class, 'index'])->name('todos.index');
        Route::get('/view/{id}', [TodosController::class, 'view'])->name('todos.view');
        Route::get('/complete/{id}/{returnToView}', [TodosController::class, 'complete'])->name('todos.complete');
        Route::get('/incomplete/{id}/{returnToView}', [TodosController::class, 'incomplete'])->name('todos.incomplete');
        Route::get('/delete/{id}', [TodosController::class, 'delete'])->name('todos.delete');
        Route::get('/create', [TodosController::class, 'create'])->name('todos.create');
        Route::post('/create', [TodosController::class, 'store'])->name('todos.store');
        Route::get('/edit/{id}', [TodosController::class, 'edit'])->name('todos.edit');
        Route::post('/edit/{id}', [TodosController::class, 'update'])->name('todos.update');
    });

});
