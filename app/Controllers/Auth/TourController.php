<?php

namespace App\Controllers\Auth;

use App\Controllers\Controller;
use App\Models\TourReservation;
use Respect\Validation\Validator as v;

use App\Models\Tour;
//use App\Auth\Auth;
use Slim\Views\Twig as View;


class TourController extends Controller
{

    //--- Tour Lists public Page ---   
    public function showToursPackages($request, $response)
            {

                $tours = Tour::orderBy('id', 'desc')->get();

                return $this->view->render($response, 'public/tourspackages.twig.php', compact('tours'));

            }

    public function addTourForm($request, $response)
    {

        $tours = Tour::orderBy('id', 'desc')->get();

        return $this->view->render($response, 'auth/tours/touradd.twig.php');

    }



    //--- Tour Lists for Admin Post ---        
    public function manageTourPackage($request, $response)
            {

                $tours = Tour::orderBy('id', 'desc')->get();

                return $this->view->render($response, 'auth/tours/tour.twig.php', compact('tours'));

            }


      //--- Tour Lists public Page ---   
    public function showTourDetail($request, $response, $args)
            {

                $id = $request->getAttribute('id');
                //$tour = Tour::get();

                $tour = Tour::find($id);
                return $this->view->render($response, 'auth/tours/touredit.twig.php', compact('tour'));

               //var_dump($tour);

            }
        


    public function postTourPackage($request, $response)
    {

        $validation = $this->validator->validate($request, [

            'tour_name' => v::notEmpty(),
            'tour_desc' => v::notEmpty(),
            'tour_ldesc' => v::notEmpty(),
            'rate1' => v::noWhitespace()->notEmpty(),
            'rate2' => v::noWhitespace()->notEmpty(),
            'rate3' => v::noWhitespace()->notEmpty()
        ]);

        if ($validation->failed()) {

            return $response->withRedirect($this->router->pathFor('tour.manage'));


        }


        $tour_name = $request->getParam('tour_name');
        $tour_desc = $request->getParam('tour_desc');
        $tour_ldesc = $request->getParam('tour_ldesc');
        $rate1 = $request->getParam('rate1');
        $rate2 = $request->getParam('rate2');
        $rate3 = $request->getParam('rate3');


        $tour = Tour::create([

            'tour_name' => $tour_name,
            'tour_desc' => $tour_desc,
            'tour_ldesc' => $tour_ldesc,
            'rate1' => $rate1,
            'rate2' => $rate2,
            'rate3' => $rate3,

        ]);

            //Flash message service
            $this->flash->addMessage('info', 'Tour package been added :)');

            return $response->withRedirect($this->router->pathFor('tour.manage'));

            // var_dump($id , $tour_name, $rate1, $rate2, $rate3);

    }




            public function tourUpdate($request, $response, $args)
            {


                
//                $validation = $this->validator->validate($request, [
//
//                        'tour_name' => v::noWhitespace()->notEmpty(),
//                        'tour_desc' => v::noWhitespace()->notEmpty(),
//                        'tour_ldesc' => v::noWhitespace()->notEmpty(),
//                        'rate1' => v::noWhitespace()->notEmpty(),
//                        'rate2' => v::noWhitespace()->notEmpty(),
//                        'rate3' => v::noWhitespace()->notEmpty(),
//                ]);
//
//                if($validation->failed()){
//
//                    return $response->withRedirect($this->router->pathFor('tour.manage'));
//
//
//                }

                $id = $request->getAttribute('id');
                $tour_name = $request->getParam('tour_name');
                $tour_desc = $request->getParam('tour_desc');
                $tour_ldesc = $request->getParam('tour_ldesc');
                $rate1 = $request->getParam('rate1');
                $rate2 = $request->getParam('rate2');
                $rate3 = $request->getParam('rate3');



                $tour =  Tour::where('id', $id)->update([

                    'tour_name' => $tour_name,
                    'tour_desc' => $tour_desc,
                    'tour_ldesc' => $tour_ldesc,
                    'rate1' => $rate1,
                    'rate2' => $rate2,
                    'rate3' => $rate3

                ]);

                //Flash message service
                $this->flash->addMessage('info', 'Tour package been updated :)');
                
                return $response->withRedirect($this->router->pathFor('tour.manage'));

               // var_dump($id , $tour_name, $rate1, $rate2, $rate3);

            }   


            public function tourDelete($request, $response, $args)
            {
               //$id = $this->request->getParam('id');

           
                $id = $request->getAttribute('id');
                
                $deleteroute = Tour::destroy($id);

                $transfers = Tour::orderBy('id', 'desc')->get();


                $this->flash->addMessage('info', 'Tour package has been deleted.');

                return $response->withRedirect($this->router->pathFor('tour.manage'));

            }


    public function getTourForm($request, $response)
    {

        $id = $request->getAttribute('id');
        //$rate = $args('rate');
        $tour = Tour::find($id);

        //var_dump($route);


        //$this->flash->addMessage('welcome', 'Welcome to Samui Island :)');
        //echo phpinfo();
        return $this->view->render($response, 'public/tour-reservation.twig.php', compact('tour'));

    }


    public function postTourForm($request, $response)
            {






                //$id = $request->getAttribute('id');
                //$rate = $args('rate');
            $tourReserve =  TourReservation::create([

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
            'tourRate' => $request->getParam('tourRate'),
            'additionalRequest' => $request->getParam('additionalRequest')


            ]);

                //var_dump($transferReserve);

                //$this->flash->addMessage('welcome', 'Welcome to Samui Island :)');
                //echo phpinfo();
            return $this->view->render($response, 'public/thankyou.twig.php');

    }


}