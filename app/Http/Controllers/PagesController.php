<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{



    public function test (){

          return view("pages.login");


    }

    public function about(){
        
          return view('pages.about');

    }
    public function contact(){
        
        return view('pages.contact');

  }
  public function profile(){

    return view('pages.profile');

}


public function menu(){
        
    return view('vendor.menu');

}
public function mylisting(){
        
    return view('vendor.mylisting');

}

public function showall(){
        
    return view('vendor.showall');

}

public function submit(){
        
    return view('vendor.submit');

}



    public function index(){
        return view("pages.index");


    }

    public function main(){
         
         return view("layout.main");

    }
    public function detail(){

 return view("vendor.detail");
    }

    }
    

