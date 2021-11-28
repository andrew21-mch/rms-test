@extends('layouts.layout')
@section('content')
@if(Session::get('user1') == 200)
<form action="viewstudent" method=""> <br><br><br><br>
  <h1 class="row justify-content-center">Subject Info</h1><br>
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Subject Name</th>
      <th scope="col">Teacher Name</th>
      <th scope="col">Teacher Contact</th>
      <th scope="col">Coefficient</th>
    </tr>
  </thead>
  <tbody>
  @foreach($subject as $subject)
    <tr>
      <th scope="row">{{$subject->id}}</th>
      <td>{{$subject->name}}</td>
      <td>{{$subject->teacher_first_name}} {{$subject->teacher_last_name}}</td>
      <td><a href="https://wa.me/237{{$subject->teacher_phone}}">{{$subject->teacher_phone}}</a></td>
      <td>{{$subject->coefficient}}</td>
    </tr>
    @endforeach
    @else<br><br><br><br>
    <h2>My Subjects</h2>
    <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Subject Name</th>
        <th scope="col">Coefficient</th>
      </tr>
    </thead>
    <tbody>
      @foreach($subject as $subject)
      @if(Session::get('userid') == $subject->teacher_id)
        <tr>
          <th scope="row">{{$subject->id}}</th>
          <td>{{$subject->name}}</td>
          <td>{{$subject->coefficient}}</td>s
        </tr>
        @endif
    @endforeach
    @endif
  </table>

@endsection
