<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\CoffeeOrder;
use Session;
use Stripe;
use Validator;
use Auth;

class LandingController extends Controller
{
    public function index()
    {
    	return view('layouts.landing');
    }

    public function payment(Request $request)
    {

      $validator = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6'],
        ]);


    	$user =new User;
    	$user->first_name =$request->first_name;
    	$user->last_name =$request->last_name;
    	$user->email =$request->email;
    	$user->phone =$request->phone;
    	$user->post_code =$request->post_code;
    	$user->by =$request->by;
    	$user->password =Hash::make($request->password);
    	$user->save();
        session::put('user',$user);

    	$coffee_order = new CoffeeOrder;
    	$coffee_order->user_id =$user->id;
    	$coffee_order->pkg_id =$request->pkg_id;
    	$coffee_order->pkg_sub_id =$request->pkg_sub_id;
    	$coffee_order->price =$request->price;
    	$coffee_order->total =$request->total;
    	$coffee_order->order_date =date('Y-m-d');
    	$coffee_order->delivary_date =$request->delivary_date;
        $coffee_order->plan_id =$request->plan_id;
    	$coffee_order->save();
    	return response()->json(['success' => true, 'status' => 'success', 'message' => 'Order Complete Redirect to Stripe','goto'=>route('plans.chose',['plan'=>$request->plan_id])]);

    	// return redirect()->route('stripe');
    }

    public function stripe(Request $request)
    {
    	$email =$request->email;
    	return view('stripe',compact('email'));
    }

     public function stripePost(Request $request)
    {
       Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
	 try {


		$product=\Stripe\Charge::create ( array (
				"amount" => 300 * 100,
				"currency" => "dkk",
				"source" => $request->stripeToken, // obtained with Stripe.js
				"description" => "Test payment." 
		) );
		Session::flash ( 'success-message', 'Payment done successfully !' );
		return redirect()->back ();
	  } catch ( \Exception $e ) {
		Session::flash ( 'fail-message', "Error! Please Try again." );
		return redirect()->back ();
	}
    }
}
