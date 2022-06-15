<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl4DResult;
use App\Models\tblTotoSite;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class Result4DController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->filled('dd')){
            $date=$request->dd;
            $mydate=Carbon::createFromFormat('Y-m-d', $date);
            $day=Carbon::createFromFormat('Y-m-d', $date)->format('l');
            
        }
       else{
        $date=Carbon::now()->format('Y-m-d');
        $day=Carbon::now()->format('l');
    }
    $nn=Carbon::now()->format('Y-m-d');
    $now=Carbon::now();
   
    $start=Carbon::createFromTimeString('09:00:00')->format('H:i:s');
    $end = Carbon::createFromTimeString('09:00:00')->addDay()->format('Y-m-d H:i:s');
    //return $day=='Saturday'||'Sunday'||'Monday' ? 'true':'false';
    $morning = Carbon::create($date)->createFromTimeString('09:00:00')->addDay()->format(('Y-m-d H:i:s'));
    //return $nn;

        $results = tbl4DResult::where('dd','<=',$date)->orderBy('dd','desc')->with('site')->get()->unique('type');    
       // return  $results[0]->site->country; 
                 //return $totos;           
        $totoSites=tblTotoSite::latest()->paginate(9);
        return view('backend.4d_result.index',compact('results','date','totoSites','day','start','now','nn','end'))
            ->with('i', (request()->input('page', 1) - 1) * 9);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.4d_result.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //return $request->all();
         $result=new tbl4DResult();
         $result->create($request->all());
         return back();
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
    public function update(Request $request, tbl4DResult $result)
    {
       
         $result->update($request->all());
         return back();

 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tbl4DResult::find($id)->delete();
       
        return back()
               ->with('success','Record has been delete successfully');
    }
}
