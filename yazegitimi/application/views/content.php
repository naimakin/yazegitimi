<!-- Page Content Begins -->
<div class="col-md-6 filter-left">
    <div class="col-md-6">
        <input class="filter-input" name="city" id="city_ajax" placeholder="Şehir yazın" />
    </div>
    <div class="col-md-6">
        <input class="filter-input" name="district" id="district_ajax" placeholder="İlçe yazın" />
    </div>
    <div class="clear"></div>

    <div class="col-md-12">
        <div class="filter_result">
            <div class="col-xs-6 result-title">Okul Adı</div>
            <div class="col-xs-3 result-title tar">Okunma Sayısı</div>
            <div class="col-xs-3 result-title">Detay</div>
            <div class="clear"></div>
            <div class="table-hr"></div>

            <div class="results">

                <!-- Item Begins -->
                <div class="item go-item-cont">
                    <?php
                    foreach($kullanicilar as $kullanici) {
                        foreach ($okullar as $okul) {
                            if ($okul->uyeID == $kullanici->uyeID) {

                                ?>
                                <div class="col-xs-7 go-item" data-map-lat="41.276841"
                                     data-map-title="<?php echo $okul->ad; ?>" data-map-lng="36.3364443"
                                     data-map-img="http://placehold.it/250x150"
                                     data-map-desc="Buraya uygun bir desc gelecek veritabanından."><?php echo $okul->ad; ?></div>
                                <div class="col-xs-2"><i class="fa fa-eye"></i> 18</div>
                                <a href="<?php
                               echo base_url().'Okul/incele?id='.$okul->id;?>">
                                    <div class="col-xs-3 get-map"><i class="fa fa-arrow-circle-o-right"
                                                                     aria-hidden="true"></i> İncele

                                    </div>
                                </a>
                            <?php }
                        }
                    }?>
                </div>
                <!-- Item Ends -->
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6 p0 map-cont" id="map">
<!--
    < id="yeni_map iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8472.693092397705!2d36.23203672216553!3d41.34041137595468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x408878dbd7cb8971%3A0x6634e31f1dde0366!2s%C4%B0rfaniye+Anaokulu!5e0!3m2!1str!2str!4v1469268249938" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
-->
    <script>
        var map;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -34.397, lng: 150.644},
                zoom: 8
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDEmXLkeOVOLbn6Ez4hOIM1xQAf6VECreM &callback=initMap"
            async defer></script>
    <script type="widgetkit/map" id="hp_map_" data-id="wk-map57694dc9a6425" data-class="uk-img-preserve" data-style="width:auto; height:100%;">
	{	
		"maptypeid":"roadmap","maptypecontrol":false,"mapctrl":true,"zoom":"14","marker":2,"marker_icon":"","markercluster":false,"popup_max_width":300,"zoomwheel":true,"draggable":true,"directions":false,"disabledefaultui":"1","styler_invert_lightness":false,"styler_hue":"#f5eede","styler_saturation":0,"styler_lightness":0,"styler_gamma":0,"media":true,"image_width":"auto","image_height":"auto","media_align":"top","media_width":"1-2","media_breakpoint":"medium","media_border":"none","media_overlay":"icon","overlay_animation":"fade","media_animation":"scale","title":true,"content":true,"social_buttons":true,"title_size":"h3","text_align":"left","link":true,"link_style":"button","link_text":"Read more","link_target":false,"class":"","markers":[
		
			{"lat":41.276841,"lng":36.3364443,"icon":"","title":"","content":"\n<div class=\"uk-text-left\" id=\"map_id_1\">\n\n        <div class=\"uk-margin uk-text-center\"><img src=\"http://placehold.it/250x150\" class=\"uk-responsive-width  uk-overlay-scale\" alt=\"Map Image\"><\/div>\n    \n    \n        <h3 class=\"uk-h3 uk-margin-top-remove\">Samsun E.A.H<\/h3>\n    \n    \n        <div class=\"uk-margin\">Samsun Eğitim ve Araştırma Hastanesi 7/24 açık ve son teknoloji cihazlarla tedavi yöntemleri uygulamaktadır.<\/div>\n    \n    \n    \n    \n<\/div>"},

			{"lat":41.2821512,"lng":36.3388802,"icon":"","title":"","content":"\n<div class=\"uk-text-left\">\n\n        <div class=\"uk-margin uk-text-center\"><img src=\"http://placehold.it/250x150\" class=\"uk-responsive-width  uk-overlay-scale\" alt=\"Map Image\"><\/div>\n    \n    \n        <h3 class=\"uk-h3 uk-margin-top-remove\">Sema Cengiz Büberci Mesleki ve Teknik Anadolu Lisesi<\/h3>\n    \n    \n        <div class=\"uk-margin\">Lorem ipsum dolor sit amet consecture.<\/div>\n    \n    \n    \n    \n<\/div>"},

			{"lat":41.2818532,"lng":36.3323494,"icon":"","title":"","content":"\n<div class=\"uk-text-left\">\n\n        <div class=\"uk-margin uk-text-center\"><img src=\"http://placehold.it/250x150\" class=\"uk-responsive-width  uk-overlay-scale\" alt=\"Map Image\"><\/div>\n    \n    \n        <h3 class=\"uk-h3 uk-margin-top-remove\">Belediye Ortaokulu<\/h3>\n    \n    \n        <div class=\"uk-margin\">Samsun Eğitim ve Araştırma Hastanesi 7/24 açık ve son teknoloji cihazlarla tedavi yöntemleri uygulamaktadır.<\/div>\n    \n    \n    \n    \n<\/div>"}

		],"directionsText":"Get Directions"
	}
