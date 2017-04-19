<header id="header">
    <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="{{ asset('images/logo.png')}}" alt="logo"></a>
            </div>

            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="scroll active"><a href="{{Route('home.index')}}">Home</a></li>
                    <li class="scroll"><a href="{{Route('register.member')}}">Volunteer</a></li>
                    <li class="scroll"><a href="{{Route('register.participant')}}">Participant</a></li>
                    <li class="scroll"><a href="{{Route('events.index')}}">Events</a></li>
                    <li class="scroll"><a href="{{Route('workshops.index')}}">Workshops</a></li>
                    <li class="scroll"><a href="#about">Hall of fame</a></li>
                    <li class="scroll"><a href="#meet-team">About us</a></li>
                    <li class="scroll"><a href="#pricing">Contact us</a></li>

                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->
</header><!--/header-->