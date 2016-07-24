<!-- Page Cover Begins -->
<div class="padding-top page-cover-sec" style="background:url(<?php echo base_url().'public/assets/temalar/okul/img/image-bg-text.jpg'?>) center center;">
    <div class="container">
        <div class="ver-sort">
            <h1 class="page-cover">Okul Kaydı</h1>
            <p>Şuan da okulunuzu sitemize kayıt etme aşamasındasınız. Lütfen gerekli tüm alanları doldurun.</p>
        </div>
    </div><div class="clear"></div>
</div>
<div class="clear"></div>
<!-- Page Cover Ends -->

<!-- Page Content Begins -->
<div class="application-form">
    <div class="container">
        <div class="col-md-8">
        <!-- if($this->session->userdata('tip')== "admin"){-->

                <?php
                if($this->session->userdata('loginuser')){     ?>
             <ul id="pc-menu">
                <li><a href="<?php echo base_url().'Okul/okul_guncelle'?>">Okul bilgilerini kaydet veya güncelle</a></li>
                <li><a href="<?php echo base_url().'Okul/kullanici_guncelle'?>">kullanıcı bilgilerini güncelle </a></li>
            </ul>

            <?php }else{ ?>
              <ul id="pc-menu">
              <h3>    Eğer üye iseniz, lütfen önce giriş yapınız!</h3><br>
                <a href="<?php echo base_url().'Okul/kullanici_kaydi'?>"><h4>üye ol</h4></a>
            </ul>
            <?php } ?>
        </div>
            <!--  //kullanıcı girişi yapılmiş ise } ?>-->
        <div class="col-md-4">
            <div class="contact_left">
                <h2 class="contact_page_headings">Sorun mu yaşıyorsunuz?</h2>
                <div class="single_contact">
                    <div class="single_contact_icon">
                        <span class="fa fa-microphone"></span>
                    </div>
                    <div class="single_contact_text">
                        <h2>Telefon</h2>
                        <a href="tel:+0001112222333">+000-111-2222-333</a> <br>
                        <a href="tel:+0001112222333">+000-111-2222-333</a>
                    </div>
                </div>
                <div class="single_contact">
                    <div class="single_contact_icon">
                        <span class="fa fa-envelope"></span>
                    </div>
                    <div class="single_contact_text">
                        <h2>Eposta</h2>
                        <a href="mailto:info@sitename.com">info@yazokulu.com</a> <br>
                        <a href="mailto:destek@sitename.com">destek@yazokulu.com</a>
                    </div>
                </div>
                <div class="single_contact">
                    <div class="single_contact_icon">
                        <span class="fa fa-map"></span>
                    </div>
                    <div class="single_contact_text">
                        <h2>Aylık</h2>
                        <p>Rastgele samsunda bir adres,<br>İlkadım, Samsun</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Content Ends -->
