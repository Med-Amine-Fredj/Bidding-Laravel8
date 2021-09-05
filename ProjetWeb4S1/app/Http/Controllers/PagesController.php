<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{


   Public function about()
   {
    return view('about');
   }

   Public function contact()
   {
    return view('contact');
   }

   







}
