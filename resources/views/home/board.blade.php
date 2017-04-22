@extends('layouts.master')
@section('content')

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/board.css">




<div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-6">


            <div class="ih-item circle colored effect15 left_to_right"><a  href="#">
                    <div class="img"><img src="images/IEEE-Logo.jpg" alt="img"></div>
                    <div class="info">
                        <div class="info-back">
                            <h3>Name here</h3>
                            <h4>Branch Counselor</h4>
                            <p> email here  </p>
                        </div>
                    </div></a></div>


        </div>

        <div class="col-sm-4">

            <!-- colored -->
            <div class="ih-item circle colored effect15 right_to_left"><a href="#">
                    <div class="img"><img src="images/IEEE-Logo.jpg" alt="img"></div>
                    <div class="info">
                        <div class="info-back">
                            <h3>Name here</h3>
                            <h4>ChairMan</h4>
                            <p> email here   </p>
                        </div>
                    </div></a></div>
            <!-- end colored-->

        </div>
    </div>
    <br>
    <br>
    <!-- end Bottom to top -->


    <!-- Left to right -->
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-6">

            <!-- normal -->
            <div class="ih-item circle colored effect15 left_to_right"><a href="#">
                    <div class="img"><img src="images/IEEE-Logo.jpg" alt="img"></div>
                    <div class="info">
                        <div class="info-back">
                            <h3>Name here</h3>
                            <h4>Vice</h4>
                            <p>
                                email here
                            </p>
                        </div>
                    </div></a></div>
            <!-- end normal -->

        </div>
        <div class="col-sm-4">

            <!-- colored -->
            <div class="ih-item circle colored effect15 right_to_left"><a href="#">
                    <div class="img"><img src="images/IEEE-Logo.jpg" alt="img"></div>
                    <div class="info">
                        <div class="info-back">
                            <h3>Name here</h3>
                            <h4>Treasurer</h4>
                            <p> email here </p>
                        </div>
                    </div></a></div>
            <!-- end colored-->

        </div>
    </div>
    <br>
    <br>
    <!-- end Left to right -->


    <!-- Right to left  -->
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-4">

            <!-- normal -->
            <div class="ih-item circle colored effect15 left_to_right"><a href="#">
                    <div class="img"><img src="images/IEEE-Logo.jpg" alt="img"></div>
                    <div class="info">
                        <div class="info-back">
                            <h3>Name here</h3>
                            <h4>Secretary</h4>
                            <p>
                                email here

                            </p>
                        </div>
                    </div></a></div>
            <!-- end normal -->

        </div>

    </div>

</div>


@endsection