<?PHP
echo "<H1>Ihre Daten wurden in die Tabelle \"adressen\" eintragen</H1><br/>\n";
$feld1=$_POST['email'];
$feld2=$_POST['exempleInputPassword1'];
$feld3=$_POST['Vorname'];
$feld4=$_POST['Nachname'];
$feld5=$_POST['Arbeitsort'];
$benutzer = "root";
$passwort = "camillo";
$dbname = "webengineering";
$link=mysqli_connect("localhost", $benutzer, $passwort);
mysqli_select_db($link, $dbname);
$insert = "INSERT INTO benutzer (mail, passwort, vorname, name, arbeitsort) values ('$feld1', '$feld2', '$feld3', '$feld4', '$feld5')";
$db = mysqli_query($link, "$insert") or die(mysqli_error());
mysqli_close($link);
?>