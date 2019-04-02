<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Welcome to Admin panel</title>
        <!-- Bootstrap -->
        <!--<link href="/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <!--<link href="/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

        <!-- Custom Theme Style -->

        <!-- Bootstrap Colorpicker -->
        <!--<link href="/vendors/mjolnic-bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <!-- Datatables -->
        <!--<link href="/vendors/datatable/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="/vendors/datatable/buttons.bootstrap.min.css" rel="stylesheet">

        <link href="/vendors/datatable/responsive.bootstrap.min.css" rel="stylesheet">

        <link href="/vendors/datatable/rowReorder.dataTables.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oxygen|Ubuntu" rel="stylesheet">
        <link href="/css/custom.css" rel="stylesheet">
        <link href="/css/custom.min.css" rel="stylesheet">-->
        <link href="/node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
        <link href="/node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
        <link href="/node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="/node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
        <!-- Main styles for this application-->
        <link href="/css/style.css" rel="stylesheet">
        <link href="/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
        @yield('css')
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;"> <a href="/home" class="site_title"><img src="/images/logo.jpg"></a> </div>
                        <div class="clearfix"></div>
                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <ul class="nav side-menu">
                                    <li><a href="/home"><i class="fa fa-home"></i> Dashboard</a></li>
                                    <li><a><i class="fa fa-list-ul" aria-hidden="true"></i> Products <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="/category/create">Add Main Category</a></li>
                                            <li><a href="/category">View Main Category</a></li>
                                            <li><a href="/subcategory/create">Add Sub Category</a></li>
                                            <li><a href="/subcategory">View Sub Category</a></li>
                                        </ul>
                                    </li>
                                    <li> <a><i class="fa fa-users" aria-hidden="true"></i> Sales <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="/partner/create">Add Partner</a></li>
                                            <li><a href="/partner">View Partner</a></li>
                                        </ul>
                                    </li>
                                    <li> <a><i class="fa fa-users" aria-hidden="true"></i> Partner Management <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="/partner/create">Add Partner</a></li>
                                            <li><a href="/partner">View Partner</a></li>
                                        </ul>
                                    </li>
                                    <li> <a><i class="fa fa-user" aria-hidden="true"></i> Customer Management <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="/customer">View Customers</a></li>
                                        </ul>
                                    </li>
                                    <li> <a><i class="fa fa-shopping-basket" aria-hidden="true"></i> Order Management <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="/order">View Orders</a></li>
                                        </ul>
                                    </li>
                                    <li> <a><i class="fa fa-credit-card-alt" aria-hidden="true"></i> Payment Management <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="/payment">View Payments</a></li>
                                        </ul>
                                    </li>
                                    <li id="delivery"> <a><i class="fa fa-bars" aria-hidden="true"></i> Todays delivery<span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="/delivery">Todays delivery</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <nav>
                            <div class="nav toggle"> <a id="menu_toggle"><i class="fa fa-bars"></i></a> </div>
                            <ul class="nav navbar-nav navbar-right">
                                <li class=""> 
                                    <!--<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <img src="images/img.jpg" alt="">Balaji L <span class=" fa fa-angle-down"></span> 
                                    </a>-->
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        @if (Auth::guest())
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                        <li><a href="{{ route('register') }}">Register</a></li>
                                        @else  
                                        <li><a href="javascript:;"> Profile</a></li>
                                        <li>
                                            <!--<a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>-->
                                            <a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
                                                <i class="fa fa-sign-out pull-right"></i>
                                                Log Out
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>

                                        </li>
                                        @endif
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->
                <!-- page content -->
                @yield('content')
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- jQuery -->
        <!--<script src="/js/jquery-3.1.1.js"></script>-->
        
        <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <script>
            var $j = jQuery.noConflict();
        </script>

        <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>-->
        <!--<script src="/js/jquery-3.1.1.js"></script>
        <script>
            var $ = jQuery.noConflict();
        </script>
        
        <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>-->
        <!-- Bootstrap -->
        <!--<script src="/vendors/bootstrap/dist/js/bootstrap.min.js"></script>-->
        <!--<script src="/js/custom.js"></script>
        <!-- Bootstrap Colorpicker -->

        <!-- Datatables -->
        <!--<script src="/vendors/datatable/jquery.dataTables.min.js"></script>
        <script src="/vendors/datatable/dataTables.bootstrap.min.js"></script>
        <script src="/vendors/datatable/dataTables.buttons.min.js"></script>
        <script src="/vendors/datatable/buttons.bootstrap.min.js"></script>
        <script src="/vendors/datatable/buttons.flash.min.js"></script>
        <script src="/vendors/datatable/buttons.html5.min.js"></script>
        <script src="/vendors/datatable/buttons.print.min.js"></script>
        <script src="/vendors/datatable/dataTables.responsive.min.js"></script>
        <script src="/vendors/datatable/responsive.bootstrap.js"></script>
        <script src="/vendors/datatable/dataTables.rowReorder.min.js"></script>-->
        <script src="/node_modules/jquery/dist/jquery.min.js"></script>
        <script src="/node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="/node_modules/pace-progress/pace.min.js"></script>
        <script src="/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <script src="/node_modules/@coreui/coreui/dist/js/coreui.min.js"></script>
        <!-- Plugins and scripts required by this view-->
        <script src="/node_modules/chart.js/dist/Chart.min.js"></script>
        <script src="/node_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js"></script>
        <script src="/js/main.js"></script>
        @yield('javascript')
    </body>
</html>
