@extends('layouts.layout')
@section('content')
<div class="row justify-content-center col-md-10">
  <div class="alert alert-primary mt-2" role="alert" style="text-align:center; margin-left:25%; margin-rigt:25%; padding-top:15%;" >
    <h2>Search Tips</h2>
    <ul>
      <li>1 Search by First name or Last Name</li>
      <li>2 Try not to search all names at onces</li>
      <li>3 To search by class, simply type the class number eg
        <ul>
          <li>1, 2, 3, 4</li>
          <li>form1, form2, form3, etc</li>
        </ul>
      </li>
      <li>Also note that search by gender is not too coefficient because searching males will return females too. Know why? <br> in Fe<u>Male</u> the is <b>male</b> </li>
      <li>Hope it was Helpful</li>
    </ul>
  </div>
</div>

<style media="screen">
  li{
    list-style-type: square;
    text-decoration: inherit;
  }
</style>
@endsection('content')
