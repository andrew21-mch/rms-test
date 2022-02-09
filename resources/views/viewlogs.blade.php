@extends('layouts.layout')
@section('content')
<form action="viewstudent" method=""> <br><br><br><br>
  <h1 class="row justify-content-center">View Activity</h1><br>

  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Teacher Name</th>
      <th scope="col">Login Time</th>
      <th scope="col">Login Date</th>
      <th scope="col">Teacher Email</th>
    </tr>
  </thead>
  <tbody>

  @foreach($logs as $log)
    <tr>
      <th scope="row">{{$log->id}}</th>
      <td>{{$log->teacher_first_name}} {{$log->teacher_last_name}}</td>
      <td>{{$log->login_time}}</td>
      <td>{{$log->login_date}}</td>
      <td>{{$log->email}}</td>
    </tr>
  @endforeach
  @if(count($logs))
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class=""><a class="btn btn-primary" href="clearlogs">Clear Logs</a></td>
  </tr>
  @endif
</table>
@endsection
