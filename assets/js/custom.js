//  ======= FORM GİZLE GÖSTER ========
$(document).ready(function(){
    $(".ac").click(function(){
        $(".gayri").fadeIn(500);
        return false
    });
    $(".kapat").click(function(){
        $(".eleman").fadeIn(500);
        return false
    })
});
//  ======= FORM GİZLE GÖSTER ========

//  ======= İLAN EKLE ALANI BAŞLANGICI ========
$(document).ready(function(){
    $(".gayrimenkul-alani").hide();
    $(".eleman-alani").hide();
    $("#MailGonder").hide();
$('select[name="Urun-Turu"]').change(function() {
    var urunturu = $(this).val();
    if(urunturu=="1"){
        $(".eleman-alani").hide();
        $(".gayrimenkul-alani").show();
        $("#MailGonder").show();
    }else if(urunturu=="2") {
        $(".gayrimenkul-alani").hide();
        $(".eleman-alani").show();
        $("#MailGonder").show();
    }else{
        $("#MailGonder").hide();
        $(".gayrimenkul-alani").hide();
        $(".eleman-alani").hide();
    }

});

});
//  ======= İLAN EKLE ALANI BİTİŞİ ========

