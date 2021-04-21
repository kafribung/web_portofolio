@extends('layouts.master_dash')
@section('title', 'Dashboard')
@section('content')

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="{{ asset('dash/img/sidebar-1.jpg') }}">
        <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->

        <div class="sidebar-wrapper">
            <div class="logo text-center">
                <h4>Admin Dashboard</h4>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="/dashboard">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="/about">
                        <i class="pe-7s-user"></i>
                        <p>About</p>
                    </a>
                </li>
                <li>
                    <a href="/message">
                        <i class="pe-7s-note2"></i>
                        <p>Message</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <p>
                                    Logout?
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    Logout?
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="content text-center">
                                <h2>Selamat Datang {{$user->name}}</h2>
                                <p>Jangan lupa berdoa dan berdoa</p>
                                <h3 class="text-danger">Karya Sejarahmu !</h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


