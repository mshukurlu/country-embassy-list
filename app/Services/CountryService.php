<?php


namespace App\Services;


use App\Apis\CountryListApi;
use App\Models\Country;
use App\Models\Translation;
use Illuminate\Support\Facades\DB;

class CountryService
{
    public function all()
    {
        //If you want cache those items
        $countries = Country::all();

        return $countries;
    }

    public function getAllCountriesByApi()
    {
        $response = (new CountryListApi())
            ->getResponse();

        if ($response->status() == 200) {
            return json_decode($response);
        }
        return false;
    }

    public function updateAllCountriesCallingApi()
    {
        $countries = $this->getAllCountriesByApi();

        if ($countries) {

            DB::transaction(function () use ($countries) {

                Country::truncate();
                Translation::truncate();
                /*
                 * I want to make bulk insertation for avoiding additional sql queries to database, I can do it , but I need to store translations also
                 * Currently I will iterate all countries and add them into database
                 * If I need gaining performance I can create additional service for updating translations for countries
                 */

                foreach ($countries as $country) {


                    $insertedCountry = Country::create(
                        (array)$country
                    );

                    array_walk_recursive($country->translations, function(&$item){
                        if(is_object($item)) $item = (array)$item;
                    });
                    $insertedCountry->translations()
                        ->createMany($country->translations);
                }
            });
            echo "Updated successfully";
        } else {
            echo "Something got wrong";
        }
    }
}
