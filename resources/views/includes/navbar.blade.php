  <header id="page-header">
        <nav>
           <div class="left">
                 <strong><a href="index.html" class="brand">Eat Map</a></strong>
            </div> 
            
            <!--end left-->
            <div class="right">
                <div class="primary-nav has-mega-menu">
                    <ul class="navigation">
                        <li class="active"><a href="/index">Home </a>
                            
                        </li>

                         <li><a href="{{route('vendors.index')}}">Vendor List</a></li>

                        <li class="has-child"><a href="#nav-categories">Food</a>
                            <div  class="wrapper" >
                                <div id= "nav-categories" class="nav-wrapper">
                                    <ul>
                                        <li><a href="{{route('foods.index')}}" >All food</a></li> 
                                        <li><a href="#">Breakfast</a></li>
                                        <li><a href="#">Lunch</a></li>
                                        <li><a href="#">Dinner</a></li>
                                        <li><a href="#">Others</a></li>

                                    </ul> 
                                        
                                </div>
                                <!--end nav-wrapper-->
                            </div>
                            <!--end wrapper-->    
                                           
                                    
                                   
                               
                        </li>
                        <li class="has-child"><a href="#nav-locations">Locations</a>
                            <div class="wrapper">
                                <div id="nav-locations" class="nav-wrapper">
                                    <ul>
                                        <li class="has-child"><a href="#nav-locations-kano">Kano</a>
                                            <div id="nav-locations-kano" class="nav-wrapper">
                                                <ul>
                                                    <li><a href=" {{route('vendors.index')}}">City</a></li>
                                                    <li><a href="#">Outskirts</a></li>
                                                </ul> 
                                            </div>       
                                        </li>    
                                        <li><a href="#">Abuja</a> </li>
                                          
                                           
                                    </ul>
                                </div>
                                <!--end nav-wrapper-->
                            </div>
                            <!--end wrapper-->
                        </li>             
                                            
                        <li><a href="">About</a></li>
                        <li><a href="">Contact</a></li>               
                                        
                    </ul>                
                    <!--end navigation-->
                </div>
                <!--end primary-nav-->                         
                               
                        
                    
                   
             <div class="secondary-nav">
                    @guest
                       <a href="{{ route('login') }}">Login</a>

                        @if(Route::has('register'))
                           <a class="promoted" href="{{ route('register') }}">Register</a>  
                           
                        @endif

                    @else 
                      <ul class="navigation">
                        <li class="has-child">
                            <div class="image"><div class="bg-transfer"><img src="assets/img/person-01.jpg" alt=""></div></div>
                            <a href="#" class="invisible-on-mobile"> {{ Auth::user()->name }} </a>
                            <div class="wrapper">
                                <div class="nav-wrapper">
                                    <ul>
                                        <li><a href="profile.html"><i class="fa fa-user"></i>View Profile</a></li>
                                        <li><a href="/home"><i class="fa fa-user"></i>Manage Vendor listing</a></li>
                                        <li><a href="reset-password.html"><i class="fa fa-refresh"></i>Change Password</a></li>
                                        <li>    <a href="{{ route('logout') }}"onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>logout</a>
                                                
                                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                               @csrf
                                                    </form>   
                                                   
                                                
                                         </li>
                                    </ul>
                                 </div>
                              </div>
                          </li>
                      </ul>
                   @endguest 
                 


                </div>
                <!--end secondary-nav-->
                @Auth
                <a href="{{route('vendors.create')}}" class="btn btn-primary btn-small btn-rounded icon shadow add-listing" ><i class="fa fa-plus"></i><span>Add Vendor</span></a>
                <div class="nav-btn">
                    <i></i> 
                    <i></i> 
                    <i></i>
                </div>
                @endAuth
                
                <!--end nav-btn-->
            </div>
            <!--end right-->
        </nav>
        <!--end nav-->
    </header>
    <!--end page-header-->