<head>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
      <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    
    <link href="{{asset ( "assets/fonts/font-awesome.css")}}" rel="stylesheet" type="text/css">
    <link href="{{asset ("assets/fonts/elegant-fonts.css")}}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{URL::asset ("assets/bootstrap/css/bootstrap.css")}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset ("assets/css/zabuto_calendar.min.css")}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset ("assets/css/owl.carousel.css")}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset("assets/css/jquery.nouislider.min.css")}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset ("assets/css/trackpad-scroll-emulator.css")}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset ("assets/css/style.css")}}" type="text/css">
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <title>{{ config('app.name', 'Eat Map') }}</title>

</head>