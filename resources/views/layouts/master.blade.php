<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendor.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/flat-admin.css')}}">

    <!-- Theme -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/theme/blue-sky.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/theme/blue.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/theme/red.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/theme/yellow.css')}}">


</head>
<body>
<aside class="app-sidebar" id="sidebar">
    <div class="sidebar-header">
        <a class="sidebar-brand" href="#"><span class="highlight">Flat v3</span> Admin</a>
        <button type="button" class="sidebar-toggle">
            <i class="fa fa-times"></i>
        </button>
    </div>
    <div class="sidebar-menu">
        <ul class="sidebar-nav">
            <li class="active">
                <a href="./index.html">
                    <div class="icon">
                        <i class="fa fa-tasks" aria-hidden="true"></i>
                    </div>
                    <div class="title">Dashboard</div>
                </a>
            </li>
            <li class="@@menu.messaging">
                <a href="./messaging.html">
                    <div class="icon">
                        <i class="fa fa-comments" aria-hidden="true"></i>
                    </div>
                    <div class="title">Messaging</div>
                </a>
            </li>
            <li class="dropdown ">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <div class="icon">
                        <i class="fa fa-cube" aria-hidden="true"></i>
                    </div>
                    <div class="title">UI Kits</div>
                </a>
                <div class="dropdown-menu">
                    <ul>
                        <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> UI Kits</li>
                        <li><a href="./uikits/customize.html">Customize</a></li>
                        <li><a href="./uikits/components.html">Components</a></li>
                        <li><a href="./uikits/card.html">Card</a></li>
                        <li><a href="./uikits/form.html">Form</a></li>
                        <li><a href="./uikits/table.html">Table</a></li>
                        <li><a href="./uikits/icons.html">Icons</a></li>
                        <li class="line"></li>
                        <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Advanced Components</li>
                        <li><a href="./uikits/pricing-table.html">Pricing Table</a></li>
                        <!-- <li><a href="./uikits/timeline.html">Timeline</a></li> -->
                        <li><a href="./uikits/chart.html">Chart</a></li>
                    </ul>
                </div>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <div class="icon">
                        <i class="fa fa-file-o" aria-hidden="true"></i>
                    </div>
                    <div class="title">Pages</div>
                </a>
                <div class="dropdown-menu">
                    <ul>
                        <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Admin</li>
                        <li><a href="./pages/form.html">Form</a></li>
                        <li><a href="./pages/profile.html">Profile</a></li>
                        <li><a href="./pages/search.html">Search</a></li>
                        <li class="line"></li>
                        <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Landing</li>
                        <!-- <li><a href="./pages/landing.html">Landing</a></li> -->
                        <li><a href="./pages/login.html">Login</a></li>
                        <li><a href="./pages/register.html">Register</a></li>
                        <!-- <li><a href="./pages/404.html">404</a></li> -->
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    <div class="sidebar-footer">
        <ul class="menu">
            <li>
                <a href="/" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-cogs" aria-hidden="true"></i>
                </a>
            </li>
            <li><a href="#"><span class="flag-icon flag-icon-th flag-icon-squared"></span></a></li>
        </ul>
    </div>
</aside>


</div>

@include('layouts.header')


<div  id="app">
    @yield('content')
</div>





@stack('scripts')
</html>