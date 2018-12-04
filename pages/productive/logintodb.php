<?PHP
session_start();

if(empty($_POST['mail'])){
    echo "<meta http-equiv=\"refresh\" content=\"0; URL=login.php\">";
}ELSE {

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

        echo '<script>alert("Nutzer nicht registriert");</script>';

        echo "<meta http-equiv=\"refresh\" content=\"0; URL=login.php\">";
    }


    if ($sum > 0) {

        $passworddb = $link->query("SELECT password FROM user WHERE mail = '$mail'")->fetch_object()->password;

        if (password_verify($password, $passworddb)) {
            $_SESSION['usermail'] = $mail;
            $_SESSION['usersurname'] = $link->query("SELECT surname FROM user WHERE mail = '$mail'")->fetch_object()->surname;
            $_SESSION['userlastname'] = $link->query("SELECT lastname FROM user WHERE mail = '$mail'")->fetch_object()->lastname;
            echo "<meta http-equiv=\"refresh\" content=\"0; URL=../../index.php\">";
        } else {
            ?>
            <script>alert("Passwort falsch");</script>
            <?php

            echo "<meta http-equiv=\"refresh\" content=\"0; URL=login.php\">";
        }

    }


    mysqli_close($link);

}

?>