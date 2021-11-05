@extends('layouts.layout')
@section('content')
<div class="container" style="padding:120px">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
        <div class="card-header"><center><h1>Register Teacher</h1></center></div>

        <div class="card-body">
          <form action="/create_account" method="post">
            @csrf
                <div class="form-group row justify-content-center">
                      <div class="col-md-6">
                        <label for="name" >First Name</label>
                          <input id="fname" type="text" class="form-control @error('name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="name" autofocus>

                          @error('fname')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                      <div class="col-md-6">
                        <label for="lname" >Last Name</label>
                          <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="lname">

                          @error('lname')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                </div>
                <div class="form-group row justify-content-center">

                </div>
                <div class="form-group row justify-content-center">

                    <div class="col-md-12">
                      <label for="email">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                @if(Session::get('user1')==200)
                <div class="form-group row justify-content-center">
                    <div class="col-md-6">
                      <label for="phone" >{{ __('Phone Number') }}</label>
                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  <div class="col-md-6">
                    <label for="role" >{{ __('Role') }}</label>
                      <select class="form-control" name="">
                        <option value="">Select Role</option>
                        <option value="100">Teacher</option>
                        <option value="200">Admin</option>
                      </select>

                      @error('role')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                  </div>

                @else
                <div class="form-group row justify-content-center">
                    <div class="col-md-12">
                      <label for="phone" >{{ __('Phone Number') }}</label>
                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                @endif
                <div class="form-group row justify-content-center">
                    <div class="col-md-6">
                      <label for="subject" >{{ __('Subject') }}</label>
                      <select class="form-control" name="subject">
                        <option value="">Select Subject</option>
                        @foreach($subject as $subject)
                        <option value="{{$subject->id}}">{{$subject->name}}</option>
                        @endforeach
                      </select>
                          @error('subject')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                      <label for="password-confirm" >{{ __('Option') }}</label>
                      <select class="form-control" name="option">
                        <option value="">Select Option</option>
                        @foreach($option as $option)
                        <option value="{{$option->id}}">{{$option->name}}</option>
                        @endforeach
                      </select>
                      @error('option')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>



                <div class="form-group row justify-content-center">
                    <div class="col-md-6 mt-1">
                      <label for="password" >{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6 mt-1">
                      <label for="password-confirm" >{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>


                <div class="form-group row justify-content-center">

                </div>

                <div class="form-group row justify-content-center mb-0">
                    <div class="col-md-6 offset-md-4 " style="margin-top:15px">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
