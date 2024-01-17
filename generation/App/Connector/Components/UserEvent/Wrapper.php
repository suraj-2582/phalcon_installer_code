<?php

namespace App\Connector\Components\UserEvent;

class Wrapper extends \App\Connector\Components\UserEvent
{

	public function __construct(\App\Core\Models\BaseMongo $baseMongo)  
	{
		parent::__construct($baseMongo);
	}
	public function setDi(\Phalcon\Di\DiInterface $di)  : void 
	{
		parent::setDi($di);
	}
}