@extends('layouts.master_dash')
@section('title', 'Edit | About')
@section('content')

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="{{ asset('dash/img/sidebar-2.jpg') }}">
        <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->

        <div class="sidebar-wrapper">
            <div class="logo text-center">
                <h4>Admin Dashboard</h4>
            </div>

            <ul class="nav">
                <li>
                    <a href="/dashboard">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="active">
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
                    <a class="navbar-brand" href="#">Edit About</a>
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
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
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
                            <div class="content">
                                <form action="/about/{{$about->id}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group ">
                                        <textarea class="form-control ckeditor" name="about" id="about">{{old('about') ? old('about') : $about->about}}</textarea>

                                        @if ($errors->has('about'))
                                            <p class="alert alert-danger">{{$errors->first('about')}}</p>
                                        @endif
                                    </div>

                                    <button type="submit " class="btn btn-warning btn-sm">Edit</button>
                                </form>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


