<?PHP
echo "<H1>Ihre Daten wurden in die Tabelle \"adressen\" eintragen</H1><br/>\n";
$feld1=$_POST['NR'];
$feld2=$_POST['name'];
$feld3=$_POST['strasse'];
$feld4=$_POST['ort'];
$benutzer = "root";
$passwort = "test";
$dbname = "test_datenbank";
$link=mysqli_connect("localhost", $benutzer, $passwort);
mysqli_select_db($link, $dbname);
$insert = "INSERT INTO adressen (NR, name, strasse, ort) values ('$feld1', '$feld2', '$feld3', '$feld4')";
$db = mysqli_query($link, "$insert") or die(mysqli_error());
mysqli_close($link);
?>