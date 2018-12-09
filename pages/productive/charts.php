<?php
session_start();

include "..\\..\\includes\\checklogin.inc.php";
if (isset($usermail)) {
    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Statistik</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="../../indexppa.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>P</b>P</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>PRÜFUNGSPLAN</b>ER</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">

                            <ul class="dropdown-menu">
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- Task item -->
                                    </li>
                                    <!-- end task item -->
                                </ul>
                                </li>
                                <li class="footer">
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="hidden-xs"><?php echo $usersurname, " ", $userlastname ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <p>
                                        <?php echo $usersurname, " ", $userlastname ?>
                                        <small><?php echo $usermail ?></small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="usertable.php" class="btn btn-default btn-flat">Profil bearbeiten</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="logout.php" class="btn btn-default btn-flat">Ausloggen</a>
                                    </div>
                                </li>
                                <!-- Menu Body -->

                                <!-- Menu Footer-->

                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                    </ul>
                </div>
            </nav>
        </header>
    </div>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">Navigation</li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="../../index.php"><i class="fa fa-circle-o"></i> Übersicht</a></li>
                    </ul>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-mortar-board "></i>
                        <span>Prüfungen</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="examtable.php"><i class="fa fa-circle-o"></i> Prüfungsübersicht</a></li>
                        <li><a href="examform.php"><i class="fa fa-circle-o"></i> Prüfung erfassen</a></li>

                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-users"></i>
                        <span>Benutzer</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="usertable.php"><i class="fa fa-circle-o"></i> Benutzerübersicht</a></li>
                        <li><a href="userform.php"><i class="fa fa-circle-o"></i> Benutzer erfassen</a></li>

                    </ul>
                </li>


                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-mortar-board "></i>
                        <span>Räume</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="roomtable.php"><i class="fa fa-circle-o"></i> Raumübersicht</a></li>
                        <li><a href="roomform.php"><i class="fa fa-circle-o"></i> Raum erfassen</a></li>

                    </ul>
                </li>


                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-suitcase"></i>
                        <span>Kontakte</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="contacttable.php"><i class="fa fa-circle-o"></i>
                                Kontaktübersicht</a></li>
                        <li><a href="contactform.php"><i class="fa fa-circle-o"></i> Kontakt erfassen</a></li>

                    </ul>
                </li>

                <li class=" active treeview">
                    <a href="#">
                        <i class="fa fa-pie-chart"></i>
                        <span>Statistik</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="charts.php"><i class="fa fa-circle-o"></i> Statistiken</a></li>

                    </ul>
                </li>


                <!-- /.sidebar -->

    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                3 Meistgenutze Räume und Anzahl je Prüfungstype
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Statistik</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <?PHP
                            echo "<form role=\"form\" 
                              method=\"post\">";
                            ?>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Raumname</th>
                                    <th>Reservationen</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?PHP
                                include "..\\..\\includes\\db.inc.php";
                                $abfrage = "SELECT room.number, count(reservation.room_id) as reservationen FROM room join reservation on reservation.room_id = room.id group by reservation.room_id ORDER BY MAX(reservation.room_id) DESC LIMIT 3";
                                $ergebnis = mysqli_query($link, $abfrage) or die(mysqli_error($link));

                                while ($zeile = mysqli_fetch_array($ergebnis, MYSQLI_ASSOC)) {
                                    echo "<tr>";
                                    while (list($schluessel, $wert) = each($zeile)) {
                                            echo "<td>" . $wert . "</td>";

                                        }

                                    echo "</tr>";
                                }
                                mysqli_close($link);
                                ?>
                                </tbody>
                                <tfoot>
                                </tfoot>
                            </table>

                            <?PHP
                            echo "</form>"
                            ?>

                        </div>
                        <!-- /.box-body -->
                    </div>

                    <div class="box">
                        <div class="box-header">
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <?PHP
                            echo "<form role=\"form\" 
                              method=\"post\">";
                            ?>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Prüfungstyp</th>
                                    <th>Anzahl</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?PHP
                                include "..\\..\\includes\\db.inc.php";
                                $abfrage = "SELECT exam.type, count(exam.name) FROM exam group by exam.type";
                                $ergebnis = mysqli_query($link, $abfrage) or die(mysqli_error($link));

                                while ($zeile = mysqli_fetch_array($ergebnis, MYSQLI_ASSOC)) {
                                    echo "<tr>";
                                    while (list($schluessel, $wert) = each($zeile)) {
                                        echo "<td>" . $wert . "</td>";

                                    }

                                    echo "</tr>";
                                }
                                mysqli_close($link);
                                ?>
                                </tbody>
                                <tfoot>

                                </tfoot>
                            </table>

                            <?PHP
                            echo "</form>"
                            ?>

                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- /.box -->

    </div>
    <!-- /.col (LEFT) -->
    <div class="col-md-6">

        </section>


        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer
    </footer>

    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../../bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- page script -->
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })
        })
    </script>
    </body>
    </html>
    <?php
}
?>