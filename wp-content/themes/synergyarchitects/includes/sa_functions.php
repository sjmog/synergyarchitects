<?php

function sa_standout_excerpt() {
	$output = get_the_excerpt();
	return do_shortcode(apply_filters('the_excerpt_rss', $output));
}