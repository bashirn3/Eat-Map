<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorImageController extends Controller
{
   public function create($id){

   return view('vendor.vendorImage')->with('Id',$id);

   }

   public function ask($id){

    return view('vendor.image_ask')->with('Id',$id);
   }


   public function store($id, Request $request){

   $this->validate( $request, [
        

     'images[]' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',


   ]);

   if($request->hasfile('images'))
   {

      foreach($request->file('images') as $image)
      {
          $name=$image->getClientOriginalName();
          $image->move(public_path().'/images/', $name);  
          $data[] = $name;  
      }
   }

   $form= new vendor_images();
   $form->path=json_encode($data);
   $form->vendor_id=$id;
   
  
  $form->save();

  return back()->with('success', 'Your images has been successfully');


}

}