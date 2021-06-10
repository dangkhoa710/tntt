<?php
$router->group(['prefix' => 'boss'], function ($router) {
    $router->get('/',[Modules\Admin\Http\Controllers\BossController::class,'index'])->name('admin_boss.index');
    $router->get('/create',[Modules\Admin\Http\Controllers\BossController::class,'create'])->name('admin_boss.create');
    $router->post('/store',[Modules\Admin\Http\Controllers\BossController::class,'create'])->name('admin_boss.create');
    $router->get('/edit',[Modules\Admin\Http\Controllers\BossController::class,'edit'])->name('admin_boss.edit');
    $router->post('/store',[Modules\Admin\Http\Controllers\BossController::class,'update'])->name('admin_boss.update');
});
