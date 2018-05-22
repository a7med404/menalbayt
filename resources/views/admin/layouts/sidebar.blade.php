        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{ url('/cpanel') }}" class="site_title"><i class="fa fa-anchor"></i> <span>Men Albayt!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset('admin/images/user.png') }}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome</span>
                <h2>a7med404</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{ url('cpanel') }}"><i class="fa fa-dashboard"></i> DASHBOARD <span class="fa fa-home"></span></a> </li>
                  <li><a><i class="fa fa-edit"></i> Customers <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('customers.index') }}">All Customers</a></li>
                      <li><a href="{{ route('customers.create') }}">Add Customer</a></li>
                      <li><a href="{{ route('customers.repport') }}">Customer  Repports</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Departments <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('departments.index') }}">All Departments</a></li>
                      <li><a href="{{ route('departments.create') }}">Add Department</a></li>
                      <li><a href="{{ route('departments.repport') }}">Department  Repports</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-tags"></i> Jobs <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('jobs.index') }}">All Jobs</a></li>
                      <li><a href="{{ route('jobs.create') }}">Add Job</a></li>
                      <li><a href="{{ route('jobs.repport') }}">Job  Repports</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-wrench"></i> Offers <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('offers.index') }}">All Offers</a></li>
                      <li><a href="{{ route('offers.create') }}">Add Offer</a></li>
                      <li><a href="{{ route('offers.repport') }}">Offers  Repports</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-wrench"></i> Provider <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('providers.index') }}">All Provider</a></li>
                      <li><a href="{{ route('providers.create') }}">Add Provider</a></li>
                      <li><a href="{{ route('providers.repport') }}">Providers  Repports</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">Chart JS</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">403 Error</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Level One</a>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Level One</a>
                        </li>
                    </ul>
                  </li> 
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

