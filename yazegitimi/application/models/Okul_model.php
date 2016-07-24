<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Okul_model extends CI_Model
{
//**************kullanıcıya ad ve şifresine göre veritabanından karşılaştırarak oturum açmak**************//
    function get_user($username, $password)
    {
        $this->db->select("*");
        $this->db->where("ad",$username);
        $this->db->where("sifre",$password);
        $query= $this->db->get("users");
        return $query->num_rows();

        //$sql = "select * from users where ad = $usr and sifre =  $pwd";
        //$query = $this->db->query($sql);
        //return $query->num_rows();
    }
    function getus($veriler)
    {
        $this->db->select("*");
        $this->db->where("ad",$veriler['username']);
        $this->db->where("sifre",$veriler['password']);
        $query= $this->db->get("users");
        $xx= $query->num_rows();

        if($xx > 0){
            $re=array();
            $gonder = $this->db->query('SELECT * FROM users');
            foreach ($gonder->result() as $row) {
                if ($row->ad == $veriler['username'] && $row->sifre == $veriler['password']) {
                    $re["id"] = $row->uyeID;
                    $re["username"] = $row->ad;
                    $re["tip"] = $row->uyeTP;
                    $re["password"] = $row->sifre;
                    $re["email"] = $row->email;
                    $re["sehir"] = $row->sehir;
                    $re["meslek"] = $row->meslek;
                    return $re;
            }
        }return $re;
        }
    }

//****************************************verileri eklme kısmı*******************************************//
    public function kullanici_ekle($kullanicilar)
    {
        return $this->db->insert("users",$kullanicilar);
    }
	function resimekle($data)
    {
        $this->db->insert('okul', $data);
        $flag = $this->db->affected_rows();
        if ($flag > 0) {
            return array(
                'type' => "başarılı",
                'message' => 'kayıt işlemi başarıyla gerçekleşti'
            );
        } else {
            return array(
                'type' => "hata",
                'message' => 'kayıt işlemi sırasında hata gerçekleşti'
            );
        }
    }
    public function iletisim($iletisim)
    {
        return $this->db->insert("iletisim",$iletisim);
    }
    public function yorum_ekle($yorumlar){

        return $this->db->insert("yorumlar",$yorumlar);
    }


//*************************** verileri cekme kısmı****************************************************************************************//
//***************************ilişki okullar ile kullanıcılar arasında****************************************************************************************//
 public function iliski_getir(){
       //$sorgu =$this->db->query("SELECT * FROM okul INNER JOIN users on okul.uyeID=users.uyeID ");
       $this->db->select("*");
       $this->db->join("users","users.uyeID=okul.uyeID","inner");
       $query=$this->db->get("okul");
       //echo $this->db->last_query();
       return $query->result();
   }
//SELECT * FROM okul LEFT JOIN users ON okul.userID=user.userID group by okul.id
//SELECT uyeler.uyeAd,duvar.duvaryazisi  from uyeler inner join duvar on duvar.uyeID=uyeler.id group by duvar.id


    public function iliski_getirr($name){

        $sql = $this->db->query("SELECT users.ad as uyeAd, users.uyeID as uye_id, okul.id as o_id,
                              okul.ad as o_ad, okul.website as o_site, okul.mail as o_mail,
                              okul.telefon as o_tel, okul.adres as o_adres, okul.tanitim as o_tanitim
                              FROM users, okul where users.uyeID=okul.uyeID and users.ad='$name'");
        $result=$sql->result();
        if ($result==null) {
            $sql = $this->db->query("SELECT users.ad as uyeAd, users.uyeID as uye_id FROM users where ad='$name'");
            return $sql->result();
        } else {
            return $sql->result();
        }
    }

    public function okul_getir()
    {
        $this->db->select("*");
        $sorgu =$this->db->get("okul");
        return $sorgu->result();
    }
    public function okul_incele_getir($id){
        $this->db->select("*");
        $this->db->where("id",$id);
        $sorgu =$this->db->get("okul");
        return $sorgu->result();
    }
    public function yorum_getir($id)
    {
        $this->db->select("*");
        $this->db->where("okulid",$id);
        $sorgu =$this->db->get("yorumlar");
        return $sorgu->result();
}
    public function kullanici_getir()
    {
        $this->db->select("*");
        $sorgu =$this->db->get("users");
        return $sorgu->result();
    }
    public function kullanici_tip_getir()
    {
        $this->db->select("*");
        $this->db->where("uyeTP",1);
        $sorgu =$this->db->get("users");
        return $sorgu->result();
    }
    public function kullanici_acan_getir($u_id)
    {
      $this->db->select("*");
        $this->db->where("uyeID",$u_id);
        $sorgu =$this->db->get("users");
        return $sorgu->result();  /*
        $sql = $this->db->query("SELECT users.ad as uyeAd,users.email as uyeMail ,users.meslek as uyeMeslek
                              FROM users where uyeID='$u_id'");
        $result=$sql->result();*/
    }


    //*******************************verileri güncelleme kısım**********************************************//

    public function okul_guncelle($datam,$u_id){
        /*$this->db->where("uyeID",$o_id);
        $this->db->update('okul', $datam);*/
        $this->db->update('okul', $datam, array('uyeID' => $u_id));
    }
    public function kullanici_guncelle($datam,$u_id){
        /*$this->db->where("uyeID",$o_id);
        $this->db->update('okul', $datam);*/
        $this->db->update('users', $datam, array('uyeID' => $u_id));
    }
}
