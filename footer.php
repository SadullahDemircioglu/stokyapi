<!-- FOOTER BAŞLANGICI -->
<div class="container-fluid height1">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <img src="assets/img/004.jpg" alt="Stok Yapı Malzemeleri" class="mTop20" />
            </div>
            <div class="col-md-2 col-md-offset-1" style="padding-right:0;">
                <ul class="footerMenu">
                    <li><a href="#">Kapı Grubu</a></li>
                    <li><a href="#">Alçı ve alçıpan Grubu</a></li>
                    <li><a href="#">Seramik Grubu</a></li>
                    <li><a href="#">Granit Grubu</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <ul class="footerMenu">
                    <li><a href="kurumsal.html">Kurumsal</a></li>
                    <li><a href="takastaki-urunler.html">Takastaki Ürünler</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#myModal1">Talep Gir</a></li>
                    <li><a href="iletisim.html">İletişim</a></li>
                </ul>
            </div>
            <div class="col-md-4 pull-right">
                <div class="col-md-12 pRight0">
                    <div class="pull-right pRight0 padua151 sos">
                        <a href="#"><span>Facebook</span></a>
                        <a href="#"><span>Twitter</span></a>
                        <a href="#"><span>Instagram</span></a>
                    </div>
                </div>
                <div class="col-md-12 pRight0 teli text-right">
                    <p>0532 212 04 85</p>
                </div>
                <div class="col-md-12 pRight0 text-right aller">
                    <p>Koru Sokak Korukent Sitesi E-1 Blok D: 2 <br />34340 Levazım - Beşiktaş / İSTANBUL</p>
                    <p>Telefon: 0212 212 63 23</p>
                    <p class="mail"><a href="mailto:info@stokyapimalzemeleri.com">info@stokyapimalzemeleri.com</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid padua15 text-right">
    <div class="container">
        <div class="row">
            <a href="http://omia.com.tr/" target="_blank"><img src="assets/img/005.jpg" alt="Stok Yapı Malzemeleri" /></a>
        </div>
    </div>
</div>
<!--FOOTER BİTİŞİ -->



