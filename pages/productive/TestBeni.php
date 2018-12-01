<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 01.12.2018
 * Time: 16:17
 */

echo "Daten gespeichert";
$db = mysqli_connect ("probst.synology.me", "root", "WebEng2018", "aaa_inventar");
$insert = "INSERT INTO `tbl_login` (`ID`, `ID_users`, `pw`, `role`, `imgURL`) VALUES (NULL, '234', 'test', 'User', 'dist/img/login/user-dummy.png')";
mysqli_query ($db, $insert);
