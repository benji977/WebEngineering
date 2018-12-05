<?php
session_start();

if(empty($_SESSION['usermail'])){
    echo "<meta http-equiv=\"refresh\" content=\"0; URL=login.php\">";
}ELSE {
    $usersurname = $_SESSION['usersurname'];
    $userlastname = $_SESSION['userlastname'];


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Benutzer bearbeiten</title>
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


                <li class="active treeview">
                    <a href="#">
                        <i class="fa fa-users"></i>
                        <span>Benutzer</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="usertable.php"><i class="fa fa-circle-o"></i> Benutzerübersicht</a></li>
                        <li class="active"><a href="userform.php"><i class="fa fa-circle-o"></i> Benutzer erfassen</a></li>

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
                Benutzer bearbeiten
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Benutzer</a></li>
                <li class="active">Benutzer bearbeiten</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->

                    <?PHP

                    if (!isset($_POST['email']) OR !isset ($_POST['surname'])OR !isset ($_POST['lastname'])OR !isset ($_POST['place'])) {
                        $userid = $_POST['bearbeiten'];
                        $benutzer = "root";
                        $passwort = "WebEng2018";
                        $dbname = "webengineering";
                        $link=mysqli_connect("probst.synology.me", $benutzer, $passwort);
                        mysqli_select_db($link, $dbname);
                        $abfrage = "select surname, lastname, mail, id from user";
                        $ergebnis = mysqli_query($link, $abfrage) or die(mysqli_error($link));

                        $mailquery = $link->query("SELECT mail FROM user WHERE id = $userid")->fetch_object()->mail;
                        $surnamequery = $link->query("SELECT surname FROM user WHERE id = $userid")->fetch_object()->surname;
                        $lastnamequery =$link->query("SELECT lastname FROM user WHERE id = $userid")->fetch_object()->lastname;
                        $placequery = $link->query("SELECT place FROM user WHERE id = $userid")->fetch_object()->place;


                         mysqli_close($link);


                    }else {
                        $userid = $_POST['id'];
                        $mailquery = $_POST['email'];
                        $surnamequery = $_POST['surname'];
                        $lastnamequery = $_POST['lastname'];
                        $placequery = $_POST['place'];
                        $benutzer = "root";
                        $passwort = "WebEng2018";
                        $dbname = "webengineering";


                        $link = mysqli_connect("probst.synology.me", $benutzer, $passwort);
                        mysqli_select_db($link, $dbname);
                        $insert = "UPDATE user SET mail = '$mailquery' , surname = '$surnamequery', lastname = '$lastnamequery' , place = '$placequery'  WHERE id= '$userid'";
                        $db1 = mysqli_query($link, "$insert") or die(mysqli_error($link));
                        mysqli_close($link);

                        if ($db1 == true) {
                            $string = "Eintrag wurde erfasst";
                        }
                    }

                    ?>

                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Persönliche Angaben</h3>
                            <?php  if (!isset($string)) {
                            }else{

                                echo "<p class='login-box-msg'>$string</p>";
                            }
                            ?>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->

                        <form role="form" action="userchange.php"
                              method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="email">Email Adresse</label>
                                    <input type="email" class="form-control" name="email" id="email" value=<?php echo $mailquery; ?>>
                                </div>
                                <div class="form-group">
                                    <label>Vorname</label>
                                    <input type="surname" class="form-control" name="surname" id="surname" value=<?php echo $surnamequery; ?>>
                                </div>
                                <div class="form-group">
                                    <label>Nachname</label>
                                    <input type="text" class="form-control" name="lastname"id="Nachname" value=<?php echo $lastnamequery; ?>>
                                </div>
                                <div class="form-group">
                                    <label>Arbeitsort</label>
                                    <input type="text" class="form-control" name="place" id="Arbeitsort" value=<?php echo $placequery; ?>>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="id" id="id" value=<?php echo $userid; ?>>
                                </div>
                            </div>


                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" name ="option" value = "change" class="btn btn-primary">Speichern</button>
                                <button type="submit" name = "option" value= "delete" class="btn btn-primary">Löschen</button>
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
                        'paging'      : true,
                        'lengthChange': false,
                        'searching'   : false,
                        'ordering'    : true,
                        'info'        : true,
                        'autoWidth'   : false
                    })
                })
            </script>
</body>
</html>

    <?php
    }
    ?>