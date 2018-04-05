<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    //let create an index function bellow 
    public function index(){
       	
       	  return view('front.screen');
       }

         public function decor() {

         	return view('front.decor');
               }
          public function color(){

          	return view('front.color');
          }     
          public function alert(){
               return view('front.alert');
          }
}
