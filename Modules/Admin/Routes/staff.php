<?php
$router->group(['prefix' => 'staff'], function ($router) {
    $router->get('/',[Modules\Admin\Http\Controllers\StaffController::class,'index'])->name('admin_staff.index');
    $router->get('/create',[Modules\Admin\Http\Controllers\StaffController::class,'create'])->name('admin_staff.create');
    $router->post('/store',[Modules\Admin\Http\Controllers\StaffController::class,'create'])->name('admin_staff.create');
    $router->get('/edit',[Modules\Admin\Http\Controllers\StaffController::class,'edit'])->name('admin_staff.edit');
    $router->post('/store',[Modules\Admin\Http\Controllers\StaffController::class,'update'])->name('admin_staff.update');
});
