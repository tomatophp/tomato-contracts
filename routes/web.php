<?php

Route::middleware(['web','auth', 'splade', 'verified'])->name('admin.')->group(function () {
    Route::get('admin/contracts', [TomatoPHP\TomatoContracts\Http\Controllers\ContractController::class, 'index'])->name('contracts.index');
    Route::get('admin/contracts/api', [TomatoPHP\TomatoContracts\Http\Controllers\ContractController::class, 'api'])->name('contracts.api');
    Route::get('admin/contracts/create', [TomatoPHP\TomatoContracts\Http\Controllers\ContractController::class, 'create'])->name('contracts.create');
    Route::post('admin/contracts', [TomatoPHP\TomatoContracts\Http\Controllers\ContractController::class, 'store'])->name('contracts.store');
    Route::get('admin/contracts/{model}', [TomatoPHP\TomatoContracts\Http\Controllers\ContractController::class, 'show'])->name('contracts.show');
    Route::get('admin/contracts/{model}/edit', [TomatoPHP\TomatoContracts\Http\Controllers\ContractController::class, 'edit'])->name('contracts.edit');
    Route::post('admin/contracts/{model}', [TomatoPHP\TomatoContracts\Http\Controllers\ContractController::class, 'update'])->name('contracts.update');
    Route::delete('admin/contracts/{model}', [TomatoPHP\TomatoContracts\Http\Controllers\ContractController::class, 'destroy'])->name('contracts.destroy');
});
