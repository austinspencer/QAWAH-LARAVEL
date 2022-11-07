<!-- Sidebar Menu -->
      <nav class="mt-2" style="font-size: 14px;">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{url('admin/dashboard')}}" class="nav-link <?php if(Request::segment(2) == "dashboard"){ ?> active <?php } ?> ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
            <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul> -->
          </li>


          <!-- <li class="nav-header">Site Layout Section</li> -->
          
          {{-- <li class="nav-header">Site Layout Section</li>
          <li class="nav-item <?php if(Request::segment(2) == "slider" || Request::segment(2) == "add-slider" || Request::segment(2) == "banner" || Request::segment(2) == "add-banner" || Request::segment(2) == "logo"){ ?> menu-is-opening menu-open <?php } ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-folder-open"></i>
              <p>
                Manage Logo\Banners
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

            <li class="nav-item">
            <a href="{{url('admin/logo')}}" class="nav-link <?php if(Request::segment(2) == "logo"){ ?> active <?php } ?> ">
              <i class="nav-icon fas fa-image"></i>

              <p>
                Manage Logo
               <!--  <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>

              <li class="nav-item">
                <a href="{{url('admin/slider')}}" class="nav-link <?php if(Request::segment(2) == "slider" || Request::segment(2) == "add-slider"){ ?> active <?php } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home Page Slider</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('admin/banner')}}" class="nav-link <?php if(Request::segment(2) == "banner" || Request::segment(2) == "add-banner"){ ?> active <?php } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inner Banner</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-header">Pages Section</li>
          <li class="nav-item <?php if(Request::segment(2) == "home" || Request::segment(2) == "about" || Request::segment(2) == "contact"){ ?> menu-is-opening menu-open <?php } ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Pages
                <i class="fas fa-angle-left right"></i>
               <!--  <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/home')}}" class="nav-link <?php if(Request::segment(2) == "home"){ ?> active <?php } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="{{url('admin/about')}}" class="nav-link <?php if(Request::segment(2) == "about"){ ?> active <?php } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About us</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/contact')}}" class="nav-link <?php if(Request::segment(2) == "contact"){ ?> active <?php } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact us</p>
                </a>
              </li>
              
            </ul>
          </li> --}}
          <li class="nav-header">Packages Section</li>
          <li class="nav-item<?php if(Request::segment(2) == "packages" || Request::segment(2) == "add-package" || Request::segment(2) == "package"){ ?> menu-is-opening menu-open <?php } ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-folder-open"></i>
              <p>
                Manage Packages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              {{-- <li class="nav-item">
                <a href="{{url('admin/packages-catogeries')}}" class="nav-link <?php if(Request::segment(2) == "packages" || Request::segment(2) == "add-package" || Request::segment(2) == "package"){ ?> active <?php } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Packages Catogery list</p>
                </a>
              </li> --}}
              <li class="nav-item">
                <a href="{{url('admin/packages')}}" class="nav-link <?php if(Request::segment(2) == "packages" || Request::segment(2) == "add-package" || Request::segment(2) == "package"){ ?> active <?php } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Packages list</p>
                </a>
              </li>
            </ul>
          </li>
          {{-- <li class="nav-header">Product Section</li>
          <li class="nav-item <?php if(Request::segment(2) == "product" || Request::segment(2) == "add-product" || Request::segment(2) == "show-gallery" || Request::segment(2) == "category"){ ?> menu-is-opening menu-open <?php } ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-folder-open"></i>
              <p>
                Manage Product
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{url('admin/category')}}" class="nav-link <?php if(Request::segment(2) == "category" || Request::segment(2) == "add-category"){ ?> active <?php } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Categories list</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/product')}}" class="nav-link <?php if(Request::segment(2) == "product"){ ?> active <?php } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product list</p>
                </a>
              </li>
              
            </ul>
          </li> --}}

          {{-- <li class="nav-header">Order Section</li>
          <li class="nav-item<?php if(Request::segment(2) == "order" || Request::segment(2) == "order" ){ ?> menu-is-opening menu-open <?php } ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-folder-open"></i>
              <p>
                Manage Orders
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/order')}}" class="nav-link <?php if(Request::segment(2) == "order" || Request::segment(2) == "order"){ ?> active <?php } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Order list</p>
                </a>
              </li>
              
            </ul>
          </li> --}}

          <li class="nav-header">Users Section</li>
          <li class="nav-item <?php if(Request::segment(2) == "users" || Request::segment(2) == "user"){ ?> menu-is-opening menu-open <?php } ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Manage Users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/users')}}" class="nav-link <?php if(Request::segment(2) == "users"){ ?> active <?php } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users list</p>
                </a>
              </li>
              
            </ul>
          </li>

          {{-- <li class="nav-header">Inquiries Section</li>
          <li class="nav-item<?php if(Request::segment(2) == "show-inquiries"){ ?> menu-is-opening menu-open <?php } ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-folder-open"></i>
              <p>
                Manage Inquiries
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/show-inquiries')}}" class="nav-link <?php if(Request::segment(2) == "show-inquiries"){ ?> active <?php } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inquiries list</p>
                </a>
              </li> --}}

              <!-- <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Newsletters list</p>
                </a>
              </li> -->
              
            </ul>
          </li>


          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-folder-open"></i>
              <p>
                Manage Newsletter
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Newsletters list</p>
                </a>
              </li>
              
            </ul>
          </li> -->
{{-- 
          <li class="nav-header">Admin Section</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-folder-open"></i>
              <p>
                Manage Admin
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
            <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Newsletters list</p>
                </a>
              </li>
              
            </ul> -->
          </li> --}}

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>