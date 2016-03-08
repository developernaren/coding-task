<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{


    function create() {

        return view('users.add');
    }


    function store( Requests\AddUserForm $request ) {


    }
}
