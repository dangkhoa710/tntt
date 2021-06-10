<?php
$router->group(['prefix' => 'money'], function ($router) {
    $router->get('/',[Modules\Admin\Http\Controllers\MoneyController::class,'index'])->name('admin_money.index');
    $router->get('/create',[Modules\Admin\Http\Controllers\MoneyController::class,'create'])->name('admin_money.create');
    $router->post('/store',[Modules\Admin\Http\Controllers\MoneyController::class,'create'])->name('admin_money.create');
    $router->get('/edit',[Modules\Admin\Http\Controllers\MoneyController::class,'edit'])->name('admin_money.edit');
    $router->post('/store',[Modules\Admin\Http\Controllers\MoneyController::class,'update'])->name('admin_money.update');
});
