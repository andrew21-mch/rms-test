<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
      <meta charset="UTF-8">
      <!--<title> Responsiive Admin Dashboard |!-->
      <link rel="stylesheet" href="{{URL::asset('css/admin.css')}}">
      <!-- Boxicons CDN Link -->
      <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
      <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>

      <link rel="stylesheet" href="{{URL::asset('css/report.css')}}">
      <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">

      <link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}">
    	<link rel="stylesheet" href="{{URL::asset('test/css/bootstrap.min.css')}}">
    	<link rel="stylesheet" href="{{URL::asset('test/css/dataTables.bootstrap.min.css')}}">
    	<link rel="stylesheet" href="{{URL::asset('test/css/bootstrap-social.css')}}">
    	<link rel="stylesheet" href="{{URL::asset('test/css/bootstrap-select.css')}}">
    	<link rel="stylesheet" href="{{URL::asset('test/css/fileinput.min.css')}}">
    	<link rel="stylesheet" href="{{URL::asset('test/css/awesome-bootstrap-checkbox.css')}}">
    	<link rel="stylesheet" href="{{URL::asset('test/css/style.css')}}">
    	<link rel="stylesheet" href="{{URL::asset('test/css/font-awesome.min.css')}}">

       <meta name="viewport" content="width=device-width, initial-scale=1.0">

       <script language="javascript" type="text/javascript">
          var popUpWin=0;
          function popUpWindow(URLStr, left, top, width, height)
          {
           if(popUpWin)
          {
          if(!popUpWin.closed) popUpWin.close();
          }
          popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+510+',height='+430+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
          }

        </script>
        <style media="screen">
        </style>
     </head>
  <body id="print" class="body" >
    <div class="container" style="font-size:10px" >
      @if(count($data1))
      <div class="container" style="font-size:12px">
        <center>
          <div class="row col-md-10">
            <table class="table">
              <tr>
                <td colspan="4">
                    <center><span data-width="120" data-height="90"><img src="../images/test.png" alt="" style="width: 140px; height:90px"></span></center>
                  </div></td>
                  <td colspan="2"></td>

                <td colspan="6">
                    <center><h4>SAINT FRANCISCA MULTILINGUAL
                    EDUCATIONAL COMPLEX (ST. FrMEC)  SECONDARY, COMMERCIAL AND TECHNICAL SCHOOL<br></h4> <br>
                   <b>Motto:<q>Knowledge, Success and Excellence</q></b> <br><br>
                    Mile 5 Nkwen-Bamenda </center>
                </td>

              </div>
              </tr>
              <tr>
                <td colspan="12" rowspan="2"><center><h2 class="col-md-10 mt-4" style="font-size:12px">PROGRESS REPORT CARD / BULLETIN DE NOTES</h2></center></div></td>
              </tr>

            </table>

      </center>
      <br>
      <!-- <div class="container col-md-12" style="outline:solid #ddd;"> -->
        <center>
          <table border='1px' class="table table-bordered" style="width:900px">
            <thead>
              <tr style="background-color:#e25822;height:45px;">
                <th scope="col" class="col-md-1"><h5>Name:</h5></th>
                <th scope="col" class="col-md-3"><h5><b>{{$data1[0]->first_name}} {{$data1[0]->last_name}}</b></h5></th>
                <th scope="col" class="col-md-1"><h5>Gender:</h5></th>
                <th scope="col" class="col-md-1"><h5><b>{{$data1[0]->gender}}</b></h5></th>
                <th scope="col" class="col-md-2"><h5>Date of Birth:</h5></th>
                <th scope="col" class="col-md-1"><h5><b>{{$data1[0]->date_of_birth}}</b></h5></th>
              </tr>
              <tr style="background-color:#e25822; height:45px">
                <th scope="col" class="col-md-1"><h5>Class:</h5></th>
                <th scope="col" class="col-md-3"><h5><b>{{$data1[0]->class_name}}</h5></b></th>
                <th scope="col" class="col-md-1"><h5>Term:</h5></th>
                <th scope="col" class="col-md-1"><h5><b>First Term</b></h5></th>
                <th scope="col" class="col-md-2"><h5>School Year: </h5></th>
                <th scope="col" class="col-md-1"><h5><b>{{$data1[0]->academic_year}}/{{$data1[0]->academic_year + 1}}</b></h5></th>
              </tr>
            </thead>
        </table>
      </center>
    <center style="
    background-image:url('{{ asset('/images/water.jpg')}}');
    background-repeat: no-repeat;
    background-size: cover;">
      <table class="table table-bordered" border="1px" style="width:900px;">
        <thead>
          <tr style="background-color:#DCDCDC">
            <th scope="col" class="col-md-2">Code</th>
            <th scope="col" class="col-md-2">Subject</th>
            <th scope="col" class="col-md-1">Coeficient</th>
            <th scope="col" class="col-md-1">EVAL1</th>
            <th scope="col" class="col-md-1">EVAL2</th>
            <th scope="col" class="col-md-1">Final</th>
            <th scope="col" class="col-md-1">Total</th>
            <th scope="col"class="col-md-1">Teacher</th>
            <th scope="col" class="col-md-1">Remark</th>



          </tr>
        </thead>
        <tbody>
            <?php $coef = 0 ?>
            <?php $tmarks = 0?>
            <?php $passed = 0;
            $countp = 0?>
        @foreach($data1 as $data)
        <?php $avg = $data->avg2?>
          <tr style="height:30px; text-align:left">
            <?php $coef = $data->coefficient+$coef ?>
            <th scope="row">{{$data->subject_code}}</th>
            <th scope="row">{{$data->name}}</th>
            <td>{{$data->coefficient}}</td>
            <td>{{$data->mark5}}</td>
            <td>{{$data->mark6}}</td>
            <?php if($data->mark5 == NULL){
              $data->mark5 = $data->mark6;
            }
            if($data->mark6 == NULL && $data->mark6 !== 0){
              $data->mark6 = $data->mark5;
            }

            ?>
            <td>{{($data->mark5 + $data->mark6)/2}}</td>
            <td>{{(($data->mark5 + $data->mark6)/2)*$data->coefficient}}</td>
            <td>{{$data->teacher_last_name}}</td>
            @if((((($data->mark5 + $data->mark6)/2)*$data->coefficient) > 20*$data->coefficient/2 ))
            <?php $passed+=1 ?>
            <td>Passed</td>
            @else
            <td style="color:red">Failed</td>
            <?php $countp+=1 ?>
            @endif

            <?php $tmarks = $tmarks + (($data->mark5 + $data->mark6)/2)*$data->coefficient;
