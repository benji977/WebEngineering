<?PHP
$type=$_POST['option'];
$id=$_POST['id'];
$feld1=$_POST['email'];
$feld2=$_POST['surname'];
$feld3=$_POST['lastname'];
$feld4=$_POST['place'];
$benutzer = "root";
$passwort = "WebEng2018";
$dbname = "webengineering";

$link=mysqli_connect("probst.synology.me", $benutzer, $passwort);
mysqli_select_db($link, $dbname);


if ($type != "delete") {
    $insert = "UPDATE user SET mail = '$feld1' , surname = '$feld2', lastname = '$feld3' , place = '$feld4'  WHERE id= '$id'";
    $db = mysqli_query($link, "$insert") or die(mysqli_error($link));
    mysqli_close($link);



    if ($db == true) {
        ?>
        <script>alert("Änderung war erfolgreich!");</script>
        <?php
    }
}else{
    $insert = "DELETE FROM user  WHERE id= '$id'";
    $db = mysqli_query($link, "$insert") or die(mysqli_error($link));
    mysqli_close($link);



    if ($db == true) {
        ?>
        <script>alert("Nutzer wurde gelöscht");</script>
        <?php
    }


}

echo "<meta http-equiv=\"refresh\" content=\"0; URL=usertable.php\">";

?>