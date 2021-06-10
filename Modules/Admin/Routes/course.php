<?php
$router->group(['prefix' => 'course'], function ($router) {
    $router->get('/',[Modules\Admin\Http\Controllers\CourseController::class,'index'])->name('admin_course.index');
    $router->get('/create',[Modules\Admin\Http\Controllers\CourseController::class,'create'])->name('admin_course.create');
    $router->post('/store',[Modules\Admin\Http\Controllers\CourseController::class,'create'])->name('admin_course.create');
    $router->get('/edit',[Modules\Admin\Http\Controllers\CourseController::class,'edit'])->name('admin_course.edit');
    $router->post('/store',[Modules\Admin\Http\Controllers\CourseController::class,'update'])->name('admin_course.update');
});
