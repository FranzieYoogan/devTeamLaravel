<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function addDev(Request $request) {

        $name = $request->input('name');

        $lastName = $request->input('lastName');

        $email = $request->input('email');

        $devExpertise = $request->input('devExpertise');

       


        
        $photo= $request->file('photo')->store('dev');


        if(isset($_POST['submit'])) {

            DB::table('Dev')->insert(
                ['devName' => $name, 'devLastName' => $lastName,'devEmail' => $email,'devExpertise' => $devExpertise, 'devPhoto' => $photo]
                );

             
                
                return view('welcome');

        }

     

    }

    public function showData() {

        $devs = DB::table('Dev')
            ->select('devName', 'devLastName','devEmail','devPhoto','devExpertise')->where('devExpertise', 'front_end')
            ->get();

            return view('frontend',['devs' => $devs]);

  

    }

    public function showDataBackend() {

        $devsBackend = DB::table('Dev')
            ->select('devName', 'devLastName','devEmail','devPhoto','devExpertise')->where('devExpertise', 'back_end')
            ->get();

            return view('backend',['devsBackend' => $devsBackend]);

  

    }


}
