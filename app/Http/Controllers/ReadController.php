<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReadController extends Controller
{
    //performing the function bellow that fit your service
        public function index(){
            return view('index')
            ->with("email", "gwa@ff.bb");
        }

          public function well(){
          	return view ('welcome');
          }



          //this is function is for login view
            public function log(){
            	return view('login');

            }
}
