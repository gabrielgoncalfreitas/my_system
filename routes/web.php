<?php

use App\Http\Controllers\Features\FeaturesController;
use App\Http\Controllers\Forms\FormsController;
use App\Http\Controllers\Forms\ManageForms\ManageFormsController;
use App\Http\Controllers\Forms\ManageForms\ManageFormsSectionsController;
use App\Http\Controllers\Reports\ReportsController;
use App\Http\Controllers\Todos\TodosController;
use App\Http\Controllers\Workers\WorkersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect(route('admin.reports.index'));
});

Route::prefix('admin')->group(function () { # /admin

    Route::prefix('reports')->group(function () { # /admin/reports
        Route::get('/', [ReportsController::class, 'index'])->name('admin.reports.index');
    });

    Route::prefix('workers')->group(function () { # /admin/workers
        Route::get('/', [WorkersController::class, 'index'])->name('workers.index');
        Route::get('/create', [WorkersController::class, 'create'])->name('workers.create');
        Route::post('/store', [WorkersController::class, 'store'])->name('workers.store');
        Route::get('/edit/{id}', [WorkersController::class, 'edit'])->name('workers.edit');
        Route::get('/delete/{id}', [WorkersController::class, 'delete'])->name('workers.delete');
    });

    Route::prefix('forms')->group(function () { # /admin/forms
        Route::get('/', [FormsController::class, 'index'])->name('forms.index');

        Route::prefix('manage-forms')->group(function () { # /admin/forms/manage-forms
            Route::get('/', [ManageFormsController::class, 'index'])->name('manage-forms.index');
            Route::get('/create', [ManageFormsController::class, 'create'])->name('manage-forms.create');
            Route::get('/edit/{id}', [ManageFormsController::class, 'edit'])->name('manage-forms.edit');
            Route::get('/delete/{id}', [ManageFormsController::class, 'delete'])->name('manage-forms.delete');
            Route::post('/store', [ManageFormsController::class, 'store'])->name('manage-forms.store');
            Route::post('/update/{id}', [ManageFormsController::class, 'update'])->name('manage-forms.update');

            Route::prefix('sections')->group(function () { # /admin/forms/manage-forms/sections
                Route::post('/', [ManageFormsSectionsController::class, 'store'])->name('manage-forms.sections.store');
                Route::post('/get-field', [ManageFormsSectionsController::class, 'field'])->name('manage-forms.sections.field');
            });
        });
    });

    Route::prefix('todos')->group(function () { # /admin/todos
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

    Route::prefix('features')->group(function () { # /admin/features
        Route::get('/', [FeaturesController::class, 'index'])->name('features.index');
    });
});
