<?php

namespace App\Http\Controllers\Admin;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Auth;
use App\Admin;

class DashboardController extends Controller
{
    	//admin profile
	public function profile() {
		$user_id = Auth::user()->id;
		$admin = Admin::find($user_id);
		return view('admin.profile.index', compact('admin'));
	}

	  public function profile_up(Request $request)
  {
  	  $admin_id =Auth::user()->id;
      $admin =Admin::find($admin_id);

      $validator = Validator::make($request->all(), [
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required','email', 'max:255',
				Rule::unique('admins', 'email')->ignore($admin->id)],
   

      ]);

      if ($validator->fails()) {
        return response()->json(['success' => false, 'status' => 'danger', 'message' => $validator->errors()]);
      }
  
      $admin->name =$request->name;
      $admin->email =$request->email;
      $admin->save();
      return response()->json(['success' => true, 'status' => 'success', 'message' => 'Profile Updated.', 'goto' => route('admin.profile')]);
  }

  public function pass_change(Request $request)
  {
      $validator = Validator::make($request->all(), [
       'password' => ['required', 'string', 'min:6', 'confirmed'],

      ]);

      if ($validator->fails()) {
        return response()->json(['success' => false, 'status' => 'danger', 'message' => $validator->errors()]);
      }

      $admin_id =Auth::user()->id;
      $admin =Admin::find($admin_id);
      $admin->password = Hash::make($request->password);
      $admin->save();
      return response()->json(['success' => true, 'status' => 'success', 'message' => 'Password Updated.', 'goto' => route('admin.profile')]);
  }

}
