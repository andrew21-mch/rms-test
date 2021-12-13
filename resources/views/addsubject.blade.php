@extends('layouts.layout')
@section('content')
<div class="container" style="padding-top:130px">
  <form action="/registStudent" method="post">
    @csrf
    <h1 class="row justify-content-center">Add Subject</h1><br>

      <div class="row justify-content-center mt-2">
        <div class="form-group col-md-10 mt-2">
          <label for="first_name">Subject Name</label>
          <input type="text" class="form-control" id="first_name" name="student_first_name" >
          <span class="text-danger">@error ('student_first_name') {{$message}} @enderror</span>
          </div>
        </div>

      <div class="row justify-content-center mt-2">
        <div class="form-group col-md-10 mt-2" >
          <label for="coef">Subject Coefficient</label>
          <input type="text" class="form-control" id="dob" name="subject_coef" >
          <span class="text-danger">@error ('date_of_birth') {{$message}} @enderror</span>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="form-group col-md-4">
          <button class="btn btn-primary" type="submit">Register Subject</button>
        </div>
      </div>
  </div>

  </form>
     </div>
@endsection
