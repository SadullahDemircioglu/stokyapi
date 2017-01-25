<?php

function baslik($id){
    $title=array(
        '/index.php'=>"Anasayfa",
        '/kurumsal.php' =>'Kurumsal',
        '/sistem-nasil-calisir.php' =>'Sistem Nasıl Çalışır',
        '/takastaki-urunler.php' =>'Takastaki Ürünler',
        '/iletisim.php' =>'İletişim',
        );
    return $title[$id];
}






if(@$_GET['id']!="32425"){ ?><script language="javascript">location.href="index.html";</script> <?php }?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KRW7TD2');</script>
<!-- End Google Tag Manager -->
    <title>SYM Stok Yapı Malzemeleri | <?php $a=baslik($_SERVER['SCRIPT_NAME']);  echo $a?></title>
    <meta name="description" content="Stok Yapı Malzemleri Betonarmesi bitmiş yapınızın, kalan tüm malzeme ihtiyacınızı, Gayrimenkul takasıyla tedariğini sağlamaktır. bu sistemde malzeme karşılığında vereceğiniz gayrimenkulun Ekspertiz değeri baz alınacaktır. Vereceğiniz Gayrimenkul değeri kadar ihtiyaç duyduğunuz yapı malzemesini SIFIR para ödeyerek alabilirsiniz. Bu sistemde nakit, çek vade kullanmadan dairenizin ekspertiz değeri kadar malzeme alabilirsiniz.">
    <meta charset="utf-8">
    <meta name="robots" content="noarchive"/>
    <meta name="googlebot" content="index, follow" />
    <meta name="google-site-verification" content="5URc8-sJOjjeNXESfJp-0QenyzwLUPEcKcKx_3o0dQU" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" type="text/css" media="all" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" media="all" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" media="all" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <script type="text/javascript" src="assets/js/jquery-1.12.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/custom.js"></script>
    <script type="text/javascript" src="assets/js/jquery.mask.js"></script>
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">

    <script type="text/javascript">
        $(document).ready(function () {
            $('#tel').mask('000-0000000');
            $('#tel1').mask('000-0000000');
            $('#tel2').mask('000-0000000');
            $('#tel3').mask('000-0000000');
        });
    </script>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KRW7TD2"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->