<?php

namespace App\Http\Controllers;

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct(){
        
       $this->middleware('auth');
       
     }




    public function index(){
       
        if(auth()->user()->isRole()==1)
        {
            return redirect()->to(route('admin'));
        }
        return view('home');
    }
}
