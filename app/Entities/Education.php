<?php
/**
 * Created by PhpStorm.
 * User: narendra
 * Date: 3/8/16
 * Time: 9:03 PM
 */

namespace App\Entities;


use Illuminate\Database\Eloquent\Model;

class Education extends Model
{

    protected $fillable = ['id', 'name','institution','passed_year'];


    function scopeWithName( $q, $name ) {

        return $q->whereName( $name );
    }


    function scopeWithNames( $q, $nameArr ) {

        return $q->whereIn( 'name', $nameArr );
    }

}