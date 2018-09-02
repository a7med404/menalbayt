        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{ url('/cpanel') }}" class="site_title"><i class="fa fa-tasks"> </i>  <span>Men Albayt!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset('admin/images/user.png') }}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>{{ __('home/sidebar.welcome') }}</span>
                <h2>{{ \Auth::user()->name}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>{{ __('home/sidebar.app_settings') }}</h3>
                <ul class="nav side-menu">
                  <li><a href="{{ url('cpanel') }}"><i class="fa fa-dashboard"></i> {{ __('home/sidebar.dashboard') }} <span class="fa fa-home"></span></a> </li>
                  <li><a><i class="fa fa-edit"></i> {{ __('home/sidebar.customers') }} <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('customers.index') }}">{{ __('home/sidebar.all_customers') }}</a></li>
                      <li><a href="{{ route('customers.create') }}">{{ __('home/sidebar.add_customer') }}</a></li>
                      <li><a href="{{ route('customers.repport') }}">{{ __('home/sidebar.customers_repports') }}</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-users"></i> {{ __('home/sidebar.departments') }} <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('departments.index') }}">{{ __('home/sidebar.all_departments') }}</a></li>
                      <li><a href="{{ route('departments.create') }}">{{ __('home/sidebar.add_department') }}</a></li>
                      <li><a href="{{ route('departments.repport') }}">{{ __('home/sidebar.departments_repports') }}</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-tags"></i> {{ __('home/sidebar.jobs') }} <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('jobs.index') }}">{{ __('home/sidebar.all_jobs') }}</a></li>
                      <li><a href="{{ route('jobs.create') }}">{{ __('home/sidebar.add_job') }}</a></li>
                      <li><a href="{{ route('jobs.repport') }}">{{ __('home/sidebar.jobs_repports') }}</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-tasks"></i> {{ __('home/sidebar.offers') }} <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('offers.index') }}">{{ __('home/sidebar.all_offers') }}</a></li>
                      <li><a href="{{ route('offers.create') }}">{{ __('home/sidebar.add_offer') }}</a></li>
                      <li><a href="{{ route('offers.repport') }}">{{ __('home/sidebar.offers_repports') }}</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-puzzle-piece"></i> {{ __('home/sidebar.providers') }} <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('providers.index') }}">{{ __('home/sidebar.all_providers') }}</a></li>
                      <li><a href="{{ route('providers.create') }}">{{ __('home/sidebar.add_provider') }}</a></li>
                      <li><a href="{{ route('providers.repport') }}">{{ __('home/sidebar.providers_repports') }}</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>{{ __('home/sidebar.site_settings') }}</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-sitemap"></i> {{ __('home/sidebar.admin_area') }} <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                          <li><a><i class="fa fa-users"></i> {{ __('home/sidebar.users') }} <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                              <li><a href="{{ route('users.index') }}">{{ __('home/sidebar.all_users') }}</a></li>
                              <li><a href="{{ route('users.create') }}">{{ __('home/sidebar.add_user') }}</a></li>
                            </ul>
                          </li>
                        {{-- <li><a href="#level1_2"> One</a> --}}
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

