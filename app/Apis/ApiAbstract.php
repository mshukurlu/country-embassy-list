<?php


namespace App\Apis;


use Illuminate\Support\Facades\Http;

abstract class ApiAbstract implements ApiInterface
{
    private $apiUrl,$endPoint;
    protected $service_url;
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

    protected function callApi(){
        //if you need to add extra logics for further APIs you can extand this method
        $callApi = Http::withHeaders(
            [
                'Authorization'=>config('apis.pickvisa.token')
            ]
        )
            ->get($this->service_url);

        return $callApi;
    }

    abstract public function getResponse();
}