<!-- MODAL BAŞLANGICI -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header madlim1">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><img
                        src="assets/img/010.jpg" alt="Stok Yapı Malzemeleri" class="madlim2"/></button>
                <h4 class="modal-title" id="myModalLabel"><img src="assets/img/003.png" alt="Stok Yapı Malzemeleri" class="madlim3"/> İlan
                    ekle</h4>
            </div>
            <div class="modal-body madlim5">
                <div class="well well-sm madlim3 formgizle">
                    <div class="form-group usttaraf">
                        <label class="col-md-4 control-label fontum" style="padding: 0;" for="unvan">Satmak İstediğiniz
                            Ürünler</label>
                        <div class="col-md-8 selectbox1"  style="padding: 0 0 0 8px; margin-bottom: 15px;" >
                            <select class="form-control selectim " name="Urun-Turu">
                                <option value="3">Lütfen Seçiniz</option>
                                <option value="1"><a href="#" class="ac">Gayrimenkul</a></option>
                                <option value="2"><a href="#" class="kapat">Yapı Elemanları</a></option>
                            </select>
                        </div>
                    </div>
                    <div class="alanlar">
                        <form class="form-horizontal" enctype="multipart/form-data" id="gayri" action="" method="post">
                            <div class="gayrimenkul-alani">
                                <div class="form-group">
                                    <label class="col-md-4 control-label fontum" for="unvan">Firma
                                        Ünvanı</label>
                                    <div class="col-md-8">
                                        <input id="unvan" name="unvan1" type="text" class="form-control inputlar required">
                                        <p class="validate" style="font-size: 12px;color: red;margin-bottom: 0;">Lütfen bu alanı boş bırakmayınız.</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label fontum" for="adsoyad">Ad Soyad</label>
                                    <div class="col-md-8">
                                        <input id="adsoyad" name="adsoyad1" type="text"
                                               class="form-control inputlar required">
                                        <p class="validate" style="font-size: 12px;color: red;margin-bottom: 0;">Lütfen bu alanı boş bırakmayınız.</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label fontum" for="tel">Telefon</label>
                                    <div class="col-md-8">
                                        <input id="tel" name="tel1" type="text" class="form-control inputlar  required">
                                        <p class="validate" style="font-size: 12px;color: red;margin-bottom: 0;">Lütfen bu alanı boş bırakmayınız.</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label fontum" for="tel">Tapu Örneği</label>
                                    <div class="col-md-8">
                                        <input id="tel" name="tapu"  type="file"   class="form-control required">
                                        <p class="validate" style="font-size: 12px;color: red;margin-bottom: 0;">Lütfen bu alanı boş bırakmayınız.</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label fontum" for="tel">Ekspertiz Raporu<br>
                                        (Mevcutsa)</label>
                                    <div class="col-md-8">
                                        <input id="tel" name="foto" type="file" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label fontum" for="message">Açıklama</label>
                                    <div class="col-md-8">
                                        <textarea class="form-control required" id="message" name="aciklama1"
                                                  rows="5"></textarea>
                                        <p class="validate" style="font-size: 12px;color: red;margin-bottom: 0;">Lütfen bu alanı boş bırakmayınız.</p>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label fontum" for="tel"></label>
                                    <div class="col-md-8">
                                        <p class="hata1" style="font-size: 12px;color: red;margin-bottom: 0 ;"></p>

                                    </div>
                                </div>
                                <div id="mg2buton">
                                    <button type="submit" name="MailGonder" value="ok" id="MailGonder"
                                            style="margin-top: 10px" class="btn btn-lg gonder pull-right">Gönder
                                    </button>
                                </div>
                            </div>
                            <!-- GAYRİMENKUL BİTİŞİ -->
                        </form>
                        <form class="form-horizontal" enctype="multipart/form-data" id="yapi" action="" method="post">
                            <!-- ELEMAN BAŞLANGICI -->
                            <div class="eleman-alani">
                                <div class="form-group">
                                    <label class="col-md-4 control-label fontum" for="unvan">Firma
                                        Ünvanı</label>
                                    <div class="col-md-8">
                                        <input id="unvan" name="unvan" type="text"
                                               class="form-control inputlar required">
                                        <p class="validate" style="font-size: 12px;color: red;margin-bottom: 0;">Lütfen bu alanı boş bırakmayınız.</p>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label fontum" for="adsoyad">Ad Soyad</label>
                                    <div class="col-md-8">
                                        <input id="adsoyad" name="adsoyad" type="text"
                                               class="form-control inputlar required">
                                        <p class="validate" style="font-size: 12px;color: red;margin-bottom: 0;">Lütfen bu alanı boş bırakmayınız.</p>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label fontum" for="tel">Telefon</label>
                                    <div class="col-md-8">
                                        <input id="tele" name="tel" type="text" class="form-control inputlar required">
                                        <p class="validate" style="font-size: 12px;color: red;margin-bottom: 0;">Lütfen bu alanı boş bırakmayınız.</p>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label fontum" for="message">Verilecek Ürünler
                                        <br>(Lütfen Adet Bildiriniz)</label>
                                    <div class="col-md-8">
                                        <textarea class="form-control required" id="message" name="aciklama"
                                                  rows="3"></textarea>
                                        <p class="validate" style="font-size: 12px;color: red;margin-bottom: 0;">Lütfen bu alanı boş bırakmayınız.</p>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label fontum" for="tel">Resimler</label>
                                    <div class="col-md-8">
                                        <input name="foto[]" type="file" class="form-control  required" multiple>
                                        <p class="validate" style="font-size: 12px;color: red;margin-bottom: 0;">Lütfen bu alanı boş bırakmayınız.</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label fontum" for="tel"></label>
                                    <div class="col-md-8">
                                        <p class="hata" style="font-size: 12px;color: red;margin-bottom: 0 ;"></p>

                                    </div>
                                </div>

                                <div id="mg2buton">
                                    <button type="submit" name="MailGonder" value="ok" id="MailGonder"
                                            style="margin-top: 10px" class="btn btn-lg gonder pull-right">Gönder
                                    </button>
                                </div>
                            </div>
                            <!-- ELEMAN BİTİŞİ -->
                        </form>
                    </div>
                </div>
                <div class="alanlarok" style="display: none">
                    <div style="" align="center">
                        <img src="assets/img/onay.png" width="210" height="210" alt="Stok Yapı Malzemeleri"/><br><br>
                        <label class=" fontum"
                               style="text-align: center !important;line-height: 2;font-size: 17px">İlanınız
                            başarılı bir şekilde bize ulaştı.</label><br>
                        <label class="fontum"
                               style="text-align: center !important;line-height: 2;font-size: 17px">En kısa
                            zamanda size dönüş yapacağız.</label>
                        <br>
                        <img src="assets/img/001.jpg" alt="Stok Yapı Malzemeleri" class="mTop30">
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="bekle" style="display: none">
                <div style="" align="center">
                    <img src="assets/img/bekle.gif" alt="Stok Yapı Malzemeleri" class="mTop30" style="margin-bottom: 50px;">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL BİTİŞİ -->

