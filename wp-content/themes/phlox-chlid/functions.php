<?php

function phlox_ch_assets_load() {
    wp_enqueue_style( 
		'phlox_ch-style', 
		get_stylesheet_uri()
	);
    wp_enqueue_style( 
		'homepage_css', 
		get_stylesheet_directory_uri(  ) . "/css/home.css"
	);
}

add_action("wp_enqueue_scripts", "phlox_ch_assets_load");

?>