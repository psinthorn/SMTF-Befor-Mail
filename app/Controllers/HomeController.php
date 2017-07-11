<?php

namespace App\Controllers;

use App\Models\User;
use Slim\Views\Twig as View;

use App\Models\Transfer;

class HomeController extends Controller
{

    

    public function index($request, $response)
        {
              
              //$this->flash->addMessage('welcome', 'Welcome to Samui Island :)');
                //echo phpinfo();
              return $this->view->render($response, 'home.twig.php');

        }





    //  public function sendmail($request, $response, $args)   
    //  {

    //     $user = new User;
    //     $user -> name = 'Sinthorn';
    //     $user -> email = 'sinthorn@pradutnam.com';

    //     dump($this->container->mail);

        // $this->container->mail-send('emails/welcome.twig', compact('user'), function($message){



        // });


    //  }



    public function postTransferReservation($request, $response)
    {

        $validation = $this->validator->validate($request, [

            'name' => v::noWhitespace()->notEmpty(),
            'email' => v::noWhitespace()->notEmpty(),
            'mobile' => v::noWhitespace()->notEmpty(),
            'transferselected' => v::noWhitespace()->notEmpty()
        ]);

        if($validation->failed()){

            return $response->withRedirect($this->router->pathFor('transfer.route'));


        }

        $route =  Transfer::create([

            'name' => $request->getParam('pickup_from'),
            'email' => $request->getParam('pickup_to'),
            'mobile' => $request->getParam('sedan_rate'),
            'transferselected' => $request->getParam('transferselected'),


        ]);

        //Flash message service
        $this->flash->addMessage('info', 'Thank you for your reserve transfer service with us :)');
        //Signin when Signup
        //$this->auth->attempt($user->email, $request->getParam('password'));

        //var_dump($request->getParams());
        return $response->withRedirect($this->router->pathFor('transfer.route'));

    }

}