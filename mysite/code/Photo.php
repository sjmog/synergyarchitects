<?php
/**
 * Allows the upload of multiple images to pages
 * http://www.silverstripe.org/general-questions/show/20345#post315482
 */
class Photo extends Image
{
//	public static $has_one = array(
//		'Page' => 'Page'
//	);

	public static $many_many = array(
		'Page' => 'Page'
	);

}

class Photo_Controller extends ContentController
{

}