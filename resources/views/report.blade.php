@extends('layouts.layout')
@section('content')

  <div class="container">

    <div class="class">
      <br><br><br><br>
      <table id="customers">
        <h2>Form 1</h2>
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
        <table id="customers">
          <h2>Form 2</h2>
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
              <a href="delete/{{$user->id}}"><span class="iconify" data-icon="bi:trash-fill"></span></a>
            </td>

          </tr>
          @endif

        @endforeach

        <table id="customers">
          <h2>Form 3</h2>
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
              <a href="delete/{{$user->id}}"><span class="iconify" data-icon="bi:trash-fill"></span></a>
            </td>

          </tr>
          @endif

        @endforeach

        <table id="customers">
          <h2>Form 4</h2>
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
              <a href="delete/{{$user->id}}"><span class="iconify" data-icon="bi:trash-fill"></span></a>
            </td>

          </tr>
          @endif

        @endforeach

        <table id="customers">
          <h2>Form 5</h2>
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
            <td>{{$user->first_name}}</td>
            <td>
              <a href="view/{{$user->id}}"><span class="iconify" data-icon="emojione-v1:eye"></span></a>
              <a href="edit/{{$user->id}}"><span class="iconify" data-icon="carbon:add-filled"></span></a>
              <a href="delete/{{$user->id}}"><span class="iconify" data-icon="bi:trash-fill"></span></a>
            </td>

          </tr>
          @endif

        @endforeach

        <table id="customers">
          <h2>LowerSixth</h2>
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
            <td>{{$user->first_name}}</td>
            <td>
              <a href="view/{{$user->id}}"><span class="iconify" data-icon="emojione-v1:eye"></span></a>
              <a href="edit/{{$user->id}}"><span class="iconify" data-icon="carbon:add-filled"></span></a>
              <a href="delete/{{$user->id}}"><span class="iconify" data-icon="bi:trash-fill"></span></a>
            </td>

          </tr>
          @endif

        @endforeach
        <table id="customers">
          <h2>UpperSixth</h2>
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
            <td>{{$user->first_name}}</td>
            <td>
              <a href="view/{{$user->id}}"><span class="iconify" data-icon="emojione-v1:eye"></span></a>
              <a href="edit/{{$user->id}}"><span class="iconify" data-icon="carbon:add-filled"></span></a>
              <a href="delete/{{$user->id}}"><span class="iconify" data-icon="bi:trash-fill"></span></a>
            </td>

          </tr>
          @endif

        @endforeach



@endsection
