<?php


namespace App\Apis;


abstract class ApiAbstract
{
    private $apiUrl,$endPoint;

    public function __construct()
    {
        $this->apiUrl = config('apis.pickvisa.service_url');
    }

    protected function setEndPoint($endPoint)
    {
        $this->endPoint = $this->apiUrl.$endPoint;
    }

    protected function getEndPoint()
    {
        return $this->endPoint;
    }

    abstract public function getResponse();
}
