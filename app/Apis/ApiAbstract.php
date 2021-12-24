<?php


namespace App\Apis;


use App\Traits\PickVisaToken;
use Illuminate\Support\Facades\Http;

abstract class ApiAbstract implements ApiInterface
{
    use PickVisaToken;
    private $apiUrl,$endPoint;
    protected $service_url;
    public function __construct()
    {
        $this->apiUrl = config('apis.pickvisa.service_url');
    }

    public function setEndPoint($endPoint)
    {
        $this->endPoint = $this->apiUrl.$endPoint;
    }

    public function getEndPoint()
    {
        return $this->endPoint;
    }

    protected function callApi(){
        // if you need to add extra logics for further APIs
        // you can override this method
        $callApi = Http::withHeaders(
            [
                'Authorization'=>
                    $this->getPickVisaToken()
            ]
        )
            ->get($this->service_url);

        return $callApi;
    }

    abstract public function getResponse();
}
