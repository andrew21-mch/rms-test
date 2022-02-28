@extends('layouts.layout')
@section('content')

<div class="container" style="padding-top:80px">
  @if(count($searched_result))
  <table class="table table" border="2px">
    <thead>
      <tr style="background-color:#DCDCDC">
        <th >student_first_name</th>
        <th >student_last_name</th>
        <th >Date Of Birth</th>
        <th >Gender</th>
        <th  colspan="3">Action</th>
      </tr>
    </thead>
    <tbody>
  @foreach($searched_result as $searched_item)
  <tr style="background-color:#DCDCDC; border-style:groove">
    <td >{{$searched_item['first_name']}}</td>
    <td >{{$searched_item['last_name']}}</td>
    <td >{{$searched_item['date_of_birth']}}</td>
    <td >{{$searched_item['gender']}}</td>

      <td><a href="view/{{$searched_item['id']}}"><button class="btn btn-primary"><span class="iconify" data-icon="emojione-v1:eye"></button></span></a></td>
      <td><a href="edit/{{$searched_item['id']}}"><button class="btn btn-secondary"><span class="iconify" data-icon="carbon:add-filled"></button></span></a></td>
          @if(Session::get('user1') == 200)
      <td><a href="delete/{{$searched_item['id']}}"><button class="btn btn-danger"><span class="iconify" data-icon="bi:trash-fill"></button></span></a></td>
            @endif
  </tr>
    @endforeach
  @else
  <div class="row justify-content-center col-md-12">
    <div class="alert alert-primary mt-4" role="alert" style="text-align:center">
      <h2>No result Matched your input,<br> Please try again with more accuracy!</h2>
      <h5>dont know how to seach!!</h5><button class="btn btn-success" style="width:30%"><a href="search_tips" style="text-decoration:none; color:white">check</a></button>
    </div>
  </div>
  @endif
</div>

@endsection
