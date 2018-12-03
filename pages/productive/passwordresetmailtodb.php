<?PHP

session_start();

use PHPMailer\PHPMailer\PHPMailer;
require_once('class.phpmailer.php');


if(empty($_POST['mail'])){
    echo "<meta http-equiv=\"refresh\" content=\"0; URL=passwordreset.php\">";
}ELSE {

    $usermail = $_POST['mail'];

    $benutzer = "root";
    $passwort = "WebEng2018";
    $dbname = "webengineering";

    function random_string()
    {
        if (function_exists('random_bytes')) {
            $bytes = random_bytes(16);
            $str = bin2hex($bytes);
        } else if (function_exists('openssl_random_pseudo_bytes')) {
            $bytes = openssl_random_pseudo_bytes(16);
            $str = bin2hex($bytes);
        } else if (function_exists('mcrypt_create_iv')) {
            $bytes = mcrypt_create_iv(16, MCRYPT_DEV_URANDOM);
            $str = bin2hex($bytes);
        } else {
            $str = md5(uniqid('NNFX?yupyN,6?dk', true));
        }
        return $str;
    }

    $link = mysqli_connect("probst.synology.me", $benutzer, $passwort);
    mysqli_select_db($link, $dbname);
    $select = "SELECT COUNT(*) AS sum FROM user WHERE mail = '$usermail'";
    $db = mysqli_query($link, "$select") or die(mysqli_error($link));


    $row = mysqli_fetch_assoc($db);
    $sum = $row['sum'];


    if ($sum == 0) {
        echo "<meta http-equiv=\"refresh\" content=\"0; URL=passwordreset.php\">";
        ?>
        <script>alert("Mail nicht vorhanden");</script>
        <?php
    } else {

        $passwortcode = random_string();
        $id = $link->query("SELECT id FROM user WHERE mail = '$usermail'")->fetch_object()->id;
        $statement = $link->query("UPDATE user SET passwortcode = $passwortcode, passwortcode_time = NOW() WHERE id = $id");
        $surnamequery = $link->query("SELECT surname FROM user WHERE id = $id")->fetch_object()->surname;


        $url_passwortcode = 'https://probst.synology.me/passwordreset.php?userid=' . $user['id'] . '&code=' . $passwortcode;




        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->CharSet="UTF-8";
        $mail->SMTPSecure = 'tls';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->Username = 'pruefungsplaner2018@gmail.com';
        $mail->Password = 'WebEng2018';
        $mail->SMTPAuth = true;

        $mail->From = 'pruefungsplaner2018@gmail.com';
        $mail->FromName = 'Prüfungsplaner';
        $mail->AddAddress($usermail);
        $mail->AddReplyTo('pruefungsplaner2018@gmail.com', 'Prüfungsplaner');

        $mail->IsHTML(true);
        $mail->Subject    = "PHPMailer Test Subject via Sendmail, basic";
        $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";
        $mail->Body    = "Hello";

        if(!$mail->Send())
        {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
        else
        {
            echo "Message sent!";
        }


}
}
?>