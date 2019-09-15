@extends("layout.main")
@section("content")

<div class="container">

            <section class="page-title center">
                <h1>Submit Food</h1>
            </section>
            <!--end page-title-->
            <section>
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                        <form method = "POST" class="form inputs-underline" action="{{ route('foods.update', $food->id)}}" >
                        {{method_field('PUT')}}
                        
                        @csrf
                            <section>
                                <h3>Information</h3>
                                <div class="row">
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <label for="name">Food Name</label>
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{$food->name}}">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-9-->
                                    <div class="col-md-3 col-sm-3">
                                        <div class="form-group">
                                            <label for="category">Meal-type</label>
                                            <select class="form-control" name="meal_type" id="category">
                                                <option value="">Meal-type</option>
                                                <option value="Breakfast">Breakfast</option>
                                                <option value="Lunch">Lunch</option>
                                                <option value="Dinner">Dinner</option>
                                                <option value="Other">Others</option>
                                                
                                            </select>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--col-md-3-->
                                </div>
                                <!--end row-->
                                <div class="row">
                                <div class ="col-md-9 col-sm-9">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" rows="4" name="description" placeholder="Describe"value="{{$food->description}}"></textarea>
                                </div>
                                </div>
                                <div class="col-md-3 col-sm-9">
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="number"  id="price"  name="price" placeholder=" &#8358" min="0" value="{{$food->price}}">
                                </div>
                                </div>
                                </div>
                                <!--end form-group-->
                               <!-- <div class="form-group">
                                    <label for="tags">Tags</label>
                                    <input type="text" class="form-control" name="tags" id="tags" placeholder="+ Add tag">
                                </div> -->
                                <!--end form-group-->
                              
                              
                            </section>
                            
                            <hr>

                            <section class="center">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-rounded">Edit Food</button>
                                </div>
                                <!--end form-group-->
                            </section>
                        </form>
                        <!--end form-->
                    </div>
                    <!--end col-md-6-->
                </div>
                <!--end row-->
            </section>
        </div>
        <!--end container-->
       
@endsection