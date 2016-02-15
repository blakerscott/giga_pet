<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/pet.php";

    session_start();
    if (empty($_SESSION['list_of_cars'])) {
        $_SESSION['list_of_cars'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));


    $app->get("/", function() use ($app) {
      return $app['twig']->render('home.html.twig');
    });

    return $app;
?>
