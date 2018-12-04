<?PHP
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>PRÜFUNGSPLAN</b>ER</a>
    </div>
    <!-- /.login-logo -->

    <!--  TODO: ANGEMELDET BLEIBEN IMPLEMENTIEREN ODER BOX ENTFERNEN -> SELBES FUER PASSWORT VERGESSEN -->

    <?PHP



    if (!isset($_POST['mail']) OR !isset ($_SESSION['usersurname'])) {

       } ELSE {

        $mail = $_POST['mail'];
        $password = $_POST['password'];
        $benutzer = "root";
        $passwort = "WebEng2018";
        $dbname = "webengineering";


        $link = mysqli_connect("probst.synology.me", $benutzer, $passwort);
        mysqli_select_db($link, $dbname);
        $select = "SELECT COUNT(*) AS sum FROM user WHERE mail = '$mail'";
        $db = mysqli_query($link, "$select") or die(mysqli_error($link));


        $row = mysqli_fetch_assoc($db);
        $sum = $row['sum'];


        if ($sum == 0) {
            $string = "E-Mail oder Passwort sind falsch";
        }else{

            $passworddb = $link->query("SELECT password FROM user WHERE mail = '$mail'")->fetch_object()->password;

            if (password_verify($password, $passworddb)) {
                $_SESSION['usermail'] = $mail;
                $_SESSION['usersurname'] = $link->query("SELECT surname FROM user WHERE mail = '$mail'")->fetch_object()->surname;
                $_SESSION['userlastname'] = $link->query("SELECT lastname FROM user WHERE mail = '$mail'")->fetch_object()->lastname;
                echo "<meta http-equiv=\"refresh\" content=\"0; URL=../../index.php\">";
            } else {

                $string = "E-Mail oder Passwort sind falsch";
            }

        }


        mysqli_close($link);

    }

    ?>

    <div class="login-box-body">
        <p class="login-box-msg">Anmelden um eine neue Session zu starten</p>
        <?php  if (!isset($string)) {
            }else{

            echo "<p class='login-box-msg'>$string</p>";
        }
        ?>

<<<<<<< HEAD
        <form action="/login.php\" method="post">
=======
        <form action="/login.php" method="post">
>>>>>>> origin/master
            <div class="form-group has-feedback">
                <input type="email" class="form-control" name="mail" id="mail" required placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="password" id="password" required minlength="3" maxlength="45" placeholder="Passwort">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> Angemeldet bleiben
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Anmelden</button>
                </div>
                <!-- /.col -->
            </div>
        </form>


        <a href="#">Passwort vergessen</a><br>

        </div>




    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
</script>
</body>
</html>
