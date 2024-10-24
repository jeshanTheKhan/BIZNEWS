@include("layouts.Back.header")
<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{route('dashboard')}}" class="site_title"><i class="fa fa-paw"></i> <span>Admin Dashboard !</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{Auth::user()->name}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                  <h3>General</h3>
                  <ul class="nav side-menu">
                    <li><a><i class="fa fa-book"></i> Category <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{route('add.category')}}">Add Category</a></li>
                        <li><a href="{{route('all.category')}}">Category Table </a></li>
                      </ul>
                    </li>
                    <li><a><i class="fa fa-globe"></i> Breaking News <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{route('add.breakingnews')}}">Add Breaking News</a></li>
                        <li><a href="{{route('english.breakingnews')}}">Breaking News </a></li>
                      </ul>
                    </li>

                    <li><a><i class="fa fa-bullseye"></i> Adds <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{route('add.adds')}}">Add Adds</a></li>
                        <li><a href="{{route('all.adds')}}">Adds Table</a></li>
                      </ul>
                    </li>
                    
                    <li><a><i class="fa fa-bullhorn"></i> News <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{route('add.news')}}">Add News</a></li>
                        <li><a href="{{ route('all.news') }}">News Table</a></li>
                      </ul>
                    </li>
                    {{-- <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="production/tables.html">Tables</a></li>
                        <li><a href="production/tables_dynamic.html">Table Dynamic</a></li>
                      </ul>
                    </li>
                    <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="production/chartjs.html">Chart JS</a></li>
                        <li><a href="production/chartjs2.html">Chart JS2</a></li>
                        <li><a href="production/morisjs.html">Moris JS</a></li>
                        <li><a href="production/echarts.html">ECharts</a></li>
                        <li><a href="production/other_charts.html">Other Charts</a></li>
                      </ul>
                    </li>
                    <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="production/fixed_sidebar.html">Fixed Sidebar</a></li>
                        <li><a href="production/fixed_footer.html">Fixed Footer</a></li>
                      </ul>
                    </li>
                  </ul> --}}
                </div>
                {{-- <div class="menu_section">
                  <h3>Live On</h3>
                  <ul class="nav side-menu">
                    <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="production/e_commerce.html">E-commerce</a></li>
                        <li><a href="production/projects.html">Projects</a></li>
                        <li><a href="production/project_detail.html">Project Detail</a></li>
                        <li><a href="production/contacts.html">Contacts</a></li>
                        <li><a href="production/profile.html">Profile</a></li>
                      </ul>
                    </li>
                    <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="production/page_403.html">403 Error</a></li>
                        <li><a href="production/page_404.html">404 Error</a></li>
                        <li><a href="production/page_500.html">500 Error</a></li>
                        <li><a href="production/plain_page.html">Plain Page</a></li>
                        <li><a href="production/login.html">Login Page</a></li>
                        <li><a href="production/pricing_tables.html">Pricing Tables</a></li>
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
                    <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                  </ul>
                </div> --}}
  
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
                <a href="{{route('welcome')}}" data-toggle="tooltip" data-placement="top" title="view" target="_blank">
                  <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{route('logout')}}">
                  <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                </a>
              </div>
              <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">{{Auth::user()->name}}
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="{{route('profile.edit')}}"> Profile</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                  <a class="dropdown-item"  href="javascript:;">Help</a>
                    <a class="dropdown-item"  href="{{route('logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>

                <li role="presentation" class="nav-item dropdown open">
                  <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>{{Auth::user()->name}}</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>{{Auth::user()->name}}</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>{{Auth::user()->name}}</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>{{Auth::user()->name}}</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <div class="text-center">
                        <a class="dropdown-item">
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

@yield('content')
@include('layouts.Back.footer')