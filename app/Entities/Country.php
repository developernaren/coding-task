<?php
/**
 * Created by PhpStorm.
 * User: narendra
 * Date: 3/9/16
 * Time: 6:30 PM
 */

namespace App\Entities;


use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

    protected $fillable = ['id', 'name', 'code'];

    function scopeWithCode( $q, $code)
    {
        return $q->whereCode( $code );

    }
}