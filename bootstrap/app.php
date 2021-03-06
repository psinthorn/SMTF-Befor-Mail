<?php 

use Respect\Validation\Validator as v;

session_start();

require __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\App([

    'settings' => [

        'determineRouteBeforeAppMiddleware' => true,
        'displayErrorDetails' => true,
        'addContentLengthHeader' => true,

        'db' => [

            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'apiapp',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => ''

        ],

        'mail' => [

            'host' => getenv('MAIL_HOST'),
            'port' => getenv('MAIL_PORT'),
            'from' => [

                'name' => getenv('MAIL_FROM_NAME'),
                'address' => getenv('MAIL_FROM_ADDRESS')

            ],

            'username' => getenv('MAIL_USERNAME'),
            'password' => getenv('MAIL_PASSWORD'),

        ]

    ],

]);



//------------------------------------------------------------------------------------------

    //Use Eloquent Connect Database  
//------------------------------------------------------------------------------------------
$container = $app->getContainer();

$capsule = new Illuminate\Database\Capsule\Manager;
$capsule->addConnection($container['settings']['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();

$container['db'] = function($container) use ($capsule) {

    return $capsule;

};


//------------------------------------------------------------------------------------------



$container['auth'] = function ($container){

    return new \App\Auth\Auth;

};



//------------------------------------------------------------------------------------------



$container['flash'] = function ($container){

    return new \Slim\Flash\Messages;

};



//------------------------------------------------------------------------------------------



$container['view'] = function ($container) {

    $view = new \Slim\Views\Twig(__DIR__ . '/../resources/views', [

            'cache' => false,
    ]);

    $view -> addExtension(new \Slim\Views\TwigExtension(

            $container->router,
            $container->request->getUri()

    ));




    $view->getEnvironment()->addGlobal('auth', [

            'check' => $container->auth->check(),
            'user' => $container->auth->user(),

        ]);


//------------------------------------------------------------------------------------------


    $view->getEnvironment()->addGlobal('flash', $container->flash);


     return $view;
  
};

//------------------------------------------------------------------------------------------


$container['validator'] = function ($container) {

    return new App\Validation\Validator;

};


//------------------------------------------------------------------------------------------



$container['HomeController'] = function ($container) {

    return new \App\Controllers\HomeController($container);

};


//------------------------------------------------------------------------------------------



$container['AuthController'] = function ($container) {

    return new \App\Controllers\Auth\AuthController($container);

};


//------------------------------------------------------------------------------------------


$container['PasswordController'] = function ($container) {

    return new \App\Controllers\Auth\PasswordController($container);

};


//------------------------------------------------------------------------------------------


$container['TransferController'] = function ($container) {

    return new \App\Controllers\Auth\TransferController($container);

};


//------------------------------------------------------------------------------------------


$container['TourController'] = function ($container) {

    return new \App\Controllers\Auth\TourController($container);

};


//------------------------------------------------------------------------------------------


$container['csrf'] = function ($container) {

    return new \Slim\Csrf\Guard;

};


//------------------------------------------------------------------------------------------


// $container['mail'] = function ($container) {

//     $config = $container->settings['mail'];

//     $transport = (Swift_SmtpTransport::newInstance($config['host'], $config['port']))

//         ->setUsername($config['username'])
//         ->setPassword($config['password']);

//         $swift = $swift_Mailer::newInstance($transport);

//         return new App\Mail\Mailer\Mailer($swift, $container->view);

// };


//------------------------------------------------------------------------------------------



$app->add(new \App\Middleware\ValidationErrorsMiddleware($container));
$app->add(new \App\Middleware\OldInputMiddleware($container));
$app->add(new \App\Middleware\CsrfViewMiddleware($container));

$app->add($container->csrf);

v::with('App\\Validation\\Rules\\');


require __DIR__ . '/../app/routes/routes.php';
require __DIR__ . '/../app/routes/toursroute.php';
    