<?php


namespace App\Apis;


class EmbassyListApi extends ApiAbstract
{
    public function __construct($country_slug)
    {
        parent::__construct();
        $this->setEndPoint('diplomatic-missions/host-country/'.$country_slug);
        $this->service_url = $this->getEndPoint();
    }

    public function getResponse()
    {
       return $this->callApi();
    }
}
