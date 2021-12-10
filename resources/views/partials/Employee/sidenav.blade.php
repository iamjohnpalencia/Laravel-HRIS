<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">HRIS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Jay Johnson Reyes</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">          
          <li class="nav-item {{ (request()->is('home/personal') || request()->is('home/timesheet') || request()->is('home/daily') || request()->is('home/leaveledger') || request()->is('home/announcement') || request()->is('home/update')) ? 'menu-is-opening menu-open' : '' }}" >
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                Menu
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <!-- nav-item menu-is-opening menu-open -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('personal') }}" class="nav-link {{ (request()->is('home/personal')) ? 'active' : '' }}">
                  <i class="fas fa-user nav-icon"></i>
                  <p>Personal Info</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('timesheet') }}" class="nav-link {{ (request()->is('home/timesheet')) ? 'active' : '' }}">
                  <i class="fas fa-clock nav-icon"></i>
                  <p>Timesheet</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('daily') }}" class="nav-link {{ (request()->is('home/daily')) ? 'active' : '' }}">
                  <i class="fas fa-record-vinyl nav-icon"></i>
                  <p>Daily time records</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('leaveledger') }}" class="nav-link {{ (request()->is('home/leaveledger')) ? 'active' : '' }}">
                  <i class="fas fa-book nav-icon"></i>
                  <p>Leave ledger</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="{{ route('announcement') }}" class="nav-link {{ (request()->is('home/announcement')) ? 'active' : '' }}">
                  <i class="fas fa-bullhorn nav-icon"></i>
                  <p>Announcement</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="{{ route('update') }}" class="nav-link {{ (request()->is('home/update')) ? 'active' : '' }}">
                  <i class="fas fa-wrench nav-icon"></i>
                  <p>201 Update</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Filling
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?newsched" class="nav-link <?= ($_SERVER['REQUEST_URI']== "newsched")?"active":"";?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>New Schedule</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?newleave" class="nav-link <?= ($_SERVER['REQUEST_URI']== "newleave")?"active":"";?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>New Leave</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?overtime" class="nav-link <?= ($_SERVER['REQUEST_URI']== "overtime")?"active":"";?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Overtime</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?timelogs" class="nav-link <?= ($_SERVER['REQUEST_URI']== "timelogs")?"active":"";?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Timelogs</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Subordinates
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?sleaveledger" class="nav-link <?= ($_SERVER['REQUEST_URI']== "sleaveledger")?"active":"";?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Leave Ledger</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?sdaily" class="nav-link <?= ($_SERVER['REQUEST_URI']== "sdaily")?"active":"";?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daily time record</p>
                </a>
              </li>
            </ul>
          </li>
      
          <li class="nav-header">Subordinate List</li>
          <li class="nav-item">
            <a href="?stimesheet" class="nav-link <?= ($_SERVER['REQUEST_URI']== "stimesheet")?"active":"";?>">
              <i class="nav-icon fas fa-clock"></i>
              <p>Timesheet</p>
            </a>
          </li>
          
          <li class="nav-header">Account</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p class="text">My Profile</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Change Password</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>