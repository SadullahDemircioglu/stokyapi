<?php



$data[]=array();

if ($_POST){
    $ad=$_POST['ad'];
    $email=$_POST['email'];
    $tel=$_POST['tel'];
    $aciklama=$_POST['aciklama'];

    if ($ad=='' || $email=='' || $tel=='' || $aciklama==''){
        $data=array('message'=>'1');
    }else{
        $konu = "İletişim Formu ".$ad;

        require 'assets/phpmail/PHPMailerAutoload.php';
        require_once "assets/phpmail/class.smtp.php";
        require_once "assets/phpmail/class.phpmailer.php";
        $mail = new PHPMailer();
        $mail->isSMTP();
        //$mail->SMTPDebug = 2;
        $mail->Debugoutput = 'html';
        $mail->IsHTML(true);
        $mail->CharSet = "UTF-8";
        $mail->Host = 'smtp.mandrillapp.com';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->Username = 'olivefarmomia@hotmail.com.tr';
        $mail->Password = "xCHWr0XoJLTbUIFx7byfQQ";
        $mail->setFrom('sadullahd34@gmail.com', 'Stok Yapı Malzemeleri');
        //            $mail->addReplyTo('yavuz@omia.com.tr');
        //            $mail->addAddress('yavuz@omia.com.tr');
        $mail->addReplyTo('sadullahd34@gmail.com');
        $mail->addAddress('sadullahd34@gmail.com');
        $mail->Subject = $konu;

        $message = "İletişim Formu"." <br><br>";
        $message=$message."Adı Soyadı: ".$ad."<br>";
        $message=$message."Emaiş : ".$email."<br>";
        $message=$message."Telefon : ".$tel."<br>";
        $message=$message."Açıklama : ".$aciklama."<br>";


        $mail->Body = $message;
        if($mail->send()){
            $data=array('message'=>'7');

        }
    }

    echo json_encode($data);

}else{
    ?> <script language="javascript">location.href="index.html";</script> <?php
}


?>