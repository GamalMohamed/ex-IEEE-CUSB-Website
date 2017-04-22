<!DOCTYPE html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>IEEE-CUSB</title>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
 <!--bootstrap -->

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="{{URL::to('js/jquery.min.js')  }}"></script>
        <!-- libraries from downloaded theme !-->
    <link href="{{URL::to('css/theme/font-awesome.css')  }}" rel="stylesheet" type="text/css">
    <link href="{{URL::to('css/theme/animate.min.css')  }}" rel="stylesheet" type="text/css">
    <link href="{{URL::to('css/theme/owl.carousel.css')  }}" rel="stylesheet" type="text/css">
    <link href="{{URL::to('css/theme/owl.transitions.css')  }}" rel="stylesheet" type="text/css">
    <link href="{{URL::to('css/theme/prettyPhoto.css')  }}" rel="stylesheet" type="text/css">
    <link href="{{URL::to('css/theme/main.css')  }}" rel="stylesheet" type="text/css">
    <link href="{{URL::to('css/theme/responsive.css')  }}" rel="stylesheet" type="text/css">
    <link href="{{URL::to('css/foundation.min.css')  }}" rel="stylesheet" type="text/css">
    <link href="{{URL::to('css/sstyle.css')  }}" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" sizes="144x144"  href="{{URL::to('assets/images/theme/ico/favicon.ico')}}">

    <link rel="shortcut icon"
          href="{{URL::to('assets/images/theme/ico/apple-touch-icon-144-precomposed.png')}}">

    <link rel="shortcut icon"
          href="{{URL::to('assets/images/theme/ico/apple-touch-icon-114-precomposed.png')}}" sizes="114x114">

    <link rel="shortcut icon"
          href="{{URL::to('assets/images/theme/ico/apple-touch-icon-72-precomposed.png')}}" sizes="72x72">

    <link rel="shortcut icon"
          href="{{URL::to('assets/images/theme/ico/apple-touch-icon-57-precomposed.png')}}">





    <STYLE>
    body{
    background-color:white;
    }
</STYLE>

</head>
<body  id="home" class="homepage" >

@include('partials.header')


@yield('content')
@yield('script')
@include('partials.footer')


<script src="{{URL::to('js/bootstrap.min.js')  }}"></script>



<script src="{{URL::to('js/theme/jquery.js')  }}"></script>
<!--<script src="http://maps.google.com/maps/api/js?sensor=true"></script> -->
<script src="{{URL::to('js/theme/owl.carousel.min.js')  }}"></script>
<script src="{{URL::to('js/theme/mousescroll.js')  }}"></script>
<script src="{{URL::to('js/theme/smoothscroll.js')  }}"></script>
<script src="{{URL::to('js/theme/jquery.prettyPhoto.js')  }}"></script>
<script src="{{URL::to('js/theme/jquery.isotope.min.js')  }}"></script>
<script src="{{URL::to('js/theme/jquery.inview.min.js')  }}"></script>
<script src="{{URL::to('js/theme/wow.min.js')  }}"></script>
<script src="{{URL::to('js/theme/main.js')  }}"></script>
</body>
</html>
