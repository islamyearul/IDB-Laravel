<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serData = Service::all();
        return view('backend/service', compact('serData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = [
            'name' => 'required',
            'description' => 'required'
        ];
        $request->validate($rules);
        $datasrvc = new Service;

        $datasrvc->name = $request->name;
        $datasrvc->description = $request->description;
        $datasrvc->save();
        return back()->with('success', "Data Added Success");
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
       $srvdata = Service::find($id);
       return response()->json([
           'status' => 'Success',
           'serviceData' => $srvdata
       ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $srvcID = $request->id;   
        $datasc = Service::find($srvcID);
       // dd($datasc);
       
        $datasc->description = $request->description;
        $datasc->name = $request->name;
        $datasc->save();
        return back()->with('success', "Data Update Success");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datasc = Service::find($id);
        $datasc->delete();
        return back()->with('deletesms', "Data Delete Success");

    }
}
