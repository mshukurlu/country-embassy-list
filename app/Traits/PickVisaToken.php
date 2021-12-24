<?php
namespace App\Traits;
trait PickVisaToken{
    public function getPickVisaToken()
    {
        return config('apis.pickvisa.token');
    }
}
