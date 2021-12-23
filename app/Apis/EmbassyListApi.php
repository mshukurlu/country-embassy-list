<?php


namespace App\Apis;


class EmbassyListApi extends ApiAbstract
{
    public function __construct($slug)
    {
        parent::__construct();
        $this->setEndPoint('diplomatic-missions/host-country/'.$slug);
        $this->service_url = $this->getEndPoint();
    }

    public function getResponse()
    {
       return $this->callApi();
    }
}
