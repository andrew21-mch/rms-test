@extends('layouts.layout')
@section('content')

<div class="container" style="padding-top:80px">
  @if(count($searched_result))
  <table class="table table" border="2px">
    <thead>
      <tr style="background-color:#DCDCDC">
        <th scope="col" class="col-md-2">student_first_name</th>
        <th scope="col" class="col-md-1">student_last_name</th>
        <th scope="col" class="col-md-1">Date Of Birth</th>
        <th scope="col" class="col-md-1">Gender</th>
        <th scope="col" class="col-md-1">Action</th>
      </tr>
    </thead>
    <tbody>
  @foreach($searched_result as $searched_item)
  <tr style="background-color:#DCDCDC; border-style:groove">
    <td scope="col" class="col-md-2">{{$searched_item['first_name']}}</td>
    <td scope="col" class="col-md-1">{{$searched_item['last_name']}}</td>
    <td scope="col" class="col-md-1">{{$searched_item['date_of_birth']}}</td>
    <td scope="col" class="col-md-1">{{$searched_item['gender']}}</td>
    <td scope="col" class="col-md-1">
      <a href="view/{{$searched_item['id']}}"><span class="iconify" data-icon="emojione-v1:eye"></span></a>
      <a href="edit/{{$searched_item['id']}}"><span class="iconify" data-icon="carbon:add-filled"></span></a>
      <a href="delete/{{$searched_item['id']}}"><span class="iconify" data-icon="bi:trash-fill"></span></a>
    </td>
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
