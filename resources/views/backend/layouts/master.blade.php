<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/linea.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/simple-line-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/weather-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/weather-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/fullcalendar.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/jqvmap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/pe-icon-7-filled.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/weather-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="container-fluid">
            <!-- Left Panel -->
            <aside id="left-panel" class="left-panel">
                <nav class="navbar navbar-expand-sm navbar-default">
                    <div id="main-menu" class="main-menu collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <router-link to="/admin"><i class="menu-icon fa fa-laptop"></i>Dashboard</router-link>
                            </li>
                            <li class="menu-title">UI elements</li>
                            <!-- /.menu-title -->
                            <li class="menu-item-has-children dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Catygory</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li>
                                        <router-link to="/admin/category"><i class="fa fa-puzzle-piece"></i>Category Add</router-link>
                                        <router-link to="/admin/subcategory"><i class="fa fa-puzzle-piece"></i>Sub Category Add</router-link>
                                    </li>
                                    <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Badges</a></li>
                                    <li><i class="fa fa-bars"></i><a href="ui-tabs.html">Tabs</a></li>

                                    <li><i class="fa fa-id-card-o"></i><a href="ui-cards.html">Cards</a></li>
                                    <li><i class="fa fa-exclamation-triangle"></i><a href="ui-alerts.html">Alerts</a></li>
                                    <li><i class="fa fa-spinner"></i><a href="ui-progressbar.html">Progress Bars</a></li>
                                    <li><i class="fa fa-fire"></i><a href="ui-modals.html">Modals</a></li>
                                    <li><i class="fa fa-book"></i><a href="ui-switches.html">Switches</a></li>
                                    <li><i class="fa fa-th"></i><a href="ui-grids.html">Grids</a></li>
                                    <li><i class="fa fa-file-word-o"></i><a href="ui-typgraphy.html">Typography</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li><i class="fa fa-table"></i><a href="tables-basic.html">Basic Table</a></li>
                                    <li><i class="fa fa-table"></i><a href="tables-data.html">Data Table</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Basic Form</a></li>
                                    <li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Advanced Form</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">Icons</li>
                            <!-- /.menu-title -->

                            <li class="menu-item-has-children dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font Awesome</a></li>
                                    <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
                            </li>
                            <li class="menu-item-has-children dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li><i class="menu-icon fa fa-line-chart"></i><a href="charts-chartjs.html">Chart JS</a></li>
                                    <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-flot.html">Flot Chart</a></li>
                                    <li><i class="menu-icon fa fa-pie-chart"></i><a href="charts-peity.html">Peity Chart</a></li>
                                </ul>
                            </li>

                            <li class="menu-item-has-children dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-map-marker"></i>Maps</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li><i class="menu-icon fa fa-map-o"></i><a href="maps-gmap.html">Google Maps</a></li>
                                    <li><i class="menu-icon fa fa-street-view"></i><a href="maps-vector.html">Vector Maps</a></li>
                                </ul>
                            </li>
                            <li class="menu-title">Extras</li>
                            <!-- /.menu-title -->
                            <li class="menu-item-has-children dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
                                    <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                                    <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </aside>
            <!-- /#left-panel -->
            <!-- Left Panel -->

            <!-- Right Panel -->
            <div id="right-panel" class="right-panel">
                <!-- Header-->
                <header id="header" class="header">
                    <div class="top-left">
                        <div class="navbar-header">

                            <a class="navbar-brand" href=""><img src="{{asset('backend/images/logo.png')}}" alt="Logo" /></a>
                            <a class="navbar-brand hidden" href="./"><img src="{{asset('backend/images/logo2.png')}}" alt="Logo')}}" alt="Logo" /></a>
                            <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                        </div>
                    </div>
                    <div class="top-right">
                        <div class="header-menu">
                            <div class="header-left">
                                <button class="search-trigger"><i class="fa fa-search"></i></button>
                                <div class="form-inline">
                                    <form class="search-form">
                                        <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search" />
                                        <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                                    </form>
                                </div>

                                <div class="dropdown for-notification">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-bell"></i>
                                        <span class="count bg-danger">3</span>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="notification">
                                        <p class="red">You have 3 Notification</p>
                                        <a class="dropdown-item media" href="#">
                                            <i class="fa fa-check"></i>
                                            <p>Server #1 overloaded.</p>
                                        </a>
                                        <a class="dropdown-item media" href="#">
                                            <i class="fa fa-info"></i>
                                            <p>Server #2 overloaded.</p>
                                        </a>
                                        <a class="dropdown-item media" href="#">
                                            <i class="fa fa-warning"></i>
                                            <p>Server #3 overloaded.</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="dropdown for-message">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-envelope"></i>
                                        <span class="count bg-primary">4</span>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="message">
                                        <p class="red">You have 4 Mails</p>
                                        <a class="dropdown-item media" href="#">
                                            <span class="photo media-left"><img alt="avatar" src="{{asset('backend/images/avatar/1.jpg')}}" /></span>
                                            <div class="message media-body">
                                                <span class="name float-left">Jonathan Smith</span>
                                                <span class="time float-right">Just now</span>
                                                <p>Hello, this is an example msg</p>
                                            </div>
                                        </a>
                                        <a class="dropdown-item media" href="#">
                                            <span class="photo media-left"><img alt="avatar" src="{{asset('backend/images/avatar/2.jpg')}}" /></span>
                                            <div class="message media-body">
                                                <span class="name float-left">Jack Sanders</span>
                                                <span class="time float-right">5 minutes ago</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                                            </div>
                                        </a>
                                        <a class="dropdown-item media" href="#">
                                            <span class="photo media-left"><img alt="avatar" src="{{asset('backend/images/avatar/3.jpg')}}" /></span>
                                            <div class="message media-body">
                                                <span class="name float-left">Cheryl Wheeler</span>
                                                <span class="time float-right">10 minutes ago</span>
                                                <p>Hello, this is an example msg</p>
                                            </div>
                                        </a>
                                        <a class="dropdown-item media" href="#">
                                            <span class="photo media-left"><img alt="avatar" src="{{asset('backend/images/avatar/4.jpg')}}" /></span>
                                            <div class="message media-body">
                                                <span class="name float-left">Rachel Santos</span>
                                                <span class="time float-right">15 minutes ago</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="user-area dropdown float-right">
                                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="user-avatar rounded-circle" src="{{asset('backend/images/admin.jpg')}}" alt="User Avatar" />
                                </a>

                                <div class="user-menu dropdown-menu">
                                    <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>

                                    <a class="nav-link" href="#"><i class="fa fa-bell-o"></i>Notifications <span class="count">13</span></a>

                                    <a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a>

                                    <a class="nav-link" href="#"><i class="fa fa-power-off"></i>Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- /header -->
                <!-- Header-->

                <div class="content pb-0">

                    <router-view></router-view>
                </div>
                <!-- .content -->

                <div class="clearfix"></div>

                <footer class="site-footer">
                    <div class="footer-inner bg-white">
                        <div class="row">
                            <div class="col-sm-6">Copyright &copy; 2018 <a href="https://demos.jeweltheme.com/excello">ExCello</a></div>
                            <div class="col-sm-6 text-right">Designed with Love by <a href="https://jeweltheme.com/">Jewel Theme</a></div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- /#right-panel -->
        </div>
    </div>
    <script src="{{ mix('/js/app.js') }}"></script>

    <script src="{{ asset('backend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/js/custom.min.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('backend/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('backend/js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('backend/js/main.js') }}"></script>
    <script src="{{ asset('backend/js/Chart.bundle.js') }}"></script>
    <script src="{{ asset('backend/js/chartist.min.js') }}"></script>
    <script src="{{ asset('backend/js/chartist-plugin-legend.js') }}"></script>
    {{-- <script src="{{ asset('backend/js/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('backend/js/fullcalendar-init.js') }}"></script> --}}
    {{-- <script src="{{ asset('backend/js/jquery.flot.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.flot.spline.js') }}"></script> --}}
    <script src="{{ asset('backend/js/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('backend/js/moment.js') }}"></script>
    <script src="{{ asset('backend/js/plugins.js') }}"></script>
    <script src="{{ asset('backend/js/popper.min.js') }}"></script>
    <script src="{{ asset('backend/js/weather-init.js') }}"></script>

    <script>
        jQuery(document).ready(function($) {
            "use strict";

                // Pie chart flotPie1
                var piedata = [
                { label: "Desktop visits", data: [[1,32]], color: '#5c6bc0'},
                { label: "Tab visits", data: [[1,33]], color: '#ef5350'},
                { label: "Mobile visits", data: [[1,35]], color: '#66bb6a'}
                ];

                $.plot('#flotPie1', piedata, {
                    series: {
                        pie: {
                            show: true,
                            radius: 1,
                            innerRadius: 0.65,
                            label: {
                                show: true,
                                radius: 2/3,
                                threshold: 1
                            },
                            stroke: {
                                width: 0
                            }
                        }
                    },
                    grid: {
                        hoverable: true,
                        clickable: true
                    }
                });


                //cellPaiChart

                var cellPaiChart = [
                { label: "Direct Sell", data: [[1,65]], color: '#5b83de'},
                { label: "Channel Sell", data: [[1,35]], color: '#00bfa5'}
                ];
                $.plot('#cellPaiChart', cellPaiChart, {
                    series: {
                        pie: {
                            show: true,
                            stroke: {
                                width: 0
                            }
                        }
                    },
                    legend: {
                        show: false
                    },grid: {
                        hoverable: true,
                        clickable: true
                    }

                });


                // Line Chart  #flotLine5
                var newCust = [[0, 3], [1, 5], [2,4], [3, 7], [4, 9], [5, 3], [6, 6], [7, 4], [8, 10]];

                var plot = $.plot($('#flotLine5'),[{
                    data: newCust,
                    label: 'New Data Flow',
                    color: '#fff'
                }],
                {
                    series: {
                        lines: {
                            show: true,
                            lineColor: '#fff',
                            lineWidth: 2
                        },
                        points: {
                            show: true,
                            fill: true,
                            fillColor: "#ffffff",
                            symbol: "circle",
                            radius: 3
                        },
                        shadowSize: 0
                    },
                    points: {
                        show: true,
                    },
                    legend: {
                        show: false
                    },
                    grid: {
                        show: false
                    }
                });


                // Traffic Chart using chartist
                if ($('#traffic-chart').length) {
                    var chart = new Chartist.Line('#traffic-chart', {
                        labels: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun', 'Mon', 'Tue'],
                        series: [
                        [20000, 18000, 35000, 18000, 25000, 26000, 22000, 20000, 18000, 35000],
                        [15000, 23000, 15000, 30000, 20000, 31000, 15000, 15000, 23000, 15000],
                        [25000, 15000, 38000, 25500, 15000, 22500, 30000, 25000, 15000, 38000]
                        ]
                    }, {
                        low: 0,
                        showArea: true,
                        showLine: false,
                        showPoint: false,
                        fullWidth: true,
                        axisX: {
                            showGrid: false
                        }
                    });

                    chart.on('draw', function(data) {
                        if(data.type === 'line' || data.type === 'area') {
                            data.element.animate({
                                d: {
                                    begin: 2000 * data.index,
                                    dur: 2000,
                                    from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                                    to: data.path.clone().stringify(),
                                    easing: Chartist.Svg.Easing.easeOutQuint
                                }
                            });
                        }
                    });
                }
                // Traffic Chart using chartist End


                //Traffic chart chart-js
                if ($('#TrafficChart').length) {
                    var ctx = document.getElementById( "TrafficChart" );
                    ctx.height = 150;
                    var myChart = new Chart( ctx, {
                        type: 'line',
                        data: {
                            labels: [ "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul" ],
                            datasets: [
                            {
                                label: "Visit",
                                borderColor: "rgba(4, 73, 203,.09)",
                                borderWidth: "1",
                                backgroundColor: "rgba(4, 73, 203,.5)",
                                data: [ 0, 2900, 5000, 3300, 6000, 3250, 0 ]
                            },
                            {
                                label: "Bounce",
                                borderColor: "rgba(245, 23, 66, 0.9)",
                                borderWidth: "1",
                                backgroundColor: "rgba(245, 23, 66,.5)",
                                pointHighlightStroke: "rgba(245, 23, 66,.5)",
                                data: [ 0, 4200, 4500, 1600, 4200, 1500, 4000 ]
                            },
                            {
                                label: "Targeted",
                                borderColor: "rgba(40, 169, 46, 0.9)",
                                borderWidth: "1",
                                backgroundColor: "rgba(40, 169, 46, .5)",
                                pointHighlightStroke: "rgba(40, 169, 46,.5)",
                                data: [1000, 5200, 3600, 2600, 4200, 5300, 0 ]
                            }
                            ]
                        },
                        options: {
                            responsive: true,
                            tooltips: {
                                mode: 'index',
                                intersect: false
                            },
                            hover: {
                                mode: 'nearest',
                                intersect: true
                            }

                        }
                    } );
                }
                //Traffic chart chart-js  End

                // Bar Chart #flotBarChart
                $.plot("#flotBarChart", [{
                    data: [[0, 18], [2, 8], [4, 5], [6, 13],[8,5], [10,7],[12,4], [14,6],[16,15], [18, 9],[20,17], [22,7],[24,4], [26,9],[28,11]],
                    bars: {
                        show: true,
                        lineWidth: 0,
                        fillColor: '#ffffff8a'
                    }
                }], {
                    grid: {
                        show: false
                    }
                });

            });  // End of Document Ready
        </script>
</body>
</html>
