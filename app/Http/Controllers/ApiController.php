<?php

namespace App\Http\Controllers;

use App\Repos\Interfaces\Country;
use App\Repos\Interfaces\Education;
use Illuminate\Http\Request;
use App\Repos\Interfaces\User;

use App\Http\Requests;

class ApiController extends Controller
{
    function getAllCountries(Country $country)
    {

        return $country->all();
    }

    function getAllEducation(Education $education)
    {

        return $education->all();
    }

}