?>
          </tr>
        @endforeach
      </table>
    </center>
      <center>
      <table border="2px" class="table table-striped" style="width:900px">
      <tr>
        <td colspan="7">
          <table>
          <tr>
            <td colspan="2"> Student Average </td>

            <td><input type="text" class="form-control" style="height:22px; width:80px; margin:1px 2px 1px 4px; font-size=10px" value="{{round($avg, 2)}}"></td>
          </tr>
          <tr>
            <td colspan="2"> Subjects Passed </td>
            <td><input type="text" class="form-control" style="height:22px; width:80px; margin:1px 2px 1px 4px; font-size=10px" value="{{$passed}}"></td>
          </tr>
          <tr>
            <td colspan="2"> Subjects Failed </td>
            <td><input type="text" class="form-control" style="height:22px; width:80px; margin:1px 2px 1px 4px; font-size=10px" value="{{$countp}}"></td>
          </tr>

          <tr>
            <td colspan="2"> Class Average </td>
            <td><input type="text" class="form-control" style="height:22px; width:80px; margin:1px 2px 1px 4px;" value="{{round($class_average, 2)}}"></td>
          </tr>
          <tr>
            <td colspan="2">Position</td>

            <td><input type="text" class="form-control" style="height:22px; width:80px; margin:1px 2px 1px 4px;" value="{{$rank1}}"></td>
          </tr>
          <tr>
            <td colspan="2">Observation</td>
            @if($tmarks/$coef > 18 )
            <td><input type="text" class="form-control" style="height:22px; width:120px; margin:1px 2px 1px 4px;" value="Excellent"></td>
            @elseif($tmarks/$coef > 16 && $tmarks/$coef< 18)
            <td><input type="text" class="form-control" style="height:22px; width:120px; margin:1px 2px 1px 4px;" value="Very Good"></td>
            @elseif($tmarks/$coef < 16 && $tmarks/$coef > 9.99)
            <td><input type="text" class="form-control" style="height:22px; width:120px; margin:1px 2px 1px 4px;" value="Good"></td>
            @else
            <td><input type="text" class="form-control" style="height:22px; width:120px; margin:1px 2px 1px 4px; color:red" value="Failed"></td>
          @endif

          </tr>
          </table>
        </center>
      </td>

      <td colspan="5">
          <table class="col-md-10">
          <tr>
            <td colspan="2">HONOR ROLE</td>
            <td ><input type="checkbox" style="margin: 1px 1px 1px 1px";></td>

          </tr>
          <tr>
            <td colspan="2">COULD DO BETTER</td>
            <td>
              <input type="checkbox" style="margin: 1px 1px 1px 1px" ></td>
          </tr>
          <tr>
            <td colspan="2">ACADEMIC WARNING</td>
            <td><input type="checkbox" style="margin: 1px 1px 1px 1px";></td>
          </tr>
          <tr>
            <td colspan="2">DISCIPLINE WARNIN</td>
            <td><input type="checkbox" style="margin: 1px 1px 1px 1px"; ></td>
          </tr>
          </table>
        </td>
      </tr>
      </table>

      <table border="1px"  class="table" style="width:900px">
        <tr>
            <td>
                <hr>
                Class Master
              </div></td>

              <td>

                  <hr>
                  Class/Tutor
                </div>
              </td>
              <td>
                <div >
                  <hr>
                  Principal
                </div>
              </td>
          </tr>
        </table>
  </center>
  <span style="float:left; margin-left:20%;margin-top:2%;" ><i class="fa fa-print fa-4x btn btn-primary" aria-hidden="true" OnClick="CallPrint(this.value)" style="cursor:pointer" title="Print the Report"></i></span>

  </div>
</div>
        @else
      <div class="row justify-content-center col-md-12">
        <div class="alert alert-primary mt-4" role="alert" style="text-align:center">
          <h1>No Results Available Yet!</h1>
        </div>
      </div>
      @endif
    </div>
</body>

      <!-- Loading Scripts -->

    	<!-- Loading Scripts -->
    	<script src="js/jquery.min.js"></script>
    	<script src="js/bootstrap-select.min.js"></script>
    	<script src="js/bootstrap.min.js"></script>
    	<script src="js/jquery.dataTables.min.js"></script>
    	<script src="js/dataTables.bootstrap.min.js"></script>
    	<script src="js/Chart.min.js"></script>
    	<script src="js/fileinput.js"></script>
    	<script src="js/chartData.js"></script>
    	<script src="js/main.js"></script>
     <script>
    function CallPrint(strid) {
    var prtContent = document.getElementById("print");
    var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
    WinPrint.document.head.append(document.head)
    WinPrint.document.write(prtContent.outerHTML);
    WinPrint.document.close();
    WinPrint.focus();
    WinPrint.print();
    WinPrint.close();
    }
    </script>
</html>
