<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 08.12.2018
 * Time: 17:10
 */

session_start();

$_SESSION = array();

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
if (isset($_COOKIE['usermail'])) {
    setcookie("usermail", "usermail", time() - 1000, "/");
    setcookie("password", "password", time() - 1000, "/");
    setcookie("userlastname", "userlastname", time() - 1000, "/");
    setcookie("usersurname", "usersurname", time() - 1000, "/");
}

session_destroy();
echo "<meta http-equiv=\"refresh\" content=\"0; URL =/pages/productive/login.php\">";
?>