<?php


$container = $app->getContainer();

use App\Controllers\UsersController;
use App\Controllers\TransfersController;


//---- Users API List Page -------------------------------------------------------------------------------------------------------------------


$app->get('/usersapi', UsersController::class . ':usersapi');

//---- End Users API List Page -------------------------------------------------------------------------------------------------------------------


//---- Transfsers API List Page -------------------------------------------------------------------------------------------------------------------

$app->get('/transfersapi', TransfersController::class . ':transfersapi');

//---- End Transfsers API List Page -------------------------------------------------------------------------------------------------------------------
