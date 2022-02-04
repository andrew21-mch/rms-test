@extends('layouts.layout')
@section('content')
<div class="container" style="padding-top:130px">
  <form action="/registSubject" method="post">
    @csrf
    <h1 class="row justify-content-center">Add Subject</h1><br>

      <div class="row justify-content-center mt-2">
        <div class="form-group col-md-10 mt-2">
          <label for="name">Subject Name</label>
          <input type="text" class="form-control" id="name" name="name" required>
          <span class="text-danger">@error ('name') {{ $message }} @enderror</span>
          </div>
        </div>

        <div class="row justify-content-center mt-2">
          <div class="form-group col-md-10 mt-2">
            <label for="code">Subject Code</label>
            <input type="text" class="form-control" id="code" name="code" required>
            <span class="text-danger">@error ('code') {{ $message }} @enderror</span>
            </div>
          </div>

      <div class="row justify-content-center mt-2">
        <div class="form-group col-md-10 mt-2" >
          <label for="coef">Subject Coefficient</label>
          <input type="text" class="form-control" id="coef" name="coef" required >
          @error ('coef')<span class="text-danger">{{ $message }}</span> @enderror
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
