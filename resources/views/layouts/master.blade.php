<!DOCTYPE html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
 <!--bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">
    <link href="{{URL::to('css/layout/layout.css')  }}" rel="stylesheet" type="text/css">
    <link href="{{URL::to('css/demo.css')  }}" rel="stylesheet" type="text/css">
    <link href="{{URL::to('css/material-kit.css')  }}" rel="stylesheet" type="text/css">

    <script src="{{URL::to('js/jquery.min.js')  }}"></script>

</head>
<body>
@include('partials.header')
<div class="container" style="border:0px solid black;">
@yield('content')
</div>


<script src="{{URL::to('js/bootstrap.min.js')  }}"></script>
<script src="{{URL::to('js/bootstrap-datepicker.js')  }}"></script>
<script src="{{URL::to('js/material.min.js')  }}"></script>
<script src="{{URL::to('js/material-kit.js')  }}"></script>
<script src="{{URL::to('js/nouislider.min.js')  }}"></script>
<script src="{{URL::to('js/jssor.slider-22.1.9.mini.js')  }}"></script>
</body>
</html>
