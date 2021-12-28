<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\MainModel;
use Illuminate\Auth\Events\Validated;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mainData = MainModel::All();
        return view('backend/main', compact('mainData'));
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
        $main = new MainModel;
        $rule = [
            'title' => 'required|max:100',
            'subtitle' => 'required|max:150',
            'bgimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'resume' => 'required|mimes:pdf,doc,docx|max:5048',
        ];

        $request->validate($rule );

        $filebgimg = $request->file('bgimage');
        $fileresume = $request->file('resume');

        $bgfileName = $filebgimg->getClientOriginalName();
        $resfileName = $fileresume->getClientOriginalName();

        $bgpath = 'assets/img/'. $bgfileName ;
        $respath = 'assets/pdf/'. $resfileName ;

        // $request->file('bgimage')->storeAs('/assets/img', $bgfileName , 'public');
        // $request->file('resume')->storeAs('/assets/pdf', $resfileName , 'public');

        $request->file('bgimage')->move(public_path('/assets/img'), $bgfileName);
        $request->file('resume')->move(public_path('/assets/pdf'), $resfileName);
 

           
        $main->title = $request->title;
        $main->sub_title = $request->subtitle;
        $main->bg_image = $bgpath;
        $main->resume = $respath;

        $main->save();

        return back()
        ->with('msg', 'Data Upload Success');
       
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
    public function edit(Request $request, $id)
    {
        $main = new MainModel;
        $editdata =  $main->find($id);
        return view('backend/main', compact($editdata));
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
        $main = new MainModel;
        $rule = [
            'title' => 'required|max:100',
            'subtitle' => 'required|max:150',
            'bgimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'resume' => 'required|mimes:pdf,doc,docx|max:5048',
        ];

        $request->validate($rule );

        $filebgimg = $request->file('bgimage');
        $fileresume = $request->file('resume');

        $bgfileName = $filebgimg->getClientOriginalName();
        $resfileName = $fileresume->getClientOriginalName();

        $bgpath = 'assets/img/'. $bgfileName ;
        $respath = 'assets/pdf/'. $resfileName ;

        // $request->file('bgimage')->storeAs('/assets/img', $bgfileName , 'public');
        // $request->file('resume')->storeAs('/assets/pdf', $resfileName , 'public');

        $request->file('bgimage')->move(public_path('/assets/img'), $bgfileName);
        $request->file('resume')->move(public_path('/assets/pdf'), $resfileName);
 

           
        $main->title = $request->title;
        $main->sub_title = $request->subtitle;
        $main->bg_image = $bgpath;
        $main->resume = $respath;

        $main->save();

        return back()
        ->with('msg', 'Data Upload Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
