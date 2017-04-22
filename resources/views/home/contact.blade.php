@extends('layouts.master')
@section('content')
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/carousel.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons -->



<center>  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d27634.9629584493!2d31.2028304!3d30.0262306!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x282c4b44cdf7e83c!2sFaculty+Of+Engineering+Cairo+University!5e0!3m2!1sen!2seg!4v1487373933081" width="1300" height="500" frameborder="0" style="border:0" allowfullscreen></iframe> </center>

<!-- contact -->
<div id="contact" class="contact codes">
    <div class="container">
        <div class="contact-row agileits-w3layouts grid_3 grid_4">
            <div class="agileits-title">
                <h3 class="w3ls-hdg">Contact Us</h3>
            </div>
            <div class="col-md-5 contact-w3lsleft">
                <div class="contact-grid agileits">
                    <h4>Get In Touch Right Now </h4>
                    <form action="#" method="post">
                        <div class="styled-input agile-styled-input-top">
                            <input type="text" name="Name" required="">
                            <label>Name</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <input type="text" name="Email" required="">
                            <label>Email</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <input type="text" name="Subject" required="">
                            <label>Subject</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <textarea name="Message" required=""></textarea>
                            <label>Message</label>
                            <span></span>
                        </div>
                        <input type="submit" value="SEND">
                    </form>
                </div>
            </div>
            <div class="col-md-7 contact-w3lsright w3llist-grids-btm2">
                <h6>We'd Love To Hear From You </h6>
                <div class="col-xs-6 address-row">
                    <div class="col-xs-3 address-left">
                        <ul class="social-network social-circle">       <li><a href="#" class="iconss icoFacebook"
                                                                               title="Facebook"><i class="fa fa-facebook"></i></a></li></ul>
                    </div>
                    <div class="col-xs-9 address-right">
                        <br><h5>Facebook</h5>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-xs-6 address-row w3-agileits">
                    <div class="col-xs-3 address-left">
                        <ul class="social-network social-circle">
                            <li><a href="#" class="icoTwitter iconss" title="Twitter"><i class="fa fa-twitter
                            "></i></a></li></ul>						</div>
                    <div class="col-xs-9 address-right">
                        <br>	<h5>Twitter</h5>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-xs-6 address-row">
                    <div class="col-xs-3 address-left">
                        <ul class="social-network social-circle">
                            <li><a href="#" class="icoGoogle iconss" title="Google +"><i class="fa
                            fa-google-plus"></i></a></li></ul>
                    </div>
                    <div class="col-xs-9 address-right">
                        <br>		<h5>Google Plus</h5>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-xs-6 address-row">
                    <div class="col-xs-3 address-left">
                        <ul class="social-network social-circle">
                            <li><a href="#" class="icoLinkedin iconss" title="Linkedin"><i class="fa
                            fa-linkedin"></i></a></li></ul>
                    </div>
                    <div class="col-xs-9 address-right">
                        <br>	<h5>Linkedin</h5>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //contact -->



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap.js"></script>
@endsection