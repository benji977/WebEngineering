<?PHP
echo "<H1>Ihre Daten wurden in die Tabelle \"adressen\" eintragen</H1><br/>\n";

$feld1=$_POST['email'];
$feld2=$_POST['password'];
$feld3=$_POST['surname'];
$feld4=$_POST['lastname'];
$feld5=$_POST['place'];
$benutzer = "root";
$passwort = "WebEng2018";
$dbname = "webengineering";
$link=mysqli_connect("probst.synology.me", $benutzer, $passwort);
mysqli_select_db($link, $dbname);
$insert = "INSERT INTO user (id, mail, password, surname, lastname, place) values ('1', '$feld1', '$feld2', '$feld3', '$feld4', '$feld5')";
$db = mysqli_query($link, "$insert") or die(mysqli_error($link));
mysqli_close($link);

?>