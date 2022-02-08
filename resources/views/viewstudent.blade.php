@extends('layouts.layout')
@section('content')
<form action="viewstudent" method=""> <br><br><br><br>
  <h1 class="row justify-content-center">Detailed Student Info</h1><br>

  <div class="row justify-content-center">
      <div class="form-group col-md-5 mt-2">
        <label for="first">First Name</label>
        <input type="email" class="form-control" id="first" value="{{$data[0]->first_name}}" readonly>
      </div>
      <div class="form-group col-md-5 mt-2">
        <label for="last">Last Name</label>
        <input type="text" class="form-control" id="last" value="{{$data[0]->last_name}}" readonly>
      </div>
      <div class="form-group col-md-5 mt-2">
        <label for="gender">Gender</label>
        <input type="text" class="form-control" id="gender" value="{{$data[0]->gender}}" readonly>
      </div><br>
      <div class="form-group col-md-5 mt-2">
        <label for="dob">Date Of Birth</label>
        <input type="date" class="form-control" id="dob" value="{{$data[0]->date_of_birth}}" readonly>
      </div><br>
      <div class="form-group col-md-3 mt-2">
        <label for="class">Class</label>
        <input type="text" class="form-control" id="class" value="{{$data[0]->class_name}}" readonly>
      </div>
      <div class="form-group col-md-3 mt-2">
        <label for="class">Series</label>
        <input type="text" class="form-control" id="class" value="{{$data[0]->Series}}" readonly>
      </div>
      <div class="form-group col-md-4 mt-2">
        <label for="class">Option</label>
        <input type="text" class="form-control" id="class" value="{{$data[0]->name}}" readonly>
      </div>
      
      <br>
        <div class="form-group col-md-4 mt-2">
          <label for="city">City</label>
          <input  id="city" type="text" class="form-control mt-2" value="{{$data[0]->place_of_birth}}" readonly>
        </div><br>
        <div class="form-group col-md-4 mt-2">
          <label for="state">Country</label>
          <input type="text" id="state" class="form-control mt-2" value="Cameroon" readonly>
        </div>
        <div class="form-group col-md-2 mt-2">
          <label for="inputZip">Zip</label>
          <input type="text" class="form-control mt-2" id="inputZip" readonly>
        </div>
  @if(Session::get('user1') == 200)
  <div class="col d-flex justify-content-center mt-4">
    <a href="/card1/{{$data[0]->id}}" class="btn btn-primary" style="margin:10px">View Term 1 Report</a>
    <a href="/card2/{{$data[0]->id}}" class="btn btn-primary" style="margin:10px">View Term 2 Report</a>
    <a href="/card3/{{$data[0]->id}}" class="btn btn-primary" style="margin:10px">View Term 3 Report</a>
  </div>
  @endif
</div>

</form>
@endsection
