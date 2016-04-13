<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

require_once __DIR__.'/../vendor/autoload.php';

require_once __DIR__.'/boostrap.php';
 
 


 

$app = new Silex\Application();


$app->get('/', function() use ($app) {

return new Response('Home', 201);

});


$app->get('/contato', function() use($app){

return new Response('Página de Contato', 201);

});



$app->run();
 



