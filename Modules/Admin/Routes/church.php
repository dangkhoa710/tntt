<?php
$router->group(['prefix' => 'church'], function ($router) {
    $router->get('/',[Modules\Admin\Http\Controllers\ChurchController::class,'index'])->name('admin_church.index');
    $router->get('/create',[Modules\Admin\Http\Controllers\ChurchController::class,'create'])->name('admin_church.create');
    $router->post('/store',[Modules\Admin\Http\Controllers\ChurchController::class,'create'])->name('admin_church.create');
    $router->get('/edit',[Modules\Admin\Http\Controllers\ChurchController::class,'edit'])->name('admin_church.edit');
    $router->post('/store',[Modules\Admin\Http\Controllers\ChurchController::class,'update'])->name('admin_church.update');
});
