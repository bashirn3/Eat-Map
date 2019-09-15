@extends("layout.main")
@section("content")
    
    
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Contact</li>
            </ol>

            <div class="row">
                <div class="col-md-12 col-sm-12" >
                    <section class="page-title">
                        <div class="pull-left">
                            <h1>{{$food->name}}</h1>
                            
                        </div>
                        <!--end page-title-->
                        <a href="#write-a-review" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon scroll pull-right"><i class="fa fa-star"></i>Write a review</a>
                    </section>
                    <hr>

                    

                        <div class="container">
                          <div class= "row">
                          <div class =" col-md-8 ">
                            <section>
                                <div class="gallery detail">
                                    <div class="owl-carousel" data-owl-nav="0" data-owl-dots="1">
                                        <div class="image">
                                            <div class="bg-transfer"><img src="{{asset('assets/img/items/1.jpg')}}" alt=""></div>
                                        </div>
                                        <div class="image">
                                            <div class="bg-transfer"><img src="{{asset('assets/img/items/2.jpg')}}" alt=""></div>
                                        </div>
                                        <div class="image">
                                            <div class="bg-transfer"><img src="{{ asset('assets/img/items/31.jpg')}}" alt=""></div>
                                        </div>
                                        <div class="image">
                                            <div class="bg-transfer"><img src="{{asset('assets/img/items/1.jpg')}}" alt=""></div>
                                        </div>
                                        <div class="image">
                                            <div class="bg-transfer"><img src="{{asset('assets/img/items/1.jpg')}}" alt=""></div>
                                        </div>
                                    </div>
                                    <!--end owl-carousel-->
                                </div>
                                <!--end gallery-->
                            </section>
                          </div>
                           <!--col-md-6 col-sm-6-->
                          
                          <div class="col-md-4">
                            <section>
                                <div class="detail-sidebar">
                                    <section class="shadow">
                                        
                                        <div class="content">
                                            
                                            
                                            
                                                
                                               
                                                 <a href="/foods/{{$food->id}}/edit" class="link icon"><i class="fa fa-edit"></i>Edit</a>
                                                 <section>
                                                 <form method="POST" action="{{ route('foods.destroy', $food->id)}}">
                                                 @csrf
                                                   {{method_field('DELETE')}}
                                                 <button type ="submit" class="link icon delete btn btn-danger"><i class="fa fa-trash"></i>Delete</a>
                                                 </form>
                                                 </section>
                                        </div>                                
                                

                                    </section>
                                </div>
                                <!--end detail-sidebar-->
                            </section>
                         </div>
                         
                                    
                                  
                         </div>
                         <!--end row-->

                            <section>
                                <section>
                                  
                                    <h2>Description</h2>
                                    <p>
                                       {{$food->description}}
                                    </p>
                                </section>
                            </section>

                           
                            <section>
                                <h2>Reviews</h2>
                                <div class="review">
                                    <div class="image">
                                        <div class="bg-transfer"><img src="{{asset('assets/img/person-02.jpg')}}" alt=""></div>
                                    </div>
                                    <div class="description">
                                        <figure>
                                            <div class="rating-passive" data-rating="4">
                                                <span class="stars"></span>
                                                <span class="reviews">6</span>
                                            </div>
                                            <span class="date">09.05.2016</span>
                                        </figure>
                                        <p>Donec nec tristique sapien. Aliquam ante felis, sagittis sodales diam sollicitudin, dapibus semper turpis</p>
                                    </div>
                                </div>
                                <!--end review-->
                                <div class="review">
                                    <div class="image">
                                        <div class="bg-transfer"><img src="{{asset('assets/img/person-01.jpg')}}" alt=""></div>
                                    </div>
                                    <div class="description">
                                        <figure>
                                            <div class="rating-passive" data-rating="5">
                                                <span class="stars"></span>
                                                <span class="reviews">6</span>
                                            </div>
                                            <span class="date">09.05.2016</span>
                                        </figure>
                                        <p>Vestibulum vel est massa. Integer pellentesque non augue et accumsan. Maecenas molestie elit nibh,
                                            vel vestibulum leo condimentum quis. Duis ac orci a magna auctor vehicula.
                                        </p>
                                    </div>
                                </div>
                                <!--end review-->
                            </section>

                            <section id="write-a-review">
                                <h2>Write a Review</h2>
                                <form class="clearfix form inputs-underline">
                                    <div class="box">
                                        <div class="comment">
                                            
                                                    <div class="comment-title">
                                                        <h4>Review your experience</h4>
                                                    </div>
                                                    <!--end title-->
                                                    <div class="form-group">
                                                        <label for="name">Title of your review<em>*</em></label>
                                                        <input type="text" class="form-control" id="name" name="name" placeholder="Beautiful place!" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="message">Your Message<em>*</em></label>
                                                        <textarea class="form-control" id="message" rows="8" name="message" required="" placeholder="Describe your experience"></textarea>
                                                    </div>
                                                    <!--end form-group-->
                                                
                                            <br>

                                            <div class="form-group pull-right">
                                                <button type="submit" class="btn btn-primary btn-rounded">Send Review</button>
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end comment-->
                                    </div>
                                    <!--end review-->
                                </form>
                                <!--end form-->
                            </section>
                      </div> 
                </div>
                <!--end col-md-9-->

                
            </div>
            </div>
      

@endsection