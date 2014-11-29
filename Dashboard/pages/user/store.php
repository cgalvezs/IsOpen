<?php
require_once '../../../includes/functions.php';
secured_area();
$user = get_user_info();


require_once '../../../Dao/CountryDAO.php';
$countryDao = new CountryDAO();
$listCountry = $countryDao->getCountrys();

require_once '../../../Dao/StoreDAO.php';

$storeDao = new StoreDOA();
$countStore = $storeDao->getStoreByIdUser($user['id']);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="../../../favicon.png" />
    <title>IsOpen.Today | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="../../css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="../../css/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="../../css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="../../css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="../../css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="../../css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../../css/AdminLTE.css" rel="stylesheet" type="text/css" />

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

<!-- User Account: style can be found in dropdown.less -->
<li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="glyphicon glyphicon-user"></i>
        <span><?php echo $user['name']; echo " "; echo $user['lastname']; ?> <i class="caret"></i></span>
    </a>
    <ul class="dropdown-menu">
        <!-- User image -->
        <li class="user-header bg-light-blue">
            <img src="../Welcome/<?php echo $user['avatar'] ?>" class="img-circle" alt="User Image" />
            <p>
                <?php echo $user['name']; echo " "; echo $user['lastname']; ?> - <?php echo $user['type_user'] ?>
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
                    <img src="../../../Welcome/<?php echo $user['avatar'] ?>" class="img-circle" alt="User Image" />
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
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> Agregar Tienda</a></li>
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
                        <li><a href="branch.php"><i class="fa fa-angle-double-right"></i> Agregar Sucursal</a></li>
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
                Tiendas
                <small>Agregar Tienda</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-briefcase"></i> Tiendas</a></li>
                <li class="active">Agregar Tienda</li>
            </ol>
        </section>
                <!-- Main content -->
                <section class="content">

                    <section class="col-lg-7 connectedSortable ui-sortable">
                        <!-- general form elements disabled -->
                        <div class="box box-warning">
                            <div class="box-header">
                                <h3 class="box-title">Agregar Tienda</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                                <form role="form" action="../../../Controller/StoreAdd.php" method="post">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Nombre: </label>
                                        <input type="text" name="nameStore" class="form-control" placeholder="Ex: IsOpen"/>
                                    </div>


                                    <!-- input states -->
                                    <!--

                                    <div class="form-group has-success">
                                        <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Input with success</label>
                                        <input type="text" class="form-control" id="inputSuccess" placeholder="Enter ..."/>
                                    </div>
                                    <div class="form-group has-warning">
                                        <label class="control-label" for="inputWarning"><i class="fa fa-warning"></i> Input with warning</label>
                                        <input type="text" class="form-control" id="inputWarning" placeholder="Enter ..."/>
                                    </div>
                                    <div class="form-group has-error">
                                        <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with error</label>
                                        <input type="text" class="form-control" id="inputError" placeholder="Enter ..."/>
                                    </div>

                                    //-->

                                    <!-- select -->
                                    <div class="form-group">
                                        <label>País: </label>
                                        <select class="form-control" name="countryStore">
                                            <option value="0">Seleccione un país...</option>
                                            <?php
                                            for($i = 0 ; $i < (count($listCountry)); $i++){
                                                echo "<option value=\"".$listCountry[$i]['id_country']."\">".$listCountry[$i]["name"]."</option>";  }?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <td><button type="submit" class="btn btn-primary">Agregar</button></td>
                                    </div>
                                </form>

                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </section><!--/.col (right) -->


                    <section class="col-lg-27 connectedSortable ui-sortable">

                        <div class="col-lg-3 col-xs-6" >
                            <!-- small box -->
                            <div class="small-box bg-aqua" >
                                <div class="inner">
                                    <h3>
                                        <?php echo $countStore; ?>
                                    </h3>
                                    <p>
                                        Tiendas
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    Ver Tiendas <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>

                    </section>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../../js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="../../js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->

    </body>
</html>
