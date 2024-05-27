<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{ asset('backend/css/style.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('backend/css/style-responsive.css') }}" rel="stylesheet" />
    <!-- font CSS -->
    <link
        href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{ asset('backend/css/font.css') }}" type="text/css" />
    <link href="{{ asset('backend/css/font-awesome.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/css/morris.css') }}" type="text/css" />
    <!-- calendar -->
    <link rel="stylesheet" href="{{ asset('backend/css/monthly.css') }}">
    <link rel="stylesheet" href="{{ 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css' }}">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="{{ asset('backend/js/jquery2.0.3.min.js') }}"></script>
    <script src="{{ asset('backend/js/raphael-min.js') }}"></script>
    <script src="{{ asset('backend/js/morris.js') }}"></script>
    {{-- //====================================== --}}
    <link rel="stylesheet" href="{{ asset('backend/css/adminDashboard.css') }}">
    <title>Admin Dashboard</title>
    <link rel="icon" href="{{ asset('frontend/images/Logo Title.png') }}">
</head>

<body>
    <section id="container">

        <livewire:adminHeader />

        <livewire:adminSidebar />

        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <!-- //market-->
                <div class="market-updates">
                    <div class="col-md-3 market-update-gd">
                        <div class="market-update-block clr-block-2">
                            <div class="col-md-4 market-update-right">
                                <i class="fa fa-eye"> </i>
                            </div>
                            <div class="col-md-8 market-update-left">
                                <h4>Email</h4>
                                <h3>{{$emailCount}}</h3>
                                <p>Other hand, we denounce</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="col-md-3 market-update-gd">
                        <div class="market-update-block clr-block-1">
                            <div class="col-md-4 market-update-right">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="col-md-8 market-update-left">
                                <h4>Users</h4>
                                <h3>{{$userCount}}</h3>
                                <p>Other hand, we denounce</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="col-md-3 market-update-gd">
                        <div class="market-update-block clr-block-3">
                            <div class="col-md-4 market-update-right">
                                <i class="fa fa-usd"></i>
                            </div>
                            <div class="col-md-8 market-update-left">
                                <h4>Sales</h4>
                                <h3>{{$totalMoney}}</h3>
                                <p>Other hand, we denounce</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="col-md-3 market-update-gd">
                        <div class="market-update-block clr-block-4">
                            <div class="col-md-4 market-update-right">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-8 market-update-left">
                                <h4>Orders</h4>
                                <h3>{{$orderCount}}</h3>
                                <p>Other hand, we denounce</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <!-- //market-->
                <div class="row">
                    <div class="panel-body">
                        <div class="col-md-12 w3ls-graph">
                            <!--agileinfo-grap-->
                            <div class="agileinfo-grap">
                                <div class="agileits-box">
                                    <header class="agileits-box-header clearfix">
                                        <h3>Daily sales performance chart</h3>
                                        <div class="toolbar">


                                        </div>
                                    </header>
                                    <div class="agileits-box-body clearfix">
                                        <div id="hero-area"></div>
                                    </div>
                                </div>
                            </div>
                            <!--//agileinfo-grap-->

                        </div>
                    </div>
                </div>
                {{-- <div class="agil-info-calendar">
                    <!-- calendar -->
                    <div class="col-md-6 agile-calendar">
                        <div class="calendar-widget">
                            <div class="panel-heading ui-sortable-handle">
                                <span class="panel-icon">
                                    <i class="fa fa-calendar-o"></i>
                                </span>
                                <span class="panel-title"> Calendar Widget</span>
                            </div>
                            <!-- grids -->
                            <div class="agile-calendar-grid">
                                <div class="page">

                                    <div class="w3l-calendar-left">
                                        <div class="calendar-heading">

                                        </div>
                                        <div class="monthly" id="mycalendar"></div>
                                    </div>

                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //calendar -->
                    <div class="col-md-6 w3agile-notifications">
                        <div class="notifications">
                            <!--notification start-->

                            <header class="panel-heading">
                                Notification
                            </header>
                            <div class="notify-w3ls">
                                <div class="alert alert-info clearfix">
                                    <span class="alert-icon"><i class="fa fa-envelope-o"></i></span>
                                    <div class="notification-info">
                                        <ul class="clearfix notification-meta">
                                            <li class="pull-left notification-sender"><span><a href="#">Jonathan
                                                        Smith</a></span> send you a mail </li>
                                            <li class="pull-right notification-time">1 min ago</li>
                                        </ul>
                                        <p>
                                            Urgent meeting for next proposal
                                        </p>
                                    </div>
                                </div>
                                <div class="alert alert-danger">
                                    <span class="alert-icon"><i class="fa fa-facebook"></i></span>
                                    <div class="notification-info">
                                        <ul class="clearfix notification-meta">
                                            <li class="pull-left notification-sender"><span><a href="#">Jonathan
                                                        Smith</a></span> mentioned you in a post </li>
                                            <li class="pull-right notification-time">7 Hours Ago</li>
                                        </ul>
                                        <p>
                                            Very cool photo jack
                                        </p>
                                    </div>
                                </div>
                                <div class="alert alert-success ">
                                    <span class="alert-icon"><i class="fa fa-comments-o"></i></span>
                                    <div class="notification-info">
                                        <ul class="clearfix notification-meta">
                                            <li class="pull-left notification-sender">You have 5 message unread</li>
                                            <li class="pull-right notification-time">1 min ago</li>
                                        </ul>
                                        <p>
                                            <a href="#">Anjelina Mewlo, Jack Flip</a> and <a href="#">3
                                                others</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="alert alert-warning ">
                                    <span class="alert-icon"><i class="fa fa-bell-o"></i></span>
                                    <div class="notification-info">
                                        <ul class="clearfix notification-meta">
                                            <li class="pull-left notification-sender">Domain Renew Deadline 7 days
                                                ahead</li>
                                            <li class="pull-right notification-time">5 Days Ago</li>
                                        </ul>
                                        <p>
                                            Next 5 July Thursday is the last day
                                        </p>
                                    </div>
                                </div>
                                <div class="alert alert-info clearfix">
                                    <span class="alert-icon"><i class="fa fa-envelope-o"></i></span>
                                    <div class="notification-info">
                                        <ul class="clearfix notification-meta">
                                            <li class="pull-left notification-sender"><span><a href="#">Jonathan
                                                        Smith</a></span> send you a mail </li>
                                            <li class="pull-right notification-time">1 min ago</li>
                                        </ul>
                                        <p>
                                            Urgent meeting for next proposal
                                        </p>
                                    </div>
                                </div>

                            </div>

                            <!--notification end-->
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <!-- tasks -->
                <div class="agile-last-grids">
                    <div class="col-md-4 agile-last-left">
                        <div class="agile-last-grid">
                            <div class="area-grids-heading">
                                <h3>Monthly</h3>
                            </div>
                            <div id="graph7"></div>
                            <script>
                                // This crosses a DST boundary in the UK.
                                Morris.Area({
                                    element: 'graph7',
                                    data: [{
                                            x: '2013-03-30 22:00:00',
                                            y: 3,
                                            z: 3
                                        },
                                        {
                                            x: '2013-03-31 00:00:00',
                                            y: 2,
                                            z: 0
                                        },
                                        {
                                            x: '2013-03-31 02:00:00',
                                            y: 0,
                                            z: 2
                                        },
                                        {
                                            x: '2013-03-31 04:00:00',
                                            y: 4,
                                            z: 4
                                        }
                                    ],
                                    xkey: 'x',
                                    ykeys: ['y', 'z'],
                                    labels: ['Y', 'Z']
                                });
                            </script>

                        </div>
                    </div>
                    <div class="col-md-4 agile-last-left agile-last-middle">
                        <div class="agile-last-grid">
                            <div class="area-grids-heading">
                                <h3>Daily</h3>
                            </div>
                            <div id="graph8"></div>
                            <script>
                                /* data stolen from http://howmanyleft.co.uk/vehicle/jaguar_'e'_type */
                                var day_data = [{
                                        "period": "2016-10-01",
                                        "licensed": 3407,
                                        "sorned": 660
                                    },
                                    {
                                        "period": "2016-09-30",
                                        "licensed": 3351,
                                        "sorned": 629
                                    },
                                    {
                                        "period": "2016-09-29",
                                        "licensed": 3269,
                                        "sorned": 618
                                    },
                                    {
                                        "period": "2016-09-20",
                                        "licensed": 3246,
                                        "sorned": 661
                                    },
                                    {
                                        "period": "2016-09-19",
                                        "licensed": 3257,
                                        "sorned": 667
                                    },
                                    {
                                        "period": "2016-09-18",
                                        "licensed": 3248,
                                        "sorned": 627
                                    },
                                    {
                                        "period": "2016-09-17",
                                        "licensed": 3171,
                                        "sorned": 660
                                    },
                                    {
                                        "period": "2016-09-16",
                                        "licensed": 3171,
                                        "sorned": 676
                                    },
                                    {
                                        "period": "2016-09-15",
                                        "licensed": 3201,
                                        "sorned": 656
                                    },
                                    {
                                        "period": "2016-09-10",
                                        "licensed": 3215,
                                        "sorned": 622
                                    }
                                ];
                                Morris.Bar({
                                    element: 'graph8',
                                    data: day_data,
                                    xkey: 'period',
                                    ykeys: ['licensed', 'sorned'],
                                    labels: ['Licensed', 'SORN'],
                                    xLabelAngle: 60
                                });
                            </script>
                        </div>
                    </div>
                    <div class="col-md-4 agile-last-left agile-last-right">
                        <div class="agile-last-grid">
                            <div class="area-grids-heading">
                                <h3>Yearly</h3>
                            </div>
                            <div id="graph9"></div>
                            <script>
                                var day_data = [{
                                        "elapsed": "I",
                                        "value": 34
                                    },
                                    {
                                        "elapsed": "II",
                                        "value": 24
                                    },
                                    {
                                        "elapsed": "III",
                                        "value": 3
                                    },
                                    {
                                        "elapsed": "IV",
                                        "value": 12
                                    },
                                    {
                                        "elapsed": "V",
                                        "value": 13
                                    },
                                    {
                                        "elapsed": "VI",
                                        "value": 22
                                    },
                                    {
                                        "elapsed": "VII",
                                        "value": 5
                                    },
                                    {
                                        "elapsed": "VIII",
                                        "value": 26
                                    },
                                    {
                                        "elapsed": "IX",
                                        "value": 12
                                    },
                                    {
                                        "elapsed": "X",
                                        "value": 19
                                    }
                                ];
                                Morris.Line({
                                    element: 'graph9',
                                    data: day_data,
                                    xkey: 'elapsed',
                                    ykeys: ['value'],
                                    labels: ['value'],
                                    parseTime: false
                                });
                            </script>

                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <!-- //tasks -->
                <div class="agileits-w3layouts-stats">
                    <div class="col-md-4 stats-info widget">
                        <div class="stats-info-agileits">
                            <div class="stats-title">
                                <h4 class="title">Browser Stats</h4>
                            </div>
                            <div class="stats-body">
                                <ul class="list-unstyled">
                                    <li>GoogleChrome <span class="pull-right">85%</span>
                                        <div class="progress progress-striped active progress-right">
                                            <div class="bar green" style="width:85%;"></div>
                                        </div>
                                    </li>
                                    <li>Firefox <span class="pull-right">35%</span>
                                        <div class="progress progress-striped active progress-right">
                                            <div class="bar yellow" style="width:35%;"></div>
                                        </div>
                                    </li>
                                    <li>Internet Explorer <span class="pull-right">78%</span>
                                        <div class="progress progress-striped active progress-right">
                                            <div class="bar red" style="width:78%;"></div>
                                        </div>
                                    </li>
                                    <li>Safari <span class="pull-right">50%</span>
                                        <div class="progress progress-striped active progress-right">
                                            <div class="bar blue" style="width:50%;"></div>
                                        </div>
                                    </li>
                                    <li>Opera <span class="pull-right">80%</span>
                                        <div class="progress progress-striped active progress-right">
                                            <div class="bar light-blue" style="width:80%;"></div>
                                        </div>
                                    </li>
                                    <li class="last">Others <span class="pull-right">60%</span>
                                        <div class="progress progress-striped active progress-right">
                                            <div class="bar orange" style="width:60%;"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 stats-info stats-last widget-shadow">
                        <div class="stats-last-agile">
                            <table class="table stats-table ">
                                <thead>
                                    <tr>
                                        <th>S.NO</th>
                                        <th>PRODUCT</th>
                                        <th>STATUS</th>
                                        <th>PROGRESS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Lorem ipsum</td>
                                        <td><span class="label label-success">In progress</span></td>
                                        <td>
                                            <h5>85% <i class="fa fa-level-up"></i></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Aliquam</td>
                                        <td><span class="label label-warning">New</span></td>
                                        <td>
                                            <h5>35% <i class="fa fa-level-up"></i></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Lorem ipsum</td>
                                        <td><span class="label label-danger">Overdue</span></td>
                                        <td>
                                            <h5 class="down">40% <i class="fa fa-level-down"></i></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Aliquam</td>
                                        <td><span class="label label-info">Out of stock</span></td>
                                        <td>
                                            <h5>100% <i class="fa fa-level-up"></i></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Lorem ipsum</td>
                                        <td><span class="label label-success">In progress</span></td>
                                        <td>
                                            <h5 class="down">10% <i class="fa fa-level-down"></i></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Aliquam</td>
                                        <td><span class="label label-warning">New</span></td>
                                        <td>
                                            <h5>38% <i class="fa fa-level-up"></i></h5>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> --}}
                    <div class="clearfix"> </div>
                </div>
            </section>
        </section>
        <!--main content end-->
    </section>
    <script src="{{ asset('backend/js/bootstrap.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.dcjqaccordion.2.7.js') }}"></script>
    <script src="{{ asset('backend/js/scripts.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.nicescroll.js') }}"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="{{ asset('backend/js/flot-chart/excanvas.min.js') }}">
    </script><![endif]-->
    <script src="{{ asset('backend/js/jquery.scrollTo.js') }}"></script>
    <!-- morris JavaScript -->
    <script>
        $(document).ready(function() {
            // Dữ liệu từ biến chartData sẽ được truyền từ phía server
            var chartData = {!! $chartData !!};
    
            // Biểu đồ
            var dataForGraph = [];
            chartData.forEach(function(item) {
                var row = {
                    date: item.date
                };
                // Thêm dữ liệu của các category vào mảng row
                item.categories.forEach(function(quantity) {
                    row['category_' + (item.categories.indexOf(quantity) + 1)] = quantity;
                });
                dataForGraph.push(row);
            });
    
            //CHARTS
            graphArea2 = Morris.Area({
                element: 'hero-area',
                padding: 10,
                behaveLikeLine: false,
                gridEnabled: false,
                gridLineColor: '#dddddd',
                axes: true,
                resize: true,
                smooth: true,
                pointSize: 2,
                lineWidth: 2,
                fillOpacity: 0.85,
                data: dataForGraph,
                xkey: 'date',
                ykeys: ['category_1', 'category_2', 'category_3', 'category_4', 'category_5', 'category_6'], // Số lượng categories phụ thuộc vào số lượng categories thực tế bạn có
                labels: {!! json_encode($categories->toArray()) !!}, // Tên categories
                hideHover: 'auto',
                resize: true
            });
        });
    </script>
    {{-- <!-- calendar -->
    <script type="text/javascript" src="{{ asset('backend/js/monthly.js') }}"></script>
    <script type="text/javascript">
        $(window).load(function() {

            $('#mycalendar').monthly({
                mode: 'event',

            });

            $('#mycalendar2').monthly({
                mode: 'picker',
                target: '#mytarget',
                setWidth: '250px',
                startHidden: true,
                showTrigger: '#mytarget',
                stylePast: true,
                disablePast: true
            });

            switch (window.location.protocol) {
                case 'http:':
                case 'https:':
                    // running on a server, should be good.
                    break;
                case 'file:':
                    alert('Just a heads-up, events will not work when run locally.');
            }
        });
    </script>
    <!-- //calendar --> --}}
</body>

</html>
