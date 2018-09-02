        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('admin/images/user.png') }}" alt=""> {{ \Auth::user()->name }}
                    <i class=" fa fa-angle-down"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> {{ __('home/sidebar.profile') }} </a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>{{ __('home/sidebar.settings') }}</span>
                      </a>
                    </li>
                    <li class="divider"></li>
                    {{-- {{dd(auth())}} --}}
                    <li><a href="{{ route('change-my-password', ['id' => \Auth::user()->id]) }}"><i class="fa fa-sign-out pull-right fa-fw"></i> Change Password</a>
                    <li><a href="{{ route('change-locale', ['lang' => app('lang') ]) }} "> {{ session()->get('lang') }} </a></li>
                    <li><a href="{{ route('admin.logout') }}"><i class="fa fa-sign-out pull-right fa-fw"></i> {{ __('home/sidebar.log_out') }} </a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-main-color">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="{{ asset('admin/images/user.png') }}" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="{{ asset('admin/images/user.png') }}" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="{{ asset('admin/images/user.png') }}" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="{{ asset('admin/images/user.png') }}" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>{{ __('home/sidebar.see_alerts') }}</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul> 
                </li>
                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-bell-o"></i>
                  <span class="badge bg-main-color">{{ $newCountProviders->count() }}</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    @foreach($new5Providers as $new5Provider)
                    <li>
                      <a>
                        <span class="image"><img src="{{ asset('admin/images/user.png') }}" alt="Profile Image" /></span>
                        <span>
                        <span>{{ $new5Provider->profile->first_name }}</span>
                          <span class="time">{{ $new5Provider->created_at->diffForHumans() }}</span>
                        </span>
                        <span class="message">
                            {{ $new5Provider->phone_number }}
                        </span>
                      </a>
                    </li>
                    @endforeach

                    <li>
                      <div class="text-center">
                        <a href="{{ route('providers.index') }}">
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
