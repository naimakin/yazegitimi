<?php
header('Content-Type: application/json');

	if( $_GET["type"] == "city" ) {

		echo json_encode(array(
			array("name" => "İstanbul", "code" => "istanbul"),
			array("name" => "Ankara", "code" => "ankara"),
			array("name" => "İzmir", "code" => "izmir"),
			array("name" => "Hatay", "code" => "hatay"),
			array("name" => "Samsun", "code" => "samsun"),
		));

	}

	if( $_GET["type"] == "district" and $_GET["city_id"] == "samsun" ) {

		echo json_encode(array(
			array("name" => "İlkadım", "district_id" => "ilkadim"),
			array("name" => "Ortaadım", "district_id" => "sonadım"),
			array("name" => "Sonadım", "district_id" => "sonadım"),
			array("name" => "Adımsoyadım", "district_id" => "adımsoyadım"),
			array("name" => "Hadım", "district_id" => "hadım"),
		));

	}

	if( $_GET["type"] == "company" and $_GET["district_id"] == "ilkadim" ) {

		echo '<!-- Item Begins -->
					<div class="item go-item-cont">
						<div class="col-xs-7 go-item" data-map-lat="41.276841" data-map-title="Ajax Sonuç 1" data-map-lng="36.3364443" data-map-img="http://placehold.it/250x150" data-map-desc="Buraya uygun bir desc gelecek veritabanından.">Ajax Sonuç 1</div>
						<div class="col-xs-2"><i class="fa fa-commenting-o"></i> 18</div>
						<a href="item-seo-title.html"><div class="col-xs-3 get-map"><i class="fa fa-eye"></i> İncele</div></a>
					</div>
					<!-- Item Ends -->';

		echo '<!-- Item Begins -->
					<div class="item go-item-cont">
						<div class="col-xs-7 go-item" data-map-lat="41.276841" data-map-title="Ajax Sonuç 2" data-map-lng="36.3364443" data-map-img="http://placehold.it/250x150" data-map-desc="Buraya uygun bir desc gelecek veritabanından.">Ajax Sonuç 2</div>
						<div class="col-xs-2"><i class="fa fa-commenting-o"></i> 18</div>
						<a href="item-seo-title.html"><div class="col-xs-3 get-map"><i class="fa fa-eye"></i> İncele</div></a>
					</div>
					<!-- Item Ends -->';
?>
<script>
	/* Reload Script */
	function reload_js(src) {
		$('script[src="' + src + '"]').remove();
		$('<script>').attr('src', src).appendTo("#yeni_map");
	}

	$(".go-item").on('click', function(){

		var cursorLat = $(this).attr("data-map-lat");
		var cursorLng = $(this).attr("data-map-lng");
		var cursorImage = $(this).attr("data-map-img");
		var cursorDesc = $(this).attr("data-map-desc");
		var cursorTitle = $(this).attr("data-map-title");;

		$("#yeni_map").html("");

		$('<script>').attr('type', "widgetkit/map").attr('data-id', "wk-map57694dc9a6429").attr('data-class', "uk-img-preserve").attr('data-style', "width:auto; height:100%;").html('{\"maptypeid\":\"roadmap\",\"maptypecontrol\":false,\"mapctrl\":true,\"zoom\":\"17\",\"marker\":2,\"marker_icon\":\"\",\"markercluster\":false,\"popup_max_width\":300,\"zoomwheel\":true,\"draggable\":true,\"directions\":false,\"disabledefaultui\":\"1\",\"styler_invert_lightness\":false,\"styler_hue\":\"#f5eede\",\"styler_saturation\":0,\"styler_lightness\":0,\"styler_gamma\":0,\"media\":true,\"image_width\":\"auto\",\"image_height\":\"auto\",\"media_align\":\"top\",\"media_width\":\"1-2\",\"media_breakpoint\":\"medium\",\"media_border\":\"none\",\"media_overlay\":\"icon\",\"overlay_animation\":\"fade\",\"media_animation\":\"scale\",\"title\":true,\"content\":true,\"social_buttons\":true,\"title_size\":\"h3\",\"text_align\":\"left\",\"link\":true,\"link_style\":\"button\",\"link_text\":\"Read more\",\"link_target\":false,\"class\":\"\",\"markers\":[{\"lat\":'+cursorLat+',\"lng\":'+cursorLng+',\"icon\":\"\",\"title\":\"\",\"content\":\"<div class=\'uk-text-left\'><div class=\'uk-margin uk-text-center\'><img src=\''+cursorImage+'\' class=\'uk-responsive-width  uk-overlay-scale\' alt=\'Map Image\'></div><h3 class=\'uk-h3 uk-margin-top-remove\'>'+cursorTitle+'</h3><div class=\'uk-margin\'>'+cursorDesc+'</div></div>\"}],\"directionsText\":\"Get Directions\"}').appendTo("#yeni_map");

		reload_js("./js/uikit-ca28891f.js");
		reload_js("./js/wk-scripts-d70b78f3.js");

	});
</script>
<?php
	}

?>