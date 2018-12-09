<?php
session_start();

include "includes\\checklogin.inc.php";
if (isset($usermail)){
    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
        <!-- Morris chart -->
        <link rel="stylesheet" href="bower_components/morris.js/morris.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
        <!-- Date Picker -->
        <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

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
            <a href="indexppa.html" class="logo">
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
                                        <a href="/pages/productive/usertable.php" class="btn btn-default btn-flat">Profil bearbeiten</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="/pages/productive/logout.php" class="btn btn-default btn-flat">Ausloggen</a>
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



        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">Navigation</li>
                    <li class="active treeview">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active"><a href="indexppa.html"><i class="fa fa-circle-o"></i> Übersicht</a></li>
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
                            <li><a href="pages/productive/examtable.php"><i class="fa fa-circle-o"></i>
                                    Prüfungsübersicht</a></li>
                            <li><a href="pages/productive/examform.php"><i class="fa fa-circle-o"></i> Prüfung erfassen</a>
                            </li>

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
                            <li><a href="pages/productive/usertable.php"><i class="fa fa-circle-o"></i>
                                    Benutzerübersicht</a></li>
                            <li><a href="pages/productive/userform.php"><i class="fa fa-circle-o"></i> Benutzer
                                    erfassen</a></li>

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
                            <li><a href="pages/productive/roomtable.php"><i class="fa fa-circle-o"></i>
                                    Raumübersicht</a></li>
                            <li><a href="pages/productive/roomform.php"><i class="fa fa-circle-o"></i> Raum
                                    erfassen</a></li>

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
                            <li><a href="pages/productive/contacttable.php"><i class="fa fa-circle-o"></i>
                                    Kontaktübersicht</a></li>
                            <li><a href="pages/productive/contactform.php"><i class="fa fa-circle-o"></i> Kontakt
                                    erfassen</a></li>

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
                            <li><a href="pages/productive/charts.php"><i class="fa fa-circle-o"></i> Statistiken</a>
                            </li>

                        </ul>
                    </li>


                    <!-- /.sidebar -->

        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Dashboard
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <?php

                                include ".\\includes\\db.inc.php";
                                $insert = "SELECT COUNT(name) AS count FROM exam";
                                $db1 = mysqli_query($link, "$insert") or die(mysqli_error($link));

                                mysqli_close($link);

                                $row = $db1->fetch_object()->count;

                                echo"<h3>".$row."</h3>"
                                ?>

                                <p>Anzahl Prüfungen</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars "></i>
                            </div>
                            <a href="pages/productive/examtable.php" class="small-box-footer">Weitere Informationen<i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <?php

                                include ".\\includes\\db.inc.php";
                                $insert = "SELECT COUNT(mail) AS count FROM user";
                                $db1 = mysqli_query($link, "$insert") or die(mysqli_error($link));

                                mysqli_close($link);

                                $row = $db1->fetch_object()->count;

                                echo"<h3>".$row."</h3>"
                                ?>

                                <p>Anzahl Mitarbeiter</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="pages/productive/usertable.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <?php

                                include ".\\includes\\db.inc.php";
                                $insert = "SELECT COUNT(number) AS count FROM room";
                                $db1 = mysqli_query($link, "$insert") or die(mysqli_error($link));

                                mysqli_close($link);

                                $row = $db1->fetch_object()->count;

                                echo"<h3>".$row."</h3>"
                                ?>

                                <p>Anzahl Räume</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="pages/productive/roomtable.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red">
                            <div class="inner">
                                <?php

                                include ".\\includes\\db.inc.php";
                                $insert = "SELECT COUNT(type) AS count FROM todo join user on user.id = todo.contact_id where user.mail = '$usermail' and todo.done=1 ";
                                $db1 = mysqli_query($link, "$insert") or die(mysqli_error($link));

                                mysqli_close($link);

                                $row = $db1->fetch_object()->count;

                                echo"<h3>".$row."</h3>"
                                ?>

                                <p>Deine offenen Aufgaben</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="index.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <section class="col-lg-7 connectedSortable">

                        <!-- TO DO List -->
                        <?php
                        if (isset($_POST['bearbeiten'])) {
                        $id= $_POST['bearbeiten'];
                        include ".\\includes\\db.inc.php";

                        $insert = "UPDATE todo SET todo.done = 2 where todo.id =$id";
                        $db1 = mysqli_query($link, "$insert") or die(mysqli_error($link));
                        mysqli_close($link);

                        }

                        ?>

                        <section class="content">

                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <h3 class="box-title">TodoListe</h3>
                                            <?php if (!isset($string)) {
                                            } else {

                                                echo "<p class='login-box-msg'>$string</p>";
                                            }
                                            ?>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">
                                            <?PHP
                                            echo "<form role=\"form\" action=\"index.php\" 
                              method=\"post\">";
                                            ?>
                                            <table id="example1" class="table table-bordered table-striped">
                                                <thead>
                                                <tr>
                                                    <th>Datum</th>
                                                    <th>Typ</th>
                                                    <th>Anzahl</th>
                                                    <th>Prüfung</th>
                                                    <th>Option</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?PHP
                                                include ".\\includes\\db.inc.php";
                                                $abfrage = "SELECT todo.date, todo.type, todo.amount, exam.name, todo.id from todo join exam on exam.todo_id = todo.id join user on user.id=todo.contact_id where todo.date >= CURDATE() and todo.done = 1 and user.mail = '$usermail' group by todo.date";
                                                $ergebnis = mysqli_query($link, $abfrage) or die(mysqli_error($link));

                                                while ($zeile = mysqli_fetch_array($ergebnis, MYSQLI_ASSOC)) {
                                                    echo "<tr>";

                                                    echo "<td>". $zeile['date'] . "</td>";
                                                    echo "<td>". $zeile['type'] . "</td>";
                                                    echo "<td>". $zeile['amount'] . "</td>";
                                                    echo "<td>". $zeile['name'] . "</td>";
                                                    echo "<td><button type='submit' name='bearbeiten' value='" . $zeile['id'] . "' class='btn btn-primary'>Erledigt</button>";



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


                        <!-- /.box -->



                        <!-- /.box -->

                    </section>

                        <section class="content">

                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <h3 class="box-title">Prüfungen heute</h3>
                                            <?php if (!isset($string)) {
                                            } else {

                                                echo "<p class='login-box-msg'>$string</p>";
                                            }
                                            ?>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">
                                            <?PHP
                                            echo "<form role=\"form\" action=\"index.php\" 
                              method=\"post\">";
                                            ?>
                                            <table id="example1" class="table table-bordered table-striped">
                                                <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Ort</th>
                                                    <th>Teilnehmer</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?PHP
                                                include ".\\includes\\db.inc.php";
                                                $abfrage = "SELECT exam.name, exam.place, exam.part from exam where exam.date = CURDATE()";
                                                $ergebnis = mysqli_query($link, $abfrage) or die(mysqli_error($link));

                                                while ($zeile = mysqli_fetch_array($ergebnis, MYSQLI_ASSOC)) {
                                                    echo "<tr>";

                                                    echo "<td>". $zeile['date'] . "</td>";
                                                    echo "<td>". $zeile['type'] . "</td>";
                                                    echo "<td>". $zeile['amount'] . "</td>";
                                                    echo "<td>". $zeile['name'] . "</td>";
                                                    echo "<td><button type='submit' name='bearbeiten' value='" . $zeile['id'] . "' class='btn btn-primary'>Erledigt</button>";



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


                                        <!-- /.box -->



                                        <!-- /.box -->

                        </section>

                    <!-- right col -->
                </div>
                <!-- /.row (main row) -->

            </section>
            <!-- /.content -->

        </div>
        <!-- ./wrapper -->

        <!-- jQuery 3 -->
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.7 -->
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Morris.js charts -->
        <script src="bower_components/raphael/raphael.min.js"></script>
        <script src="bower_components/morris.js/morris.min.js"></script>
        <!-- Sparkline -->
        <script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
        <!-- jvectormap -->
        <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="bower_components/moment/min/moment.min.js"></script>
        <script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
        <!-- datepicker -->
        <script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <!-- Slimscroll -->
        <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="bower_components/fastclick/lib/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="dist/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
    </body>
    </html>

    <?php
}
?>