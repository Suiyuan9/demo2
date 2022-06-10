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
            
        }
       else{
        $date=Carbon::now()->format('Y-m-d');
    }
        $results=tbl4DResult::where('dd',$date)->paginate(9);
        $site=DB::table('tbl_toto_sites')->rightJoin('tbl4_d_results','tbl4_d_results.type','=','tbl_toto_sites.flag')
                                         ->select('tbl_toto_sites.*')->first();
                                         
        //return $site;
        return view('backend.4d_result.index',compact('results','date','site'))
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
        $validator=Validator::make($request->all(),[
        'type'=>'required',
        'n1'=>'required|min:4|max:4|unique:tbl4_d_results',
        'n2'=>'required|min:4|max:4|unique:tbl4_d_results',
        'n3'=>'required|min:4|max:4|unique:tbl4_d_results',
        's1'=>'required|min:4|max:4|unique:tbl4_d_results',
        's2'=>'required|min:4|max:4|unique:tbl4_d_results',
        's3'=>'required|min:4|max:4|unique:tbl4_d_results',
        's4'=>'required|min:4|max:4|unique:tbl4_d_results',
        's5'=>'required|min:4|max:4|unique:tbl4_d_results',
        's6'=>'required|min:4|max:4|unique:tbl4_d_results',
        's7'=>'required|min:4|max:4|unique:tbl4_d_results',
        's8'=>'required|min:4|max:4|unique:tbl4_d_results',
        's9'=>'required|min:4|max:4|unique:tbl4_d_results',
        's10'=>'required|min:4|max:4|unique:tbl4_d_results',
        's11'=>'required|min:4|max:4|unique:tbl4_d_results',
        's12'=>'required|min:4|max:4|unique:tbl4_d_results',
        's13'=>'required|min:4|max:4|unique:tbl4_d_results',
        'c1'=>'required|min:4|max:4|unique:tbl4_d_results',
        'c2'=>'required|min:4|max:4|unique:tbl4_d_results',
        'c3'=>'required|min:4|max:4|unique:tbl4_d_results',
        'c4'=>'required|min:4|max:4|unique:tbl4_d_results',
        'c5'=>'required|min:4|max:4|unique:tbl4_d_results',
        'c6'=>'required|min:4|max:4|unique:tbl4_d_results',
        'c7'=>'required|min:4|max:4|unique:tbl4_d_results',
        'c8'=>'required|min:4|max:4|unique:tbl4_d_results',
        'c9'=>'required|min:4|max:4|unique:tbl4_d_results',
        'c10'=>'required|min:4|max:4|unique:tbl4_d_results',
        'dd'=>'required|date_format:Y-m-d|max:10',

        ]);
        if ($validator->fails()) {
           
            Alert::error('Error Title', $validator->errors()->all());
            return back()->withErrors($validator)            
                         ->withInput();
         }
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
        $validator=Validator::make($request->all(),[
            'type'=>'required',
            'n1'=>'required|min:4|max:4|unique:tbl4_d_results',
            'n2'=>'required|min:4|max:4|unique:tbl4_d_results',
            'n3'=>'required|min:4|max:4|unique:tbl4_d_results',
            's1'=>'required|min:4|max:4|unique:tbl4_d_results',
            's2'=>'required|min:4|max:4|unique:tbl4_d_results',
            's3'=>'required|min:4|max:4|unique:tbl4_d_results',
            's4'=>'required|min:4|max:4|unique:tbl4_d_results',
            's5'=>'required|min:4|max:4|unique:tbl4_d_results',
            's6'=>'required|min:4|max:4|unique:tbl4_d_results',
            's7'=>'required|min:4|max:4|unique:tbl4_d_results',
            's8'=>'required|min:4|max:4|unique:tbl4_d_results',
            's9'=>'required|min:4|max:4|unique:tbl4_d_results',
            's10'=>'required|min:4|max:4|unique:tbl4_d_results',
            's11'=>'required|min:4|max:4|unique:tbl4_d_results',
            's12'=>'required|min:4|max:4|unique:tbl4_d_results',
            's13'=>'required|min:4|max:4|unique:tbl4_d_results',
            'c1'=>'required|min:4|max:4|unique:tbl4_d_results',
            'c2'=>'required|min:4|max:4|unique:tbl4_d_results',
            'c3'=>'required|min:4|max:4|unique:tbl4_d_results',
            'c4'=>'required|min:4|max:4|unique:tbl4_d_results',
            'c5'=>'required|min:4|max:4|unique:tbl4_d_results',
            'c6'=>'required|min:4|max:4|unique:tbl4_d_results',
            'c7'=>'required|min:4|max:4|unique:tbl4_d_results',
            'c8'=>'required|min:4|max:4|unique:tbl4_d_results',
            'c9'=>'required|min:4|max:4|unique:tbl4_d_results',
            'c10'=>'required|min:4|max:4|unique:tbl4_d_results',
            'dd'=>'required|date_format:Y-m-d|max:10',
        ]);
        if ($validator->fails()) {
           
            Alert::error('Error Title', $validator->errors()->all());
            return back()->withErrors($validator)            
                         ->withInput();
         }
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
