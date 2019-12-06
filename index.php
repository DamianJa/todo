<?php
require_once __DIR__ . '/app/lib/composer/vendor/autoload.php';
require_once __DIR__ . '/app/lib/composer/vendor/plasticbrain/php-flash-messages/src/FlashMessages.php';
require_once 'app/config.php';



$klein = new \Klein\Klein();

$klein->with('/todo/posts', function () use ($klein, $auth)  {

    $klein->respond('POST', '/delete/[:id]', function ($request, $response, $service)  {
        $service->render('app/view/home.php');
    });

    $klein->respond('POST', '/edit/[:id]', function ($request, $response, $service) {
        $service->render('app/view/home.php');
    });

    $klein->respond('POST', '/create', function ($request, $response, $service) {

        $service->render('app/view/home.php');
    });

});

$klein->with('/todo/users', function () use ($klein, $auth) {

    $klein->respond('POST', '/login/?[:email]?[:password ]', function ($request, $response, $service) use ($auth) {

        echo "jetov";
        $login = $auth->login( $request->email, $request->password, true );

        if ( $login['error'] )
        {
            echo "jetov";
        }
        else
        {
            echo "juju";
        }
        $service->render('app/view/home.php');
    });

    $klein->respond('POST', '/logout', function ($request, $response, $service) {
        $service->render('app/view/home.php');
    });

    $klein->respond('POST', '/register', function ($request, $response, $service)  use ($auth) {
        echo "dopice";
        echo $request->email;
        echo $_POST['email'];
        echo $request;
        $register = $auth->register($_POST['email'], $_POST['password'], $_POST['repassword'] );

        if ( $register['error'] ) {
            echo "jetov";
        }
        else {
            echo "juju";
        }
        //$service->render('app/view/home.php');
    });


});



$klein->respond('/todo/', function ($request, $response, $service)   {


    $service->render('app/view/home.php');

});


$klein->dispatch();
