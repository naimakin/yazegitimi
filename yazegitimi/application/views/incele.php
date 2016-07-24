<!-- Page Content Begins -->

<div class="col-md-8 filter-left">
    <?php
    foreach($okullar as $okul)
    {?>
    <h1> <?php echo $okul->ad; ?></h1>
    <div class="description">
        <div class="title-tools">
            <div class="col-md-4 p0">
                <i class="fa fa-globe">&nbsp;</i> <?php echo $okul->website; ?>
            </div>
            <div class="col-md-4 p0">
                <i class="fa fa-envelope">&nbsp;</i> <?php echo $okul->mail; ?>
            </div>
            <div class="col-md-4 p0">
                <i class="fa fa-phone-square">&nbsp;</i><?php echo $okul->telefon; ?>
            </div>
            <div class="col-md-12 p0">
                <i class="fa fa-map-marker">&nbsp;</i><?php echo $okul->adres; ?>
            </div>
            <div class="clear"></div>
        </div>
        <img src="<?php echo base_url()."img/".$okul->company_img; ?>" class="company-image">
        <p><?php echo $okul->tanitim; ?></p>

        <div class="comments">
            <?php
            foreach($yorumlar as $yorum)
            {?>
            <h3>Yorumlar</h3>
            <div class="comment-item">
                <div class="comment-title"><?php echo $yorum->adsoyad; ?></div>
                <div class="comment-desc"><?php echo $yorum->yorum; ?></div>
            </div> <?php } ?>
        </div>
            <div class="clear"></div>

        <div class="comment-write">
            <?php } ?>
        <h3>Bir Yorum Yaz</h3>
            <form name="comment_send" action="<?php echo base_url('Auth/yorum_ekle')?>" method="post">
                <div class="form-group"><input type="text" name="namesurname" class="form-control" placeholder="İsim Soyisim"></div>
                <div class="form-group"><input type="text" name="email" class="form-control" placeholder="Eposta"></div>
                <div class="form-group"><textarea class="form-control" name="comment_text" placeholder="Yorumunuz"></textarea></div>
                <input type="hidden" name="id" value="<?=$okul->id?>"/>
                <button class="btn btn-default"><input type="submit" value="gönder"></button>
            </form>
        </div>
    </div>
</div>

<div class="col-md-4 p0 map-cont">

    <script type="widgetkit/map" data-id="wk-map57694dc9a6425" data-class="uk-img-preserve" data-style="width:auto; height:100%;">
    {
		"maptypeid":"roadmap","maptypecontrol":false,"mapctrl":true,"zoom":"14","marker":2,"marker_icon":"","markercluster":false,"popup_max_width":300,"zoomwheel":true,"draggable":true,"directions":false,"disabledefaultui":"1","styler_invert_lightness":false,"styler_hue":"#f5eede","styler_saturation":0,"styler_lightness":0,"styler_gamma":0,"media":true,"image_width":"auto","image_height":"auto","media_align":"top","media_width":"1-2","media_breakpoint":"medium","media_border":"none","media_overlay":"icon","overlay_animation":"fade","media_animation":"scale","title":true,"content":true,"social_buttons":true,"title_size":"h3","text_align":"left","link":true,"link_style":"button","link_text":"Read more","link_target":false,"class":"","markers":[

			{"lat":41.2818532,"lng":36.3323494,"icon":"","title":"","content":"\n<div class=\"uk-text-left\">\n\n        <div class=\"uk-margin uk-text-center\"><img src=\"http://placehold.it/250x150\" class=\"uk-responsive-width  uk-overlay-scale\" alt=\"Map Image\"><\/div>\n    \n    \n        <h3 class=\"uk-h3 uk-margin-top-remove\">Belediye Ortaokulu<\/h3>\n    \n    \n        <div class=\"uk-margin\">Samsun Eğitim ve Araştırma Hastanesi 7/24 açık ve son teknoloji cihazlarla tedavi yöntemleri uygulamaktadır.<\/div>\n    \n    \n    \n    \n<\/div>"}

		],"directionsText":"Get Directions"
	}
</script>

</div><div class="clear"></div><div style="margin-top:-80px;"></div>

<!-- Page Content Ends -->