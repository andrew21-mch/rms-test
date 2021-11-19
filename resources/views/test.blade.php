<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="{{URL::asset('test/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('test/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('test/css/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('test/css/bootstrap-social.css')}}">
    <link rel="stylesheet" href="{{URL::asset('test/css/bootstrap-select.css')}}">
    <link rel="stylesheet" href="{{URL::asset('test/css/fileinput.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('test/css/awesome-bootstrap-checkbox.css')}}">
    <link rel="stylesheet" href="{{URL::asset('test/css/style.css')}}">
    </head>
    <body>


	<div class="ts-main-content">
		<div class="content-wrapper">
<div class="container-fluid">

<div class="row">
<div class="col-md-12">

<h2 class="page-title" style="margin-top:4%">Dashboard</h2>

<div class="row">
<div class="col-md-12">
<div class="row">
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-body bk-primary text-light">
				<div class="stat-panel text-center">4

			<div class="stat-panel-number h1 ">100</div>
			<div class="stat-panel-title text-uppercase"> Students</div>
		</div>
			</div>
			<a href="manage-students.php" class="block-anchor panel-footer">Full Detail <i class="fa fa-arrow-right"></i></a>
		</div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-body bk-success text-light">
				<div class="stat-panel text-center">
          5
													<div class="stat-panel-number h1 ">19></div>
													<div class="stat-panel-title text-uppercase">Total Rooms </div>
												</div>
											</div>
											<a href="manage-rooms.php" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-4">
										<div class="panel panel-default">
											<div class="panel-body bk-info text-light">
												<div class="stat-panel text-center">
                          6
													<div class="stat-panel-number h1 ">12</div>
													<div class="stat-panel-title text-uppercase">Total Courses</div>
												</div>
											</div>
											<a href="manage-courses.php" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</body>

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

	window.onload = function(){

		// Line chart from swirlData for dashReport
		var ctx = document.getElementById("dashReport").getContext("2d");
		window.myLine = new Chart(ctx).Line(swirlData, {
			responsive: true,
			scaleShowVerticalLines: false,
			scaleBeginAtZero : true,
			multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
		});

		// Pie Chart from doughutData
		var doctx = document.getElementById("chart-area3").getContext("2d");
		window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});

		// Dougnut Chart from doughnutData
		var doctx = document.getElementById("chart-area4").getContext("2d");
		window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});

	}
	</script>
