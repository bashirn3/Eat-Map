@extends("layout.main")
        @section("content")
        <div class="hero-section has-background height-600px">
            <div class="wrapper">
                <div class="inner">
                    <div class="container">
                        <div class="page-title center">
                            <h1>Discover the best food around you</h1>
                            <h2></h2>
                        </div>
                        <!--end page-title-->
                        <div class="row">
                            <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
                                <div class="form search-form horizontal">
                                    <form>
                                      @csrf
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="email" placeholder="What are you looking for?">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="submit"><i class="arrow_right"></i></button>
                                            </span>
                                        </div><!-- /input-group -->
                                    </form>
                                    <!--end form-->
                                </div>
                            <!--end search-form-->
                            </div>
                            <!--end col-md-10-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end container-->
                </div>
                <!--end inner-->
            </div>
            <!--end wrapper-->
            <div class="background-wrapper">
                <div class=""><img src="assets/img/slider.jpg" alt="slider"></div>
               <div class="background-color background-color-black"></div>
            </div>
            <!--end background-wrapper-->
        </div>
        <!--end hero-section-->

        <section class="block">
            <div class="container">
                <div class="center">
                    <div class="section-title">
                        <div class="center">
                            <h2>Recent Places</h2>
                            <h3 class="subtitle">Restaurants that have been added recently</h3>
                        </div>
                    </div>
                    <!--end section-title-->
                </div>
                <!--end center-->
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <div class="item">
                            <a href="detail.html">
                                <div class="description">
                                    <figure>Average Price: $8 - $30</figure>
                                    <div class="label label-default">Restaurant</div>
                                    <h3>Marky’s Restaurant</h3>
                                    <h4>63 Birch Street</h4>
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
                    <div class="col-md-3 col-sm-3">
                        <div class="item" data-id="2">
                            <a href="detail.html">
                                <div class="description">
                                    <div class="label label-default">Restaurant</div>
                                    <h3>Ironapple</h3>
                                    <h4>4209 Glenview Drive</h4>
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                    <img src="assets/img/items/2.jpg" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <div class="additional-info">
                                <div class="rating-passive" data-rating="3">
                                    <span class="stars"></span>
                                    <span class="reviews">13</span>
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
                    <div class="col-md-6 col-sm-6">
                        <div class="item" data-id="15">
                            <figure class="ribbon">Top</figure>
                            <a href="detail.html">
                                <div class="description">
                                    <figure>Happy hour: 18:00 - 19:00</figure>
                                    <div class="label label-default">Bar & Grill</div>
                                    <h3>Bambi Planet Houseboat Bar& Grill </h3>
                                    <h4>3857 Losh Lane</h4>
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                    <img src="assets/img/items/3.jpg" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <div class="additional-info">
                                <figure class="circle" title="Featured"><i class="fa fa-check"></i></figure>
                                <div class="rating-passive" data-rating="5">
                                    <span class="stars"></span>
                                    <span class="reviews">56</span>
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
                    <div class="col-md-4 col-sm-4">
                        <div class="item" data-id="3">
                            <figure class="ribbon">Top</figure>
                            <a href="detail.html">
                                <div class="description">
                                    <figure>Starts at: 19:00</figure>
                                    <div class="label label-default">Event</div>
                                    <h3>Food Festival</h3>
                                    <h4>840 My Drive</h4>
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                    <img src="assets/img/items/4.jpg" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <div class="additional-info">
                                <figure class="circle" title="Featured"><i class="fa fa-check"></i></figure>
                                <div class="rating-passive" data-rating="5">
                                    <span class="stars"></span>
                                    <span class="reviews">12</span>
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
                    <!--<end col-md-4-->
                    <div class="col-md-3 col-sm-3">
                        <div class="item" data-id="4">
                            <a href="detail.html">
                                <div class="description">
                                    <div class="label label-default">Lounge</div>
                                    <h3>Cosmopolit</h3>
                                    <h4>2896 Ripple Street</h4>
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                    <img src="assets/img/items/5.jpg" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <div class="additional-info">
                                <div class="rating-passive" data-rating="5">
                                    <span class="stars"></span>
                                    <span class="reviews">43</span>
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
                    <div class="col-md-5 col-sm-5">
                        <div class="item" data-id="6">
                            <a href="detail.html">
                                <div class="description">
                                    <figure>Free entry</figure>
                                    <div class="label label-default">Concert</div>
                                    <h3>Stand Up Show</h3>
                                    <h4>371 Kinney Street</h4>
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                    <img src="assets/img/items/6.jpg" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <div class="additional-info">
                                <div class="rating-passive" data-rating="0">
                                    <span class="stars"></span>
                                    <span class="reviews">0</span>
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
                </div>
                <!--end row-->
                <div class="center">
                    <a href="listing.html" class="btn btn-primary btn-light-frame btn-rounded btn-framed arrow">View all</a>
                </div>
            <!--end center-->
            </div>
            <!--end container-->
        </section>
        <!--end block-->
        
       
        
        <section class="block background-is-dark">
            <div class="container">
                <div class="section-title vertical-aligned-elements">
                    <div class="element">
                        <h2>Promoted Locations</h2>
                    </div>
                    <div class="element text-align-right">
                        <a href="#" class="btn btn-framed btn-rounded btn-default invisible-on-mobile">Promote yours</a>
                        <div id="gallery-nav"></div>
                    </div>
                </div>
                <!--end section-title-->
            </div>
            <div class="gallery featured">
                <div class="owl-carousel" data-owl-items="6" data-owl-loop="1" data-owl-auto-width="1" data-owl-nav="1" data-owl-dots="1" data-owl-nav-container="#gallery-nav">
                    <div class="item featured" data-id="1">
                        <a href="detail.html">
                            <div class="description">
                                <figure>Average Price: $8 - $30</figure>
                                <div class="label label-default">Restaurant</div>
                                <h3>Marky’s Restaurant</h3>
                                <h4>63 Birch Street</h4>
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
                    <div class="item featured" data-id="23">
                        <a href="detail.html">
                            <div class="description">
                                <figure>Starts from: $14.99</figure>
                                <div class="label label-default">Trip</div>
                                <h3>Nascar Racing</h3>
                                <h4>london Airport</h4>
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="assets/img/items/11.jpg" alt="">
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
                    <div class="item featured" data-id="3">
                        <a href="detail.html">
                            <div class="description">
                                <figure>
                                    <span><i class="fa fa-calendar"></i>12.08.2016</span>
                                    <span><i class="fa fa-clock-o"></i>08:00</span>
                                </figure>
                                <div class="label label-default">Event</div>
                                <h3>Food Festival</h3>
                                <h4>63 Birch Street</h4>
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="assets/img/items/4.jpg" alt="">
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
                    <div class="item featured" data-id="4">
                        <a href="detail.html">
                            <div class="description">
                                <figure>Average Price: $8 - $30</figure>
                                <div class="label label-default">Lounge</div>
                                <h3>Cosmopolit</h3>
                                <h4>4696 Jim Rosa Lane</h4>
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="assets/img/items/5.jpg" alt="">
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
                    <div class="item featured" data-id="6">
                        <a href="detail.html">
                            <div class="description">
                                <div class="label label-default">Event</div>
                                <h3>Stand Up Show</h3>
                                <h4>63 Birch Street</h4>
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="assets/img/items/6.jpg" alt="">
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
                    <div class="item featured" data-id="8">
                        <a href="detail.html">
                            <div class="description">
                                <figure>Get to know yor town!</figure>
                                <div class="label label-default">Event</div>
                                <h3>City Tour</h3>
                                <h4>63 Birch Street</h4>
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="assets/img/items/10.jpg" alt="">
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
                    <div class="item featured" data-id="5">
                        <a href="detail.html">
                            <div class="description">
                                <div class="label label-default">Real Estate</div>
                                <h3>Beautiful Luxury Villa</h3>
                                <h4>59 Water Street</h4>
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="assets/img/items/28.jpg" alt="">
                            </div>
                            <!--end image-->
                        </a>
                        <div class="additional-info">
                            <div class="rating-passive" data-rating="3">
                                <span class="stars"></span>
                                <span class="reviews">12</span>
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
                    <div class="item featured" data-id="7">
                        <a href="detail.html">
                            <div class="description">
                                <figure>Average Price: $8 - $30</figure>
                                <div class="label label-default">Bar</div>
                                <h3>Fiesta Bar</h3>
                                <h4>3524 Bryan Avenue</h4>
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="assets/img/items/12.jpg" alt="">
                            </div>
                            <!--end image-->
                        </a>
                        <div class="additional-info">
                            <div class="rating-passive" data-rating="5">
                                <span class="stars"></span>
                                <span class="reviews">17</span>
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
                    <div class="item featured" data-id="1">
                        <a href="detail.html">
                            <div class="description">
                                <div class="label label-default">Adrenaline</div>
                                <h3>Senior C# Developer</h3>
                                <h4>ERF Solutions</h4>
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="assets/img/items/16.jpg" alt="">
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
            </div>
            <!--end gallery-->
            <div class="background-wrapper">
                <div class="background-color background-color-default"></div>
            </div>
            <!--end background-wrapper-->
        </section>
        <!--end block-->

        
        <section class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-9">
                        <div class="section-title">
                            <h2>Recently Rated Items</h2>
                        </div>
                        <!--end section-title-->
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="item" data-id="2">
                                    <a href="detail.html">
                                        <div class="description">
                                            <div class="label label-default">Restaurant</div>
                                            <h3>Ironapple</h3>
                                            <h4>4209 Glenview Drive</h4>
                                        </div>
                                        <!--end description-->
                                        <div class="image bg-transfer">
                                            <img src="assets/img/items/2.jpg" alt="">
                                        </div>
                                        <!--end image-->
                                    </a>
                                    <div class="additional-info">
                                        <div class="rating-passive" data-rating="3">
                                            <span class="stars"></span>
                                            <span class="reviews">13</span>
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
                            <!--<end col-md-4-->
                            <div class="col-md-5 col-sm-5">
                                <div class="item" data-id="3">
                                    <figure class="ribbon">Top</figure>
                                    <a href="detail.html">
                                        <div class="description">
                                            <figure>Starts at: 19:00</figure>
                                            <div class="label label-default">Event</div>
                                            <h3>Food Festival</h3>
                                            <h4>840 My Drive</h4>
                                        </div>
                                        <!--end description-->
                                        <div class="image bg-transfer">
                                            <img src="assets/img/items/4.jpg" alt="">
                                        </div>
                                        <!--end image-->
                                    </a>
                                    <div class="additional-info">
                                        <figure class="circle" title="Featured"><i class="fa fa-check"></i></figure>
                                        <div class="rating-passive" data-rating="5">
                                            <span class="stars"></span>
                                            <span class="reviews">12</span>
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
                            <!--<end col-md-5-->
                            <div class="col-md-3 col-sm-3">
                                <div class="item" data-id="4">
                                    <a href="detail.html">
                                        <div class="description">
                                            <div class="label label-default">Lounge</div>
                                            <h3>Cosmopolit</h3>
                                            <h4>2896 Ripple Street</h4>
                                        </div>
                                        <!--end description-->
                                        <div class="image bg-transfer">
                                            <img src="assets/img/items/5.jpg" alt="">
                                        </div>
                                        <!--end image-->
                                    </a>
                                    <div class="additional-info">
                                        <div class="rating-passive" data-rating="5">
                                            <span class="stars"></span>
                                            <span class="reviews">43</span>
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
                        </div>
                        <!--end row-->
                    </div>
                    <!--end col-md-9-->
                    <div class="col-md-3 col-sm-3">
                        <div class="section-title">
                            <h2>Client’s Word</h2>
                        </div>
                        <div class="testimonials center box">
                            <div class="owl-carousel" data-owl-items="1" data-owl-nav="0" data-owl-dots="1">
                                <blockquote>
                                    <div class="image">
                                        <div class="bg-transfer">
                                            <img src="assets/img/person-01.jpg" alt="">
                                        </div>
                                    </div>
                                    <h3>Jane Woodstock</h3>
                                    <h4>CEO at ArtBrands</h4>
                                    <p>Ut nec vulputate enim. Nulla faucibus convallis dui. Donec arcu enim, scelerisque gravida lacus vel.</p>
                                </blockquote>
                                <blockquote>
                                    <div class="image">
                                        <div class="bg-transfer">
                                            <img src="assets/img/person-04.jpg" alt="">
                                        </div>
                                    </div>
                                    <h3>Peter Doe</h3>
                                    <h4>CEO at ArtBrands</h4>
                                    <p>Donec arcu enim, scelerisque gravida lacus vel, dignissim cursus lectus. Aliquam laoreet purus in iaculis sodales.</p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <!--end col-md-3-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <!--end block-->
        

        <div class="container">
            <hr>
        </div>
        <!--end container-->
