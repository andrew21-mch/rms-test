@extends('layouts.layout')
@section('content')
<div class="container">
  <div class="home-content">
    <div class="overview-boxes" id="overview">
      @foreach ($teachersubjects as $subj)

      @if($subj->teacher_id == Session::get('userid'))
      <a href="teacherviewsubject/{{$subj->id}}" class="box" style="height: 200px; width:100%; text-decoration: none; margin:1%">
        <div class="right-side">
          <div class="box-topic">{{$subj->name}}</div>
            <span class="iconify" data-icon="emojione-v1:eye"></span>
        </div>
    </div>
      </a>
      @endif
    @endforeach
      <div class="overview-boxes" id="overview-boxes" style="margin: 4%;">
          <a href="/insertmarks/first1" class="box" id="box" style="height: 120px; width:100%; text-decoration: none">
            <div  style="font-size: 40px; text-decoration: none; border-style:none; color:orange">
              Sequence 1
            </div>
          </a>
      </div>
      <div class="overview-boxes" style="margin: 4%">
          <a href="/insertmarks/seconds2" class="box" id="box" style="height: 120px; width:100%;  text-decoration: none">
            <div  style="font-size: 40px; text-decoration: none; border-style:none; color:orange">
              Sequence 2
            </div>
          </a>
      </div>
      <div class="overview-boxes" style="margin: 4%">
          <a href="/insertmarks/thirds3" class="box" id="box" style="height: 120px; width:100%;  text-decoration: none">
            <div  style="font-size: 40px; text-decoration: none; border-style:none; color:orange">
              Sequence 3
            </div>
          </a>
      </div>
      <div class="overview-boxes" style="margin: 4%">
          <a href="/insertmarks/fourths4" class="box" id="box" style="height: 120px; width:100%;  text-decoration: none">
            <div  style="font-size: 40px; text-decoration: none; border-style:none; color:orange">
              Sequence 4
            </div>
          </a>
      </div>
      <div class="overview-boxes" style="margin: 4%">
          <a href="/insertmarks/fifths5" class="box" id="box" style="height: 120px; width:100%;  text-decoration: none">
            <div  style="font-size: 40px; text-decoration: none; border-style:none; color:orange">
              Sequence 5
            </div>
          </a>
      </div>
      <div class="overview-boxes" style="margin: 4%">
          <a href="/insertmarks/sixths6" class="box" id="box" style="height: 120px; width:100%;  text-decoration: none">
            <div  style="font-size: 40px; text-decoration: none; border-style:none; color:orange">
              Sequence 6
            </div>
          </a>
      </div>
  </div>
  </div>
@endsection
