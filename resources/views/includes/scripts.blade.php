
<script type="text/javascript" src="{{URL::asset ("assets/js/jquery-2.2.1.min.js")}}"></script>
<script type="text/javascript" src="{{URL::asset ("assets/js/jquery-migrate-1.2.1.min.js")}}"></script>
<script type="text/javascript" src="{{URL::asset ("assets/bootstrap/js/bootstrap.min.js")}}"></script>
<script type="text/javascript" src="{{URL::asset ("assets/js/bootstrap-select.min.js")}}"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58&libraries=places"></script>
<script type="text/javascript" src="{{URL::asset ("assets/js/richmarker-compiled.js")}}"></script>
<script type="text/javascript" src="{{URL::asset ("assets/js/markerclusterer_packed.js")}}"></script>
<script type="text/javascript" src="{{URL::asset ("assets/js/infobox.js")}}"></script>
<script type="text/javascript" src="{{URL::asset ("assets/js/jquery.validate.min.js")}}"></script>
<script type="text/javascript" src="{{URL::asset ("assets/js/jquery.fitvids.js")}}"></script>
<script type="text/javascript" src="{{URL::asset ("assets/js/icheck.min.js")}}"></script>
<script type="text/javascript" src="{{URL::asset ("assets/js/owl.carousel.min.js")}}"></script>
<script type="text/javascript" src="{{URL::asset ("assets/js/jquery.trackpad-scroll-emulator.min.js")}}"></script>
<script type="text/javascript" src="{{URL::asset ("assets/js/jquery.nouislider.all.min.js")}}"></script>


<script type="text/javascript" src="{{URL::asset ("assets/js/custom.js")}}"></script>
<script type="text/javascript" src="{{URL::asset ("assets/js/maps.js")}}"></script>

<script>
    var _latitude = 40.7344458;
    var _longitude = -73.86704922;
    var element = "map-homepage";
    var markerTarget = "sidebar"; // use "sidebar", "infobox" or "modal" - defines the action after click on marker
    var sidebarResultTarget = "sidebar"; // use "sidebar", "modal" or "new_page" - defines the action after click on marker
    heroMap(_latitude,_longitude, element, markerTarget, sidebarResultTarget);
</script>

<script type="text/javascript">

    $(document).ready(function() {

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

    });

</script>