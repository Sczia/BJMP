<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin') }}">

        <div class="sidebar-brand-text mx-3 text-center">MJ Los Baños Laguna <sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">


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
                <a class="collapse-item" href="{{ route('announcement.index') }}">Announcement</a>
                <a class="collapse-item" href="{{ route('events.index') }}">Calendar</a>
                <a class="collapse-item" href="{{ route('contact.index') }}">Messages</a>
          <a class="collapse-item" href="{{ route('paabot.index') }}">Schedule</a>
            </div>
        </div>
    </li>













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








    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">




</ul>
