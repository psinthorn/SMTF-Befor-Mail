<?php

namespace App\Controllers\Auth;

use App\Controllers\Controller;
use Respect\Validation\Validator as v;
use App\Models\User;
//use App\Auth\Auth;
//use Slim\Views\Twig as View;


class PasswordController extends Controller
{

    public function getChangePassword($request, $response)
        {


            return $this->view->render($response, 'auth/password/change.twig.php');
        }
    

     public function PostChangePassword($request, $response)
        {

                $validation = $this->validator->validate($request, [

                    'password_old' => v::noWhitespace()->notEmpty()->matchesPassword($this->auth->user()->password),
                    'password' => v::noWhitespace()->notEmpty()

                ]);


                if($validation->failed())
                {

                    return $response->withRedirect($this->router->pathFor('change.password'));

                }


                $this->auth->user()->setPassword($request->getParam('password'));
                $this->flash->addMessage('info', 'Your password has been changed.');

                return $response->withRedirect($this->router->pathFor('home'));
            
        }
    

}