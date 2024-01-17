<?php

namespace App\Core\Components\Sqs;

class Wrapper extends \App\Core\Components\Sqs
{

	public function setDi(\Phalcon\Di\DiInterface $di)  : void 
	{
		parent::setDi($di);
	}
}