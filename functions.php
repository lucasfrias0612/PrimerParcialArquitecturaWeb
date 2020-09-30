<?php

function echoResponse($status_code, $response) {
    $app = \Slim\Slim::getInstance();

    //HTTP response code
    $app->status($status_code);

    //Content type
    $app->contentType('application/json');

    //Contenido
    echo json_encode($response);
}