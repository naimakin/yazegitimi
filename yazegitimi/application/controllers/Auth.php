<?php
//formlardan gelen verileri veri tabanına ekleme işlemleri bu controllerda
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model("Okul_model");//constructerda ekleyeyim herdafasında ayrı metodlarda uğraşmayayım
    }

//kullanıcıları ekleme kısmı
    public function kullanici_kayit()
    {
        $ad = $this->input->post("name");
        $sifre = $this->input->post("password");
        $sifre2 = $this->input->post("passwoard");
        $email = $this->input->post("email");
        $sehir = $this->input->post("city");
        $meslek = $this->input->post("meslek");
        $kullanicilar = array(
            'ad' => $ad,
            'sifre' => $sifre,
            'email' => $email,
            'sehir' => $sehir,
            'meslek' => $meslek
        );
        if ($sifre == $sifre2) {
            $sonuc = $this->Okul_model->kullanici_ekle($kullanicilar);
            if($sonuc==true){
                $this->session->set_flashdata('mesaj','Kullanıcı bilgileriniz başarı ile eklendi. Lütfen yukarıda giriş bölümünde giriş yapınız.');
            }else{
                $this->session->set_flashdata('mesaj-hata','Okul bilgileriniz eklenemedi.Gerekli alanları tam doldurunuz');
            }
            redirect(base_url('Okul/kullanici_kaydi'));

        } else {
            $this->session->set_flashdata('mesaj-hata','Kullanıcı bilgileriniz eklenemedi.Şifre alanı aynı olmak zorunda');
            redirect(base_url('Okul/kullanici_kaydi'));
        }
    }

//okulları ekleme kısmı
    public function okul_kayit()
    {
        $config['upload_path'] = './img/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 1000;
        $config['max_width'] = 10240;
        $config['max_height'] = 7680;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('company-img')) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('mesaj-hata','okul bilgileriniz güncellenemedi.Lütfen resmin boyutunu ayarlayınız!!');
            redirect('okul/okul_guncelle', 'refresh');
        } else {
            $data = array('upload_data' => $this->upload->data());
            $image_name = $data['upload_data']['file_name'];

            $this->load->model("Okul_model");
            $veriler['username'] = $this->session->userdata('username');
            $veriler['password'] = $this->session->userdata('password');
            $re =$this->okul_model->getus($veriler);
            $u_id=$re["id"];

            $datav = array(
                'uyeID'=> $u_id,
                'ad' => $this->input->post("ad"),
                'website' => $this->input->post("website"),
                'mail' => $this->input->post("mail"),
                'telefon' => $this->input->post("telefon"),
                'adres' => $this->input->post("adres"),
                'tanitim' => $this->input->post("tanitim"),
                'company_img' => $image_name
            );
            if (!$datav['ad'] || !$datav['website'] || !$datav['mail'] || !$datav['telefon'] || !$datav['adres'] || !$datav['tanitim']) {
                echo "tüm alanları doldur";
                $this->session->set_flashdata('mesaj-hata','okul bilgileriniz eklenemedi.Gerekli alanları tam doldurunuz');
                //cookiesleri eklicem yerler
                redirect('okul/okul_guncelle');
            } else {
                $this->load->view('upload_success', $data);
                $sonuc =$this->okul_model->resimekle($datav,$u_id);
                if($sonuc==true){
                    $this->session->set_flashdata('mesaj','Okul bilgileriniz başarı ile eklendi. Bilgilerinizi kontrol edip gerekli güncellemeleri yapabilirsiniz.');
                }else{
                    $this->session->set_flashdata('mesaj-hata','Okul bilgileriniz eklenemedi.Gerekli alanları tam doldurunuz');

                }
                redirect(base_url('Okul/okul_guncelle'));
            }
        }
    }

