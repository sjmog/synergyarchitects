<?php
class ProjectHolder extends Page
{
	static $description = 'Holds "Project Page" items';
	static $allowed_children = array('ProjectPage'); // enforces which types of page can be children of this page
	static $icon = "themes/treeicons/portfolio.png";
}

class ProjectHolder_Controller extends Page_Controller
{

}