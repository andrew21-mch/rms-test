@extends('layouts.app')

@section('content')
<div class="container" style="background-image:url('images/landing.jpeg'); background-repeat:no-repeat; background-size: cover;padding:10% 10%; width:100%">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header btn btn-success" style="color:white; background-color:#440be0">Welcome</div>
                <div class="card-header">{{ __('Saint Francisca Multilingual Education Complex Primary and Secondary School') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row justify-content-center">
                       <center> <div class="col-md-6">
                            <a href="login" class="btn btn-primary" style="width:100px">Login</a>
                        </div></center>
                        <center><div class="col-md-6 justify-content-center">
                            <a href="/register" class="btn btn-primary"style="width:100px">Register</a>
                        </div></center>

                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
