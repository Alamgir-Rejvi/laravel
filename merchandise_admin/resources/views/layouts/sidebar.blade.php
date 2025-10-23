<!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar ">
  <div class="navbar-wrapper bg-info">
    <div class="m-header">
      <a href="#!" class="b-brand text-primary">
        <!-- ========   Change your logo from here   ========= -->
        <!-- <img src="/public/assets/images/blogo.webp" class="img-fluid logo-lg" alt="logo"> -->
        <h4>Merchandise Admin</h4>
        <!-- <img src="/public/assets/images/" class="img-fluid me-2" style="height:40px;" alt="thread logo"> -->
      </a>
    </div>
    <div class="navbar-content">
      <ul class="pc-navbar">
        <li class="pc-item">
          <a href="#" class="pc-link">
            <span class="pc-micon"><i class="ti ti-dashboard"></i></span>
            <span class="pc-mtext">Dashboard</span>
          </a>
        </li>
          <!-- Buyer section -->
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link"><span class="pc-micon"><i class="ti ti-users"></i></span><span class="pc-mtext">Buyer Management</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="{{ route('buyers.index') }}">All Buyer</a></li>
            <li class="pc-item"><a class="pc-link" href="{{ route('buyers.create') }}">Add Buyer</a></li>
      
          </ul>
        </li>

        <!-- ==== Merchandiser section -->

        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link"><span class="pc-micon"><i class="ti ti-building-store"></i></span><span class="pc-mtext">Merchandiser Management</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="{{ route('merchandisers.index') }}">All Merchandiser</a></li>
            <li class="pc-item"><a class="pc-link" href="{{ route('merchandisers.create') }}">Add New Merchandiser</a></li>
            
          </ul>
        </li>

        <!-- production Management -->

        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link"><span class="pc-micon"><i class="ti ti-building-factory"></i></span><span class="pc-mtext">Production Management</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
          <ul class="pc-submenu">
           
            <li class="pc-item"><a class="pc-link" href="#!">Add New Production</a></li>
            <li class="pc-item"><a class="pc-link" href="#!">Work Progress</a></li>
            
            <li class="pc-item"><a class="pc-link" href="#!">Completed Production</a></li>
          </ul>
        </li>

        <!-- Order section -->
         <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link"><span class="pc-micon"><i class="ti ti-truck-delivery"></i></span><span class="pc-mtext">Order Management</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="#!">All Orders</a></li>
            <li class="pc-item"><a class="pc-link" href="#!">Add New Orders</a></li>
            
            <li class="pc-item"><a class="pc-link" href="#!">Order Tracking</a></li>
            <li class="pc-item"><a class="pc-link" href="#!">Delivery</a></li>
          </ul>
        </li>


        <!-- Fabric  section -->
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link"><span class="pc-micon"><i class="ti ti-truck-delivery"></i></span><span class="pc-mtext">Fabric & Accessories</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="#!">A</a></li>
            <li class="pc-item"><a class="pc-link" href="#!">B</a></li>
            
            <li class="pc-item"><a class="pc-link" href="#!">C</a></li>
            <li class="pc-item"><a class="pc-link" href="#!">D</a></li>
          </ul>
        </li>


        <!-- Sample  section -->
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link"><span class="pc-micon"><i class="ti ti-truck-delivery"></i></span><span class="pc-mtext">Sample Tracking</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="#!">A</a></li>
            <li class="pc-item"><a class="pc-link" href="#!">B</a></li>
            
            <li class="pc-item"><a class="pc-link" href="#!">C</a></li>
            <li class="pc-item"><a class="pc-link" href="#!">D</a></li>
          </ul>
        </li>

        <!-- finance section  -->

        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link"><span class="pc-micon"><i class="ti ti-currency-dollar"></i></span><span class="pc-mtext">Payment Management</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="#!">Income</a></li>
            <li class="pc-item"><a class="pc-link" href="#!">Expenses</a></li>
            
            <li class="pc-item"><a class="pc-link" href="#!">Supplier Payments</a></li>
            <li class="pc-item"><a class="pc-link" href="#!">Payment Report</a></li>
        
          </ul>
        </li>

        <!-- reports -->

        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link"><span class="pc-micon"><i class="ti ti-report-money"></i></span><span class="pc-mtext">Reports</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="#!">Buyer Report</a></li>
            <li class="pc-item"><a class="pc-link" href="#!">Merchandiser Report</a></li>
            <li class="pc-item"><a class="pc-link" href="#!">Production Report</a></li>
            <li class="pc-item"><a class="pc-link" href="#!">Order Report</a></li>
          
          </ul>
        </li>

        <!-- setting section -->

        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link"><span class="pc-micon"><i class="ti ti-settings-automation"></i></span><span class="pc-mtext">Setting</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="#!">Company Profile</a></li>
            <li class="pc-item"><a class="pc-link" href="#!">User Role & Permission</a></li>
            <li class="pc-item"><a class="pc-link" href="#!">Backup & Restore</a></li>
            
          </ul>
        </li>
         
       

       
        <li class="pc-item">
          <a href="../pages/login.html" class="pc-link">
            <span class="pc-micon"><i class="ti ti-lock"></i></span>
            <span class="pc-mtext">Login</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="../pages/register.html" class="pc-link">
            <span class="pc-micon"><i class="ti ti-user-plus"></i></span>
            <span class="pc-mtext">Register</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- [ Sidebar Menu ] end -->