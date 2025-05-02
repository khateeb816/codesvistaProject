<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <link href="cdn.datatables.net/2.3.0/css/dataTables.dataTables.min.css" rel="stylesheet">
    <script src="cdn.datatables.net/2.3.0/js/dataTables.min.js"></script>
<style>
  .title_bg_color{
    background-color: #2A3F54 !important;
    padding: 5px !important;
  }
  .title_bg_color ul{
    /* background-color: red; */
    margin-top: 4px !important;
  }
</style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="border-0"><img src="./images/logo.jpg" alt="" width="30"></i> <span>Cm Name</span></a>
            </div>
            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
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
                      <li><a href="./">Dashboard</a></li>
                      <li><a href="{{ route('users') }}">Manage Users</a></li>
                      <li><a href="{{ route('roles') }}">Manage Role</a></li>
                      <li><a href="./manage_users_log.php">User Log</a></li>
                    </ul>
                  </li>
                  <li><a><i class=" fa fa-solid fa-gears"></i> Configuration <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="./payment_agents.php">Add Payment Agents</a></li>
                      <li><a href="./recruitment_agents.php">Recruitment Agents</a></li>
                      <li><a href="./travel_agents.php">Add Travel Agents</a></li>
                      <li><a href="./visa_categories.php">Visa Categories</a></li>
                      <li><a href="./education_categories.php">Education Categories</a></li>
                      <li><a href="./job_categories.php">Job Categories</a></li>
                      <li><a href="sub_categories.php">Sub Categories</a></li>
                      <li><a href="./working_categories.php">Workings Categories</a></li>
                      <li><a href="./visa_issuing_authorities.php">Visa Issuing Authorities </a></li>
                      <li><a href="./verifying_instruction.php">Verifying Instruction </a></li>
                      <li><a href="./add_test_center.php">Add Test Center </a></li>
                      <li><a href="./add_medical_centers.php">Add Medical Centers </a></li>
                      <li><a href="./test_type.php">Add Test Type</a></li>
                      <li><a href="./age_range.php">Age Range</a></li>
                      <li><a href="./salary_range.php">Salary Range</a></li>
                      <li><a href="./experience_range.php">Experiance Range</a></li>
                      <li><a href="./airlines.php">Airlines</a></li>
                      <li><a href="./visa_profession.php">Visa Profession</a></li>
                      <li><a href="./sectors.php">Sectors/ Instruction</a></li>
                      <li><a href="./skills.php">Skills</a></li>
                      <li><a href="./cites.php">Cities</a></li>
                      <li><a href="./education_level.php">Education Level</a></li>
                      <li><a href="./carrer_level.php">Carrer Level</a></li>
                    </ul>
                  </li>
                  <li><a><i class=" fa fa-solid fa-gears"></i>Employer Management<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="./employer_setup.php">Employer Setup</a></li>
                      <li><a href="./employer_plans.php">Employer Plans</a></li>
                      <li><a href="./job_setup.php">job setup</a></li>
                      <li><a href="./report_manager.php">Report Manager(EM)</a></li>
                      <li><a href="./employer_ledger.php">Employer Ledger</a></li>
                      <li><a href="./job_grouping.php">Job Grouping for prints</a></li>
                      <li><a href="status_job.php">Status of jobs Report</a></li>
                      <li><a href="./security_fee.php">Security Fee Refund prints</a></li>
                      <li><a href="./travel_agent.php">Travel Agent Ledger </a></li>

                    </ul>
                    <li><a><i class=" fa fa-solid fa-gears"></i>candidate Management<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="./employer_setup.php">initial Registration</a></li>
                      <li><a href="./employer_plans.php">Candidate Final Registration</a></li>
                      <li><a href="./job_setup.php">Apply Jobs</a></li>
                      <li><a href="./report_manager.php">Shortlisting</a></li>
                      <li><a href="./employer_ledger.php">Shortlisted Candidates</a></li>
                      <li><a href="./job_grouping.php">Online Applications</a></li>
                      <li><a href="status_job.php">Job Applications</a></li>
                      <li><a href="./security_fee.php">Freeze Applications</a></li>
                      <li><a href="./travel_agent.php">Completed Applications </a></li>
                      <li><a href="./employer_setup.php">initial Registration</a></li>
                      <li><a href="./employer_plans.php">Candidate Final Registration</a></li>
                      <li><a href="./job_setup.php">Apply Jobs</a></li>
                      <li><a href="./report_manager.php">Shortlisting</a></li>
                      <li><a href="./employer_ledger.php">Shortlisted Candidates</a></li>
                      <li><a href="./job_grouping.php">Online Applications</a></li>
                      <li><a href="status_job.php">Job Applications</a></li>
                      <li><a href="./security_fee.php">Freeze Applications</a></li>
                      <li><a href="./travel_agent.php">Completed Applications </a></li>
                      <li><a href="status_job.php">Job Applications</a></li>
                      <li><a href="./security_fee.php">Freeze Applications</a></li>
                      <li><a href="./travel_agent.php">Completed Applications </a></li>

                    </ul>
                  </li>
                  <li><a><i class="fa fa-bank"></i> Accounting & Finance <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="404.php">GChart of accounts</a></li>
                    <li><a href="opening_balance.php">Opening Balance</a></li>
                    <li><a href="cash_receipt.php">Cash Receipt</a></li>
                    <li><a href="cash_payment.php">Cash payment</a></li>
                    <li><a href="bank_reciept.php">Bank Receipt</a></li>
                    <li><a href="bank_payment.php">Bank Payment</a></li>
                    <li><a href="job_payment.php">job payment</a></li>
                    <li><a href="travel_agent_payment.php">Travel  Agent payment</a></li>
                    <li><a href="candidate.php">Candidate Receipt</a></li>
                    <li><a href="candidate_jv.php">Candidate JV</a></li>
                    <li><a href="expenses_against_candidate.php">Expenses Against Candidate</a></li>
                    <li><a href="chart_account_balance.php">Chart of Account With Balance</a></li>
                    <li><a href="cash_book.php">Cash book</a></li>
                    <li><a href="bank_book.php">Bank Book</a></li>
                    <li><a href="gernal_ledge.php">General Ledger</a></li>
                    <li><a href="trail_balance.php">Trail Balance</a></li>
                    <li><a href="account_balance.php">Account Balance</a></li>
                    <li><a href="income_statement.php">Income Statement</a></li>
                    <li><a href="balance_sheet.php">Balance Sheet</a></li>
                    <li><a href="cash_flow_statement.php">Cash flow statement</a></li>
                    <li><a href="equity_report.php">Equity Report</a></li>
                  </ul>
                </li>
                <div class="d-none">
                    <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="general_elements.php">General Elements</a></li>
                        <li><a href="media_gallery.php">Media Gallery</a></li>
                        <li><a href="typography.php">Typography</a></li>
                        <li><a href="icons.php">Icons</a></li>
                        <li><a href="glyphicons.php">Glyphicons</a></li>
                        <li><a href="widgets.php">Widgets</a></li>
                        <li><a href="invoice.php">Invoice</a></li>
                        <li><a href="inbox.php">Inbox</a></li>
                        <li><a href="calendar.php">Calendar</a></li>
                      </ul>
                    </li>
                    <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="tables.php">Tables</a></li>
                        <li><a href="tables_dynamic.php">Table Dynamic</a></li>
                      </ul>
                    </li>
                    <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="chartjs.php">Chart JS</a></li>
                        <li><a href="chartjs2.php">Chart JS2</a></li>
                        <li><a href="morisjs.php">Moris JS</a></li>
                        <li><a href="echarts.php">ECharts</a></li>
                        <li><a href="other_charts.php">Other Charts</a></li>
                      </ul>
                    </li>
                    <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="fixed_sidebar.php">Fixed Sidebar</a></li>
                        <li><a href="fixed_footer.php">Fixed Footer</a></li>
                      </ul>
                    </li>
                  </div>

                </ul>
              </div>
              <div class="menu_section d-none">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.php">403 Error</a></li>
                      <li><a href="page_404.php">404 Error</a></li>
                      <li><a href="page_500.php">500 Error</a></li>
                      <li><a href="plain_page.php">Plain Page</a></li>
                      <li><a href="login.php">Login Page</a></li>
                      <li><a href="pricing_tables.php">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#level1_1">Level One</a>
                      <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li class="sub_menu"><a href="level2.php">Level Two</a>
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
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.php">
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
                    <img src="./images/logo.jpg" alt="">Flf Khan
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="javascript:;"> Profile</a>
                    <a class="dropdown-item" href="javascript:;">
                      <span class="badge bg-red pull-right">50%</span>
                      <span>Settings</span>
                    </a>
                    <a class="dropdown-item" href="javascript:;">Help</a>
                    <a class="dropdown-item" href="login.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
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
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
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
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
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
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
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
