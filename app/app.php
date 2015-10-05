<?php

     require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounterFunction.php";

    $app = new Silex\Application;
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app){
        return $app['twig']->render('RepeatCounter_Form.html.twig');

    });

    $app->post("/result", function() use($app){
        $inputed = new RepeatCounter;
        $new_inputed = $inputed->countRepeats($_POST['word'],$_POST['phrase']);
        return $app['twig']->render('result.html.twig', array('results'=> $new_inputed));
    });

    return $app;




 ?>
