<?php

namespace Ondrakub\MailerLite\DI;

use MailerLiteApi;
use Nette;


class MailerLiteExtension extends Nette\DI\CompilerExtension
{

	private $defaults = [
		'apiKey' => null
	];

	public function loadConfiguration()
	{
		$this->validateConfig($this->defaults);
		$builder = $this->getContainerBuilder();

		$builder->addDefinition($this->prefix('default'))
			->setFactory(MailerLiteApi\MailerLite::class, $this->getConfig());
	}
}
