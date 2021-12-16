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
     </head>
  <body id="print" class="body">
    <div class="container" style="font-size:10px" >
      @if(count($data1))
      <div class="container" style="font-size:12px">
        <center>
          <div class="row col-md-10">
            <table class="table">
              <tr>
                <td colspan="5">
                    <center>REPUBLIC DU CAMEROUN <br>
                    Paix-Travail-Partrie <br>
                    MINISTRE TO ENSEIGMENT SECONDAIRE <br>
                    DELEGATION REGIONAL DU NORHT WEST  <br>
                    SAINT FRANCISCA MULTILINGUAL <br>
                    EDUCATIONAL COMPLEX</center>
                  </div></td>

                  <td colspan="2">

                      <span class="iconify" data-icon="icons8:student" data-width="100" data-height="100"></span>

                </td>

                <td colspan="5">

                    <center>REPUBLIC DU CAMEROUN <br>
                    Paix-Travail-Partrie <br>
                    MINISTRE TO ENSEIGMENT SECONDAIRE <br>
                    DELEGATION REGIONAL DU NORHT WEST  <br>
                    SAINT FRANCISCA MULTILINGUAL <br>
                    EDUCATIONAL COMPLEX</center>
                  </td>

              </div>
              </tr>
              <tr>
                <td colspan="12" rowspan="2"><center><h2 class="col-md-10 mt-4" style="font-size:12px">PROGRESS REPORT CARD / BULLETIN DE NOTES</h2></center></div></td>
              </tr>

            </table>

      </center>
      <br>

      <div class="container col-md-12" style="outline:solid #ddd">
        <table border='1px' class="table table-bordered">
          <tr>
            <td>Name: </td>
            <td><b>{{$data1[0]->first_name}} {{$data1[0]->last_name}}</b></td>
            <td>Gender: </td>
            <td><b>{{$data1[0]->gender}}</b></td>
            <td>Date of Birth: </td>
            <td><b>{{$data1[0]->date_of_birth}}</b></td>
          </tr>
          <tr>
            <td>Class: </td>
            <td>{{$data1[0]->class_name}}</td>
            <td>Term: </td>
            <td>First Term</td>
            <td>School Year: </td>
            <td>2020/2021</td>
          </tr>
        </table>
        <br><br>
        <center>
      <table class="table table-bordered" border="2px">
        <thead>
          <tr style="background-color:#DCDCDC">
            <th scope="col" class="col-md-2">Subject</th>
            <th scope="col" class="col-md-1">Coeficient</th>
            <th scope="col" class="col-md-1">EVAL1</th>
            <th scope="col" class="col-md-1">EVAL2</th>
            <th scope="col" class="col-md-1">Final</th>
            <th scope="col" class="col-md-1">Total</th>
            <th scope="col"class="col-md-1">Rank</th>
            <th scope="col" class="col-md-1">Remark</th>



          </tr>
        </thead>
        <tbody>
            <?php $coef = 0 ?>
            <?php $tmarks = 0?>
        @foreach($data1 as $data)
          <tr>
            <?php $coef = $data->coefficient+$coef ?>
            <th scope="row">{{$data->name}}</th>
            <td>{{$data->coefficient}}</td>
            <td>{{$data->mark1}}</td>
            <td>{{$data->mark2}}</td>
            <?php if($data->mark1 == NULL){
              $data->mark1 == $data->mark2;
            }
            elseif($data->mark2 == NULL){
              $data->mark2 = $data->mark1;
            }
            else{
              $data->mark1 = $data->mark1;
              $data->mark2 = $data->mark2;
            }
            ?>
            <td>{{($data->mark1 + $data->mark2)/2}}</td>
            <td>{{(($data->mark1 + $data->mark2)/2)*$data->coefficient}}</td>
            <td>{{$data->teacher_last_name}}</td>
            @if((((($data->mark1 + $data->mark2)/2)*$data->coefficient) > 20*$data->coefficient/2 ))
            <td>Passed</td>
            @else
            <td>Failed</td>
            @endif

            <?php $tmarks = $tmarks + (($data->mark1 + $data->mark2)/2)*$data->coefficient ?>
          </tr>
        @endforeach
      </table></center>
      <table border="2px" bordercolor = "black" class="table table-bordered">
      <tr>
        <td >
          <table>
          <tr>
            <td colspan="2"> Student Average </td>

            <td><input type="text" class="form-control" style="height:22px; width:80px; margin:1px 2px 1px 4px; font-size=10px" value="{{$tmarks/$coef}}"></td>
          </tr>

          <tr>
            <td colspan="2"> Class Average </td>
            <td><input type="text" class="form-control" style="height:22px; width:80px; margin:1px 2px 1px 4px;" ></td>
          </tr>
          <tr>
            <td colspan="2">Position</td>

            <td><input type="text" class="form-control" style="height:22px; width:80px; margin:1px 2px 1px 4px;"></td>
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
            <td><input type="text" class="form-control" style="height:22px; width:120px; margin:1px 2px 1px 4px;" value="Failed"></td>
          @endif

          </tr>
          </table>
      </td>

      <td>
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
          </table> </td>
      </table>

      <table border="1px" bordercolor = "black" class="table table-bordered">
      <tr>
          <td>  <div class="col-sm-4">
              <hr>
              Class Master
            </div></td>

            <td>
              <div class="col-sm-4">
                <hr>
                Parent/Tutor
              </div>
            </td>
            <td>
              <div class="col-sm-4">
                <hr>
                Principal
              </div>
            </td>
        </tr>
    </table>
  </div>
</div>
      <span style="float:left" ><i class="fa fa-print fa-2x" aria-hidden="true" OnClick="CallPrint(this.value)" style="cursor:pointer" title="Print the Report"></i></span>
        @else
      <div class="row justify-content-center col-md-12">
        <div class="alert alert-primary mt-4" role="alert" style="text-align:center">
          <h1>No Results Available Yet!</h1>
        </div>
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
