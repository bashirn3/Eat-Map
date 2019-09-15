@extends("layout.main")
        @section("content")
        <div class="container">
            

            <section class="page-title center">
                <h1><strong>Foods</strong></h1>
            </section>
            <!--end section-title-->

            <section>
                <div class="search-results-controls clearfix">
                    <div class="pull-left">
                        <a href="" class="circle-icon active"><i class="fa fa-th"></i></a>
                        <a href="" class="circle-icon"><i class="fa fa-bars"></i></a>
                    </div>
                    <!--end left-->
                    <div class="pull-right">
                        <div class="input-group inputs-underline min-width-150px">
                            <select class="form-control selectpicker" name="sort">
                                <option value="">Sort by</option>
                                <option value="1">Price</option>
                                <option value="1">Location</option>
                                
                                <option value="3">Title A-Z</option>
                            </select>
                        </div>
                    </div>
                    <!--end right-->
                </div>
                <!--end search-results-controls-->
            </section>

            <section>
                <div class="row">
                  @if(count($foods)>0)
                  @foreach($foods as $food)
                    <div class="col-md-4 col-sm-4">
                        <div class="item" data-id="1">
                           @if($food->available == 1)
                           <figure class="ribbon">Available</figure>
                           @endif
                            <a href="/foods/{{$food->id}}">
                                <div class="description">
                                    <figure>Price: &#8358 {{$food->price}}</figure>
                                    <div class ="label label-default"></div>
                                    <div class="label label-default">{{ $food->meal_type }}</div>
                                    <h3>{{ $food->name }}</h3>
                                    <h4></h4>
                                </div>
                                <!--end description-->    
                                
                                <div class="image bg-transfer">
                                    <img src="assets/img/items/1.jpg" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <div class="additional-info">
                                <div class="rating-passive" data-rating="4">
                                    <span class="stars"></span>
                                    <span class="reviews">6</span>
                                </div>
                                <div class="controls-more">
                                    <ul>
                                        <li><a href="#">Add to favorites</a></li>
                                        <li><a href="#">Add to watchlist</a></li>
                                        <li><a href="#" class="quick-detail">Quick detail</a></li>
                                    </ul>
                                </div>
                                <!--end controls-more-->
                            </div>
                            <!--end additional-info-->
                        </div>
                        <!--end item-->
                    </div>
                    <!--<end col-md-3-->
                 @endforeach
                 @else
                 <h2>No Foods Found</h2>
                 @endif
                    
                </div>
                <!--end row-->
                
            </section>

            

            <section>
                <div class="center">
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="disabled previous">
                                <a href="#" aria-label="Previous">
                                    <i class="arrow_left"></i>
                                </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li class="active"><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li class="next">
                                <a href="#" aria-label="Next">
                                    <i class="arrow_right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </section>
        </div>
        <!--end container-->    
         @endsection