<?php

namespace App\Http\Controllers;

use App\Services\EmbassyService;
use Illuminate\Http\Request;

class EmbassyListController extends Controller
{
    public function showAll($country_slug)
    {
        $embassyList = (new EmbassyService())
            ->getEmbassiesByCountrySlug($country_slug);

        return view('country.list_all_embassies',compact('embassyList'));
    }
}
