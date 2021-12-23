<?php


namespace App\Apis;


use Illuminate\Support\Facades\Http;

class CountryListApi extends ApiAbstract
{
    private $service_url;
    public function __construct()
    {
        parent::__construct();
        $this->setEndPoint('countries/all');
        $this->service_url = $this->getEndPoint();
    }

    public function getResponse()
    {
        return $this->callApi();
    }
}
