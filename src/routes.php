<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes
$app->get('/residenciales', 'ResidencialesController:index');
$app->get('/residenciales/{id}', 'ResidencialesController:show');
