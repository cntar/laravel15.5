<?php

namespace App\Http\Controllers;

use App\Culture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class CultureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                 // $culture = DB::table('cultures')->get();
                  $cultures =  Culture::all();
                  return view('front.decor')->with(["cultures" => $cultures]);

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //  //retrieve all data from the given keys from category model
        // $cultures =Category::pluck('catName','id');
        // //by using compact function it indicate that the value that are going to be captured it comes with it id
        // return view('format.form',compact('categories'));
         $cultures =  Culture::all();
        return view('front.screen')->with(["cultures" => $cultures]);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //instantiate
        $culture = new Culture;

        $culture->name = $request->input("name");
        $culture->description = $request->input("description");
        $culture->price = $request->input("price");
        $culture->size = $request->input("size");
        //this is how we insert image
        $file = $request->file("image");
        $culture->image = "" . $file->getClientOriginalName();
        $file->move(public_path() . "/images/", $file->getClientOriginalName());
        $culture->catName = $request->input("catName");


        $culture->save();

      


//        $formInput = $request->except('image');
//
//         //validate the request
//        $culture = new Culture();
       // $culture->name = $request->input("name");
//        $culture->description = $request->input("description");
//        $culture->size = $request->input("size");
//        $culture->cat_id = $request->input("cat_id");
//        $image = $request->image;
//        if($image){
//              $imageName = $image->getClientOriginalName();
//              //create folder called images and call it its original imagename
//              $image->move('images',$imageName);
//              $formInput['image'] = $imageName;
//        }

//       Culture::create($formInput)
          return "WELL DONE";
// //       return redirect()->route('/');
        exit();


//
//        $culture = new Culture();
//        $culture->name = $request->input("name");
//        //requesting a file of image
//        if($image)
//        $file = $request->file("image");
//        $culture->image = "/public/uploads/" . $file->getClientOriginalName();
//        $file->move(public_path() . "/uploads/", $file->getClientOriginalName());
//        $culture->save();
//
//        //returning anything you want
//        return redirect()->back()->withFlashSuccess("Saved");


      }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //retrieving data from database
         

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
