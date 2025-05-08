<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="{{ url('/') }}/">
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/ico" />

    <title>Hai Company</title>

    <!-- Bootstrap -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('assets/css/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('assets/css/green.css') }}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{ asset('assets/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('assets/css/jqvmap.min.css') }}" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('assets/css/daterangepicker.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        if (typeof jQuery === 'undefined') {
            document.write('<script src="{{ asset('assets/js/jquery.min.js') }}"><\/script>');
        }
    </script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        if (typeof bootstrap === 'undefined') {
            document.write('<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"><\/script>');
        }
    </script>

    <!-- DataTables -->
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        if (typeof $.fn.DataTable === 'undefined') {
            document.write('<script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"><\/script>');
        }
    </script>

    <!-- Other Scripts -->
    <script src="{{ asset('assets/js/fastclick.js') }}"></script>
    <script src="{{ asset('assets/js/nprogress.js') }}"></script>
    <script src="{{ asset('assets/js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/gauge.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-progressbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/icheck.min.js') }}"></script>
    <script src="{{ asset('assets/js/skycons.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.flot.spline.min.js') }}"></script>
    <script src="{{ asset('assets/js/curvedLines.js') }}"></script>
    <script src="{{ asset('assets/js/date.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.vmap.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.vmap.sampledata.js') }}"></script>
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/daterangepicker.js') }}"></script>

    <!-- Custom Theme Scripts -->

<style>
  .title_bg_color{
    background-color: #2A3F54 !important;
    padding: 5px !important;
  }
  .title_bg_color ul{
    /* background-color: red; */
    margin-top: 4px !important;
  }

  /* Menu Toggle Styles */
  #menu_toggle {
    cursor: pointer;
    display: block;
    padding: 15px;
    color: #333;
    text-decoration: none;
    background: none;
    border: none;
    font-size: 20px;
    transition: all 0.3s ease;
  }

  #menu_toggle:hover {
    color: #2A3F54;
    transform: scale(1.1);
  }

  .nav-md .left_col {
    width: 230px;
    transition: width 0.3s ease;
  }

  .nav-sm .left_col {
    width: 70px;
    transition: width 0.3s ease;
  }

  .nav-md .right_col {
    margin-left: 230px;
    transition: margin-left 0.3s ease;
  }

  .nav-sm .right_col {
    margin-left: 70px;
    transition: margin-left 0.3s ease;
  }

  .nav-md .sidebar-footer {
    display: block;
  }

  .nav-sm .sidebar-footer {
    display: none;
  }

  .nav-md .nav.child_menu {
    display: block;
  }

  .nav-sm .nav.child_menu {
    display: none;
  }

  .nav-sm .nav.child_menu li.active {
    display: block;
  }

  .nav-sm .nav.child_menu li.active ul {
    display: block;
  }

  /* Add active state for menu toggle */
  #menu_toggle.active {
    color: #2A3F54;
    transform: rotate(90deg);
  }
