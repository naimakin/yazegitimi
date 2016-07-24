<!-- Page Cover Begins -->

<div class="padding-top page-cover-sec" style="background:url(<?php echo base_url().'public/assets/temalar/okul/img/image-bg-text.jpg'?>) center center;">
    <div class="container">
        <div class="ver-sort">
            <h1 class="page-cover">Okul Kaydı</h1>
            <p> Aşağıdaki formu doldurarak kayıt olabilirsiniz.Kayıt olduktan sonra okul kaydını gerçekleştirebilirsiniz.Lütfen gerekli tüm alanları doldurun.</p>
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
            <h2 class="contact_page_headings">Profil Bilgileri</h2>
            <form  action="<?php echo base_url()?>Auth/kullanici_kayit"  name="contact-form-ajax" id="contact-form-ajax" method="post" enctype="multipart/form-data">
                <div class="result_class"></div><input type="text" name="name" class="input-contact" placeholder="Kullanıcı Adı:">

                <div class="col-md-6 p0">
                    <div class="result_class"></div><input type="password" name="password" class="input-contact email_err" placeholder="Şifre:">
                </div>
                <div class="col-md-6 p0">
                    <div class="result_class"></div><input type="password" name="passwoard" class="input-contact email_err" placeholder="Şifrenizi tekrar girin:">
                </div>
                <div class="result_class"></div><input type="text" name="email" class="input-contact" placeholder="Eposta Adresiniz">

                <select name="city" class="input-contact">
                    <option value="0">Lütfen yaşadığınız şehri seçin</option>
                    <option value="1">Adana</option>
                    <option value="2">Adıyaman</option>
                    <option value="3">Afyonkarahisar</option>
                    <option value="4">Ağrı</option>
                    <option value="5">Amasya</option>
                    <option value="6">Ankara</option>
                    <option value="7">Antalya</option>
                    <option value="8">Artvin</option>
                    <option value="9">Aydın</option>
                    <option value="10">Balıkesir</option>
                    <option value="11">Bilecik</option>
                    <option value="12">Bingöl</option>
                    <option value="13">Bitlis</option>
                    <option value="14">Bolu</option>
                    <option value="15">Burdur</option>
                    <option value="16">Bursa</option>
                    <option value="17">Çanakkale</option>
                    <option value="18">Çankırı</option>
                    <option value="19">Çorum</option>
                    <option value="20">Denizli</option>
                    <option value="21">Diyarbakır</option>
                    <option value="22">Edirne</option>
                    <option value="23">Elazığ</option>
                    <option value="24">Erzincan</option>
                    <option value="25">Erzurum</option>
                    <option value="26">Eskişehir</option>
                    <option value="27">Gaziantep</option>
                    <option value="28">Giresun</option>
                    <option value="29">Gümüşhane</option>
                    <option value="30">Hakkâri</option>
                    <option value="31">Hatay</option>
                    <option value="32">Isparta</option>
                    <option value="33">Mersin</option>
                    <option value="34">İstanbul</option>
                    <option value="35">İzmir</option>
                    <option value="36">Kars</option>
                    <option value="37">Kastamonu</option>
                    <option value="38">Kayseri</option>
                    <option value="39">Kırklareli</option>
                    <option value="40">Kırşehir</option>
                    <option value="41">Kocaeli</option>
                    <option value="42">Konya</option>
                    <option value="43">Kütahya</option>
                    <option value="44">Malatya</option>
                    <option value="45">Manisa</option>
                    <option value="46">Kahramanmaraş</option>
                    <option value="47">Mardin</option>
                    <option value="48">Muğla</option>
                    <option value="49">Muş</option>
                    <option value="50">Nevşehir</option>
                    <option value="51">Niğde</option>
                    <option value="52">Ordu</option>
                    <option value="53">Rize</option>
                    <option value="54">Sakarya</option>
                    <option value="55">Samsun</option>
                    <option value="56">Siirt</option>
                    <option value="57">Sinop</option>
                    <option value="58">Sivas</option>
                    <option value="59">Tekirdağ</option>
                    <option value="60">Tokat</option>
                    <option value="61">Trabzon</option>
                    <option value="62">Tunceli</option>
                    <option value="63">Şanlıurfa</option>
                    <option value="64">Uşak</option>
                    <option value="65">Van</option>
                    <option value="66">Yozgat</option>
                    <option value="67">Zonguldak</option>
                    <option value="68">Aksaray</option>
                    <option value="69">Bayburt</option>
                    <option value="70">Karaman</option>
                    <option value="71">Kırıkkale</option>
                    <option value="72">Batman</option>
                    <option value="73">Şırnak</option>
                    <option value="74">Bartın</option>
                    <option value="75">Ardahan</option>
                    <option value="76">Iğdır</option>
                    <option value="77">Yalova</option>
                    <option value="78">Karabük</option>
                    <option value="79">Kilis</option>
                    <option value="80">Osmaniye</option>
                    <option value="81">Düzce</option>
                </select>

                <div class="result_class"></div><input type="text" name="meslek" class="input-contact" placeholder="Meslek:">
                <input type="submit" value="gonder" class="contact-button">
                <div class="clear"><br /><br /></div>

            </form>
			</div>
<!-- if($this->session->userdata('tip')== "admin"){
	?>

                <h3>İlanı Bilgileri</h3><br />

                <div class="col-md-6 p0">

                    <div class="form-group">
                        <label>Okul Adı</label>
                        <p>Lütfen okulunuzun adını yazınız.</p>
                        <input type="text" name="ad" class="form-control">
                    </div><br />

                    <div class="form-group">
                        <label>Website</label>
                        <p>Lütfen okulunuzun resmi websitesini yazınız.</p>
                        <input type="text" name="website" class="form-control">
                    </div><br />

                    <div class="form-group">
                        <label>Email</label>
                        <p>Lütfen, okulunuzla ilgili iletişimi sağlayacak, sorulara cevap verecek kişinin eposta adresini yazınız.</p>
                        <input type="text" name="mail" class="form-control">
                    </div><br />

                    <div class="form-group">
                        <label>Telefon</label>
                        <p>Lütfen, okulunuzun telefon numarasını giriniz. </p>
                        <input type="text" name="telefon" class="form-control">
                    </div><br />

                </div>
                <div class="col-md-6">

                    <div class="form-group">
                        <label>Adres</label>
                        <p>Lütfen, okulunuzun açık adresini giriniz. </p>
                        <input type="textarea"  name="adres" class="form-control"></textarea>
                    </div><br />

                    <div class="form-group">
                        <label>Tanıtım Metni</label>
                        <p>Lütfen okulunuzu mümkün olduğu kadar açık bir dille tanıtın.</p>
                        <input type="textarea" name="tanitim" class="form-control" style="height:150px"></textarea>
                    </div><br />

                    <div class="form-group">
                        <label>Okul Fotoğrafı</label>
                        <p>Lütfen okulunuzu net gösteren bir fotoğraf yükleyin. Sadece .jpg uzantılı resimler kabul ediyoruz ve maksimum dosya boyutu 2 mb olmalı.</p>
                        <input type="file" name="company-img" />
                    </div><br />

                </div>
                <input type="submit" value="gonder" class="contact-button">
                <button type="button" class="contact-button">Güncelle</button>
            </form>
        </div>
          //kullanıcı girişi yapılmiş ise } ?>-->
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