@extends('layouts.layout')
@section('content')<br><br><br><br><br>

<style media="screen">
  i{
    color:white;
  }
  #CountGirls, #CountBoys, #Total, #Class {
   width: 400px;
   height: 350px;
}
.label {/*from  w  ww. ja  v  a 2  s  .  co  m*/
   text-align: center;
   width: 800px;
   font-size: 20px;
   margin: 10px;
}
.chart_container {
   float: left;
   margin-left: 5%;
   margin-right: 5%;
   margin-bottom: 50px;
   padding: 30px
}
.chart_container:hover{
  background-color: black;
  color: white;
}
</style>
  @if(Session::get('user1') == 200)


  <div class="container">
      <div id="aligned">
         <div class="label">
         </div>
         <div class="chart_container">
           Girls Plot Classwise
            <canvas id="CountGirls"></canvas>
         </div>
         <div class="chart_container">
           Boys Plot Classwise
            <canvas id="CountBoys"></canvas>
         </div>
       </div>
     </div>

     <div class="container">
       <div id="aligned">
         <div class="chart_container">
           Total Boys agains Girls
            <canvas id="Total"></canvas>
         </div>
         <div class="chart_container">
           Class Wise Enrollment
            <canvas id="Class"></canvas>
         </div>
       </div>
      </div>
    </div>




  <script>
  var ctg = document.getElementById('CountGirls').getContext('2d');
  var ctb = document.getElementById('CountBoys').getContext('2d');
  var ctt = document.getElementById('Total').getContext('2d');
  var ccc = document.getElementById('Class').getContext('2d');


  var GirlsChart = new Chart(ctg, {
      type: 'bar',
      data: {
          labels: ['Form1', 'Form2', 'Form3', 'form4', 'form5', 'LowerSixth', 'UpperSixth'],
          datasets: [{
              label: 'Form1',
              data: [{{$count1g}}, {{$count2g}}, {{$count3g}}, {{$count4g}}, {{$count5g}}, {{$count6g}}, {{$count7g}}],
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  // 'rgba(54, 162, 235, 0.2)',
                  // 'rgba(255, 206, 86, 0.2)',
                  // 'rgba(75, 192, 192, 0.2)',
                  // 'rgba(153, 102, 255, 0.2)',
                  // 'rgba(255, 159, 64, 0.2)'
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  // 'rgba(54, 162, 235, 1)',
                  // 'rgba(255, 206, 86, 1)',
                  // 'rgba(75, 192, 192, 1)',
                  // 'rgba(153, 102, 255, 1)',
                  // 'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              y: {
                  beginAtZero: true,
                  max: {{$count}},
                  min: 0,
                  ticks: {
                    stepSize: 01,
                }
              },
              x: {
                  beginAtZero: true,
                  max: {{$count}},
                  min: 0,
                  ticks: {
                    stepSize: 01,
                }
              }
          }
      }
  });

  var BoysChart = new Chart(ctb, {
    type: 'bar',
    data: {
        labels: ['Form1', 'Form2', 'Form3', 'form4', 'form5', 'LowerSixth', 'UpperSixth'],
        datasets: [{
            label: 'Boys',
            data: [{{$count1-$count1g}}, {{$count2-$count2g}}, {{$count3-$count3g}}, {{$count4-$count4g}}, {{$count5-$count5g}}, {{$count6-$count6g}}, {{$count7-$count7g}}],
            backgroundColor: [
                //'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                // 'rgba(255, 206, 86, 0.2)',
                // 'rgba(75, 192, 192, 0.2)',
                // 'rgba(153, 102, 255, 0.2)',
                // 'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                //'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                // 'rgba(255, 206, 86, 1)',
                // 'rgba(75, 192, 192, 1)',
                // 'rgba(153, 102, 255, 1)',
                // 'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
                max: {{$count}},
                min: 0,
                ticks: {
                  stepSize: 01,
              }
            },
            x: {
                beginAtZero: true,
                max: {{$count}},
                min: 0,
                ticks: {
                  stepSize: 01,
              }
            }
        }
    }
  });

  var Total = new Chart(ctt, {
    type: 'bar',
    data: {
        labels: ['Girls', 'Boys'],
        datasets: [{
            label: 'Count',
            data: [{{$count-($count1g+$count2g+$count3g+$count4g+$count5g+$count6g+$count7g)}},{{$count1g+$count2g+$count3g+$count4g+$count5g+$count6g+$count7g}}],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
                max: {{$count}},
                min: 0,
                ticks: {
                  stepSize: 01,
              }
            },
            x: {
                beginAtZero: true,
                max: {{$count}},
                min: 0,
                ticks: {
                  stepSize: 01,
              }
            }
        }
    }
  });


  var Classes = new Chart(ccc, {
    type: 'bar',
    data: {
        labels: ['Form1', 'Form2', 'Form3', 'form4', 'form5', 'LowerSixth', 'UpperSixth'],
        datasets: [{
            label: 'Count',
            data: [{{$count1}}, {{$count2}}, {{$count3}}, {{$count4}}, {{$count5}}, {{$count6}}, {{$count7}}],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
                max: {{$count}},
                min: 0,
                ticks: {
                  stepSize: 01,
              }
            },
            x: {
                beginAtZero: true,
                max: {{$count}},
                min: 0,
                ticks: {
                  stepSize: 01,
              }
            }
        }
    }
  });


  </script>
  <div class="col-md-10 offset-md-1">
  <table class="table table-bordered table-dark">
    <tr border="1">
      <th scope="col" colspan="2" style="background-color:gray"><center>From 1</center></th>
      <th scope="col" colspan="2" style="background-color:gray"><center>From 2</center></th>
      <th scope="col" colspan="2" style="background-color:gray"><center>Form 3</center></th>
      <th scope="col" colspan="2" style="background-color:gray"><center>Form 4</center></th>
    </tr>
    <tr>
      <th> Boys<span class="iconify" data-icon="bi:arrow-down-circle" style="color: white;" data-width="25" data-height="25" data-rotate="180deg" data-flip="vertical"></span></th>
      <th> Girls <span class="iconify" data-icon="bi:arrow-down-circle" style="color: white;" data-width="25" data-height="25" data-rotate="180deg" data-flip="vertical"></span></th>
      <th> Boys<span class="iconify" data-icon="bi:arrow-down-circle" style="color: white;" data-width="25" data-height="25" data-rotate="180deg" data-flip="vertical"></span></th>
      <th> Girls <span class="iconify" data-icon="bi:arrow-down-circle" style="color: white;" data-width="25" data-height="25" data-rotate="180deg" data-flip="vertical"></span></th>
      <th> Boys<span class="iconify" data-icon="bi:arrow-down-circle" style="color: white;" data-width="25" data-height="25" data-rotate="180deg" data-flip="vertical"></span></th>
      <th> Girls <span class="iconify" data-icon="bi:arrow-down-circle" style="color: white;" data-width="25" data-height="25" data-rotate="180deg" data-flip="vertical"></span></th>
      <th> Boys<span class="iconify" data-icon="bi:arrow-down-circle" style="color: white;" data-width="25" data-height="25" data-rotate="180deg" data-flip="vertical"></span></th>
      <th> Girls<span class="iconify" data-icon="bi:arrow-down-circle" style="color: white;" data-width="25" data-height="25" data-rotate="180deg" data-flip="vertical"></span></th>
    </tr>
    <tr>
      <td> {{$count1-$count1g}}</td>
      <td> {{$count1g}}</td>
      <td> {{$count2-$count2g}}</td>
      <td> {{$count2g}}</td>
      <td> {{$count3-$count3g}}</td>
      <td> {{$count3g}}</td>
      <td> {{$count4-$count4g}}</td>
      <td> {{$count4g}}</td>

    </tr>
  </table>


  <table class="table table-bordered table-dark">
  <tr>
    <th scope="col" colspan="2" style="background-color:gray" style="background-color:orange"><center>Form 5</center></th>
    <th scope="col" colspan="2" style="background-color:gray"><center>LowerSixth</center></th>
    <th scope="col" colspan="2" style="background-color:gray"><center>UpperSixth</center></th>
  </tr>
  <tr>
    <th> Boys<span class="iconify" data-icon="bi:arrow-down-circle" style="color: white;" data-width="25" data-height="25" data-rotate="180deg" data-flip="vertical"></span></th>
    <th> Girls <span class="iconify" data-icon="bi:arrow-down-circle" style="color: white;" data-width="25" data-height="25" data-rotate="180deg" data-flip="vertical"></span></th>
    <th> Boys<span class="iconify" data-icon="bi:arrow-down-circle" style="color: white;" data-width="25" data-height="25" data-rotate="180deg" data-flip="vertical"></span></th>
    <th> Girls <span class="iconify" data-icon="bi:arrow-down-circle" style="color: white;" data-width="25" data-height="25" data-rotate="180deg" data-flip="vertical"></span></th>
    <th> Boys<span class="iconify" data-icon="bi:arrow-down-circle" style="color: white;" data-width="25" data-height="25" data-rotate="180deg" data-flip="vertical"></span></th>
    <th> Girls <span class="iconify" data-icon="bi:arrow-down-circle" style="color: white;" data-width="25" data-height="25" data-rotate="180deg" data-flip="vertical"></span></th>

  </tr>
  <tr>
    <td> {{$count5-$count5g}}</td>
    <td> {{$count5g}}</td>
    <td> {{$count6-$count6g}}</td>
    <td> {{$count6g}}</td>
    <td> {{$count7-$count7g}}</td>
    <td> {{$count7g}}</td>
  </tr>
  </table>
  </div>
  @else

  </script>
  <div class="col-md-10 offset-md-1" style="margin-bottom:10%">
  <table class="table table-bordered table-dark">
    <tr border="1">
      <th scope="col" colspan="2" style="background-color:gray"><center>From 1</center></th>
      <th scope="col" colspan="2" style="background-color:gray"><center>From 2</center></th>
      <th scope="col" colspan="2" style="background-color:gray"><center>Form 3</center></th>
      <th scope="col" colspan="2" style="background-color:gray"><center>Form 4</center></th>
    </tr>
    <tr>
      <th> Boys<span class="iconify" data-icon="bi:arrow-down-circle" style="color: white;" data-width="25" data-height="25" data-rotate="180deg" data-flip="vertical"></span></th>
      <th> Girls <span class="iconify" data-icon="bi:arrow-down-circle" style="color: white;" data-width="25" data-height="25" data-rotate="180deg" data-flip="vertical"></span></th>
      <th> Boys<span class="iconify" data-icon="bi:arrow-down-circle" style="color: white;" data-width="25" data-height="25" data-rotate="180deg" data-flip="vertical"></span></th>
      <th> Girls <span class="iconify" data-icon="bi:arrow-down-circle" style="color: white;" data-width="25" data-height="25" data-rotate="180deg" data-flip="vertical"></span></th>
      <th> Boys<span class="iconify" data-icon="bi:arrow-down-circle" style="color: white;" data-width="25" data-height="25" data-rotate="180deg" data-flip="vertical"></span></th>
      <th> Girls <span class="iconify" data-icon="bi:arrow-down-circle" style="color: white;" data-width="25" data-height="25" data-rotate="180deg" data-flip="vertical"></span></th>
      <th> Boys<span class="iconify" data-icon="bi:arrow-down-circle" style="color: white;" data-width="25" data-height="25" data-rotate="180deg" data-flip="vertical"></span></th>
      <th> Girls<span class="iconify" data-icon="bi:arrow-down-circle" style="color: white;" data-width="25" data-height="25" data-rotate="180deg" data-flip="vertical"></span></th>
    </tr>
    <tr>
      <td> {{$count1-$count1g}}</td>
      <td> {{$count2g}}</td>
      <td> {{$count2-$count2g}}</td>
      <td> {{$count2g}}</td>
      <td> {{$count3-$count3g}}</td>
      <td> {{$count3g}}</td>
      <td> {{$count4-$count4g}}</td>
      <td> {{$count4g}}</td>

    </tr>
  </table>


  <table class="table table-bordered table-dark">
  <tr>
    <th scope="col" colspan="2" style="background-color:gray" style="background-color:orange"><center>Form 5</center></th>
    <th scope="col" colspan="2" style="background-color:gray"><center>LowerSixth</center></th>
    <th scope="col" colspan="2" style="background-color:gray"><center>UpperSixth</center></th>
  </tr>
  <tr>
    <th> Boys<span class="iconify" data-icon="bi:arrow-down-circle" style="color: white;" data-width="25" data-height="25" data-rotate="180deg" data-flip="vertical"></span></th>
    <th> Girls <span class="iconify" data-icon="bi:arrow-down-circle" style="color: white;" data-width="25" data-height="25" data-rotate="180deg" data-flip="vertical"></span></th>
    <th> Boys<span class="iconify" data-icon="bi:arrow-down-circle" style="color: white;" data-width="25" data-height="25" data-rotate="180deg" data-flip="vertical"></span></th>
    <th> Girls <span class="iconify" data-icon="bi:arrow-down-circle" style="color: white;" data-width="25" data-height="25" data-rotate="180deg" data-flip="vertical"></span></th>
    <th> Boys<span class="iconify" data-icon="bi:arrow-down-circle" style="color: white;" data-width="25" data-height="25" data-rotate="180deg" data-flip="vertical"></span></th>
    <th> Girls <span class="iconify" data-icon="bi:arrow-down-circle" style="color: white;" data-width="25" data-height="25" data-rotate="180deg" data-flip="vertical"></span></th>

  </tr>
  <tr>
    <td> {{$count5-$count5g}}</td>
    <td> {{$count5g}}</td>
    <td> {{$count6-$count6g}}</td>
    <td> {{$count6g}}</td>
    <td> {{$count7-$count7g}}</td>
    <td> {{$count7g}}</td>
  </tr>
  </table>
  @endif
</div>



@endsection
