<?php


$data[]=array();

if ($_POST){

    $dizin='assets/upload/files/';

    $ad=$_POST['unvan'];
    $adsoyad=$_POST['adsoyad'];
    $tel=$_POST['tel'];
    $aciklama=$_POST['aciklama'];
    $boyut=2097152;
    $foto=$_FILES['foto']['size'];
    $adet=count($_FILES['foto']['name']);
    $uzanti=array('image/jpeg','image/png','image/jpg');
    if ($ad=='' || $adsoyad=='' || $tel=='' || $aciklama=='' || $foto[0]==0){
        $data=array('message'=>'1');
    }elseif ($adet>5){
        $data=array('message'=>'2');
    }else{

            for ($i=0;$i<$adet;$i++){
            $isim=rand(100,10000000);
            if (!empty($_FILES['foto']['name'][$i])){
                if(!in_array($_FILES['foto']['type'][$i],$uzanti)){
                    $data=array('message'=>'3');
                }elseif ($_FILES['foto']['size'][$i]>$boyut){
                    $data=array('message'=>'4');
                    break;
                }else{
                    if(move_uploaded_file($_FILES['foto']['tmp_name'][$i],$dizin.date('Y_m_d').'_'.$isim.'.jpg')){
                        $data=array('message'=>'6');
                        

                    }else{
                        $data=array('message'=>'5');
                    }
                }
            }

        }
        if($data['message']!='6') {

            $dir = opendir("assets/upload/files/"); //Burada Hangi Klasörün içersini listelemek istiyorsak onu seçtik

            while (($dosya = readdir($dir))) // While Döngüsüne girerek dosyamızı okuyoruz.
            {

                if (!is_dir($dosya)) { // Bu if döngüsü dosya harici olan yani klasör yollarını gizlememizi sağlıyor. eyer if döngüsünü silerseniz klasör yolunu noktalarla gösterecektir..

                    unlink("assets/upload/files/" . $dosya);

                }
            }
            closedir($dir); //İşimiz Bitti
        }
    }
    if ($data['message']=='6'){
        $konu = "Yapı Elemanı İlan Ekleme Formu ".$ad;

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

        $message = "Satılmak istenen ürünler : Yapı Elemanları"." <br><br>";
        $message=$message."Firma Ünvanı : ".$ad."<br>";
        $message=$message."Ad Soyad : ".$adsoyad."<br>";
        $message=$message."Telefon : ".$tel."<br>";



        $dir = opendir("assets/upload/files/"); //Burada Hangi Klasörün içersini listelemek istiyorsak onu seçtik

        while (($dosya = readdir($dir))) // While Döngüsüne girerek dosyamızı okuyoruz.
        {

            if(! is_dir($dosya)){ // Bu if döngüsü dosya harici olan yani klasör yollarını gizlememizi sağlıyor. eyer if döngüsünü silerseniz klasör yolunu noktalarla gösterecektir..
                // $mail->AddAttachment( $dosya , $dosya );
                $mail->addAttachment("assets/upload/files/".$dosya);
            }
        }
        closedir($dir); //İşimiz Bitti

        $message=$message."Açıklama : ".$aciklama."<br>";


        $mail->Body = $message;
        if($mail->send()){
            $dir = opendir("assets/upload/files/"); //Burada Hangi Klasörün içersini listelemek istiyorsak onu seçtik

            while (($dosya = readdir($dir))) // While Döngüsüne girerek dosyamızı okuyoruz.
            {

                if(! is_dir($dosya)){ // Bu if döngüsü dosya harici olan yani klasör yollarını gizlememizi sağlıyor. eyer if döngüsünü silerseniz klasör yolunu noktalarla gösterecektir..

                    unlink("assets/upload/files/".$dosya);

                }
            }
            closedir($dir); //İşimiz Bitti
            $data=array('message'=>'7');

        }
    }

    echo json_encode($data);

}else{
    ?> <script language="javascript">location.href="index.html";</script> <?php
}


?>