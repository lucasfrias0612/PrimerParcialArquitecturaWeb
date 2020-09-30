<?php
declare(strict_types=1);

use Slim\Slim;

include_once 'Slim/Slim.php';
Slim::registerAutoloader();
$app = new Slim();

$app->get('/v1/city/', function (){
    $controller=new ListCitiesController();
    $controller->control();
});

$app->get('/v1/city/:id', function ($id){
    $controller=new ViewCityController();
    $controller->control($id);
});

$app->run();
