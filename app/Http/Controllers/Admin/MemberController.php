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
    $delivari =CoffeeOrder::where('delivary_date','>=',date('Y-m-d'))->where('status','!=','confirm')->get();
     return view('admin.member.nextdelivari',compact('delivari'));
   }

   public function delivari_order(Request $request,$id)
   {
    if ($request->ajax()) {
      $delivari =CoffeeOrder::findOrfail($id);
      $delivari->status='delivari';
      $delivari->save();

      $next =new CoffeeOrder;
      $next->user_id =$delivari->user_id;
      $next->pkg_id =$delivari->pkg_id;
      $next->pkg_sub_id =$delivari->pkg_sub_id;
      $next->price =$delivari->price;
      $next->total =$delivari->total;
      $next->order_date =$delivari->order_date;
      $next->delivary_date = date("Y-m-d", mktime(0, 0, 0, date("m"), date("d")+14, date("Y")));
      $next->plan_id =$delivari->plan_id;
      $next->status ='order';
      $next->save();
        return response()->json(['success' => true, 'status' => 'success', 'message' => 'Delivari Confirm.', 'goto' => route('admin.nextdelivery')]);
    }
   }

   public function delivari_history(Request $request)
   {
    $delivari =CoffeeOrder::where('status','confirm')->get();
     return view('admin.member.deli_history',compact('delivari'));
   }
}
