<?php
class ContactPage extends Page
{

}

class ContactPage_Controller extends Page_Controller
{
	static $allowed_actions = array('Form');
	static $icon = "themes/treeicons/contact.png";

	public function Form()
	{
		$fields = new FieldList(
			new TextField('Name'),
			new EmailField('Email'),
			new TextareaField('Message')
		);
		$actions = new FieldList(
			new FormAction('submit', 'Submit')
		);
		$validator = new RequiredFields('Name', 'Email', 'Message');
		return new Form($this, 'Form', $fields, $actions, $validator);
	}

	public function submit($data, $form)
	{
		$email = new Email();

		$email->setTo('ghost@ghostds.com');
		$email->setFrom($data['Email']);
		$email->setSubject("Contact Message from {$data["Name"]}");

		$messageBody = "
            <p><strong>Name:</strong> {$data['Name']}</p>
            <p><strong>Message:</strong> {$data['Message']}</p>
        ";
		$email->setBody($messageBody);
		$email->send();
		return array(
			'Content' => '<p>Thank you for your feedback.</p>',
			'Form' => ''
		);
	}
}