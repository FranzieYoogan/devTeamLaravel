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

    public function showDataFullstack() {

        $devsFullstack = DB::table('Dev')
            ->select('devName', 'devLastName','devEmail','devPhoto','devExpertise')->where('devExpertise', 'fullstack')
            ->get();

            if($devsFullstack) {

                return view('fullstack',['devsFullstack' => $devsFullstack]);
            } else {
                
                $none = "none";

 return view('fullstack',['devsFullstack' => $none]);
            }



    }

    public function showDataDataScience() {

        $devsDataScience = DB::table('Dev')
            ->select('devName', 'devLastName','devEmail','devPhoto','devExpertise')->where('devExpertise', 'data_science')
            ->get();

            if($devsDataScience) {

                return view('DataScience',['devsDataScience' => $devsDataScience]);
            } else {
                
                $none = "none";

 return view('datascience',['devsDataScience' => $none]);
            }



    }

    public function showDataSearch(Request $request) {

        $search = $request->input('search');

        if($search) {

            $showDev = DB::table('Dev')
            ->select('devID','devName', 'devLastName','devEmail','devPhoto','devExpertise')->where('devExpertise', $search)
            ->get();

            return view('deletedev',['showDev' => $showDev]);

    
        } else {

            return view('deletedev');
        }


    }


}
