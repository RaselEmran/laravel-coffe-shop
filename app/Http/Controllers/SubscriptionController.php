<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;
use Session;
use Carbon\Carbon;
use App\User;
use Auth;

class SubscriptionController extends Controller
{
    public function create(Request $request)
    {

        // if($request->user()->subscribedToPlan($plan->stripe_plan, 'main')) {
        //     return redirect()->route('home')->with('success', 'You have already subscribed the plan');
        // }
        $plan = Plan::findOrFail($request->get('plan'));
        $user=session::get('user');
        
        $user->newSubscription('main', $plan->stripe_plan)
            // ->trialUntil(Carbon::now())
            ->create($request->stripeToken);

        $user->charge(4900, ['currency' => 'dkk', 'description' => 'A charge for something']);
        
        // return redirect()->route('home')->with('success', 'Your plan subscribed successfully');
        Session::flash ( 'success-message', 'Payment done successfully !' );
        return redirect()->back ();
      
        Session::flash ( 'fail-message', "Error! Please Try again." );
        return redirect()->back ();
    
    }

    public function user_subcription(Request $request)
    {
        $id =auth()->user()->id;
        $user =User::with('subscrip')->findOrFail($id);
        return view('member.subscription',compact('user'));
    }

    public function change_subcription(Request $request,$id)
    {
        $id =auth()->user()->id;
        $user =User::with('subscrip')->findOrFail($id);
        $plans =Plan::all()->except($user->subscrip->plan->id);
        return view('member.change_subscription',compact('id','user','plans'));
    }

    public function post_plan(Request $request)
    {
        $user_id =$request->user_id;
        $user=User::find($user_id);
        $user->subscription('main')
        ->swap($request->plan_id);

        return redirect()->back()->with('msg','Subscription Plan Change Successfully');
    }

    public function cancel(Request $request,$id)
    {
        $user =User::find($id);
        $user->subscription('main')->cancelNow();

        return response()->json(['success' => true, 'status' => 'success', 'message' => 'Plan Cancel.', 'goto' => route('user.subscription')]);
    }
}
