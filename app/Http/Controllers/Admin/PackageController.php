<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Plan;
use App\Coffee;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plans = Plan::all();
        return view('admin.package.index',compact('plans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $coffee =Coffee::all()->pluck('title', 'product_id');
        return view('admin.package.form',compact('coffee'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         if ($request->ajax()) {
            $validator = $request->validate([
                'stripe_plan' => ['required', 'string'],
                'name' => ['required', 'string'],
                'intervals' =>['required', 'string'],
                'interval_count' =>['required', 'integer'],
            ]);
            $coffee =Coffee::where('product_id',$request->stripe_plan)->first();
            \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

            $plan = \Stripe\Plan::create([
                'currency' => 'dkk',
                'interval' => $request->intervals,
                'interval_count'=>$request->interval_count,
                'product' => $request->stripe_plan,
                'nickname' => $request->name,
                'amount' => $coffee->price,
                'billing_scheme'=>'per_unit',
            ]);
           $planm =new Plan;
           $planm->name =$request->name;
           $planm->slug =str_slug($request->name);
           $planm->product =$request->stripe_plan;
           $planm->stripe_plan =$plan->id;
           $planm->cost =$plan->amount;
           $planm->intervals =$request->intervals;
           $planm->interval_count =$request->interval_count;
           $planm->description =$request->description;
           $planm->save();

           return response()->json(['success' => true, 'status' => 'success', 'message' => $request->name.' Plan Add Successfully.', 'goto' => route('admin.package.index')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $coffee =Coffee::all()->pluck('title', 'product_id');
      $model =Plan::findOrfail($id);
      return view('admin.package.form',compact('model','coffee'));
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
      if ($request->ajax()) {
            $validator = $request->validate([
                'name' => ['required', 'string'],
            ]);
            $coffee =Coffee::where('product_id',$request->stripe_plan)->first();
             $planm =Plan::findOrfail($id);
            \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

            \Stripe\Plan::update(
              $planm->stripe_plan,
            ['nickname' => $request->name,]
            );

           $planm->name =$request->name;
           $planm->slug =str_slug($request->name);
           $planm->description =$request->description;
           $planm->save();

           return response()->json(['success' => true, 'status' => 'success', 'message' => $request->name.' Plan Update Successfully.', 'goto' => route('admin.package.index')]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
         if ($request->ajax()) {
            $model =Plan::findOrfail($id);
            \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            $plan = \Stripe\Plan::retrieve($model->stripe_plan);
            $plan->delete();
            if ($plan) {
                $model->delete();
                return response()->json(['success' => true, 'status' => 'success', 'message' => 'Plan Deleted Successfully.', 'goto' => route('admin.package.index')]);

            }
       }
    }
}
