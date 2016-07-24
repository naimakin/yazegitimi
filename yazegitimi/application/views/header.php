<!doctype html>
<html>
<head>
    <title>CompFinder - Directory HTML Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Samsun Firma Rehberi Yaz Okulu Sitesidir." />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

    <!-- Mobile Menu CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'css/slicknav.min.css'?>"

    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'css/style.css'?>"


<body>
<header>
    <div class="container">
        <div class="col-md-3 p0">
            <a href="<?php echo base_url().'Okul/index'?>"><img src="<?php echo base_url().'img/logo.png'?>" class="logo" alt="Logo"></a>
        </div>
        <div class="col-xs-9 p0 menu-cont">
            <nav class="top-menu">
                <ul id="pc-menu">
                    <li><a href="<?php echo base_url().'Okul/okul_guncelle'?>">Okul Kaydı</a></li>
                    <li><a href="<?php echo base_url().'Okul/reklam'?>">Reklam Sponsorluk</a></li>
                    <li><a href="<?php echo base_url().'Okul/iletisim'?>">İletişim</a></li>
                    <li class="pc-hide"><a href="sign-in.html">Giriş Yap</a></li>
                    <li class="pc-hide"><a href="sign-up.html">Üye Ol</a></li>
                </ul>
                <?php

                if($this->session->userdata('loginuser')){     ?>
                    <div class="login-panel md-hide">
                        <p class="contact_page_headings">merhaba <?php echo $this->session->userdata('username');?></>
                            <a href="<?php echo base_url()?>Okul/cikis">cikiş yap</a>||
                            <a href="<?php echo base_url()?>Okul/kullanici_guncelle">profil</a>
                    </div>

               <?php }else{ ?>
                    <div class="login-panel md-hide">
                    <form name="login-form" action="<?php echo base_url()?>Okul/logn" class="login-form" method="post">
                        <input type="text" name="username" placeholder="Kullanıcı adı" />
                        <input type="password" name="password" placeholder="Şifre" />
                        <input type="submit" value="giriş yap">
                    </form>
                </div>
                <?php
                }
                ?>


            </nav>
        </div>
    </div>
</header>