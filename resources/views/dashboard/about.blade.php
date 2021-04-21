@extends('layouts.master_dash')
@section('title', 'About')
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
                    <a class="navbar-brand" href="#">About</a>
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

                @if (session('msg'))
                    <p class="alert alert-info">{{session('msg')}}</p>
                @endif

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="content">
                                <a href="/about/create" class="btn btn-primary btn-sm pull-right">+</a>
                                <table class="table table-hover">
                                    <thead class="table-success">
                                    <tr>
                                        <th scope="col">About</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($abouts as $about)
                                            <tr>
                                                <td>{!!$about->about!!}</td>
                                                <td>
                                                    <a href="/about/{{$about->id}}/edit" class="btn btn-warning  btn-sm d-inline"><i class="fa fa-edit"></i></a>
                                                    <button type="submit" onclick="deleteData({{$about->id}})" class="btn btn-danger  btn-sm d-inline"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@section('delete')
<script>

    function deleteData(id){

        var csrf_token=$('meta[name="csrf_token"]').attr('content');
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    url : "{{ url('/about')}}" + '/' + id,
                    type : "GET",
                    data : {'_method' : 'DELETE', '_token' :csrf_token},
                    success: function(data){
                        swal("Poof! Your imaginary file has been deleted!", {
                        icon: "success",
                        });
                        location.reload();

                    },
                    error : function(){
                        swal({
                            title: 'Opps...',
                            text : data.message,
                            type : 'error',
                            timer : '1500'
                        })
                    }
                })
            } else {
            swal("Your imaginary file is safe!");
            }
        });


    }

    </script>
@endsection
@endsection


