<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function ShowRegister() {
        return view("register");
    }

    public function PostRegister(Request $Req) {
        $first = $Req['firstname'];
        $last = $Req['lastname'];
        return view("welcome",["first"=>$first, "last"=>$last]);
    }
}
