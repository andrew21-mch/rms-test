
@extends('layouts.layout')
@section('content')
<div class="container">
  <div class="home-content">
    <div class="overview-boxes">
      <a class="box" href="/form1">
        <div class="right-side">
          <div class="box-topic">Form One</div>
          <div class="counters">Total: {{$count1}}</div>
          <div class="counters">Girls: {{$count1g}}</div>
          <div class="counters">Boys: {{$count1-$count1g}}</div>
          <div class="indicator">
          </div>
        </div>
        <span class="iconify" data-icon="icons8:student" style="color: gray;" data-width="50" data-height="50" data-flip="horizontal"></span>
      </a>


      <a class="box" href="/form2">
        <div class="right-side">
          <div class="box-topic">Form Two</div>
          <div class="counters">Total:{{$count2}}</div>
          <div class="counters">Girls: {{$count2g}}</div>
          <div class="counters">Boys: {{$count2-$count2g}}</div>

          <div class="indicator">


          </div>
        </div>
        <span class="iconify" data-icon="icons8:student" style="color: gray;" data-width="50" data-height="50" data-flip="horizontal"></span>
      </a>



      <a class="box" href="/form3">
        <div class="right-side">
          <div class="box-topic">Form Three</div>
          <div class="counters">Total: {{$count3}}</div>
          <div class="counters">Girls: {{$count3g}}</div>
          <div class="counters">Boys: {{$count3-$count3}}</div>

          <div class="indicator">


          </div>
        </div>
        <span class="iconify" data-icon="icons8:student" style="color: gray;" data-width="50" data-height="50" data-flip="horizontal"></span>
      </a>


      <a class="box" href="/form4">
        <div class="right-side">
          <div class="box-topic">Form Four</div>
          <div class="counters">Total: {{$count4}}</div>
          <div class="counters">Girls: {{$count4g}}</div>
          <div class="counters">Boys: {{$count4-$count4g}}</div>
          <div class="indicator">


          </div>
        </div>
      <span class="iconify" data-icon="icons8:student" style="color: gray;" data-width="50" data-height="50" data-flip="horizontal"></span>
      </div>
    </a>

    <div class="home-content">
      <div class="overview-boxes">
        <a class="box" href="/form5">
          <div class="right-side">
            <div class="box-topic">Form Five</div>
            <div class="counters">Total: {{$count5}}</div>
            <div class="counters">Girls: {{$count5g}}</div>
            <div class="counters">Boys: {{$count5-$count5g}}</div>
            <div class="indicator">


            </div>
          </div>
        <span class="iconify" data-icon="icons8:student" style="color: gray;" data-width="50" data-height="50" data-flip="horizontal"></span>
      </a>

      <a class="box" href="/lowersixth">
          <div class="right-side">
            <div class="box-topic">LowerSixth</div>
            <div class="counters">Total: {{$count6}}</div>
            <div class="counters">Girls: {{$count6g}}</div>
            <div class="counters">Boys: {{$count6-$count6g}}</div>
            <div class="indicator">


            </div>
          </div>
        <span class="iconify" data-icon="icons8:student" style="color: gray;" data-width="50" data-height="50" data-flip="horizontal"></span>
      </a>

        <a class="box" href="/uppersixth">
          <div class="right-side">
            <div class="box-topic">UpperSixth</div>
            <div class="counters">Total: {{$count7}}</div>
            <div class="counters">Girls: {{$count7g}}</div>
            <div class="counters">Boys: {{$count7-$count7g}}</div>
            <div class="indicator">


            </div>
          </div>
      <span class="iconify" data-icon="icons8:student" style="color: gray;" data-width="50" data-height="50" data-flip="horizontal"></span>
    </a>
    <a class="box" href="/student">
      <div class="right-side">
        <div class="box-topic">Total Enrollment</div>
        <div class="counters">Total: {{$count}}</div>
        <div class="counters">Girls: {{$count1g+$count2g+$count3g+$count4g+$count5g+$count6g+$count7g}}</div>
        <div class="counters">Boys: {{$count-($count1g+$count2g+$count3g+$count4g+$count5g+$count6g+$count7g)}}</div>


        <div class="indicator">


        </div>
      </div>

    </a>

    @endsection
