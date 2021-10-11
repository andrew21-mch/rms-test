@extends('layouts.classlistlayout')
@section('content')
<div class="class">
  <br><br><br><br>
  <table id="customers">
    <h2>Form 1</h2>
      @if(Session::get('user1')==200)
    <tr>
      <th>Student First Name</th>
      <th>Student Last Name</th>
      <th>Gender</th>
      <th>DOB</th>
      <th>Action</th>
    </tr>

    @foreach ($data as $user)
    @if($user->class_id == 1)
    <tr>
      <td>{{$user->first_name}}</td>
      <td>{{$user->last_name}}</td>
      <td>{{$user->gender}}</td>
      <td>{{$user->date_of_birth}}</td>

      <td>
        <a href="view/{{$user->id}}"><span class="iconify" data-icon="emojione-v1:eye"></span></a>
        <a href="edit/{{$user->id}}"><span class="iconify" data-icon="carbon:add-filled"></span></a>
        <a href="delete/{{$user->id}}"><span class="iconify" data-icon="bi:trash-fill"></span></a>
      </td>
    </tr>

    @endif
    @endforeach
  @else

  <tr>
    <th>Student First Name</th>
    <th>Student Last Name</th>
    <th>Gender</th>
    <th>DOB</th>
    <th>Action</th>
  </tr>

  @foreach ($data as $user)
  @if($user->class_id == 1)
  <tr>
    <td>{{$user->first_name}}</td>
    <td>{{$user->last_name}}</td>
    <td>{{$user->gender}}</td>
    <td>{{$user->date_of_birth}}</td>

    <td>
      <a href="view/{{$user->id}}"><span class="iconify" data-icon="emojione-v1:eye"></span></a>
      <a href="edit/{{$user->id}}"><span class="iconify" data-icon="carbon:add-filled"></span></a>
      <a href="delete/{{$user->id}}"><span class="iconify" data-icon="bi:trash-fill"></span></a>
    </td>
  </tr>
  @endif
  @endforeach
  @endif
    @endsection
