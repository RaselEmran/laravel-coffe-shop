<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;
use Session;

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
            ->create($request->stripeToken);

        $user->charge(4900, ['currency' => 'dkk', 'description' => 'A charge for something']);
        
        // return redirect()->route('home')->with('success', 'Your plan subscribed successfully');
        Session::flash ( 'success-message', 'Payment done successfully !' );
        return redirect()->back ();
      
        Session::flash ( 'fail-message', "Error! Please Try again." );
        return redirect()->back ();
    
    }
}
