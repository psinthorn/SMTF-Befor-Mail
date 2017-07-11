<?php


use App\Middleware\AuthMiddleware;
use App\Middleware\GuestMiddleware;



$app -> get('/', 'HomeController:index')->setName('home');
// $app -> get('/sendmail', 'HomeController:sendmail')->setName('sendmail');



$app->group('', function () {

    $this-> get('/transfersroutes', 'TransferController:transfersRoutes')->setName('transfers.routes');
    
    $this-> get('/getsignup', 'AuthController:getSignup')->setName('auth.signup');
    $this-> post('/postsignup', 'AuthController:postSignup')->setName('auth.postsignup');

    $this-> get('/signin', 'AuthController:getSignIn')->setName('auth.signin');
    $this-> get('/admin', 'AuthController:getSignIn')->setName('auth.signin');
    $this-> post('/signin', 'AuthController:postSignIn');

    $this-> get('/reservation-form/{id}', 'TransferController:getTransferForm')->setName('transfer.reservation');
    $this-> post('/reservation-now', 'TransferController:postTransferForm');


    //$this-> post('/reservation-now', 'HomeController:postTransferReservation');

})->add(new GuestMiddleware($container));


$app->group('', function () {

    //--- Admin Route Zone ------
    $this-> get('/changepassword', 'PasswordController:getChangePassword')->setName('change.password');
    $this-> post('/changepassword', 'PasswordController:postChangePassword');
    $this -> get('/signout', 'AuthController:SignOut')->setName('auth.signout');

    //--- Transfer View Route
    $this->get('/getroute', 'TransferController:getTransferRoute' )->setName('transfer.route');


    //--- Transfer Add Edit Delete Zone

    $this->post('/getroute', 'TransferController:postTransferRoute' );
    $this->get('/route-detail/{id}', 'TransferController:transferRouteDetail' )->setName('route.detail');
    $this->post('/route-update/{id}', 'TransferController:updateTransferRoute' )->setName('route.update');
    $this->delete('/deleteroute/{id}', 'TransferController:deleteTransferRoute' )->setName('delete.route');



    //-- Report Zone
    $this-> get('/booking-report', 'TransferController:transferBookReport')->setName('transfer.report');
    $this-> get('/booking-report-detail/{id}', 'TransferController:transferBookDetail')->setName('transferbook.detail');





})->add(new AuthMiddleware($container));
        


    