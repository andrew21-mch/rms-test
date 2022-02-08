@extends('layouts.layout')
@section('content')
<div class="container" style="padding-top:130px">
  <form action="/registStudent" method="post">
    @csrf
    <h1 class="row justify-content-center">Add Student to Class</h1><br>

      <div class="row justify-content-center mt-2">
        <div class="form-group col-md-4 mt-2">
          <label for="first_name">Student First Name</label>
          <input type="text" class="form-control" id="first_name" name="student_first_name" >
          <span class="text-danger">@error ('student_first_name') {{$message}} @enderror</span>
        </div>
        <div class="form-group col-md-4 mt-2">
          <label for="last_name">Student Last Name</label>
          <input type="text" class="form-control" id="last_name" name="student_last_name">
          <span class="text-danger">@error ('student_last_name') {{$message}} @enderror</span>
        </div>
        <div class="form-group col-md-2 mt-2">
          <label for="reg_num">Reg: Number</label>
          @if(Session::has('err'))
            <div class="alert alert-warning">>
                <span class="admin_name">Hello {{Session::get('err')}}</span>
            </div>
        @endif
          <input type="text" class="form-control" id="reg_num" name="reg_num">
          <span class="text-danger">@error ('student_last_name') {{$message}} @enderror
           </span>
        </div>

      </div>

      <div class="row justify-content-center mt-2">
        <div class="form-group col-md-3 mt-2" >
          <label for="dob">Date Of Birth</label>
          <input type="date" class="form-control" id="dob" name="date_of_birth" >
          <span class="text-danger">@error ('date_of_birth') {{$message}} @enderror</span>
        </div>
        <div class="form-group col-md-3 mt-2">
          <label for="pob">Place Of Birth</label>
          <input type="text" class="form-control" id="pob" name="place_of_birth">
          <span class="text-danger">@error ('place_of_birth') {{$message}} @enderror</span>
        </div>
        <div class="form-group col-md-4 mt-2">
          <label for="student_region">Region</label>
          <select class="form-control" id="student_region" name="student_region">
            <option value="" >Chose Region</option>
            <option value="Far North">Far North</option>
            <option value="North">North</option>
            <option value="Adamawa">Adamawa</option>
            <option value="East">East</option>
            <option value="Litoral">Litoral</option>
            <option value="South">South</option>
            <option value="South West">South West</option>
            <option value="North West">North West</option>
            <option value="Center">Center</option>
            <option value="West">West</option>


          </select>
          <span class="text-danger">@error ('student_region') {{$message}} @enderror</span>
        </div>

    </div>

    <div class="row justify-content-center mt-2">
      <div class="form-group col-md-3">
        <label for="student_class">Student Class</label>
        <select class="form-control" name="student_class" id="student_class">
          <option value="" >Chose class</option>
          @foreach ($class as $class)
          <option value="{{$class->id}}">{{$class->class_name}}</option>
          @endforeach
        </select>
        <span class="text-danger">@error ('student_class') {{$message}} @enderror</span>
      </div>
      <div class="form-group col-md-2">
        <label for="student_class">Student Option</label>
        <select class="form-control" name="student_option" id="student_option">
          <option value="">Chose Option</option>
          <option value="1">General</option>
          <option value="2">Commercial</option>
          <option value="3">Technical</option>
        </select>
        <span class="text-danger">@error ('student_option') {{$message}} @enderror</span>
      </div>
      <div class="form-group col-md-2">
        <label for="student_series">Student Series</label>
        <select class="form-control" name="student_series" id="student_series">
          <option value="">Chose Series</option>
          <option value="">Not Applicable</option>
          <option value="1">Arts</option>
          <option value="2">Science</option>
        </select>
        <span class="text-danger">@error ('student_series') {{$message}} @enderror</span>
      </div>
      <div class="form-group col-md-3">
        <label for="gender">Gender</label>
        <select class="form-control" name="student_gender" id="student_gender">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
        <span class="text-danger">@error ('student_gender') {{$message}} @enderror</span>
      </div>

  </div>
  <div class="row justify-content-center mt-2">

    <div class="form-group col-md-3 mt-2">
      <label for="fathers_name">Fathers Name</label>
      <input type="text" class="form-control" id="fathers_name" name="fathers_name">
      <span class="text-danger">@error ('fathers_name') {{$message}} @enderror</span>
    </div>
    <div class="form-group col-md-3 mt-2">
      <label for="mothers_name">Mothers Name</label>
      <input type="text" class="form-control" id="mothers_name" name="mothers_name">
      <span class="text-danger">@error ('mothers_name') {{$message}} @enderror</span>
    </div>
    <div class="form-group col-md-4 mt-2">
      <label for="contact">Parents Contact</label>
      <input type="text" class="form-control" id="contact" name="parents_contact">
      <span class="text-danger">@error ('parents_contact') {{$message}} @enderror</span>
    </div>

  </div>


    <div class="col d-flex justify-content-center mt-4">
      <button class="btn btn-primary" type="submit">Register Student</button>
    </div>
  </div>

  </form>
     </div>
@endsection
