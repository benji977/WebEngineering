<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 06.12.2018
 * Time: 23:33
 */

if (!isset($_COOKIE['password']) AND !isset($_COOKIE['usermail'])){
    if (!isset($_SESSION['usermail']) OR !isset($_SESSION['usersurname']) OR !isset($_SESSION['userlastname'])) {
        echo "<meta http-equiv=\"refresh\" content=\"0; URL =/pages/productive/login.php\">";
    }ELSE{
        $usermail = $_SESSION['usermail'];
        $usersurname = $_SESSION['usersurname'];
        $userlastname = $_SESSION['userlastname'];
    }

} ELSE {
    $usermail = $_COOKIE['usermail'];
    $usersurname = $_COOKIE['usersurname'];
    $userlastname = $_COOKIE['userlastname'];
    $password = $_COOKIE['password'];
    include "db.inc.php";
    $passworddb = $link->query("SELECT password FROM user WHERE mail = '$usermail'")->fetch_object()->password;
    if ($password === $passworddb) {

    } else {
        echo "<meta http-equiv=\"refresh\" content=\"0; URL =/pages/productive/logout.php\">";
    }
}

?>