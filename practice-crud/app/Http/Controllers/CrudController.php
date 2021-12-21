<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Crud;
class CrudController extends Controller
{
    function showdata(){
       // $crud = new Crud;
       // $crud->all();
       $alldata = crud::simplePaginate(5);
       return view('showData', compact('alldata'));
    }
    function adddata(){
        return view('addData');
    }
    function storedata(Request $request){
      
       $rule = [
           'name' => 'required|max:10',
           'email' => 'required|email'
       ];

       $ERSMS = [
           'name.required' => 'Please Enter Your Name Must',
           'name.max' => 'Name Must Be Up TO 30 Characters',
           'email.required' => 'Please Enter Your Email Must',
           'email.email' => 'Must Be Valid Email',
       ];

       $this->validate($request, $rule, $ERSMS);
       $crud = new Crud;
       $crud->name = $request->name;
       $crud->email = $request->email;
       $crud->save();

       $request->session()->flash('msg', 'Data Added Success');

       return redirect('/');
    }

    function editdata($id=null){
        $EditData = Crud::find($id);
        return view('editData', compact('EditData'));
    }

    function updatedata(Request $request, $id){
      
        $rule = [
            'name' => 'required|max:10',
            'email' => 'required|email'
        ];
 
        $ERSMS = [
            'name.required' => 'Please Enter Your Name Must',
            'name.max' => 'Name Must Be Up TO 30 Characters',
            'email.required' => 'Please Enter Your Email Must',
            'email.email' => 'Must Be Valid Email',
        ];
 
        $this->validate($request, $rule, $ERSMS);
        $Updata = Crud::find($id);
        $Updata->name = $request->name;
        $Updata->email = $request->email;
        $Updata->save();
 
        $request->session()->flash('msg', 'Data Update Success');
 
        return redirect('/');
     }

     function deletedata(Request $request, $id){

        $Dldata = Crud::find($id);
        $Dldata->delete();
        $request->session()->flash('msg', 'Data Delete Success');
        return redirect('/');
     }
}
