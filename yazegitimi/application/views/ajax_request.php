<?php header('Content-Type: text/html; charset=utf-8'); ?>
<script>
	$(".results").on("DOMNodeInserted", function(){

		$(".go-item").on('click', function(){

			var cursorLat = $(this).attr("data-map-lat");
			var cursorLng = $(this).attr("data-map-lng");
			var cursorImage = $(this).attr("data-map-img");
			var cursorDesc = $(this).attr("data-map-desc");
			var cursorTitle = $(".go-item").html();

			$("#yeni_map").html("");

			$('<script>').attr('type', "widgetkit/map").attr('data-id', "wk-map57694dc9a6429").attr('data-class', "uk-img-preserve").attr('data-style', "width:auto; height:100%;").html('{\"maptypeid\":\"roadmap\",\"maptypecontrol\":false,\"mapctrl\":true,\"zoom\":\"17\",\"marker\":2,\"marker_icon\":\"\",\"markercluster\":false,\"popup_max_width\":300,\"zoomwheel\":true,\"draggable\":true,\"directions\":false,\"disabledefaultui\":\"1\",\"styler_invert_lightness\":false,\"styler_hue\":\"#f5eede\",\"styler_saturation\":0,\"styler_lightness\":0,\"styler_gamma\":0,\"media\":true,\"image_width\":\"auto\",\"image_height\":\"auto\",\"media_align\":\"top\",\"media_width\":\"1-2\",\"media_breakpoint\":\"medium\",\"media_border\":\"none\",\"media_overlay\":\"icon\",\"overlay_animation\":\"fade\",\"media_animation\":\"scale\",\"title\":true,\"content\":true,\"social_buttons\":true,\"title_size\":\"h3\",\"text_align\":\"left\",\"link\":true,\"link_style\":\"button\",\"link_text\":\"Read more\",\"link_target\":false,\"class\":\"\",\"markers\":[{\"lat\":'+cursorLat+',\"lng\":'+cursorLng+',\"icon\":\"\",\"title\":\"\",\"content\":\"<div class=\'uk-text-left\'><div class=\'uk-margin uk-text-center\'><img src=\''+cursorImage+'\' class=\'uk-responsive-width  uk-overlay-scale\' alt=\'Map Image\'></div><h3 class=\'uk-h3 uk-margin-top-remove\'>'+cursorTitle+'</h3><div class=\'uk-margin\'>'+cursorDesc+'</div></div>\"}],\"directionsText\":\"Get Directions\"}').appendTo("#yeni_map");

			reload_js("./js/uikit-ca28891f.js");
			reload_js("./js/wk-scripts-d70b78f3.js");

		});

	});
</script>