<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FirstController extends Controller
{
    public function  showUserName(){
        return 'ali';}
        public function getIndex(){
            $data=[];
            $data['id']=3;
            $data['name']='osama alhmad';
            return view('welcome',$data);
        }
}
