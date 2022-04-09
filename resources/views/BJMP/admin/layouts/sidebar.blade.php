<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">

            <i class="fas fa-building"></i>

        </div>
        <div class="sidebar-brand-text mx-3">MJ Los Baños Laguna <sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    {{-- <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li> --}}
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading text-white">
        Homepage
    </div>
    {{-- ---------------------------------------MESSAGE------------------------ --}}





    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('contact.index') }}" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true"
            aria-controls="collapseFive">
            <i class="fa-solid fa-house"></i>
            {{-- <i class="fas fa-fw fa-cog"></i> --}}
            <span>Landing</span>
        </a>
        <div id="collapseFive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
          <a class="collapse-item" href="{{ route('contact.index') }}">Messages</a>
          <a class="collapse-item" href="{{ route('announcement.index') }}">Announcement</a>
          <a class="collapse-item" href="{{ route('paabot.index') }}">Schedule</a>
            </div>
        </div>
    </li>



    {{-- <li class="nav-item ">
        <a class="nav-link" href="{{ route('contact.index') }}">
            <i class="fas fa-envelope fa-fw"></i>
            <span>Message</span>
        </a>
    </li> --}}


    {{-- ---------------------------------------Announcement------------------------ --}}
    <!-- Nav Item - Pages Collapse Menu -->
 {{--    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true"
            aria-controls="collapseSeven">
            <i class="fa-solid fa-bullhorn"></i>
            <span>Announcement</span>
        </a>
        <div id="collapseSeven" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('announcement.index') }}">Announce</a>


            </div>
        </div>
    </li> --}}
    {{-- ---------------------------------------Schedule------------------------ --}}
    <!-- Nav Item - Pages Collapse Menu -->
 {{--    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true"
            aria-controls="collapseSix">
            <i class="fa-solid fa-calendar-day"></i>
            <span>Schedules</span>
        </a>
        <div id="collapseSix" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('paabot.index') }}">Paabot</a>
                <a class="collapse-item" href="{{ route('dalaw.index') }}">Dalaw</a>
                <a class="collapse-item" href="{{ route('tawag.index') }}">Tawag</a>

            </div>
        </div>
    </li> --}}






    {{-- ---------------------------------------APPOINTMENTS------------------------------------------------- --}}
    <!-- Heading -->
    <div class="sidebar-heading text-white">
        Interface
    </div>
<!-- Nav Item - Pages Collapse Menu -->
<li class=" nav-item ">
    <a class="nav-link" href="{{ route('admin') }}">
        <i class="fa-solid fa-chart-line"></i>
        <span>Dashboard</span></a>
</li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-calendar-check"></i>
            {{-- <i class="fas fa-fw fa-cog"></i> --}}
            <span>Appointments</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
                {{-- <a class="collapse-item" href="{{ route('p') }}">Combined</a> --}}
                <a class="collapse-item" href="{{ route('pending.index') }}">Request Appointments</a>
                <a class="collapse-item" href="{{ route('confirm.index') }}">Confirm Appointments </a>
          {{--       <a class="collapse-item" href="{{ route('confirmed.index') }}">Confirmed Appointments</a> --}}
            </div>
        </div>
    </li>

    {{-- ---------------------------------------APPOINTMENTS ATTENDANCE------------------------------------------------- --}}




    <li class=" nav-item ">
        <a class="nav-link" href="{{ route('attendance.index') }}">
            <i class="fas fa-list-ol"></i>
            <span>Attendance</span></a>
    </li>
    {{-- ---------------------------------------RECORDS------------------------------------------------- --}}

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true"
            aria-controls="collapseThree">
            <i class="fas fa-clipboard"></i>
            {{-- <i class="fas fa-fw fa-cog"></i> --}}
            <span>Records</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
                <a class="collapse-item" href="{{ route('medical.index') }}">Medical Records</a>
                <a class="collapse-item" href="{{ route('pdl.index') }}">PDL's Records</a>
            </div>
        </div>
    </li>

    {{-- ---------------------------------------RECORDS RECYCLEBIN------------------------------------------------ --}}


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true"
            aria-controls="collapseFour">
            <i class="fas fa-archive"></i>
            {{-- <i class="fas fa-fw fa-cog"></i> --}}
            <span>Archive</span>
        </a>
        <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
                <a class="collapse-item" href="{{ route('medical.recyclebin.index') }}">Medical's Recyclebin</a>
                <a class="collapse-item" href="{{ route('pdl.recyclebin.index') }}">PDL's Recyclebin</a>
            </div>
        </div>
    </li>








    <!-- Nav Item - Utilities Collapse Menu -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="utilities-color.html">Colors</a>
                <a class="collapse-item" href="utilities-border.html">Borders</a>
                <a class="collapse-item" href="utilities-animation.html">Animations</a>
                <a class="collapse-item" href="utilities-other.html">Other</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item" href="blank.html">Blank Page</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
