<?php
class NewsPage extends Page
{
	static $description = 'Shows news content';

	static $db = array(
		'Date' => 'Date'
	);

	static $icon = "themes/treeicons/news.png";

	public function getCMSFields()
	{
		$fields = parent::getCMSFields();

		$fields->addFieldToTab(
			'Root.Main',
			$dateField = new DateField('Date', 'Article Date (for example: 20/12/2010)'),
			'Content'
		);
		$dateField->setConfig('showcalendar', true);
		$dateField->setConfig('dateformat', 'dd/MM/YYYY');
		$fields->addFieldToTab('Root.Main', $dateField, 'Content');

		return $fields;
	}

	public function getCMSValidator()
	{
		return new RequiredFields('Date');
	}
}

class NewsPage_Controller extends Page_Controller
{

}