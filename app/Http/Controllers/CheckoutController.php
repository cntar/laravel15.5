<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;


class CheckoutController extends Controller
{
    //create function for checking if user is authenticated
     public function step1()
     {

     	if(Auth::check()) {

     		return view('front.shipping-info');
     	}
     	 return redirect('login');
     }

     public function shipping()
     {
       return view('front.shipping-info');
     }
     //adding payment method 
      public function payment()
      {
        return view('front.payment');
      }
       public function storePayment(Request $request){
//          this is going to insert my data direct to the database
//          return view('front.storage');

//         the following bellow is the client libralies (Php API)

//         Set your secret key: remember to change this to your live secret key in production
//         See your keys here: https://dashboard.stripe.com/account/apikeys


       Stripe::setApiKey("sk_test_QdU5dfoJ9P82SJuWXulAy7VQ");
       
       //WE INTRODUCE THE CUSTOMER BELOW FOR CHARGING PURPOSE BY USING STRIPE TOKEN
     try { $customer = Customer::create(array(
         'email' => $request->stripeEmail,
         'source' =>$request->stripeToken


       ));

       //FINALY WE ACTUALLY GET TO CHARGE MONEY

        $charge = Charge::create(array(
        'customer' => $customer->id,
         //stripe is always charge an amount interms of cents,simply because stripe server will only  understands an amount interms of CENTS
         'amount' => Cart::subtotal()*100, //amount in cents
         'currency' => 'usd'

       ));

       // return 'CHARGE IS SUCCESSFULLY,WAIT FOR YOUR PRODUCTS';
         return view('front.alert');

     }
         catch (\Exception $ex) {
            return $ex->getMessage();
         }


        // dd($request->all());

       }
     }

