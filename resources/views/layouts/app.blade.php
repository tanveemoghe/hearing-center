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
        <!--<link href="/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">-->
        <!-- Font Awesome -->
        <!--<link href="/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

        <!-- Custom Theme Style -->

        <!-- Bootstrap Colorpicker -->
        <link href="/vendors/mjolnic-bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.1/css/bootstrap-colorpicker.min.css" rel="stylesheet">

        
        <!-- Datatables -->
        <!--<link href="/vendors/datatable/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="/vendors/datatable/buttons.bootstrap.min.css" rel="stylesheet">

        <link href="/vendors/datatable/responsive.bootstrap.min.css" rel="stylesheet">

        <link href="/vendors/datatable/rowReorder.dataTables.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oxygen|Ubuntu" rel="stylesheet">-->
<!--        <link href="/css/custom.css" rel="stylesheet">
        <link href="/css/custom.min.css" rel="stylesheet">-->
        <link href="/node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
        <link href="/node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
        <link href="/node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="/node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
        <!-- Main styles for this application-->
        <link href="/css/style.css" rel="stylesheet">
        <link href="/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
        @yield('css')
    <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show"><script id="__bs_script__">//<![CDATA[
        document.write("<script async src='/browser-sync/browser-sync-client.js?v=2.24.4'><\/script>".replace("HOST", location.hostname));
//]]></script>

        <header class="app-header navbar">
            <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img class="navbar-brand-full" src="/images/mensio-logo.png" width="130" height="55" alt="Mensio Technology">
                <img class="navbar-brand-minimized" src="/img/brand/sygnet.svg" width="30" height="30" alt="CoreUI Logo">
            </a>
            <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
                <i class="navbar-toggler-icon"></i>
            </button>
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        
                            <!--<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <img src="images/img.jpg" alt="">Balaji L <span class=" fa fa-angle-down"></span> 
                            </a>-->
                            <a href="#" class="dropdown-item" data-toggle="dropdown" role="button" aria-expanded="false">
                                
                            </a>
                    </li>
                </ul>
        </header>
        <div class="app-body">
            <div class="sidebar">
                <nav class="sidebar-nav">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/home">
                                <i class="nav-icon icon-speedometer"></i> Dashboard
                                <span class="badge badge-primary">NEW</span>
                            </a>
                        </li>
                        <!--<li class="nav-title">CRM</li>
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#">
                                <i class="nav-icon icon-people"></i> Clients </a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item">
                                    <a class="nav-link" href="/customer/create">
                                        <i class="nav-icon icon-user-following"></i> Add Customers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/customer">
                                        <i class="nav-icon icon-people"></i> View Customers</a>
                                </li>
                            </ul>
                        </li>
                        <li class="divider"></li>-->
                        <li class="nav-title">Sales</li>
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#">
                                <i class="nav-icon icon-docs"></i> Invoice</a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item">
                                    <a class="nav-link" href="/invoice/create">
                                        <i class="nav-icon icon-docs"></i> Add Invoice
                                    </a>
                                    <a class="nav-link" href="/invoice">
                                        <i class="nav-icon icon-docs"></i> View Invoice
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                        <li class="nav-title">Inventory</li>
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#">
                                <i class="nav-icon icon-layers"></i> Products</a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item">
                                    <a class="nav-link" href="/product/create">
                                        <i class="nav-icon icon-layers"></i> Add Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/product">
                                        <i class="nav-icon icon-layers"></i> View Products</a>
                                </li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                        <li class="divider"></li>
                        <li class="nav-title">Clinics</li>
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#">
                                <i class="nav-icon icon-layers"></i> Location</a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item">
                                    <a class="nav-link" href="/clinic/create">
                                        <i class="nav-icon icon-layers"></i> Add Clinic</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/clinic">
                                        <i class="nav-icon icon-layers"></i> View Clinics</a>
                                </li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                        
                        <!--<li class="nav-title">Reports</li>
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#">
                                <i class="nav-icon icon-printer"></i> Reports</a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item">
                                    <a class="nav-link" href="/sales/daily" target="_top">
                                        <i class="nav-icon icon-printer"></i> Daily Sales
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/sales/monthly" target="_top">
                                        <i class="nav-icon icon-printer"></i> Monthly Sales
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/sales" target="_top">
                                        <i class="nav-icon icon-printer"></i> Sales Report
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/sales/payment" target="_top">
                                        <i class="nav-icon icon-printer"></i> Payment Report
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                        <li class="nav-title">Extras</li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="nav-icon icon-pie-chart"></i> Charts</a>
                        </li>-->
                    </ul>
                </nav>
                <button class="sidebar-minimizer brand-minimizer" type="button"></button>
            </div>
            <main class="main">
                <!-- Breadcrumb-->
                <div class="container-fluid">
                @yield('content')
                </div>
            </main>
        </div>


        <!-- jQuery -->
        <!--<script src="/js/jquery-3.1.1.js"></script>-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!--<script src="/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script>
    var $j = jQuery.noConflict();
</script>-->

<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="/js/jquery-3.1.1.js"></script>
<script>
    var $ = jQuery.noConflict();
</script>-->

<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>-->
        <!-- Bootstrap -->
        <script src="/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.1/js/bootstrap-colorpicker.min.js"></script>
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
        <!--<script src="/node_modules/jquery/dist/jquery.min.js"></script>-->
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
