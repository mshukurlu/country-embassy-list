<?php


namespace App\Services;


use App\Apis\EmbassyListApi;
use Illuminate\Support\Facades\Cache;

class EmbassyService
{
    public function getEmbassiesByCountrySlug($country_slug)
    {
        return Cache::rememberForever('embassyList_' . $country_slug, function () use ($country_slug) {
            $response = (new EmbassyListApi($country_slug))->getResponse();
            $getObjectsOfResponse = json_decode($response);
            $embassyList = $getObjectsOfResponse->diplomatic_missions;
            return $embassyList;
        });
    }
}
