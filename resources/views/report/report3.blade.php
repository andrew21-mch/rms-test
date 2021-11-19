<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
      <meta charset="UTF-8">
      <!--<title> Responsiive Admin Dashboard |!-->
      <link rel="stylesheet" href="{{URL::secure_asset('css/admin.css')}}">
      <!-- Boxicons CDN Link -->
      <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
      <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>

      <link rel="stylesheet" href="{{URL::asecure_assetsset('css/report.css')}}">
      <link rel="stylesheet" href="{{URL::secure_asset('css/bootstrap.min.css')}}">

       <meta name="viewport" content="width=device-width, initial-scale=1.0">
     </head>
  <body><br><br>
    <div class="container" style="font-size:10px">
      @if(count($data1))
      <div class="container" style="font-size:12px">
        <center>
          <div class="row col-md-10">
            <table>
              <tr>
                <td>  <div class="col-sm-5">
                    <center>REPUBLIC DU CAMEROUN <br>
                    Paix-Travail-Partrie <br>
                    MINISTRE TO ENSEIGMENT SECONDAIRE <br>
                    DELEGATION REGIONAL DU NORHT WEST  <br>
                    SAINT FRANCISCA MULTILINGUAL <br>
                    EDUCATIONAL COMPLEX</center>
                  </div></td>

                  <td>
                    <div class="col-sm-2">
                      <span class="iconify" data-icon="icons8:student" data-width="100" data-height="100"></span>
                  </div>
                </td>

                <td>
                  <div class="col-sm-5">
                    <center>REPUBLIC DU CAMEROUN <br>
                    Paix-Travail-Partrie <br>
                    MINISTRE TO ENSEIGMENT SECONDAIRE <br>
                    DELEGATION REGIONAL DU NORHT WEST  <br>
                    SAINT FRANCISCA MULTILINGUAL <br>
                    EDUCATIONAL COMPLEX</center>
                  </div></td>

              </div>
              </tr>

            </table>

      </center>
        <center><h2 class="col-md-10 mt-4" style="font-size:12px">PROGRESS REPORT CARD / BULLETIN DE NOTES</h2></center></div>
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
            <td>third Term</td>
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
        @foreach($data1 as $data)
          <tr>
            <th scope="row">{{$data->name}}</th>
            <td>{{$data->coefficient}}</td>
            <td>{{$data->mark5}}</td>
            <td>{{$data->mark6}}</td>
            <td>{{($data->mark5 + $data->mark6)/2}}</td>
            <td>{{(($data->mark5 + $data->mark6)/2)*$data->coefficient}}</td>
            <td>{{$data->teacher_last_name}}</td>
            @if((((($data->mark5 + $data->mark6)/2)*$data->coefficient) > 20*$data->coefficient/2 ))
            <td>Passed</td>
            @else
            <td>Failed</td>
            @endif

          </tr>
        @endforeach
      </table></center>
      <table border="2px" bordercolor = "black" class="table table-bordered">
      <tr>
        <td >
          <table>
          <tr>
            <td colspan="2"> Student Average </td>

            <td><input type="text" class="form-control" style="height:22px; width:110px; margin:1px 2px 1px 4px;"></td>
          </tr>

          <tr>
            <td colspan="2"> Class Average </td>
            <td><input type="text" class="form-control" style="height:22px; width:110px; margin:1px 2px 1px 4px;"></td>
          </tr>
          <tr>
            <td colspan="2">Position</td>

            <td><input type="text" class="form-control" style="height:22px; width:110px; margin:1px 2px 1px 4px;"></td>
          </tr>
          <tr>
            <td colspan="2">Observation</td>
            <td><input type="text" class="form-control" style="height:22px; width:110px; margin:1px 2px 1px 4px;"></td>
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
            <td><input type="checkbox" style="margin: 1px 1px 1px 1px";></td>
          </tr>
          <tr>
            <td colspan="2">ACADEMIC WARNING</td>
            <td><input type="checkbox" style="margin: 1px 1px 1px 1px";></td>
          </tr>
          <tr>
            <td colspan="2">DISCIPLINE WARNIN</td>
            <td><input type="checkbox" style="margin: 1px 1px 1px 1px";></td>
          </tr>
          </table> </td>
      </table>

      <table border="1px" bordercolor = "black" class="table table-bordered">
      <tr>
          <td>  <div class="col-sm-5">
              <hr>
              Class Master
            </div></td>

            <td>
              <div class="col-sm-5">
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



      <a href="" @click.prevent="printme" target="_blank" class="btn btn-default">
        <span class="iconify" data-icon="fa-solid:print" style="font-size: 70px;"></span><br>Print
      </a>
      <script src="{{ mix('js/app.js') }}"></script>
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
</html>
