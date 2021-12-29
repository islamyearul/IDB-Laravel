<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mobile;
use Hash;


class UserController extends Controller
{
    public function UserMobile(){

        $user = new User;
        $user->name = "Test Name";
        $user->email = "xxxx@mnp.com";
        $user->password = Hash::make("12345678");
        // $user->password = "12345678";
        $user->save();

        $mobile = new Mobile;
        $mobile->mobile = '123456789';
        $user->mobile()->save($mobile);

        

    }
}
