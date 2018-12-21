<?PHP
session_start();

if (isset($_POST['password']) AND isset($_GET['userid'])) {
    $id = $_GET['userid'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    include "..\\..\\includes\\db.inc.php";
    $update = "UPDATE user SET password = '$hashed_password' WHERE id = '$id'";
    $db = mysqli_query($link, $update) or die(mysqli_error($link));

    mysqli_close($link);
    echo "<meta http-equiv=\"refresh\" content=\"0; URL =login.php\">";

}elseif (isset($_GET['userid']) AND isset($_GET['code'])) {
    $id = $_GET['userid'];
    $passwortcodel = $_GET['code'];

    include "..\\..\\includes\\db.inc.php";
    $select = "SELECT COUNT(*) AS sum FROM user WHERE id = '$id'";
    $db = mysqli_query($link, $select) or die(mysqli_error($link));

    $row = mysqli_fetch_assoc($db);
    $sum = $row['sum'];


    if ($sum != 0) {
        $passwortcodedb = $link->query("SELECT passwortcode FROM user WHERE id = '$id'")->fetch_object()->passwortcode;
        $passwortcode_time = $link->query("SELECT passwortcode_time FROM user WHERE id = '$id'")->fetch_object()->passwortcode_time;
        $datetime1 = strtotime($passwortcode_time);
        $datetime2 = strtotime(date("Y-m-d H:i:s"));
        $timecontrol = ($datetime2-$datetime1)/3600;
        if ($passwortcodel == $passwortcodedb AND $timecontrol>=0 AND $timecontrol<=24){
            mysqli_close($link);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Prüfungsplaner | Passwortreset</title>
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
        <a href="../../index.php"><b>PRÜFUNGSPLAN</b>ER</a>
    </div>
    <!-- /.login-logo -->

        <div class="login-box-body">
            <p class="login-box-msg">Passwort zurücksetzen</p>

            <form action=<?php echo 'passwordreset.php?userid='.$id?> method="post">
                <div class="form-group">
                    <label for="password">Passwort</label>
                    <input type="password" class="form-control" name="password" id="password"
                           required minlength="3" maxlength="45" placeholder="Passwort">
                </div>
                <div class="row">
                    <div class="col-xs-8">
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">ändern</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>


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

        <?php
        }elseif ($timecontrol>=0 AND $timecontrol<=24){
            ?>
            <script>alert("Der Link ist abgelaufen. Sie werden zum Login weitergeleitet.")</script>
            <?php
            echo "<meta http-equiv=\"refresh\" content=\"0; URL =login.php\">";
        }else{
            ?>
            <script>alert("Der Link ist ungültig. Sie werden zum Login weitergeleitet.")</script>
            <?php
            echo "<meta http-equiv=\"refresh\" content=\"0; URL =login.php\">";
        }
    }
    }else{
    ?>
    <script>alert("Der Link ist ungültig. Sie werden zum Login weitergeleitet.")</script>
    <?php
    echo "<meta http-equiv=\"refresh\" content=\"0; URL =login.php\">";
}
    ?>