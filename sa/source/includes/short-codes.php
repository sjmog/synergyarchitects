<?php

/*******************************
 * Lede
 *******************************/
function sa_lede($atts, $content = null)
{
	return '<p class="lede">' . do_shortcode($content) . '</p>';
}
add_shortcode("lede", "sa_lede");

/*******************************
 * Highlight
 *******************************/
function sa_highlight($atts, $content = null)
{
	extract(shortcode_atts(array(
		"color" => 'orange'
	), $atts));

	switch ($color) {
		case 'orange':
			$atribs = 'class="highlight"';
			break;
		case 'grey':
			$atribs = 'class="highlight grey"';
			break;
		default:
			$atribs = 'style="color: '.$color.'"';
			break;
	}

	return '<span '.$atribs.'>' . $content . '</span>';
}
add_shortcode("highlight", "sa_highlight");