<?php
class NewsHolder extends Page
{
	static $description = 'Holds "News Page" items';
	static $allowed_children = array('NewsPage'); // enforces which types of page can be children of this page
	static $icon = "themes/treeicons/news.png";
}

class NewsHolder_Controller extends Page_Controller
{
	/**
	 * Generates link to RSS feed in header of the template
	 */
	public function init()
	{
		RSSFeed::linkToFeed($this->Link() . "rss");
		parent::init();
	}

	/**
	 * Generates RSS feed page
	 */
	public function rss()
	{
		$rss = new RSSFeed($this->Children(), $this->Link(), SiteConfig::current_site_config()->Title . ' News Feed');
		return $rss->outputToBrowser();
	}
}