<?php

$data[]=array();

if ($_POST){
    $ad=$_POST['unvan1'];
    $adsoyad1=$_POST['adsoyad1'];
    $tel1=$_POST['tel1'];
    $tapu=$_FILES['tapu']['name'];
    $taputype=$_FILES['tapu']['type'];
    $taputmp=$_FILES['tapu']['tmp_name'];
    $tapusize=$_FILES['tapu']['size'];
    $fotoname=$_FILES['foto']['name'];
    $fototype=$_FILES['foto']['type'];
    $fototmp=$_FILES['foto']['tmp_name'];
    $fotosize=$_FILES['foto']['size'];

    $isim=rand(100,10000000);
    $uzanti=array('image/jpeg','image/png','image/jpg');
    $uzantifoto=array('application/pdf');
    $boyut=2097152;
    $boyutfoto=5242880;
    $dizin='assets/upload/files/';
    $aciklama1=$_POST['aciklama1'];
    $dosya=$dizin.basename($tapu);


    if ($ad=='' || $adsoyad1=='' || $tel1=='' || $aciklama1=='' || $tapu==''){
        $data=array('message'=>'1');
    }else{
        if($tapusize>$boyut){
            $data=array('message'=>'2');
        }else if (!in_array($taputype,$uzanti)){
            $data=array('message'=>'3');
        }else if($fotoname!=""){
            if($fotosize>$boyutfoto){
                $data=array('message'=>'4');
                $dir = opendir("assets/upload/files/"); //Burada Hangi Klasörün içersini listelemek istiyorsak onu seçtik

                while (($dosya = readdir($dir))) // While Döngüsüne girerek dosyamızı okuyoruz.
                {

                    if (!is_dir($dosya)) { // Bu if döngüsü dosya harici olan yani klasör yollarını gizlememizi sağlıyor. eyer if döngüsünü silerseniz klasör yolunu noktalarla gösterecektir..

                        unlink("assets/upload/files/" . $dosya);

                    }
                }
                closedir($dir); //İşimiz Bitti
            }else if (!in_array($fototype,$uzantifoto)){
                $data=array('message'=>'5');
                $dir = opendir("assets/upload/files/"); //Burada Hangi Klasörün içersini listelemek istiyorsak onu seçtik

                while (($dosya = readdir($dir))) // While Döngüsüne girerek dosyamızı okuyoruz.
                {

                    if (!is_dir($dosya)) { // Bu if döngüsü dosya harici olan yani klasör yollarını gizlememizi sağlıyor. eyer if döngüsünü silerseniz klasör yolunu noktalarla gösterecektir..

                        unlink("assets/upload/files/" . $dosya);

                    }
                }
                closedir($dir); //İşimiz Bitti
            }else{
                if(move_uploaded_file($fototmp,$dizin.date('Y_m_d').'_'.$isim.'.pdf')){
                    $a=move_uploaded_file($taputmp,$dizin.date('Y_m_d').'_'.$isim.'.jpg');
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
                    $message=$message."Ad Soyad : ".$adsoyad1."<br>";
                    $message=$message."Telefon : ".$tel1."<br>";



                    $dir = opendir("assets/upload/files/"); //Burada Hangi Klasörün içersini listelemek istiyorsak onu seçtik

                    while (($dosya = readdir($dir))) // While Döngüsüne girerek dosyamızı okuyoruz.
                    {

                        if(! is_dir($dosya)){ // Bu if döngüsü dosya harici olan yani klasör yollarını gizlememizi sağlıyor. eyer if döngüsünü silerseniz klasör yolunu noktalarla gösterecektir..
                            // $mail->AddAttachment( $dosya , $dosya );
                            $mail->addAttachment("assets/upload/files/".$dosya);
                        }
                    }
                    closedir($dir); //İşimiz Bitti

                    $message=$message."Açıklama : ".$aciklama1."<br>";


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
                }else{
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

        } else{
            $a=move_uploaded_file($taputmp,$dizin.date('Y_m_d').'_'.$isim.'.jpg');
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
            $message=$message."Ad Soyad : ".$adsoyad1."<br>";
            $message=$message."Telefon : ".$tel1."<br>";



            $dir = opendir("assets/upload/files/"); //Burada Hangi Klasörün içersini listelemek istiyorsak onu seçtik

            while (($dosya = readdir($dir))) // While Döngüsüne girerek dosyamızı okuyoruz.
            {

                if(! is_dir($dosya)){ // Bu if döngüsü dosya harici olan yani klasör yollarını gizlememizi sağlıyor. eyer if döngüsünü silerseniz klasör yolunu noktalarla gösterecektir..
                    // $mail->AddAttachment( $dosya , $dosya );
                    $mail->addAttachment("assets/upload/files/".$dosya);
                }
            }
            closedir($dir); //İşimiz Bitti

            $message=$message."Açıklama : ".$aciklama1."<br>";


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

    }



    echo json_encode($data);



}else{
    ?> <script language="javascript">location.href="index.html";</script> <?php
}


?>