<!-- MODAL TALEP BAŞLANGICI -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header madlim1">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><img
                        src="assets/img/010.jpg" alt="Stok Yapı Malzemeleri" class="madlim2"/></button>
                <h4 class="modal-title" id="myModalLabel"><img src="assets/img/003.png" alt="Stok Yapı Malzemeleri" class="madlim3"/> Talep
                    Gir</h4>
            </div>
            <div class="modal-body madlim5">
                <div class="well well-sm madlim3 formgizle">
                        <form class="form-horizontal" enctype="multipart/form-data" id="talep" action="" method="post">
                                <div class="form-group">
                                    <label class="col-md-4 control-label fontum" for="unvan">Firma
                                        Ünvanı</label>
                                    <div class="col-md-8">
                                        <input id="unvan" name="unvan" type="text" class="form-control inputlar required">
                                        <p class="validate" style="font-size: 12px;color: red;margin-bottom: 0;">Lütfen bu alanı boş bırakmayınız.</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label fontum" for="adsoyad">Ad Soyad</label>
                                    <div class="col-md-8">
                                        <input id="adsoyad" name="ad" type="text"
                                               class="form-control inputlar required">
                                        <p class="validate" style="font-size: 12px;color: red;margin-bottom: 0;">Lütfen bu alanı boş bırakmayınız.</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label fontum" for="tel">Telefon</label>
                                    <div class="col-md-8">
                                        <input id="tel2" name="tel" type="text" class="form-control inputlar  required">
                                        <p class="validate" style="font-size: 12px;color: red;margin-bottom: 0;">Lütfen bu alanı boş bırakmayınız.</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label fontum" for="message">Açıklama</label>
                                    <div class="col-md-8">
                                        <textarea class="form-control required" id="message" name="aciklama"rows="5"></textarea>
                                        <p class="validate" style="font-size: 12px;color: red;margin-bottom: 0;">Lütfen bu alanı boş bırakmayınız.</p>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label fontum" for="tel"></label>
                                    <div class="col-md-8">
                                        <p class="hata1" style="font-size: 12px;color: red;margin-bottom: 0 ;"></p>

                                    </div>
                                </div>
                            <div id="mg2buton">
                                    <button type="submit" name="MailGonder" value="ok" id="MailGonder"
                                            style="margin-top: 10px" class="btn btn-lg gonder pull-right">Gönder
                                    </button>
                                </div>
                            <!-- GAYRİMENKUL BİTİŞİ -->
                        </form>
                </div>
                <div class="alanlarok" style="display: none">
                    <div style="" align="center">
                        <img src="assets/img/onay.png" width="210" height="210" alt="Stok Yapı Malzemeleri"/><br><br>
                        <label class=" fontum"
                               style="text-align: center !important;line-height: 2;font-size: 17px">İlanınız
                            başarılı bir şekilde bize ulaştı.</label><br>
                        <label class="fontum"
                               style="text-align: center !important;line-height: 2;font-size: 17px">En kısa
                            zamanda size dönüş yapacağız.</label>
                        <br>
                        <img src="assets/img/001.jpg" alt="Stok Yapı Malzemeleri" class="mTop30">
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="bekle" style="display: none">
                <div style="" align="center">
                    <img src="assets/img/bekle.gif" alt="Stok Yapı Malzemeleri" class="mTop30" style="margin-bottom: 50px;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MODAL BİTİŞİ -->
