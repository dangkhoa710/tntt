<?php
$router->group(['prefix' => 'account'], function ($router) {
    $router->get('/',[Modules\Admin\Http\Controllers\AccountController::class,'index'])->name('admin_account.index');
    $router->get('/create',[Modules\Admin\Http\Controllers\AccountController::class,'create'])->name('admin_account.create');
    $router->post('/store',[Modules\Admin\Http\Controllers\AccountController::class,'create'])->name('admin_account.create');
    $router->get('/edit',[Modules\Admin\Http\Controllers\AccountController::class,'edit'])->name('admin_account.edit');
    $router->post('/store',[Modules\Admin\Http\Controllers\AccountController::class,'update'])->name('admin_account.update');
});

