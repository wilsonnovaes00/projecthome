<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;



$app = new Silex\Application();



$app['debug'] = true;




$app->get('/', function() use ($app) {

return $app['twig']->render('layout.twig', array() );



});




$app->get('/contato', function() use($app){

return new Response('Página de Contato', 201);

});




$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));


$app->run();

