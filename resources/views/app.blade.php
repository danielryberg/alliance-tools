<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Coalition Auth')</title>
    <link rel="stylesheet" href="{{ elixir("css/app.css") }}">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="/" class="site_title"><i class="fa fa-wrench"></i> <span>Coalition Auth</span></a>
                </div>
                <div class="clearfix"></div>
                <div class="profile">
                    <div class="profile_pic">
                        <img src="https://image.eveonline.com/Character/{{ auth()->user()->characters()->primary()->first()->id }}_128.jpg" class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>{{ auth()->user()->characters()->primary()->first()->name }}</h2>
                    </div>
                </div>
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">&nbsp;</div>
                    <div class="menu_section">
                        <h3>Account</h3>
                        <ul class="nav side-menu">
                            <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
                            <li><a><i class="fa fa-database"></i> Services <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="/discord">Discord</a></li>
                                    <li><a href="#">Teamspeak</a></li>
                                </ul>
                            </li>
                            <!--
                            <li><a href="#"><i class="fa fa-users"></i> Groups</a></li>
                            -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="top_nav">
            <div class="nav_menu">
                <nav class="" role="navigation">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="https://image.eveonline.com/Character/{{ auth()->user()->characters()->primary()->first()->id }}_128.jpg" alt="">{{ auth()->user()->characters()->primary()->first()->name }}
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="#"> Profile</a></li>
                                <li><a href="/auth/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">0</span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                <li>
                                    <div class="text-center">
                                        <a>
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="right_col" role="main">
            @yield('content')
        </div>

        <footer>
            <div class="pull-right">
                &copy; Black Sheep Coalition
            </div>
            <div class="clearfix"></div>
        </footer>
    </div>
</div>

<script type="text/javascript" src="{{ elixir("js/app.js") }}"></script>
</body>
</html>