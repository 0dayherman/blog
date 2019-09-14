<?php

    /**
    * This is Example For Admin Panel, i will update this file next time.
    */

 require_once __DIR__ . "/../../load.php";

 ?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Simple Blog</title>
    <link rel="shortcut icon" href="https://digitalent.kominfo.go.id/favicon.ico">

    <!-- App css -->
    <link href="<?php echo $root; ?>theme/admin/assets/css/app.min.css" rel="stylesheet">
    <link href="<?php echo $root; ?>theme/adminassets/css/easy-autocomplete.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

<body class="" data-keep-enlarged="true">

<!-- Begin page -->
<div class="wrapper">

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left-side-menu left-side-menu-light">

        <div class="slimscroll-menu" id="left-side-menu-container">

            <!-- LOGO -->
            <a href="<?php echo $root;?>" class="logo text-center">
                        <span class="logo-lg">
                            <img src="https://digitalent.kominfo.go.id/favicon.ico" alt="" height="16">
                        </span>
                <span class="logo-sm">
                            <img src="https://digitalent.kominfo.go.id/favicon.ico" alt="" height="16">
                        </span>
            </a>

            <!--- Sidemenu -->
            <ul class="metismenu side-nav side-nav-light">
                <li class="side-nav-item">
                    <a href="<?php echo $root;?>" class="side-nav-link">
                        <i class="w3-xlarge fa fa-home"></i>
                        <span> Dashboard </span>
                    </a>

                </li>
            </ul>


            <!-- End Sidebar -->

            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topbar-right-menu float-right mb-0">
                    <li class="dropdown notification-list topbar-dropdown">
                        <a class="nav-link" href="https://github.com/apaajalahx/blog"  target="_new"><span class="badge badge-danger" style="padding: 7px;font-size: 15px;">Blog Version 0.5</span></a>
                    </li>     

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                           aria-expanded="false">
                                    <span class="account-user-avatar">
                                        <img  src="https://taskly.rajodiya.com/storage/avatars/1_avatar1564480854.png"  alt="user-image" class="rounded-circle">
                                    </span>
                            <span>
                                        <span class="account-user-name">Alpesh Rajodiya</span>
                                        <span class="account-position">Owner</span>                                    </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                            <!-- item-->

                                                            <a href="https://taskly.rajodiya.com/workspace/1" class="dropdown-item notify-item">
                                                                        <span>Rajodiya Infotech</span>
                                                                                                                        <span class="badge badge-primary">Owner</span>
                                                                                                            </a>
 
                                                                                    <div class="dropdown-divider"></div>
                                                        <a href="#" class="dropdown-item notify-item" data-toggle="modal" data-target="#modelCreateWorkspace">
   

                            <!-- item-->
                            <a href="logout.php" class="dropdown-item notify-item">
                                <i class="mdi mdi-logout mr-1"></i>
                                <span>Logout</span>
                            </a>
                            <form id="logout-form" action="#" method="POST" style="display: none;">
                                
                            </form>

                        </div>
                    </li>

                </ul>
                <div id="modelCreateWorkspace" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modelCreateWorkspaceLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="modelCreateWorkspaceLabel">Erstellen Sie Ihren Arbeitsbereich</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <form class="pl-3 pr-3" method="post" action="https://taskly.rajodiya.com/workspace">
                                    <input type="hidden" name="_token" value="LxqyBq3GRM48S180EaBxy7i14TcaDz0GWRnNWD3t">                                    <div class="form-group">
                                        <label for="workspacename">Name</label>
                                        <input class="form-control" type="text" id="workspacename" name="name" required="" placeholder="Workspace-Namen">
                                    </div>

                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit">Arbeitsbereich &quot;Erstellen&quot;</button>
                                    </div>

                                </form>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div>
                <button class="button-menu-mobile open-left disable-btn">
                    <i class="w3-xlarge fa fa-bars"></i>
                </button>
                <div class="app-search">
                    
                        <div class="input-group">
                            <input type="text" id="top-search" class="form-control" placeholder="Search">
                            <span class="mdi mdi-magnify"></span>
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">Search</button>
                            </div>
                        </div>
                    
                </div>
            </div>
            <!-- end Topbar -->

            
    <!-- Start Content-->
    <div class="container-fluid">
            <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Dashboard</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

         <div class="row">
            <div class="col-12">
                <div class="card widget-inline">
                    <div class="card-body p-0">
                        <div class="row no-gutters">
                            <div class="col-sm-6 col-xl-3 animated">
                                <div class="card shadow-none m-0">
                                    <div class="card-body text-center">
                                        <i class="dripicons-briefcase text-muted" style="font-size: 24px;"></i>
                                        <h3><span>3</span></h3>
                                        <p class="text-muted font-15 mb-0">Articles Published</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-3 animated">
                                <div class="card shadow-none m-0 border-left">
                                    <div class="card-body text-center">
                                        <i class="dripicons-checklist text-muted" style="font-size: 24px;"></i>
                                        <h3><span>2</span></h3>
                                        <p class="text-muted font-15 mb-0">Insgesamt Aufgaben</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-3 animated">
                                <div class="card shadow-none m-0 border-left">
                                    <div class="card-body text-center">
                                        <i class="dripicons-user-group text-muted" style="font-size: 24px;"></i>
                                        <h3><span>1</span></h3>
                                        <p class="text-muted font-15 mb-0">Mitglieder</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-3 animated">
                                <div class="card shadow-none m-0 border-left">
                                    <div class="card-body text-center">
                                        <i class="dripicons-graph-line text-muted" style="font-size: 24px;"></i>
                                        <h3><span>1</span></h3>
                                        <p class="text-muted font-15 mb-0">Kunden</p>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- end row -->
                    </div>
                </div> <!-- end card-box-->
            </div> <!-- end col-->
        </div>
        <!-- end row-->

            <div class="row">
                <div class="col-12">
                    <div class="card animated">
                        <div class="card-body">

                            <h4 class="header-title mb-4">Aufgaben Im Überblick</h4>

                            <div class="mt-3 chartjs-chart" style="height: 320px;">
                                <canvas id="task-area-chart"></canvas>
                            </div>

                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->


        <div class="row">
            <div class="col-xl-4">
                <div class="card animated">
                    <div class="card-body">

                        <h4 class="header-title mb-4">Projekt-Status</h4>

                        <div class="my-4 chartjs-chart" style="height: 202px;">
                            <canvas id="project-status-chart"></canvas>
                        </div>

                        <div class="row text-center mt-2 py-2">

                            
                            <div class="col-4">
                                <i class="mdi mdi-trending-up text-success mt-3 h3"></i>
                                <h3 class="font-weight-normal">
                                    <span>100%</span>
                                </h3>
                                <p class="text-muted mb-0">Ongoing</p>
                            </div>

                            
                        </div>
                        <!-- end row-->

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->

            <div class="col-xl-8">
                <div class="card animated">
                    <div class="card-body">

                        <h4 class="header-title mb-3">Aufgaben</h4>

                        <p><b>0</b> Erledigung von Aufgaben aus 2</p>

                        <div class="table-responsive">
                            <table class="table table-centered table-hover mb-0 animated">
                                <tbody>
                                                                    <tr>
                                        <td>
                                            <h5 class="font-14 my-1"><a href="https://taskly.rajodiya.com/testicles-2/projects/15/task-board" class="text-body">Xxggg</a></h5>
                                            <span class="text-muted font-13">Aufgrund der in 18 days ago</span>
                                        </td>
                                        <td>
                                            <span class="text-muted font-13">Status</span> <br/>
                                                                                            <span class="badge badge-danger-lighten">Review</span>
                                                                                    </td>
                                        <td>
                                            <span class="text-muted font-13">Projekt</span>
                                            <h5 class="font-14 mt-1 font-weight-normal">Project 1</h5>
                                        </td>
                                                                                <td>
                                            <span class="text-muted font-13">Zugeordnet</span>
                                            <h5 class="font-14 mt-1 font-weight-normal">Alpesh Rajodiya</h5>
                                        </td>
                                        
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <h5 class="font-14 my-1"><a href="https://taskly.rajodiya.com/testicles-2/projects/15/task-board" class="text-body">Test 1</a></h5>
                                            <span class="text-muted font-13">Aufgrund der in 17 days</span>
                                        </td>
                                        <td>
                                            <span class="text-muted font-13">Status</span> <br/>
                                                                                            <span class="badge badge-primary-lighten">Todo</span>
                                                                                    </td>
                                        <td>
                                            <span class="text-muted font-13">Projekt</span>
                                            <h5 class="font-14 mt-1 font-weight-normal">Project 1</h5>
                                        </td>
                                                                                <td>
                                            <span class="text-muted font-13">Zugeordnet</span>
                                            <h5 class="font-14 mt-1 font-weight-normal">Alpesh Rajodiya</h5>
                                        </td>
                                        
                                    </tr>
                                                                </tbody>
                            </table>
                        </div> <!-- end table-responsive-->

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->


        <div class="row">
            <div class="col-xl-5">
                <div class="card animated">
                    <div class="card-body">

                        <h4 class="header-title mb-3">Todo</h4>

                        <div class="table-responsive">
                            <table class="table table-centered table-hover mb-0 animated ">
                                <tbody>
                                                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="media-body">
                                                <h5 class="mt-0 mb-1">Zzzz</h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted font-13">Status</span> <br/>
                                                                                    <span class="badge badge-danger-lighten">Ausstehend</span>
                                                                            </td>
                                </tr>
                                                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="media-body">
                                                <h5 class="mt-0 mb-1">Ghh</h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted font-13">Status</span> <br/>
                                                                                    <span class="badge badge-danger-lighten">Ausstehend</span>
                                                                            </td>
                                </tr>
                                                                </tbody>
                            </table>
                        </div> <!-- end table-responsive-->

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->

            <div class="col-xl-7">
                <div class="card animated">
                    <div class="card-body">

                        <h4 class="header-title mb-3">Calender</h4>

                        <div class="row">
                            <div class="col-md-7 animated">
                                <div data-provide="datepicker-inline" data-date-today-highlight="true" class="calendar-widget"></div>
                            </div> <!-- end col-->
                            <div class="col-md-5">
                                <ul class="list-unstyled animated">
                                                                        <li class="mb-4">
                                        <h5>Keine Termine für heute</h5>
                                    </li>
                                                                    </ul>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->

        </div>
        <!-- end row-->

        </div>
    <!-- container -->


        </div> <!-- content -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        Copyright &copy; Blog 2019
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-right footer-links d-none d-md-block">
                            <a href="#">About</a>
                            <a href="#">Donation</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->

