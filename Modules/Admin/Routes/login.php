



<?php
$router->group(['prefix' => 'login'], function ($router) {
    $router->get('/',function (){dd('login');} )->name('admin.login');

});

