<?php

namespace App\Http\Controllers\Users;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;


class UserController extends Controller
{
   public function  showUserName(){
       return 'ali';
   }
}
