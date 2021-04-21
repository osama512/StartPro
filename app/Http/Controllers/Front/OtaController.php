<?php

namespace App\Http\Controllers\Front;

use Illuminate\Routing\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;


class OtaController extends Controller
{
    public function  __construct()
    {
        $this->middleware('auth')->except('showAdminName1');
    }

    public function  showAdminName(){
       return 'Osama Alhmad';
   }
    public function  showAdminName1(){
        return 'Osama Alhmadz';
    }
}
