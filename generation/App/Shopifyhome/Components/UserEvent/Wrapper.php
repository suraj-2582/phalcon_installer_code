<?php

namespace App\Shopifyhome\Components\UserEvent;

class Wrapper extends \App\Shopifyhome\Components\UserEvent
{

	public function setDi(\Phalcon\Di\DiInterface $di)  : void 
	{
		parent::setDi($di);
	}
}