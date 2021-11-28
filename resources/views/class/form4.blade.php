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
    <div class="row"><h1><center>Class List Form 4</center></h1></div>
      <tr>
        <th>Student First Name</th>
        <th>Student Last Name</th>
        <th>Gender</th>
        <th>DOB</th>
      </tr>

      @foreach ($data as $user)
        @if($user->class_id == 4)
        <tr>
          <td>{{$user->first_name}}</td>
          <td>{{$user->last_name}}</td>
          <td>{{$user->gender}}</td>
          <td>{{$user->date_of_birth}}</td>
        </tr>
        @endif
      @endforeach
</div>
@endsection
