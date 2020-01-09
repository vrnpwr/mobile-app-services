    <!-- ---------------------Navbar --------------------------->
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
      </ul>
      
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-user" style="font-size: 1.2em;"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
<!--             <span class="dropdown-item dropdown-header">15 Notifications</span>
-->            <div class="dropdown-divider"></div>

<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">
  <i class="fa fa-users mr-2"></i> Profile
</a>
<div class="dropdown-divider"></div>

<div  class="dropdown-item link" onclick="$('#logout-form').submit()" style="cursor: pointer;">
  <form id="logout-form" action="/logout" method="POST">
    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
  </form>
  <i class="fas fa-sign-out-alt link"></i>Logout
</div>

</div>
</li>

</ul>
</nav>
<!-- ---------------------Navbar --------------------------->
