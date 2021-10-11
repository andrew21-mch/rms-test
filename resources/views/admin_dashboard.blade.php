
@extends('layouts.layout')
@section('content')
<div class="container">
  <div class="row" style="padding-top:40px">
    @if(Session::get("status"))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{Session::get('status')}}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
  </div>
      <div class="home-content">
        <div class="overview-boxes">
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Form One</div>
              <div class="number">{{$count1}}</div>
              <div class="indicator">
                <span class="iconify" data-icon="emojione-v1:eye"></span>
                <span class="text">View More</span>
              </div>
            </div>
            <span class="iconify" data-icon="icons8:student" style="color: blue;" data-width="70" data-height="70" data-flip="horizontal"></span>
          </div>


          <div class="box">
            <div class="right-side">
              <div class="box-topic">Form Two</div>
              <div class="number">{{$count2}}</div>
              <div class="indicator">
                <span class="iconify" data-icon="emojione-v1:eye"></span>
                <span class="text">View</span>
              </div>
            </div>
            <span class="iconify" data-icon="icons8:student" style="color: blue;" data-width="70" data-height="70" data-flip="horizontal"></span>
          </div>



          <div class="box">
            <div class="right-side">
              <div class="box-topic">Form Three</div>
              <div class="number">{{$count3}}</div>
              <div class="indicator">
              <span class="iconify" data-icon="emojione-v1:eye"></span>
                <span class="text">View</span>
              </div>
            </div>
            <span class="iconify" data-icon="icons8:student" style="color: blue;" data-width="70" data-height="70" data-flip="horizontal"></span>
            </div>


          <div class="box">
            <div class="right-side">
              <div class="box-topic">Form Four</div>
              <div class="number">{{$count4}}</div>
              <div class="indicator">
                <span class="iconify" data-icon="emojione-v1:eye"></span>
                <span class="text">View</span>
              </div>
            </div>
          <span class="iconify" data-icon="icons8:student" style="color: blue;" data-width="70" data-height="70" data-flip="horizontal"></span>
          </div>
        </div>

        <div class="home-content">
          <div class="overview-boxes">
            <div class="box">
              <div class="right-side">
                <div class="box-topic">Form One</div>
                <div class="number">{{$count5}}</div>
                <div class="indicator">
                  <span class="iconify" data-icon="emojione-v1:eye"></span>
                  <span class="text">View</span>
                </div>
              </div>
            <span class="iconify" data-icon="icons8:student" style="color: blue;" data-width="70" data-height="70" data-flip="horizontal"></span>
            </div>

            <div class="box">
              <div class="right-side">
                <div class="box-topic">Form Two</div>
                <div class="number">{{$count6}}</div>
                <div class="indicator">
                  <span class="iconify" data-icon="emojione-v1:eye"></span>
                  <span class="text">View</span>
                </div>
              </div>
            <span class="iconify" data-icon="icons8:student" style="color: blue;" data-width="70" data-height="70" data-flip="horizontal"></span>
            </div>

            <div class="box">
              <div class="right-side">
                <div class="box-topic">Form Three</div>
                <div class="number">{{$count7}}</div>
                <div class="indicator">
                  <span class="iconify" data-icon="emojione-v1:eye"></span>
                  <span class="text">View</span>
                </div>
              </div>
          <span class="iconify" data-icon="icons8:student" style="color: blue;" data-width="70" data-height="70" data-flip="horizontal"></span>
            </div>

            <a class="box" href="/subjects">
              <div class="right-side">
                <div class="box-topic">Teachers</div>
                <div class="number">{{$countteach}}</div>
                <div class="indicator">
                  <span class="iconify" data-icon="emojione-v1:eye"></span>
                  <span class="text">View</span>
                </div>
              </div>
            <span class="iconify" data-icon="noto:man-teacher-dark-skin-tone" data-width="70" data-height="70" data-flip="horizontal"></span>
            </div>
          </a>
     </div>

    @endsection
