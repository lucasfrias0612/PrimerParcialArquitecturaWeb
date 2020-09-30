<?php
include_once 'functions.php';

class ViewCityController extends Controller
{

    public function control($id)
    {
        $city=$this->repository->findOfId($id);
        if($city == null){
            echoResponse(200, ["message"=>'No existe la cuidad solicitada']);
        }else{
            echoResponse(200, $city);
        }

    }
}