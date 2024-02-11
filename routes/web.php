<?php


Route::middleware(['web','auth', 'splade', 'verified'])->name('admin.')->group(function () {
    Route::get('admin/contract-templates', [\TomatoPHP\TomatoContracts\Http\Controllers\ContractTemplateController::class, 'index'])->name('contract-templates.index');
    Route::get('admin/contract-templates/api', [\TomatoPHP\TomatoContracts\Http\Controllers\ContractTemplateController::class, 'api'])->name('contract-templates.api');
    Route::get('admin/contract-templates/create', [\TomatoPHP\TomatoContracts\Http\Controllers\ContractTemplateController::class, 'create'])->name('contract-templates.create');
    Route::post('admin/contract-templates', [\TomatoPHP\TomatoContracts\Http\Controllers\ContractTemplateController::class, 'store'])->name('contract-templates.store');
    Route::get('admin/contract-templates/{model}', [\TomatoPHP\TomatoContracts\Http\Controllers\ContractTemplateController::class, 'show'])->name('contract-templates.show');
    Route::get('admin/contract-templates/{model}/edit', [\TomatoPHP\TomatoContracts\Http\Controllers\ContractTemplateController::class, 'edit'])->name('contract-templates.edit');
    Route::post('admin/contract-templates/{model}', [\TomatoPHP\TomatoContracts\Http\Controllers\ContractTemplateController::class, 'update'])->name('contract-templates.update');
    Route::delete('admin/contract-templates/{model}', [\TomatoPHP\TomatoContracts\Http\Controllers\ContractTemplateController::class, 'destroy'])->name('contract-templates.destroy');
});

Route::middleware(['web','auth', 'splade', 'verified'])->name('admin.')->group(function () {
    Route::get('admin/contracts', [\TomatoPHP\TomatoContracts\Http\Controllers\ContractController::class, 'index'])->name('contracts.index');
    Route::get('admin/contracts/api', [\TomatoPHP\TomatoContracts\Http\Controllers\ContractController::class, 'api'])->name('contracts.api');
    Route::get('admin/contracts/create', [\TomatoPHP\TomatoContracts\Http\Controllers\ContractController::class, 'create'])->name('contracts.create');
    Route::post('admin/contracts', [\TomatoPHP\TomatoContracts\Http\Controllers\ContractController::class, 'store'])->name('contracts.store');
    Route::get('admin/contracts/{model}', [\TomatoPHP\TomatoContracts\Http\Controllers\ContractController::class, 'show'])->name('contracts.show');
    Route::get('admin/contracts/{model}/edit', [\TomatoPHP\TomatoContracts\Http\Controllers\ContractController::class, 'edit'])->name('contracts.edit');
    Route::post('admin/contracts/{model}', [\TomatoPHP\TomatoContracts\Http\Controllers\ContractController::class, 'update'])->name('contracts.update');
    Route::delete('admin/contracts/{model}', [\TomatoPHP\TomatoContracts\Http\Controllers\ContractController::class, 'destroy'])->name('contracts.destroy');
});
