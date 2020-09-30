<?php

abstract class Controller
{
    protected $repository;

    function __construct(){
        $this->repository = new InMemCityRepository();
    }
}