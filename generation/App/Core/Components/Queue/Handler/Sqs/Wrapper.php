<?php

namespace App\Core\Components\Queue\Handler\Sqs;

class Wrapper extends \App\Core\Components\Queue\Handler\Sqs
{

	public function __construct(\App\Core\Components\Sqs $component = NULL)  
	{
		parent::__construct($component);
	}
	public function setDi(\Phalcon\Di\DiInterface $di)  : void 
	{
		parent::setDi($di);
	}
}