<?php
include_once 'functions.php';

class ListCitiesController extends Controller
{
    public function control()
    {
        echoResponse(200, $this->repository->findAll());
    }
}