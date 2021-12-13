<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard |!-->
    <link rel="stylesheet" href="{{URL::asset('css/admin.css')}}">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
    <link rel="stylesheet" href="{{URL::asset('css/report.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  @if(Session::get('user1')==200)

  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">RMS</span>
    </div>
      <ul class="nav-links">
        @if(Session::has('user'))
        <li>
          <a href="#">
            <i class='bx bx-grid-alt' ></i>
            <span class="admin_name">Hello {{Session::get('user')}}</span>
          </a>
        </li>
        @endif

        <!-- <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li> -->
        <li>
          <a href="/teacher">
            <i ><span class="iconify" data-icon="fa-solid:chalkboard-teacher" style="color: white;"></span></i>
            <span class="links_name">Insert Marks</span>
          </a>
        </li>
        <li>
          <a href="/adminRegisterTeacher">
            <i ><span class="iconify" data-icon="fa-solid:chalkboard-teacher" style="color: white;"></span></i>
            <span class="links_name">Add Teachers</span>
          </a>
        </li>
        <li>
          <a href="/adminRegisterSubject">
            <i ><span class="iconify" data-icon="fa-solid:chalkboard-teacher" style="color: white;"></span></i>
            <span class="links_name">Add Subjects</span>
          </a>
        </li>
        <li>
          <a href="/student">
            <i><span class="iconify" data-icon="noto:man-student-medium-dark-skin-tone" data-rotate="180deg" data-flip="vertical"></span></i>
            </i>
            <span class="links_name">View Students</span>
          </a>

        </li>
        <li>
          <a href="/Action/registerStudent">
            <i><span class="iconify" data-icon="noto:man-student-medium-dark-skin-tone" data-rotate="180deg" data-flip="vertical"></span></i>
            </i>
            <span class="links_name">Add Student</span>
          </a>

        </li>
        <li>
          <a href="/view/classes">
            <i><span class="iconify" data-icon="mdi:google-classroom" style="color: white;" data-rotate="180deg"></span>
              </i>
            <span class="links_name">View Classes</span>
          </a>
        </li>
        <li>
          <a href="/subjects">
            <i><span class="iconify" data-icon="ic:sharp-subject" style="color: white;" data-rotate="180deg"></span></i>
            <span class="links_name">View Subjects</span>
          </a>
        </li>
        <li>
          <a href="/analytics">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Analytics</span>
          </a>
        </li>
        <li>
          <a href="/viewlogs">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">View Logs</span>
          </a>
        </li>
        <li class="log_out">
          <a href="/userlogout">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <form class="" action="/search" method="get">
          <input type="text" name="search" placeholder="Search">
          <button type="submit"><i class='bx bx-search' ></i></button>
        </form>

      </div>
      @if(Session::has('user'))
        <div class="dropdown">
         <button class="dropbtn">Hello {{Session::get('user')}}</button>
         <div class="dropdown-content">
           <a href="/userlogout">Logout</a>
           <a href="/profile_view/{{Session::get('userid')}}">Update</a>
         </div>
       </div>
    @endif
    </nav>
    @endif
    @if(Session::get('user1')==100)
    <div class="sidebar">
      <div class="logo-details">
        <i class='bx bxl-c-plus-plus'></i>
        <span class="logo_name">RMS</span>
      </div>

        <ul class="nav-links">
          <li>
            <a href="#">
              <i class='bx bx-grid-alt' ></i>
              <span class="admin_name">Hello {{Session::get('user')}}</span>
            </a>
          </li>

          <li>
            <a href="#" class="active">
              <i class='bx bx-grid-alt' ></i>
              <span class="links_name">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="/teacher">
              <i ><span class="iconify" data-icon="fa-solid:chalkboard-teacher" style="color: white;"></span></i>
              <span class="links_name">View Teachers</span>
            </a>
          </li>
          <li>
            <a href="/student">
              <i><span class="iconify" data-icon="noto:man-student-medium-dark-skin-tone" data-rotate="180deg" data-flip="vertical"></span></i>
              </i>
              <span class="links_name">View Students</span>
            </a>

          </li>
          </li>
          <li>
            <a href="/view/classes">
              <i><span class="iconify" data-icon="mdi:google-classroom" style="color: white;" data-rotate="180deg"></span>
                </i>
              <span class="links_name">View Classes</span>
            </a>
          </li>
          <li>
            <a href="/subjects">
              <i><span class="iconify" data-icon="ic:sharp-subject" style="color: white;" data-rotate="180deg"></span></i>
              <span class="links_name">View Subjects</span>
            </a>
          </li>
          <li>
            <a href="/analytics">
              <i class='bx bx-pie-chart-alt-2' ></i>
              <span class="links_name">Analytics</span>
            </a>
          </li>
          <li class="log_out">
            <a href="/userlogout">
              <i class='bx bx-log-out'></i>
              <span class="links_name">Log out</span>
            </a>
          </li>
        </ul>
    </div>
    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          <i class='bx bx-menu sidebarBtn'></i>
          <span class="dashboard">Dashboard</span>
        </div>
        <div class="search-box">
          <form class="" action="/search" method="get">
            <input type="text" name="search" placeholder="Search">
            <button type="submit"><i class='bx bx-search' ></i></button>
          </form>

        </div>

          @if(Session::has('user'))
            <div class="dropdown">
             <button class="dropbtn">Hello {{Session::get('user')}}</button>
             <div class="dropdown-content">
               <a href="/userlogout">Logout</a>
               <a href="/profile_view/{{Session::get('userid')}}">Update</a>
             </div>
           </div>
        @endif

      </nav>
      @endif

      @if(Session::get('user1')==101)
      <div class="sidebar">
        <div class="logo-details">
          <i class='bx bxl-c-plus-plus'></i>
          <span class="logo_name">RMS</span>
        </div>

          <ul class="nav-links">
            <li>
              <a href="#">
                <i class='bx bx-grid-alt' ></i>
                <span class="admin_name">Hello {{Session::get('user')}}</span>
              </a>
            </li>

            <li>
              <a href="#" class="active">
                <i class='bx bx-grid-alt' ></i>
                <span class="links_name">Dashboard</span>
              </a>
            </li>
            <li>
              <a href="/teacher">
                <i ><span class="iconify" data-icon="fa-solid:chalkboard-teacher" style="color: white;"></span></i>
                <span class="links_name">Teachers</span>
              </a>
            </li>
            <li>
              <a href="/student">
                <i><span class="iconify" data-icon="noto:man-student-medium-dark-skin-tone" data-rotate="180deg" data-flip="vertical"></span></i>
                </i>
                <span class="links_name">Students</span>
              </a>
            </li>
            <li>
              <a href="/Action/registerStudent">
                <i><span class="iconify" data-icon="noto:man-student-medium-dark-skin-tone" data-rotate="180deg" data-flip="vertical"></span></i>
                </i>
                <span class="links_name">Add Student</span>
              </a>

            </li>
            <li>
              <a href="/view/classes">
                <i><span class="iconify" data-icon="mdi:google-classroom" style="color: white;" data-rotate="180deg"></span>
                  </i>
                <span class="links_name">Classes</span>
              </a>
            </li>
            <li>
              <a href="/subjects">
                <i><span class="iconify" data-icon="ic:sharp-subject" style="color: white;" data-rotate="180deg"></span></i>
                <span class="links_name">Subjects</span>
              </a>
            </li>
            <li>
              <a href="/analytics">
                <i class='bx bx-pie-chart-alt-2' ></i>
                <span class="links_name">Analytics</span>
              </a>
            </li>
            <li class="log_out">
              <a href="/userlogout">
                <i class='bx bx-log-out'></i>
                <span class="links_name">Log out</span>
              </a>
            </li>
          </ul>
      </div>
      <section class="home-section">
        <nav>
          <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Dashboard</span>
          </div>
          <div class="search-box">
            <form class="" action="/search" method="get">
              <input type="text" name="search" placeholder="Search">
              <button type="submit"><i class='bx bx-search' ></i></button>
            </form>

          </div>

            @if(Session::has('user'))
              <div class="dropdown">
               <button class="dropbtn">Hello {{Session::get('user')}}</button>
               <div class="dropdown-content">
                 <a href="/userlogout">Logout</a>
                 <a href="/profile_view/{{Session::get('userid')}}">Update</a>
               </div>
             </div>
          @endif

        </nav>
        @endif
        <div class="container">
           @yield('content')
         </div>

                   <!-- Footer -->
          <footer class="page-footer font-small blue">

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2021 Copyright SKYE8-LTD
            </div>
            <!-- Copyright -->

          </footer>
          <!-- Footer -->



     <script>
      let sidebar = document.querySelector(".sidebar");
   let sidebarBtn = document.querySelector(".sidebarBtn");
   sidebarBtn.onclick = function() {
     sidebar.classList.toggle("active");
     if(sidebar.classList.contains("active")){
     sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
   }else
     sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
   }


    </script>
