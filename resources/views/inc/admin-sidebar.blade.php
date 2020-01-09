<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link" style="background: darkslategray;">
    <span class="brand-text font-weight-light ml-5">Logo Here</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar" style="background: darkslategray;">
    <?php $sidebarTab = (isset($sidebarTab)) ? $sidebarTab : '';  ?>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item has-treeview menu-open">
            <a href="/dashboard" class="nav-link <?php echo ($sidebarTab=='') ? 'active' :'' ?> ">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>
                Dashboard 
              </p>
            </a>
            <li class="nav-item">
              <a href="/slider" class="nav-link <?php echo ($sidebarTab=='slider') ? 'active' :'' ?>">
                <i class="nav-icon fa fa-th"></i>
                <p>
                  Slider Page
                </p>
              </a>
            </li>         

            <li class="nav-item has-treeview">
              <a href="/services" class="nav-link <?php echo ($sidebarTab=='services') ? 'active' :'' ?>">
                <i class="nav-icon fa fa-book"></i>
                <p>
                  Services
                </p>
              </a>

            </li>
            <li class="nav-item has-treeview">
              <a href="/key-clients" class="nav-link <?php echo ($sidebarTab=='key-clients') ? 'active' :'' ?>">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Key Clients
                </p>
              </a>
            </li>

            <li class="nav-item has-treeview">
              <a href="/testimonials" class="nav-link <?php echo ($sidebarTab=='testimonials') ? 'active' :'' ?>">
                <i class="nav-icon fa fa-table"></i>
                <p>
                  Testimonials
                </p>
              </a>
            </li>

            <li class="nav-item has-treeview">
              <a href="/blogs" class="nav-link <?php echo ($sidebarTab=='blogs') ? 'active' :'' ?>">
                <i class="nav-icon fas fa-blog"></i>
                <p>
                  Blogs
                </p>
              </a>
            </li>

            <li class="nav-item has-treeview">
              <a href="/portfolio" class="nav-link <?php echo ($sidebarTab=='portfolio') ? 'active' :'' ?>">
                <i class="nav-icon fas fa-portrait"></i>
                <p>
                  Portfolio
                </p>
              </a>
            </li>

            <li class="nav-item has-treeview">
              <a href="/sub-domains" class="nav-link <?php echo ($sidebarTab=='sub-domains') ? 'active' :'' ?>">
                <i class="nav-icon fa fa-sitemap"></i>
                <p>
                  Subdomains
                </p>
              </a>
            </li>

            <li class="nav-item has-treeview">
              <a href="/enquiries" class="nav-link <?php echo ($sidebarTab=='enquiries') ? 'active' :'' ?>">
                <i class="nav-icon fas fa-exchange-alt"></i>
                <p>
                  Enquiries
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>