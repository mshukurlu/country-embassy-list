<?php


namespace App\Apis;


interface ApiInterface
{
    public function getResponse();

    public function  setEndPoint($endPoint);

    public function getEndPoint();
}
