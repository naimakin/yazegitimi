<!-- Page Cover Begins -->
<div class="padding-top page-cover-sec" style="background:url(<?php echo base_url().'public/assets/temalar/okul/img/image-bg-text.jpg'?>) center center;">
    <div class="container">
        <div class="ver-sort">
            <h1 class="page-cover">Okul Kaydı</h1>
            <p>Şuan da okulunuzu sitemize kayıt etme aşamasındasınız. Lütfen gerekli tüm alanları doldurun.</p>
        </div>
    </div><div class="clear"></div>
</div>
<?php if($this->session->flashdata("mesaj") != false)
    echo '<div class="container alert alert-info">';
echo $this->session->flashdata("mesaj");
echo   "</div>";
?>
<?php if($this->session->flashdata("mesaj-hata") != false)
    echo '<div class="container alert alert-danger">';
echo $this->session->flashdata("mesaj-hata");
echo   "</div>";
?>
<div class="clear"></div>
<!-- Page Cover Ends -->

<!-- Page Content Begins -->
<div class="application-form">
    <div class="container">
        <div class="col-md-8">
            <!-- if($this->session->userdata('tip')== "admin"){-->
            <h3>İlanı Bilgileri</h3><br />
            <?php //var_dump($iliski);
            if ($durum=="guncelle"){?>
                <form action="<?php echo base_url() ?>Auth/okulGuncelle" name="contact-form-ajax"
                      id="contact-form-ajax" method="post" enctype="multipart/form-data">
                    <div class="col-md-6 p0">
                        <div class="form-group">
                            <label>Okul Adı</label>

                            <p>Lütfen okulunuzun adını yazınız.</p>
                            <input type="text" name="ad" value="<?=$o_ad?>" class="form-control">
                        </div>
                        <br/>

                        <div class="form-group">
                            <label>Website</label>

                            <p>Lütfen okulunuzun resmi websitesini yazınız.</p>
                            <input type="text" name="website" value="<?=$o_site?>" class="form-control">
                        </div>
                        <br/>

                        <div class="form-group">
                            <label>Email</label>

                            <p>Lütfen, okulunuzla ilgili iletişimi sağlayacak, sorulara cevap verecek kişinin
                                eposta
                                adresini yazınız.</p>
                            <input type="text" name="mail" value="<?=$o_mail?>" class="form-control">
                        </div>
                        <br/>

                        <div class="form-group">
                            <label>Telefon</label>

                            <p>Lütfen, okulunuzun telefon numarasını giriniz. </p>
                            <input type="text" name="telefon" value="<?= $o_tel?>" class="form-control">
                        </div>
                        <br/>

                    </div>
                    <div class="col-md-6">

                        <div class="form-group">
                            <label>Adres</label>

                            <p>Lütfen, okulunuzun açık adresini giriniz. </p>
                            <input type="textarea" name="adres" value="<?= $o_adres?>" class="form-control"></textarea>
                        </div>
                        <br/>

                        <div class="form-group">
                            <label>Tanıtım Metni</label>

                            <p>Lütfen okulunuzu mümkün olduğu kadar açık bir dille tanıtın.</p>
                            <input type="textarea" name="tanitim" value="<?=$o_tanitim?>"  class="form-control"
                                   style="height:150px"></textarea>
                        </div>
                        <br/>

                        <div class="form-group">
                            <label>Okul Fotoğrafı</label>

                            <p>Lütfen okulunuzu net gösteren bir fotoğraf yükleyin. Sadece .jpg uzantılı
                                resimler
                                kabul ediyoruz ve maksimum dosya boyutu 2 mb olmalı.</p>
                            <input type="file" name="company-img"/>
                        </div>
                        <br/>
					</div>
					<input type="submit" value="güncelle" class="contact-button">
                </form>
            <?php } else { ?>
                <form action="<?php echo base_url() ?>Auth/okul_kayit" name="contact-form-ajax"
                      id="contact-form-ajax" method="post" enctype="multipart/form-data">
                    <div class="col-md-6 p0">
                        <div class="form-group">
                            <label>Okul Adı</label>

                            <p>Lütfen okulunuzun adını yazınız.</p>
                            <input type="text" name="ad" class="form-control">
                        </div>
                        <br/>

                        <div class="form-group">
                            <label>Website</label>

                            <p>Lütfen okulunuzun resmi websitesini yazınız.</p>
                            <input type="text" name="website" class="form-control">
                        </div>
                        <br/>

                        <div class="form-group">
                            <label>Email</label>

                            <p>Lütfen, okulunuzla ilgili iletişimi sağlayacak, sorulara cevap verecek kişinin
                                eposta
                                adresini yazınız.</p>
                            <input type="text" name="mail" class="form-control">
                        </div>
                        <br/>

                        <div class="form-group">
                            <label>Telefon</label>

                            <p>Lütfen, okulunuzun telefon numarasını giriniz. </p>
                            <input type="text" name="telefon" class="form-control">
                        </div>
                        <br/>

                    </div>
                    <div class="col-md-6">

                        <div class="form-group">
                            <label>Adres</label>

                            <p>Lütfen, okulunuzun açık adresini giriniz. </p>
                            <input type="textarea" name="adres" class="form-control"></textarea>
                        </div>
                        <br/>

                        <div class="form-group">
                            <label>Tanıtım Metni</label>

                            <p>Lütfen okulunuzu mümkün olduğu kadar açık bir dille tanıtın.</p>
                            <input type="textarea" name="tanitim" class="form-control"
                                   style="height:150px"></textarea>
                        </div>
                        <br/>

                        <div class="form-group">
                            <label>Okul Fotoğrafı</label>

                            <p>Lütfen okulunuzu net gösteren bir fotoğraf yükleyin. Sadece .jpg uzantılı
                                resimler
                                kabul ediyoruz ve maksimum dosya boyutu 2 mb olmalı.</p>
                            <input type="file" name="company-img"/>
                        </div>
                        <br/>
                    </div>
                    <input type="submit" value="gonder" class="contact-button">
                </form>
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
<!-- Page Content Ends -->
