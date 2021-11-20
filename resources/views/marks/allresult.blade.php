@extends('layouts.layout')
@section('content')
<div class="container">

  <div class="class">
    <br><br><br><br>
    <table id="customers">
      <tr>
        <th style="background:black; color: white">Form 1</th>
      </tr>
      <tr>
        <th class="col-md-1"></th>
        <th class="col-md-2">Student First Name</th>
        <th class="col-md-2">Student Last Name</th>
        <th class="col-md-1">First</th>
        <th class="col-md-1">Second</th>
        <th class="col-md-1">Third</th>
        <th class="col-md-1">Fourth</th>
        <th class="col-md-1">Fifth</th>
        <th class="col-md-1">Sixth</th>
      </tr>
      @foreach ($res as $user)
      @if($user->class_id == 1)
      <tr>
        <td class="col-md-1">{{$user->student_id}}</td>
        <td class="col-md-2">{{$user->last_name}}</td>
        <td class="col-md-2">{{$user->first_name}}</td>
        <td class="col-d-1">{{$user->mark1}}</td>
        <td class="col-d-1">{{$user->mark2}}</td>
        <td class="col-d-1">{{$user->mark3}}</td>
        <td class="col-d-1">{{$user->mark4}}</td>
        <td class="col-d-1">{{$user->mark5}}</td>
        <td class="col-d-1">{{$user->mark6}}</td>
      </tr>
      @endif
      @endforeach




      <table id="customers">
        <tr>
          <th style="background:black; color: white">Form 2</th>
        </tr>
        <tr>
          <th class="col-md-1"></th>
          <th class="col-md-2">Student First Name</th>
          <th class="col-md-2">Student Last Name</th>
          <th class="col-md-1">First</th>
          <th class="col-md-1">Second</th>
          <th class="col-md-1">Third</th>
          <th class="col-md-1">Fourth</th>
          <th class="col-md-1">Fifth</th>
          <th class="col-md-1">Sixth</th>
        </tr>
      @foreach ($res as $user)
      @if($user->class_id == 2)
      <tr>
        <td class="col-md-1">{{$user->student_id}}</td>
        <td class="col-md-2">{{$user->last_name}}</td>
        <td class="col-md-2">{{$user->first_name}}</td>
        <td class="col-d-1">{{$user->mark1}}</td>
        <td class="col-d-1">{{$user->mark2}}</td>
        <td class="col-d-1">{{$user->mark3}}</td>
        <td class="col-d-1">{{$user->mark4}}</td>
        <td class="col-d-1">{{$user->mark5}}</td>
        <td class="col-d-1">{{$user->mark6}}</td>
      </tr>
      @endif
      @endforeach


      <table id="customers">
        <tr>
          <th style="background:black; color: white">Form 3</th>
        </tr>
        <tr>
          <th class="col-md-1"></th>
          <th class="col-md-2">Student First Name</th>
          <th class="col-md-2">Student Last Name</th>
          <th class="col-md-1">First</th>
          <th class="col-md-1">Second</th>
          <th class="col-md-1">Third</th>
          <th class="col-md-1">Fourth</th>
          <th class="col-md-1">Fifth</th>
          <th class="col-md-1">Sixth</th>
        </tr>

      @foreach ($res as $user)
      @if($user->class_id == 3)
      <tr>
        <td class="col-md-1">{{$user->student_id}}</td>
        <td class="col-md-2">{{$user->last_name}}</td>
        <td class="col-md-2">{{$user->first_name}}</td>
        <td class="col-d-1">{{$user->mark1}}</td>
        <td class="col-d-1">{{$user->mark2}}</td>
        <td class="col-d-1">{{$user->mark3}}</td>
        <td class="col-d-1">{{$user->mark4}}</td>
        <td class="col-d-1">{{$user->mark5}}</td>
        <td class="col-d-1">{{$user->mark6}}</td>
      </tr>
    @endif
    @endforeach

      <table id="customers">
        <tr>
          <th style="background:black; color: white">Form 4</th>
        </tr>
        <tr>
          <th class="col-md-1"></th>
          <th class="col-md-2">Student First Name</th>
          <th class="col-md-2">Student Last Name</th>
          <th class="col-md-1">First</th>
          <th class="col-md-1">Second</th>
          <th class="col-md-1">Third</th>
          <th class="col-md-1">Fourth</th>
          <th class="col-md-1">Fifth</th>
          <th class="col-md-1">Sixth</th>
        </tr>

      @foreach ($res as $user)
    @if($user->class_id == 4)
    <tr>
      <td class="col-md-1">{{$user->student_id}}</td>
      <td class="col-md-2">{{$user->last_name}}</td>
      <td class="col-md-2">{{$user->first_name}}</td>
      <td class="col-d-1">{{$user->mark1}}</td>
      <td class="col-d-1">{{$user->mark2}}</td>
      <td class="col-d-1">{{$user->mark3}}</td>
      <td class="col-d-1">{{$user->mark4}}</td>
      <td class="col-d-1">{{$user->mark5}}</td>
      <td class="col-d-1">{{$user->mark6}}</td>
    </tr>
    @endif
    @endforeach

      <table id="customers">
        <tr>
          <th style="background:black; color: white">Form 5</th>
        </tr>
        <tr>
          <th class="col-md-1"></th>
          <th class="col-md-2">Student First Name</th>
          <th class="col-md-2">Student Last Name</th>
          <th class="col-md-1">First</th>
          <th class="col-md-1">Second</th>
          <th class="col-md-1">Third</th>
          <th class="col-md-1">Fourth</th>
          <th class="col-md-1">Fifth</th>
          <th class="col-md-1">Sixth</th>
        </tr>

      @foreach ($res as $user)
    @if($user->class_id == 5)
    <tr>
      <td class="col-md-1">{{$user->student_id}}</td>
      <td class="col-md-2">{{$user->last_name}}</td>
      <td class="col-md-2">{{$user->first_name}}</td>
      <td class="col-d-1">{{$user->mark1}}</td>
      <td class="col-d-1">{{$user->mark2}}</td>
      <td class="col-d-1">{{$user->mark3}}</td>
      <td class="col-d-1">{{$user->mark4}}</td>
      <td class="col-d-1">{{$user->mark5}}</td>
      <td class="col-d-1">{{$user->mark6}}</td>
    </tr>
      @endif
      @endforeach
      <table id="customers">
        <tr>
          <th style="background:black; color: white">LowerSixth</th>
        </tr>
        <tr>
          <th class="col-md-1"></th>
          <th class="col-md-2">Student First Name</th>
          <th class="col-md-2">Student Last Name</th>
          <th class="col-md-1">First</th>
          <th class="col-md-1">Second</th>
          <th class="col-md-1">Third</th>
          <th class="col-md-1">Fourth</th>
          <th class="col-md-1">Fifth</th>
          <th class="col-md-1">Sixth</th>
        </tr>
      @foreach ($res as $user)
      @if($user->class_id == 6)
      <tr>
        <td class="col-md-1">{{$user->student_id}}</td>
        <td class="col-md-2">{{$user->last_name}}</td>
        <td class="col-md-2">{{$user->first_name}}</td>
        <td class="col-d-1">{{$user->mark1}}</td>
        <td class="col-d-1">{{$user->mark2}}</td>
        <td class="col-d-1">{{$user->mark3}}</td>
        <td class="col-d-1">{{$user->mark4}}</td>
        <td class="col-d-1">{{$user->mark5}}</td>
        <td class="col-d-1">{{$user->mark6}}</td>
      </tr>
      @endif
      @endforeach
      <table id="customers">
        <tr>
          <th style="background:black; color: white">UpperSixth</th>
        </tr>
        <tr>
          <th class="col-md-1"></th>
          <th class="col-md-2">Student First Name</th>
          <th class="col-md-2">Student Last Name</th>
          <th class="col-md-1">First</th>
          <th class="col-md-1">Second</th>
          <th class="col-md-1">Third</th>
          <th class="col-md-1">Fourth</th>
          <th class="col-md-1">Fifth</th>
          <th class="col-md-1">Sixth</th>
        </tr>

      @foreach ($res as $user)
      @if($user->class_id == 7)
      <tr>
        <td class="col-md-1">{{$user->student_id}}</td>
        <td class="col-md-2">{{$user->last_name}}</td>
        <td class="col-md-2">{{$user->first_name}}</td>
        <td class="col-d-1">{{$user->mark1}}</td>
        <td class="col-d-1">{{$user->mark2}}</td>
        <td class="col-d-1">{{$user->mark3}}</td>
        <td class="col-d-1">{{$user->mark4}}</td>
        <td class="col-d-1">{{$user->mark5}}</td>
        <td class="col-d-1">{{$user->mark6}}</td>
      </tr>
      @endif
      @endforeach
      <table>
        <tr class="row col-md-8">
          <div class="container">
            <div class="row">
              <a href="/insert/insertmarks" class="btn btn-primary"> <h1>Back</h1></a>
            </div>
          </div>
        </tr>
      </table>
      @endsection
