<?php
/**
 * Created by PhpStorm.
 * User: narendra
 * Date: 3/9/16
 * Time: 6:27 PM
 */

namespace App\Repos\Eloquent;


use App\Repos\Interfaces\Country;
use App\Entities\Country as MCountry;

class CountryRepository implements Country
{

    private $country;
    private $name;
    private $code;

    function __construct( $attributes = NULL )
    {

        $this->country = !empty( $attributes ) ?  new MCountry( $attributes ) : new MCountry();

    }

    private function init() {

        $this->name = $this->country->name;
        $this->code = $this->country->code;
    }

    function name()
    {
        return $this->name;
    }

    function code()
    {

        return $this->code;
    }

    function all()
    {
        //created a collection object
        $countryArr = collect();
        $this->country->all()->each( function ( $country ) use ( &$countryArr){

            $thisCountry =  new self( $country->toArray() ) ;
            $thisCountry->init();
            $countryArr->push( $thisCountry);

          //  print_r( $country );

        });
        return $countryArr;


    }


}