<?php

namespace App\Http\Controllers;
use App\Vendor;
use App\User;

use Illuminate\Http\Request;

class VendorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendors = Vendor::orderBy('name','asc')->get();
        return view("vendor.showall")->with('vendors', $vendors);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('vendor.submit');
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
         "address"=> "required",
         "email" => "required",
         "twitter"=>"nullable|URL",
         "instagram"=> "nullable|URL",
         "facebook" => "nullable|URL"


       

       ]);
       $vendor = new Vendor;
       $vendor->name = $request->input('name');
       $vendor->address= $request->input('address');
       $vendor->location= $request->input('location');
       $vendor->email= $request->input('email');
       $vendor->description= $request->input('description');
       $vendor->phone_1= $request->input('phone_1');
       $vendor->phone_2= $request->input('phone_2');
       $vendor->opening_hours= $request->input('opening_hours');
       $vendor->closing_hours= $request->input('closing_hours');
       $vendor->instagram=$request->input('instagram');
       $vendor->twitter= $request->input('twitter');
       $vendor->facebook= $request->input('facebook');
       $vendor->user_id=auth()->user()->id;
       $vendor->save();

       return redirect("/vendors/create")->with("success","Vendor Created");
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vendor = Vendor::find($id);
        return view('vendor.detail')->with('vendor', $vendor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vendor = Vendor::find($id);
        return view('vendor.edit')->with('vendor', $vendor);
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
        $this->validate( $request, [
            "name" => "required",
            "address"=> "required",
            "email" => "required",
            "twitter"=>"URL",
            "instagram"=> "URL",
            "facebook" => "URL"
   
   
          
   
          ]);
          $vendor = Vendor::find($id);
          $vendor->name = $request->input('name');
          $vendor->address= $request->input('address');
          $vendor->location= $request->input('location');
          $vendor->email= $request->input('email');
          $vendor->description= $request->input('description');
          $vendor->phone_1= $request->input('phone_1');
          $vendor->phone_2= $request->input('phone_2');
          $vendor->opening_hours= $request->input('opening_hours');
          $vendor->closing_hours= $request->input('closing_hours');
          $vendor->instagram=$request->input('instagram');
          $vendor->twitter= $request->input('twitter');
          $vendor->facebook= $request->input('facebook');
        
          $vendor->save();
   
          return redirect("/vendors/create")->with("success","Vendor Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $vendor = Vendor::find($id);
         $vendor->delete();

       return redirect("/vendors")->with("success","Vendor deleted succesfully ");
      
    }
}
