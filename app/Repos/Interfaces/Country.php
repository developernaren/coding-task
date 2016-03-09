<?php
/**
 * Created by PhpStorm.
 * User: narendra
 * Date: 3/9/16
 * Time: 6:26 PM
 */

namespace App\Repos\Interfaces;


interface Country
{

    /**
     * Get Name of the country
     * @return mixed
     */
    function name();

    /**
     * Get code of a country
     * @return mixed
     */
    function code();

    /**get all the countries
     * @return mixed
     */
    function all();

}