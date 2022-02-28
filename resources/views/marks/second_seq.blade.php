@extends('layouts.layout')
@section('content')
<div class="container">

  <div class="class">
    <br><br><br><br>

    @if(Session::has('mark_error'))
        <?php 
        echo '<script>
          alert("Mark Can not be greater than 20");
        </script>';
        ?>
        {{Session::forget("mark_error")}}
      </div>
    @endif
    @if(Session::has('mark_success'))
      <div class="alert alert-primary">
        <span>Marks Inserted</span>
      </div>
      {{Session::forget('mark_success')}}
    @endif
    <table id="customers">
      <tr>
        <th style="background:black; color: white">Form 1</th>
      </tr>
      <tr>
        <th class="col-md-2"></th>
        <th class="col-md-3">Student First Name</th>
        <th class="col-md-3">Student Last Name</th>
        <th class="col-md-1">Second Sequence</th>
        <th class="col-md-2">Action</th>
      </tr>
      @foreach ($res as $user)
      @if($user->class_id == 1)
      <form class="form-group" action="/insert_sequence2"  method="post">
      @csrf
      <input class = "form-control" type="hidden" name="subject_id" value="{{Session::get('subjectid')}}">
      <tr>
        <input class = "form-control" type="hidden" name="class_id" value="1" >
        <td class="col-md-1"><input class = "form-control col" type="text" name="id" value="{{$user->id}}"></td>
        <td class="col-md-3"><input class = "form-control col" type="text" name="last_name" value="{{$user->last_name}}" ></td>
        <td class="col-md-3"><input class = "form-control col" type="text" name="first_name" value="{{$user->first_name}}" ></td>
        <td class="col-md-1"><input class = "form-control col" type="text" name="mark" value = "0"></td>
        <td class="col-md-2">
          <button type="submit" class="btn btn-primary">submit</button>
        </td>
      </tr>
      </form>
      @endif
      @endforeach




      <table id="customers">
        <tr>
          <th style="background:black; color: white">Form 2</th>
        </tr>
        <tr>
          <th class="col-md-2"></th>
          <th class="col-md-3">Student First Name</th>
          <th class="col-md-3">Student Last Name</th>
          <th class="col-md-1">Second Sequence</th>
          <th class="col-md-2">Action</th>
        </tr>
      @foreach ($res as $user)
      @if($user->class_id == 2)
      <form class="form-group" action="/insert_sequence2"  method="post">
      @csrf
      <input class = "form-control" type="hidden" name="subject_id" value="{{Session::get('subjectid')}}">
      <input class = "form-control" type="hidden" name="class_id" value="2" >
      <td class="col-md-1"><input class = "form-control col" type="text" name="id" value="{{$user->id}}"></td>
      <td class="col-md-3"><input class = "form-control col" type="text" name="last_name" value="{{$user->last_name}}" ></td>
      <td class="col-md-3"><input class = "form-control col" type="text" name="first_name" value="{{$user->first_name}}" ></td>
      <td class="col-md-1"><input class = "form-control col" type="text" name="mark" value = "0"></td>
      <td class="col-md-2">
        <button type="submit" class="btn btn-primary">submit</button>
      </td>
      </tr>
    </form>
      @endif
      @endforeach


      <table id="customers">
        <tr>
          <th style="background:black; color: white">Form 3</th>
        </tr>
        <tr>
          <th class="col-md-2"></th>
          <th class="col-md-3">Student First Name</th>
          <th class="col-md-3">Student Last Name</th>
          <th class="col-md-1">Second Sequence</th>
          <th class="col-md-2">Action</th>
        </tr>

      @foreach ($res as $user)
      @if($user->class_id == 3)
      <form class="form-group" action="/insert_sequence2"  method="post">
      @csrf
      <input class = "form-control" type="hidden" name="subject_id" value="{{Session::get('subjectid')}}">
      <input class = "form-control" type="hidden" name="class_id" value="3" >
      <td class="col-md-1"><input class = "form-control col" type="text" name="id" value="{{$user->id}}"></td>
      <td class="col-md-3"><input class = "form-control col" type="text" name="last_name" value="{{$user->last_name}}" ></td>
      <td class="col-md-3"><input class = "form-control col" type="text" name="first_name" value="{{$user->first_name}}" ></td>
      <td class="col-md-1"><input class = "form-control col" type="text" name="mark" value = "0"></td>
      <td class="col-md-2">
        <button type="submit" class="btn btn-primary">submit</button>
      </td>
      </tr>
    </form>
    @endif
    @endforeach

      <table id="customers">
        <tr>
          <th style="background:black; color: white">Form 4</th>
        </tr>
        <tr>
          <th class="col-md-2"></th>
          <th class="col-md-3">Student First Name</th>
          <th class="col-md-3">Student Last Name</th>
          <th class="col-md-1">Second Sequence</th>
          <th class="col-md-2">Action</th>
        </tr>

      @foreach ($res as $user)
    @if($user->class_id == 4)
    <form class="form-group" action="/insert_sequence2"  method="post">
    @csrf
    <input class = "form-control" type="hidden" name="subject_id" value="{{Session::get('subjectid')}}">

    <input class = "form-control" type="hidden" name="class_id" value="4" >
    <tr>
      <td class="col-md-1"><input class = "form-control col" type="text" name="id" value="{{$user->id}}"></td>
      <td class="col-md-3"><input class = "form-control col" type="text" name="last_name" value="{{$user->last_name}}" ></td>
      <td class="col-md-3"><input class = "form-control col" type="text" name="first_name" value="{{$user->first_name}}" ></td>
      <td class="col-md-1"><input class = "form-control col" type="text" name="mark" value = "0"></td>
      <td class="col-md-2">
        <button type="submit" class="btn btn-primary">submit</button>
      </td>
    </tr>

    </form>
    @endif
    @endforeach

      <table id="customers">
        <tr>
          <th style="background:black; color: white">Form 5</th>
        </tr>
        <tr>
          <th class="col-md-2"></th>
          <th class="col-md-3">Student First Name</th>
          <th class="col-md-3">Student Last Name</th>
          <th class="col-md-1">Second Sequence</th>
          <th class="col-md-2">Action</th>
        </tr>

      @foreach ($res as $user)
    @if($user->class_id == 5)
    <form class="form-group" action="/insert_sequence2"  method="post">
    @csrf
        <input class = "form-control" type="hidden" name="subject_id" value="{{Session::get('subjectid')}}">
        <input class = "form-control" type="hidden" name="class_id" value="5" >
        <tr>
          <td class="col-md-1"><input class = "form-control col" type="text" name="id" value="{{$user->id}}"></td>
          <td class="col-md-3"><input class = "form-control col" type="text" name="last_name" value="{{$user->last_name}}" ></td>
          <td class="col-md-3"><input class = "form-control col" type="text" name="first_name" value="{{$user->first_name}}" ></td>
          <td class="col-md-1"><input class = "form-control col" type="text" name="mark" value = "0"></td>
          <td class="col-md-2">
            <button type="submit" class="btn btn-primary">submit</button>
          </td>
        </tr></form>
      @endif
      @endforeach
      <table id="customers">
        <tr>
          <th style="background:black; color: white">LowerSixth</th>
        </tr>
        <tr>
          <th class="col-md-2"></th>
          <th class="col-md-3">Student First Name</th>
          <th class="col-md-3">Student Last Name</th>
          <th class="col-md-1">Second Sequence</th>
          <th class="col-md-2">Action</th>
        </tr>
      @foreach ($res as $user)
      @if($user->class_id == 6)
      <form class="form-group" action="/insert_sequence2"  method="post">
      @csrf
      <input class = "form-control" type="hidden" name="subject_id" value="{{Session::get('subjectid')}}">

        <input class = "form-control" type="hidden" name="class_id" value="6" >
        <tr>
          <td class="col-md-1"><input class = "form-control col" type="text" name="id" value="{{$user->id}}"></td>
          <td class="col-md-3"><input class = "form-control col" type="text" name="last_name" value="{{$user->last_name}}" ></td>
          <td class="col-md-3"><input class = "form-control col" type="text" name="first_name" value="{{$user->first_name}}" ></td>
          <td class="col-md-1"><input class = "form-control col" type="text" name="mark" value = "0"></td>
          <td class="col-md-2">
            <button type="submit" class="btn btn-primary">submit</button>
          </td>
        </tr>
        </form>
      @endif
      @endforeach
      <table id="customers">
        <tr>
          <th style="background:black; color: white">UpperSixth</th>
        </tr>
        <tr>
          <th class="col-md-2"></th>
          <th class="col-md-3">Student First Name</th>
          <th class="col-md-3">Student Last Name</th>
          <th class="col-md-1">Second Sequence</th>
          <th class="col-md-2">Action</th>
        </tr>

      @foreach ($res as $user)
      @if($user->class_id == 7)
      <form class="form-group" action="/insert_sequence2"  method="post">
      @csrf
      <input class = "form-control" type="hidden" name="subject_id" value="{{Session::get('subjectid')}}">
        <input class = "form-control" type="hidden" name="class_id" value="7" >
        <tr>
          <td class="col-md-1"><input class = "form-control col" type="text" name="id" value="{{$user->id}}"></td>
          <td class="col-md-3"><input class = "form-control col" type="text" name="last_name" value="{{$user->last_name}}" ></td>
          <td class="col-md-3"><input class = "form-control col" type="text" name="first_name" value="{{$user->first_name}}" ></td>
          <td class="col-md-1"><input class = "form-control col" type="text" name="mark" value = "0"></td>
          <td class="col-md-2">
            <button type="submit" class="btn btn-primary">submit</button>
          </td>
        </tr>
      </form>
      @endif
      @endforeach
    </table>
      <div class="container">
        <div class="row col-md-12" style="padding:4px; margin-top:4px">
          <a href="/viewAllResult/{{Session::get('subjectid')}}" class="btn btn-primary"> <h1>View Marks</h1></a>
        </div>
      </div>
      @endsection
