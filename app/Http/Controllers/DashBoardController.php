<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    //provide a function bellow
      function dash(){
       	  return view('admin.layout');
       }
      function forms(){
          return view('admin.format.form');
      }
}
