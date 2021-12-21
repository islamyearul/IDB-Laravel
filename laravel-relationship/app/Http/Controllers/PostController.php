<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\PostModel;
Use App\Caregory;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct(){
        $this->middleware('auth');
    }
    
    public function index()
    { 
        $cats = Caregory::all();
        return view('post.index', compact('cats'));
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
        $rule = [
            'title' => 'required|max:50',
            'cat' => 'required',
            'description' => 'required|max:200|min:30',
            'photo' => 'required'
        ];

        $this->validate($request, $rule);
        $crud = new PostModel; 
        $crud->title = $request->title;
        $crud->description = $request->description;
        $crud->photo = $request->photo;
        $crud->categories_id = $request->cat;

        $crud->save();
        //Session::class->flush('msg', 'Data Add Success');
        


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
