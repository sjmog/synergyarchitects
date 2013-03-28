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

/*******************************
 * Gallery (ripped off and modified from http://core.trac.wordpress.org/browser/trunk/wp-includes/media.php#L671)
 *******************************/
function sa_gallery_shortcode($attr) {
	$post = get_post();

	static $instance = 0;
	$instance++;

	if ( ! empty( $attr['ids'] ) ) {
		// 'ids' is explicitly ordered, unless you specify otherwise.
		if ( empty( $attr['orderby'] ) )
			$attr['orderby'] = 'post__in';
		$attr['include'] = $attr['ids'];
	}

	// Allow plugins/themes to override the default gallery template.
	$output = apply_filters('post_gallery', '', $attr);
	if ( $output != '' )
		return $output;

	// We're trusting author input, so let's at least make sure it looks like a valid orderby statement
	if ( isset( $attr['orderby'] ) ) {
		$attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
		if ( !$attr['orderby'] )
			unset( $attr['orderby'] );
	}

	extract(shortcode_atts(array(
		'order'      => 'ASC',
		'orderby'    => 'menu_order ID',
		'id'         => $post->ID,
		'itemtag'    => 'div',
		'icontag'    => 'div',
		'captiontag' => 'div',
		'columns'    => 4,
		'size'       => 'portfolio-thumb',
		'include'    => '',
		'exclude'    => ''
	), $attr));

	$id = intval($id);
	if ( 'RAND' == $order )
		$orderby = 'none';

	if ( !empty($include) ) {
		$_attachments = get_posts( array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );

		$attachments = array();
		foreach ( $_attachments as $key => $val ) {
			$attachments[$val->ID] = $_attachments[$key];
		}
	} elseif ( !empty($exclude) ) {
		$attachments = get_children( array('post_parent' => $id, 'exclude' => $exclude, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
	} else {
		$attachments = get_children( array('post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
	}

	if ( empty($attachments) )
		return '';

	if ( is_feed() ) {
		$output = "\n";
		foreach ( $attachments as $att_id => $attachment )
			$output .= wp_get_attachment_link($att_id, $size, true) . "\n";
		return $output;
	}

	$itemtag = tag_escape($itemtag);
	$captiontag = tag_escape($captiontag);
	$icontag = tag_escape($icontag);
	$valid_tags = wp_kses_allowed_html( 'post' );
	if ( ! isset( $valid_tags[ $itemtag ] ) )
		$itemtag = 'div';
	if ( ! isset( $valid_tags[ $captiontag ] ) )
		$captiontag = 'div';
	if ( ! isset( $valid_tags[ $icontag ] ) )
		$icontag = 'div';

	$columns = intval($columns);
	$itemwidth = $columns > 0 ? floor(100/$columns) : 100;
	$float = is_rtl() ? 'right' : 'left';

	$selector = "sa-gallery-{$instance}";

	$gallery_style = $gallery_div = '';
	if ( apply_filters( 'use_default_gallery_style', true ) )
		$gallery_style = "
		<style type='text/css'>
			#{$selector} {
				margin: auto;
				margin-top: 22px;
				background: #585858;
				border: 1px solid #585858;
			}
			#{$selector} .gallery-item {
				float: {$float};
				/*margin-top: 10px;*/
				text-align: center;
				width: {$itemwidth}%;
			}
			#{$selector} img {
				border: 1px solid #585858;
			}
			#{$selector} .gallery-caption {
				margin-left: 0;
			}
		</style>
		<!-- see sa_gallery_shortcode() in includesshort-codes.php -->";
	$size_class = sanitize_html_class( $size );

	$gallery_div = "<div id='$selector' class='gallery galleryid-{$id} gallery-columns-{$columns} gallery-size-{$size_class} clearfix'>";
	$output = apply_filters( 'gallery_style', $gallery_style . "\n\t\t" . $gallery_div );

	$image_main = wp_get_attachment_image_src(current($attachments)->ID, 'portfolio-main');
	$main_link = "<img src='{$image_main[0]}' alt='{current($attachments)->post_title}' class='attachment-portfolio-main' width='{$image_main[1]}' height='{$image_main[2]}' />";

	$output .= "
		<div class='gallery-main' id='gallery-main'>
			$main_link
		</div>
	";

	$i = 0;
	foreach ( $attachments as $id => $attachment ) {
		$image = wp_get_attachment_image_src($id, $size);
		$image_main = wp_get_attachment_image_src($id, 'portfolio-main');
		$link = "
			<a href='{$image_main[0]}'>
				<img src='{$image[0]}' alt='{current($attachments)->post_title}' class='attachment-portfolio-main' width='{$image[1]}' height='{$image[2]}' />
			</a>
		";

		$output .= "<{$itemtag} class='gallery-item'>";
		$output .= "
			<{$icontag} class='gallery-icon'>
				$link
			</{$icontag}>";
		if ( $captiontag && trim($attachment->post_excerpt) ) {
			$output .= "
				<{$captiontag} class='wp-caption-text gallery-caption'>
				" . wptexturize($attachment->post_excerpt) . "
				</{$captiontag}>";
		}
		$output .= "</{$itemtag}>";
		if ( $columns > 0 && ++$i % $columns == 0 )
			$output .= '<br style="clear: both" />';
	}

	$output .= "
			</div><br style='clear: both;' />
		\n";

	return $output;
}
add_shortcode('gallery', 'sa_gallery_shortcode');