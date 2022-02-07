@extends('layouts.layout')
@section('content')

<style>
  center{
    background-color: gray;
    margin: 0.5%, 0% ,0.5% ,0%;
    border-radius: 5px;
    padding: 3px 1.5px 3px 1.5px;
    width: 100%;
  }
  hr{
    margin: 0.5%, 0% ,0.5% ,0%;
  }
  .customers th{
    background-color: gray;
  }
  </style>
  <div class="container">
    <div class="class">
      <br><br><br><br>
    <center><h1>Detailed Classes</h1></center>
      </div>
      <table id="customers">
        <hr><center><h2>Form 1</h2></center><hr>
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
            @if(Session::get('userid') == 200)
            <a href="delete/{{$user->id}}"><span class="iconify" data-icon="bi:trash-fill"></span></a>
            @endif
          </td>

        </tr>
        @endif
        @endforeach
        <table id="customers">
          <hr>  <center><h2>Form 2</h2></center><hr>
          <tr>
            <th>Student First Name</th>
            <th>Student Last Name</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>Action</th>
          </tr>

          @foreach ($data as $user)
          @if($user->class_id == 2)
          <tr>
            <td>{{$user->first_name}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->gender}}</td>
            <td>{{$user->date_of_birth}}</td>
            <td>
              <a href="view/{{$user->id}}"><span class="iconify" data-icon="emojione-v1:eye"></span></a>
              <a href="edit/{{$user->id}}"><span class="iconify" data-icon="carbon:add-filled"></span></a>
              @if(Session::get('userid') == 200)
            <a href="delete/{{$user->id}}"><span class="iconify" data-icon="bi:trash-fill"></span></a>
            @endif
            </td>

          </tr>
          @endif

        @endforeach

        <table id="customers">
        <hr>  <center><h2>Form 3</h2></center><hr>
          <tr>
            <th>Student First Name</th>
            <th>Student Last Name</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>Action</th>
          </tr>

          @foreach ($data as $user)
          @if($user->class_id == 3)
          <tr>
            <td>{{$user->first_name}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->gender}}</td>
            <td>{{$user->date_of_birth}}</td>
            <td>
              <a href="view/{{$user->id}}"><span class="iconify" data-icon="emojione-v1:eye"></span></a>
              <a href="edit/{{$user->id}}"><span class="iconify" data-icon="carbon:add-filled"></span></a>
              @if(Session::get('userid') == 200)
              <a href="delete/{{$user->id}}"><span class="iconify" data-icon="bi:trash-fill"></span></a>
              @endif
            </td>

          </tr>
          @endif

        @endforeach

        <table id="customers">
          <hr>  <center><h2>Form 4</h2></center><hr>
          <tr>
            <th>Student First Name</th>
            <th>Student Last Name</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>Action</th>
          </tr>

          @foreach ($data as $user)
          @if($user->class_id == 4)
          <tr>
            <td>{{$user->first_name}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->gender}}</td>
            <td>{{$user->date_of_birth}}</td>
            <td>
              <a href="view/{{$user->id}}"><span class="iconify" data-icon="emojione-v1:eye"></span></a>
              <a href="edit/{{$user->id}}"><span class="iconify" data-icon="carbon:add-filled"></span></a>
              @if(Session::get('userid') == 200)
            <a href="delete/{{$user->id}}"><span class="iconify" data-icon="bi:trash-fill"></span></a>
            @endif
            </td>

          </tr>
          @endif

        @endforeach

        <table id="customers">
          <hr>  <center><h2>Form 5</h2></center><hr>
          <tr>
            <th>Student First Name</th>
            <th>Student Last Name</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>Action</th>
          </tr>

          @foreach ($data as $user)
          @if($user->class_id == 5)
          <tr>
            <td>{{$user->first_name}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->gender}}</td>
            <td>{{$user->date_of_birth}}</td>
            <td>
              <a href="view/{{$user->id}}"><span class="iconify" data-icon="emojione-v1:eye"></span></a>
              <a href="edit/{{$user->id}}"><span class="iconify" data-icon="carbon:add-filled"></span></a>
              @if(Session::get('userid') == 200)
              <a href="delete/{{$user->id}}"><span class="iconify" data-icon="bi:trash-fill"></span></a>
              @endif
            </td>

          </tr>
          @endif

        @endforeach

        <table id="customers">
        <hr>  <center><h2>LowerSixth</h2></center><hr>
          <tr>
            <th>Student First Name</th>
            <th>Student Last Name</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>Action</th>
          </tr>

          @foreach ($data as $user)
          @if($user->class_id == 6)
          <tr>
            <td>{{$user->first_name}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->gender}}</td>
            <td>{{$user->date_of_birth}}</td>
            <td>
              <a href="view/{{$user->id}}"><span class="iconify" data-icon="emojione-v1:eye"></span></a>
              <a href="edit/{{$user->id}}"><span class="iconify" data-icon="carbon:add-filled"></span></a>
              @if(Session::get('userid') == 200)
              <a href="delete/{{$user->id}}"><span class="iconify" data-icon="bi:trash-fill"></span></a>
              @endif
            </td>

          </tr>
          @endif

        @endforeach
        <table id="customers">
          <hr><center><h2>UpperSixth</h2></center><hr>
          <tr>
            <th>Student First Name</th>
            <th>Student Last Name</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>Action</th>
          </tr>

          @foreach ($data as $user)
          @if($user->class_id == 7)
          <tr>
            <td>{{$user->first_name}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->gender}}</td>
            <td>{{$user->date_of_birth}}</td>
            <td>
              <a href="view/{{$user->id}}"><span class="iconify" data-icon="emojione-v1:eye"></span></a>
              <a href="edit/{{$user->id}}"><span class="iconify" data-icon="carbon:add-filled"></span></a>
              @if(Session::get('userid') == 200)
            <a href="delete/{{$user->id}}"><span class="iconify" data-icon="bi:trash-fill"></span></a>
            @endif
            </td>

          </tr>
          @endif

        @endforeach



@endsection
