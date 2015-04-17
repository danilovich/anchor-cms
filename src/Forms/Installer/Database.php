<?php

namespace Forms\Installer;

class Database extends \Forms\Form {

	public function init() {
		$this->addElement(new \Forms\Elements\Select('driver', [
			'label' => 'Database Driver',
			'value' => 'sqlite',
			'options' => ['sqlite' => 'SQLite', 'mysql' => 'MySQL']
		]));

		$this->addElement(new \Forms\Elements\Input('host', [
			'label' => 'Hostname',
			'value' => '127.0.0.1',
		]));

		$this->addElement(new \Forms\Elements\Input('port', [
			'label' => 'Port',
			'value' => '3306',
		]));

		$this->addElement(new \Forms\Elements\Input('user', [
			'label' => 'Username',
			'value' => 'root',
		]));

		$this->addElement(new \Forms\Elements\Input('pass', [
			'label' => 'Password',
		]));

		$this->addElement(new \Forms\Elements\Input('dbname', [
			'label' => 'Database Name',
			'value' => 'app/storage/anchor.sqlite',
		]));

		$this->addElement(new \Forms\Elements\Input('prefix', [
			'label' => 'Table Prefix',
			'value' => 'anchor_',
		]));

		$this->addElement(new \Forms\Elements\Submit('submit', [
			'value' => 'Next',
			'attributes' => ['class' => 'button primary'],
		]));
	}


}