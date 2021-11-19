<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{URL::asset('css/report.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style media="screen">
    body{
      height: 100%;
      }
      .container{
        margin-top: 3%;
      }
      .form-group{
        width: 100%;
        height: 30%;
      }
      .col-md-10{
      width: 100%;
      }
      .card-body{
        width: 100%;
        height: 60%; }
      .row{
        width: 98%;
      }
    </style>
  </head>
  <body style="background-image: url('images/cast.jpeg'); background-repeat:no-repeat; background-size: cover; background-position:fixed">
        <nav class="nav justify-content-end  navbar-light bg-light">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="/register" >Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="login" data-toggle="login" href="/" role="tab" >Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact">Contact</a>
            </li>
          </ul>
        </nav>
        <div class="container" style="padding:60px">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                <div class="card-header">Signup As Teacher</div>

                <div class="card-body">
                  <form action="/create_account" method="post">
                    @csrf
                        <div class="form-group row justify-content-center">
                              <div class="col-md-5">
                                <label for="name" >First Name</label>
                                  <input id="fname" type="text" class="form-control @error('name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="name" autofocus>

                                  @error('fname')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                              <div class="col-md-5">
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

                            <div class="col-md-10">
                              <label for="email">Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <div class="col-md-10">
                              <label for="phone" >{{ __('Phone Number') }}</label>
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-5">
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
                            <div class="col-md-5">
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
                            <div class="col-md-5 mt-2">
                              <label for="password" >{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-5 mt-2">
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
        </div>
    </div>
</div>
</body>
</html>
