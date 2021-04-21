@extends('layouts.master')
@section('title', 'Kafri Bung')
@section('content')

<section id="about" class="bg-light p-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class=" mt-4 tebal">About & Message</h2>
                <hr color="#d9ffcc" class="mt-0" />
            </div>
        </div>

        <div class="row">
            <div class="col-sm-10 offset-sm-1">
                <p class="deskripsi mt-2 text-justify">
                    {!!$about->about!!}
                </p>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-8 container-fluid">
                <div class="bg-transparent p-4 border border-info">
                    <h2 class="text-info text-center">Message</h2>
                    @if (session('msg'))
                        <p class="alert alert-success">{{session('msg')}}</p>
                    @endif
                    <form action="/message" method="POST">
                        @csrf
                        <div class="form-group ">
                            <label for="name">Name</label>
                            <input type="text " class="form-control" name="name" id="name" autocomplete="off" autofocus>
                        </div>
                        <div class="form-group ">
                            <label for="exampleInputEmail1 ">Email address</label>
                            <input type="email " name="email" class="form-control " id="exampleInputEmail1 " aria-describedby="emailHelp ">
                            <small id="emailHelp " class="form-text text-muted ">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group ">
                            <label for="msg">Message</label>
                            <textarea class="form-control " name="msg" id="msg"></textarea>
                        </div>

                        <button type="submit " class="btn btn-info btn-sm btn-block">Send</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection

