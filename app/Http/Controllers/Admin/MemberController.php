<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\CoffeeOrder;

class MemberController extends Controller
{
   public function index()
   {
   	$members =User::all();
   	return view('admin.member.index',compact('members'));
   }

   public function nextdelivery()
   {
    $delivari =CoffeeOrder::where('delivary_date','>=',date('Y-m-d'))->get();
     return view('admin.member.nextdelivari',compact('delivari'));
   }
}
