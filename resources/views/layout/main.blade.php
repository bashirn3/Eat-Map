<!DOCTYPE html>

<html lang="en-US">

@include('includes.head')
<body class="nav-btn-only homepage">
<div class="page-wrapper">

 @include("includes.navbar")
    
    <div id="page-content">
        @include("includes.messages")
        @yield("content")
    </div>
    <!--end page-content-->

  
  @include('includes.footer')
  @include('includes.scripts')
</div>
<!--end page-wrapper-->
<a href="#" class="to-top scroll" data-show-aft-scroll="600"><i class="arrow_up"></i></a>  
</body>

</html>