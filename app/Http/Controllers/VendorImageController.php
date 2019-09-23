<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorImageController extends Controller
{
   public function create(){

   return view('vendor.vendorImage');

   }

   public function store($id, Request $request){

   $this->validate( $request, [
        

     'images[]' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',


   ]);

   

}

}