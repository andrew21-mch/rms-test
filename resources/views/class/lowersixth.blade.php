@extends('layouts.classlistlayout')
@section('content')
<div class="class">
  <br><br><br><br>

        <div class="container" style="font-size:12px">
        <center>
          <div class="row col-md-12">
            <table>
              <tr>
                <td colspan="5">
                    <center style="width:230px; float:left">REPUBLIC DU CAMEROUN <br>
                    Paix-Travail-Partrie <br>
                    MINISTRE TO ENSEIGMENT SECONDAIRE <br>
                    DELEGATION REGIONAL DU NORHT WEST  <br>
                    SAINT FRANCISCA MULTILINGUAL <br>
                    EDUCATIONAL COMPLEX</center>
                  </td>

                  <td colspan="2">
                    <center>
                      <span class="iconify" data-icon="icons8:student" data-width="100" data-height="100"></span>
                    </center>
                </td>

                <td colspan="5">

                    <center style="width:230px; float: right">REPUBLIC DU CAMEROUN <br>
                    Paix-Travail-Partrie <br>
                    MINISTRE TO ENSEIGMENT SECONDAIRE <br>
                    DELEGATION REGIONAL DU NORHT WEST  <br>
                    SAINT FRANCISCA MULTILINGUAL <br>
                    EDUCATIONAL COMPLEX</center>
                  </td>

              </div>
              </tr>

            </table>

      </center>
  <table id="customers">
    <div class="row"><h1><center>Class List LowerSixth</center></h1></div>
    @if(Session::get('user1')==200)
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
        @if($user->class_id == 6)
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
</div>
@endsection
