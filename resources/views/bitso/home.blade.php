@spaceless
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ route('home') }}/assets/images/favicon.png">
    <title>Limonazzo KTBO test</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ route('home') }}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ route('home') }}/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{ route('home') }}/css/colors/red.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fix-header card-no-border logo-center">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
    </svg>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-header">
                {{--<a class="navbar-brand" href="index.html">--}}
                    {{--<!-- Logo icon -->--}}
                    {{--<b>--}}
                        {{--<!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->--}}
                        {{--<!-- Dark Logo icon -->--}}
                        {{--<img src="{{ route('home') }}/assets/images/logo-icon.png" alt="homepage" class="dark-logo"/>--}}
                        {{--<!-- Light Logo icon -->--}}
                        {{--<img src="{{ route('home') }}/assets/images/logo-light-icon.png" alt="homepage"--}}
                             {{--class="light-logo"/>--}}
                    {{--</b>--}}
                    {{--<!--End Logo icon -->--}}
                    {{--<!-- Logo text -->--}}
                    {{--<span>--}}
                         {{--<!-- dark Logo text -->--}}
                         {{--<img src="{{ route('home') }}/assets/images/logo-text.png" alt="homepage" class="dark-logo"/>--}}
                        {{--<!-- Light Logo text -->--}}
                         {{--<img src="{{ route('home') }}/assets/images/logo-light-text.png" class="light-logo"--}}
                              {{--alt="homepage"/></span> </a>--}}
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav mr-auto mt-md-0">
                    <!-- This is  -->
                    <li class="nav-item"><a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark"
                                            href="javascript:void(0)"><i class="mdi mdi-menu"></i></a></li>

                </ul>

            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->

        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">

                <div class="col-md-5 col-8 align-self-center">
                    <h3 class="text-themecolor m-b-0 m-t-0">BTC / MXN</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Bitso</a></li>
                        <li class="breadcrumb-item active"> BTC / MXN </li>
                    </ol>
                </div>


            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- column -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <div class="flot-chart">
                                <div class="flot-chart-content" id="flot-line-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © 2019 <a href="https://limonazzo.com">limonazzo.com</a>
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{ route('home') }}/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ route('home') }}/assets/plugins/popper/popper.min.js"></script>
<script src="{{ route('home') }}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ route('home') }}/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="{{ route('home') }}/js/waves.js"></script>
<!--Menu sidebar -->
<script src="{{ route('home') }}/js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="{{ route('home') }}/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="{{ route('home') }}/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!--Custom JavaScript -->
<script src="{{ route('home') }}/js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!-- Flot Charts JavaScript -->
<script src="{{ route('home') }}/assets/plugins/flot/excanvas.js"></script>
<script src="{{ route('home') }}/assets/plugins/flot/jquery.flot.js"></script>
{{--<script src="{{ route('home') }}/assets/plugins/flot/jquery.flot.pie.js"></script>--}}
<script src="{{ route('home') }}/assets/plugins/flot/jquery.flot.time.js"></script>
{{--<script src="{{ route('home') }}/assets/plugins/flot/jquery.flot.stack.js"></script>--}}
{{--<script src="{{ route('home') }}/assets/plugins/flot/jquery.flot.crosshair.js"></script>--}}
<script src="{{ route('home') }}/assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
{{--<script src="{{ route('home') }}/js/flot-data.js"></script>--}}

<script>
    //Flot Line Chart
    $(document).ready(function () {
        console.log("document ready");
        var offset = 0;
        plot();

        function plot() {

            var options = {
                series: {
                    lines: {
                        show: true
                    },
                    points: {
                        show: true
                    }
                },
                grid: {
                    hoverable: true //IMPORTANT! this is needed for tooltip to work
                },
                yaxis: {
                    min: {{ $scaledown }},
                    max: {{ $scaleup }}
                },
                colors: ["#009efb", "#26c6da"],
                grid: {
                    color: "#AFAFAF",
                    hoverable: true,
                    borderWidth: 0,
                    backgroundColor: '#FFF'
                },
                tooltip: true,
                tooltipOpts: {
                    cssClass: "sdf",
                    content: "%s | %x  $: %y",
                    shifts: {
                        // x: -60,
                        // y: 25
                    }
                },
                xaxis: {
                    mode: "time",
                    timeformat:"%H:%M"
                },
            };

            var plotObj = $.plot($("#flot-line-chart"), [
                {
                    "label": "BTC",
                    "data": {{ json_encode($data) }}
                }
            ], options);




        }
    });
</script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="{{ route('home') }}/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
@endspaceless

