<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MainModel;

class AdminDashboardController extends Controller
{
    function index(){
        return view('backend/dashboard');
    }
    // function main(){

    //     $mainData = MainModel::all();
    //     return view('backend/main', compact($mainData));
    // }
    function service(){
        return view('backend/service');
    }
    function about(){
        return view('backend/about');
    }
    function contact(){
        return view('backend/contact');
    }
}
