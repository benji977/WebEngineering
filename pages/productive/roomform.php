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
        <title>Raum erfassen</title>
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
            <a href="../../index.php" class="logo">
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
                            <a href="/pages/productive/usertable.php">
                                <span class="hidden-xs"><?php echo $usersurname, " ", $userlastname ?></span>
                            </a>
                            <ul class="dropdown-menu">

                            </ul>
                        </li>
                        <li>
                            <a href="/pages/productive/logout.php"><i class="fa  fa-power-off"></i></a>
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


                    <li class="active treeview">
                        <a href="#">
                            <i class="fa fa-mortar-board "></i>
                            <span>Räume</span>
                            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="roomtable.php"><i class="fa fa-circle-o"></i> Raumübersicht</a></li>
                            <li class="active"><a href="roomform.php"><i class="fa fa-circle-o"></i> Raum erfassen</a>
                            </li>

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
                    Raum erfassen
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">Räume</a></li>
                    <li class="active">Raum erfassen</li>
                </ol>
            </section>

            <?php
            if (!isset($_POST['number']) OR !isset ($_POST['place']) OR !isset ($_POST['part']) OR !isset ($_POST['contact'])) {
                echo "";
            } ELSE {

                $usersurname = $_COOKIE['usersurname'];
                $userlastname = $_COOKIE['userlastname'];

                $feld1 = $_POST['number'];
                $feld2 = $_POST['place'];
                $feld3 = $_POST['part'];
                $feld4 = $_POST['contact'];


                include "..\\..\\includes\\db.inc.php";
                $insert = "SELECT COUNT(number) AS count FROM room WHERE number='$feld1'";
                $db1 = mysqli_query($link, "$insert") or die(mysqli_error($link));
                mysqli_close($link);

                $row = $db1->fetch_object()->count;

                if ($row > 0) {
                    $string = "Raum bereits erfasst";
                } else {


                    include "..\\..\\includes\\db.inc.php";
                    $contactid = $link->query("SELECT id FROM contact WHERE mail = '$feld4'")->fetch_object()->id;
                    $insert = "INSERT INTO room (number, place, part, contact_id) values ('$feld1 ($feld3)', '$feld2', '$feld3', '$contactid')";
                    $db1 = mysqli_query($link, "$insert") or die(mysqli_error($link));
                    mysqli_close($link);


                    if ($db1 == true) {
                        $string = "Eintrag wurde erfasst";
                    }
                }
            }
            ?>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Rauminformationen</h3>
                                <?php if (!isset($string)) {
                                } else {

                                    echo "<p class='login-box-msg'>$string</p>";
                                }
                                ?>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form role="form" action="roomform.php"
                                  method="post">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Raumbezeichnung</label>
                                        <input type="text" class="form-control" name="number" id="number"  required minlength="3" maxlength="45" required
                                               placeholder="Raumbezeichnung">
                                    </div>
                                    <div class="form-group">
                                        <label>Ort</label>
                                        <input type="text" class="form-control" name="place" id="place"   required minlength="3" maxlength="45" placeholder="Ort">
                                    </div>
                                    <div class="form-group">
                                        <label>Teilnehmerzahl</label>
                                        <input type="number" class="form-control" name="part" id="part" required minlength="1" maxlength="4" placeholder="Teilnehmerzahl">
                                    </div>
                                    <div class="form-group">
                                        <label>Kontakt</label>
                                        <select class="form-control select2"  name="contact" required id="contact" style="width: 100%;">
                                            <?PHP
                                            include "..\\..\\includes\\db.inc.php";
                                            $abfrage = "select mail from contact";
                                            $ergebnis = mysqli_query($link, $abfrage) or die(mysqli_error($link));

                                            while ($zeile = mysqli_fetch_array($ergebnis, MYSQLI_ASSOC)) {
                                                while (list($schluessel, $wert) = each($zeile)) {
                                                    echo "<option value ='" . $wert . "'>" . $wert . "</option>.";
                                                }
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
                </div>
                <!-- /.box -->


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
    mysqli_close($link);
}
?>
