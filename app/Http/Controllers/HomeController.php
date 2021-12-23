<?php

namespace App\Http\Controllers;

use App\Apis\CountryListApi;
use App\Services\CountryService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $countries = (new CountryService)->all();

        return view('home/index',compact('countries'));
    }
}