<div id="commanModel" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modelCommanModelLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content ">
            <div class="modal-header">
                <h4 class="modal-title" id="modelCommanModelLabel"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body"></div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<!-- App js -->

<script src="<?php echo $root; ?>theme/admin/assets/js/app.min.js"></script>
<script src="<?php echo $root; ?>theme/admin/assets/js/custom.min.js"></script>
<script src="<?php echo $root; ?>theme/admin/assets/js/scrollreveal.min.js"></script>

<script src="<?php echo $root; ?>theme/admin/assets/js/jquery.easy-autocomplete.min.js"></script>

<script>
    var options = {
        url: function(phrase) {
            return "https://taskly.rajodiya.com/testicles-2/searchJson/" + phrase ;
        },
        // url: 'fruitsAndVegetables.json',
        categories: [
            {
                listLocation: "Projects",
                header: "Projekte"
            },
            {
                listLocation: "Tasks",
                header: "Aufgaben"
            }
        ],
        getValue: "text",
        template: {
            type: "links",
            fields: {
                link: "link"
            }
        }
    };
    $("#top-search").easyAutocomplete(options);
</script>
    <!-- third party js -->
    <script src="<?php echo $root; ?>theme/admin/assets/charts/js/chart.bundle.min.js"></script>
    <!-- third party js ends -->
    <!-- demo app -->
    <script>
        !function (t) {
            "use strict";
            var r = function () {
                this.$body = t("body"), this.charts = []
            };
            r.prototype.respChart = function (r, a, n, e) {
                Chart.defaults.global.defaultFontColor = "#8391a2", Chart.defaults.scale.gridLines.color = "#8391a2";
                var i = r.get(0).getContext("2d"), s = t(r).parent();
                return function () {
                    var o;
                    switch (r.attr("width", t(s).width()), a) {
                        case"Line":
                            o = new Chart(i, {type: "line", data: n, options: e});
                            break;
                        case"Doughnut":
                            o = new Chart(i, {type: "doughnut", data: n, options: e})
                    }
                    return o
                }()
            }, r.prototype.initCharts = function () {
                var r = [];
                if (t("#task-area-chart").length > 0) {
                    r.push(this.respChart(t("#task-area-chart"), "Line", {
                        labels: ["Sat","Sun","Mon","Tue","Wed","Thu","Fri"],
                        datasets: [
                            {
                                label: "Todo",
                                fill: !0,
                                backgroundColor: "transparent",
                                borderColor: "#fa5c7c",
                                data: [0,2,3,5,7,8,9]
                            },
                            {
                                label: "In Progress",
                                fill: !0,
                                backgroundColor: "transparent",
                                borderColor: "#727cf5",
                                data: [0,1,2,2,5,6,4]
                            },
                            {
                                label: "Review",
                                fill: !0,
                                backgroundColor: "transparent",
                                borderColor: "#0acf97",
                                borderDash: [5, 5],
                                data: [1,3,2,1,4,5,6]
                            },
                            {
                                label: "Done",
                                backgroundColor: "rgba(10, 207, 151, 0.3)",
                                borderColor: "#0acf97",
                                data: [2,3,4,2,1,1,3]
                            },
                        ]
                    }, {
                        maintainAspectRatio: !1,
                        legend: {display: !1},
                        tooltips: {intersect: !1},
                        hover: {intersect: !0},
                        plugins: {filler: {propagate: !1}},
                        scales: {
                            xAxes: [{reverse: !0, gridLines: {color: "rgba(0,0,0,0.05)"}}],
                            yAxes: [{
                                ticks: {stepSize: 10, display: !1},
                                min: 10,
                                max: 100,
                                display: !0,
                                borderDash: [5, 5],
                                gridLines: {color: "rgba(0,0,0,0)", fontColor: "#fff"}
                            }]
                        }
                    }))
                }
                if (t("#project-status-chart").length > 0) {
                    r.push(this.respChart(t("#project-status-chart"), "Doughnut", {
                        labels: ["Ongoing"],
                        datasets: [{
                            data: [100],
                            backgroundColor: ["#0acf97", "#727cf5", "#fa5c7c"],
                            borderColor: "transparent",
                            borderWidth: "3"
                        }]
                    }, {maintainAspectRatio: !1, cutoutPercentage: 80, legend: {display: !1}}))
                }
                return r
            }, r.prototype.init = function () {
                var r = this;
                Chart.defaults.global.defaultFontFamily = '-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif', r.charts = this.initCharts(), t(window).on("resize", function (a) {
                    t.each(r.charts, function (t, r) {
                        try {
                            r.destroy()
                        } catch (t) {
                        }
                    }), r.charts = r.initCharts()
                })
            }, t.ChartJs = new r, t.ChartJs.Constructor = r
        }(window.jQuery), function (t) {
            "use strict";
            t.ChartJs.init()
        }(window.jQuery);

        $(".calendar-widget").datepicker({
            onSelect: function (date) {
                console.log(date);
            }
        })
    </script>
    <!-- end demo js-->


</body>

</html>
