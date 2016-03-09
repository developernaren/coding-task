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

    /**
     * CountryRepository constructor.
     * @param null $attributes
     */

    function __construct( $attributes = NULL )
    {

        $this->country = !empty( $attributes ) ?  new MCountry( $attributes ) : new MCountry();

    }

    /**
     * Sets the attributes of the object
     */
    private function init() {

        $this->name = $this->country->name;
        $this->code = $this->country->code;
    }

    /**
     * Return name of the country
     * @return mixed
     */

    function name()
    {
        return $this->name;
    }

    /**
     * Return code of the country
     * @return mixed
     */
    function code()
    {

        return $this->code;
    }

    /**
     * Return all the countries list
     * @return \Illuminate\Support\Collection
     */
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