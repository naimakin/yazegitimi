<!-- Page Cover Begins -->
<div class="padding-top page-cover-sec" style="background:url(./img/image-bg-text.jpg) center center;">
    <div class="container">
        <div class="ver-sort">
            <h1 class="page-cover">İletişim</h1>
            <p>Bizimle iletişim kurmak istiyorsanız lütfen aşağıda ki formu doldurunuz.</p>
        </div>
    </div><div class="clear"></div>
</div>
<div class="clear"></div>
<!-- Page Cover Ends -->

<!-- Page Content Begins -->
<div class="application-form">
    <div class="container">
        <div class="col-md-8">
            <form action="<?php echo base_url()?>Auth/iletisim" name="contact-form-ajax" id="contact-form-ajax"  method="post" enctype="multipart/form-data">
                <div id="name-result-text" class="result_class"></div><input type="text" name="name" class="input-contact" placeholder="İsim Soyisim:">
                <div id="email-result-text" class="result_class"></div><input type="text" name="email" class="input-contact email_err" placeholder="Eposta:">
                <div id="subject-result-text" class="result_class"></div><input type="text" name="subject" class="input-contact" placeholder="Konu:">
                <div id="security-result-text" class="result_class"></div><input type="text" name="security" class="input-contact" placeholder="8+2 = ?">
                <div id="yourmessage-result-text" class="result_class"></div><textarea name="yourmessage" class="textarea-contact" placeholder="Mesajınız:"></textarea>
                <input type="submit" value="gönder" class="contact-button" id="ajax-send">
                <div id="function_response"></div>
            </form>
        </div>
        <div class="col-md-4">
            <div class="contact_left">
                <h2 class="contact_page_headings">İletişim Bilgilerimiz</h2>
                <div class="single_contact">
                    <div class="single_contact_icon">
                        <span class="fa fa-microphone"></span>
                    </div>
                    <div class="single_contact_text">
                        <h2>Telefon</h2>
                        <a href="tel:+0001112222333">+000-111-2222-333</a> <br>
                        <a href="tel:+0001112222333">+000-111-2222-333</a>
                    </div>
                </div> <!-- single_contact end -->
                <div class="single_contact">
                    <div class="single_contact_icon">
                        <span class="fa fa-envelope"></span>
                    </div>
                    <div class="single_contact_text">
                        <h2>Eposta</h2>
                        <a href="mailto:info@sitename.com">info@yazokulu.com</a> <br>
                        <a href="mailto:destek@sitename.com">destek@yazokulu.com</a>
                    </div>
                </div> <!-- single_contact end -->
                <div class="single_contact">
                    <div class="single_contact_icon">
                        <span class="fa fa-map"></span>
                    </div>
                    <div class="single_contact_text">
                        <h2>Adress</h2>
                        <p>Rastgele samsunda bir adres,<br>İlkadım, Samsun</p>
                    </div>
                </div> <!-- single_contact end -->
            </div>
        </div>
    </div>
</div>
<!-- Page Content Ends -->
