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
        <title>Benutzer erfassen</title>
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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%"
                                                         role="progressbar"
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
                                                    <small class="pull-right">40%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 40%"
                                                         role="progressbar"
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
                                                    <div class="progress-bar progress-bar-red" style="width: 60%"
                                                         role="progressbar"
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
                                                    <div class="progress-bar progress-bar-yellow" style="width: 80%"
                                                         role="progressbar"
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
                                <span class="hidden-xs">Alexander Pierce</span>
                            </a>
                            <ul class="dropdown-menu">


                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa  fa-power-off"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

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
                            <li><a href="../../indexppa.html"><i class="fa fa-circle-o"></i> Übersicht</a></li>
                        </ul>

                    <li class="active treeview">
                        <a href="#">
                            <i class="fa fa-mortar-board "></i>
                            <span>Prüfungen</span>
                            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="examtable.php"><i class="fa fa-circle-o"></i> Prüfungsübersicht</a></li>
                            <li class="active"><a href="examform.php"><i class="fa fa-circle-o"></i> Prüfung
                                    erfassen</a></li>

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
                            <i class="fa fa-laptop"></i>
                            <span>Hardware</span>
                            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="devicetable.php"><i class="fa fa-circle-o"></i> Gerätübersicht</a></li>
                            <li><a href="deviceform.php"><i class="fa fa-circle-o"></i> Gerät erfassen</a></li>


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
                            <li><a href="contacttable.php"><i class="fa fa-circle-o"></i> Kontaktübersicht</a></li>
                            <li><a href="contactform.php"><i class="fa fa-circle-o"></i> Kontakt erfassen</a></li>

                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-pie-chart"></i>
                            <span>Statistik</span>
                            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="charts.php"><i class="fa fa-circle-o"></i> Statistiken</a></li>

                        </ul>
                    </li>


                    <!-- /.sidebar -->

        </aside>

        <!-- Content Wrapper. Contains page content -->

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Prüfung erfassen
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">Prüfungen</a></li>
                    <li class="active">Prüfung erfassen</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Prüfungsinformationen</h3>
                            </div>
                            <!-- /.box-header -->

                            <?php
                            if (!isset($_POST['room']) ) {

                            } ELSE {
                                $usersurname = $_COOKIE['usersurname'];
                                $userlastname = $_COOKIE['userlastname'];

                                $feld1 = $_POST['email'];
                                $feld2 = $_POST['password'];
                                $feld3 = $_POST['surname'];
                                $feld4 = $_POST['lastname'];
                                $feld5 = $_POST['place'];


                                $hashed_password = password_hash($feld2, PASSWORD_DEFAULT);

                                include "..\\..\\includes\\db.inc.php";
                                $insert = "SELECT COUNT(mail) AS count FROM user WHERE mail='$feld1'";
                                $db1 = mysqli_query($link, "$insert") or die(mysqli_error($link));
                                mysqli_close($link);

                                $row = $db1->fetch_object()->count;

                                if ($row > 0) {
                                    $string = "Email bereits vergeben";
                                } else {

                                    include "..\\..\\includes\\db.inc.php";
                                    $insert = "INSERT INTO user (mail, password, surname, lastname, place) values ('$feld1', '$hashed_password', '$feld3', '$feld4', '$feld5')";
                                    $db1 = mysqli_query($link, "$insert") or die(mysqli_error($link));
                                    mysqli_close($link);


                                    if ($db1 == true) {
                                        $string = "Eintrag wurde erfasst";
                                    }
                                }
                            }
                            ?>

                            <!-- form start -->
                            <form role="form" action="examformroom.php"
                                  method="post">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Prüfungsname</label>
                                        <input type="text" class="form-control" name="name" readonly="readonly" id="name"
                                               placeholder="Prüfungsname">
                                    </div>
                                    <div class="form-group">
                                        <label>Datum</label>
                                        <input type="date" class="form-control" id="date" name="date" readonly="readonly"  placeholder="Datum">
                                    </div>
                                    <div class="form-group">
                                        <label>Zeitpunkt</label>
                                        <input type="time" class="form-control" name="time" readonly="readonly"  id="time"
                                               placeholder="Startzeitpunkt">
                                    </div>
                                    <div class="form-group">
                                        <label>Prüfungsort</label>
                                        <select class="form-control select2"  name="place" readonly="readonly" id="place" style="width: 100%;">
                                            <?PHP
                                            include "..\\..\\includes\\db.inc.php";
                                            $abfrage = "select place from room";
                                            $ergebnis = mysqli_query($link, $abfrage) or die(mysqli_error($link));

                                            while ($zeile = mysqli_fetch_array($ergebnis, MYSQLI_ASSOC)) {
                                                while (list($schluessel, $wert) = each($zeile)) {
                                                    echo "<option value ='" . $wert . "'>" . $wert . "</option>.";
                                                }
                                                mysqli_close($link);
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Prüfungstyp</label>
                                        <select class="form-control select2"  name="type" readonly="readonly" id="type" style="width: 100%;">
                                            <option value ="write" selected="selected">Schriftlich</option>
                                            <option value ="ipad">iPad</option>
                                            <option value ="galaxy">Galaxy Tab</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Teilnehmer</label>
                                        <input type="number" class="form-control" readonly="readonly" id="Teilnehmer"
                                               placeholder="Teilnehmer">
                                    </div>
                                    <div class="form-group">
                                        <label>Verantwortlicher intern</label>
                                        <select class="form-control select2"  name="contact" readonly="readonly" id="contact" style="width: 100%;">
                                            <?PHP
                                            include "..\\..\\includes\\db.inc.php";
                                            $abfrage = "select mail from user";
                                            $ergebnis = mysqli_query($link, $abfrage) or die(mysqli_error($link));

                                            while ($zeile = mysqli_fetch_array($ergebnis, MYSQLI_ASSOC)) {
                                                while (list($schluessel, $wert) = each($zeile)) {
                                                    echo "<option value ='" . $wert . "'>" . $wert . "</option>.";
                                                }
                                                mysqli_close($link);
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Raum</label>
                                        <select class="form-control select2"  name="room" required id="room" style="width: 100%;">
                                            <?PHP
                                            include "..\\..\\includes\\db.inc.php";
                                            $abfrage = "select room.number from room where not exists(select null from reservation join room on room.id = reservation.room_id where room.number = 'jdjdbbdd' and reservation.date = NULL and reservation.time = NULL) ";
                                            $ergebnis = mysqli_query($link, $abfrage) or die(mysqli_error($link));

                                            while ($zeile = mysqli_fetch_array($ergebnis, MYSQLI_ASSOC)) {
                                                while (list($schluessel, $wert) = each($zeile)) {
                                                    echo "<option value ='" . $wert . "'>" . $wert . "</option>.";
                                                }
                                                mysqli_close($link);
                                            }
                                            ?>
                                        </select>
                                    </div>

                                </div>
                                <!-- /.box-body -->

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Speichern</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.box -->
                    <div class="col-md-6">
                        <!-- right column -->
                        <!-- Horizontal Form -->

                        <!-- /.box-body -->

                    </div>
                    <!-- /.box -->

                </div>
                <!--/.col (right) -->

        </div>
        <!-- /.box-body -->

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
