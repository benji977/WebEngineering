<?PHP

session_start();

if(empty($_POST['email'])){
    echo "<meta http-equiv=\"refresh\" content=\"0; URL=login.php\">";
}ELSE {
    $usersurname = $_SESSION['usersurname'];
    $userlastname = $_SESSION['userlastname'];

    $feld1 = $_POST['email'];
    $feld2 = $_POST['password'];
    $feld3 = $_POST['surname'];
    $feld4 = $_POST['lastname'];
    $feld5 = $_POST['place'];
    $benutzer = "root";
    $passwort = "WebEng2018";
    $dbname = "webengineering";

    $hashed_password = password_hash($feld2, PASSWORD_DEFAULT);

    $link = mysqli_connect("probst.synology.me", $benutzer, $passwort);
    mysqli_select_db($link, $dbname);
    $insert = "INSERT INTO user (mail, password, surname, lastname, place) values ('$feld1', '$hashed_password', '$feld3', '$feld4', '$feld5')";
    $db1 = mysqli_query($link, "$insert") or die(mysqli_error($link));
    mysqli_close($link);

    echo "<meta http-equiv=\"refresh\" content=\"0; URL=userform.php\">";


    if ($db1 == true) {
        ?>
        <script>alert("Eintrag war erfolgreich!");</script>
        <?php
    }
}
?>