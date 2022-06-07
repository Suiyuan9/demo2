<?php

namespace App\Http\Controllers;

use App\Models\Date;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DateTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dates = Date::latest()->paginate(10);  
        
        return view('backend.date.index',compact('dates'))
        ->with('i', (request()->input('page', 1) - 1) * 10);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'dateTime' => 'required|date_format:Y-m-d|unique:dates|max:10',
            
        ]);
        if ($validator->fails()) {
           
            Alert::error('Error Title', $validator->errors()->all());
            return back()->withErrors($validator)            
                         ->withInput();
         }
         $date=new Date();
         $date->create($request->all());
         return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /* public function show($id)
    {
        //
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  /*  public function edit($id)
    {
        //
    }*/

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /* public function update(Request $request, $id)
    {
        //
    }*/

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Date::find($id)->delete();
        return back()
        ->with('success','Record has been delete successfully');
    }
}
