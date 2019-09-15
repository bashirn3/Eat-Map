<?php

namespace App\Http\Controllers;
use App\Food;
use App\Vendor;
use App\User;



use Illuminate\Http\Request;

class FoodsVendorController extends Controller
{
    public function create($id){

     return view ("food.submit")->with('Id', $id);
        
    }
    
    public function store($id, Request $request){
   
        $this->validate( $request, [
            "name" => "required",
            "price"=> "required"
            
            
    
    
          
    
          ]);
          $food = new Food;
          $food->name = $request->input('name');
          $food->description= $request->input('description');
          $food->meal_type= $request->input('meal_type');
          $food->vendor_id=$id;
          $food->save();
        
    
            
          
         
    
          return redirect("/food/create/{$id}")->with("success","Food Added");
         }

    public function index($id){

        $vendor=Vendor::find($id);
        
        return view('food.vendorFood')->with('foods', $vendor->food);

    }

    
}
