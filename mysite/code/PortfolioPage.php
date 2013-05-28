<?php
class PortfolioPage extends Page
{
	static $description = 'This is the main container for all the "Project Holders"';
	static $allowed_children = array('ProjectHolder'); // enforces which types of page can be children of this page
	static $icon = "themes/treeicons/portfolio.png";
}

class PortfolioPage_Controller extends Page_Controller
{

}