<?php

use App\Http\Controllers\ManageFormsController;
use App\Http\Controllers\ReportsController;
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
            Route::post('/store', [ManageFormsController::class, 'store'])->name('manage-forms.store');
        });
    });
});
