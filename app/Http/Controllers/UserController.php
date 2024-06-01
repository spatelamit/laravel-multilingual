<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redis;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
     public function about()
     {

         return view('pages.about');
     }
         public function contact()
     {

         return view('pages.contact');
     }


}
