<?php
$router->group(['prefix' => 'event'], function ($router) {
    $router->get('/',[Modules\Admin\Http\Controllers\EventController::class,'index'])->name('admin_event.index');
    $router->get('/create',[Modules\Admin\Http\Controllers\EventController::class,'create'])->name('admin_event.create');
    $router->post('/store',[Modules\Admin\Http\Controllers\EventController::class,'create'])->name('admin_event.create');
    $router->get('/edit',[Modules\Admin\Http\Controllers\EventController::class,'edit'])->name('admin_event.edit');
    $router->post('/store',[Modules\Admin\Http\Controllers\EventController::class,'update'])->name('admin_event.update');
});
