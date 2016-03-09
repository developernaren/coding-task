<?php

namespace App\Http\Controllers;

use App\Repos\Interfaces\Country;
use App\Repos\Interfaces\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{

    private $user;
    private $country;

    function __construct( User $user, Country $country )
    {

        $this->user = $user;
        $this->country = $country;

    }

    function create() {

        $countries = $this->country->all();
        $contactModes = [
            'email' => 'Email',
            'phone' => 'Phone',
            'none' => 'None'
        ];

        return view('users.add', compact('countries', 'contactModes') );
    }


    function store( Requests\AddUserForm $request ) {

        $this->user->setName( $request->name );
        $this->user->setAddress( $request->address );
        $this->user->setContactMode( $request->contact_mode );
        $this->user->setCountry( $request->country );
        $this->user->setDob( $request->dob );
        $this->user->setEmail( $request->email );
        $this->user->setGender( $request->gender );
        $this->user->setPhone( $request->phone );
        $this->user->save();



    }
}
