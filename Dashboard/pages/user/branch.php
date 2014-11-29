<?php
require_once '../../../includes/functions.php';
secured_area();
$user = get_user_info();


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="../../../favicon.png"/>

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

    <script>
        var map;
        var panorama;
        var astorPlace = new google.maps.LatLng(-33.5719657, -70.67846759999999);
        var busStop = new google.maps.LatLng(-33.5719657, -70.67846759999999);

        function initialize() {

            // Set up the map
            var mapOptions = {
                center: astorPlace,
                zoom: 18,
                streetViewControl: false
            };
            map = new google.maps.Map(document.getElementById('map-canvas'),
                mapOptions);

            var busMarker = new google.maps.Marker({
                position: busStop,
                map: map,
                icon: 'http://chart.apis.google.com/chart?chst=d_map_pin_icon&chld=star|FFFF00',
                title: 'Su Dirección'
            });

            // We get the map's default panorama and set up some defaults.
            // Note that we don't yet set it visible.
            panorama = map.getStreetView();
            panorama.setPosition(astorPlace);
            panorama.setPov(/** @type {google.maps.StreetViewPov} */({
                heading: 90,
                pitch: 0
            }));
        }

        function toggleStreetView() {
            var toggle = panorama.getVisible();
            if (toggle == false) {
                panorama.setVisible(true);
            } else {
                panorama.setVisible(false);
            }
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <title>IsOpen.Today | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- font Awesome -->
    <link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <!-- Ionicons -->
    <link href="../../css/ionicons.min.css" rel="stylesheet" type="text/css"/>
    <!-- Morris chart -->
    <link href="../../css/morris/morris.css" rel="stylesheet" type="text/css"/>
    <!-- jvectormap -->
    <link href="../../css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css"/>
    <!-- Date Picker -->
    <link href="../../css/datepicker/datepicker3.css" rel="stylesheet" type="text/css"/>
    <!-- Daterange picker -->
    <link href="../../css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="../../css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css"/>
    <!-- Theme style -->
    <link href="../../css/AdminLTE.css" rel="stylesheet" type="text/css"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="skin-blue">
<!-- header logo: style can be found in header.less -->
<header class="header">
<a href="index.php" class="logo">
    <!-- Add the class icon to your logo image or logo icon to add the margining -->
    IsOpen!.Today
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" role="navigation">
<!-- Sidebar toggle button-->
<a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</a>

<div class="navbar-right">
<ul class="nav navbar-nav">
<!-- Messages: style can be found in dropdown.less-->
<li class="dropdown messages-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-envelope"></i>
        <span class="label label-success">4</span>
    </a>
    <ul class="dropdown-menu">
        <li class="header">You have 4 messages</li>
        <li>
            <!-- inner menu: contains the actual data -->
            <ul class="menu">
                <li><!-- start message -->
                    <a href="#">
                        <div class="pull-left">
                            <img src="../../img/avatar3.png" class="img-circle" alt="User Image"/>
                        </div>
                        <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                    </a>
                </li>
                <!-- end message -->
                <li>
                    <a href="#">
                        <div class="pull-left">
                            <img src="../../img/avatar2.png" class="img-circle" alt="user image"/>
                        </div>
                        <h4>
                            AdminLTE Design Team
                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="pull-left">
                            <img src="../../img/avatar.png" class="img-circle" alt="user image"/>
                        </div>
                        <h4>
                            Developers
                            <small><i class="fa fa-clock-o"></i> Today</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="pull-left">
                            <img src="../../img/avatar2.png" class="img-circle" alt="user image"/>
                        </div>
                        <h4>
                            Sales Department
                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="pull-left">
                            <img src="../../img/avatar.png" class="img-circle" alt="user image"/>
                        </div>
                        <h4>
                            Reviewers
                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="footer"><a href="#">See All Messages</a></li>
    </ul>
</li>
<!-- Notifications: style can be found in dropdown.less -->
<li class="dropdown notifications-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-warning"></i>
        <span class="label label-warning">10</span>
    </a>
    <ul class="dropdown-menu">
        <li class="header">You have 10 notifications</li>
        <li>
            <!-- inner menu: contains the actual data -->
            <ul class="menu">
                <li>
                    <a href="#">
                        <i class="ion ion-ios7-people info"></i> 5 new members joined today
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-warning danger"></i> Very long description here that may not fit into the page
                        and may cause design problems
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-users warning"></i> 5 new members joined
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="ion ion-ios7-cart success"></i> 25 sales made
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="ion ion-ios7-person danger"></i> You changed your username
                    </a>
                </li>
            </ul>
        </li>
        <li class="footer"><a href="#">View all</a></li>
    </ul>
</li>
<!-- Tasks: style can be found in dropdown.less -->
<li class="dropdown tasks-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-tasks"></i>
        <span class="label label-danger">9</span>
    </a>
    <ul class="dropdown-menu">
        <li class="header">You have 9 tasks</li>
        <li>
            <!-- inner menu: contains the actual data -->
            <ul class="menu">
                <li><!-- Task item -->
                    <a href="#">
                        <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                        </h3>
                        <div class="progress xs">
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                                 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">20% Complete</span>
                            </div>
                        </div>
                    </a>
                </li>
                <!-- end task item -->
                <li><!-- Task item -->
                    <a href="#">
                        <h3>
                            Create a nice theme
                            <small class="pull-right">40%</small>
                        </h3>
                        <div class="progress xs">
                            <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                                 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">40% Complete</span>
                            </div>
                        </div>
                    </a>
                </li>
                <!-- end task item -->
                <li><!-- Task item -->
                    <a href="#">
                        <h3>
                            Some task I need to do
                            <small class="pull-right">60%</small>
                        </h3>
                        <div class="progress xs">
                            <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                                 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">60% Complete</span>
                            </div>
                        </div>
                    </a>
                </li>
                <!-- end task item -->
                <li><!-- Task item -->
                    <a href="#">
                        <h3>
                            Make beautiful transitions
                            <small class="pull-right">80%</small>
                        </h3>
                        <div class="progress xs">
                            <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                                 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">80% Complete</span>
                            </div>
                        </div>
                    </a>
                </li>
                <!-- end task item -->
            </ul>
        </li>
        <li class="footer">
            <a href="#">View all tasks</a>
        </li>
    </ul>
</li>
<!-- User Account: style can be found in dropdown.less -->
<li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="glyphicon glyphicon-user"></i>
        <span><?php echo $user['name'];
            echo " ";
            echo $user['lastname']; ?> <i class="caret"></i></span>
    </a>
    <ul class="dropdown-menu">
        <!-- User image -->
        <li class="user-header bg-light-blue">
            <img src="../Welcome/<?php echo $user['avatar'] ?>" class="img-circle" alt="User Image"/>

            <p>
                <?php echo $user['name'];
                echo " ";
                echo $user['lastname']; ?> - <?php echo $user['type_user'] ?>
                <small>Miembro desde <?php echo date("M jS, Y", strtotime($user['date'])); ?></small>
            </p>
        </li>
        <!-- Menu Body -->
        <li class="user-body">
            <div class="col-xs-4 text-center">
                <a href="#">Followers</a>
            </div>
            <div class="col-xs-4 text-center">
                <a href="#">Sales</a>
            </div>
            <div class="col-xs-4 text-center">
                <a href="#">Friends</a>
            </div>
        </li>
        <!-- Menu Footer-->
        <li class="user-footer">
            <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
            </div>
            <div class="pull-right">
                <a href="../../../logout.php" class="btn btn-default btn-flat">Sign out</a>
            </div>
        </li>
    </ul>
</li>
</ul>
</div>
</nav>
</header>
<div class="wrapper row-offcanvas row-offcanvas-left">
<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="../../../Welcome/<?php echo $user['avatar'] ?>" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Hola, <?php echo $user['name']; ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="active">
                <a href="../../index.php">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-briefcase"></i>
                    <span>Tiendas</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="store.php"><i class="fa fa-angle-double-right"></i> Agregar Tienda</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i> Actualizar Tienda</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i> Borrar Tienda</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="ion ion-android-locate"></i>
                    <span>Sucursales</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-angle-double-right"></i> Agregar Sucursal</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i> Actualizar Sucursal</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i> Borrar Sucursal</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Sucursales
            <small>Agregar Sucursal</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="ion ion-android-locate"></i> Sucursales</a></li>
            <li class="active">Agregar Sucursal</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">

        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Dirección</h3>
                </div>
                <div class="box-body">
                    <div class="form-group has-success">
                        <label class="control-label" >Ingrese su dirección: </label>

                        <input type="text" class="form-control" id="inputSuccess" placeholder="Direccion ...">
                        </br>
                        <button type="button" class="btn btn-success">Buscar</button>
                    </div>
                    <div class="box box-solid">
                        <div id="map-canvas" style="width: 100%; height: 300px"></div>
                    </div>
                    <div id="panel">
                        <button type="button" value="Toggle Street View" onclick="toggleStreetView();" class="btn btn-primary">Street View</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Date picker</h3>
                </div>
                <div class="box-body">
                    <!-- Date range -->
                    <div class="form-group">
                        <label>Date range:</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="reservation">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <!-- Date and time range -->
                    <div class="form-group">
                        <label>Date and time range:</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-clock-o"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="reservationtime">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <!-- Date and time range -->
                    <div class="form-group">
                        <label>Date range button:</label>

                        <div class="input-group">
                            <button class="btn btn-default pull-right" id="daterange-btn">
                                <i class="fa fa-calendar"></i> Date range picker
                                <i class="fa fa-caret-down"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.form group -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>





    </section>
    <!-- /.content -->
</aside>
<!-- /.right-side -->
</div>
<!-- ./wrapper -->


<!-- jQuery 2.0.2 -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../../js/bootstrap.min.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="../../js/AdminLTE/app.js" type="text/javascript"></script>
<!-- AdminLTE for demo purposes -->
<!-- InputMask -->
<script src="../../js/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
<script src="../../js/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
<script src="../../js/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
<!-- date-range-picker -->
<script src="../../js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
<!-- bootstrap color picker -->
<script src="../../js/plugins/colorpicker/bootstrap-colorpicker.min.js" type="text/javascript"></script>
<!-- bootstrap time picker -->
<script src="../../js/plugins/timepicker/bootstrap-timepicker.min.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="../../js/AdminLTE/app.js" type="text/javascript"></script>

<!-- Page script -->
<script type="text/javascript">
    $(function () {
        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                    'Last 7 Days': [moment().subtract('days', 6), moment()],
                    'Last 30 Days': [moment().subtract('days', 29), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                },
                startDate: moment().subtract('days', 29),
                endDate: moment()
            },
            function (start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal',
            radioClass: 'iradio_minimal'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-red',
            radioClass: 'iradio_flat-red'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
            showInputs: false
        });
    });
</script>

</body>
</html>