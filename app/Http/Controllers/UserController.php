<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function loadUserView($name){
        return view('users', ['name'=>$name]);
    }
}
