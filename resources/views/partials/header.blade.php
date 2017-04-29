
<header id="header">
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar" href="#"><img src="{{ asset('images/logo.png')}}"
                 style="height: 30px"    alt="logo"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{{Route('home.index')}}"><span class="glyphicon glyphicon-th" aria-hidden="true"></span> Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Register <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{Route('register.participant')}}"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                                Participant</a></li>
                        <li><a href="{{Route('register.member')}}"><span class="glyphicon glyphicon-th-list"
                                                                         aria-hidden="true"></span>
                                Volunteer</a></li>


                        <li role="separator" class="divider"></li>
                        <li><a href="#"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                                Member</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        About <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{Route('about')}}">About us</a></li>
                        <li><a href="{{Route('contact')}}">Contact us</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{Route('board')}}">Board</a></li>
                        <li><a href="{{Route('halloffame')}}">Hall of fame</a></li>

                    </ul>
                </li>

                <li><a href="{{Route('events.index')}}">Events</a></li>
                <li><a href="{{Route('workshops.index')}}">Workshops</a></li>

            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
</header>
