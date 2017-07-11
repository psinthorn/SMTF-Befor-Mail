<?php


use App\Middleware\AuthMiddleware;
use App\Middleware\GuestMiddleware;



$app->group('', function () {

    $this-> get('/show-tours-packages', 'TourController:showToursPackages')->setName('tours.packages');

    //--- Tour Reservation
    $this-> get('/tour-reservation-form/{id}', 'TourController:getTourForm')->setName('tour.reservation');
    $this-> post('/tour-reservation-now', 'TourController:postTourForm');

})->add(new GuestMiddleware($container));


$app->group('', function () {


    $this->get('/manage-tour-package', 'TourController:manageTourPackage' )->setName('tour.manage');
    $this->get('/show-tour-detail/{id}', 'TourController:showTourDetail' )->setName('tour.detail');

    $this->post('/tour-update/{id}', 'TourController:tourUpdate' )->setName('tour.update');
    $this->get('/tour-add', 'TourController:addTourForm')->setName('tour.add');
    $this->post('/tour-add', 'TourController:postTourPackage');
    $this->delete('/tour-delete/{id}', 'TourController:tourDelete')->setName('tour.delete');


})->add(new AuthMiddleware($container));
        

        


    