<section class="block big-padding">
            <div class="container">
                <div class="vertical-aligned-elements">
                    <div class="element width-50">
                        <h3>Subscribe and be notified about new Restaurant</h3>
                        <h3>We promise your email is safe with us</h3>
                    </div>
                    <!--end element-->
                    <div class="element width-50">
                        <form class="form inputs-underline form-email" id="form-subscribe">
                        @csrf
                            <div class="input-group">
                                <input type="text" class="form-control" name="email" placeholder="Your email" required="">
                                <span class="input-group-btn">
                                    <button class="btn" type="submit"><i class="arrow_right"></i></button>
                                </span>
                            </div><!-- /input-group -->
                        </form>
                        <!--end form-->
                    </div>
                    <!--end element-->
                </div>
                <!--end vertical-aligned-elements-->
            </div>
            <!--end container-->
            <div class="background-wrapper">
                <div class="background-color background-color-black opacity-5"></div>
            </div>
            <!--end background-wrapper-->
        </section>
        <!--end block-->


        <section class="block">
            <div class="container">
                <div class="center section-title opacity-40">
                    <h5>Partners</h5>
                </div>
                <div class="logos">
                    <div class="logo">
                        <a href="#"><img src="assets/img/logo-1.png" alt=""></a>
                    </div>
                    <div class="logo">
                        <a href="#"><img src="assets/img/logo-2.png" alt=""></a>
                    </div>
                    <div class="logo">
                        <a href="#"><img src="assets/img/logo-3.png" alt=""></a>
                    </div>
                    <div class="logo">
                        <a href="#"><img src="assets/img/logo-4.png" alt=""></a>
                    </div>
                    <div class="logo">
                        <a href="#"><img src="assets/img/logo-5.png" alt=""></a>
                    </div>
                </div>
                <!--/ .logos-->
            </div>
            <!--end container-->
        </section>
        <!--end block-->
        
         @endsection

        