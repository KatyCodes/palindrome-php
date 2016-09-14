<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Palindrome.php";

    $app = new Silex\Application();
    $app['debug'] = true;
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('home.html.twig');
    });

    $app->post('/palindrome', function() use ($app){
        $input = $_POST['input'];
        $palindrome = new Palindrome;
        $result = $palindrome->checkPalindrome($input);
        return $app['twig']->render('result.html.twig', array('result'=> $result));
    });

    return $app;
  ?>
