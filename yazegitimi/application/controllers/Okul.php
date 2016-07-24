<?php
//sayfalara yönlendirme yaptığım kontroller dosyası
defined('BASEPATH') OR exit('No direct script access allowed');

class Okul extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Okul_model');
    }
//kullanıcıya session atayarak giriş yapmasını sağlamak
    public function logn(){
        $username = $this->input->post("username");
        $password = $this->input->post("password");

        $veriler['username']=$username;
        $veriler['password']=$password;

        $usr_result = $this->Okul_model->getus($veriler);

       if ($veriler['username']==$usr_result['username' ])
        {
            //set the session variables
            $sessiondata = array(
                'id' => $usr_result['id'],
                'username' => $usr_result['username'],
                'tip' => $usr_result['tip'],
                'password' => $usr_result['password'],
                'email' => $usr_result['email'],
                'sehir' => $usr_result['sehir'],
                'meslek' => $usr_result['meslek'],
                'loginuser' => TRUE
            );
            $this->session->set_userdata($sessiondata);
            redirect(base_url('Okul/okull'));
        }else{
            redirect(base_url());
        }
    }
    public function cikis(){
        $this->session->unset_userdata('loginuser');
        $this->session->unset_userdata('username');
        redirect(base_url());
    }

//yaz eğitim anasayfası (1 sayfa)
    public function index()
    {
        $data["okullar"] =$this->Okul_model->okul_getir();
        $data["kullanicilar"] =$this->Okul_model->kullanici_tip_getir();
        $data["iliski"] =$this->Okul_model->iliski_getir();

        $this->load->view('header');
        $this->load->view('content',$data);
        $this->load->view('footer');
    }
//kullanıcının giriş yapmıssa okul ekleme yapabilmesi(2. sayfa)
    public function okull(){
            $this->load->view('header');
            $this->load->view('okull');
            $this->load->view('footer');
    }
    public function kullanici_guncelle(){
        $veriler['username'] = $this->session->userdata('username');
        $veriler['password'] = $this->session->userdata('password');
        $re =$this->okul_model->getus($veriler);
        $u_id=$re["id"];//bu değişkene göre modelde güncelleme yapcem

        $data_['kullanici']=$this->Okul_model->kullanici_acan_getir($u_id);
            
            $this->load->view('header');
            $this->load->view('kullanici_guncelle_view',$data_);
            $this->load->view('footer');
    }
    public function okul_guncelle(){
        $user=$this->session->userdata("loginuser");
        $username=$this->session->userdata("username");
        $data["iliski"] =$this->Okul_model->iliski_getirr($username);
        foreach($data['iliski'] as $il){
            $data['uyeAd']=$il->uyeAd;
            $data['uye_id']=$il->uye_id;
            if ($il->o_id != null) {
                $data['o_id']=$il->o_id;
                $data['o_ad']=$il->o_ad;
                $data['o_site']=$il->o_site;
                $data['o_mail']=$il->o_mail;
                $data['o_tel']=$il->o_tel;
                $data['o_adres']=$il->o_adres;
                $data['o_tanitim']=$il->o_tanitim;
                $data['durum']="guncelle"; // duruma göre okull.php viewsine
            } else {
                $data['durum']="yeni";
            }

        }
        if (isset($user)){
            $this->load->view('header');
            $this->load->view('okul_guncelle_view',$data);
            $this->load->view('footer');
        }else{
            $this->load->view('header');
            $this->load->view('okul_kaydi');
            $this->load->view('footer');
        }
    }
//okulları inceleme sayfası okulun bilgileri ve yorumlar getirilecek
    public function incele()
    {
        $id = $_GET[id];

        $data["okullar"] =$this->Okul_model->okul_incele_getir($id);
        $data["yorumlar"] =$this->Okul_model->yorum_getir($id);
        $this->load->view('header');
        $this->load->view('incele',$data);
        $this->load->view('footer');
    }
//statik reklam ve sponsorluk sayfası(3.sayfa)
    public function reklam(){
        $this->load->view('header');
        $this->load->view('reklam');
        $this->load->view('footer');
    }
    public function kullanici_kaydi(){
        $this->load->view('header');
        $this->load->view('okul_kaydi');
        $this->load->view('footer');
    }
//iletişim sayfası
    public function iletisim(){
        $this->load->view('header');
        $this->load->view('iletisim');
        $this->load->view('footer');
    }

}



?>