<script type="text/javascript">
$(".validate").hide();$("form").submit(function(e){var $form=$(this);var posting=true;e.preventDefault();$("input.required, select.required , textarea.required").each(function(index,element){var $val=$(element).val();if($val==""){posting=false;if($(element).parent().attr("class")=="form-group"){$(element).parent().find("p.validate").fadeIn(500).css("color","red")}else{$(element).parent().parent().find("p.validate").fadeIn(500).css("color","red")}}else{if($(element).parent().attr("class")=="form-group"){$(element).parent().find("p.validate").fadeOut(500)}else{$(element).css("border","1px solid #ccc");$(element).parent().parent().find("p.validate").fadeOut(500)}}})});$("#gayri").on("submit",function(e){e.preventDefault();$(".formgizle").fadeOut();$(".bekle").fadeIn();$.ajax({url:"gayri.php",type:"POST",data:new FormData(this),contentType:false,processData:false,success:function(data){var data=JSON.parse(data);if(data.message!="6"&&data.message!="7"){$(".formgizle").fadeIn();$(".bekle").fadeOut()}if(data.message=="1"){$(".hata1").text('İstenilen Alanlar Boş Olmamalıdır.')}else if(data.message=="2"){$(".hata1").text('Tapu örneği en fazla 2 Mb olabilir')}else if(data.message=="3"){$(".hata1").text('Yalnızca jpeg png ve jpg uzantılı dosyalar yükleyiniz.')}else if(data.message=="4"){$(".hata1").text('Tapu örneği en fazla 5 Mb olabilir')}else if(data.message=="5"){$(".hata1").text('Ekspertiz Raporunu Pdf uzantılı yükleyiniz.')}else if(data.message=="7"){$(".bekle").fadeOut();$(".alanlarok").fadeIn();setTimeout(function(){location.reload()},1500)}else if(data.code==300){$(".izin").fadeIn()}}})});$("#talep").on("submit",function(e){e.preventDefault();$(".formgizle").fadeOut();$(".bekle").fadeIn();$.ajax({url:"talep.php",type:"POST",data:new FormData(this),contentType:false,processData:false,success:function(data){var data=JSON.parse(data);if(data.message!="6"&&data.message!="7"){$(".formgizle").fadeIn();$(".bekle").fadeOut()}if(data.message=="1"){$(".hata1").text('İstenilen Alanlar Boş Olmamalıdır.')}else if(data.message=="7"){$(".bekle").fadeOut();$(".alanlarok").fadeIn();setTimeout(function(){location.reload()},1500)}else if(data.code==300){$(".izin").fadeIn()}}})});$("#iletisimForm").on("submit",function(e){e.preventDefault();$.ajax({url:"iletisimform.php",type:"POST",data:new FormData(this),contentType:false,processData:false,success:function(data){var data=JSON.parse(data);if(data.message=="1"){$(".hata1").text('İstenilen Alanlar Boş Olmamalıdır.')}else if(data.message=="7"){$(".bekle").fadeOut();$(".alanlarok").fadeIn();setTimeout(function(){location.reload()},1500)}else if(data.code==300){$(".izin").fadeIn()}}})});$("#yapi").on("submit",function(e){var formData=new FormData($(this)[0]);var formDataSerialized=$(this).serialize();e.preventDefault();$(".formgizle").fadeOut();$(".bekle").fadeIn();$.ajax({url:"yapi.php",type:"POST",data:formData,contentType:false,processData:false,success:function(data){var data=JSON.parse(data);if(data.message!="6"&&data.message!="7"){$(".formgizle").fadeIn();$(".bekle").fadeOut()}if(data.message=="2"){$(".hata").text('En fazla 5 adet fotoğtaf gönderebilirsiniz.')}else if(data.message=="3"){$(".hata").text('Yalnızca jpeg png ve jpg uzantılı dosyalar yükleyiniz.')}else if(data.message=="4"){$(".hata").text("Lütfen 2'şer mb. tın üstünde dosya göndermeyiniz.")}else if(data.message=="5"){$(".hata").text('Beklenmedik bir hata oluşmuştur lütfen sonra tekrar deneyiniz.')}else if(data.message=="6"){$(".formgizle").fadeOut();$(".bekle").fadeIn()}else if(data.message=="1"){$(".hata").text('İstenilen Alanlar Boş Olmamalıdır.')}else if(data.message=="7"){$(".bekle").fadeOut();$(".alanlarok").fadeIn();setTimeout(function(){location.reload()},1500)}else if(data.code==300){$(".izin").fadeIn()}}})});function toggleChevron(e){$(e.target).prev('.panel-heading').find("i.indicator").toggleClass('fa fa-plus fa fa-minus')}$('#accordion').on('hidden.bs.collapse',toggleChevron);$('#accordion').on('shown.bs.collapse',toggleChevron);
</script>

</body>
</html>