//iletişim bilgilerini ekleme kısmı burada send mail sınıfını kullanarak maile gönderececğiz
    public function iletisim()
    {
        $ad = $this->input->post("name");
        $eposta = $this->input->post("email");
        $konu = $this->input->post("subject");
        $kod = $this->input->post("security");
        $mesaj = $this->input->post("yourmessage");


        $iletisim = array(
            'adsoyad' => $ad,
            'eposta' => $eposta,
            'konu' => $konu,
            'mesaj' => $mesaj
        );
        if ($kod == 10) {
            $this->Okul_model->iletisim($iletisim);
        } else {
            echo "doğrulama kodu hatalı";
        }
    }

//yorumları eklme
    public function yorum_ekle()
    {
        $ad = $this->input->post("namesurname");
        $eposta = $this->input->post("email");
        $yorum = $this->input->post("comment_text");
        $id = $this->input->post("id");

        $yorumlar = array(
            'adsoyad' => $ad,
            'eposta' => $eposta,
            'yorum' => $yorum,
            'okulid' =>$id
        );
        $yor=$this->Okul_model->yorum_ekle($yorumlar);
        if($yor){
            redirect(base_url().'Okul/incele?id='.$id);
        }
    }

//önceden okulunu ekleyen kullanıcı eklediği okulu güncelleme  metodu
    public function okulGuncelle()
    {
        $config['upload_path'] = './img/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 100;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('company-img')) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('mesaj-hata','okul bilgileriniz güncellenemedi.Lütfen resmin boyutunu ayarlayınız!!');
            redirect('okul/okul_guncelle');
        } else {
            $data = array('upload_data' => $this->upload->data());
            $image_name = $data['upload_data']['file_name'];

            //$o_id=$this->input->post("o_id");
            $this->load->model("Okul_model");
            $veriler['username'] = $this->session->userdata('username');
            $veriler['password'] = $this->session->userdata('password');
            $re =$this->okul_model->getus($veriler);
            $u_id=$re["id"];//bu değişkene göre modelde güncelleme yapcem

            $datam = array(
                'ad' => $this->input->post("ad"),
                'website' => $this->input->post("website"),
                'mail' => $this->input->post("mail"),
                'telefon' => $this->input->post("telefon"),
                'adres' => $this->input->post("adres"),
                'tanitim' => $this->input->post("tanitim"),
                'company_img' => $image_name
            );
            if (!$datam['ad'] || !$datam['website'] || !$datam['mail'] || !$datam['telefon'] || !$datam['adres'] || !$datam['tanitim']) {
                echo "tüm alanları doldur";
                //cookiesleri eklicem yerler
                redirect('okul/okul_guncelle', 'refresh');
            } else {
                $this->load->view('upload_success', $data);
                $sonuc = $this->okul_model->okul_guncelle($datam,$u_id);
                if($sonuc==true){
                    $this->session->set_flashdata('mesaj','Okul bilgileriniz başarı güncellendi');
                }else{
                    $this->session->set_flashdata('mesaj-hata','okul bilgileriniz güncellenemedi.Gerekli alanları tam doldurunuz');

                }
                redirect(base_url('Okul/okul_guncelle'));
            }
        }
    }
//kullanıcıları güncelleme kısmı
    public function kullanici_guncelle()
    {
        $ad = $this->input->post("name");
        $sifre = $this->input->post("password");
        $sifre2 = $this->input->post("passwoard");
        $email = $this->input->post("email");
        $sehir = $this->input->post("city");
        $meslek = $this->input->post("meslek");

        $veriler['username'] = $this->session->userdata('username');
        $veriler['password'] = $this->session->userdata('password');
        $re =$this->okul_model->getus($veriler);
        $u_id=$re["id"];//bu değişkene göre modelde güncelleme yapcem

        $kullanicilar = array(
            'ad' => $ad,
            'sifre' => $sifre,
            'email' => $email,
            'sehir' => $sehir,
            'meslek' => $meslek
        );
        if ($sifre == $sifre2) {
            $this->Okul_model->kullanici_guncelle($kullanicilar,$u_id);
            redirect(base_url('Okul/cikis'));
        } else {
            redirect(base_url('Okul/okulKaydi'));
        }
    }
}
