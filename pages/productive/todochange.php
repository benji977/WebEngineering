<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 08.12.2018
 * Time: 17:10
 */

session_start();

if (!isset($_POST['bearbeiten'])) {
    $id= $_POST['bearbeiten'];
    include "..\\..\\includes\\db.inc.php";

    $insert = "UPDATE todo SET todo.done = 2";
    $db1 = mysqli_query($link, "$insert") or die(mysqli_error($link));
    mysqli_close($link);

    ?>
    <script>alert("Löschen war erfolgreich!");</script>
    <?php

}

echo "<meta http-equiv=\"refresh\" content=\"0; URL=../../index.php\">";
?>