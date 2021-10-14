@extends('layouts.layout')
@section('content')
<br><br><br><br>
@if (Session::get('status'))

<div class="alert alert-success alert-block">

    <button type="button" class="close" data-dismiss="alert">×</button>

    <strong>{{Session::get('status')}}</strong>
</div>

@endif

<form class="form" action="/update/{{Session::get('userid')}}" method="post">
  @csrf
    <div class="row justify-content-center col-md-10 ">
      <div class="form-group mt-2 col-md-5 ">
        <label for="first_name">First Name</label>
        <input type="text" class="form-control" id="first_name" name="first_name" value="{{$teacher['teacher_first_name']}}" >
      </div>
      <div class="form-group mt-2 col-md-5 ">
        <label for="last_name">Last Name</label>
        <input type="text" class="form-control" id="last_name" name="last_name" value="{{$teacher['teacher_last_name']}}" >
      </div>
    </div>

    <div class="row justify-content-center col-md-10 ">
      <div class="form-group mt-2 col-md-10">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{$teacher['email']}}" >
      </div>
    </div>
    <div class="row justify-content-center col-md-10">
      <div class="form-group mt-2 col-md-10">
        <label for="phone">Phone Number</label>
        <input type="text" class="form-control" id="phone" name="phone" value="{{$teacher['teacher_phone']}}" >
      </div>
    </div>

  <div class="row justify-content-center col-md-10">
    <div class="form-group mt-2 col-md-10">
      <label for="role">Role</label>
      <input type="text" class="form-control" id="role" name="role" value="{{$teacher['role']}}" >
    </div>
  </div>

    <div class="row justify-content-center col-md-10">
      <div class="form-group mt-2 col-md-4">
        <label for="subject">Subject</label>
        <input type="hidden" class="form-control " id="suject" name="subject" value="{{$teacher['id']}}">
        <input type="text" class="form-control " id="suject" name="subname" value="{{$teacher['name']}}">

      </div>
      <div class="form-group mt-2 col-md-4">
        <label for="town">Town</label>
        <input type="text" class="form-control" id="town" name="country" value="Bamenda" >
      </div>
      <div class="form-group mt-2 col-md-2">
        <label for="country">Country</label>
        <input type="text" class="form-control" id="country" name="country" value="Cameroon" >
      </div>
    </div>
    <div class="row justify-content-center col-md-10">
      <div class="row justify-content-center col-md-4 mt-3">
        <button type="submit" class="btn btn-primary">Update</button>

      </div>
    </div>

  </div>
  
</form>
@endsection
