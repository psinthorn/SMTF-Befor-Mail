<?php

namespace App\Controllers\Auth;

use App\Controllers\Controller;
use App\Models\TransferReservation;
use Respect\Validation\Validator as v;

use App\Models\Transfer;

//use App\Auth\Auth;
use Slim\Views\Twig as View;


class TransferController extends Controller
{
    //--- Transfers Lists public Page ---  
    public function transfersRoutes($request, $response)
            {

                $transfers = Transfer::orderBy('id', 'desc')->get();

               // foreach($transfers as $transfer){
               //  }
                //var_dump($transfers);
                //var_dump($this->csrf->getTokenNameKey());
                return $this->view->render($response, 'public/transfersroutes.twig.php', compact('transfers'));

            }

     //--- Transfer Lists for Admin Post ---         
    public function getTransferRoute($request, $response)
            {

                $transfers = Transfer::orderBy('id', 'desc')->get();

               // foreach($transfers as $transfer){
               //  }
                //var_dump($transfers);
                //var_dump($this->csrf->getTokenNameKey());
                return $this->view->render($response, 'auth/transfers/route.twig.php', compact('transfers'));

            }

    public function transferRouteDetail($request, $response)


    {

        $id = $request->getAttribute('id');

        $transfers = Transfer::find($id);

        // foreach($transfers as $transfer){
        //  }
        //var_dump($transfers);
        //var_dump($this->csrf->getTokenNameKey());
        return $this->view->render($response, 'auth/transfers/routeedit.twig.php', compact('transfers'));

    }


    public function postTransferRoute($request, $response)
            {

                $validation = $this->validator->validate($request, [

                        'pickup_from' => v::noWhitespace()->notEmpty(),
                        'pickup_to' => v::noWhitespace()->notEmpty(),
                        'sedan_rate' => v::noWhitespace()->notEmpty(),
                        'suv_rate' => v::noWhitespace()->notEmpty(),
                        'minibus_rate' => v::noWhitespace()->notEmpty()
                ]);

                if($validation->failed()){

                    return $response->withRedirect($this->router->pathFor('transfer.route'));


                }

                $route =  Transfer::create([

                    'pickup_from' => $request->getParam('pickup_from'),
                    'pickup_to' => $request->getParam('pickup_to'),
                    'sedan_rate' => $request->getParam('sedan_rate'),
                    'suv_rate' => $request->getParam('suv_rate'),
                    'minibus_rate' => $request->getParam('minibus_rate')

                ]);

                //Flash message service
                $this->flash->addMessage('info', 'New transfer route been added :)');
                //Signin when Signup 
                //$this->auth->attempt($user->email, $request->getParam('password'));

                //var_dump($request->getParams());
                return $response->withRedirect($this->router->pathFor('transfer.route'));

            }    


            public function updateTransferRoute($request, $response)
            {

//                $validation = $this->validator->validate($request, [
//
//                        'pickup_from' => v::noWhitespace()->notEmpty(),
//                        'pickup_to' => v::noWhitespace()->notEmpty(),
//                        'sedan_rate' => v::noWhitespace()->notEmpty(),
//                        'suv_rate' => v::noWhitespace()->notEmpty(),
//                        'minibus_rate' => v::noWhiteSpace()->notEmpty()
//                ]);
//
//                if($validation->failed()){
//
//                    return $response->withRedirect($this->router->pathFor('transfer.route'));
//
//
//                }

                $id = $request->getAttribute('id');
                //var_dump($id);


                $route =  Transfer::where('id', $id)->update([

                    'pickup_from' => $request->getParam('pickup_from'),
                    'pickup_to' => $request->getParam('pickup_to'),
                    'sedan_rate' => $request->getParam('sedan_rate'),
                    'suv_rate' => $request->getParam('suv_rate'),
                    'minibus_rate' => $request->getParam('minibus_rate')

                ]);

                //Flash message service
                $this->flash->addMessage('info', 'Transfer route been updated :)');
                //Signin when Signup 
                //$this->auth->attempt($user->email, $request->getParam('password'));

                //var_dump($request->getParams());
                return $response->withRedirect($this->router->pathFor('transfer.route'));

            }   


            public function deleteTransferRoute($request, $response, $args)
            {
               //$id = $this->request->getParam('id');

           
                $id = $request->getAttribute('id');
                //$id = $this->$request->getParsedBody()['id']; 
                //echo $id;
                $deleteroute = Transfer::destroy($id);

                $transfers = Transfer::orderBy('id', 'desc')->get();


                $this->flash->addMessage('info', 'Transfer route been deleted.');
               // foreach($transfers as $transfer){
               //  }
                //var_dump($id);
                //var_dump($this->csrf->getTokenNameKey());
                return $this->view->render($response, 'auth/transfers/route.twig.php',compact('transfers'));

            }


    public function getTransferForm($request, $response)
    {

        $id = $request->getAttribute('id');
        //$rate = $args('rate');
        $route = Transfer::find($id);

        //var_dump($route);


        //$this->flash->addMessage('welcome', 'Welcome to Samui Island :)');
        //echo phpinfo();
        return $this->view->render($response, 'public/transfer-reservation.twig.php', compact('route'));

    }


    public function postTransferForm($request, $response)
    {






        //$id = $request->getAttribute('id');
        //$rate = $args('rate');
        $transferReserve =  TransferReservation::create([

            'fName' => $request->getParam('fName'),
            'lName' => $request->getParam('lName'),
            'email' => $request->getParam('email'),
            'mobile' => $request->getParam('mobile'),
            'flight' => $request->getParam('flight'),
            'hotelName' => $request->getParam('hotelName'),
            'noPassanger' => $request->getParam('noPassanger'),
            'transferId' => $request->getParam('transferId'),
            'transferRate' => $request->getParam('transferRate'),
            'tourId' => $request->getParam('tourId'),
            'tourRate' => $request->getParam('transferId'),
            'additionalRequest' => $request->getParam('additionalRequest')


        ]);

        //var_dump($transferReserve);


        //$this->flash->addMessage('welcome', 'Welcome to Samui Island :)');

        return $this->view->render($response, 'public/thankyou.twig.php');

    }


    public function transferBookReport($request, $response)
    {

        $bookings = TransferReservation::orderBy('id', 'desc')->get();


        //var_dump($bookings);
        //var_dump($this->csrf->getTokenNameKey());
        return $this->view->render($response, 'auth/transfers/booking-report.php', compact('bookings'));

    }

    public function transferBookDetail($request, $response)
    {

        $id = $request->getAttribute('id');

        $booking = TransferReservation::find($id);

        //var_dump($bookings);
        //var_dump($this->csrf->getTokenNameKey());
        return $this->view->render($response, 'auth/transfers/booking-detail.php', compact('booking'));

    }



}