<?php

use Slim\App;

return function (App $app) {
    $app->get('/', \App\Controller\HomeController::class);
    $app->get('/home', \App\Controller\HomeController::class);
    $app->any('{route:.*}', \App\Controller\NotFoundController::class);
};