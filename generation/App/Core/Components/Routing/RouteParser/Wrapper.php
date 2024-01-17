<?php

namespace App\Core\Components\Routing\RouteParser;

class Wrapper extends \App\Core\Components\Routing\RouteParser
{
	public \Phalcon\Di\DiInterface $di;
	public function setDi(\Phalcon\Di\DiInterface $di)  : void 
	{
		$this->di = $di;
	}
	public function loadApis(\App\Core\Components\Helper $helper = NULL) : array 
	{
		
		$helper = $helper ?? $this->di->getObjectManager()->get(\App\Core\Components\Helper::class);
		return parent::loadApis($helper);
		
	}
}