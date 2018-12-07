<?PHP
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once '..\\..\\PHPMailer\\src\\Exception.php';
require_once '..\\..\\PHPMailer\\src\\PHPMailer.php';
require_once '..\\..\\PHPMailer\\src\\SMTP.php'

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

    <?php

    if(isset($_POST['mail'])) {


        $usermail = $_POST['mail'];

        function random_string()
        {
            if (function_exists('random_bytes')) {
                $bytes = random_bytes(16);
                $str = bin2hex($bytes);
            } else if (function_exists('openssl_random_pseudo_bytes')) {
                $bytes = openssl_random_pseudo_bytes(16);
                $str = bin2hex($bytes);
            } else if (function_exists('mcrypt_create_iv')) {
                $bytes = mcrypt_create_iv(16, MCRYPT_DEV_URANDOM);
                $str = bin2hex($bytes);
            } else {
                $str = md5(uniqid('NNFX?yupyN,6?dk', true));
            }
            return $str;
        }

        include "..\\..\\includes\\db.inc.php";
        $select = "SELECT COUNT(*) AS sum FROM user WHERE mail = '$usermail'";
        $db = mysqli_query($link, $select) or die(mysqli_error($link));


        $row = mysqli_fetch_assoc($db);
        $sum = $row['sum'];

        if ($sum == 0) {
            $string = "Bitte geben Sie eine gültige Email Adresse ein.";
        } else {

            $passwortcode = random_string();
            $id = $link->query("SELECT id FROM user WHERE mail = '$usermail'")->fetch_object()->id;
            $statement = $link->query("UPDATE user SET passwortcode = '$passwortcode', passwortcode_time = NOW() WHERE id = '$id'");
            $surnamequery = $link->query("SELECT surname FROM user WHERE id = $id")->fetch_object()->surname;


            $url_passwortcode = 'https://probst.synology.me/pages/productive/passwordreset.php?userid=' . $id . '&code=' . $passwortcode;

            $body = '<h3>Hallo ' . $surnamequery . '</h3><br>Über den folgenden Link kannst du dein Kennwort neu setzen:<br>'.$url_passwortcode.'<br><br>Nicht vergessen, der Link ist nur 24 Stunden gültig.' ;

            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->CharSet = "UTF-8";
            $mail->SMTPSecure = 'tls';
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 587;
            $mail->Username = 'pruefungsplaner2018@gmail.com';
            $mail->Password = 'WebEng2018';
            $mail->SMTPAuth = true;

            $mail->setFrom('pruefungsplaner2018@gmail.com', 'Prüfungsplaner');
            $mail->AddAddress($usermail);
            $mail->AddReplyTo('pruefungsplaner2018@gmail.com', 'Prüfungsplaner');

            $mail->IsHTML(true);
            $mail->Subject = "Prüfungsplaner Passwort reset";
            $mail->AltBody = "To view the message, please use an HTML compatible email viewer!";
            $mail->Body = "$body";
            //$mail->SMTPDebug = 4;

            try{
                $mail->send();
                echo 'Ein Email mit dem Passwort '.$passwortcode.' wurde an  verschickt.';
            }
            catch (Exception $e)
            {
                echo $e->errorMessage();
            }
            catch (\Exception $e)
            {
                echo $e->getMessage();
            }


        }
    }
    ?>


        <div class="login-box-body">
            <p class="login-box-msg">Passwort zurücksetzen</p>

            <form action=passwordresetmail.php method="post">
                <div class="form-group has-feedback">
                    <?php  if (!isset($string)) {
                    }else{

                        echo "<p class='login-box-msg'>$string</p>";
                    }
                    ?>
                    <input type="email" class="form-control" name="mail" id="mail" required placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Senden</button>
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

