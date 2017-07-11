<?php

namespace App\Controllers\Auth;

use App\Controllers\Controller;
use Respect\Validation\Validator as v;

use App\Models\User;
//use App\Auth\Auth;
use Slim\Views\Twig as View;

class AuthController extends Controller
{

     public function SignOut($request, $response)
            {
               $this->auth->signout();

               $this->flash->addMessage('info', 'Your has been signed out :)');
               return $response->withRedirect($this->router->pathFor('home'));

            }

    public function getSignIn($request, $response)
            {

                //var_dump($this->csrf->getTokenNameKey());
                return $this->view->render($response, 'auth/signin.twig.php');

            }


    public function postSignIn($request, $response)
            {

              
                   $validation = $this->validator->validate($request, [

                       // 'name' => v::notEmpty()->alpha(),
                        'email' => v::noWhitespace()->notEmpty()->email(),
                        'password' => v::noWhitespace()->notEmpty(),
                    ]);

                    if($validation->failed()){

                    return $response->withRedirect($this->router->pathFor('auth.signin'));


                    }

                    $auth = $this->auth->attempt(

                            $request->getParam('email'),
                            $request->getParam('password')

                    );

                    if(!$auth)
                    {
                        $this->flash->addMessage('error', 'Singin failed please check ID ir Password');    
                        return $response->withRedirect($this->router->pathFor('auth.signin'));

                    }

                        return $response->withRedirect($this->router->pathFor('home'));
            }    








     public function getSignUp($request, $response)
            {

                //var_dump($this->csrf->getTokenNameKey());
                return $this->view->render($response, 'auth/signup.twig.php');

            }


    public function postSignUp($request, $response)
            {

                $validation = $this->validator->validate($request, [

                        'name' => v::notEmpty()->alpha(),
                        'email' => v::noWhitespace()->notEmpty()->email()->EmailAvailable(),
                        'password' => v::noWhitespace()->notEmpty(),
                ]);

                if($validation->failed()){

                    return $response->withRedirect($this->router->pathFor('auth.signup'));


                }

                $user =  User::create([

                    'fname' => $request->getParam('name'),
                    'email' => $request->getParam('email'),
                    'password' => password_hash($request->getParam('password'),PASSWORD_DEFAULT),

                ]);

                //Flash message service
                $this->flash->addMessage('info', 'You have been signed up :)');
                //Signin when Signup 
                $this->auth->attempt($user->email, $request->getParam('password'));

                //var_dump($request->getParams());
                return $response->withRedirect($this->router->pathFor('home'));

            }    

}