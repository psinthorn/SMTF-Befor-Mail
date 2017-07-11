<?php

namespace App\Middleware;

class AuthMiddleware extends Middleware
{

    public function __invoke($request, $response, $next)
    {


        if(!$this->container->auth->check())
        {

            $this->container->flash->addMessage('error', 'Please Sign In');
            return $response->withRedirect($this->container->router->pathFor('auth.signin'));

        }
        
        //$_SESSION['old'] = $request->getParams();

        $response = $next($request, $response);
        return $response;

    }

}