<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function addDev(Request $request) {

        $name = $request->input('name');

        $lastName = $request->input('lastName');

        $email = $request->input('email');

        $devExpertise = $request->input('devExpertise');

        

    }


}