</style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{ url('/') }}" class="site_title"><i class="border-0"><img src="{{ asset('images/logo.jpg') }}" alt="" width="30"></i> <span>Cm Name</span></a>
            </div>
            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset('images/img.jpg') }}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Flf </h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Admin Area <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('/') }}">Dashboard</a></li>
                      <li><a href="{{ route('users') }}">Manage Users</a></li>
                      <li><a href="{{ route('roles') }}">Manage Role</a></li>
                      {{-- <li><a href="{{ url('manage_users_log') }}">User Log</a></li> --}}
                    </ul>
                  </li>
                  <li><a><i class=" fa fa-solid fa-gears"></i> Configuration <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('paymentAgents') }}">Add Payment Agents</a></li>
                      <li><a href="{{ route('recruitmentAgents') }}">Recruitment Agents</a></li>
                      <li><a href="{{ route('travelAgents') }}">Add Travel Agents</a></li>
                      <li><a href="{{ route('visaCategories') }}">Visa Categories</a></li>
                      <li><a href="{{ route('educationCategories') }}">Education Categories</a></li>
                      <li><a href="{{ route('jobCategories') }}">Job Categories</a></li>
                      {{-- <li><a href="{{ url('sub_categories') }}">Sub Categories</a></li>
                      <li><a href="{{ url('working_categories') }}">Workings Categories</a></li>
                      <li><a href="{{ url('visa_issuing_authorities') }}">Visa Issuing Authorities </a></li>
                      <li><a href="{{ url('verifying_instruction') }}">Verifying Instruction </a></li>
                      <li><a href="{{ url('add_test_center') }}">Add Test Center </a></li> --}}
                      <li><a href="{{ route('medicalCenters') }}">Add Medical Centers </a></li>
                      {{-- <li><a href="{{ url('test_type') }}">Add Test Type</a></li>
                      <li><a href="{{ url('age_range') }}">Age Range</a></li>
                      <li><a href="{{ url('salary_range') }}">Salary Range</a></li> --}}
                      <li><a href="{{ route('experienceRanges') }}">Experiance Range</a></li>
                      <li><a href="{{ route('airlines') }}">Airlines</a></li>
                      {{-- <li><a href="{{ url('visa_profession') }}">Visa Profession</a></li>
                      <li><a href="{{ url('sectors') }}">Sectors/ Instruction</a></li>
                      <li><a href="{{ url('skills') }}">Skills</a></li>
                      <li><a href="{{ url('cities') }}">Cities</a></li>
                      <li><a href="{{ url('education_level') }}">Education Level</a></li>
                      <li><a href="{{ url('carrer_level') }}">Carrer Level</a></li> --}}
                    </ul>
                  </li>
                  <li><a><i class=" fa fa-solid fa-gears"></i>Employer Management<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      {{-- <li><a href="{{ url('employer_setup') }}">Employer Setup</a></li>
                      <li><a href="{{ url('employer_plans') }}">Employer Plans</a></li>
                      <li><a href="{{ url('job_setup') }}">job setup</a></li>
                      <li><a href="{{ url('report_manager') }}">Report Manager(EM)</a></li>
                      <li><a href="{{ url('employer_ledger') }}">Employer Ledger</a></li>
                      <li><a href="{{ url('job_grouping') }}">Job Grouping for prints</a></li>
                      <li><a href="{{ url('status_job') }}">Status of jobs Report</a></li>
                      <li><a href="{{ url('security_fee') }}">Security Fee Refund prints</a></li>
                      <li><a href="{{ url('travel_agent') }}">Travel Agent Ledger </a></li> --}}

                    </ul>
                    <li><a><i class=" fa fa-solid fa-gears"></i>candidate Management<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('initialRegistration') }}">initial Registration</a></li>
                      <li><a href="{{ route('finalRegistration') }}">Candidate Registration</a></li>
                      {{-- <li><a href="{{ url('job_setup') }}">Apply Jobs</a></li>
                      <li><a href="{{ url('report_manager') }}">Shortlisting</a></li>
                      <li><a href="{{ url('employer_ledger') }}">Shortlisted Candidates</a></li>
                      <li><a href="{{ url('job_grouping') }}">Online Applications</a></li>
                      <li><a href="{{ url('status_job') }}">Job Applications</a></li>
                      <li><a href="{{ url('security_fee') }}">Freeze Applications</a></li>
                      <li><a href="{{ url('travel_agent') }}">Completed Applications </a></li>
                      <li><a href="{{ url('employer_setup') }}">initial Registration</a></li>
                      <li><a href="{{ url('employer_plans') }}">Candidate Final Registration</a></li>
                      <li><a href="{{ url('job_setup') }}">Apply Jobs</a></li>
                      <li><a href="{{ url('report_manager') }}">Shortlisting</a></li>
                      <li><a href="{{ url('employer_ledger') }}">Shortlisted Candidates</a></li>
                      <li><a href="{{ url('job_grouping') }}">Online Applications</a></li>
                      <li><a href="{{ url('status_job') }}">Job Applications</a></li>
                      <li><a href="{{ url('security_fee') }}">Freeze Applications</a></li>
                      <li><a href="{{ url('travel_agent') }}">Completed Applications </a></li>
                      <li><a href="{{ url('status_job') }}">Job Applications</a></li>
                      <li><a href="{{ url('security_fee') }}">Freeze Applications</a></li>
                      <li><a href="{{ url('travel_agent') }}">Completed Applications </a></li> --}}

                    </ul>
                  </li>
                  <li><a><i class="fa fa-bank"></i> Accounting & Finance <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    {{-- <li><a href="{{ url('404') }}">GChart of accounts</a></li>
                    <li><a href="{{ url('opening_balance') }}">Opening Balance</a></li>
                    <li><a href="{{ url('cash_receipt') }}">Cash Receipt</a></li>
                    <li><a href="{{ url('cash_payment') }}">Cash payment</a></li>
                    <li><a href="{{ url('bank_reciept') }}">Bank Receipt</a></li>
                    <li><a href="{{ url('bank_payment') }}">Bank Payment</a></li>
                    <li><a href="{{ url('job_payment') }}">job payment</a></li>
                    <li><a href="{{ url('travel_agent_payment') }}">Travel  Agent payment</a></li>
                    <li><a href="{{ url('candidate') }}">Candidate Receipt</a></li>
                    <li><a href="{{ url('candidate_jv') }}">Candidate JV</a></li> --}}
                    <li><a href="{{ route('expenses') }}">Expenses</a></li>
                    {{-- <li><a href="{{ url('chart_account_balance') }}">Chart of Account With Balance</a></li>
                    <li><a href="{{ url('cash_book') }}">Cash book</a></li>
                    <li><a href="{{ url('bank_book') }}">Bank Book</a></li>
                    <li><a href="{{ url('gernal_ledge') }}">General Ledger</a></li>
                    <li><a href="{{ url('trail_balance') }}">Trail Balance</a></li>
                    <li><a href="{{ url('account_balance') }}">Account Balance</a></li>
                    <li><a href="{{ url('income_statement') }}">Income Statement</a></li>
                    <li><a href="{{ url('balance_sheet') }}">Balance Sheet</a></li>
                    <li><a href="{{ url('cash_flow_statement') }}">Cash flow statement</a></li>
                    <li><a href="{{ url('equity_report') }}">Equity Report</a></li> --}}
                  </ul>
                </li>
                {{-- <div class="d-none">
                    <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{ url('general_elements') }}">General Elements</a></li>
                        <li><a href="{{ url('media_gallery') }}">Media Gallery</a></li>
                        <li><a href="{{ url('typography') }}">Typography</a></li>
                        <li><a href="{{ url('icons') }}">Icons</a></li>
                        <li><a href="{{ url('glyphicons') }}">Glyphicons</a></li>
                        <li><a href="{{ url('widgets') }}">Widgets</a></li>
                        <li><a href="{{ url('invoice') }}">Invoice</a></li>
                        <li><a href="{{ url('inbox') }}">Inbox</a></li>
                        <li><a href="{{ url('calendar') }}">Calendar</a></li>
                      </ul>
                    </li>
                    <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{ url('tables') }}">Tables</a></li>
                        <li><a href="{{ url('tables_dynamic') }}">Table Dynamic</a></li>
                      </ul>
                    </li>
                    <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{ url('chartjs') }}">Chart JS</a></li>
                        <li><a href="{{ url('chartjs2') }}">Chart JS2</a></li>
                        <li><a href="{{ url('morisjs') }}">Moris JS</a></li>
                        <li><a href="{{ url('echarts') }}">ECharts</a></li>
                        <li><a href="{{ url('other_charts') }}">Other Charts</a></li>
                      </ul>
                    </li>
                    <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{ url('fixed_sidebar') }}">Fixed Sidebar</a></li>
                        <li><a href="{{ url('fixed_footer') }}">Fixed Footer</a></li>
                      </ul>
                    </li>
                  </div> --}}

                </ul>
              </div>
              <div class="menu_section d-none">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('page_403') }}">403 Error</a></li>
                      <li><a href="{{ url('page_404') }}">404 Error</a></li>
                      <li><a href="{{ url('page_500') }}">500 Error</a></li>
                      <li><a href="{{ url('plain_page') }}">Plain Page</a></li>
                      <li><a href="{{ url('login') }}">Login Page</a></li>
                      <li><a href="{{ url('pricing_tables') }}">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#level1_1">Level One</a>
                      <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li class="sub_menu"><a href="{{ url('level2') }}">Level Two</a>
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
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ url('login') }}">
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
              <button id="menu_toggle" class="btn btn-link" type="button">
                <i class="fa fa-bars"></i>
              </button>
            </div>
            <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('images/logo.jpg') }}" alt="">Flf Khan
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="javascript:;"> Profile</a>
                    <a class="dropdown-item" href="javascript:;">
                      <span class="badge bg-red pull-right">50%</span>
                      <span>Settings</span>
                    </a>
                    <a class="dropdown-item" href="javascript:;">Help</a>
                    <a class="dropdown-item" href="{{ url('login') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
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
                        <span class="image"><img src="{{ asset('images/img.jpg') }}" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="{{ asset('images/img.jpg') }}" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="{{ asset('images/img.jpg') }}" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="{{ asset('images/img.jpg') }}" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
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
        <div class="right_col" role="main">
