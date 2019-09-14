<?php

namespace App\Http\Controllers\Admin;

use App\Coffee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CoffeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coffees = Coffee::all();
        return view('admin.coffee.index', compact('coffees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.coffee.form');
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
                'title' => ['required', 'string'],
                'intensity' => ['required', 'integer'],
                'total_intensity' =>['required', 'integer'],
            ]);
        }

        $coffee =new Coffee;
        $coffee->title =$request->title;
        $coffee->slug =str_slug($request->title);
        $coffee->intensity =$request->intensity;
        $coffee->total_intensity =$request->total_intensity;
        $coffee->description =$request->description;
        $coffee->status =$request->status;
        $coffee->save();
        return response()->json(['success' => true, 'status' => 'success', 'message' => 'Coffee Add Successfully.', 'goto' => route('admin.coffee.index')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
