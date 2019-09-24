<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Messeg;
use App\User;
use Auth;

class MessegeController extends Controller
{
    public function index()
    {
    	$email =Auth::user()->email;

    	$send =Messeg::where('messeg_by',$email)->get();
    	$receive =Messeg::where('messeg_by','!=',$email)->get();
    	return view('admin.messege.index',compact('send','receive'));
    }

    public function create()
    {
    	$user =User::all()->pluck('email', 'id');
    	return view('admin.messege.send',compact('user'));
    }

    public function store(Request $request)
    {
    	if ($request->ajax()) {
            $validator = $request->validate([
                'user_id' => ['required', 'integer'],
                'body' => ['required', 'string'],
            ]);
            $message =new Messeg;
            $message->user_id=$request->user_id;
            $message->messeg_by =Auth::user()->email;
            $message->role="Admin";
            $message->body =$request->body;
            $message->status="send";
            $message->date=date('Y-m-d');
            $message->save();
            return response()->json(['success' => true, 'status' => 'success', 'message' => ' Messege Send Successfully.', 'goto' => route('admin.messege.index')]);
        }
    }
}
