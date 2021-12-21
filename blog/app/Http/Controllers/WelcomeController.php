<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function index(){
        return view('welcome');
    }
    function home(){
        return view('home.home');
    }
    function about(){
        return view('home.about');
    }
    function aboutstudent(Request $request){
        echo " The Age is ". $request->age;
    }
}
