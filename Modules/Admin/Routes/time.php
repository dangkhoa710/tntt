<?php
$router->group(['prefix' => 'time'], function ($router) {
    $router->get('/',[Modules\Admin\Http\Controllers\TimeController::class,'index'])->name('admin_time.index');
    $router->get('/create',[Modules\Admin\Http\Controllers\TimeController::class,'create'])->name('admin_time.create');
    $router->post('/store',[Modules\Admin\Http\Controllers\TimeController::class,'create'])->name('admin_time.create');
    $router->get('/edit',[Modules\Admin\Http\Controllers\TimeController::class,'edit'])->name('admin_time.edit');
    $router->post('/store',[Modules\Admin\Http\Controllers\TimeController::class,'update'])->name('admin_time.update');
});
