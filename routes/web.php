<?php

Route::middleware(['web','auth', 'splade', 'verified'])->name('admin.')->group(function () {
    Route::get('admin/contracts', [App\Http\Controllers\Admin\ContractController::class, 'index'])->name('contracts.index');
    Route::get('admin/contracts/api', [App\Http\Controllers\Admin\ContractController::class, 'api'])->name('contracts.api');
    Route::get('admin/contracts/create', [App\Http\Controllers\Admin\ContractController::class, 'create'])->name('contracts.create');
    Route::post('admin/contracts', [App\Http\Controllers\Admin\ContractController::class, 'store'])->name('contracts.store');
    Route::get('admin/contracts/{model}', [App\Http\Controllers\Admin\ContractController::class, 'show'])->name('contracts.show');
    Route::get('admin/contracts/{model}/edit', [App\Http\Controllers\Admin\ContractController::class, 'edit'])->name('contracts.edit');
    Route::post('admin/contracts/{model}', [App\Http\Controllers\Admin\ContractController::class, 'update'])->name('contracts.update');
    Route::delete('admin/contracts/{model}', [App\Http\Controllers\Admin\ContractController::class, 'destroy'])->name('contracts.destroy');
});
