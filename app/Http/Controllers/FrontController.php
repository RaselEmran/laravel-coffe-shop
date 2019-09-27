<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        return view('welcome');
    }

    public function step_one(Request $request)
    {
    
    	return view('step.step_one');
    }

    public function step_two(Request $request)
    {
    	$product =$request->product;
    	$pkg =$request->pkg;
    	$price =$request->price;
    	return view('step.step_two',compact('product','pkg','price'));
    }

    public function step_three(Request $request)
    {
    	$product =$request->product;
    	$pkg =$request->pkg;
    	$price =$request->price;
    	$pkg_sub =$request->pkg_sub;
    	$plan =$request->plan;
    	return view('step.step_three',compact('product','pkg','price','pkg_sub','plan'));
    }
}
