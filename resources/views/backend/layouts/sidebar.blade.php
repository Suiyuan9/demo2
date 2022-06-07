<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
      <img src="backend/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><b>{{ config('app.name') }}</b><small style="font-size: 0.6em;" class="brand-text"> Version 1.1.13</small></span>
    </a>
    
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image" style="margin-top: 10px">
          <img src="../public/images/{{ Auth::user()->image }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a> 
          <span class="float-right text-info text-sm">logged in {{ Auth::user()->last_login_time }}</span>  
        </div>
      </div>

     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link {{ request()->is('home') ? 'active' : ' '}}" id="link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('date.index') }}" class="nav-link {{ request()->is('date')  ? 'active' : ' '}}" id="link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Date-Time Listing</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('user.index') }}" class="nav-link {{ request()->is('user')  ? 'active' : ' '}}" id="link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Listing</p>
                </a>
              </li>
            </ul>
          </li>
           

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="border-top: 1px solid #4f5962">
        <div class="image" style="margin-top: 10px">
          <a class="" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
               <i class="fas fa-sign-out-alt" alt="logout"  style="margin-left: 12px; color: white;font-size: 25px;line-height: 180%; width:30px; height:30px"></i>
                  {{ __('Logout') }}
          </a>
        </div>
            </div>
  
            
  
  
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </div>
      
    <!-- /.sidebar -->
  </aside>
 