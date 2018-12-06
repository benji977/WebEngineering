<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 06.12.2018
 * Time: 19:28
 */

$benutzer = "root";
$passwort = "WebEng2018";
$dbname = "webengineering";
$link = mysqli_connect("probst.synology.me", $benutzer, $passwort);
mysqli_select_db($link, $dbname);