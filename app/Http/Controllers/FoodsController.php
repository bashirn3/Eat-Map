<?php

namespace App\Http\Controllers;
use App\Food;
use App\Vendor;
use App\User;

use Illuminate\Http\Request;

class FoodsController extends Controller
{
    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = Food::all();
        return view ("food.showall")->with("foods", $foods);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ("food.submit");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
     $this->validate( $request, [
        "name" => "required",
        "price"=> "required"
        
        


      

      ]);
      $food = new Food;
      $food->name = $request->input('name');
      $food->description= $request->input('description');
      $food->meal_type= $request->input('meal_type');
      $vendors=auth()->user()->vendors;
     

      foreach($vendors as $vendor){
      $vendor->id;
    }

        
      $food->vendor_id = $vendor->id;
      $food->save();

      return redirect("/foods/create")->with("success","Food Added");
     }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $food= Food::find($id);
        return view ("food.detail")->with("food", $food);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $food = Food::find($id);
        return view('food.edit')->with('food', $food);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
          $food = Food::find($id);
          $food->name = $request->input('name');
          $food->description = $request->input('description');
          $food->meal_type = $request->input('meal_type');
          $food->price = $request->input('price');
          $food->save();
   
          return redirect("/foods/create")->with("success","Food Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $food = Food::find($id);
        $food->delete();

      return redirect("/foods")->with("success","Food deleted succesfully ");
    }
}
