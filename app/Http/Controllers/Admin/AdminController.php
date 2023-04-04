<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;//this when u change the namespace
class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this -> middleware('auth')->except('showString_1');
    }
    //
    public function showString_0(){
        return'0';
    }
    public function showString_1(){
        return'1';
    }
    public function showString_2(){
        return'2';
    }
}
