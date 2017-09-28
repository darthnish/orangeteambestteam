
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {

    //Recipients
    $mail->setFrom('canadaparties@canada.gv', 'CanadaParties');
    $mail->addAddress($_POST['subscribe-email']);
    $mail->addReplyTo($_POST['subscribe-email'], 'Information');

    //Attachments
    $mail->addAttachment('../img/mail.jpg', 'comparePic');
    $mail->addAttachment('../img/logo/logo_black.png', 'logo');
    $mail->addAttachment('../img/sns/facebook.png', 'facebook');
    $mail->addAttachment('../img/sns/instagram.png', 'instagram');
    $mail->addAttachment('../img/sns/twitter.png', 'twitter');

    //Content
    $mail->isHTML(true); // Set email format to HTML

    $message="<body><div style='width: 500px; height: auto; background: white; display: block; margin: auto; '>\n";
    $message.=     "<div style='width: 100%; height: 10%; padding-top: 1em; padding-left: 6%;'>\n";
    $message.=         "<img style='width: 25%; height: auto;' src='cid:logo' alt='logo'>\n";
    $message.=     "</div>\n";
    $message.=     "<div style='width: 100%; height: auto; padding-top: 1em; margin-bottom: 1em; '>\n";
    $message.=         "<div style='width: 100%; height: 20%; padding-left: 7%; margin-top: 5%;'>\n";
    $message.=             "<h1 style='ont-family: 'Zilla Slab', serif; font-size: 2.4em;'>Thank you for subscribe</h1>\n";
    $message.=             "<h4 style='ont-family: 'Lato', sans-serif; font-weight: 700; padding-top: 1em; '>Hi, ".$_POST['subscribe-name']." </h4>\n";
    $message.=             "<p style='font-family: 'Lato', sans-serif; padding-top: 1em; font-weight: 400; font-size: 1em; margin-bottom: 1.5em; '>We will send you about our news.<br>You can get imformation about us and<br>let’s vote for next election.</p>\n";
    $message.=         "</div>"; //close "mail_body_title"
    $message.=         "<div style='width: 85%; height: 350px; display: block; margin: auto; background-image: url(cid:comparePic); background-repeat: no-repeat; background-position: center; background-size: contain; text-align: center; '>\n";
    $message.=             "<h1 style='line-height: 350px; color: white; font-size: 2.8em;'>Let's Compare Parties</h1>\n";
    $message.=         "</div>\n";
    $message.=         "<div style='display: block; width: 100%; height: auto; text-align: center; '>\n";
    $message.=             "<p style='adding-top: 3.5em; font-weight: 400; font-size: 1em; '>You can go to our site and compare <br>which party you are.</p>\n";
    $message.=             "<a href='heyharuna.ga/orangeteambestteam/public_html/compare-parties.php' style='color: white; width: 50%; height: auto; display: block; margin: auto; background: #231f20; font-size: 1.4em; line-height: 2.4em; border: none; margin-top: 2em; margin-bottom: 1.5em; text-decoration:none;'>COMPARE</a>\n";
    $message.=         "</div>\n";
    $message.=         "<div style='adding-top: 3em; width: 100%; text-align: center; padding-bottom: 4em; '>\n";
    $message.=             "<h1 style='font-family: 'Zilla Slab', serif; font-size: 2.4em; margin-bottom: .5em; '>Connect Us</h1>\n";
    $message.=             "<div style='width: 70%; height: auto; display: block; margin: auto; text-align: center; padding-top: 1em; '>\n";
    $message.=                 "<a href='facebook.com'>\n";
    $message.=                     "<img src='cid:facebook' alt='facebook' style='width: 10%; height: auto; margin-right: 1em; margin-left: 1em; display: inline-block!important; vertical-align: top!important; '>\n";
    $message.=                 "</a>\n";
    $message.=                 "<a href='twitter.com'>\n";
    $message.=                     "<img src='cid:twitter' alt='twitter' style='width: 10%; height: auto; margin-right: 1em; margin-left: 1em; display: inline-block!important; vertical-align: top!important; '>\n";
    $message.=                 "</a>\n";
    $message.=                 "<a href='instagram.com'>\n";
    $message.=                     "<img src='cid:instagram' alt='instagram' style='width: 10%; height: auto; margin-right: 1em; margin-left: 1em;' display: inline-block!important; vertical-align: top!important; \n";
    $message.=                 "</a>\n";
    $message.=             "</div>\n"; //close "mail_sns_icon"
    $message.=         "</div>\n"; //close "mail_sns"
    $message.=     "</div>\n"; //close "mail_body"
    $message.=     "<div style='padding-top: 1em; width: 100%; height: auto; text-align: center; '>\n";
    $message.=         "<div style='display: block; margin: auto; width: 300px; height: 60px; border-top: 1px gray solid; '>\n";
    $message.=             "<p style='font-family: 'Lato', sans-serif; font-size: .7em; color: #231f20; padding-top: 1em; '>© Copyright 2017, Group Project By Orange Team. </p>\n";
    $message.=         "</div>\n";
    $message.=     "</div>\n"; //close "mail_footer"
    $message.= "</div></body>\n"; //close "mail_template"


    $mail->Subject = 'Here is the subject';
    $mail->Body    = $message;
    $mail->AltBody = strip_tags($message);

    if(isset($_POST['subscribe'])) {
        $mail->send();
        //echo 'Message has been sent';
        echo '<script>window.location.replace("../index.php");</script>';
    }

} catch(Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}



// if(isset($_POST['subscribe'])) {
//     $to = $_POST['subscribe-email'];
//     $subject = "Thank you for Subscribe";
//
//     $headers = "MIME-Version: 1.0\r\n";
//     $headers.= "Content-type:text/html;charset=UTF-8\r\n";
//     $headers.= "From: info@canadaparties.ca \r\n";
//
//
//     $didMail = mail($to, $subject, $message, $headers);
//     if($didMail == true) {
//         echo "Thank you for subscribe";
//     }
//     else {
//         echo "Please Try Again";
//     }
// }
// else {
//     echo "Fill in the blank";
// }

?>
