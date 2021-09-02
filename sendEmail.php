<?php
use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['type']) && isset($_POST['email'])){
    $type = $_POST['type'];
    $email = $_POST['email'];
    // $subject = $_POST['subject'];
    // $body = $_POST['body'];

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();

    //smtp settings
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "tanmaysinh04@gmail.com";
    $mail->Password = 'khant5108';
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

    //email settings
    $na="lejind";
    $nam=" ultralejind";
    $mail->isHTML(true);
    $mail->setFrom($email, "ultralejind");
    $mail->addAddress($email);
    $mail->Subject = ("lejind");
    $mail->Body = "sala pandit have bandh kar";

    if($mail->send()){
        $status = "success";
        $response = "Email is sent!";
    }
    else
    {
        $status = "failed";
        $response = "Something is wrong: <br>" . $mail->ErrorInfo;
    }

    exit(json_encode(array("status" => $status, "response" => $response)));
}

?>
      