</script>


</div><div class="clear"></div>
<!-- Page Content Ends -->
<!-- Featured Contents Begins -->
<div class="featured">
    <div class="container">
        <h3 class="tac section-title"><strong>Seçilmiş</strong> Firmalar</h3>
        <h5 class="tac section-subtitle">Burada seçilmiş firmaları bulabilirsiniz. Bu firmalar sitemize sponsor olan kaliteli firmalardır.</h5>
        <div class="item-cont">
            <?php
            foreach($kullanicilar as $kullanici)
            {
                    foreach($okullar as $okul){
                        if($okul->uyeID==$kullanici->uyeID){
                    ?>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <img src="<?php echo base_url()."img/".$okul->company_img; ?>" class="comp-img" alt="Image Description" >
                            <a href="<?php echo base_url().'Okul/incele'; ?>"><h3><?php echo $okul->ad; ?></h3></a>
                            <p><?php echo $okul->tanitim; ?></p>
                            <form method="post">
                            <input type="hidden" name="islem" value="<?php echo $okul->id; ?>"/>
                            </form>
                            <a class="btn-comp-dtls" href="<?php echo base_url().'Okul/incele?id='.$okul->id;?>">İncele</a>
                        </div>
                    </div>
            <?php
                }}
            }?>
        </div>
    </div>
</div>
<!-- Featured Contents Ends -->

<!-- Join Us Begins -->
<div class="image-background-text">
    <div class="container tac">
        <h1>Sizde firmanızı sitemize eklemek ister misiniz?</h1>
        <h4>Eğer firmanızın sitemizde yayınlanmasını ve doğru hedef kitleye ulaşmasını isterseniz hizmetimizden faydalanabilirsiniz. Sitemiz firmanızı arama motorlarında daha yukarda gösterecek ve hizmetinize karizma katacaktır. Böylece potansiyel hedeflerinize daha kolay ulaşabileceksiniz.</h4>
        <a href="<?php echo base_url().'Okul/okull'?>" class="bg-img-button">Katılmak İstiyorum!</a>
    </div>
</div>
<!-- Join Us Ends -->

<!-- FAQ Begins -->
<div class="faq">
    <div class="container">
        <h3 class="tac section-title"><strong>Sık Sorulan</strong> Sorular</h3>
        <h5 class="tac section-subtitle">Takipçilerimizin en çok sorduğu soruları burada sizin için kısa kısa derledik. Yine de bir konuda<br /> ayrıntılı bilgi almak isterseniz bize yazın.</h5>
        <?php// echo var_dump($iliski);?>
        <div class="accordion-cont">
            <div class="col-md-6">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false">
                    <div class="panel panel-default">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="panel-heading">
                            <h4 class="panel-title">Sitenize firmamı nasıl ekleyebilirim?</h4>
                        </a>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" class="panel-heading">
                            <h4 class="panel-title">Hizmetiniz ücretli mi?</h4>
                        </a>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree" class="panel-heading">
                            <h4 class="panel-title">Firmam sitenizde ne süre kalacak?</h4>
                        </a>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="false">
                    <div class="panel panel-default">
                        <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse4" aria-expanded="true" aria-controls="collapse4" class="panel-heading">
                            <h4 class="panel-title">Başvurum ne sürede onaylanır?</h4>
                        </a>
                        <div id="collapse4" class="panel-collapse collapse in" role="tabpanel">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse5" aria-expanded="true" aria-controls="collapse5" class="panel-heading">
                            <h4 class="panel-title">Sitenizde her türlü firma onaylanır mı?</h4>
                        </a>
                        <div id="collapse5" class="panel-collapse collapse" role="tabpanel">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse6" aria-expanded="true" aria-controls="collapse6" class="panel-heading">
                            <h4 class="panel-title">Firmamı nasıl yayından kaldırabilirim?</h4>
                        </a>
                        <div id="collapse6" class="panel-collapse collapse" role="tabpanel">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- FAQ Ends -->