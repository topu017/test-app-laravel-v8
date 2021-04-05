<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'News Portal') }}</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Kanit|PT+Sans+Narrow|Share+Tech" rel="stylesheet">
    <script src="{{ asset('js/jquery-2.1.1.min.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
</head>
<body>
<section id="top">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header clearfix">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>      </button>
                <div class="brand_1 clearfix"><a class="navbar-brand" href="{{ url('/') }}">PORTAL</a></div>
            </div>
            <div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar_left">
                        <li><a class="" href="../../../#topnews">Top News</a></li>
                        <li><a class="" href="../../../#goodnews">Good News</a></li>
                        <li><a class="" href="../../../#education_youth">Education & Youth</a></li>
                        <li><a class=""  href="../../../#editorial">Editorial</a></li>
                        <li><a class=""  href="../../../#journal">Journal</a></li>
                        <li><a  class="" href="../../../#features">Features</a></li>
                        <li><a  class="" href="../../../#bangla">Bangla</a></li>
                        {{--<li class="dropdown dropdown-large top_menu_icon_wrapper">--}}
                        {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                        {{--<div class="top_menu_icon"></div>--}}
                        {{--<div class="top_menu_icon"></div>--}}
                        {{--<div class="top_menu_icon"></div>--}}
                        {{--Bangla--}}
                        {{--</a>--}}

                        {{--<ul class="dropdown-menu dropdown-menu-large row">--}}
                        {{--<li class="col-sm-3">--}}
                        {{--<a class="space_none" href="#"><img src="{{ asset('img/122.jpg') }}" width="100%"></a>--}}
                        {{--<a class="space_none" href="#"><img src="{{ asset('img/123.jpg') }}" width="100%"></a>					</li>--}}
                        {{--<li class="col-sm-3">--}}
                        {{--<a class="space_none" href="#"><img src="{{ asset('img/124.jpg') }}" width="100%"></a>--}}
                        {{--<a class="space_none" href="#"><img src="{{ asset('img/125.jpg') }}" width="100%"></a>					</li>--}}
                        {{--<li class="col-sm-3">--}}
                        {{--<ul>--}}
                        {{--<li class="dropdown-header">Input groups</li>--}}
                        {{--<li><a href="#">Basic example</a></li>--}}
                        {{--<li><a href="#">Sizing</a></li>--}}
                        {{--<li><a href="#">Checkboxes and radio addons</a></li>--}}
                        {{--<li class="divider"></li>--}}
                        {{--<li class="dropdown-header">Navs</li>--}}
                        {{--<li><a href="#">Tabs</a></li>--}}
                        {{--<li><a href="#">Pills</a></li>--}}
                        {{--<li><a href="#">Justified</a></li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li class="col-sm-3">--}}
                        {{--<ul>--}}
                        {{--<li class="dropdown-header">Navbar</li>--}}
                        {{--<li><a href="#">Default navbar</a></li>--}}
                        {{--<li><a href="#">Buttons</a></li>--}}
                        {{--<li><a href="#">Text</a></li>--}}
                        {{--<li><a href="#">Non-nav links</a></li>--}}
                        {{--<li><a href="#">Component alignment</a></li>--}}
                        {{--<li><a href="#">Fixed to top</a></li>--}}
                        {{--<li><a href="#">Fixed to bottom</a></li>--}}
                        {{--<li><a href="#">Static top</a></li>--}}
                        {{--<li><a href="#">Inverted navbar</a></li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                    </ul>
                    <ul class="nav navbar-nav navbar-right navbar_right">
                        <li><input class="form-control"  placeholder="Search"type="text"></li>
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right navbar_dropdown" aria-labelledby="navbarDropdown">
                                    <ul>
                                        <li>
                                            @if(Auth::user()->role == 'admin')
                                                <a href="{{ url('admin') }}"><i class="fa fa-fw fa-dashboard"></i>My Account</a>
                                            @elseif(Auth::user()->role == 'editor')
                                                <a href="{{ url('editor') }}"><i class="fa fa-fw fa-dashboard"></i>My Account</a>
                                            @elseif(Auth::user()->role == 'reporter')
                                                <a href="{{ url('reporter') }}"><i class="fa fa-fw fa-dashboard"></i>My Account</a>
                                            @else
                                                <a href="{{ url('home') }}"><i class="fa fa-fw fa-dashboard"></i>My Account</a>
                                            @endif
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                <i class="fa fa-fw fa-lock"></i>{{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            @endguest
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</section>