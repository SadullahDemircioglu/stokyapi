<?php include 'head.php';?>

<?php include 'header.php';?>


<!-- NAVİGASYON BAŞLANGICI -->
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12 naviBg">
                <ul class="navim">
                    <li><a href="index.html">Anasayfa</a><span>/</span></li>
                    <li><a href="iletisim.html">İletişim</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- NAVİGASYON BİTİŞİ -->

<!-- ORTA KISIM BAŞLANGICI -->
<div class="container-fluid mTop30">
    <div class="container mb20">
        <div class="row">
            <div class="col-md-12 col-xs-12 p0">
                <div class="row">

                    <div class="col-md-3 col-xs-12 mt0 ">
                        <h2 style="normal normal 18px 'Aller-Regular'" class="mt0">İletişim</h2>
                        <p><span style="border-bottom:1px solid #dfdfdf;font-weight: bold;">Korukent Ofis</span></p>
                        <p>Koru Sokak Korukent Sitesi <br>E-1 Blok D:2 Levazım / İSTANBUL</p>
                        <p>Tel: 0 212 212 63 23</p><br>

                        <!--<p><span style="border-bottom:1px solid #dfdfdf;font-weight: bold;">Zekeriyaköy Ofis</span></p>
                        <p>Zekeriyaköy Köyü,<br> 5. Cad. No:8, Sarıyer/İSTANBUL</p>
                        <p>Tel:0 212 202 72 80</p>-->
                    </div>

                    <div class="col-md-4">
                        <div class="col-md-12">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3008.391467279149!2d29.020282729360954!3d41.06043491955518!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x74bcf53c697473fb!2sKorukent+Sitesi!5e0!3m2!1str!2s!4v1435234109625" width="100%" height="370" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                        </div>
                    </div>

                    <div class="col-md-5 col-xs-12 pull-right ">
                        <h2 style="normal normal 18px 'Aller-Regular'"  class="mt0">İletişim Formu</h2>
                        <form class="form-horizontal mTop40" action="" id="iletisimForm" method="post">
                            <fieldset>
                                <!-- Name input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="name">Ad Soyad</label>
                                    <div class="col-md-9">
                                        <input id="name" name="ad" type="text" placeholder="Ad Soyad" class="form-control required">
                                        <p class="validate" style="font-size: 12px;color: red;margin-bottom: 0;">Lütfen bu alanı boş bırakmayınız.</p>
                                    </div>
                                </div>

                                <!-- Email input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="email">E-Posta</label>
                                    <div class="col-md-9">
                                        <input name="email" type="email" placeholder="E-Posta" class="form-control required">
                                        <p class="validate" style="font-size: 12px;color: red;margin-bottom: 0;">Lütfen bu alanı boş bırakmayınız.</p>

                                    </div>
                                </div>

                                <!-- Telefon input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="email">Telefon</label>
                                    <div class="col-md-9">
                                        <input id="tel3" name="tel" type="text" placeholder="Telefon" class="form-control required">
                                        <p class="validate" style="font-size: 12px;color: red;margin-bottom: 0;">Lütfen bu alanı boş bırakmayınız.</p>

                                    </div>
                                </div>

                                <!-- Message body -->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="message">Mesajınız</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control required"  name="aciklama" placeholder="Mesajınız" rows="5"></textarea>
                                        <p class="validate" style="font-size: 12px;color: red;margin-bottom: 0;">Lütfen bu alanı boş bırakmayınız.</p>

                                    </div>
                                </div>

                                <!-- Form actions -->
                                <div class="form-group">
                                    <div class="col-md-12 pad0 text-right">
                                        <div class="col-md-9">
                                            <span id="return_msg"></span>
                                        </div>
                                        <div class="col-md-3">
                                            <button type="submit" id="mailBtn" class="btn btn-primary btn-lg pull-right">Gönder</button>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- ORTA KISIM BİTİŞİ -->

<?php include 'footer.php';?>


</body>
</html>