<?php

use App\Http\Controllers\Forms\FormsController;
use App\Http\Controllers\Forms\ManageForms\ManageFormsController;
use App\Http\Controllers\Forms\ManageForms\ManageFormsSectionsController;
use App\Http\Controllers\Reports\ReportsController;
use App\Http\Controllers\Todos\TodosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect(route('admin.reports.index'));
});

# /admin
Route::prefix('admin')->group(function () {

    # /admin/reports
    Route::prefix('reports')->group(function () {
        Route::get('/', [ReportsController::class, 'index'])->name('admin.reports.index');
    });

    # /admin/forms
    Route::prefix('forms')->group(function () {
        Route::get('/', [FormsController::class, 'index'])->name('forms.index');

        # /admin/forms/manage-forms
        Route::prefix('manage-forms')->group(function () {
            Route::get('/', [ManageFormsController::class, 'index'])->name('manage-forms.index');
            Route::get('/create', [ManageFormsController::class, 'create'])->name('manage-forms.create');
            Route::get('/edit/{id}', [ManageFormsController::class, 'edit'])->name('manage-forms.edit');
            Route::get('/delete/{id}', [ManageFormsController::class, 'delete'])->name('manage-forms.delete');
            Route::post('/store', [ManageFormsController::class, 'store'])->name('manage-forms.store');
            Route::post('/update/{id}', [ManageFormsController::class, 'update'])->name('manage-forms.update');

            # /admin/forms/manage-forms/sections
            Route::prefix('sections')->group(function () {
                Route::post('/', [ManageFormsSectionsController::class, 'store'])->name('manage-forms.sections.store');
                Route::post('/get-field', [ManageFormsSectionsController::class, 'field'])->name('manage-forms.sections.field');
            });
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
